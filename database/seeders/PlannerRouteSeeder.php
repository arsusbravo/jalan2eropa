<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlannerRouteSeeder extends Seeder
{
    /**
     * Seed the `planner_route` table.
     */
    public function run(): void
    {
        $rows = [
            [
                'id' => 25,
                'title' => 'Judul',
                'planner_id' => 26,
                'day' => 1,
                'date_in' => '2019-04-09 13:14:00',
                'stay_in' => 9,
                'first_day' => 1,
                'created_at' => '2019-04-09 11:15:27',
                'updated_at' => '2019-04-09 11:15:27',
            ],
            [
                'id' => 26,
                'title' => 'Judul',
                'planner_id' => 26,
                'day' => 2,
                'date_in' => '2019-04-10 13:14:00',
                'stay_in' => 9,
                'first_day' => 0,
                'created_at' => '2019-04-09 11:15:27',
                'updated_at' => '2019-04-09 11:15:27',
            ],
            [
                'id' => 27,
                'title' => 'Judul',
                'planner_id' => 26,
                'day' => 3,
                'date_in' => '2019-04-11 13:14:00',
                'stay_in' => 9,
                'first_day' => 0,
                'created_at' => '2019-04-09 11:15:27',
                'updated_at' => '2019-04-09 11:15:27',
            ],
            [
                'id' => 28,
                'title' => 'Judul',
                'planner_id' => 26,
                'day' => 4,
                'date_in' => '2019-04-12 13:14:00',
                'stay_in' => 9,
                'first_day' => 0,
                'created_at' => '2019-04-09 11:15:27',
                'updated_at' => '2019-04-09 11:15:27',
            ],
            [
                'id' => 29,
                'title' => 'Judul',
                'planner_id' => 32,
                'day' => 1,
                'date_in' => '2021-05-08 18:30:00',
                'stay_in' => 10,
                'first_day' => 1,
                'created_at' => '2021-05-08 21:35:07',
                'updated_at' => '2021-05-08 21:35:07',
            ],
            [
                'id' => 30,
                'title' => 'Judul',
                'planner_id' => 33,
                'day' => 1,
                'date_in' => '2022-01-02 17:10:00',
                'stay_in' => 11,
                'first_day' => 1,
                'created_at' => '2021-09-10 10:12:19',
                'updated_at' => '2021-09-10 10:12:19',
            ],
            [
                'id' => 31,
                'title' => 'Judul',
                'planner_id' => 34,
                'day' => 1,
                'date_in' => '2022-12-20 06:10:00',
                'stay_in' => 12,
                'first_day' => 1,
                'created_at' => '2022-04-14 04:16:12',
                'updated_at' => '2022-04-14 04:16:12',
            ],
        ];

        foreach (array_chunk($rows, 100) as $chunk) {
            DB::table('planner_route')->insertOrIgnore($chunk);
        }
    }
}
