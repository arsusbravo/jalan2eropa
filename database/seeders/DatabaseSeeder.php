<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            AirportSeeder::class,
            TrainStationSeeder::class,
            CitySearchTermSeeder::class,
            ContentSeeder::class,
            PageSeeder::class,
            SeasonSeeder::class,
            AffiliateSeeder::class,
            AffiliateDestinationSeeder::class,
            HotelSeeder::class,
            HotelNoCountrySeeder::class,
            TourSeeder::class,
            TourItemSeeder::class,
            TourRateSeeder::class,
            PlannerSeeder::class,
            PlannerStaySeeder::class,
            PlannerRouteSeeder::class,
            PlannerVisitSeeder::class,
        ]);
    }
}
