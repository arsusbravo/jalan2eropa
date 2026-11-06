<?php

namespace App\Support;

use App\Models\Affiliate;
use App\Models\AffiliateDestination;
use App\Models\City;
use Illuminate\Support\Facades\Cache;

class PlannerData
{
    /**
     * All places the route planner can use, with coordinates and affiliate links.
     *
     * @return list<array{id: int, name: string, type: string, typeLabel: string, country: string, countrySlug: string, lat: float, lng: float, thumb: ?string, url: string, hotelUrl: ?string, links: list<array{name: string, url: string}>}>
     */
    public static function places(): array
    {
        return Cache::remember('planner.places', now()->addMinutes(10), fn (): array => self::build());
    }

    /**
     * Drop the cached place data after admin edits.
     */
    public static function flush(): void
    {
        Cache::forget('planner.places');
    }

    /**
     * @return list<array{id: int, name: string, type: string, typeLabel: string, country: string, countrySlug: string, lat: float, lng: float, thumb: ?string, url: string, hotelUrl: ?string, links: list<array{name: string, url: string}>}>
     */
    private static function build(): array
    {
        $programs = Affiliate::query()->active()->forCategory('tour')->orderBy('sort')->orderBy('id')->get();
        $curated = AffiliateDestination::query()
            ->where('kind', 'attraction')
            ->where('category', 'tour')
            ->whereNotNull('city_id')
            ->get()
            ->groupBy('city_id');
        $hotels = app(HotelLinker::class);

        return City::query()
            ->with('country')
            ->whereNotNull('country_id')
            ->where('latitude', '!=', '')
            ->where('longitude', '!=', '')
            ->orderBy('name')
            ->get()
            ->filter(fn (City $place): bool => $place->country !== null && is_numeric($place->latitude) && is_numeric($place->longitude))
            ->map(function (City $place) use ($programs, $curated, $hotels): array {
                $rows = ($curated->get($place->getKey()) ?? collect())->keyBy('affiliate_id');
                $term = $place->search_term ?: $place->name;

                $links = $place->type !== 'tourist' ? [] : $programs
                    ->map(function (Affiliate $program) use ($rows, $place): ?array {
                        $destination = $rows->get($program->getKey())?->destinationUrl()
                            ?? ($place->search_term ? AffiliateLink::fromTemplate($program->search_template, $place->search_term) : null);

                        return $destination === null ? null : ['name' => $program->name, 'url' => AffiliateLink::url($program, $destination)];
                    })
                    ->filter()
                    ->values()
                    ->all();

                return [
                    'id' => $place->getKey(),
                    'name' => $place->name,
                    'type' => $place->type,
                    'typeLabel' => $place->type_label,
                    'country' => $place->country->name,
                    'countrySlug' => $place->country->slug,
                    'lat' => (float) $place->latitude,
                    'lng' => (float) $place->longitude,
                    'thumb' => $place->thumb_url,
                    'url' => $place->has_detail_page ? route('places.show', [$place->country, $place]) : null,
                    'hotelUrl' => $hotels->url($term),
                    'links' => $links,
                ];
            })
            ->values()
            ->all();
    }
}
