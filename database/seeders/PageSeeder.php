<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Seed the `pages` table.
     */
    public function run(): void
    {
        $rows = [
            [
                'id' => 1,
                'title' => 'Home',
                'slug' => '/',
                'active' => 1,
                'description' => 'Jalan2Eropa.com mencoba membantu anda menambah atau melengkapi pengetahuan tentang negara-negara di Eropa',
                'keywords' => 'jalan-jalan, eropa, tur, tour, wisata',
                'countries' => 0,
                'ordering' => 1,
                'created_at' => '2016-10-17 11:54:07',
                'updated_at' => '2016-10-17 11:54:08',
            ],
            [
                'id' => 52,
                'title' => 'Contact',
                'slug' => 'contact',
                'active' => 0,
                'description' => 'Kami bukanlah pemilik ataupun agen hotel resmi. Untuk saat ini kami hanyalah menyediakan informasi-informasi mengenai hotel dan mempersilakan anda untuk menggunakan fasilitas booking hotel dari affiliasi kami.',
                'keywords' => 'informasi, info, jalan jalan, eropa, affiliasi, contact, hubungi',
                'countries' => 0,
                'ordering' => 5,
                'created_at' => '2016-10-17 11:54:09',
                'updated_at' => '2016-10-17 11:54:09',
            ],
            [
                'id' => 74,
                'title' => 'Negara-negara di Eropa',
                'slug' => 'negara',
                'active' => 1,
                'description' => 'Temukan informasi mengenai negara-negara di Eropa, Belanda, Inggris, Yunani, Spanyol, Italia, Perancis, Belgia, Austria, Swiss, Vatikan',
                'keywords' => 'Belanda, Yunani, Inggris raya, Spanyol, Italia, Perancis, Belgia, Austria, Eropa, Swiss, Vatikan, jalan jalan, informasi',
                'countries' => 1,
                'ordering' => 2,
                'created_at' => '2016-10-17 11:54:10',
                'updated_at' => '2016-10-17 11:54:11',
            ],
            [
                'id' => 75,
                'title' => 'Cari hotel',
                'slug' => 'cari-hotel',
                'active' => 0,
                'description' => 'Cari hotel eropa melalui kotak yang ada, kemudian klik untuk mendapatkan hotel di Belanda, Perancis, Italia, Jerman, Spanyol, Yunani, Swiss',
                'keywords' => 'cari hotel, hotel, harga hotel eropa, cari hotel eropa, hotel murah, belanda, jerman, swiss, spanyol, denmark, rusia, yunani, belgia, austria, italia',
                'countries' => 1,
                'ordering' => 3,
                'created_at' => '2016-10-17 11:54:12',
                'updated_at' => '2016-10-17 11:54:12',
            ],
            [
                'id' => 76,
                'title' => 'Tips',
                'slug' => 'tips',
                'active' => 1,
                'description' => 'Informasi transportasi di eropa seperti mengurus visa, transportasi bus, kereta api, pesawat terbang',
                'keywords' => 'tips jalan jalan, jalan jalan eropa, eropa, pesawat, bus, kereta api',
                'countries' => 0,
                'ordering' => 5,
                'created_at' => '2016-10-17 11:54:13',
                'updated_at' => '2016-10-17 11:54:13',
            ],
        ];

        foreach (array_chunk($rows, 100) as $chunk) {
            DB::table('pages')->insertOrIgnore($chunk);
        }
    }
}
