<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\PlaceRequest;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class PlaceController extends AdminController
{
    public const TYPES = ['tourist' => 'Tourist place', 'shopping' => 'Shopping', 'airport' => 'Airport', 'train station' => 'Train station'];

    private const TEXT_FIELDS = ['hotels', 'youtube', 'attractions', 'address'];

    public function index(Request $request): Response
    {
        $search = $request->string('q')->toString();
        $countryId = $request->integer('country_id') ?: null;
        $type = $request->string('type')->toString();

        return Inertia::render('admin/places/index', [
            'filters' => ['q' => $search, 'country_id' => $countryId, 'type' => $type],
            'countries' => Country::query()->orderBy('name')->get(['id', 'name']),
            'types' => self::TYPES,
            'places' => Inertia::scroll(City::query()
                ->with('country')
                ->when($search !== '', fn ($query) => $query->where('name', 'like', '%'.$search.'%'))
                ->when($countryId, fn ($query) => $query->where('country_id', $countryId))
                ->when(array_key_exists($type, self::TYPES), fn ($query) => $query->where('type', $type))
                ->orderBy('name')
                ->paginate(25)
                ->withQueryString()
                ->through(fn (City $place): array => [
                    'id' => $place->id,
                    'name' => $place->name,
                    'type' => $place->type_label,
                    'country' => $place->country?->name,
                    'thumb_url' => $place->thumb_url,
                    'public_url' => $place->country && $place->has_detail_page ? route('places.show', [$place->country, $place]) : null,
                ])),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('admin/places/form', [
            'place' => null,
            'countries' => Country::query()->orderBy('name')->get(['id', 'name']),
            'types' => self::TYPES,
        ]);
    }

    public function store(PlaceRequest $request): RedirectResponse
    {
        $data = $this->blankToEmpty($request->safe()->except('thumb_file'), self::TEXT_FIELDS);
        $data['slug'] = ($data['slug'] ?? '') ?: Str::slug($data['name']);
        $data['thumb'] = $this->uploadedThumb($request) ?? '';

        $place = City::query()->create($data);
        $this->done('Place created.');

        return to_route('admin.places.edit', $place);
    }

    public function edit(City $place): Response
    {
        return Inertia::render('admin/places/form', [
            'place' => $place->only(['id', 'country_id', 'name', 'slug', 'search_term', 'type', 'latitude', 'longitude', 'hotels', 'youtube', 'attractions', 'address']) + [
                'thumb_url' => $place->thumb_url,
                'public_url' => $place->country && $place->has_detail_page ? route('places.show', [$place->country, $place]) : null,
            ],
            'countries' => Country::query()->orderBy('name')->get(['id', 'name']),
            'types' => self::TYPES,
        ]);
    }

    public function update(PlaceRequest $request, City $place): RedirectResponse
    {
        $data = $this->blankToEmpty($request->safe()->except('thumb_file'), self::TEXT_FIELDS);
        $data['slug'] = ($data['slug'] ?? '') ?: Str::slug($data['name']);

        if ($thumb = $this->uploadedThumb($request)) {
            $data['thumb'] = $thumb;
        }

        $place->update($data);
        $this->done('Place saved.');

        return to_route('admin.places.edit', $place);
    }

    public function destroy(City $place): RedirectResponse
    {
        $place->delete();
        $this->done('Place deleted.');

        return to_route('admin.places.index');
    }

    private function uploadedThumb(PlaceRequest $request): ?string
    {
        if (! $request->hasFile('thumb_file')) {
            return null;
        }

        return basename($request->file('thumb_file')->store('images/article/places', 'public'));
    }
}
