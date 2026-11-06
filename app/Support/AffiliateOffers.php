<?php

namespace App\Support;

use App\Models\Affiliate;
use App\Models\AffiliateDestination;
use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Collection;

class AffiliateOffers
{
    /**
     * Display label and icon per category.
     *
     * @var array<string, array{string, string}>
     */
    public const CATEGORIES = [
        'hotel' => ['Hotel & penginapan', 'map-pin'],
        'tour' => ['Tur & tiket atraksi', 'camera'],
        'transfer' => ['Transfer bandara', 'route'],
        'car' => ['Sewa mobil', 'route'],
        'flight' => ['Tiket pesawat', 'route'],
        'esim' => ['eSIM & internet', 'sparkle'],
        'luggage' => ['Penitipan koper', 'suitcase'],
        'claims' => ['Klaim penerbangan', 'receipt'],
        'bike' => ['Sewa sepeda', 'route'],
    ];

    /**
     * Generic offers for a category, built from each program's search template.
     *
     * Programs without a search template are skipped: an offer must lead to a
     * specific search, never to a provider's homepage.
     *
     * @return Collection<int, array{program: Affiliate, url: string}>
     */
    public static function for(string $category, ?Country $country = null, int $limit = 3): Collection
    {
        $term = $country?->international ?: $country?->name ?: 'Europe';

        return Affiliate::query()->active()->forCategory($category)->orderBy('sort')->orderBy('id')->get()
            ->map(function (Affiliate $program) use ($term, $category): ?array {
                $destination = AffiliateLink::fromTemplate($category === 'hotel' ? ($program->hotel_search_template ?: $program->search_template) : $program->search_template, $term);

                return $destination === null ? null : ['program' => $program, 'url' => AffiliateLink::url($program, $destination)];
            })
            ->filter()
            ->take($limit)
            ->values();
    }

    /**
     * Offers for several categories at once, keeping only categories that have a specific link.
     *
     * @param  list<string>  $categories
     * @return Collection<string, Collection<int, array{program: Affiliate, url: string}>>
     */
    public static function groups(array $categories, ?Country $country = null, int $limit = 3): Collection
    {
        return collect($categories)
            ->mapWithKeys(fn (string $category): array => [$category => self::for($category, $country, $limit)])
            ->filter(fn (Collection $offers): bool => $offers->isNotEmpty());
    }

    /**
     * Provider links for one specific place: a curated attraction page where we have one,
     * otherwise a search for the place's English `search_term`. Nothing without either.
     *
     * @return Collection<int, array{program: Affiliate, url: string}>
     */
    public static function forPlace(City $place, string $category = 'tour'): Collection
    {
        $curated = AffiliateDestination::query()
            ->where('city_id', $place->getKey())
            ->where('kind', 'attraction')
            ->where('category', $category)
            ->get()
            ->keyBy('affiliate_id');

        return Affiliate::query()->active()->forCategory($category)->orderBy('sort')->orderBy('id')->get()
            ->map(function (Affiliate $program) use ($curated, $place): ?array {
                $destination = $curated->get($program->getKey())?->destinationUrl()
                    ?? ($place->search_term ? AffiliateLink::fromTemplate($program->search_template, $place->search_term) : null);

                return $destination === null ? null : ['program' => $program, 'url' => AffiliateLink::url($program, $destination)];
            })
            ->filter()
            ->values();
    }

    /**
     * Curated city pages for a country, one card per city with a link per provider.
     *
     * @return Collection<int, array{label: string, image: ?string, links: Collection<int, array{program: Affiliate, url: string}>, hotelUrl: ?string}>
     */
    public static function cityCards(Country $country, string $category = 'tour'): Collection
    {
        return self::cards($country, 'city', $category)
            ->map(fn (array $card): array => $card + ['hotelUrl' => app(HotelLinker::class)->url($card['label'])])
            ->values();
    }

    /**
     * Curated attraction pages for a country, one row per attraction with a link per provider.
     *
     * @return Collection<int, array{label: string, image: ?string, links: Collection<int, array{program: Affiliate, url: string}>}>
     */
    public static function attractions(Country $country, int $limit = 8, string $category = 'tour'): Collection
    {
        return self::cards($country, 'attraction', $category)->take($limit)->values();
    }

    /**
     * The categories worth offering on a place page, by place type.
     *
     * @return list<string>
     */
    public static function categoriesForPlace(City $place): array
    {
        return match ($place->type) {
            'airport' => ['transfer', 'car', 'esim'],
            'train station' => ['luggage', 'transfer'],
            default => [],
        };
    }

    /**
     * Group curated destinations of one kind by label.
     *
     * @return Collection<int, array{label: string, image: ?string, links: Collection<int, array{program: Affiliate, url: string}>}>
     */
    private static function cards(Country $country, string $kind, string $category): Collection
    {
        return AffiliateDestination::query()
            ->with(['affiliate', 'city'])
            ->where('country_id', $country->getKey())
            ->where('kind', $kind)
            ->where('category', $category)
            ->orderBy('sort')
            ->orderBy('id')
            ->get()
            ->filter(fn (AffiliateDestination $row): bool => $row->affiliate?->active === true && $row->affiliate->url !== '' && $row->destinationUrl() !== null)
            ->groupBy('label')
            ->map(fn (Collection $rows, string $label): array => [
                'label' => $label,
                'image' => $rows->map(fn (AffiliateDestination $row): ?string => $row->city?->thumb_url)->filter()->first(),
                'links' => $rows
                    ->sortBy(fn (AffiliateDestination $row): int => $row->affiliate->sort)
                    ->map(fn (AffiliateDestination $row): array => ['program' => $row->affiliate, 'url' => AffiliateLink::url($row->affiliate, $row->destinationUrl())])
                    ->values(),
            ])
            ->values();
    }
}
