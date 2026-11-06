<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Seed the `hotels` table from the compressed JSON lines export.
     */
    public function run(): void
    {
        $handle = gzopen(database_path('seeders/data/hotels.jsonl.gz'), 'rb');
        $chunk = [];

        while (($line = gzgets($handle)) !== false) {
            $chunk[] = json_decode($line, true);

            if (count($chunk) === 500) {
                DB::table('hotels')->insertOrIgnore($chunk);
                $chunk = [];
            }
        }

        if ($chunk !== []) {
            DB::table('hotels')->insertOrIgnore($chunk);
        }

        gzclose($handle);
    }
}
