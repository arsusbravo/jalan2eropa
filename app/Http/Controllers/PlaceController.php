<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Support\AffiliateOffers;
use Illuminate\Contracts\View\View;

class PlaceController extends Controller
{
    /**
     * Show a single place (attraction, shopping spot, airport or station).
     */
    public function show(Country $country, City $city): View
    {
        abort_unless($country->active && $city->has_detail_page, 404);

        $hasCoordinates = is_numeric($city->latitude) && is_numeric($city->longitude);
        $youtube = str_starts_with($city->youtube, 'https://www.youtube.com/embed/') ? $city->youtube : null;

        return view('places.show', [
            'country' => $country,
            'place' => $city,
            'youtube' => $youtube,
            'mapUrl' => $hasCoordinates ? $this->mapUrl((float) $city->latitude, (float) $city->longitude) : null,
            'tickets' => $city->type === 'tourist' ? AffiliateOffers::forPlace($city) : collect(),
            'plan' => AffiliateOffers::groups(AffiliateOffers::categoriesForPlace($city), $country),
            'transport' => $hasCoordinates ? $this->nearestTransport($city) : [],
            'related' => $country->cities()
                ->where('type', $city->type)
                ->whereKeyNot($city->getKey())
                ->orderBy('id')
                ->limit(3)
                ->get(),
        ]);
    }

    /**
     * Closest airport and train station (straight-line distance) for a place.
     *
     * @return list<array{label: string, name: string, km: float, url: string}>
     */
    private function nearestTransport(City $place): array
    {
        $latitude = (float) $place->latitude;
        $longitude = (float) $place->longitude;
        $candidates = City::query()->whereIn('type', ['airport', 'train station'])->get();

        return collect(['airport' => 'Bandara terdekat', 'train station' => 'Stasiun kereta terdekat'])
            ->map(function (string $label, string $type) use ($candidates, $latitude, $longitude): ?array {
                $nearest = $candidates
                    ->where('type', $type)
                    ->filter(fn (City $item): bool => is_numeric($item->latitude) && is_numeric($item->longitude) && ($item->latitude != 0 || $item->longitude != 0))
                    ->map(fn (City $item): array => ['item' => $item, 'km' => $this->distanceKm($latitude, $longitude, (float) $item->latitude, (float) $item->longitude)])
                    ->sortBy('km')
                    ->first();

                if ($nearest === null) {
                    return null;
                }

                return [
                    'label' => $label,
                    'name' => $nearest['item']->name,
                    'km' => round($nearest['km'], 1),
                    'url' => 'https://www.google.com/maps/dir/?api=1&origin='.$latitude.','.$longitude.'&destination='.$nearest['item']->latitude.','.$nearest['item']->longitude,
                ];
            })
            ->filter()
            ->values()
            ->all();
    }

    private function distanceKm(float $lat1, float $lng1, float $lat2, float $lng2): float
    {
        $dLat = deg2rad($lat2 - $lat1);
        $dLng = deg2rad($lng2 - $lng1);
        $a = sin($dLat / 2) ** 2 + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLng / 2) ** 2;

        return 6371 * 2 * asin(min(1, sqrt($a)));
    }

    private function mapUrl(float $latitude, float $longitude): string
    {
        $bbox = implode(',', [$longitude - 0.01, $latitude - 0.006, $longitude + 0.01, $latitude + 0.006]);

        return 'https://www.openstreetmap.org/export/embed.html?bbox='.$bbox.'&layer=mapnik&marker='.$latitude.','.$longitude;
    }
}
