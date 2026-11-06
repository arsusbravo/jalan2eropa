<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AffiliateRequest;
use App\Models\Affiliate;
use App\Support\AffiliateOffers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class AffiliateController extends AdminController
{
    public function index(): Response
    {
        return Inertia::render('admin/affiliates/index', [
            'programs' => Affiliate::query()
                ->orderByDesc('active')
                ->orderBy('sort')
                ->orderBy('name')
                ->get()
                ->map(fn (Affiliate $program): array => [
                    'id' => $program->id,
                    'name' => $program->name,
                    'categories' => $program->categories ?? [],
                    'url' => $program->url,
                    'active' => (bool) $program->active,
                    'has_search' => $program->search_template !== null && $program->search_template !== '',
                    'links_count' => $program->destinations()->count(),
                ]),
            'categoryLabels' => collect(AffiliateOffers::CATEGORIES)->map(fn (array $category): string => $category[0]),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('admin/affiliates/form', [
            'program' => null,
            'categoryLabels' => collect(AffiliateOffers::CATEGORIES)->map(fn (array $category): string => $category[0]),
        ]);
    }

    public function store(AffiliateRequest $request): RedirectResponse
    {
        $program = Affiliate::query()->create($this->payload($request));
        $this->done('Program created.');

        return to_route('admin.affiliates.edit', $program);
    }

    public function edit(Affiliate $affiliate): Response
    {
        return Inertia::render('admin/affiliates/form', [
            'program' => $affiliate->only(['id', 'name', 'slug', 'categories', 'url', 'search_template', 'hotel_search_template', 'description', 'active', 'sort']),
            'categoryLabels' => collect(AffiliateOffers::CATEGORIES)->map(fn (array $category): string => $category[0]),
        ]);
    }

    public function update(AffiliateRequest $request, Affiliate $affiliate): RedirectResponse
    {
        $affiliate->update($this->payload($request));
        $this->done('Program saved.');

        return to_route('admin.affiliates.edit', $affiliate);
    }

    public function destroy(Affiliate $affiliate): RedirectResponse
    {
        if ($affiliate->destinations()->exists()) {
            $this->done('Delete this program\'s links first.', 'error');

            return back();
        }

        $affiliate->delete();
        $this->done('Program deleted.');

        return to_route('admin.affiliates.index');
    }

    /**
     * @return array<string, mixed>
     */
    private function payload(AffiliateRequest $request): array
    {
        $data = $request->validated();
        $data['slug'] = ($data['slug'] ?? '') ?: Str::slug($data['name']);
        $data['url'] = (string) ($data['url'] ?? '');
        $data['categories'] = array_values($data['categories'] ?? []);
        $data['uid'] = '';
        $data['logo'] = '';

        return $data;
    }
}
