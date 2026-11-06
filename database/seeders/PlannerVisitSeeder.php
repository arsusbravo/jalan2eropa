<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlannerVisitSeeder extends Seeder
{
    /**
     * Seed the `planner_visits` table.
     */
    public function run(): void
    {
        $rows = [];

        foreach (array_chunk($rows, 100) as $chunk) {
            DB::table('planner_visits')->insertOrIgnore($chunk);
        }
    }
}
