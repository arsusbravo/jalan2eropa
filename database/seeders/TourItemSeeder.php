<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourItemSeeder extends Seeder
{
    /**
     * Seed the `tour_items` table.
     */
    public function run(): void
    {
        $rows = [
            [
                'id' => 10,
                'tour_id' => 5,
                'country_id' => 1,
                'hotel' => 'Hotel Iris',
                'place' => 'Amsterdam',
                'day' => 1,
                'description' => 'Dijemput dari schiphol menuju hotel di Amsterdam. Setelah makan siang, jalan-jalan di pusat kota amsterdam. Bisa belanja di Bijenkorf atau foto-foto di alun-alun.',
                'time_start' => '10:00:00',
                'time_end' => '10:30:00',
                'active' => 1,
                'created_at' => '2016-10-29 10:08:54',
                'updated_at' => '2016-11-16 17:08:49',
            ],
            [
                'id' => 11,
                'tour_id' => 5,
                'country_id' => 1,
                'hotel' => 'Hotel Iris',
                'place' => 'Factory outlets Roermond',
                'day' => 2,
                'description' => 'Di kota Roermond terdapat sebuah Factory outlet yang cukup besar. Hari ini kita akan jalan-jalan seharian di pusat outlet tersebut. Pagi hari berangkat setelah sarapan di hotel, dan kemudian makan siang di komplek outlet ini. Sore hari pulang ke Amsterdam dan makan malam di kota. Silakan cek lebih lanjut tentang <a href="/negara/negeri-belanda/belanja">Factory outlets Roermond</a>.',
                'time_start' => '08:30:00',
                'time_end' => '18:00:00',
                'active' => 1,
                'created_at' => '2016-10-29 10:08:55',
                'updated_at' => '2016-11-16 17:08:49',
            ],
            [
                'id' => 12,
                'tour_id' => 5,
                'country_id' => 8,
                'hotel' => 'Hotel Oro Blu, Milan, Italia',
                'place' => 'Milan',
                'day' => 3,
                'description' => 'Pagi hari setelah sarapan, kita langsung berangkat ke Milan, Italia. Perjalanan cukup panjang memakan waktu sekitar 13 jam. Makan siang akan dilakukan di restoran dalam perjalanan. Sampai di Milan langsung check in hotel.',
                'time_start' => '08:00:00',
                'time_end' => '21:30:00',
                'active' => 1,
                'created_at' => '2016-10-29 10:08:55',
                'updated_at' => '2016-11-16 17:08:49',
            ],
            [
                'id' => 13,
                'tour_id' => 5,
                'country_id' => 5,
                'hotel' => 'Acquarello Swiss Quality Hotel, Lugano, Ticino, Switzerland',
                'place' => 'Como dan FoxTown, Lugano',
                'day' => 4,
                'description' => 'Setelah makan siang dan keliling Milan sebentar, kita melanjutkan perjalanan ke Como, Italia, dekat kota Milan. Selain untuk menikmati keindahan danau Como, di sana terdapat juga Factory outlet dengan menyebrang ke Swiss melalui perbatasan Italia - Swiss. Setelah jalan-jalan, kita segera menuju ke hotel di Como bagian Swiss. ',
                'time_start' => '09:00:00',
                'time_end' => '18:00:00',
                'active' => 1,
                'created_at' => '2016-10-29 10:08:55',
                'updated_at' => '2016-11-16 19:15:11',
            ],
            [
                'id' => 14,
                'tour_id' => 5,
                'country_id' => 1,
                'hotel' => 'Hotel Iris',
                'place' => 'Amsterdam',
                'day' => 5,
                'description' => 'Kembali ke Amsterdam untuk persiapan keesokan harinya pulang ke tanah air. Makan siang di jalan, dan makan malam di kota Amsterdam.',
                'time_start' => '08:00:00',
                'time_end' => '21:30:00',
                'active' => 1,
                'created_at' => '2016-10-29 10:08:55',
                'updated_at' => '2016-11-16 19:15:11',
            ],
            [
                'id' => 15,
                'tour_id' => 5,
                'country_id' => 1,
                'hotel' => 'Hotel Iris',
                'place' => 'Schiphol',
                'day' => 6,
                'description' => 'Hari terakhir rombongan akan diantar ke bandara Schiphol setelah atau sebelum sarapan, tergantung jadwal penerbangan anda ke Indonesia.',
                'time_start' => '09:00:00',
                'time_end' => '15:00:00',
                'active' => 1,
                'created_at' => '2016-10-29 10:08:55',
                'updated_at' => '2016-11-17 18:01:06',
            ],
        ];

        foreach (array_chunk($rows, 100) as $chunk) {
            DB::table('tour_items')->insertOrIgnore($chunk);
        }
    }
}
