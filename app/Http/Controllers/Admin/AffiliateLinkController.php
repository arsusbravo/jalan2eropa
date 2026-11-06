<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AffiliateLinkRequest;
use App\Models\Affiliate;
use App\Models\AffiliateDestination;
use App\Models\City;
use App\Models\Country;
use App\Support\AffiliateLink;
use App\Support\AffiliateOffers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AffiliateLinkController extends AdminController
{
    public function index(Request $request): Response
    {
        $search = $request->string('q')->toString();
        $affiliateId = $request->integer('affiliate_id') ?: null;
        $countryId = $request->integer('country_id') ?: null;
        $kind = $request->string('kind')->toString();

        return Inertia::render('admin/affiliate-links/index', [
            'filters' => ['q' => $search, 'affiliate_id' => $affiliateId, 'country_id' => $countryId, 'kind' => $kind],
            'programs' => Affiliate::query()->orderBy('name')->get(['id', 'name']),
            'countries' => Country::query()->orderBy('name')->get(['id', 'name']),
            'links' => Inertia::scroll(AffiliateDestination::query()
                ->with(['affiliate', 'country'])
                ->when($search !== '', fn ($query) => $query->where('label', 'like', '%'.$search.'%'))
                ->when($affiliateId, fn ($query) => $query->where('affiliate_id', $affiliateId))
                ->when($countryId, fn ($query) => $query->where('country_id', $countryId))
                ->when(in_array($kind, ['city', 'attraction'], true), fn ($query) => $query->where('kind', $kind))
                ->orderBy('country_id')
                ->orderBy('label')
                ->orderBy('affiliate_id')
                ->paginate(30)
                ->withQueryString()
                ->through(fn (AffiliateDestination $link): array => [
                    'id' => $link->id,
                    'label' => $link->label,
                    'kind' => $link->kind,
                    'category' => $link->category,
                    'program' => $link->affiliate?->name,
                    'country' => $link->country?->name,
                    'destination' => $link->destinationUrl(),
                    'test_url' => $link->affiliate && $link->affiliate->url !== '' && $link->destinationUrl() !== null
                        ? AffiliateLink::url($link->affiliate, $link->destinationUrl())
                        : null,
                ])),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('admin/affiliate-links/form', ['link' => null] + $this->options());
    }

    public function store(AffiliateLinkRequest $request): RedirectResponse
    {
        $link = AffiliateDestination::query()->create($this->payload($request));
        $this->done('Link created.');

        return to_route('admin.affiliate-links.edit', $link);
    }

    public function edit(AffiliateDestination $affiliateLink): Response
    {
        return Inertia::render('admin/affiliate-links/form', [
            'link' => $affiliateLink->only(['id', 'affiliate_id', 'country_id', 'city_id', 'category', 'kind', 'label', 'sort', 'query', 'url']),
        ] + $this->options());
    }

    public function update(AffiliateLinkRequest $request, AffiliateDestination $affiliateLink): RedirectResponse
    {
        $affiliateLink->update($this->payload($request));
        $this->done('Link saved.');

        return to_route('admin.affiliate-links.edit', $affiliateLink);
    }

    public function destroy(AffiliateDestination $affiliateLink): RedirectResponse
    {
        $affiliateLink->delete();
        $this->done('Link deleted.');

        return to_route('admin.affiliate-links.index');
    }

    /**
     * @return array<string, mixed>
     */
    private function options(): array
    {
        return [
            'programs' => Affiliate::query()->orderBy('name')->get(['id', 'name']),
            'countries' => Country::query()->orderBy('name')->get(['id', 'name']),
            'places' => City::query()->where('type', 'tourist')->orderBy('name')->get(['id', 'name', 'country_id']),
            'categories' => collect(AffiliateOffers::CATEGORIES)->map(fn (array $category): string => $category[0]),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function payload(AffiliateLinkRequest $request): array
    {
        return $request->validated() + ['sort' => 0];
    }
}
