<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Seed the `cities` table.
     */
    public function run(): void
    {
        $rows = [
            [
                'id' => 10,
                'country_id' => 2,
                'name' => 'Royal Museum of Fine Art',
                'slug' => 'royal-museum-of-fine-art',
                'hotels' => '',
                'latitude' => '50.8421419',
                'longitude' => '4.3583645',
                'attractions' => '<p class="dropcap">Royal Museum of Fine Arts (Museum Kerajaan Seni Rupa) adalah museum seni rupa yang terletak di Brussels, Belgia. Museum ini didirikan pada tahun 1803 dan merupakan salah satu museum seni rupa terbesar di Belgia.</p>
        <p>Museum ini memiliki koleksi seni rupa yang mencakup periode dari abad ke-15 hingga abad ke-21, dengan fokus pada seni rupa Belgia, Belanda, dan Prancis. Koleksi ini mencakup lukisan, patung, gambar, dan seni grafis dari seniman terkenal seperti Rubens, Bruegel, Van Dyck, dan Magritte.</p>
        <p>Koleksi terkenal di museum ini adalah koleksi Rubens, yang terdiri dari lebih dari 20 karya asli dari seniman terkenal asal Belgia, Peter Paul Rubens. Lukisan Rubens yang terkenal seperti "Lansquenet" dan "The Fall of the Damned" dapat ditemukan di museum ini.</p>
        <p>Selain koleksi seni rupa permanen, museum ini juga menampilkan pameran sementara yang menampilkan seniman kontemporer dan seni rupa modern.</p>
        <p>Museum ini dibagi menjadi beberapa ruangan seperti ruangan seni rupa klasik, seni rupa modern, dan seni rupa kontemporer. Museum ini juga memiliki perpustakaan dan pusat dokumentasi untuk penelitian seni rupa.</p>
        <p>Royal Museum of Fine Arts di Brussels adalah tempat yang ideal untuk para penggemar seni rupa dan bagi mereka yang ingin mengeksplorasi sejarah seni rupa Belgia dan Eropa.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/ddMVn9EN2qA',
                'thumb' => 'place1379267122_Royal-_Museum-_of-_Fine-Art_Antwerp.jpg',
                'address' => 'Museumstraat 9 - 1000 Brussel',
                'created_at' => null,
                'updated_at' => '2023-02-26 21:11:18',
            ],
            [
                'id' => 11,
                'country_id' => 2,
                'name' => 'Alun alun Brussels',
                'slug' => 'alun-alun-brussels',
                'hotels' => '',
                'latitude' => '50.8427501',
                'longitude' => '4.3515499',
                'attractions' => '<p>Alun-alun Brussels, atau Grand Place, adalah lapangan terbuka yang terletak di pusat kota Brussels, Belgia. Alun-alun ini merupakan salah satu tempat wisata terpopuler di Belgia dan sering dijuluki sebagai "the most beautiful square in Europe" atau "alun-alun paling indah di Eropa".</p>
        <p>Alun-alun ini dihiasi dengan bangunan bergaya gotik dan barok yang indah, termasuk Hotel de Ville (Balai Kota) yang menjadi landmark utama alun-alun. Hotel de Ville dibangun pada abad ke-15 dan dihiasi dengan patung-patung terkenal, seperti patung St. Michael yang melambangkan kemenangan kota atas musuh-musuhnya.</p>
        <p>Selain itu, di sekitar alun-alun terdapat juga toko-toko, restoran, dan kafe-kafe yang menjual kuliner khas Belgia, seperti cokelat, wafel, dan bir Belgia. Setiap dua tahun sekali, Alun-alun Brussels juga menjadi tuan rumah Festival Bunga Tapis, di mana alun-alun ini ditutup dengan karpet bunga yang indah.</p>
        <p>Alun-alun Brussels juga merupakan tempat yang populer untuk acara-acara besar seperti konser musik, pertunjukan budaya, dan festival. Saat malam hari, bangunan-bangunan di sekitar alun-alun akan dihiasi dengan lampu-lampu yang memukau, sehingga menciptakan suasana yang sangat romantis.</p>
        <p>Alun-alun Brussels adalah tempat yang sangat menarik untuk dikunjungi, baik siang maupun malam hari. Keindahan arsitektur dan suasana yang ramai di alun-alun ini pasti akan meninggalkan kesan yang tak terlupakan bagi para pengunjungnya.</p>
        
        <p>Berikut ini adalah beberapa hotel terdekat dari Grand Place di Brussels:</p>
        <ol>
        <li>
        <p><a title="Hotel Agora Brussels Grand Place" href="https://www.booking.com/hotel/be/agora-brussels.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Agora Brussels Grand Place</a>: Hotel ini terletak hanya beberapa langkah dari Grand Place, dan menawarkan kamar-kamar yang nyaman dan modern, serta fasilitas seperti restoran dan bar.</p>
        </li>
        <li>
        <p><a title="Hotel La Vieille Lanterne" href="https://www.booking.com/hotel/be/la-vieille-lanterne.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2">Hotel La Vieille Lanterne</a>: Hotel ini juga berjarak hanya beberapa langkah dari Grand Place, dengan kamar-kamar yang bersih dan nyaman, serta fasilitas umum seperti dapur bersama dan ruang tamu bersama.</p>
        </li>
        <li>
        <p><a title="Novotel Brussels Off Grand Place" href="https://www.booking.com/hotel/be/offgrandplace.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Novotel Brussels Off Grand Place</a>: Hotel bintang 4 yang terletak hanya beberapa menit berjalan kaki dari Grand Place, dengan kamar-kamar yang modern dan fasilitas seperti restoran dan bar.</p>
        </li>
        <li>
        <p><a title="Aris Grand Place Hotel" href="https://www.booking.com/hotel/be/arisgrandplace.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Aris Grand Place Hotel</a>: Hotel ini terletak di pusat kota Brussels, hanya beberapa menit berjalan kaki dari Grand Place. Hotel ini menawarkan kamar-kamar yang nyaman dan fasilitas seperti bar dan lounge bersama.</p>
        </li>
        <li>
        <p><a title="Hotel Le Dixsepti&egrave;me" href="https://www.booking.com/hotel/be/ledixseptieme.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Le Dixsepti&egrave;me</a>: Hotel mewah yang terletak hanya beberapa langkah dari Grand Place, dengan kamar-kamar yang elegan dan fasilitas seperti spa dan kolam renang dalam ruangan.</p>
        </li>
        </ol>
        <p>Berikut adalah beberapa hotel backpacker murah yang terletak dekat dengan Grand Place di Brussels:</p>
        <ol>
        <li>
        <p><a title="2GO4 Quality Hostel Brussels Grand Place" href="https://www.booking.com/hotel/be/2go4-quality-hostel-brussels-grand-place.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">2GO4 Quality Hostel Brussels Grand Place</a>: Hostel yang terletak hanya beberapa menit berjalan kaki dari Grand Place, dengan kamar-kamar yang bersih dan fasilitas seperti dapur bersama dan ruang tamu bersama. Harganya cukup terjangkau dan cocok bagi backpacker.</p>
        </li>
        <li>
        <p>Hostel Galia: Hostel yang terletak di pusat kota Brussels, dekat dengan Grand Place dan berbagai objek wisata populer lainnya. Hostel ini menawarkan kamar-kamar yang sederhana dengan harga terjangkau.</p>
        </li>
        <li>
        <p>Sleephere Bed Brussels: Hostel yang terletak hanya beberapa langkah dari Grand Place, dengan kamar-kamar yang bersih dan fasilitas seperti dapur bersama dan ruang tamu bersama. Harganya sangat terjangkau dan cocok bagi backpacker dengan budget yang terbatas.</p>
        </li>
        <li>
        <p>Brussels Central Flats: Penginapan yang terletak di pusat kota Brussels, dengan apartemen-apartemen yang sederhana dan harga terjangkau. Lokasinya sangat dekat dengan Grand Place dan berbagai objek wisata populer lainnya.</p>
        </li>
        <li>
        <p>Auberge de Jeunesse G&eacute;n&eacute;ration Europe: Hostel yang terletak di luar pusat kota Brussels, tetapi masih mudah diakses dengan transportasi umum. Hostel ini menawarkan kamar-kamar yang bersih dan fasilitas seperti dapur bersama dan ruang tamu bersama, dengan harga yang terjangkau.</p>
        </li>
        </ol>
        <p>Pastikan untuk melakukan reservasi dengan waktu yang cukup agar dapat menemukan penginapan yang sesuai dengan preferensi dan budget Anda.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/s0bR44pPAMY',
                'thumb' => 'place1379267319_grand-place-brussels-belgium.jpg',
                'address' => '1000 Brussel',
                'created_at' => null,
                'updated_at' => '2023-02-26 00:15:45',
            ],
            [
                'id' => 12,
                'country_id' => 2,
                'name' => 'Atomium',
                'slug' => 'atomium',
                'hotels' => '',
                'latitude' => '50.8953587',
                'longitude' => '4.3413451',
                'attractions' => '<p>Atomium adalah sebuah monumen ikonik yang terletak di Brussels, Belgia. Struktur ini memiliki bentuk bola dengan 9 bola kecil yang terhubung oleh pipa besi besar. Atomium dibangun pada tahun 1958 sebagai bagian dari Pameran Dunia di Brussels dan menjadi salah satu atraksi turis yang paling populer di Belgia.</p>
        <p>Di dalam Atomium, terdapat beberapa ruang pameran yang menampilkan sejarah, fakta dan angka-angka ilmiah tentang atom dan energi nuklir. Pengunjung dapat menikmati pemandangan kota Brussels dari atas di ketinggian 92 meter, di mana terdapat observatorium di bola teratas. Selain itu, di dalam Atomium juga terdapat restoran dan toko suvenir yang menawarkan berbagai jenis makanan dan barang-barang khas Belgia.</p>
        <p>Pada malam hari, Atomium menjadi lebih menarik dengan cahaya lampu yang memukau. Bangunan ini dihiasi dengan lampu LED berwarna-warni, menciptakan suasana yang magis dan indah di sekitar lingkungan Atomium.</p>
        <p>Atomium dapat dicapai dengan mudah melalui transportasi umum seperti metro atau kereta api. Saat mengunjungi Atomium, para wisatawan juga dapat menjelajahi Taman Heysel yang bersebelahan dengan monumen ini dan menikmati atraksi lainnya seperti Mini Europe, sebuah taman miniatur yang menampilkan replika monumen terkenal di seluruh Eropa.</p>
        <p>Jika Anda berkunjung ke Brussels, jangan lewatkan kesempatan untuk mengunjungi Atomium. Struktur ikonik ini tidak hanya menawarkan pengalaman edukatif tentang atom, tetapi juga menawarkan pemandangan kota yang menakjubkan dan pengalaman wisata yang tak terlupakan.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/bVPcjHr3ejY',
                'thumb' => 'place1379267412_atomium-brussels-belgium.jpg',
                'address' => 'Square de l&#039;Atomium, 1020 Brussel',
                'created_at' => null,
                'updated_at' => '2023-02-22 21:40:47',
            ],
            [
                'id' => 13,
                'country_id' => 2,
                'name' => 'The Bourse',
                'slug' => 'the-bourse',
                'hotels' => '',
                'latitude' => '50.8503396',
                'longitude' => '4.3517103',
                'attractions' => '<p>The Bourse, atau yang dikenal sebagai Bourse de Bruxelles, adalah sebuah bangunan bersejarah yang terletak di pusat kota Brussels, Belgia. Bangunan ini didirikan pada abad ke-19 sebagai pasar saham di Brussels dan telah menjadi tempat bagi berbagai kegiatan sosial, budaya, dan komersial selama lebih dari satu abad.</p>
        <p>Bangunan The Bourse dirancang dalam gaya arsitektur neoklasik yang megah dan memiliki sejarah panjang sebagai salah satu landmark penting di Brussels. Sekarang, The Bourse telah diubah menjadi pusat budaya yang menyelenggarakan berbagai acara, seperti pameran seni, konser, festival, dan pertemuan bisnis. Selain itu, di dalam bangunan The Bourse terdapat pusat perbelanjaan, restoran, dan toko-toko yang menjual berbagai macam barang dan makanan.</p>
        <p>The Bourse juga menjadi pusat kegiatan selama festival tahunan di Brussels, seperti Brussels Beach, Christmas Market, dan Brussels Food Truck Festival. Selama musim panas, The Bourse juga menjadi tempat bagi "Brussels Summer Festival", acara musik yang menampilkan artis-artis lokal dan internasional yang terkenal.</p>
        <p>The Bourse merupakan salah satu bangunan bersejarah yang paling menarik di Brussels, dan sering dijadikan sebagai latar belakang dalam foto-foto wisatawan. Jika Anda berkunjung ke Brussels, pastikan untuk mengunjungi The Bourse dan menikmati suasana dan aktivitas budaya yang ada di sana.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/1HvVx4C2j_g',
                'thumb' => 'place1379267589_1554198420_ce2a1ecb1b.jpg',
                'address' => 'La Bourse Palais de la Bourse 1000 Bru Brussels',
                'created_at' => null,
                'updated_at' => '2023-02-22 21:41:12',
            ],
            [
                'id' => 14,
                'country_id' => 2,
                'name' => 'Antwerpen',
                'slug' => 'museum-berlian-di-antwerpen',
                'hotels' => '',
                'latitude' => '51.2186961',
                'longitude' => '4.4207596',
                'attractions' => '<p>Antwerpen adalah kota yang kaya akan sejarah dan budaya, serta menawarkan berbagai atraksi wisata yang menarik. Beberapa tempat wisata populer di Antwerpen antara lain:</p>
        <ol>
        <li>
        <p>Grote Markt: Ini adalah pusat kota Antwerpen, terletak di tengah-tengah kawasan bersejarah yang dipenuhi bangunan-bangunan bergaya Flemish Renaissance. Terdapat banyak restoran, kafe, dan toko-toko yang menjual barang-barang unik di sekitar Grote Markt.</p>
        </li>
        <li>
        <p>Katedral Antwerpen: Katedral Gothic terbesar di Belgia, tempat ini menampilkan banyak karya seni termasuk patung karya Rubens. Ada juga tur naik tangga untuk melihat pemandangan kota dari atas menara.</p>
        </li>
        <li>
        <p>MAS - Museum Aan de Stroom: Museum seni dan sejarah yang terletak di pelabuhan Antwerpen yang telah direvitalisasi. Museum ini menampilkan koleksi yang luas dari seni dan sejarah lokal, serta menawarkan pemandangan indah dari puncak gedung.</p>
        </li>
        <li>
        <p>Diamond District: Antwerpen dikenal sebagai pusat perdagangan berlian dunia, dan kawasan Diamond District adalah tempat untuk melihat keindahan dan kilauan dari permata ini. Terdapat banyak toko perhiasan dan museum berlian untuk dikunjungi.</p>
        </li>
        <li>
        <p>Plantin-Moretus Museum: Museum yang terletak di sebuah rumah abad ke-16, tempat terbitan buku pertama di dunia, dilengkapi dengan peralatan cetak dan mesin cetak tua. Museum ini merupakan warisan budaya UNESCO.</p>
        </li>
        <li>
        <p>Zoo Antwerpen: Salah satu kebun binatang tertua di dunia, terletak di tengah kota Antwerpen. Taman ini menyimpan beragam spesies hewan, dari hewan langka hingga hewan peliharaan.</p>
        </li>
        <li>
        <p>Museum Mode Antwerpen: Museum mode yang menampilkan berbagai karya desainer terkenal, di antaranya Dries Van Noten dan Ann Demeulemeester.</p>
        </li>
        </ol>
        <p>Itu adalah beberapa tempat wisata yang populer di Antwerpen. Pastikan untuk merencanakan kunjungan Anda dengan baik agar dapat menikmati semua yang kota ini tawarkan.</p>
        
        <p>Berikut adalah beberapa hotel murah di Antwerpen yang dapat menjadi pilihan:</p>
        <ol>
        <li>
        <p><a title="ibis budget Antwerpen Port" href="https://www.booking.com/hotel/be/etap-antwerpen-haven.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">ibis budget Antwerpen Port</a>: hotel budget yang terletak dekat pelabuhan Antwerpen dan menawarkan kamar yang fungsional dan modern dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="ibis budget Antwerpen Centraal Station" href="https://www.booking.com/hotel/be/etap-antwerpen-centrum.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">ibis budget Antwerpen Centraal Station</a>: hotel budget yang terletak dekat stasiun kereta api Antwerpen dan menawarkan kamar yang nyaman dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Hotel National" href="https://www.booking.com/hotel/be/cammerpoorte.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel National</a>: hotel yang terletak di pusat kota Antwerpen dan hanya beberapa menit jalan kaki dari stasiun kereta api. Hotel ini menawarkan kamar-kamar yang nyaman dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Antwerp City Hostel" href="https://www.booking.com/hotel/be/antwerp-city-hostel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Antwerp City Hostel</a>: hostel yang terletak di pusat kota Antwerpen dan dekat dengan atraksi wisata utama. Hostel ini menawarkan tempat tidur dormitori dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="ibis Antwerpen Centrum" href="https://www.booking.com/hotel/be/ibisantwerpen.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">ibis Antwerpen Centrum</a>: hotel yang terletak di pusat kota Antwerpen dan dekat dengan atraksi wisata utama seperti Grote Markt dan katedral. Hotel ini menawarkan kamar-kamar yang nyaman dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Hotel Rubens - Grote Markt" href="https://www.booking.com/hotel/be/rubens-grote-markt.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Rubens - Grote Markt</a>: hotel yang terletak di pusat kota Antwerpen dan dekat dengan Grote Markt dan katedral. Hotel ini menawarkan kamar-kamar yang elegan dan nyaman dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Arass Hotel" href="https://www.booking.com/hotel/be/arass-apartments.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2">Arass Hotel</a>: hotel yang terletak dekat dengan stasiun kereta api Antwerpen dan menawarkan kamar-kamar apartemen yang dilengkapi dengan dapur dan ruang tamu. Hotel ini menawarkan harga yang terjangkau untuk akomodasi yang lebih besar.</p>
        </li>
        <li>
        <p><a title="Yust Antwerp" href="https://www.booking.com/hotel/be/yust-antwerp.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Yust Antwerp</a>: hostel yang terletak di lingkungan yang tenang dan terletak hanya beberapa menit jalan kaki dari stasiun kereta api Antwerpen. Hostel ini menawarkan kamar-kamar dormitori yang modern dan nyaman dengan harga yang terjangkau.</p>
        </li>
        </ol>
        <p>Itulah beberapa pilihan hotel murah di Antwerpen yang bisa menjadi referensi untuk perjalanan Anda. Pastikan untuk melakukan pengecekan ulang tentang fasilitas dan jarak ke tempat-tempat wisata sebelum memesan agar dapat memilih hotel yang sesuai dengan kebutuhan dan budget Anda.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/z2NqUoyS13Y',
                'thumb' => 'place1379267688_HPIM0098.jpg',
                'address' => 'Koningin Astridplein 19  2018 Antwerpen',
                'created_at' => null,
                'updated_at' => '2023-02-26 00:42:27',
            ],
            [
                'id' => 15,
                'country_id' => 2,
                'name' => 'Kastil Gravensteen, Ghent',
                'slug' => 'kastil-gravensteen-ghent',
                'hotels' => '',
                'latitude' => '51.0567346',
                'longitude' => '3.7213135',
                'attractions' => '<p>Kastil Gravensteen, yang terletak di kota Ghent, Belgia, adalah kastil abad pertengahan yang telah berusia lebih dari 800 tahun. Kastil ini dulunya merupakan kediaman para bangsawan, dan kemudian berfungsi sebagai penjara sebelum diubah menjadi museum sejarah.</p>
        <p>Berikut adalah beberapa hal yang dapat Anda lihat dan lakukan ketika mengunjungi Kastil Gravensteen di Ghent:</p>
        <ol>
        <li>Jelajahi bangunan kastil: Kastil Gravensteen adalah salah satu kastil abad pertengahan yang paling terawat di Eropa. Anda dapat menjelajahi berbagai ruang kastil, termasuk ruang tamu, kamar tidur, dan menara.</li>
        <li>Kunjungi Museum Sejarah: Museum Sejarah di Kastil Gravensteen memamerkan koleksi alat penyiksaan, senjata, dan peralatan lain yang digunakan selama periode abad pertengahan. Museum ini juga memiliki pameran tentang sejarah Ghent.</li>
        <li>Nikmati pemandangan dari atas menara: Dari menara kastil, pengunjung dapat menikmati pemandangan indah kota Ghent dan sungai Leie.</li>
        <li>Hadiri pertunjukan yang digelar di kastil: Kadang-kadang, pertunjukan teater dan konser musik diadakan di Kastil Gravensteen, memberikan kesempatan kepada pengunjung untuk menikmati acara seni dan budaya di lingkungan sejarah yang menakjubkan.</li>
        </ol>
        <p>Kastil Gravensteen menawarkan pengalaman yang menarik bagi pengunjung untuk menggali sejarah dan budaya Ghent. Ini adalah salah satu situs bersejarah yang paling populer di kota ini dan pastinya patut dikunjungi jika Anda berada di Ghent.</p>
        <p>Beberapa hotel populer di Ghent, Belgia, antara lain:</p>
        <ol>
        <li>
        <p><a title="Hotel Harmony" href="https://www.booking.com/hotel/be/hotelharmony.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Harmony</a>: Terletak di pusat kota Ghent, dekat dengan atraksi populer seperti Katedral St. Bavo dan Gravensteen. Hotel ini menawarkan kamar-kamar yang elegan dengan dekorasi yang modern, lounge yang nyaman, dan restoran yang terkenal.</p>
        </li>
        <li>
        <p><a title="Hotel de Flandre" href="https://www.booking.com/hotel/be/hoteldeflandregent.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel de Flandre</a>: Terletak di pusat kota Ghent, dekat dengan Belfry of Ghent dan Korenmarkt. Hotel ini menawarkan kamar-kamar yang luas dengan dekorasi yang elegan, lounge yang nyaman, dan fasilitas seperti spa dan sauna.</p>
        </li>
        <li>
        <p><a title="Ghent Marriott Hotel" href="https://www.booking.com/hotel/be/ghent-marriott.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Ghent Marriott Hotel</a>: Terletak di dekat pusat kota Ghent, dekat dengan Gravensteen dan St. Michael\'s Bridge. Hotel ini menawarkan kamar-kamar yang modern dengan dekorasi yang elegan, restoran yang terkenal, dan bar yang menyenangkan.</p>
        </li>
        <li>
        <p><a title="Pillows Grand Hotel Reylof Ghent" href="https://www.booking.com/hotel/be/pillows-grand-hotel-reylof.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Pillows Grand Hotel Reylof Ghent</a>: Terletak di pusat kota Ghent, dekat dengan SMA Sint-Bavohumaniora dan SMA Sint-Lievenscollege. Hotel ini menawarkan kamar-kamar yang elegan dengan dekorasi yang indah, restoran yang terkenal, dan bar yang menyenangkan.</p>
        </li>
        </ol>
        <p>Pastikan untuk melakukan reservasi dengan waktu yang cukup agar dapat menemukan penginapan yang sesuai dengan preferensi dan budget Anda.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/WtM-kmYzJK0',
                'thumb' => 'place1379267860_gravensteen-castle-in.jpg',
                'address' => 'Sint-Veerleplein 11, 9000 Gent',
                'created_at' => null,
                'updated_at' => '2023-02-26 00:32:24',
            ],
            [
                'id' => 16,
                'country_id' => 2,
                'name' => 'Manneken Pis',
                'slug' => 'manneken-pis',
                'hotels' => '',
                'latitude' => '50.8449804',
                'longitude' => '4.3500499',
                'attractions' => '<p>Manneken Pis adalah sebuah patung kecil perunggu yang terletak di pusat kota Brussels, Belgia. Patung ini digambarkan sebagai seorang anak kecil laki-laki yang sedang buang air kecil di sebuah piala atau pancuran air.</p>
        <p>Manneken Pis telah menjadi simbol Brussels selama berabad-abad dan merupakan salah satu objek wisata yang paling populer di kota ini. Banyak wisatawan yang datang ke Brussels untuk melihat patung ini dan mengambil foto bersama Manneken Pis.</p>
        <p>Ada beberapa legenda yang menceritakan asal usul Manneken Pis. Salah satu legenda mengatakan bahwa patung ini mewakili seorang anak kecil yang menyelamatkan kota dari kebakaran dengan memadamkan api dengan air seninya. Legenda lainnya mengatakan bahwa Manneken Pis adalah anak kecil yang hilang dan ditemukan oleh seorang ayah yang sedang mencari anaknya dengan menemukan anaknya buang air kecil di tempat yang sekarang menjadi lokasi patung.</p>
        <p>Manneken Pis sering kali dikostumisasi dengan pakaian tradisional atau seragam, yang dikenakan pada patung untuk merayakan peristiwa atau acara tertentu. Terdapat koleksi pakaian dan kostum yang diberikan oleh berbagai negara dan organisasi ke Manneken Pis, yang kemudian dipajang secara bergantian di museum yang berada dekat dengan patung tersebut.</p>
        <p>Meskipun hanya berukuran kecil, Manneken Pis telah menjadi lambang penting dari kota Brussels, dan menjadi salah satu objek wisata yang paling terkenal dan dikunjungi di Belgia.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/OCE8HezwqP4',
                'thumb' => 'place1379274051_4998506878_750_manneken-pis.jpg',
                'address' => 'Stoofstraat 46, 1000 Brussel',
                'created_at' => null,
                'updated_at' => '2023-02-22 21:43:27',
            ],
            [
                'id' => 17,
                'country_id' => 2,
                'name' => 'Tongeren',
                'slug' => 'tongeren',
                'hotels' => '',
                'latitude' => '50.78419',
                'longitude' => '5.47449',
                'attractions' => '<p>Tongeren adalah sebuah kota kecil di Belgia, yang terletak di provinsi Limburg, di sebelah timur Brussel. Kota ini merupakan salah satu kota tertua di Belgia dan memiliki banyak situs bersejarah dan arkeologis yang menarik untuk dikunjungi. Berikut adalah beberapa hal yang dapat Anda lihat dan lakukan di Tongeren:</p>
        <ol>
        <li>Gallo-Romeins Museum: Ini adalah museum arkeologi yang besar dan terkenal di Belgia. Museum ini menampilkan koleksi besar artefak dari zaman Galia dan Romawi, termasuk senjata, perhiasan, dan peralatan rumah tangga. Ada juga pameran interaktif yang menampilkan kehidupan orang Galia dan Romawi.</li>
        <li>Basilika Tongeren: Basilika ini merupakan gereja Katolik Roma yang terkenal di Tongeren, dan merupakan salah satu gereja tertua di Belgia. Gereja ini memiliki arsitektur yang indah, dengan kubah besar dan interior yang dihiasi dengan patung dan lukisan.</li>
        <li>Pietersheim Castle: Kastil ini terletak di tepi sebuah danau yang indah dan dikelilingi oleh hutan. Kastil ini telah diubah menjadi hotel dan restoran, dan merupakan tempat yang populer untuk menginap dan bersantai.</li>
        <li>Tongeren Flea Market: Setiap hari Minggu pagi, kota ini menjadi tuan rumah untuk pasar loak besar, yang dikenal sebagai "Tongeren Flea Market". Pasar ini adalah pasar loak tertua di Belgia dan menarik banyak wisatawan yang mencari barang antik, buku bekas, dan barang-barang vintage lainnya.</li>
        <li>Hiking and Biking: Daerah sekitar Tongeren memiliki jalur hiking dan bersepeda yang sangat indah dan menawarkan pemandangan alam yang spektakuler. Beberapa jalur hiking dan bersepeda terkenal di daerah ini termasuk Jalur Rempah-rempah dan Rute Sepeda Limburg.</li>
        </ol>
        <p>Tongeren adalah kota yang kaya akan sejarah dan budaya, dan menawarkan banyak tempat menarik untuk dikunjungi. Dari museum arkeologi hingga pasar loak dan alam yang indah, Tongeren memiliki banyak hal untuk ditawarkan kepada pengunjung.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/E7mcUytKY0g',
                'thumb' => 'place1379274334_Tongeren_Romeinse_Stad.jpg',
                'address' => 'Tongeren',
                'created_at' => null,
                'updated_at' => '2023-02-22 21:44:16',
            ],
            [
                'id' => 18,
                'country_id' => 2,
                'name' => 'Istana kerajaan',
                'slug' => 'istana-kerajaan',
                'hotels' => '',
                'latitude' => '50.8427501',
                'longitude' => '4.3515499',
                'attractions' => '<p>Istana Kerajaan Brussels bukanlah tempat yang terbuka untuk umum sepanjang tahun karena merupakan kediaman resmi dari Raja dan Ratu Belgia. Namun, selama musim panas, tur dapat diatur untuk mengunjungi beberapa ruangan istana yang terbuka untuk umum, termasuk aula utama dan ruang makan.</p>
        <p>Sementara itu, Parlemen Belgia berada di gedung yang terpisah dari Istana Kerajaan Brussels. Gedung Parlemen Belgia terletak di pusat kota Brussels dan terbuka untuk kunjungan umum. Anda dapat mengunjungi gedung Parlemen Belgia dan mengikuti tur resmi yang tersedia, yang akan membawa Anda melalui beberapa ruang yang digunakan untuk pertemuan dan debat, termasuk aula parlemen dan ruang komite. Selama tur, Anda juga dapat belajar tentang sejarah parlemen Belgia dan tugas-tugas yang dilakukan oleh anggota parlemen.</p>
        <p>Jadi, jika Anda ingin mengunjungi Parlemen Belgia, Anda dapat merencanakan kunjungan ke gedung parlemen dan mengikuti tur resmi yang tersedia. Namun, jika Anda ingin mengunjungi Istana Kerajaan Brussels, kunjungan terbatas hanya tersedia selama musim panas dan harus diatur melalui tur resmi.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/JOM29NUnhug',
                'thumb' => 'place1379274490_palais-royal.jpg',
                'address' => '1000 Brussel',
                'created_at' => null,
                'updated_at' => '2023-02-22 21:44:43',
            ],
            [
                'id' => 19,
                'country_id' => 4,
                'name' => 'Kastil Neuschwanstein',
                'slug' => 'kastil-neuschwanstein',
                'hotels' => '',
                'latitude' => '47.55773',
                'longitude' => '10.7496457',
                'attractions' => '<p>Kastil Neuschwanstein adalah sebuah kastil yang terletak di dekat kota F&uuml;ssen di wilayah Bavaria, Jerman. Kastil ini dibangun pada abad ke-19 oleh Raja Ludwig II dari Bavaria sebagai tempat tinggal pribadi. Kastil ini terkenal karena arsitekturnya yang megah dan menjadi salah satu destinasi wisata paling populer di Jerman.</p>
        <p>Kastil Neuschwanstein dibangun dengan gaya arsitektur yang mirip dengan kastil-kastil zaman pertengahan, tetapi memiliki fasilitas modern seperti pemanas ruangan, sistem drainase, dan listrik. Kastil ini juga terkenal karena berbagai dekorasi yang indah, termasuk lukisan dinding, karya seni, dan perabotan interior.</p>
        <p>Untuk mengunjungi kastil ini, pengunjung harus berjalan kaki atau naik kereta kuda dari parkir ke kastil. Pengunjung dapat melakukan tur dengan panduan atau menjelajah sendiri, dan dapat melihat ruang-ruang dalam kastil, termasuk ruang singgasana, ruang tamu, ruang makan, dan kamar tidur Raja Ludwig II.</p>
        <p>Kastil Neuschwanstein juga menjadi inspirasi bagi kastil Cinderella di taman bermain Disneyland di Amerika Serikat. Karena keindahan dan sejarahnya yang kaya, Kastil Neuschwanstein menjadi salah satu destinasi wisata terpopuler di Jerman dan banyak dikunjungi oleh turis dari seluruh dunia.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/QrJyeearNNk',
                'thumb' => 'place1379274633_Another-View-of-Neuschwanstein-Castle.jpg',
                'address' => 'Neuschwansteinstraße 20, 87645 Schwangau',
                'created_at' => null,
                'updated_at' => '2023-02-26 21:12:15',
            ],
            [
                'id' => 20,
                'country_id' => 4,
                'name' => 'Tembok Berlin',
                'slug' => 'tembok-berlin',
                'hotels' => '',
                'latitude' => '52.5163081',
                'longitude' => '13.3795345',
                'attractions' => '<p>Tembok Berlin merupakan salah satu situs bersejarah terpenting di Eropa dan menjadi destinasi wisata yang populer di Jerman. Berikut beberapa hal yang bisa dilakukan ketika berkunjung ke Tembok Berlin:</p>
        <ol>
        <li>
        <p>Melihat sisa-sisa Tembok Berlin: Tembok Berlin dibangun pada tahun 1961 sebagai pembatas antara Jerman Timur dan Barat. Ketika Tembok itu dibongkar pada tahun 1989, beberapa bagian dipertahankan sebagai simbol peringatan akan masa lalu. Saat berkunjung ke Tembok Berlin, Anda bisa melihat sisa-sisa Tembok yang dipertahankan sebagai monumen sejarah.</p>
        </li>
        <li>
        <p>Menguji keberanian dengan memanjat Tembok Berlin: Jika Anda mencari pengalaman yang menarik dan menantang, Anda bisa mencoba untuk memanjat Tembok Berlin di tempat yang telah ditentukan. Tidak hanya memberikan kepuasan secara fisik, tetapi juga memberikan pengalaman yang tak terlupakan.</p>
        </li>
        <li>
        <p>Mengunjungi East Side Gallery: East Side Gallery adalah sepanjang sebagian dari Tembok Berlin yang telah diubah menjadi kanvas seni jalanan. Terdapat lebih dari 100 karya seni mural yang menghiasi tembok di sini, termasuk karya terkenal seperti "Kiss" dan "Fraternal Kiss".</p>
        </li>
        <li>
        <p>Berkunjung ke Museum Checkpoint Charlie: Museum ini merupakan museum sejarah yang memamerkan alat-alat, foto, dan dokumen-dokumen yang terkait dengan sejarah Tembok Berlin. Museum ini juga memiliki pameran tentang bagaimana penduduk Berlin Timur melarikan diri dari Jerman Timur ke Jerman Barat.</p>
        </li>
        <li>
        <p>Mengunjungi Memorial Beruang: Memorial Beruang merupakan monumen yang didedikasikan untuk beruang bernama Schnute. Beruang ini menjadi maskot tidak resmi bagi Tentara Soviet selama pendudukan mereka di Berlin. Monumen ini menunjukkan betapa pentingnya peran binatang tersebut dalam sejarah kota Berlin.</p>
        </li>
        <li>
        <p>Menjelajahi lingkungan sekitar: Lingkungan sekitar Tembok Berlin, terutama di kawasan Mitte, memiliki banyak toko, kafe, dan restoran yang menarik. Anda bisa menjelajahi lingkungan ini sambil menikmati suasana khas kota Berlin.</p>
        </li>
        </ol>
        <p>Kunjungan ke Tembok Berlin memberikan pengalaman yang tak terlupakan dan penting untuk memahami sejarah Jerman.</p>
        <p>Berikut ini beberapa hotel favorit yang populer di Berlin:</p>
        <ol>
        <li>
        <p><a title="The Ritz-Carlton" href="https://www.booking.com/hotel/de/the-ritz-carlton-berlin.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Ritz-Carlton</a>, Berlin: Hotel mewah ini terletak di pusat kota Berlin, dengan dekorasi bergaya Eropa yang elegan. Fasilitas hotel termasuk restoran, bar, spa, pusat kebugaran, dan kamar-kamar yang luas dan nyaman. Harga kamar mulai dari sekitar 250 Euro per malam.</p>
        </li>
        <li>
        <p><a title="Hotel Adlon Kempinski" href="https://www.booking.com/hotel/de/adlon-kempinski-berlin.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Adlon Kempinski</a>: Hotel yang terletak di dekat Pintu Brandenburg ini menawarkan pemandangan yang indah dan fasilitas yang mewah. Fasilitas hotel termasuk restoran dengan bintang Michelin, spa, pusat kebugaran, dan kamar-kamar yang elegan dan luas. Harga kamar mulai dari sekitar 300 Euro per malam.</p>
        </li>
        <li>
        <p><a title="Grand Hyatt Berlin" href="https://www.booking.com/hotel/de/grand-hyatt-berlin.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Grand Hyatt Berlin</a>: Hotel yang terletak di pusat kota Berlin ini menawarkan pemandangan yang spektakuler dari Berlin. Fasilitas hotel termasuk restoran, bar, spa, pusat kebugaran, dan kamar-kamar yang modern dan luas. Harga kamar mulai dari sekitar 200 Euro per malam.</p>
        </li>
        <li>
        <p><a title="Titanic Gendarmenmarkt Berlin" href="https://www.booking.com/hotel/de/titanic-gendarmenmarkt-berlin.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Titanic Gendarmenmarkt Berlin</a>: Hotel yang terletak di dekat Gedung Konser Berlin ini menawarkan pemandangan yang indah dan fasilitas yang mewah. Fasilitas hotel termasuk restoran, bar, spa, pusat kebugaran, dan kamar-kamar yang elegan dan nyaman. Harga kamar mulai dari sekitar 150 Euro per malam.</p>
        </li>
        </ol>
        <p>Harga-harga tersebut dapat berubah tergantung pada musim dan ketersediaan kamar. Namun, hotel-hotel ini adalah beberapa pilihan favorit yang dapat dipertimbangkan ketika menginap di Berlin.</p>
        <p>Dam berikut ini adalah beberapa pilihan hotel murah di Berlin:</p>
        <ol>
        <li>
        <p><a title="a&amp;o Berlin Mitte" href="https://www.booking.com/hotel/de/mitteberlinhostelao.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">a&amp;o Berlin Mitte</a>: Hotel ini terletak di kawasan Mitte, hanya beberapa menit berjalan kaki dari Stasiun Kereta Bawah Tanah Rosenthaler Platz. Hotel ini menawarkan kamar-kamar bergaya hostel dengan fasilitas yang sederhana, seperti kamar mandi bersama dan akses Wi-Fi gratis. Harga kamar mulai dari sekitar 25 Euro per malam.</p>
        </li>
        <li>
        <p><a title="Meininger Hotel Berlin Mitte Humboldthaus" href="https://www.booking.com/hotel/de/meininger-berlin-mitte.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Meininger Hotel Berlin Mitte Humboldthaus</a>: Hotel ini juga terletak di kawasan Mitte, hanya beberapa menit berjalan kaki dari Gedung Reichstag dan Pintu Brandenburg. Hotel ini menawarkan kamar-kamar bergaya hostel dengan fasilitas yang sederhana, seperti kamar mandi bersama dan akses Wi-Fi gratis. Harga kamar mulai dari sekitar 30 Euro per malam.</p>
        </li>
        <li>
        <p>Baxpax Downtown Hostel/Hotel: Hotel ini terletak di kawasan Mitte, dekat dengan Stasiun Kereta Bawah Tanah Rosa-Luxemburg-Platz. Hotel ini menawarkan kamar-kamar bergaya hostel dengan fasilitas yang sederhana, seperti kamar mandi bersama dan akses Wi-Fi gratis. Harga kamar mulai dari sekitar 35 Euro per malam.</p>
        </li>
        <li>
        <p><a title="H2 Hotel Berlin Alexanderplatz" href="https://www.booking.com/hotel/de/h2-berlin-alexanderplatz.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">H2 Hotel Berlin Alexanderplatz</a>: Hotel ini terletak di kawasan Mitte, hanya beberapa menit berjalan kaki dari Alexanderplatz. Hotel ini menawarkan kamar-kamar modern dengan fasilitas yang lebih lengkap, seperti kamar mandi pribadi dan akses Wi-Fi gratis. Harga kamar mulai dari sekitar 40 Euro per malam.</p>
        </li>
        <li>
        <p><a title="Hotel Transit Loft" href="https://www.booking.com/hotel/de/transitloft.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Transit Loft</a>: Hotel ini terletak di kawasan Friedrichshain, hanya beberapa menit berjalan kaki dari Stasiun Kereta Bawah Tanah Frankfurter Tor. Hotel ini menawarkan kamar-kamar bergaya loft dengan fasilitas yang sederhana, seperti kamar mandi bersama dan akses Wi-Fi gratis. Harga kamar mulai dari sekitar 50 Euro per malam.</p>
        </li>
        </ol>
        <p>Harga-harga tersebut dapat berubah tergantung pada musim dan ketersediaan kamar. Namun, hotel-hotel ini bisa menjadi pilihan yang baik untuk menginap dengan harga yang terjangkau di Berlin.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/Alk12ENlfwk',
                'thumb' => 'place1379274720_Brandenburg-Gate-Berlin.jpg',
                'address' => 'Pariser Platz, 10117 Berlin',
                'created_at' => null,
                'updated_at' => '2023-02-26 21:22:11',
            ],
            [
                'id' => 21,
                'country_id' => 4,
                'name' => 'Katedral Köln',
                'slug' => 'katedral-koln',
                'hotels' => '',
                'latitude' => '50.9412784',
                'longitude' => '6.9582814',
                'attractions' => '<p>Katedral K&ouml;ln, atau K&ouml;lner Dom dalam bahasa Jerman, adalah katedral Katolik Roma yang terletak di kota K&ouml;ln, Jerman. Katedral ini adalah salah satu landmark paling terkenal di Jerman dan menjadi salah satu destinasi wisata terpopuler di negara tersebut.</p>
        <p>Katedral ini dibangun pada abad ke-13 dan selesai pada abad ke-19, dan merupakan salah satu contoh terbaik arsitektur Gothik di Eropa. Katedral ini memiliki tinggi sekitar 157 meter dan dikelilingi oleh empat menara. Bagian dalamnya juga sangat indah, dengan kaca patri yang indah, ukiran kayu, dan patung-patung.</p>
        <p>Pengunjung dapat menikmati keindahan katedral dengan mengunjungi bagian dalam dan menjelajahi kapel-kapel dan altar yang indah. Pengunjung juga dapat menaiki tangga yang curam ke atas menara dan menikmati pemandangan kota K&ouml;ln dari ketinggian.</p>
        <p>Selain itu, Katedral K&ouml;ln juga menawarkan tur berpemandu, yang memungkinkan pengunjung untuk mempelajari lebih banyak tentang sejarah dan arsitektur katedral. Ada juga museum yang terletak di bawah katedral yang menampilkan berbagai artefak dan benda seni dari sejarah katedral dan kota K&ouml;ln.</p>
        <p>Katedral K&ouml;ln merupakan salah satu tempat paling populer di Jerman, dan biasanya ramai dengan pengunjung sepanjang tahun. Jika Anda ingin mengunjungi katedral ini, sebaiknya datang pagi hari atau di luar jam kunjungan yang ramai. Katedral ini juga dapat diakses dengan mudah melalui transportasi umum, seperti kereta atau bus.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/GgRMY6dKCyU',
                'thumb' => 'place1379274820_Cologne-Cathedral1.jpg',
                'address' => 'Dompropstei, Margarethenkloster 5, 50667 Cologne',
                'created_at' => null,
                'updated_at' => '2023-02-27 13:09:33',
            ],
            [
                'id' => 22,
                'country_id' => 4,
                'name' => 'Haus der Kulturen der Welt',
                'slug' => 'haus-der-kulturen-der-welt',
                'hotels' => '',
                'latitude' => '52.518545',
                'longitude' => '13.363709',
                'attractions' => '<p>Haus der Kulturen der Welt, atau House of World Cultures dalam bahasa Inggris, adalah pusat seni dan budaya internasional yang terletak di Berlin, Jerman. Tempat ini dikenal dengan sejumlah acara seni, pertunjukan, diskusi dan festival yang berfokus pada topik dan tema internasional dan interkultural.</p>
        <p>Di Haus der Kulturen der Welt, pengunjung dapat menemukan berbagai program seni dan budaya yang menarik, seperti:</p>
        <ol>
        <li>Pertunjukan seni: Haus der Kulturen der Welt menampilkan pertunjukan seni dari seluruh dunia, termasuk teater, tari, musik, dan instalasi seni. Acara-acara ini menampilkan artis-artis internasional dan terkadang merupakan perpaduan antara berbagai seni dan budaya.</li>
        <li>Diskusi dan kuliah: Tempat ini juga sering menjadi tuan rumah diskusi dan kuliah terbuka yang menampilkan panelis dan pembicara dari berbagai latar belakang dan keahlian. Topik diskusi yang dibahas di sini seringkali berkaitan dengan seni, budaya, dan isu-isu internasional terkini.</li>
        <li>Festival: Haus der Kulturen der Welt juga menjadi tuan rumah berbagai festival, seperti festival film internasional, festival musik, dan festival seni dan budaya lainnya. Festival-festival ini menampilkan karya seni dari seluruh dunia dan biasanya dihadiri oleh pengunjung dari berbagai negara.</li>
        <li>Pameran seni: Tempat ini juga memiliki galeri seni yang menampilkan pameran seni dari seniman-seniman internasional yang berfokus pada tema-tema tertentu, seperti politik, identitas, dan kebudayaan.</li>
        </ol>
        <p>Haus der Kulturen der Welt adalah tempat yang menarik untuk dikunjungi bagi mereka yang tertarik dengan seni dan budaya internasional. Acara-acara yang diadakan di sini menyediakan pengalaman yang menginspirasi dan mendalam dalam hal seni, budaya, dan isu-isu internasional yang penting.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/GiRQu8O02Wg',
                'thumb' => 'place1379274888_house_of_world_cultures-haus_der_kulturen_der_welt_2102_jpg_600x.jpg',
                'address' => 'John-Foster-Dulles-Allee 10, 10557 Berlin',
                'created_at' => null,
                'updated_at' => '2023-02-27 13:10:16',
            ],
            [
                'id' => 23,
                'country_id' => 4,
                'name' => 'Marienplatz, Munich',
                'slug' => 'marienplatz-munich',
                'hotels' => '',
                'latitude' => '48.1362105',
                'longitude' => '11.572893',
                'attractions' => '<p>Marienplatz adalah pusat kota di Munich yang terkenal dengan arsitektur dan sejarahnya yang kaya. Berikut adalah beberapa tempat yang dapat kamu kunjungi saat berjalan-jalan di Marienplatz:</p>
        <ol>
        <li>Neues Rathaus (Balai Kota Baru): Gedung balai kota ini sangat indah dan memiliki jam klasik yang terkenal di Munich. Jika kamu naik ke menara, kamu akan mendapatkan pemandangan kota yang luar biasa.</li>
        <li>Mariens&auml;ule (Kolom Maria): Monumen ini dibangun untuk merayakan kemenangan kota Munich dalam perang pada abad ke-17. Kolom Maria juga sangat terkenal karena arsitekturnya yang menakjubkan.</li>
        <li>Frauenkirche (Gereja Perawan Maria): Gereja ini merupakan salah satu landmark terkenal di Munich dan merupakan salah satu gereja gotik terbesar di Eropa. Di dalamnya terdapat patung kayu yang terkenal, "The Devil\'s Footprint."</li>
        <li>Viktualienmarkt: Pasar tradisional di Munich yang menjual makanan dan minuman khas Bavaria. Kamu dapat menemukan berbagai jenis sosis, bir, dan roti khas di sini.</li>
        <li>Hofbr&auml;uhaus: Tempat ini adalah tempat paling terkenal untuk menikmati bir di Munich. Kamu bisa merasakan bir khas Munich sambil menikmati hidangan tradisional Jerman.</li>
        <li>Residenz Munich: Istana yang sangat indah dan megah yang dulunya merupakan tempat tinggal para penguasa Bayern. Kamu dapat mengunjungi ruang kerajaan dan ruang balai untuk melihat seni dan dekorasi klasik.</li>
        <li>Englischer Garten: Taman kota yang terkenal di Munich, tempat ini adalah salah satu taman terbesar di dunia dan sangat cocok untuk berjalan-jalan atau bersepeda.</li>
        </ol>
        <p>Selamat menikmati jalan-jalan di Marienplatz, Munich!</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/C7VFmO6j918',
                'thumb' => 'place1379275010_marienplatz.jpg',
                'address' => '80331 München',
                'created_at' => null,
                'updated_at' => '2023-02-27 13:10:59',
            ],
            [
                'id' => 24,
                'country_id' => 4,
                'name' => 'Gereja St. Nicholas',
                'slug' => 'gereja-st-nicholas',
                'hotels' => '',
                'latitude' => '52.516601',
                'longitude' => '13.4077527',
                'attractions' => '<p>Gereja St. Nicholas (St. Nikolai-Kirche) adalah salah satu gereja yang terkenal di Berlin. Berikut adalah beberapa informasi tentang gereja ini:</p>
        <ol>
        <li>Sejarah: Gereja ini dibangun pada abad ke-13 dan terletak di pusat kota Berlin. Selama Perang Dunia II, gereja ini hampir sepenuhnya hancur akibat serangan bom yang dilakukan Sekutu pada tahun 1943. Setelah perang, gereja ini dibangun kembali dan dibuka kembali sebagai gedung pertemuan pada tahun 1987.</li>
        <li>Arsitektur: Gereja St. Nicholas memiliki arsitektur yang khas, dengan menara lonceng setinggi 80 meter dan bagian depan gereja yang indah. Di dalam gereja, terdapat dekorasi dan ornamen yang indah, seperti jendela-jendela kaca patri yang besar dan ukiran kayu di altar.</li>
        <li>Acara: Gereja St. Nicholas sering dijadikan tempat konser dan pertunjukan musik klasik. Konser Natal dan perayaan musik gereja juga diadakan di gereja ini setiap tahunnya. Selain itu, gereja ini juga sering dijadikan tempat pertemuan untuk kegiatan sosial dan politik.</li>
        <li>Signifikansi Sejarah: Gereja St. Nicholas memiliki signifikansi sejarah yang besar di Jerman, karena gereja ini adalah pusat dari gerakan damai dan reformasi di Jerman Timur pada tahun 1989. Selama waktu itu, gereja ini menjadi tempat berkumpulnya warga yang ingin melakukan protes terhadap pemerintah dan menuntut reformasi politik di Jerman Timur.</li>
        </ol>
        <p>Jika kamu berkunjung ke Berlin, gereja St. Nicholas patut untuk dikunjungi karena sejarahnya yang kaya dan arsitektur yang indah.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/uKlPfgi8xHw',
                'thumb' => 'place1379275142_tumblr_mehvkznrwq1qf661u.jpg',
                'address' => 'Nikolaikirchplatz, 10178 Berlin',
                'created_at' => null,
                'updated_at' => '2023-02-27 13:11:49',
            ],
            [
                'id' => 25,
                'country_id' => 4,
                'name' => 'Oktoberfest, Munich',
                'slug' => 'oktoberfest-munich',
                'hotels' => '',
                'latitude' => '48.1367203',
                'longitude' => '11.576754',
                'attractions' => '<p>Oktoberfest adalah festival bir tahunan yang diadakan di Munich, Jerman. Festival ini biasanya diadakan pada akhir September hingga awal Oktober, dan menarik pengunjung dari seluruh dunia. Berikut adalah beberapa hal yang dapat kamu temukan di Oktoberfest:</p>
        <ol>
        <li>Bir: Oktoberfest terkenal karena bir khasnya, yang disajikan di gelas besar dengan ukuran 1 liter. Bir yang disajikan di Oktoberfest biasanya merupakan jenis bir M&auml;rzen, yang memiliki rasa yang lebih kaya dan berwarna kecoklatan.</li>
        <li>Makanan: Kamu dapat menemukan berbagai jenis makanan khas Jerman di Oktoberfest, seperti sosis bratwurst, pretzel yang besar, daging panggang, dan sauerkraut.</li>
        <li>Kostum: Banyak pengunjung Oktoberfest mengenakan pakaian tradisional Jerman, seperti dirndl (pakaian wanita) dan lederhosen (pakaian pria).</li>
        <li>Wahana: Terdapat berbagai jenis wahana di Oktoberfest, seperti roller coaster dan merry-go-round, yang cocok untuk pengunjung segala usia.</li>
        <li>Musik dan Tarian: Musik tradisional Jerman dan tarian dapat ditemukan di Oktoberfest. Kamu juga dapat menemukan musik modern dan panggung hiburan yang menarik.</li>
        <li>Budaya Jerman: Oktoberfest menawarkan kesempatan untuk merasakan dan mengalami budaya Jerman secara langsung. Kamu dapat berinteraksi dengan penduduk setempat dan mempelajari lebih lanjut tentang kebudayaan Jerman.</li>
        </ol>
        <p>Oktoberfest adalah festival yang sangat populer di Jerman dan di seluruh dunia, dan menjadi tujuan wisata yang populer bagi orang yang ingin merasakan budaya Jerman. Namun, dikarenakan situasi pandemi saat ini, pastikan untuk memeriksa apakah Oktoberfest diadakan pada tahun tersebut dan jika diadakan, pastikan untuk mengikuti protokol kesehatan yang diberlakukan.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/pV3jF_IyGk8',
                'thumb' => 'place1379275222_Oktoberfest-in-Munich.jpg',
                'address' => 'Munich',
                'created_at' => null,
                'updated_at' => '2023-02-27 13:12:21',
            ],
            [
                'id' => 26,
                'country_id' => 4,
                'name' => 'Bebelplatz',
                'slug' => 'bebelplatz',
                'hotels' => '',
                'latitude' => '52.5168998',
                'longitude' => '13.3952395',
                'attractions' => '<p>Bebelplatz adalah sebuah plaza yang terletak di pusat kota Berlin, Jerman. Berikut adalah beberapa hal yang dapat kamu temukan di Bebelplatz:</p>
        <ol>
        <li>Oper Berlin: Oper Berlin (Berlin State Opera) adalah gedung opera yang terletak di Bebelplatz. Gedung ini dibangun pada abad ke-18 dan merupakan salah satu gedung opera terbesar dan paling terkenal di dunia.</li>
        <li>Humboldt University: Humboldt University adalah salah satu universitas paling terkenal di Jerman. Kampus utamanya terletak di Bebelplatz, dan kamu dapat melihat bangunan-bangunan universitas yang indah di sekitar area ini.</li>
        <li>Memorial Buku Terbakar: Pada tahun 1933, Nazi membakar sekitar 20.000 buku di Bebelplatz untuk mempromosikan ideologi mereka. Saat ini, terdapat sebuah memorial di Bebelplatz untuk menghormati kebebasan berbicara dan berpikir, serta mengingat peristiwa tragis tersebut.</li>
        <li>Konser dan Acara: Bebelplatz sering digunakan untuk konser dan acara budaya. Konser musik klasik, festival musik dan acara budaya lainnya sering diadakan di plaza ini.</li>
        <li>Pemandangan: Bebelplatz menawarkan pemandangan yang indah dengan latar belakang gedung-gedung bersejarah dan bangunan-bangunan universitas. Kamu dapat menikmati suasana tenang di plaza ini dan menikmati pemandangan yang menakjubkan.</li>
        </ol>
        <p>Bebelplatz adalah salah satu tempat yang penting dan menarik untuk dikunjungi di Berlin. Terdapat banyak hal yang dapat kamu lihat dan alami di tempat ini, seperti bangunan-bangunan bersejarah, kegiatan budaya dan pemandangan indah.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/U8k4p5FN1-Y',
                'thumb' => 'place1379275344_217.jpg',
                'address' => 'Bebelplatz, Berlin',
                'created_at' => null,
                'updated_at' => '2023-02-27 13:12:59',
            ],
            [
                'id' => 27,
                'country_id' => 4,
                'name' => 'Berliner Dom',
                'slug' => 'berliner-dom',
                'hotels' => '',
                'latitude' => '52.5191213',
                'longitude' => '13.4001665',
                'attractions' => '<p>Berliner Dom adalah gereja Katedral yang terletak di pusat kota Berlin, Jerman. Berikut adalah beberapa hal yang dapat kamu temukan di Berliner Dom:</p>
        <ol>
        <li>Sejarah: Berliner Dom awalnya dibangun pada abad ke-15, tetapi dibangun kembali pada abad ke-19 setelah mengalami kerusakan parah. Gereja ini memiliki arsitektur yang indah dan menakjubkan dengan interior yang luas dan mengesankan.</li>
        <li>Koleksi Seni: Berliner Dom memiliki koleksi seni yang luas dan indah, termasuk lukisan-lukisan, patung-patung, dan arsitektur yang indah. Kamu dapat menemukan seni-seni dari berbagai periode sejarah, seperti Renaisans dan Barok.</li>
        <li>Tur Gedung: Kamu dapat melakukan tur gedung ke atas Berliner Dom, yang menawarkan pemandangan indah dari atas kota Berlin. Kamu dapat melihat pemandangan kota, sungai Spree, dan landmarks terkenal lainnya.</li>
        <li>Konser: Berliner Dom sering menjadi tuan rumah konser musik klasik dan acara musik lainnya. Kamu dapat menikmati pertunjukan musik klasik di gereja yang indah dan kaya sejarah ini.</li>
        <li>Ibadah: Berliner Dom masih aktif sebagai tempat ibadah dan gereja. Kamu dapat menghadiri ibadah atau misa di gereja ini.</li>
        </ol>
        <p>Berliner Dom adalah salah satu landmark terkenal dan menarik di Berlin. Gereja ini memiliki sejarah yang kaya dan menawarkan banyak hal yang dapat kamu lihat dan alami, seperti koleksi seni, tur gedung, konser musik, dan ibadah. Jika kamu berkunjung ke Berlin, Berliner Dom adalah tempat yang harus kamu kunjungi.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/LyV9mPOTlsQ',
                'thumb' => 'place1379275421_berliner-dom.jpg',
                'address' => 'Am Lustgarten, 10178 Berlin',
                'created_at' => null,
                'updated_at' => '2023-02-27 13:13:34',
            ],
            [
                'id' => 28,
                'country_id' => 4,
                'name' => 'Jembatan air Magdeburg',
                'slug' => 'jembatan-air-magdeburg',
                'hotels' => '',
                'latitude' => '52.130807',
                'longitude' => '11.628878',
                'attractions' => '<p>Jembatan Air Magdeburg (Water Bridge Magdeburg) adalah sebuah jembatan yang unik yang terletak di kota Magdeburg, Jerman. Jembatan ini merupakan jembatan navigasi terpanjang di dunia dan menghubungkan antara Sungai Elbe dan Kanal Mittelland.</p>
        <p>Berikut adalah beberapa hal yang dapat kamu temukan di Jembatan Air Magdeburg:</p>
        <ol>
        <li>Sejarah: Jembatan Air Magdeburg dibangun pada tahun 2003 sebagai bagian dari proyek besar untuk meningkatkan infrastruktur transportasi di Jerman. Konstruksinya menghabiskan biaya sekitar &euro;500 juta.</li>
        <li>Konstruksi: Jembatan ini memiliki panjang sekitar 918 meter dan tinggi sekitar 23 meter. Jembatan ini terdiri dari 24.000 ton baja dan dapat menampung kapal dengan ukuran hingga 135 meter.</li>
        <li>Wisata: Jembatan Air Magdeburg telah menjadi tujuan wisata populer di Jerman. Kamu dapat mengunjungi jembatan dan menaiki kapal di kanal yang menghubungkan antara sungai Elbe dan Kanal Mittelland. Selain itu, kamu dapat berjalan-jalan di sekitar area jembatan dan menikmati pemandangan yang indah.</li>
        <li>Olahraga Air: Jembatan Air Magdeburg sangat populer di kalangan penggemar olahraga air, seperti kayaking, kano, dan berenang. Sungai Elbe dan Kanal Mittelland menyediakan tempat yang ideal untuk berolahraga air.</li>
        <li>Akses Transportasi: Jembatan ini memiliki akses transportasi yang baik, sehingga kamu dapat dengan mudah mencapai jembatan dengan menggunakan kendaraan umum atau mobil pribadi.</li>
        </ol>
        <p>Jembatan Air Magdeburg adalah sebuah keajaiban teknologi modern yang menarik dan menawarkan pengalaman yang unik bagi pengunjung. Jembatan ini memiliki sejarah yang menarik dan menjadi tujuan wisata yang populer di Jerman. Kamu dapat menikmati pemandangan yang indah, berolahraga air, atau hanya sekedar berjalan-jalan di sekitar area jembatan ini.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/M7CLwgJhNOU',
                'thumb' => 'place1379275621_magdeburg-water-bridge5[2].jpg',
                'address' => 'Magdeburg',
                'created_at' => null,
                'updated_at' => '2023-02-27 13:14:14',
            ],
            [
                'id' => 29,
                'country_id' => 4,
                'name' => 'Berlin cabaret',
                'slug' => 'berlin-cabaret',
                'hotels' => '',
                'latitude' => '52.519171',
                'longitude' => '13.4060912',
                'attractions' => '<p>Berlin dikenal sebagai kota cabaret yang mempunyai sejarah dan budaya penting dalam industri hiburan di Jerman. Berikut adalah beberapa hal yang dapat kamu lihat saat berkunjung ke Berlin cabaret:</p>
        <ol>
        <li>Pertunjukan Musik dan Dance: Berlin cabaret menyuguhkan pertunjukan yang mencakup berbagai genre musik, seperti jazz, blues, dan rock, serta tari-tarian menarik seperti tarian perut dan tarian salsa. Kamu dapat menemukan banyak klub dan tempat hiburan di Berlin yang menampilkan pertunjukan-pertunjukan seperti ini.</li>
        <li>Komedi dan Satire: Berlin cabaret juga menampilkan pertunjukan komedi dan satire yang penuh dengan candaan, kecerdasan, dan ironi. Pertunjukan seperti ini biasanya mengambil topik-topik politik atau sosial terkini dan mengajak penonton untuk berpikir kritis dan berbicara tentang isu-isu yang penting.</li>
        <li>Makanan dan Minuman: Selain pertunjukan, Berlin cabaret juga menawarkan hidangan dan minuman yang lezat. Kamu dapat menikmati hidangan khas Jerman seperti currywurst dan bir di klub-klub cabaret tertentu.</li>
        <li>Sejarah: Berlin cabaret memiliki sejarah yang panjang dan penting dalam industri hiburan di Jerman. Kamu dapat menemukan banyak tempat di Berlin yang terkait dengan sejarah cabaret, seperti Wintergarten Variete, sebuah teater kuno yang masih beroperasi hingga saat ini.</li>
        <li>Budaya dan Tradisi: Cabaret adalah bagian penting dari budaya dan tradisi Berlin. Kamu dapat menemukan banyak museum dan galeri seni yang mengenalkan sejarah dan budaya cabaret di Berlin, seperti Berlin Story Museum dan Museum of Applied Arts.</li>
        </ol>
        <p>Jika kamu ingin merasakan pengalaman yang unik dan menghibur di Berlin, cobalah untuk berkunjung ke salah satu klub atau tempat hiburan cabaret yang terkenal di kota ini. Kamu dapat menikmati pertunjukan musik, tari, komedi, atau satire yang menarik, sambil menikmati hidangan dan minuman yang lezat. Kamu juga dapat belajar lebih banyak tentang sejarah dan budaya cabaret di Berlin di museum dan galeri seni yang khusus membahas topik ini.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/Eyxa1Sfq6Q8',
                'thumb' => 'place1379275703_berlin4.jpg',
                'address' => 'Berlin',
                'created_at' => null,
                'updated_at' => '2023-02-27 13:14:43',
            ],
            [
                'id' => 30,
                'country_id' => 3,
                'name' => 'La Madeleine',
                'slug' => 'la-madeleine',
                'hotels' => '',
                'latitude' => '48.8710372',
                'longitude' => '2.3206767',
                'attractions' => '<p>La Madeleine adalah sebuah gereja yang terletak di pusat kota Paris, Prancis. Gereja ini terkenal dengan arsitektur neoklasiknya yang indah dan merupakan salah satu bangunan paling ikonik di kota Paris.</p>
        <p>Jika Anda mengunjungi La Madeleine, ada beberapa hal menarik yang dapat Anda lihat dan lakukan, antara lain:</p>
        <ol>
        <li>Jelajahi arsitektur neoklasik - La Madeleine memiliki desain arsitektur yang unik dengan pilar-pilar besar yang membingkai bangunan dan pahatan-pahatan yang menghiasi fasadnya. Anda dapat menghabiskan waktu untuk mengagumi detail-detail arsitektur ini.</li>
        <li>Kunjungi interior gereja - Setelah Anda menikmati pemandangan dari luar, Anda dapat memasuki gereja dan melihat interior yang indah. Di dalamnya terdapat tiga altar, termasuk altar utama yang menampilkan patung-patung marmer dan relief yang indah.</li>
        <li>Nikmati musik gereja - La Madeleine terkenal dengan tradisi musiknya yang kaya dan sering mengadakan konser musik klasik dan organ. Anda bisa mengecek jadwal konser dan merencanakan kunjungan Anda sesuai dengan acara musik yang tersedia.</li>
        <li>Jelajahi sekitar La Madeleine - Gereja ini terletak di jantung kota Paris, yang berarti Anda dapat menghabiskan waktu untuk berjalan-jalan di sekitar daerah ini dan mengeksplorasi tempat-tempat menarik lainnya, seperti Place de la Concorde dan jalan-jalan perbelanjaan di sekitar Galeries Lafayette.</li>
        <li>Berdoa atau menghadiri misa - Jika Anda beragama Katolik, Anda dapat menghadiri misa di La Madeleine atau menghabiskan waktu untuk berdoa dan merenung di dalam gereja.</li>
        </ol>
        <p>La Madeleine sangat mudah diakses dengan berbagai pilihan transportasi umum seperti metro, bus, dan taksi. Selain itu, gereja ini juga dekat dengan beberapa tempat wisata populer di Paris seperti Place Vendome, Opera Garnier, dan Musee de l\'Orangerie.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379275865_Eglise-de-la-Madeleine-parijs.jpg',
                'address' => '14 Rue de Surène, 75008 Paris',
                'created_at' => null,
                'updated_at' => '2023-02-28 20:00:39',
            ],
            [
                'id' => 31,
                'country_id' => 3,
                'name' => 'Menara Eiffel',
                'slug' => 'menara-eiffel',
                'hotels' => '',
                'latitude' => '48.8588871',
                'longitude' => '2.2944861',
                'attractions' => '<p>Menara yang dirancang dan dibangun oleh Gustave Eiffel ini telah menjadi ikon kota Paris sejak diresmikan  pada tahun 1889. Saat itu bangunan ini merupakan bangunan tertinggi di dunia. Dari tahun ketahun, wisatawan yang berkunjung untuk mengabadikannya tak pernah berkurang.  Sebegitu banyak sehingga pada tahun 2006, menjadi monumen yang paling banyak dikunjungi di dunia, lebih dari 6 juta wisatawan.<br>Pada ketinggian 324m , walaupun tak sempat menaikinya hingga puncak menara ini dapat dinikmati dari segala sudut kota Paris. Ada 2 buah restoran yang cukup terkenal pada ketinggian tersebut, yaitu Altitude 95 dan Jules Verne, di mana turis dapat melihat pemandangan kota Paris yang menakjubkan sambil menikmati hidangan kuliner asli Perancis, serta berbagai macam suvenir. </p><p><em>Fakta mengenai Menara Eiffel</em><br>Pada awalnya menara ini menuai kontroversi saat perencanaannya. Hanya sedikit orang mengetahui bahwa menara Eiffel dibangun untuk menyambut Pameran Dagang seDunia yang diselenggarakan di kota Paris pada tahun 1889. Dibangun hanya dalam waktu relatif singkat, hanya dua tahun saja, sebenarnya orang meragukan keberadaan bangunan raksasa yang dianggap tidak terlalu kuat karena digunakan hanya untuk event yang sifatnya sementara saja, nyatanya sampai sekarang  tetap kokoh berdiri, bahkan menjadi simbol kota  yang tak dapat dipisahkan dengan Paris dan peresmiannya menandai satu abad peringatan Revolusi Perancis  tahun 1789 itu.</p>
        <p>Berikut beberapa hal yang dapat Anda lakukan saat berkunjung ke Eiffel Tower:</p>
        <ol>
        <li>Menikmati pemandangan dari Eiffel Tower: Anda dapat menikmati pemandangan kota Paris dari tiga tingkat observasi yang berbeda di Eiffel Tower. Tingkat pertama dan kedua dapat dicapai dengan lift atau tangga, sedangkan untuk mencapai tingkat ketiga hanya dapat dicapai dengan lift.</li>
        <li>Menikmati makanan dan minuman: Eiffel Tower memiliki beberapa restoran dan bar yang menawarkan pemandangan indah dari ketinggian. Anda dapat menikmati minuman atau makanan ringan di restoran-cafe Jules Verne yang berada di tingkat kedua.</li>
        <li>Menjelajahi sekitar Eiffel Tower: Setelah menikmati pemandangan dari Eiffel Tower, Anda dapat menjelajahi sekitar area sekitar. Di sekitar Eiffel Tower terdapat beberapa taman indah seperti Champ de Mars dan Trocadero.</li>
        <li>Melakukan foto-foto: Eiffel Tower merupakan salah satu tempat yang sangat populer untuk berfoto. Anda dapat mengambil foto di beberapa spot yang tersedia seperti dari bawah menara atau dari jembatan yang melintasi Sungai Seine.</li>
        <li>Menonton pencahayaan malam: Eiffel Tower juga menawarkan pencahayaan indah di malam hari. Setiap malam, lampu-lampu di menara tersebut menyala dan memberikan pemandangan yang sangat indah.</li>
        </ol>
        <p>Ada beberapa pilihan transportasi umum yang dapat digunakan untuk mencapai Eiffel Tower, seperti metro, bus, dan kereta. Anda dapat menggunakan aplikasi transportasi umum atau membeli tiket di loket yang tersedia di stasiun-stasiun terdekat. Anda juga dapat menggunakan taksi atau berjalan kaki jika Anda berada di area sekitar.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/I7Ine0AprAY',
                'thumb' => 'place1379275921_Eiffel-Tower-paris-215498_1024_683.jpg',
                'address' => 'Champ de Mars, 5 Avenue Anatole France, 75007 Paris',
                'created_at' => null,
                'updated_at' => '2023-02-28 20:02:06',
            ],
            [
                'id' => 32,
                'country_id' => 3,
                'name' => 'Sacre Coeur',
                'slug' => 'sacre-coeur',
                'hotels' => '',
                'latitude' => '48.8869478',
                'longitude' => '2.34351',
                'attractions' => '<p>Sacre Coeur adalah basilika Katolik Roma yang terletak di bukit Montmartre di Paris, Prancis. Gereja yang satu ini agak berbeda dengan gaya bangunan Romanesque di sekitarnya, ia dibangun dengan gaya Roman Byzantine, tampak menonjol terang keputihan diatas bukit  Montmartre dengan ketinggian 83m di atas permukaan tanah. Berikut beberapa hal yang dapat ditemukan di sekitar Sacre Coeur:</p>
        <ol>
        <li>Pemandangan kota Paris: Dari atas bukit Montmartre, Anda dapat menikmati pemandangan kota Paris yang indah, terutama di malam hari.</li>
        <li>Basilika Sacre Coeur: Basilika yang megah ini adalah tujuan wisata utama di Montmartre. Dibangun pada awal abad ke-20, basilika ini memiliki arsitektur yang indah dan interior yang sangat indah.</li>
        <li>Place du Tertre: Terletak di sebelah basilika, Place du Tertre adalah daerah yang populer di Montmartre yang dikenal dengan seniman jalanan, kafe, dan toko suvenir.</li>
        <li>Musée de Montmartre: Museum ini terletak di sebuah rumah tua di Montmartre dan menampilkan karya seni dan artefak yang berkaitan dengan sejarah Montmartre dan seniman yang terkenal tinggal di sana.</li>
        <li>Lapangan Mars: Terletak sekitar 2 km dari Sacre Coeur, Lapangan Mars adalah taman kota besar yang menawarkan pemandangan indah ke Menara Eiffel.</li>
        <li>Pigalle: Terletak di sebelah selatan bukit Montmartre, Pigalle adalah kawasan yang terkenal dengan bioskop, teater, bar, dan klub malam.</li>
        <li>Moulin Rouge: Terletak di Pigalle, Moulin Rouge adalah kabaret yang terkenal dan menawarkan pertunjukan tarian dan musik sepanjang malam.</li>
        </ol>
        <p>Itu hanya beberapa hal yang dapat Anda temukan di sekitar Sacre Coeur. Ada banyak hal yang dapat ditemukan di Montmartre dan sekitarnya, sehingga membuatnya menjadi salah satu tempat yang populer untuk dikunjungi di Paris.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379281947_301b7d.parijs--sacre-coeur.jpg',
                'address' => '35 Rue du Chevalier de la Barre, 75018 Paris',
                'created_at' => null,
                'updated_at' => '2023-02-28 20:03:38',
            ],
            [
                'id' => 33,
                'country_id' => 3,
                'name' => 'Museum Louvre',
                'slug' => 'museum-louvre',
                'hotels' => '',
                'latitude' => '48.86',
                'longitude' => '2.3411111',
                'attractions' => '<p>Museum Louvre adalah salah satu museum seni terbesar di dunia dan merupakan salah satu tujuan wisata terpopuler di Paris, Prancis. Terletak di tengah kota Paris, Louvre adalah museum nasional Perancis. Atraksi yang paling mutakhir adalah Pyramid Kaca, yang begitu terkenal karena masuk dalam film Da Vinci Code yang terkenal itu. Di dalamnya tersimpan kirakira 3.500 benda benda bersejarah dari 6 sM sampai abad 19M. Berdampingan dengan Istana Louvre meliputi luas tanah sekitar 60.600m persegi. Berikut adalah beberapa hal yang dapat ditemukan di Museum Louvre:</p>
        <ol>
        <li>Koleksi Seni: Museum Louvre memiliki koleksi seni yang sangat besar dan terkenal di dunia, termasuk lukisan, patung, dan objek seni lainnya. Beberapa karya seni terkenal yang dapat ditemukan di Museum Louvre termasuk Mona Lisa oleh Leonardo da Vinci, Venus de Milo, dan Winged Victory of Samothrace.</li>
        <li>Istana Louvre: Museum Louvre terletak di dalam bekas istana kerajaan Prancis. Sebagian besar bangunan ini dibangun pada abad ke-12, dan bangunan-bangunan baru ditambahkan selama beberapa abad berikutnya.</li>
        <li>Arsitektur: Bangunan Museum Louvre memiliki arsitektur yang indah dan unik, dengan campuran dari berbagai gaya arsitektur, termasuk gaya Renaisans, Baroque, dan Neo-Klasik.</li>
        <li>Galeri: Museum Louvre memiliki beberapa galeri besar yang menampilkan karya seni dari berbagai periode sejarah dan budaya. Beberapa galeri termasuk Galeri Apollo, Galeri Italia, dan Galeri Lukisan Prancis.</li>
        <li>Departemen seni Islam: Museum Louvre memiliki departemen seni Islam yang menampilkan karya seni dari periode sejarah yang berbeda, seperti seni Islam dari Timur Tengah, Afrika Utara, dan Spanyol.</li>
        <li>Departemen Seni Kuno: Museum Louvre memiliki departemen seni kuno yang menampilkan karya seni dari Mesir Kuno, Mesopotamia, dan Yunani Kuno.</li>
        <li>Toko suvenir dan toko buku: Museum Louvre memiliki beberapa toko suvenir dan toko buku yang menawarkan berbagai barang dan buku tentang seni dan budaya.</li>
        </ol>
        <p>Itu hanya beberapa hal yang dapat ditemukan di Museum Louvre. Museum ini sangat besar dan membutuhkan waktu untuk dieksplorasi sepenuhnya. Jadi, ketika mengunjungi museum ini, disarankan untuk merencanakan waktu yang cukup dan membuat daftar prioritas karya seni yang ingin dilihat.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/xJxH-QuJeXo',
                'thumb' => 'place1379282065_leuvre.jpg',
                'address' => '75001 Paris',
                'created_at' => null,
                'updated_at' => '2023-02-28 20:05:22',
            ],
            [
                'id' => 34,
                'country_id' => 3,
                'name' => 'Katedral Notre Dame',
                'slug' => 'katedral-notre-dame',
                'hotels' => '',
                'latitude' => '48.853668',
                'longitude' => '2.3493795',
                'attractions' => '<p>Katedral Notre Dame de Paris adalah sebuah katedral Katolik Roma yang terkenal dan menjadi salah satu tujuan wisata terpopuler di Paris, Prancis. Gereja ini dibuat dengan rasa seni tinggi dengan gaya arsitektur Gothic yang  sungguh memukau. Kabarnya dibutuhkan waktu hampir 100 tahun untuk menyelesaikannya. Yang menjadi daya tarik utama adalah menaramenaranya, pahatan yang halus serta keindahan mosaik kaca timahnya. Berikut adalah beberapa hal yang dapat ditemukan di Katedral Notre Dame:</p>
        <ol>
        <li>Arsitektur: Katedral Notre Dame adalah contoh arsitektur Gotik klasik yang indah dan rumit. Struktur katedral terdiri dari tiga bagian: depan, pusat, dan belakang, dan memiliki beberapa elemen arsitektur yang menarik, seperti jendela tinggi, lengkungan lancip, dan patung-patung indah.</li>
        <li>Interior: Interior Katedral Notre Dame indah dan megah, dengan langit-langit yang tinggi dan dihiasi dengan lukisan-lukisan dan patung-patung. Beberapa objek seni penting yang terdapat di dalam katedral adalah altar utama dan altar Maria, patung-patung, jendela kaca patri, dan rosarium.</li>
        <li>Kelompok patung: Katedral Notre Dame memiliki banyak patung di dalam dan di luar bangunan, termasuk patung apostel, raja, dan para santo. Beberapa patung terkenal di antaranya adalah patung St. Joan of Arc, St. Denis, dan St. Therese of Lisieux.</li>
        <li>Keuskupan: Katedral Notre Dame adalah keuskupan, yang berarti bahwa katedral ini adalah tempat di mana Uskup Paris dan para imamnya memimpin liturgi dan kegiatan keagamaan.</li>
        <li>Acara musik: Katedral Notre Dame sering menjadi tempat pertunjukan musik dan konser klasik yang menampilkan paduan suara dan orkestra.</li>
        <li>Pemandangan: Dari atas Menara Notre Dame, Anda dapat menikmati pemandangan indah Paris dari ketinggian.</li>
        </ol>
        <p>Itu hanya beberapa hal yang dapat ditemukan di Katedral Notre Dame. Namun, saat ini, katedral sedang dalam proses restorasi karena terkena kebakaran pada tahun 2019, sehingga beberapa area dan fasilitas mungkin tidak dapat diakses.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/O61ng_QqC4I',
                'thumb' => 'place1379282686_notre-dame-cathedral-paris-france.jpg',
                'address' => '6 Parvis Notre-Dame, Place Jean-Paul II, 75004 Paris',
                'created_at' => null,
                'updated_at' => '2023-02-28 20:06:18',
            ],
            [
                'id' => 35,
                'country_id' => 3,
                'name' => 'Arc du Carrousel',
                'slug' => 'arc-du-carrousel',
                'hotels' => '',
                'latitude' => '48.861519',
                'longitude' => '2.3345495',
                'attractions' => '<p>Arc du Carrousel, atau dikenal juga sebagai Arc de Triomphe du Carrousel, adalah sebuah monumen yang terletak di pusat kota Paris, Prancis. Didirikan pada tahun 1808, gerbang terkecil dari tiga buah gerbanggerbang lainnya ini, dibangun oleh kaisar Napoleon Bonaparte untuk memperingati para prajuritnya yang gugur dalam perang mengalahkan kerajaan Austria Raya, mengingatkan pada kesamaan dengan Arc de Constantine di kota Roma. Yang menonjol adalah bentuk 3 pilar utama yang dipahat dengan indah dan 8 buah arca yang sangat indah dari marmer Corinthia dalam bentuk prajurit Napoleon. Berikut adalah beberapa hal yang dapat ditemukan di Arc du Carrousel:</p>
        <ol>
        <li>Arsitektur: Arc du Carrousel dirancang oleh arsitek Charles Percier dan Pierre François Léonard Fontaine pada awal abad ke-19, dan dibangun pada tahun 1809. Monumen ini dibangun sebagai bagian dari proyek pengembangan kota oleh Kaisar Napoleon Bonaparte.</li>
        <li>Patung-patung: Arc du Carrousel dihiasi dengan patung-patung yang menggambarkan kejadian-kejadian penting dalam sejarah Prancis, seperti kepulangan Napoleon dari pulau Elba pada tahun 1815, dan kemenangan Napoleon di Jena pada tahun 1806.</li>
        <li>Pemandangan: Dari atas Arc du Carrousel, Anda dapat menikmati pemandangan indah ke sekitar taman Tuileries dan sekitar area sekitarnya, seperti Museum Louvre dan Place de la Concorde.</li>
        <li>Tempat bersantai: Arc du Carrousel adalah tempat yang populer untuk bersantai dan menikmati suasana di sekitar Taman Tuileries. Banyak orang mengunjungi monumen ini untuk duduk di sekitar area sekitarnya dan menikmati pemandangan.</li>
        <li>Acara: Terkadang Arc du Carrousel digunakan sebagai tempat untuk acara-acara khusus, seperti konser dan pameran seni.</li>
        </ol>
        <p>Itu hanya beberapa hal yang dapat ditemukan di Arc du Carrousel. Monumen ini menjadi salah satu tempat wisata populer di Paris, dan merupakan bagian dari Situs Warisan Dunia UNESCO bersama dengan sejumlah landmark terkenal di sekitar kota Paris.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/F2mIhjACIYc',
                'thumb' => 'place1379282791_arc-caroussel.jpg',
                'address' => 'Cour Napoléon Place du Carrousel 75001, Paris',
                'created_at' => null,
                'updated_at' => '2023-02-28 20:07:33',
            ],
            [
                'id' => 36,
                'country_id' => 3,
                'name' => 'Taman nasional Vanoise',
                'slug' => 'taman-nasional-vanoise',
                'hotels' => '',
                'latitude' => '45.381084',
                'longitude' => '6.721608',
                'attractions' => '<p>Taman Nasional Vanoise adalah taman nasional yang terletak di Pegunungan Alpen, Prancis. Terletak di bagian tenggara negeri ini, taman nasional ini merupakan taman tertua di Perancis dan bagian dari taman nasional Itali yang sampai sekarang merupakan daerah suaka yang dilindungi yang terluas di Eropa Barat. Terletak di sebelah selatan dari puncak yang tertinggi di Eropa, Mont Blanc, meliputi luas lebih dari 130.000 are, merupakan taman geologis dengan berbagai jenis batuan granit, marmer,kapur dan lainlain. Fauna yang spesifik pegunungan seperti kambing gunung, kelinci gunung, biribiri masih banyak ditemukan. Wisata mendaki gunung tertata sepanjang hampir 310 mil menembus taman nasional ini. Berikut adalah beberapa hal yang dapat ditemukan di Taman Nasional Vanoise:</p>
        <ol>
        <li>Keindahan alam: Taman Nasional Vanoise menawarkan keindahan alam yang luar biasa, seperti pegunungan yang menjulang tinggi, lembah-lembah yang hijau, sungai dan danau yang jernih, serta padang rumput yang luas. Taman ini menjadi habitat bagi sejumlah spesies hewan, seperti burung hantu, rubah, rusa, dan banteng.</li>
        <li>Aktivitas di alam terbuka: Taman Nasional Vanoise menyediakan banyak aktivitas di alam terbuka bagi para pengunjungnya, seperti hiking, bersepeda gunung, memancing, dan melihat burung. Ada banyak rute hiking yang mengelilingi taman, dengan tingkat kesulitan yang bervariasi. Selain itu, Anda dapat menikmati keindahan alam di sepanjang rute.</li>
        <li>Museum taman nasional: Terdapat museum taman nasional yang berlokasi di kota Pralognan-la-Vanoise, yang menampilkan informasi tentang keanekaragaman hayati di Taman Nasional Vanoise, serta sejarah dan budaya daerah tersebut.</li>
        <li>Ski: Taman Nasional Vanoise menjadi tujuan wisata ski yang populer selama musim dingin. Terdapat banyak resor ski yang menawarkan pemandangan yang spektakuler dan berbagai jalur ski yang menantang.</li>
        <li>Penginapan: Terdapat beberapa penginapan di sekitar Taman Nasional Vanoise, mulai dari penginapan sederhana hingga hotel yang lebih mewah. Banyak penginapan yang menawarkan pemandangan indah ke pegunungan dan lembah.</li>
        </ol>
        <p>Itu hanya beberapa hal yang dapat ditemukan di Taman Nasional Vanoise. Taman ini menjadi salah satu tempat wisata alam yang terkenal di Prancis dan menawarkan pengalaman yang tak terlupakan bagi para pengunjung yang mencari petualangan di alam terbuka.</p>
        <p>Berikut ini adalah beberapa pilihan hotel di Taman Nasional Vanoise yang dapat Anda pertimbangkan:</p>
        <ol>
        <li>
        <p><a title="Hotel Les Suites du Montana" href="https://www.booking.com/hotel/fr/les-suites-du-montana.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Les Suites du Montana</a> terletak di daerah ski Val Thorens, dengan pemandangan indah ke pegunungan Alpen. Hotel ini menawarkan suite mewah dengan fasilitas lengkap seperti kolam renang dalam ruangan, spa, dan restoran bintang Michelin. Tarif kamar mulai dari sekitar &euro;350 per malam.</p>
        </li>
        <li>
        <p><a title="Le Sherpa" href="https://www.booking.com/hotel/fr/le-sherpa.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Le Sherpa</a> adalah hotel yang terjangkau dan terletak di daerah ski Courchevel. Hotel ini menawarkan kamar-kamar yang nyaman dengan akses mudah ke jalur ski dan restoran yang lezat. Tarif kamar mulai dari sekitar &euro;85 per malam.</p>
        </li>
        <li>
        <p><a title="Les Airelles" href="https://www.booking.com/hotel/fr/les-airelles-courchevel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Les Airelles</a> terletak di daerah ski Courchevel dan menawarkan pemandangan indah ke pegunungan Alpen. Hotel ini menawarkan kamar-kamar yang mewah dan dilengkapi dengan fasilitas lengkap seperti kolam renang dalam ruangan, spa, dan restoran bintang Michelin. Tarif kamar mulai dari sekitar &euro;1.200 per malam.</p>
        </li>
        <li>
        <p><a title="Hotel La Savoyarde" href="https://www.booking.com/hotel/fr/la-savoyarde.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel La Savoyarde</a> adalah hotel terjangkau yang terletak di daerah ski Val d\'Is&egrave;re. Hotel ini menawarkan kamar-kamar yang nyaman dengan akses mudah ke jalur ski dan restoran yang lezat. Tarif kamar mulai dari sekitar &euro;60 per malam.</p>
        </li>
        </ol>
        <p>Itulah beberapa pilihan hotel di Taman Nasional Vanoise yang dapat Anda pertimbangkan, dari hotel mewah hingga hotel terjangkau. Pastikan untuk merencanakan perjalanan Anda dengan baik dan mempertimbangkan preferensi dan anggaran Anda.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/g-QI32RQA2M',
                'thumb' => 'place1379282869_alpes-Vanoise-06-089-(Small).JPG',
                'address' => 'Parc National de la Vanoise',
                'created_at' => null,
                'updated_at' => '2023-02-28 20:24:17',
            ],
            [
                'id' => 37,
                'country_id' => 3,
                'name' => 'Pantheon',
                'slug' => 'pantheon',
                'hotels' => '',
                'latitude' => '48.8456853',
                'longitude' => '2.3459011',
                'attractions' => '<p>Anda mungkin bingung karena ada dua bangunan terkenal dengan nama Pantheon - satu berada di Roma, Italia, dan satu lagi berada di Paris, Prancis.</p>
        <p>Pantheon di Paris adalah bangunan bersejarah yang terletak di Distrik Latin, di seberang Sungai Seine dari Katedral Notre-Dame. Awalnya dibangun sebagai gereja Katolik, bangunan ini kemudian digunakan sebagai kuil penghormatan untuk para tokoh penting di Prancis.</p>
        <p>Berikut adalah beberapa hal yang dapat ditemukan di Pantheon Paris:</p>
        <ol>
        <li>Koleksi Seni dan Arsitektur: Pantheon Paris memiliki koleksi seni dan arsitektur yang mengesankan, termasuk arsitektur klasik yang indah dan patung-patung yang menggambarkan tokoh-tokoh terkenal di Prancis.</li>
        <li>Katedral: Selama masa awal pembangunan, bangunan ini dirancang sebagai gereja Katolik Roma dan memiliki beberapa elemen arsitektur dan seni sakral yang indah.</li>
        <li>Tokoh terkenal: Setelah Revolusi Prancis, bangunan ini diubah menjadi kuil penghormatan bagi para tokoh penting Prancis, seperti Voltaire, Victor Hugo, dan Marie Curie. Pengunjung dapat menemukan makam tokoh-tokoh ini di dalam bangunan.</li>
        <li>Pemandangan kota: Pantheon Paris menawarkan pemandangan kota Paris yang indah dari atas. Pengunjung dapat menaiki tangga spiral di dalam bangunan menuju area observasi di bagian atas bangunan dan menikmati pemandangan kota yang menakjubkan.</li>
        <li>Pengalaman spiritual: Meskipun bukan tempat ibadah lagi, Pantheon masih memancarkan aura spiritual dan memberikan pengalaman yang memukau bagi pengunjung yang tertarik dengan sejarah dan budaya Prancis.</li>
        </ol>
        <p>Itulah beberapa hal yang dapat ditemukan di Pantheon Paris. Bangunan ini menjadi salah satu destinasi wisata terkenal di Paris dan menawarkan pengalaman yang unik bagi para pengunjung yang tertarik dengan seni, arsitektur, dan sejarah.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/bW0PV464mzg',
                'thumb' => 'place1379282961_le_pantheon_paris.jpg',
                'address' => 'Place du Panthéon, 75005 Paris',
                'created_at' => null,
                'updated_at' => '2023-02-28 20:25:33',
            ],
            [
                'id' => 38,
                'country_id' => 3,
                'name' => 'Menara Montparnasse',
                'slug' => 'menara-montparnasse',
                'hotels' => '',
                'latitude' => '48.8423988',
                'longitude' => '2.3217409',
                'attractions' => '<p>Menara Montparnasse adalah menara pencakar langit yang terletak di kawasan Montparnasse di Paris, Prancis. Menara ini dibangun pada tahun 1973 dan menjadi salah satu gedung tertinggi di Paris. Meskipun kontroversial pada awalnya karena ketinggiannya yang mencolok, Menara Montparnasse sekarang menjadi ikon arsitektur modern dan menarik banyak pengunjung.</p>
        <p>Berikut adalah beberapa hal yang dapat ditemukan di Menara Montparnasse:</p>
        <ol>
        <li>Pemandangan Kota Paris: Menara Montparnasse menawarkan pemandangan indah dari atas yang meliputi seluruh kota Paris dan Landmark terkenal seperti Menara Eiffel, Katedral Notre Dame, dan Museum Louvre.</li>
        <li>Observatorium: Di lantai 56 dan 59, terdapat observatorium yang menawarkan pengunjung kesempatan untuk melihat pemandangan Paris melalui kaca pembesaran yang disediakan.</li>
        <li>Museum Espace Montparnasse 56: Di lantai 56, pengunjung dapat mengunjungi Museum Espace Montparnasse 56 yang menampilkan karya seni kontemporer dan ruang pameran.</li>
        <li>Toko Suvenir dan Restoran: Di lantai bawah, pengunjung dapat menemukan toko suvenir dan beberapa restoran dan kafe, termasuk kafe yang menyajikan hidangan khas Prancis.</li>
        <li>Wahana VR 360 derajat: Di lantai atas, pengunjung dapat menikmati pengalaman VR 360 derajat di mana mereka dapat merasakan sensasi seperti terbang di atas Paris.</li>
        </ol>
        <p>Itulah beberapa hal yang dapat ditemukan di Menara Montparnasse. Pengunjung dapat menikmati pemandangan kota yang spektakuler, mengunjungi museum seni dan pameran, dan menikmati hidangan khas Prancis di restoran dan kafe yang tersedia. Menara Montparnasse menjadi destinasi wisata populer di Paris dan menawarkan pengalaman yang unik bagi para pengunjung.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/JKyAG30Ee_s',
                'thumb' => 'place1379283071_Montparnasse-Tower.jpg',
                'address' => '33 Avenue du Maine, 75015 Paris',
                'created_at' => null,
                'updated_at' => '2023-02-28 20:27:12',
            ],
            [
                'id' => 39,
                'country_id' => 3,
                'name' => 'Teluk Mont-Saint-Michel',
                'slug' => 'teluk-mont-saint-michel',
                'hotels' => '',
                'latitude' => '48.636063',
                'longitude' => '-1.511457',
                'attractions' => '<p>&lsquo;Wow&rsquo; merupakan ucapan pertama yang keluar dari mulut wisatawan saat menyaksikan keindahan teluk yang terletak 1 km dari pantai utara Perancis, sepanjang pantai Atlantik di Normandia terkenal dengan gelombang laut pasang dan surut . Pulau-pulau karang menyuguhkan keindahan sendiri bagi siapapun yang melewatinya.</p>
        <p>Teluk ini juga merupakan tempat hidup bagi beberapa jenis ikan lumba-lumba serta kerang laut. Demikian pula dengan berbagai jenis burung laut yang bermukim disini, diantara celah-celah karang terutama di sepanjang garis laut.</p>
        <p>Mont-Saint-Michel adalah sebuah pulau batu kapur yang terletak di lepas pantai Normandia, Prancis. Teluk Mont-Saint-Michel sendiri merupakan bagian dari Laut Celtic, terletak di dekat pulau Mont-Saint-Michel. Meskipun Mont-Saint-Michel lebih terkenal sebagai tempat wisata daripada Teluk Mont-Saint-Michel, tetapi teluk ini menawarkan pesona alam yang indah dan menarik untuk dikunjungi.</p>
        <p>Berikut adalah beberapa hal yang dapat ditemukan di Teluk Mont-Saint-Michel:</p>
        <ol>
        <li>Pemandangan alam yang indah: Teluk Mont-Saint-Michel menawarkan pemandangan laut yang luas dengan air laut yang jernih dan langit yang biru cerah. Saat air surut, pengunjung dapat melihat pulau Mont-Saint-Michel dari kejauhan.</li>
        <li>Oyster Farming: Teluk Mont-Saint-Michel dikenal sebagai tempat budidaya tir yang berkualitas tinggi. Beberapa peternakan tir berada di sekitar teluk dan pengunjung dapat mengunjungi peternakan dan mencicipi tir segar.</li>
        <li>Aktivitas air: Teluk Mont-Saint-Michel menawarkan berbagai macam aktivitas air seperti berenang, berjalan di atas air saat air surut, dan memancing.</li>
        <li>Berjalan-jalan: Teluk Mont-Saint-Michel memiliki jalan setapak yang menarik untuk dijelajahi, pengunjung dapat menyusuri jalan setapak yang berkelok-kelok yang menawarkan pemandangan laut dan pemandangan alam yang indah.</li>
        <li>Pemandangan matahari terbenam: Teluk Mont-Saint-Michel merupakan tempat yang indah untuk menikmati pemandangan matahari terbenam di atas laut.</li>
        </ol>
        <p>Itulah beberapa hal yang dapat ditemukan di Teluk Mont-Saint-Michel. Meskipun Mont-Saint-Michel lebih terkenal, namun Teluk Mont-Saint-Michel memiliki pesona alam yang indah dan menawarkan berbagai macam aktivitas yang menyenangkan bagi para pengunjung.</p>
        <p>Teluk Mont-Saint-Michel di Prancis memiliki pemandangan yang indah dan merupakan destinasi wisata yang populer. Berikut ini adalah beberapa pilihan hotel di sekitar Teluk Mont-Saint-Michel yang dapat Anda pertimbangkan:</p>
        <ol>
        <li>
        <p><a title="Le Relais Saint Michel" href="https://www.booking.com/hotel/fr/le-relais-saint-michel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Le Relais Saint Michel</a> terletak di puncak bukit yang menghadap ke Teluk Mont-Saint-Michel dan menawarkan pemandangan indah ke monumen bersejarah tersebut. Hotel ini dilengkapi dengan fasilitas lengkap seperti kolam renang dalam ruangan, spa, dan restoran bintang Michelin. Tarif kamar mulai dari sekitar &euro;200 per malam.</p>
        </li>
        <li>
        <p><a title="Hotel Gabriel" href="https://www.booking.com/hotel/fr/hotel-gabriel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Gabriel</a> terletak di kota kecil Pontorson yang dekat dengan Teluk Mont-Saint-Michel. Hotel ini menawarkan kamar-kamar yang nyaman dan terjangkau dengan akses mudah ke transportasi umum dan restoran. Tarif kamar mulai dari sekitar &euro;60 per malam.</p>
        </li>
        <li>
        <p><a title="Le Mouton Blanc" href="https://www.booking.com/hotel/fr/le-mouton-blanc-le-mont-saint-michel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Le Mouton Blanc</a> terletak di jantung kota bersejarah Mont-Saint-Michel dan menawarkan pemandangan yang indah ke monumen tersebut. Hotel ini dilengkapi dengan fasilitas lengkap seperti restoran yang lezat dan teras yang luas untuk menikmati pemandangan. Tarif kamar mulai dari sekitar &euro;170 per malam.</p>
        </li>
        <li>
        <p><a title="Auberge de la Baie" href="https://www.booking.com/hotel/fr/auberge-de-la-baie.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Auberge de la Baie</a> terletak di kota kecil Le Val-Saint-Pere yang dekat dengan Teluk Mont-Saint-Michel. Hotel ini menawarkan kamar-kamar yang nyaman dan terjangkau dengan akses mudah ke transportasi umum dan restoran. Tarif kamar mulai dari sekitar &euro;50 per malam.</p>
        </li>
        </ol>
        <p>Selain menginap di hotel, Anda juga bisa mempertimbangkan opsi menginap di penginapan yang lebih sederhana seperti hostel, apartemen, atau bed and breakfast. Berikut ini beberapa opsi penginapan lainnya di sekitar Teluk Mont-Saint-Michel:</p>
        <ol start="5">
        <li>
        <p>Hostel - Auberge de Jeunesse de la Baie du Mont Saint-Michel adalah hostel yang terletak di kota kecil Pontorson yang dekat dengan Teluk Mont-Saint-Michel. Hostel ini menawarkan kamar-kamar yang sederhana dan terjangkau serta akses mudah ke transportasi umum dan restoran. Tarif kamar dormitory mulai dari sekitar &euro;20 per malam.</p>
        </li>
        <li>
        <p>Apartemen - <a title="Appart\'H&ocirc;tel Fleurdumont" href="https://www.booking.com/hotel/fr/residence-fleurdumont.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Appart\'H&ocirc;tel Fleurdumont</a> terletak di kota kecil Avranches yang dekat dengan Teluk Mont-Saint-Michel. Apartemen ini menawarkan unit-unit apartemen yang luas dan dilengkapi dengan dapur dan fasilitas masak. Tarif kamar mulai dari sekitar &euro;80 per malam.</p>
        </li>
        <li>
        <p>Bed and Breakfast - <a title="La Bastide du Moulin" href="https://www.booking.com/hotel/fr/chambres-d-ha-tes-la-bastide-du-moulin.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">La Bastide du Moulin</a> - Mont Saint-Michel terletak di daerah pedesaan yang tenang sekitar 10 km dari Teluk Mont-Saint-Michel. Bed and breakfast ini menawarkan kamar-kamar yang nyaman dan sarapan pagi yang lezat. Tarif kamar mulai dari sekitar &euro;70 per malam.</p>
        </li>
        </ol>
        <p>Itulah beberapa opsi penginapan lainnya di sekitar Teluk Mont-Saint-Michel yang dapat Anda pertimbangkan. Jangan lupa untuk merencanakan perjalanan Anda dengan baik dan mempertimbangkan preferensi dan anggaran Anda saat memilih penginapan. Selamat berlibur!</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/3zq0axpbPns',
                'thumb' => 'place1379283169_frankrijk11_-_le_mont_saint_michel.jpg',
                'address' => '50170 Le Mont-Saint-Michel',
                'created_at' => null,
                'updated_at' => '2023-02-28 20:41:50',
            ],
            [
                'id' => 40,
                'country_id' => 1,
                'name' => 'Rijksmuseum: Amsterdam',
                'slug' => 'rijksmuseum-amsterdam',
                'hotels' => '',
                'latitude' => '52.3578399',
                'longitude' => '4.8834244',
                'attractions' => '<p>Rijksmuseum Amsterdam adalah salah satu museum seni terbesar di dunia dan menjadi salah satu tempat wisata populer di Amsterdam, Belanda. Berikut adalah beberapa koleksi terkenal yang dapat dilihat di Rijksmuseum:</p>
        <ol>
        <li>Night Watch (Malam Perang): Lukisan karya Rembrandt ini menjadi salah satu lukisan paling terkenal di dunia. Lukisan ini menampilkan grup tentara pada saat mereka bersiap untuk perang malam.</li>
        <li>The Milkmaid: Lukisan Johannes Vermeer yang menggambarkan seorang pelayan yang sedang menuang susu ke dalam teko.</li>
        <li>The Merry Family: Lukisan Jan Steen yang menampilkan adegan keluarga yang sedang bersenang-senang.</li>
        <li>The Anatomy Lesson of Dr. Nicolaes Tulp: Lukisan Rembrandt yang menggambarkan kelompok ahli bedah yang sedang melakukan pengamatan anatomi pada seorang mayat.</li>
        <li>Dolls\' House of Petronella Oortman: sebuah rumah boneka pada abad ke-17 yang sangat detail dan indah, menampilkan miniatur dari benda-benda rumah tangga dan furnitur.</li>
        <li>Asian Art: Museum ini juga memiliki koleksi seni Asia, termasuk keramik dan lukisan dari Jepang, Cina, dan Indonesia.</li>
        </ol>
        <p>Selain itu, Rijksmuseum juga menawarkan berbagai pameran khusus dan program acara seperti tur keliling museum, workshop, dan konser musik klasik.</p>
        <p>Untuk menuju ke Rijksmuseum dari Stasiun Central Amsterdam, Anda dapat menggunakan transportasi umum seperti trem atau bus. Berikut adalah beberapa opsi rute yang dapat Anda pilih:</p>
        <ol>
        <li>Dengan menggunakan Tram:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li>Anda dapat menaiki tram nomor 2 atau 12 dari halte tram Stasiun Central Amsterdam (Centraal Station) menuju halte tram Rijksmuseum.</li>
        <li>Perjalanan dengan tram memakan waktu sekitar 15-20 menit tergantung pada lalu lintas.</li>
        <li>Setelah turun dari tram di halte Rijksmuseum, Anda hanya perlu berjalan selama beberapa menit untuk mencapai museum.</li>
        </ul>
        </li>
        </ul>
        <ol start="2">
        <li>Dengan menggunakan Bus:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li>Anda dapat menaiki bus nomor 347 atau 357 dari halte bus Stasiun Central Amsterdam (IJzijde) menuju halte bus Rijksmuseum.</li>
        <li>Perjalanan dengan bus memakan waktu sekitar 10-15 menit tergantung pada lalu lintas.</li>
        <li>Setelah turun dari bus di halte Rijksmuseum, Anda hanya perlu berjalan selama beberapa menit untuk mencapai museum.</li>
        </ul>
        </li>
        </ul>
        <p>Jika Anda ingin menggunakan taksi atau mobil pribadi, perjalanan memakan waktu sekitar 10-15 menit tergantung pada lalu lintas dan kondisi jalan. Namun, perlu diingat bahwa parkir di sekitar Rijksmuseum dapat sulit dan mahal.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/76kiYSugag4',
                'thumb' => 'place1379453559_Rijksmuseum-Amsterdam_21878.jpg',
                'address' => 'Museumstraat 1, 1071 XX Amsterdam',
                'created_at' => null,
                'updated_at' => '2023-02-28 18:45:45',
            ],
            [
                'id' => 41,
                'country_id' => 1,
                'name' => 'Museum Van Gogh: Amsterdam',
                'slug' => 'museum-van-gogh-amsterdam',
                'hotels' => '',
                'latitude' => '52.3583319',
                'longitude' => '4.8811297',
                'attractions' => '<p>Museum Van Gogh di Amsterdam adalah museum seni yang didedikasikan untuk karya Vincent van Gogh, seorang pelukis Belanda yang sangat terkenal. Berikut adalah beberapa hal yang dapat dilihat di Museum Van Gogh:</p>
        <ol>
        <li>Koleksi lukisan Van Gogh: Museum ini memiliki koleksi terbesar di dunia dari karya Vincent van Gogh, termasuk lukisan-lukisan terkenal seperti "Sunflowers", "The Potato Eaters", dan "Almond Blossom".</li>
        <li>Karya seni lainnya: Selain lukisan Van Gogh, museum ini juga memiliki koleksi seni lainnya dari para seniman Belanda seperti Jan Toorop dan Piet Mondrian.</li>
        <li>Periode hidup Van Gogh: Museum ini juga menampilkan informasi tentang kehidupan dan karya Van Gogh selama periode hidupnya, termasuk surat-suratnya, gambar dan sketsa awal, serta benda-benda pribadinya.</li>
        <li>Pameran sementara: Museum Van Gogh juga menawarkan pameran sementara yang menggabungkan seni modern dengan karya-karya Van Gogh.</li>
        <li>Program acara: Museum ini juga menawarkan berbagai program acara, termasuk tur keliling, kuliah, dan workshop, yang memungkinkan pengunjung untuk memahami dan mengeksplorasi lebih dalam tentang seni Van Gogh dan seni Belanda secara umum.</li>
        </ol>
        <p>Museum Van Gogh adalah tempat yang sangat populer dan sering padat, sehingga direkomendasikan untuk memesan tiket masuk terlebih dahulu atau datang di luar jam sibuk untuk menghindari antrean yang panjang.</p>
        <p>Untuk menuju ke Museum Van Gogh dari Stasiun Central Amsterdam, Anda dapat menggunakan transportasi umum seperti trem atau bus. Berikut adalah beberapa opsi rute yang dapat Anda pilih:</p>
        <ol>
        <li>Dengan menggunakan Tram:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li>Anda dapat menaiki tram nomor 2 atau 5 dari halte tram Stasiun Central Amsterdam (Centraal Station) menuju halte tram Rijksmuseum.</li>
        <li>Setelah itu, Anda dapat berjalan kaki selama 5 menit untuk mencapai Museum Van Gogh.</li>
        <li>Perjalanan dengan tram memakan waktu sekitar 15-20 menit tergantung pada lalu lintas.</li>
        </ul>
        </li>
        </ul>
        <ol start="2">
        <li>Dengan menggunakan Bus:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li>Anda dapat menaiki bus nomor 170 atau 172 dari halte bus Stasiun Central Amsterdam (IJzijde) menuju halte bus Museumplein.</li>
        <li>Setelah itu, Anda dapat berjalan kaki selama 5-10 menit untuk mencapai Museum Van Gogh.</li>
        <li>Perjalanan dengan bus memakan waktu sekitar 15-20 menit tergantung pada lalu lintas.</li>
        </ul>
        </li>
        </ul>
        <p>Jika Anda ingin menggunakan taksi atau mobil pribadi, perjalanan memakan waktu sekitar 10-15 menit tergantung pada lalu lintas dan kondisi jalan. Namun, perlu diingat bahwa parkir di sekitar Museum Van Gogh dapat sulit dan mahal.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/iZMJ_y9UqBc',
                'thumb' => 'place1379453661_van-gogh-museum_s345x230.jpg',
                'address' => 'Paulus Potterstraat 7, 1071 CX Amsterdam',
                'created_at' => null,
                'updated_at' => '2023-02-28 18:49:16',
            ],
            [
                'id' => 42,
                'country_id' => 1,
                'name' => 'Madurodam',
                'slug' => 'madurodam',
                'hotels' => '',
                'latitude' => '52.0991919',
                'longitude' => '4.2994051',
                'attractions' => '<p>Madurodam adalah sebuah taman miniatur yang terletak di kota Den Haag, Belanda. Taman miniatur ini menampilkan replika dari berbagai bangunan, tempat wisata, dan pemandangan yang terkenal di seluruh Belanda dalam skala kecil. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di Madurodam:</p>
        <ol>
        <li>Replika bangunan dan tempat wisata: Madurodam menampilkan replika dari bangunan-bangunan ikonik seperti gedung parlemen di Den Haag, kanal-kanal Amsterdam, dan jembatan Erasmus di Rotterdam. Selain itu, juga terdapat miniatur dari tempat wisata populer seperti kebun binatang, taman hiburan, dan pantai.</li>
        <li>Aktivitas interaktif: Ada banyak aktivitas interaktif di Madurodam, seperti memainkan peran sebagai pilot pesawat, menyalakan lampu jalan, dan mengoperasikan kapal pengangkut di pelabuhan.</li>
        <li>Permainan interaktif: Taman miniatur ini juga menawarkan permainan interaktif yang menyenangkan untuk anak-anak dan dewasa. Salah satu permainan yang paling populer adalah "Waterwolf", yang menantang pengunjung untuk membangun sebuah sistem penghalang air untuk mencegah banjir di Belanda.</li>
        <li>Restoran dan toko suvenir: Terdapat beberapa restoran dan toko suvenir di dalam Madurodam, yang menjual berbagai jenis makanan dan minuman Belanda, serta souvenir seperti magnet kulkas, kaos, dan topi.</li>
        </ol>
        <p>Madurodam merupakan tempat wisata yang sangat populer di Belanda, terutama bagi keluarga dengan anak-anak. Taman miniatur ini mudah diakses dari Den Haag atau Amsterdam dengan transportasi umum atau mobil.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/t6m83jir3Io',
                'thumb' => 'place1379454543_Madurodam_54.jpg',
                'address' => 'George Maduroplein 1, Den Haag',
                'created_at' => null,
                'updated_at' => '2023-02-28 18:50:00',
            ],
            [
                'id' => 43,
                'country_id' => 1,
                'name' => 'Kinderdijk',
                'slug' => 'kinderdijk',
                'hotels' => '',
                'latitude' => '51.8837436',
                'longitude' => '4.6330916',
                'attractions' => '<p>Kinderdijk adalah sebuah desa kecil yang terletak di provinsi Zuid-Holland, Belanda. Desa ini terkenal karena adanya kincir angin tradisional yang digunakan untuk mengendalikan air di daerah tersebut. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di Kinderdijk:</p>
        <ol>
        <li>Melihat kincir angin: Kinderdijk memiliki 19 kincir angin tradisional yang masih berfungsi hingga saat ini. Kincir angin ini digunakan untuk menjaga agar air tidak meluap dari sungai dan kanal, sehingga wilayah sekitarnya terhindar dari banjir.</li>
        <li>Berjalan-jalan di sekitar desa: Desa ini memiliki jalur pejalan kaki yang indah di sepanjang sungai dan kanal yang dapat dijelajahi. Jalur ini melewati kincir angin, peternakan domba, dan padang rumput yang luas.</li>
        <li>Mengunjungi museum: Museum Wisata Kinderdijk berisi informasi tentang sejarah kincir angin di Kinderdijk, serta teknologi modern yang digunakan untuk mengendalikan air di daerah tersebut. Museum ini juga menampilkan bagaimana cara kerja kincir angin tradisional dan bagaimana teknologi modern bekerja di masa sekarang.</li>
        <li>Bersepeda: Sepeda merupakan transportasi yang populer di Belanda, dan di Kinderdijk, terdapat jalur sepeda yang indah di sekitar desa. Pengunjung dapat menyewa sepeda dan menjelajahi daerah sekitarnya, yang juga memiliki pemandangan alam yang menakjubkan.</li>
        <li>Naik perahu: Pengunjung dapat naik perahu melintasi kanal di Kinderdijk untuk melihat kincir angin dari sudut pandang yang berbeda.</li>
        </ol>
        <p>Kinderdijk adalah destinasi wisata yang populer di Belanda, dan mudah diakses dari kota Rotterdam atau Amsterdam dengan transportasi umum atau mobil. Disarankan untuk datang di luar musim liburan dan menghindari waktu padat agar dapat menikmati pemandangan dengan tenang.</p>
        <p>Untuk menuju ke Kinderdijk, lokasi kincir angin yang terkenal di Belanda, Anda dapat menggunakan beberapa opsi transportasi, tergantung pada titik keberangkatan Anda:</p>
        <ol>
        <li>Dari Amsterdam:</li>
        </ol>
        <ul>
        <li>Naik kereta api dari Amsterdam ke Rotterdam, kemudian pindah ke kereta api menuju ke stasiun Nieuw-Lekkerland.</li>
        <li>Dari stasiun Nieuw-Lekkerland, naik bus Qliner 489 menuju halte Kinderdijk, Molenkade. Kemudian berjalan kaki sekitar 10 menit ke Kinderdijk.</li>
        </ul>
        <ol start="2">
        <li>Dari Rotterdam:</li>
        </ol>
        <ul>
        <li>Naik kereta api dari Rotterdam menuju stasiun Rotterdam Lombardijen.</li>
        <li>Dari sana, naik bus Arriva 90 menuju halte Kinderdijk, Molenkade. Kemudian berjalan kaki sekitar 10 menit ke Kinderdijk.</li>
        </ul>
        <ol start="3">
        <li>Dari Utrecht:</li>
        </ol>
        <ul>
        <li>Naik kereta api dari Utrecht menuju stasiun Rotterdam.</li>
        <li>Dari sana, naik kereta api menuju ke stasiun Nieuw-Lekkerland dan lanjutkan dengan bus Qliner 489 menuju halte Kinderdijk, Molenkade. Kemudian berjalan kaki sekitar 10 menit ke Kinderdijk.</li>
        </ul>
        <p>Alternatif lainnya, Anda juga bisa menggunakan taksi atau mobil pribadi, namun perlu diingat bahwa parkir di sekitar Kinderdijk cukup terbatas dan biasanya memerlukan biaya tambahan. Jika Anda memiliki waktu lebih, mengunjungi Kinderdijk dengan sepeda juga bisa menjadi pengalaman yang menyenangkan.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379455176_molen_kinderdijk2.jpg',
                'address' => 'Kinderdijk',
                'created_at' => null,
                'updated_at' => '2023-02-28 18:56:39',
            ],
            [
                'id' => 44,
                'country_id' => 1,
                'name' => 'Hoge Veluwe National Park',
                'slug' => 'hoge-veluwe-national-park',
                'hotels' => '',
                'latitude' => '52.0833333',
                'longitude' => '5.8333333',
                'attractions' => '<p>Taman Nasional Hoge Veluwe terletak di provinsi Gelderland, Belanda, dan merupakan salah satu taman nasional terbesar di negara ini. Taman ini memiliki banyak hal menarik yang bisa dilihat dan dilakukan, antara lain:</p>
        <ol>
        <li>Berjalan-jalan di alam bebas: Taman ini memiliki area luas yang terdiri dari hutan, padang rumput, dan bukit pasir. Pengunjung dapat berjalan-jalan atau bersepeda melalui jalur yang telah ditentukan untuk menikmati pemandangan alam yang indah.</li>
        <li>Melihat satwa liar: Taman ini memiliki beragam satwa liar seperti domba liar, kijang, dan babi hutan. Pengunjung juga dapat melihat burung, termasuk burung-burung langka seperti elang dan bangau.</li>
        <li>Mengunjungi museum: Taman ini memiliki dua museum, yaitu Museum Kr&ouml;ller-M&uuml;ller dan Museonder. Museum Kr&ouml;ller-M&uuml;ller menampilkan koleksi seni modern dan klasik, termasuk karya-karya Vincent van Gogh, Pablo Picasso, dan Piet Mondrian. Museonder adalah museum bawah tanah yang menampilkan kehidupan di bawah permukaan tanah.</li>
        <li>Mengunjungi taman bermain anak-anak: Taman ini memiliki beberapa area bermain yang cocok untuk anak-anak, termasuk peternakan binatang mini dan permainan air.</li>
        <li>Mengunjungi St. Hubertus Hunting Lodge: St. Hubertus Hunting Lodge adalah sebuah bangunan bersejarah yang terletak di tengah taman. Bangunan ini dirancang oleh arsitek terkenal Berlage dan menampilkan interior mewah yang indah.</li>
        <li>Berburu: Taman Nasional Hoge Veluwe juga merupakan tempat yang populer untuk berburu. Ada sejumlah area khusus di taman yang disediakan untuk berburu, dengan beberapa spesies satwa liar yang dapat diburu.</li>
        </ol>
        <p>Taman Nasional Hoge Veluwe mudah diakses dengan mobil atau transportasi umum dari kota-kota di sekitarnya seperti Arnhem atau Apeldoorn. Taman ini terbuka sepanjang tahun, meskipun beberapa fasilitas mungkin hanya tersedia di musim panas atau musim liburan.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/QdI2SyjwkIk',
                'thumb' => 'place1379455400_jachthuis_st__hubertus_np_de_hoge_veluwe.jpg',
                'address' => 'Hoge Veluwe',
                'created_at' => null,
                'updated_at' => '2023-02-28 18:57:42',
            ],
            [
                'id' => 45,
                'country_id' => 1,
                'name' => 'Anne Frank House',
                'slug' => 'anne-frank-house',
                'hotels' => '',
                'latitude' => '52.3753102',
                'longitude' => '4.8840909',
                'attractions' => '<p>Anne Frank House adalah sebuah museum di Amsterdam, Belanda, yang didedikasikan untuk mengenang kehidupan Anne Frank dan keluarganya selama Perang Dunia II. Anne Frank adalah seorang gadis Yahudi yang menyembunyikan diri bersama keluarganya selama dua tahun di ruang belakang sebuah gedung di Amsterdam untuk menghindari penangkapan oleh Nazi Jerman. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di Anne Frank House:</p>
        <ol>
        <li>Mengunjungi rumah tempat Anne Frank bersembunyi: Pengunjung dapat melihat kamar-kamar kecil tempat keluarga Frank bersembunyi selama dua tahun. Kamar tersebut dijaga dengan baik dan diatur dengan benda-benda yang asli pada saat keluarga Frank masih bersembunyi di sana.</li>
        <li>Menonton film dokumenter: Sebelum pengunjung masuk ke bagian dalam gedung, mereka dapat menonton film dokumenter singkat tentang kehidupan Anne Frank dan keluarganya.</li>
        <li>Melihat benda-benda asli: Museum ini menampilkan banyak benda asli yang terkait dengan kehidupan Anne Frank, termasuk buku harian asli milik Anne Frank dan surat-surat yang ditulisnya.</li>
        <li>Mengunjungi pameran: Pameran di museum menunjukkan kehidupan di Belanda pada masa Perang Dunia II dan bagaimana kebijakan Nazi mempengaruhi hidup orang Yahudi di Amsterdam.</li>
        <li>Membaca buku harian Anne Frank: Toko suvenir di museum menjual berbagai edisi buku harian Anne Frank dalam berbagai bahasa, yang dapat dibaca dan dipelajari pengunjung di luar museum.</li>
        </ol>
        <p>Anne Frank House adalah sebuah museum yang populer di Amsterdam, sehingga disarankan untuk memesan tiket terlebih dahulu secara online agar tidak perlu mengantri dalam waktu yang lama. Museum ini juga memiliki beberapa aturan yang perlu diikuti pengunjung, seperti tidak boleh mengambil foto atau video di dalam museum.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/_YkUFOoWdVA',
                'thumb' => 'place1379455542_334041-Visit_the_Anne_Frank_Museum_Amsterdam.jpg',
                'address' => 'Prinsengracht 263-267, 1016 GV Amsterdam',
                'created_at' => null,
                'updated_at' => '2023-02-28 18:58:32',
            ],
            [
                'id' => 46,
                'country_id' => 13,
                'name' => 'Hofburg Palace',
                'slug' => 'hofburg-palace',
                'hotels' => '',
                'latitude' => '48.207747',
                'longitude' => '16.365863',
                'attractions' => '<p class="dropcap">Istana Hofburg adalah sebuah istana besar yang terletak di pusat kota Vienna, Austria. Istana ini adalah bekas kediaman kaisar Habsburg dan sekarang digunakan sebagai museum dan tempat pertemuan resmi.</p>
        <p>Istana ini memiliki sejarah yang panjang dan berasal dari abad ke-13, namun istana yang kita lihat hari ini sebagian besar dibangun pada abad ke-16 dan ke-17. Istana ini memiliki banyak ruangan yang indah dan dihiasi dengan seni dan perabotan mewah, termasuk Museum Sisi yang berisi koleksi seni dan artefak dari Kekaisaran Austria.</p>
        <p>Beberapa bagian dari Istana Hofburg yang dapat dikunjungi oleh wisatawan termasuk Kaiserappartements (apartemen kaisar), yang terdiri dari 19 ruangan, di mana para kaisar dan permaisuri Habsburg tinggal selama beberapa abad, dan Schatzkammer (kamar harta karun), di mana koleksi harta karun dan benda-benda bersejarah seperti mahkota kekaisaran Austria disimpan. Selain itu, ada juga Spanish Riding School, yang menampilkan pertunjukan balap kuda dan tari Equestrian, serta perpustakaan nasional Austria yang merupakan salah satu perpustakaan tertua dan terbesar di dunia.</p>
        <p>Istana Hofburg sangat penting dalam sejarah dan budaya Austria, dan menjadi salah satu atraksi wisata utama di Vienna. Selain itu, istana ini juga digunakan untuk acara-acara resmi dan upacara kenegaraan Austria.</p>
        <p>Berikut adalah daftar hotel favorit yang terletak dekat dengan Istana Hofburg di Vienna, Austria, berdasarkan ulasan pelancong:</p>
        <ol>
        <li>
        <p><a title="Hotel Sacher Wien" href="https://www.booking.com/hotel/at/sacher-wien.id.html?aid=7989039&amp;lang=id&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Sacher Wien</a>: Hotel bintang 5 ini terletak hanya beberapa langkah dari Istana Hofburg dan menawarkan kamar dan suite yang mewah, spa, dua restoran, dan sebuah bar.</p>
        </li>
        <li>
        <p><a title="Hotel Bristol" href="https://www.booking.com/hotel/at/bristolawesvienna.id.html?aid=7989039&amp;lang=id&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Bristol</a> - A Luxury Collection Hotel: Hotel bintang 5 ini terletak di seberang Istana Hofburg dan menampilkan kamar dan suite yang elegan, pusat kebugaran, restoran, dan bar.</p>
        </li>
        <li>
        <p><a title="Hotel Kaiserhof Wien" href="https://www.booking.com/hotel/at/hotelkaiserhof.id.html?aid=7989039&amp;lang=id&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Kaiserhof Wien</a>: Hotel bintang 4 ini terletak dalam 5 menit berjalan kaki dari Istana Hofburg dan menawarkan kamar dan suite yang bergaya, spa, pusat kebugaran, dan bar.</p>
        </li>
        <li>
        <p><a title="Park Hyatt Vienna" href="https://www.booking.com/hotel/at/park-hyatt-vienna.id.html?aid=7989039&amp;lang=id&amp;no_rooms=1&amp;group_adults=2" target="_blank">Park Hyatt Vienna</a>: Hotel bintang 5 ini terletak dalam 10 menit berjalan kaki dari Istana Hofburg dan menampilkan kamar dan suite yang mewah, spa, pusat kebugaran, restoran, dan bar.</p>
        </li>
        <li>
        <p><a title="Grand Hotel Wien" href="https://www.booking.com/hotel/at/grand-wien.id.html?aid=7989039&amp;lang=id&amp;no_rooms=1&amp;group_adults=2" target="_blank">Grand Hotel Wien</a>: Hotel bintang 5 ini terletak dalam 5 menit berjalan kaki dari Istana Hofburg dan menawarkan kamar dan suite yang elegan, spa, pusat kebugaran, dua restoran, dan sebuah bar.</p>
        </li>
        </ol>
        <p>Berikut adalah daftar beberapa hotel backpacker murah yang terletak dekat dengan Istana Hofburg di Vienna, Austria:</p>
        <ol>
        <li>
        <p><a title="Wombats City Hostel Vienna" href="https://www.booking.com/hotel/at/wombats-hostels-vienna-naschmarkt.id.html?aid=7989039&amp;lang=id&amp;no_rooms=1&amp;group_adults=2" target="_blank">Wombats City Hostel Vienna</a> - The Naschmarkt: Hostel ini terletak sekitar 20 menit berjalan kaki dari Istana Hofburg dan menawarkan kamar tidur bersama yang bersih dan terawat dengan baik, dapur bersama, dan akses Wi-Fi gratis.</p>
        </li>
        <li>
        <p><a title="Do Step Inn Central" href="https://www.booking.com/hotel/at/do-step-inn-central.id.html?aid=7989039&amp;lang=id&amp;no_rooms=1&amp;group_adults=2" target="_blank">Do Step Inn Central</a>: Hostel ini terletak sekitar 15 menit berjalan kaki dari Istana Hofburg dan menawarkan kamar tidur bersama yang modern, kamar mandi bersama, dan akses Wi-Fi gratis.</p>
        </li>
        <li>
        <p><a title="A&amp;O Wien Hauptbahnhof" href="https://www.booking.com/hotel/at/a-amp-o-wien-hauptbahnhof.id.html?aid=7989039&amp;lang=id&amp;no_rooms=1&amp;group_adults=2" target="_blank">A&amp;O Wien Hauptbahnhof</a>: Hostel ini terletak sekitar 20 menit perjalanan dengan transportasi umum dari Istana Hofburg dan menawarkan kamar tidur bersama dan kamar pribadi yang sederhana, dapur bersama, dan akses Wi-Fi gratis.</p>
        </li>
        <li>
        <p><a title="MEININGER Hotel Vienna Downtown Franz" href="https://www.booking.com/hotel/at/meininger-downtown-franz.id.html?aid=7989039&amp;lang=id&amp;no_rooms=1&amp;group_adults=2" target="_blank">MEININGER Hotel Vienna Downtown Franz</a>: Hotel ini terletak sekitar 10 menit perjalanan dengan transportasi umum dari Istana Hofburg dan menawarkan kamar tidur bersama dan kamar pribadi yang sederhana, ruang game, dan akses Wi-Fi gratis.</p>
        </li>
        <li>
        <p><a title="Hostel Ruthensteiner Vienna" href="https://www.booking.com/hotel/at/vienna-hostel-ruthensteiner.nl.html?aid=7989039&amp;lang=id&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hostel Ruthensteiner Vienna</a>: Hostel ini terletak sekitar 20 menit perjalanan dengan transportasi umum dari Istana Hofburg dan menawarkan kamar tidur bersama yang nyaman, ruang olahraga, dan akses Wi-Fi gratis.</p>
        </li>
        </ol>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/1N4oUAwR_Og',
                'thumb' => 'place1379455682_hofbrug.jpg',
                'address' => 'Michaelerkuppel, Hofburg, 1010 Wina',
                'created_at' => null,
                'updated_at' => '2023-02-25 23:43:00',
            ],
            [
                'id' => 47,
                'country_id' => 13,
                'name' => 'Salzburg Festival',
                'slug' => 'salzburg-festival',
                'hotels' => '',
                'latitude' => '47.80949',
                'longitude' => '13.05501',
                'attractions' => '<p class="dropcap">Salzburg Festival adalah sebuah festival musik dan teater yang diadakan setiap tahun di kota Salzburg, Austria. Festival ini didirikan pada tahun 1920 oleh sekelompok seniman, termasuk komponis Richard Strauss, pemain sandiwara Max Reinhardt, dan penulis Hugo von Hofmannsthal. Festival ini menjadi salah satu festival musik dan teater paling terkenal di dunia, dan menampilkan karya-karya musik dan drama dari seniman-seniman ternama dari seluruh dunia.</p>
        <p>Salzburg Festival berlangsung selama lima minggu pada bulan Juli dan Agustus setiap tahun, dan menampilkan pertunjukan musik dan drama di beberapa lokasi di seluruh kota Salzburg, termasuk dianggap sebagai salah satu atraksi wisata utama kota tersebut. Pertunjukan-pertunjukan tersebut meliputi opera, konser musik klasik, pertunjukan drama, tarian, dan acara-acara yang beragam lainnya. Beberapa pertunjukan dilangsungkan di Teater Festival Salzburg yang indah, yang dibangun pada tahun 1925 khusus untuk festival ini.</p>
        <p>Salzburg Festival menampilkan karya-karya dari seniman-seniman terkenal seperti Wolfgang Amadeus Mozart, yang lahir di Salzburg, dan juga dari seniman-seniman kontemporer seperti Leonard Bernstein, Herbert von Karajan, dan Anna Netrebko. Festival ini juga menawarkan kesempatan bagi para seniman muda untuk tampil dan memperkenalkan karya-karya baru mereka.</p>
        <p>Salzburg Festival adalah salah satu festival musik dan teater paling bergengsi di dunia, dan menarik pengunjung dari seluruh dunia untuk menikmati pertunjukan-pertunjukan berkualitas tinggi di kota yang indah dan bersejarah ini.</p>
        
        <p>Berikut adalah beberapa hotel favorit di Salzburg, Austria, berdasarkan ulasan para pelancong:</p>
        <ol>
        <li>
        <p><a title="Hotel Goldener Hirsch" href="https://www.booking.com/hotel/at/goldenerhirschsalzburg.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Goldener Hirsch</a>, a Luxury Collection Hotel: Hotel bintang 5 ini terletak di pusat kota Salzburg dan menampilkan kamar-kamar yang elegan dan mewah dengan perabotan antik, restoran dan bar, serta pusat kebugaran.</p>
        </li>
        <li>
        <p><a title="Hotel Sacher Salzburg" href="https://www.booking.com/hotel/at/hotelsachersalzburg.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Sacher Salzburg</a>: Hotel bintang 5 ini terletak di tepi sungai Salzach dan memiliki kamar-kamar yang luas dan elegan, restoran dan bar yang menawarkan pemandangan indah ke kota Salzburg, serta pusat kebugaran dan spa.</p>
        </li>
        <li>
        <p><a title="Radisson Blu Hotel Altstadt" href="https://www.booking.com/hotel/at/hotelaltstadtradissonblu.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Radisson Blu Hotel Altstadt</a>: Hotel bintang 5 ini terletak di kota tua Salzburg dan menampilkan kamar-kamar yang elegan dan modern, restoran dan bar, serta akses mudah ke sejumlah tempat wisata di Salzburg.</p>
        </li>
        <li>
        <p><a title="Hotel Bristol Salzburg" href="https://www.booking.com/hotel/at/hotelbristolsalzburg.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Bristol Salzburg</a>: Hotel bintang 5 ini terletak di pusat kota Salzburg dan menampilkan kamar-kamar yang elegan dengan perabotan antik, restoran dan bar, serta pusat kebugaran.</p>
        </li>
        <li>
        <p><a title="Hotel Stein Salzburg" href="https://www.booking.com/hotel/at/culthotelstein.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Stein Salzburg</a>: Hotel bintang 4 ini terletak di tepi sungai Salzach dan menawarkan kamar-kamar yang modern dengan balkon pribadi, restoran dan bar yang menawarkan pemandangan indah ke kota Salzburg, serta teras matahari yang luas.</p>
        </li>
        </ol>
        <p>Berikut adalah beberapa hotel backpacker di Salzburg yang terjangkau dan populer di kalangan pelancong dengan anggaran terbatas:</p>
        <ol>
        <li>
        <p><a title="Yoho International Youth Hostel" href="https://www.booking.com/hotel/at/yoho-international-youth-hostel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Yoho International Youth Hostel</a>: Terletak dekat dengan pusat kota Salzburg, hostel ini menawarkan kamar-kamar tidur bersama dengan kamar mandi bersama, dapur bersama, dan akses Wi-Fi gratis.</p>
        </li>
        <li>
        <p><a title="Jufa Hotel Salzburg City" href="https://www.booking.com/hotel/at/jufa-salzburg-city.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Jufa Hotel Salzburg City</a>: Hotel yang terletak di pusat kota Salzburg ini menawarkan kamar-kamar pribadi dan kamar tidur bersama yang bersih dan nyaman dengan kamar mandi pribadi atau bersama, serta akses Wi-Fi gratis.</p>
        </li>
        <li>
        <p><a title="MEININGER Hotel Salzburg City Center" href="https://www.booking.com/hotel/at/meininger-salzburg-city-center.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">MEININGER Hotel Salzburg City Center</a>: Hotel ini terletak di pinggir kota Salzburg, namun masih dalam jarak berjalan kaki ke pusat kota. Hotel ini menawarkan kamar-kamar tidur bersama dan kamar-kamar pribadi yang modern dengan kamar mandi pribadi atau bersama, serta akses Wi-Fi gratis.</p>
        </li>
        <li>
        <p>YOLO Hostel Salzburg: Hostel ini terletak di tepi sungai Salzach, dengan jarak berjalan kaki ke pusat kota Salzburg. Hostel ini menawarkan kamar-kamar tidur bersama dengan kamar mandi bersama, dapur bersama, dan akses Wi-Fi gratis.</p>
        </li>
        <li>
        <p><a title="The Little Guesthouse" href="https://www.booking.com/hotel/at/the-little-guesthouse.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Little Guesthouse</a>: Terletak di pinggir kota Salzburg, hostel ini menawarkan kamar-kamar tidur bersama yang bersih dan nyaman dengan kamar mandi bersama, serta akses Wi-Fi gratis. Hostel ini juga dilengkapi dengan dapur bersama dan ruang bersantai.</p>
        </li>
        </ol>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/dGK6QbMELAo',
                'thumb' => 'place1379455774_ausflug12_01.jpg',
                'address' => 'Salzburg',
                'created_at' => null,
                'updated_at' => '2023-02-25 23:43:30',
            ],
            [
                'id' => 48,
                'country_id' => 13,
                'name' => 'Vienna',
                'slug' => 'vienna',
                'hotels' => '',
                'latitude' => '48.2081743',
                'longitude' => '16.3738189',
                'attractions' => '<p class="dropcap">Vienna (Wina) adalah kota yang sangat indah dan menakjubkan, dengan sejarah dan budaya yang kaya serta arsitektur yang memukau. Berikut adalah beberapa keindahan yang dimiliki Vienna:</p>
        <p>Arsitektur: Vienna memiliki arsitektur yang sangat indah dan beragam, dengan banyak bangunan yang dibangun selama berabad-abad dan bergaya dari Renaisans hingga Art Nouveau. Beberapa contohnya adalah Istana Schönbrunn, Katedral St. Stephen, Belvedere Palace, dan banyak lagi.</p>
        <p>Taman dan taman kota: Vienna dikenal sebagai salah satu kota hijau terbaik di dunia, dengan taman-taman kota yang indah seperti Taman Volksgarten, Taman Stadtpark, dan Taman Augarten. Selain itu, Vienna memiliki hutan kota yang besar, Wienerwald, yang menjadi tempat rekreasi bagi penduduk setempat dan wisatawan.</p>
        <p>Museum dan seni: Vienna memiliki museum-museum yang mengagumkan seperti Museum Sejarah Alam, Museum Seni Rupa, dan Museum Musik. Selain itu, Vienna juga memiliki sejumlah galeri seni dan tempat seni seperti Secession Building, yang merupakan salah satu contoh arsitektur Art Nouveau terbaik di dunia.</p>
        <p>Musik: Vienna dikenal sebagai ibu kota musik klasik, dengan banyak komponis terkenal seperti Mozart, Beethoven, dan Strauss yang lahir atau tinggal di sana. Vienna juga menjadi rumah bagi Wiener Philharmoniker, salah satu orkestra klasik terbaik di dunia.</p>
        <p>Kuliner: Vienna terkenal akan kulinernya, seperti Sachertorte, sebuah kue cokelat yang legendaris dan juga Wina Schnitzel, sebuah hidangan yang terbuat dari daging yang dilapisi tepung roti dan digoreng.</p>
        <p>Keindahan Vienna sungguh sangat mengagumkan dan membuat siapapun yang mengunjungi kota ini ingin kembali lagi untuk menikmati keindahan dan keunikan yang dimilikinya.</p>
        <p>Berikut adalah beberapa hotel favorit dekat Centrum di Wina, Austria, berdasarkan ulasan pelancong:</p>
        <ol>
        <li>
        <p><a title="Grand Ferdinand Vienna" href="https://www.booking.com/hotel/at/grand-ferdinand.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Grand Ferdinand Vienna</a> - Your Hotel In The City Center: Hotel bintang 5 ini terletak di pusat kota Wina dan menampilkan kamar-kamar yang elegan dan modern dengan pemandangan kota, restoran dan bar, serta akses ke rooftop pool dan bar.</p>
        </li>
        <li>
        <p><a title="The Ritz-Carlton, Vienna" href="https://www.booking.com/hotel/at/the-ritz-carlton-vienna.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Ritz-Carlton, Vienna</a>: Hotel mewah bintang 5 ini terletak di pusat kota Wina dan menampilkan kamar-kamar yang mewah dengan perabotan antik, restoran dan bar, serta akses ke spa dan pusat kebugaran.</p>
        </li>
        <li>
        <p><a title="Park Hyatt Vienna" href="https://www.booking.com/hotel/at/park-hyatt-vienna.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Park Hyatt Vienna</a>: Hotel bintang 5 ini terletak di pusat kota Wina dan menampilkan kamar-kamar yang mewah dan elegan dengan perabotan antik, restoran dan bar, serta akses ke spa dan pusat kebugaran.</p>
        </li>
        <li>
        <p><a title="Hotel Topazz" href="https://www.booking.com/hotel/at/topazz.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Topazz</a>: Hotel bintang 4 ini terletak di pusat kota Wina dan menampilkan kamar-kamar yang modern dan mewah dengan perabotan yang elegan, restoran dan bar, serta akses ke sauna.</p>
        </li>
        <li>
        <p><a title="Hotel Am Konzerthaus Vienna - MGallery" href="https://www.booking.com/hotel/at/hotel-am-konzerthaus.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Am Konzerthaus Vienna - MGallery</a>: Hotel bintang 4 ini terletak di pusat kota Wina dan menampilkan kamar-kamar yang elegan dengan perabotan yang mewah, restoran dan bar, serta akses ke pusat kebugaran dan sauna.</p>
        </li>
        </ol>
        <p>Berikut adalah beberapa hostel atau hotel backpacker yang dekat dengan Stasiun Central di Vienna:</p>
        <ol>
        <li>
        <p><a title="Wombat\'s City Hostel Vienna" href="https://www.booking.com/hotel/at/wombats-hostels-vienna-naschmarkt.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Wombat\'s City Hostel Vienna</a> - The Lounge: Hostel ini terletak hanya beberapa menit berjalan kaki dari Stasiun Central Vienna, dan menawarkan akomodasi yang murah dengan kamar-kamar dormitory dan kamar-kamar pribadi yang sederhana. Hostel ini juga memiliki bar dan lounge yang populer.</p>
        </li>
        <li>
        <p><a title="a&amp;t Holiday Hostel Wien" href="https://www.booking.com/hotel/at/a-amp-t-holiday-hostel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">a&amp;t Holiday Hostel Wien</a>: Hostel ini terletak sekitar 10 menit berjalan kaki dari Stasiun Central Vienna dan menawarkan kamar-kamar dormitory yang terjangkau dan nyaman, serta kamar-kamar pribadi yang sederhana. Hostel ini juga memiliki dapur bersama dan ruang bersantai.</p>
        </li>
        <li>
        <p><a title="MEININGER Hotel Wien Hauptbahnhof" href="https://www.booking.com/hotel/at/meininger-downtown-franz.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">MEININGER Hotel Wien Hauptbahnhof</a>: Hotel ini terletak hanya beberapa menit berjalan kaki dari Stasiun Central Vienna dan menawarkan kamar-kamar dormitory dan kamar-kamar pribadi yang modern dan terjangkau. Hotel ini juga memiliki dapur bersama, ruang bersantai, dan meja resepsionis 24 jam.</p>
        </li>
        <li>
        <p><a title="Wombat\'s City Hostel Vienna - Naschmarkt" href="https://www.booking.com/hotel/at/wombats-hostels-vienna-naschmarkt.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Wombat\'s City Hostel Vienna - Naschmarkt</a>: Hostel ini terletak sekitar 15 menit berjalan kaki dari Stasiun Central Vienna dan menawarkan kamar-kamar dormitory dan kamar-kamar pribadi yang sederhana namun bersih dan nyaman. Hostel ini juga memiliki bar dan lounge yang populer.</p>
        </li>
        <li>
        <p><a title="Motel One Wien-Hauptbahnhof" href="https://www.booking.com/hotel/at/motel-one-wien-hauptbahnhof-wien17.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Motel One Wien-Hauptbahnhof</a>: Hotel yang terletak dekat Stasiun Central Vienna ini menawarkan kamar-kamar pribadi yang modern dan terjangkau dengan fasilitas dasar seperti televisi layar datar dan akses Wi-Fi gratis. Hotel ini juga memiliki lounge dan bar yang nyaman untuk bersantai.</p>
        </li>
        </ol>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/MRI8ffYKA8c',
                'thumb' => 'place1379455878_vienna_cnt_18nov09_iStock_b_1.jpg',
                'address' => 'Vienna',
                'created_at' => null,
                'updated_at' => '2023-02-25 23:43:46',
            ],
            [
                'id' => 49,
                'country_id' => 13,
                'name' => 'Giant Wheel in Vienna',
                'slug' => 'giant-wheel-in-vienna',
                'hotels' => '',
                'latitude' => '48.2175095',
                'longitude' => '16.3966444',
                'attractions' => '<p class="dropcap">Giant Wheel atau Riesenrad adalah roda besar kincir ria yang terletak di Taman Prater, Vienna. Kincir ria ini menjadi salah satu simbol kota Vienna dan objek wisata yang populer bagi wisatawan yang mengunjungi kota tersebut.</p>
        <p>Giant Wheel dibangun pada tahun 1897 dan menjadi kincir ria tertinggi di dunia pada saat itu. Saat ini, kincir ria ini masih menjadi salah satu kincir ria tertinggi di Eropa dengan ketinggian sekitar 65 meter.</p>
        <p>Naik Giant Wheel memberikan pengalaman yang menakjubkan karena pengunjung dapat menikmati pemandangan kota Vienna dari ketinggian yang spektakuler. Setiap gondola Giant Wheel dapat menampung hingga 15 orang dan perjalanan kincir ria ini memakan waktu sekitar 15 menit. Selama perjalanan, pengunjung dapat melihat beberapa landmark terkenal di Vienna seperti Katedral St. Stephen, Istana Schönbrunn, dan Donau Tower.</p>
        <p>Giant Wheel juga memiliki sejarah yang menarik, kincir ria ini selamat dari serangan bom selama Perang Dunia II, tetapi sejak itu mengalami kerusakan dan perbaikan. Saat ini, kincir ria ini telah dirombak dan diperbaharui sehingga tetap menjadi tempat wisata yang populer di Vienna.</p>
        <p>Selain naik Giant Wheel, Taman Prater juga menawarkan berbagai atraksi lainnya seperti wahana permainan, taman bermain anak-anak, restoran, dan toko souvenir. Taman Prater adalah tempat yang menyenangkan untuk menghabiskan waktu bersama keluarga dan teman-teman ketika berkunjung ke Vienna.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/caqg3eB5F1s',
                'thumb' => 'place1379455994_riesenrad1.jpg',
                'address' => 'Riesenradplatz 1, 1020 Vienna',
                'created_at' => null,
                'updated_at' => '2023-02-25 23:46:20',
            ],
            [
                'id' => 50,
                'country_id' => 13,
                'name' => 'Graz',
                'slug' => 'graz',
                'hotels' => '',
                'latitude' => '47.070714',
                'longitude' => '15.439504',
                'attractions' => '<p class="dropcap">Graz adalah kota terbesar kedua di Austria yang terletak di bagian tengah negara itu. Graz adalah kota yang indah dan menarik dengan berbagai hal menarik yang dapat dinikmati oleh pengunjung.</p>
        <p>Berikut adalah beberapa keindahan yang dimiliki kota Graz:</p>
        <ol>
        <li>Kepemimpinan budaya: Graz dianggap sebagai salah satu kota seni terkemuka di Eropa, dengan banyak museum dan galeri seni, serta pusat-pusat kebudayaan seperti Schauspielhaus Graz dan Musikverein Graz. Graz juga memiliki banyak festival kebudayaan sepanjang tahun, seperti festival musik akustik jazz internasional, festival film internasional, dan festival musik pop.</li>
        <li>Arsitektur: Graz memiliki banyak bangunan kuno yang indah dan menjadi situs warisan dunia oleh UNESCO, seperti Katedral Graz, Landhaus Graz, dan Mausoleum Kaiser Ferdinand II. Graz juga dikenal sebagai "kota dengan atap merah" karena kebanyakan bangunan kuno di Graz memiliki atap merah bata.</li>
        <li>Taman dan taman kota: Graz memiliki banyak taman dan taman kota yang indah dan cocok untuk piknik dan rekreasi, seperti Schlossberg, Augarten, dan Taman Botani Graz. Schlossberg adalah taman terbesar di Graz yang menawarkan pemandangan spektakuler dari kota dan sungai Mur.</li>
        <li>Kuliner: Graz dikenal akan kulinernya yang lezat dan unik seperti Käferbohnensalat (salad kacang merah), Steirischer Backhendlsalat (salad ayam goreng khas Steiermark), dan Schilcher (jenis anggur merah). Selain itu, Graz juga memiliki pasar makanan tradisional yang menawarkan produk-produk lokal yang segar dan berkualitas tinggi.</li>
        <li>Universitas: Graz memiliki beberapa universitas terbaik di Austria, yang menarik mahasiswa dari seluruh dunia. Kampus universitas ini memiliki bangunan bergaya Barok dan Renaisans yang indah dan menarik.</li>
        </ol>
        <p>Keindahan Graz sangat menakjubkan dan membuat siapapun yang mengunjungi kota ini ingin kembali lagi untuk menikmati keindahan dan keunikan yang dimilikinya. Graz adalah kota yang memadukan sejarah, budaya, dan keindahan alam yang dapat dinikmati oleh semua pengunjung.</p>
        <p>Berikut adalah beberapa hotel favorit yang dekat dengan Centrum di Graz, Austria:</p>
        <ol>
        <li>
        <p><a title="Hotel Wiesler Graz" href="https://www.booking.com/hotel/at/grandhotelwiesler.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Wiesler Graz</a>: Hotel bintang 4 yang terletak dekat Centrum di Graz ini menawarkan kamar-kamar yang luas dan elegan dengan perabotan antik dan modern, serta restoran dan bar yang terkenal di daerah tersebut. Hotel ini juga memiliki spa dan sauna.</p>
        </li>
        <li>
        <p><a title="Hotel Weitzer Graz" href="https://www.booking.com/hotel/at/dasweitzer.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Weitzer Graz</a>: Hotel bintang 4 ini terletak hanya beberapa menit berjalan kaki dari Centrum di Graz, dan menampilkan kamar-kamar yang modern dan terjangkau dengan fasilitas dasar seperti televisi layar datar dan akses Wi-Fi gratis. Hotel ini juga memiliki restoran, bar, dan lounge yang nyaman.</p>
        </li>
        <li>
        <p><a title="Hotel Mercure Graz City" href="https://www.booking.com/hotel/at/mercuregrazcity.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Mercure Graz City</a>: Hotel bintang 4 ini terletak di pusat kota Graz dan menawarkan kamar-kamar yang nyaman dan modern dengan fasilitas dasar seperti televisi layar datar dan akses Wi-Fi gratis. Hotel ini juga memiliki bar, restoran, dan lounge yang populer.</p>
        </li>
        <li>
        <p><a title="Parkhotel Graz" href="https://www.booking.com/hotel/at/parkhotel-graz.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Parkhotel Graz</a>: Hotel bintang 4 yang terletak dekat Centrum di Graz ini menawarkan kamar-kamar yang luas dan elegan dengan perabotan modern, serta restoran dan bar yang terkenal di daerah tersebut. Hotel ini juga memiliki spa dan pusat kebugaran.</p>
        </li>
        </ol>
        <p>Berikut adalah beberapa pilihan hostel atau hotel backpacker yang murah dan dekat dengan Centrum di Graz:</p>
        <ol>
        <li>
        <p><a title="A&amp;O Graz Hauptbahnhof" href="https://www.booking.com/hotel/at/a-amp-o-graz-hauptbahnhof.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">A&amp;O Graz Hauptbahnhof</a>: Hostel ini terletak hanya beberapa menit berjalan kaki dari Centrum di Graz dan menawarkan kamar-kamar dormitory yang terjangkau dan nyaman, serta kamar-kamar pribadi yang sederhana. Hostel ini juga memiliki dapur bersama dan ruang bersantai.</p>
        </li>
        <li>
        <p><a title="JUFA Hotel Graz City" href="https://www.booking.com/hotel/at/jufa-graz-city.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">JUFA Hotel Graz City</a>: Hotel yang terletak dekat dengan Centrum di Graz ini menawarkan kamar-kamar dormitory dan kamar-kamar pribadi yang terjangkau dan sederhana dengan fasilitas dasar seperti televisi layar datar dan akses Wi-Fi gratis. Hotel ini juga memiliki dapur bersama dan ruang bersantai.</p>
        </li>
        <li>
        <p><a title="Hotel Strasser" href="https://www.booking.com/hotel/at/strasser.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Strasser</a>: Hotel ini terletak hanya beberapa menit berjalan kaki dari Centrum di Graz dan menawarkan kamar-kamar yang terjangkau dan sederhana dengan fasilitas dasar seperti televisi layar datar dan akses Wi-Fi gratis. Hotel ini juga memiliki bar dan ruang bersantai.</p>
        </li>
        <li>
        <p><a title="Ibis Budget Graz City" href="https://www.booking.com/hotel/at/ibis-budget-graz-city.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Ibis Budget Graz City</a>: Hotel ini terletak di pusat kota Graz dan menawarkan kamar-kamar yang terjangkau dan sederhana dengan fasilitas dasar seperti televisi layar datar dan akses Wi-Fi gratis. Hotel ini juga memiliki mesin penjual otomatis dan meja resepsionis 24 jam.</p>
        </li>
        <li>
        <p><a title="Hotel Drei Raben Graz" href="https://www.booking.com/hotel/at/dreiraben.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Drei Raben Graz</a>: Hotel yang terletak dekat dengan Centrum di Graz ini menawarkan kamar-kamar yang terjangkau dan sederhana dengan fasilitas dasar seperti televisi layar datar dan akses Wi-Fi gratis. Hotel ini juga memiliki bar dan ruang bersantai.</p>
        </li>
        </ol>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379456063_1Graz-761.jpg',
                'address' => 'Graz',
                'created_at' => null,
                'updated_at' => '2023-02-25 23:46:34',
            ],
            [
                'id' => 51,
                'country_id' => 13,
                'name' => 'The Hohe Tauern National park',
                'slug' => 'the-hohe-tauern-national-park',
                'hotels' => '',
                'latitude' => '47.0004627',
                'longitude' => '12.5408333',
                'attractions' => '<p class="dropcap">Taman Nasional Hohe Tauern adalah taman nasional terbesar di Austria dan salah satu taman nasional terbesar di Eropa. Taman nasional ini terletak di bagian barat Austria dan mencakup wilayah seluas 1.800 kilometer persegi, melintasi negara bagian Tirol, Salzburg, dan Kärnten.</p>
        <p>Taman nasional ini terkenal karena keindahan alamnya, dengan puncak gunung, lembah yang luas, dan sungai yang menakjubkan. Terdapat lebih dari 10.000 spesies flora dan fauna yang hidup di taman nasional ini, termasuk beruang coklat, rusa, dan elang emas.</p>
        <p>Beberapa tempat yang terkenal di Taman Nasional Hohe Tauern meliputi Grossglockner, puncak tertinggi di Austria, dan Krimmler Wasserfälle, air terjun tertinggi di Eropa. Ada juga banyak trekking dan hiking yang menarik di taman nasional ini, termasuk trek ke Puncak Grossvenediger, yang merupakan salah satu puncak gunung tertinggi di Alpen Timur.</p>
        <p>Taman Nasional Hohe Tauern juga memiliki banyak fasilitas dan aktivitas yang menarik, seperti pusat informasi pengunjung, tempat berkemah, area piknik, dan museum alam. Ada juga banyak acara dan festival yang diadakan sepanjang tahun, termasuk festival musik, festival alam, dan festival kebudayaan.</p>
        <p>Taman Nasional Hohe Tauern merupakan tempat yang ideal untuk menikmati keindahan alam Austria dan menikmati kegiatan di luar ruangan. Pengunjung dapat menikmati keindahan pemandangan alam yang spektakuler, melakukan berbagai aktivitas di luar ruangan, atau hanya bersantai dan menikmati udara segar.</p>
        <p>Berikut adalah beberapa pilihan hotel yang dekat dengan The Hohe Tauern National Park di Austria:</p>
        <ol>
        <li>
        <p>Hotel Rudolfshütte: Hotel bintang 3 yang terletak di dalam The Hohe Tauern National Park, menawarkan kamar-kamar yang nyaman dengan pemandangan indah dari pegunungan. Hotel ini juga memiliki restoran, bar, sauna, dan akses langsung ke berbagai jalur hiking.</p>
        </li>
        <li>
        <p><a title="Hotel Post Lermoos" href="https://www.booking.com/hotel/at/post-s.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2">Hotel Post Lermoos</a>: Hotel bintang 4 yang terletak sekitar 40 km dari The Hohe Tauern National Park, menawarkan kamar-kamar yang elegan dan modern dengan balkon pribadi yang menawarkan pemandangan pegunungan yang menakjubkan. Hotel ini juga memiliki restoran, spa, dan kolam renang.</p>
        </li>
        <li>
        <p><a title="Tauern Spa Hotel &amp; Therme" href="https://www.booking.com/hotel/at/tauern-spa-zell-am-see-kaprun.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Tauern Spa Hotel &amp; Therme</a>: Hotel bintang 4 yang terletak sekitar 25 km dari The Hohe Tauern National Park, menawarkan kamar-kamar yang luas dan modern dengan balkon pribadi yang menawarkan pemandangan indah dari pegunungan. Hotel ini juga memiliki spa dengan berbagai fasilitas termasuk kolam renang panas dan dingin, sauna, dan fasilitas kebugaran.</p>
        </li>
        <li>
        <p><a title="Hotel Sonnblick" href="https://www.booking.com/hotel/at/sonnblick.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Sonnblick</a>: Hotel bintang 4 yang terletak di kota Kaprun, sekitar 20 km dari The Hohe Tauern National Park, menawarkan kamar-kamar yang luas dan nyaman dengan pemandangan indah dari pegunungan. Hotel ini juga memiliki restoran, bar, spa, dan kolam renang dalam ruangan.</p>
        </li>
        <li>
        <p><a title="Alpenhotel Perner" href="https://www.booking.com/hotel/at/alpenhotel-perner.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Alpenhotel Perner</a>: Hotel bintang 4 yang terletak di kota Werfenweng, sekitar 30 km dari The Hohe Tauern National Park, menawarkan kamar-kamar yang elegan dengan balkon pribadi yang menawarkan pemandangan pegunungan yang menakjubkan. Hotel ini juga memiliki restoran, spa, dan kolam renang.</p>
        </li>
        </ol>
        <p>Berikut adalah beberapa pilihan hostel yang dekat dengan The Hohe Tauern National Park di Austria:</p>
        <ol>
        <li>
        <p>Hostel St. Martin: Hostel yang terletak di kota Uttendorf, sekitar 15 km dari The Hohe Tauern National Park, menawarkan kamar-kamar dormitory yang terjangkau dan nyaman. Hostel ini juga memiliki dapur bersama, ruang tamu bersama, dan teras.</p>
        </li>
        <li>
        <p>Hostel Post Alpina: Hostel yang terletak di kota Rauris, sekitar 20 km dari The Hohe Tauern National Park, menawarkan kamar-kamar dormitory yang terjangkau dan nyaman. Hostel ini juga memiliki dapur bersama, ruang tamu bersama, dan teras.</p>
        </li>
        <li>
        <p>Hüttendorf Oberstbergmeisteramt: Hostel yang terletak di kota Neukirchen am Großvenediger, sekitar 30 km dari The Hohe Tauern National Park, menawarkan kamar-kamar dormitory dan kamar-kamar pribadi yang sederhana dan terjangkau. Hostel ini juga memiliki dapur bersama, ruang tamu bersama, dan teras.</p>
        </li>
        <li>
        <p><a title="Hotel Post Krimml" href="https://www.booking.com/hotel/at/gasthof-zur-post-krimml.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Post Krimml</a>: Hostel yang terletak di kota Krimml, sekitar 15 km dari The Hohe Tauern National Park, menawarkan kamar-kamar dormitory dan kamar-kamar pribadi yang sederhana dan terjangkau. Hostel ini juga memiliki dapur bersama, ruang tamu bersama, dan teras.</p>
        </li>
        <li>
        <p>Gasthof zur Post - Tauernhaus Wisenegg: Hostel yang terletak di kota Mittersill, sekitar 15 km dari The Hohe Tauern National Park, menawarkan kamar-kamar dormitory dan kamar-kamar pribadi yang sederhana dan terjangkau. Hostel ini juga memiliki restoran, bar, dan teras.</p>
        </li>
        </ol>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/XmrIhTgERzo',
                'thumb' => 'place1379456182_699_2_Nationalpark-Hohe-Tauern-3.jpg',
                'address' => 'Kirchplatz 2, 9971 Matrei in Osttirol',
                'created_at' => null,
                'updated_at' => '2023-02-25 23:46:52',
            ],
            [
                'id' => 52,
                'country_id' => 17,
                'name' => 'Red Square (Lapangan merah)',
                'slug' => 'red-square-lapangan-merah',
                'hotels' => '',
                'latitude' => '55.755826',
                'longitude' => '37.6173',
                'attractions' => '<p>Red Square, atau yang dalam bahasa Rusia disebut Krasnaya Ploshchad, merupakan lapangan terbesar di pusat kota Moscow, Rusia. Lapangan ini dianggap sebagai pusat sejarah, budaya, dan politik Rusia. Red Square adalah kediaman resmi Presiden Rusia yang merupakan tempat paling terkenal serta menarik untuk dikunjungi. Setiap sudut dari lapangan ini mempunyai riwayat tersendiri yang masing-masing memiliki keistimewaan.</p>
        <p>Di Red Square, terdapat beberapa bangunan dan monumen penting, antara lain:</p>
        <ul>
        <li>Basil\'s Cathedral: gereja bersejarah yang menjadi simbol kota Moscow dengan kubah berwarna-warni yang khas.</li>
        <li>Kremlin: benteng kuno yang menjadi pusat kekuasaan politik Rusia selama berabad-abad.</li>
        <li>Lenin\'s Mausoleum: makam tempat jenazah Vladimir Lenin yang diawetkan secara khusus dipajang.</li>
        <li>GUM Department Store: gedung pusat perbelanjaan besar yang dikenal sebagai salah satu pusat perbelanjaan tertua dan paling mewah di Moscow.</li>
        </ul>
        <p>Selain itu, Red Square juga menjadi tempat berlangsungnya parade militer pada hari nasional Rusia serta acara-acara budaya dan musik yang digelar di berbagai momen penting, seperti perayaan tahun baru.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/8gSmyviu-i4',
                'thumb' => 'place1379627283_st-basil-cathedral-red-square-moscow.jpg',
                'address' => 'Moscow',
                'created_at' => null,
                'updated_at' => '2023-02-28 21:31:08',
            ],
            [
                'id' => 53,
                'country_id' => 17,
                'name' => 'Museum Arkeologi',
                'slug' => 'museum-arkeologi',
                'hotels' => '',
                'latitude' => '55.753436',
                'longitude' => '37.612333',
                'attractions' => '<p>Museum Arkeologi Rusia atau The State Hermitage Museum merupakan museum seni dan budaya yang terletak di St. Petersburg, Rusia. Museum ini adalah salah satu museum seni terbesar di dunia, dan memiliki lebih dari 3 juta karya seni dan artefak budaya dari berbagai belahan dunia.</p>
        <p>Koleksi Museum Arkeologi Rusia meliputi seni dan artefak dari zaman purbakala, abad pertengahan, serta zaman modern. Beberapa koleksi terkenal yang dipamerkan di museum ini antara lain:</p>
        <ol>
        <li>Koleksi seni Yunani kuno: Museum Arkeologi Rusia memiliki salah satu koleksi seni Yunani kuno terbesar di dunia, yang mencakup artefak seperti patung, vas, dan perhiasan dari era kuno.</li>
        <li>Koleksi seni Eropa: Museum ini juga memiliki koleksi seni Eropa yang sangat lengkap, dengan karya-karya seniman seperti Rembrandt, Rubens, dan Van Gogh.</li>
        <li>Koleksi seni Asia: Museum ini memiliki koleksi seni Asia yang mencakup karya seni dari Cina, Jepang, dan India.</li>
        <li>Koleksi senjata: Museum ini juga memiliki koleksi senjata yang lengkap dari berbagai zaman dan budaya, termasuk senjata kuno dari Rusia dan Eropa.</li>
        </ol>
        <p>Selain koleksi seni dan budaya, Museum Arkeologi Rusia juga memiliki bangunan bergaya Baroque yang indah dan dilengkapi dengan taman yang luas. Museum ini sangat populer dikunjungi oleh wisatawan, dan merupakan salah satu tempat wisata terpopuler di St. Petersburg.</p>',
                'type' => 'tourist',
                'youtube' => 'https://www.youtube.com/embed/GkcDJ1TJtQc',
                'thumb' => 'place1379627258_archaeology_museum.jpg',
                'address' => '109159, Moscow, 1a, Manezhnaya sq.',
                'created_at' => null,
                'updated_at' => '2023-02-28 21:32:03',
            ],
            [
                'id' => 54,
                'country_id' => 17,
                'name' => 'Atraksi St. Petersburg',
                'slug' => 'atraksi-st-petersburg',
                'hotels' => '',
                'latitude' => '59.9342802',
                'longitude' => '30.3350986',
                'attractions' => '<p>St. Petersburg, terletak di tepi sungai Neva, merupakan kota terbesar nomor tiga di Eropa yang merupakan tujuan terpenting di Rusia. Sebelumnya namanya adalah Petrograd dan Leningrad, memiliki banyak taman, museum serta bangunan bersejarah dari abad 18 dan 19 yang mencerminkan sejarah kejayaan masa lalu. Museum Ermitase merupakan museum terbesar di kota ini yang sering dikunjungi oleh wisatawan.</p>
        <p>St. Petersburg, kota terbesar kedua di Rusia, menawarkan banyak atraksi bagi para wisatawan. Beberapa atraksi yang terkenal di St. Petersburg antara lain:</p>
        <ol>
        <li>Istana Musim Panas Catherine: Terletak sekitar 25 km dari pusat kota, istana ini adalah salah satu yang terbesar di Rusia dan memiliki taman yang indah.</li>
        <li>Museum Ermitase: Museum seni terbesar di Rusia, dengan koleksi seni terbaik di dunia, termasuk lukisan dan patung dari seniman seperti Leonardo da Vinci, Michelangelo, dan Rembrandt.</li>
        <li>Gereja Berdome St. Isaac: Salah satu gereja terbesar di dunia, dengan kubah berdiameter 21,8 meter dan dekorasi interior yang indah.</li>
        <li>Istana Musim Dingin: Salah satu istana terbesar dan paling terkenal di St. Petersburg, dengan koleksi seni dan artefak yang menakjubkan.</li>
        <li>Katedral Bunda Maria Kazan: Gereja yang indah dengan kubah emas yang mencolok dan arsitektur yang mengesankan.</li>
        <li>Palang Merah Rusia: Gedung bersejarah yang dibangun pada tahun 1901 dan kini menjadi museum sejarah Palang Merah Rusia.</li>
        <li>Jembatan Biru: Jembatan kabel gantung yang membentang di atas sungai Neva dan menyediakan pemandangan indah dari kota.</li>
        <li>Teater Mariinsky: Teater Opera dan Balet terkenal di dunia, yang telah menampilkan banyak penampilan terkenal, termasuk karya-karya dari Tchaikovsky dan Stravinsky.</li>
        <li>Katedral Santo Petrus dan Paulus: Salah satu gedung tertua di St. Petersburg, dengan kubah berwarna biru dan arsitektur Barok yang indah.</li>
        <li>Museum Rusia: Museum seni dan sejarah yang menampilkan koleksi seni Rusia terbesar di dunia, termasuk lukisan, patung, dan artefak sejarah lainnya.</li>
        </ol>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379627417_City-Attractions-300x300.jpg',
                'address' => 'St. Petersburg',
                'created_at' => null,
                'updated_at' => '2023-02-28 21:33:33',
            ],
            [
                'id' => 55,
                'country_id' => 17,
                'name' => 'Danau Baikal',
                'slug' => 'danau-baikal',
                'hotels' => '',
                'latitude' => '53.1736',
                'longitude' => '107.6625',
                'attractions' => '<p>Danau Baikal adalah sebuah danau raksasa yang terletak di Siberia, Rusia. Danau ini merupakan danau air tawar terdalam dan terbesar di dunia berdasarkan volume air tawarnya, dengan luas lebih dari 31 ribu km2, mempunyai kedalaman 1637 m, kedalaman maksimum mencapai 1.642 meter dan memiliki volume air sebesar 23.615,39 km&sup3;. Danau ini juga sangat penting dari sisi ekologi mengingat lebih dari 1700 spesies flora dan fauna di negeri ini berada disini. Dan yang menarik juga adalah dua pertiga dari spesies ini tidak didapatkan di bagian lain dunia. Dengan usianya yang lebih dari 25 juta tahun, danau ini dinilai sebagai danau tertua di dunia. Danau Baikal juga menjadi salah satu situs warisan dunia UNESCO pada tahun 1996, karena keunikan lingkungan alam dan keanekaragaman hayati yang dimilikinya.</p>
        <p>Selain itu, Danau Baikal juga menjadi tujuan wisata yang populer bagi wisatawan lokal maupun mancanegara. Beberapa aktivitas wisata yang bisa dilakukan di Danau Baikal antara lain:</p>
        <ol>
        <li>Berjalan-jalan di sepanjang pantai dan menikmati pemandangan indah danau dan pegunungan di sekitarnya.</li>
        <li>Berkunjung ke desa-desa kecil di sekitar Danau Baikal dan belajar tentang budaya dan tradisi lokal.</li>
        <li>Melakukan perjalanan ke Pulau Olkhon, yang merupakan pulau terbesar di Danau Baikal dan memiliki pemandangan alam yang spektakuler.</li>
        <li>Melakukan aktivitas seperti hiking, bersepeda, dan camping di sekitar Danau Baikal.</li>
        <li>Menikmati makanan dan minuman lokal yang khas, seperti sup ikan Baikal, vodka, dan teh khas Rusia.</li>
        </ol>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379627537_lake_baikal_siberia_russia3.jpg',
                'address' => 'Lake Baikal',
                'created_at' => null,
                'updated_at' => '2023-02-28 21:37:53',
            ],
            [
                'id' => 56,
                'country_id' => 17,
                'name' => 'Kremlin',
                'slug' => 'kremlin',
                'hotels' => '',
                'latitude' => '55.7521203',
                'longitude' => '37.6176651',
                'attractions' => '<p>Kremlin adalah sebuah kompleks benteng di pusat kota Moscow, Rusia. Saat ini merupakan museum yang terluas di dunia. Di dalam kompleks ini terdapat beberapa bangunan penting yang menjadi pusat kekuasaan politik dan keagamaan Rusia. Berbagai perisitiwa penting mengubah sejarah Rusia diputuskan disini. Berbagai macam barang yang merupakan koleksi dunia juga dipamerkan disini. Atraksi utama di Kremlin ini adalah berupa sebuah meriam kerjaan yang merupakan meriam tertua dan terbesar di dunia. Berikut ini adalah beberapa tempat yang dapat dikunjungi saat jalan-jalan di Kremlin:</p>
        <ol>
        <li><strong>Katedral St. Basil</strong><br />Katedral St. Basil adalah salah satu landmark paling terkenal di Rusia. Bangunan ini memiliki arsitektur yang unik dengan warna-warna cerah dan dipercaya sebagai simbol dari kejayaan Rusia.</li>
        <li><strong>Gereja Kenaikan</strong><br />Gereja Kenaikan adalah salah satu gereja tertua di Kremlin dan sering dianggap sebagai salah satu bangunan paling indah di kota Moscow.</li>
        <li><strong>Istana Terem</strong><br />Istana Terem adalah bagian dari kompleks Kremlin yang menjadi tempat kediaman para tsar Rusia dan keluarganya pada abad ke-17 dan ke-18.</li>
        <li><strong>Istana Armory</strong><br />Istana Armory adalah museum yang menampilkan koleksi senjata dan perlengkapan militer dari abad ke-12 hingga abad ke-19, serta barang-barang mewah yang dulu dimiliki oleh para tsar Rusia.</li>
        <li><strong>Bell Tower Ivan the Great</strong><br />Bell Tower Ivan the Great adalah menara lonceng tertinggi di Kremlin dengan ketinggian 81 meter. Menara ini dibangun pada abad ke-16 dan terletak di dekat Katedral St. Basil.</li>
        <li><strong>Red Square</strong><br />Red Square adalah lapangan terbesar di Kremlin dan juga merupakan pusat kegiatan di Moscow. Lapangan ini dipenuhi dengan bangunan-bangunan bersejarah seperti GUM Department Store, Katedral St. Basil, dan Spasskaya Tower.</li>
        <li><strong>Arsenal Building</strong><br />Bangunan Arsenal adalah gedung yang terletak di sebelah selatan Istana Terem. Bangunan ini dibangun pada abad ke-18 dan digunakan untuk menyimpan senjata dan perlengkapan militer pada masa itu.</li>
        </ol>
        <p>Itulah beberapa tempat yang dapat dikunjungi saat jalan-jalan di Kremlin. Selain tempat-tempat di atas, di dalam kompleks Kremlin juga terdapat museum, galeri seni, dan taman-taman yang bisa dinikmati oleh pengunjung.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379627722_moscow-kremlin-night.jpg',
                'address' => 'Kremlin',
                'created_at' => null,
                'updated_at' => '2023-02-28 21:41:22',
            ],
            [
                'id' => 57,
                'country_id' => 17,
                'name' => 'Veliky Novgorod',
                'slug' => 'veliky-novgorod',
                'hotels' => '',
                'latitude' => '58.5255698',
                'longitude' => '31.2741928',
                'attractions' => '<p>Veliky Novgorod adalah sebuah kota bersejarah yang terletak sekitar 200 km di sebelah barat daya dari St. Petersburg, Rusia. Berikut adalah beberapa wisata yang bisa dikunjungi di Veliky Novgorod:</p>
        <ol>
        <li>Katedral St. Sophia: Katedral ini adalah salah satu situs warisan dunia UNESCO di Veliky Novgorod. Dibangun pada abad ke-11, katedral ini merupakan contoh arsitektur Rusia kuno yang indah.</li>
        <li>Biara Yuriev: Biara ini adalah biara tertua di Rusia yang masih beroperasi dan terletak di dekat Sungai Volkhov. Biara ini juga merupakan tempat pemakaman Raja dan Pangeran Novgorod yang terkenal.</li>
        <li>Museum Sejarah dan Arsitektur Negara Bagian: Museum ini terletak di dalam benteng kuno Novgorod dan menampilkan koleksi yang kaya akan seni, arsitektur, dan sejarah Rusia.</li>
        <li>Mercusuar Kuno: Mercusuar kuno di Novgorod adalah salah satu mercusuar tertua di Rusia yang masih beroperasi dan menawarkan pemandangan yang menakjubkan dari kota dan lingkungan sekitarnya.</li>
        <li>Monumen Millennium Rusia: Monumen ini didirikan pada tahun 1862 untuk memperingati seribu tahun Rusia dan terletak di dekat Danau Ilmen. Monumen ini terdiri dari sebuah menara setinggi 15 meter yang dikelilingi oleh patung-patung pahlawan sejarah Rusia.</li>
        <li>Kuil Kesehatan: Kuil Kesehatan adalah salah satu tempat terkenal di Novgorod yang menawarkan pengobatan alternatif dan terapi pijat.</li>
        <li>The Marketplace: Pasar tradisional di Veliky Novgorod menawarkan berbagai macam barang dan makanan lokal yang bisa dibeli oleh wisatawan.</li>
        <li>Museum Muscovy Courtyard: Museum ini menampilkan kehidupan di Novgorod pada masa lalu, termasuk cara hidup, pakaian, dan budaya masyarakat pada saat itu.</li>
        <li>Pemandangan dari atas Menara Bell: Menara Bell adalah menara terbesar di Novgorod dan menawarkan pemandangan yang spektakuler dari kota dan lingkungan sekitarnya.</li>
        </ol>
        <p>Pemandangan dari atas Sungai Volkhov: Sungai Volkhov mengalir melalui Veliky Novgorod dan menawarkan pemandangan yang menakjubkan dari kota. Wisatawan dapat menikmati pemandangan ini dengan berjalan di sepanjang sungai atau naik perahu.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379627864_velikiy-novgorod-detinets-08.jpg',
                'address' => 'Veliky Novgorod',
                'created_at' => null,
                'updated_at' => '2023-02-28 21:43:21',
            ],
            [
                'id' => 58,
                'country_id' => 17,
                'name' => 'Elang laut Steller',
                'slug' => 'elang-laut-steller',
                'hotels' => '',
                'latitude' => '59.3666667',
                'longitude' => '143.25',
                'attractions' => '<p>Elang laut Steller, juga dikenal sebagai elang laut berjambul, adalah spesies burung laut yang ditemukan di perairan laut yang dingin di sekitar Rusia dan Alaska. Burung ini dinamai dari Georg Wilhelm Steller, seorang naturalis Jerman yang mempelajari flora dan fauna di wilayah itu selama ekspedisi tahun 1741.</p>
        <p>Elang laut Steller memiliki ciri khas bulu hitam dan putih, dengan jambul putih yang mencolok di atas kepala. Elang ini adalah burung elang terberat di dunia yang merupakan spesies elang ketiga terbanyak. Burung elang raksasa ini mempunyai rentang sayap sekitar 200 cm dengan bahu berwarna putih yang kokoh, paha yang putih, tungging dan ekor yang alami. Penampilan yang berbeda dibandingkan burung lain adalah terdapatnya garis putih menyala di kepala bagian depan yang menarik perhatian. Mereka biasanya hidup di daerah pantai dan perairan dangkal, seperti di daerah sekitar laut Okhotsk, memakan ikan dan krustasea sebagai sumber makanan utama. Populasi elang laut Steller di Rusia diketahui mengalami penurunan sejak tahun 1950-an, namun upaya konservasi telah dilakukan untuk mempertahankan populasi burung ini di alam liar.</p>
        <p>Melihat elang laut Steller di Rusia adalah pengalaman wisata yang menarik untuk para penggemar burung dan alam liar. Beberapa tempat di Rusia yang terkenal sebagai habitat elang laut Steller dan dapat dijadikan sebagai tujuan wisata meliputi:</p>
        <ol>
        <li>Pulau Tyuleniy: Terletak di Laut Okhotsk, pulau ini menjadi tempat hidup bagi ribuan elang laut Steller. Wisatawan dapat melakukan tur perahu untuk melihat burung-burung tersebut dari dekat.</li>
        <li>Teluk Avacha: Terletak di Semenanjung Kamchatka, teluk ini menjadi tempat favorit bagi elang laut Steller. Wisatawan dapat melakukan tur perahu atau menyewa helikopter untuk melihat burung-burung tersebut dari atas.</li>
        <li>Pantai Korsakova: Terletak di Pulau Sakhalin, pantai ini menjadi tempat berbiak bagi elang laut Steller. Wisatawan dapat menyaksikan burung-burung tersebut dari jarak yang aman.</li>
        <li>Pulau Kuril: Terletak di Laut Jepang, pulau ini memiliki populasi elang laut Steller yang besar. Wisatawan dapat melakukan perjalanan untuk melihat burung-burung tersebut di alam liar.</li>
        </ol>
        <p>Namun, penting untuk diingat bahwa elang laut Steller merupakan spesies yang dilindungi, oleh karena itu wisatawan harus mengikuti aturan dan regulasi yang berlaku di tempat tersebut. Wisatawan juga disarankan untuk menghindari melakukan gangguan atau gangguan terhadap burung-burung tersebut agar mereka dapat hidup dan berkembang dengan tenang di habitat aslinya.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379628000_steller-s-sea-eagle.jpg',
                'address' => 'Okhotsk',
                'created_at' => null,
                'updated_at' => '2023-02-28 21:49:20',
            ],
            [
                'id' => 59,
                'country_id' => 17,
                'name' => 'Teater Bolshoi',
                'slug' => 'teater-bolshoi',
                'hotels' => '',
                'latitude' => '55.755826',
                'longitude' => '37.6173',
                'attractions' => '<p>Teater Bolshoi adalah sebuah teater opera dan balet yang terletak di Moskow, Rusia. Teater ini menjadi salah satu tempat wisata budaya yang terkenal dan menjadi daya tarik utama bagi para pengunjung yang tertarik dengan seni pertunjukan klasik.</p>
        <p>Teater Bolshoi telah berdiri selama lebih dari 200 tahun, dan banyak pertunjukan klasik terkenal telah dipentaskan di sana, seperti "Swan Lake" dan "The Nutcracker". Teater ini juga dikenal dengan desain arsitektur baroknya yang indah dan interior yang megah, sehingga para pengunjung dapat menikmati suasana mewah yang sangat khas.</p>
        <p>Ada beberapa cara untuk menikmati wisata Teater Bolshoi, seperti:</p>
        <ol>
        <li>Menonton pertunjukan: Wisatawan dapat membeli tiket untuk menonton pertunjukan opera dan balet di Teater Bolshoi. Tiket biasanya harus dipesan jauh-jauh hari sebelumnya karena tiket pertunjukan di teater ini sangat diminati.</li>
        <li>Tur teater: Wisatawan dapat melakukan tur ke dalam teater untuk melihat interior dan fasilitas yang ada di dalamnya, serta belajar tentang sejarah dan budaya di balik Teater Bolshoi.</li>
        <li>Museum Teater Bolshoi: Museum ini terletak di dekat teater dan menampilkan koleksi yang sangat lengkap tentang sejarah dan artefak yang terkait dengan Teater Bolshoi.</li>
        <li>Konser khusus: Teater Bolshoi juga mengadakan konser khusus untuk para pengunjung, yang meliputi konser piano, musik kamar, dan musik vokal.</li>
        </ol>
        <p>Namun, penting untuk diingat bahwa Teater Bolshoi merupakan sebuah tempat yang sangat terkenal dan sibuk, oleh karena itu wisatawan disarankan untuk memesan tiket dan tur dengan waktu yang cukup jauh-jauh hari sebelumnya. Selain itu, wisatawan juga harus menghormati aturan dan etika yang berlaku di tempat tersebut agar dapat menikmati pengalaman yang memuaskan.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379628124_ifd21d4b38028ab40cb35d81ed7f79f97_-181033.jpg',
                'address' => 'город Москва',
                'created_at' => null,
                'updated_at' => '2023-02-28 22:01:57',
            ],
            [
                'id' => 60,
                'country_id' => 17,
                'name' => 'Elektrozavodskaya',
                'slug' => 'elektrozavodskaya',
                'hotels' => '',
                'latitude' => '55.782094',
                'longitude' => '37.705287',
                'attractions' => '<p>Elektrozavodskaya adalah sebuah stasiun metro di Moskow, Rusia. Stasiun ini merupakan salah satu stasiun metro yang paling indah dan menarik di Moskow, dengan desain interior yang unik dan artistik.Elektrozavodskaya merupakan hasil kreasi tiga orang arsitek Uni Sovyet yang ternama- Vladimir Schucko, Vladimir Gelfreich dan Igor Rozhin. Tempat ini diberi nama demikian, bukan hanya karena dekat pada stasiun kereta dengan anma yang sama, tetapi juga sebagai apresiasi terhadap para pionir di bidang elektrisitas seperti Benjamin Franklin, Wiliam Gilbert, Mikhail Lomonosov, Pavle Yablochkov, Michael Faraday dan Alexander Popov seperti yang terukir pada kubah.&nbsp;</p>
        <p>Salah satu atraksi terbesar di stasiun Elektrozavodskaya adalah arsitektur interior yang dihiasi dengan mozaik keramik yang indah. Dinding dan langit-langit stasiun ini dihiasi dengan mozaik yang sangat detail dan warna-warni, menciptakan suasana yang sangat khas dan menarik.</p>
        <p>Selain itu, ada juga patung-patung perunggu dan instalasi seni yang menambah keunikan dan keindahan stasiun ini. Misalnya, di dalam stasiun terdapat patung perunggu yang menggambarkan buruh pabrik Elektrozavodskaya, yang menggambarkan sejarah industri dan kerja keras di Rusia.</p>
        <p>Wisatawan yang berkunjung ke stasiun Elektrozavodskaya dapat menikmati keindahan dan keunikan desain interior stasiun dengan berjalan-jalan di sekitar area tersebut atau naik kereta menuju stasiun lainnya. Bagi penggemar fotografi, stasiun ini juga menawarkan banyak kesempatan untuk mengambil foto-foto yang menarik dan kreatif.</p>
        <p>Namun, penting untuk diingat bahwa stasiun metro adalah tempat yang sangat sibuk dan penting bagi warga setempat, oleh karena itu wisatawan harus memperhatikan aturan dan etika yang berlaku di tempat tersebut dan tidak mengganggu pengguna metro yang lain.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379628513_elektrozavodskaya.jpg',
                'address' => 'Elektrozavodskaya, Moskow',
                'created_at' => null,
                'updated_at' => '2023-03-03 21:25:01',
            ],
            [
                'id' => 61,
                'country_id' => 8,
                'name' => 'Museum Vatikan',
                'slug' => 'museum-vatikan',
                'hotels' => '',
                'latitude' => '41.9007967',
                'longitude' => '12.4494749',
                'attractions' => '<p>Museum Vatikan adalah salah satu museum seni terbesar dan paling terkenal di dunia. Museum ini terletak di Vatikan, sebuah negara kecil di tengah kota Roma, Italia. Museum ini memiliki koleksi seni dan arkeologi yang sangat besar dan kaya, termasuk lukisan, skulptur, artefak sejarah, dan benda-benda seni lainnya dari berbagai periode dan tempat di dunia.</p>
        <p>Beberapa koleksi seni yang terkenal di Museum Vatikan antara lain:</p>
        <ol>
        <li>Kapel Sistina: Kapel ini terkenal dengan lukisan dinding dan langit-langit yang indah, termasuk karya Michelangelo yang terkenal, "Penciptaan Adam".</li>
        <li>Galeri Peta: Galeri ini terkenal dengan koleksi peta topografi Italia dan seluruh dunia yang dibuat antara abad ke-16 dan ke-18.</li>
        <li>Koleksi Seni Mesir: Koleksi ini berisi artefak sejarah Mesir kuno, termasuk patung-patung, lukisan, dan benda-benda seni lainnya.</li>
        <li>Koleksi Seni Klasik: Koleksi ini berisi patung-patung klasik Romawi dan Yunani, termasuk Venus de Milo dan Apollo Belvedere.</li>
        <li>Galeri Raffaello: Galeri ini berisi koleksi lukisan karya Raphael dan murid-muridnya, termasuk lukisan terkenal "Sekolah Athena".</li>
        </ol>
        <p>Selain itu, Museum Vatikan juga memiliki berbagai koleksi seni lainnya seperti lukisan Barok, seni Etruscan, seni Keltik, seni Persia, dan masih banyak lagi. Pengunjung dapat menghabiskan berjam-jam berjalan-jalan di museum dan menikmati keindahan koleksi seni yang luar biasa tersebut.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1379757293_vaticanmuseum.jpg',
                'address' => 'Viale Vaticano, 00165 Roma',
                'created_at' => null,
                'updated_at' => '2023-02-26 19:13:44',
            ],
            [
                'id' => 62,
                'country_id' => 9,
                'name' => 'Istana Knossos',
                'slug' => 'istana-knossos',
                'hotels' => '',
                'latitude' => '35.3387352',
                'longitude' => '25.1442126',
                'attractions' => '<p>Istana Knossos adalah salah satu situs arkeologi yang paling penting dan terkenal di Yunani. Terletak di pulau Kreta, istana ini diyakini sebagai salah satu situs paling penting dalam sejarah Eropa karena merupakan pusat budaya dan politik Minoan pada zaman kuno.</p>
        <p>Istana Knossos dibangun pada sekitar tahun 2000 SM dan menjadi pusat kebudayaan Minoan selama ribuan tahun. Di dalam kompleks istana ini, terdapat berbagai ruangan, tangga, teras, dan lorong-lorong yang menghubungkan bangunan-bangunan yang berbeda. Ada pula ruang-ruang yang didekorasi dengan lukisan-lukisan dinding yang indah, sehingga membuat istana ini sangat menarik untuk dikunjungi.</p>
        <p>Untuk mengunjungi Istana Knossos, pengunjung dapat membeli tiket masuk di gerbang utama. Ada pula pemandu wisata yang tersedia untuk membantu pengunjung menjelajahi situs arkeologi ini dan memberikan informasi sejarah yang lebih mendalam.</p>
        <p>Istana Knossos menyajikan berbagai barang terbaik serta berbagai kebesaran diantara semua atraksi di seluruh Yunani. Dibangun antara tahun 1700 &ndash; 1400 sebelum masehi, istana Minoan ini dahulunya berfungsi sebagai gedung pengadilan Raja Minos yang terkenal. Bangunan seluas 20.000 m2 ini sudah tidak dikenali lagi bentuk aslinya saking seringnya dilakukan renovasi. Sebagian dari istana ini memiliki ketinggian 5 tingkat yang tentunya memerlukan teknologi maju untuk mengerjakannya.</p>
        <p>Pengunjung disarankan untuk mengenakan pakaian yang nyaman karena area kompleks cukup luas dan membutuhkan waktu untuk dieksplorasi. Selain itu, pengunjung juga disarankan untuk membawa botol air minum dan topi untuk melindungi diri dari sinar matahari.</p>
        <p>Istana Knossos sangat populer di kalangan wisatawan dan seringkali menjadi salah satu destinasi wisata yang paling padat di Kreta. Namun, dengan perencanaan yang baik dan menghindari waktu-waktu kunjungan yang paling ramai, pengunjung bisa menikmati pengalaman yang menarik di situs arkeologi ini.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1381765714_knossos-royal-palace.jpg',
                'address' => 'Heraklion, Crete',
                'created_at' => null,
                'updated_at' => '2023-03-03 23:57:43',
            ],
            [
                'id' => 63,
                'country_id' => 9,
                'name' => 'Delphi',
                'slug' => 'delphi',
                'hotels' => '',
                'latitude' => '38.5522531',
                'longitude' => '22.3814624',
                'attractions' => '<p>Delphi adalah salah satu tempat wisata terkenal di Yunani yang terletak di kaki Gunung Parnassus. Terkenal karena situs arkeologinya yang kaya akan sejarah, Delphi dianggap sebagai pusat keagamaan dan politik Yunani kuno.</p>
        <p>Salah satu atraksi utama di Delphi adalah Kuil Apollo, yang merupakan tempat terkenal untuk meramalkan masa depan di masa Yunani kuno. Pengunjung dapat menjelajahi reruntuhan kuil, termasuk kuil Dewi Athena dan Stadion Delphi, yang merupakan tempat Olimpiade di Yunani kuno.</p>
        <p>Selain situs arkeologi, Delphi juga menawarkan pemandangan alam yang indah dengan perbukitan hijau dan lembah yang subur. Beberapa tempat wisata alam yang terkenal di Delphi termasuk Gunung Parnassus dan Teluk Itea.</p>
        <p>Ada juga museum arkeologi yang menarik di Delphi, di mana pengunjung dapat melihat berbagai artefak dan benda-benda dari zaman kuno, termasuk patung-patung, relief, dan perlengkapan kuil.</p>
        <p>Untuk mencapai Delphi, pengunjung dapat mengambil bus atau mobil dari Athena atau kota-kota besar lainnya di Yunani. Ada pula pemandu wisata yang tersedia untuk memberikan informasi dan membantu pengunjung menjelajahi situs arkeologi dan tempat-tempat wisata di sekitarnya.</p>
        <p>Pengunjung disarankan untuk mengenakan pakaian yang nyaman karena terdapat banyak tangga dan area berbukit di Delphi. Selain itu, pengunjung juga disarankan untuk membawa botol air minum dan topi untuk melindungi diri dari sinar matahari.</p>
        <p>Kunjungan ke Delphi dapat memakan waktu beberapa jam atau bahkan sehari penuh tergantung pada ketertarikan dan minat pengunjung. Namun, bagi pengunjung yang tertarik pada sejarah dan kebudayaan Yunani kuno, Delphi adalah salah satu tempat wisata yang wajib dikunjungi.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1381765835_delphi.jpg',
                'address' => 'Delphi',
                'created_at' => null,
                'updated_at' => '2023-03-03 23:59:13',
            ],
            [
                'id' => 64,
                'country_id' => 9,
                'name' => 'Olympia',
                'slug' => 'olympia',
                'hotels' => '',
                'latitude' => '37.6434582',
                'longitude' => '21.6294085',
                'attractions' => '<p>Olympia adalah sebuah kota kecil di Yunani yang terkenal karena menjadi tempat asal Olimpiade, acara olahraga yang diadakan setiap empat tahun sekali. Terletak di barat daya Peloponnesos, Olympia adalah salah satu tempat wisata paling populer di Yunani.</p>
        <p>Atraksi utama di Olympia adalah situs arkeologi, yang mencakup reruntuhan stadion, kuil, dan bangunan-bangunan lain yang terkait dengan Olimpiade kuno. Ada pula museum arkeologi yang menampilkan artefak dan benda-benda dari zaman kuno, termasuk patung-patung dan artefak-atrefak dari Olimpiade.</p>
        <p>Selain situs arkeologi, Olympia juga menawarkan pemandangan alam yang indah dengan bukit-bukit hijau dan sungai-sungai yang mengalir. Ada pula taman-taman yang menarik, seperti Taman Skulptur dan Taman Archaeological Olympia.</p>
        <p>Pengunjung juga dapat menjelajahi kota kecil Olympia, yang memiliki banyak restoran dan toko suvenir. Ada pula akomodasi yang tersedia untuk para wisatawan, mulai dari penginapan murah hingga hotel mewah.</p>
        <p>Untuk mencapai Olympia, pengunjung dapat mengambil bus atau mobil dari Athena atau kota-kota besar lainnya di Yunani. Ada pula pemandu wisata yang tersedia untuk memberikan informasi dan membantu pengunjung menjelajahi situs arkeologi dan tempat-tempat wisata di sekitarnya.</p>
        <p>Pengunjung disarankan untuk mengenakan pakaian yang nyaman karena terdapat banyak tangga dan area berbukit di Olympia. Selain itu, pengunjung juga disarankan untuk membawa botol air minum dan topi untuk melindungi diri dari sinar matahari.</p>
        <p>Kunjungan ke Olympia dapat memakan waktu beberapa jam atau bahkan sehari penuh tergantung pada ketertarikan dan minat pengunjung. Namun, bagi pengunjung yang tertarik pada sejarah dan olahraga kuno, Olympia adalah salah satu tempat wisata yang wajib dikunjungi.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1381765994_olympia.jpg',
                'address' => 'Olympia',
                'created_at' => null,
                'updated_at' => '2023-03-04 00:00:17',
            ],
            [
                'id' => 65,
                'country_id' => 9,
                'name' => 'Acropolis',
                'slug' => 'acropolis',
                'hotels' => '',
                'latitude' => '37.9837155',
                'longitude' => '23.7293097',
                'attractions' => 'Yunani tanpa Acropolis akan menjadi kurang menawan bagi wisatawan. Nama Acropolis merujuk pada tepian kota. Terletak di ibu kota Atena, Acropolis berdiri tegak di atas perbukitan. Acropolis ini menjadi terkenal karena adanya kuil Parthenon, kuil yang dipersembahkan bagi Dewi Atena. Daerah ini telah menjadi daerah hunian sejak tahun 650 sebelum masehi dan merepresentasikan semua aspek sejarah singkat dari Yunani. Kebesaran arsitektur Acropolis sungguh menawan untuk dipandang serta meupakan etalase spirit peradaban Yunani. Pemandangan dari Atena ke arah Acropolis, dan sebaliknya dari kuil ke arah kota sangat luar biasa.  <br><br>Pada abad ke  5 sebelum masehi, Atena menduduki posisi terpenting diantara kota yang termasuk tua di dunia dan Acropolis menjadi pusat perhatian.<br><br>Sampai saat ini merupakan pertanyaan besar mengenai keajaiban bagaimana dapat terjadi transformasi dari sebuah bukit karang menjadi monumen budaya dan seni yang unik. Monumen terpenting yang dibangun semasa jaman Yunani adalah Parthenon yang meupakan karya Ictinus. Sayangnya saat ini kita hanya dapat menyaksikan bangunan yang sudah tidak utuh lagi sebagai saksi peradaban Yunani yang maha besar.',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1381766133_Acropolis22.JPG',
                'address' => 'Athina',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 66,
                'country_id' => 9,
                'name' => 'Meteora',
                'slug' => 'meteora',
                'hotels' => '',
                'latitude' => '39.706618',
                'longitude' => '21.6288728',
                'attractions' => '<p>Meteora adalah sebuah wilayah unik di Yunani yang terkenal dengan formasi batu-batu besar yang menjulang tinggi di atas permukaan tanah. Terletak di dekat kota Kalambaka di Yunani utara, Meteora adalah salah satu tempat wisata yang paling menakjubkan dan menakutkan di Yunani.</p>
        <p>Meteora adalah tempat yang populer bagi para pendaki gunung dan penggemar alam. Ada banyak rute pendakian yang tersedia untuk menjelajahi formasi batu-batu yang menakjubkan tersebut. Para pengunjung juga dapat melakukan perjalanan sekitar kawasan ini dengan naik kereta gantung.</p>
        <p>Selain itu, Meteora juga terkenal karena menjadi rumah bagi beberapa biara dan gereja yang dibangun di atas formasi batu tersebut. Ada enam biara dan gereja yang masih berfungsi hingga saat ini, termasuk Biara Agia Triada, Biara Roussanou, Biara Varlaam, dan Biara Megalo Meteoro. Pengunjung dapat mengunjungi biara dan gereja tersebut untuk mengetahui sejarah dan keunikan arsitekturnya.</p>
        <p>Untuk mencapai Meteora, pengunjung dapat mengambil kereta api dari Athena atau Thessaloniki ke stasiun kereta api Kalambaka. Ada pula pemandu wisata yang tersedia untuk memberikan informasi dan membantu pengunjung menjelajahi kawasan ini.</p>
        <p>Pengunjung disarankan untuk mengenakan pakaian yang nyaman dan sepatu yang sesuai karena terdapat banyak rute pendakian dan tangga di kawasan ini. Selain itu, pengunjung juga disarankan untuk membawa botol air minum dan topi untuk melindungi diri dari sinar matahari.</p>
        <p>Kunjungan ke Meteora dapat memakan waktu beberapa jam atau bahkan sehari penuh tergantung pada ketertarikan dan minat pengunjung. Namun, bagi pengunjung yang tertarik pada keindahan alam dan sejarah Yunani, Meteora adalah salah satu tempat wisata yang wajib dikunjungi.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1381766201_meteora4Gr.jpg',
                'address' => 'Kalampaka 422 00',
                'created_at' => null,
                'updated_at' => '2023-03-04 00:01:24',
            ],
            [
                'id' => 67,
                'country_id' => 9,
                'name' => 'Mycenae',
                'slug' => 'mycenae',
                'hotels' => '',
                'latitude' => '37.7308631',
                'longitude' => '22.7561327',
                'attractions' => '<p>Mycenae adalah sebuah situs arkeologi di Yunani yang terkenal karena menjadi tempat kelahiran peradaban Yunani kuno dan merupakan salah satu situs arkeologi paling terkenal di Yunani. Terletak di dataran Argolis, Mycenae menawarkan pengunjung pemandangan alam yang indah dan sejarah yang kaya.</p>
        <p>Atraksi utama di Mycenae adalah kastil, yang dikenal dengan nama Kastil Agamemnon. Kastil ini adalah salah satu struktur batu paling besar di dunia kuno dan dianggap sebagai salah satu bangunan paling penting dalam sejarah Yunani kuno. Selain itu, pengunjung dapat melihat reruntuhan kuil, perumahan, dan makam di sekitar situs arkeologi tersebut.</p>
        <p>Selain situs arkeologi, Mycenae juga menawarkan pemandangan alam yang indah dengan bukit-bukit hijau dan hamparan kebun anggur yang subur. Ada pula museum arkeologi yang menampilkan artefak dan benda-benda dari zaman kuno, termasuk artefak-atrefak dari kastil dan kuil.</p>
        <p>Pengunjung juga dapat menjelajahi kota kecil Mycenae, yang memiliki banyak restoran dan toko suvenir. Ada pula akomodasi yang tersedia untuk para wisatawan, mulai dari penginapan murah hingga hotel mewah.</p>
        <p>Untuk mencapai Mycenae, pengunjung dapat mengambil bus atau mobil dari Athena atau kota-kota besar lainnya di Yunani. Ada pula pemandu wisata yang tersedia untuk memberikan informasi dan membantu pengunjung menjelajahi situs arkeologi dan tempat-tempat wisata di sekitarnya.</p>
        <p>Pengunjung disarankan untuk mengenakan pakaian yang nyaman karena terdapat banyak tangga dan area berbukit di Mycenae. Selain itu, pengunjung juga disarankan untuk membawa botol air minum dan topi untuk melindungi diri dari sinar matahari.</p>
        <p>Kunjungan ke Mycenae dapat memakan waktu beberapa jam atau bahkan sehari penuh tergantung pada ketertarikan dan minat pengunjung. Namun, bagi pengunjung yang tertarik pada sejarah dan arsitektur Yunani kuno, Mycenae adalah salah satu tempat wisata yang wajib dikunjungi.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1381766311_mycenae-graves-view.jpg',
                'address' => 'Mycenae',
                'created_at' => null,
                'updated_at' => '2023-03-04 00:02:24',
            ],
            [
                'id' => 68,
                'country_id' => 9,
                'name' => 'Musium arkeologikal nasional',
                'slug' => 'musium-arkeologikal-nasional',
                'hotels' => '',
                'latitude' => '37.9899408',
                'longitude' => '23.730916',
                'attractions' => '<p>Museum Arkeologi Nasional Yunani (National Archaeological Museum) terletak di Athena, dan merupakan salah satu museum arkeologi terbesar dan terpenting di dunia. Museum ini menampung lebih dari 11.000 artefak dari periode pra-sejarah hingga zaman Bizantium.</p>
        <p>Beberapa koleksi terkenal yang dapat dilihat di Museum Arkeologi Nasional Yunani antara lain:</p>
        <ol>
        <li>
        <p>Koleksi Periode Pra-Sejarah: menampilkan artefak dari era neolitikum hingga periode Mikenai, termasuk ukiran batu, patung-patung, perhiasan, dan senjata.</p>
        </li>
        <li>
        <p>Koleksi Periode Klasik: menampilkan patung-patung klasik, termasuk patung Athena Parthenos dan Hermes of Praxiteles.</p>
        </li>
        <li>
        <p>Koleksi Periode Helenistik: menampilkan patung-patung dari periode Helenistik, termasuk patung Venus dari Milo.</p>
        </li>
        <li>
        <p>Koleksi Periode Romawi: menampilkan patung-patung Romawi, termasuk patung kaisar Romawi dan keluarganya.</p>
        </li>
        <li>
        <p>Koleksi Periode Bizantium: menampilkan artefak dari periode Bizantium, termasuk lukisan dinding dan ikon-ikon.</p>
        </li>
        </ol>
        <p>Selain koleksi artefak, Museum Arkeologi Nasional Yunani juga menampilkan pameran sementara yang menampilkan artefak dari situs arkeologi terkenal di Yunani dan dunia.</p>
        <p>Bagi para pengunjung yang tertarik dengan sejarah dan arkeologi, Museum Arkeologi Nasional Yunani adalah tempat yang sangat menarik untuk dikunjungi. Museum ini buka setiap hari kecuali hari Senin, dan tiket masuknya cukup terjangkau. Pengunjung dapat menghabiskan beberapa jam atau bahkan sehari penuh di museum ini untuk mengeksplorasi koleksi yang luar biasa ini.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1381766434_national_archaeological_museum.jpg',
                'address' => '28is Oktovriou 44, Athina 10682',
                'created_at' => null,
                'updated_at' => '2023-03-04 00:07:48',
            ],
            [
                'id' => 69,
                'country_id' => 9,
                'name' => 'Agora Kuno',
                'slug' => 'agora-kuno',
                'hotels' => '',
                'latitude' => '38.0457568',
                'longitude' => '23.8584737',
                'attractions' => '<p>Agora Kuno (Ancient Agora) adalah sebuah situs arkeologi yang terletak di pusat kota Athena, Yunani. Agora Kuno merupakan pusat kegiatan politik, sosial, dan ekonomi selama masa Yunani kuno dan menjadi salah satu tempat terpenting dalam sejarah Athena.</p>
        <p>Di Agora Kuno, pengunjung dapat melihat reruntuhan bangunan-bangunan penting seperti Stoa Attalos, sebuah bangunan dengan atap terbuka yang digunakan sebagai pasar dan tempat berkumpul di era Yunani kuno. Pengunjung juga dapat melihat kuil-kuil seperti Kuil Efesus, Kuil Ares, dan Kuil Hephaistos yang merupakan bangunan-bangunan agama yang penting pada zaman Yunani kuno.</p>
        <p>Selain itu, pengunjung dapat melihat situs arkeologi lain seperti altar dan monumen yang terletak di sekitar Agora Kuno. Ada pula museum arkeologi yang menampilkan artefak dan benda-benda dari zaman kuno, termasuk patung-patung, perhiasan, dan senjata.</p>
        <p>Pengunjung dapat menjelajahi Agora Kuno sendiri atau bergabung dengan tur yang dipandu untuk mendapatkan informasi yang lebih rinci tentang situs arkeologi dan sejarah Athena. Ada juga peta dan panduan audio yang tersedia untuk membantu pengunjung menjelajahi situs arkeologi tersebut.</p>
        <p>Agora Kuno adalah salah satu tempat wisata yang wajib dikunjungi bagi para pecinta sejarah dan arkeologi. Kunjungan ke Agora Kuno dapat memakan waktu beberapa jam tergantung pada ketertarikan dan minat pengunjung. Namun, bagi pengunjung yang ingin mendapatkan pengalaman yang lebih mendalam, disarankan untuk menghabiskan lebih banyak waktu di Agora Kuno dan menjelajahi setiap sudutnya.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1381766588_Ancient-Agora-of-Athens-896.jpg',
                'address' => 'Attica',
                'created_at' => null,
                'updated_at' => '2023-03-04 00:09:11',
            ],
            [
                'id' => 70,
                'country_id' => 9,
                'name' => 'Biara Daphni',
                'slug' => 'biara-daphni',
                'hotels' => '',
                'latitude' => '37.9837155',
                'longitude' => '23.7293097',
                'attractions' => '<p>Biara Daphni adalah sebuah biara Bizantium yang terletak di Daphni, sekitar 11 kilometer dari pusat kota Athena, Yunani. Biara ini terkenal dengan mozaik-mozaiknya yang indah dan merupakan contoh terbaik dari seni mozaik Bizantium.</p>
        <p>Mozaik di Biara Daphni dianggap sebagai salah satu karya seni paling indah dari periode Bizantium. Mozaik-mozaik ini menggambarkan adegan-adegan dari kehidupan Yesus dan Maria, termasuk kelahiran Yesus, penyaliban, dan kebangkitan. Mozaik-mozaik ini dihiasi dengan warna-warna yang cerah dan indah, serta menggunakan teknik mozaik yang rumit dan rinci.</p>
        <p>Selain mozaik-mozaiknya, Biara Daphni juga memiliki arsitektur yang menarik. Bangunan biara ini memiliki kubah besar yang menakjubkan dan ornamen-ornamen dekoratif yang indah.</p>
        <p>Pengunjung yang ingin mengunjungi Biara Daphni dapat mengambil bus atau taksi dari Athena. Biara ini buka setiap hari kecuali Senin dan tiket masuknya cukup terjangkau. Di dalam biara, pengunjung akan menemukan pemandu yang dapat memberikan informasi tentang sejarah dan seni mozaik Biara Daphni.</p>
        <p>Biara Daphni adalah tempat wisata yang sangat menarik untuk dikunjungi bagi para pecinta seni dan sejarah. Pengunjung dapat menghabiskan beberapa jam di biara ini untuk menikmati keindahan mozaik-mozaiknya dan mengeksplorasi arsitektur biara yang indah.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1381766669_daphni_monastery.jpg',
                'address' => 'Athinon avenue, Athina',
                'created_at' => null,
                'updated_at' => '2023-03-04 00:10:05',
            ],
            [
                'id' => 71,
                'country_id' => 9,
                'name' => 'Plaka',
                'slug' => 'plaka',
                'hotels' => '',
                'latitude' => '37.9028915',
                'longitude' => '23.8526634',
                'attractions' => '<p>Plaka adalah sebuah kawasan yang terletak di jantung kota Athena, Yunani. Kawasan ini terkenal dengan suasana tradisional dan arsitektur khas Yunani yang masih terjaga dengan baik. Plaka adalah tempat wisata yang populer di Athena dan menyajikan pengalaman yang unik bagi para pengunjung.</p>
        <p>Di Plaka, pengunjung dapat menikmati berbagai kegiatan seperti berjalan-jalan di lorong-lorong yang sempit dan menikmati pemandangan indah kota Athena dari bukit Lykavittos. Ada juga banyak toko-toko kecil yang menjual kerajinan tangan dan suvenir-souvenir khas Yunani.</p>
        <p>Plaka juga terkenal dengan makanan dan minuman yang enak. Terdapat banyak restoran dan kafe yang menyajikan masakan tradisional Yunani seperti souvlaki, moussaka, dan baklava. Pengunjung juga dapat mencicipi anggur Yunani yang terkenal di beberapa bar anggur yang terletak di kawasan ini.</p>
        <p>Selain itu, di Plaka juga terdapat beberapa tempat wisata menarik seperti Museum Keramik Yunani, sebuah museum yang menampilkan koleksi keramik kuno dari Yunani, serta Pemandian Romawi, sebuah pemandian kuno yang masih terjaga dengan baik dan dianggap sebagai salah satu bangunan Romawi terbaik di Athena.</p>
        <p>Plaka dapat diakses dengan berjalan kaki dari banyak tempat di pusat kota Athena atau menggunakan transportasi umum seperti bus dan metro. Ada juga tur yang dipandu yang tersedia bagi pengunjung yang ingin mendapatkan pengalaman yang lebih dalam tentang sejarah dan budaya Plaka.</p>
        <p>Plaka adalah tempat wisata yang sangat menarik dan ideal bagi mereka yang ingin menikmati suasana kota tua Yunani yang autentik dan mempelajari tentang sejarah dan budaya Athena.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1381766813_PLAKA.jpg',
                'address' => 'Adrianou',
                'created_at' => null,
                'updated_at' => '2023-03-04 00:11:08',
            ],
            [
                'id' => 72,
                'country_id' => 3,
                'name' => 'Pegunungan Alpen Perancis',
                'slug' => 'pegunungan-alpen-perancis',
                'hotels' => '',
                'latitude' => '46.5288067',
                'longitude' => '10.0794644',
                'attractions' => '<p>Jangan lupakan untuk mengunjungi pegunungan Alpen bagian Perancis bagi mereka yang mencintai wisata pegunungan. Baik mereka yang tertarik untuk menikmati musim panas, dengan lembah-lembah yang hijau dengan hamparan bunga-bunga yang bermekaran ditimpa matahari, atau puncak-puncak bersalju yang mengundang para penyuka olah raga Ski dengan pondokpondok wisata dan segala fasilitas lengkap olah raga Ski yang tersedia.</p>
        <p>Pegunungan Alpen Prancis membentang sepanjang perbatasan antara Prancis dan Swiss, dan mencakup beberapa puncak gunung tertinggi di Eropa seperti Mont Blanc, Matterhorn, dan Monte Rosa. Daerah ini terkenal dengan pemandangan alamnya yang indah dan menjadi tujuan wisata populer bagi para pendaki, penggemar olahraga musim dingin, dan pengunjung yang mencari liburan santai.</p>
        <p>Berikut adalah beberapa hal yang dapat ditemukan di Pegunungan Alpen Perancis:</p>
        <ol>
        <li>Aktivitas olahraga musim dingin: Pegunungan Alpen Perancis adalah salah satu tempat terbaik di dunia untuk bermain ski dan snowboard, dengan sejumlah resor ski terkenal seperti Chamonix, Val d\'Isere, dan Courchevel.</li>
        <li>Pendakian gunung: Pegunungan Alpen Prancis menawarkan pemandangan alam yang indah dan menjadi tempat yang populer bagi para pendaki. Ada banyak jalur pendakian yang menantang dan menawarkan pemandangan luar biasa dari puncak gunung.</li>
        <li>Pemandangan alam yang indah: Pegunungan Alpen Perancis menawarkan pemandangan alam yang indah seperti lembah hijau, hutan, sungai, dan danau biru yang jernih.</li>
        <li>Wisata kota: Ada beberapa kota dan desa kecil yang terletak di pegunungan Alpen Perancis seperti Chamonix, Annecy, dan Grenoble. Kota-kota ini menawarkan berbagai atraksi seperti kastil bersejarah, museum, dan pasar tradisional.</li>
        <li>Aktivitas olahraga lainnya: Selain ski dan snowboard, Pegunungan Alpen Perancis menawarkan berbagai aktivitas olahraga lainnya seperti hiking, rafting, paralayang, dan golf.</li>
        </ol>
        <p>Itulah beberapa hal yang dapat ditemukan di Pegunungan Alpen Perancis. Dengan keindahan alamnya dan berbagai macam aktivitas yang dapat dilakukan, pegunungan ini menjadi destinasi wisata yang populer bagi pengunjung dari seluruh dunia.</p>
        <p>Berikut ini beberapa pilihan hotel di Pegunungan Alpen Perancis yang dapat Anda pertimbangkan:</p>
        <ol>
        <li>
        <p><a title="Les Airelles Courchevel" href="https://www.booking.com/hotel/fr/les-airelles-courchevel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Les Airelles Courchevel</a> adalah hotel mewah yang terletak di stasiun ski Courchevel 1850. Hotel ini dilengkapi dengan fasilitas lengkap seperti kolam renang dalam ruangan, spa, dan restoran bintang Michelin. Tarif kamar mulai dari sekitar &euro;1,000 per malam.</p>
        </li>
        <li>
        <p><a title="Hotel Mont-Blanc" href="https://www.booking.com/hotel/fr/hotel-mont-blanc-chamonix.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Mont-Blanc</a> adalah hotel mewah yang terletak di kota Chamonix di bawah puncak Mont Blanc. Hotel ini dilengkapi dengan fasilitas lengkap seperti spa dan restoran bintang Michelin. Tarif kamar mulai dari sekitar &euro;500 per malam.</p>
        </li>
        </ol>
        <p>Berikut adalah beberapa rekomendasi hotel murah di Pegunungan Alpen Prancis:</p>
        <ol>
        <li>
        <p>H&ocirc;tel le Christina: Hotel ini terletak di Les Menuires dan menawarkan akomodasi yang nyaman dengan harga yang terjangkau. Fasilitas termasuk akses Wi-Fi gratis dan restoran.</p>
        </li>
        <li>
        <p>H&ocirc;tel Club Le Verseau: Hotel ini terletak di Valloire dan menawarkan akomodasi yang bersahaja tetapi nyaman dengan harga yang terjangkau. Fasilitas termasuk akses Wi-Fi gratis, kolam renang dalam ruangan, dan sauna.</p>
        </li>
        <li>
        <p>H&ocirc;tel Club mmv Les Bergers: Hotel ini terletak di Pra-Loup dan menawarkan akomodasi yang nyaman dengan harga yang terjangkau. Fasilitas termasuk akses Wi-Fi gratis, kolam renang dalam ruangan, dan restoran.</p>
        </li>
        <li>
        <p><a title="H&ocirc;tel Club mmv Les M&eacute;l&egrave;zes" href="https://www.booking.com/hotel/fr/club-mmv-les-melezes.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">H&ocirc;tel Club mmv Les M&eacute;l&egrave;zes</a>: Hotel ini terletak di Montgen&egrave;vre dan menawarkan akomodasi yang nyaman dengan harga yang terjangkau. Fasilitas termasuk akses Wi-Fi gratis, kolam renang dalam ruangan, dan restoran.</p>
        </li>
        <li>
        <p>H&ocirc;tel la Porte des C&icirc;mes: Hotel ini terletak di Saint-V&eacute;ran dan menawarkan akomodasi yang sederhana tetapi nyaman dengan harga yang terjangkau. Fasilitas termasuk akses Wi-Fi gratis dan restoran.</p>
        </li>
        </ol>
        <p>Itulah beberapa pilihan hotel di Pegunungan Alpen Perancis yang dapat Anda pertimbangkan, dari hotel mewah hingga hotel terjangkau. Pastikan untuk merencanakan perjalanan Anda dengan baik dan mempertimbangkan preferensi dan anggaran Anda. Selamat berlibur!</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1383730801_french-alps-mont-blanc.jpg',
                'address' => 'Alps',
                'created_at' => null,
                'updated_at' => '2023-02-28 20:59:39',
            ],
            [
                'id' => 73,
                'country_id' => 14,
                'name' => 'Musium Guggenheim: Bilbao',
                'slug' => 'musium-guggenheim-bilbao',
                'hotels' => '',
                'latitude' => '43.2681257',
                'longitude' => '-2.9344707',
                'attractions' => '<p>Museum Guggenheim Bilbao adalah sebuah museum seni kontemporer yang terletak di Bilbao, Spanyol. Museum ini didirikan pada tahun 1997 dan merupakan cabang dari Museum Guggenheim di New York City.</p>
        <p>Museum ini didesain oleh arsitek terkenal, Frank Gehry, dan memiliki bangunan yang menakjubkan dan unik. Bangunan ini terbuat dari logam dan kaca, dengan bentuk yang tidak simetris dan mempunyai garis-garis yang melengkung.</p>
        <p>Di dalam museum ini, pengunjung dapat menikmati berbagai koleksi seni kontemporer dari seniman-seniman terkenal, termasuk karya-karya dari Jeff Koons, Andy Warhol, dan Yoko Ono. Koleksi seni yang dipajang di museum ini sangat bervariasi, mulai dari seni rupa, patung, fotografi, hingga media seni digital.</p>
        <p>Museum Guggenheim Bilbao juga menyelenggarakan berbagai acara dan pameran seni, termasuk konser musik, pertunjukan teater, dan pertunjukan tari. Selain itu, museum ini memiliki toko suvenir dan restoran yang menyajikan hidangan khas Basque dan hidangan internasional.</p>
        <p>Museum Guggenheim Bilbao telah menjadi salah satu destinasi wisata terpopuler di Spanyol dan diakui sebagai salah satu bangunan ikonik abad ke-20. Selain sebagai tempat menyimpan dan menampilkan seni kontemporer, museum ini juga menjadi contoh yang baik dalam pengembangan kota dengan mengubah Bilbao dari kota industri ke kota budaya dan pariwisata yang menarik.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1384182952_guggenheim_museum_bilbao_ebe310108_1.jpg',
                'address' => 'Abandoibarra Hiribidea, 2, 48009 Bilbao',
                'created_at' => null,
                'updated_at' => '2023-03-03 21:42:40',
            ],
            [
                'id' => 74,
                'country_id' => 14,
                'name' => 'Sierra Nevada',
                'slug' => 'sierra-nevada',
                'hotels' => '',
                'latitude' => '37.05',
                'longitude' => '-3.3',
                'attractions' => '<p>Berikut adalah beberapa pilihan hotel mewah dan murah di Sierra Nevada:</p>
        <ol>
        <li>
        <p><a title="Hotel Melia Sol y Nieve" href="https://www.booking.com/hotel/es/melia-sol-y-nieve.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Melia Sol y Nieve</a> Hotel ini adalah salah satu hotel bintang lima terbaik di Sierra Nevada, terletak tepat di lereng gunung dengan akses mudah ke lift ski. Hotel ini menawarkan kolam renang dalam ruangan, spa, restoran, dan bar. Harga per malam mulai dari sekitar &euro;150.</p>
        </li>
        <li>
        <p><a title="Hotel Kenia Nevada" href="https://www.booking.com/hotel/es/kenia-nevada.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Kenia Nevada</a> Hotel ini adalah pilihan yang baik untuk penginapan mewah dan terjangkau di Sierra Nevada. Terletak di pusat kota dengan akses mudah ke berbagai atraksi wisata dan lift ski. Hotel ini memiliki kolam renang dalam ruangan, pusat kebugaran, restoran, dan bar. Harga per malam mulai dari sekitar &euro;100.</p>
        </li>
        <li>
        <p><a title="Hotel GHM Monachil" href="https://www.booking.com/hotel/es/ghm-monachil.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel GHM Monachil</a> Hotel ini terletak di desa kecil Monachil yang hanya beberapa menit dari kawasan ski Sierra Nevada. Hotel ini menawarkan kamar-kamar yang modern dan luas dengan akses Wi-Fi gratis, TV layar datar, dan balkon dengan pemandangan gunung yang indah. Hotel ini juga dilengkapi dengan kolam renang dalam ruangan, sauna, dan restoran. Harga per malam mulai dari sekitar &euro;80.</p>
        </li>
        <li>
        <p><a title="Hotel Ziryab" href="https://www.booking.com/hotel/es/ziryab.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Ziryab</a> Hotel ini terletak di jantung Sierra Nevada dengan akses mudah ke berbagai tempat wisata. Hotel ini menawarkan kamar-kamar yang nyaman dengan akses Wi-Fi gratis, TV layar datar, dan balkon dengan pemandangan gunung yang indah. Hotel ini juga dilengkapi dengan restoran, bar, dan teras berjemur. Harga per malam mulai dari sekitar &euro;70.</p>
        </li>
        </ol>
        <p>Perlu diingat bahwa harga hotel dapat berubah tergantung pada musim liburan dan ketersediaan kamar. Oleh karena itu, sebaiknya lakukan pengecekan harga dan ketersediaan kamar secara online atau langsung menghubungi hotel untuk mendapatkan informasi yang lebih akurat.</p>
        <p>Sierra Nevada dapat dicapai dengan berbagai pilihan transportasi, tergantung pada asal Anda dan preferensi perjalanan Anda. Berikut adalah beberapa opsi transportasi ke Sierra Nevada:</p>
        <ol>
        <li>
        <p>Pesawat: Bandara terdekat ke Sierra Nevada adalah Bandara Federico Garc&iacute;a Lorca Granada-Ja&eacute;n (GRX), yang terletak sekitar 40 km dari Sierra Nevada. Ada banyak penerbangan domestik dari berbagai kota di Spanyol, serta beberapa penerbangan internasional. Setelah tiba di bandara, Anda dapat menggunakan taksi, bus, atau mobil sewaan untuk menuju ke Sierra Nevada.</p>
        </li>
        <li>
        <p>Kereta: Stasiun kereta terdekat ke Sierra Nevada adalah Stasiun Kereta Api Granada. Dari sini, Anda dapat naik bus atau taksi untuk menuju ke Sierra Nevada, yang berjarak sekitar 32 km dari stasiun.</p>
        </li>
        <li>
        <p>Mobil: Jika Anda ingin membawa mobil pribadi, Sierra Nevada dapat dicapai melalui jalan raya A-395, yang terhubung ke jalan raya A-92 dari Granada. Perjalanan dari Granada ke Sierra Nevada membutuhkan waktu sekitar 45 menit.</p>
        </li>
        <li>
        <p>Bus: Ada layanan bus reguler yang tersedia dari Granada ke Sierra Nevada selama musim ski. Bus berangkat dari Terminal Bus Granada dan menuju ke stasiun ski Pradollano di Sierra Nevada. Perjalanan ini membutuhkan waktu sekitar 1 jam.</p>
        </li>
        <li>
        <p>Taksi: Taksi tersedia dari bandara dan stasiun kereta di Granada untuk menuju ke Sierra Nevada. Namun, tarif taksi mungkin agak mahal terutama selama musim ski.</p>
        </li>
        </ol>
        <p>Ketika memilih opsi transportasi, perhatikan biaya, waktu tempuh, kenyamanan, dan kecepatan. Jika Anda bepergian dengan kelompok besar atau membawa banyak peralatan ski, maka menyewa mobil mungkin menjadi pilihan yang lebih nyaman dan efisien.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1384183284_sierra_nevada.jpg',
                'address' => 'Sierra Nevada',
                'created_at' => null,
                'updated_at' => '2023-03-03 21:48:15',
            ],
            [
                'id' => 75,
                'country_id' => 14,
                'name' => 'Katedral kota Burgos',
                'slug' => 'katedral-kota-burgos',
                'hotels' => '',
                'latitude' => '42.3402774',
                'longitude' => '-3.7049115',
                'attractions' => '<p>Katedral Burgos adalah sebuah katedral yang terletak di kota Burgos, Spanyol. Katedral ini merupakan salah satu contoh arsitektur Gotik paling indah di Spanyol dan telah diakui sebagai Situs Warisan Dunia oleh UNESCO pada tahun 1984.</p>
        <p>Katedral ini dibangun pada abad ke-13 dan selesai dibangun pada abad ke-16, sehingga memiliki campuran gaya arsitektur Gotik dan Renaisans. Fasad katedral ini memiliki tiga portal yang dihiasi dengan patung-patung dan relief-relief, serta beberapa menara yang menjulang tinggi.</p>
        <p>Di dalam katedral ini, pengunjung dapat melihat berbagai karya seni dan arsitektur yang luar biasa. Salah satu karya seni yang paling terkenal di katedral ini adalah "Golden Staircase", sebuah tangga dengan ornamen emas yang menghubungkan dua lantai katedral. Selain itu, katedral ini juga memiliki kapel-kapel kecil yang dihiasi dengan lukisan dan patung-patung yang indah.</p>
        <p>Katedral Burgos juga merupakan tempat peristirahatan terakhir dari El Cid, seorang pahlawan Spanyol yang terkenal pada abad ke-11. Makamnya terletak di salah satu kapel di katedral.</p>
        <p>Katedral Burgos buka setiap hari dan tiket masuk tersedia dengan harga terjangkau. Di sekitar katedral, terdapat berbagai restoran dan toko suvenir yang menyajikan hidangan khas Spanyol dan produk kerajinan tangan. Katedral ini juga dapat diakses dengan mudah melalui berbagai transportasi umum, seperti bus dan taksi.</p>
        <p>Dengan keindahan arsitektur Gotik dan seni yang terdapat di dalamnya, Katedral Burgos adalah tempat yang wajib dikunjungi bagi siapa saja yang berkunjung ke kota Burgos dan mencari pengalaman budaya yang unik di Spanyol.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1384183396_Burgos-Cathedral-External-Facade.JPG',
                'address' => 'Plaza Santa María, s/n, 09003 Burgos',
                'created_at' => null,
                'updated_at' => '2023-03-03 21:48:44',
            ],
            [
                'id' => 76,
                'country_id' => 14,
                'name' => 'La Mezquita',
                'slug' => 'la-mezquita',
                'hotels' => '',
                'latitude' => '37.8796146',
                'longitude' => '-4.7802279',
                'attractions' => '<p>La Mezquita atau Masjid Cordoba adalah sebuah masjid bersejarah yang terletak di kota Cordoba, Andalusia, Spanyol. Bangunan ini awalnya dibangun sebagai masjid pada abad ke-8 oleh orang-orang Muslim yang berkuasa di Spanyol, kemudian diubah menjadi sebuah gereja pada abad ke-13 setelah Reconquista.</p>
        <p>La Mezquita adalah salah satu contoh arsitektur Islam terbaik di Spanyol dan merupakan salah satu situs warisan dunia UNESCO. Arsitektur masjid ini mencerminkan pengaruh Islam, Kristen, dan Yahudi, sehingga menciptakan kombinasi yang unik dari kebudayaan dan seni.</p>
        <p>Saat mengunjungi La Mezquita, pengunjung dapat melihat kolom-kolom marmer, kubah-kubah, dan ornamen-ornamen yang indah yang dipenuhi dengan simbol-simbol Islam dan Kristen. Di dalam La Mezquita terdapat sebuah kapel Kristen yang dibangun di tengah-tengah ruang masjid pada abad ke-16. Kapel ini memiliki arsitektur Mannerisme dan menyajikan patung-patung, lukisan-lukisan, dan altar Kristiani.</p>
        <p>Terdapat juga menara jam yang terletak di dalam kompleks La Mezquita dan dapat diakses oleh pengunjung. Dari atas menara, pengunjung dapat menikmati pemandangan indah dari kota Cordoba.</p>
        <p>La Mezquita buka setiap hari dan tiket masuk tersedia dengan harga terjangkau. Terdapat juga tur yang tersedia untuk pengunjung yang ingin mendapatkan penjelasan lebih lanjut tentang sejarah dan arsitektur masjid. Di sekitar La Mezquita, terdapat berbagai restoran dan toko suvenir yang menyajikan hidangan khas Spanyol dan produk kerajinan tangan.</p>
        <p>Dengan keindahan arsitektur dan sejarah yang terdapat di dalamnya, La Mezquita adalah tempat yang wajib dikunjungi bagi siapa saja yang berkunjung ke Cordoba dan mencari pengalaman budaya dan arsitektur yang unik di Spanyol.</p>
        <p>Untuk menuju ke Masjid Cordoba (La Mezquita), terdapat beberapa pilihan transportasi yang dapat dipilih oleh pengunjung:</p>
        <ol>
        <li>Kendaraan pribadi: Jika Anda memiliki kendaraan pribadi, Anda dapat menuju ke La Mezquita dengan mengikuti petunjuk jalan. Namun, perlu diingat bahwa parkir di sekitar area tersebut cukup sulit dan terbatas, terutama pada musim liburan atau akhir pekan.</li>
        <li>Transportasi umum: Terdapat beberapa pilihan transportasi umum seperti bus atau kereta api yang dapat membawa pengunjung ke La Mezquita. Jika Anda berada di kota Cordoba, Anda dapat menggunakan bus kota yang berhenti di dekat masjid. Jika Anda berada di kota lain, Anda dapat naik kereta api ke Stasiun Kereta Cordoba dan kemudian melanjutkan perjalanan dengan naik bus atau taksi.</li>
        <li>Taksi: Jika Anda ingin pergi ke La Mezquita dengan taksi, Anda dapat menemukan taksi di stasiun kereta atau di sekitar kota Cordoba. Namun, perlu diingat bahwa biaya taksi mungkin cukup mahal terutama jika Anda berangkat dari kota yang jauh.</li>
        <li>Berjalan kaki: Jika Anda berada di sekitar kota Cordoba dan ingin menikmati pemandangan di sepanjang jalan, Anda dapat berjalan kaki menuju ke La Mezquita. Walaupun cukup jauh dari pusat kota, perjalanan ini akan memberikan pengalaman berjalan kaki yang menyenangkan melalui jalan-jalan yang indah dan bersejarah.</li>
        </ol>
        <p>Pilihan transportasi tergantung pada preferensi dan kebutuhan pengunjung. Namun, jika Anda mencari pilihan yang terjangkau, transportasi umum seperti bus atau kereta api mungkin menjadi pilihan yang lebih baik daripada kendaraan pribadi atau taksi.</p>
        <p>Berikut adalah beberapa hotel favorit terdekat Masjid Cordoba (La Mezquita):</p>
        <ol>
        <li><a title="NH Collection Amistad Cordoba" href="https://www.booking.com/hotel/es/nhcollectionamistadcordoba.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">NH Collection Amistad Cordoba</a>: Hotel bintang 4 yang berjarak sekitar 500 meter dari Masjid Cordoba. Hotel ini terletak di pusat kota dan dilengkapi dengan fasilitas seperti kolam renang, spa, dan restoran.</li>
        <li><a title="Eurostars Palace" href="https://www.booking.com/hotel/es/eurostars-palace.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Eurostars Palace</a>: Hotel bintang 5 yang berjarak sekitar 700 meter dari Masjid Cordoba. Hotel ini terletak di pusat kota dan menawarkan pemandangan indah ke Masjid Cordoba dari kamar-kamarnya. Fasilitas hotel termasuk restoran, bar, dan pusat kebugaran.</li>
        <li><a title="Hotel Macia Alfaros" href="https://www.booking.com/hotel/es/maciaalfaros.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Macia Alfaros</a>: Hotel bintang 4 yang berjarak sekitar 1 kilometer dari Masjid Cordoba. Hotel ini terletak di pusat kota dan menawarkan kamar-kamar yang luas dan nyaman serta fasilitas seperti restoran, bar, dan kolam renang outdoor.</li>
        <li><a title="Hotel Hospes Palacio del Bailio" href="https://www.booking.com/hotel/es/palacio-del-bailio.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Hospes Palacio del Bailio</a>: Hotel bintang 5 yang berjarak sekitar 1,2 kilometer dari Masjid Cordoba. Hotel ini terletak di bangunan abad ke-16 yang indah dan menawarkan fasilitas seperti spa, restoran, dan kolam renang outdoor.</li>
        <li><a title="Hotel Eurostars Conquistador" href="https://www.booking.com/hotel/es/eurostars-conquistador.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Eurostars Conquistador</a>: Hotel bintang 4 yang berjarak sekitar 350 meter dari Masjid Cordoba. Hotel ini terletak di pusat kota dan menawarkan kamar-kamar yang modern dan nyaman serta fasilitas seperti restoran, bar, dan teras atap dengan pemandangan indah ke Masjid Cordoba.</li>
        </ol>
        <p>Berikut adalah beberapa pilihan hotel murah yang terletak paling dekat dengan Masjid Cordoba:</p>
        <ol>
        <li><a title="Hotel Boutique Caireles" href="https://www.booking.com/hotel/es/boutique-caireles.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Boutique Caireles</a>: Hotel yang terletak sekitar 150 meter dari Masjid Cordoba. Hotel ini menawarkan kamar-kamar yang nyaman dengan fasilitas seperti AC, TV, dan Wi-Fi gratis.</li>
        <li><a title="Hotel Mezquita" href="https://www.booking.com/hotel/es/mezquita-s-l.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Mezquita</a>: Hotel yang terletak sekitar 350 meter dari Masjid Cordoba. Hotel ini menawarkan kamar-kamar yang bersih dan sederhana dengan fasilitas seperti AC, TV, dan Wi-Fi gratis.</li>
        <li><a title="Hotel Maestre" href="https://www.booking.com/hotel/es/maestre.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Maestre</a>: Hotel yang terletak sekitar 400 meter dari Masjid Cordoba. Hotel ini menawarkan kamar-kamar yang sederhana dengan fasilitas seperti AC, TV, dan Wi-Fi gratis.</li>
        </ol>
        <p>Pilihan hotel tergantung pada preferensi dan anggaran pengunjung. Namun, semua hotel di atas menawarkan lokasi yang sangat dekat dengan Masjid Cordoba dengan harga yang terjangkau. Namun, perlu diingat bahwa harga dapat berubah tergantung pada musim dan permintaan.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412363090_La_Mezquita_de_Cordoba.jpg',
                'address' => 'Calle del Cardenal Herrero, 1, 14003 Córdoba',
                'created_at' => null,
                'updated_at' => '2023-03-03 21:53:23',
            ],
            [
                'id' => 77,
                'country_id' => 14,
                'name' => 'El Prado: Madrid',
                'slug' => 'el-prado-madrid',
                'hotels' => '',
                'latitude' => '40.4137818',
                'longitude' => '-3.6921271',
                'attractions' => '<p>El Prado adalah sebuah museum seni yang terletak di kota Madrid, Spanyol. Museum ini memiliki koleksi seni terbesar di dunia dari seniman-seniman Eropa, terutama seni lukis dan patung dari abad ke-12 hingga abad ke-19.</p>
        <p>Beberapa karya seni terkenal yang dipamerkan di El Prado antara lain "Las Meninas" karya Diego Vel&aacute;zquez, "The Garden of Earthly Delights" karya Hieronymus Bosch, "The Third of May 1808" karya Francisco Goya, dan "The Descent from the Cross" karya Roger van der Weyden. Selain itu, koleksi museum juga mencakup karya seni dari seniman terkenal seperti Raphael, El Greco, Rembrandt, Titian, Rubens, dan banyak lagi.</p>
        <p>Museum ini dibuka untuk umum dan memiliki jam operasional yang berbeda tergantung pada hari dan musimnya. Selain menikmati koleksi seni yang luar biasa, pengunjung juga dapat mempelajari sejarah seni Spanyol dan Eropa melalui pameran sementara dan program pendidikan yang diselenggarakan di museum ini.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1407335577_Museo_del_Prado.jpg',
                'address' => 'El Prado, Madrid',
                'created_at' => null,
                'updated_at' => '2023-03-03 21:54:54',
            ],
            [
                'id' => 78,
                'country_id' => 14,
                'name' => 'La Sagrada Familia',
                'slug' => 'la-sagrada-familia',
                'hotels' => '',
                'latitude' => '41.4035909',
                'longitude' => '2.1743605',
                'attractions' => '<p>
        Bangunan ini langsung tampak
        menonjol di langit Barcelona, modern serta menunjukkan kehebatan seni
        arsitektur Spanyol masa kini. Merupakan katedral terbesar kedua di
        Barcelona. Di desain dalam bentuk salib dengan 5 poros dan 3 gerbang,
        terkenal karena menara-menaranya yang ramping setinggi hampir 100 m
        dari dasarnya dengan puncak yang mengerucut dihiasi keramik. Dengan
        delapan menara yng menjulang tinggi, anak tangga spiral, dan beranda
        yang menawan, sungguh suatu masterpiece karya seni arsitektur yang
        tinggi dengan gaya campuran semi modern , semi Gothik. Bangunan ini
        adalah karya seniman besar Antoni Gaudi. &nbsp; &nbsp;&nbsp;</p><p>
        Bangunan ini langsung tampak
        menonjol di langit Barcelona, modern serta menunjukkan kehebatan seni
        arsitektur Spanyol masa kini. Merupakan katedral terbesar kedua di
        Barcelona. Di desain dalam bentuk salib dengan 5 poros dan 3 gerbang,
        terkenal karena menara-menaranya yang ramping setinggi hampir 100 m
        dari dasarnya dengan puncak yang mengerucut dihiasi keramik. Dengan
        delapan menara yng menjulang tinggi, anak tangga spiral, dan beranda
        yang menawan, sungguh suatu masterpiece karya seni arsitektur yang
        tinggi dengan gaya campuran semi modern , semi Gothik. Bangunan ini
        adalah karya seniman besar Antoni Gaudi. &nbsp; &nbsp;&nbsp;
        </p><p>
         Peletakan batu pertama pada tahun
        1882 dan diharapkan akan selesai pada tahun 2026 yang akan datang
        sebagai kenangan 100th meninggalnya Gaudi tahun 1926, menjadi daya
        tarik wisata yang kuat untuk Barcelona, hampir 3 juta wisatawan
        setahun mengunjunginya.   Ke 12 gapura sepanjang ke tiga pintu masuk
        menggambarkan ke duabelas Rasul Kristus, sedang ke 5 sisanya
        menggambarkan Bunda Maria dan ke 4 Penginjil. Dengan ketidak
        senangannya terhadap garis lurus (menurut Gaudi dalam alam semesta
        ini tak ada yang lurus-lurus saja) untuk menghindari hal itu Gaudi
        membuat menara-menara ganjil yang ‘membengkak’ pada puncaknya,
        meniru bentuk  gunung keramat Montserrat yang terletak dipinggiran
        kota Barcelona, dibungkus dengan pahatan acakacakan yang seakan
        tumbuh dari batu itu.</p><p>
         Baru 8 dari 18 menara yang
        selesai, juga bagian interiurnya sehingga bangunan ini sudah dibuka
        untuk publik sejak tahun 2012 yang lalu. Gereja ini tampak berbeda
        bila dilihat dari berbagai sisinya, dari pintu bagian belakangnya
        tampak kubah buah-buahan yang menggambarkan keempat musim . Sisanya
        sedang dalam pembangunan sehingga pasti akan ada tambahan-tambahan
        yang menarik dari bangunan ini di masa mendatang. Tetap saja tempat
        ini adalah tempat yang patut disinggahi sepert halnya kontroversi
        tentang Sagrada Familia yang masih berlanjut.</p>  
        <p>Untuk mencapai La Sagrada Familia, terdapat beberapa pilihan transportasi yang dapat digunakan, antara lain:</p>
        <ol>
        <li>Kereta bawah tanah: Anda dapat naik kereta bawah tanah (metro) di Barcelona dan turun di stasiun Sagrada Familia (L5 atau L2). Stasiun ini berada tepat di depan gereja, sehingga sangat mudah diakses.</li>
        <li>Bus: Terdapat beberapa jalur bus yang melewati La Sagrada Familia, seperti bus nomor 19, 33, 34, 43, 44, 50, 51, B20, dan B24. Jika Anda menggunakan bus, Anda dapat turun di halte Sagrada Familia.</li>
        <li>Taksi: Jika Anda ingin lebih fleksibel dan nyaman, Anda dapat menggunakan jasa taksi untuk mencapai La Sagrada Familia. Pastikan untuk menanyakan tarif sebelum naik taksi untuk menghindari biaya yang tidak diinginkan.</li>
        <li>Sepeda: Jika Anda ingin menikmati pemandangan di sekitar La Sagrada Familia, Anda dapat menyewa sepeda di Barcelona dan bersepeda menuju gereja.</li>
        <li>Berjalan kaki: Jika Anda berada di daerah sekitar La Sagrada Familia, Anda juga dapat mencapainya dengan berjalan kaki. Gereja ini terletak di pusat kota Barcelona dan mudah dijangkau dari sebagian besar tempat wisata di daerah tersebut.</li>
        </ol>
        <p>Ada beberapa hotel yang terletak dekat dengan La Sagrada Familia di Barcelona, Spanyol. Beberapa pilihan hotel terdekat yang dapat Anda pertimbangkan antara lain:</p>
        <ol>
        <li><a title="Hotel Sagrada Familia" href="https://www.booking.com/hotel/es/sagradafamilia.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Sagrada Familia</a>: Hotel ini berlokasi hanya beberapa menit berjalan kaki dari La Sagrada Familia dan menawarkan kamar yang nyaman dan modern.</li>
        <li>Ayre Hotel Rosellon: Hotel ini terletak sekitar 10 menit berjalan kaki dari La Sagrada Familia dan menawarkan pemandangan yang indah dari atap terasnya.</li>
        <li><a title="Hotel Barcelona 1882" href="https://www.booking.com/hotel/es/barcelona-1882-barcelona1.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Barcelona 1882</a>: Hotel ini berlokasi hanya beberapa menit berjalan kaki dari La Sagrada Familia dan menawarkan kamar yang elegan dan nyaman.</li>
        <li><a title="Eric V&ouml;kel Boutique Apartments" href="https://www.booking.com/hotel/es/eric-vokel-sagrada-familia.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Eric V&ouml;kel Boutique Apartments</a> - Sagrada Familia Suites: Apartemen ini terletak di dekat La Sagrada Familia dan menawarkan apartemen yang luas dan modern dengan dapur lengkap.</li>
        <li><a title="Hotel Catalonia Sagrada Familia" href="https://www.booking.com/hotel/es/cataloniaaragon.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Catalonia Sagrada Familia</a>: Hotel ini berlokasi hanya beberapa menit berjalan kaki dari La Sagrada Familia dan menawarkan kamar yang nyaman dan fasilitas yang lengkap, termasuk kolam renang atap dengan pemandangan kota Barcelona.</li>
        </ol>
        <p>Pastikan untuk memeriksa ulasan dan fasilitas dari masing-masing hotel sebelum membuat pilihan yang tepat sesuai dengan kebutuhan dan anggaran Anda.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1407336071_1024px-Sagrada_Familia_01.jpg',
                'address' => 'La Sagrada Familia',
                'created_at' => null,
                'updated_at' => '2023-03-03 21:59:15',
            ],
            [
                'id' => 79,
                'country_id' => 14,
                'name' => 'Red Carpet di San Sebastian',
                'slug' => 'red-carpet-di-san-sebastian',
                'hotels' => '',
                'latitude' => '43.318334',
                'longitude' => '-1.9812313',
                'attractions' => '<p>"Red Carpet" adalah nama yang diberikan untuk sebuah jalan setapak yang indah di kota San Sebastian, Spanyol. Jalan setapak ini berada di sepanjang pantai dan menawarkan pemandangan spektakuler dari Teluk La Concha dan Pegunungan Pyrenees yang menjulang di kejauhan. Berikut adalah beberapa aktivitas wisata yang dapat dilakukan di sepanjang Red Carpet di San Sebastian:</p>
        <ol>
        <li>Berjalan-jalan: Jalan setapak yang lebar dan mulus di sepanjang Red Carpet sangat cocok untuk berjalan-jalan. Anda dapat menikmati pemandangan laut dan udara segar sambil berjalan-jalan di sepanjang pantai.</li>
        <li>Bersepeda: Anda dapat menyewa sepeda dan bersepeda di sepanjang Red Carpet untuk menikmati pemandangan yang lebih cepat dan leluasa.</li>
        <li>Menikmati makanan dan minuman: Terdapat banyak kafe, restoran, dan bar di sepanjang Red Carpet yang menawarkan makanan dan minuman lokal dan internasional. Anda dapat mencoba hidangan basque tradisional seperti pintxos dan txakoli, sambil menikmati pemandangan laut yang indah.</li>
        <li>Berenang dan bersantai di pantai: Red Carpet berada di sepanjang pantai La Concha, salah satu pantai terbaik di Spanyol. Anda dapat bersantai di pantai, berenang di air laut yang segar, atau menikmati aktivitas air seperti kayak atau selancar.</li>
        <li>Menikmati seni dan budaya: Red Carpet terletak di sekitar pusat kota San Sebastian yang kaya akan seni dan budaya. Anda dapat mengunjungi museum dan galeri seni, atau menonton pertunjukan musik dan tarian Basque yang khas.</li>
        </ol>
        <p>Pastikan untuk membawa pakaian yang nyaman dan sepatu yang cocok untuk berjalan-jalan, serta kamera untuk mengabadikan momen indah di sepanjang Red Carpet di San Sebastian.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1407337173_100-film-festivals.jpg',
                'address' => 'San Sebastian',
                'created_at' => null,
                'updated_at' => '2023-03-03 21:59:48',
            ],
            [
                'id' => 80,
                'country_id' => 14,
                'name' => 'Karya-karya Frank Gehry ',
                'slug' => 'karya-karya-frank-gehry',
                'hotels' => '',
                'latitude' => '43.2681257',
                'longitude' => '-2.9344707',
                'attractions' => '<div>Frank Gehry adalah seorang arsitek keturunan Amerika-Kanada yang karya-karyanya diakui &nbsp;dalam dunia industri ini. Dua buah maha karyanya ialah Museum Guggenheim di Bilbao. Bangunan dengan luas 32.000 meter persegi yang sungguh mempesona itu dapat anda kagumi sebegitu anda melihatnya. Selain itu dapat anda nikmati pula arca ikan baja ditepian pantai Barcelona, bekas disenggarakannya Olympiade Barcelona beberapa waktu yang lalu.&nbsp;</div>
        <p>Berikut adalah beberapa karya Frank Gehry di Spanyol yang dapat Anda nikmati:</p>
        <ol>
        <li>Guggenheim Museum Bilbao: Museum ini merupakan karya terkenal Frank Gehry di Spanyol. Bangunan ini memiliki bentuk yang unik dan memukau dengan atap berbentuk sisik ikan yang terbuat dari lembaran logam dan memiliki warna yang berbeda-beda tergantung pada cahaya.</li>
        <li>Hotel Marqu&eacute;s de Riscal: Hotel ini terletak di desa Elciego di La Rioja dan dirancang oleh Frank Gehry. Bangunan ini memiliki atap berbentuk bergelombang dengan warna-warna yang mencolok dan menarik perhatian.</li>
        <li>Puente de Vizcaya: Jembatan ini terletak di dekat Bilbao dan dirancang oleh Frank Gehry. Jembatan gantung ini memiliki desain yang unik dan menakjubkan yang menampilkan rangka baja merah terang dan kabel yang menjulang tinggi di atas sungai.</li>
        <li>Torre Iberdrola: Menara ini terletak di Bilbao dan merupakan gedung perkantoran tertinggi di kota ini. Gedung ini dirancang oleh Frank Gehry dan memiliki desain yang modern dan futuristik.</li>
        <li>The Fish, Hotel Arts: The Fish adalah bangunan apartemen mewah di Barcelona yang dirancang oleh Frank Gehry. Bangunan ini memiliki atap yang berbentuk seperti sirip ikan dan memiliki pemandangan yang indah dari Laut Mediterania.</li>
        </ol>
        <p>Pastikan untuk memasukkan beberapa karya Frank Gehry ini ke dalam daftar kunjungan Anda ketika berkunjung ke Spanyol. Anda dapat menikmati keindahan dan keunikan dari desain arsitekturnya yang terkenal di seluruh dunia.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1407337407_frank-gehry-walt-disney-concert-all-LA1.jpg',
                'address' => 'Avenida Abandoibarra, 2 - 48009 Bilbao',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:01:16',
            ],
            [
                'id' => 81,
                'country_id' => 14,
                'name' => 'Wihara Budha O Sel Ling',
                'slug' => 'wihara-budha-o-sel-ling',
                'hotels' => '',
                'latitude' => '37.0947759',
                'longitude' => '-3.3971047',
                'attractions' => '<p>Wihara Budha O Sel Ling adalah sebuah tempat suci Buddhis yang terletak di selatan Spanyol, sekitar 100 km dari kota Malaga. Wihara ini didirikan pada tahun 1980 oleh Ch&ouml;gyal Namkhai Norbu, seorang guru Buddhis terkemuka dari Tibet. Berikut adalah beberapa informasi tentang Wihara Budha O Sel Ling:</p>
        <ol>
        <li>Sejarah: Wihara Budha O Sel Ling didirikan oleh Ch&ouml;gyal Namkhai Norbu pada tahun 1980 sebagai tempat suci bagi para pengikut Buddhisme di Spanyol. Wihara ini terletak di daerah pegunungan yang indah di Andalusia dan menawarkan lingkungan yang tenang dan damai bagi para pengunjungnya.</li>
        <li>Fasilitas: Wihara Budha O Sel Ling terdiri dari beberapa bangunan, termasuk aula meditasi, ruang pameran seni, kamar tidur untuk para biksu, dapur, dan kantin. Wihara ini juga memiliki kebun dan taman yang indah, serta beberapa tempat untuk meditasi di alam terbuka.</li>
        <li>Kegiatan: Wihara Budha O Sel Ling menyelenggarakan berbagai kegiatan untuk para pengunjungnya, termasuk meditasi, kelas dharma, dan upacara keagamaan. Wihara ini juga menawarkan program retret dan pelatihan meditasi yang dipimpin oleh para biksu dan guru Buddhis terkemuka.</li>
        <li>Kebijakan: Wihara Budha O Sel Ling memperbolehkan pengunjung dari semua agama dan keyakinan untuk berkunjung dan mengikuti kegiatan-kegiatan di sana. Namun, para pengunjung diminta untuk menghormati aturan dan kebijakan wihara, serta menghargai kebersihan dan ketertiban lingkungan wihara.</li>
        </ol>
        <p>Jika Anda tertarik untuk mengunjungi Wihara Budha O Sel Ling, pastikan untuk memeriksa jadwal kegiatan dan acara di situs web resmi wihara terlebih dahulu. Anda dapat mengalami pengalaman spiritual dan damai di tempat suci ini yang terletak di lingkungan yang indah dan tenang di pegunungan Andalusia.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1407337894_SyakamuniStatue.jpg',
                'address' => 'Sierra nevada',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:01:44',
            ],
            [
                'id' => 82,
                'country_id' => 14,
                'name' => 'Barcelona',
                'slug' => 'barcelona',
                'hotels' => '',
                'latitude' => '41.3850639',
                'longitude' => '2.1734035',
                'attractions' => '<p>Barcelona adalah sebuah kota besar, kota pelabuhan, ibukota provinsi Barcelona dan Catalonia, terletak di bagian timurlaut dari Spanyol, kirakira 90 mil dari perbatasan dengan Perancis. Wisatawan dari seluruh duniadatang ke tempat ini karena punya daya tarik tersendiri, antara lain orangnya yang individualistis, tentu saja seni bangunan yang artistik, makanannya yang berbumbu, pemandangannya yang mempesona dan kehidupan malam yang menjamur. Kota ini akan selalu menarik perhatian dengan pesona yang tak habishabisnya, membuat kita terpikat tak mudah untuk meninggalkannya. Kota yang dipenuhi dengan jalanjalan yang tersembunyi, kebunkebun rahasia, butik-butik yang ajaib, barbar yang tampak berkarat, halaman(patio) yang luas dan taman-taman tang indah. Ketika Hans Christian Anderson sang pengarang itu mengunjungi Barcelona pada tahun 1862, ia menjuluki kota itu sebagai Paris dari Spanyol. Kota itu dipenuhi dengan museum, gedung arsip, perpustakaan dan bangunan berbagai karya seni dimana seni yang antik dan modern ( Art Nouveau) bertemu.</p>
        <p>Barcelona yang juga mempunyai bangunan-bangunan yang menjadi ciri dari kota modern masa kini , namun selalu menarik para arsitek yang terhormat dengan karya-karya yang orisinil, seperti bangunan Diagonal yang modern bersaing dengan karya pahat Catalan dan La Sagrada Familia dari Anton Gaudi yang menjadi simbol kota ini, termasuk bangunan apartemen bertingkat Cassa Batllo, Casa Milla (La Pedreda) dan Taman Guell.</p>
        <p><strong>Oympiade Barcelona 1992</strong></p>
        <p>Pengaruh penyelenggaraan Olympiade itu ternyata membawa berkah yang sampai sekarang dapat dirasakan. Barcelona hidup kembali dan menjadi pusat wisata dunia utama. Pembersihan daerah pantai dan pelabuhannya, penbangunan perkampungan atlet dan tentu saja stadion-stadion untuk pertandingan-pertandingan yang diselenggarakan saat itu seperti Montjuic. Sekarang ini gedung-gedung seperti Palau sintJordi dan Camp Nou, masih digunakan sebagai tempat pertunjukan konser, festival-festival dan tentu saja kandang klub sepakbola Barcelona yang terkenal itu.</p>
        <p>Bicara tentang pantai, pilihan tak habus-habisnya. Garis pantai yang indah panjang itu menyediakan berbagai pilihan yang tak habishabisnya dari yang alami sampai yang buatan. Costa Brava terkenal dengan pemandangan alami yang menenangkan dan menyejukkankalbu, pantainya yang panjang dengan air yang bersih jernih, pasirnya yang putih bersih pula dan letaknya yang tak jauh dari kota membuatnya mudah dijangkau. Ada beberapa tempat yang meneyediakan sarana untuk mandi matahari hingga kulit kecoklatan, tempat untuk berenang, surfing dengan layanglayang, atau sekedar bersangris disatu dari sekian banyak chiringuitos (pondok pinggir laut).</p>
        <p>Bicara tentang Bar dan Klub, Barcelona tak kekurangan. Tinggal pilih, mau HipHop, Funk, Elektronik, rumahan, pop, 80&rsquo;s Rock atau Top40. Pokoknya tidak susah untuk mendapatkan tempat-tempat seperti ini.</p>
        <p>Kalu sudah di Barcelona jangan sampai lipa mencicipi makanan yng disebut PAELLA, makanan tradisionil Spanyol. Kombinasi yang uenak antara seafood, daging ayam, sayur mayur yang dicampur dengan nasi safron yang berwarna merah itu (semacam penyedap yang khabarnya mengandung bahan semacam ganja).</p>
        <p>Barcelona adalah salah satu kota yang unik yang mempunyai hampir mempunyai segalanya. Apakah anda gemar bersantai dekatdekat dengan air, atau mendaki gunung, berkunjung ke galerigaleri seni, berbelanja atau sekedar cuci mata keluar masuk butik, menikmati arsitektur bangunanbangunan cantik, juga wisata kuliner mencoba berbagai masakan Spanyol yang lezatlezat dari pagi sampai malam, bahkan sampai esok harinya lagi, kota ini betulbetul kota yang dapat memenuhi segala keingintahuan mereka yang mengunjunginya.</p>
        <h3>Cannabis Social Club</h3>
        <p>Perlu diketahui bahwa meskipun ganja atau marijuana sudah dilegalkan di Spanyol pada penggunaan pribadi dan dalam lingkungan privasi, namun penggunaannya masih diatur oleh undang-undang dan peraturan yang ketat. Di Barcelona, terdapat beberapa tempat yang dikenal sebagai cannabis social club, yaitu klub atau asosiasi yang dibuat oleh sekelompok orang untuk berkumpul dan menggunakan ganja secara legal dalam lingkungan privasi. Namun, untuk bergabung dengan klub tersebut, Anda harus menjadi anggota terlebih dahulu dengan memenuhi persyaratan tertentu dan membayar biaya keanggotaan.</p>
        <p>Beberapa tempat di Barcelona yang dikenal sebagai cannabis social club antara lain:</p>
        <ol>
        <li>Choko Club: Klub ini terletak di distrik Gracia dan menawarkan berbagai jenis ganja dan produk ganja lainnya. Klub ini menyediakan lingkungan yang nyaman dan privasi bagi para anggotanya.</li>
        <li>La Mesa: Klub ini terletak di El Raval dan memiliki beberapa jenis ganja dan produk ganja lainnya. Klub ini menawarkan lingkungan yang santai dan nyaman bagi para anggotanya.</li>
        <li>The Plug BCN: Klub ini terletak di Eixample dan menawarkan berbagai jenis ganja dan produk ganja lainnya. Klub ini juga menawarkan ruang bersantai yang nyaman bagi para anggotanya.</li>
        </ol>
        <p>Namun, perlu diingat bahwa penggunaan ganja di luar lingkungan privasi dan penggunaan untuk tujuan yang tidak sah masih melanggar hukum di Spanyol dan dapat mengakibatkan konsekuensi hukum yang serius. Oleh karena itu, penting untuk menghormati hukum dan peraturan yang berlaku saat berada di Barcelona atau di negara manapun.</p>
        <h3>Akomodasi</h3>
        <p>Barcelona adalah kota wisata populer yang memiliki banyak pilihan akomodasi. Berikut ini beberapa hotel terkenal di Barcelona:</p>
        <ol>
        <li><a title="Hotel Arts Barcelona" href="https://www.booking.com/hotel/es/arts-barcelona.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Arts Barcelona</a>: Terletak di tepi pantai, hotel mewah ini menawarkan pemandangan laut yang indah dan fasilitas mewah seperti spa, kolam renang outdoor, dan restoran dengan bintang Michelin.</li>
        <li><a title="W Barcelona" href="https://www.booking.com/hotel/es/w-barcelona.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">W Barcelona</a>: Dikenal juga sebagai "Hotel Vela" karena bentuknya yang menyerupai layar kapal, hotel mewah ini menawarkan pemandangan laut yang indah, kolam renang rooftop, restoran dengan bintang Michelin, dan fasilitas mewah lainnya.</li>
        <li><a title="Mandarin Oriental Barcelona" href="https://www.booking.com/hotel/es/mandarin-oriental-barcelona.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Mandarin Oriental Barcelona</a>: Hotel mewah ini terletak di distrik Eixample yang elegan dan menawarkan kamar-kamar yang luas dan elegan, spa mewah, kolam renang indoor, dan restoran dengan bintang Michelin.</li>
        <li><a title="Hotel Casa Fuster" href="https://www.booking.com/hotel/es/hotelescenterfuster.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Casa Fuster</a>: Hotel bergaya modernis yang terletak di Passeig de Gracia, pusat kota Barcelona. Hotel ini menawarkan kamar-kamar yang elegan dan dilengkapi dengan fasilitas modern, rooftop bar dengan pemandangan kota yang indah, dan restoran dengan bintang Michelin.</li>
        <li><a title="Hotel 1898" href="https://www.booking.com/hotel/es/hotel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel 1898</a>: Terletak di pusat kota Barcelona, hotel ini berada di bekas gedung koran terkenal. Hotel ini menawarkan kamar-kamar yang elegan, rooftop pool dengan pemandangan kota yang indah, spa, dan restoran yang populer.</li>
        <li><a title="Grand Hotel Central" href="https://www.booking.com/hotel/es/grandhotelcentral.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Grand Hotel Central</a>: Hotel mewah yang terletak di pusat kota Barcelona dan menawarkan pemandangan kota yang indah. Hotel ini menawarkan kolam renang rooftop, spa, dan restoran yang populer.</li>
        </ol>
        <p>Semua hotel ini menawarkan pelayanan dan fasilitas yang berkualitas tinggi dan akan membuat pengalaman Anda di Barcelona semakin tak terlupakan. Namun, pastikan untuk memesan kamar dengan cukup waktu karena hotel-hotel ini sering terisi penuh pada musim liburan atau acara-acara besar di kota Barcelona.</p>
        <p>Berikut ini beberapa hotel murah di Barcelona yang dapat menjadi pilihan:</p>
        <ol>
        <li>Hotel Curious: Terletak di pusat kota Barcelona, hotel ini menawarkan kamar-kamar yang bersih dan nyaman dengan fasilitas dasar seperti TV dan Wi-Fi. Harganya cukup terjangkau dan staf hotel yang ramah dan membantu.</li>
        <li><a title="Hotel Barbara" href="https://www.booking.com/hotel/es/barbara.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Barbara</a>: Terletak di distrik L\'Eixample, hotel ini menawarkan kamar-kamar yang bersih dan nyaman dengan fasilitas dasar seperti TV dan Wi-Fi. Harganya cukup terjangkau dan terdapat banyak restoran dan toko di sekitarnya.</li>
        <li><a title="Hotel Ginebra" href="https://www.booking.com/hotel/es/ginebra.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Ginebra</a>: Terletak di pusat kota Barcelona, hotel ini menawarkan kamar-kamar yang bersih dan nyaman dengan fasilitas dasar seperti TV dan Wi-Fi. Harganya cukup terjangkau dan terdapat banyak restoran dan toko di sekitarnya.</li>
        <li><a title="Hostal Levante Barcelona" href="https://www.booking.com/hotel/es/hostal-levante-s-c-p.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hostal Levante Barcelona</a>: Terletak di distrik Gothic Quarter, hotel ini menawarkan kamar-kamar yang bersih dan nyaman dengan fasilitas dasar seperti TV dan Wi-Fi. Harganya cukup terjangkau dan terdapat banyak atraksi wisata di sekitarnya.</li>
        <li><a title="Hotel Ingles" href="https://www.booking.com/hotel/es/hotelinglesbarcelona.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Ingles</a>: Terletak di pusat kota Barcelona, hotel ini menawarkan kamar-kamar yang bersih dan nyaman dengan fasilitas dasar seperti TV dan Wi-Fi. Harganya cukup terjangkau dan terdapat banyak restoran dan toko di sekitarnya.</li>
        </ol>
        <p>Meskipun harganya terjangkau, namun semua hotel ini menawarkan pelayanan dan fasilitas yang baik dan akan memberikan pengalaman menginap yang nyaman dan menyenangkan selama berada di Barcelona.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1407337988_4015942615_38823ca4c1.jpg',
                'address' => 'Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:10:09',
            ],
            [
                'id' => 83,
                'country_id' => 14,
                'name' => 'Park Guell',
                'slug' => 'park-guell',
                'hotels' => '',
                'latitude' => '41.3850639',
                'longitude' => '2.1734035',
                'attractions' => '<p>Park Guell adalah taman publik yang terletak di kota Barcelona, Spanyol. Taman ini terkenal karena pemandangan yang indah dan bangunan-bangunan berarsitektur unik yang dirancang oleh arsitek terkenal asal Spanyol, Antoni Gaudi. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di Park Guell:</p>
        <ol>
        <li>Monumen Salamander: Terletak di jantung taman, monumen salamander yang terbuat dari mozaik keramik ini menjadi ikonik dan menjadi objek foto yang populer.</li>
        <li>Taman pemandangan: Taman ini menawarkan pemandangan indah yang menakjubkan dengan kota Barcelona di sebelahnya. Jangan lewatkan spot foto di plaza del norte.</li>
        <li>Area arsitektur: Di area ini, terdapat beberapa bangunan berarsitektur yang menakjubkan seperti tempat duduk melengkung yang terbuat dari mozaik keramik, paviliun yang terkenal dan terowongan.</li>
        <li>Casa-Museu Gaudi: Museum kecil ini terletak di dalam bangunan tempat tinggal Gaudi selama beberapa tahun. Di dalam museum, pengunjung dapat melihat barang-barang antik dan lukisan-lukisan yang dihasilkan oleh Gaudi.</li>
        <li>Paseo de las Palmeras: Jalan setapak yang memungkinkan pengunjung untuk berjalan-jalan dan menikmati suasana taman dengan pohon palem yang rindang.</li>
        </ol>
        <p>Park Guell adalah tempat yang sangat menarik untuk dikunjungi ketika berada di Barcelona, terutama bagi para pecinta seni dan arsitektur. Selain itu, taman ini juga menawarkan pemandangan yang indah dan tenang dari kota yang sibuk.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1407338220_640px-Reptil_Parc_Guell_Barcelona.jpg',
                'address' => 'Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:10:59',
            ],
            [
                'id' => 84,
                'country_id' => 14,
                'name' => 'Casa Battlo',
                'slug' => 'casa-battlo',
                'hotels' => '',
                'latitude' => '41.3916967',
                'longitude' => '2.1649608',
                'attractions' => '<p>Casa Batll&oacute; adalah salah satu bangunan paling terkenal dan indah yang terletak di kota Barcelona, Spanyol. Bangunan ini adalah salah satu karya Antoni Gaudi yang menunjukkan keindahan arsitektur Modernisme Catalan. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di Casa Batll&oacute;:</p>
        <ol>
        <li>Menikmati arsitektur: Casa Batll&oacute; terkenal karena keindahan arsitekturnya. Pengunjung dapat mengagumi bentuk lengkungan yang unik, atap seperti tulang ikan, dan ornamen-ornamen berwarna-warni yang indah.</li>
        <li>Menjelajahi interior: Pengunjung dapat menjelajahi interior Casa Batll&oacute;, termasuk kamar-kamar dan ruangan-ruangan yang indah dengan dekorasi yang dipengaruhi oleh bentuk laut dan keindahan alam.</li>
        <li>Berfoto-foto: Casa Batll&oacute; adalah tempat yang sangat fotogenik, dengan banyak sudut-sudut menarik yang cocok untuk dijadikan latar belakang foto. Jangan lewatkan untuk berfoto dengan pemandangan kota Barcelona yang menakjubkan.</li>
        <li>Mengunjungi museum: Di lantai ketiga Casa Batll&oacute;, terdapat museum yang memamerkan karya-karya Gaudi dan arsitek lainnya dari era Modernisme Catalan.</li>
        <li>Menikmati konser musik: Casa Batll&oacute; juga sering menjadi tempat konser musik, dengan serangkaian pertunjukan musik klasik, jazz, dan flamenco yang menarik.</li>
        </ol>
        <p>Casa Batll&oacute; adalah tempat yang sangat menarik untuk dikunjungi ketika berada di Barcelona. Keindahan arsitekturnya dan berbagai kegiatan menarik yang ditawarkan akan memberikan pengalaman yang tak terlupakan bagi para pengunjung.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412362754_Casa_Batllo.jpg',
                'address' => 'Passeig de Gràcia, 43, 08007 Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:11:21',
            ],
            [
                'id' => 85,
                'country_id' => 14,
                'name' => 'Casa Milla',
                'slug' => 'casa-milla',
                'hotels' => '',
                'latitude' => '41.3954329',
                'longitude' => '2.1619855',
                'attractions' => '<p>Casa Mila, juga dikenal sebagai La Pedrera, adalah bangunan yang terkenal di kota Barcelona, Spanyol. Bangunan ini adalah karya arsitek terkenal Antoni Gaudi dan merupakan contoh arsitektur Modernisme Catalan yang menakjubkan. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di Casa Mila:</p>
        <ol>
        <li>Menjelajahi interior: Pengunjung dapat menjelajahi interior Casa Mila, termasuk atap yang menakjubkan dengan bentuk-bentuk organik dan sudut-sudut menarik.</li>
        <li>Museum: Di lantai keempat Casa Mila, terdapat museum yang memamerkan karya-karya Gaudi dan penjelasan tentang arsitektur dan sejarah bangunan ini.</li>
        <li>Berfoto-foto: Casa Mila adalah tempat yang sangat fotogenik, dengan banyak sudut-sudut menarik yang cocok untuk dijadikan latar belakang foto.</li>
        <li>Menikmati pemandangan kota: Dari atap Casa Mila, pengunjung dapat menikmati pemandangan kota Barcelona yang menakjubkan, termasuk Gaudi\'s Sagrada Familia yang ikonik.</li>
        <li>Menikmati pertunjukan: Casa Mila sering menjadi tempat pertunjukan seni dan musik, termasuk konser dan pementasan teater.</li>
        </ol>
        <p>Casa Mila adalah tempat yang sangat menarik untuk dikunjungi ketika berada di Barcelona, terutama bagi para penggemar arsitektur dan seni. Keindahan arsitekturnya dan berbagai kegiatan menarik yang ditawarkan akan memberikan pengalaman yang tak terlupakan bagi para pengunjung.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412363282_Casa_Mila.jpg',
                'address' => 'Provença, 261-265, 08008 Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:11:42',
            ],
            [
                'id' => 86,
                'country_id' => 14,
                'name' => 'The Magic Fountain of Montjuic',
                'slug' => 'the-magic-fountain-of-montjuic',
                'hotels' => '',
                'latitude' => '41.3708226',
                'longitude' => '2.1519155',
                'attractions' => '<p>The Magic Fountain of Montjuic, atau Font M&agrave;gica de Montju&iuml;c dalam bahasa Catalan, adalah sebuah air mancur yang terkenal di Barcelona, Spanyol. Air mancur ini terletak di kaki bukit Montjuic dan merupakan atraksi utama di daerah tersebut. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di The Magic Fountain of Montjuic:</p>
        <ol>
        <li>Menikmati pertunjukan air mancur: The Magic Fountain of Montjuic menampilkan pertunjukan air mancur yang indah dan menakjubkan, dengan air yang ditembakkan ke udara dengan berbagai warna, pola, dan musik.</li>
        <li>Menikmati pemandangan kota: The Magic Fountain of Montjuic terletak di kaki bukit Montjuic, yang menawarkan pemandangan kota Barcelona yang menakjubkan.</li>
        <li>Berfoto-foto: The Magic Fountain of Montjuic adalah tempat yang sangat fotogenik, dengan banyak sudut-sudut menarik yang cocok untuk dijadikan latar belakang foto.</li>
        <li>Menikmati konser musik: The Magic Fountain of Montjuic sering menjadi tempat konser musik, dengan serangkaian pertunjukan musik klasik, jazz, dan flamenco yang menarik.</li>
        <li>Bersantap malam: The Magic Fountain of Montjuic adalah tempat yang sangat ramai pada malam hari, dan banyak restoran dan kafe yang menyajikan hidangan dan minuman yang enak di sekitar area ini.</li>
        </ol>
        <p>The Magic Fountain of Montjuic adalah tempat yang sangat menarik untuk dikunjungi ketika berada di Barcelona, terutama pada malam hari ketika air mancur dan pencahayaan di sekitar area menjadi sangat menakjubkan. Keindahan pertunjukan air mancur, pemandangan kota yang menakjubkan, dan berbagai kegiatan menarik lainnya akan memberikan pengalaman yang tak terlupakan bagi para pengunjung.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412363411_magic-fountain.jpg',
                'address' => 'Plaça Carles Buigas, Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:12:07',
            ],
            [
                'id' => 87,
                'country_id' => 14,
                'name' => 'L’Aquarium de Barcelona',
                'slug' => 'laquarium-de-barcelona',
                'hotels' => '',
                'latitude' => '41.3570442',
                'longitude' => '2.1683571',
                'attractions' => '<p>L\'Aquarium de Barcelona adalah sebuah akuarium besar yang terletak di pelabuhan Barcelona, Spanyol. Akuarium ini memiliki berbagai koleksi makhluk hidup laut dan merupakan tempat yang sangat menarik untuk dikunjungi bagi penggemar kehidupan laut dan keluarga. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di L\'Aquarium de Barcelona:</p>
        <ol>
        <li>Melihat berbagai jenis ikan dan makhluk laut: L\'Aquarium de Barcelona memiliki berbagai koleksi ikan dan makhluk laut, termasuk hiu, pari, ikan paus, dan banyak lagi.</li>
        <li>Berjalan di bawah air: Pengunjung dapat berjalan di bawah air melalui terowongan kaca yang menampilkan berbagai jenis ikan dan makhluk laut yang berenang di atas mereka.</li>
        <li>Menyentuh binatang laut: Di tangan, pengunjung dapat menyentuh ikan, udang, dan bintang laut.</li>
        <li>Menikmati film 3D: Akuarium ini memiliki bioskop 3D di mana pengunjung dapat menikmati film tentang kehidupan laut dan hewan-hewan di dalamnya.</li>
        <li>Menjelajahi ekosistem: Pengunjung dapat menjelajahi berbagai ekosistem laut, seperti terumbu karang, samudra Atlantik, dan Laut Tengah.</li>
        <li>Berpartisipasi dalam kegiatan edukatif: L\'Aquarium de Barcelona menyelenggarakan berbagai kegiatan edukatif dan tur untuk anak-anak dan keluarga, termasuk pengenalan tentang lingkungan laut dan keanekaragaman hayati.</li>
        </ol>
        <p>L\'Aquarium de Barcelona adalah tempat yang sangat menarik untuk dikunjungi ketika berada di Barcelona, terutama bagi para penggemar kehidupan laut dan keluarga. Koleksi ikan dan makhluk laut yang menakjubkan, pengalaman berjalan di bawah air, kegiatan edukatif dan berbagai kegiatan lainnya akan memberikan pengalaman yang tak terlupakan bagi para pengunjung.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412363542_Aquarium-Barcelona(2).jpg',
                'address' => 'Moll d&#039;Espanya del Port Vell, s/n, 08039 Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:12:29',
            ],
            [
                'id' => 88,
                'country_id' => 14,
                'name' => 'Poble Espanyol de Montjuic',
                'slug' => 'poble-espanyol-de-montjuic',
                'hotels' => '',
                'latitude' => '41.3688517',
                'longitude' => '2.146859',
                'attractions' => '<p>Poble Espanyol de Montjuic adalah sebuah desa buatan yang terletak di Montjuic, Barcelona. Tempat ini dibangun pada tahun 1929 sebagai bagian dari Pameran Dunia Barcelona dan hingga kini tetap menjadi salah satu tempat wisata terpopuler di kota ini. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di Poble Espanyol de Montjuic:</p>
        <ol>
        <li>Menikmati arsitektur: Poble Espanyol de Montjuic menampilkan arsitektur yang beragam, dengan bangunan-bangunan yang mewakili berbagai gaya arsitektur dari seluruh Spanyol. Pengunjung dapat melihat bangunan-bangunan seperti gereja Romanesque, rumah-rumah Moorish, dan bangunan-bangunan Renaissance.</li>
        <li>Menikmati seni dan kerajinan tangan: Desa buatan ini juga merupakan tempat yang ideal untuk menemukan berbagai macam seni dan kerajinan tangan yang dibuat oleh pengrajin lokal. Ada banyak toko dan galeri seni yang menjual berbagai barang kerajinan seperti keramik, kayu, kulit, dan tekstil.</li>
        <li>Menikmati makanan dan minuman: Poble Espanyol de Montjuic memiliki banyak restoran dan bar yang menyajikan masakan Spanyol dan minuman seperti sangria dan cava. Pengunjung dapat menikmati hidangan tradisional seperti paella, tapas, dan churros.</li>
        <li>Menyaksikan pertunjukan: Poble Espanyol de Montjuic menyelenggarakan berbagai macam pertunjukan, termasuk musik, tari flamenco, dan teater.</li>
        <li>Berpartisipasi dalam kegiatan edukatif: Tempat ini juga menyelenggarakan berbagai kegiatan edukatif untuk anak-anak dan dewasa, termasuk kursus seni dan kerajinan tangan, dan tur untuk mengenal lebih dekat sejarah dan budaya Spanyol.</li>
        </ol>
        <p>Poble Espanyol de Montjuic adalah tempat yang ideal untuk menikmati berbagai keindahan seni, arsitektur, dan budaya Spanyol. Pengunjung dapat menemukan banyak hal yang menarik di desa buatan ini, dari arsitektur yang beragam, seni dan kerajinan tangan, makanan dan minuman tradisional, hingga pertunjukan dan kegiatan edukatif. Tempat ini adalah salah satu tempat wisata yang sangat direkomendasikan ketika berada di Barcelona.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412363675_6350881678_652d3350f3.jpg',
                'address' => 'Av Francesc Ferrer i Guardia, 13, 08038 Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:12:51',
            ],
            [
                'id' => 89,
                'country_id' => 14,
                'name' => 'Camp Nou',
                'slug' => 'camp-nou',
                'hotels' => '',
                'latitude' => '41.3790872',
                'longitude' => '2.1202634',
                'attractions' => '<p>Camp Nou adalah stadion sepak bola yang terletak di Barcelona, Spanyol dan menjadi kandang bagi klub sepak bola terkenal dunia, FC Barcelona. Stadion ini adalah tempat yang ideal bagi para penggemar sepak bola dan merupakan salah satu tempat wisata terpopuler di Barcelona. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di Camp Nou:</p>
        <ol>
        <li>Tur Stadion: Pengunjung dapat melakukan tur stadion dan mengunjungi beberapa bagian penting di dalam stadion, termasuk ruang ganti tim, lapangan, ruang pers, dan museum. Tur ini dilakukan dengan pemandu yang berbicara dalam berbagai bahasa.</li>
        <li>Museum FC Barcelona: Museum ini menyajikan sejarah klub sepak bola FC Barcelona, dan menampilkan koleksi piala, trofi, foto, dan barang-barang unik dari sejarah klub tersebut. Museum ini adalah tempat yang ideal untuk para penggemar sepak bola dan pengunjung dapat mempelajari lebih lanjut tentang sejarah klub, pemain legendaris, dan prestasi klub dalam dunia sepak bola.</li>
        <li>Toko Suvenir: Toko suvenir di Camp Nou menyediakan berbagai macam barang-barang suvenir yang terkait dengan klub sepak bola FC Barcelona, seperti kaus, syal, topi, dan bola sepak.</li>
        <li>Berpartisipasi dalam pengalaman interaktif: Camp Nou juga menawarkan berbagai pengalaman interaktif, termasuk simulator melatih, permainan virtual, dan papan skor interaktif. Pengunjung dapat merasakan sensasi menjadi seorang pemain sepak bola profesional dan mencoba berbagai tugas yang biasa dilakukan oleh pemain sepak bola.</li>
        <li>Menonton pertandingan sepak bola: Pengunjung juga dapat menonton pertandingan sepak bola yang diadakan di stadion ini. Tiket untuk pertandingan sepak bola di Camp Nou dapat dibeli di toko suvenir atau melalui situs web resmi klub sepak bola FC Barcelona.</li>
        </ol>
        <p>Camp Nou adalah tempat yang ideal bagi para penggemar sepak bola, namun juga menyajikan berbagai hal menarik bagi pengunjung yang tidak terlalu menyukai sepak bola. Dari tur stadion hingga museum, toko suvenir, pengalaman interaktif, dan pertandingan sepak bola, Camp Nou menawarkan pengalaman yang tak terlupakan bagi para pengunjung.</p>
        <p>Terletak di kawasan Les Corts, Barcelona, ​​hotel dan akomodasi di sekitar Camp Nou cukup beragam. Berikut adalah beberapa pilihan hotel di sekitar Camp Nou:</p>
        <ol>
        <li>
        <p><a title="Hotel Barcelo Sants" href="https://www.booking.com/hotel/es/barcelo-sants.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Barcelo Sants</a> Hotel ini terletak di atas stasiun kereta Sants dan menawarkan akses mudah ke seluruh kota. Hotel ini memiliki ruangan modern dengan pemandangan kota yang indah, fasilitas spa, dan restoran yang mewah. Harga per malam mulai dari sekitar &euro;150.</p>
        </li>
        <li>
        <p><a title="Hotel Sofia Barcelona" href="https://www.booking.com/hotel/es/princesa-sofia.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Sofia Barcelona</a> Hotel ini menawarkan akomodasi mewah dan pemandangan indah dari kamar-kamarnya yang elegan. Hotel ini memiliki kolam renang outdoor, spa, pusat kebugaran, dan restoran mewah. Hotel ini terletak sekitar 10 menit berkendara dari Camp Nou. Harga per malam mulai dari sekitar &euro;200.</p>
        </li>
        <li>
        <p><a title="NH Barcelona Stadium" href="https://www.booking.com/hotel/es/nh-barcelona-stadium.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">NH Barcelona Stadium</a> Hotel ini terletak hanya 5 menit berjalan kaki dari Camp Nou dan menawarkan kamar-kamar yang nyaman dengan Wi-Fi gratis dan TV layar datar. Hotel ini juga memiliki bar, restoran, dan akses mudah ke transportasi umum. Harga per malam mulai dari sekitar &euro;80.</p>
        </li>
        <li>
        <p><a title="Hotel Madanis" href="https://www.booking.com/hotel/es/madanis.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Madanis</a> Hotel ini terletak hanya beberapa menit berjalan kaki dari stadion Camp Nou. Hotel ini menawarkan kamar-kamar yang nyaman dengan Wi-Fi gratis, TV layar datar, dan kamar mandi pribadi. Harga per malam mulai dari sekitar &euro;60.</p>
        </li>
        <li>
        <p><a title="Hotel Lle&oacute;" href="https://www.booking.com/hotel/es/lleo.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Lle&oacute;</a> Hotel ini terletak di jantung kawasan Les Corts, hanya beberapa menit berjalan kaki dari Camp Nou. Hotel ini menawarkan kamar-kamar yang modern dan nyaman dengan Wi-Fi gratis dan TV layar datar. Fasilitas lainnya termasuk kolam renang, pusat kebugaran, dan bar lounge yang menawan. Harga per malam mulai dari sekitar &euro;90.</p>
        </li>
        </ol>
        <p>Perlu diingat bahwa harga hotel dapat bervariasi tergantung pada waktu kunjungan dan ketersediaan kamar. Oleh karena itu, pastikan untuk memeriksa harga dan ketersediaan kamar terlebih dahulu sebelum memesan.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412363780_640px-Camp_Nou_aerial_(cropped).jpg',
                'address' => 'Carrer d&#039;Aristides Maillol, 12, 08028 Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:20:13',
            ],
            [
                'id' => 90,
                'country_id' => 14,
                'name' => 'Bonbin Barcelona',
                'slug' => 'bonbin-barcelona',
                'hotels' => '',
                'latitude' => '41.3885648',
                'longitude' => '2.1868519',
                'attractions' => '<p>Bonbin Barcelona, atau Barcelona Zoo, adalah kebun binatang yang terletak di kota Barcelona, Spanyol. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di Bonbin Barcelona:</p>
        <ol>
        <li>Menjelajahi berbagai habitat: Bonbin Barcelona memiliki berbagai area habitat, termasuk habitat Afrika, Asia, Amerika, dan Eropa. Pengunjung dapat melihat berbagai hewan seperti gajah, jerapah, singa, gorila, kera, dan banyak lagi.</li>
        <li>Penangkaran: Bonbin Barcelona memiliki program penangkaran untuk beberapa spesies, termasuk orangutan, harimau, dan kura-kura. Pengunjung dapat melihat bayi hewan baru lahir dan belajar tentang upaya konservasi dan perlindungan spesies yang dilakukan oleh kebun binatang.</li>
        <li>Pameran Khusus: Kebun binatang ini sering kali memiliki pameran khusus untuk menampilkan hewan yang lebih jarang ditemukan atau spesies yang terancam punah. Pameran ini dapat berubah dari waktu ke waktu, jadi pastikan untuk memeriksa jadwal sebelum kunjungan.</li>
        <li>Aktivitas keluarga: Bonbin Barcelona memiliki berbagai aktivitas yang cocok untuk keluarga, seperti taman bermain, area piknik, dan kursi roda gratis. Ada juga beberapa restoran dan toko suvenir di kebun binatang.</li>
        <li>Acara khusus: Bonbin Barcelona menyelenggarakan beberapa acara khusus sepanjang tahun, termasuk acara Halloween, Natal, dan Hari Valentine. Acara ini sering kali menampilkan aktivitas khusus, pertunjukan, dan hiburan untuk anak-anak.</li>
        </ol>
        <p>Bonbin Barcelona adalah tempat yang ideal untuk pengunjung yang ingin melihat berbagai spesies hewan dan belajar tentang upaya konservasi. Dari menjelajahi berbagai habitat hingga melihat bayi hewan yang baru lahir dan mengikuti acara khusus, kebun binatang ini menyajikan pengalaman yang menyenangkan bagi semua orang, terutama keluarga dengan anak-anak.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412363925_1024px-Barcelona_Zoo_entrance,_Barcelona,_Catalonia,_Spain-14May2011.jpg',
                'address' => 'Parc de la Ciutadella, s/n, 08003 Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:20:48',
            ],
            [
                'id' => 91,
                'country_id' => 14,
                'name' => 'Museum Picasso',
                'slug' => 'museu-picasso',
                'hotels' => '',
                'latitude' => '41.3853269',
                'longitude' => '2.1805247',
                'attractions' => '<p>Museum Picasso adalah sebuah museum seni di Barcelona, Spanyol yang didedikasikan untuk karya seniman ternama Pablo Picasso. Museum ini memiliki koleksi yang sangat besar dan bervariasi dari karya seni Picasso, yang mencakup lukisan, patung, cetakan, dan keramik.</p>
        <p>Beberapa karya seni terkenal dari Picasso yang dipamerkan di museum ini termasuk "Las Meninas" (1957), sebuah interpretasi ulang dari karya Diego Vel&aacute;zquez yang terkenal, serta serangkaian lukisan "Seri Las Meninas" (1957) yang terinspirasi dari lukisan tersebut.</p>
        <p>Selain itu, museum ini juga memiliki koleksi lukisan awal Picasso dari periode biru dan merahnya, serta serangkaian karya seni dari periode kubisme dan surrealismenya. Karya-karya seni lainnya yang dipamerkan di Museum Picasso termasuk koleksi lukisan dan patung seniman lain dari abad ke-20.</p>
        <p>Secara keseluruhan, Museum Picasso adalah tempat yang menakjubkan untuk melihat karya-karya seni Picasso dan </p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412364051_5411040816_8a7ddc7852.jpg',
                'address' => 'Carrer Montcada, 15-23, 08003 Barcelona',
                'created_at' => null,
                'updated_at' => '2023-02-27 12:22:16',
            ],
            [
                'id' => 92,
                'country_id' => 14,
                'name' => 'Belanja di La Rambla',
                'slug' => 'belanja-di-la-rambla',
                'hotels' => '',
                'latitude' => '37.60626',
                'longitude' => '-4.739395',
                'attractions' => '<p>La Rambla adalah sebuah jalan terkenal di pusat kota Barcelona, Spanyol, yang terkenal sebagai tujuan wisata dan belanja yang populer. Jalan ini dikelilingi oleh berbagai toko, restoran, dan kios yang menjual berbagai macam barang dan produk, mulai dari suvenir hingga produk fashion dan kuliner.</p>
        <p>Berikut ini beberapa tempat belanja yang bisa kamu kunjungi di La Rambla:</p>
        <ol>
        <li>La Boqueria: pasar tradisional yang terkenal di Barcelona yang menjual berbagai macam makanan dan minuman, seperti buah-buahan segar, daging, ikan, keju, dan roti. Pasar ini juga memiliki beberapa toko yang menjual produk-produk khas Barcelona.</li>
        <li>El Corte Ingl&eacute;s: sebuah department store besar yang menjual berbagai macam produk, mulai dari fashion hingga peralatan rumah tangga dan kosmetik. Toko ini terkenal dengan koleksi fashionnya yang up-to-date dan berbagai macam merek produk terkenal.</li>
        <li>Zara: merek fashion populer yang berasal dari Spanyol, dan toko Zara di La Rambla merupakan salah satu dari toko-toko merek tersebut yang terbesar di Barcelona. Toko ini menjual berbagai macam pakaian, aksesori, dan produk fashion lainnya untuk pria, wanita, dan anak-anak.</li>
        <li>Mango: merek fashion yang juga berasal dari Spanyol dan terkenal di seluruh dunia. Toko Mango di La Rambla juga menjual berbagai macam pakaian dan aksesori untuk pria dan wanita.</li>
        <li>Sephora: toko kosmetik yang populer di seluruh dunia, termasuk di Barcelona. Toko ini menjual berbagai macam produk kosmetik dan perawatan kulit dari merek terkenal seperti Chanel, Dior, dan Lancome.</li>
        </ol>
        <p>Ada banyak toko dan tempat belanja lainnya di La Rambla yang bisa kamu kunjungi, tergantung pada kebutuhan dan minatmu. Pastikan untuk membandingkan harga dan menawar jika memungkinkan, serta menjaga barang-barangmu dengan baik ketika berbelanja di jalan yang sibuk ini.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412364198_Barcelona-La_Rambla_el_Raval.jpg',
                'address' => 'La Rambla',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:21:21',
            ],
            [
                'id' => 93,
                'country_id' => 14,
                'name' => 'El Barri Gòtic',
                'slug' => 'el-barri-gotic',
                'hotels' => '',
                'latitude' => '41.3850639',
                'longitude' => '2.1734035',
                'attractions' => '<p>El Barri G&ograve;tic adalah distrik bersejarah di pusat kota Barcelona, Spanyol. Distrik ini juga dikenal dengan sebutan Gothic Quarter karena memiliki banyak bangunan dan jalan-jalan yang berasal dari abad pertengahan, dengan arsitektur bergaya gotik yang khas.</p>
        <p>El Barri G&ograve;tic terletak di sebelah selatan La Rambla dan di sebelah timur Pla&ccedil;a de Catalunya. Distrik ini memiliki berbagai atraksi wisata yang populer, seperti Katedral Barcelona, Pla&ccedil;a Sant Jaume, dan Palau de la Generalitat.</p>
        <p>Di El Barri G&ograve;tic, kamu bisa menemukan berbagai macam toko, restoran, dan bar yang menawarkan berbagai macam makanan dan minuman khas Spanyol. Ada juga berbagai macam toko suvenir dan toko seni dan kerajinan tangan yang menjual produk-produk khas Barcelona.</p>
        <p>Selain itu, distrik ini juga memiliki berbagai macam jalan-jalan kecil yang indah dan tempat-tempat bersejarah yang menarik untuk dieksplorasi. Ada banyak bangunan bersejarah yang berasal dari abad pertengahan dan Renaissance yang masih berdiri hingga saat ini, seperti gereja-gereja dan biara-biara tua.</p>
        <p>Secara keseluruhan, El Barri G&ograve;tic adalah tempat yang menarik untuk dikunjungi bagi siapa saja yang tertarik dengan sejarah, seni, dan budaya Spanyol, serta untuk menikmati suasana kota yang indah dan hidup di pusat kota Barcelona.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412364438_1671198185_96b60b3217_z.jpg',
                'address' => 'Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:21:48',
            ],
            [
                'id' => 94,
                'country_id' => 14,
                'name' => 'Tibidabo',
                'slug' => 'tibidabo',
                'hotels' => '',
                'latitude' => '41.3850639',
                'longitude' => '2.1734035',
                'attractions' => '<p>Tibidabo adalah sebuah bukit yang terletak di pinggiran kota Barcelona, Spanyol, yang terkenal dengan pemandangan panoramiknya yang indah dan taman hiburannya yang populer. Bukit ini memiliki ketinggian sekitar 512 meter di atas permukaan laut, menjadikannya sebagai titik tertinggi di kota Barcelona.</p>
        <p>Di puncak bukit Tibidabo, terdapat Gereja Sagrat Cor yang megah yang menawarkan pemandangan yang spektakuler dari kota Barcelona dan sekitarnya. Selain itu, di sekitar gereja ini terdapat taman hiburan Tibidabo Amusement Park yang populer, yang menawarkan berbagai macam wahana dan atraksi bagi pengunjung segala usia.</p>
        <p>Di taman hiburan Tibidabo, terdapat berbagai macam wahana yang menarik, seperti roller coaster, taman bunga, teater boneka, dan kereta gantung yang menghubungkan puncak bukit dengan kota Barcelona di bawahnya. Selain itu, terdapat juga berbagai macam restoran dan toko suvenir di sekitar taman hiburan ini.</p>
        <p>Tibidabo dapat diakses dengan menggunakan kereta gantung dari stasiun Funicular de Tibidabo yang terletak di jalan Avinguda Tibidabo, atau dengan menggunakan kendaraan pribadi atau taksi. Tempat ini cocok untuk dijadikan sebagai tempat wisata bagi keluarga dan teman-teman, terutama bagi yang ingin menikmati pemandangan indah dari ketinggian dan menikmati suasana taman hiburan yang menyenangkan.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412364550_4498366556_427ce64583_b.jpg',
                'address' => 'Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:22:13',
            ],
            [
                'id' => 95,
                'country_id' => 14,
                'name' => 'Museu Nacional d\'Art de Catalunya',
                'slug' => 'museu-nacional-dart-de-catalunya',
                'hotels' => '',
                'latitude' => '41.3682885',
                'longitude' => '2.1521802',
                'attractions' => '<p>Museu Nacional d\'Art de Catalunya (MNAC) atau Museum Seni Nasional Catalonia, terletak di Palau Nacional di Montju&iuml;c, Barcelona, Spanyol. Museum ini merupakan salah satu museum seni terbesar dan terpenting di Barcelona dan menampilkan koleksi seni Catalonia yang luas, dari Abad Pertengahan hingga Abad ke-20.</p>
        <p>Berikut beberapa karya seni terkenal yang bisa dilihat di MNAC:</p>
        <ol>
        <li>Koleksi seni Romanesque: Terdiri dari lebih dari 4.000 karya seni Romanesque, seperti fresko, patung, dan relik.</li>
        <li>Koleksi seni Gothic: Terdiri dari karya seni Gothic dari abad ke-13 hingga abad ke-15, termasuk altar utama yang indah dari Katedral Santa Maria de Girona.</li>
        <li>Koleksi seni Renaissance: Terdiri dari karya seni Renaissance dari abad ke-15 hingga abad ke-16, termasuk karya seni dari seniman terkenal seperti El Greco dan Zurbar&aacute;n.</li>
        <li>Koleksi seni Modernisme: Terdiri dari karya seni dari abad ke-19 dan awal abad ke-20, termasuk karya seni dari seniman terkenal seperti Joan Mir&oacute; dan Salvador Dal&iacute;.</li>
        </ol>
        <p>Selain koleksi seni tetap, MNAC juga sering mengadakan pameran sementara yang menampilkan karya seni dari berbagai seniman terkenal.</p>
        <p>Selain koleksi seni yang luar biasa, Museum Seni Nasional Catalonia juga menawarkan pemandangan indah dari Montju&iuml;c dan Barcelona dari terasnya yang indah. Museum ini mudah diakses dengan transportasi umum seperti bus atau kereta bawah tanah, dan cocok untuk dikunjungi bagi para penggemar seni, sejarah, dan kebudayaan.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1412364641_7873420118_26617f991a_b.jpg',
                'address' => 'Palau Nacional, Parc de Montjuïc, s/n, 08038 Barcelona',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:22:33',
            ],
            [
                'id' => 96,
                'country_id' => 6,
                'name' => 'Stonehenge (Batu raksasa Stonehenge)',
                'slug' => 'stonehenge-batu-raksasa-stonehenge',
                'hotels' => '',
                'latitude' => '51.1802192',
                'longitude' => '-1.8270873',
                'attractions' => '<p>Stonehenge adalah monumen batu raksasa kuno yang terletak di Wiltshire, Inggris. Monumen ini terdiri dari lingkaran batu raksasa yang diatur dengan cermat, dengan beberapa batu yang mencapai tinggi hingga 4 meter dan berat hingga 25 ton.</p>
        <p>Meskipun sejarahnya masih menjadi misteri, diperkirakan bahwa Stonehenge dibangun sekitar 5.000 tahun yang lalu pada periode Neolitikum. Monumen ini digunakan sebagai tempat ritual dan upacara yang terkait dengan matahari, bulan, dan bintang-bintang. Beberapa teori juga menyebutkan bahwa Stonehenge mungkin digunakan sebagai observatorium astronomi atau sebagai tempat pemakaman bangsawan.</p>
        <p>Pengunjung dapat mengunjungi Stonehenge dengan membeli tiket masuk di pusat pengunjung di dekatnya. Di pusat pengunjung, pengunjung dapat menemukan informasi tentang sejarah Stonehenge dan budaya Neolitikum, serta menonton film dokumenter tentang situs tersebut. Setelah itu, pengunjung dapat mengambil bus atau berjalan kaki menuju Stonehenge yang terletak sekitar 2 kilometer dari pusat pengunjung. Di Stonehenge, pengunjung dapat berjalan mengelilingi lingkaran batu raksasa, melihat batu-batu secara dekat, dan menikmati pemandangan alam yang indah di sekitar situs tersebut.</p>
        <p>Jika Anda tertarik untuk mengunjungi situs sejarah dan arkeologi yang menarik, Stonehenge adalah tempat yang patut dikunjungi di Inggris. Namun, karena popularitasnya yang tinggi, disarankan untuk memesan tiket lebih awal dan menghindari waktu-waktu ramai seperti liburan sekolah atau akhir pekan.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417280909_1628518_6eb96242.jpg',
                'address' => 'Amesbury, Wiltshire SP4 7DE',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:16:39',
            ],
            [
                'id' => 97,
                'country_id' => 6,
                'name' => 'Giant\'s Causeway',
                'slug' => 'giants-causeway',
                'hotels' => '',
                'latitude' => '55.2343276',
                'longitude' => '-6.51088',
                'attractions' => '<p>Giant\'s Causeway adalah formasi batu alami yang terletak di pantai utara Irlandia, di County Antrim, sekitar 3 kilometer dari kota Bushmills. Formasi batu ini terdiri dari ribuan kolom batu yang berbentuk heksagonal yang terbentuk secara alami dari lava padat yang mengalami pendinginan dan patahan sekitar 60 juta tahun yang lalu.</p>
        <p>Giant\'s Causeway sering dijuluki sebagai salah satu keajaiban alam dunia dan merupakan salah satu atraksi terpopuler di Irlandia. Pengunjung dapat mengunjungi Giant\'s Causeway dan menjelajahi pantai dengan berjalan kaki, menikmati pemandangan laut yang indah, atau mengambil tur dengan pemandu yang menjelaskan sejarah dan geologi formasi batu ini.</p>
        <p>Menurut legenda, Giant\'s Causeway merupakan hasil dari perang antara dua raksasa, satu dari Irlandia dan satu dari Skotlandia. Raksasa dari Skotlandia, Benandonner, ingin menyerang Irlandia tetapi jembatan yang ia bangun ke Irlandia, yaitu Giant\'s Causeway, hancur ketika raksasa dari Irlandia, Fionn mac Cumhaill, menantangnya untuk bertarung.</p>
        <p>Jika Anda berkunjung ke Irlandia, Giant\'s Causeway adalah salah satu tempat wisata yang tidak boleh dilewatkan. Disarankan untuk memesan tiket terlebih dahulu, terutama jika Anda berkunjung selama musim liburan atau akhir pekan. Jangan lupa untuk membawa kamera dan peralatan hiking yang sesuai karena jalan di sekitar Giant\'s Causeway bisa berbatu dan licin.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417283336_Giants_Causeway_County_Antrim_Ireland_1890s.jpg',
                'address' => '44 Causeway Rd, Bushmills, Antrim BT57 8SU',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:17:08',
            ],
            [
                'id' => 98,
                'country_id' => 6,
                'name' => 'York Minster',
                'slug' => 'york-minster',
                'hotels' => '',
                'latitude' => '53.9616216',
                'longitude' => '-1.0811508',
                'attractions' => '<p>York Minster adalah sebuah katedral yang terletak di kota York di Inggris. Katedral ini adalah salah satu contoh terbaik dari arsitektur gotik abad pertengahan di Inggris. York Minster juga merupakan katedral terbesar di Utara Eropa dan memiliki sejarah yang sangat kaya.</p>
        <p>Katedral ini dibangun pada abad ke-7 dan telah melalui banyak perubahan sepanjang sejarahnya. Salah satu fitur paling menonjol dari York Minster adalah jendela-jendela besar yang menghiasi dinding katedral dan memancarkan cahaya warna-warni ke dalam ruang. Jendela besar terbesar di katedral ini adalah Great East Window, yang dianggap sebagai jendela terbesar di dunia pada saat dibangun pada abad ke-15.</p>
        <p>Selain itu, di dalam York Minster terdapat berbagai macam seni dan artefak yang memiliki nilai sejarah dan seni yang sangat tinggi. Di antara koleksi seni terkenal di katedral ini adalah ratusan patung yang sangat halus dan diukir dengan detail tinggi.</p>
        <p>York Minster masih digunakan sebagai tempat ibadah dan juga sebagai pusat budaya dan seni. Pengunjung dapat mengambil tur dan mengagumi keindahan arsitektur dan seni di dalam katedral ini. Bagi yang ingin menghadiri ibadah, jadwal misa dan acara dapat ditemukan di situs web resmi York Minster.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417281219_YorkMinsterNight.jpg',
                'address' => 'Deangate, York YO1 7HH',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:17:42',
            ],
            [
                'id' => 99,
                'country_id' => 6,
                'name' => 'Musium Inggris (British Museum)',
                'slug' => 'musium-inggris-british-museum',
                'hotels' => '',
                'latitude' => '51.5182977',
                'longitude' => '-0.1260044',
                'attractions' => '<p>British Museum adalah sebuah museum sejarah dan kebudayaan yang terletak di London, Inggris. Museum ini memiliki koleksi seni dan artefak yang sangat luas, dengan lebih dari delapan juta benda yang berasal dari seluruh dunia. Koleksi ini mencakup artefak-artefak dari zaman prasejarah hingga saat ini, dan mencakup berbagai bidang seperti seni, arkeologi, etnografi, antropologi, numismatik, dan sejarah alam.</p>
        <p>Beberapa artefak terkenal yang dapat ditemukan di British Museum antara lain:</p>
        <ul>
        <li>Rosetta Stone: sebuah batu yang memiliki inskripsi dalam tiga bahasa yang berbeda (Mesir Kuno, Yunani, dan bahasa Demotik). Penemuan batu ini membantu para ahli dalam memahami tulisan hieroglif Mesir Kuno.</li>
        <li>Elgin Marbles: sebuah koleksi patung marmer klasik Yunani yang dibeli oleh Lord Elgin pada abad ke-19 dan kemudian disumbangkan ke British Museum. Koleksi ini mencakup patung-patung dari Parthenon di Athena.</li>
        <li>The Lewis Chessmen: sebuah koleksi kecil patung catur kayu yang dibuat pada abad ke-12 di Norwegia atau Islandia.</li>
        <li>The Sutton Hoo ship burial: sebuah makam kapal yang ditemukan pada abad ke-7 di Suffolk, Inggris, dan berisi artefak-artefak Anglo-Saxon yang sangat berharga.</li>
        </ul>
        <p>Selain itu, British Museum juga memiliki berbagai pameran sementara dan program edukasi untuk pengunjung dari segala usia. Museum ini dapat dikunjungi secara gratis, meskipun donasi disarankan.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417281325_British_Museum.jpg',
                'address' => 'Great Russell St, London WC1B 3DG',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:18:23',
            ],
            [
                'id' => 100,
                'country_id' => 6,
                'name' => 'Edinburgh Castle',
                'slug' => 'edinburgh-castle',
                'hotels' => '',
                'latitude' => '55.9488308',
                'longitude' => '-3.1963967',
                'attractions' => '<p>Istana Edinburgh adalah sebuah bangunan istana yang terletak di pusat kota Edinburgh, ibu kota Skotlandia. Bangunan ini memiliki sejarah panjang, dan telah menjadi tempat tinggal bagi raja-raja Skotlandia sejak abad ke-15. Kini, Istana Edinburgh menjadi salah satu destinasi wisata yang populer di Skotlandia.</p>
        <p>Istana Edinburgh terdiri dari beberapa bangunan yang dibangun pada berbagai waktu dan bergaya arsitektur yang berbeda-beda. Salah satu bagian terkenal dari istana ini adalah The Great Hall, sebuah ruangan besar yang dibangun pada tahun 1511 dan masih dipakai hingga sekarang untuk berbagai acara resmi.</p>
        <p>Selain The Great Hall, terdapat juga Royal Palace, sebuah bangunan yang dulunya menjadi kediaman raja-raja Skotlandia dan sekarang digunakan untuk acara-acara kerajaan. Di dalamnya terdapat beberapa ruangan dengan dekorasi yang megah, seperti ruangan tidur Ratu Mary dan ruang audiensi raja.</p>
        <p>Selain bangunan utama, Istana Edinburgh juga memiliki beberapa objek wisata lain yang menarik, seperti Royal Yacht Britannia, sebuah kapal yacht bekas yang dulunya menjadi tempat tinggal bagi Ratu Elizabeth II dan keluarganya selama 44 tahun. Kapal ini sekarang berada di Ocean Terminal, Edinburgh, dan terbuka untuk umum.</p>
        <p>Pengunjung juga dapat menonton pergantian pengawal (changing of the guard) yang diadakan setiap hari di dalam kompleks istana, serta menikmati pemandangan kota Edinburgh dari tempat yang tinggi di atas bukit yang ditempati oleh istana ini.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417281621_Edinburgh_Castle_from_the_North.JPG',
                'address' => 'Castlehill, Edinburgh EH1 2NG',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:18:58',
            ],
            [
                'id' => 101,
                'country_id' => 8,
                'name' => 'Gereja St. Peter (St. Peter\'s Basilica) di kota Vatican',
                'slug' => 'gereja-st-peter-st-peters-basilica-di-kota-vatican',
                'hotels' => '',
                'latitude' => '41.9022407',
                'longitude' => '12.4572663',
                'attractions' => '<p>Gereja (basilica, dalam bahasa asli Itali)
        St. Peter ialah gereja terpenting di dunia. Batu pertama gereja ini diletakkan
        lebih dari 500 tahun lampau, pada tahun 1506. Meja-meja gereja tempat roti dan
        minuman anggur untuk acara ibadat agama kristen (altars) dan monumen-monumen
        yang mengagumkan di dalam gereja ialah terlalu banyak untuk disebutkan
        semuanya, tetapi bahkan bagi mereka yang bukan ahli seni pasti akan terkesan
        oleh apa yang akan mereka dapat di dalam gereja hebat ini, termasuk tambahan
        lebih dari karya-karya pemahat serta arsitek terkenal Gian Lorenzo Bernini dan juga
        patung bunda maria dari Michelangelo. Suatu yang harus disaksikan ialah
        Baldacchino, bentangan tambahan atap (canopy) yang menjadi tugu (monumental)
        ini melindungi meja kecil gereja (altar) dan peninggalan obyek patung (relics)
        dari St. Peter. Secara mengandung seni tinggi (artistic), ia juga berfungsi
        untuk mengisi ruang tinggi kosong di bawah kubah besar Michelangelo. Ia dibuat
        dari perunggu gelap yang kuat dikesankan dengan daun-daun pohon anggur emas.</p>
        <p>Pada bagian dasar dari Baldacchino dan meja
        kecil gereja adalah tempat yang lebih rendah karena memblesak ke bawah (sunken)
        daripada Confessio (the sunken Confessio), sebuah ruang dalam gereja yang lebih
        rendah di bawah dari sekitarnya untuk menghargai tinggi akan kesaksian daripada
        St. Peter yang menyebabkan ia menjadi seorang yang mati syahid di atas bukit
        Vatican. Makamnya berada di belakang tempat kecil bagi jubah kain wol (Niche of
        the Pallium ) dan ia memuat satu kotak simpanan kecil berwarna perak dengan
        kain-kain (setiap kain tersebut dinamakan "pallium"), ia adalah kain
        yang dirajut dari benang-benang wol domba yang telah diberkati pada upacara
        tahunan dari&nbsp; St. Agnes (feast of St.
        Agnes) pada tanggal 21 Januari dan diberikan kepada pendeta-pendeta bishop dan
        para bishop yang memimpinnya (patriarchs and metropolitans) sebagai pengingat
        kepada kesatuan gereja.</p>
        <p>Sekarang ini, berada di dalam kota Vatican,
        gereja St. Peter’s mempunyai ruangan dalam yang terbesar di antara seluruh
        gereja kristen protestan di dunia dan dapat menyesuaikan untuk memuat 60.000
        orang pada satu waktu. Menurut tradisi katolik ini adalah situs pemakaman St.
        Peter (St. maknanya Saint artinya pendeta suci), dan ialah di antara
        gereja-gereja yang tersuci di dunia. Sudah ada sebuah gereja di tempat ini
        sejak abad ke-4 masehi tetapi gereja (basilica) yang sekarang baru dibangun
        pada tahun 1626. Walaupun ini bukan tempat resmi bagi pemimpin pendeta Pope, ia
        adalah gereja utama sebagaimana kebanyakan upacara dilaksanakan di sini.</p>
        <p>Gereja St. Peter memiliki namanya dari
        sejarah yang dikabarkan Injil bahwa seorang bernama Peter disalib tepat di
        sana. Dengan bagian dalam ruang yang terbesar dari gereja kisten protestan
        manapun di dunia, St. Peter’s Basilica sungguh sebuah situs untuk dilihat. Ia
        memiliki tinggi 600 kaki dengan kubah yang meninggi 435 kaki dari atas lantai.
        Saat memasuki gereja, anda akan terkejut dengan betapa besar dan luasnya bagian
        dalamnya yang akan menghimpun 60.000 orang. Gereja yang sekarang telah
        menghabiskan waktu 120 tahun untuk membangunnya dan telah lengkap diselesaikan
        pada tahun 1626.</p>
        <p>Gereja St. Peter adalah terbuka untuk umum
        dan gratis. Sebelum masuk and harus melewati pengujian petugas keamanan dan
        dinasihatkan bahwa wujud peraturan berpakaian yang menutupi aurat dengan baik,
        jika tidak anda tidak akan pernah diizinkan masuk. Hal pertama yang akan anda
        perhatikan saat memasuki gereja ialah ukurannya, ia berukuran sangat besar.
        Pastikan diri anda menghabiskan cukup banyak waktu sekira-kira banyak terdapat
        di sana hal-hal yang mesti dilihat. </p>
        <p>Di dalam terdapat banyak tempat menarik yang harus dikunjungi, antara lain:</p>
        <ol>
        <li>Kuil Utama: Bagian ini merupakan bagian terbesar dari gereja dan berisi altar utama yang dikelilingi oleh patung-patung Santo dan Santa Katolik, serta berbagai hiasan dan ornamen seni.</li>
        <li>Kubah: Kubah di atas gereja adalah salah satu yang terbesar di dunia dan memiliki pemandangan indah dari atas Vatikan dan kota Roma.</li>
        <li>Kapel Kudus Sakramen: Kapel ini merupakan tempat penyimpanan Ekaristi Suci dan juga mengandung patung Kristus yang terkenal, "Kristus Sang Penebus".</li>
        <li>Kapel Pieta: Kapel ini mengandung patung Kristus yang terkenal, "Pieta" karya Michelangelo.</li>
        <li>Kapel Santo Benediktus dan Santo Gregorius Agung: Kapel ini memiliki lukisan-lukisan yang indah dan berisi makam Paus Benediktus XV dan Paus Gregorius Agung.</li>
        <li>Krypta: Krypta di bawah gereja adalah tempat peristirahatan para Paus Katolik Roma yang terdahulu.</li>
        </ol>
        <p>Untuk menyaksikan pemandangan terbaik dari
        kota Roma, anda harus mendaki naik ke kubah gereja St. Peter. Kubah besarnya
        dapat dicapai dengan menggunakan lift/elevator ke atap. Apabila anda telah
        sampai di puncak lift, butuh tambahan 323 langkah menaik lagi untuk membawa
        anda ke pemandangan yang menakjubkan dari taman-taman Vatican (Vatican Gardens)
        dan situs-situs Roma. Akan tetapi, jika anda tidak dapat mendaki tangga, anda
        dapt menaik ke bagian dalam ruang tangga yang jaraknya 170 langkah dari dasar
        kubah dan anda bisa mendapatkan pemandangan cantik daripada kubah secara dekat
        dan pribadi, dan bisa menujukan pandangan ke bawah untuk melihat bagian dalam
        ruang St. Peter’s Basilica. Tetapi yang benar-benar keuntungan besar adalah
        pemandangan-pemandangan yang seseorang dapatkan saat ia mendaki tangga selebar
        hanya satu orang, yang hanya satu arah, berkesan sangat sempit dan tertutup,
        dan mempunyai 330 anak tangga yang berakhir menuju ke sedikit tempat yang
        ditinggikan dan dibatasi tiang-tiang kecil (balkon - balcony bahasa inggrisnya)
        dari rangka datar bersegi di puncak kubah (lantern).</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417335279_St_Peters_Square_Vatican_City_-_April_2007.jpg',
                'address' => 'Piazza San Pietro, 00120 Città del Vaticano',
                'created_at' => null,
                'updated_at' => '2023-02-26 19:26:13',
            ],
            [
                'id' => 102,
                'country_id' => 8,
                'name' => 'Valley of the Temples',
                'slug' => 'valley-of-the-temples',
                'hotels' => '',
                'latitude' => '37.3110897',
                'longitude' => '13.5765475',
                'attractions' => '<p>Lembah-lembah Candi atau dalam bahasa Italia dikenal dengan nama Valle dei Templi, adalah sebuah kompleks arkeologis yang terletak di dekat kota Agrigento, Sisilia, Italia. Kompleks ini terdiri dari sejumlah candi (kuil) kuno yang dibangun pada masa Yunani Kuno.</p>
        <p>Beberapa candi yang paling terkenal di Lembah-lembah Candi adalah:</p>
        <ul>
        <li>Candi Concordia: Candi ini merupakan salah satu candi terbaik yang masih ada di seluruh dunia. Bangunannya mengesankan dengan arsitektur dorik yang klasik dan terletak di ujung paling selatan dari kompleks candi di Lembah-lembah Candi.</li>
        <li>Candi Hera Lacinia: Candi ini didedikasikan untuk dewi Hera dan merupakan candi tertua yang ada di kompleks ini.</li>
        <li>Candi Herakles: Candi ini terletak di sisi barat daya kompleks dan dibangun untuk menghormati dewa Herakles, atau Hercules dalam mitologi Romawi.</li>
        </ul>
        <p>Selain candi-candi tersebut, di Lembah-lembah Candi juga terdapat sejumlah bangunan dan artefak lain yang menarik untuk dilihat, seperti:</p>
        <ul>
        <li>Museum Arkeologi Regional: Terletak di dalam kompleks, museum ini menampilkan koleksi artefak dari masa Yunani Kuno hingga zaman Romawi di wilayah tersebut.</li>
        <li>Taman Kolam: Terletak di sekitar candi-candi dan menawarkan pemandangan yang indah dari lembah-lembah di sekitarnya.</li>
        </ul>
        <p>Lembah-lembah Candi adalah salah satu tempat yang paling terkenal di Sisilia dan menarik banyak wisatawan setiap tahunnya. Kompleks ini diakui sebagai Situs Warisan Dunia oleh UNESCO dan merupakan salah satu situs arkeologis terbaik di Eropa.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417335576_Valle_dei_templi_(tone-mapping)_II.jpg',
                'address' => 'Agrigento AG',
                'created_at' => null,
                'updated_at' => '2023-02-26 19:27:25',
            ],
            [
                'id' => 103,
                'country_id' => 8,
                'name' => 'Menara Condong Pisa',
                'slug' => 'menara-condong-pisa',
                'hotels' => '',
                'latitude' => '43.7232252',
                'longitude' => '10.3947238',
                'attractions' => '<p>Menara Condong Pisa (Leaning Tower of Pisa) adalah sebuah menara lonceng yang terletak di Piazza dei Miracoli (Lapangan Keajaiban) di kota Pisa, Italia. Menara ini terkenal karena kemiringannya yang spektakuler. Saat ini, kemiringannya mencapai sekitar 3,99 derajat dari posisi vertikal.</p>
        <p>Menara Condong Pisa dibangun pada abad ke-12 sebagai bagian dari kompleks Katedral Pisa yang lebih besar. Meskipun dibangun dengan tujuan awal sebagai menara lonceng, kecenderungan kemiringannya dimulai sejak awal konstruksi karena tanah yang kurang stabil. Menara ini sempat ditutup untuk umum pada tahun 1990-an untuk dilakukan upaya perbaikan agar tidak terjatuh. Sejak itu, kemiringannya telah dikurangi dengan stabilisasi struktur, tetapi masih dapat dilihat oleh pengunjung.</p>
        <p>Menara Condong Pisa adalah salah satu landmark yang paling terkenal di Italia dan menarik jutaan wisatawan setiap tahunnya. Pengunjung dapat memanjat tangga spiral yang berputar di dalam menara untuk menikmati pemandangan kota Pisa dari ketinggian, meskipun pengunjung harus membayar tiket masuk dan reservasi terlebih dahulu karena terbatasnya jumlah orang yang diizinkan memasuki menara pada satu waktu. Selain menara itu sendiri, Piazza dei Miracoli juga menawarkan beberapa atraksi lain yang menarik, termasuk Katedral Pisa yang indah dan Batistery (Baptisterium) Pisa.</p>
        <p>Untuk mengunjungi Menara Pisa, Anda bisa mengikuti langkah-langkah berikut:</p>
        <ol>
        <li>
        <p>Pilih waktu yang tepat: Musim panas menjadi waktu yang paling populer untuk mengunjungi Menara Pisa, namun selalu disarankan untuk datang pada waktu yang lebih sepi atau di luar musim panas untuk menghindari kerumunan.</p>
        </li>
        <li>
        <p>Transportasi: Menara Pisa terletak di pusat kota Pisa, Italia, sehingga bisa dijangkau dengan berbagai moda transportasi. Anda bisa datang dengan pesawat ke Bandara Internasional Pisa Galileo Galilei, kemudian menggunakan bus atau taksi menuju ke pusat kota. Alternatif lainnya adalah menggunakan kereta api dari kota-kota besar di Italia seperti Florence, Rome, atau Milan.</p>
        </li>
        <li>
        <p>Tiket masuk: Untuk masuk ke kompleks Menara Pisa, Anda memerlukan tiket masuk. Tiket dapat dibeli secara online atau di tempat langsung. Pastikan untuk membeli tiket sebelumnya, karena antrian tiket masuk di lokasi bisa cukup panjang pada musim ramai.</p>
        </li>
        <li>
        <p>Jalan kaki menuju Menara Pisa: Setelah membeli tiket, Anda akan memasuki kompleks Menara Pisa. Anda dapat berjalan kaki menuju Menara Pisa dari gerbang masuk, yang akan memakan waktu sekitar 10-15 menit. Selama berjalan kaki, Anda akan melewati beberapa bangunan sejarah dan juga Cattedrale di Pisa.</p>
        </li>
        <li>
        <p>Melihat Menara Pisa: Setelah tiba di area Menara Pisa, Anda bisa mengambil foto dengan latar belakang Menara Pisa yang ikonik. Pastikan untuk berhati-hati dan mengikuti aturan yang ditetapkan, seperti tidak memanjat menara atau menginjakkan kaki pada area yang dilarang.</p>
        </li>
        </ol>
        <p>Itulah beberapa langkah yang dapat Anda ikuti untuk mengunjungi Menara Pisa. Selamat berwisata!</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417335826_Leaning_Tower-Pisa.jpg',
                'address' => 'Piazza del Duomo, 56126 Pisa PI',
                'created_at' => null,
                'updated_at' => '2023-02-26 19:29:57',
            ],
            [
                'id' => 104,
                'country_id' => 8,
                'name' => 'Pantheon',
                'slug' => 'pantheon',
                'hotels' => '',
                'latitude' => '41.8990049',
                'longitude' => '12.4764867',
                'attractions' => '<p>Pantheon adalah sebuah bangunan kuno yang terletak di kota Roma, Italia. Bangunan ini dibangun pada tahun 27 SM sebagai kuil untuk semua dewa (pantheon dalam bahasa Yunani berarti "semua dewa"). Setelah dibangun ulang pada tahun 126 Masehi oleh Kaisar Hadrianus, bangunan ini menjadi sebuah gereja Kristen dan masih digunakan sebagai gereja hingga saat ini.</p>
        <p>Salah satu daya tarik utama Pantheon adalah kubahnya yang besar dan indah. Kubah ini memiliki diameter sekitar 43 meter dan merupakan salah satu kubah terbesar yang dibangun tanpa menggunakan rangka baja. Di bagian tengah kubah terdapat lubang bundar yang disebut oculus yang memberikan cahaya alami ke dalam ruangan dan juga menjadi salah satu fitur arsitektur paling menarik di dalam bangunan ini.</p>
        <p>Selain kubah yang indah, pengunjung juga dapat melihat sejumlah fitur menarik di dalam Pantheon, termasuk:</p>
        <ul>
        <li>Altar utama: Terletak di bagian depan bangunan, altar ini dibangun pada tahun 1632 dan masih digunakan untuk misa-misa dan ibadah lainnya hingga saat ini.</li>
        <li>Kapel-kapel kecil: Di sekitar ruang utama terdapat sejumlah kapel kecil yang dibangun oleh keluarga-keluarga bangsawan pada abad ke-17 dan ke-18. Beberapa di antaranya berisi lukisan dan patung yang indah.</li>
        <li>Makam-makam: Beberapa tokoh penting Italia dimakamkan di dalam Pantheon, termasuk Raja Vittorio Emanuele II dan seniman terkenal Raphael.</li>
        </ul>
        <p>Pantheon adalah salah satu bangunan kuno paling terkenal dan menarik di Roma, dan masih menjadi salah satu atraksi wisata paling populer di kota tersebut. Sebagai gereja, Pantheon juga masih aktif digunakan untuk ibadah dan pengunjung dapat menghadiri misa harian yang diselenggarakan di dalam bangunan ini.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417335949_rome-386311_1280.jpg',
                'address' => 'Piazza della Rotonda, 00186 Roma',
                'created_at' => null,
                'updated_at' => '2023-02-26 19:30:49',
            ],
            [
                'id' => 105,
                'country_id' => 8,
                'name' => 'Venice',
                'slug' => 'venice',
                'hotels' => '',
                'latitude' => '45.4408474',
                'longitude' => '12.3155151',
                'attractions' => '<p>Venice (Venezia) adalah sebuah kota yang terletak di Italia utara dan dikenal sebagai salah satu kota paling romantis dan indah di dunia. Di kota ini terdapat sejumlah tempat wisata menarik yang bisa dikunjungi, di antaranya:</p>
        <ol>
        <li>Canal Grande: Canal Grande adalah kanal utama yang melintasi kota Venice dan menjadi salah satu atraksi wisata utama di sana. Pengunjung dapat menaiki gondola atau perahu untuk melihat pemandangan bangunan-bangunan kuno dan jembatan-jembatan yang indah di sepanjang kanal.</li>
        <li>Piazza San Marco: Piazza San Marco adalah lapangan utama di Venice dan merupakan tempat berkumpulnya banyak pengunjung. Di sini terdapat sejumlah bangunan kuno yang indah, termasuk Basilika San Marco, Menara Campanile, dan Palazzo Ducale.</li>
        <li>Basilika San Marco: Basilika San Marco adalah salah satu bangunan paling terkenal di Venice dan merupakan contoh arsitektur Bizantium yang indah. Di dalamnya terdapat karya seni dan arsitektur yang menakjubkan, termasuk mozaik-mozaik kuno dan kubah yang indah.</li>
        <li>Palazzo Ducale: Palazzo Ducale adalah bekas istana doge (penguasa) Venice yang dibangun pada abad ke-14. Kini bangunan ini menjadi museum yang menyimpan koleksi seni dan artefak bersejarah.</li>
        <li>Rialto Bridge: Rialto Bridge adalah jembatan yang terkenal di Venice dan menjadi salah satu jembatan tertua di kota ini. Di sekitarnya terdapat pasar makanan dan suvenir yang populer di kalangan pengunjung.</li>
        <li>Murano: Murano adalah sebuah pulau kecil di dekat Venice yang terkenal dengan kerajinan kaca yang indah. Di sini terdapat banyak toko yang menjual berbagai macam produk kaca, termasuk perhiasan, vas, dan patung.</li>
        <li>Gallerie dell\'Accademia: Gallerie dell\'Accademia adalah museum seni yang menyimpan koleksi seni Italia klasik dari abad ke-14 hingga abad ke-18. Di dalamnya terdapat karya seni yang indah, termasuk lukisan-lukisan klasik dan patung-patung kuno.</li>
        </ol>
        <p>Venice adalah kota yang indah dan penuh sejarah, dan terdapat banyak tempat wisata menarik yang dapat dikunjungi oleh pengunjung. Selain tempat-tempat di atas, kota ini juga dikenal dengan makanan dan minuman khasnya, seperti cicchetti (sejenis tapas) dan spritz (minuman beralkohol khas Italia).</p>
        <p>Berikut ini adalah beberapa cara untuk mencapai Venice:</p>
        <ol>
        <li>
        <p>Pesawat: Bandara Internasional Marco Polo Venice adalah bandara utama yang melayani Venice dan berlokasi sekitar 13 kilometer dari pusat kota. Anda dapat terbang ke bandara ini dari berbagai kota di Eropa dan di seluruh dunia, termasuk dari kota-kota besar seperti London, Paris, Amsterdam, dan New York.</p>
        </li>
        <li>
        <p>Kereta: Venice memiliki dua stasiun kereta utama, yaitu Santa Lucia dan Mestre. Stasiun Santa Lucia berada di pulau utama Venice, sedangkan stasiun Mestre terletak di daratan. Anda bisa naik kereta dari kota-kota besar di Italia, seperti Rome, Milan, dan Florence.</p>
        </li>
        <li>
        <p>Bus: Venice dapat dicapai dengan bus dari berbagai kota di Italia dan Eropa. Terminal bus utama di Venice adalah Piazzale Roma, yang terletak di pulau utama Venice dan dapat diakses dengan berjalan kaki atau dengan perahu.</p>
        </li>
        <li>
        <p>Mobil: Venice adalah kota yang tidak ramah mobil, karena kendaraan bermotor tidak diizinkan untuk memasuki pusat kota. Namun, Anda bisa mencapai Venice dengan mobil dan parkir di luar kota, kemudian melanjutkan perjalanan dengan menggunakan transportasi publik atau perahu.</p>
        </li>
        </ol>
        <p>Setelah tiba di Venice, Anda bisa mengeksplorasi kota dengan berjalan kaki atau dengan menggunakan perahu yang tersedia di kanal-kanal Venice. Selamat menikmati liburan Anda di Venice!</p>
        <p>Berikut beberapa hotel yang terletak dekat dengan Venice:</p>
        <ol>
        <li>
        <p>Hotel Danieli, a Luxury Collection Hotel, Venice Hotel yang terletak di kanal Riva degli Schiavoni ini merupakan salah satu hotel mewah di Venice yang paling ikonik. Hotel ini menawarkan kamar-kamar yang indah dengan dekorasi klasik Venesia dan pemandangan kanal yang indah.</p>
        </li>
        <li>
        <p><a title="Hotel Ai Mori d\'Oriente" href="https://www.booking.com/hotel/it/aimoridoriente.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Ai Mori d\'Oriente</a> Hotel yang terletak di daerah Cannaregio ini menawarkan suasana Venesia yang autentik dengan interior yang bergaya Timur Tengah. Kamar-kamarnya dilengkapi dengan AC dan Wi-Fi gratis.</p>
        </li>
        <li>
        <p><a title="Hilton Molino Stucky" href="https://www.booking.com/hotel/it/molino-stucky-hilton-venice.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hilton Molino Stucky</a> Venice Hotel mewah yang terletak di Pulau Giudecca ini menawarkan pemandangan yang spektakuler dari Venice dan kanalnya. Hotel ini memiliki fasilitas yang lengkap seperti kolam renang, spa, dan restoran.</p>
        </li>
        <li>
        <p>Hotel Ala Hotel yang terletak di daerah San Marco ini menawarkan kamar-kamar yang luas dan nyaman dengan dekorasi Venesia yang klasik. Hotel ini juga dekat dengan beberapa situs terkenal di Venice seperti Basilika San Marco dan Palazzo Grassi.</p>
        </li>
        <li>
        <p><a title="Palazzina Grassi Hotel" href="https://www.booking.com/hotel/it/palazzina-grassi.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Palazzina Grassi Hotel</a> yang terletak di daerah San Marco ini menawarkan kamar-kamar yang mewah dengan interior yang modern dan mewah. Hotel ini juga dekat dengan beberapa tempat wisata seperti Teatro La Fenice dan Peggy Guggenheim Collection.</p>
        </li>
        </ol>
        <p>Itulah beberapa hotel yang terletak dekat dengan Venice dan menawarkan pengalaman menginap yang berbeda-beda. Pastikan untuk memilih hotel yang sesuai dengan kebutuhan dan budget Anda.</p>
        <p>Namun, masih ada beberapa hotel murah yang dapat Anda pertimbangkan saat berkunjung ke Venice. Berikut beberapa rekomendasi hotel murah di Venice:</p>
        <ol>
        <li>
        <p><a title="Hotel Belle Arti" href="https://www.booking.com/hotel/it/belle-arti.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Belle Arti</a> Hotel yang terletak di daerah Dorsoduro ini menawarkan kamar-kamar yang dilengkapi dengan AC, Wi-Fi gratis, dan TV layar datar. Harga kamar di hotel ini mulai dari sekitar 70 euro per malam.</p>
        </li>
        <li>
        <p><a title="Hotel Al Vagon" href="https://www.booking.com/hotel/it/al-vagon.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Al Vagon</a> Hotel yang terletak di daerah Santa Croce ini menawarkan kamar-kamar yang sederhana dan dilengkapi dengan AC, Wi-Fi gratis, dan TV layar datar. Harga kamar di hotel ini mulai dari sekitar 80 euro per malam.</p>
        </li>
        <li>
        <p><a title="Hotel San Geremia" href="https://www.booking.com/hotel/it/san-geremia.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel San Geremia</a> Hotel yang terletak di daerah Cannaregio ini menawarkan kamar-kamar yang sederhana dengan AC dan Wi-Fi gratis. Hotel ini juga dekat dengan beberapa tempat wisata seperti Ghetto Venesia dan Katedral Santa Maria dei Miracoli. Harga kamar di hotel ini mulai dari sekitar 60 euro per malam.</p>
        </li>
        </ol>
        <p>Itulah beberapa hotel murah di Venice yang dapat Anda pertimbangkan saat berkunjung ke kota ini.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417336175_venice-472344_1280.jpg',
                'address' => 'Venice',
                'created_at' => null,
                'updated_at' => '2023-02-26 19:46:16',
            ],
            [
                'id' => 106,
                'country_id' => 8,
                'name' => 'Vatican City',
                'slug' => 'vatican-city',
                'hotels' => '',
                'latitude' => '41.9021805',
                'longitude' => '12.4557072',
                'attractions' => '<p>Kota Vatikan merupakan pusat spiritual Gereja Katolik Roma dan memiliki banyak tempat yang menarik untuk dikunjungi. Berikut adalah beberapa tempat yang dapat kamu kunjungi saat berada di Kota Vatikan:</p>
        <ol>
        <li>Basilika Santo Petrus: Salah satu gereja terbesar di dunia dan pusat keagamaan Katolik yang paling penting. Di dalam basilika ini terdapat banyak karya seni, termasuk Piet&agrave; karya Michelangelo.</li>
        <li>Kapel Sistina: Kapel ini dikenal karena lukisan-lukisan langit-langitnya yang terkenal, seperti Kebangkitan Adam karya Michelangelo.</li>
        <li>Museum Vatikan: Terdiri dari beberapa museum yang berisi koleksi seni dan arkeologi yang sangat berharga. Salah satu koleksi terkenal di museum ini adalah lukisan "Kamar Rafael".</li>
        <li>Istana Apostolik: Tempat tinggal Paus dan juga merupakan pusat administrasi Takhta Suci.</li>
        <li>Taman Vatikan: Taman yang indah dan tenang ini menawarkan pemandangan indah dan menyejukkan yang kontras dengan kebisingan kota Roma yang sibuk.</li>
        <li>Makam Paus dan Basilika Santo Paulus di Luar Tembok: Merupakan makam para Paus dan salah satu gereja tertua di dunia.</li>
        <li>Palazzo di San Callisto: Tempat bagi Museum Roma San Callisto yang menampilkan artefak-arkeologi yang menggambarkan kehidupan awal agama Kristen di Roma.</li>
        </ol>
        <p>Namun, perlu diingat bahwa beberapa tempat di Kota Vatikan, seperti Basilika Santo Petrus dan Kapel Sistina, bisa sangat ramai dan memerlukan waktu untuk antre. Oleh karena itu, sebaiknya kamu merencanakan kunjunganmu dengan baik untuk memaksimalkan waktu dan menghindari kerumunan.</p>
        <p>Berikut beberapa rekomendasi hotel yang terletak dekat dengan Vatikan:</p>
        <ol>
        <li>
        <p>Hotel Alimandi Vaticano Hotel yang terletak di daerah Prati ini hanya berjarak 5 menit berjalan kaki dari Vatikan. Hotel ini menawarkan kamar-kamar yang luas dan nyaman dengan dekorasi yang elegan. Fasilitas di hotel ini termasuk AC, Wi-Fi gratis, dan TV layar datar.</p>
        </li>
        <li>
        <p><a title="Grand Hotel Tiberio" href="https://www.booking.com/hotel/it/grand-tiberio.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Grand Hotel Tiberio</a> Hotel yang terletak di daerah Balduina ini menawarkan kamar-kamar yang luas dan dilengkapi dengan AC, Wi-Fi gratis, dan TV layar datar. Hotel ini juga memiliki fasilitas seperti kolam renang dan spa.</p>
        </li>
        <li>
        <p>Hotel Columbus Hotel yang terletak di daerah Prati ini menawarkan kamar-kamar yang luas dan nyaman dengan dekorasi yang elegan. Hotel ini juga dekat dengan beberapa tempat wisata seperti Museum Vatikan dan Basilika Santo Petrus. Fasilitas di hotel ini termasuk AC, Wi-Fi gratis, dan TV layar datar.</p>
        </li>
        <li>
        <p><a title="Hotel Farnese" href="https://www.booking.com/hotel/it/farneseroma.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Farnese</a> Hotel yang terletak di daerah Prati ini menawarkan kamar-kamar yang luas dan nyaman dengan dekorasi yang elegan. Hotel ini juga dekat dengan beberapa tempat wisata seperti Kastil Sant\'Angelo dan Piazza del Popolo. Fasilitas di hotel ini termasuk AC, Wi-Fi gratis, dan TV layar datar.</p>
        </li>
        <li>
        <p><a title="Hotel dei Consoli" href="https://www.booking.com/hotel/it/deiconsoli.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel dei Consoli</a> Hotel yang terletak di daerah Prati ini menawarkan kamar-kamar yang luas dan nyaman dengan dekorasi yang elegan. Hotel ini juga dekat dengan beberapa tempat wisata seperti Museum Vatikan dan Piazza del Popolo. Fasilitas di hotel ini termasuk AC, Wi-Fi gratis, dan TV layar datar.</p>
        </li>
        </ol>
        <p>Itulah beberapa hotel yang terletak dekat dengan Vatikan. Pastikan untuk memilih hotel yang sesuai dengan kebutuhan dan budget Anda.</p>
        <p>Berikut ini beberapa rekomendasi hotel murah yang terletak dekat dengan Vatikan:</p>
        <ol>
        <li>
        <p><a title="B&amp;B Roma Vaticano" href="https://www.booking.com/hotel/it/vatica-b-amp-b-roma.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">B&amp;B Roma Vaticano</a> B&amp;B ini menawarkan kamar-kamar yang sederhana dengan AC, Wi-Fi gratis, dan TV layar datar. Terletak hanya sekitar 10 menit berjalan kaki dari Museum Vatikan. Harga kamar mulai dari sekitar 50 Euro per malam.</p>
        </li>
        <li>
        <p>Hotel Poggioverde Roma Hotel ini menawarkan kamar-kamar yang sederhana dengan AC, Wi-Fi gratis, dan TV layar datar. Terletak hanya sekitar 15 menit berjalan kaki dari Museum Vatikan. Harga kamar mulai dari sekitar 60 Euro per malam.</p>
        </li>
        <li>
        <p><a title="Hotel Emmaus" href="https://www.booking.com/hotel/it/emmaus.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Emmaus</a> Hotel yang terletak di daerah Prati ini menawarkan kamar-kamar yang sederhana dengan AC, Wi-Fi gratis, dan TV layar datar. Terletak hanya sekitar 20 menit berjalan kaki dari Museum Vatikan. Harga kamar mulai dari sekitar 70 Euro per malam.</p>
        </li>
        <li>
        <p><a title="Hotel Casa Valdese Roma" href="https://www.booking.com/hotel/it/casa-valdese.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Casa Valdese Roma</a> Hotel ini menawarkan kamar-kamar yang sederhana dengan AC, Wi-Fi gratis, dan TV layar datar. Terletak hanya sekitar 15 menit berjalan kaki dari Museum Vatikan. Harga kamar mulai dari sekitar 75 Euro per malam.</p>
        </li>
        <li>
        <p><a title="Hotel Nautilus" href="https://www.booking.com/hotel/it/nautilus-roma.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Nautilus</a> Hotel yang terletak di daerah Prati ini menawarkan kamar-kamar yang sederhana dengan AC, Wi-Fi gratis, dan TV layar datar. Terletak hanya sekitar 15 menit berjalan kaki dari Museum Vatikan. Harga kamar mulai dari sekitar 80 Euro per malam.</p>
        </li>
        </ol>
        <p>Jangan lupa untuk melakukan reservasi terlebih dahulu sebelum kedatangan.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417357497_St_Peters_Square_Vatican_City_-_April_2007.jpg',
                'address' => 'Vatican City',
                'created_at' => null,
                'updated_at' => '2023-02-26 19:56:30',
            ],
            [
                'id' => 107,
                'country_id' => 8,
                'name' => 'Musium-Musium Vatican',
                'slug' => 'musium-musium-vatican',
                'hotels' => '',
                'latitude' => '41.9066514',
                'longitude' => '12.4535071',
                'attractions' => '<p>Musium-musium Vatican, kesemua tigabelas
        darinya , dipandang sebagai satu di antara musium terbaik dunia yang berfungsi
        sebagai rumah untuk banyak karya-karya istimewa (masterpieces) mulia daripada
        lukisan-lukisan, karya-karya ukiran dan kesenian yang dikumpulkan oleh
        pendeta-pendeta Pope selama beabad-abad. Mereka diperhitungkan berjumlah sangat
        banyak dengan koleksi yang mengundang decak kagum yang tidak dapat ditemukan di
        tempat lain manapun juga. Mengunjungi musium bisa merupakan hal yang
        mengecutkan hati dan anda harus mempertimbangkan untuk mengikuti panduan tur
        saat mengunjunginya agar dapat menalari dan memahami segala sesuatu yang musium
        mesti tawarkan.</p>
        <p>Gereja Katolik Romawi telah menghimpun cukup
        banyak&nbsp; koleksi lukisan-lukisan dan
        karya-karya ukir dan pahat oleh seniman-seniman terkenal seperti Michelangelo
        dan Raphael. Musium-musium ini ditata dalam bagian-bagian termasuk
        Pio-Clementino, musium Egyptian dan Gregorian Etruscan, galeri Candelabra,
        ruangan-ruangan Raphael, galeri kain-kain berhiaskan motif gambar (tapestries),
        galeri peta-peta kuno, dan ruangan kecil dalam gereja (Chapel) dari Sistine.
        Galeri-galeri tersebut memuat gambar-gambar dan karya-karya seni khusus yang
        ciptakan oleh seniman-seniman terhormat dari Roma dan dari banyak tempat di
        dunia. Gambar, lukisan serta karya seni lainnya dipersiapkan agar dimasukkan
        dan ditata di dalam serentetan bangunan-bangunan yang mempunyai 1400 ruangan-ruangan;
        keseluruhan kompleks mencakup 5.25 hektar. Sebagian dari karya seni yang
        terkenal yang disajikan di sini diantaranya lukisan-lukisan dinding dan
        langit-langit ruang kecil dalam gereja daripada Sistine (Sistine Chapel),
        Stanze of Raphael, patung Lacoon (the Lacoon statue) dan Apollo del Belvedere.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417357577_St_Peters_Square_Vatican_City_-_April_2007.jpg',
                'address' => 'Vatican',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 108,
                'country_id' => 8,
                'name' => 'Sistine Chapel',
                'slug' => 'sistine-chapel',
                'hotels' => '',
                'latitude' => '41.9015296',
                'longitude' => '12.4459119',
                'attractions' => '<p>Sistine Chapel (Ruangan
        dalam gereja &nbsp;Sistine) sungguh merupakan sebuah
        situs untuk dilihat dengan seksama. Sistine Chapel dapat dicapai oleh turis
        melalui musium-musium Vatican (hanya tamu-tamu tertentu saja yang boleh masuk
        lewat sisi St. Peter daripada Vatican). Turis-turis dipandu dalam
        kelompok-kelompok kecil di dalam ruang tersebut dan diber waku 10 - 15 menit
        untuk meyaksian dinding-dinding dan langit-langit. Ia boleh jadi bangunan
        termasyhur di kota Vatican.</p>
        <p>Ruang kecil dalam gereja (chapel) ini
        mendapatkan namanya from Pope Sixtus IV, dan diperbaiki ke keadaan asalnya
        (restorasi) dari Cappella Magna tua antara tahun 1477 dan 1480. Setiap hari
        banyak orang datang dari setiap penjuru dunia untuk mengagumi lukisan-lukisan
        karya Michelangelo. Sistine Chapel menjadi rumah bagi sebagian karya-karya
        terkenal Michelangelo termasuk : Penciptaan Adam (The Creation of Adam) dan
        Pembalasan Penentuan (The Last Judgement). Pada tahun 1508, Pope Julius II
        memerintahkan Michelangelo yang saat itu masih muda untuk melukis 929 meter
        persegi (10,000 kaki persegi) luas langit-langit daripada Sistine Chapel.
        Seniman ini menghabiskan waktu selama 4 tahun dalam menghasilkan karya seni puncak
        (masterpiece) langit-langit tersebut, dari tahun 1508 hingga 1512. Dikatakan
        bahwa pekerjaan ini telah mangorbankan keseluruhan jiwa dan raga sang seniman.
        Hal itu menyatakan, ia telah menerima perintah lainnya lagi dari Pope Paul III
        untuk melukis bagian atas dari ruangan ini dengan karya bermakna Pembalasan
        Penentuan (The Last Judgement). Ini dikerjakan secara sangat teliti dari tahun
        1537 hingga tahun 1541. </p>
        <p>The Sistine Chapel berfungsi sebagai situs
        daripada Persidangan pimpinan pendeta Pope (Papal Conclave) ketika kelompok
        pendeta-pendeta yang memiliki hak untuk dicalonkan (College of Cardinals)
        melakukan rapat untuk memilih seorang Pope baru setelah satu yang sebelumnya
        wafat. Mereka menggunakan sebuah tanda asap untuk memberitahu orang yang setia
        ikhlas apakah seorang pope telah dipilih atau belum. Asap putih berarti ya,
        seorang Pope telah dipilih. Asap hitam berarti tidak, belum.</p>
        <p>Sistine Chapel mungkin masyhur untuk
        lukisan-lukisannya yang menjadi karya Michaelangelo tetapi anda selayaknya memeriksa
        dinding-dinding tepi yang memuat lukisan cat air dinding oleh Botticelli,
        Perugino dan Rosselli serta yang lainnya. Sisi bagian bawah memuat banyak
        lembar-lembar kain terhias sulaman (tapestries) oleh Raphael.&nbsp; Hendaklah diketahui diawal waktu bahwa jika
        anda mencoba untuk mengambil pemotretan gambar di dalam ruang ini anda pasti
        akan didamprat oleh para pewenang musium jika ketahuan. Terakhir yang tak kalah
        pentingnya, anda harus membawa sepasang teropong (binoculars) kecil jika anda
        benar-benar ingin melihat keterperincian langit-langit dan dindingnya.</p>
        <p>Sementara Sistine Chapel bisa menjadi sebuah
        tujuan bagi banyak turis-turis, kebanyakan mereka dibuat terpana oleh
        keseniannya yang mengagumkan yang akan mereka singkapkan sepanjang jalan ketika
        berjalan menuju ruang kecil dalam gereja (chapel) tersebut. Sebagian yang
        menjadi favorit sepanjang jalan termasuk&nbsp;
        ruangan-ruangan Raphael (satu demi satu lukisan hebat Raphael), halaman
        dalam bangunan (Courtyard) yang bersegi delapan, ruangan peta (Map Room) yakni
        dinding-dinding yang ditutupi dengan peta-peta kuno dan langit-langit yang
        mengesankan, permukaan obyek-obyek yang dihiasi dengan membentuk tonjolan 3
        dimensi (reliefs) penuh dengan pahatan dan ukiran (sculptures) dibuat pada abad
        pertama (New Wing), dan satu koleksi hebat akan karya-karya Mesir (Museo
        Egizio).</p>
        <p>Bea masuk musium adalah 15 euro yang sangat
        layak. Tiket dapat dibeli di muka secara terhubung internet (online) dengan
        tambahan bea 4 euro untuk pemesanan penyisihan dimuka (reservation) yang dikenal
        dengan sebutan bea "melangkahi antrian". Apa yang banyak orang tidak
        sadari ialah jalan masuk ke musium Vatican bukanlah terletak dibidang lapang
        (square) dari St Peters (St Peters Square), tapi lebih tepat sebagai suatu
        jalan kaki 10 dan 15 menit kearah kanan sekitar garis luar kota Vatican.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417336784_o-SISTINE-CHAPEL-facebook.jpg',
                'address' => 'Viale Vaticano, 2, Città del Vaticano',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 109,
                'country_id' => 8,
                'name' => 'Vatican Gardens',
                'slug' => 'vatican-gardens',
                'hotels' => '',
                'latitude' => '41.9066514',
                'longitude' => '12.4535071',
                'attractions' => '<p>Taman-taman Vatican adalah taman-taman dan
        kebun-kebun di pesisir kota yang meliputi tempat lebih dari setengah daripada
        luas kota Vatican dan terletak di belakang gereja St Peters. Kebunnya meliputi
        kuranglebih 23 hektar tanah, yang kebanyakannya adalah dikenal sebagai bukit
        Vatican (Vatican Hill). Taman-taman Vatican dibuat selama era Renaissance dan
        Baroque, dan dihiasi dengan ukiran-ukiran dan air-air mancur. Anda dapat
        berjalan menapak tilasi langkah-langkah para pope yang telah jalan-jalan
        sepanjang taman-taman yang terpelihara baik selama berabad-abad. Anda akan
        melihat tanaman-tanaman cantik memukau, jalur jalan kaki yang teduh, dan
        air-air mancur yang indah. Taman-taman Vatican menonjolkan sebuah rancangan
        khas abad ke-16 dengan menitik beratkan pada susunan bangunan, kesenian ukir,
        air, dan bentuk susunan. Jika anda mencari banyak bunga-bunga dan warna-warni,
        tidak akan anda dapatkan di taman ini. Tetapi, tetap menjadi sesuatu yang
        berharga untuk mengunjunginya.&nbsp; </p>
        <p>Taman-taman Vatican dibuat pada tahun 1279,
        saat Pope Nicholas III memindahkan tempat tinggal pendeta-pendeta pope dari
        istana Lateran ke Vatican. Pope itu kemudian menanam sekuntum bunga anggrek
        (pomerium), seluas tanah berumput (pratellum) dan sebuah taman atau kebun
        (viridurium). Taman itu dikelilingi oleh tembok tinggi yang dimaksudkan untuk
        melindungi taman tersebut. Taman-taman ini dikatakan akan menjadi tempat di
        mana Pope itu akan bermeditasi secara khusus bersendiri sedangkan ia menikmati
        alam sekitarnya.</p>
        <p>Taman-taman yang sekarang ini memiliki
        beragam bangunan-bangunan, tembok-tembok perlindungan dan monumen-monumen yang
        dibuat pada abad ke-9. Terdapat juga tanah-tanah tempat tumbuhnya tanaman
        bunga-bunga, halaman tanah berumput dan 3 hektar bagian hutan. Sebagai
        tambahan, terdapat juga sejumlah air-air mancur yang menyejukkan taman
        tersebut. Oleh sebab inilah memiliki atmosfir yang sejuk dan menyegarkan yang
        membuatnya sebagai satu di antara tempat termasyhur untuk disinggahi dalam
        kunjungan ke kota Vatican. Dengan kombinasi dari bangunan-bangunan
        arsitekturnya, tanaman-tanaman hijaunya, bunga-bunganya dan air-air mancurnya
        yang menyejukkan, taman Vatican sungguh merupakan tempat tenang damai untuk
        tujuan tur.</p>
        <p>Satu-satunya jalan untuk melihat taman-taman
        tersebut ialah dengan membuat perjanjian dengan tur terpandu (setengahnya
        menggunakan bus dan setengahnya dengan hanya berjalan kaki) melalui kewenangan
        Vatican sebab mereka tidak berkenan membiarkan orang-orang berkeluyuran tanpa
        dipandu melewati taman-taman. Bea tur tersebut sebesar 31 euro dan termasuk :
        tur resmi terpandu taman-taman ini, masuk ke musium Vatican tanpa dipandu, dan
        sewa media suara (audio) dari panduan-panduan. Kunjungan taman-taman Vatican
        tersedia setiap hari kecuali minggu dan hari-hari libur besar Vatican. Tur
        tersebut juga disiapkan dalam banyak bahasa yang berbeda : bahasa Inggris,
        Itali, Spanyol, Perancis, Jerman, dan lain lainnya.&nbsp;</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417337078_3538666904_2db0857977_b.jpg',
                'address' => 'Vatican',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 110,
                'country_id' => 8,
                'name' => 'St Peter&#039;s Square',
                'slug' => 'st-peters-square',
                'hotels' => '',
                'latitude' => '41.9022182',
                'longitude' => '12.4567965',
                'attractions' => '<p>St Peter&rsquo;s Square atau yang dalam bahasa
        aslinya Piazza San Pietro di Italia berada langsung di depan St Peter’s
        Basilica di kota Vatikan. Ia berfungsi sebagai jalan masuk utama kota Vatikan.
        Bidang tanah lapang ini dirancang oleh Gian Lorenzo Bernini dari tahun 1656
        hingga tahun 1667 dengan dua baris pilar-pilar yang agak melingkar sebagai
        pesan tangan-tangan yang sedang menerima kedatangan tamu-tamu yang datang ke
        gereja, dengan 284 tiang silinder diatur dalam 4 baris yang diatasnya berdiri
        140 patung pendeta suci (saints). Ia disusun dan diatur selama pelantikkan para
        pendeta oleh Alexander VII dan of Clement IX (1657-1667). </p>
        <p>Pada bagian tengahnya akan anda jumpai satu
        tugu kotak berujung kecil (obelisk) dari Mesir yang dibawa ke Roma oleh
        Caligula pada tahun 38 masehi dari Heliopolis, yang berada di atas daratan dari
        endapan (delta) sungai Nil. Air-air mancur terletak pada kedua sisi dari
        obelisk ini. Satu yang berkedudukan di bagian kanan diletakkan di sana oleh
        Bernini dan dibuat oleh Carlo Maderno. Satu lainnya dibuat oleh Carlo Fontana. </p>
        <p>Ribuan tamu berkumpul bersama di bidang
        lapang ini untuk mendengar pemanjatan doa dari pendeta pope atau untuk
        berpartisipasi di kumpulan orang banyak, terutama pada saat liburan keagamaan
        seperti Natal dan Easter. Akan tetapi di siang hari Peter&rsquo;s Square yang masyhur
        terdengar berdengung disebabkan suara orang-orang yang bergerak acak-acakan
        dari satu tempat mengagumkan ke tempat mengagumkan lainnya. Bidang lapang
        inipun ialah tempat baik untuk sekedar duduk-duduk saja, sedang orang-orang
        akan menyaksikan tatkala anda masuk ke hal yang menakjubkan dari tempat
        berkumpul yang penting ini.&nbsp;</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417337185_St_Peters_Square_Vatican_City_-_April_2007.jpg',
                'address' => 'Piazza San Pietro, Vatican City',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 111,
                'country_id' => 8,
                'name' => 'Museo Nationale Romano',
                'slug' => 'museo-nationale-romano',
                'hotels' => '',
                'latitude' => '41.87194',
                'longitude' => '12.56738',
                'attractions' => '<p>Museo Nazionale Romano atau Museum Nasional Romawi adalah museum arkeologi yang terletak di Roma, Italia. Museum ini didirikan pada tahun 1889 dan merupakan salah satu museum arkeologi terbesar dan paling penting di dunia. Museum ini memiliki koleksi seni dan artefak dari Roma kuno yang sangat lengkap dan beragam, dan merupakan saksi bisu dari sejarah dan kebudayaan Romawi.</p>
        <p>Koleksi museum mencakup artefak dari zaman kuno seperti patung-patung, lukisan, fresko-fresko, perhiasan, dan benda-benda lainnya yang ditemukan di seluruh kota Roma. Beberapa koleksi terkenal di museum ini termasuk:</p>
        <ol>
        <li>Koleksi Artefak dari Forum Romawi: Koleksi ini mencakup patung-patung, perhiasan, dan benda-benda lainnya yang ditemukan di Forum Romanum, pusat politik dan sosial di Roma Kuno.</li>
        <li>Koleksi Artefak dari Pompeii dan Herculaneum: Koleksi ini mencakup artefak yang ditemukan di kota-kota kuno Pompeii dan Herculaneum yang hancur oleh letusan Gunung Vesuvius pada tahun 79 Masehi.</li>
        <li>Koleksi Numismatik: Koleksi ini mencakup koin-koin kuno dan medalion dari Roma Kuno dan zaman Bizantium.</li>
        <li>Koleksi Seni Patung: Koleksi ini mencakup patung-patung dari periode Romawi kuno, termasuk patung-patung kekaisaran dan dewa-dewa Romawi.</li>
        </ol>
        <p>Museo Nazionale Romano adalah tempat yang sempurna untuk mengenal sejarah dan kebudayaan Roma Kuno. Museum ini menawarkan pengalaman belajar yang mendalam dan menakjubkan, dan pasti akan memukau siapa saja yang tertarik pada sejarah, seni, dan arkeologi.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417339145_Ermafrodito,_museo_nazionale_romano_02.JPG',
                'address' => '',
                'created_at' => null,
                'updated_at' => '2023-02-26 19:58:29',
            ],
            [
                'id' => 112,
                'country_id' => 8,
                'name' => 'Colosseum',
                'slug' => 'colosseum',
                'hotels' => '',
                'latitude' => '41.8900513',
                'longitude' => '12.4940959',
                'attractions' => '<p>Colosseum atau Colosseo merupakan arena gladiator yang sangat terkenal di Roma, Italia. Bangunan ini dibangun pada abad ke-1 Masehi dan menjadi simbol dari kekuasaan dan kemegahan Kekaisaran Romawi. Berikut ini adalah beberapa hal yang dapat kamu temukan di Colosseum:</p>
        <ol>
        <li>Arsitektur: Colosseum merupakan bangunan arsitektur yang sangat indah dan kompleks, dengan kapasitas hingga 50.000 orang. Bangunan ini memiliki desain elips yang unik dan terdiri dari empat tingkat dengan banyak pintu masuk dan keluar.</li>
        <li>Sejarah: Colosseum menjadi saksi bisu dari sejarah dan kebudayaan Kekaisaran Romawi. Bangunan ini digunakan untuk berbagai macam acara, mulai dari pertunjukan gladiator hingga festival dan kompetisi atletik.</li>
        <li>Tur: Colosseum saat ini terbuka untuk turis dan kamu dapat mengunjungi bangunan ini untuk mengetahui lebih lanjut tentang sejarah dan arsitektur Colosseum. Terdapat banyak tur yang tersedia, termasuk tur audio yang memungkinkan kamu untuk menjelajahi bangunan secara mandiri.</li>
        <li>Museum: Terdapat museum di dalam Colosseum yang memamerkan artefak dan benda-benda dari zaman Romawi Kuno, termasuk pedang, perisai, dan perlengkapan lainnya yang digunakan oleh gladiator dalam pertunjukan mereka.</li>
        </ol>
        <p>Colosseum adalah salah satu tempat paling terkenal di dunia dan menjadi simbol dari kekuasaan dan kemegahan Kekaisaran Romawi. Tempat ini tidak hanya menawarkan pengalaman yang indah secara visual, tetapi juga merupakan saksi bisu dari sejarah dan kebudayaan yang sangat penting bagi peradaban manusia. Pastikan kamu mengunjungi Colosseum saat berada di Roma, karena tempat ini benar-benar layak untuk dikunjungi.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417355399_1024px-Colosseum_in_Rome,_Italy_-_April_2007.jpg',
                'address' => 'Piazza del Colosseo, 1, 00184 Rome',
                'created_at' => null,
                'updated_at' => '2023-02-26 19:59:32',
            ],
            [
                'id' => 113,
                'country_id' => 8,
                'name' => 'Borghese Gallery',
                'slug' => 'borghese-gallery',
                'hotels' => '',
                'latitude' => '41.9117663',
                'longitude' => '12.4896275',
                'attractions' => '<p>Borghese Gallery adalah sebuah museum seni yang terletak di Roma, Italia. Museum ini terkenal karena kumpulan seni dan arsitektur Renaisans dan Barok yang luar biasa. Beberapa karya seni terkenal yang dipamerkan di Borghese Gallery antara lain:</p>
        <ol>
        <li>"Apollo dan Daphne" karya Gian Lorenzo Bernini</li>
        <li>"David" karya Gian Lorenzo Bernini</li>
        <li>"Venus Victrix" karya Antonio Canova</li>
        <li>"Amor dan Psyche" karya Antonio Canova</li>
        <li>"Rape of Proserpine" karya Gian Lorenzo Bernini</li>
        <li>"Pauline Bonaparte" karya Antonio Canova</li>
        <li>"Aurora" karya Guido Reni</li>
        <li>"Sacred and Profane Love" karya Titian</li>
        </ol>
        <p>Selain itu, Borghese Gallery juga memiliki koleksi lukisan, termasuk karya-karya dari Raphael, Caravaggio, dan Rubens. Museum ini merupakan tempat yang populer dikunjungi oleh para wisatawan dan penggemar seni yang berkunjung ke Roma.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417355660_Lanfranco,_Giovanni_-The_Council_of_Gods_-_1624-25.jpg',
                'address' => 'Piazzale del Museo Borghese, 5, 00197 Rome',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:00:13',
            ],
            [
                'id' => 114,
                'country_id' => 8,
                'name' => 'Al Ponte Mocenigo di kota Venice',
                'slug' => 'al-ponte-mocenigo-di-kota-venice',
                'hotels' => '',
                'latitude' => '45.44089',
                'longitude' => '12.33056',
                'attractions' => '<p>Al Ponte Mocenigo adalah sebuah hotel kecil yang terletak di kota Venice, Italia. Hotel ini terletak di lingkungan Santa Croce yang tenang, dekat dengan beberapa atraksi terkenal seperti Basilika Santa Maria Gloriosa dei Frari dan Scuola Grande di San Rocco.</p>
        <p>Hotel Al Ponte Mocenigo memiliki 10 kamar yang indah dan luas, dihiasi dengan furnitur klasik dan aksen modern. Semua kamar dilengkapi dengan fasilitas modern seperti TV layar datar, akses Wi-Fi gratis, dan kamar mandi pribadi dengan perlengkapan mandi gratis.</p>
        <p>Hotel ini juga menawarkan sarapan Italia yang lezat setiap pagi, serta bar untuk tamu yang ingin bersantai dan menikmati minuman. Meskipun hotel ini terletak di area yang tenang, namun pusat kota Venice yang ramai hanya berjarak 15 menit berjalan kaki dari hotel.</p>
        <p>Al Ponte Mocenigo telah mendapatkan reputasi yang baik karena pelayanan yang ramah dan profesional dari stafnya, serta lokasinya yang strategis dan kenyamanan fasilitasnya. Hotel ini merupakan pilihan yang baik bagi para wisatawan yang ingin menghabiskan waktu di kota Venice dengan suasana yang tenang dan nyaman.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417356192_Palazzi_Giustinian_and_Ca_Foscari_from_Palazzo_Grassi.JPG',
                'address' => 'S. Croce, 2063, 30135 Venice',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:00:58',
            ],
            [
                'id' => 115,
                'country_id' => 8,
                'name' => 'Cinque Terre',
                'slug' => 'cinque-terre',
                'hotels' => '',
                'latitude' => '44.0990492',
                'longitude' => '9.7374851',
                'attractions' => '<p>Cinque Terre adalah sebuah kawasan pesisir yang terletak di Liguria, Italia. Kawasan ini terdiri dari lima desa kecil yang terletak di atas tebing-tebing yang curam dengan pemandangan laut yang indah. Ada banyak hal yang bisa dilihat dan dilakukan di Cinque Terre, di antaranya:</p>
        <ol>
        <li>Jelajahi Desa-Desa: Lima desa kecil yang terletak di Cinque Terre (Monterosso al Mare, Vernazza, Corniglia, Manarola, dan Riomaggiore) memiliki karakteristik yang unik dan menarik untuk dijelajahi. Setiap desa memiliki rumah-rumah berwarna cerah yang dihiasi dengan bunga dan teras kecil yang menghadap ke laut.</li>
        <li>Hiking: Cinque Terre memiliki jaringan hiking trails yang indah yang menghubungkan semua desa kecil. Beberapa trek yang paling terkenal adalah Sentiero Azzurro dan Via dell\'Amore. Trekking ini menawarkan pemandangan spektakuler dari pesisir Liguria dan bukit-bukit hijau yang mengelilingi desa-desa.</li>
        <li>Pantai: Desa Monterosso al Mare memiliki pantai berpasir yang luas, tempat yang sempurna untuk bersantai dan menikmati sinar matahari. Selain itu, di dekat desa Vernazza juga terdapat pantai kecil dan indah.</li>
        <li>Wine Tasting: Cinque Terre terkenal dengan produksi anggur yang lezat dan unik. Ada banyak tempat untuk mencicipi anggur lokal dan mempelajari tentang cara produksi dan sejarahnya.</li>
        <li>Makanan: Kawasan ini juga terkenal dengan masakan khas Liguria yang lezat, seperti pesto Genovese, focaccia, dan trofie al pesto. Jangan lupa mencicipi makanan khas Liguria saat berkunjung ke Cinque Terre.</li>
        <li>Pemandangan: Cinque Terre menawarkan pemandangan yang menakjubkan dan luar biasa. Ada banyak tempat yang indah untuk menikmati pemandangan, seperti Piazza di Riomaggiore, Piazza Marconi di Manarola, atau kota tua Vernazza.</li>
        </ol>
        <p>Demikian beberapa hal yang dapat dilihat dan dilakukan di Cinque Terre, semoga dapat membantu Anda merencanakan kunjungan ke tempat yang indah ini.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417356395_Corniglia_costa.jpg',
                'address' => 'Riomaggiore La Spezia',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:01:34',
            ],
            [
                'id' => 116,
                'country_id' => 8,
                'name' => 'Sassi Di Matera',
                'slug' => 'sassi-di-matera',
                'hotels' => '',
                'latitude' => '40.6739575',
                'longitude' => '16.5801486',
                'attractions' => '<p>Sassi di Matera adalah kawasan kuno yang terletak di Basilicata, Italia, yang terkenal dengan rumah batunya yang indah dan terukir di tebing-tebing berbatu. Sassi di Matera juga merupakan salah satu situs Warisan Dunia UNESCO dan menawarkan banyak hal yang menarik untuk dilihat dan dilakukan, di antaranya:</p>
        <ol>
        <li>Ruma Batu: Sassi di Matera terkenal dengan rumah batunya yang indah dan terukir di tebing-tebing berbatu. Beberapa rumah batu ini diubah menjadi hotel, toko, dan restoran, yang membuat pengunjung dapat merasakan suasana sejarah yang unik.</li>
        <li>Gereja-gereja Kuno: Kawasan Sassi di Matera memiliki banyak gereja dan kapel tua yang indah dan menarik untuk dikunjungi. Beberapa gereja yang terkenal di kawasan ini adalah Gereja Santa Maria de Idris, Gereja San Pietro Caveoso, dan Gereja San Giovanni Battista.</li>
        <li>Museum: Ada beberapa museum yang menarik di Sassi di Matera yang menawarkan wawasan tentang sejarah dan kebudayaan kawasan ini. Museum yang terkenal antara lain adalah Museum Arkeologi Nazionale di Domenico Ridola dan Casa Grotta di Vico Solitario.</li>
        <li>Pemandangan: Sassi di Matera menawarkan pemandangan yang menakjubkan dari kota tua yang terletak di atas tebing batu, terutama saat matahari terbenam. Ada beberapa tempat yang indah untuk menikmati pemandangan seperti Piazza del Duomo, Belvedere, dan Piazza Vittorio Veneto.</li>
        <li>Kuliner: Sassi di Matera memiliki beberapa restoran dan kafe yang menawarkan masakan Italia dan Basilicata yang lezat. Pengunjung dapat menikmati makanan khas seperti orecchiette dengan kacang merah, bruschetta dengan tomat segar, dan mozzarella di bufala.</li>
        </ol>
        <p>Demikian beberapa hal yang dapat dilihat dan dilakukan di Sassi di Matera. Pengunjung dapat merasakan suasana sejarah yang unik dan menikmati keindahan alam serta kuliner khas Basilicata yang lezat di kawasan ini.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417356603_Basilicata_Matera6_tango7174.jpg',
                'address' => 'Via Sinni, Matera MT',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:01:59',
            ],
            [
                'id' => 117,
                'country_id' => 8,
                'name' => 'Grotta Azzurra',
                'slug' => 'grotta-azzurra',
                'hotels' => '',
                'latitude' => '40.5562427',
                'longitude' => '14.2038122',
                'attractions' => '<p>Grotta Azzurra atau Blue Grotto adalah sebuah gua laut yang terletak di pulau Capri, Italia. Gua ini terkenal dengan airnya yang berwarna biru dan kristal yang terbentuk oleh pantulan cahaya dari bawah air. Ada banyak hal yang dapat dilakukan di Grotta Azzurra, di antaranya:</p>
        <ol>
        <li>Menjelajahi Gua: Pengunjung dapat menaiki perahu kayu kecil untuk masuk ke dalam gua dan menikmati keindahan airnya yang biru dan kristal. Saat masuk ke dalam gua, pengunjung akan merasakan suasana yang indah dan magis karena pantulan cahaya di dalam gua.</li>
        <li>Berenang atau Snorkeling: Pengunjung juga dapat berenang atau snorkeling di dekat Grotta Azzurra untuk melihat keindahan bawah laut yang indah.</li>
        <li>Menikmati Pemandangan: Grotta Azzurra juga menawarkan pemandangan yang indah dan menakjubkan, terutama saat matahari terbenam. Ada beberapa tempat yang indah untuk menikmati pemandangan seperti Faraglioni, kota Capri, dan Marina Piccola.</li>
        <li>Berbelanja dan Makanan: Di dekat Grotta Azzurra terdapat banyak toko-toko kecil yang menawarkan kerajinan tangan dan suvenir, serta restoran dan kafe yang menyajikan masakan lokal dan Italia yang lezat.</li>
        <li>Ke Pulau Capri: Pengunjung juga dapat mengunjungi pulau Capri dan menjelajahi tempat-tempat menarik lainnya di sana, seperti Villa San Michele, Monte Solaro, dan Jalan Tragara.</li>
        </ol>
        <p>Demikian beberapa hal yang dapat dilakukan di Grotta Azzurra. Pengunjung dapat menikmati keindahan alam dan suasana yang magis di gua yang indah ini, serta menjelajahi tempat-tempat menarik lainnya di sekitar Pulau Capri.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417356767_Grotta_azzurra.jpg',
                'address' => 'Via Grotta Azzurra, Anacapri NA',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:02:31',
            ],
            [
                'id' => 118,
                'country_id' => 8,
                'name' => 'Pengalaman Minum Minuman Anggur Chianti',
                'slug' => 'pengalaman-minum-minuman-anggur-chianti',
                'hotels' => '',
                'latitude' => '41.87194',
                'longitude' => '12.56738',
                'attractions' => '<p>Minuman anggur Chianti adalah anggur merah yang diproduksi di wilayah Chianti di Tuscany, Italia. Anggur Chianti memiliki cita rasa yang kaya dan kompleks, dan sering dianggap sebagai salah satu anggur terbaik di Italia. Berikut adalah beberapa pengalaman minum minuman anggur Chianti yang dapat Anda rasakan di Italia:</p>
        <ol>
        <li>Wine Tasting: Anda dapat mengunjungi banyak peternakan dan perkebunan anggur di daerah Chianti yang menawarkan tur anggur dan sesi wine tasting. Selama sesi wine tasting, Anda akan diajari cara merasakan anggur dan membedakan karakteristiknya. Selain itu, Anda juga dapat mengetahui bagaimana anggur Chianti diproduksi dan bagaimana penanaman anggur di daerah Chianti.</li>
        <li>Makan Malam yang Menyertakan Anggur Chianti: Anda dapat menikmati makan malam di restoran di Tuscany yang menawarkan anggur Chianti sebagai pilihan minuman. Kombinasi makanan lezat dengan anggur Chianti akan membuat pengalaman makan malam Anda menjadi lebih istimewa.</li>
        <li>Membeli Botol Anggur Chianti: Anda dapat membeli botol anggur Chianti dari peternakan anggur atau toko anggur di Tuscany. Botol anggur Chianti dapat dijadikan sebagai oleh-oleh khas dari Italia, atau Anda dapat menyimpannya sebagai kenang-kenangan dari pengalaman minum anggur Chianti Anda.</li>
        <li>Bersantai di Tuscany: Tuscany merupakan tempat yang indah dan tenang untuk menghabiskan waktu dengan minum anggur Chianti. Anda dapat menikmati pemandangan yang indah dari perbukitan, atau hanya bersantai di balkon sambil menikmati segelas anggur Chianti.</li>
        </ol>
        <p>Demikian beberapa pengalaman minum anggur Chianti yang dapat Anda rasakan di Italia. Tidak hanya dapat menikmati minuman anggur yang lezat, tetapi juga dapat mengetahui tentang produksi dan sejarah anggur Chianti, serta menikmati keindahan alam Tuscany yang menakjubkan.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417357104_Chianti_wine.jpg',
                'address' => '',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:03:25',
            ],
            [
                'id' => 119,
                'country_id' => 8,
                'name' => 'Trulli di Alberobello',
                'slug' => 'trulli-di-alberobello',
                'hotels' => '',
                'latitude' => '40.7864228',
                'longitude' => '17.2409304',
                'attractions' => '<p>Alberobello adalah sebuah kota yang terletak di Puglia, Italia, dan terkenal dengan rumah-rumah tradisional yang disebut Trulli. Trulli adalah rumah-rumah batu khas Puglia dengan atap kerucut yang menakjubkan. Berikut adalah beberapa pengalaman yang dapat Anda rasakan saat mengunjungi Trulli di Alberobello:</p>
        <ol>
        <li>Berjalan-jalan di Rione Monti: Rione Monti adalah kawasan bersejarah yang paling terkenal di Alberobello dan terdapat banyak Trulli yang dapat dilihat di sini. Anda dapat berjalan-jalan di sekitar lingkungan ini dan menikmati suasana kota yang tradisional dan bersejarah.</li>
        <li>Mengunjungi Museum Trulli: Museum Trulli adalah museum kecil yang terletak di Rione Monti dan menawarkan informasi tentang sejarah dan arsitektur Trulli. Museum ini juga menyajikan koleksi benda-benda tradisional yang digunakan oleh penduduk lokal.</li>
        <li>Makan di Restoran Lokal: Anda dapat mencicipi hidangan lokal dan khas Puglia di restoran yang terletak di antara rumah-rumah Trulli. Restoran-restoran tersebut menawarkan hidangan seperti orecchiette (pasta khas Puglia), antipasti, dan anggur lokal yang lezat.</li>
        <li>Berbelanja di Toko-toko Kecil: Di sekitar Rione Monti terdapat banyak toko-toko kecil yang menjual barang-barang kerajinan tangan khas Puglia seperti keramik, tekstil, dan souvenir.</li>
        <li>Menginap di Trulli: Beberapa Trulli telah diubah menjadi akomodasi wisata yang unik. Anda dapat menginap di salah satu Trulli dan merasakan pengalaman tinggal di rumah tradisional yang unik dan bersejarah.</li>
        </ol>
        <p>Demikian beberapa pengalaman yang dapat Anda rasakan saat mengunjungi Trulli di Alberobello. Kota ini menawarkan pengalaman yang unik dan menarik bagi pengunjung yang ingin mengetahui lebih dalam tentang sejarah dan budaya lokal Puglia, serta menikmati keindahan arsitektur Trulli yang menakjubkan.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417357249_1024px-Alberobello_Trulli.jpg',
                'address' => 'Alberobello, Bari',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:04:00',
            ],
            [
                'id' => 120,
                'country_id' => 8,
                'name' => 'Ponte Vecchio',
                'slug' => 'ponte-vecchio',
                'hotels' => '',
                'latitude' => '43.767925',
                'longitude' => '11.2531435',
                'attractions' => '<p>Ponte Vecchio adalah sebuah jembatan terkenal yang terletak di kota Florence, Italia. Jembatan ini dibangun pada abad ke-14 dan menjadi salah satu landmark paling ikonik di kota ini. Berikut adalah beberapa hal yang dapat ditemukan di Ponte Vecchio:</p>
        <ol>
        <li>Toko Perhiasan: Ponte Vecchio terkenal dengan toko-toko perhiasan yang menjual berbagai macam perhiasan seperti cincin, kalung, gelang, dan anting-anting. Toko-toko perhiasan tersebut dikelola oleh para pengrajin perhiasan yang telah mewarisi keterampilan mereka dari generasi ke generasi.</li>
        <li>Pemandangan yang Menakjubkan: Dari Ponte Vecchio, Anda dapat menikmati pemandangan yang menakjubkan dari sungai Arno dan kota Florence. Anda dapat berjalan-jalan di sepanjang jembatan sambil menikmati pemandangan yang indah.</li>
        <li>Restoran dan Kafe: Di Ponte Vecchio terdapat beberapa restoran dan kafe yang menawarkan hidangan dan minuman lezat. Anda dapat menikmati hidangan tradisional Italia seperti pasta, pizza, dan gelato di restoran atau kafe tersebut.</li>
        <li>Toko Souvenir: Selain toko perhiasan, di Ponte Vecchio terdapat beberapa toko souvenir yang menjual barang-barang kerajinan tangan khas Florence seperti keramik, tekstil, dan lukisan.</li>
        <li>Sejarah: Ponte Vecchio memiliki sejarah yang panjang dan terkait dengan kota Florence yang kaya akan budaya dan seni. Jembatan ini menjadi tempat yang penting bagi para seniman, pengrajin, dan pedagang di masa lalu dan terus menjadi simbol kota Florence hingga sekarang.</li>
        </ol>
        <p>Demikian beberapa hal yang dapat ditemukan di Ponte Vecchio. Jembatan ini menawarkan pengalaman yang unik dan berbeda dari tempat-tempat wisata lainnya di kota Florence.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417357346_640px-Ponte_Vecchio_visto_dal_ponte_di_Santa_Trinita.jpg',
                'address' => 'Ponte Vecchio, Firenze',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:04:26',
            ],
            [
                'id' => 121,
                'country_id' => 8,
                'name' => 'Cascata delle Marmore',
                'slug' => 'cascata-delle-marmore',
                'hotels' => '',
                'latitude' => '42.552448',
                'longitude' => '12.714958',
                'attractions' => '<div>Air Terjun -bahasa Italianya Cascata delle- Marmore (the Marmore’s Falls) adalah suatu air terjun buatan yang dibuat oleh orang-orang Romawi kuno. Ketinggian keseluruhannya adalah 165 m, membuatnya satu di antara air terjun tertinggi di Eropa dan air terjun buatan tertinggi di dunia. Dari tiga bagiannya, bagian atas/puncak adalah yang terpanjang setinggi 83 meter. Ia berada 7,70 km dari Kota Terni, ibukota propinsi dari regional Umbria di Itali. Sumbernya adalah sebagian air sungai Velino sedang sisanya mengalir airnya ke pembangkit energi listrik tenaga air, setelah mengalir melalui danau Piediluco dekat masyarakat Marmore. Ia tumpah kedalam lembah bawahnya yang telah terbentuk oleh sungai Nera. Alirannya dihidup dan matikan sesuai dengan jadwal berlangsung kerjanya yang diberitahukan pada umum agar memuaskan kebutuhan para turis, dan juga perusahaan. Para turis berusaha untuk ada di sana ketika gerbangnya dibuka untuk melihat dorongan air pertamanya yang mendadak dan kuat. Pemandangan terbaiknya adalah dari bawah, tetapi rute jalan bagi para turis dari atas ke bawah mempunyai banyak tempat sebagai titik pandang, dan ia luar biasa indahnya. &nbsp;&nbsp;</div><div><br></div><div>Air terjun Marmore adalah sebuah ciri keutamaan daratan yang terlihat (landscape) yang tetap terjaga dari kerusakkan dan dimakmurkan oleh kehidupan tumbuhan dan hewan - flora dan fauna - yang kaya ragam, dan memiliki tontonan yang didatangkan dari spontanitas alam dan kecerdasan manusia. Asal mereka, sesungguhnya, dengan menilik kembali ke zaman Romawi, ketika lubang Curia Romawi pertama kali digali. Di masa kuno, sungai Velino menciptakan tanah berawa yang mana orang-orang Romawi kuno percaya ia menimbulkan satu masalah penyakit &nbsp;di sekitar kota Rieti. Untuk memecahkan masalah itu, penasihat-penasihat Romawi pada saat itu memerintahkan pembangunan kanal yang akhirnya mewujudkan air terjun ini. Dengan kerja sistem pipa saluran air ini, aliran air dari daerah Velino diarahkan menuju ke daerah Nera melalui suatu rute yang mencakup turunmya air dalam jumlah tepat, yang saat ini, adalah mungkin untuk mengagumi air-terjun air-terjun cantik ini.&nbsp;</div><div><br></div><div>Jika anda merencanakan akan kunjungan sendiri, anda pasti membutuhkan sebuah mobil. Pergi ke kota Terni (sekitar satu jam arah utara Roma), dan ikuti tanda"Cascate delle Marmore". Sekiranya anda makin mendekat, akan ada dua tempat untuk memulai, "Superiore", bagian atas daripada air terjun, dan "Inferiore", bagian bawah daripada air terjun. Terdapat banyak jalan setapak untuk memasuki pojok tersembunyi daripada kebun. Kejauhan jaraknya dan tingkat kesulitannya yang berbeda-beda memberikan pengunjung pilihan untuk memilih jalur jalan setapak yang&nbsp;</div><div>paling pantas. Kegiatan menaiki rakit (rafting), menaiki sampan kano (canoeing), dan menjerami air terjun (canyoning) dipisahkan khusus untuk pemesanan oleh mereka yang mencari getaran jiwa yang kuat.&nbsp;</div><div><br></div>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1417357445_Cascatemarmore.jpg',
                'address' => 'Cascata delle Marmore, Terni',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 122,
                'country_id' => 15,
                'name' => 'Istana Amalienborg',
                'slug' => 'istana-amalienborg',
                'hotels' => '',
                'latitude' => '55.6840588',
                'longitude' => '12.5930201',
                'attractions' => '<p>Istana Amalienborg adalah istana kerajaan di Copenhagen, Denmark dan merupakan kediaman resmi dari keluarga kerajaan Denmark. Istana ini terdiri dari empat bangunan yang terletak di sekitar Alun-alun Amalienborg, yaitu Istana Christian VII, Istana Frederik VIII, Istana Christian IX, dan Istana Christian VIII.</p>
        <p>Pengunjung bisa melihat Istana Amalienborg dari luar dengan bebas tanpa biaya masuk. Namun, jika ingin mengunjungi museum dan kediaman kerajaan yang terdapat di dalam istana, maka harus membeli tiket masuk. Pada tur museum, pengunjung dapat melihat interior istana yang indah, termasuk kamar tidur, ruang tamu, dan aula istana, serta koleksi seni dan barang antik dari keluarga kerajaan Denmark.</p>
        <p>Satu tempat yang wajib dikunjungi di Istana Amalienborg adalah Museum Amalienborg, yang terletak di Istana Christian VIII. Museum ini berisi koleksi seni rupa dan kerajinan tangan, perabotan, dan pakaian yang digunakan oleh keluarga kerajaan Denmark selama berabad-abad. Di sini juga dapat melihat koleksi perhiasan yang menakjubkan dan mahal.</p>
        <p>Selain museum, pengunjung dapat mengunjungi ruang tamu yang terdapat di empat bangunan istana untuk melihat tata letak klasik dan interior yang indah. Selama musim panas, keluarga kerajaan Denmark sering muncul di balkon istana untuk merayakan hari ulang tahun mereka dan acara resmi lainnya.</p>
        <p>Namun, perlu diingat bahwa ketika keluarga kerajaan tinggal di Istana Amalienborg, beberapa ruangan akan ditutup untuk pengunjung. Oleh karena itu, sebaiknya cek jadwal dan waktu kunjungan terlebih dahulu agar tidak kecewa.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419541735_1024px-Amalienborg_slott_6.jpg',
                'address' => 'Amalienborg Slotsplads 5, 1257 København K',
                'created_at' => null,
                'updated_at' => '2023-02-22 21:58:32',
            ],
            [
                'id' => 123,
                'country_id' => 15,
                'name' => 'Copenhagen City Hall',
                'slug' => 'copenhagen-city-hall',
                'hotels' => '',
                'latitude' => '55.6752833',
                'longitude' => '12.5701632',
                'attractions' => '<p>Balai Kota Copenhagen, atau Københavns Rådhus, adalah sebuah bangunan bersejarah yang terletak di pusat kota Copenhagen, Denmark. Bangunan ini didirikan pada tahun 1905 dan digunakan sebagai kantor pemerintahan kota Copenhagen, serta tempat untuk mengadakan acara-acara resmi seperti upacara pernikahan dan penerimaan penghargaan.</p>
        <p>Selain fungsi pemerintahannya, Balai Kota Copenhagen juga menjadi salah satu tempat wisata yang populer di kota ini. Banyak pengunjung yang datang ke sini untuk melihat arsitektur bangunan yang indah dan mengagumkan. Di dalam balai kota, terdapat beberapa ruangan yang terbuka untuk umum, seperti ruang penerimaan tamu, ruang sidang, dan ruang upacara pernikahan.</p>
        <p>Pada tur yang dipandu, pengunjung dapat mempelajari sejarah balai kota dan mengunjungi beberapa ruangan yang terbuka untuk umum, termasuk balai sidang utama yang sangat megah. Di sini juga terdapat museum kecil yang berisi sejarah pemerintahan kota, termasuk di antaranya koleksi lukisan dan patung karya seniman Denmark terkenal.</p>
        <p>Selain bangunan Balai Kota, di sekitarnya juga terdapat Taman Rådhuspladsen yang luas, yang menjadi tempat yang populer untuk berkumpul dan bersantai di kota Copenhagen. Selain itu, di dekat Balai Kota terdapat beberapa toko, restoran, dan kafe yang ramai, yang membuat kawasan ini menjadi pusat kegiatan dan kehidupan sosial di kota Copenhagen.</p>
        
        <p>Ada banyak pilihan hotel di Kopenhagen yang cocok untuk semua anggaran dan preferensi wisatawan. Berikut adalah beberapa hotel di Kopenhagen yang dapat menjadi pilihan:</p>
        <ol>
        <li>
        <p><a title="Hotel Danmark" href="https://www.booking.com/hotel/dk/hoteldanmarkcopenhagen.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Danmark</a> - Terletak di pusat kota Kopenhagen, hotel ini memiliki lokasi yang sangat baik dan dekat dengan atraksi seperti Tivoli Gardens, Nyhavn, dan Amalienborg Palace.</p>
        </li>
        <li>
        <p><a title="Scandic Palace Hotel" href="https://www.booking.com/hotel/dk/scandic-palace.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Scandic Palace Hotel</a> - Terletak di pusat kota Kopenhagen, hotel bergaya art deco ini berjarak beberapa menit dari Tivoli Gardens, City Hall Square, dan banyak atraksi lainnya.</p>
        </li>
        <li>
        <p><a title="Nimb Hotel" href="https://www.booking.com/hotel/dk/nimb.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Nimb Hotel</a> - Terletak di Tivoli Gardens, hotel mewah ini menawarkan kamar-kamar elegan dan pemandangan taman yang indah.</p>
        </li>
        <li>
        <p><a title="Hotel Skt. Petri" href="https://www.booking.com/hotel/dk/hotel-skt-petri.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Skt. Petri</a> - Terletak di pusat kota Kopenhagen, hotel modern ini berjarak beberapa menit dari Istana Christiansborg, Tivoli Gardens, dan kawasan pejalan kaki populer di Str&oslash;get.</p>
        </li>
        <li>
        <p><a title="citizenM Copenhagen Radhuspladsen" href="https://www.booking.com/hotel/dk/citizenm-copenhagen-radhuspladsen.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">citizenM Copenhagen Radhuspladsen</a> - Terletak di City Hall Square, hotel bergaya modern ini menawarkan kamar-kamar dengan teknologi canggih dan lokasi yang sangat baik untuk menjelajahi kota.</p>
        </li>
        <li>
        <p><a title="Andersen Boutique Hotel" href="https://www.booking.com/hotel/dk/andersen-hotel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Andersen Boutique Hotel</a> - Terletak di pusat kota Kopenhagen, hotel bergaya Skandinavia ini berjarak beberapa menit dari Nyhavn, Kongens Nytorv, dan banyak atraksi menarik lainnya.</p>
        </li>
        </ol>
        <p>Pilihan hotel terbaik untuk Anda akan tergantung pada anggaran dan preferensi Anda. Pastikan untuk melakukan penelitian lebih lanjut tentang lokasi dan fasilitas hotel sebelum membuat keputusan pemesanan.</p>
        <p>Jika Anda mencari hotel murah di Centrum Kopenhagen, beberapa pilihan yang dapat Anda pertimbangkan adalah sebagai berikut:</p>
        <ol>
        <li>
        <p><a title="Wakeup Copenhagen" href="https://www.booking.com/hotel/dk/wakeup-copenhagen-borgergade.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Wakeup Copenhagen</a> - Terletak di pusat kota Kopenhagen, Wakeup Copenhagen menawarkan kamar-kamar yang modern dan fungsional dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Cabinn City Hotel" href="https://www.booking.com/hotel/dk/cab-inn-city.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Cabinn City Hotel</a> - Terletak di pusat kota Kopenhagen, hotel ini menawarkan kamar-kamar yang nyaman dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Generator Hostel Copenhagen" href="https://www.booking.com/hotel/dk/generator-hostel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Generator Hostel Copenhagen</a> - Hostel ini terletak di pusat kota Kopenhagen dan menawarkan kamar-kamar dormitory dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Hotel SP34" href="https://www.booking.com/hotel/dk/hotel-sp34.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel SP34</a> - Terletak di pusat kota Kopenhagen, hotel ini menawarkan kamar-kamar yang elegan dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Urban House Copenhagen by MEININGER" href="https://www.booking.com/hotel/dk/urban-house-copenhagen.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Urban House Copenhagen by MEININGER</a> - Hostel ini terletak di pusat kota Kopenhagen dan menawarkan kamar-kamar dormitory dengan harga yang terjangkau.</p>
        </li>
        </ol>
        <p>Pastikan untuk melakukan penelitian lebih lanjut tentang lokasi dan fasilitas hotel sebelum membuat keputusan pemesanan. Terkadang, harga terendah tidak selalu menghasilkan pengalaman yang terbaik, jadi pastikan untuk mempertimbangkan seluruh faktor sebelum memilih hotel.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419541886_763px-Copenhagen_City_Hall.jpg',
                'address' => '1599 Copenhagen',
                'created_at' => null,
                'updated_at' => '2023-02-26 11:01:00',
            ],
            [
                'id' => 124,
                'country_id' => 15,
                'name' => 'Christiansborg Palace',
                'slug' => 'christiansborg-palace',
                'hotels' => '',
                'latitude' => '55.6768104',
                'longitude' => '12.5799018',
                'attractions' => '<p>Christiansborg Palace adalah istana pemerintah Denmark yang terletak di pusat kota Kopenhagen. Istana ini memiliki banyak atraksi yang menarik untuk dikunjungi, di antaranya:</p>
        <ol>
        <li>Ruang Trofi: Ruangan ini menyimpan sejumlah besar piala dan penghargaan yang dimenangkan oleh raja-raja Denmark dari abad ke-17 hingga abad ke-19.</li>
        <li>Ruang Ratu: Ruangan ini digunakan untuk acara-acara resmi kerajaan, seperti pesta makan malam atau upacara pengangkatan raja baru.</li>
        <li>Ruang Parlemen: Christiansborg Palace juga merupakan tempat pertemuan Parlemen Denmark, sehingga pengunjung dapat mengunjungi ruang rapat dan belajar tentang sistem politik Denmark.</li>
        <li>Museum Istana: Museum ini menampilkan sejarah istana dan koleksi seni termasuk patung, lukisan, dan furnitur.</li>
        <li>Menara Bendera: Menara ini memiliki pemandangan indah ke kota Kopenhagen dan pelabuhan.</li>
        <li>Ruang Konsolidasi: Ruangan ini menampilkan replika Singgasana Perak Denmark dan juga tempat penyimpanan perhiasan kerajaan.</li>
        <li>Ruang Perpustakaan: Ruangan ini menampung perpustakaan raja yang mengandung sekitar 100.000 buku.</li>
        </ol>
        <p>Selain itu, Christiansborg Palace juga memiliki taman yang indah yang dapat dinikmati oleh pengunjung.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419542048_640px-Christiansborg_Palace_and_Borsen.jpg',
                'address' => 'Prins Jørgens Gård 1, 1218 København',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:00:26',
            ],
            [
                'id' => 125,
                'country_id' => 15,
                'name' => 'Kronborg Castle',
                'slug' => 'kronborg-castle',
                'hotels' => '',
                'latitude' => '56.039202',
                'longitude' => '12.61949',
                'attractions' => '<p>Benteng Kronborg, atau Kronborg Slot dalam bahasa Denmark, adalah sebuah benteng abad ke-15 yang terletak di Helsingor, Denmark. Benteng ini terkenal sebagai lokasi dalam kisah Shakespeare, Hamlet. Beberapa hal yang dapat ditemukan di Benteng Kronborg adalah:</p>
        <ol>
        <li>Museum Hamlet: Museum ini memamerkan koleksi tentang kisah Hamlet, termasuk sejarah penulisan drama, serta pengaruh yang dimiliki oleh kisah Hamlet dalam budaya populer.</li>
        <li>Kamar Istana: Pengunjung dapat mengunjungi kamar-kamar istana, seperti Kamar Raja dan Kamar Ratu, serta aula besar.</li>
        <li>Kapel: Di dalam benteng, terdapat kapel yang indah dengan lukisan langit-langit abad ke-16 dan beberapa makam.</li>
        <li>Taman: Benteng Kronborg dikelilingi oleh taman yang luas, tempat pengunjung dapat berjalan-jalan dan menikmati pemandangan laut.</li>
        <li>Jembatan Sunda: Benteng Kronborg juga terkenal karena memiliki jembatan yang menghubungkan Denmark dan Swedia.</li>
        <li>Pameran Seni: Terdapat ruangan pameran yang menampilkan karya seni modern, serta pameran-pameran khusus yang diadakan secara berkala.</li>
        </ol>
        <p>Benteng Kronborg juga sering digunakan sebagai tempat konser, pertunjukan teater, dan acara budaya lainnya. Selain itu, benteng ini juga telah diakui sebagai Situs Warisan Dunia UNESCO.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419542153_1024px-Helsingoer_Kronborg_Castle.jpg',
                'address' => 'Kronborg 2C, 3000 Helsingør',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:01:03',
            ],
            [
                'id' => 126,
                'country_id' => 15,
                'name' => 'Roskilde Cathedral',
                'slug' => 'roskilde-cathedral',
                'hotels' => '',
                'latitude' => '55.6422884',
                'longitude' => '12.0798286',
                'attractions' => '<p>Gereja besar Roskilde (Roskilde Domkirke) adalah sebuah gereja katedral bersejarah di kota Roskilde, Denmark. Gereja ini didirikan pada abad ke-12 dan merupakan tempat peristirahatan terakhir bagi banyak raja dan ratu Denmark, sehingga disebut juga sebagai "Katedral Raja-raja" Denmark. Berikut adalah beberapa hal yang dapat ditemukan di Gereja besar Roskilde:</p>
        <ol>
        <li>Makam Raja dan Ratu: Di dalam gereja terdapat sekitar 40 makam raja dan ratu Denmark, termasuk makam Raja Harald Bluetooth dan Ratu Margareta I. Makam-makam ini memiliki arsitektur yang indah dan dihiasi oleh karya seni dan ukiran yang sangat menakjubkan.</li>
        <li>Kapel: Terdapat beberapa kapel di dalam gereja, termasuk Kapel Santo Andreas dan Kapel Santo Birgitta. Kapel-kapel ini memiliki arsitektur yang indah dan dihiasi oleh karya seni dan ukiran yang sangat menakjubkan.</li>
        <li>Altar: Gereja ini memiliki altar yang indah, yang terdiri dari beberapa panel kayu yang diukir dengan indah.</li>
        <li>Museum: Di dalam gereja terdapat museum yang menampilkan sejarah gereja dan koleksi seni termasuk lukisan dan patung.</li>
        <li>Pemandangan: Gereja ini memiliki menara yang tinggi, dan pengunjung dapat menaiki tangga untuk menikmati pemandangan indah ke kota Roskilde dan sekitarnya.</li>
        <li>Konser dan acara: Gereja besar Roskilde juga sering digunakan untuk konser dan acara lainnya, termasuk acara musik dan pertunjukan teater.</li>
        </ol>
        <p>Gereja besar Roskilde adalah salah satu tempat wisata yang sangat menarik di Denmark dan menjadi salah satu Situs Warisan Dunia UNESCO.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419542271_1024px-Roskilde_cathedral_altar.JPG',
                'address' => 'Domkirkepladsen 3, 4000 Roskilde',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:01:36',
            ],
            [
                'id' => 127,
                'country_id' => 15,
                'name' => 'Fyrkat Viking Centre',
                'slug' => 'fyrkat-viking-centre',
                'hotels' => '',
                'latitude' => '56.624909',
                'longitude' => '9.781796',
                'attractions' => '<p>Fyrkat Viking Centre adalah sebuah museum luar ruangan yang terletak di dekat kota Hobro, Denmark. Museum ini didedikasikan untuk kehidupan dan budaya Viking pada abad ke-10. Berikut beberapa hal yang dapat ditemukan di Fyrkat Viking Centre:</p>
        <ol>
        <li>Benteng Fyrkat: Museum ini dibangun di sekitar reruntuhan Benteng Fyrkat, yang merupakan sebuah benteng Viking abad ke-10. Pengunjung dapat mengunjungi situs ini dan melihat reruntuhan dan replika bangunan Viking.</li>
        <li>Pameran dalam ruangan: Di dalam museum terdapat beberapa pameran dalam ruangan, termasuk koleksi peralatan Viking, senjata, dan kerajinan tangan.</li>
        <li>Pameran interaktif: Museum ini memiliki pameran interaktif, seperti simulasi permainan Viking dan pengalaman bertempur, yang memberikan pengunjung pengalaman hidup seperti Viking.</li>
        <li>Workshop: Di Fyrkat Viking Centre, pengunjung dapat belajar tentang kerajinan Viking, seperti membuat perhiasan, keramik, dan kulit.</li>
        <li>Aktivitas outdoor: Museum ini memiliki aktivitas outdoor, seperti menunggang kuda, memanah, dan belajar tentang cara hidup Viking.</li>
        <li>Acara dan pertunjukan: Fyrkat Viking Centre juga sering mengadakan acara dan pertunjukan untuk merayakan budaya Viking, termasuk pesta Viking dan pertunjukan musik dan tari.</li>
        </ol>
        <p>Fyrkat Viking Centre adalah tempat yang ideal untuk belajar tentang kehidupan Viking dan menjadi tempat wisata yang populer di Denmark.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419542354_Fyrkat_hus_stor.jpg',
                'address' => ' Fyrkatvej 37B, 9500 Hobro',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:02:07',
            ],
            [
                'id' => 128,
                'country_id' => 15,
                'name' => 'Tivoli Garden',
                'slug' => 'tivoli-garden',
                'hotels' => '',
                'latitude' => '55.6747334',
                'longitude' => '12.5655486',
                'attractions' => '<p>Taman Tivoli adalah taman hiburan tertua di dunia yang terletak di pusat kota Kopenhagen, Denmark. Taman ini dibuka pada tahun 1843 dan menawarkan berbagai wahana, taman, atraksi, restoran, dan pertunjukan musik. Berikut adalah beberapa hal yang dapat ditemukan di Taman Tivoli:</p>
        <ol>
        <li>Wahana dan permainan: Taman Tivoli menawarkan berbagai macam wahana dan permainan, seperti roller coaster, Ferris wheel, rumah hantu, dan banyak lagi. Pengunjung dapat membeli tiket untuk setiap wahana atau membeli kartu unlimited ride untuk mengakses semua wahana.</li>
        <li>Taman dan kebun: Taman Tivoli memiliki kebun yang indah dengan tumbuhan-tumbuhan yang beraneka ragam, dan banyak area tempat pengunjung dapat bersantai dan menikmati suasana taman yang tenang.</li>
        <li>Pertunjukan: Taman Tivoli menampilkan pertunjukan musik, pertunjukan tari, dan atraksi sirkus. Beberapa pertunjukan menampilkan artis internasional dan diselenggarakan di dalam teater khusus di dalam taman.</li>
        <li>Restoran dan kafe: Taman Tivoli memiliki berbagai restoran dan kafe yang menyajikan makanan dan minuman dari berbagai jenis dan cita rasa.</li>
        <li>Acara khusus: Taman Tivoli menyelenggarakan acara khusus pada musim-musim tertentu, seperti Halloween dan Natal. Pada acara khusus tersebut, taman akan dihias sesuai tema dan menampilkan pertunjukan spesial dan kegiatan khusus.</li>
        </ol>
        <p>Taman Tivoli adalah salah satu tempat wisata paling populer di Kopenhagen dan menjadi tujuan wisata yang sangat populer bagi wisatawan lokal dan internasional.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419542474_Tivoligardens2.jpg',
                'address' => 'Vesterbrogade 3, 1630 København',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:05:56',
            ],
            [
                'id' => 129,
                'country_id' => 15,
                'name' => 'Rosenborg Palace',
                'slug' => 'rosenborg-palace',
                'hotels' => '',
                'latitude' => '55.6862287',
                'longitude' => '12.5763593',
                'attractions' => '<p>Istana Rosenborg adalah sebuah istana yang terletak di pusat kota Kopenhagen, Denmark. Istana ini dibangun pada awal abad ke-17 oleh Raja Christian IV dan sejak itu digunakan sebagai tempat tinggal kerajaan, terutama pada abad ke-18 dan ke-19. Sekarang istana ini dibuka untuk umum dan menjadi salah satu tempat wisata paling populer di Kopenhagen. Berikut adalah beberapa hal yang dapat ditemukan di Istana Rosenborg:</p>
        <ol>
        <li>Koleksi permata kerajaan: Istana Rosenborg memiliki salah satu koleksi permata kerajaan paling besar di dunia. Koleksi ini termasuk mahkota, kalung, gelang, bros, dan cincin yang dikenakan oleh anggota kerajaan Denmark selama berabad-abad.</li>
        <li>Koleksi senjata: Istana Rosenborg juga memiliki koleksi senjata dan perlengkapan militer dari periode Renaissance hingga abad ke-19. Pengunjung dapat melihat berbagai jenis senjata dan baju zirah dari masa lalu.</li>
        <li>Koleksi kerajinan dan furnitur: Istana Rosenborg memiliki koleksi furnitur dan kerajinan tangan dari periode Renaissance hingga abad ke-19. Pengunjung dapat melihat berbagai macam mebel, tapestri, dan kerajinan tangan dari kayu, kaca, dan perunggu.</li>
        <li>Ruangan-ruangan istana: Istana Rosenborg memiliki berbagai ruangan yang indah dan kaya sejarah, termasuk ruang trofi, ruang tidur raja, ruang tamu, dan ruang makan. Pengunjung dapat melihat hiasan dinding, kaca patri, dan ornamen-ornamen yang indah di dalam setiap ruangan.</li>
        <li>Taman istana: Istana Rosenborg dikelilingi oleh taman yang indah, yang merupakan taman bersejarah tertua di Denmark. Taman ini terdiri dari taman formal, taman bermain, dan taman lindung.</li>
        </ol>
        <p>Istana Rosenborg adalah salah satu tempat wisata paling populer di Kopenhagen, dan menjadi tempat yang sangat direkomendasikan untuk dikunjungi bagi mereka yang tertarik dengan sejarah, seni, dan arsitektur.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419542603_1024px-Rosenborg_Slot.jpg',
                'address' => 'Øster Voldgade 4A, 1350 København',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:06:37',
            ],
            [
                'id' => 130,
                'country_id' => 15,
                'name' => 'Jelling Stones',
                'slug' => 'jelling-stones',
                'hotels' => '',
                'latitude' => '55.753119',
                'longitude' => '9.4168679',
                'attractions' => '<p>Jelling Stones adalah dua batu runic besar dari periode Viking yang terletak di Jelling, Denmark. Batu runic ini menjadi peninggalan bersejarah dan merupakan simbol penting bagi masyarakat Denmark. Batu runic ini didirikan pada abad ke-10 oleh Raja Harald Bluetooth untuk memperingati orangtuanya, Gorm the Old dan Thyra, serta untuk mempromosikan penyebaran agama Kristen di Denmark.</p>
        <p>Jelling Stones terdiri dari dua batu, yang dikenal sebagai Batu Jelling Utara dan Batu Jelling Selatan. Batu Jelling Utara lebih besar dan memiliki ukiran gambar salib yang menunjukkan pengaruh agama Kristen, sedangkan Batu Jelling Selatan lebih kecil dan memiliki ukiran gambar seorang pria berkuda yang kemungkinan adalah Gorm the Old.</p>
        <p>Selain dua batu runic besar, di area tersebut juga terdapat gereja dan sebuah museum yang didedikasikan untuk menginformasikan pengunjung tentang sejarah dan budaya Viking. Museum ini menampilkan artefak-artefak Viking, termasuk perhiasan, senjata, dan alat rumah tangga, serta informasi tentang sejarah Denmark dan kehidupan di masa lalu.</p>
        <p>Jelling Stones dan situs bersejarahnya dianggap sebagai warisan penting bagi masyarakat Denmark dan menjadi daya tarik wisata utama di negara tersebut. Situs ini terdaftar sebagai Situs Warisan Dunia UNESCO pada tahun 1994.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419542792_1024px-Jelling_stones.2010.jpg',
                'address' => 'Jelling',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:08:11',
            ],
            [
                'id' => 131,
                'country_id' => 15,
                'name' => 'Copenhagen Zoo',
                'slug' => 'copenhagen-zoo',
                'hotels' => '',
                'latitude' => '55.672308',
                'longitude' => '12.5239315',
                'attractions' => '<p>Kebun Binatang Copenhagen (Copenhagen Zoo) adalah kebun binatang yang terletak di Frederiksberg, Kopenhagen, Denmark. Kebun binatang ini dibuka pada tahun 1859 dan menjadi salah satu kebun binatang tertua di dunia. Kebun binatang ini terkenal karena koleksi satwanya yang beragam dan fasilitasnya yang modern.</p>
        <p>Beberapa hewan yang dapat ditemukan di Kebun Binatang Copenhagen antara lain gajah, harimau, singa, zebra, gorila, jerapah, dan beruang kutub. Kebun binatang ini juga memiliki pusat pameran yang menampilkan informasi tentang satwa liar dan lingkungan mereka, serta laboratorium yang berfokus pada penelitian satwa liar dan konservasi.</p>
        <p>Selain menampilkan satwa liar, Kebun Binatang Copenhagen juga menawarkan berbagai atraksi dan aktivitas untuk pengunjung, seperti:</p>
        <ol>
        <li>Taman Bermain Anak: Kebun Binatang Copenhagen memiliki taman bermain anak yang luas dan menyenangkan, dengan permainan dan wahana yang aman bagi anak-anak dari segala usia.</li>
        <li>Taman Rides: Taman ini memiliki wahana yang menyenangkan, seperti kincir ria dan kereta gantung, yang menawarkan pemandangan indah dari area kebun binatang.</li>
        <li>Pameran Ikan: Kebun Binatang Copenhagen memiliki akuarium yang indah dan menampilkan berbagai jenis ikan dan kehidupan laut.</li>
        <li>Restoran dan Toko Suvenir: Kebun Binatang Copenhagen memiliki berbagai pilihan restoran, kafe, dan toko suvenir yang menyajikan makanan dan minuman yang lezat serta suvenir yang unik dan menarik.</li>
        </ol>
        <p>Kebun Binatang Copenhagen sangat cocok untuk dikunjungi bersama keluarga atau teman-teman. Tempat ini menawarkan pengalaman yang menyenangkan dan edukatif tentang dunia satwa liar dan lingkungan mereka. Selain itu, kebun binatang ini sangat peduli terhadap kesejahteraan hewan dan terus berupaya untuk meningkatkan kondisi hidup dan konservasi satwa liar.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419542894_Copenhagen_Zoo_Tower_(1106238343).jpg',
                'address' => 'Roskildevej 32, 2000 Frederiksberg',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:08:52',
            ],
            [
                'id' => 132,
                'country_id' => 15,
                'name' => 'The Little Mermaid',
                'slug' => 'the-little-mermaid',
                'hotels' => '',
                'latitude' => '55.6938336',
                'longitude' => '12.5962103',
                'attractions' => '<p>The Little Mermaid (Den Lille Havfrue) adalah sebuah patung perunggu yang terletak di pelabuhan Kopenhagen, Denmark. Patung ini merupakan salah satu atraksi wisata terkenal di Kopenhagen dan menjadi lambang kota ini. Patung ini didirikan pada tahun 1913 dan dibuat oleh seniman Denmark, Edvard Eriksen, berdasarkan karakter dari dongeng Hans Christian Andersen yang berjudul "The Little Mermaid".</p>
        <p>Patung The Little Mermaid menggambarkan putri duyung kecil yang duduk di atas batu di dekat pantai dengan tatapan mata melankolis ke laut. Patung ini memiliki tinggi sekitar 1,25 meter dan dianggap sebagai salah satu patung paling ikonik di dunia.</p>
        <p>Setiap tahunnya, jutaan orang dari seluruh dunia datang untuk melihat patung The Little Mermaid. Selain sebagai objek wisata, patung ini juga menjadi bagian penting dari sejarah dan budaya Denmark. Beberapa acara khusus seperti upacara peringatan hari kelahiran Hans Christian Andersen, pesta kecil di dekat patung saat musim panas, dan perayaan pernikahan kerajaan diadakan di lokasi patung The Little Mermaid.</p>
        <p>Meskipun The Little Mermaid menjadi atraksi utama di Kopenhagen, tetapi patung ini hanya memiliki ukuran kecil dan terletak di sebuah lokasi yang sederhana dan terbuka. Oleh karena itu, sebelum mengunjungi patung ini, penting untuk mempersiapkan diri dengan pakaian yang sesuai dan mengingat bahwa area di sekitar patung ini adalah pelabuhan, sehingga kondisi cuaca dan angin dapat berubah-ubah.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419543014_The_Little_Mermaid_statue.jpg',
                'address' => 'Langelinie, 2100 København Ø',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:09:33',
            ],
            [
                'id' => 133,
                'country_id' => 6,
                'name' => 'Windsor Castle',
                'slug' => 'windsor-castle',
                'hotels' => '',
                'latitude' => '51.4937557',
                'longitude' => '-0.6634836',
                'attractions' => '<p>Istana Windsor adalah istana kerajaan Inggris yang terletak di kota Windsor, Berkshire, sekitar 30 kilometer barat daya London. Istana ini merupakan salah satu tempat tinggal resmi Ratu Elizabeth II dan keluarganya.</p>
        <p>Istana Windsor memiliki sejarah yang sangat panjang, dimulai dari pembangunannya pada abad ke-11 oleh Raja William I dari Inggris. Bangunan-bangunan istana yang ada sekarang ini, termasuk State Apartments, dibangun pada abad ke-17 oleh Raja Charles II. Bagian-bagian istana yang lain juga dibangun pada berbagai masa, sehingga memiliki gaya arsitektur yang beragam.</p>
        <p>Pengunjung dapat mengunjungi sebagian dari istana ini, termasuk State Apartments, di mana terdapat koleksi seni, perabotan, dan barang-barang mewah lainnya yang dimiliki oleh keluarga kerajaan Inggris. Pengunjung juga dapat melihat kapel St. George, sebuah bangunan megah yang telah ada sejak abad ke-14 dan merupakan tempat pemakaman bagi beberapa anggota keluarga kerajaan, termasuk Raja Henry VIII.</p>
        <p>Selain itu, pengunjung dapat menyaksikan pergantian pengawal (changing of the guard) yang diadakan setiap hari di luar istana, dan menikmati keindahan taman yang mengelilingi istana. Taman ini sangat luas, dan terdiri dari berbagai taman yang lebih kecil dengan tema-tema yang berbeda-beda, seperti taman bunga, taman air, dan taman buah.</p>
        <p>Istana Windsor juga merupakan lokasi di mana beberapa acara resmi kerajaan Inggris dilaksanakan, seperti pernikahan Pangeran Harry dan Meghan Markle pada tahun 2018. Acara-acara ini biasanya diadakan di kapel St. George atau di State Apartments, dan terbuka untuk umum untuk diikuti.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419543309_566596_8b702fdf.jpg',
                'address' => 'Windsor, West Berkshire SL4 1NJ',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:19:28',
            ],
            [
                'id' => 134,
                'country_id' => 6,
                'name' => 'Highgate Cemetery',
                'slug' => 'highgate-cemetery',
                'hotels' => '',
                'latitude' => '51.5684618',
                'longitude' => '-0.1471811',
                'attractions' => '<p>Highgate Cemetery adalah sebuah kuburan terkenal di London, Inggris. Karena arsitektur dan sejarahnya yang menarik, kuburan ini telah menjadi salah satu tempat wisata populer di London.</p>
        <p>Kuburan ini dibuka pada tahun 1839 dan terdiri dari dua bagian, yaitu East Cemetery dan West Cemetery. East Cemetery dapat dikunjungi tanpa perlu membayar tiket, sedangkan West Cemetery hanya dapat dikunjungi dengan tur yang dipandu oleh pemandu wisata resmi kuburan.</p>
        <p>Di kuburan ini, terdapat makam-makam yang menarik untuk dikunjungi, termasuk makam Karl Marx, penulis dan filsuf terkenal, serta makam Douglas Adams, penulis "The Hitchhiker\'s Guide to the Galaxy". Kuburan ini juga merupakan tempat pemakaman bagi banyak tokoh-tokoh terkenal lainnya, termasuk penulis George Eliot, penulis Christina Rossetti, dan penyanyi Amy Winehouse.</p>
        <p>Selain itu, kuburan ini juga terkenal karena arsitektur makam-makamnya yang unik dan indah. Ada beberapa makam yang memiliki ukiran dan ornamen yang sangat indah, seperti makam yang terbuat dari batu marmer dan granit yang diukir dengan indah. Kuburan ini juga memiliki pemandangan yang indah, dengan pohon-pohon besar yang tumbuh di sekitarnya.</p>
        <p>Bagi pengunjung yang ingin mengunjungi kuburan ini, disarankan untuk datang dengan tur yang dipandu oleh pemandu wisata resmi kuburan. Tur ini akan memberikan informasi yang lengkap mengenai sejarah kuburan, makam-makam yang ada di dalamnya, serta keunikan arsitektur makam-makam tersebut.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419543486_Highgate_Cemetery_-_geograph.org.uk_-_828557.jpg',
                'address' => 'Swain&#039;s Lane, London N6 6PJ',
                'created_at' => null,
                'updated_at' => '2023-02-22 22:20:01',
            ],
            [
                'id' => 135,
                'country_id' => 5,
                'name' => 'Swiss National Park',
                'slug' => 'swiss-national-park',
                'hotels' => '',
                'latitude' => '46.6663975',
                'longitude' => '10.14355',
                'attractions' => '<p>Swiss National Park adalah taman nasional yang terletak di Pegunungan Alpen Swiss di bagian timur negara ini. Taman nasional ini memiliki luas sekitar 170 km&sup2; dan menawarkan pemandangan alam yang indah serta keanekaragaman flora dan fauna yang luar biasa. Berikut adalah beberapa aktivitas wisata yang dapat dilakukan di Swiss National Park:</p>
        <ol>
        <li>
        <p>Trekking: Swiss National Park menawarkan rute trekking yang indah dan menantang bagi para pengunjung. Terdapat rute-rute yang sesuai dengan berbagai tingkat kesulitan, mulai dari rute yang mudah hingga rute yang memerlukan pengalaman dan keterampilan yang lebih tinggi. Trekking di Swiss National Park juga merupakan cara yang baik untuk memperoleh pengalaman mendekati alam dan melihat keanekaragaman flora dan fauna yang ada di taman nasional.</p>
        </li>
        <li>
        <p>Bersepeda: Swiss National Park juga menawarkan jalur sepeda yang indah bagi para pengunjung yang menyukai olahraga sepeda. Terdapat berbagai rute sepeda, termasuk rute yang lebih mudah dan rute yang lebih menantang yang melintasi pegunungan Alpen Swiss.</p>
        </li>
        <li>
        <p>Birdwatching: Swiss National Park merupakan rumah bagi berbagai spesies burung yang indah dan menarik, termasuk elang, burung hantu, dan banyak lagi. Para pengunjung dapat menikmati keindahan burung-burung ini dengan melakukan birdwatching di berbagai lokasi di taman nasional.</p>
        </li>
        <li>
        <p>Camping: Swiss National Park menawarkan fasilitas camping bagi para pengunjung yang ingin merasakan pengalaman mendekati alam yang lebih dekat. Terdapat beberapa lokasi camping yang disediakan di taman nasional dengan fasilitas yang cukup lengkap seperti tempat api unggun dan toilet umum.</p>
        </li>
        <li>
        <p>Menikmati keindahan alam: Swiss National Park menawarkan pemandangan alam yang luar biasa dengan gunung, danau, hutan, dan padang rumput yang hijau. Para pengunjung dapat menikmati keindahan alam ini dengan berjalan-jalan atau beristirahat di lokasi-lokasi yang indah di taman nasional.</p>
        </li>
        </ol>
        <p>Untuk informasi lebih lanjut tentang Swiss National Park, Anda dapat mengunjungi situs web resmi taman nasional ini atau menghubungi kantor informasi wisata di sekitar area taman nasional.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419583832_D5sp-czarny.jpg',
                'address' => '7530 Zernez',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:46:12',
            ],
            [
                'id' => 136,
                'country_id' => 5,
                'name' => 'Chateau de Chillon',
                'slug' => 'chateau-de-chillon',
                'hotels' => '',
                'latitude' => '46.4141929',
                'longitude' => '6.9276301',
                'attractions' => '<p>Istana de Chillonis yang menakjubkan ini adalah sebuah kastil bersejarah yang berada di tepi danau Jenewa, dekat kota peristirahatan Montreux. Kembali ke jaman 1000 tahun yang lalu, kastil tersebut memiliki cerita sejarah yang menarik. Bisa dipastikan kastil ini adalah salah satu kastil yang paling keren dan canggih di Swiss. Dekat kastil terdapat 100 bangunan-bangunan terpisah yang bisa dikunjungi termasuk sebuah musium yang memperlihatkan betapa pentingnya sebuah obyek bersejarah yang memegang pentingnya arkeologi yang besar.&nbsp;</p>
        <p>Berikut adalah beberapa aktivitas wisata yang dapat dilakukan di Chateau de Chillon:</p>
        <ol>
        <li>
        <p>Tur kastil: Para pengunjung dapat mengikuti tur kastil yang dipandu oleh pemandu wisata untuk mengetahui sejarah dan keunikan Chateau de Chillon. Tur kastil ini akan membawa Anda ke berbagai ruangan dan tempat di kastil, termasuk ruang tamu, ruang makan, dan ruang tidur. Selama tur kastil, Anda akan mengetahui tentang kehidupan di kastil pada masa lalu, serta keberadaan penjara bawah tanah dan cerita menarik di baliknya.</p>
        </li>
        <li>Fasnacht Spring Carnival: Karnaval Fasnacht adalah khas dan unik bagi Swiss. Walaupun acara ini dulunya khusus buat penduduk lokal, sekarang acara ini telah menarik banyak pengunjung dari berbagai negara. Ini adalah pesta 3 hari 3 malam dengan pengunjung yang memakai kostum warna warni dan topeng mengadakan parade di jalan-jalan mengadakan pertunjukan-pertunjukan yang sehat dan menarik. Karnaval dimulai hari Senin setelah hari Rabu Abu (hari puasa orang kristen). Jadi seperti pesta lebaran di mana pub-pub dan cafe-cafe buka semalaman di mana semalaman orang-orang dilempari pita-pita, permen, dan bunga-bunga.</li>
        <li>
        <p>Menikmati keindahan Danau Jenewa: Chateau de Chillon terletak di tepi Danau Jenewa, yang menawarkan pemandangan yang sangat indah. Para pengunjung dapat menikmati pemandangan danau dan pegunungan Alpen yang menakjubkan dari berbagai sudut di dalam kastil, termasuk dari jendela-jendela kuno di dinding kastil.</p>
        </li>
        <li>
        <p>Berjalan-jalan di taman kastil: Chateau de Chillon memiliki taman yang indah di sekitarnya, tempat para pengunjung dapat berjalan-jalan dan menikmati keindahan alam. Taman ini juga memiliki pemandangan yang indah dari Danau Jenewa dan pegunungan sekitarnya.</p>
        </li>
        <li>
        <p>Berbelanja: Di dalam kastil, terdapat toko suvenir yang menjual berbagai jenis barang-barang seperti pernak-pernik, buku, dan kerajinan tangan yang dibuat oleh para pengrajin setempat.</p>
        </li>
        <li>
        <p>Acara khusus: Chateau de Chillon sering mengadakan berbagai acara khusus seperti konser, pameran seni, dan peragaan mode. Anda dapat mengecek jadwal acara di situs web resmi Chateau de Chillon sebelum berkunjung.</p>
        </li>
        </ol>
        <p>Chateau de Chillon dapat diakses dengan berbagai mode transportasi. Berikut adalah beberapa opsi transportasi yang dapat digunakan untuk menuju Chateau de Chillon:</p>
        <ol>
        <li>
        <p>Kereta: Para pengunjung dapat naik kereta dari Stasiun Montreux ke Stasiun Veytaux-Chillon. Dari stasiun Veytaux-Chillon, jarak ke Chateau de Chillon hanya sekitar 10 menit berjalan kaki.</p>
        </li>
        <li>
        <p>Bus: Para pengunjung juga dapat naik bus dari Montreux menuju halte Chillon, yang terletak hanya beberapa langkah dari Chateau de Chillon.</p>
        </li>
        <li>
        <p>Mobil: Jika Anda menggunakan mobil, Chateau de Chillon memiliki area parkir yang luas. Namun, pada musim liburan atau saat acara khusus diadakan, parkir bisa sangat sibuk dan sulit ditemukan.</p>
        </li>
        <li>
        <p>Kapal: Para pengunjung juga dapat menyeberang Danau Jenewa dari Montreux ke Chateau de Chillon dengan kapal. Perjalanan dengan kapal dapat menjadi pengalaman yang menyenangkan dan menawarkan pemandangan yang spektakuler dari Danau Jenewa dan pegunungan sekitarnya.</p>
        </li>
        </ol>
        <p>Untuk informasi lebih lanjut tentang opsi transportasi yang tersedia, serta jadwal dan harga tiket, Anda dapat mengunjungi situs web resmi Swiss Transport atau menghubungi kantor informasi wisata di sekitar area Chateau de Chillon.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => '1677883635_136.jpg',
                'address' => 'Avenue de Chillon 21, 1820 Veytaux',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:52:32',
            ],
            [
                'id' => 137,
                'country_id' => 5,
                'name' => 'The Matterhorn',
                'slug' => 'the-matterhorn',
                'hotels' => '',
                'latitude' => '45.9764232',
                'longitude' => '7.6584592',
                'attractions' => '<p>Berdiri setinggi 4478 meter, Matterhorn, juga dikenal sebagai Monte Cervino di Italia, adalah permata dari Pennine Alps (pegunungan Alpen bagian barat). Puncak bukan yang tertinggi di pegunungan di Swiss, tapi telah menjadi ikon atau citra bagi daerah pegunungan Alpen di Swiss. Nama Matterhorn diambil dari bahasa Jerman yang berarti Matt = padang rumput dan Horn = puncak. Petualang sejati dari sekeliling dunia datang ke sini untuk mendaki gunung ini. Di Matterhorn anda bisa melakukan perjalanan yang menarik ke kota Zermat di mana ditawarkan tur ski yang eksotis dan pemandangan yang indah.</p>
        <p>Berikut beberapa aktivitas yang bisa dilakukan saat berkunjung ke The Matterhorn:</p>
        <ol>
        <li>
        <p>Menikmati pemandangan: The Matterhorn menawarkan pemandangan yang spektakuler dan indah, terutama di pagi dan sore hari. Para pengunjung dapat menikmati pemandangan gunung ini dari kota-kota sekitarnya, seperti Zermatt atau Tasch. Selain itu, ada juga banyak jalur hiking yang dapat diambil untuk menikmati pemandangan gunung ini dari berbagai sudut.</p>
        </li>
        <li>
        <p>Ski: The Matterhorn adalah salah satu destinasi ski terbaik di dunia. Ada banyak jalur ski yang tersedia di kawasan ini, termasuk jalur ski yang cocok untuk pemula hingga profesional. Selain itu, para pengunjung juga dapat mengunjungi resor ski di Zermatt untuk menyewa perlengkapan ski dan mengikuti pelatihan ski.</p>
        </li>
        <li>
        <p>Mengunjungi Gletser Paradise: Gletser Paradise adalah kawasan ski tertinggi di Eropa dan terletak di dekat Zermatt. Para pengunjung dapat menaiki kereta gantung ke kawasan ini untuk menikmati pemandangan yang indah dan menikmati aktivitas ski di kawasan yang luas.</p>
        </li>
        <li>
        <p>Menikmati makanan lokal: Swiss terkenal dengan kelezatan makanan dan minuman tradisionalnya. Saat berkunjung ke The Matterhorn, para pengunjung dapat mencoba makanan lokal, seperti raclette atau fondue, serta menikmati minuman seperti bir dan wine.</p>
        </li>
        <li>
        <p>Berbelanja: Zermatt dan kota-kota sekitarnya adalah tempat yang ideal untuk berbelanja. Ada banyak toko-toko yang menawarkan barang-barang lokal dan barang-barang khas Swiss seperti jam tangan, perhiasan, dan barang-barang dari kayu.</p>
        </li>
        </ol>
        <p>Untuk mengakses The Matterhorn, para pengunjung dapat menggunakan transportasi umum seperti kereta atau bus dari kota-kota besar di Swiss seperti Zurich atau Jenewa, atau menggunakan mobil sewaan jika ingin bepergian secara mandiri.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419586739_Matterhorn_Switzerland.jpg',
                'address' => 'The Matterhorn',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:55:10',
            ],
            [
                'id' => 138,
                'country_id' => 5,
                'name' => 'Jungfraujoch',
                'slug' => 'jungfraujoch',
                'hotels' => '',
                'latitude' => '46.6094371',
                'longitude' => '7.9155621',
                'attractions' => '<p>Tersusun seperti mahkota perhiasan di atas ketinggian 3.454 meter di atas permukaan laut, Jungfraujoch adalah salah satu destinasi wisata populer di Swiss yang terletak di Alpen Swiss. Jungfraujoch dikenal sebagai "Top of Europe" karena menjadi titik tertinggi di Eropa yang dapat dicapai dengan transportasi umum. Jalur kereta api&nbsp;Jungfraujoch: Stasion kereta api tertinggi di dunia. Berikut adalah beberapa aktivitas yang bisa dilakukan saat berkunjung ke Jungfraujoch:</p>
        <ol>
        <li>
        <p>Menikmati pemandangan: Saat sampai di Jungfraujoch, para pengunjung akan disambut dengan pemandangan alam yang menakjubkan dari gunung dan lembah di sekitar area. Ada terowongan es yang dapat dijelajahi, serta tempat observasi yang menawarkan pemandangan yang spektakuler.</p>
        </li>
        <li>
        <p>Mengunjungi museum dan pameran: Di Jungfraujoch terdapat museum dan pameran yang menunjukkan sejarah dan keunikan kawasan Alpen Swiss.</p>
        </li>
        <li>
        <p>Ski dan snowboarding: Jungfraujoch menjadi salah satu tujuan ski dan snowboarding yang populer di Swiss, terdapat banyak jalur ski yang cocok untuk berbagai tingkat keahlian.</p>
        </li>
        <li>
        <p>Berjalan di pegunungan: Ada banyak jalur hiking yang menarik di sekitar Jungfraujoch. Para pengunjung dapat menikmati pemandangan alam yang indah sambil menikmati udara segar pegunungan.</p>
        </li>
        <li>
        <p>Makanan dan minuman lokal: Swiss terkenal dengan kelezatan makanan dan minuman tradisionalnya. Saat berkunjung ke Jungfraujoch, para pengunjung dapat mencoba makanan lokal seperti raclette atau fondue, serta menikmati minuman seperti bir dan wine.</p>
        </li>
        </ol>
        <p>Untuk mengakses Jungfraujoch, para pengunjung dapat menggunakan kereta dari kota-kota besar di Swiss seperti Zurich atau Bern. Perjalanan kereta ke Jungfraujoch dari Interlaken, yang merupakan kota terdekat dengan Jungfraujoch, memakan waktu sekitar 2 jam dan melewati pemandangan yang indah dari pegunungan Alpen Swiss. Ada juga opsi untuk menggunakan mobil sewaan atau bus, tetapi perjalanan akan memakan waktu lebih lama.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419587249_1024px-View_From_Jungfraujoch_(2521840504).jpg',
                'address' => '3801 Wengen',
                'created_at' => null,
                'updated_at' => '2023-03-03 23:00:05',
            ],
            [
                'id' => 139,
                'country_id' => 5,
                'name' => 'Geneva',
                'slug' => 'geneva',
                'hotels' => '',
                'latitude' => '46.1983922',
                'longitude' => '6.1422961',
                'attractions' => '<p>Jalan jalan ke Jenewa kalau anda ingin menikmati kemewahan di eropa. Terletak di tenggara dari danau Jenewa, Jenewa adalah kota terbesar kedua di Swiss dan merupakan pusat diplomatik dunia dengan markas besar PBB dan organisasi internasional lainnya. Selain itu, Jenewa juga dikenal sebagai kota yang indah dengan banyak tempat wisata menarik. Berikut adalah beberapa tempat wisata di Jenewa yang bisa dikunjungi:</p>
        <ol>
        <li>
        <p>Jet d\'Eau: Jet d\'Eau adalah landmark terkenal di Jenewa, yaitu air mancur setinggi 140 meter yang berada di tengah-tengah Danau Jenewa. Pengunjung dapat menikmati pemandangan yang indah dan berfoto di sekitar air mancur.</p>
        </li>
        <li>
        <p>Old Town: Old Town atau kota tua Jenewa adalah kawasan bersejarah yang menawarkan arsitektur yang indah dan banyak toko, restoran, dan kafe. Di sini, pengunjung dapat menjelajahi kawasan yang kaya sejarah dengan jalan kaki atau menggunakan tram.</p>
        </li>
        <li>
        <p>Palais des Nations: Palais des Nations adalah markas besar PBB kedua di dunia dan menjadi tempat yang menarik untuk dikunjungi bagi mereka yang tertarik dengan masalah internasional. Pengunjung dapat mengikuti tur dan mempelajari lebih lanjut tentang organisasi PBB dan tugas-tugasnya.</p>
        </li>
        <li>
        <p>Mus&eacute;e d\'Art et d\'Histoire: Museum Seni dan Sejarah Jenewa menampilkan berbagai koleksi seni dan arkeologi yang menarik. Ada lebih dari 650.000 objek yang dipajang di museum ini, termasuk lukisan, patung, perhiasan, dan keramik.</p>
        </li>
        <li>
        <p>Jardin Botanique: Jardin Botanique adalah taman botani yang indah dan terkenal di Jenewa. Taman ini memiliki berbagai koleksi tanaman dari seluruh dunia dan juga memiliki konservatorium yang menampung berbagai spesies tanaman langka dan langka.</p>
        </li>
        <li>
        <p>Bains des P&acirc;quis: Bains des P&acirc;quis adalah pusat rekreasi publik yang populer di Jenewa. Pengunjung dapat berenang di danau, bersantai di sauna atau hammam, atau menikmati makanan laut di restoran yang ada.</p>
        </li>
        <li>
        <p>CERN: CERN adalah organisasi penelitian terkenal di Jenewa yang mengoperasikan Large Hadron Collider (LHC). Pengunjung dapat mengikuti tur dan mempelajari tentang eksperimen fisika partikel yang dilakukan di sini.</p>
        </li>
        </ol>
        <p>Untuk akomodasi di Jenewa, terdapat banyak pilihan hotel dengan berbagai kisaran harga. Hotel yang lebih murah dapat ditemukan di sekitar stasiun kereta api, sementara hotel yang lebih mahal terletak di pusat kota. Ada juga opsi hostel yang dapat menjadi alternatif yang lebih ekonomis bagi para backpacker atau wisatawan yang ingin menghemat biaya akomodasi.</p>
        <p>Berikut adalah daftar hotel mewah dan murah di Jenewa:</p>
        <ol>
        <li><a title="Hotel Beau-Rivage Geneva" href="https://www.booking.com/hotel/ch/beaurivagegeneva.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Beau-Rivage Geneva</a>: Hotel ini terletak di tepi Danau Jenewa dan menawarkan kamar-kamar mewah yang dilengkapi dengan fasilitas modern dan berbagai pilihan kuliner.</li>
        <li><a title="Mandarin Oriental" href="https://www.booking.com/hotel/ch/mandarin-oriental-geneva.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Mandarin Oriental</a>, Geneva: Hotel mewah dengan pemandangan Danau Jenewa dan pegunungan Alpen. Hotel ini dilengkapi dengan fasilitas spa, pusat kebugaran, dan restoran yang populer.</li>
        <li><a title="Four Seasons Hotel des Bergues Geneva" href="https://www.booking.com/hotel/ch/four-seasons-geneva.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Four Seasons Hotel des Bergues Geneva</a>: Terletak di pusat kota, hotel mewah ini memiliki dekorasi interior yang indah dan menawarkan berbagai pilihan kuliner dan fasilitas spa yang lengkap.</li>
        <li><a title="InterContinental Geneva" href="https://www.booking.com/hotel/ch/intercontinental-geneve.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">InterContinental Geneva</a>: Hotel mewah yang menawarkan berbagai pilihan kamar yang dilengkapi dengan fasilitas modern, seperti TV layar datar dan minibar. Hotel ini dilengkapi dengan restoran yang populer, lounge, dan fasilitas fitness.</li>
        <li><a title="Hotel ibis Geneve Centre Nations" href="https://www.booking.com/hotel/ch/ibis-geneve-centre-nations.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel ibis Geneve Centre Nations</a>: Hotel dengan kamar yang nyaman dan dilengkapi dengan fasilitas modern. Terletak di pusat kota dan dekat dengan berbagai atraksi wisata.</li>
        <li><a title="Hotel Cornavin Geneve" href="https://www.booking.com/hotel/ch/cornavin.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Cornavin Geneve</a>: Hotel yang terletak dekat dengan stasiun kereta api dan pusat kota. Dilengkapi dengan fasilitas dasar seperti restoran dan bar.</li>
        <li><a title="Hotel Montana" href="https://www.booking.com/hotel/ch/montana.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Montana</a>: Hotel yang terletak di pusat kota dan menawarkan kamar-kamar yang bersih dan nyaman. Dilengkapi dengan fasilitas dasar dan dekat dengan berbagai atraksi wisata.</li>
        <li><a title="Hotel Central" href="https://www.booking.com/hotel/ch/central-geneve.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Central</a>: Hotel yang terletak di pusat kota dan menawarkan kamar-kamar yang bersih dan nyaman. Dilengkapi dengan fasilitas dasar dan dekat dengan berbagai atraksi wisata.</li>
        </ol>
        <p>Harga hotel di Jenewa dapat sangat mahal, terutama untuk hotel-hotel mewah di pusat kota. Oleh karena itu, jika Anda ingin menghemat biaya akomodasi, hotel-hotel murah yang terletak di luar pusat kota atau hostel dan apartemen bisa menjadi pilihan yang lebih terjangkau. Namun, pastikan untuk memeriksa ulasan dari tamu sebelum memesan kamar.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419587852_Cologny_-_Geneva_Switzerland.jpg',
                'address' => 'Geneva',
                'created_at' => null,
                'updated_at' => '2023-03-03 23:10:20',
            ],
            [
                'id' => 140,
                'country_id' => 5,
                'name' => 'Gstaad (Bernese Oberland)',
                'slug' => 'gstaad-bernese-oberland',
                'hotels' => '',
                'latitude' => '46.4706828',
                'longitude' => '7.2844744',
                'attractions' => '<p>Gstaad telah menjadi lambang dari wisata di Swiss. Terletak di tumpuan dari empat lembah pegunungan, Gstaad adalah permata dari Bernese Oberland yang indah. Terkenal dengan hotel-hotelnya yang sangat memanjakan tamu-tamunya, butik-butik mahalnya, mal-mal kerennya, egalitarian nightlife-nya, dan pelayanan hiburan tertinggi bak bintang celebriti internasional. Gstaad adalah desa style tradisional hanya satu jalan dengan pemandangan pegunungan chalets yang indah dan spektakuler - selalu indah dan mewah. Terlepas dari itu, Gstaad adalah tempat ski terbesar dan paling terkenal di seluruh dunia. Berikut beberapa tempat wisata yang bisa dikunjungi di Gstaad:</p>
        <ol>
        <li>
        <p>Ski Gstaad: Gstaad adalah tempat yang ideal untuk bermain ski dan snowboarding. Terdapat banyak jalur ski yang tersedia untuk semua tingkat keahlian.</p>
        </li>
        <li>
        <p>The Gstaad Palace: Ini adalah hotel bintang lima yang terkenal dan menawarkan pemandangan indah dari atas bukit. Meskipun tidak menginap di hotel, Anda bisa mengunjungi restoran hotel yang terkenal dan bar yang menawarkan berbagai pilihan kuliner dan minuman.</p>
        </li>
        <li>
        <p>Wisata ke desa-desa tradisional: Di sekitar Gstaad terdapat desa-desa yang indah dengan bangunan-bangunan tradisional Swiss yang menakjubkan. Desa Saanen, Rougemont dan Sch&ouml;nried adalah beberapa desa yang dapat dikunjungi.</p>
        </li>
        <li>
        <p>Bergerie de Plan-N&eacute;v&eacute;: Bergerie de Plan-N&eacute;v&eacute; adalah peternakan keju yang memproduksi keju-keju khas Swiss. Anda bisa mengunjungi peternakan ini dan belajar tentang proses pembuatan keju serta membeli produk-produk lokal yang dihasilkan.</p>
        </li>
        <li>
        <p>The Peak Walk by Tissot: Ini adalah jembatan penghubung yang menghubungkan dua puncak di Glacier 3000. The Peak Walk by Tissot menawarkan pemandangan yang indah dari atas pegunungan Alpen.</p>
        </li>
        </ol>
        <p>Untuk akomodasi, terdapat beberapa hotel mewah dan juga hotel murah. Ada juga beberapa hostel dan apartemen yang bisa disewa di sekitar Gstaad.</p>
        <p>Berikut ini adalah beberapa hotel mewah dan murah di Gstaad, Swiss:</p>
        <ol>
        <li>
        <p><a title="The Gstaad Palace" href="https://www.booking.com/hotel/ch/gstaad-palace.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Gstaad Palace</a> adalah hotel bintang lima yang terletak di pusat kota Gstaad. Hotel ini menawarkan fasilitas mewah seperti kolam renang dalam ruangan, spa, dan restoran mewah. Tarif kamar mulai dari CHF 750 (sekitar USD 827) per malam.</p>
        </li>
        <li>
        <p><a title="The Alpina Gstaad" href="https://www.booking.com/hotel/ch/the-alpina-gstaad.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Alpina Gstaad</a> adalah hotel mewah yang terletak di pusat kota Gstaad. Hotel ini menawarkan fasilitas mewah seperti kolam renang dalam ruangan, spa, dan restoran mewah. Tarif kamar mulai dari CHF 850 (sekitar USD 936) per malam.</p>
        </li>
        <li>
        <p><a title="Le Grand Bellevue" href="https://www.booking.com/hotel/ch/grand-bellevue.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Le Grand Bellevue</a> adalah hotel mewah yang terletak di pusat kota Gstaad. Hotel ini menawarkan fasilitas mewah seperti kolam renang dalam ruangan, spa, dan restoran mewah. Tarif kamar mulai dari CHF 470 (sekitar USD 518) per malam.</p>
        </li>
        <li>
        <p><a title="Hotel Bellerive Gstaad" href="https://www.booking.com/hotel/ch/bellerive-gstaad.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Bellerive Gstaad</a> adalah hotel yang terletak di pusat kota Gstaad. Hotel ini menawarkan kamar yang nyaman dengan harga yang terjangkau. Tarif kamar mulai dari CHF 150 (sekitar USD 165) per malam.</p>
        </li>
        <li>
        <p><a title="Gstaaderhof Swiss Quality Hotel" href="https://www.booking.com/hotel/ch/gstaaderhof.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Gstaaderhof Swiss Quality Hotel</a> adalah hotel yang terletak di pusat kota Gstaad. Hotel ini menawarkan kamar yang nyaman dengan harga yang terjangkau. Tarif kamar mulai dari CHF 140 (sekitar USD 154) per malam.</p>
        </li>
        <li>
        <p><a title="Gstaad Saanenland Youth Hostel" href="https://www.booking.com/hotel/ch/youthhostel-saanen.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Gstaad Saanenland Youth Hostel</a> adalah hostel yang terletak di pusat kota Gstaad. Hostel ini menawarkan kamar tidur bersama dengan harga yang terjangkau. Tarif kamar mulai dari CHF 40 (sekitar USD 44) per malam.</p>
        </li>
        </ol>
        <p>Itulah beberapa pilihan akomodasi mewah dan murah di Gstaad, Swiss. Harga yang disebutkan dapat berubah sewaktu-waktu tergantung pada musim dan ketersediaan kamar.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419588719_8416558462_f467f46843_b.jpg',
                'address' => 'Gstaad',
                'created_at' => null,
                'updated_at' => '2023-03-03 23:21:47',
            ],
            [
                'id' => 141,
                'country_id' => 5,
                'name' => 'St Moritz',
                'slug' => 'st-moritz',
                'hotels' => '',
                'latitude' => '46.4950997',
                'longitude' => '9.8361419',
                'attractions' => '<p>Selamat datang di St Moritz: surganya bagi para petualang-petualang bersemangat tinggi. St Moritz adalah tujuan ski yang terkenal didunia dimana memikat para turis setiap tahunnya. Keluarga kerajaan, pejabat-pejabat negara, atlet-atlet, dan bintang-bintang biasa terlihat di sini. Hotel, restauran-restauran, butik-butik dan health spa di sini tentunya mahal-mahal. Di sini akkomodasi dan fasilitasnya sangat lengkap, jadi tidak terlalu sulit untuk menemukan tempat di mana anda bisa menikmati ski. Berikut ini adalah beberapa wisata yang bisa dikunjungi di St Moritz:</p>
        <ol>
        <li>
        <p>Skiing dan Snowboarding: St Moritz terkenal sebagai destinasi ski dan snowboarding terbaik di dunia. Terdapat tiga area ski utama, yaitu Corviglia, Corvatsch dan Diavolezza yang menawarkan pemandangan alam pegunungan yang indah.</p>
        </li>
        <li>
        <p>Lake St. Moritz: Danau St Moritz menjadi salah satu daya tarik utama di kota ini. Pengunjung dapat menikmati pemandangan danau yang indah serta menikmati berbagai aktivitas seperti berjalan-jalan, bersepeda, dan memancing.</p>
        </li>
        <li>
        <p>Segantini Museum: Museum ini didedikasikan untuk seniman Giovanni Segantini, salah satu seniman paling terkenal di Swiss. Museum ini memiliki koleksi yang kaya akan karya-karya Seni.</p>
        </li>
        <li>
        <p>Muzeum Nair: Muzeum Nair memiliki koleksi seni modern dan kontemporer yang sangat menarik. Muzeum ini juga memiliki pemandangan yang menakjubkan dari kota St Moritz.</p>
        </li>
        <li>
        <p>Olympia Bob Run: Olympia Bob Run adalah arena luge terkenal di St Moritz. Pengunjung dapat merasakan sensasi luge di arena yang terkenal ini.</p>
        </li>
        </ol>
        <p>Berikut ini adalah beberapa pilihan akomodasi mewah dan murah di St Moritz:</p>
        <ol>
        <li>
        <p><a title="Badrutt\'s Palace Hotel" href="https://www.booking.com/hotel/ch/badrutt-s-palace-st-moritz.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Badrutt\'s Palace Hotel</a>: Hotel bintang lima yang terletak di pusat kota St Moritz. Hotel ini menawarkan pemandangan yang menakjubkan dari pegunungan danau. Tarif kamar dimulai dari CHF 550 (sekitar USD 610) per malam.</p>
        </li>
        <li>
        <p><a title="Kempinski Grand Hotel Des Bains" href="https://www.booking.com/hotel/ch/kempinski-grand-des-bains.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Kempinski Grand Hotel Des Bains</a>: Hotel bintang lima yang terletak di dekat danau St Moritz. Hotel ini menawarkan kamar yang elegan dan fasilitas yang lengkap. Tarif kamar dimulai dari CHF 350 (sekitar USD 390) per malam.</p>
        </li>
        <li>
        <p><a title="Youth Hostel St Moritz" href="https://www.booking.com/hotel/ch/jugendherberge-st-moritz.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Youth Hostel St Moritz</a>: Hostel yang terletak di kawasan yang tenang di St Moritz. Hostel ini menawarkan akomodasi yang terjangkau dengan fasilitas yang lengkap. Tarif kamar dimulai dari CHF 35 (sekitar USD 39) per malam.</p>
        </li>
        <li>
        <p><a title="Hotel Laudinella" href="https://www.booking.com/hotel/ch/laudinella.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Laudinella</a>: Hotel yang terletak di dekat stasiun kereta api St Moritz. Hotel ini menawarkan kamar yang nyaman dan fasilitas yang lengkap. Tarif kamar dimulai dari CHF 120 (sekitar USD 133) per malam.</p>
        </li>
        </ol>
        <p>Itulah beberapa pilihan wisata dan akomodasi di St Moritz, Swiss.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419589292_Olympiaschanze_St._Moritz.jpg',
                'address' => 'St Moritz',
                'created_at' => null,
                'updated_at' => '2023-03-03 23:25:56',
            ],
            [
                'id' => 142,
                'country_id' => 5,
                'name' => 'Mt. Pilatus',
                'slug' => 'mt-pilatus',
                'hotels' => '',
                'latitude' => '46.9691782',
                'longitude' => '8.2718593',
                'attractions' => '<p>Nikmati perjalanan listrik ke gunung Pilatus, gunung granit, dekat Lucerne, Swiss. Naik kereta gigi besi, atau kereta gantung untuk mencapai puncak gunung ini dan menikmati pemandangan yang luar biasa indah. Dari puncak ini anda bisa melihat pemandangan indah dengan 70 puncak dan 5 danau yang berkilau. Kalau anda berencana mengunjunginya di musim kemarau/panas, dan coba naik "Golden Round Trip" yang mana anda menggunakan kapal dari Lucerne menyebrang danau Lucerne ke Alpnachstad, lalu naik ke atas dengan kereta gantung dan turun ke bawah dengan gandola, atau aerial cable cars dan naik bus kembali ke Lucerne. Beberapa tempat wisata populer di Gunung Pilatus antara lain:</p>
        <ol>
        <li>
        <p>Ropeway Pilatus: Kabel gantung terpanjang di Swiss yang menghubungkan Fr&auml;km&uuml;ntegg ke Pilatus Kulm, yang menawarkan pemandangan indah di sepanjang perjalanan.</p>
        </li>
        <li>
        <p>Golden Round Trip: Perjalanan melalui kabel gantung, kereta gantung, dan kereta api yang membawa pengunjung ke puncak Gunung Pilatus dan menawarkan pemandangan indah sepanjang jalan.</p>
        </li>
        <li>
        <p>Dragon Path: Jalur pendakian yang menantang dan menawarkan pemandangan indah dari pegunungan Alpen.</p>
        </li>
        <li>
        <p>Titlis Cliff Walk: Jembatan gantung setinggi 3.000 meter di atas permukaan laut yang menawarkan pemandangan indah dari pegunungan Alpen dan gletser.</p>
        </li>
        <li>
        <p>Lucerne: Kota yang indah di sekitar Gunung Pilatus yang terkenal dengan Danau Lucerne dan jembatan Kapellbr&uuml;cke.</p>
        </li>
        <li>
        <p>Pilatus-Kulm: Puncak tertinggi di Gunung Pilatus dengan ketinggian 2.132 meter, yang menawarkan pemandangan indah dari pegunungan Alpen.</p>
        </li>
        <li>
        <p>Fr&auml;km&uuml;ntegg: Stasiun pertama kabel gantung dari Kriens ke Pilatus yang menawarkan pemandangan indah dari pegunungan Alpen.</p>
        </li>
        <li>
        <p>Kriens: Kota kecil di kaki Gunung Pilatus yang merupakan titik awal perjalanan dengan kabel gantung ke Gunung Pilatus.</p>
        </li>
        </ol>
        <p>Untuk akomodasi, di sekitar Gunung Pilatus terdapat beberapa hotel dan penginapan, baik yang mewah maupun yang lebih terjangkau. Beberapa hotel mewah di sekitar Gunung Pilatus antara lain:</p>
        <ol>
        <li>
        <p><a title="Hotel Pilatus-Kulm" href="https://www.booking.com/hotel/ch/pilatus-kulm.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Pilatus-Kulm</a>: Hotel mewah yang terletak di puncak Gunung Pilatus, menawarkan pemandangan indah dari pegunungan Alpen.</p>
        </li>
        <li>
        <p><a title="Hotel Bellevue" href="https://www.booking.com/hotel/ch/bellevue-kriens.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Bellevue</a>: Hotel mewah yang terletak di Lucerne dengan pemandangan yang indah ke Danau Lucerne.</p>
        </li>
        </ol>
        <p>Sedangkan untuk hotel yang lebih terjangkau, beberapa pilihan yang bisa dipertimbangkan antara lain:</p>
        <ol>
        <li>
        <p><a title="Youth Hostel Luzern" href="https://www.booking.com/hotel/ch/jugendherberge-luzern.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Youth Hostel Luzern</a>: Penginapan yang terletak di kota Lucerne dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Hotel Thorenberg" href="https://www.booking.com/hotel/ch/thorenberg.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Thorenberg</a>: Hotel yang terletak di luar kota Lucerne dengan harga yang lebih terjangkau.</p>
        </li>
        <li>
        <p><a title="Hotel Waldegg" href="https://www.booking.com/hotel/ch/engelberg-waldegg.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Waldegg</a>: Hotel yang terletak di kaki Gunung Pilatus dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Hotel Spatz" href="https://www.booking.com/hotel/ch/hotelspatzluzern.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Spatz</a>: Hotel kecil yang terletak di Lucerne dengan harga yang lebih terjangkau.</p>
        </li>
        </ol>
        <p>Namun, untuk wisata di Gunung Pilatus, disarankan untuk menginap di Lucerne karena lebih mudah dijangkau dan memiliki lebih banyak pilihan akomodasi. Lucerne juga memiliki berbagai macam restoran dan kafe yang menawarkan berbagai hidangan lokal dan internasional yang lezat.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419589827_1024px-Gipfel_und_Bergstation_Pilatus.JPG',
                'address' => '6053 Lucerne',
                'created_at' => null,
                'updated_at' => '2023-03-03 23:31:54',
            ],
            [
                'id' => 143,
                'country_id' => 5,
                'name' => 'Doubs Gorge',
                'slug' => 'doubs-gorge',
                'hotels' => '',
                'latitude' => '47.111035',
                'longitude' => '6.74695',
                'attractions' => '<p>Apabila anda bepergian ke negeri surga Swiss di Eropa maka coba usahakan mengunjungi Doubs Gorge, yang terletak di dataran tinggi Jura diantara Perancis dan Swiss. Di tempat ini anda akan menemukan sebuah air terjun yang indah. Beberapa wisata menarik di Doubs Gorge Swiss, antara lain:</p>
        <ol>
        <li>
        <p>Creux du Van: Ini adalah sebuah lembah besar di Doubs Gorge Swiss yang terkenal dengan pemandangan alamnya yang spektakuler. Anda bisa melakukan pendakian untuk menikmati pemandangan lembah yang mengagumkan ini.</p>
        </li>
        <li>
        <p>Lac des Brenets: Danau ini terletak di perbatasan Prancis-Swiss dan menawarkan pemandangan alam yang indah. Anda bisa berjalan-jalan di sekitar danau, menikmati pemandangan pegunungan dan hutan sekitarnya.</p>
        </li>
        <li>
        <p>Saut du Doubs: Air terjun ini terletak di perbatasan Prancis-Swiss dan menjadi salah satu daya tarik utama di Doubs Gorge Swiss. Anda bisa mengambil perahu untuk melihat air terjun ini dari dekat.</p>
        </li>
        <li>
        <p>Gorges du Seyon: Kawasan ini menawarkan trekking yang menantang dan pemandangan alam yang indah di sepanjang sungai Seyon.</p>
        </li>
        <li>
        <p>Ch&acirc;teau de Joux: Ini adalah sebuah kastil yang terletak di dekat Doubs Gorge Swiss dan menjadi salah satu wisata sejarah yang menarik untuk dikunjungi. Kastil ini memiliki sejarah yang panjang dan menampilkan berbagai artefak sejarah dan senjata.</p>
        </li>
        <li>
        <p>La Sagne: Kawasan ini adalah tempat yang indah untuk berjalan-jalan dan menikmati alam di Doubs Gorge Swiss. Anda bisa berjalan-jalan melalui hutan dan melihat pemandangan yang indah dari pegunungan dan lembah.</p>
        </li>
        <li>
        <p>Les Verri&egrave;res: Kota kecil yang terletak di Doubs Gorge Swiss dan menawarkan pemandangan yang indah dari pegunungan dan lembah sekitarnya. Anda juga bisa mengunjungi beberapa museum dan galeri seni di kota ini.</p>
        </li>
        <li>
        <p>Les Brenets: Kota kecil yang terletak di tepi danau Brenets. Di sini, Anda bisa berjalan-jalan di sepanjang danau dan menikmati pemandangan yang indah, atau mengambil perahu untuk menjelajahi danau tersebut.</p>
        </li>
        <li>
        <p>Val de Travers: Kawasan ini terletak di Doubs Gorge Swiss dan menawarkan pemandangan alam yang indah dan trekking yang menantang. Anda bisa mengunjungi beberapa tempat sejarah seperti museum absinthe dan kilang anggur.</p>
        </li>
        <li>
        <p>Vue des Alpes: Ini adalah sebuah puncak di Doubs Gorge Swiss yang menawarkan pemandangan spektakuler dari pegunungan dan lembah sekitarnya. Anda bisa naik mobil atau sepeda motor ke puncak ini dan menikmati pemandangan yang indah.</p>
        </li>
        </ol>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419590746_Gorges_du_Doubs_03.jpg',
                'address' => 'Doubs Gorge',
                'created_at' => null,
                'updated_at' => '2023-03-03 23:34:31',
            ],
            [
                'id' => 144,
                'country_id' => 13,
                'name' => 'Mariahilfer Straße',
                'slug' => 'mariahilfer-strasse',
                'hotels' => '',
                'latitude' => '48.1957327',
                'longitude' => '16.3390333',
                'attractions' => '<p>Mariahilfer Stra&szlig;e adalah jalan belanja terpanjang di Wina, Austria, dan terdapat banyak hal yang dapat dilihat dan dilakukan di sana. Beberapa hal yang dapat dilihat di Mariahilfer Stra&szlig;e antara lain:</p>
        <ol>
        <li>
        <p>Jendela toko yang menarik: Ada banyak toko di sepanjang Mariahilfer Stra&szlig;e yang menawarkan jendela toko yang menarik dengan dekorasi yang indah dan menarik perhatian. Beberapa toko bahkan menawarkan pameran seni di jendela toko mereka.</p>
        </li>
        <li>
        <p>Arsitektur bangunan: Mariahilfer Stra&szlig;e memiliki bangunan-bangunan tua yang indah dan menarik, seperti bangunan bergaya Art Nouveau. Beberapa bangunan memiliki patung dan ornamen yang indah di fasadnya.</p>
        </li>
        <li>
        <p>Kafe dan restoran: Mariahilfer Stra&szlig;e memiliki banyak kafe dan restoran yang menyajikan makanan dan minuman lokal maupun internasional. Ini adalah tempat yang bagus untuk menikmati minuman dan makanan sambil bersantai dan menikmati pemandangan.</p>
        </li>
        <li>
        <p>Museum dan galeri: Ada beberapa museum dan galeri seni di sepanjang Mariahilfer Stra&szlig;e yang menawarkan pameran seni dan budaya yang menarik.</p>
        </li>
        <li>
        <p>Ruang terbuka hijau: Terdapat beberapa taman dan ruang terbuka hijau di Mariahilfer Stra&szlig;e, seperti Amerlinghaus Garden dan Haus des Meeres. Ini adalah tempat yang bagus untuk beristirahat sejenak dan menikmati suasana.</p>
        </li>
        <li>
        <p>Aktivitas olahraga: Mariahilfer Stra&szlig;e merupakan tempat yang bagus untuk melakukan olahraga, seperti jogging atau bersepeda. Terdapat jalur sepeda yang terpisah dari jalan raya dan trotoar yang memudahkan pengunjung untuk bersepeda dengan aman dan nyaman.</p>
        </li>
        </ol>
        <p>Mariahilfer Stra&szlig;e juga merupakan jalan belanja terkenal di Wina, Austria, dan terdapat banyak butik di sana. Beberapa butik yang dapat ditemukan di Mariahilfer Stra&szlig;e antara lain:</p>
        <ol>
        <li>Zara</li>
        <li>H&amp;M</li>
        <li>Primark</li>
        <li>Mango</li>
        <li>Bershka</li>
        <li>Forever 21</li>
        <li>Nike</li>
        <li>Adidas</li>
        <li>Pull &amp; Bear</li>
        <li>The North Face</li>
        <li>Desigual</li>
        <li>Foot Locker</li>
        <li>Levi\'s</li>
        <li>Tommy Hilfiger</li>
        <li>Calvin Klein</li>
        </ol>
        <p>Tentu saja, daftar ini hanya beberapa contoh butik yang ada di Mariahilfer Stra&szlig;e dan terdapat banyak lagi butik dan toko lainnya di sepanjang jalan tersebut.</p>
        <p><strong>Hotel</strong></p>
        <p>Terdapat banyak hotel yang berada di sekitar Mariahilfer Stra&szlig;e. Beberapa hotel yang dapat ditemukan di sekitar Mariahilfer Stra&szlig;e antara lain:</p>
        <ol>
        <li>
        <p><a title="NH Collection Wien Zentrum" href="https://www.booking.com/hotel/at/nhatterseehaus.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">NH Collection Wien Zentrum</a>: Hotel ini terletak di sebelah selatan Mariahilfer Stra&szlig;e dan menawarkan kamar-kamar yang nyaman dan modern serta fasilitas seperti pusat kebugaran dan restoran.</p>
        </li>
        <li>
        <p><a title="Fleming\'s Selection Hotel Wien-City" href="https://www.booking.com/hotel/at/fleming-s-deluxe-wien-city.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Fleming\'s Selection Hotel Wien-City</a>: Hotel ini terletak di dekat Stasiun Kereta Api Wina Barat dan hanya beberapa menit berjalan kaki dari Mariahilfer Stra&szlig;e. Hotel ini menawarkan kamar-kamar yang elegan dan modern serta fasilitas seperti pusat kebugaran dan restoran.</p>
        </li>
        <li>
        <p><a title="Motel One Wien-Westbahnhof" href="https://www.booking.com/hotel/at/motel-one-wien-westbahnhof.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Motel One Wien-Westbahnhof</a>: Hotel ini terletak di sebelah selatan Mariahilfer Stra&szlig;e dan menawarkan kamar-kamar yang nyaman dan modern serta fasilitas seperti bar dan lounge.</p>
        </li>
        <li>
        <p>Hotel F&uuml;rst Metternich: Hotel ini terletak di sebelah selatan Mariahilfer Stra&szlig;e dan menawarkan kamar-kamar yang nyaman dan tradisional serta fasilitas seperti bar dan lounge.</p>
        </li>
        <li>
        <p><a title="25hours Hotel beim MuseumsQuartier" href="https://www.booking.com/hotel/at/25hours-wien.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">25hours Hotel beim MuseumsQuartier</a>: Hotel ini terletak di dekat Mariahilfer Stra&szlig;e dan menawarkan kamar-kamar yang unik dan kreatif serta fasilitas seperti bar dan restoran.</p>
        </li>
        </ol>
        <p>Tentu saja, ini hanya beberapa contoh hotel yang terletak di sekitar Mariahilfer Stra&szlig;e dan masih banyak lagi pilihan hotel yang tersedia di daerah tersebut sesuai dengan kebutuhan dan preferensi masing-masing.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419771498_Mariahilferstrasse_(4008547760).jpg',
                'address' => 'Mariahilfer Straße',
                'created_at' => null,
                'updated_at' => '2023-02-25 20:28:05',
            ],
            [
                'id' => 145,
                'country_id' => 13,
                'name' => 'Landstraße',
                'slug' => 'landstrasse',
                'hotels' => '',
                'latitude' => '48.3036569',
                'longitude' => '14.2884596',
                'attractions' => '<p>Linzer Landstra&szlig;e adalah salah satu jalan utama di Linz, Austria, dan terdapat banyak hal yang dapat dilihat dan dilakukan di sana. Beberapa hal yang dapat dilihat di Linzer Landstra&szlig;e antara lain:</p>
        <ol>
        <li>
        <p>Ars Electronica Center: Ini adalah pusat seni dan teknologi yang menawarkan pameran interaktif dan kegiatan kreatif. Pengunjung dapat mempelajari tentang perkembangan terbaru di bidang teknologi, seni, dan sains.</p>
        </li>
        <li>
        <p>Musiktheater Linz: Ini adalah teater terbesar di Austria dan menawarkan pertunjukan musik dan drama yang menarik sepanjang tahun. Teater ini memiliki desain arsitektur modern dan unik yang menjadikannya tempat yang menarik untuk dikunjungi.</p>
        </li>
        <li>
        <p>Linz Main Square: Ini adalah alun-alun utama di Linz dan menawarkan pemandangan yang indah dan suasana yang hidup. Di sekitar alun-alun terdapat beberapa bangunan bersejarah dan tempat makan dan minum yang menarik.</p>
        </li>
        <li>
        <p>Lentos Art Museum: Ini adalah museum seni modern dan kontemporer yang menawarkan koleksi seni yang luas dan menarik. Pengunjung dapat melihat berbagai karya seni dari seniman lokal dan internasional.</p>
        </li>
        <li>
        <p>Old Cathedral: Katedral ini dibangun pada abad ke-17 dan menawarkan arsitektur barok yang indah dan mengesankan. Di dalam katedral terdapat patung-patung dan lukisan-lukisan bersejarah yang menarik.</p>
        </li>
        <li>
        <p>Linz Castle: Ini adalah sebuah kastil yang dibangun pada abad ke-13 dan menawarkan pemandangan indah kota Linz. Pengunjung dapat mengunjungi museum dan galeri seni di dalam kastil dan menikmati pemandangan kota dari atas kastil.</p>
        </li>
        </ol>
        <p>Tentu saja, daftar ini hanya beberapa contoh hal yang dapat dilihat dan dilakukan di Linzer Landstra&szlig;e dan masih banyak lagi hal menarik lainnya yang dapat ditemukan di sana.</p>
        <p>Linzer Landstra&szlig;e adalah jalan utama di kota Linz, Austria dan terdapat berbagai toko dan butik yang menjual berbagai merek terkenal. Berikut ini adalah beberapa contoh toko merk yang dapat ditemukan di Linzer Landstra&szlig;e:</p>
        <ol>
        <li>
        <p>Zara: Butik ini menawarkan berbagai pakaian dan aksesori untuk pria, wanita, dan anak-anak dengan merek Zara yang terkenal.</p>
        </li>
        <li>
        <p>H&amp;M: Toko pakaian terkenal ini menawarkan berbagai jenis pakaian untuk pria, wanita, dan anak-anak dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p>Swarovski: Butik ini menawarkan berbagai jenis perhiasan dan aksesoris kristal terkenal dari merek Swarovski.</p>
        </li>
        <li>
        <p>Esprit: Toko pakaian yang terkenal ini menawarkan berbagai jenis pakaian kasual dan formal untuk pria dan wanita.</p>
        </li>
        <li>
        <p>Mango: Butik ini menawarkan berbagai jenis pakaian dan aksesori trendi untuk wanita dengan merek Mango yang terkenal.</p>
        </li>
        <li>
        <p>Adidas: Toko olahraga terkenal ini menawarkan berbagai jenis pakaian, sepatu, dan aksesoris dengan merek Adidas yang terkenal.</p>
        </li>
        <li>
        <p>Douglas: Toko kosmetik terkenal ini menawarkan berbagai jenis produk kecantikan dan wewangian dari merek-merek terkenal seperti Chanel, Dior, dan Gucci.</p>
        </li>
        <li>
        <p>Apple: Toko Apple menawarkan berbagai jenis produk Apple seperti iPhone, iPad, Mac, dan aksesoris lainnya.</p>
        </li>
        <li>
        <p>Saturn: Toko elektronik dan barang-barang rumah tangga yang menawarkan berbagai jenis produk dari merek terkenal seperti Samsung, Sony, dan Philips.</p>
        </li>
        </ol>
        <p>Tentu saja, ini hanya beberapa contoh toko merk yang dapat ditemukan di Linzer Landstra&szlig;e dan masih banyak lagi pilihan toko dan butik yang tersedia di daerah tersebut sesuai dengan kebutuhan dan preferensi masing-masing.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419771803_1024px-Linz_Landstrasse_32.jpg',
                'address' => 'Landstraße, Linz',
                'created_at' => null,
                'updated_at' => '2023-02-25 20:32:12',
            ],
            [
                'id' => 146,
                'country_id' => 13,
                'name' => 'Maria Theresien-Straße',
                'slug' => 'maria-theresien-strasse',
                'hotels' => '',
                'latitude' => '47.26481',
                'longitude' => '11.3947',
                'attractions' => '<p>Maria Theresien-Stra&szlig;e di Innsbruck, Austria adalah sebuah jalan utama yang terkenal dengan keindahan arsitektur bangunan-bangunannya dan juga menjadi salah satu tujuan wisata populer. Di sepanjang jalan ini, terdapat berbagai toko dan butik yang menjual berbagai produk, mulai dari merek terkenal hingga produk lokal. Berikut adalah beberapa tempat belanja yang bisa ditemukan di Maria Theresien-Stra&szlig;e:</p>
        <ol>
        <li>
        <p>Kaufhaus Tyrol: Ini adalah pusat perbelanjaan besar yang terletak di sebelah timur Maria Theresien-Stra&szlig;e dan menawarkan berbagai pilihan merek terkenal, termasuk H&amp;M, Zara, dan Mango.</p>
        </li>
        <li>
        <p>Innsbruck Market Hall: Terletak di ujung barat Maria Theresien-Stra&szlig;e, pasar ini adalah tempat yang ideal untuk membeli makanan dan minuman lokal, seperti daging, ikan, roti, dan keju.</p>
        </li>
        <li>
        <p>Swarovski Kristallwelten Store: Toko ini menawarkan berbagai jenis perhiasan dan aksesoris kristal terkenal dari merek Swarovski yang berasal dari Austria.</p>
        </li>
        <li>
        <p>Munding: Toko roti dan kue ini terkenal dengan kue-kue dan roti-ratinya yang lezat. Terletak di ujung barat Maria Theresien-Stra&szlig;e, Munding juga menyediakan berbagai jenis kue khas Austria seperti Sachertorte.</p>
        </li>
        <li>
        <p>Tiroler Heimatwerk: Toko ini menawarkan berbagai produk khas Tyrol, termasuk pakaian tradisional, tekstil, kerajinan tangan, dan souvenir.</p>
        </li>
        <li>
        <p>Anton Giner: Toko perhiasan yang menawarkan berbagai jenis perhiasan klasik dan modern dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p>Schuhhaus Hosp: Toko sepatu ini menawarkan berbagai jenis sepatu, dari sepatu kasual hingga sepatu formal, dengan merek terkenal seperti Birkenstock, Gabor, dan Clarks.</p>
        </li>
        </ol>
        <p>Tentu saja, ini hanya beberapa contoh tempat belanja di Maria Theresien-Stra&szlig;e dan masih banyak lagi pilihan toko dan butik yang tersedia di daerah tersebut sesuai dengan kebutuhan dan preferensi masing-masing.</p>
        <p>Maria Theresien-Stra&szlig;e adalah jalan utama di kota Innsbruck, Austria yang terkenal karena keindahan arsitektur bangunan-bangunannya dan juga sebagai lokasi objek wisata populer. Berikut adalah beberapa hotel yang terletak dekat dengan Maria Theresien-Stra&szlig;e:</p>
        <ol>
        <li>
        <p><a title="Hotel Zach" href="https://www.booking.com/hotel/at/zach.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Zach</a>: Terletak di sebelah barat Maria Theresien-Stra&szlig;e, hotel ini menawarkan kamar yang nyaman dengan dekorasi tradisional Austria. Hotel Zach juga memiliki sauna, ruang pijat, dan teras berjemur.</p>
        </li>
        <li>
        <p><a title="The Penz Hotel" href="https://www.booking.com/hotel/at/thepenzhotelinns.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Penz Hotel</a>: Hotel ini terletak di ujung barat Maria Theresien-Stra&szlig;e dan menawarkan kamar-kamar yang modern dan elegan dengan pemandangan kota Innsbruck. Hotel ini juga memiliki bar di atap yang menawarkan pemandangan kota yang spektakuler.</p>
        </li>
        <li>
        <p><a title="Adlers Hotel" href="https://www.booking.com/hotel/at/adlers-mountain-view-design.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Adlers Hotel</a>: Hotel yang terletak di ujung barat daya Maria Theresien-Stra&szlig;e ini menawarkan kamar-kamar modern yang luas dengan pemandangan Alpen. Hotel ini juga memiliki restoran dan bar di atap yang menawarkan pemandangan kota dan Pegunungan Alpen.</p>
        </li>
        <li>
        <p><a title="Hotel Innsbruck" href="https://www.booking.com/hotel/at/hotelinnsbruck.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Innsbruck</a>: Terletak di sebelah selatan Maria Theresien-Stra&szlig;e, hotel ini menawarkan kamar-kamar yang luas dengan dekorasi modern dan elegan. Hotel Innsbruck juga memiliki spa dengan kolam renang dalam ruangan, sauna, dan pusat kebugaran.</p>
        </li>
        <li>
        <p><a title="Hotel Central" href="https://www.booking.com/hotel/at/hote-central.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Central</a>: Terletak di sebelah timur Maria Theresien-Stra&szlig;e, hotel ini menawarkan kamar-kamar dengan dekorasi yang tradisional dan fasilitas modern. Hotel Central juga memiliki restoran yang menyajikan masakan lokal dan internasional.</p>
        </li>
        <li>
        <p><a title="Hotel Grauer B&auml;r" href="https://www.booking.com/hotel/at/htelgrauerbaerinnsbr.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Grauer B&auml;r</a>: Terletak di ujung utara Maria Theresien-Stra&szlig;e, hotel ini menawarkan kamar-kamar yang nyaman dengan dekorasi tradisional dan fasilitas modern. Hotel Grauer B&auml;r juga memiliki restoran dan bar yang menyajikan masakan lokal dan internasional.</p>
        </li>
        </ol>
        <p>Berikut adalah beberapa pilihan hotel murah yang terletak di dekat Maria Theresien-Stra&szlig;e, Innsbruck, Austria:</p>
        <ol>
        <li>
        <p><a title="Basic Hotel Innsbruck" href="https://www.booking.com/hotel/at/basic-innsbruck.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Basic Hotel Innsbruck</a>: Terletak hanya beberapa menit berjalan kaki dari Maria Theresien-Stra&szlig;e, hotel ini menawarkan kamar-kamar yang sederhana namun bersih dan nyaman dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Hotel Goldene Krone Innsbruck" href="https://www.booking.com/hotel/at/goldene.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Goldene Krone Innsbruck</a>: Terletak di pusat kota Innsbruck, hotel ini menawarkan kamar-kamar yang bersih dan nyaman dengan harga yang terjangkau. Hotel ini juga memiliki restoran yang menyajikan masakan lokal dan internasional.</p>
        </li>
        <li>
        <p><a title="Hotel Tautermann" href="https://www.booking.com/hotel/at/hoteltautermann.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Tautermann</a>: Terletak hanya beberapa menit berjalan kaki dari Maria Theresien-Stra&szlig;e, hotel ini menawarkan kamar-kamar yang sederhana namun bersih dan nyaman dengan harga yang terjangkau.</p>
        </li>
        </ol>
        <p>Harap dicatat bahwa tarif hotel dapat bervariasi tergantung pada musim dan ketersediaan kamar, jadi pastikan untuk memeriksa harga terbaru dan ketersediaan kamar sebelum melakukan pemesanan.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419772088_1024px-Maria-Theresien-Strasse.jpg',
                'address' => 'Maria Theresien-Straße, Innsbruck',
                'created_at' => null,
                'updated_at' => '2023-02-25 20:44:00',
            ],
            [
                'id' => 147,
                'country_id' => 13,
                'name' => 'Getreidegasse dan Linzergasse',
                'slug' => 'getreidegasse-dan-linzergasse',
                'hotels' => '',
                'latitude' => '48.2043265',
                'longitude' => '14.4867439',
                'attractions' => '<p>Getreidegasse dan Linzergasse di Salzburg, Austria adalah tempat yang bagus untuk berbelanja. Terdapat beragam toko yang menjual barang-barang khas Austria dan merek-merek internasional. Berikut adalah beberapa tempat yang dapat Anda kunjungi untuk berbelanja di Getreidegasse dan Linzergasse:</p>
        <ol>
        <li>
        <p>Toko-toko kain brokat: Getreidegasse adalah tempat yang baik untuk membeli kain brokat tradisional Austria. Anda dapat menemukan beragam toko yang menjual kain brokat dalam berbagai warna dan pola.</p>
        </li>
        <li>
        <p>Toko perhiasan: Terdapat banyak toko perhiasan di Getreidegasse dan Linzergasse yang menjual perhiasan khas Austria seperti kalung Salzburg dan bros Edelweiss.</p>
        </li>
        <li>
        <p>Toko-toko merek terkenal: Jika Anda mencari merek-merek internasional, Anda dapat mengunjungi toko-toko seperti Louis Vuitton, Gucci, dan Chanel di Getreidegasse.</p>
        </li>
        <li>
        <p>Toko kerajinan tangan: Terdapat banyak toko kerajinan tangan di kedua jalan ini yang menjual produk-produk yang dibuat secara lokal seperti boneka, topi, dan tas.</p>
        </li>
        <li>
        <p>Toko barang antik: Terdapat beberapa toko barang antik di Getreidegasse dan Linzergasse. Anda dapat menemukan beragam barang antik seperti piring kuno, perabotan, dan lampu.</p>
        </li>
        </ol>
        <p>Harap dicatat bahwa harga di toko-toko ini dapat bervariasi tergantung pada merek dan kualitas barang. Jangan ragu untuk menawar harga jika Anda merasa harga yang ditawarkan terlalu tinggi.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419772979_640px-Getreidegasse_Salzburg.jpg',
                'address' => 'Getreidegasse',
                'created_at' => null,
                'updated_at' => '2023-02-25 20:52:07',
            ],
            [
                'id' => 148,
                'country_id' => 2,
                'name' => 'Rue Antoine Dansaertstraat',
                'slug' => 'rue-antoine-dansaertstraat',
                'hotels' => '',
                'latitude' => '50.8512981',
                'longitude' => '4.3447719',
                'attractions' => 'Jalan jalan di sepanjang Rue Antoine Dansaert Straat dan sekitar daerah untuk menemukan pusat dan jantung dunia fashion dan design kota Brussel dengan konsentrasi terbaik dari top desinger-designernya dan butik-butik mode nya.',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419773118_Coin_Walvis_rue_Antoine_Dansaert.JPG',
                'address' => 'Rue Antoine Dansaertstraat, Brussels',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 149,
                'country_id' => 2,
                'name' => 'Avenue Louise',
                'slug' => 'avenue-louise',
                'hotels' => '',
                'latitude' => '50.825587',
                'longitude' => '4.365307',
                'attractions' => 'Avenue Louise adalah catwalk yang panjang dari merk-merk fashion yang terkenal, termasuk yang besar dan skala internasional seperti Chanel, LV, Hermes, Armani, Versace dan Christian Dior. Bagian pertama adalah salah satu dari daerah perbelanjaan yang paling menarik di kota, terdapat toko-toko dengan barang-barang yang level menengah, dengan harga tercapai tapi cukup berkualitas yang mengelilingi gedung-gedung pertokoan yang besar.',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419773326_Brusel,_Louise_III.jpg',
                'address' => 'Avenue Louise, Brussel',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 150,
                'country_id' => 2,
                'name' => 'Galerie St Hubert',
                'slug' => 'galerie-st-hubert',
                'hotels' => '',
                'latitude' => '50.8479524',
                'longitude' => '4.3553039',
                'attractions' => 'Di bangun tahun 1847, Galerie St Hubert adalah gedung pusat perbelanjaan yang indah dengan model khas gang beratap/koridor (arcade) dengan atap kaca di tengah kota, berjajar dengan kafe-kafe, bioskop, dan toko-toko mahal. Di dalamnya terdapat toko-toko terkenal dengan tampilan jendela yang indah. Gedung ini dikatakan sebagai model arcade yang bertama di Eropa.',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419773586_640px-Galeries_Royales_Saint-Hubert.jpg',
                'address' => 'Galerie du roi 5, 1000 Brussel',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 151,
                'country_id' => 2,
                'name' => 'Maasmechelen Outlet Village Belgium',
                'slug' => 'maasmechelen-outlet-village-belgium',
                'hotels' => '',
                'latitude' => '51.0012611',
                'longitude' => '5.7102112',
                'attractions' => '<p>Maasmechelen Outlet Village berada di Belgia, dekat dengan perbatasan dengan 2 negara lain, negeri Belanda dan Jerman. Kota-kota besar seperti&nbsp;Antwerpen, Brussel, Dusseldorf, Cologne/Koln and Maastricht terletak tidak jauh dari sini. Desa&nbsp;Maasmechelen adalah tempat lebih dari 100 toko yang menjual merk-merk lokal dan internasional dengan potongan harga tahunan.</p><p>Di sini bener-bener asik untuk belanja karena suasananya yang santai dan atmosfir pedesaan di eropa yang bebas stress. Dan keindahan pemandangan dari desa yang bersejarah bisa jadi tempat yang nyaman untuk beristirahat beberapa hari. Desa outlet ini adalah bagian dari mata rantai belanja outlet&nbsp;Chichester.</p><p>Merk-merk apa saja kah yang disediakan, bisa anda lihat di halaman web mereka di <a href="http://www.maasmechelenvillage.com/en/brands/brands">sini</a>.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419774199_34913488.jpg',
                'address' => 'Zetellaan 100 3630 Maasmechelen',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 152,
                'country_id' => 2,
                'name' => 'McArthurGlen Designer Outlet',
                'slug' => 'mcarthurglen-designer-outlet',
                'hotels' => '',
                'latitude' => '49.6097453',
                'longitude' => '5.8086232',
                'attractions' => 'McArthurGlen Designer Outlet Luxembourg sebenarnya berada di Belgia, tapi berada beberapa meter dari perbatasan Luxemburg. 35 merk-merk internasional yang terkenal sudah membuka butik-butiknya di sana: Petit Bateau, McGregor dan Gaastra, Desigual, Guess, Tommy Hilfiger, Pepe Jeans, Nike, Lee Wrangler, Replay, Billabong, Levis, Möve. Desa outlet ini adalah bagian dari outlet besar cabang McArthurGlen Designer Outlets.',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419775043_mcarthurglen-outlet.jpg',
                'address' => 'Rue d&#039;Arlon 199, 6780 Messancy',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 153,
                'country_id' => 15,
                'name' => 'ILLUM',
                'slug' => 'illum',
                'hotels' => '',
                'latitude' => '55.679279',
                'longitude' => '12.580649',
                'attractions' => '<p>ILLUM Denmark adalah pusat perbelanjaan yang terkenal di Kopenhagen, Denmark, dan menawarkan berbagai macam toko yang menjual produk-produk mewah dan berkualitas tinggi. Ada banyak merek terkenal dari dalam dan luar negeri yang dapat Anda temukan di ILLUM Denmark, seperti Louis Vuitton, Gucci, Prada, Chanel, Hermès, dan banyak lagi.</p>
        <p>Anda dapat menemukan berbagai macam produk, seperti pakaian, sepatu, tas, perhiasan, kosmetik, dan lain sebagainya. Selain itu, ILLUM Denmark juga menawarkan departemen makanan yang menjual makanan dan minuman berkualitas tinggi.</p>
        <p>Jika Anda ingin berbelanja di ILLUM Denmark, pastikan untuk memperhatikan jam buka dan lokasi toko-toko yang ingin Anda kunjungi. Anda juga dapat memanfaatkan fasilitas penitipan barang di pusat perbelanjaan ini, sehingga Anda dapat dengan mudah berbelanja tanpa perlu membawa banyak tas.</p>
        <p>Berikut adalah daftar beberapa hotel yang terletak dekat dengan ILLUM Denmark di Kopenhagen, Denmark:</p>
        <ol>
        <li><a title="Nobis Hotel Copenhagen" href="https://www.booking.com/hotel/dk/nobis-copenhagen.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Nobis Hotel Copenhagen</a> (jarak sekitar 0,2 km dari ILLUM Denmark)</li>
        <li><a title="Skt. Petri Hotel" href="https://www.booking.com/hotel/dk/hotel-skt-petri.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Skt. Petri Hotel</a> (jarak sekitar 0,3 km dari ILLUM Denmark)</li>
        <li><a title="Hotel Sanders" href="https://www.booking.com/hotel/dk/sanders.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Sanders</a> (jarak sekitar 0,4 km dari ILLUM Denmark)</li>
        <li><a title="Hotel Danmark by Brøchner Hotels" href="https://www.booking.com/hotel/dk/hoteldanmarkcopenhagen.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Danmark by Brøchner Hotels</a> (jarak sekitar 0,5 km dari ILLUM Denmark)</li>
        <li><a title="71 Nyhavn Hotel" href="https://www.booking.com/hotel/dk/nyhavn.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">71 Nyhavn Hotel</a> (jarak sekitar 0,6 km dari ILLUM Denmark)</li>
        <li><a title="Copenhagen Admiral Hotel" href="https://www.booking.com/hotel/dk/copenhagen-admiral.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Copenhagen Admiral Hotel</a> (jarak sekitar 0,7 km dari ILLUM Denmark)</li>
        <li><a title="Hotel SP34" href="https://www.booking.com/hotel/dk/hotel-sp34.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel SP34</a> (jarak sekitar 0,8 km dari ILLUM Denmark)</li>
        <li><a title="Scandic Palace Hotel" href="https://www.booking.com/hotel/dk/scandic-palace.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Scandic Palace Hotel</a> (jarak sekitar 0,9 km dari ILLUM Denmark)</li>
        <li><a title="Radisson Collection Royal Hotel" href="https://www.booking.com/hotel/dk/radisson-sas-royal.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Radisson Collection Royal Hotel</a>, Copenhagen (jarak sekitar 1 km dari ILLUM Denmark)</li>
        <li><a title="Hotel SKT. Annæ" href="https://www.booking.com/hotel/dk/hotel-skt-annae.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel SKT. Annæ</a> (jarak sekitar 1,2 km dari ILLUM Denmark)</li>
        </ol>
        <p>Semua hotel ini menawarkan akomodasi berkualitas dengan berbagai fasilitas, seperti Wi-Fi gratis, restoran, bar, spa, gym, dan masih banyak lagi. Selain itu, lokasi yang dekat dengan ILLUM Denmark memudahkan Anda untuk menjelajahi kota Kopenhagen dan menikmati berbagai atraksi wisata yang ditawarkan.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419783035_640px-Illum.jpg',
                'address' => 'Østergade 52 1001 København K',
                'created_at' => null,
                'updated_at' => '2023-02-26 13:08:20',
            ],
            [
                'id' => 154,
                'country_id' => 15,
                'name' => 'Magasin du Nord',
                'slug' => 'magasin-du-nord',
                'hotels' => '',
                'latitude' => '55.679167',
                'longitude' => '12.584793',
                'attractions' => '<p>Magasin du Nord adalah departemen store terbesar di Copenhagen, Denmark, dan menawarkan berbagai macam barang dan merek terkenal. Berikut adalah beberapa kategori barang yang dapat Anda temukan di Magasin du Nord:</p>
        <ol>
        <li>
        <p>Pakaian: Magasin du Nord menawarkan berbagai macam pakaian untuk pria, wanita, dan anak-anak. Anda dapat menemukan merek-merek terkenal seperti Gucci, Burberry, Ganni, dan masih banyak lagi.</p>
        </li>
        <li>
        <p>Tas: Di Magasin du Nord, Anda dapat menemukan berbagai macam tas dari merek-merek terkenal seperti Louis Vuitton, Chanel, dan Prada.</p>
        </li>
        <li>
        <p>Sepatu: Magasin du Nord menawarkan berbagai macam sepatu untuk pria, wanita, dan anak-anak dari merek-merek terkenal seperti Gucci, Burberry, dan Adidas.</p>
        </li>
        <li>
        <p>Aksesoris: Di Magasin du Nord, Anda dapat menemukan berbagai macam aksesoris seperti jam tangan, perhiasan, kacamata, dan scarf dari merek-merek terkenal seperti Tiffany &amp; Co, Ray-Ban, dan Hermes.</p>
        </li>
        <li>
        <p>Barang kosmetik: Magasin du Nord menawarkan berbagai macam produk kosmetik dari merek-merek terkenal seperti Chanel, Dior, dan Yves Saint Laurent.</p>
        </li>
        <li>
        <p>Barang rumah tangga: Selain produk fashion dan kosmetik, Magasin du Nord juga menawarkan berbagai macam barang rumah tangga seperti perabotan rumah tangga, perlengkapan dapur, dan dekorasi rumah dari merek-merek terkenal seperti Georg Jensen dan Alessi.</p>
        </li>
        </ol>
        <p>Selain kategori barang di atas, di Magasin du Nord juga terdapat supermarket yang menawarkan berbagai macam makanan, minuman, dan produk-produk kebutuhan sehari-hari.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419783466_640px-Magasin_du_Nord,_Kongens_Nytorv.jpg',
                'address' => 'Kongens Nytorv 13 1095 København K',
                'created_at' => null,
                'updated_at' => '2023-02-26 13:12:48',
            ],
            [
                'id' => 155,
                'country_id' => 15,
                'name' => 'Fisketorvet – Copenhagen Mall',
                'slug' => 'fisketorvet-–-copenhagen-mall',
                'hotels' => '',
                'latitude' => '55.6626556',
                'longitude' => '12.5621265',
                'attractions' => '<p>Fisketorvet - Copenhagen Mall adalah pusat perbelanjaan yang terletak di Copenhagen, Denmark. Berikut adalah beberapa kategori barang yang dapat Anda temukan di Fisketorvet - Copenhagen Mall:</p>
        <ol>
        <li>
        <p>Pakaian: Fisketorvet - Copenhagen Mall menawarkan berbagai macam pakaian untuk pria, wanita, dan anak-anak. Anda dapat menemukan toko-toko merek-merek terkenal seperti H&amp;M, Zara, Levi\'s, dan Superdry.</p>
        </li>
        <li>
        <p>Sepatu: Di Fisketorvet - Copenhagen Mall, Anda dapat menemukan berbagai macam sepatu dari merek-merek terkenal seperti Nike, Adidas, dan Vans.</p>
        </li>
        <li>
        <p>Aksesoris: Fisketorvet - Copenhagen Mall menawarkan berbagai macam aksesoris seperti jam tangan, perhiasan, kacamata, dan topi dari merek-merek terkenal seperti Pandora, Swarovski, dan Ray-Ban.</p>
        </li>
        <li>
        <p>Barang rumah tangga: Selain produk fashion, Fisketorvet - Copenhagen Mall juga menawarkan berbagai macam barang rumah tangga seperti perabotan rumah tangga, perlengkapan dapur, dan dekorasi rumah dari merek-merek terkenal seperti IKEA dan Flying Tiger.</p>
        </li>
        <li>
        <p>Elektronik: Di Fisketorvet - Copenhagen Mall, Anda dapat menemukan toko-toko elektronik seperti Apple, Bang &amp; Olufsen, dan Samsung yang menawarkan berbagai macam produk elektronik seperti smartphone, laptop, dan perangkat audio.</p>
        </li>
        <li>
        <p>Makanan dan minuman: Fisketorvet - Copenhagen Mall juga menawarkan berbagai macam pilihan makanan dan minuman dari restoran dan kafe seperti Starbucks, Joe &amp; The Juice, dan Wagamama.</p>
        </li>
        </ol>
        <p>Selain kategori barang di atas, di Fisketorvet - Copenhagen Mall juga terdapat supermarket yang menawarkan berbagai macam makanan, minuman, dan produk-produk kebutuhan sehari-hari.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419784183_640px-Fisketorvet_Shopping_Center.JPG',
                'address' => 'Kalvebod Brygge 59 1560 København V',
                'created_at' => null,
                'updated_at' => '2023-02-26 13:14:56',
            ],
            [
                'id' => 156,
                'country_id' => 15,
                'name' => 'Copenhagen Designer Outlet Denmark',
                'slug' => 'copenhagen-designer-outlet-denmark',
                'hotels' => '',
                'latitude' => '55.6498821',
                'longitude' => '12.2822813',
                'attractions' => '<p>Copenhagen Designer Outlet Denmark adalah sebuah pusat perbelanjaan outlet yang terletak di Greve, Denmark. Berikut adalah beberapa kategori barang yang dapat Anda temukan di Copenhagen Designer Outlet Denmark:</p>
        <ol>
        <li>
        <p>Pakaian: Copenhagen Designer Outlet Denmark menawarkan berbagai macam pakaian dari merek-merek desainer terkenal seperti Armani, Calvin Klein, dan Hugo Boss dengan harga diskon yang cukup besar.</p>
        </li>
        <li>
        <p>Sepatu: Di Copenhagen Designer Outlet Denmark, Anda dapat menemukan berbagai macam sepatu dari merek-merek terkenal seperti Nike, Adidas, dan Puma dengan harga diskon yang cukup besar.</p>
        </li>
        <li>
        <p>Aksesoris: Copenhagen Designer Outlet Denmark menawarkan berbagai macam aksesoris seperti tas, jam tangan, dan perhiasan dari merek-merek desainer terkenal seperti Michael Kors, Gucci, dan Versace dengan harga diskon yang cukup besar.</p>
        </li>
        <li>
        <p>Barang rumah tangga: Selain produk fashion, Copenhagen Designer Outlet Denmark juga menawarkan berbagai macam barang rumah tangga seperti perabotan rumah tangga, perlengkapan dapur, dan dekorasi rumah dari merek-merek terkenal seperti Villeroy &amp; Boch dan Royal Copenhagen dengan harga diskon yang cukup besar.</p>
        </li>
        <li>
        <p>Olahraga dan aktivitas luar ruangan: Di Copenhagen Designer Outlet Denmark, Anda dapat menemukan toko-toko yang menawarkan berbagai macam peralatan olahraga dan aktivitas luar ruangan dari merek-merek terkenal seperti The North Face, Columbia, dan Salomon dengan harga diskon yang cukup besar.</p>
        </li>
        <li>
        <p>Mainan dan hobi: Copenhagen Designer Outlet Denmark juga menawarkan berbagai macam mainan dan peralatan hobi dari merek-merek terkenal seperti LEGO dan BRIO dengan harga diskon yang cukup besar.</p>
        </li>
        </ol>
        <p>Selain kategori barang di atas, di Copenhagen Designer Outlet Denmark juga terdapat restoran dan kafe yang menawarkan berbagai macam makanan dan minuman.</p>
        <p>Untuk menuju ke Copenhagen Designer Outlet Denmark menggunakan transportasi umum dari pusat kota Kopenhagen, Anda dapat menggunakan bus atau kereta api dengan rute sebagai berikut:</p>
        <ol>
        <li>
        <p>Dari Stasiun Kopenhagen (K&oslash;benhavn H) naik kereta ke Stasiun Greve (Greve Station) dengan menggunakan layanan S-tog (jalur S1 atau S2) arah ke Koge atau N&oslash;rreport. Perjalanan memakan waktu sekitar 20-25 menit. Setelah tiba di stasiun Greve, Anda dapat berjalan kaki ke Copenhagen Designer Outlet Denmark selama sekitar 10-15 menit.</p>
        </li>
        <li>
        <p>Dari pusat kota Kopenhagen, Anda dapat naik bus ke Copenhagen Designer Outlet Denmark. Anda dapat mengambil bus nomor 116, 117, atau 118 dari berbagai halte di kota Kopenhagen seperti Hovedbaneg&aring;rden, R&aring;dhuspladsen, atau N&oslash;rreport. Turun di halte Greve St. Setelah turun, Anda dapat berjalan kaki ke Copenhagen Designer Outlet Denmark selama sekitar 5-10 menit.</p>
        </li>
        </ol>
        <p>Pastikan Anda memeriksa jadwal dan rute terbaru pada situs web resmi operator transportasi umum Kopenhagen (DOT) atau aplikasi mobile seperti Rejseplanen sebelum melakukan perjalanan untuk memastikan informasi yang akurat dan terbaru.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419784666_Centermgm3.jpg',
                'address' => 'Hveen Boulevard 2-4 2630 Taastrup',
                'created_at' => null,
                'updated_at' => '2023-02-26 13:23:18',
            ],
            [
                'id' => 157,
                'country_id' => 15,
                'name' => 'Ringsted Outlet Denmark',
                'slug' => 'ringsted-outlet-denmark',
                'hotels' => '',
                'latitude' => '55.4530195',
                'longitude' => '11.7873924',
                'attractions' => '<p>Ringsted Outlet Denmark adalah sebuah pusat perbelanjaan outlet yang terletak di Ringsted, Denmark. Berikut adalah beberapa kategori barang yang dapat Anda temukan di Ringsted Outlet Denmark:</p>
        <ol>
        <li>
        <p>Pakaian: Ringsted Outlet Denmark menawarkan berbagai macam pakaian dari merek-merek terkenal seperti Tommy Hilfiger, GANT, dan Vero Moda dengan harga diskon yang cukup besar.</p>
        </li>
        <li>
        <p>Sepatu: Di Ringsted Outlet Denmark, Anda dapat menemukan berbagai macam sepatu dari merek-merek terkenal seperti Ecco, Skechers, dan Clarks dengan harga diskon yang cukup besar.</p>
        </li>
        <li>
        <p>Aksesoris: Ringsted Outlet Denmark menawarkan berbagai macam aksesoris seperti tas, jam tangan, dan perhiasan dari merek-merek terkenal seperti Pandora dan Pilgrim dengan harga diskon yang cukup besar.</p>
        </li>
        <li>
        <p>Barang rumah tangga: Selain produk fashion, Ringsted Outlet Denmark juga menawarkan berbagai macam barang rumah tangga seperti perabotan rumah tangga, perlengkapan dapur, dan dekorasi rumah dari merek-merek terkenal seperti Royal Copenhagen dan Rosendahl dengan harga diskon yang cukup besar.</p>
        </li>
        <li>
        <p>Olahraga dan aktivitas luar ruangan: Di Ringsted Outlet Denmark, Anda dapat menemukan toko-toko yang menawarkan berbagai macam peralatan olahraga dan aktivitas luar ruangan dari merek-merek terkenal seperti Nike, Puma, dan Salomon dengan harga diskon yang cukup besar.</p>
        </li>
        <li>
        <p>Mainan dan hobi: Ringsted Outlet Denmark juga menawarkan berbagai macam mainan dan peralatan hobi dari merek-merek terkenal seperti LEGO dan BRIO dengan harga diskon yang cukup besar.</p>
        </li>
        </ol>
        <p>Selain kategori barang di atas, di Ringsted Outlet Denmark juga terdapat restoran dan kafe yang menawarkan berbagai macam makanan dan minuman.</p>
        <p>Untuk menuju ke Ringsted Outlet Denmark menggunakan transportasi umum dari pusat kota Kopenhagen, Anda dapat menggunakan kereta api dengan rute sebagai berikut:</p>
        <ol>
        <li>Dari Stasiun Kopenhagen (København H) naik kereta ke Stasiun Ringsted dengan menggunakan layanan kereta Intercity arah ke Jylland atau Esbjerg. Perjalanan memakan waktu sekitar 40-45 menit. Setelah tiba di stasiun Ringsted, Anda dapat melanjutkan perjalanan ke Ringsted Outlet Denmark dengan menggunakan layanan bus nomor 420 atau 421 yang berhenti di dekat pusat perbelanjaan tersebut.</li>
        </ol>
        <p>Pastikan Anda memeriksa jadwal dan rute terbaru pada situs web resmi operator transportasi umum Kopenhagen (DOT) atau aplikasi mobile seperti Rejseplanen sebelum melakukan perjalanan untuk memastikan informasi yang akurat dan terbaru. Selain itu, Anda juga dapat menggunakan layanan taksi atau mobil pribadi jika ingin lebih fleksibel dalam perjalanan.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419784862_outlet1-sto.jpg',
                'address' => 'Klosterparks Alle 1, 4100 Ringsted',
                'created_at' => null,
                'updated_at' => '2023-02-26 13:22:17',
            ],
            [
                'id' => 158,
                'country_id' => 6,
                'name' => 'Ashford Designer Outlet England',
                'slug' => 'ashford-designer-outlet-england',
                'hotels' => '',
                'latitude' => '51.1373492',
                'longitude' => '0.87676',
                'attractions' => '<p>Ashford Designer Outlet di Inggris menawarkan berbagai macam merek terkenal dunia seperti Burberry, Michael Kors, Calvin Klein, Tommy Hilfiger, Adidas, Nike, dan masih banyak lagi. Beberapa item yang populer untuk dibeli di sana adalah pakaian, sepatu, tas, dan aksesori.</p>
        <p>Berikut adalah beberapa ide belanja di Ashford Designer Outlet:</p>
        <ol>
        <li>
        <p>Pakaian: Dari pakaian kasual hingga formal, outlet ini menawarkan berbagai pilihan dari merek terkenal dengan diskon hingga 60%.</p>
        </li>
        <li>
        <p>Sepatu: Sepatu dari merek terkenal seperti Nike, Adidas, Puma, dan Converse tersedia dengan diskon besar-besaran.</p>
        </li>
        <li>
        <p>Tas: Ashford Designer Outlet menawarkan tas dari merek terkenal seperti Michael Kors, Coach, dan Fossil dengan harga yang lebih terjangkau.</p>
        </li>
        <li>
        <p>Aksesori: Jangan lewatkan juga aksesori seperti kacamata, perhiasan, dan jam tangan dari merek terkenal seperti Swarovski dan Daniel Wellington.</p>
        </li>
        <li>
        <p>Kosmetik dan wewangian: Ashford Designer Outlet menawarkan kosmetik dan wewangian dari merek terkenal seperti The Body Shop, Molton Brown, dan Rituals dengan diskon yang menarik.</p>
        </li>
        </ol>
        <p>Namun, pastikan Anda memperhatikan budget Anda dan tetap mengikuti prinsip "beli hanya yang Anda butuhkan" agar tidak kebablasan dalam belanja.</p>
        <p>Ada beberapa cara untuk menuju Ashford Designer Outlet di Inggris, tergantung dari lokasi awal Anda. Berikut beberapa opsi transportasi yang bisa Anda pertimbangkan:</p>
        <ol>
        <li>
        <p>Kendaraan pribadi: Ashford Designer Outlet berada di lokasi yang mudah dijangkau dengan mobil. Outlet ini terletak di jalan raya M20 dan memiliki akses langsung dari exit 10. Ada juga tempat parkir yang luas di dekat outlet.</p>
        </li>
        <li>
        <p>Kereta: Ashford Designer Outlet terletak sekitar 10 menit berjalan kaki dari stasiun kereta Ashford International. Stasiun ini merupakan salah satu stasiun kereta terbesar di Inggris dan dilayani oleh banyak jadwal kereta, termasuk jalur internasional dari Paris dan Brussels.</p>
        </li>
        <li>
        <p>Bus: Ada beberapa bus yang melayani rute ke Ashford Designer Outlet, termasuk dari kota Ashford dan kota-kota lain di sekitarnya. Anda bisa menggunakan layanan bus lokal seperti Stagecoach dan Arriva.</p>
        </li>
        <li>
        <p>Taksi: Jika Anda ingin lebih nyaman dan fleksibel, Anda bisa menggunakan layanan taksi untuk menuju ke Ashford Designer Outlet. Ada banyak perusahaan taksi yang melayani rute ini, termasuk layanan taksi online seperti Uber dan Bolt.</p>
        </li>
        </ol>
        <p>Semoga informasi ini membantu Anda untuk merencanakan perjalanan ke Ashford Designer Outlet!</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419785332_3857606_9b6243f6.jpg',
                'address' => 'Kimberley Way, Ashford, Kent TN24 0SD',
                'created_at' => null,
                'updated_at' => '2023-02-27 19:22:58',
            ],
            [
                'id' => 159,
                'country_id' => 6,
                'name' => 'Burberry Factory Outlet Shop London',
                'slug' => 'burberry-factory-outlet-shop-london',
                'hotels' => '',
                'latitude' => '51.5460738',
                'longitude' => '-0.0514574',
                'attractions' => '<p>Di Burberry Factory Outlet Shop London, Anda dapat menemukan berbagai macam produk Burberry dengan diskon besar-besaran. Beberapa produk yang biasanya tersedia di outlet ini antara lain:</p>
        <ol>
        <li>
        <p>Pakaian: Burberry dikenal dengan koleksi pakaian yang elegan dan berkualitas tinggi, terutama trench coat dan jaket. Anda bisa menemukan model-model pakaian dari koleksi sebelumnya dengan harga yang lebih terjangkau di outlet ini.</p>
        </li>
        <li>
        <p>Tas: Burberry juga dikenal dengan koleksi tasnya yang elegan dan klasik. Di outlet ini, Anda bisa menemukan berbagai macam model tas, termasuk tas tangan, tas selempang, dan tas backpack dengan diskon besar.</p>
        </li>
        <li>
        <p>Aksesoris: Burberry juga menawarkan berbagai macam aksesoris seperti syal, topi, dan sarung tangan. Di outlet ini, Anda bisa menemukan aksesoris-aksesoris tersebut dengan harga yang lebih terjangkau.</p>
        </li>
        <li>
        <p>Parfum: Burberry juga dikenal dengan koleksi parfumnya yang populer. Di outlet ini, Anda bisa menemukan parfum Burberry dengan diskon yang cukup besar dibandingkan dengan harga di toko reguler.</p>
        </li>
        </ol>
        <p>Namun, perlu diingat bahwa stok di outlet bisa berbeda-beda setiap saat dan tergantung pada koleksi sebelumnya. Jadi, pastikan untuk datang ke outlet secara teratur untuk melihat koleksi terbaru dan mendapatkan penawaran terbaik.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419785872_Hackney_empire_2.jpg',
                'address' => 'London E9 6LP',
                'created_at' => null,
                'updated_at' => '2023-02-27 20:59:10',
            ],
            [
                'id' => 160,
                'country_id' => 6,
                'name' => 'Bicester Outlet Village England',
                'slug' => 'bicester-outlet-village-england',
                'hotels' => '',
                'latitude' => '51.8922599',
                'longitude' => '-1.1558413',
                'attractions' => '<p>Bicester Village adalah pusat perbelanjaan outlet di Inggris yang terletak di dekat kota Bicester, Oxfordshire. Outlet ini menawarkan diskon besar-besaran pada merek-merek fashion terkenal, baik lokal maupun internasional.</p>
        <p>Berikut adalah beberapa jenis barang yang dapat Anda beli di Bicester Village:</p>
        <ol>
        <li>
        <p>Fashion: Bicester Village menawarkan berbagai merek fashion seperti Burberry, Gucci, Prada, Versace, Ralph Lauren, Alexander McQueen, dan banyak lagi. Anda dapat menemukan berbagai jenis pakaian, aksesori, tas, sepatu, dan produk fashion lainnya dengan diskon besar-besaran.</p>
        </li>
        <li>
        <p>Produk kecantikan: Bicester Village juga menawarkan produk kecantikan dari merek terkenal seperti The Body Shop, Molton Brown, L\'Occitane, dan banyak lagi. Anda dapat menemukan berbagai jenis produk perawatan kulit, parfum, kosmetik, dan produk kecantikan lainnya.</p>
        </li>
        <li>
        <p>Produk rumah tangga: Selain fashion dan produk kecantikan, Bicester Village juga menawarkan produk rumah tangga seperti peralatan dapur, perabotan, perlengkapan rumah tangga, dan dekorasi interior dari merek terkenal seperti Le Creuset, Wedgwood, dan banyak lagi.</p>
        </li>
        <li>
        <p>Olahraga: Jika Anda mencari pakaian olahraga, sepatu, atau aksesori, Anda dapat mengunjungi toko-toko seperti Nike, Under Armour, dan Puma di Bicester Village.</p>
        </li>
        <li>
        <p>Mainan dan suvenir: Bicester Village juga menawarkan toko-toko yang menjual mainan, suvenir, dan produk-produk souvenir lainnya, seperti The Disney Store dan The Lego Store.</p>
        </li>
        </ol>
        <p>Itulah beberapa jenis barang yang dapat Anda beli di Bicester Village. Namun, perlu diingat bahwa barang-barang yang tersedia di Bicester Village dapat berubah-ubah tergantung pada stok dan merek yang ada saat Anda berkunjung.</p>
        <p>Bicester Village adalah pusat perbelanjaan outlet di Inggris yang terletak di dekat kota Bicester, Oxfordshire. Outlet ini menawarkan diskon besar-besaran pada merek-merek fashion terkenal, baik lokal maupun internasional.</p>
        <p>Jika Anda ingin berbelanja di Bicester Village, berikut adalah beberapa tips yang dapat membantu:</p>
        <ol>
        <li>
        <p>Rencanakan perjalanan Anda: Pastikan untuk memeriksa jadwal bus atau kereta ke Bicester Village dan pastikan Anda tiba dengan cukup waktu untuk berbelanja. Juga, pastikan untuk membawa peta outlet dan mengatur jadwal belanja Anda.</p>
        </li>
        <li>
        <p>Siapkan anggaran: Ingatlah bahwa walaupun harga di outlet sudah lebih murah, tetap saja Anda harus menyiapkan anggaran untuk berbelanja di Bicester Village. Pastikan untuk memprioritaskan barang-barang yang ingin Anda beli sehingga Anda tidak akan membeli barang yang tidak diperlukan.</p>
        </li>
        <li>
        <p>Datang lebih awal: Jika Anda ingin menghindari kerumunan orang, datanglah lebih awal di pagi hari. Bicester Village biasanya penuh dengan pengunjung pada akhir pekan dan hari libur, jadi hindari waktu-waktu tersebut jika Anda ingin berbelanja dengan nyaman.</p>
        </li>
        <li>
        <p>Cari tahu merek yang ingin Anda beli: Pastikan untuk mencari tahu merek apa yang ingin Anda beli sebelum pergi ke Bicester Village. Hal ini akan membantu Anda menghemat waktu dan memastikan bahwa Anda tidak akan melewatkan toko yang menjual merek yang Anda cari.</p>
        </li>
        <li>
        <p>Cari tahu kebijakan pengembalian: Pastikan untuk memeriksa kebijakan pengembalian barang di toko-toko di Bicester Village sebelum membeli barang. Beberapa toko mungkin memiliki kebijakan pengembalian yang ketat, jadi pastikan untuk membaca dan memahami aturan pengembalian sebelum membeli.</p></li></ol>
        <p>Bicester Village terletak di Oxfordshire, Inggris dan terhubung dengan beberapa jenis transportasi. Berikut adalah beberapa cara untuk mencapai Bicester Village:</p>
        <ol>
        <li>
        <p>Kereta: Ada kereta langsung dari London Marylebone ke Bicester Village yang beroperasi setiap jam dengan perjalanan sekitar 45 menit. Anda juga dapat mengambil kereta dari Birmingham dan Oxford menuju Bicester Village. Setelah tiba di stasiun Bicester Village, Anda dapat berjalan kaki selama 5-10 menit ke outlet.</p>
        </li>
        <li>
        <p>Bus: Anda dapat mengambil bus X5 dari Oxford atau Cambridge menuju Bicester dan turun di Bicester Village. Perjalanan memakan waktu sekitar 20-30 menit tergantung dari lokasi awal.</p>
        </li>
        <li>
        <p>Mobil: Jika Anda membawa mobil, Bicester Village memiliki area parkir yang luas dan terdapat biaya parkir. Outlet ini terletak di antara jalan raya M40 dan M1, sehingga mudah diakses dari berbagai arah.</p>
        </li>
        <li>
        <p>Taksi: Anda dapat menggunakan layanan taksi dari stasiun kereta atau dari kota terdekat menuju Bicester Village. Namun, biaya taksi mungkin akan lebih mahal daripada menggunakan transportasi umum.</p>
        </li>
        </ol>
        <p>Demikianlah beberapa opsi transportasi ke Bicester Village. Perlu diingat bahwa opsi transportasi dapat berubah-ubah tergantung pada jadwal dan musim. Pastikan untuk memeriksa jadwal transportasi sebelum berangkat. Semoga tips ini dapat membantu Anda untuk merencanakan perjalanan belanja ke Bicester Village!</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419786573_A_wet_morning_at_Bicester_Outlet_Village_-_geograph.org.uk_-_1588896.jpg',
                'address' => '50 Pingle Drive, Bicester OX26 6WD',
                'created_at' => null,
                'updated_at' => '2023-02-27 21:12:26',
            ],
            [
                'id' => 161,
                'country_id' => 6,
                'name' => 'Swindon Designer Outlet England',
                'slug' => 'swindon-designer-outlet-england',
                'hotels' => '',
                'latitude' => '51.5625888',
                'longitude' => '-1.7981041',
                'attractions' => '<p>Swindon Designer Outlet adalah pusat perbelanjaan outlet yang terletak di Swindon, Inggris. Outlet ini menawarkan diskon besar-besaran pada merek fashion terkenal dari Inggris dan merek internasional. Berikut adalah beberapa jenis barang yang dapat Anda beli di Swindon Designer Outlet:</p>
        <ol>
        <li>
        <p>Fashion: Swindon Designer Outlet menawarkan berbagai merek fashion seperti Calvin Klein, Tommy Hilfiger, Ralph Lauren, Hugo Boss, Superdry, dan banyak lagi. Anda dapat menemukan berbagai jenis pakaian, aksesori, tas, sepatu, dan produk fashion lainnya dengan diskon besar-besaran.</p>
        </li>
        <li>
        <p>Produk kecantikan: Swindon Designer Outlet juga menawarkan produk kecantikan dari merek terkenal seperti The Body Shop, Molton Brown, dan L\'Occitane. Anda dapat menemukan berbagai jenis produk perawatan kulit, parfum, kosmetik, dan produk kecantikan lainnya.</p>
        </li>
        <li>
        <p>Produk rumah tangga: Selain fashion dan produk kecantikan, Swindon Designer Outlet juga menawarkan produk rumah tangga seperti peralatan dapur, perabotan, perlengkapan rumah tangga, dan dekorasi interior dari merek terkenal seperti Le Creuset, Denby, dan banyak lagi.</p>
        </li>
        <li>
        <p>Olahraga: Jika Anda mencari pakaian olahraga, sepatu, atau aksesori, Anda dapat mengunjungi toko-toko seperti Adidas, Nike, dan Puma di Swindon Designer Outlet.</p>
        </li>
        <li>
        <p>Mainan dan suvenir: Swindon Designer Outlet juga menawarkan toko-toko yang menjual mainan, suvenir, dan produk-produk souvenir lainnya, seperti The Disney Store dan Build-A-Bear Workshop.</p>
        </li>
        </ol>
        <p>Itulah beberapa jenis barang yang dapat Anda beli di Swindon Designer Outlet. Namun, perlu diingat bahwa barang-barang yang tersedia di outlet ini dapat berubah-ubah tergantung pada stok dan merek yang ada saat Anda berkunjung.</p>
        <p>Swindon Designer Outlet terletak di Wiltshire, Inggris, dan terhubung dengan beberapa jenis transportasi. Berikut adalah beberapa cara untuk mencapai Swindon Designer Outlet:</p>
        <ol>
        <li>
        <p>Kereta: Swindon Designer Outlet terletak di dekat stasiun kereta api Swindon. Ada kereta langsung dari London Paddington ke Swindon dengan perjalanan sekitar 1 jam. Setelah tiba di stasiun kereta api Swindon, Anda dapat berjalan kaki selama sekitar 10 menit atau menggunakan bus lokal yang menuju outlet.</p>
        </li>
        <li>
        <p>Bus: Ada layanan bus dari Swindon Bus Station menuju Swindon Designer Outlet. Bus beroperasi setiap hari dan memakan waktu sekitar 15 menit untuk mencapai outlet.</p>
        </li>
        <li>
        <p>Mobil: Jika Anda membawa mobil, Swindon Designer Outlet terletak di dekat jalan raya M4. Outlet ini memiliki area parkir yang luas dan tersedia biaya parkir.</p>
        </li>
        <li>
        <p>Taksi: Anda dapat menggunakan layanan taksi dari stasiun kereta api Swindon atau dari kota terdekat menuju Swindon Designer Outlet. Namun, biaya taksi mungkin akan lebih mahal daripada menggunakan transportasi umum.</p>
        </li>
        </ol>
        <p>Demikianlah beberapa opsi transportasi ke Swindon Designer Outlet. Perlu diingat bahwa opsi transportasi dapat berubah-ubah tergantung pada jadwal dan musim. Pastikan untuk memeriksa jadwal transportasi sebelum berangkat.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419787484_Swindon_46243.jpg',
                'address' => 'Kemble Drive, Swindon, Wiltshire SN2 2DY',
                'created_at' => null,
                'updated_at' => '2023-02-27 21:16:12',
            ],
            [
                'id' => 162,
                'country_id' => 6,
                'name' => 'The Galleria Outlet Shopping England',
                'slug' => 'the-galleria-outlet-shopping-england',
                'hotels' => '',
                'latitude' => '51.762245',
                'longitude' => '-0.2403356',
                'attractions' => '<p>The Galleria Outlet Shopping adalah pusat perbelanjaan outlet yang terletak di Hertfordshire, Inggris. Outlet ini menawarkan diskon besar-besaran pada berbagai merek fashion dan merek internasional. Berikut adalah beberapa jenis barang yang dapat Anda beli di The Galleria Outlet Shopping:</p>
        <ol>
        <li>
        <p>Fashion: The Galleria Outlet Shopping menawarkan berbagai merek fashion seperti Levi\'s, Timberland, Ted Baker, GAP, dan banyak lagi. Anda dapat menemukan berbagai jenis pakaian, aksesori, tas, sepatu, dan produk fashion lainnya dengan diskon besar-besaran.</p>
        </li>
        <li>
        <p>Produk kecantikan: The Galleria Outlet Shopping juga menawarkan produk kecantikan dari merek terkenal seperti The Body Shop dan Yankee Candle. Anda dapat menemukan berbagai jenis produk perawatan kulit, parfum, kosmetik, dan produk kecantikan lainnya.</p>
        </li>
        <li>
        <p>Produk rumah tangga: Selain fashion dan produk kecantikan, The Galleria Outlet Shopping juga menawarkan produk rumah tangga seperti peralatan dapur, perabotan, perlengkapan rumah tangga, dan dekorasi interior dari merek terkenal seperti Denby, Wedgwood, dan banyak lagi.</p>
        </li>
        <li>
        <p>Olahraga: Jika Anda mencari pakaian olahraga, sepatu, atau aksesori, Anda dapat mengunjungi toko-toko seperti Nike dan Adidas di The Galleria Outlet Shopping.</p>
        </li>
        <li>
        <p>Mainan dan suvenir: The Galleria Outlet Shopping juga menawarkan toko-toko yang menjual mainan, suvenir, dan produk-produk souvenir lainnya, seperti The Disney Store.</p>
        </li>
        </ol>
        <p>Itulah beberapa jenis barang yang dapat Anda beli di The Galleria Outlet Shopping. Namun, perlu diingat bahwa barang-barang yang tersedia di outlet ini dapat berubah-ubah tergantung pada stok dan merek yang ada saat Anda berkunjung.</p>
        <p>The Galleria Outlet Shopping terletak di kota Hatfield, Hertfordshire, Inggris, dan terhubung dengan beberapa jenis transportasi. Berikut adalah beberapa cara untuk mencapai The Galleria Outlet Shopping:</p>
        <ol>
        <li>
        <p>Kereta: The Galleria Outlet Shopping terletak dekat dengan stasiun kereta api Hatfield. Ada kereta langsung dari London King\'s Cross ke stasiun kereta api Hatfield dengan perjalanan sekitar 20-25 menit. Setelah tiba di stasiun kereta api Hatfield, Anda dapat berjalan kaki selama sekitar 10 menit atau menggunakan bus lokal yang menuju outlet.</p>
        </li>
        <li>
        <p>Bus: Ada layanan bus dari pusat kota Hatfield menuju The Galleria Outlet Shopping. Bus beroperasi setiap hari dan memakan waktu sekitar 5-10 menit untuk mencapai outlet.</p>
        </li>
        <li>
        <p>Mobil: Jika Anda membawa mobil, The Galleria Outlet Shopping terletak di dekat jalan raya A1(M) dan memiliki area parkir yang luas dan tersedia biaya parkir.</p>
        </li>
        <li>
        <p>Taksi: Anda dapat menggunakan layanan taksi dari stasiun kereta api Hatfield atau dari kota terdekat menuju The Galleria Outlet Shopping. Namun, biaya taksi mungkin akan lebih mahal daripada menggunakan transportasi umum.</p>
        </li>
        </ol>
        <p>Demikianlah beberapa opsi transportasi ke The Galleria Outlet Shopping. Perlu diingat bahwa opsi transportasi dapat berubah-ubah tergantung pada jadwal dan musim. Pastikan untuk memeriksa jadwal transportasi sebelum berangkat.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419787645_Hatfield_Galleria_interior.jpg',
                'address' => 'Comet Way, Hatfield, Hertfordshire AL10 0XR',
                'created_at' => null,
                'updated_at' => '2023-02-27 21:18:50',
            ],
            [
                'id' => 163,
                'country_id' => 8,
                'name' => 'Castel Romano Designer Outlet Italy',
                'slug' => 'castel-romano-designer-outlet-italy',
                'hotels' => '',
                'latitude' => '41.7194652',
                'longitude' => '12.4491234',
                'attractions' => '<p>Castel Romano Designer Outlet Italy adalah pusat perbelanjaan di Italia yang menawarkan berbagai merek fashion, perhiasan, kosmetik, dan aksesori terkenal dengan harga diskon. Beberapa merek terkenal yang tersedia di Castel Romano Designer Outlet Italy antara lain:</p>
        <ol>
        <li>Armani</li>
        <li>Calvin Klein</li>
        <li>Dolce &amp; Gabbana</li>
        <li>Gucci</li>
        <li>Michael Kors</li>
        <li>Prada</li>
        <li>Roberto Cavalli</li>
        <li>Salvatore Ferragamo</li>
        <li>Versace</li>
        </ol>
        <p>Anda dapat membeli berbagai produk fashion dan aksesori seperti pakaian, tas, sepatu, perhiasan, dan kosmetik dengan harga yang lebih terjangkau daripada harga reguler. Selain itu, Castel Romano Designer Outlet Italy juga menawarkan berbagai fasilitas seperti restoran, kafe, dan area bermain anak-anak.</p>
        <p>Jadi, jika Anda mencari produk fashion dan merek terkenal dengan harga diskon saat berada di Italia, Castel Romano Designer Outlet Italy bisa menjadi pilihan yang tepat. Namun, pastikan untuk memeriksa jam operasional, promo, dan penawaran diskon terbaru sebelum berkunjung ke sana.</p>
        <p>Castel Romano Designer Outlet Italy terletak di Via Ponte di Piscina Cupa, 64, 00128 Castel Romano RM, Italia, sekitar 25 km dari pusat kota Roma. Ada beberapa cara untuk mencapai Castel Romano Designer Outlet Italy, antara lain:</p>
        <ol>
        <li>
        <p>Dengan mobil: Anda dapat mengemudi ke Castel Romano Designer Outlet Italy dari Roma melalui jalan raya A91 menuju A90 menuju keluar Roma Sud. Kemudian, ikuti petunjuk ke Via Pontina/SS148 menuju Castel Romano. Perjalanan dari Roma ke outlet ini membutuhkan waktu sekitar 30 menit. Parkir tersedia di outlet.</p>
        </li>
        <li>
        <p>Dengan bus: Anda dapat naik bus dari pusat kota Roma menuju Castel Romano Designer Outlet Italy. Ada beberapa pilihan bus, termasuk Cotral dan Schiaffini, yang melayani rute ini. Anda dapat naik Cotral dari stasiun Metro Laurentina menuju Castel Romano Designer Outlet Italy. Perjalanan membutuhkan waktu sekitar 35-45 menit.</p>
        </li>
        <li>
        <p>Dengan kereta: Anda dapat naik kereta dari stasiun Roma Termini menuju stasiun Castel Romano, yang berjarak sekitar 6 km dari Castel Romano Designer Outlet Italy. Setelah sampai di stasiun, Anda dapat naik bus atau taksi ke outlet tersebut.</p>
        </li>
        <li>
        <p>Dengan taksi: Anda dapat menggunakan taksi dari pusat kota Roma ke Castel Romano Designer Outlet Italy. Namun, perjalanan dengan taksi dapat relatif mahal dibandingkan dengan opsi transportasi lainnya.</p>
        </li>
        </ol>
        <p>Itu beberapa opsi transportasi yang dapat Anda gunakan untuk mencapai Castel Romano Designer Outlet Italy dari Roma. Pastikan untuk memeriksa jadwal, rute, dan harga tiket terbaru sebelum pergi.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419791848_castelromano-outlet.jpg',
                'address' => 'Via del Ponte di Piscina Cupa, 64, 00128 Roma',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:17:09',
            ],
            [
                'id' => 164,
                'country_id' => 8,
                'name' => 'Fidenza Outlet Village Italy',
                'slug' => 'fidenza-outlet-village-italy',
                'hotels' => '',
                'latitude' => '44.8786411',
                'longitude' => '10.07424',
                'attractions' => '<p>Fidenza Outlet Village Italy adalah pusat perbelanjaan yang terletak di Fidenza, Italia. Di sana, Anda dapat menemukan berbagai merek fashion dan aksesori terkenal dengan harga diskon, termasuk merek Italia dan internasional. Beberapa merek terkenal yang tersedia di Fidenza Outlet Village Italy antara lain:</p>
        <ol>
        <li>Armani</li>
        <li>Calvin Klein</li>
        <li>Furla</li>
        <li>Gucci</li>
        <li>Michael Kors</li>
        <li>Prada</li>
        <li>Salvatore Ferragamo</li>
        <li>Versace</li>
        </ol>
        <p>Anda dapat membeli berbagai produk fashion dan aksesori seperti pakaian, tas, sepatu, perhiasan, dan kosmetik dengan harga yang lebih terjangkau daripada harga reguler. Selain itu, Fidenza Outlet Village Italy juga menawarkan berbagai fasilitas seperti restoran, kafe, dan area bermain anak-anak.</p>
        <p>Jadi, jika Anda mencari produk fashion dan merek terkenal dengan harga diskon saat berada di Italia, Fidenza Outlet Village Italy bisa menjadi pilihan yang tepat. Namun, pastikan untuk memeriksa jam operasional, promo, dan penawaran diskon terbaru sebelum berkunjung ke sana.</p>
        <p>Fidenza terletak sekitar 100 km di selatan Milan dan 10 km di sebelah barat Parma. Ada beberapa cara untuk mencapai Fidenza Outlet Village Italy, antara lain:</p>
        <ol>
        <li>
        <p>Dengan mobil: Anda dapat mengemudi ke Fidenza Outlet Village Italy dari Milan melalui jalan raya A1 menuju keluar Fidenza/Salsomaggiore Terme. Kemudian, ikuti petunjuk ke outlet tersebut. Perjalanan dari Milan ke outlet ini membutuhkan waktu sekitar 1 jam. Parkir tersedia di outlet.</p>
        </li>
        <li>
        <p>Dengan kereta: Anda dapat naik kereta dari stasiun Milano Centrale menuju stasiun Fidenza, yang berjarak sekitar 10 km dari Fidenza Outlet Village Italy. Setelah sampai di stasiun, Anda dapat naik taksi atau bus ke outlet tersebut.</p>
        </li>
        <li>
        <p>Dengan bus: Anda juga dapat naik bus dari Milan menuju Fidenza Outlet Village Italy. Ada beberapa perusahaan bus seperti BusCenter dan Zani Viaggi yang melayani rute ini. Perjalanan membutuhkan waktu sekitar 1-2 jam tergantung pada lalu lintas.</p>
        </li>
        <li>
        <p>Dengan taksi: Anda dapat menggunakan taksi dari Milan ke Fidenza Outlet Village Italy. Namun, perjalanan dengan taksi dapat relatif mahal dibandingkan dengan opsi transportasi lainnya.</p>
        </li>
        </ol>
        <p>Itulah beberapa opsi transportasi yang dapat Anda gunakan untuk mencapai Fidenza Outlet Village Italy. Pastikan untuk memeriksa jadwal, rute, dan harga tiket terbaru sebelum pergi. Jangan lupa untuk menikmati pengalaman berbelanja dan mengeksplorasi lokasi sekitar outlet tersebut.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419792573_fidenzavillage.jpg',
                'address' => 'Via San Michele Campagna, Chiusa Ferranda, Fidenza PR',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:30:56',
            ],
            [
                'id' => 165,
                'country_id' => 8,
                'name' => 'Franciacorta Outlet Village',
                'slug' => 'franciacorta-outlet-village',
                'hotels' => '',
                'latitude' => '45.57827',
                'longitude' => '10.11965',
                'attractions' => '<p>Franciacorta Outlet Village adalah sebuah pusat perbelanjaan terkenal yang terletak di wilayah Lombardia, Italia, khususnya dekat kota Brescia. Berikut adalah beberapa hal yang bisa Anda lihat dan nikmati di Franciacorta Outlet Village:</p>
        <ol>
        <li>
        <p>Belanja produk-produk fashion terkenal: Franciacorta Outlet Village merupakan pusat perbelanjaan yang menawarkan berbagai macam produk fashion dari merek-merek terkenal seperti Armani, Calvin Klein, Dolce &amp; Gabbana, Versace, dan masih banyak lagi. Terdapat lebih dari 160 butik yang menjual produk-produk fashion dari merek-merek ternama tersebut.</p>
        </li>
        <li>
        <p>Makan dan minum: Di Franciacorta Outlet Village, terdapat restoran-restoran dan kafe-kafe yang menawarkan berbagai macam hidangan Italia, mulai dari pizza, pasta, hingga gelato. Anda bisa bersantap sambil menikmati suasana indah pusat perbelanjaan ini.</p>
        </li>
        <li>
        <p>Berjalan-jalan di sekitar pusat perbelanjaan: Franciacorta Outlet Village memiliki area outdoor yang indah dan asri yang cocok untuk dipakai berjalan-jalan. Anda bisa menikmati pemandangan sekitar atau hanya sekedar beristirahat sejenak di area taman.</p>
        </li>
        <li>
        <p>Menikmati acara-acara dan aktivitas: Selain belanja dan bersantap, Franciacorta Outlet Village juga sering mengadakan acara-acara dan aktivitas-aktivitas menarik seperti konser musik, pameran seni, atau pertunjukan busana. Pastikan untuk memeriksa jadwal acara terbaru untuk mendapatkan pengalaman yang lebih berkesan.</p>
        </li>
        </ol>
        <p>Itulah beberapa hal yang bisa Anda lihat dan nikmati di Franciacorta Outlet Village. Jangan lupa untuk mempersiapkan budget dan waktu yang cukup saat berkunjung ke sana!</p>
        <p>Franciacorta Outlet Village terletak di Via della Cooperazione, 1, 25050 Rodengo Saiano BS, Italia. Berikut adalah beberapa opsi transportasi yang bisa Anda gunakan untuk mencapai pusat perbelanjaan ini:</p>
        <ol>
        <li>
        <p>Kendaraan pribadi: Jika Anda memiliki kendaraan pribadi, maka Anda bisa menuju ke Franciacorta Outlet Village dengan mengikuti rute dari kota Brescia. Perjalanan dari Brescia ke Franciacorta Outlet Village memakan waktu sekitar 20-30 menit tergantung dari lalu lintas.</p>
        </li>
        <li>Kereta: Dari Milan anda bisa naik kereta dari Stasiun Milano Centrale atau Stasiun Milano Porta Garibaldi ke Stasiun Brescia. Waktu tempuh kereta dari Milan ke Brescia sekitar 1 jam tergantung pada jenis kereta yang dipilih. Setelah tiba di Stasiun Brescia, Anda bisa melanjutkan perjalanan ke Franciacorta Outlet Village dengan menggunakan bus.</li>
        <li>
        <p>Bus: Anda bisa menuju ke Franciacorta Outlet Village dengan menggunakan bus. Ada beberapa perusahaan bus yang melayani rute dari Brescia ke pusat perbelanjaan ini, antara lain: SIA, Brescia Trasporti, dan Nord Est Trasporti. Waktu tempuh dari Brescia ke Franciacorta Outlet Village sekitar 30-40 menit.</p>
        </li>
        <li>
        <p>Taksi: Opsi lainnya adalah menggunakan taksi atau layanan transportasi online seperti Uber atau Lyft. Namun, biaya transportasi ini mungkin akan lebih mahal dibandingkan dengan menggunakan kendaraan pribadi atau bus.</p>
        </li>
        </ol>
        <p>Pastikan untuk memeriksa jadwal transportasi terbaru dan melakukan perencanaan perjalanan sebelum berangkat ke Franciacorta Outlet Village agar Anda bisa sampai ke sana dengan aman dan nyaman.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1419795639_franciacorta-outlet.jpg',
                'address' => 'Piazza Cascina Moie, 1/2, 25050 Rodengo-saiano BS',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:11:42',
            ],
            [
                'id' => 166,
                'country_id' => 8,
                'name' => 'La Reggia Designer Outlet Italy',
                'slug' => 'la-reggia-designer-outlet-italy',
                'hotels' => '',
                'latitude' => '41.0397016',
                'longitude' => '14.3252373',
                'attractions' => '<p>La Reggia Designer Outlet Italy adalah pusat perbelanjaan yang terletak di Marcianise, Italia, sekitar 25 km di utara Naples. Di sana, Anda dapat menemukan berbagai merek fashion dan aksesori terkenal dengan harga diskon, termasuk merek Italia dan internasional. Beberapa merek terkenal yang tersedia di La Reggia Designer Outlet Italy antara lain:</p>
        <ol>
        <li>Armani</li>
        <li>Calvin Klein</li>
        <li>Dolce &amp; Gabbana</li>
        <li>Gucci</li>
        <li>Michael Kors</li>
        <li>Prada</li>
        <li>Salvatore Ferragamo</li>
        <li>Versace</li>
        </ol>
        <p>Anda dapat membeli berbagai produk fashion dan aksesori seperti pakaian, tas, sepatu, perhiasan, dan kosmetik dengan harga yang lebih terjangkau daripada harga reguler. Selain itu, La Reggia Designer Outlet Italy juga menawarkan berbagai fasilitas seperti restoran, kafe, dan area bermain anak-anak.</p>
        <p>Jadi, jika Anda mencari produk fashion dan merek terkenal dengan harga diskon saat berada di Italia, La Reggia Designer Outlet Italy bisa menjadi pilihan yang tepat. Namun, pastikan untuk memeriksa jam operasional, promo, dan penawaran diskon terbaru sebelum berkunjung ke sana.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419797197_la-reggia-designer-outlet.jpg',
                'address' => 'S.P. 336 Sannitica, 81025 Marcianise CE',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:34:44',
            ],
            [
                'id' => 167,
                'country_id' => 8,
                'name' => 'Molfetta Outlet Fashion District Italy',
                'slug' => 'molfetta-outlet-fashion-district-italy',
                'hotels' => '',
                'latitude' => '41.21335',
                'longitude' => '16.54928',
                'attractions' => '<p>Molfetta Outlet Fashion District Italy adalah pusat perbelanjaan yang terletak di Molfetta, Italia, sekitar 20 km di sebelah timur Bari. Di sana, Anda dapat menemukan berbagai merek fashion dan aksesori terkenal dengan harga diskon, termasuk merek Italia dan internasional. Beberapa merek terkenal yang tersedia di Molfetta Outlet Fashion District Italy antara lain:</p>
        <ol>
        <li>Adidas</li>
        <li>Armani</li>
        <li>Burberry</li>
        <li>Calvin Klein</li>
        <li>Furla</li>
        <li>Gucci</li>
        <li>Michael Kors</li>
        <li>Prada</li>
        <li>Timberland</li>
        <li>Versace</li>
        </ol>
        <p>Anda dapat membeli berbagai produk fashion dan aksesori seperti pakaian, tas, sepatu, perhiasan, dan kosmetik dengan harga yang lebih terjangkau daripada harga reguler. Selain itu, Molfetta Outlet Fashion District Italy juga menawarkan berbagai fasilitas seperti restoran, kafe, dan area bermain anak-anak.</p>
        <p>Selain berbelanja, Anda dapat menikmati suasana dan pemandangan kota Molfetta yang menawan. Kota ini memiliki sejarah yang kaya dan memiliki beberapa tempat wisata menarik seperti Katedral Molfetta, Pelabuhan Molfetta, dan Palazzo Giovene.</p>
        <p>Jadi, jika Anda mencari produk fashion dan merek terkenal dengan harga diskon saat berada di Italia, Molfetta Outlet Fashion District Italy bisa menjadi pilihan yang tepat. Namun, pastikan untuk memeriksa jam operasional, promo, dan penawaran diskon terbaru sebelum berkunjung ke sana.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419797504_MFT_RifleNG_1280x800.jpg',
                'address' => 'Via dei Portuali, 12, 70056 Molfetta BA',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:36:06',
            ],
            [
                'id' => 168,
                'country_id' => 8,
                'name' => 'Palmanova Outlet Village Italy',
                'slug' => 'palmanova-outlet-village-italy',
                'hotels' => '',
                'latitude' => '45.8760638',
                'longitude' => '13.3485873',
                'attractions' => 'Palmanova Outlet Village adalah pusat perbelanjaan dengan memiliki banyak ruang untuk pejalan kaki yang luas, dan gratis parkir. Tempat ini memiliki 90 outlet yang menjual pakaian, assesoris, kosmetik, produk-produk dekorasi interior rumah dengan&nbsp;merk-merk Itali dan Eropa yang terkenal, juga restauran, warung kopi, dan tempat-tempat publik lainnya.<div><br></div><div>Maka dari itu semua produk dijual dengan harga murah, dengan diskon minimal 30&#37; sepanjang tahun dan diskon sebanyak 70&#37; untuk sale cuci gudang atau spesial promosi diskon. Beraneka ria acara dan aktifitas juga kadang disediakan untuk menghibur pengunjung outlet yang datang bersama famili atau rekan-rekan.</div><div><br></div><div>Merk-merk:&nbsp;Adidas, Alberta Ferretti, Alcott, Angelico, Authier, Baldinini, Barts, Bata, Bimbus, Bottega del Sarto, Brums, Calvin Klein Jeans, Camicissima Cerruti, Cinti, Colonna, Conte of Florence, Datch, Dekker, Desigual, Diambre, Diana Gallesi, Dirk Bikkembergs, Docksteps, Enrico Coveri, Frankie Morello, Galliano, Gap, Gardo Bsman, GF Ferré Guess, Hilfiger Denim, Iceberg, Ivy Oxford, John Ashfield, John Barritt, Kappa, Kocca, Lanificio di Tollegno, Love Moschino, Löffler, Maison Espin, Malloy, Marciano Guess, Marina Militare, Marni, Mash, MashQueen, Merrell, MB Sport, Mila Schön, Miss Blumarine, Momo Design, Mønster Energy, Nike, Parrot, Pollini, Puma, Romeo Gigli, Samsonite, Schott, Sisley, Slam, Spitfire, Statham, Stefanel, United Colors of Benetton, Von Dutch, Whoopie Loopie, Zuiki  </div>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419798597_palmanova-outlet-village.jpg',
                'address' => 'S.P. 125, Km 1,6, 33041 Ioannis Aiello del Friuli UD',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 169,
                'country_id' => 8,
                'name' => 'Serravalle Designer Outlet Italy',
                'slug' => 'serravalle-designer-outlet-italy',
                'hotels' => '',
                'latitude' => '44.7232084',
                'longitude' => '8.8574005',
                'attractions' => 'Memiliki sekitar&nbsp;180 toko dengan merk-merk terbaik. Diskon harga mulai&nbsp;30&#37; sampai&nbsp;70&#37; sepanjang tahun. Terluas dengan produk kualitas dan merk top di bidang fashion, pakaian olah raga, asesoris, perabotan rumah tangga dan kosmetik.  <div><br></div><div>Merk-merk:&nbsp;Alexander McQueen, Armani Jeans, Balenciaga, Bottega Veneta, Burberry, Dior, Ermenegildo, Zegna, Fendi, Giorgio Armani, Gucci, Hogan, I Pico Pallino, Loro Piana, Marni, Pucci, Roberto Cavalli, Savatore Ferragamo, Sergio Rossi, Stella McCartney, Tod´s, Velentino, Yves Saint Laurent  </div>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419798879_15841938.jpg',
                'address' => 'Via della Moda, 1, 15069 Serravalle Scrivia AL',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 170,
                'country_id' => 8,
                'name' => 'The Mall Outlet Italy',
                'slug' => 'the-mall-outlet-italy',
                'hotels' => '',
                'latitude' => '43.702853',
                'longitude' => '11.463683',
                'attractions' => '<p>The Mall Outlet di Italy adalah pusat perbelanjaan yang terkenal dengan koleksi barang-barang branded dari merek-merek ternama. Di sana, Anda bisa menemukan berbagai jenis produk seperti pakaian, sepatu, tas, aksesoris, dan produk kecantikan dari merek-merek terkenal seperti Gucci, Prada, Armani, Versace, dan banyak lagi.</p>
        <p>Berikut adalah beberapa rekomendasi produk yang bisa Anda beli di The Mall Outlet Italy:</p>
        <ol>
        <li>
        <p>Pakaian: The Mall Outlet menawarkan berbagai jenis pakaian dari merek-merek terkenal. Anda bisa mencari pakaian untuk wanita, pria, dan anak-anak seperti jaket, sweater, kemeja, celana, rok, dan dress. Pastikan untuk mencari produk yang cocok dengan selera Anda dan sesuai dengan ukuran Anda.</p>
        </li>
        <li>
        <p>Sepatu: Di The Mall Outlet, Anda juga bisa menemukan berbagai jenis sepatu dari merek-merek terkenal seperti Jimmy Choo, Salvatore Ferragamo, dan Tod\'s. Ada banyak pilihan sepatu wanita dan pria yang bisa Anda beli di sana.</p>
        </li>
        <li>
        <p>Tas: The Mall Outlet juga menawarkan berbagai jenis tas yang terbuat dari bahan berkualitas tinggi. Anda bisa mencari tas dari merek-merek seperti Bottega Veneta, Fendi, dan Burberry.</p>
        </li>
        <li>
        <p>Aksesoris: Selain itu, Anda juga bisa membeli aksesoris seperti jam tangan, kacamata, dan kalung dari merek-merek terkenal seperti Rolex, Cartier, dan Bvlgari.</p>
        </li>
        <li>
        <p>Produk kecantikan: The Mall Outlet juga memiliki toko-toko produk kecantikan seperti L\'Occitane dan Kiehl\'s, di mana Anda bisa membeli produk perawatan kulit, parfum, dan kosmetik.</p>
        </li>
        </ol>
        <p>Namun, perlu diingat bahwa harga di The Mall Outlet Italy bisa lebih murah dari harga asli, tetapi tetap saja bisa cukup mahal karena merek-merek yang tersedia di sana adalah merek-merek mewah. Pastikan untuk menetapkan anggaran yang sesuai dengan kemampuan Anda sebelum berbelanja di sana.</p>
        <p>The Mall Outlet Italy berlokasi di daerah Incisa Valdarno, sekitar 30 km di sebelah selatan Florence, Italia. Ada beberapa cara untuk mencapai The Mall Outlet Italy:</p>
        <ol>
        <li>
        <p>Kendaraan pribadi: Jika Anda memiliki kendaraan pribadi, Anda bisa mengambil jalur tol A1 dan keluar di pintu tol Incisa-Reggello. Setelah itu, ikuti petunjuk ke The Mall Outlet. The Mall Outlet memiliki tempat parkir gratis yang luas bagi para pengunjung.</p>
        </li>
        <li>
        <p>Shuttle Bus: The Mall Outlet menawarkan layanan shuttle bus gratis dari Florence ke The Mall Outlet dan kembali setiap hari. Shuttle bus berangkat dari Piazza Stazione di Florence dan beroperasi pada jadwal tetap. Informasi lebih lanjut tentang jadwal shuttle bus bisa Anda dapatkan di situs web The Mall Outlet.</p>
        </li>
        <li>
        <p>Kereta: Jika Anda tidak memiliki kendaraan pribadi, Anda bisa naik kereta dari Stasiun Santa Maria Novella di Florence ke Stasiun Rignano sull\'Arno. Setelah tiba di stasiun Rignano sull\'Arno, Anda bisa naik taksi atau layanan shuttle bus yang disediakan oleh The Mall Outlet untuk mencapai pusat perbelanjaan.</p>
        </li>
        <li>
        <p>Layanan Taksi: Anda juga bisa memesan layanan taksi dari Florence ke The Mall Outlet. Namun, layanan taksi bisa menjadi cukup mahal, jadi pastikan untuk mengecek harga sebelum memesan.</p>
        </li>
        </ol>
        <p>Pastikan untuk memilih cara yang paling nyaman dan sesuai dengan kebutuhan Anda saat mencapai The Mall Outlet Italy.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419799440_the-mall2-420-x-280.jpg',
                'address' => 'Via Europa, 8, 50066 Leccio Reggello FI',
                'created_at' => null,
                'updated_at' => '2023-02-26 20:59:11',
            ],
            [
                'id' => 171,
                'country_id' => 8,
                'name' => 'Valmontone Outlet Fashion District Italy',
                'slug' => 'valmontone-outlet-fashion-district-italy',
                'hotels' => '',
                'latitude' => '41.7745041',
                'longitude' => '12.9190465',
                'attractions' => '<p>Daerah komplek perbelanjaan fashion&nbsp;outlet satu lagi di Roma yang mengklaim sebagai pusat belanja terbesar di Italia.&nbsp;Fashion District memiliki jaringan&nbsp;Factory Outlet Centres di&nbsp;Valmontone,&nbsp;Montova&nbsp;and&nbsp;Molfetta.</p><p>Konsep&nbsp;Fashion District adalah untuk menciptakan rasa pusat kota kecil dengan penekanan dan menyatu dengan lingkungan di sekelilingnya.</p><p>Valmontone adalah salah satu kota utama di pinggiran Roma dan outlet tersebut terletak&nbsp;40 km dari ibu kota, di jalan arteri antara&nbsp;Roma-Napoli di daerah&nbsp;“Roman Hills”. Outlet ini dibuka kembali pada bulan Desemer&nbsp;2003, memiliki&nbsp;150 toko dan luas parkiran untuk&nbsp;3,000 mobil. Ekstra 30 toko baru saja dibuka september kemarin membuat total luas outlet menjadi&nbsp;45.000 m2.</p><p>Merk-merk:&nbsp;Papermoon, Pollini, La Perla Fashion Group, Mötivi, The End, Gabel, Kallisté, Playlife, Freddy, Del Mare 1911, Lee, Tailor Club, Le Full, Abital, Docksteps, Timberland, Bags, Nike, Panepiero, Kiko, Brics, Brums, Guess, Bormioli, Overkids, John Barritt, Lindt, La Casa Italiana, Goldenpoint, Clarks, Calzedonia, Frette, Adidas, Baldinini, Slam, Stonefly  </p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419800100_valmontone-outlet-72.jpg',
                'address' => 'Via della Pace, Località Pascolaro, 00038 Valmontone RM',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 172,
                'country_id' => 8,
                'name' => 'Veneto Designer Outlet Italy',
                'slug' => 'veneto-designer-outlet-italy',
                'hotels' => '',
                'latitude' => '45.6713692',
                'longitude' => '12.5352271',
                'attractions' => '<p>Veneto Designer Outlet Italy adalah pusat perbelanjaan outlet yang terletak di Noventa di Piave, Veneto, Italia. Pusat perbelanjaan ini menawarkan berbagai jenis produk dari merek-merek terkenal dengan harga yang lebih terjangkau daripada harga asli. Berikut beberapa hal yang bisa Anda temukan di Veneto Designer Outlet Italy:</p>
        <ol>
        <li>
        <p>Pakaian: Veneto Designer Outlet menawarkan berbagai jenis pakaian dari merek-merek terkenal seperti Armani, Versace, dan Max Mara. Ada banyak pilihan pakaian untuk wanita, pria, dan anak-anak seperti jaket, sweater, kemeja, celana, rok, dan dress.</p>
        </li>
        <li>
        <p>Sepatu: Di Veneto Designer Outlet, Anda bisa menemukan sepatu dari merek-merek terkenal seperti Hogan, Geox, dan Nike. Ada banyak pilihan sepatu untuk wanita, pria, dan anak-anak yang bisa Anda beli di sana.</p>
        </li>
        <li>
        <p>Tas dan aksesoris: Selain itu, Veneto Designer Outlet juga menawarkan berbagai jenis tas dan aksesoris seperti kacamata, jam tangan, dan perhiasan dari merek-merek terkenal seperti Gucci, Prada, dan Burberry.</p>
        </li>
        <li>
        <p>Produk kecantikan: Veneto Designer Outlet juga memiliki toko-toko produk kecantikan seperti Kiko Milano dan L\'Occitane, di mana Anda bisa membeli produk perawatan kulit, parfum, dan kosmetik.</p>
        </li>
        <li>
        <p>Makanan dan minuman: Pusat perbelanjaan ini juga memiliki banyak restoran dan kafe yang menyediakan berbagai jenis makanan dan minuman untuk para pengunjung.</p>
        </li>
        </ol>
        <p>Selain itu, Veneto Designer Outlet juga menawarkan layanan shuttle bus gratis dari Venice dan Treviso ke pusat perbelanjaan. Pastikan untuk memeriksa jadwal shuttle bus dan mengatur anggaran yang sesuai sebelum berkunjung ke Veneto Designer Outlet Italy.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419800753_veneto-designer-outlet.jpg',
                'address' => 'via Marco Polo 1, Unit 102, 30020 Noventa die Piave, Venice',
                'created_at' => null,
                'updated_at' => '2023-02-26 21:01:11',
            ],
            [
                'id' => 173,
                'country_id' => 4,
                'name' => 'Zweibrücken The Style Outlet Germany',
                'slug' => 'zweibrucken-the-style-outlet-germany',
                'hotels' => '',
                'latitude' => '49.23003',
                'longitude' => '7.40284',
                'attractions' => '<p>Zweibr&uuml;cken The Style Outlet adalah pusat perbelanjaan outlet yang terletak di kota Zweibr&uuml;cken, negara bagian Rheinland-Pfalz, Jerman. Pusat perbelanjaan ini menawarkan lebih dari 120 merek terkenal internasional dan lokal, dengan diskon hingga 70% dari harga asli. Beberapa merek terkenal yang dapat ditemukan di Zweibr&uuml;cken The Style Outlet antara lain Adidas, Hugo Boss, Tommy Hilfiger, Lacoste, Puma, dan masih banyak lagi.</p>
        <p>Selain itu, pusat perbelanjaan ini juga memiliki restoran dan kafe yang menyajikan makanan dan minuman yang lezat. Anda juga dapat menemukan fasilitas lain seperti area bermain anak-anak, toilet umum, dan parkir mobil gratis.</p>
        <p>Jika Anda sedang mencari tempat untuk berbelanja, Zweibr&uuml;cken The Style Outlet bisa menjadi salah satu pilihan. Pusat perbelanjaan ini memiliki suasana yang menyenangkan dan tenang, serta menawarkan banyak pilihan merek terkenal dengan harga yang terjangkau. Zweibr&uuml;cken The Style Outlet dapat diakses dengan mobil atau menggunakan transportasi umum seperti kereta api atau bus.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419872949_zweib2q1295.jpg',
                'address' => 'Londoner Bogen 10-90, 66482 Zweibrücken',
                'created_at' => null,
                'updated_at' => '2023-02-27 21:57:59',
            ],
            [
                'id' => 174,
                'country_id' => 4,
                'name' => 'Ochtum Park Outlet Center Jerman',
                'slug' => 'ochtum-park-outlet-center-germany',
                'hotels' => '',
                'latitude' => '53.02845',
                'longitude' => '8.80575',
                'attractions' => '<p>Ochtum Park Outlet Center adalah pusat perbelanjaan outlet yang terletak di kota Stuhr, negara bagian Lower Saxony, Jerman. Pusat perbelanjaan ini menawarkan lebih dari 60 merek terkenal internasional dan lokal, dengan diskon hingga 70% dari harga asli. Beberapa merek terkenal yang dapat ditemukan di Ochtum Park Outlet Center antara lain Adidas, Levi\'s, Nike, Puma, Reebok, dan masih banyak lagi.</p>
        <p>Selain itu, Ochtum Park Outlet Center juga memiliki beberapa restoran dan kafe yang menyajikan makanan dan minuman yang lezat. Anda juga dapat menemukan fasilitas lain seperti area bermain anak-anak, toilet umum, dan parkir mobil gratis.</p>
        <p>Jika Anda sedang mencari tempat untuk berbelanja, Ochtum Park Outlet Center bisa menjadi salah satu pilihan. Pusat perbelanjaan ini memiliki suasana yang menyenangkan dan tenang, serta menawarkan banyak pilihan merek terkenal dengan harga yang terjangkau. Ochtum Park Outlet Center dapat diakses dengan mobil atau menggunakan transportasi umum seperti kereta api atau bus.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419873307_b8a84fbf9f6f19c0daffe2aaa957b6a5.jpeg',
                'address' => 'Bremer Straße 103-117, 28816 Stuhr',
                'created_at' => null,
                'updated_at' => '2023-02-27 21:59:46',
            ],
            [
                'id' => 175,
                'country_id' => 4,
                'name' => 'Ochtrup Outlet Center Jerman',
                'slug' => 'ochtrup-outlet-center-germany',
                'hotels' => '',
                'latitude' => '52.2102417',
                'longitude' => '7.1976628',
                'attractions' => '<p>Ochtrup Outlet Center adalah pusat perbelanjaan outlet yang terletak di kota Ochtrup, negara bagian Nordrhein-Westfalen, Jerman. Pusat perbelanjaan ini menawarkan lebih dari 100 merek terkenal internasional dan lokal, dengan diskon hingga 70% dari harga asli. Beberapa merek terkenal yang dapat ditemukan di Ochtrup Outlet Center antara lain Nike, Adidas, Puma, Tommy Hilfiger, Levi\'s, dan masih banyak lagi.</p>
        <p>Selain itu, Ochtrup Outlet Center juga memiliki beberapa restoran dan kafe yang menyajikan makanan dan minuman yang lezat. Anda juga dapat menemukan fasilitas lain seperti area bermain anak-anak, toilet umum, dan parkir mobil gratis.</p>
        <p>Jika Anda sedang mencari tempat untuk berbelanja, Ochtrup Outlet Center bisa menjadi salah satu pilihan. Pusat perbelanjaan ini memiliki suasana yang menyenangkan dan tenang, serta menawarkan banyak pilihan merek terkenal dengan harga yang terjangkau. Ochtrup Outlet Center dapat diakses dengan mobil atau menggunakan transportasi umum seperti kereta api atau bus.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419873655_Graschafter_Gasse_-_FOC_Ochtrup_02.jpg',
                'address' => 'Laurenzstraße 55, 48607 Ochtrup',
                'created_at' => null,
                'updated_at' => '2023-02-27 22:00:53',
            ],
            [
                'id' => 176,
                'country_id' => 4,
                'name' => 'McArthurGlen Designer Outlet Neumünster',
                'slug' => 'mcarthurglen-designer-outlet-neumunster-germany',
                'hotels' => '',
                'latitude' => '54.0444787',
                'longitude' => '9.974828',
                'attractions' => '<p>McArthurGlen Designer Outlet Neum&uuml;nster adalah pusat perbelanjaan outlet yang terletak di kota Neum&uuml;nster, negara bagian Schleswig-Holstein, Jerman. Pusat perbelanjaan ini menawarkan lebih dari 120 merek terkenal internasional dan lokal, dengan diskon hingga 70% dari harga asli. Beberapa merek terkenal yang dapat ditemukan di McArthurGlen Designer Outlet Neum&uuml;nster antara lain Calvin Klein, Hugo Boss, Tommy Hilfiger, Michael Kors, Adidas, dan masih banyak lagi.</p>
        <p>Selain itu, McArthurGlen Designer Outlet Neum&uuml;nster juga memiliki beberapa restoran dan kafe yang menyajikan makanan dan minuman yang lezat. Anda juga dapat menemukan fasilitas lain seperti area bermain anak-anak, toilet umum, dan parkir mobil gratis.</p>
        <p>Jika Anda sedang mencari tempat untuk berbelanja, McArthurGlen Designer Outlet Neum&uuml;nster bisa menjadi salah satu pilihan. Pusat perbelanjaan ini memiliki suasana yang menyenangkan dan tenang, serta menawarkan banyak pilihan merek terkenal dengan harga yang terjangkau. McArthurGlen Designer Outlet Neum&uuml;nster dapat diakses dengan mobil atau menggunakan transportasi umum seperti kereta api atau bus.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419881453_don8_thumb2.jpg',
                'address' => 'Oderstraße 10, 24539 Neumünster',
                'created_at' => null,
                'updated_at' => '2023-02-27 22:02:06',
            ],
            [
                'id' => 177,
                'country_id' => 4,
                'name' => 'Ingolstadt Outlet Village',
                'slug' => 'ingolstadt-outlet-village-germany',
                'hotels' => '',
                'latitude' => '48.7913836',
                'longitude' => '11.4379428',
                'attractions' => '<p>Ingolstadt Outlet Village adalah pusat perbelanjaan outlet yang terletak di kota Ingolstadt, negara bagian Bayern, Jerman. Pusat perbelanjaan ini menawarkan lebih dari 100 merek terkenal internasional dan lokal, dengan diskon hingga 70% dari harga asli, antara lain:</p>
        <ol>
        <li>Adidas</li>
        <li>Puma</li>
        <li>Nike</li>
        <li>Tommy Hilfiger</li>
        <li>Calvin Klein</li>
        <li>Michael Kors</li>
        <li>Lacoste</li>
        <li>Levi\'s</li>
        <li>Vans</li>
        <li>The North Face</li>
        <li>Swarovski</li>
        <li>Diesel</li>
        <li>Timberland</li>
        <li>Samsonite</li>
        </ol>
        <p>Selain merek-merek di atas, Ingolstadt Outlet Village juga menawarkan berbagai merek fashion dan aksesoris lainnya untuk pria, wanita, dan anak-anak. Anda dapat menemukan pakaian, sepatu, tas, aksesoris, dan masih banyak lagi. Selain itu, pusat perbelanjaan ini juga memiliki beberapa restoran dan kafe yang menyajikan makanan dan minuman yang lezat. Anda juga dapat menemukan fasilitas lain seperti area bermain anak-anak, toilet umum, dan parkir mobil gratis.</p>
        <p>Jika Anda sedang mencari tempat untuk berbelanja, Ingolstadt Outlet Village bisa menjadi salah satu pilihan. Pusat perbelanjaan ini memiliki suasana yang menyenangkan dan tenang, serta menawarkan banyak pilihan merek terkenal dengan harga yang terjangkau. Ingolstadt Outlet Village dapat diakses dengan mobil atau menggunakan transportasi umum seperti kereta api atau bus.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419881654_Ingolstadt-Village.jpg',
                'address' => 'Otto-Hahn-Str. 1, Gewerbegebiet Nord-Ost, 85055 Ingolstadt',
                'created_at' => null,
                'updated_at' => '2023-02-27 22:06:04',
            ],
            [
                'id' => 178,
                'country_id' => 4,
                'name' => 'Designer Outlets Wolfsburg Germany',
                'slug' => 'designer-outlets-wolfsburg-germany',
                'hotels' => '',
                'latitude' => '52.42951',
                'longitude' => '10.7922979',
                'attractions' => 'Designer outlets Wolfsburg dengan total luas 16.000 m² dan lebih dari 70 merk adalah pusat outlet pertama di Jerman yang bisa anda kunjungi di tengah kota. Mereka menawarkan bermacam-macam jenis dari yang high fashion sampe pakaian gaul dan klasik dan dari pakaian dalam sampai pakaian olah raga dan mode anak-anak. Produk sehari-hari, bahan kulit, bahan kain rumah tangga, jam tangan, gelas, porselein dan perhiasan. Ada juga dua restauran dan tahun 2013 bangunan tahap ke dua telah selesai.  <div><br></div><div>Merk-merk:&nbsp;Adidas, Apriori, Atelier Torino, Basler, Bruno Banani, Bugatti, Calvin Klein, Centa Star, Cinque, Desigual, Diesel, Dockers, Dyrberg Kern, Emilia Lay, Escada, Fossil, Gant, Garcia, G.K. Mayer, Hutschenreuther, Lacoste, Laurèl, Le Creuset, Levis, Liebeskind, Lindt, MAC, Madeleine, Marc O´Polo, Marc Picard, Marvelis, Mexx, Nike, Oakley, Olsen, Park Avenue, Polo Ralph Lauren, Puma, Roy Robson, Rosenthal, Sarar, Speers, Strenesse, Thomas Rosenthal, Tom Tailor, Tommy Hilfiger, Van Laack, Wilvorst  </div>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419882385_Designer-Outlets-Wolfsburg-Germany.jpg',
                'address' => 'An der Vorburg 1, 38440 Wolfsburg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 179,
                'country_id' => 4,
                'name' => 'Berlin Designer Outlet Germany',
                'slug' => 'berlin-designer-outlet-germany',
                'hotels' => '',
                'latitude' => '52.5388751',
                'longitude' => '12.980594',
                'attractions' => 'Merk-merk terkenal dan label internasional bisa menjual koleksi-koleksi lama, barang contoh ataupun kelebihan produksi di Outlet Mall B5 ini. Di tempat perbelanjaan seluas 10.500m² ini anda dapat mengharapkan korting harga dari mulai&nbsp;<strong>30&#37; sampai 70</strong>&#37;. Dan B5 Outlet Mall juga menyediakan 1.200 tempat parkir gratis bagi para pengunjung.  <div><br></div><div>Merk-merk:&nbsp;Strenesse, CK Jeans, CK Underwear, Daniel Hechter, Diesel, Ecko unltd., Geox, Hallhuber, Kunert, Levis, Mango, Marc O&rsquo;Polo, MEXX, Miss Sixty, René Lezard, Replay, Seidensticker, St. Emile, Tom Tailor, Tommy Hilfiger, Adidas, Camel active, Nike, Estella, Home &amp; Cook ,Lindt, Möve, Villeroy &amp; Boch, Fossil, Gold Dock, Crocs, Daniel Hechter, Lloyd, Marc Picard, Olymp  </div>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419884525_kids-outlet-berlin-01.jpg',
                'address' => 'Alter Spandauer Weg 1, 14641 Wustermark OT Elstal',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 180,
                'country_id' => 1,
                'name' => 'Roermond Designer Outlet Netherlands',
                'slug' => 'roermond-designer-outlet-netherlands',
                'hotels' => '',
                'latitude' => '51.2007149',
                'longitude' => '5.9880187',
                'attractions' => '<p>Pemenang piala McArthurGlen&nbsp;Roermond Designer Outlet&nbsp;adalah salah satu yang terbesar di Eropa. Ada lebih dari 100 toko di Roermond outlet dimana para pembeli akan menemukan lebih dari 170 merk designer. Diskon dari 30% sampai 70% bisa didapatkan tiap tahun di butik-butik dengan nama-nama designer internasional seperti Armani, D &amp; G, Diesel, Feragamo, Gucci, Hugo Boss, Prada dan banyak lagi.</p>
        <p>Pemenang piala McArthurGlen, Roermond Designer Outlet Netherlands adalah sebuah pusat perbelanjaan outlet yang menawarkan berbagai macam merek fashion dan lifestyle terkenal dengan diskon hingga 70% dan ada lebih dari 100 toko serta lebih dari 170 merk designer. Beberapa merek populer yang dapat ditemukan di Roermond Designer Outlet Netherlands antara lain Prada, Armani, D &amp; G, Diesel, Feragamo, Gucci, Hugo Boss, Prada, Burberry, Nike, Adidas, dan masih banyak lagi.</p>
        <p>Untuk belanja di Roermond Designer Outlet Netherlands, beberapa hal yang bisa Anda pertimbangkan antara lain:</p>
        <ol>
        <li>
        <p>Pakaian: Anda dapat menemukan pakaian berkualitas tinggi dari merek-merek terkenal dengan harga diskon di outlet ini. Pastikan untuk mencari pakaian yang sesuai dengan ukuran dan gaya pribadi Anda.</p>
        </li>
        <li>
        <p>Sepatu: Roermond Designer Outlet Netherlands menawarkan berbagai macam merek sepatu terkenal dengan harga yang lebih terjangkau. Anda bisa mencari sepatu sport, sepatu kasual, atau sepatu formal yang cocok dengan kebutuhan Anda.</p>
        </li>
        <li>
        <p>Tas dan aksesoris: Outlet ini juga menawarkan berbagai macam tas dan aksesoris dari merek-merek terkenal. Anda bisa memilih antara tas tangan, tas selempang, dompet, jam tangan, dan aksesori lainnya yang sesuai dengan selera dan kebutuhan Anda.</p>
        </li>
        <li>
        <p>Kosmetik dan parfum: Anda juga dapat menemukan kosmetik dan parfum dari merek-merek terkenal dengan harga diskon. Pastikan untuk memeriksa tanggal kedaluwarsa produk sebelum membeli.</p>
        </li>
        <li>
        <p>Barang-barang rumah tangga: Outlet ini juga menawarkan berbagai macam barang-barang rumah tangga seperti linen, handuk, peralatan makan, dan peralatan rumah tangga lainnya dari merek-merek terkenal.</p>
        </li>
        </ol>
        <p>Pastikan untuk membandingkan harga dan kualitas produk sebelum membeli untuk memastikan Anda mendapatkan penawaran terbaik di Roermond Designer Outlet Netherlands.</p>
        <p>Roermond Designer Outlet dapat dicapai dengan jalan kaki dari pusat kota Roermond dan juga terletak dilokasi yang ideal antara D&uuml;sseldorf dan Maastricht. Tempat belanja ini buka tiap 7 hari seminggu. Berikut transportasi ke Roermond Designer Outlet</p>
        <ol>
        <li>
        <p>Kendaraan pribadi: Jika Anda memiliki kendaraan pribadi, Anda dapat mengemudi ke Roermond Designer Outlet dan parkir di salah satu area parkir yang tersedia.</p>
        </li>
        <li>
        <p>Transportasi umum: Anda juga dapat menggunakan transportasi umum seperti kereta atau bus. Roermond memiliki stasiun kereta api, Roermond Station, yang berjarak sekitar 10 menit berjalan kaki dari outlet. Anda juga dapat menggunakan bus dari beberapa kota di sekitar Roermond.</p>
        </li>
        <li>
        <p>Shuttle bus: Roermond Designer Outlet menyediakan shuttle bus gratis dari beberapa kota di sekitar Roermond seperti Maastricht, Eindhoven, dan Dusseldorf. Shuttle bus ini dapat dipesan melalui situs web Roermond Designer Outlet.</p>
        </li>
        <li>
        <p>Taksi: Anda juga dapat menggunakan taksi untuk menuju ke Roermond Designer Outlet. Namun, pastikan untuk memeriksa tarif sebelum naik taksi.</p>
        </li>
        </ol>
        <p>Pilihan transportasi yang terbaik untuk Anda tergantung pada lokasi dan kebutuhan Anda. Jika Anda tidak yakin, Anda dapat menghubungi Roermond Designer Outlet atau mencari informasi lebih lanjut di situs web mereka.</p>
        <p>Roermond memiliki beberapa hotel yang menawarkan penginapan yang nyaman dan fasilitas yang memadai. Berikut adalah beberapa hotel favorit di Roermond:</p>
        <ol>
        <li>
        <p><a title="Hotel Dux Roermond" href="https://www.booking.com/hotel/nl/dux.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Dux Roermond</a>: Hotel bintang 4 ini terletak di pusat kota Roermond, dekat dengan Roermond Designer Outlet. Hotel ini memiliki desain modern yang elegan, dilengkapi dengan fasilitas seperti restoran, bar, dan sauna.</p>
        </li>
        <li>
        <p><a title="Het Arresthuis" href="https://www.booking.com/hotel/nl/het-arresthuis.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Het Arresthuis</a>: Hotel ini terletak di bekas penjara yang diubah menjadi hotel bintang 4 yang unik dan menarik. Terletak di pusat kota Roermond, dekat dengan Roermond Designer Outlet, hotel ini menawarkan kamar-kamar yang luas dan dilengkapi dengan fasilitas seperti restoran, bar, dan gym.</p>
        </li>
        <li>
        <p><a title="TheaterHotel De Oranjerie" href="https://www.booking.com/hotel/nl/theateroranjerie.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">TheaterHotel De Oranjerie</a>: Terletak di pusat kota Roermond, hotel ini berada di gedung teater yang indah dan elegan. Hotel bintang 4 ini menawarkan kamar-kamar yang nyaman dan dilengkapi dengan fasilitas seperti restoran, bar, dan gym.</p>
        </li>
        <li>
        <p><a title="Hotel Roermond Next Door" href="https://www.booking.com/hotel/nl/hotelroermond.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Roermond Next Door</a>: Hotel bintang 3 ini terletak di pusat kota Roermond, dekat dengan Roermond Designer Outlet. Hotel ini menawarkan kamar-kamar yang nyaman dan dilengkapi dengan fasilitas seperti restoran, bar, dan teras yang indah.</p>
        </li>
        <li>
        <p><a title="Hotel Restaurant Caf&eacute; Parkzicht" href="https://www.booking.com/hotel/nl/restaurant-cafe-parkzicht.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Restaurant Caf&eacute; Parkzicht</a>: Hotel bintang 3 ini terletak di daerah yang tenang di Roermond, sekitar 2 km dari Roermond Designer Outlet. Hotel ini menawarkan kamar-kamar yang nyaman dan dilengkapi dengan fasilitas seperti restoran dan bar.</p>
        </li>
        </ol>
        <p>Keputusan akhir tergantung pada preferensi Anda dan anggaran Anda. Namun, hotel-hotel tersebut di atas merupakan pilihan populer di Roermond. Pastikan untuk memeriksa ulasan tamu sebelum memilih hotel untuk memastikan pengalaman menginap yang menyenangkan.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419885091_McArthur_Glen_Designer_Outlet_Roermond.jpg',
                'address' => 'Stadsweide 2, 6041 TD Roermond',
                'created_at' => null,
                'updated_at' => '2023-03-06 21:06:43',
            ],
            [
                'id' => 181,
                'country_id' => 1,
                'name' => 'Rosada Factory Outlet Netherlands',
                'slug' => 'rosada-factory-outlet-netherlands',
                'hotels' => '',
                'latitude' => '51.5316487',
                'longitude' => '4.429021',
                'attractions' => '<p>Rosada Fashion Outlet adalah pusat perbelanjaan outlet yang terletak di Roosendaal, Belanda. Rosada Factory Outlet menawarkan berbagai merek fashion, aksesoris, sepatu, dan kosmetik dengan diskon hingga 70%.</p>
        <p>Berikut beberapa merek fashion yang bisa Anda temukan di Rosada Factory Outlet:</p>
        <ol>
        <li>Adidas</li>
        <li>Calvin Klein</li>
        <li>Desigual</li>
        <li>G-Star RAW</li>
        <li>Levi\'s</li>
        <li>Nike</li>
        <li>Puma</li>
        <li>Reebok</li>
        <li>Superdry</li>
        <li>Tommy Hilfiger</li>
        </ol>
        <p>Selain itu, Rosada Factory Outlet juga menawarkan merek-merek lokal dan merek-merek internasional lainnya. Anda juga dapat menemukan produk kosmetik dan perhiasan dengan harga yang terjangkau.</p>
        <p>Rosada Factory Outlet juga menawarkan beberapa fasilitas seperti area bermain untuk anak-anak, restoran dan kafe, serta area parkir yang luas dan gratis.</p>
        <p>Dengan berbagai pilihan merek fashion terkenal dan diskon yang tinggi, Rosada Factory Outlet adalah tempat yang ideal untuk berbelanja bagi para penggemar fashion dan pecinta diskon.</p>
        <p>Rosada Factory Outlet dapat dijangkau dengan beberapa pilihan transportasi yang berbeda.</p>
        <ol>
        <li>
        <p>Kendaraan pribadi: Jika Anda memiliki kendaraan pribadi, Anda dapat mengemudi ke Rosada Factory Outlet dan parkir di salah satu area parkir yang tersedia. Rosada Factory Outlet memiliki area parkir yang luas dan gratis.</p>
        </li>
        <li>
        <p>Transportasi umum: Anda juga dapat menggunakan transportasi umum seperti kereta atau bus. Rosada Factory Outlet terletak sekitar 10 menit berkendara dari stasiun kereta Roosendaal Station. Anda juga dapat menggunakan bus dari beberapa kota di sekitar Roosendaal.</p>
        </li>
        <li>
        <p>Shuttle bus: Rosada Factory Outlet menyediakan shuttle bus gratis dari beberapa kota di sekitar Roosendaal seperti Antwerp, Rotterdam, dan Breda. Shuttle bus ini dapat dipesan melalui situs web Rosada Factory Outlet.</p>
        </li>
        <li>
        <p>Taksi: Anda juga dapat menggunakan taksi untuk menuju ke Rosada Factory Outlet. Namun, pastikan untuk memeriksa tarif sebelum naik taksi.</p>
        </li>
        </ol>
        <p>Pilihan transportasi terbaik untuk Anda tergantung pada lokasi dan kebutuhan Anda. Jika Anda tidak yakin, Anda dapat menghubungi Rosada Factory Outlet atau mencari informasi lebih lanjut di situs web mereka.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1419885708_1724.jpg',
                'address' => 'Rosada 70, 4703 TB Roosendaal',
                'created_at' => null,
                'updated_at' => '2023-03-06 21:12:44',
            ],
            [
                'id' => 182,
                'country_id' => 1,
                'name' => 'Magna Plaza',
                'slug' => 'magna-plaza',
                'hotels' => '',
                'latitude' => '52.3736473',
                'longitude' => '4.8904389',
                'attractions' => '<p>Magna Plaza adalah pusat perbelanjaan yang terletak di Amsterdam, Belanda. Pusat perbelanjaan ini terletak di bekas gedung pos tua yang dibangun pada tahun 1899. Magna Plaza menawarkan berbagai merek fashion, kosmetik, perhiasan, dan aksesoris dengan diskon dan harga yang terjangkau.</p>
        <p>Berikut adalah beberapa merek fashion yang bisa Anda temukan di Magna Plaza:</p>
        <ol>
        <li>Calvin Klein</li>
        <li>Guess</li>
        <li>Levi\'s</li>
        <li>Mango</li>
        <li>Tommy Hilfiger</li>
        <li>Scotch &amp; Soda</li>
        <li>G-Star RAW</li>
        <li>Superdry</li>
        <li>Vans</li>
        <li>Lacoste</li>
        </ol>
        <p>Selain itu, Magna Plaza juga menawarkan toko-toko kosmetik seperti Rituals dan L\'Occitane, serta toko perhiasan seperti Swarovski dan Diamond Point. Anda juga dapat menemukan toko-toko yang menjual perabotan rumah tangga dan suvenir.</p>
        <p>Magna Plaza juga menawarkan beberapa fasilitas seperti restoran dan kafe yang menyajikan makanan dan minuman dari berbagai negara. Ada juga toko buku dan galeri seni yang menarik untuk dikunjungi.</p>
        <p>Dengan berbagai pilihan merek fashion, kosmetik, dan perhiasan yang tersedia, Magna Plaza adalah tempat yang ideal untuk berbelanja bagi para pecinta fashion dan pecinta diskon.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420119993_320px-Hoofdpostkantoor_3.jpg',
                'address' => 'Nieuwezijdse Voorburgwal 182, Amsterdam',
                'created_at' => null,
                'updated_at' => '2023-03-06 21:14:30',
            ],
            [
                'id' => 183,
                'country_id' => 1,
                'name' => 'De Bijenkorf Amsterdam',
                'slug' => 'de-bijenkorf-amsterdam',
                'hotels' => '',
                'latitude' => '52.3733053',
                'longitude' => '4.8936305',
                'attractions' => '<p>De Bijenkorf Amsterdam adalah toko serba ada yang terletak di Amsterdam, Belanda. Toko ini menawarkan berbagai jenis barang, termasuk fashion, kosmetik, perhiasan, barang elektronik, dan peralatan rumah tangga, serta produk-produk yang terkait dengan interior dan desain. De Bijenkorf Amsterdam adalah salah satu toko serba ada terbesar di Belanda dan menawarkan banyak merek-merek internasional dan lokal yang terkenal.</p>
        <p>Berikut adalah beberapa jenis barang yang bisa Anda temukan di De Bijenkorf Amsterdam:</p>
        <ol>
        <li>
        <p>Fashion: De Bijenkorf Amsterdam menawarkan berbagai merek fashion terkenal, seperti Hugo Boss, Armani, Gucci, Prada, Michael Kors, dan Ted Baker.</p>
        </li>
        <li>
        <p>Kosmetik: Toko ini menawarkan berbagai merek kosmetik terkenal, seperti Chanel, Dior, Lanc&ocirc;me, dan Est&eacute;e Lauder.</p>
        </li>
        <li>
        <p>Perhiasan: De Bijenkorf Amsterdam memiliki toko perhiasan dan jam tangan yang menawarkan berbagai merek terkenal seperti Cartier, Chopard, dan Rolex.</p>
        </li>
        <li>
        <p>Barang elektronik: Toko ini juga menawarkan barang-barang elektronik, seperti smartphone, kamera, dan aksesoris komputer dari merek-merek terkenal seperti Apple, Samsung, dan Sony.</p>
        </li>
        <li>
        <p>Peralatan rumah tangga: De Bijenkorf Amsterdam menawarkan berbagai peralatan rumah tangga dan dekorasi interior, termasuk furnitur, perabotan rumah tangga, dan barang-barang dekoratif.</p>
        </li>
        </ol>
        <p>Selain barang-barang tersebut, De Bijenkorf Amsterdam juga menawarkan berbagai layanan seperti layanan belanja pribadi, layanan personal shopping, dan layanan belanja online.</p>
        <p>Dengan berbagai pilihan barang yang tersedia dan pelayanan yang berkualitas, De Bijenkorf Amsterdam adalah tempat yang ideal untuk berbelanja bagi para penggemar fashion dan pecinta barang-barang berkualitas.</p>
        <p>Berikut adalah beberapa hotel yang dekat dengan De Bijenkorf Amsterdam:</p>
        <ol>
        <li>
        <p><a title="NH Collection Amsterdam Grand Hotel Krasnapolsky" href="https://www.booking.com/hotel/nl/nhghkrasnapolsky.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">NH Collection Amsterdam Grand Hotel Krasnapolsky</a>: Hotel ini terletak hanya beberapa menit berjalan kaki dari De Bijenkorf Amsterdam. Hotel ini menawarkan kamar-kamar yang nyaman dan luas dengan berbagai fasilitas seperti restoran, bar, dan pusat kebugaran.</p>
        </li>
        <li>
        <p><a title="NH Collection Amsterdam Doelen" href="https://www.booking.com/hotel/nl/nhdoelen.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">NH Collection Amsterdam Doelen</a>: Hotel ini terletak sekitar 10 menit berjalan kaki dari De Bijenkorf Amsterdam. Hotel ini menawarkan kamar-kamar yang elegan dan luas dengan berbagai fasilitas seperti restoran, bar, dan sauna.</p>
        </li>
        <li>
        <p><a title="Hotel TwentySeven" href="https://www.booking.com/hotel/nl/twentyseven-amsterdam.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel TwentySeven</a>: Hotel mewah ini terletak sekitar 5 menit berjalan kaki dari De Bijenkorf Amsterdam. Hotel ini menawarkan kamar-kamar yang mewah dan elegan dengan berbagai fasilitas seperti restoran, bar, dan layanan spa.</p>
        </li>
        <li>
        <p><a title="NH Amsterdam Schiller" href="https://www.booking.com/hotel/nl/nhschiller.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">NH Amsterdam Schiller</a>: Hotel ini terletak sekitar 10 menit berjalan kaki dari De Bijenkorf Amsterdam. Hotel ini menawarkan kamar-kamar yang luas dan nyaman dengan berbagai fasilitas seperti restoran, bar, dan lounge.</p>
        </li>
        <li>
        <p><a title="Swiss&ocirc;tel Amsterdam" href="https://www.booking.com/hotel/nl/swissotel.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Swiss&ocirc;tel Amsterdam</a>: Hotel ini terletak hanya beberapa menit berjalan kaki dari De Bijenkorf Amsterdam. Hotel ini menawarkan kamar-kamar yang modern dan nyaman dengan berbagai fasilitas seperti restoran, bar, dan pusat kebugaran.</p>
        </li>
        </ol>
        <p>Hotel di atas memiliki tarif cukup mahal. Berikut adalah beberapa hotel2 murah di pusat kota Amsterdam:&nbsp;</p>
        <ol>
        <li>
        <p><a title="Hotel The Exchange" href="https://www.booking.com/hotel/nl/the-exchange.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel The Exchange</a>: Hotel ini terletak sekitar 5 menit berjalan kaki dari De Bijenkorf Amsterdam. Hotel ini menawarkan kamar-kamar yang unik dan artistik dengan tarif yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Hotel Manofa" href="https://www.booking.com/hotel/nl/hotelmanofaamsterd.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Manofa</a>: Hotel ini terletak sekitar 10 menit berjalan kaki dari De Bijenkorf Amsterdam. Hotel ini menawarkan kamar-kamar yang sederhana dengan fasilitas dasar dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Budget Hotel Tourist Inn" href="https://www.booking.com/hotel/nl/tourist-inn.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Budget Hotel Tourist Inn</a>: Hotel ini terletak sekitar 10 menit berjalan kaki dari De Bijenkorf Amsterdam. Hotel ini menawarkan kamar-kamar yang sederhana dengan fasilitas dasar dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Hotel Internationaal" href="https://www.booking.com/hotel/nl/internationaal.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Internationaal</a>: Hotel ini terletak sekitar 10 menit berjalan kaki dari De Bijenkorf Amsterdam. Hotel ini menawarkan kamar-kamar yang sederhana dengan fasilitas dasar dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="Hotel Clemens" href="https://www.booking.com/hotel/nl/clemens-amsterdam.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Clemens</a>: Hotel ini terletak sekitar 5 menit berjalan kaki dari De Bijenkorf Amsterdam. Hotel ini menawarkan kamar-kamar yang sederhana dengan fasilitas dasar dengan harga yang terjangkau.</p>
        </li>
        </ol>
        <p>Semua hotel ini menawarkan tarif yang terjangkau dan lokasi yang strategis untuk menginap dekat dengan De Bijenkorf Amsterdam. Namun, perlu diingat bahwa tarif yang terjangkau biasanya tidak menyertakan fasilitas mewah yang ditawarkan oleh hotel-hotel yang lebih mahal.</p>
        <p>Semua hotel ini menawarkan lokasi yang strategis dan berbagai fasilitas yang berkualitas, sehingga merupakan pilihan yang ideal untuk menginap dekat dengan De Bijenkorf Amsterdam.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420325777_De_Bijenkorf_2007.jpg',
                'address' => 'Dam 1, Amsterdam',
                'created_at' => null,
                'updated_at' => '2023-03-06 21:26:15',
            ],
            [
                'id' => 184,
                'country_id' => 1,
                'name' => 'Plaza Rotterdam',
                'slug' => 'plaza-rotterdam',
                'hotels' => '',
                'latitude' => '51.9232266',
                'longitude' => '4.470878',
                'attractions' => '<p>Rotterdam Centrum adalah pusat kota Rotterdam, Belanda, yang memiliki banyak tempat menarik untuk dikunjungi. Berikut adalah beberapa hal yang dapat dilihat dan dilakukan di Rotterdam Centrum:</p>
        <ol>
        <li>Menara Euromast: Menara Euromast adalah menara setinggi 185 meter yang menawarkan pemandangan kota Rotterdam yang spektakuler. Pengunjung dapat naik ke atas menara dengan lift atau tangga dan menikmati pemandangan dari ketinggian.</li>
        <li>Markthal: Markthal adalah pasar makanan dalam ruangan yang menampilkan arsitektur modern dan dekorasi interior yang indah. Pengunjung dapat menemukan berbagai jenis makanan dan minuman dari seluruh dunia di pasar ini.</li>
        <li>Museum Boijmans Van Beuningen: Museum ini memiliki koleksi seni yang luar biasa, termasuk karya-karya seniman seperti Vincent van Gogh, Salvador Dali, dan Piet Mondrian. Museum ini juga memiliki taman skulptur yang menampilkan karya-karya seni kontemporer di luar gedung.</li>
        <li>Rotterdam Zoo: Kebun binatang Rotterdam adalah rumah bagi lebih dari 1.000 spesies hewan dari seluruh dunia. Pengunjung dapat melihat binatang seperti gajah, gorila, dan singa di kebun binatang ini.</li>
        <li>Cube Houses: Cube Houses adalah bangunan unik yang terdiri dari rumah-rumah persegi yang diletakkan pada sudutnya. Bangunan ini didesain oleh arsitek terkenal Piet Blom dan menjadi salah satu landmark kota Rotterdam yang terkenal.</li>
        <li>Jembatan Erasmus: Jembatan Erasmus adalah jembatan gantung yang melintasi Sungai Nieuwe Maas dan menghubungkan kota Rotterdam dengan daerah yang lebih luas di sekitarnya. Jembatan ini adalah salah satu jembatan terpanjang di Eropa dan menawarkan pemandangan kota yang indah.</li>
        <li>Witte de Withstraat: Witte de Withstraat adalah jalan yang penuh dengan bar, restoran, dan toko-toko seni. Tempat ini menjadi tempat populer bagi para pelancong yang ingin mencicipi makanan Belanda dan internasional atau menikmati suasana malam Rotterdam yang hidup.</li>
        </ol>
        <p>Rotterdam Centrum dapat dicapai dengan transportasi umum seperti kereta api atau bus, atau dengan berjalan kaki dari daerah sekitarnya. Wilayah ini juga dilayani oleh sejumlah hotel dan akomodasi yang dapat memenuhi kebutuhan pengunjung.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => '1677610924_184.jpg',
                'address' => 'Weena, Rotterdam',
                'created_at' => null,
                'updated_at' => '2023-02-28 19:02:04',
            ],
            [
                'id' => 185,
                'country_id' => 1,
                'name' => 'De Bijenkorf Rotterdam',
                'slug' => 'de-bijenkorf-rotterdam',
                'hotels' => '',
                'latitude' => '51.9204555',
                'longitude' => '4.4791789',
                'attractions' => '<p>De Bijenkorf Rotterdam adalah pusat perbelanjaan terkenal di kota Rotterdam, Belanda. Di sini, Anda dapat menemukan berbagai macam produk, mulai dari merek lokal hingga internasional. Berikut adalah beberapa jenis barang yang dapat Anda temukan di De Bijenkorf Rotterdam:</p>
        <ol>
        <li>
        <p>Fashion: De Bijenkorf Rotterdam menawarkan berbagai macam pakaian dari merek-merek terkenal, baik lokal maupun internasional. Anda dapat menemukan busana wanita, pria, dan anak-anak, serta aksesori dan tas.</p>
        </li>
        <li>
        <p>Kosmetik dan perawatan tubuh: Di De Bijenkorf Rotterdam, Anda dapat menemukan berbagai produk kosmetik dan perawatan tubuh dari merek-merek terkenal. Produk yang ditawarkan mencakup makeup, skincare, parfum, dan perawatan tubuh.</p>
        </li>
        <li>
        <p>Perhiasan dan aksesori: De Bijenkorf Rotterdam menawarkan berbagai macam perhiasan, aksesori, dan jam tangan dari merek-merek terkenal. Anda dapat menemukan cincin, kalung, anting-anting, gelang, dan banyak lagi.</p>
        </li>
        <li>
        <p>Elektronik: Di sini, Anda dapat menemukan produk-produk elektronik seperti smartphone, laptop, kamera, dan aksesori lainnya.</p>
        </li>
        <li>
        <p>Barang rumah tangga: De Bijenkorf Rotterdam juga menawarkan berbagai macam barang rumah tangga, mulai dari peralatan masak hingga perlengkapan rumah tangga lainnya.</p>
        </li>
        </ol>
        <p>Itulah beberapa jenis barang yang dapat Anda temukan di De Bijenkorf Rotterdam. Selain itu, pusat perbelanjaan ini juga menawarkan berbagai macam restoran dan kafe yang dapat Anda kunjungi setelah berbelanja.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420326472_building_102.jpg',
                'address' => 'Coolsingel 105, 3012 AG Rotterdam',
                'created_at' => null,
                'updated_at' => '2023-03-06 21:28:10',
            ],
            [
                'id' => 186,
                'country_id' => 1,
                'name' => 'Beursplein',
                'slug' => 'beursplein',
                'hotels' => '',
                'latitude' => '51.9205019',
                'longitude' => '4.4804615',
                'attractions' => '<p>Beursplein Rotterdam adalah sebuah alun-alun terbuka di pusat kota Rotterdam, Belanda. Terletak di dekat gedung-gedung yang modern dan beberapa atraksi wisata terkenal di kota, Beursplein Rotterdam menawarkan banyak hal yang bisa dinikmati oleh pengunjung. Berikut adalah beberapa aktivitas yang bisa dilakukan di Beursplein Rotterdam:</p>
        <ol>
        <li>
        <p>Menikmati pemandangan: Beursplein Rotterdam menawarkan pemandangan yang menakjubkan, terutama gedung-gedung modern yang menjulang tinggi di sekitarnya. Pengunjung dapat duduk dan menikmati pemandangan yang indah sambil bersantai.</p>
        </li>
        <li>
        <p>Berbelanja: Di dekat Beursplein Rotterdam terdapat berbagai macam pusat perbelanjaan, termasuk De Bijenkorf Rotterdam dan Lijnbaan, yang menawarkan berbagai macam barang dan merek yang terkenal.</p>
        </li>
        <li>
        <p>Berwisata kuliner: Terdapat banyak restoran dan kafe di sekitar Beursplein Rotterdam yang menawarkan makanan dan minuman yang lezat. Beberapa restoran juga menawarkan pemandangan indah dari gedung-gedung di sekitarnya.</p>
        </li>
        <li>
        <p>Bersepeda: Pengunjung dapat menyewa sepeda dan menjelajahi kota Rotterdam dengan bersepeda. Beursplein Rotterdam adalah titik awal yang baik untuk menjelajahi kota.</p>
        </li>
        <li>
        <p>Mengunjungi atraksi wisata: Di dekat Beursplein Rotterdam terdapat beberapa atraksi wisata terkenal, seperti Museum Boijmans Van Beuningen dan Rotterdam Zoo. Pengunjung dapat mengunjungi atraksi- atraksi tersebut dan menikmati hari yang menyenangkan di kota Rotterdam.</p>
        </li>
        </ol>
        <p>Itulah beberapa aktivitas yang dapat dilakukan di Beursplein Rotterdam. Beursplein Rotterdam menawarkan berbagai macam aktivitas yang bisa dinikmati oleh pengunjung dari segala usia.</p>
        <p>Berikut adalah beberapa hotel di pusat kota Rotterdam yang dekat dengan Beursplein:</p>
        <ol>
        <li>
        <p><a title="Hilton Rotterdam" href="https://www.booking.com/hotel/nl/hiltonrotterdam.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hilton Rotterdam</a>: Hotel bintang lima yang terletak di pusat kota Rotterdam dan berjarak sekitar 5 menit berjalan kaki dari Beursplein. Menawarkan kamar mewah dengan fasilitas lengkap, termasuk kolam renang dan pusat kebugaran.</p>
        </li>
        <li>
        <p><a title="Mainport Design Hotel" href="https://www.booking.com/hotel/nl/mainport-hotel.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Mainport Design Hotel</a>: Hotel bintang lima yang menawarkan kamar-kamar modern dengan pemandangan laut yang indah. Terletak di pusat kota Rotterdam dan berjarak sekitar 10 menit berjalan kaki dari Beursplein.</p>
        </li>
        <li>
        <p><a title="Inntel Hotels Rotterdam Centre" href="https://www.booking.com/hotel/nl/inntel-rotterdam.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Inntel Hotels Rotterdam Centre</a>: Hotel bintang empat yang terletak di pusat kota Rotterdam dan berjarak sekitar 5 menit berjalan kaki dari Beursplein. Menawarkan kamar-kamar modern dan fasilitas seperti kolam renang dan sauna.</p>
        </li>
        <li>
        <p><a title="NH Atlanta Rotterdam Hotel" href="https://www.booking.com/hotel/nl/nhatlanta.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">NH Atlanta Rotterdam Hotel</a>: Hotel bintang empat yang terletak di pusat kota Rotterdam dan berjarak sekitar 5 menit berjalan kaki dari Beursplein. Menawarkan kamar-kamar yang dilengkapi dengan fasilitas lengkap dan restoran yang menyajikan masakan internasional.</p>
        </li>
        <li>
        <p><a title="Holiday Inn Express Rotterdam - Central Station" href="https://www.booking.com/hotel/nl/holiday-inn-express-rotterdam-central-station.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Holiday Inn Express Rotterdam - Central Station</a>: Hotel bintang tiga yang terletak di pusat kota Rotterdam dan berjarak sekitar 10 menit berjalan kaki dari Beursplein. Menawarkan kamar-kamar modern dan sarapan prasmanan gratis setiap pagi.</p>
        </li>
        </ol>
        <p>Daftar hotel2 di atas memiliki tarif cukup mahal, maka berikut ini adalah beberapa hotel murah di sekitar Beursplein Rotterdam:</p>
        <ol>
        <li>
        <p><a title="Hotel Rotterdam" href="https://www.booking.com/hotel/nl/arthotelrotterdam.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Rotterdam</a>: Hotel yang terletak di dekat pusat kota Rotterdam dan berjarak sekitar 10 menit berjalan kaki dari Beursplein.&nbsp;</p>
        </li>
        <li>
        <p><a title="King Kong Hostel" href="https://www.booking.com/hotel/nl/king-kong-hostel-rotterdam.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">King Kong Hostel</a>: Hostel yang terletak di pusat kota Rotterdam dan berjarak sekitar 10 menit berjalan kaki dari Beursplein.&nbsp;</p>
        </li>
        <li>
        <p><a title="Hotel One Rotterdam" href="https://www.booking.com/hotel/nl/motel-one-rotterdam.en.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel One Rotterdam</a>: Hotel yang terletak di dekat pusat kota Rotterdam dan berjarak sekitar 15 menit berjalan kaki dari Beursplein.&nbsp;</p>
        </li>
        </ol>
        <p>Itulah beberapa hotel murah di sekitar Beursplein Rotterdam yang bisa menjadi pilihan untuk pengunjung yang ingin menghemat biaya akomodasi. Meskipun harganya terjangkau, hotel-hotel tersebut tetap menawarkan kenyamanan dan fasilitas dasar yang memadai untuk pengunjung.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420326810_Rotterdam_VD.jpg',
                'address' => 'Beursplein 37, 3011 AA Rotterdam',
                'created_at' => null,
                'updated_at' => '2023-03-06 21:38:34',
            ],
            [
                'id' => 187,
                'country_id' => 3,
                'name' => 'L&#039;Usine Mode &amp; Maison Outlet Paris',
                'slug' => 'lusine-mode-maison-outlet-paris',
                'hotels' => '',
                'latitude' => '48.7743912',
                'longitude' => '2.2253521',
                'attractions' => '<p>Sekitar 19 kilometer sebelah barat daya kota Paris dan 9 kilometer sebelah timur kota Versailles, Paris L’Usine Mode et Maision (Pabrik Fashion dan Rumah) adalah sebuah pusat outlet kontemporer dengan sekitar 140 toko menawarkan ratusan merk-merk top Perancis, Eropa, dan internasional. Selain menyediakan pakaian-pakaian bagi wanita, laki-laki dan anak-anak yang bermerk umum bagi orang Eropa outlet centres L’Usine Mode et Maison juga menawarkan barang-barang lain seperti peralatan, telpon, barang-barang elektronik, mainan anak-anak, games, alat-alat taman, buku-buku, musik, perabotan rumah tangga, dan dekorasi rumah.</p><p>Outlet malls di Velizy Villacoublay sepanjang tahun juga menawarkan harga-harga murah untuk merk-merk local ataupun internasional: pakaian laki-laki, pakaian wanita dan juga sepert makanan... Sepanjang tahun dengan lebih dari 500 merk setiap minggu menawarkan ribuan produk dengan diskon sampai 70&#37;.</p><p>Merk-merk: Ange et Demon, Aubert, Catimini, Complices, Clayeux, Good Luck, Jacadi, Kiki et Galou, Okaïdi, Que des Marques, Quiksilver, Rip Curl, Style&rsquo;C, 123, Antonelle, Bel Air, Barbara, Elisabeth Stuart, Garella, Gerard, Darel, IKKS, Keystone, L&rsquo;Ambre, Minvats, Orna Farho, Promod, Renatto Bene, Sinéquanone, Sud Express, Sym, Ventilo, Weill, Zapa, Affaires de Marques, Anne de Solène, Arketiss, Atouts Cuisine, Blanc des Vosges, Cote D&rsquo;Co, Cuisin&rsquo;Store, Grenier de Sologne, Guy Degrenne, Kitchen Factory, La Compagnie du Lit, La Maison &amp; Co, La Maison d&rsquo;Ariane, Le Cotonnier, LoftLine, Maison et Tissus, Ercuis, Raynaud, Place de la Literie, Pro-literie, Serge Lasage, Sous-Signe, Stock Décor, Terranova, Tradition des Vosges, Villeroy &amp; Boch, Brice, Griff Class, Izac, Jerem, Kiki et Galou, Lexington, Pascal Morabito, Que des Marques, Stanford, Status, US et Costumes  </p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420402764_l-usine-mode-maison.jpg',
                'address' => 'Route André Citroën, 78140 Vélizy-Villacoublay',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 188,
                'country_id' => 3,
                'name' => 'Marques Avenue Outlet Talange France',
                'slug' => 'marques-avenue-outlet-talange-france',
                'hotels' => '',
                'latitude' => '49.2234193',
                'longitude' => '6.1788953',
                'attractions' => 'Marques Avenue Talange factory stores outlet mall yang terletak di sebelah utara dari Metz menawarkan para pembeli deal yang menarik dan diskon pada hampir semua pakaian-pakaian dengan merk Eropa. Outlet mal memiliki sekitar 80 butik dimana beberapa toko terletak di dekat agak jauh. Talange hanya sekitar setengah jam dari selatan dekat Luxemburg dan hanya dekat jalan tol dari Paris ke Strasburg. Parkir gratis karena memang hanya bisa dicapai dengan mobil.  <div><br></div><div>Merk-merk:&nbsp;123, Adidas, Aigle, Anne de Solène, Apostrophe Georges Rech, ARC International, Arthur Hector Chéri, Balmain, Bandolera, Bayard, Calvin Klein, Black &amp; Decker, Bonnie Doon, Bruno Saint Hilaire, Café Coton, Charles de Golf, Clarks Lafuma, Comptoir des Cotonniers, Delsey, Démarque de Marques, Descamps, Desigual, De Fursac, Dodo, Du Pareil au Même, Eliane et Léna, Etam Lingerie, Gant, Guy Degrenne Factory, Hardrige, Home &amp; Cook, Jerem, Le Coq Sportif, Le Phare de la Baleine, Le Temps des Cerises, L&rsquo;Atelier des Créateurs, Mango, MCS, Mexx, Mustang, Odlo, Olympia, Oxbow, O&rsquo;Neill, Pallio Store, Paul Mausner, Petit Bateau, Puma, Quiksilver, Reebok, Salamander, Sud Express, Sun Factory, Teddy Smith, Dim, Tradition des Vosges, Triumph, Valège, Ventilo, Playtex, Wonderbra, Weill Stock  </div>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420403324_Talange-Marques-Avenue-Outlet-009.jpg',
                'address' => 'Zone Industrielle Nord, 57525 Talange',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 189,
                'country_id' => 3,
                'name' => 'Nailloux Fashion Outlet Village France',
                'slug' => 'nailloux-fashion-outlet-village-france',
                'hotels' => '',
                'latitude' => '43.356694',
                'longitude' => '1.623473',
                'attractions' => '<p><em>Nailloux Outlet Village<a href="http://www.naillouxoutlet.com/"></a></em>&nbsp;menawarkan pemandangan alam dan merk-merk dengan nama besar dengan diskon samapi 30&#37; dan penawaran-penawaran lainnya. Barang-barang yang tersedia seperti fashion, mode atau perangkat rumah tangga dari produk-produk keluarga sampai merk-merk olah raga.</p><p>Merk merk:&nbsp;18CRR81 Cerruti, American Vintage, Apostrophe Georges Rech, Artiga, Banana Moon, Bash, Bayard, BDM Diesel, Berenice, Best Mountain, Café Coton, Calvin Klein, Caro Paris, Carré blanc, Crea Concept, De Fursac, Descamps, Desigual, Didier Parakian, Digel, ElevenParis, Eminence, Garnier-Thiebaut, Golf pro, Guess, Guy Degrenne, Haribo, Heschung, Heyraud, Home &amp; cook, Jezequel - Old River, Kaporal, Karl Marc John, Kookai, Le Temps des Cerises, Les Petites, Little Marcel, Miss Sixty Energie, Naf Naf, Nature Bijoux, Nike, Oliphil, Orcanta, Petit Bateau, Renatto Béné, Samsonite, Shilton, Stade Toulousain, Stradel’s, Sunglass Time, Tara Jarmon, Tom Tailor, Triumph, Ventilo, Villeroy &amp; Boch, Yuka, Zadig &amp; Voltaire  </p><br>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420403952_nailloux-fashion-village.jpg',
                'address' => 'Lieu-dit &quot;Le Grill&quot;, 31560 Nailloux',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 190,
                'country_id' => 3,
                'name' => 'Roppenheim The Style Outlets France',
                'slug' => 'roppenheim-the-style-outlets-france',
                'hotels' => '',
                'latitude' => '48.8366083',
                'longitude' => '8.0898954',
                'attractions' => 'ROPPENHEIM THE STYLE OUTLETS telah didesign dengan selera jalan jalan yang unik dan pengalaman belanja tak terlupakan. Lebih dari 100 merk yang "harus" anda miliki menawarkan diskon -30&#37; untuk koleksi musim lalu. Temukan style dunia: butik-butik bagi kaum wanita, laki-laki, dan anak-anak, pakaian olahraga, sepatu, perhiasan, jam tangan dan juga assesoris untuk rumah anda dan banyak lagi. Roppenheim&nbsp;The Style Outlets: just made for you and your Style.   <div><br></div><div>Merk-merk:&nbsp;Adidas, Reebok, American Vintage, Asics, Bayard, Bianca, Birkenstock, Bonnie Doon, Bree, Bruno Banani, Calida, Calvin Klein, Centa Star, Crocs, Deeluxe, Desigual, Destock Jeans, Digel, Dockers, Dyrberg Kern, Eden Park, Etiqueta Negra, Fortwenger, Fossil, Freeman T Porter, Gant, Garcia, GK Mayer, Guess, Heschung, Home, Industries Factory Store, Josef Seibel, Julie Guerlande, Kaimug, Kiko, Látelier Des Createurs, La Place Alsace, Le Crueset, Le Tanneur, Le Temps Des Cerises, Les Petites, Levis, Lindt, Little Big Foot, Little Marcel, Mango, Marvelis, Mephisto, Mey, Milestone, Mise Au Green, Möve, Nike, Pepe Jeans, Petit Beteau, Puma, QB2, Quiksilver, Salamander, Schumacher, Segafredo Zanetti, Seidensticker, Sol Ere, Superdry, Tom Tailor, Tortuga, Tradition Des Vosges, Watch Station, Wellensteyn, WMF, Yuka, Zypr  </div>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420404435_roppenheim.jpg',
                'address' => '1 route de l&#039;Europe, 67930 Roppenheim',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 191,
                'country_id' => 3,
                'name' => 'Roubaix Designer Outlet France',
                'slug' => 'roubaix-designer-outlet-france',
                'hotels' => '',
                'latitude' => '50.6907248',
                'longitude' => '3.180167',
                'attractions' => '<p>Roubaix Designer Outlet di Prancis adalah sebuah pusat perbelanjaan yang menawarkan berbagai macam produk fashion, aksesoris, dan barang-barang rumah tangga dari merek-merek ternama dengan harga diskon. Berikut adalah beberapa item yang bisa Anda beli di Roubaix Designer Outlet:</p>
        <ol>
        <li>
        <p>Pakaian: Roubaix Designer Outlet menawarkan pilihan pakaian dari merek-merek terkenal seperti Adidas, Calvin Klein, Lacoste, dan banyak lagi. Anda dapat menemukan pakaian casual, formal, olahraga, dan sepatu di sini.</p>
        </li>
        <li>
        <p>Aksesoris: Jangan lewatkan juga aksesoris seperti jam tangan, kacamata, ikat pinggang, topi, dan syal. Merek-merek yang tersedia termasuk Michael Kors, Fossil, dan Timberland.</p>
        </li>
        <li>
        <p>Tas: Anda juga dapat memilih tas dari merek-merek seperti Longchamp, Coach, dan Kipling. Tas-tas ini terkenal dengan desain dan kualitasnya yang bagus.</p>
        </li>
        <li>
        <p>Barang-barang rumah tangga: Di Roubaix Designer Outlet, Anda dapat menemukan barang-barang rumah tangga seperti seprai, handuk, dan perlengkapan dapur dari merek-merek seperti Villeroy &amp; Boch, Zwilling, dan Tefal.</p>
        </li>
        <li>
        <p>Parfum: Outlet ini juga menawarkan berbagai macam parfum dari merek-merek terkenal seperti Hugo Boss, Gucci, dan Yves Saint Laurent.</p>
        </li>
        </ol>
        <p>Namun, pastikan untuk memeriksa harga dan ketersediaan barang terlebih dahulu sebelum memutuskan untuk membeli. Selamat berbelanja di Roubaix Designer Outlet!</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420404712_outfrance7.jpg',
                'address' => '44 Rue Mail de Lannoy, 59100 Roubaix',
                'created_at' => null,
                'updated_at' => '2023-03-06 21:44:55',
            ],
            [
                'id' => 192,
                'country_id' => 3,
                'name' => 'Troyes Designer Outlet France',
                'slug' => 'troyes-designer-outlet-france',
                'hotels' => '',
                'latitude' => '48.3297123',
                'longitude' => '4.1055337',
                'attractions' => '<p>Terletak dijantung daerah&nbsp;Champagne yang indah, Troyes Designer Outlet bisa dicapai dalam waktu sejam dari pusat kota&nbsp;Paris. Di sini anda akan menemukan&nbsp;210 nama-nama&nbsp;top di dunia&nbsp;fashion, termasuk&nbsp;Christian Lacroix, Armani, Feraud, Kenzo, Lancel, Polo Ralph Lauren, Cerruti dan&nbsp;Energie. Nike Factory Store, Wolford dan&nbsp;Kookai juga merk-merk yang bisa ditemukan di McArthurGlen Troyes.</p>
        <p>Terletak dijantung daerah Champagne yang indah, Troyes Designer Outlet di Prancis adalah salah satu pusat perbelanjaan outlet terbesar di Eropa yang menawarkan berbagai macam merek fashion terkenal dengan harga diskon. Berikut adalah beberapa hal yang bisa Anda temukan di Troyes Designer Outlet:</p>
        <ol>
        <li>
        <p>Pakaian: Outlet ini menawarkan pakaian dari merek-merek terkenal seperti Ralph Lauren, Lacoste, dan Tommy Hilfiger. Anda dapat menemukan pakaian casual, formal, olahraga, dan sepatu di sini.</p>
        </li>
        <li>
        <p>Aksesoris: Troyes Designer Outlet juga memiliki pilihan aksesoris seperti jam tangan, kacamata, dan syal dari merek-merek seperti Michael Kors dan Calvin Klein.</p>
        </li>
        <li>
        <p>Tas: Anda dapat memilih tas dari merek-merek seperti Longchamp, Furla, dan Guess. Tas-tas ini terkenal dengan desain dan kualitasnya yang bagus.</p>
        </li>
        <li>
        <p>Barang-barang rumah tangga: Outlet ini juga menawarkan barang-barang rumah tangga seperti seprai, handuk, dan perlengkapan dapur dari merek-merek seperti Villeroy &amp; Boch dan Le Creuset.</p>
        </li>
        <li>
        <p>Kosmetik dan parfum: Anda juga dapat memilih kosmetik dan parfum dari merek-merek seperti Clarins, L\'Occitane, dan L\'Oreal.</p>
        </li>
        <li>
        <p>Makanan dan minuman: Troyes Designer Outlet memiliki restoran dan kafe yang menyajikan makanan dan minuman Prancis yang lezat.</p>
        </li>
        </ol>
        <p>Pastikan untuk memeriksa harga dan ketersediaan barang terlebih dahulu sebelum memutuskan untuk membeli. Selamat berbelanja di Troyes Designer Outlet!</p>
        <p>Troyes Designer Outlet bisa dicapai dalam waktu sejam dari pusat kota Paris. Berikut adalah beberapa opsi yang bisa Anda pertimbangkan:</p>
        <ol>
        <li>
        <p>Kendaraan Pribadi: Anda dapat mengendarai mobil ke Troyes Designer Outlet. Outlet ini memiliki tempat parkir gratis yang luas, sehingga Anda tidak perlu khawatir mencari tempat parkir.</p>
        </li>
        <li>
        <p>Bus: Anda dapat naik bus dari pusat kota Troyes menuju outlet ini. Ada beberapa layanan bus yang tersedia, seperti navette Sp&eacute;cial Marques yang beroperasi setiap hari. Tiket bisa dibeli di dalam bus.</p>
        </li>
        <li>
        <p>Kereta: Anda juga dapat naik kereta dari Paris ke stasiun Troyes, lalu naik bus atau taksi ke outlet ini. Waktu perjalanan kereta sekitar 1,5-2 jam dari Paris.</p>
        </li>
        <li>
        <p>Taksi: Jika Anda ingin pergi ke outlet ini dengan taksi, Anda dapat memesan taksi dari kota Troyes atau dari stasiun kereta api Troyes. Namun, biayanya akan lebih mahal dibandingkan dengan opsi transportasi lainnya.</p>
        </li>
        </ol>
        <p>Pastikan untuk memeriksa jadwal dan harga tiket transportasi terlebih dahulu sebelum memutuskan opsi yang terbaik bagi Anda.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420405053_troyes_2.jpg',
                'address' => 'Voie du Bois, 10150 Pont Ste Marie',
                'created_at' => null,
                'updated_at' => '2023-03-06 21:54:16',
            ],
            [
                'id' => 193,
                'country_id' => 3,
                'name' => 'Usines Outlet Center Paris Nord 2',
                'slug' => 'usines-outlet-center-paris-nord-2',
                'hotels' => '',
                'latitude' => '48.9780474',
                'longitude' => '2.4979317',
                'attractions' => '<p>Usines Outlet Center Paris Nord 2 adalah sebuah pusat perbelanjaan outlet yang terletak di dekat Bandara Charles de Gaulle di Prancis. Pusat perbelanjaan ini menawarkan berbagai macam produk fashion, aksesoris, kosmetik, dan barang-barang rumah tangga dari merek-merek terkenal dengan harga diskon. Berikut adalah beberapa hal yang bisa Anda temukan di Usines Outlet Center Paris Nord 2:</p>
        <ol>
        <li>
        <p>Pakaian: Outlet ini menawarkan pilihan pakaian dari merek-merek terkenal seperti Levi\'s, Nike, dan Guess. Anda dapat menemukan pakaian casual, formal, olahraga, dan sepatu di sini.</p>
        </li>
        <li>
        <p>Aksesoris: Usines Outlet Center Paris Nord 2 juga memiliki pilihan aksesoris seperti jam tangan, kacamata, dan syal dari merek-merek seperti Michael Kors dan Swarovski.</p>
        </li>
        <li>
        <p>Tas: Anda dapat memilih tas dari merek-merek seperti Longchamp, Kipling, dan Samsonite. Tas-tas ini terkenal dengan desain dan kualitasnya yang bagus.</p>
        </li>
        <li>
        <p>Barang-barang rumah tangga: Outlet ini menawarkan barang-barang rumah tangga seperti peralatan makan, peralatan masak, dan perabotan rumah tangga dari merek-merek seperti Lagostina dan Pyrex.</p>
        </li>
        <li>
        <p>Kosmetik dan parfum: Anda juga dapat memilih kosmetik dan parfum dari merek-merek seperti L\'Oreal dan Clarins.</p>
        </li>
        </ol>
        <p>Pastikan untuk memeriksa harga dan ketersediaan barang terlebih dahulu sebelum memutuskan untuk membeli. Selamat berbelanja di Usines Outlet Center Paris Nord 2!</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420405414_usine-center-paris-nord.jpg',
                'address' => 'Zone industrielle Paris Nord 2, 134 Avenue de la Plaine de France, 95500 Gonesse',
                'created_at' => null,
                'updated_at' => '2023-03-06 22:05:37',
            ],
            [
                'id' => 194,
                'country_id' => 13,
                'name' => 'Parndorf Designer Outlet Austria',
                'slug' => 'parndorf-designer-outlet-austria',
                'hotels' => '',
                'latitude' => '47.9774441',
                'longitude' => '16.8491759',
                'attractions' => '<p>Parndorf Designer Outlet Austria adalah sebuah pusat perbelanjaan yang terletak di kota Parndorf, Austria, dan terkenal karena menawarkan barang-barang merek terkenal dengan harga diskon. Berikut adalah beberapa barang yang dapat Anda temukan di Parndorf Designer Outlet Austria:</p>
        <ol>
        <li>
        <p>Pakaian: Terdapat beragam merek pakaian terkenal yang tersedia di Parndorf Designer Outlet Austria, termasuk Armani, Calvin Klein, Nike, dan Polo Ralph Lauren. Anda dapat menemukan pakaian untuk pria, wanita, dan anak-anak dengan harga diskon.</p>
        </li>
        <li>
        <p>Sepatu: Terdapat beragam merek sepatu terkenal yang tersedia di Parndorf Designer Outlet Austria, termasuk Adidas, Nike, dan Puma. Anda dapat menemukan sepatu untuk olahraga, kasual, dan formal dengan harga diskon.</p>
        </li>
        <li>
        <p>Tas: Terdapat beragam merek tas terkenal yang tersedia di Parndorf Designer Outlet Austria, termasuk Michael Kors, Coach, dan Furla. Anda dapat menemukan tas untuk wanita dan pria dengan harga diskon.</p>
        </li>
        <li>
        <p>Perhiasan: Terdapat beberapa merek perhiasan terkenal yang tersedia di Parndorf Designer Outlet Austria, termasuk Swarovski dan Pandora. Anda dapat menemukan perhiasan seperti cincin, kalung, dan gelang dengan harga diskon.</p>
        </li>
        <li>
        <p>Barang-barang rumah tangga: Terdapat beragam merek barang-barang rumah tangga yang tersedia di Parndorf Designer Outlet Austria, termasuk Le Creuset dan Villeroy &amp; Boch. Anda dapat menemukan barang-barang seperti peralatan makan, perlengkapan dapur, dan peralatan mandi dengan harga diskon.</p>
        </li>
        </ol>
        <p>Jangan lupa untuk memeriksa jadwal diskon dan promosi di Parndorf Designer Outlet Austria untuk mendapatkan harga yang lebih murah lagi.</p>
        <p>Parndorf Designer Outlet Austria terletak di kota Parndorf, sekitar 30 kilometer di sebelah tenggara Vienna, Austria. Berikut adalah beberapa pilihan transportasi yang dapat Anda gunakan untuk mencapai Parndorf Designer Outlet Austria:</p>
        <ol>
        <li>
        <p>Mobil: Anda dapat menggunakan mobil untuk mencapai Parndorf Designer Outlet Austria, dan tersedia parkir gratis di pusat perbelanjaan tersebut.</p>
        </li>
        <li>
        <p>Bus: Terdapat bus yang menghubungkan Vienna dengan Parndorf Designer Outlet Austria dengan jadwal reguler. Bus ini biasanya berangkat dari stasiun bus Internationales Busterminal Wien (Vienna International Busterminal), yang terletak di Erdberg, Vienna. Waktu tempuh dari Vienna ke Parndorf Designer Outlet Austria adalah sekitar 40 menit.</p>
        </li>
        <li>
        <p>Kereta: Terdapat kereta yang menghubungkan Vienna dengan Parndorf Designer Outlet Austria dengan jadwal reguler. Anda dapat menggunakan kereta dari stasiun Wien Hauptbahnhof (Vienna Central Station) dan turun di stasiun Parndorf. Setelah turun dari kereta, Anda dapat berjalan kaki ke Parndorf Designer Outlet Austria selama sekitar 10-15 menit.</p>
        </li>
        <li>
        <p>Taksi: Anda dapat menggunakan taksi untuk mencapai Parndorf Designer Outlet Austria dari Vienna. Namun, pastikan untuk menegosiasikan harga sebelum naik taksi agar tidak terjadi penipuan.</p>
        </li>
        </ol>
        <p>Harap dicatat bahwa tarif dan jadwal transportasi dapat berubah tergantung pada waktu dan musim. Jadi, pastikan untuk memeriksa informasi terbaru sebelum Anda melakukan perjalanan ke Parndorf Designer Outlet Austria.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420405846_Parndorf1.jpg',
                'address' => 'Designer-Outlet-Straße 1, 7111 Parndorf',
                'created_at' => null,
                'updated_at' => '2023-02-25 20:58:41',
            ],
            [
                'id' => 195,
                'country_id' => 13,
                'name' => 'Salzburg Designer Outlet Austria',
                'slug' => 'salzburg-designer-outlet-austria',
                'hotels' => '',
                'latitude' => '47.7921901',
                'longitude' => '12.9892864',
                'attractions' => '<p>Parndorf Designer Outlet Austria adalah sebuah pusat perbelanjaan yang terletak di kota Parndorf, Austria, dan terkenal karena menawarkan barang-barang merek terkenal dengan harga diskon. Berikut adalah beberapa barang yang dapat Anda temukan di Parndorf Designer Outlet Austria:</p>
        <ol>
        <li>
        <p>Pakaian: Terdapat beragam merek pakaian terkenal yang tersedia di Parndorf Designer Outlet Austria, termasuk Armani, Calvin Klein, Nike, dan Polo Ralph Lauren. Anda dapat menemukan pakaian untuk pria, wanita, dan anak-anak dengan harga diskon.</p>
        </li>
        <li>
        <p>Sepatu: Terdapat beragam merek sepatu terkenal yang tersedia di Parndorf Designer Outlet Austria, termasuk Adidas, Nike, dan Puma. Anda dapat menemukan sepatu untuk olahraga, kasual, dan formal dengan harga diskon.</p>
        </li>
        <li>
        <p>Tas: Terdapat beragam merek tas terkenal yang tersedia di Parndorf Designer Outlet Austria, termasuk Michael Kors, Coach, dan Furla. Anda dapat menemukan tas untuk wanita dan pria dengan harga diskon.</p>
        </li>
        <li>
        <p>Perhiasan: Terdapat beberapa merek perhiasan terkenal yang tersedia di Parndorf Designer Outlet Austria, termasuk Swarovski dan Pandora. Anda dapat menemukan perhiasan seperti cincin, kalung, dan gelang dengan harga diskon.</p>
        </li>
        <li>
        <p>Barang-barang rumah tangga: Terdapat beragam merek barang-barang rumah tangga yang tersedia di Parndorf Designer Outlet Austria, termasuk Le Creuset dan Villeroy &amp; Boch. Anda dapat menemukan barang-barang seperti peralatan makan, perlengkapan dapur, dan peralatan mandi dengan harga diskon.</p>
        </li>
        </ol>
        <ins class="bookingaff" data-aid="2318694" data-target_aid="7989039" data-prod="dfl2" data-width="300" data-height="350" data-lang="id" data-dest_id="-1989985" data-dest_type="city" data-df_num_properties="5" data-bk-touched="true"><iframe src="//www.booking.com/flexiproduct.html?product=dfl2&amp;w=300&amp;h=350&amp;lang=id&amp;aid=2318694&amp;target_aid=7989039&amp;dest_id=-1989985&amp;dest_type=city&amp;df_num_properties=5&amp;fid=1677359202244&amp;" width="300" height="350" scrolling="no" style="order:none;padding:0;margin:0 0 0 20px;overflow:hidden;width:300px;height:350px;float:right" marginheight="0" marginwidth="0" frameborder="0" allowtransparency="true" id="booking_widget__2318694__1677359202244" data-responsive="false"></iframe></ins>
        <script type="text/javascript">
            (function(d, sc, u) {
              var s = d.createElement(sc), p = d.getElementsByTagName(sc)[0];
              s.type = \'text/javascript\';
              s.async = true;
              s.src = u + \'?v=\' + (+new Date());
              p.parentNode.insertBefore(s,p);
              })(document, \'script\', \'//cf.bstatic.com/static/affiliate_base/js/flexiproduct.js\');
        </script><p>Jangan lupa untuk memeriksa jadwal diskon dan promosi di Parndorf Designer Outlet Austria untuk mendapatkan harga yang lebih murah lagi.</p>
        <p>Parndorf Designer Outlet Austria terletak di kota Parndorf, sekitar 30 kilometer di sebelah tenggara Vienna, Austria. Berikut adalah beberapa pilihan transportasi yang dapat Anda gunakan untuk mencapai Parndorf Designer Outlet Austria:</p>
        <ol>
        <li>
        <p>Mobil: Anda dapat menggunakan mobil untuk mencapai Parndorf Designer Outlet Austria, dan tersedia parkir gratis di pusat perbelanjaan tersebut.</p>
        </li>
        <li>
        <p>Bus: Terdapat bus yang menghubungkan Vienna dengan Parndorf Designer Outlet Austria dengan jadwal reguler. Bus ini biasanya berangkat dari stasiun bus Internationales Busterminal Wien (Vienna International Busterminal), yang terletak di Erdberg, Vienna. Waktu tempuh dari Vienna ke Parndorf Designer Outlet Austria adalah sekitar 40 menit.</p>
        </li>
        <li>
        <p>Kereta: Terdapat kereta yang menghubungkan Vienna dengan Parndorf Designer Outlet Austria dengan jadwal reguler. Anda dapat menggunakan kereta dari stasiun Wien Hauptbahnhof (Vienna Central Station) dan turun di stasiun Parndorf. Setelah turun dari kereta, Anda dapat berjalan kaki ke Parndorf Designer Outlet Austria selama sekitar 10-15 menit.</p>
        </li>
        <li>
        <p>Taksi: Anda dapat menggunakan taksi untuk mencapai Parndorf Designer Outlet Austria dari Vienna. Namun, pastikan untuk menegosiasikan harga sebelum naik taksi agar tidak terjadi penipuan.</p>
        </li>
        </ol>
        <p>Harap dicatat bahwa tarif dan jadwal transportasi dapat berubah tergantung pada waktu dan musim. Jadi, pastikan untuk memeriksa informasi terbaru sebelum Anda melakukan perjalanan ke Parndorf Designer Outlet Austria.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420406264_podpod-MCARTHURGLEN-01.jpg',
                'address' => 'Kasernenstraße 1, 5073 Wals-Himmelreich',
                'created_at' => null,
                'updated_at' => '2023-02-25 21:32:46',
            ],
            [
                'id' => 196,
                'country_id' => 3,
                'name' => 'Avenue des Champs Elysées',
                'slug' => 'avenue-des-champs-elysees',
                'hotels' => '',
                'latitude' => '48.869576',
                'longitude' => '2.30825',
                'attractions' => '<p>Avenue des Champs Elys&eacute;es adalah salah satu jalan perbelanjaan paling mewah di dunia dan menawarkan berbagai macam toko, butik, dan pusat perbelanjaan dari merek-merek terkenal. Berikut adalah beberapa hal yang bisa Anda beli saat berbelanja di Avenue des Champs Elys&eacute;es:</p>
        <ol>
        <li>
        <p>Pakaian: Anda dapat menemukan berbagai macam pakaian fashion dari merek-merek terkenal seperti Louis Vuitton, Chanel, Dior, Gucci, dan Prada. Mulai dari gaun dan pakaian olahraga hingga pakaian kasual dan formal.</p>
        </li>
        <li>
        <p>Tas dan aksesoris: Avenue des Champs Elys&eacute;es menawarkan pilihan tas dan aksesoris mewah dari merek-merek seperti Herm&egrave;s, Cartier, dan Bulgari. Anda dapat menemukan tas tangan, ikat pinggang, jam tangan, dan perhiasan.</p>
        </li>
        <li>
        <p>Parfum dan kosmetik: Ada banyak toko parfum mewah di Avenue des Champs Elys&eacute;es, termasuk Chanel, Dior, dan Guerlain. Anda juga dapat menemukan kosmetik dan produk perawatan kulit dari merek-merek seperti L\'Oreal dan Lanc&ocirc;me.</p>
        </li>
        <li>
        <p>Souvenir: Jika Anda mencari oleh-oleh khas Paris, Anda dapat membeli souvenir seperti magnet kulkas, kaos, dan barang-barang lainnya dengan gambar Eiffel Tower atau simbol-simbol Paris lainnya.</p>
        </li>
        <li>
        <p>Makanan dan minuman: Di Avenue des Champs Elys&eacute;es, Anda juga dapat menemukan toko-toko makanan dan minuman premium seperti La Maison du Chocolat, Ladur&eacute;e, dan Fauchon.</p>
        </li>
        </ol>
        <p>Pastikan untuk memeriksa harga dan ketersediaan barang terlebih dahulu sebelum memutuskan untuk membeli.</p>
        <p>Apabila tujuan anda adalah hunting produk-produk Eropa, maka anda perlu memesan hotel dekat dengan Avenue des Champs Elys&eacute;es. Berikut adalah beberapa hotel yang terletak dekat dengan Avenue des Champs Elys&eacute;es:</p>
        <ol>
        <li>
        <p><a title="Hotel Marignan Champs-Elys&eacute;es" href="https://www.booking.com/hotel/fr/marignan-champs-elysees.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Marignan Champs-Elys&eacute;es</a>: Hotel bintang 5 yang terletak hanya beberapa langkah dari Avenue des Champs Elys&eacute;es dan menawarkan fasilitas mewah seperti spa, restoran, dan bar.</p>
        </li>
        <li>
        <p><a title="La Clef Champs-&Eacute;lys&eacute;es Paris" href="https://www.booking.com/hotel/fr/la-clef-champs-elysees-paris.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">La Clef Champs-&Eacute;lys&eacute;es Paris</a>: Hotel butik bintang 5 yang menawarkan suite mewah dan terletak di lokasi yang ideal di dekat Avenue des Champs Elys&eacute;es.</p>
        </li>
        <li>
        <p><a title="H&ocirc;tel Plaza Ath&eacute;n&eacute;e" href="https://www.booking.com/hotel/fr/ha-tel-plaza-atha-c-na-c-e-paris.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">H&ocirc;tel Plaza Ath&eacute;n&eacute;e</a>: Hotel bintang 5 yang legendaris ini terletak di Avenue Montaigne yang terkenal dan hanya beberapa menit berjalan kaki dari Avenue des Champs Elys&eacute;es.</p>
        </li>
        <li>
        <p><a title="Hotel Le Colis&eacute;e" href="https://www.booking.com/hotel/fr/lecolise.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Le Colis&eacute;e</a>: Hotel butik bintang 4 yang terletak di lingkungan yang tenang di jantung kota Paris, hanya beberapa menit berjalan kaki dari Avenue des Champs Elys&eacute;es.</p>
        </li>
        <li>
        <p><a title="Hotel George Washington Paris" href="https://www.booking.com/hotel/fr/horsetwashington.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel George Washington Paris</a>: Hotel bintang 4 yang terletak di pusat kota Paris, dekat dengan Avenue des Champs Elys&eacute;es dan menawarkan kamar yang nyaman dan modern.</p>
        </li>
        </ol>
        <p>Avenue des Champs Elys&eacute;es adalah kawasan yang mewah dan hotel di sekitar area ini cenderung memiliki harga yang cukup mahal. Namun, ada beberapa pilihan hotel murah yang dapat Anda pertimbangkan untuk menginap di dekat Avenue des Champs Elys&eacute;es. Berikut adalah beberapa di antaranya:</p>
        <ol>
        <li>
        <p><a title="Hotel Ekta" href="https://www.booking.com/hotel/fr/ekta.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Ekta</a>: Hotel bintang 3 yang terletak hanya beberapa menit berjalan kaki dari Avenue des Champs Elys&eacute;es. Hotel ini menawarkan kamar yang modern dan nyaman dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="H&ocirc;tel de l\'Arcade" href="https://www.booking.com/hotel/fr/de-l-arcade.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">H&ocirc;tel de l\'Arcade</a>: Hotel bintang 3 yang terletak di dekat Madeleine, hanya beberapa menit berjalan kaki dari Avenue des Champs Elys&eacute;es. Hotel ini menawarkan kamar yang nyaman dengan dekorasi yang elegan.</p>
        </li>
        <li>
        <p><a title="H&ocirc;tel Elys&eacute;es Flaubert" href="https://www.booking.com/hotel/fr/flaubert.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">H&ocirc;tel Elys&eacute;es Flaubert</a>: Hotel bintang 3 yang terletak di dekat Porte Maillot, hanya beberapa menit berjalan kaki dari Avenue des Champs Elys&eacute;es. Hotel ini menawarkan kamar yang terjangkau dengan dekorasi yang modern.</p>
        </li>
        <li>
        <p><a title="Hotel Bradford Elys&eacute;es" href="https://www.booking.com/hotel/fr/bradfordelysees.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Bradford Elys&eacute;es</a> - Astotel: Hotel butik bintang 4 yang terletak di dekat Elys&eacute;es, hanya beberapa menit berjalan kaki dari Avenue des Champs Elys&eacute;es. Hotel ini menawarkan kamar yang indah dengan dekorasi yang elegan dan harga yang terjangkau.</p>
        </li>
        </ol>
        <p>Pastikan untuk memeriksa ulasan dan harga kamar terlebih dahulu sebelum memutuskan untuk memesan hotel.&nbsp;Selamat berbelanja di Avenue des Champs Elys&eacute;es!</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => '1678139951_196.jpg',
                'address' => 'Avenue des Champs Elysées, Paris',
                'created_at' => null,
                'updated_at' => '2023-03-06 22:21:44',
            ],
            [
                'id' => 197,
                'country_id' => 3,
                'name' => 'Boulevard Haussmann',
                'slug' => 'boulevard-haussmann',
                'hotels' => '',
                'latitude' => '48.87364',
                'longitude' => '2.328628',
                'attractions' => '<p>Bagian dari jalan Boulevard Haussmann, terletak diantara Chauss&eacute;e d&rsquo;Antin et Havre Caumartin stasion metro di daerah ke 9, belakang Paris Opera (Garnier, bukan Bastille Opera), adalah tempat di mana Printemps dan Galeries Lafayettes department store yang terkenal berada. Kosmetik, fashion, aksesoris rumah tangga, setiap lantai memiliki tema sendiri. Kalau anda belum capek, banyak toko-toko di sekitar akan menyambut anda seperti C&amp;A, H&amp;M, Zara, Benetton, Uniqlo dan banyak lagi!</p>
        <p>Berikut beberapa kegiatan wisata yang bisa dilakukan di Boulevard Haussmann:</p>
        <ol>
        <li>
        <p>Berbelanja di Galeries Lafayette: Galeries Lafayette adalah salah satu toko terbesar di Boulevard Haussmann, yang menawarkan berbagai macam barang seperti pakaian, aksesori, dan kosmetik dari merek terkenal.</p>
        </li>
        <li>
        <p>Membeli parfum di Fragonard Parfumerie: Fragonard Parfumerie adalah toko yang menjual berbagai macam parfum Prancis yang terkenal. Selain berbelanja, Anda juga bisa mengikuti tur gratis di pabrik mereka untuk melihat bagaimana parfum dibuat.</p>
        </li>
        <li>
        <p>Mengunjungi Op&eacute;ra Garnier: Op&eacute;ra Garnier adalah teater terkenal yang bersejarah di Paris, yang terletak di sepanjang Boulevard Haussmann. Anda bisa mengambil tur untuk melihat interior teater dan mengetahui sejarahnya.</p>
        </li>
        <li>
        <p>Melihat karya seni di Mus&eacute;e Jacquemart-Andr&eacute;: Mus&eacute;e Jacquemart-Andr&eacute; adalah museum seni yang terkenal yang terletak di Boulevard Haussmann. Di sini Anda bisa melihat karya seni dari berbagai periode dan gaya.</p>
        </li>
        <li>
        <p>Menikmati pemandangan dari atas Printemps: Printemps adalah toko yang juga memiliki teras pemandangan di atasnya. Anda bisa naik ke atas dan menikmati pemandangan kota Paris dari ketinggian.</p>
        </li>
        <li>
        <p>Berjalan-jalan di sepanjang Boulevard Haussmann: Boulevard Haussmann sendiri adalah tempat yang populer untuk berjalan-jalan, terutama di sekitar area toko-toko besar seperti Galeries Lafayette dan Printemps. Anda bisa menikmati pemandangan bangunan-bangunan bersejarah dan menikmati suasana kota yang hidup dan dinamis.</p>
        </li>
        </ol>
        <p>Banyak hotel-hotel mewah di sekitar Boulevard Haussmann, akan tetapi berikut daftar hotel-hotel sekitar Boulevard Haussmann dengan tarif cukup terjangkau</p>
        <ol>
        <li>
        <p><a title="H&ocirc;tel de l\'Europe Saint-S&eacute;verin" href="https://www.booking.com/hotel/fr/de-l-europe-paris1.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">H&ocirc;tel de l\'Europe Saint-S&eacute;verin</a>: Hotel ini terletak sekitar 2 km dari Boulevard Haussmann dan menawarkan kamar yang nyaman dan bersih dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="H&ocirc;tel Saint Andr&eacute; des Arts" href="https://www.booking.com/hotel/fr/saint-andre-des-arts-private-apartment.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">H&ocirc;tel Saint Andr&eacute; des Arts</a>: Hotel yang terletak sekitar 3 km dari Boulevard Haussmann ini menawarkan kamar yang nyaman dengan dekorasi yang sederhana namun elegan.</p>
        </li>
        <li>
        <p><a title="H&ocirc;tel Baume" href="https://www.booking.com/hotel/fr/baume-paris.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">H&ocirc;tel Baume</a>: Hotel ini terletak sekitar 4 km dari Boulevard Haussmann dan menawarkan kamar-kamar yang elegan dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="H&ocirc;tel Saint Paul Rive Gauche" href="https://www.booking.com/hotel/fr/saintpaul.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">H&ocirc;tel Saint Paul Rive Gauche</a>: Hotel yang terletak sekitar 3 km dari Boulevard Haussmann ini menawarkan kamar-kamar yang nyaman dengan dekorasi tradisional Prancis.</p>
        </li>
        </ol>
        <p>Pastikan untuk memeriksa ulasan dari pengunjung sebelum memesan hotel untuk memastikan kualitas pelayanan dan fasilitas yang ditawarkan.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420448959_Galerie_Lafayette_Haussman.JPG',
                'address' => 'Boulevard Haussmann, Paris',
                'created_at' => null,
                'updated_at' => '2023-03-09 18:53:01',
            ],
            [
                'id' => 198,
                'country_id' => 3,
                'name' => 'Avenue Montaigne',
                'slug' => 'avenue-montaigne',
                'hotels' => '',
                'latitude' => '48.867094',
                'longitude' => '2.3061971',
                'attractions' => '<p>Jalan yang anggun di daerah ke 8 terletak diantara Rond Point des Champs Elys&eacute;es dan Place de l&rsquo;Alma (Alma-Marceau stasion metro) dekat Seine. Avenue Montaigne adalah jalan mewah yang terkenal di Paris, Prancis, dan menjadi tempat tujuan wisata yang populer. Jalan ini terletak di arondisemen ke-8 Paris dan terkenal dengan butik-butik desainer ternama, hotel mewah, restoran, dan teater.</p>
        <p>Berikut adalah beberapa hal yang dapat ditemukan di Avenue Montaigne:</p>
        <ol>
        <li>Butik Desainer: Avenue Montaigne dikenal dengan butik-butik desainer ternama seperti Chanel, Dior, Louis Vuitton, Gucci, dan Prada. Anda dapat menemukan berbagai pilihan pakaian, tas, dan aksesori mewah yang berkualitas tinggi di butik-butik ini.</li>
        <li>Hotel Mewah: Ada beberapa hotel mewah yang terletak di sepanjang Avenue Montaigne, seperti <a title="Hotel Plaza Athenee" href="https://www.booking.com/hotel/fr/ha-tel-plaza-atha-c-na-c-e-paris.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Plaza Athenee</a>, <a title="Hotel Montaigne" href="https://www.booking.com/hotel/fr/montaigne-paris1.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Montaigne</a>, dan <a title="Hotel George V" href="https://www.booking.com/hotel/fr/four-seasons-george-v-paris.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel George V</a>. Hotel-hotel ini menawarkan fasilitas mewah dan pemandangan indah dari kamar-kamarnya.</li>
        <li>Restoran: Avenue Montaigne menawarkan berbagai restoran yang berkualitas tinggi, mulai dari restoran mewah hingga restoran kelas menengah. Anda dapat menikmati hidangan Prancis klasik dan internasional yang lezat di restoran-restoran ini.</li>
        <li>Teater: Ada beberapa teater di Avenue Montaigne yang menampilkan pertunjukan teater dan musikal yang terkenal, seperti Th&eacute;&acirc;tre des Champs-&Eacute;lys&eacute;es dan Th&eacute;&acirc;tre Marigny.</li>
        <li>Arsitektur Indah: Bangunan-bangunan yang terletak di sepanjang Avenue Montaigne memiliki arsitektur yang indah dan menarik. Ada beberapa bangunan bersejarah yang terawat dengan baik dan menambah keindahan jalan ini.</li>
        </ol>
        <p>Itulah beberapa hal yang dapat ditemukan di Avenue Montaigne. Jalan yang mewah dan indah ini menawarkan pengalaman berbelanja dan bersantai yang menarik bagi pengunjung yang berkunjung ke Paris.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => 'place1420449275_960px-Paris_avenue_montaigne_plaza_athena.1.jpg',
                'address' => 'Avenue Montaigne, Paris',
                'created_at' => null,
                'updated_at' => '2023-02-28 21:03:01',
            ],
            [
                'id' => 199,
                'country_id' => 17,
                'name' => 'Yekaterina',
                'slug' => 'yekaterina',
                'hotels' => '',
                'latitude' => '55.7613848',
                'longitude' => '37.6145848',
                'attractions' => 'Salah satu pengerajin bulu terkenal di&nbsp;Rusia yag tertua, tempat ini telah menjadi pabrik&nbsp;shapky (topi bulu) dan&nbsp;shuby (jas bulu) sejak&nbsp;1912. Yekaterina selalu menjaga reputasi kualitas tinggi hasil kerajinan bulu dan kulit juga selalu membuat design yang up to date sesuai dengan trend.',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420449993_a82a8ffa5bd0a205119d9a3b01319261.jpg',
                'address' => 'ul Bolshaya Dmitrovka 11, Moscow',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 200,
                'country_id' => 17,
                'name' => 'Flakon',
                'slug' => 'flakon',
                'hotels' => '',
                'latitude' => '55.8045282',
                'longitude' => '37.5858647',
                'attractions' => '<p>Flacon Design Factory adalah kompleks seni dan desain yang menawarkan berbagai macam barang unik, kreatif, dan berkualitas tinggi yang dapat dibeli sebagai suvenir atau hadiah untuk orang yang Anda cintai. Beberapa toko dan toko di kompleks ini menawarkan barang-barang seperti:</p>
        <ol>
        <li>Pakaian dan aksesori desainer, seperti baju, tas, sepatu, topi, dan ikat pinggang.</li>
        <li>Perhiasan dan barang-barang aksesoris, seperti anting-anting, kalung, gelang, dan bros.</li>
        <li>Kerajinan tangan dan barang-barang rumah tangga, seperti vas, lilin wangi, gantungan kunci, dan pernak-pernik unik.</li>
        <li>Seni rupa dan barang-barang dekoratif, seperti lukisan, patung, poster, dan barang-barang dekorasi dinding.</li>
        <li>Barang-barang kuliner, seperti cokelat, teh, dan produk-produk makanan yang unik dan kreatif.</li>
        </ol>
        <p>Selain itu, Anda juga dapat membeli buku-buku tentang seni dan desain di toko buku, atau membeli tiket untuk acara seni dan budaya seperti konser musik, pertunjukan teater, dan pameran seni. Pastikan untuk menjelajahi seluruh kompleks, karena masing-masing toko dan studio di Flacon memiliki karakteristik yang unik dan menawarkan barang-barang yang berbeda-beda.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420479293_item_55247.jpg',
                'address' => 'ul Bolshaya Novodmitrovskaya 36, Moscow',
                'created_at' => null,
                'updated_at' => '2023-03-03 21:26:16',
            ],
            [
                'id' => 201,
                'country_id' => 17,
                'name' => 'GUM',
                'slug' => 'gum',
                'hotels' => '',
                'latitude' => '55.754679',
                'longitude' => '37.621661',
                'attractions' => '<p>GUM (Gosudarstvennyi Universalnyi Magazin) adalah pusat perbelanjaan dan galeri terkenal di pusat kota Moskow, Rusia. Jika Anda mengunjungi GUM, ada beberapa barang yang mungkin menarik minat Anda, seperti:</p>
        <ol>
        <li>Barang-barang mewah: GUM terkenal karena menawarkan berbagai barang mewah seperti pakaian, aksesoris, perhiasan, dan kosmetik dari merek-merek terkenal seperti Chanel, Dior, Gucci, Prada, dan Versace.</li>
        <li>Souvenir dan hadiah: Terdapat beberapa toko yang menjual suvenir tradisional Rusia, seperti boneka Matryoshka, souvenir dari kota-kota Rusia, dan barang-barang seni rupa dan kerajinan tangan.</li>
        <li>Makanan dan minuman: Di lantai bawah GUM, Anda dapat menemukan berbagai macam makanan dan minuman, seperti cokelat, kue, minuman khas Rusia, dan produk-produk makanan khas.</li>
        <li>Barang-barang elektronik: Terdapat beberapa toko di GUM yang menjual barang elektronik seperti smartphone, laptop, kamera, dan aksesori elektronik.</li>
        <li>Parfum dan kosmetik: Terdapat beberapa toko kosmetik dan parfum yang menjual merek terkenal seperti Lancome, Clinique, dan Yves Saint Laurent.</li>
        </ol>
        <p>Selain itu, GUM juga memiliki arsitektur yang indah dan menarik, sehingga Anda dapat menikmati suasana tempat tersebut sambil menikmati pemandangan yang indah.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420480002_GUM,_Moscow,_Russia.jpg',
                'address' => 'Red Square, 3, Moscow',
                'created_at' => null,
                'updated_at' => '2023-03-03 21:27:14',
            ],
            [
                'id' => 202,
                'country_id' => 14,
                'name' => 'Factory Getafe Outlet Spain',
                'slug' => 'factory-getafe-outlet-spain',
                'hotels' => '',
                'latitude' => '40.2709472',
                'longitude' => '-3.7014804',
                'attractions' => '<p>Factory Getafe, yang terletak di luar kota Madrid, adalah mal outlet yang memiliki bermacam-macam toko, menjual barang-barang kualitas top dan produk-produk fashion dengan nama-nama terkenal di dunia. Mal ini didesign dengan bentuk huruf L dan memiliki bermacam-macam toko yang menawarkan pakaian, sepatu, pakaian olahraga, peralatan dapur dan aksesoris.</p><p>Di mal ini diskon tiap tahun dari sekitar 30 sampai 70% juga termasuk cuci gudang. Outlet ini memiliki luas sebesar&nbsp;20.500 m2 dan di sana juga dijual pakaian-pakaian untuk segala, seperti juga produk-produk kecantikan, semua ditawarkan dengan harga rendah tiap tahun.</p><p>Mal ini didesign sesuai dengan keinginan pembeli, maka dari itu banyak juga ditemukan tempat makan, seperti Ital&nbsp;Caffe, Lindt dan&nbsp;Rodilla. Demi kenyamanan pengunjung, mal ini juga menyediakan ATM, tempat istirahat, bisa minta tax free, tempat parkir cukup, WiFi gratis, fasilitas bayi,&nbsp;information desks dan&nbsp;security.</p><p>Merk-merk:&nbsp;Guess, Chicco, O´Neill, Caramelo, Reebok, Samsonite, Miss Sixty, BillaBong, Mango, Pepe Jeans, Polo Ralph Lauren, Adidas, Diesel, Hugo Boss, Tommy Hilfiger, Lee, Dockers, Rip Curl, Desigual, Levis, Nike, Gas, Benetton, Asics, Calvin Klein, Converse, Gant, Lindt, Puma, Triumph, Vanity Fair  </p>
        <p>Factory Getafe Outlet terletak di kota Getafe, dekat Madrid, Spanyol. Ada beberapa cara untuk mencapai pusat perbelanjaan ini:</p>
        <ol>
        <li>Dengan mobil: Jika Anda memiliki mobil atau menyewa mobil, Anda dapat mengikuti jalan tol A-4 (Autov&iacute;a del Sur) menuju C&oacute;rdoba dan keluar di exit 13. Factory Getafe Outlet memiliki area parkir gratis yang luas.</li>
        <li>Dengan kereta: Anda dapat naik kereta dari stasiun kereta Madrid Atocha ke stasiun kereta Getafe Centro. Dari sana, Anda dapat berjalan kaki atau mengambil taksi ke Factory Getafe Outlet. Jarak antara stasiun kereta Getafe Centro dan Factory Getafe Outlet sekitar 2,5 km.</li>
        <li>Dengan bus: Anda dapat naik bus dari pusat kota Madrid atau stasiun kereta Madrid Atocha ke Getafe. Kemudian, dari Getafe, Anda dapat mengambil bus lokal atau taksi ke Factory Getafe Outlet. Beberapa perusahaan bus yang melayani rute ini antara lain Avanza dan La Sepulvedana.</li>
        <li>Dengan shuttle bus: Factory Getafe Outlet juga menawarkan layanan shuttle bus gratis dari Plaza Espa&ntilde;a di pusat kota Madrid. Shuttle bus berangkat pada waktu tertentu dan membawa para pengunjung langsung ke Factory Getafe Outlet.</li>
        </ol>
        <p>Itulah beberapa cara untuk mencapai Factory Getafe Outlet dari pusat kota Madrid atau sekitarnya. Pilihan transportasi tergantung pada preferensi dan kebutuhan Anda.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420481308_factory-getafe2.jpg',
                'address' => 'Avenida Río Guadalquivir, 15, 28906 Getafe, Madrid',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:23:42',
            ],
            [
                'id' => 203,
                'country_id' => 14,
                'name' => 'Factory Las Rozas Outlet Spain',
                'slug' => 'factory-las-rozas-outlet-spain',
                'hotels' => '',
                'latitude' => '40.5208757',
                'longitude' => '-3.9018104',
                'attractions' => '<p>Las Rozas Village adalah outlet yang hanya menawarkan pilihan-pilihan lux. Las Rozas Village adalah outlet ke dua yang dibuka di Spanyol.</p><p>Dari Madrid kita bisa mencapai Las Rozas Village kira-kira hanya dalam waktu setengah jam dan bisa dicapai dengan bermacam-macam jenis transportasi. Outlet ini terletak di jantung pinggiran kota Madrid, dan merupakan tempat dijualnya merk-merk mahal di Spanyol seperti Adolfo Domínguez, Belstaff, Burberry, Hackett, Hugo Boss, Kenzo, TAG Heuer, TOUS and Versace. Komplek ini memiliki lebih dari 100 toko yang menjual merk-merk Spanyol dan internasional. Dan juga lokasinya berdekatan dengan tempat-tempat turis seperti &nbsp;Toledo kota tua jaman pertengahan, San Lorenzo de El Escorial, Segovia dan Ávila.</p><p>Merk-merk:&nbsp;Guess, Chicco, O´Neill, Caramelo, Reebok, Samsonite, Miss Sixty, BillaBong, Mango, Pepe Jeans, Polo Ralph Lauren, Adidas, Diesel, Hugo Boss, Tommy Hilfiger, Lee, Dockers, Rip Curl, Desigual, Levis, Nike, Gas, Benetton, Asics, Calvin Klein, Converse, Gant, Lindt, Puma, Triumph, Vanity Fair  </p>
        <p>Factory Las Rozas Outlet terletak di Las Rozas de Madrid, sekitar 20 km di luar kota Madrid, Spanyol. Ada beberapa cara untuk mencapai pusat perbelanjaan ini:</p>
        <ol>
        <li>Dengan mobil: Jika Anda memiliki mobil atau menyewa mobil, Anda dapat mengikuti jalan tol A6 menuju La Coruña dan keluar di exit 19. Factory Las Rozas Outlet memiliki area parkir gratis yang luas.</li>
        <li>Dengan bus: Anda dapat naik bus dari pusat kota Madrid atau stasiun kereta Madrid Atocha ke Las Rozas de Madrid. Kemudian, dari Las Rozas de Madrid, Anda dapat mengambil bus lokal atau taksi ke Factory Las Rozas Outlet. Beberapa perusahaan bus yang melayani rute ini antara lain Avanza dan La Sepulvedana.</li>
        <li>Dengan kereta: Anda dapat naik kereta dari stasiun kereta Madrid Atocha ke stasiun kereta Las Rozas de Madrid. Dari stasiun Las Rozas de Madrid, Anda dapat mengambil taksi atau bus lokal ke Factory Las Rozas Outlet.</li>
        <li>Dengan shuttle bus: Factory Las Rozas Outlet juga menawarkan layanan shuttle bus gratis dari pusat kota Madrid. Shuttle bus berangkat dari Plaza de Oriente dan berhenti di sejumlah titik di pusat kota sebelum tiba di Factory Las Rozas Outlet.</li>
        </ol>
        <p>Itulah beberapa cara untuk mencapai Factory Las Rozas Outlet dari pusat kota Madrid atau sekitarnya. Pilihan transportasi tergantung pada preferensi dan kebutuhan Anda.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420481961_las-rozas-village-outlet.jpg',
                'address' => 'Calle Juan Ramón Jiménez, 3, 28232 Las Rozas, Madrid',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:24:52',
            ],
            [
                'id' => 204,
                'country_id' => 14,
                'name' => 'Factory SS De Los Reyes Outlet',
                'slug' => 'factory-ss-de-los-reyes-outlet',
                'hotels' => '',
                'latitude' => '40.5669418',
                'longitude' => '-3.6090283',
                'attractions' => '<p>Dengan lebih dari 120 merk-merk Spanyol dan internasional berada di dalam mal satu lantai, San Sebastián de los Reyes The Style Outlets menawarkan pakaian wanita, lingerie, pakian laki-liki, anak-anak, sepatu, jeans, pakaian olahraga dan barang-barang kulit dengan standar diskon dari mulai 30-70% dari harga toko. Tempat ini juga menawarkan parkir gratis, walaupun sekali-sekali bisa susah cari parkir, dan ada juga publik transport sepert bus dan metro dari kota Madrid.</p><p>Di dalam mal outlet ini ada dua toko kopi (Jamiaca and Starbucks), dan juga Lindt chocolate shop untuk yang doyan minuman coklat.&nbsp;</p><p>Merk-merk:&nbsp;Guess, Chicco, O´Neill, Caramelo, Reebok, Samsonite, Miss Sixty, BillaBong, Mango, Pepe Jeans, Polo Ralph Lauren, Adidas, Diesel, Hugo Boss, Tommy Hilfiger, Lee, Dockers, Rip Curl, Desigual, Levis, Nike, Gas, Benetton, Asics, Calvin Klein, Converse, Gant, Lindt, Puma, Triumph, Vanity Fair  </p>
        <p>Factory SS de los Reyes Outlet terletak di San Sebasti&aacute;n de los Reyes, sekitar 22 km di luar kota Madrid, Spanyol. Ada beberapa cara untuk mencapai pusat perbelanjaan ini:</p>
        <ol>
        <li>Dengan mobil: Jika Anda memiliki mobil atau menyewa mobil, Anda dapat mengikuti jalan tol A-1 (Autov&iacute;a del Norte) menuju Burgos dan keluar di exit 19. Factory SS de los Reyes Outlet memiliki area parkir gratis yang luas.</li>
        <li>Dengan bus: Anda dapat naik bus dari pusat kota Madrid atau stasiun kereta Madrid Chamart&iacute;n ke San Sebasti&aacute;n de los Reyes. Kemudian, dari San Sebasti&aacute;n de los Reyes, Anda dapat mengambil bus lokal atau taksi ke Factory SS de los Reyes Outlet. Beberapa perusahaan bus yang melayani rute ini antara lain ALSA dan La Sepulvedana.</li>
        <li>Dengan kereta: Anda dapat naik kereta dari stasiun kereta Madrid Chamart&iacute;n ke stasiun kereta San Sebasti&aacute;n de los Reyes. Dari stasiun San Sebasti&aacute;n de los Reyes, Anda dapat mengambil taksi atau bus lokal ke Factory SS de los Reyes Outlet.</li>
        <li>Dengan shuttle bus: Factory SS de los Reyes Outlet juga menawarkan layanan shuttle bus gratis dari beberapa titik di pusat kota Madrid. Shuttle bus berangkat pada waktu tertentu dan membawa para pengunjung langsung ke Factory SS de los Reyes Outlet.</li>
        </ol>
        <p>Itulah beberapa cara untuk mencapai Factory SS de los Reyes Outlet dari pusat kota Madrid atau sekitarnya. Pilihan transportasi tergantung pada preferensi dan kebutuhan Anda.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420482665_factory-san-sebastian.jpg',
                'address' => 'Calle Salvador de Madariaga, S/N, 28702 San Sebastián de los Reyes, Madrid',
                'created_at' => null,
                'updated_at' => '2023-03-03 22:25:22',
            ],
            [
                'id' => 205,
                'country_id' => 14,
                'name' => 'Las Roca Outlet Village',
                'slug' => 'las-roca-outlet-village',
                'hotels' => '',
                'latitude' => '41.5988102',
                'longitude' => '2.3477444',
                'attractions' => '<p>Barcelona La Roca Village outlet, di pinggiran&nbsp;Barcelona, Spanyol, telah sukses berjualan sejak&nbsp;July 1998. Karena kedekatannya dengan resor-resor pantai&nbsp;Costa Brava, dan kemungkinan akses dari jalan tol&nbsp;AP7 (A7), komplek ini menjadi patokan untuk penduduk dan pengunjung yang modis ke&nbsp;Catalonia, daerah paling makmur di semenanjung&nbsp;Iberia.</p><p>La Roca Village terletak kira-kira&nbsp;45 menit dari timur laut&nbsp;Barcelona di jalur&nbsp;AP7 (A7) jalan tol, yang menghubungkan Spanyol dengan negara-negara Eropa.&nbsp;<br>Anda akan menemukan lebih dari&nbsp;90 merk internasional dan lokal termasuk&nbsp;Antonio Miro, Dolce e Gabbana, Farrutx, Loewe, Polo Ralph Lauren Factory Store, Tommy Hilfiger, Versace and Villeroy &amp; Boch.<br></p><p>Apa pun yang anda cari, dari yang sulit sampai mudah ditemukan,&nbsp;La Roca Village outlet memiliki merk-merk yang harganya telah dipotong sampai&nbsp;60&#37;.&nbsp;</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420483358_la-roca.jpg',
                'address' => 'Santa Agnès de Malanyanes, Barcelona',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 206,
                'country_id' => 5,
                'name' => 'Fashion Fish Factory Outlet',
                'slug' => 'fashion-fish-factory-outlet',
                'hotels' => '',
                'latitude' => '47.3720383',
                'longitude' => '7.9993278',
                'attractions' => '<p>Fashion Fish outlet mall di&nbsp;Schonenwerd adalah sebuah pusat belanja outlet, yang memiliki banyak toko-toko dengan merk terkenal seperti&nbsp;Bally, Boss, Guess dan lain-lain, terletak dibawah satu atap demi kenyamanan pengunjung.&nbsp;Factory Outlet Schonenwerd menampung&nbsp;47 toko dengan sekitar 100 merk didalam area seluas&nbsp;13.000 m2. Nikmati belanja dengan keuntungan besar setiap tahun dari semua merk termasuk merk-merk designer dan umum.</p><p>Bangunan&nbsp;Fashion Fish Schonenwerd dulunya adalah pabrik. Ini kemudian diubah menjadi toko merk outlet yang mewah, memiliki banyak&nbsp;toko. Hari ini mereka menawarkan ratusan merk dengan potongan dari harga toko. The Fashion Fish mall memiliki dua gedung, setiap gedung memiliki 2 lantai. Mal outlet menawarkan pakaian-pakaian pria, wanita dan anak-anak dengan juga aksesoris, sepatu, pakaian olahraga, pakaian santai dan lain-lain.</p><p>Diskon bisa mencapai&nbsp;40&#37;, bahkan beberapa toko menawarkan diskon sampai&nbsp;50&#37;.&nbsp;</p><p>Turis dan pembeli dari luar EU bisa menikmati tax free. Pastikan anda meminta tanda terima tax refunds. Nikmati untungnya berbelanja dari merk-merk designer terkenal seperti&nbsp;Armani, Versace dan&nbsp;Dolce &amp; Gabbana dibawah satu atap, hanya di&nbsp;Fashion Fish Outlet Center di&nbsp;Schonenwerd, Swiss.</p><p>Merk-merk:&nbsp;Etienne Aigner, Moya, Beldona, Calvin Klein, DKNY, L&rsquo;Aventure, Marie Jo, Prima Donna, Rosa Faia, Sloggi, Tommy Hilfiger, Valisère, Valisère Tabu, Venice Beach, Verdissima, Armani, D&amp;G, Etro, Giorgio Armani, Guess, Hydrogen, Missoni, Moschino, Pal Zileri, Polo Ralph Lauren, Schuhmacher, Stone Island, Versace, Diesel, G3000, JAM52, Mijoko, No Name, PiNK, Premium Denim, Versal, Carhartt ,Edwin Jeans, Chiemsee, 3Chic, Loake, Moma, Prada, Puma McQueen ,Tod&rsquo;s, Wonders, ALysi, Cerruti 1881, LIU-JO, MCS Marlboro Classic, Sandro Ferrone, Trussardi, Valentino, Roma, Allegri, Bogner, Brax, Fedeli, Les Copains, Schneiders , Diesel, Guess, Marc O&rsquo;Polo, Jack Wolfskin, Polo Ralph Lauren, Kauf, Kuhn Rikon, Lacoste, Marc Picard, EDC, Esprit, Gin Tonic, Kauf, Mavi, S&rsquo;Oliver, McGregor, Airfield, Basler, Biba, Bogner, Brax, Cambio, Fuchs&amp;Schmitt, Gardeur, GC Fontana, Gerry Weber, Jacques Britt, MarcCain, MYBC, Nice, Public, Raffaello Rossi, Schneiders, Taifun, Wallmann, Windsor, Modeva, Armani Jeans, Blue Area, Cambio, JustCavalli, Lui-Jo, Moschino, Strenesse Blue, TAM, Navyboot, disport, Obaïbi, Okaïdi, Colora, Echosline, Salerm, Revlon, Pahi, Birkenstock, Ganter, MBT, Sioux, UGG, Vabeene, Bonfire, Mavic, Salomon, Sarar, Mills by Santex, Schiesser, Schiesser Revival, Vossen, Billerbeck, Bonjour, Schlossberg, Zimmerli, Krinès, NYDJeans, SCOOTER, Hanro, Skiny, Timberland, Only, Pepe Jeans, Tommy Hilfiger, Adidas, Asics, Belowzero, Columbia, Mammut, Nike, Odlo, Peak Performance, Quiksilver, Rohner, Roxy, Salewa, Schoffel, Scott, Spyder, Titanium, Boccia, Candino, Cover Folkwatch, Dior, Dolce &amp; Gabbana, Emporio Armani, Esprit, Festina, Flik Flak, Gucci, Guess, Hanowa, Hugo Boss, Lotus Style, Max Mara, Mondaine, Oakley, Police, Polo Ralph Lauren, Ray Ban, Swatch Bijoux, Timbuk2, Victorinox, Wenger  </p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420484422_resized_461x306_461x306_fashion_fish_2.jpg',
                'address' => 'Parkstrasse 1, 5012 Schönenwerd',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 207,
                'country_id' => 5,
                'name' => 'FoxTown Outlet',
                'slug' => 'foxtown-outlet',
                'hotels' => '',
                'latitude' => '45.8753084',
                'longitude' => '8.9794453',
                'attractions' => '<p>FoxTown Outlet, terletak di kota&nbsp;Mendrisio, di Swiss di perbatasan dengan Italia, di sebelah danau&nbsp;Como yang indah. FoxTown adalah pusat perbelanjaan terbesar kedua setelah&nbsp;Serravalle, dan ini terdiri dari&nbsp;2 bangunan berlantai 3 yang terhubung satu sama lain, dengan memiliki total&nbsp;160 toko. Terlepas dari banyaknya pilihan toko, termasuk merk mahal ataupun pakaian olahraga dan sepatu, fitur lain yang menarik ribuan pengunjung ke mal ini adalah winter dan summer sale yang dimulai 2 minggu sebelum dibuka di Italia.</p><p>Terlepas dari merk-merk Italia yang terkenal seperti&nbsp;Gucci, Valentino, Fendi, dll,&nbsp;FoxTown memiliki butik-butik&nbsp;seperti&nbsp;Escada, Dior, Burberry dll, semua terletak di shopping mall yang besar ini. Ada lebih dari 30 merk dari toko-toko untuk anak-anak, dan juga bagi mereka yang memiliki ukuran lebih. Harga ditawarkan dalam kurs Frank Swiss, tapi mereka kebanyakan juga menerima pembayaran dengan Euro atau kartu kredit. Ada juga service Tax Free oleh&nbsp;Global Blue, terletak di sebelah&nbsp;Casino Admiral di dalam gedung outlet.&nbsp;</p><p>Merk-merk:&nbsp;7 for all mankind, Adidas, Agnona, Alberto Guardiani, Alviero Martini, Arfango, Armani, Aubade, Baci &amp; Abbracci, Bagatt, Baldinini, Bally, Bassetti, Blitz, for eyes, Blumarine, Boggi, Borbonese, Boxeur Des Rues – Malloy, Braccialini, Bric’s, Brooksfield, Brums, Burberry, Calida, Carven Paris, Cerruti, Chicca, Christies, Church’s, Calvin Klein, Class Roberto Cavalli, Custo Barcelona, , Datch, David Mayer, De-Kuba, Del Mare 1911, Desigual, Diesel, Dior, Divescuba, Dolce&amp;Gabbana, Edicola – Tabacchi, Electronic Planet, Elena Mirò, Escada, Esprit, Etro, Fendi, Ferrari Store, Ferré, Feyem – Moorer, Fornarina, Fratelli Rossetti, Freddy, Gabel, Gamelife, Gant, Gas Jeans, Geomag, Geox, Gherardini, Gioielli &amp; Co., Guardaroba, Gucci, Guess, Hackett London, Hanro, Harmont &amp; Blaine, Henry Cotton’s, Hugo Boss, I Giochi di Malù, I Pinco Pallino, Iana, Iceberg, Il Lanificio, Jaggy, Jeckerson, Jerem, Jil Sander, John Ashfield, John Barritt, John Richmond, L’Erbario Toscano, La Casa Italiana, La Compagnia delle Pelli, La Martina, La Perla, Lacoste, Le Passe Partout, Lee/Wrangler, Les Copains, Levis, Dockers, Lindt, Mantero, Marina Militare, Marina Yachting, Mc Kenzy, Mirtillo, Miss Sixty, Missoni, Modesto Bertotto by Tombolini, Motivi, Motoshop, Napapijri, Nike, Parah &amp; Lisanza, Patrizia Pepe, Peak Performance, Pepe Jeans, Petit Bateau, Pinko, Pollini, , Polo Ralph Lauren, , Prada, Puma, , Quiksilver, Replay, , Rifle, Roberto Botticelli, Romeo Gigli, Salomon, Salvatore Ferragamo, Samsonite, Sartoria 3R, St.Diego Outlet Project, Strenesse, Superga, Swatch, The North Face, Tichange, Tod’s - Hogan – Fay, Tommy Hilfiger, Tosca Blu, Toy G – Pinko, Truzzi, Twins, Benetton, V.F.G. Factory Store, Valentino, Vantaviaggi, Versace, Villeroy &amp; Boch, W.D., Y-3, Yves Saint Laurent  </p>
        <p>FoxTown Outlet terletak di daerah Mendrisio, Swiss, dan dapat dicapai dengan beberapa cara:</p>
        <ol>
        <li>
        <p>Mobil: Anda dapat mengemudi sendiri ke FoxTown Outlet dengan mengikuti petunjuk arah yang tersedia. FoxTown Outlet memiliki area parkir yang luas dan gratis untuk pengunjung.</p>
        </li>
        <li>
        <p>Bus: Anda dapat naik bus dari stasiun kereta api Mendrisio ke FoxTown Outlet. Bus berangkat setiap 15-30 menit tergantung pada jadwal, dan perjalanan hanya memakan waktu sekitar 10-15 menit.</p>
        </li>
        <li>
        <p>Kereta: Anda juga dapat mengambil kereta dari stasiun kereta api Mendrisio dan turun di stasiun terdekat, Stazione Riva San Vitale. Setelah itu, Anda dapat berjalan kaki selama sekitar 10-15 menit ke FoxTown Outlet.</p>
        </li>
        <li>
        <p>Taksi: Jika Anda ingin pergi ke FoxTown Outlet dengan taksi, Anda dapat menemukan taksi di stasiun kereta api Mendrisio atau memesan taksi melalui layanan taksi lokal.</p>
        </li>
        <li>
        <p>Layanan antar-jemput: Beberapa operator tur dan perjalanan mungkin menawarkan layanan antar-jemput ke FoxTown Outlet dari kota-kota terdekat seperti Milan, Como, atau Lugano.</p>
        </li>
        </ol>
        <p>Pastikan untuk memeriksa jadwal dan tarif untuk setiap opsi transportasi sebelumnya dan memilih yang paling sesuai dengan kebutuhan Anda.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420485391_fox-town.jpg',
                'address' => 'Via Angelo Maspoli 18, 6850 Mendrisio',
                'created_at' => null,
                'updated_at' => '2023-03-03 23:39:40',
            ],
            [
                'id' => 208,
                'country_id' => 5,
                'name' => 'OUTLET AUBONNE',
                'slug' => 'outlet-aubonne',
                'hotels' => '',
                'latitude' => '46.4771969',
                'longitude' => '6.397927',
                'attractions' => 'Di Aubonne, Swiss, di tempat yang sama dengan&nbsp;IKEA&nbsp;berada, Developer&nbsp;IKEA berencana untuk membangun dan membuka outlet besar di daerah Swiss yang berbahasa Perancis. Toko-toko di dalam rencana&nbsp;Outlet Aubonne akan mengambil keuntungan dari tingginya jumlah pengunjung di mana&nbsp;Adidas, Nike dan Navyboot sudah sukses dari outlet-outlet mereka.<br><br>Di Outlet Aubonne, kebanyakan dari merk-merk internasional menjual barang-barang mereka dengan harga rendah, sehingga pelanggan bisa menikmati harga murah dengan kualitas terjamin.<div><br></div><div>Merk-merk:&nbsp;Adidas, Black Out, Boggi, Calida, Corso Italia, Desigual, Diesel, Ecko Unltd, Envy, D&amp;G, From, Golfino, Histoire de Plaire, Iannalfo &amp; Sgariglia, Jerem, JYKX 1950, Lacoste, Le Passe Partout, Lee, Wrangler, Levis, Mango, Mexx, Nike, Nuna Lie, Puma, Romeo Gigli, SoldOut, Triumph, Zoo York, Geox, Marc Picard, MyShoes, Gabor, Varese, Lime Light, Franco Fortini, Tamaris, Pesaro, Hello Kitty, Elefanten, Princesse, Barbie, Spiderman, Skechers, Mc Queen, Navyboot, Walder, Centa Star, Home &amp; Cook, Ikea, Calida, Esprit, Ochsner Sport, Reebok  </div>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420529058_OutletAubonne.jpeg',
                'address' => 'Pré-Neuf 14, 1170 Aubonne',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 209,
                'country_id' => 9,
                'name' => 'Athens Designer Outlet',
                'slug' => 'athens-designer-outlet',
                'hotels' => '',
                'latitude' => '37.983917',
                'longitude' => '23.7293599',
                'attractions' => '<p>Kota dewa-dewa dan legenda-legenda sekarang memiliki designer outlet yang pertama.&nbsp;McArthurGlen Group-nya&nbsp;Athena&nbsp;Designer Outlet telah dibuka. Ada sekitar&nbsp;125&nbsp;merk designer dan merk&nbsp;gaul menawarkan diskon.</p><p>Athena sudah merupakan tempat belanja dan&nbsp;Athens Designer Outlet menambah tempat belanja baru di kota kuno ini.</p><p>Merk-merk:&nbsp;A.L.E., Accessorize, Adidas, Alberta Ferretti, American Vintage, Anna Maria Mazapakh, Anonima, Attr@ttivo, Benetton, Bill Cost, BillaBong, BoConcept, Body Talk, Brooks Brothers, BSB, Chip &amp; Chip, Class Roberto Cavalli, Colin´s Colori, Columbia, Corso Como, Despina, Diamonds &amp; Watches, Diesel, Docksteps, Du Pareil Au Meme, Edward Jeans, Element, eyeQ, Fairynails, Ferré, Fila, Gant, Ginestra, Guess, Haralas, House &amp; Travel, Hugo Boss, Hunter, Iceberg, iGrill, Il Baretto, Interni, Jupe, Kalogirou, Kem, Lacoste, Lapin House, Luna, Lussile, Mandarino, Marasil, Matou France, Meat Me, Mefisto, Mini Me, More for Less, Moschino, MyHome, Mama Camicie, Navy &amp; Green, New Balance, Nike, Nine west, Notos Galleries, Oxette, Oxford Company, Piazza di Nero, Sebago, Skechers, Staff, Sticky Fingers, Swarovski, Toi &amp; Moi, Tommy Hilfiger, Trussardi, Tsakiris Mallas, Vardas, Venus Victoria, Versace, Waks, Yasu, Yazz Angela Nicole.  </p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420564470_footfall-McArthurGlen.jpg',
                'address' => 'Block E71 Gialou 19004 Spata, Athens',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 210,
                'country_id' => 9,
                'name' => 'MOV&MAY',
                'slug' => 'mov-may',
                'hotels' => '',
                'latitude' => '36.4618199',
                'longitude' => '25.3753101',
                'attractions' => '<p>MOV&amp;MAY adalah merek fashion Yunani yang menawarkan berbagai pilihan pakaian wanita, aksesori, dan produk-produk kecantikan. Di toko-toko MOV&amp;MAY, pengunjung dapat menemukan berbagai pilihan baju, sepatu, tas, dan aksesori, seperti kalung, gelang, anting-anting, dan sabuk.</p>
        <p>Produk-produk MOV&amp;MAY didesain dengan menggabungkan gaya Yunani klasik dengan sentuhan modern. Bahan-bahan berkualitas tinggi seperti sutra, katun, dan linen digunakan untuk membuat produk-produk mereka, sehingga pengunjung bisa membeli produk-produk fashion yang tahan lama dan berkualitas.</p>
        <p>Selain itu, MOV&amp;MAY juga menawarkan produk-produk kecantikan, seperti sabun mandi, scrub tubuh, dan minyak tubuh, yang terbuat dari bahan-bahan alami dan organik. Produk-produk kecantikan MOV&amp;MAY cocok untuk berbagai jenis kulit dan tidak mengandung bahan kimia berbahaya.</p>
        <p>Jadi, bagi para pengunjung yang tertarik dengan fashion dan produk-produk kecantikan Yunani, toko-toko MOV&amp;MAY bisa menjadi salah satu destinasi belanja yang menarik di Yunani.</p>',
                'type' => 'shopping',
                'youtube' => '',
                'thumb' => 'place1420564896_4633501-movandmay_Oia_Santorini_Santorini_Island.jpg',
                'address' => 'Oia, Santorini, Cyclades 847 02',
                'created_at' => null,
                'updated_at' => '2023-03-04 00:20:26',
            ],
            [
                'id' => 211,
                'country_id' => 13,
                'name' => 'Flughafen Wien-Schwechat',
                'slug' => 'flughafen-wien-schwechat',
                'hotels' => '',
                'latitude' => '48.1158333',
                'longitude' => '16.5665751',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Wien-Flughafen, 1300 Schwechat',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 212,
                'country_id' => 2,
                'name' => 'Brussels Airport',
                'slug' => 'brussels-airport',
                'hotels' => '',
                'latitude' => '50.8940506',
                'longitude' => '4.4709933',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'A201, 1930 Zaventem',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 213,
                'country_id' => 2,
                'name' => 'Brussels South Charleroi Airport',
                'slug' => 'brussels-south-charleroi-airport',
                'hotels' => '',
                'latitude' => '50.4702126',
                'longitude' => '4.4725965',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Rue des Frères Wright 8, 6041 Charleroi',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 214,
                'country_id' => 15,
                'name' => 'Københavns Lufthavne Kastrup',
                'slug' => 'københavns-lufthavne-kastrup',
                'hotels' => '',
                'latitude' => '55.629563',
                'longitude' => '12.639255',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Lufthavnsboulevarden 6, 2770 Kastrup',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 215,
                'country_id' => 3,
                'name' => 'Aéroport de Paris-Charles de Gaulle',
                'slug' => 'aeroport-de-paris-charles-de-gaulle',
                'hotels' => '',
                'latitude' => '49.00363',
                'longitude' => '2.516978',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '95700 Roissy-en-France',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 216,
                'country_id' => 3,
                'name' => 'Aéroport de Paris-Orly',
                'slug' => 'aeroport-de-paris-orly',
                'hotels' => '',
                'latitude' => '48.745193',
                'longitude' => '2.401373',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '94390 Orly',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 217,
                'country_id' => 3,
                'name' => 'Aéroport Nice Côte d&#039;Azur',
                'slug' => 'aeroport-nice-cote-dazur',
                'hotels' => '',
                'latitude' => '43.6674845',
                'longitude' => '7.2099684',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Rue Costes et Bellonte, 06206 Nice',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 218,
                'country_id' => 3,
                'name' => 'Aéroport de Lyon-Saint Exupéry',
                'slug' => 'aeroport-de-lyon-saint-exupery',
                'hotels' => '',
                'latitude' => '45.7197776',
                'longitude' => '5.0852626',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '69125 Colombier-Saugnieu',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 219,
                'country_id' => 3,
                'name' => 'Aéroport Marseille Provence',
                'slug' => 'aeroport-marseille-provence',
                'hotels' => '',
                'latitude' => '43.417268',
                'longitude' => '5.21623',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '13727 Marignane',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 220,
                'country_id' => 3,
                'name' => 'Aéroport de Toulouse-Blagnac',
                'slug' => 'aeroport-de-toulouse-blagnac',
                'hotels' => '',
                'latitude' => '43.6293863',
                'longitude' => '1.367682',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '31703 Blagnac',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 221,
                'country_id' => 3,
                'name' => 'Aéroport de Bordeaux-Mérignac',
                'slug' => 'aeroport-de-bordeaux-merignac',
                'hotels' => '',
                'latitude' => '44.8448769',
                'longitude' => '-0.656358',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '33700 Mérignac',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 222,
                'country_id' => 3,
                'name' => 'Aéroport de Paris-Beauvais-Tillé',
                'slug' => 'aeroport-de-paris-beauvais-tille',
                'hotels' => '',
                'latitude' => '49.4544677',
                'longitude' => '2.1115111',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Route de l&#039;aéroport, 60000 Tillé',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 223,
                'country_id' => 3,
                'name' => 'Aéroport Nantes Atlantique',
                'slug' => 'aeroport-nantes-atlantique',
                'hotels' => '',
                'latitude' => '47.1694043',
                'longitude' => '-1.6547165',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '44346 Bouguenais',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 224,
                'country_id' => 3,
                'name' => 'EuroAirport Basel-Mulhouse-Freiburg',
                'slug' => 'euroairport-basel-mulhouse-freiburg',
                'hotels' => '',
                'latitude' => '47.5914302',
                'longitude' => '7.5750193',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '68304 Saint-Louis',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 225,
                'country_id' => 4,
                'name' => 'Flughafen Frankfurt am Main',
                'slug' => 'flughafen-frankfurt-am-main',
                'hotels' => '',
                'latitude' => '50.0378828',
                'longitude' => '8.5621459',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '60547 Frankfurt',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 226,
                'country_id' => 4,
                'name' => 'Flughafen München Franz Josef Strauß',
                'slug' => 'flughafen-munchen-franz-josef-strauss',
                'hotels' => '',
                'latitude' => '48.35463',
                'longitude' => '11.76328',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Nordallee 25, 85356 München',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 227,
                'country_id' => 4,
                'name' => 'Flughafen Hamburg',
                'slug' => 'flughafen-hamburg',
                'hotels' => '',
                'latitude' => '53.62481',
                'longitude' => '9.99076',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Flughafenstr. 1-3, 22335 Hamburg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 228,
                'country_id' => 4,
                'name' => 'Flughafen Düsseldorf',
                'slug' => 'flughafen-dusseldorf',
                'hotels' => '',
                'latitude' => '51.2766632',
                'longitude' => '6.7656946',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Flughafenstraße 120, 40474 Düsseldorf',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 229,
                'country_id' => 4,
                'name' => 'Flughafen Stuttgart',
                'slug' => 'flughafen-stuttgart',
                'hotels' => '',
                'latitude' => '48.6903427',
                'longitude' => '9.1950784',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Flughafenstraße 43, 70629 Stuttgart',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 230,
                'country_id' => 4,
                'name' => 'Flughafen Köln-Bonn',
                'slug' => 'flughafen-koln-bonn',
                'hotels' => '',
                'latitude' => '50.8844014',
                'longitude' => '7.1022616',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Kennedystraße, 51147 Köln',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 231,
                'country_id' => 4,
                'name' => 'Flughafen Berlin-Schönefeld',
                'slug' => 'flughafen-berlin-schonefeld',
                'hotels' => '',
                'latitude' => '52.3854411',
                'longitude' => '13.5216148',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Flughafen Schönefeld, 12521 Berlin',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 232,
                'country_id' => 4,
                'name' => 'Flughafen Hannover-Langenhagen',
                'slug' => 'flughafen-hannover-langenhagen',
                'hotels' => '',
                'latitude' => '52.458991',
                'longitude' => '9.69552',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Flughafenstraße 4, 30855 Langenhagen',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 233,
                'country_id' => 9,
                'name' => 'Athens International Airport',
                'slug' => 'athens-international-airport',
                'hotels' => '',
                'latitude' => '37.927684',
                'longitude' => '23.8878304',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Attiki Odos, Spata Artemida 190 04',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 234,
                'country_id' => 9,
                'name' => 'Thessaloniki International Airport',
                'slug' => 'thessaloniki-international-airport',
                'hotels' => '',
                'latitude' => '40.5204227',
                'longitude' => '22.9716758',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Ethniki Odos Aerodromiou Thessalonikis, Thessaloniki 55103',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 235,
                'country_id' => 8,
                'name' => 'Aeroporto di Roma Fiumicino',
                'slug' => 'aeroporto-di-roma-fiumicino',
                'hotels' => '',
                'latitude' => '41.7905906',
                'longitude' => '12.2512376',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Via dell&#039; Aeroporto di Fiumicino, 320, 00054 Fiumicino RM',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 236,
                'country_id' => 8,
                'name' => 'Aeroporto di Milano Malpensa',
                'slug' => 'aeroporto-di-milano-malpensa',
                'hotels' => '',
                'latitude' => '45.6124766',
                'longitude' => '8.7577138',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '21010 Ferno VA',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 237,
                'country_id' => 8,
                'name' => 'Aeroporto di Bergamo-Orio al Serio',
                'slug' => 'aeroporto-di-bergamo-orio-al-serio',
                'hotels' => '',
                'latitude' => '45.6645898',
                'longitude' => '9.6998634',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Via Aeroporto, 13, 24050 Orio Al Serio BG',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 238,
                'country_id' => 8,
                'name' => 'Aeroporto di Roma Ciampino',
                'slug' => 'aeroporto-di-roma-ciampino',
                'hotels' => '',
                'latitude' => '41.799469',
                'longitude' => '12.5906656',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Via Appia Nuova, 1651, 00040 Ciampino RM',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 239,
                'country_id' => 8,
                'name' => 'Aeroporto di Pisa Galileo Galilei',
                'slug' => 'aeroporto-di-pisa-galileo-galilei',
                'hotels' => '',
                'latitude' => '43.69919',
                'longitude' => '10.40083',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Piazzale D&#039;Ascanio, 1, 56121 Pisa PI',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 240,
                'country_id' => 1,
                'name' => 'Luchthaven Schiphol',
                'slug' => 'luchthaven-schiphol',
                'hotels' => '',
                'latitude' => '52.3105386',
                'longitude' => '4.7682744',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Evert van de Beekstraat 202, 1118 CP Schiphol',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 241,
                'country_id' => 17,
                'name' => 'Domodedovo International Airport',
                'slug' => 'domodedovo-international-airport',
                'hotels' => '',
                'latitude' => '55.3610486',
                'longitude' => '37.8090974',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Domodedovsky District, Moscow Oblast',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 242,
                'country_id' => 17,
                'name' => 'Sheremetyevo International Airport',
                'slug' => 'sheremetyevo-international-airport',
                'hotels' => '',
                'latitude' => '55.9810107',
                'longitude' => '37.4126229',
                'attractions' => 'Sheremetyevo International Airport',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Khimki, Moscow Oblast 141400',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 243,
                'country_id' => 17,
                'name' => 'Pulkovo Airport (Saint Petersburg)',
                'slug' => 'pulkovo-airport-saint-petersburg',
                'hotels' => '',
                'latitude' => '59.7644817',
                'longitude' => '30.3298847',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Pulkovskoe shosse, Saint Petersburg, 196140',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 244,
                'country_id' => 17,
                'name' => 'Vnukovo international airport',
                'slug' => 'vnukovo-international-airport',
                'hotels' => '',
                'latitude' => '55.599648',
                'longitude' => '37.2712342',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Vnukovo, Moscow Oblast',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 245,
                'country_id' => 14,
                'name' => 'Aeropuerto Adolfo Suárez Madrid-Barajas',
                'slug' => 'aeropuerto-adolfo-suarez-madrid-barajas',
                'hotels' => '',
                'latitude' => '40.4596909',
                'longitude' => '-3.5790539',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Avenida de la Hispanidad, s/n, 28042 Madrid',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 246,
                'country_id' => 14,
                'name' => 'Aeroport de Barcelona-el Prat',
                'slug' => 'aeroport-de-barcelona-el-prat',
                'hotels' => '',
                'latitude' => '41.3245953',
                'longitude' => '2.0934902',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '08820 El Prat de Llobregat, Barcelona',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 247,
                'country_id' => 14,
                'name' => 'Aeropuerto de Alicante-Elche',
                'slug' => 'aeropuerto-de-alicante-elche',
                'hotels' => '',
                'latitude' => '38.285483',
                'longitude' => '-0.560056',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '03195 L&#039;Altet, Alicante',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 248,
                'country_id' => 14,
                'name' => 'Aeropuerto de Valencia',
                'slug' => 'aeropuerto-de-valencia',
                'hotels' => '',
                'latitude' => '39.4829061',
                'longitude' => '-0.4591584',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Carretera del Aeropuerto, s/n, 46940 Manises, Valencia',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 249,
                'country_id' => 14,
                'name' => 'Aeropuerto de Bilbao',
                'slug' => 'aeropuerto-de-bilbao',
                'hotels' => '',
                'latitude' => '43.3166339',
                'longitude' => '-2.9126022',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '48180 Loiu, Bizkaia',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 250,
                'country_id' => 5,
                'name' => 'Flughafen Zürich',
                'slug' => 'flughafen-zurich',
                'hotels' => '',
                'latitude' => '47.4582165',
                'longitude' => '8.5554755',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => '8058 Zürich-Flughafen',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 251,
                'country_id' => 5,
                'name' => 'Aéroport de Genève',
                'slug' => 'aeroport-de-geneve',
                'hotels' => '',
                'latitude' => '46.2370097',
                'longitude' => '6.1091564',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Route de l&#039;Aéroport 21, 1215 Le Grand-Saconnex',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 252,
                'country_id' => 6,
                'name' => 'London Heathrow Airport',
                'slug' => 'london-heathrow-airport',
                'hotels' => '',
                'latitude' => '51.4668442',
                'longitude' => '-0.4529518',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Greater London TW6',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 253,
                'country_id' => 6,
                'name' => 'Gatwick Airport London',
                'slug' => 'gatwick-airport-london',
                'hotels' => '',
                'latitude' => '51.15599',
                'longitude' => '-0.1630491',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'West Sussex RH6 0NP',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 254,
                'country_id' => 6,
                'name' => 'Manchester Airport',
                'slug' => 'manchester-airport',
                'hotels' => '',
                'latitude' => '53.3618808',
                'longitude' => '-2.2708405',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Manchester M90 1QX',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 255,
                'country_id' => 6,
                'name' => 'London Stansted Airport',
                'slug' => 'london-stansted-airport',
                'hotels' => '',
                'latitude' => '51.8881144',
                'longitude' => '0.258386',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Enterprise House, Bassingbourn Rd, Stansted, Essex CM24 1QW',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 256,
                'country_id' => 6,
                'name' => 'Edinburgh Airport',
                'slug' => 'edinburgh-airport',
                'hotels' => '',
                'latitude' => '55.9483785',
                'longitude' => '-3.3631651',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Edinburgh EH12 9DN',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 257,
                'country_id' => 6,
                'name' => 'Birmingham Airport',
                'slug' => 'birmingham-airport',
                'hotels' => '',
                'latitude' => '52.4512848',
                'longitude' => '-1.7310626',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Birmingham B26 3QJ',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 258,
                'country_id' => 15,
                'name' => 'Glasgow International Airport',
                'slug' => 'glasgow-international-airport',
                'hotels' => '',
                'latitude' => '55.8646529',
                'longitude' => '-4.4320898',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Paisley, Renfrewshire PA3 2SW',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 259,
                'country_id' => 6,
                'name' => 'Newcastle Airport',
                'slug' => 'newcastle-airport',
                'hotels' => '',
                'latitude' => '55.0370237',
                'longitude' => '-1.7101156',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Woolsington, Newcastle upon Tyne NE13 8BZ',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 260,
                'country_id' => 6,
                'name' => 'Liverpool John Lennon Airport',
                'slug' => 'liverpool-john-lennon-airport',
                'hotels' => '',
                'latitude' => '53.337309',
                'longitude' => '-2.8549266',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Liverpool L24 1YD',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 261,
                'country_id' => 6,
                'name' => 'Belfast International Airport',
                'slug' => 'belfast-international-airport',
                'hotels' => '',
                'latitude' => '54.66213',
                'longitude' => '-6.217852',
                'attractions' => '',
                'type' => 'airport',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Airport Road, Belfast BT29 4AB',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 262,
                'country_id' => 13,
                'name' => 'Wien Westbanhof',
                'slug' => 'wien-westbanhof',
                'hotels' => '',
                'latitude' => '48.196828',
                'longitude' => '16.3379863',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Europaplatz 2 1150, Wien',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 263,
                'country_id' => 13,
                'name' => 'Innsbruck Hbf',
                'slug' => 'innsbruck-hbf',
                'hotels' => '',
                'latitude' => '47.2628417',
                'longitude' => '11.399949',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Südtiroler Platz 7 A-6020 Innsbruck',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 264,
                'country_id' => 13,
                'name' => 'Wien Praterstern',
                'slug' => 'wien-praterstern',
                'hotels' => '',
                'latitude' => '48.2190385',
                'longitude' => '16.3911716',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Wien Praterstern',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 265,
                'country_id' => 2,
                'name' => 'NMBS Station Gent-Dampoort',
                'slug' => 'nmbs-station-gent-doort',
                'hotels' => '',
                'latitude' => '51.0572024',
                'longitude' => '3.7393587',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Oktrooiplein 10 9000 Gent',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 266,
                'country_id' => 2,
                'name' => 'Station Nijvel',
                'slug' => 'station-nijvel',
                'hotels' => '',
                'latitude' => '50.5994221',
                'longitude' => '4.3340084',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Rue de Namur 185 1400 Nivelles',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 267,
                'country_id' => 2,
                'name' => 'Gare de Quaregnon',
                'slug' => 'gare-de-quaregnon',
                'hotels' => '',
                'latitude' => '50.4497573',
                'longitude' => '3.855345',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Rue de la Station 2 7390 Quaregnon',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 268,
                'country_id' => 15,
                'name' => 'Copenhagen Central Station',
                'slug' => 'copenhagen-central-station',
                'hotels' => '',
                'latitude' => '55.6760968',
                'longitude' => '12.5683371',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Köbenhavn H Copenhagen',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 269,
                'country_id' => 15,
                'name' => 'Noerreport st',
                'slug' => 'noerreport-st',
                'hotels' => '',
                'latitude' => '55.6831194',
                'longitude' => '12.5715059',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Noerreport st Copenhagen',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 270,
                'country_id' => 15,
                'name' => 'Odense St.',
                'slug' => 'odense-st',
                'hotels' => '',
                'latitude' => '55.4011689',
                'longitude' => '10.3878007',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Østre Stationsvej 27 DK-5000 Odense',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 271,
                'country_id' => 6,
                'name' => 'Sheffield Railway Station',
                'slug' => 'sheffield-railway-station',
                'hotels' => '',
                'latitude' => '53.3796247',
                'longitude' => '-1.4623858',
                'attractions' => 'Sheffield Railway Station',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Sheaf St Sheffield S1 2BP',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 272,
                'country_id' => 6,
                'name' => 'Harrow-on-the-Hill London Underground Station',
                'slug' => 'harrow-on-the-hill-london-underground-station',
                'hotels' => '',
                'latitude' => '51.5856028',
                'longitude' => '-0.3613158',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Station Rd Harrow HA1 1BB',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 273,
                'country_id' => 6,
                'name' => 'Shoreditch High Street Station',
                'slug' => 'shoreditch-high-street-station',
                'hotels' => '',
                'latitude' => '51.5236579',
                'longitude' => '-0.0752252',
                'attractions' => 'Shoreditch High Street Station',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Braithwaite St London E1 6GJ',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 274,
                'country_id' => 6,
                'name' => 'Preston Railway Station',
                'slug' => 'preston-railway-station',
                'hotels' => '',
                'latitude' => '53.7576849',
                'longitude' => '-2.7038264',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Fishergate Preston, Lancashire PR1 8AP',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 275,
                'country_id' => 6,
                'name' => 'Victoria Station',
                'slug' => 'victoria-station',
                'hotels' => '',
                'latitude' => '51.49661',
                'longitude' => '-0.1428373',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Victoria St London SW1E 5ND',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 276,
                'country_id' => 6,
                'name' => 'Paddington Station',
                'slug' => 'paddington-station',
                'hotels' => '',
                'latitude' => '51.5171041',
                'longitude' => '-0.1728799',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Praed St London W2',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 277,
                'country_id' => 6,
                'name' => 'St Pancras International',
                'slug' => 'st-pancras-international',
                'hotels' => '',
                'latitude' => '51.5315742',
                'longitude' => '-0.1259311',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Euston Rd London N1C 4QP Verenigd Koninkrijk',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 278,
                'country_id' => 8,
                'name' => 'Roma Termini',
                'slug' => 'roma-termini',
                'hotels' => '',
                'latitude' => '41.9010003',
                'longitude' => '12.4997349',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Stazione di Roma Termini',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 279,
                'country_id' => 8,
                'name' => 'Milano Centrale Railway Station',
                'slug' => 'milano-centrale-railway-station',
                'hotels' => '',
                'latitude' => '45.4855779',
                'longitude' => '9.2039919',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Piazza Duca D&#039;Aosta, 1 20124 Milano',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 280,
                'country_id' => 8,
                'name' => 'Stazione di Venezia Santa Lucia',
                'slug' => 'stazione-di-venezia-santa-lucia',
                'hotels' => '',
                'latitude' => '45.4410697',
                'longitude' => '12.3210436',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Stazione di Venezia Santa Lucia Venice',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 281,
                'country_id' => 8,
                'name' => 'Tiburtina',
                'slug' => 'tiburtina',
                'hotels' => '',
                'latitude' => '41.9104596',
                'longitude' => '12.5315697',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Tiburtina rome',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 282,
                'country_id' => 4,
                'name' => 'Berlin Central Station',
                'slug' => 'berlin-central-station',
                'hotels' => '',
                'latitude' => '52.5250839',
                'longitude' => '13.369402',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Hauptbahnhof Europaplatz 1 10557 Berlin',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 283,
                'country_id' => 4,
                'name' => 'Frankfurt Central Station',
                'slug' => 'frankfurt-central-station',
                'hotels' => '',
                'latitude' => '50.1074567',
                'longitude' => '8.6647613',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Am Hauptbahnhof 60329 Frankfurt am Main',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 284,
                'country_id' => 4,
                'name' => 'Cologne Central Station',
                'slug' => 'cologne-central-station',
                'hotels' => '',
                'latitude' => '50.9418253',
                'longitude' => '6.9600435',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Trankgasse 11 50667 Köln',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 285,
                'country_id' => 4,
                'name' => 'München Central Station',
                'slug' => 'munchen-central-station',
                'hotels' => '',
                'latitude' => '48.13953',
                'longitude' => '11.55918',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Bayerstraße 10A 80335 München',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 286,
                'country_id' => 4,
                'name' => 'Berlin Zoologischer Garten',
                'slug' => 'berlin-zoologischer-garten',
                'hotels' => '',
                'latitude' => '52.50794',
                'longitude' => '13.3332',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Hardenbergplatz 11 10623 Berlin',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 287,
                'country_id' => 4,
                'name' => 'Stuttgart Central Station',
                'slug' => 'stuttgart-central-station',
                'hotels' => '',
                'latitude' => '48.7832139',
                'longitude' => '9.1822694',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Stuttgart Central Station Arnulf-Klett-Platz 2 70173 Stuttgart',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 288,
                'country_id' => 4,
                'name' => 'Mannheim Hbf',
                'slug' => 'mannheim-hbf',
                'hotels' => '',
                'latitude' => '49.479716',
                'longitude' => '8.4698791',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Mannheim Hbf',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 289,
                'country_id' => 4,
                'name' => 'Hamburg HBF',
                'slug' => 'hamburg-hbf',
                'hotels' => '',
                'latitude' => '53.5527207',
                'longitude' => '10.0069786',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Hamburg HBF',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 290,
                'country_id' => 1,
                'name' => 'Rotterdam Centraal',
                'slug' => 'rotterdam-centraal',
                'hotels' => '',
                'latitude' => '51.9252155',
                'longitude' => '4.4693006',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Rotterdam Centraal',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 291,
                'country_id' => 1,
                'name' => 'Amsterdam Centraal',
                'slug' => 'amsterdam-centraal',
                'hotels' => '',
                'latitude' => '52.3791283',
                'longitude' => '4.900272',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Amsterdam Centraal Stationsplein 1012 AB Amsterdam',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 292,
                'country_id' => 3,
                'name' => 'Gare de Nice Ville',
                'slug' => 'gare-de-nice-ville',
                'hotels' => '',
                'latitude' => '43.704612',
                'longitude' => '7.261933',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Gare de Nice Ville 06000 Nice',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 293,
                'country_id' => 3,
                'name' => 'Gare du Nord',
                'slug' => 'gare-du-nord',
                'hotels' => '',
                'latitude' => '48.8807625',
                'longitude' => '2.3551264',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => '18 Rue de Dunkerque 75010 Paris',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 294,
                'country_id' => 3,
                'name' => 'Paris-Gare de Lyon',
                'slug' => 'paris-gare-de-lyon',
                'hotels' => '',
                'latitude' => '48.8456199',
                'longitude' => '2.3730176',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => '20 Boulevard Diderot 75012 Paris',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 295,
                'country_id' => 17,
                'name' => 'Kazansky railway station',
                'slug' => 'kazansky-railway-station',
                'hotels' => '',
                'latitude' => '55.773588',
                'longitude' => '37.656745',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Komsomolskaya Square, 2 Moskva',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 296,
                'country_id' => 17,
                'name' => 'Vitebsky railway station',
                'slug' => 'vitebsky-railway-station',
                'hotels' => '',
                'latitude' => '59.919913',
                'longitude' => '30.32891',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Zagorodnyi prospekt, 52 St Petersburg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 297,
                'country_id' => 17,
                'name' => 'Belorussky Station',
                'slug' => 'belorussky-station',
                'hotels' => '',
                'latitude' => '55.776908',
                'longitude' => '37.581274',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Tverskaya Zastava Square, 7 Moskva',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 298,
                'country_id' => 17,
                'name' => 'Kiyevsky railway station',
                'slug' => 'kiyevsky-railway-station',
                'hotels' => '',
                'latitude' => '55.743084',
                'longitude' => '37.56611',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Kiyevsky Station Square, 1 Moskva',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 299,
                'country_id' => 14,
                'name' => 'Madrid Atocha Railway Station',
                'slug' => 'madrid-atocha-railway-station',
                'hotels' => '',
                'latitude' => '40.4069082',
                'longitude' => '-3.693524',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Plaza Emperador Carlos V 28045 Madrid',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 300,
                'country_id' => 14,
                'name' => 'Estación de Francia',
                'slug' => 'estacion-de-francia',
                'hotels' => '',
                'latitude' => '41.3844066',
                'longitude' => '2.1851285',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Av. Marquès de l&#039;Argentera, s/n 08003 Barcelona',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 301,
                'country_id' => 14,
                'name' => 'Sevilla-Santa Justa',
                'slug' => 'sevilla-santa-justa',
                'hotels' => '',
                'latitude' => '37.3918906',
                'longitude' => '-5.9747896',
                'attractions' => '<p>Sevilla-Santa Justa adalah stasiun kereta api utama di Sevilla, Spanyol. Stasiun ini melayani perjalanan kereta api jarak jauh dan menengah antara Sevilla dan berbagai kota di seluruh Spanyol, termasuk Madrid, Barcelona, Valencia, Cordoba, Malaga, dan Cadiz.</p>
        <p>Stasiun Sevilla-Santa Justa memiliki fasilitas yang lengkap untuk para penumpang, seperti kios-kios makanan, toko-toko suvenir, ATM, dan area tunggu yang nyaman. Selain itu, stasiun ini juga memiliki layanan penyewaan mobil dan taksi untuk memudahkan perjalanan dari dan ke stasiun.</p>
        <p>Stasiun ini terhubung dengan transportasi umum seperti bus dan kereta bawah tanah, sehingga memudahkan para pengunjung untuk berkeliling dan mengeksplorasi kota Sevilla. Selain itu, terdapat juga hotel dan hostel yang berdekatan dengan stasiun, sehingga memudahkan para wisatawan yang membutuhkan akomodasi di dekat stasiun.</p>
        <p>Stasiun kereta api Sevilla-Santa Justa adalah titik awal yang ideal untuk mengeksplorasi kota Sevilla dan destinasi wisata populer di sekitarnya, seperti Katedral Sevilla yang indah, Istana Real Alcazar, dan Taman Maria Luisa yang indah.</p>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => '1677501360_301.jpg',
                'address' => 'Sevilla-Santa Justa ',
                'created_at' => null,
                'updated_at' => '2023-02-27 12:36:00',
            ],
            [
                'id' => 302,
                'country_id' => 5,
                'name' => 'Zürich, Zürich HB',
                'slug' => 'zurich-zurich-hb',
                'hotels' => '',
                'latitude' => '47.378178',
                'longitude' => '8.539256',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Zürich, Zürich HB',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 303,
                'country_id' => 5,
                'name' => 'Gare de Cornavin',
                'slug' => 'gare-de-cornavin',
                'hotels' => '',
                'latitude' => '46.2105273',
                'longitude' => '6.1430417',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Pl de Cornavin 1203 Genève 2',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 304,
                'country_id' => 5,
                'name' => 'Station Jungfraujoch',
                'slug' => 'station-jungfraujoch',
                'hotels' => '',
                'latitude' => '46.5960688',
                'longitude' => '7.9082575',
                'attractions' => '<p>Stasiun Jungfraujoch merupakan stasiun kereta api tertinggi di Eropa, dan terletak di Swiss. Terdapat banyak hal yang dapat dilakukan di Stasiun Jungfraujoch, di antaranya:</p>
        <ol>
        <li>
        <p>Ice Palace: Anda dapat mengunjungi Istana Es, yang terletak di dalam gletser Aletsch, dan melihat berbagai patung dan instalasi es yang menakjubkan.</p>
        </li>
        <li>
        <p>Sphinx Observatory: Anda dapat naik lift ke observatorium di puncak Sphinx untuk menikmati pemandangan spektakuler dari Pegunungan Alpen.</p>
        </li>
        <li>
        <p>Lindt Swiss Chocolate Heaven: Di sini, Anda bisa belajar tentang proses pembuatan cokelat Swiss yang terkenal, serta mencicipi berbagai jenis cokelat yang lezat.</p>
        </li>
        <li>
        <p>The Alpine Sensation: Ini adalah galeri yang menampilkan sejarah pembangunan Stasiun Jungfraujoch, lengkap dengan instalasi suara dan cahaya yang menarik.</p>
        </li>
        <li>
        <p>The Eiger Trail: Anda dapat melakukan trekking di sekitar Pegunungan Alpen dan melihat pemandangan yang indah dari gunung Eiger.</p>
        </li>
        <li>
        <p>Ice Climbing: Jika Anda mencari pengalaman yang lebih menantang, Anda dapat mencoba memanjat gletser atau belajar teknik memanjat es di bawah pengawasan instruktur berlisensi.</p>
        </li>
        <li>
        <p>Alpine Wildlife Park: Anda dapat mengunjungi taman margasatwa yang menampilkan berbagai hewan lokal, termasuk rusa, keledai, dan beruang.</p>
        </li>
        <li>
        <p>Grindelwald: Ini adalah sebuah kota kecil yang terletak di dekat Stasiun Jungfraujoch, dan menawarkan berbagai aktivitas seperti paralayang, berjalan kaki, dan ski.</p>
        </li>
        <li>
        <p>Interlaken: Kota indah yang terletak di antara Danau Thun dan Danau Brienz, dan menawarkan pemandangan yang menakjubkan dan berbagai aktivitas seperti rafting dan berjalan-jalan di sepanjang tepi danau.</p>
        </li>
        <li>
        <p>Adventure Park: Jika Anda mencari pengalaman yang lebih menantang, Anda dapat mengunjungi taman petualangan di dekat Stasiun Jungfraujoch yang menawarkan berbagai aktivitas seperti flying fox, tirolina, dan jembatan gantung.</p>
        </li>
        </ol>',
                'type' => 'tourist',
                'youtube' => '',
                'thumb' => '1677886626_304.jpg',
                'address' => 'CH-3822 Lauterbrunnen',
                'created_at' => null,
                'updated_at' => '2023-03-03 23:37:06',
            ],
            [
                'id' => 305,
                'country_id' => 5,
                'name' => 'Bahnhof Luzern',
                'slug' => 'bahnhof-luzern',
                'hotels' => '',
                'latitude' => '47.0499542',
                'longitude' => '8.3094875',
                'attractions' => '',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Zentralstrasse 1 6002 Luzern',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 306,
                'country_id' => 9,
                'name' => 'Sidirodromikos Stathmos Korinthou',
                'slug' => 'sidirodromikos-stathmos-korinthou',
                'hotels' => '',
                'latitude' => '37.9386365',
                'longitude' => '22.9322383',
                'attractions' => 'Sidirodromikos Stathmos Korinthou',
                'type' => 'train station',
                'youtube' => '',
                'thumb' => '',
                'address' => 'Corinth 201 00',
                'created_at' => null,
                'updated_at' => null,
            ],
        ];

        foreach (array_chunk($rows, 100) as $chunk) {
            DB::table('cities')->insertOrIgnore($chunk);
        }
    }
}
