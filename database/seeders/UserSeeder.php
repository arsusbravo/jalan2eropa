<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the `users` table with the single administrator.
     *
     * The initial password should be changed after the first login (Settings > Security).
     */
    public function run(): void
    {
        $now = now();

        DB::table('users')->where('email', '!=', 'info@arsus.nl')->delete();

        DB::table('users')->updateOrInsert(
            ['email' => 'info@arsus.nl'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin1234'),
                'usertype' => 1,
                'email_verified_at' => $now,
                'updated_at' => $now,
                'created_at' => $now,
            ],
        );
    }
}
