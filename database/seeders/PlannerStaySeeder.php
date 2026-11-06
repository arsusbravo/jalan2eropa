<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlannerStaySeeder extends Seeder
{
    /**
     * Seed the `planner_stays` table.
     */
    public function run(): void
    {
        $rows = [
            [
                'id' => 9,
                'name' => 'Test',
                'hotel_id' => null,
                'url' => null,
                'address' => 'Ravelstraat, 29 Capelle aan den IJssel , Negeri Belanda',
                'latitude' => '51.91596690000001',
                'longitude' => '4.5564425999999685',
                'distance_to_before' => null,
                'duration_to_before' => null,
                'type' => 'address',
                'created_at' => '2019-04-09 11:15:27',
                'updated_at' => '2019-04-09 11:15:27',
            ],
            [
                'id' => 10,
                'name' => 'Hotel HC Brussels',
                'hotel_id' => 5,
                'url' => 'https://www.agoda.com/partners/partnersearch.aspx?hid=78',
                'address' => null,
                'latitude' => '50.820938',
                'longitude' => '4.35322',
                'distance_to_before' => null,
                'duration_to_before' => null,
                'type' => 'hotel',
                'created_at' => '2021-05-08 21:35:07',
                'updated_at' => '2021-05-08 21:35:07',
            ],
            [
                'id' => 11,
                'name' => 'City Hotel Dresden Radebeul',
                'hotel_id' => 6929,
                'url' => 'https://www.agoda.com/partners/partnersearch.aspx?hid=153145',
                'address' => null,
                'latitude' => '51.105082',
                'longitude' => '13.673638',
                'distance_to_before' => null,
                'duration_to_before' => null,
                'type' => 'hotel',
                'created_at' => '2021-09-10 10:12:19',
                'updated_at' => '2021-09-10 10:12:19',
            ],
            [
                'id' => 12,
                'name' => 'Medlock Apartments At Jordan Street',
                'hotel_id' => null,
                'url' => '/europe/united_kingdom/manchester/medlock_apartments_at_jordan_street.html',
                'address' => null,
                'latitude' => '53.473559',
                'longitude' => '-2.250237',
                'distance_to_before' => null,
                'duration_to_before' => null,
                'type' => 'hotel',
                'created_at' => '2022-04-14 04:16:12',
                'updated_at' => '2022-04-14 04:16:12',
            ],
        ];

        foreach (array_chunk($rows, 100) as $chunk) {
            DB::table('planner_stays')->insertOrIgnore($chunk);
        }
    }
}
