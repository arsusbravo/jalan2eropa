<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AffiliateSeeder extends Seeder
{
    /**
     * Seed the affiliate programs.
     *
     * Programs without a `url` stay switched off until their Travelpayouts short
     * link (Links tool) is added. The legacy Agoda row is kept but disabled.
     */
    public function run(): void
    {
        $now = now();

        $programs = [
            ['klook', 'Klook', ['tour', 'hotel'], 'https://klook.tpk.ro/8LWW9OvA', 'https://www.klook.com/en-US/search/result/?query={query}&search_scope=main_search', 'Tiket atraksi, tur, dan hotel di seluruh dunia', 10],
            ['kkday', 'KKday', ['tour', 'hotel'], 'https://kkday.tpk.ro/5twZH21c', null, 'Tur, tiket, dan pengalaman lokal', 20],
            ['tiqets', 'Tiqets', ['tour'], 'https://tiqets.tpk.ro/yZ3I40W1', null, 'Tiket museum dan atraksi tanpa antre', 30],
            ['go-city', 'Go City', ['tour'], 'https://gocity.tpk.ro/9rdzlnL3', null, 'Pass hemat untuk banyak atraksi sekaligus', 40],
            ['wegotrip', 'WeGoTrip', ['tour'], '', null, 'Tur audio dan wisata berpemandu', 50],
            ['kiwitaxi', 'Kiwitaxi', ['transfer'], '', null, 'Transfer bandara dengan harga tetap', 10],
            ['welcome-pickups', 'Welcome Pickups', ['transfer'], '', null, 'Dijemput driver lokal di bandara', 20],
            ['gettransfer', 'GetTransfer', ['transfer'], '', null, 'Bandingkan tawaran transfer', 30],
            ['intui-travel', 'intui.travel', ['transfer'], '', null, 'Transfer dan transportasi pribadi', 40],
            ['autoeurope', 'AutoEurope', ['car'], '', null, 'Sewa mobil di Eropa dan Inggris', 10],
            ['localrent', 'Localrent', ['car'], '', null, 'Sewa mobil dari penyedia lokal', 20],
            ['getrentacar', 'GetRentacar', ['car'], '', null, 'Bandingkan harga sewa mobil', 30],
            ['economybookings', 'Economybookings', ['car'], '', null, 'Sewa mobil hemat', 40],
            ['qeeq', 'QEEQ', ['car'], '', null, 'Sewa mobil di banyak kota', 50],
            ['aviasales', 'Aviasales', ['flight'], '', null, 'Cari tiket pesawat termurah', 10],
            ['kiwi-com', 'Kiwi.com', ['flight'], '', null, 'Tiket pesawat dengan rute fleksibel', 20],
            ['airalo', 'Airalo', ['esim'], '', null, 'eSIM data untuk Eropa', 10],
            ['saily', 'Saily', ['esim'], '', null, 'eSIM data tanpa roaming mahal', 20],
            ['yesim', 'Yesim', ['esim'], '', null, 'eSIM untuk traveler', 30],
            ['gigsky', 'GigSky', ['esim'], '', null, 'eSIM data internasional', 40],
            ['drimsim', 'Drimsim', ['esim'], '', null, 'SIM perjalanan untuk banyak negara', 50],
            ['radical-storage', 'Radical Storage', ['luggage'], '', null, 'Penitipan koper di pusat kota', 10],
            ['airhelp', 'AirHelp', ['claims'], '', null, 'Klaim kompensasi penerbangan tertunda', 10],
            ['compensair', 'Compensair', ['claims'], '', null, 'Klaim kompensasi penerbangan', 20],
            ['bikesbooking', 'BikesBooking', ['bike'], '', null, 'Sewa sepeda dan motor', 10],
        ];

        foreach ($programs as [$slug, $name, $categories, $url, $template, $description, $sort]) {
            DB::table('affiliates')->updateOrInsert(
                ['slug' => $slug],
                [
                    'name' => $name,
                    'categories' => json_encode($categories),
                    'uid' => '',
                    'url' => $url,
                    'search_template' => $template,
                    'description' => $description,
                    'logo' => '',
                    'active' => $url !== '',
                    'sort' => $sort,
                    'updated_at' => $now,
                    'created_at' => $now,
                ],
            );
        }

        DB::table('affiliates')->where('slug', 'klook')->update([
            'hotel_search_template' => 'https://www.klook.com/en-US/search/result/?query={query}&search_scope=main_search&tab_key=54&sort=most_relevant&start=1',
        ]);

        DB::table('affiliates')->updateOrInsert(
            ['slug' => 'agoda'],
            [
                'name' => 'Agoda',
                'categories' => json_encode(['hotel']),
                'uid' => '1617215',
                'url' => 'https://www.agoda.com/id-id',
                'logo' => 'https://cdn6.agoda.net/images/MVC/default/agoda-logo.png',
                'active' => false,
                'sort' => 999,
                'created_at' => '2016-10-17 20:03:38',
                'updated_at' => $now,
            ],
        );
    }
}
