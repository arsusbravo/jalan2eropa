<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Support\PlannerData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

abstract class TransportPlaceSeeder extends Seeder
{
    /**
     * Existing places closer than this (in metres) count as the same place.
     */
    private const SAME_PLACE_METRES = 100;

    /**
     * The `cities.type` this seeder manages.
     */
    abstract protected function type(): string;

    /**
     * Hubs to add, keyed by country slug: [name, latitude, longitude].
     *
     * @return array<string, list<array{0: string, 1: float, 2: float}>>
     */
    abstract protected function places(): array;

    /**
     * Add missing hubs. Existing rows (same slug, or within 100 m) are never touched.
     */
    public function run(): void
    {
        $this->cleanNames();
        $this->beforeSeeding();

        $countries = Country::query()->pluck('id', 'slug');

        foreach ($this->places() as $countrySlug => $places) {
            $countryId = $countries[$countrySlug] ?? null;

            if ($countryId === null) {
                continue;
            }

            $existing = City::query()->where('country_id', $countryId)->where('type', $this->type())->get();

            foreach ($places as [$name, $latitude, $longitude]) {
                $slug = Str::slug($name);

                if ($this->alreadyKnown($countryId, $slug, $latitude, $longitude, $existing)) {
                    continue;
                }

                City::query()->create([
                    'country_id' => $countryId,
                    'name' => $name,
                    'slug' => $slug,
                    'type' => $this->type(),
                    'latitude' => (string) $latitude,
                    'longitude' => (string) $longitude,
                    'hotels' => '',
                    'attractions' => '',
                    'youtube' => '',
                    'thumb' => '',
                    'address' => '',
                ]);
            }
        }

        PlannerData::flush();
    }

    /**
     * Hook for one-off corrections to existing rows.
     */
    protected function beforeSeeding(): void {}

    /**
     * Decode HTML entities that were saved into names (e.g. "d&#039;Azur").
     */
    private function cleanNames(): void
    {
        City::query()->where('type', $this->type())->where('name', 'like', '%&%;%')->each(function (City $place): void {
            $place->update(['name' => html_entity_decode($place->name, ENT_QUOTES | ENT_HTML5)]);
        });
    }

    /**
     * @param  Collection<int, City>  $existing
     */
    private function alreadyKnown(int $countryId, string $slug, float $latitude, float $longitude, $existing): bool
    {
        if (City::query()->where('country_id', $countryId)->where('slug', $slug)->exists()) {
            return true;
        }

        return $existing->contains(fn (City $place): bool => is_numeric($place->latitude)
            && is_numeric($place->longitude)
            && $this->metres($latitude, $longitude, (float) $place->latitude, (float) $place->longitude) < self::SAME_PLACE_METRES);
    }

    private function metres(float $lat1, float $lng1, float $lat2, float $lng2): float
    {
        $dLat = deg2rad($lat2 - $lat1);
        $dLng = deg2rad($lng2 - $lng1);
        $a = sin($dLat / 2) ** 2 + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLng / 2) ** 2;

        return 6371000 * 2 * asin(min(1, sqrt($a)));
    }
}
