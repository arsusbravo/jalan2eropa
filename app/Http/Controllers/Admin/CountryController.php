<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CountryRequest;
use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class CountryController extends AdminController
{
    private const TEXT_FIELDS = ['title', 'international', 'latitude', 'longitude', 'keywords', 'description', 'short_desc', 'to_see', 'eatdrink', 'shopping', 'others'];

    public function index(Request $request): Response
    {
        $search = $request->string('q')->toString();

        return Inertia::render('admin/countries/index', [
            'filters' => ['q' => $search],
            'countries' => Inertia::scroll(Country::query()
                ->withCount('cities')
                ->when($search !== '', fn ($query) => $query->where('name', 'like', '%'.$search.'%'))
                ->orderBy('name')
                ->paginate(20)
                ->withQueryString()
                ->through(fn (Country $country): array => [
                    'id' => $country->id,
                    'name' => $country->name,
                    'slug' => $country->slug,
                    'active' => (bool) $country->active,
                    'places_count' => $country->cities_count,
                    'flag_url' => $country->flag_url,
                    'photo_url' => $country->photo_url,
                    'public_url' => route('countries.show', $country),
                ])),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('admin/countries/form', ['country' => null]);
    }

    public function store(CountryRequest $request): RedirectResponse
    {
        $data = $this->blankToEmpty($request->safe()->except('photo'), self::TEXT_FIELDS);
        $data['slug'] = ($data['slug'] ?? '') ?: Str::slug($data['name']);
        $data['codes'] = strtolower($data['codes']);

        $country = Country::query()->create($data);

        $this->storePhoto($request, $country);
        $this->done('Country created.');

        return to_route('admin.countries.edit', $country);
    }

    public function edit(Country $country): Response
    {
        return Inertia::render('admin/countries/form', [
            'country' => $country->only(['id', 'name', 'title', 'slug', 'international', 'codes', 'latitude', 'longitude', 'keywords', 'description', 'short_desc', 'to_see', 'eatdrink', 'shopping', 'others', 'active']) + [
                'photo_url' => $country->photo_url,
                'public_url' => route('countries.show', $country),
            ],
        ]);
    }

    public function update(CountryRequest $request, Country $country): RedirectResponse
    {
        $data = $this->blankToEmpty($request->safe()->except('photo'), self::TEXT_FIELDS);
        $data['slug'] = ($data['slug'] ?? '') ?: Str::slug($data['name']);
        $data['codes'] = strtolower($data['codes']);
        $oldSlug = $country->slug;

        $country->update($data);

        if ($oldSlug !== $country->slug && ! $request->hasFile('photo')) {
            $disk = Storage::disk('public');
            $old = 'images/countries/photos/'.$oldSlug.'.jpg';

            if ($disk->exists($old)) {
                $disk->move($old, 'images/countries/photos/'.$country->slug.'.jpg');
            }
        }

        $this->storePhoto($request, $country);
        $this->done('Country saved.');

        return to_route('admin.countries.edit', $country);
    }

    public function destroy(Country $country): RedirectResponse
    {
        if ($country->cities()->exists()) {
            $this->done('Move or delete this country\'s places first.', 'error');

            return back();
        }

        $country->delete();
        $this->done('Country deleted.');

        return to_route('admin.countries.index');
    }

    private function storePhoto(CountryRequest $request, Country $country): void
    {
        if ($request->hasFile('photo')) {
            $request->file('photo')->storeAs('images/countries/photos', $country->slug.'.jpg', 'public');
        }
    }
}
