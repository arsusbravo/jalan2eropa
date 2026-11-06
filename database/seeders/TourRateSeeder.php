<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourRateSeeder extends Seeder
{
    /**
     * Seed the `tour_rates` table.
     */
    public function run(): void
    {
        $rows = [
            [
                'id' => 1,
                'tour_id' => 5,
                'min_persons' => 12,
                'max_persons' => 17,
                'rate' => 1200.0,
                'created_at' => '2016-11-15 19:36:06',
                'updated_at' => '2016-11-15 19:36:06',
            ],
            [
                'id' => 2,
                'tour_id' => 5,
                'min_persons' => 18,
                'max_persons' => 25,
                'rate' => 950.0,
                'created_at' => '2016-11-15 19:36:06',
                'updated_at' => '2016-11-15 19:36:06',
            ],
            [
                'id' => 3,
                'tour_id' => 5,
                'min_persons' => 5,
                'max_persons' => 11,
                'rate' => 1500.0,
                'created_at' => '2016-11-15 19:36:06',
                'updated_at' => '2016-11-16 19:17:23',
            ],
            [
                'id' => 4,
                'tour_id' => 5,
                'min_persons' => 26,
                'max_persons' => 35,
                'rate' => 750.0,
                'created_at' => '2016-11-15 19:36:06',
                'updated_at' => '2016-11-15 19:36:06',
            ],
        ];

        foreach (array_chunk($rows, 100) as $chunk) {
            DB::table('tour_rates')->insertOrIgnore($chunk);
        }
    }
}
