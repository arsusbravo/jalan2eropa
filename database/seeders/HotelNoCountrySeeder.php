<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelNoCountrySeeder extends Seeder
{
    /**
     * Seed the `hotels_no_countries` table from the compressed JSON lines export.
     */
    public function run(): void
    {
        $handle = gzopen(database_path('seeders/data/hotels_no_countries.jsonl.gz'), 'rb');
        $chunk = [];

        while (($line = gzgets($handle)) !== false) {
            $chunk[] = json_decode($line, true);

            if (count($chunk) === 500) {
                DB::table('hotels_no_countries')->insertOrIgnore($chunk);
                $chunk = [];
            }
        }

        if ($chunk !== []) {
            DB::table('hotels_no_countries')->insertOrIgnore($chunk);
        }

        gzclose($handle);
    }
}
