<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Seed the `tours` table.
     */
    public function run(): void
    {
        $rows = [
            [
                'id' => 5,
                'title' => 'Seminggu ( 6 hari ) jalan-jalan shopping Belanda - Italia',
                'slug' => 'seminggu-6-hari-jalan-jalan-shopping-belanda-italia',
                'description' => 'Jalan-jalan bersama rombongan maximal 35 orang di Eropa Barat. Perjalanan dimulai Amsterdam, Milan, Swiss. Rute perjalanan kebanyakan mengunjungi outlet-outlet dan pusat perbelanjaan di Eropa.',
                'keywords' => 'amsterdam, milan, swiss, como, outlet, belanja, shopping',
                'rateperperson' => 2000.0,
                'duration' => 6,
                'seasons' => 'spring',
                'active' => 1,
                'created_at' => '2016-10-29 09:57:08',
                'updated_at' => '2016-11-15 20:51:52',
            ],
        ];

        foreach (array_chunk($rows, 100) as $chunk) {
            DB::table('tours')->insertOrIgnore($chunk);
        }
    }
}
