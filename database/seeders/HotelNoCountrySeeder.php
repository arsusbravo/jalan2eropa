<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelNoCountrySeeder extends Seeder
{
    private const MAX_CHUNK_BYTES = 250_000;

    /**
     * Seed the `hotels_no_countries` table from the compressed JSON lines export.
     */
    public function run(): void
    {
        $handle = gzopen(database_path('seeders/data/hotels_no_countries.jsonl.gz'), 'rb');
        $chunk = [];
        $bytes = 0;

        while (($line = gzgets($handle)) !== false) {
            $chunk[] = json_decode($line, true);
            $bytes += strlen($line);

            // Stay far below MySQL's max_allowed_packet (can be as low as 1 MB on shared servers).
            if (count($chunk) === 500 || $bytes >= self::MAX_CHUNK_BYTES) {
                DB::table('hotels_no_countries')->insertOrIgnore($chunk);
                $chunk = [];
                $bytes = 0;
            }
        }

        if ($chunk !== []) {
            DB::table('hotels_no_countries')->insertOrIgnore($chunk);
        }

        gzclose($handle);
    }
}
