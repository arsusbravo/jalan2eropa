<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonSeeder extends Seeder
{
    /**
     * Seed the `seasons` table.
     */
    public function run(): void
    {
        $rows = [];

        foreach (array_chunk($rows, 100) as $chunk) {
            DB::table('seasons')->insertOrIgnore($chunk);
        }
    }
}
