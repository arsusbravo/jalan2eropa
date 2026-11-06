<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Seed the `countries` table.
     */
    public function run(): void
    {
        $rows = [
            [
                'id' => 1,
                'name' => 'Negeri Belanda',
                'title' => 'Kota-kota wisata di negeri Belanda',
                'slug' => 'negeri-belanda',
                'international' => 'Netherlands',
                'codes' => 'nl',
                'latitude' => '52.2129919',
                'longitude' => '5.2793703',
                'keywords' => '',
                'description' => '<p class="dropcap">Belanda merupakan salah satu negeri dengan
        permukaan yang paling datar di dunia dan sebagian besar di antaranya terletak
        di bawah permukaan laut. Sejumlah daerah di tepian laut mengalami pengurangan
        luas daratan karena menghilang ke laut. Negeri ini dikenal sebagai salah satu
        negara paling terbuka bagi pendatang sebagai komitmennya pada hak asasi
        manusia.</p><p>Sebenarnya istilah Holland lebih
        dikenal dari pada Nederland, tetapi karena Holland Utara dan Selatan hanya merupakan
        2 dari 12 provinsi yang ada di Nederland. Negeri yang berada di Eropa bagian
        barat daya ini meliputi luas 41 ribu lebih km persegi termasuk dalam jajaran
        negeri-negeri terkecil dengan kepadatan penduduk yang paling tinggi.</p><p>Negeri Belanda merupakan salah satu
        tujuan wisata yang paling indah. Penduduknya dikenal mempunyai toleransi yang
        tinggi terhadap tamu serta budaya yang diwariskan oleh para pendahulu mereka
        tanpa mengalami perubahan yang bermakna selama berabad-abad.&nbsp; Hal ini, antara lain, yang merupakan daya
        tarik wisatawan dari seluruh dunia. Sebagain besar negeri ini berbatasan dengan
        Laut Utara, garis sepanjang pinggir laut dipenuhi oleh pantai yang tertata dan
        terpelihara dengan rapi yang merupakan daya tarik ekstra bagi wisatawan. Di
        pantai-pantai tersebut wisatawan dapat memanjakan diri dengan berbagai kegiatan
        seperti berselancar, berlayar serta menyelam Scuba, di samping tamasya
        bersepeda atau nahkan berjalan kaki.</p><p>Sebagai negeri yabg datar, tidak
        diperlukan tenaga ekstra untuk berjalan kaki ataupun bersepeda sehingga jarak
        yang ditempuh dapat lebih jauh. Di bidang seni Nederland juga memiliki peran
        penting. Banyak artis terjenal terlahir dan dibesarkan disini, sebut saja van
        Gogh dengan museumnya di Amsetrdam merupakan tempat yang paling sohor di dunia
        dalam hal seni lukis.&nbsp;&nbsp; Diantara 12 provinsi
        disini wisatawan dapat merasakan adanya perbedaan budaya yang cukup menonjol.
        Provinsi Holland Utara dimana Amsterdam, kota terbesar,&nbsp; berada merupakan yang terpenting. Kota-kota
        penting lainnya adalah Delft kota bersejarah, Den Haag dikenal sebagai kota
        politik dan kritisi, Rotterdam dan Utrecht. &nbsp;</p>
        <p>Berikut adalah beberapa kota wisata di Belanda beserta rekomendasi hotel:</p>
        <ol>
        <li>Amsterdam Amsterdam adalah kota yang paling populer di Belanda. Kota ini terkenal dengan kanal-kanalnya, museum, dan kawasan Red Light District. Beberapa hotel yang direkomendasikan di Amsterdam antara lain:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Waldorf Astoria Amsterdam" href="https://www.booking.com/hotel/nl/waldorf-astoria-amsterdam.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Waldorf Astoria Amsterdam</a>: hotel mewah dengan desain klasik dan lokasi yang strategis dekat dengan beberapa atraksi populer di Amsterdam.</li>
        <li><a title="Hotel Pulitzer Amsterdam" href="https://www.booking.com/hotel/nl/pulitzer.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Pulitzer Amsterdam</a>: hotel bintang 5 dengan 25 gedung-gedung bergaya klasik di dekat kanal Prinsengracht.</li>
        <li><a title="The Hoxton Amsterdam" href="https://www.booking.com/hotel/nl/the-hoxton-amsterdam.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Hoxton Amsterdam</a>: hotel hip di pusat Amsterdam dengan kamar-kamar yang unik dan terletak di bangunan abad ke-17.</li>
        </ul>
        </li>
        </ul>
        <ol start="2">
        <li>Rotterdam adalah kota terbesar kedua di Belanda dan dikenal dengan arsitektur modernnya yang menakjubkan. Salah satu objek wisata terkenal di Rotterdam adalah Markthal, sebuah pasar makanan dalam ruangan yang indah dengan lukisan langit-langit yang menakjubkan. Selain itu, Museum Boijmans Van Beuningen dan Cube Houses Rotterdam juga patut dikunjungi. Hotel yang direkomendasikan di Rotterdam adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Mainport Design Hotel" href="https://www.booking.com/hotel/nl/mainport-hotel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Mainport Design Hotel</a>: hotel mewah dengan fasilitas spa dan terletak di tepi sungai Nieuwe Maas dengan pemandangan spektakuler.</li>
        <li><a title="Hotel New York" href="https://www.booking.com/hotel/nl/new-york.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel New York</a>: hotel klasik bergaya art deco yang terletak di bekas kantor pusat perusahaan kapal laut Holland Amerika.</li>
        <li><a title="The James Hotel Rotterdam" href="https://www.booking.com/hotel/nl/the-james-rotterdam.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The James Hotel Rotterdam</a>: hotel yang terletak di bangunan bergaya modern dengan fasilitas yang lengkap dan lokasi yang strategis.</li>
        <li><a title="CitizenM Rotterdam" href="https://www.booking.com/hotel/nl/citizenm-rotterdam.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">CitizenM Rotterdam</a>: hotel modern dan trendi dengan harga terjangkau.</li>
        </ul>
        </li>
        </ul>
        <ol start="3">
        <li>Den Haag Den Haag adalah kota politik Belanda dan tempat kediaman raja. Beberapa hotel yang direkomendasikan di Den Haag antara lain:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Grand Hotel Amrath Kurhaus The Hague" href="https://www.booking.com/hotel/nl/kurhaus.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Grand Hotel Amrath Kurhaus The Hague</a>: hotel yang terletak di pantai Scheveningen dan bergaya art deco.</li>
        <li><a title="Hilton The Hague" href="https://www.booking.com/hotel/nl/hilton-the-hague.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hilton The Hague</a>: hotel mewah yang terletak di pusat kota dengan pemandangan ke taman kota dan jalan-jalan bersejarah.</li>
        <li><a title="Hotel Des Indes The Hague" href="https://www.booking.com/hotel/nl/desindes.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Des Indes The Hague</a>: hotel klasik dengan fasilitas spa yang terletak di bangunan bergaya art deco.</li>
        <li><a title="Hotel La Paulowna Boutique Hotel" href="https://www.booking.com/hotel/nl/la-paulowna-boutique.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel La Paulowna Boutique</a>: hotel butik yang terjangkau dengan lokasi yang nyaman dan dekorasi yang menarik.</li>
        </ul>
        </li>
        </ul>
        <ol start="4">
        <li>Utrecht Utrecht adalah kota bersejarah yang terkenal dengan katedral dan jalan-jalan bergaya klasiknya. Beberapa hotel yang direkomendasikan di Utrecht antara lain:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Grand Hotel Karel V Utrecht" href="https://www.booking.com/hotel/nl/ghkarelv.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Grand Hotel Karel V Utrecht</a>: hotel mewah yang terletak di bangunan bergaya klasik yang telah direnovasi dengan fasilitas lengkap dan spa.</li>
        <li>Mary K Hotel Utrecht: hotel yang terletak di pusat kota dengan kamar-kamar yang unik dan dekorasi yang artistik.</li>
        <li><a title="Mother Goose Hotel Utrecht" href="https://www.booking.com/hotel/nl/mother-goose.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Mother Goose Hotel Utrecht</a>: hotel kecil yang terletak di jalan-jalan bersejarah Utrecht dengan kamar-kamar yang unik dan pemandangan ke katedral.</li>
        </ul>
        </li>
        </ul>
        <ol start="5">
        <li>Maastricht Maastricht adalah kota terletak di bagian selatan Belanda dekat perbatasan dengan Belgia dan dikenal dengan suasana klasik dan elegannya. Kota ini memiliki banyak gedung bersejarah dan bangunan kuno, serta jalanan kecil yang indah dengan banyak toko dan restoran yang menarik. Beberapa tempat wisata yang patut dikunjungi di Maastricht adalah Basilika Santo Servatius, Vrijthof, dan St. Pietersberg Caves. Hotel yang direkomendasikan di Maastricht adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Kruisherenhotel Maastricht" href="https://www.booking.com/hotel/nl/kruisherenhotel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Kruisherenhotel Maastricht</a>: hotel mewah yang terletak di sebuah gereja abad ke-15 yang direnovasi dengan sangat indah.</li>
        <li>The Student Hotel Maastricht: hotel modern yang terjangkau dan nyaman, terletak di dekat pusat kota.</li>
        <li><a title="Crowne Plaza Maastricht" href="https://www.booking.com/hotel/nl/cpmaastricht.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Crowne Plaza Maastricht</a>: hotel yang terletak di tepi sungai Maas dengan pemandangan spektakuler ke jembatan Sint Servaas.</li>
        </ul>
        </li>
        </ul>
        <p>Itulah beberapa kota wisata di Belanda yang patut dikunjungi beserta rekomendasi hotel mewah dan terjangkau. Pastikan Anda menyesuaikan pilihan hotel dengan budget dan preferensi Anda agar bisa mendapatkan pengalaman wisata yang menyenangkan dan tak terlupakan.</p>',
                'short_desc' => 'Belanda mempunyai aktivitas ekonomi utama adalah termasuk pemrosesan makanan, bahan kimia, pemrosesan minyak, dan pembuatan mesin listrik. Walaupun sektor pertaniannya hanya menyediakan peluang pekerjaan kurang dari 4%% populasi, Belanda mampu menghasilkan kelebihan dalam industri makanan untuk diekspor. Belanda menduduki urutan ketiga dalam daftar pengekspor makanan, setelah Amerika Serikat dan Perancis',
                'to_see' => '<p>Berikut adalah beberapa atraksi aktifitas unik dan seru di Belanda:</p>
        <ol>
        <li>
        <p>Melihat Bunga Tulip di Keukenhof: Keukenhof adalah taman bunga tulip terbesar di dunia, terletak di kota Lisse. Setiap tahunnya, taman ini dibuka selama beberapa minggu pada musim semi, di mana pengunjung dapat melihat lebih dari 7 juta bunga tulip yang bermekaran.</p>
        </li>
        <li>
        <p>Naik sepeda di Amsterdam: Belanda adalah negara yang terkenal dengan budaya bersepeda. Kota Amsterdam memiliki jaringan jalur sepeda yang sangat luas dan aman sehingga menjadikannya sebagai salah satu kota terbaik untuk bersepeda di dunia.</p>
        </li>
        <li>
        <p>Berlayar di Sungai Amstel: Sungai Amstel terletak di tengah kota Amsterdam dan bersebelahan dengan banyak tempat wisata terkenal seperti Museum Rijksmuseum dan Stadsschouwburg. Anda dapat menyewa perahu atau mengikuti tur perahu untuk menikmati pemandangan indah sepanjang sungai.</p>
        </li>
        <li>
        <p>Mengunjungi Museum Van Gogh: Museum Van Gogh terletak di kota Amsterdam dan merupakan tempat terbaik untuk melihat karya seni dari pelukis Belanda terkenal, Vincent Van Gogh. Museum ini memiliki lebih dari 200 lukisan, 500 gambar, dan 750 surat yang ditulis oleh Van Gogh.</p>
        </li>
        <li>
        <p>Makan stroopwafel: Stroopwafel adalah camilan tradisional Belanda yang terbuat dari dua lapisan wafel tipis yang diisi dengan sirup gula. Camilan ini dapat ditemukan di pasar dan toko kue di seluruh negeri.</p>
        </li>
        <li>
        <p>Melihat anginmolen (kincir angin): Kincir angin adalah ikonik dari Belanda, dan Anda dapat melihat banyak kincir angin di daerah pedesaan. Beberapa kincir angin masih digunakan untuk menggiling tepung atau memompa air.</p>
        </li>
        <li>
        <p>Mengunjungi Anne Frank House: Anne Frank House terletak di kota Amsterdam dan merupakan tempat tinggal terkenal dari Anne Frank selama Perang Dunia II. Sekarang menjadi museum, pengunjung dapat melihat kamar rahasia tempat Anne Frank dan keluarganya bersembunyi dari penjajah Nazi.</p>
        </li>
        <li>
        <p>Berbelanja di pasar: Belanda memiliki banyak pasar di seluruh negeri yang menjual segala sesuatu mulai dari sayuran, buah-buahan, ikan, dan daging hingga kerajinan tangan dan pakaian. Pasar terkenal di Belanda termasuk Albert Cuypmarkt di Amsterdam dan Grote Markt di Haarlem.</p>
        </li>
        <li>
        <p>Mengunjungi Kastil Muiderslot: Kastil Muiderslot adalah kastil abad ke-13 yang terletak di desa Muiden, dekat Amsterdam. Pengunjung dapat melihat kamar-kamar di dalam kastil dan mengeksplorasi kebun dan jalan setapak di sekitarnya.</p>
        </li>
        <li>
        <p>Mencicipi bir Belanda: Belanda terkenal dengan birnya yang berkualitas. Ada banyak tempat yang menyajikan bir lokal, seperti Brewery \'t IJ di Amsterdam atau Brouwerij de Molen di Bodegraven.</p>
        </li>
        <li>
        <p>Mengunjungi festival musik: Belanda dikenal sebagai negara dengan festival musik yang terkenal di seluruh dunia, seperti Amsterdam Dance Event, Mysteryland, dan Pinkpop. Festival musik ini menampilkan banyak artis dan pengunjung dapat menikmati musik di lingkungan yang menyenangkan.</p>
        </li>
        <li>
        <p>Naik roller coaster di Walibi Holland: Walibi Holland adalah taman hiburan terbesar di Belanda dan menawarkan banyak atraksi yang menarik untuk anak muda, termasuk roller coaster yang menantang.</p>
        </li>
        <li>
        <p>Mengunjungi Rotterdam Markthal: Rotterdam Markthal adalah pasar makanan yang terkenal dengan arsitektur yang menarik. Pengunjung dapat mencicipi makanan lokal dan internasional, dan juga berbelanja di toko-toko yang berada di dalam gedung.</p>
        </li>
        <li>
        <p>Mengunjungi Heineken Experience: Heineken Experience adalah museum bir yang interaktif di Amsterdam. Pengunjung dapat mengenal sejarah Heineken, melihat proses pembuatan bir, dan juga mencicipi bir segar.</p>
        </li>
        <li>
        <p>Mengunjungi Vondelpark: Vondelpark adalah taman terbesar di Amsterdam yang populer di kalangan anak muda. Pengunjung dapat bersepeda, piknik, dan juga menikmati pertunjukan musik yang sering diadakan di taman.</p>
        </li>
        <li>
        <p>Mengunjungi Taman Safari Beekse Bergen: Taman Safari Beekse Bergen terletak di dekat kota Hilvarenbeek. Pengunjung dapat melakukan safari di mobil atau perahu, melihat hewan liar seperti singa, gajah, dan zebra.</p>
        </li>
        <li>
        <p>Bersepeda ke Zaanse Schans: Zaanse Schans adalah desa kuno yang terletak di dekat Amsterdam. Pengunjung dapat menyewa sepeda dan berkeliling desa untuk melihat kincir angin tradisional, museum, dan toko-toko keju dan kue khas Belanda.</p>
        </li>
        <li>
        <p>Mengunjungi Rijksmuseum: Rijksmuseum adalah museum seni terbesar di Belanda, terletak di Amsterdam. Museum ini menampilkan karya seni dari seniman terkenal seperti Rembrandt dan Vermeer.</p>
        </li>
        <li>
        <p>Mengunjungi Groninger Museum: Groninger Museum terletak di kota Groningen dan menampilkan seni kontemporer dan sejarah Belanda. Museum ini memiliki arsitektur yang unik dan menarik untuk dijelajahi.</p>
        </li>
        <li>
        <p>Bermain game di The VR Room: The VR Room adalah tempat di Amsterdam di mana pengunjung dapat mencoba teknologi realitas virtual. Tempat ini menawarkan pengalaman yang menyenangkan dan menarik, seperti bermain game dan menjelajahi lingkungan virtual.</p>
        </li>
        </ol>',
                'eatdrink' => '<p>Berikut adalah beberapa restoran Indonesia di Belanda:</p>
        <ol>
        <li>Sari Citra - Javastraat 95, 1094 HD Amsterdam</li>
        <li>Garoeda - Kneuterdijk 18A, 2514 EN Den Haag</li>
        <li>Bali James - Rijnstraat 28-30, 1078 RB Amsterdam</li>
        <li>Djago - Sumatrastraat 44, 2585 CV Den Haag</li>
        <li>Toko Frederik - Frederik Hendriklaan 163, 2582 CB Den Haag</li>
        <li>Bali-Bali - Lange Leidsedwarsstraat 37, 1017 NG Amsterdam</li>
        <li>Bojo - Ceintuurbaan 71, 1072 EV Amsterdam</li>
        <li>Kartika - Overtoom 68-1, 1054 HL Amsterdam</li>
        <li>Dua Dua - Prinsengracht 540, 1017 KJ Amsterdam</li>
        <li>Warung Adinda - Beijerlandselaan 63B, 3074 EE Rotterdam</li>
        <li>Toko Mundu - Schiedamse Vest 95, 3012 BG Rotterdam</li>
        <li>Dapur Indonesia - Nieuwezijds Voorburgwal 146, 1012 SJ Amsterdam</li>
        <li>Warung Mini - Kruiskade 69A, 3012 EE Rotterdam</li>
        <li>De Satehbar - 2e Sweelinckstraat 151, 2517 HB Den Haag</li>
        <li>Toko Toet - Vleutenseweg 202, 3532 HL Utrecht</li>
        <li>Mekar Sari - Admiraal de Ruyterweg 45, 3031 AA Rotterdam</li>
        <li>Warung Mee - Eerste van Swindenstraat 49H, 1093 GL Amsterdam</li>
        <li>Rumah Makan Melati - Johan de Wittstraat 8, 2515 JS Den Haag</li>
        <li>Indrapura - Rembrandtplein 40, 1017 CV Amsterdam</li>
        <li>Warung Soeboer - Pretorialaan 17, 3072 EL Rotterdam</li>
        </ol>
        <p>Perlu diingat bahwa daftar ini mungkin tidak lengkap dan dapat berubah sewaktu-waktu. Pada dasarnya, di Belanda Restoran Indonesia tersebar di mana-mana. Hampir di setiap kota/desa ada. Selain itu, pastikan untuk memeriksa jam buka dan tanggal libur restoran sebelum mengunjungi lokasinya.</p>
        <p>Berikut adalah beberapa wisata kuliner yang populer di Belanda:</p>
        <ol>
        <li>Stroopwafel - kue karamel di antara dua wafel yang lezat.</li>
        <li>Poffertjes - pancake kecil yang gurih, biasanya disajikan dengan mentega dan gula halus.</li>
        <li>Bitterballen - bola daging yang digoreng, biasanya disajikan dengan saus mustard.</li>
        <li>Haring - ikan haring mentah yang disajikan dengan bawang dan saus remoulade.</li>
        <li>Stamppot - hidangan kentang yang dihancurkan dengan sayuran seperti kubis, wortel, atau endive dan disajikan dengan sosis.</li>
        <li>Kroket - daging giling yang diisi dan digoreng dengan tepung roti.</li>
        <li>Speculaas - kue kering yang dibuat dengan campuran rempah-rempah seperti kayu manis, jahe, dan kapulaga.</li>
        <li>Kaas - keju Belanda yang terkenal seperti Gouda, Edam, dan Leerdammer.</li>
        <li>Babi Panggang - babi panggang ala Belanda, disajikan dengan saus manis.</li>
        <li>Oliebollen - bola donat yang digoreng, biasanya disajikan pada waktu Natal.</li>
        </ol>
        <p>Terdapat banyak pilihan kuliner di Belanda yang patut dicoba, tergantung selera dan preferensi Anda. Selain itu ada makanan-makanan dari daerah lain seperti Suriname yang sedikit mirip masakan Jawa. Selamat menikmati kuliner Belanda!</p>
        <p>Berikut adalah beberapa tips makan di Belanda:</p>
        <ol>
        <li>Jadilah fleksibel - Belanda memiliki banyak masakan yang berbeda-beda, jadi cobalah untuk bersikap fleksibel dan terbuka untuk mencoba sesuatu yang baru.</li>
        <li>Pilih waktu yang tepat - di Belanda, makan siang biasanya dijamu antara pukul 12.00-13.00 dan makan malam antara pukul 18.00-19.00. Pastikan Anda memperhatikan jam makan sehingga Anda tidak akan kelaparan atau kehabisan tempat duduk.</li>
        <li>Mencari tempat makan yang baik - Anda dapat mencari rekomendasi restoran dan tempat makan dari teman lokal atau menggunakan situs web seperti Tripadvisor untuk membaca ulasan pelanggan.</li>
        <li>Cari makanan yang sesuai dengan anggaran - harga makanan di Belanda dapat cukup mahal, jadi pastikan Anda memeriksa harga sebelum memutuskan tempat makan.</li>
        <li>Tipping - memberi tip di Belanda tidaklah wajib, tetapi dianggap sebagai tanda terima kasih yang baik jika Anda merasa pelayanan yang Anda dapatkan memuaskan. Tipping biasanya dilakukan dengan memberi uang tunai sebesar 5-10% dari total tagihan.</li>
        <li>Berbicara dengan pengunjung lokal - bertanya kepada orang Belanda di sekitar Anda tentang makanan dan tempat makan favorit mereka dapat memberi Anda pengalaman makan yang lebih baik.</li>
        </ol>
        <p>Dengan mengikuti tips-tips tersebut, Anda akan dapat menikmati makanan yang lezat di Belanda dan menemukan pengalaman makan yang berkesan.</p>',
                'shopping' => '<p>Berikut adalah beberapa pusat perbelanjaan terkenal di Belanda:</p>
        <ol>
        <li>Kalverstraat, Amsterdam: Kalverstraat adalah jalan perbelanjaan utama di Amsterdam, dengan banyak toko-toko merek terkenal dan butik-butik kecil yang menawarkan pakaian, sepatu, aksesori, dan barang-barang lainnya.</li>
        <li>De Bijenkorf, Amsterdam: De Bijenkorf adalah salah satu pusat perbelanjaan terbesar di Amsterdam, dengan toko-toko merek internasional, departemen kosmetik dan perhiasan, serta restoran dan kafe.</li>
        <li>Magna Plaza, Amsterdam: Magna Plaza adalah pusat perbelanjaan bergaya bangunan bersejarah di Amsterdam yang menawarkan pakaian, perhiasan, barang-barang elektronik, dan barang-barang lainnya.</li>
        <li>Hoog Catharijne, Utrecht: Hoog Catharijne adalah pusat perbelanjaan terbesar di Utrecht, dengan lebih dari 150 toko-toko dan restoran yang menawarkan pakaian, sepatu, aksesori, barang-barang rumah tangga, dan makanan.</li>
        <li>Alexandrium Shopping Center, Rotterdam: Alexandrium Shopping Center adalah pusat perbelanjaan terbesar di Rotterdam, dengan lebih dari 200 toko-toko yang menawarkan pakaian, sepatu, aksesori, barang-barang rumah tangga, dan makanan.</li>
        <li>Batavia Stad Fashion Outlet, Lelystad: Batavia Stad Fashion Outlet adalah pusat perbelanjaan terbesar di Belanda yang menawarkan barang-barang merek terkenal dengan diskon besar-besaran.</li>
        <li>Grote Marktstraat, Den Haag: Grote Marktstraat adalah jalan perbelanjaan utama di Den Haag, dengan banyak toko-toko pakaian, sepatu, dan aksesori.</li>
        <li>Winkelcentrum Zuidplein, Rotterdam: Winkelcentrum Zuidplein adalah pusat perbelanjaan di Rotterdam yang menawarkan lebih dari 150 toko-toko yang menjual pakaian, sepatu, aksesori, dan barang-barang lainnya.</li>
        <li>The Hague Market, Den Haag: The Hague Market adalah pasar terbesar di Belanda dengan lebih dari 500 pedagang yang menjual makanan, pakaian, perhiasan, barang-barang rumah tangga, dan barang-barang lainnya.</li>
        <li>Stadshart Amstelveen, Amstelveen: Stadshart Amstelveen adalah pusat perbelanjaan yang terletak di dekat Amsterdam yang menawarkan lebih dari 200 toko-toko, restoran, dan kafe.</li>
        </ol>
        <p>Berikut adalah beberapa alamat butik mewah di Belanda berdasarkan merek:</p>
        <ol>
        <li>Louis Vuitton - P.C. Hooftstraat 140, 1071 CE Amsterdam</li>
        <li>Chanel - P.C. Hooftstraat 66-68, 1071 CB Amsterdam</li>
        <li>Gucci - P.C. Hooftstraat 66, 1071 CB Amsterdam</li>
        <li>Prada - P.C. Hooftstraat 47, 1071 BN Amsterdam</li>
        <li>Herm&egrave;s - P.C. Hooftstraat 71, 1071 BP Amsterdam</li>
        <li>Dior - P.C. Hooftstraat 44-46, 1071 BZ Amsterdam</li>
        <li>Valentino - P.C. Hooftstraat 56, 1071 BZ Amsterdam</li>
        <li>Fendi - P.C. Hooftstraat 70, 1071 CB Amsterdam</li>
        <li>Cartier - P.C. Hooftstraat 60, 1071 CB Amsterdam</li>
        <li>Burberry - P.C. Hooftstraat 54, 1071 CB Amsterdam</li>
        <li>Dolce &amp; Gabbana - P.C. Hooftstraat 84, 1071 CB Amsterdam</li>
        <li>Yves Saint Laurent - P.C. Hooftstraat 78, 1071 CB Amsterdam</li>
        <li>Celine - P.C. Hooftstraat 74, 1071 CB Amsterdam</li>
        <li>Tiffany &amp; Co. - P.C. Hooftstraat 87, 1071 BS Amsterdam</li>
        <li>Van Cleef &amp; Arpels - P.C. Hooftstraat 74, 1071 CB Amsterdam</li>
        </ol>
        <p>Selain itu, ada juga beberapa merek mewah yang memiliki butik di kota-kota lain di Belanda selain Amsterdam. Berikut ini adalah daftar beberapa factory outlet dan merek-merek yang tersedia beserta alamat di Belanda:</p>
        <ol>
        <li>Batavia Stad Fashion Outlet - Bataviaplein 60, 8242 PN Lelystad<br />Merek yang tersedia: Adidas, Armani, Calvin Klein, G-Star RAW, Levi\'s, Nike, Puma, Tommy Hilfiger, dan masih banyak lagi.</li>
        <li>Designer Outlet Roermond - Stadsweide 2, 6041 TD Roermond<br />Merek yang tersedia: Gucci, Prada, Versace, Michael Kors, Ralph Lauren, Hugo Boss, Lacoste, dan masih banyak lagi.</li>
        <li>Rosada Fashion Outlet - Rosada 70, 4703 TB Roosendaal<br />Merek yang tersedia: Nike, Adidas, Converse, G-Star RAW, Levi\'s, S. Oliver, Timberland, dan masih banyak lagi.</li>
        <li>Fashion Outlet Zevenaar - Doesburgseweg 17, 6902 PE Zevenaar<br />Merek yang tersedia: Vingino, Gaastra, Nike, Adidas, McGregor, Petrol, Supertrash, dan masih banyak lagi.</li>
        <li>Fashion Outlet Ochtrup - Laurenzstr. 51-55, 48607 Ochtrup, Jerman (dekat perbatasan Belanda-Jerman)<br />Merek yang tersedia: Diesel, Esprit, G-Star RAW, Nike, Puma, Tom Tailor, dan masih banyak lagi.</li>
        <li>Fashion Outlet Center Assen - De Haar 1, 9405 TE Assen<br />Merek yang tersedia: Guess, S. Oliver, Scotch &amp; Soda, Superdry, Vans, en masih banyak lagi.</li>
        <li>Fashion Outlet Oldenzaal - Kleibultweg 48, 7575 BV Oldenzaal<br />Merek yang tersedia: Bjorn Borg, G-Star RAW, Jack &amp; Jones, Levi\'s, Only, Vero Moda, dan masih banyak lagi.</li>
        <li>Amsterdam The Style Outlets - Sugar City, Haarlemmerstraatweg 4, 1165 MJ Halfweg<br />Merek yang tersedia: Nike, Adidas, Puma, Levi\'s, G-Star RAW, S. Oliver, en masih banyak lagi.</li>
        <li>McArthurGlen Designer Outlet Roosendaal - Antwerpseweg 70, 4706 PG Roosendaal<br />Merek yang tersedia: Calvin Klein, Tommy Hilfiger, Hugo Boss, Karl Lagerfeld, Guess, Nike, en masih banyak lagi.</li>
        </ol>
        <p>Perlu diingat bahwa daftar ini mungkin tidak lengkap dan dapat berubah sewaktu-waktu. Selain itu, pastikan untuk memeriksa jam buka dan tanggal libur toko-toko outlet sebelum mengunjungi lokasinya.</p>',
                'others' => '<p>Berikut adalah beberapa tips wisata di Belanda:</p>
        <ol>
        <li>Kunjungi situs web pariwisata resmi Belanda - Situs web seperti holland.com dapat memberi Anda informasi terbaru tentang tempat wisata, kuliner, dan acara di Belanda.</li>
        <li>Pilih waktu yang tepat untuk berkunjung - musim panas biasanya merupakan waktu yang paling ramai dikunjungi, sedangkan musim dingin biasanya lebih tenang. Periksa jadwal acara dan perayaan yang akan datang untuk memastikan bahwa Anda tidak akan melewatkan sesuatu yang penting.</li>
        <li>Gunakan transportasi umum - Belanda memiliki sistem transportasi umum yang luas dan dapat diandalkan, termasuk kereta api, bus, dan trem. Beli tiket di mesin tiket atau kios tiket, atau menggunakan aplikasi transportasi publik seperti OV-chipkaart atau NS-app.</li>
        <li>Sewa sepeda - Belanda terkenal dengan budaya sepedanya. Menyewa sepeda adalah cara yang baik untuk mengeksplorasi kota atau desa di Belanda. Beberapa kota memiliki jalur sepeda khusus yang luas dan aman, seperti di Amsterdam.</li>
        <li>Beli kartu museum - Belanda memiliki banyak museum yang menarik. Beli kartu museum seperti Museumkaart yang memungkinkan Anda masuk ke banyak museum dengan harga yang lebih murah.</li>
        <li>Jangan lewatkan kebun bunga - di musim semi, kebun bunga Belanda seperti Keukenhof dan Bollenstreek menawarkan pemandangan yang menakjubkan dari ribuan bunga tulip yang mekar.</li>
        <li>Patuhi aturan jalan - jika Anda mengemudi di Belanda, patuhi aturan jalan dan batas kecepatan yang ditetapkan. Belanda sangat memperhatikan keamanan lalu lintas dan pelanggaran bisa dikenakan denda yang mahal.</li>
        </ol>
        <p>Dengan mengikuti tips-tips tersebut, Anda akan dapat menikmati wisata dan transportasi di Belanda dengan nyaman dan aman.</p>
        <h3>Coffeshop</h3>
        <p>Penting untuk diingat bahwa meskipun beberapa kota di Belanda seperti Amsterdam memiliki coffeeshop yang legal, konsumsi ganja tetap ilegal di Belanda dan beberapa wilayah mengharuskan pengunjung memiliki usia minimal 18 tahun untuk masuk ke coffeeshop. Berikut adalah beberapa tips untuk melakukan "coffeeshop tour" di Belanda dengan aman dan bertanggung jawab:</p>
        <ol>
        <li>Pahami hukum dan aturan - sebelum mengunjungi coffeeshop, pastikan untuk memahami hukum dan aturan terkait konsumsi ganja di Belanda. Jangan membawa atau menggunakan ganja di tempat umum atau di luar wilayah yang diizinkan.</li>
        <li>Batasi konsumsi - mengonsumsi ganja terlalu banyak dapat mengakibatkan efek samping yang tidak menyenangkan. Batasi konsumsi Anda dan jangan mencoba untuk menantang diri Anda sendiri.</li>
        <li>Pilih coffeeshop yang terkenal - coffeeshop yang terkenal atau populer mungkin memiliki produk yang berkualitas dan lingkungan yang lebih aman. Pastikan untuk memilih coffeeshop yang memperhatikan kualitas produk dan mematuhi aturan pemerintah.</li>
        <li>Bawa uang tunai - beberapa coffeeshop mungkin tidak menerima kartu kredit atau debit, jadi pastikan untuk membawa cukup uang tunai untuk membayar produk yang Anda beli.</li>
        <li>Hindari "coffeeshop hopping" - mengunjungi terlalu banyak coffeeshop dalam satu hari dapat mengakibatkan kelelahan dan risiko keamanan yang lebih tinggi. Batasi jumlah coffeeshop yang Anda kunjungi dan pastikan untuk beristirahat dan memulihkan diri di antara kunjungan.</li>
        <li>Ingat bahwa penggunaan ganja yang berlebihan dapat berdampak buruk pada kesehatan Anda - Jangan lupa bahwa penggunaan ganja yang berlebihan dapat mempengaruhi kesehatan mental dan fisik Anda. Penting untuk selalu memperhatikan kesehatan Anda dan tidak mengonsumsi terlalu banyak.</li>
        </ol>
        <p>Sementara coffeeshop tour dapat menjadi pengalaman yang menyenangkan, pastikan untuk melakukan hal tersebut dengan bertanggung jawab dan dengan mematuhi aturan hukum dan etika.</p>
        <h3>Transportasi</h3>
        <p>Berikut adalah beberapa tips transportasi di Belanda:</p>
        <ol>
        <li>Gunakan transportasi umum - Belanda memiliki sistem transportasi umum yang luas dan dapat diandalkan, termasuk kereta api, bus, dan trem. Biasanya, tiket transportasi publik dapat dibeli di mesin tiket atau kios tiket di stasiun kereta api atau halte bus, atau menggunakan aplikasi transportasi publik seperti OV-chipkaart atau NS-app.</li>
        <li>Beli OV-chipkaart - OV-chipkaart adalah kartu transportasi publik yang dapat digunakan di semua jenis transportasi umum di Belanda. Anda dapat membelinya di stasiun kereta api atau toko-toko yang menjual OV-chipkaart. Isi ulang kartu dapat dilakukan di mesin tiket atau toko-toko yang menjual OV-chipkaart.</li>
        <li>Gunakan kereta api - kereta api adalah salah satu cara yang paling efisien dan nyaman untuk berpergian di Belanda. Dalam beberapa kasus, membeli tiket kereta api di muka dapat memberikan diskon yang signifikan.</li>
        <li>Sewa sepeda - menyewa sepeda adalah cara yang baik untuk mengeksplorasi kota atau desa di Belanda. Beberapa kota memiliki jalur sepeda khusus yang luas dan aman, seperti di Amsterdam.</li>
        <li>Hindari mengemudi di kota-kota besar - parkir dan kemacetan bisa menjadi masalah di kota-kota besar seperti Amsterdam atau Rotterdam. Lebih baik menggunakan transportasi umum atau menyewa sepeda untuk mengeksplorasi kota-kota tersebut.</li>
        <li>Jangan lewatkan pemandangan dari kapal - kapal dapat digunakan untuk menikmati pemandangan di beberapa kota Belanda, seperti Amsterdam atau Rotterdam. Ada banyak perusahaan yang menawarkan tur kapal dengan harga yang terjangkau.</li>
        </ol>
        <p>Dengan mengikuti tips-tips tersebut, Anda akan dapat menggunakan transportasi di Belanda dengan mudah dan nyaman, dan menikmati pemandangan sepanjang perjalanan Anda.</p>',
                'views' => 13308,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-27 10:42:52',
            ],
            [
                'id' => 2,
                'name' => 'Belgia',
                'title' => '6 tempat wisata yang populer di Belgia',
                'slug' => 'belgia',
                'international' => 'Belgium',
                'codes' => 'be',
                'latitude' => '50.501079',
                'longitude' => '4.4764595',
                'keywords' => 'belgia, brussels, antwerpen, Ghent, Dinant, Brugges, Leuven, Hasselt, perancis, jerman, belanda, roma',
                'description' => '<p class="dropcap">Belgia adalah negara yang terletak di Eropa Barat dan memiliki banyak tempat wisata yang menarik. Pariwisata di Belgia terutama terkait dengan sejarah, seni, arsitektur, dan kuliner. Berikut adalah 6 tempat wisata yang populer di Belgia:</p>
        <ol>
        <li><a href="https://jalan2eropa.com/negara/belgia/alun-alun-brussels" target="">Brussels</a>: Brussels adalah ibu kota Belgia dan menjadi tujuan wisata yang populer di Belgia. Brussels memiliki berbagai atraksi wisata termasuk Grand Place, Manneken Pis, Atomium, dan Brussels Park.</li>
        <li>Bruges: Bruges adalah kota bersejarah yang terkenal dengan kanal-kanalnya yang indah dan arsitektur yang menakjubkan. Bruges juga memiliki beberapa museum dan galeri seni yang menarik.</li>
        <li><a href="https://jalan2eropa.com/negara/belgia/museum-berlian-di-antwerpen" target="">Antwerp</a>: Antwerp adalah kota pelabuhan terbesar di Belgia dan memiliki sejarah panjang dalam perdagangan berlian. Selain itu, Antwerp juga terkenal dengan arsitektur yang indah, museum seni, dan kehidupan malamnya yang ramai.</li>
        <li><a href="https://jalan2eropa.com/negara/belgia/kastil-gravensteen-ghent" target="">Ghent</a>: Ghent adalah kota tua yang terletak di tepi sungai Leie dan Scheldt. Ghent memiliki sejarah yang kaya dan banyak tempat wisata yang menarik seperti Gravensteen, Belfry, dan St. Bavo\'s Cathedral.</li>
        <li>Ardennes: Ardennes adalah pegunungan yang terletak di selatan Belgia dan merupakan tempat yang populer untuk hiking, bersepeda, dan olahraga air.</li>
        <li>Chocolate and Beer: Belgia juga terkenal dengan cokelat dan birnya yang terkenal di seluruh dunia. Ada banyak tempat di Belgia yang menawarkan tur cokelat dan bir untuk para wisatawan.</li></ol><div><span style="color: rgb(126, 137, 152);"><br></span></div>
        <p>Itulah beberapa tempat wisata yang populer di Belgia. Selain itu, Belgia juga terkenal dengan masakan lezat seperti wafel dan kue Belgia yang terkenal seperti speculoos dan chocolate pralines. Belgia juga memiliki banyak festival dan acara sepanjang tahun seperti Brussels Jazz Marathon, Gentse Feesten, dan Tomorrowland, festival musik elektronik terbesar di dunia.</p>
        
        <p>Beberapa hotel populer di Belgia antara lain:</p>
        <ol>
        <li><a title="The Hotel, Brussels" href="https://www.booking.com/hotel/be/thehotelbrussels.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Hotel, Brussels</a>: Hotel bintang lima dengan lokasi yang strategis di kawasan Louise, Brussels. Hotel ini memiliki kamar-kamar mewah, rooftop bar, dan kolam renang dalam ruangan.</li>
        <li><a title="Martin\'s Brugge, Bruges" href="https://www.booking.com/hotel/be/martinsbrugge.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Martin\'s Brugge, Bruges</a>: Hotel yang terletak di pusat kota Bruges, terkenal dengan bangunan-bangunan bersejarahnya. Hotel ini memiliki kamar-kamar yang modern dan fasilitas seperti restoran dan bar.</li>
        <li><a title="Hotel Amigo, Brussels" href="https://www.booking.com/hotel/be/amigo.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Amigo, Brussels</a>: Hotel mewah yang terletak di pusat kota Brussels, dekat dengan Grand Place dan Manneken Pis. Hotel ini memiliki kamar-kamar yang elegan, restoran gourmet, dan bar.</li>
        <li><a title="Pillows Grand Hotel Reylof, Ghent" href="https://www.booking.com/hotel/be/pillows-grand-hotel-reylof.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Pillows Grand Hotel Reylof, Ghent</a>: Hotel yang terletak di kota Ghent yang indah. Hotel ini memiliki kamar-kamar yang luas dan modern, fasilitas spa, dan restoran yang menyajikan masakan Belgia dan internasional.</li>
        <li><a title="Hotel de Tuilerieen, Bruges" href="https://www.booking.com/hotel/be/tuilerieen.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel de Tuilerieen, Bruges</a>: Hotel yang terletak di pusat kota Bruges, dekat dengan berbagai objek wisata populer. Hotel ini memiliki kamar-kamar yang elegan, fasilitas spa, dan restoran yang menyajikan masakan Belgia dan internasional.</li>
        <li><a title="NH Gent Belfort, Ghent" href="https://www.booking.com/hotel/be/gent-belfort.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">NH Gent Belfort, Ghent</a>: Hotel yang terletak di pusat kota Ghent, dekat dengan katedral dan Menara Belfry yang terkenal. Hotel ini memiliki kamar-kamar yang modern dan fasilitas seperti restoran dan bar.</li>
        <li><a title="Hotel Manos Premier, Brussels" href="https://www.booking.com/hotel/be/manos-premier.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Manos Premier, Brussels</a>: Hotel mewah yang terletak di kawasan Sablon, Brussels. Hotel ini memiliki kamar-kamar yang elegan, fasilitas spa, dan restoran yang menyajikan masakan Belgia dan internasional.</li>
        <li><a title="Rocco Forte Hotel Amigo, Brussels" href="https://www.booking.com/hotel/be/amigo.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Rocco Forte Hotel Amigo, Brussels</a>: Hotel mewah lainnya yang terletak di pusat kota Brussels, dekat dengan berbagai objek wisata populer. Hotel ini memiliki kamar-kamar yang elegan, fasilitas spa, dan restoran yang menyajikan masakan Belgia dan internasional.</li>
        <li>
        <p><a title="Hotel \'t Sandt Antwerpen" href="https://www.booking.com/hotel/be/t-sandt.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel \'t Sandt Antwerpen</a>: Terletak di pusat kota Antwerpen, dekat dengan atraksi populer seperti Katedral Antwerpen dan Grote Markt. Hotel ini menawarkan kamar-kamar yang luas dengan dekorasi yang elegan, spa, dan pusat kebugaran.</p>
        </li>
        <li>
        <p><a title="Hotel Julien" href="https://www.booking.com/hotel/be/julien.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Julien</a>: Terletak di kawasan Green Quarter, dekat dengan Museum Mode dan Gereja Santo Paulus. Hotel ini menawarkan kamar-kamar yang indah dengan dekorasi yang unik, lounge yang nyaman, dan restoran yang terkenal.</p>
        </li>
        <li>
        <p><a title="Hotel Indigo Antwerp - City Centre" href="https://www.booking.com/hotel/be/hotel-indigo-antwerp-city-centre.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Indigo Antwerp - City Centre</a>: Terletak di gedung bersejarah di pusat kota Antwerpen, dekat dengan kawasan perbelanjaan dan Katedral Antwerpen. Hotel ini menawarkan kamar-kamar modern dengan dekorasi yang menarik, restoran yang terkenal, dan bar yang menyenangkan.</p>
        </li>
        <li>
        <p><a title="Radisson Blu Astrid Hotel" href="https://www.booking.com/hotel/be/astridplaza.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Radisson Blu Astrid Hotel</a>, Antwerp: Terletak di dekat Stasiun Antwerpen-Centraal, dekat dengan Museum Diam Antwerpen dan taman Middelheim. Hotel ini menawarkan kamar-kamar yang modern dengan fasilitas seperti spa, pusat kebugaran, dan restoran yang lezat.</p>
        </li>
        <li>
        <p><a title="Hotel Rubens - Grote Markt" href="https://www.booking.com/hotel/be/rubens-grote-markt.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Rubens - Grote Markt</a>: Terletak di dekat Grote Markt, dekat dengan Katedral Antwerpen dan Museum Mayer van den Bergh. Hotel ini menawarkan kamar-kamar yang elegan dengan dekorasi yang indah, restoran yang terkenal, dan bar yang menyenangkan.</p>
        </li>
        </ol>
        <p>Itu adalah beberapa pilihan hotel populer di Belgia. Pastikan untuk mempertimbangkan lokasi dan fasilitas hotel sebelum memutuskan tempat menginap, serta melakukan reservasi dengan waktu yang cukup agar dapat memperoleh harga yang lebih terjangkau.</p>',
                'short_desc' => 'Belgia adalah negara yang terletak di Eropa Barat dan memiliki banyak tempat wisata yang menarik. Pariwisata di Belgia terutama terkait dengan sejarah, seni, arsitektur, dan kuliner. Belgia juga memiliki banyak festival dan acara sepanjang tahun seperti Brussels Jazz Marathon, Gentse Feesten, dan Tomorrowland, festival musik elektronik terbesar di dunia.',
                'to_see' => '<h3>10 atraksi menarik di Belgia</h3><img src="/assets/images/article/canalbruge.jpg" style="border: 0px; width: 300px; height: 225px; margin: 0px 0px 0px 5px; float: right;" title="Brugge canal" alt="Brugge canal">
        <p>Belgia memiliki banyak atraksi wisata yang menarik dan beragam, termasuk situs sejarah, museum seni dan sejarah, taman hiburan, pasar, dan tempat-tempat alam yang indah. Berikut ini beberapa atraksi wisata yang populer di Belgia:</p>
        <ol>
        <li>Grand Place: Terletak di pusat kota Brussels, Grand Place adalah alun-alun yang indah dengan arsitektur bergaya Baroque dan Gothic. Di sini, Anda dapat melihat Menara Lonceng Brussels dan bangunan-bangunan lainnya yang indah.</li>
        <li>Atomium: Sebuah struktur ikonik yang dirancang untuk Pameran Dunia 1958 dan menampilkan pemandangan indah dari kota Brussels.</li>
        <li>Bruges: Kota bersejarah dengan jaringan kanal yang indah, jalan-jalan berbatu, dan arsitektur kuno yang menawan. Bruges adalah salah satu kota yang paling populer di Belgia dan menjadi Situs Warisan Dunia UNESCO.</li>
        <li>Museum Seni Raja Belgia: Museum ini memiliki koleksi seni Belgia yang kaya, termasuk lukisan-lukisan dari seniman seperti Rubens, Bruegel, dan Magritte.</li>
        <li>Antwerp: Kota terbesar kedua di Belgia, terkenal dengan Museum Berlian dan katedral kuno yang indah.</li>
        <li>Taman Mini-Eropa: Taman hiburan yang menampilkan replika bangunan dan pemandangan dari seluruh Eropa dalam skala kecil.</li>
        <li>Ghent: Kota bersejarah yang terkenal dengan Kastil Gravensteen dan kanal yang indah. Ghent juga memiliki banyak museum dan galeri seni.</li>
        <li>Taman Pairi Daiza: Taman hiburan yang menampilkan berbagai jenis binatang dari seluruh dunia dan bangunan kuno yang indah.</li>
        <li>Dinant: Kota kecil yang terletak di tepi sungai Meuse, dikelilingi oleh tebing-tebing yang curam. Dinant terkenal dengan benteng yang indah dan Gua La Merveilleuse yang menakjubkan.</li>
        <li>Ardennes: Daerah alam yang indah dengan pegunungan, sungai, dan hutan yang menawarkan berbagai kegiatan seperti hiking, bersepeda, dan olahraga air.</li>
        </ol>
        <p>Itulah beberapa atraksi wisata populer di Belgia. Tentu saja masih ada banyak tempat menarik lainnya yang dapat dikunjungi di negara ini.</p>
        <p>Berikut adalah beberapa atraksi kegiatan unik yang bisa dilakukan di Belgia:</p>
        <ol>
        <li>
        <p>Mencicipi Bir Belgia: Belgia terkenal dengan birnya yang lezat dan beragam jenisnya. Jika Anda adalah penggemar bir, maka Belgia adalah tempat yang tepat untuk mencoba berbagai macam bir yang terkenal di seluruh dunia, seperti Bir Trappist, Bir Lambic, dan Bir Witbier. Tentu saja, tidak di sarankan bagi saudara-saudara kita yang muslim.</p>
        </li>
        <li>
        <p>Bersepeda di Bruges: Bruges adalah salah satu kota terindah di Belgia, dan salah satu cara terbaik untuk menjelajahi kota ini adalah dengan bersepeda. Ada banyak rute bersepeda yang tersedia di Bruges, dan Anda dapat mengikuti tur bersepeda dengan pemandu lokal.</p>
        </li>
        <li>
        <p>Mengunjungi Kastil di Belgia: Belgia memiliki sejumlah besar kastil yang indah dan menakjubkan. Beberapa kastil yang terkenal di Belgia adalah Kastil Gravensteen di Ghent, Kastil de Haar di Utrecht, dan Kastil Laeken di Brussels.</p>
        </li>
        <li>
        <p>Menikmati Cokelat Belgia: Belgia terkenal dengan cokelatnya yang lezat dan diakui sebagai salah satu negara penghasil cokelat terbaik di dunia. Ada banyak toko cokelat di seluruh Belgia, dan Anda dapat menikmati berbagai macam cokelat yang lezat.</p>
        </li>
        <li>
        <p>Menyaksikan Parade Karnaval di Binche: Karnaval Binche adalah salah satu perayaan paling terkenal di Belgia. Pada saat ini, para peserta mengenakan topeng dan kostum tradisional dan melakukan parade di sekitar kota. Acara ini dianggap sebagai warisan budaya tak ternilai bagi Belgia.</p>
        </li>
        <li>
        <p>Mengunjungi Kota Mechelen: Mechelen adalah kota kecil yang indah di Belgia. Kota ini dikenal karena arsitektur yang indah, museum yang menarik, dan pusat sejarah yang menarik. Kota ini juga memiliki beberapa restoran dan kafe yang menyajikan makanan dan minuman lezat.</p>
        </li>
        <li>
        <p>Mengunjungi Museum Seni di Brussels: Brussels memiliki beberapa museum seni terbaik di dunia. Museum Magritte dan Museum Art Nouveau adalah dua museum seni yang paling terkenal di Brussels dan menampilkan karya seni yang menakjubkan.</p>
        </li>
        <li>
        <p>Mengunjungi Taman Mini Eropa: Taman Mini Eropa terletak di Brussels dan menampilkan replika miniatur dari landmark terkenal di seluruh Eropa. Ini adalah tempat yang bagus untuk dikunjungi jika Anda ingin melihat landmark terkenal di seluruh Eropa dalam satu tempat.</p>
        </li>
        <li>
        <p>Mengunjungi Pusat Sejarah Perang Dunia I: Belgia adalah lokasi banyak pertempuran selama Perang Dunia I, dan ada banyak museum dan situs sejarah yang dapat Anda kunjungi untuk mempelajari lebih lanjut tentang perang dan bagaimana Belgia terlibat dalam perang.</p>
        </li>
        <li>
        <p>Berbelanja di Brussels: Brussels memiliki banyak toko yang menawarkan berbagai macam barang, mulai dari pakaian, tas, sepatu, perhiasan, dan barang-barang lainnya. Ada juga banyak pasar dan toko barang antik di Brussels yang menawarkan barang-barang unik.</p>
        </li>
        </ol>',
                'eatdrink' => '<p>Berikut adalah beberapa restoran Indonesia di Belgia:</p>
        <ol>
        <li>Warung Tiga - Brussels: Rue de la Paix 12, 1050 Ixelles, Belgium</li>
        <li>Little Asia - Brussels: Rue de la Bourse 18, 1000 Brussels, Belgium</li>
        <li>Asian Gourmet - Brussels: Rue de la Paix 17, 1050 Ixelles, Belgium</li>
        <li>Resto Bali - Antwerp: Lange Herentalsestraat 29, 2018 Antwerp, Belgium</li>
        <li>Toko Bali - Brussels: Rue de la P&ecirc;cherie 1, 1000 Brussels, Belgium</li>
        </ol>
        <p>Harap diingat bahwa daftar ini mungkin tidak lengkap dan informasi ini dapat berubah dari waktu ke waktu, sehingga disarankan untuk selalu memeriksa informasi terbaru dan melakukan reservasi terlebih dahulu sebelum mengunjungi restoran.</p>
        <p><strong>Tips makan</strong></p>
        <p>Berikut adalah beberapa tips untuk makan di Belgia:</p>
        <ol>
        <li>Cari tahu tentang makanan khas Belgia: Ada banyak makanan khas Belgia yang patut dicoba, seperti wafel, kentang goreng, kerang, kue bulan, dan cokelat. Cobalah untuk mencari tahu tentang makanan-makanan ini dan tempat-tempat terbaik untuk menikmatinya.</li>
        <li>Cobalah restoran-restoran lokal: Ada banyak restoran lokal di Belgia yang menawarkan masakan khas Belgia. Cobalah mencari restoran yang tidak hanya melayani makanan khas Belgia, tetapi juga memperkenalkan inovasi dalam pengolahan bahan makanan.</li>
        <li>Pilih restoran dengan pilihan menu yang bervariasi: Saat mencari restoran di Belgia, pilihlah tempat yang menawarkan pilihan menu yang bervariasi. Restoran yang menawarkan berbagai macam hidangan akan memberi Anda banyak pilihan untuk mencicipi makanan yang berbeda-beda.</li>
        <li>Waspadai harga: Harga di restoran di Belgia bisa cukup mahal, terutama jika Anda memesan hidangan kelas atas atau minuman anggur yang mahal. Pastikan untuk memeriksa harga sebelum memesan dan mencari restoran yang sesuai dengan anggaran Anda.</li>
        <li>Tipping: Tipping di Belgia biasanya sudah termasuk dalam tagihan, tetapi jika Anda merasa puas dengan pelayanan, Anda bisa memberikan tip tambahan sekitar 10% dari total tagihan.</li>
        <li>Perhatikan jam buka restoran: Banyak restoran di Belgia tutup pada hari Minggu, Senin, atau Selasa, jadi pastikan untuk memeriksa jam buka sebelum pergi ke restoran.</li>
        <li>Lakukan reservasi terlebih dahulu: Beberapa restoran di Belgia sangat populer dan mungkin perlu melakukan reservasi terlebih dahulu untuk mendapatkan tempat. Lakukan reservasi sebelumnya untuk menghindari kekecewaan dan menjamin meja yang tersedia.</li>
        </ol>',
                'shopping' => '<p>Belgia memiliki beberapa pusat perbelanjaan terkenal di kota-kota besar. Berikut beberapa di antaranya:</p>
        <ol>
        <li>Rue Neuve, Brussels: Jalan belanja yang terkenal di pusat kota Brussels, dengan toko-toko besar seperti H&amp;M, Zara, dan Primark.</li>
        <li>Grand Place, Brussels: Alun-alun yang indah dengan toko-toko yang menjual cokelat Belgia, kerajinan tangan, dan produk lokal lainnya.</li>
        <li>Les Galeries Royales Saint-Hubert, Brussels: Pusat perbelanjaan tertua di Eropa, dengan toko-toko mewah, restoran, dan kafe.</li>
        <li>Antwerp Shopping District: Wilayah perbelanjaan terkenal di kota Antwerp, dengan toko-toko mode, butik-butik desainer, dan toko-toko perhiasan.</li>
        <li>Maasmechelen Village, Limburg: Pusat perbelanjaan outlet yang menawarkan diskon hingga 60% pada merek-merek terkenal seperti Armani, Ralph Lauren, dan Versace.</li>
        <li>Wijnegem Shopping Center, Antwerp: Pusat perbelanjaan terbesar di Belgia, dengan lebih dari 250 toko, termasuk toko-toko mode, restoran, dan bioskop.</li>
        <li>Louvain-La-Neuve, Wallonia: Kota kecil yang sepenuhnya didedikasikan untuk belanja, dengan lebih dari 150 toko, bioskop, dan toko buku.</li>
        </ol>
        <p>Itulah beberapa pusat perbelanjaan terkenal di Belgia. Selain itu, kota-kota lain seperti Ghent, Bruges, dan Liege juga memiliki banyak jalan-jalan belanja dan toko-toko yang menarik.</p>
        <p>Berikut adalah daftar beberapa butik-butik mewah di Belgia beserta alamat lengkapnya berdasarkan merek:</p>
        <ol>
        <li>Chanel - Brussels: Rue des Tongres 18, 1000 Brussels, Belgium</li>
        <li>Gucci - Brussels: Rue Antoine Dansaert 31, 1000 Brussels, Belgium</li>
        <li>Dior - Brussels: Boulevard de Waterloo 51, 1000 Brussels, Belgium</li>
        <li>Herm&egrave;s - Brussels: Boulevard de Waterloo 50, 1000 Brussels, Belgium</li>
        <li>Louis Vuitton - Brussels: Avenue Louise 78, 1000 Brussels, Belgium</li>
        <li>Prada - Brussels: Avenue Louise 32, 1050 Ixelles, Belgium</li>
        <li>Saint Laurent - Brussels: Rue Antoine Dansaert 62, 1000 Brussels, Belgium</li>
        <li>Herm&egrave;s Brussels - Grand Sablon: Rue de la Madeleine 25, 1000 Brussels, Belgium</li>
        <li>Herm&egrave;s Antwerp: Komedieplaats 13, 2000 Antwerp, Belgium</li>
        </ol>
        <p>Harap diingat bahwa daftar ini hanya mencantumkan beberapa butik-butik mewah di Belgia, dan masih banyak lagi toko-toko mewah yang menawarkan merek-merek ternama lainnya di kota-kota besar seperti Brussels, Antwerp, dan Ghent.</p>',
                'others' => '<p>Berikut adalah beberapa tips dan saran untuk perjalanan di Belgia:</p>
        <ol>
        <li>Jangan lewatkan kota-kota utama: Belgia memiliki beberapa kota yang sangat menarik untuk dikunjungi, seperti Brussels, Bruges, Antwerp, dan Ghent. Pastikan untuk mengunjungi kota-kota ini dan menikmati keindahan arsitektur, makanan, dan budayanya.</li>
        <li>Gunakan transportasi umum: Belgia memiliki sistem transportasi yang baik, termasuk kereta api, bus, dan tram. Gunakan transportasi umum untuk mengeksplorasi kota-kota di Belgia, karena ini bisa jadi cara yang lebih nyaman dan murah daripada menggunakan taksi.</li>
        <li>Bersiaplah untuk cuaca: Belgia memiliki cuaca yang tidak dapat diprediksi, terutama di musim dingin dan musim semi. Bersiaplah untuk cuaca dengan membawa pakaian yang sesuai, termasuk mantel, payung, dan sepatu yang tahan air.</li>
        <li>Jangan lewatkan kuliner khas Belgia: Belgia terkenal dengan makanan dan minuman khasnya, seperti cokelat, bir, wafel, dan kentang goreng. Cobalah mencari restoran atau toko-toko khusus yang menawarkan hidangan-hidangan ini untuk merasakan cita rasa aslinya.</li>
        <li>Jelajahi sejarah dan kebudayaan: Belgia memiliki sejarah dan kebudayaan yang kaya, dengan banyak museum, galeri seni, dan situs bersejarah. Cobalah untuk mengunjungi beberapa tempat ini untuk mendapatkan pemahaman yang lebih baik tentang sejarah dan budaya Belgia.</li>
        <li>Hati-hati saat berjalan di kota: Seperti banyak kota lain di Eropa, ada kemungkinan kejahatan jalanan di beberapa daerah di Belgia, terutama di lingkungan yang padat dan tempat-tempat wisata populer. Selalu waspada dan jaga barang-barang berharga, seperti tas atau dompet, dengan hati-hati.</li>
        <li>Beli tiket masuk sebelumnya: Jika Anda berencana mengunjungi situs-situs wisata populer di Belgia, belilah tiket masuk sebelumnya untuk menghindari antrean yang panjang dan memastikan akses ke tempat-tempat tersebut.</li>
        <li>Perhatikan bahasa: Belgia memiliki tiga bahasa resmi, yaitu Bahasa Belanda, Bahasa Prancis, dan Bahasa Jerman. Pastikan untuk mengetahui bahasa yang digunakan di daerah yang akan Anda kunjungi dan membawa kamus atau aplikasi penerjemah jika diperlukan.</li>
        <li>Bawa uang tunai: Meskipun kartu kredit dan kartu debit diterima di banyak tempat di Belgia, ada beberapa toko atau restoran kecil yang hanya menerima uang tunai. Pastikan untuk membawa cukup uang tunai saat berjalan-jalan di Belgia.</li>
        <li>Bersiaplah untuk memakai sepatu nyaman: Banyak kota di Belgia memiliki jalan-jalan yang bersejarah dan berbatu-batu. Pastikan untuk memakai sepatu yang nyaman dan tahan lama agar bisa menikmati jalan-jalan di Belgia tanpa merasa tidak nyaman.</li>
        </ol>
        <p>Berikut adalah beberapa tips transportasi yang mungkin berguna saat berada di Belgia:</p>
        <ol>
        <li>Gunakan kartu Mobib untuk transportasi umum: Kartu Mobib adalah kartu yang dapat digunakan untuk naik transportasi umum di Belgia, seperti kereta api, bus, dan tram. Kartu ini dapat diisi ulang dan memiliki opsi harian, mingguan, bulanan, atau tahunan.</li>
        <li>Sewa sepeda untuk menjelajahi kota: Belgia adalah negara yang ramah bagi para pengendara sepeda, dan banyak kota memiliki jalur sepeda yang bagus. Anda bisa menyewa sepeda di berbagai tempat, termasuk stasiun kereta api, pusat kota, atau toko sepeda.</li>
        <li>Beli tiket kereta api lebih awal: Jika Anda merencanakan perjalanan dengan kereta api, belilah tiket lebih awal karena biasanya lebih murah. Tiket dapat dibeli secara online atau di stasiun kereta api.</li>
        <li>Parkir mobil di tempat yang aman: Jika Anda membawa mobil, pastikan untuk memarkirnya di tempat yang aman. Banyak kota di Belgia memiliki zona parkir berbayar dan waktu parkir yang terbatas.</li>
        </ol>
        <p>Gunakan aplikasi transportasi: Ada banyak aplikasi transportasi yang dapat membantu Anda merencanakan perjalanan dan mengetahui jadwal transportasi umum. Beberapa aplikasi populer di Belgia termasuk SNCB, De Lijn, dan STIB.</p>',
                'views' => 14730,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-27 00:51:09',
            ],
            [
                'id' => 3,
                'name' => 'Perancis',
                'title' => 'Kota-kota wisata yang menarik di Perancis',
                'slug' => 'perancis',
                'international' => 'France',
                'codes' => 'fr',
                'latitude' => '46.71109',
                'longitude' => '1.7191036',
                'keywords' => '',
                'description' => '<p class="dropcap">Perancis adalah salah satu negara terpopuler di Eropa yang menawarkan banyak tempat wisata menarik. Berikut adalah beberapa tempat wisata di Perancis dan beberapa pilihan hotel yang dapat Anda pertimbangkan saat berwisata di sana:</p>
        <ol>
        <li>Paris - Kota Cinta dan Cahaya: Paris adalah kota yang menakjubkan dengan begitu banyak atraksi wisata, seperti Menara Eiffel, Louvre Museum, Champs-Élysées, dan Notre-Dame Cathedral. Beberapa pilihan hotel yang terkenal di Paris adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Hotel La Comtesse Paris" href="https://www.booking.com/hotel/fr/hotel-la-comtesse-by-elegancia.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel La Comtesse Paris</a>: Terletak di arrondissement ke-7 Paris, hotel ini memiliki pemandangan yang indah ke Menara Eiffel dan terletak dekat dengan Champs de Mars dan Invalides.</li>
        <li><a title="Hôtel de Crillon" href="https://www.booking.com/hotel/fr/de-crillon-paris.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hôtel de Crillon</a>: Terletak di arrondissement ke-8 Paris, hotel mewah ini adalah bekas kediaman kerajaan yang memiliki dekorasi yang indah dan bersejarah.</li>
        </ul>
        </li>
        </ul>
        <ol start="2">
        <li>French Riviera - Pantai, Matahari, dan Glamor: French Riviera atau Côte d\'Azur adalah destinasi pantai populer di Perancis, terkenal dengan pemandangan laut yang indah, pantai pasir putih, dan kehidupan malam yang glamor. Beberapa pilihan hotel yang dapat Anda pertimbangkan di sini adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Hôtel Martinez Cannes" href="https://www.booking.com/hotel/fr/martinez.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hôtel Martinez Cannes</a>: Terletak di kota Cannes, hotel mewah ini bersebelahan dengan pantai dan memiliki kolam renang dan fasilitas spa yang lengkap.</li>
        <li><a title="Grand Hyatt Cannes Hôtel Martinez" href="https://www.booking.com/hotel/fr/martinez.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Grand Hyatt Cannes Hôtel Martinez</a>: Juga terletak di Cannes, hotel ini menawarkan pemandangan laut yang menakjubkan dan dilengkapi dengan fasilitas olahraga dan spa yang lengkap.</li>
        </ul>
        </li>
        </ul>
        <ol start="3">
        <li>Normandia - Pemandangan yang Spektakuler dan Sejarah yang Kaya: Normandia terletak di sebelah barat laut Perancis dan menawarkan pemandangan yang spektakuler seperti pantai berbatu-batu, tebing yang menjulang tinggi, dan kebun-kebun apel. Beberapa pilihan hotel yang terkenal di Normandia adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Le Clos Saint Martin Hotel &amp; Spa" href="https://www.booking.com/hotel/fr/hotelleclossaintmartin.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Le Clos Saint Martin Hotel &amp; Spa</a>: Terletak di kota Saint-Martin-de-Ré, hotel ini terletak dekat dengan pantai dan menawarkan pemandangan laut yang menakjubkan serta fasilitas spa yang lengkap.</li>
        <li><a title="Château la Chenevière" href="https://www.booking.com/hotel/fr/chateau-la-cheneviere.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Château la Chenevière</a>: Terletak di dekat kota Bayeux, hotel ini adalah bekas kastil abad ke-18 yang indah, dengan taman yang luas dan dilengkapi dengan kolam renang dan fasilitas spa yang lengkap.</li>
        </ul>
        </li>
        </ul>
        <ol start="4">
        <li>Bordeaux - Kota Anggur yang Terkenal: Bordeaux adalah kota terkenal di Perancis yang dikenal karena keindahan arsitekturnya dan kebun anggur terkenal yang menghasilkan anggur terbaik di dunia. Beberapa pilihan hotel yang terkenal di Bordeaux adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="InterContinental Bordeaux" href="https://www.booking.com/hotel/fr/grand-hotel-bordeaux-spa.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2">InterContinental Bordeaux</a> - Le Grand Hotel: Terletak di pusat kota Bordeaux, hotel mewah ini menawarkan kamar-kamar yang indah dan mewah, serta fasilitas spa yang lengkap.</li>
        <li><a title="Yndo Hotel Bordeaux" href="https://www.booking.com/hotel/fr/yndo.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Yndo Hotel Bordeaux</a>: Terletak di kawasan yang tenang di Bordeaux, hotel ini adalah bekas mansion abad ke-19 yang indah dan menawarkan pengalaman menginap yang unik dan berbeda.</li>
        </ul>
        </li>
        </ul>
        <ol start="5">
        <li>Provence - Bukit Lavender dan Desa-desa yang Memukau: Provence adalah daerah yang terkenal dengan bukit lavender, desa-desa kuno yang indah, dan ladang anggur. Beberapa pilihan hotel yang dapat Anda pertimbangkan di Provence adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="La Bastide de Gordes" href="https://www.booking.com/hotel/fr/la-bastide-de-gordes-spa.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">La Bastide de Gordes</a>: Terletak di desa Gordes, hotel ini adalah bekas kastil abad ke-16 yang telah direnovasi menjadi hotel mewah yang menawarkan pemandangan indah ke bukit lavender.</li>
        <li><a title="Villa La Coste" href="https://www.booking.com/hotel/fr/awesome-home-in-st-victor-la-coste-with-outdoor-swimming-pool-wifi-and-private-s.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Villa La Coste</a>: Terletak di kawasan Pertanian La Coste, hotel ini menawarkan pengalaman menginap yang unik dengan kamar-kamar yang indah dan dilengkapi dengan galeri seni dan restoran bintang Michelin.</li>
        </ul>
        </li>
        </ul>
        <ol start="6">
        <li>Mont Saint-Michel - Tempat Suci dan Keajaiban Arsitektur: Mont Saint-Michel adalah sebuah pulau kecil di pantai Normandia yang terkenal dengan biara abad pertengahan yang menakjubkan. Beberapa pilihan hotel yang terdekat dengan Mont Saint-Michel adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Le Mouton Blanc" href="https://www.booking.com/hotel/fr/le-mouton-blanc-le-mont-saint-michel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Le Mouton Blanc</a>: Terletak di dekat Mont Saint-Michel, hotel ini menawarkan pemandangan indah ke biara dan memiliki restoran yang terkenal dengan hidangan lautnya.</li>
        <li><a title="Hôtel de la Digue" href="https://www.booking.com/hotel/fr/de-la-digue.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hôtel de la Digue</a>: Terletak di desa Genêts, hotel ini adalah hotel kecil yang terletak di tepi pantai dan menawarkan pemandangan indah ke Mont Saint-Michel.</li>
        </ul>
        </li>
        </ul>
        <p>Itulah beberapa tempat wisata populer di Perancis beserta beberapa pilihan hotel di sekitarnya. Pastikan untuk merencanakan perjalanan Anda dengan baik dan mempertimbangkan tempat-tempat wisata dan hotel yang sesuai dengan preferensi dan anggaran Anda.</p>',
                'short_desc' => 'Negara Perancis seluas 547.030 km2 wilayah negara terluas di  Uni Eropa dan sedikit lebih besar dari Spanyol, Perancis memiliki berbagai macam lanskap, mulai dataran pantai utara sampai barat hingga jejaring pegunungan Alpen tenggara, Massif Central tengah-selatan, Pyrenees baratdaya. Ketinggian 4.807 meter diatas permukaan laut, titik tertinggi Eropa Barat, Mont Blanc, terletak Alpen perbatasan antara Perancis. Italia memiliki sistem sungai panjang seperti Loire, Garonne, Seine, Rhône membelah Massif Central dari Alpen lalu mengalir ke Laut Mediterania Camargue, titik terendah Perancis 2m dibawah permukaan laut Corsica letaknya dilepas pantai Mediterania.',
                'to_see' => '<strong>Menara Eiffel</strong><br>Jangan lupakan yang satu ini. Tidak ada tempat lain yang memberikan nuansa seperti ini, seberapa tinggipun anda pergi. Pemandangan Paris dari ketinggian 1000 kaki (lebih dari 300 meter) terasa tidak kurang dari sesuatu yang magis. Terdapat dua restoran dimana wisatawan dapat menikmati masakan khas Perancis, juga toko-toko cinderamata yang semuanya paling diminati terutama pada malam hari.<br><div><br></div><div><strong>Rafting dan Canoeing</strong><br>Berselancar dan berkanoe merupakan kegiatan yang paling populer bagi wisatawan.  Banyak sekali sungai yang selain indah, tenang juga cocok untuk melakukan aktivitas ini. Bagi wisatawan yang berjiwa petualang terdapat sungai yang cocok untuk berselancar dengan kecepatan tinggi karena tingkat kelurusannya, yang terbagi atas 5 tingkat kecepatan.<br></div><div><br></div><div><strong>Menikmati anggur di Bordeaux</strong><br>Perancis tidak dapat dipisahkan dari anggur. Hampir setiap kegiatan santap selalu dibarengi dengan minum anggur. Beberapa jenis anggur terbaik di dunia diproduksi di berbagai tempat tersebar di seluruh dataran Perancis. Setiap wilayah memproduksi anggur yang berbeda tergantung dari buah anggur serta jenis tanah. Tempat-tempat produsen anggur penting di Perancis adalah di Alsace, Champagne, dan Rh<br></div><div><br></div><div><strong>Bermain ski menuruni lereng Alpen Perancis. </strong><br>Tidak ada tempat yang melebihi Alpen Perancis untuk menikmati bermain ski . Alpen Perancis merupakan salah satu resort di Eropa yang terindah dan terlengkap peralatannya. Tidak sia-sia wisatawan merogoh kocek lebih dalam untuk kelebihan ini. Namun bagi mereka yang memilih tempat yang lebih murah tersedia resort yang lokasinya tidak terlalu tinggi di dekat Pyrenees. Bulan-bulan Desember dan Januari merupakan saat terbaik untuk bermain ski.<br></div><div><br></div><div><strong>Bersepeda di Perancis.</strong><br>Bersepeda merupakan Olah raga yang paling populer di Perancis, ingat Tour de France. Tempat-tempat terbaik untuk kegiatan ini adalah di sekitar resort Alpin dari Annecy dan Chambery, bagi pemain profesional, sedangkan Brittany, Normandi dan pantai Atlantic bagi para pemula. Dianjurkan menggunakan pemandu agar tidak tersesat.<br></div><div><br></div><div><strong>Wisata berjalan sepanjang jalur hijau</strong><br>Hampir di semua sudut Perancis dianugerahi dengan rute pejalan kaki yang indah, yang jumlahnya ribuan kilometer. Sebelum mulai berpetualang jalan kaki ini ada baiknya umtuk melihat peta yang diterbitkan di Perancis. Terdapat petunjuk yang jelas mengenai lokasi, jarak serta kesulitan yang mungkin dihadapi.<br></div><div><br></div><div><strong>Menyeruput secangkir kopi di kafe teras di Montpellier </strong><br>Minum kopi di kafe merupakan Kegiatan terpopuler di Perancis, sehingga minum kopi disebut sebagai ‘aktivitas nasional’.  Lokasi ini merupakan pusat terramai, alun-alun terluas di Perancis, gedung opera, Three Graces Fountain yang didominasi oleh kafe-kafe besar. Dengan bangku-bangku menghadap ke alun-alun, wisatawan menikmati gambaran tentang Perancis yang spektakuler dan hebat.<br></div><div><br></div><div><strong>Poem Hotel</strong><br>Menginap di hotel dengan berbagai model serta disain di seluruh dunia merupakan hal yang biasa. Namun di hotel Apostrophe wisatawan ditawari hal lain. Ini adalah “poem hotel” pertama di dunia. Ide hotel ini muncul dari 3 orang dengan profesi yang berbeda: Vincent Bastie, seorang arsitek, Sandrine Alouf, seorang penata interior dan Catherine Feff, pelukis. Mereka menjuguhkan kemampuan mereka dengan mendisain hotel tersebut dengan teks puitis dilatari dengan elemen-elemen visual lain yang memberikan sentuhan artistik.<br></div><div><br></div><div><strong>Makanan Crepes kaki lima Paris</strong><br>Berjalan sepanjang jalan di Paris merupakan suatu keharusan setiap kali wisatawan harus merogoh kocek, tidak murah pula. Paris memberikan imbalan pada setiap sen yang dibelanjakan. Jadi? Cobalah kudapan Crepe. Makanan yang dihidangkan dengan berbagai jenis makanan lain seperti kacang tanah, kenari, jeruk, pisang, keju, jamur, ham, bayem, salmon dll. dinilai sangat lezat. Kudapan ini antara lain dapat dijumpai di Place de Republique.<br></div><div><br></div><div><strong>Penginapan murah di Le Meubles Du Soleil di Nice</strong><br>Tidak diragukan lagi bahwa Perancis merupakan tempat yang mahal untuk wisatawan dengan biaya terbatas. Diperlukan kocek  yang tebal untuk menikmati restoran yang eksotik dengan anggur yang paling baik. Namun ini bukan berarti wisatawan harus tidur di serambi toko, karena tersedia sebuah penginapan di 18 bus, rue Biscarra di Nice, Residence Le Meubles Du Soleil. Sebuah hotel murah namun dengan kamar mandi yang bersih, akomodasi lengkap,   serta dapur dengan segala perkakasnya. Pada musim liburan hotel ini akan penuh sesak oleh tamu-tamu yang berdatangan dari segala penjuru.<br></div><div><br></div><div><strong>Permadani Bersejarah dari kota Bayeux</strong><br>Permadani dari abad ke 11 yang merupakan dokumentasi sejarah invasi kerajaan Inggris ke semenanjung Normandia. Tenun sulam sepanjang 230 kaki itu menggambarkan  petikan adegan peperangan dalam Pertempuran Hasting yang dipimpin oleh William si Penakluk. Sebuah kreasi seni, komposisi warna yang indah pemandangan dalam cuplikan adegan perang yang berdarah-darah, makhlukmakhluk mitos dan aspekaspek kekunoan berbeda yang menggambarkan suasana saat itu.<br></div><div><br></div><div><strong>Perburuan Seni di Museum Karya Matisse</strong><br>Karya seni pelukis besar Perancis Henri Matisse menemukan tempat yang serasi dalam musium di kota Nice ini. Bangunan berbentuk villa dari abad ke 17 ini menjadi tempat tinggal seniman ini selama 37 tahun masa kreatif kesenimanannya. Keasrian alam disekitarnya sungguh merangsang rasa seni setiap orang yang memandangnya. Di tempat ini dapat anda nikmati pameran karyakarya Matisse dalam skala kecil.<br></div><div><br></div><div><strong>Disneyland Perancis</strong><br>Tempat hiburan yang satu ini akan selalu menarik minat bagi anakanak , muda dan tua dengan berbagai petualangan dan hiburan yang tak dapat dilewatkan begitu saja. Merupakan tempat wisata keluarga yang selalu penuh dikunjungi. Fasilitas menginap seperti hotel dan berbagai restoran dan tentu saja tersedia berbagai pertunjukan ala Disney seperti Studio Walt Disney, Frontierland, Fantasyland, Adventureland, bahkan lapangan golf dan tempat hiburan keluarga seperti berbagai  macam wahana melengkapinya.<br></div>',
                'eatdrink' => '<p>Berikut adalah beberapa restoran Indonesia di Perancis:</p>
        <ol>
        <li>Warung Bali - Restoran ini menawarkan masakan Bali yang autentik dan terkenal dengan hidangan seperti nasi campur Bali, satay, dan bebek betutu. Alamat: 22 Rue de la Chapelle, 75018 Paris, Prancis.</li>
        <li>Djakarta Bali - Restoran ini menawarkan hidangan Indonesia yang beragam seperti nasi goreng, mie goreng, dan rendang sapi. Alamat: 119 Rue de Belleville, 75019 Paris, Prancis.</li>
        <li>Bali Bowls - Restoran ini menawarkan hidangan sehat seperti smoothie bowl, salad, dan nasi goreng khas Bali. Alamat: 2 Rue Th&eacute;odule Ribot, 75017 Paris, Prancis.</li>
        <li>Sari Rasa - Restoran ini menyajikan hidangan Indonesia yang bervariasi, termasuk nasi goreng, mie goreng, dan sate. Alamat: 27 Rue de la Roquette, 75011 Paris, Prancis.</li>
        <li>The Bali - Restoran ini menawarkan hidangan Indonesia yang beragam seperti nasi goreng, sate, dan mie goreng. Alamat: 2 Rue Guillaume Bertrand, 75011 Paris, Prancis.</li>
        </ol>
        <p>Pastikan untuk memeriksa jam operasional dan membuat reservasi terlebih dahulu sebelum mengunjungi restoran Indonesia di Perancis ini.</p>
        <p>Perancis dikenal sebagai surganya kuliner dengan berbagai hidangan lezat dan makanan yang terkenal di seluruh dunia. Berikut adalah beberapa wisata kuliner yang harus dikunjungi saat berada di Perancis:</p>
        <ol>
        <li>Menikmati kue croissant di Paris - Croissant yang lezat adalah kue khas Perancis yang terbuat dari lapisan-lapisan roti yang tipis dan ringan.</li>
        <li>Mencicipi macarons di Ladur&eacute;e - Ladur&eacute;e adalah toko kue terkenal di Paris yang menawarkan berbagai macaron yang lezat.</li>
        <li>Menikmati raclette dan fondue di Alpen - Raclette adalah hidangan Perancis yang terbuat dari keju yang dilelehkan dan disajikan dengan kentang, daging, dan sayuran. Fondue juga merupakan hidangan khas Perancis yang terbuat dari keju dilelehkan dan dimakan dengan roti atau daging.</li>
        <li>Mencicipi makanan laut di Bretagne - Bretagne adalah wilayah di Perancis yang terkenal dengan hidangan lautnya, termasuk kue ikan dan kerang.</li>
        <li>Mencoba escargot - Escargot adalah hidangan Perancis yang terbuat dari siput yang dimasak dengan bawang putih, mentega, dan parsley.</li>
        <li>Menikmati saus b&eacute;arnaise di Toulouse - Saus b&eacute;arnaise adalah saus khas Perancis yang terbuat dari kuning telur, mentega, bawang putih, dan cabai.</li>
        <li>Mencicipi kue tarte Tatin - Tarte Tatin adalah kue apel Perancis yang terbalik dan dimasak dengan mentega dan gula.</li>
        </ol>
        <p>Pastikan untuk mencoba berbagai hidangan lezat ini saat berada di Perancis dan menikmati wisata kuliner yang tidak terlupakan.</p>
        <p>Berikut adalah beberapa tips makan di Perancis yang bisa Anda gunakan saat berwisata kuliner di negara ini:</p>
        <ol>
        <li>Cobalah hidangan lokal - Perancis terkenal dengan hidangan lezat dan banyak jenis makanan yang khas dari tiap daerahnya. Pastikan untuk mencoba makanan dan minuman lokal yang menjadi spesialisasi setiap daerah.</li>
        <li>Berani mencoba hal baru - Perancis terkenal dengan masakannya yang unik dan kadang-kadang eksentrik. Jangan takut untuk mencoba hal baru, seperti makanan laut yang masih hidup atau bagian dari hewan yang tidak biasa.</li>
        <li>Pilih restoran lokal - Restoran lokal sering menyajikan hidangan dengan bahan-bahan segar dan berkualitas tinggi. Cobalah mencari restoran yang didirikan oleh pemilik asli Perancis atau restoran yang lebih kecil dan lebih intim.</li>
        <li>Periksa jam buka restoran - Banyak restoran di Perancis memiliki jam buka yang pendek dan jam istirahat yang panjang. Pastikan untuk memeriksa jadwal restoran sebelum pergi ke sana agar Anda tidak kecewa ketika restoran sedang tutup.</li>
        <li>Pahami etiket makan - Perancis memiliki aturan etiket makan yang berbeda dari negara lain. Misalnya, jangan memakan roti dengan tangan Anda atau tidak memotong keju dengan pisau. Jadi, pastikan untuk mempelajari etiket makan sebelum pergi ke Perancis.</li>
        <li>Buat reservasi di restoran - Beberapa restoran terkenal di Perancis sering penuh atau memiliki waktu tunggu yang lama. Pastikan untuk membuat reservasi sebelumnya untuk menghindari waktu tunggu yang lama atau kecewa jika restoran penuh.</li>
        </ol>
        <p>Dengan menggunakan tips ini, Anda akan dapat menikmati makanan dan minuman terbaik Perancis dengan cara yang tepat dan merasakan keunikan pengalaman wisata kuliner Perancis yang tak terlupakan.</p>',
                'shopping' => '<p>Perancis memiliki beberapa pusat perbelanjaan yang populer dan menawarkan pengalaman belanja yang berbeda-beda. Berikut adalah beberapa pusat perbelanjaan terkenal di Perancis:</p>
        <ol>
        <li>Galeries Lafayette, Paris: Terletak di pusat kota Paris, Galeries Lafayette adalah pusat perbelanjaan terkenal yang menawarkan berbagai pilihan barang-barang mewah dari merek ternama seperti Chanel, Dior, dan Louis Vuitton.</li>
        <li>Le Bon Marché, Paris: Merupakan pusat perbelanjaan tertua di Paris dan menawarkan berbagai barang-barang mewah dari merek-merek ternama seperti Balenciaga, Gucci, dan Saint Laurent.</li>
        <li>Printemps, Paris: Terletak di dekat Galeries Lafayette, Printemps adalah pusat perbelanjaan yang menawarkan berbagai barang mewah dan aksesori dari merek-merek terkenal.</li>
        <li>Cap 3000, Nice: Terletak di Nice, Cap 3000 adalah pusat perbelanjaan besar yang menawarkan berbagai pilihan barang-barang mewah dari merek-merek terkenal.</li>
        <li>Polygone Riviera, Cagnes-sur-Mer: Terletak di Cagnes-sur-Mer, Polygone Riviera adalah pusat perbelanjaan modern dan terbesar di Perancis dengan berbagai toko-toko dari merek-merek internasional.</li>
        <li>Les Terrasses du Port, Marseille: Terletak di Marseille, Les Terrasses du Port adalah pusat perbelanjaan modern yang menawarkan berbagai toko-toko dari merek-merek internasional serta pemandangan laut yang indah.</li>
        <li>Euralille, Lille: Terletak di Lille, Euralille adalah pusat perbelanjaan besar yang menawarkan berbagai toko-toko dari merek-merek ternama serta pusat bioskop dan restoran.</li>
        </ol>
        <p>Itulah beberapa pusat perbelanjaan terkenal di Perancis yang menawarkan berbagai pilihan barang-barang mewah dan pengalaman berbelanja yang menyenangkan.</p><h3>Merek-merek Perancis</h3>
        <p>Paris terkenal dengan fashionnya yang elegan dan glamor, sehingga terdapat banyak butik terkenal di kota ini. Berikut adalah beberapa butik terkenal di Paris:</p>
        <ol>
        <li>Chanel: Chanel adalah merek fashion ikonik yang berasal dari Paris. Butik Chanel di Rue Cambon, Paris terkenal karena desain interior yang elegan dan klasik.</li>
        <li>Dior: Dior juga merupakan merek fashion ternama yang berasal dari Paris. Butik Dior di Avenue Montaigne terkenal karena arsitektur yang elegan dan klasik.</li>
        <li>Louis Vuitton: Louis Vuitton adalah merek fashion mewah yang berasal dari Paris. Butik Louis Vuitton di Avenue des Champs-Élysées terkenal karena koleksi tas dan aksesorisnya yang ikonik.</li>
        <li>Hermès: Hermès adalah merek fashion mewah yang berasal dari Paris dan terkenal karena koleksi aksesorisnya yang ikonik, seperti selendang dan syal. Butik Hermès di Rue du Faubourg Saint-Honoré terkenal karena desain interior yang elegan dan klasik.</li>
        <li>Saint Laurent: Saint Laurent adalah merek fashion mewah yang berasal dari Paris. Butik Saint Laurent di Rue Saint-Honoré terkenal karena desain interior yang glamor dan modern.</li>
        <li>Givenchy: Givenchy adalah merek fashion mewah yang berasal dari Paris dan terkenal karena koleksi haute couture-nya. Butik Givenchy di Avenue George V terkenal karena desain interior yang elegan dan modern.</li>
        </ol>
        <p>Itulah beberapa butik terkenal di Paris yang menawarkan fashion mewah dan elegan dengan desain interior yang menarik dan ikonik.</p>
        <p>Bagi penggemar Hermès, berikut ini adalah beberapa butik Hermès di Paris yang terkenal:</p>
        <ol>
        <li>Hermès Faubourg Saint-Honoré - Alamat: 24 Rue du Faubourg Saint-Honoré, 75008 Paris, Prancis</li>
        <li>Hermès Sèvres - Alamat: 17 Rue de Sèvres, 75006 Paris, Prancis</li>
        <li>Hermès George V - Alamat: 50 Avenue George V, 75008 Paris, Prancis</li>
        <li>Hermès Marignan - Alamat: 28 Avenue Marignan, 75008 Paris, Prancis</li>
        <li>Hermès Rive Gauche - Alamat: 690-692 Rue Saint-Honoré, 75001 Paris, Prancis</li>
        <li>Hermès Saint-Germain - Alamat: 170 Boulevard Saint-Germain, 75006 Paris, Prancis</li>
        <li>Hermès Montaigne - Alamat: 42 Avenue Montaigne, 75008 Paris, Prancis</li>
        </ol>
        <p>Perlu diingat bahwa beberapa butik Hermès mungkin memiliki persediaan dan koleksi yang berbeda-beda, tergantung pada lokasinya. Jadi, jika Anda mencari tas atau produk Hermès yang spesifik, pastikan untuk memeriksa dengan toko Hermès yang ingin Anda kunjungi terlebih dahulu untuk memastikan ketersediaannya.</p>
        <p><img style="width: 237.5px; height: 280.646px; float: right; margin-right:5px" src="/assets/images/custom/hermes.jpg" class="img-rounded">Membeli tas Birkin atau Kelly sangat sulit karena keduanya dianggap sebagai tas paling eksklusif dan bergengsi di dunia. Tas-tas ini diproduksi oleh perusahaan mode mewah asal Prancis, Hermès, dan memiliki harga yang sangat mahal, dengan harga awal sekitar $10.000 hingga lebih dari $100.000 untuk edisi terbatas.</p>
        <p>Namun, harga yang tinggi bukan satu-satunya alasan mengapa sulit untuk membeli tas Birkin atau Kelly. Hermès memiliki sistem penjualan yang sangat ketat dan sulit untuk diakses. Biasanya, tas-tas ini hanya tersedia di toko-toko resmi Hermès yang sangat terbatas jumlahnya di seluruh dunia, dan biasanya hanya tersedia dalam jumlah yang sangat terbatas, sering kali terbatas pada warna dan bahan tertentu.</p>
        <p>Selain itu, Hermès juga memiliki kebijakan pengadaan yang sangat ketat dan selektif terhadap pelanggan yang bisa membeli tas Birkin atau Kelly. Pelanggan biasanya harus memiliki hubungan jangka panjang dengan Hermès, dan harus membeli sejumlah produk lain sebelum mereka dapat membeli tas Birkin atau Kelly.</p>
        <p>Semua faktor di atas menjadikan membeli tas Birkin atau Kelly sangat sulit dan eksklusif, sehingga membuatnya menjadi barang yang sangat diidamkan oleh kolektor dan penggemar mode di seluruh dunia.</p><p class="text-muted"><span style="font-weight: bold; font-style: italic; font-size: 12px;">Gambar kartu nama Hermès di atas terdapat kode QR yang dapat discan untuk membuka formulir pendaftaran di butik Hermès.&nbsp;</span></p>',
                'others' => '<p>Berikut adalah beberapa tips wisata di Perancis yang dapat membantu Anda merencanakan perjalanan Anda ke negara ini:</p>
        <ol>
        <li>Rencanakan dengan baik - Pastikan Anda merencanakan perjalanan Anda dengan baik, termasuk transportasi, akomodasi, dan jadwal kunjungan ke tempat-tempat yang ingin Anda kunjungi.</li>
        <li>Kenali musim wisata - Musim wisata di Perancis dapat sangat sibuk, terutama selama musim panas. Jika Anda ingin menghindari kerumunan, pertimbangkan untuk mengunjungi pada musim yang kurang sibuk.</li>
        <li>Gunakan transportasi umum - Perancis memiliki sistem transportasi umum yang luas dan efisien. Gunakan kereta api atau bus untuk menghemat uang dan menghindari masalah parkir yang sulit di kota-kota besar.</li>
        <li>Beli tiket sebelumnya - Jika Anda ingin mengunjungi tempat-tempat populer seperti Menara Eiffel, Louvre, atau Istana Versailles, pastikan untuk membeli tiket sebelumnya untuk menghindari antrian panjang.</li>
        <li>Pelajari bahasa Perancis - Banyak orang di Perancis yang tidak menguasai bahasa Inggris dengan baik, jadi pelajari beberapa frasa bahasa Perancis dasar untuk membantu komunikasi Anda dengan penduduk setempat.</li>
        <li>Coba makanan lokal - Perancis terkenal dengan masakannya yang lezat dan kaya akan bahan-bahan segar. Cobalah hidangan lokal seperti croissant, quiche, atau escargot untuk merasakan keunikan wisata kuliner Perancis.</li>
        <li>Berjalan kaki - Banyak kota di Perancis memiliki jalan-jalan yang indah dan pemandangan yang menakjubkan. Jelajahi kota-kota ini dengan berjalan kaki untuk merasakan suasana dan pemandangan yang berbeda.</li>
        <li>Patuhi aturan lalu lintas - Jika Anda berencana untuk mengemudi di Perancis, pastikan untuk memahami aturan lalu lintas dan memperhatikan tanda-tanda jalan. Perancis juga menerapkan sistem pengukuran jarak yang berbeda, yaitu kilometer, jadi pastikan untuk memperhatikan tanda-tanda jalan dan GPS Anda.</li>
        </ol>
        <p>Dengan mengikuti tips ini, Anda akan dapat menikmati wisata di Perancis dengan lebih mudah dan lebih menyenangkan. Selamat menjelajahi Perancis!</p>
        <p>Berikut ini adalah beberapa tips jalan-jalan khusus di Paris:</p>
        <ol>
        <li>Gunakan Transportasi Umum: Paris memiliki transportasi umum yang sangat baik, sehingga disarankan untuk menggunakan kereta bawah tanah (metro) atau bus untuk menjelajahi kota. Selain itu, Paris juga memiliki program sepeda gratis yang disebut Velib, yang memungkinkan pengunjung untuk menyewa sepeda dengan harga yang terjangkau.</li>
        <li>Jangan Lupa Berjalan Kaki: Paris adalah kota yang indah dan penuh dengan arsitektur yang menakjubkan, jadi jangan lupa untuk menjelajahi kota dengan berjalan kaki. Ada banyak jalan kecil dan taman yang indah yang hanya bisa diakses dengan berjalan kaki.</li>
        <li>Kunjungi Wisata Gratis: Paris memiliki banyak wisata gratis yang bisa dikunjungi, seperti Notre Dame, Jardin du Luxembourg, dan Pere Lachaise Cemetery. Selain itu, banyak museum dan monumen di Paris yang memberikan diskon bagi wisatawan dengan usia di bawah 26 tahun.</li>
        <li>Kunjungi Pasar: Pasar di Paris adalah tempat yang tepat untuk mencicipi makanan lokal dan membeli suvenir yang unik. Ada beberapa pasar yang harus dikunjungi, seperti March&eacute; aux Fleurs di Ile de la Cit&eacute; dan March&eacute; aux Puces de Saint-Ouen, pasar loak terbesar di Paris.</li>
        <li>Kenali Jadwal Museum: Museum di Paris sering kali tutup pada hari Senin atau Selasa, jadi pastikan untuk memeriksa jadwal museum sebelum berkunjung. Selain itu, banyak museum juga menawarkan hari gratis pada hari tertentu, jadi pastikan untuk memeriksa informasi tersebut.</li>
        <li>Jangan Terlalu Banyak Makan: Makanan di Paris sangat lezat dan menggoda, namun pastikan untuk tidak makan terlalu banyak. Restoran di Paris biasanya memberikan porsi yang cukup besar, jadi pastikan untuk membagi porsi dengan teman atau keluarga Anda.</li>
        <li>Kunjungi Sebentar: Paris adalah kota yang besar dan padat, sehingga disarankan untuk mengatur jadwal perjalanan Anda dengan baik. Jangan mencoba untuk melihat semua hal dalam satu kunjungan, cobalah untuk mengunjungi beberapa tempat yang benar-benar ingin Anda lihat dan nikmati waktu Anda di kota ini.</li>
        </ol>
        <p>Berikut adalah beberapa tips dan informasi mengenai transportasi di Paris:</p>
        <ol>
        <li>Metro: Metro Paris merupakan salah satu cara yang paling efisien dan cepat untuk berkeliling di kota ini. Metro beroperasi dari pukul 05.30 pagi hingga 01.15 tengah malam, dan terdiri dari 16 jalur dengan 300 stasiun. Untuk naik metro, Anda bisa membeli tiket tunggal di mesin tiket yang tersedia di stasiun metro.</li>
        <li>Bus: Bus juga merupakan pilihan yang baik untuk berkeliling di Paris, terutama jika Anda ingin menikmati pemandangan kota. Anda dapat membeli tiket tunggal di dalam bus, namun lebih baik membeli tiket harian atau mingguan jika Anda akan menggunakan transportasi umum secara intensif.</li>
        <li>Taksi: Taksi tersedia di seluruh Paris dan bisa dipanggil di jalan atau melalui aplikasi pemesanan taksi. Pastikan untuk menggunakan taksi resmi dengan argo yang terpasang.</li>
        <li>RER: RER adalah kereta komuter yang menghubungkan Paris dengan kota-kota di sekitarnya. RER juga bisa digunakan untuk menuju bandara Charles de Gaulle dan Paris-Orly.</li>
        <li>Sewa sepeda: Jika Anda ingin menjelajahi Paris dengan cara yang lebih santai, maka menyewa sepeda bisa menjadi pilihan yang baik. Terdapat banyak tempat penyewaan sepeda di Paris, termasuk sistem sepeda berbagi kota yang disebut "Velib".</li>
        <li>Walking: Paris adalah kota yang indah untuk dijelajahi dengan berjalan kaki. Banyak tempat wisata yang berdekatan sehingga Anda dapat berjalan kaki dari satu tempat ke tempat lainnya.</li>
        <li>Navigo Pass: Jika Anda berencana untuk menggunakan transportasi umum secara intensif selama kunjungan Anda di Paris, maka Navigo Pass bisa menjadi pilihan yang baik. Navigo Pass adalah tiket mingguan atau bulanan yang memberikan akses tak terbatas ke seluruh sistem transportasi umum di Paris, termasuk metro, bus, dan RER. Tiket ini dapat dibeli di stasiun metro dan RER.</li>
        </ol>
        <p>Berikut beberapa transportasi di Perancis:</p>
        <ol>
        <li>Kereta api: Kereta api adalah salah satu cara transportasi yang paling populer di Perancis. Terdapat banyak jaringan kereta api, termasuk TGV (Train &agrave; Grande Vitesse) yang sangat cepat dan efisien. Anda dapat membeli tiket kereta api di stasiun kereta api atau secara online melalui situs web SNCF.</li>
        <li>Bus: Bus juga merupakan pilihan transportasi yang baik di Perancis. Terdapat banyak perusahaan bus yang beroperasi di Perancis, termasuk Ouibus dan Flixbus. Anda dapat membeli tiket bus secara online atau di terminal bus.</li>
        <li>Taksi: Taksi dapat ditemukan di hampir setiap kota di Perancis. Namun, perlu diingat bahwa tarif taksi di Perancis cukup mahal dan dapat bervariasi tergantung pada waktu dan tempat.</li>
        <li>Metro: Metro adalah cara transportasi yang paling efisien di Paris. Terdapat 16 jalur metro di Paris yang dapat membawa Anda ke hampir semua tempat yang ingin Anda kunjungi. Anda dapat membeli tiket metro di stasiun metro atau menggunakan kartu navigasi seperti Navigo.</li>
        <li>Sepeda: Sepeda adalah cara yang baik untuk menjelajahi kota-kota di Perancis, terutama di Paris. Terdapat banyak sistem sewa sepeda di Perancis, termasuk V&eacute;lib di Paris. Namun, perlu diingat bahwa bersepeda di Paris dapat menjadi sedikit menantang karena lalu lintas yang padat.</li>
        <li>Mobil: Jika Anda ingin mengemudi di Perancis, pastikan Anda memahami peraturan lalu lintas yang berlaku. Anda juga harus mempertimbangkan untuk membayar tol ketika menggunakan jalan raya di Perancis.</li>
        <li>Pesawat: Jika Anda ingin bepergian ke kota yang jauh dari lokasi Anda, pesawat dapat menjadi pilihan transportasi yang baik. Terdapat banyak bandara di Perancis, termasuk Bandara Internasional Charles de Gaulle di Paris.</li>
        </ol>
        <p>Itulah beberapa informasi tentang transportasi di Perancis. Pastikan Anda memilih cara transportasi yang sesuai dengan kebutuhan Anda dan selalu melakukan perencanaan sebelumnya.</p>',
                'views' => 17618,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-27 05:30:57',
            ],
            [
                'id' => 4,
                'name' => 'Jerman',
                'title' => 'Kota-kota di Jerman yang patut dikunjungi',
                'slug' => 'jerman',
                'international' => 'Germany',
                'codes' => 'de',
                'latitude' => '51.1642292',
                'longitude' => '10.4541194',
                'keywords' => '',
                'description' => '<p class="dropcap">Jerman punya konotasi dengan banyak hal - bir, makanan, sosis, keseriusan, mendaki, kastil dan pesta. Bagaimanapun juga Jerman lebih dari sekedar bir hall&nbsp;dan bratwurst. Ada seni yang dinamis dan musik di Berlin, hutan yang indah di barat, kota berserjarah diseluruh penjuru, katedral dan kastil yang agung, dan kota "sound of music" yang indah dan pegunungan alpen di selatan. Orang jerman sering dikatakan sebagai orang yang serius, yang kurang serampangan seperti tetangga mereka negara-negara Eropa selatan. Selain serius dan fokus, mereka juga baik dan orang-orang yang ringan tangan di Eropa. Mereka tidak sedingin penampilannya. Jerman adalah negara besar yang&nbsp;banyak menawarkan tempat wisata dengan&nbsp;harga terjangkau.</p>
        <p>Jerman merupakan negara dengan pariwisata yang berkembang pesat. Negara ini memiliki banyak kota-kota yang menarik dan memiliki sejarah yang kaya. Berikut adalah beberapa tempat wisata populer di Jerman:</p>
        <ol>
        <li>Berlin - Berlin adalah ibu kota Jerman dan merupakan kota yang kaya akan sejarah. Terdapat banyak tempat wisata menarik di kota ini, seperti Brandenburg Gate, Berlin Wall Memorial, Checkpoint Charlie, dan Berlin Cathedral.</li>
        <li>Munich - Munich adalah kota terbesar ketiga di Jerman dan terkenal karena festival Oktoberfest. Selain itu, kota ini memiliki banyak tempat wisata menarik seperti Marienplatz, Neuschwanstein Castle, dan BMW Museum.</li>
        <li>Frankfurt - Frankfurt adalah kota terbesar ke lima di Jerman dan merupakan pusat keuangan Eropa. Terdapat banyak tempat wisata menarik di kota ini seperti Alte Oper, Römerberg, dan St. Bartholomew\'s Cathedral.</li>
        <li>Hamburg - Hamburg adalah kota terbesar kedua di Jerman dan merupakan kota pelabuhan terbesar di Jerman. Terdapat banyak tempat wisata menarik di kota ini seperti Elbphilharmonie, St. Michaelis Church, dan Miniatur Wunderland.</li>
        <li>Cologne - Cologne adalah kota terbesar keempat di Jerman dan terkenal karena Kölner Dom, salah satu katedral paling terkenal di dunia. Selain itu, kota ini juga memiliki banyak tempat wisata menarik seperti Museum Ludwig, Cologne Zoo, dan Chocolate Museum.</li>
        </ol>
        <p>Selain itu, Jerman juga terkenal dengan keindahan alamnya, seperti Pegunungan Bavaria, Hutan Hitam, dan Lembah Rhine. Jerman juga terkenal dengan birnya yang terkenal di seluruh dunia dan memiliki banyak pabrik bir yang dapat dikunjungi.</p>',
                'short_desc' => 'German negara berbentuk federasi Eropa Barat memiliki posisi ekonomi politik sangat penting dibelahan Eropa maupun dunia dengan luas 357.021 km2 (kira-kira dua setengah kali pulau Jawa) berpenduduk sekitar 82 juta jiwa, negara dengan 16 negara bagian Bundesland/Bundesländer ini menjadi anggota kunci organisasi Uni Eropa/penduduk terbanyak, penghubung transportasi barang jasa antarnegara sekawasan juga berpenduduk imigran ketiga terbesar didunia',
                'to_see' => '<p><strong>The Summer Music Festival.<br></strong>Festival Musik Internasional&nbsp; di Jerman adalah salah satu festival musik
        klasik terbesar di dunia. Diadakan setahun sekali pada setiap musim panas yaitu
        pada akhir bulan Juli sampai awal Agustus, terletak di propinsi
        Schleswig-Holsten, juga dikenal sebagai Bayruth’s Wagner Festival. Pertunjukkan
        diselenggarakan kira-kira selama 5 minggu berturut-turut dengan&nbsp; hampir sebanyak 125 pertunjukkan dengan
        artis-artis tamu dari berbagai negara ikut serta mengambil bagian dalam
        festival ini. Sungguh suatu momen yang indah bagi para pecinta musik klasik.</p>
        <p><strong>Paket Wisata Romantis Berkendara<br></strong>Wisata Berkendara ini dapat dilalui
        dengan kendaraan bus antar kota, tidak terlalu dianjurkan karena tidak dapat
        menentukan tempat-tempat singgah sepanjang jalan, lebih dianjurkan untuk
        menggunakan kendaraan pribadi( mungkin juga dengan mobil, bersepeda motor atau
        bergowes) dari kota kecil Wurzburg ke Fussen, sepanjang kira-kira 270 km (
        Jakarta – Semarang?) , yang dapat dilalui dengan santai sambil menikmati jalan
        pedesaan , berhenti di beberapa desa, tempat-tempat bersejarah,&nbsp; mengenal budaya asli Jerman maupun pemandangan
        indah &nbsp;sepanjang jalan.&nbsp;&nbsp;</p>
        <p><strong>Wisata Ski<br></strong>Wisata Ski melali trek-trek klasik
        dapat selalu di nikmati dari puncak Zugspitze dimana terdapat banyak resor
        berkelas dunia, dapat dengan mudah dicapai dengan menggunakan cable car. Dari
        tempat itu, kala udara cerah, tampak dari kejauhan daerah perbatasan Jerman
        dengan Austria, Swiss dan Italia. Saat tepat untuk menikmati wisata ini adalah
        sekitar bulan Desember dan Januari di mana salju turun paling lebat.</p>
        <p><strong>River Cruising<br></strong>Jerman terkenal karena dialiri oleh
        banyak sungai, namun sungai Rhine dan Jerman tak dapat dipisahkan, orang yang
        kenal Jerman pasti mengenal sungai ini. Ingat Jerman , ingat Rhine! Sebetulnya
        sungai ini mengalir jauh melalui beberapa negara lain sebelum sampai ke Jerman,
        namun baru pada bagian Jerman inilah sungai Rhine menunjukkan kecantikannya. Ya
        bagian sungai yang mengalir antara kota Mainz dan Koblenz lah yang
        tercantik.&nbsp; Sepanjang tepian sungai
        tampak kebun-kebun anggur, hutan rimbun, atap-atap kastil dan hamparan
        dusun-dusun mungil yang mencolok mata. Sepanjang perjalanan ini kita lalui kota
        kuno seperti Trier yang berasal dari 2000&nbsp;
        sM. Apabila anda ingin menikmati keindahan ini pakailah paket wisata
        selama bulan September , di mana pemandangan kebun anggur tampak indah sebelum
        panen.</p>
        <p><strong>Wisata Pegunungan Alpen.<br></strong>Wisata Alpen juga dapat dinikmati
        melalui jalan-jalan gunung.&nbsp; Malahan
        wisata ini tak kalah menariknya dengan wisata ski atau wisata jalan-jalan lain
        di Jerman, pemandangan yang eksotis dan jalanan yang antik peninggalan dahulu
        kala, membawa kita untuk menikmati suguhan wisata yang istimewa negara ini.
        Selain dusun-dusun yang beraneka warna yang kita lalui sampai dengan puncak
        Zugspite yang berada pada ketinggian 3500an meter diatas permukaan laut dengan
        jalan yang mudah didaki dan dapat dinikmati karena kelandaiannya, dan tanpa
        kesulitan yang tak terduga, melalui persimpangan dengan Alpen Bavaria kita
        sampai pada pemandangan menakjubkan dari danau Konigssee. Bagian lain yang tak
        kalah menariknya adalah Taman NasionalBrechtengaden, di mana dapat dijumpai
        bermacam flora dan fauna setempat dengan tempat hiking sepanjang kurang lebih
        180 km.</p>
        <p><strong>Wisata Kuliner<br></strong>Jerman Potato Salad dapat anda
        nikmati di kota Berlin. Dari berbgai macam masakan khas Jerman ,&nbsp; masakan ini selalu menarik perhatian
        wisatawan yang mengunjungi Berlin. Selain mudah dimasak, masakan Jerman yang
        satu ini juga murah dan mudah didapat. Berasal dari abad ke 18, raja Jerman
        Frederik Agung memerintahkan rakyatnya untuk lebih banyak makan kentang, Sejak
        itu rakyat lebih banyak mengkonsumsi makanan ini bahkan sejak itu tidak ada
        pesta-pesta yang diselenggarakan tanpa menyuguhkan hidangan yang satu ini.
        Dihiasi dengan potongan daging babi, dengan tambahan gulam cukam bawang merah,
        berbagai macam bumbu, masakan ini adalah salah satu masakan yang harus
        dicicipi.&nbsp;</p>
        <p><strong>Jalan-jalan menyusuri Dinkelsbuhl, Jerman<br></strong>Pernahkah anda tahu tentang
        dongeng-dongeng kakak beradik Grimm, ataudongeng Hansel and Gretel? Mungkin kta
        lupa akan nama-nama itu, tapi mungkin kita akan selalu ingat akan cerita-cerita
        dongeng itu dan bisa membayangkan kira-kira seperti apa latar belakang dari
        dongeng-dongeng tersebut. Begitu anda memasuki kota itu langsung dapat anda
        rasakan dongeng itu hidup. Sebuah kota kecil dengan runah-runmah kecil yang
        tampak antik dari abad 13 dan 14 M dengan Town Hall dengan penanda bangun tahun
        1733, sungguh Dinkelsbuhl menjadi saksi hidup selamat dari keganasan Perang
        Dunia. Peninggalan yang mempertahankan ke kearifan lokal dan keindahan masa
        lalu sambil menikmati berbagai&nbsp; buah tangan
        yang tersedia.&nbsp; &nbsp; &nbsp;</p>
        <p><strong>Nikmati Sosis Jerman<br></strong>Orang Jerman menyebutnya WURST,
        setiap orang Jerman sangat menyukai makanan ini, bahkan tergilagila akan
        makanan yang satu ini. Dari berbagai jenis makanan, mungkin hanya sosis inilah
        yang mempunyai jenis dan rasa yang sangat bervariasi. Dalam catatan rekor, ada
        sekitar 1500 macam jenis dan pasti dapat memenuhi selera semua wisatawan.
        Tercatat bahwa ratarata seorang Jerman mengkonsumsi tidak kurang dari 67 pon
        sosis setahunnya. Cara membuatnya dipengaruhi beberapa faktor seperti&nbsp; cara&nbsp;
        mengolah daging, bumbu, pengaruh cuaca, letak geografis, dan norma-norma
        tradisionil dari si pembuatnya bercanpur menjadi satu. Cara kuno yang sederhana
        tanpa menggunakan lemak, bijibijian, campuran lainlain seperti pewarna,
        pengawet, masih dipertahankan sampai sekarang. Ya sosis polos Jerman yang
        dicaricari turis itu masih bertahan sampai sekarang.</p>
        <p><strong>Nikmati Semalam di Reeperbahnm Hamburg.<br></strong>Reeperbahn, distrik Lampu Merah di
        bagian elit kota Hamburg, merupakan pusat kota yang dipenuhi dengan
        tempat-tempat rekreasi seperti klub-klub terkenal, teater-teater, toko-toko
        musik, dan tempat-tempat hiburan “terlarang”. Tempat ini menimbulkan berbagai
        konflik pendapat, namun tak bisa dipungkiri Reeperbahn memang merupakan surga
        dengan hiburan berupa klub-klub musik dan dansa yang menyihir para
        pengunjungnya, di mana jika sedang&nbsp;
        beruntung tibatiba anda ikut bergoyang di tengahtengah pertunjukan
        konser rock atau bahkan&nbsp; musik band
        terkenal yang sedang manggung. &nbsp;</p>
        <p><strong>Berbelanja Jam Kukuk Jerman<br></strong>Jam kukuk merupakan pemandangan yang
        sering kita jumpai diberbagai tempat, di rumah-rumah maupun di museum-museum di
        Eropa, namun kabarnya Jerman adalah&nbsp;
        asalmuasal&nbsp; jam kukuk yang kita
        kenal itu. Pada tahun 1730 M, seorang pembuat jam kukuk dari Black Forest yang
        saat itu termasuk wilayah Jerman, Franz Ketterer menciptakan untuk pertama
        kalinya model jam ini. Jam dengan bentuk ukiran luar yang spesifik ini bisa
        menjadi oleh-oleh yang khas dari Jerman.</p>
        <p><strong>Galeri Scanning Leipzig.<br></strong>Kalau anda tertarik pada seni lukis
        atau patung, maka kunjungilah kota Leipzig . Tak ada tempat yang lebih menarik
        daripada Galeri yang terletak di Sachsenplatz yang didirikan pada tahun 1848
        ini. Di dalamnya terkumpul lebih dari 5000 buah koleksi seni borjuis yang tak
        ternilai harganya yang terbesar &nbsp;dari
        akhir Abad Pertengahan sampai sekarang, termasuk di dalamnya beberapa karya
        seniman-seniman seperti Bernard Heisig, Werner Tubke, Wolfgang Mattheuer, Neo
        Rauch dan Daniel Richter. Sedangkan di tempat lain seperti Sparkasse Leipzig
        dapat anda temukan hasil karya seni lokal pasca Perang Dunia juga di Leipzig
        Cotton Mill.</p>
        <p><strong>German Wine Festivals.<br></strong>Tak ada tempat lain di dunia yang
        menandingi Jerman dalam hal ini. Setiap tahun diselenggarakan lebih dari 1250
        kali. Di Jerman, festival-festival semacam ini biasa diselenggarakan di mana
        saja, di kebun anggur, kastil kuno, lapangan desa atau di jalanan kota. Pesta
        yang diadakan untuk menandai musim panen anggur di suatu tempat, biasanya
        sekitar awal musim gugur. Daerah sekitar sungai Rhine seperti daerah Rheingau
        merupakan pusat dari perayaan ini. &nbsp; &nbsp;</p>
        <p><strong>Menyelam di sungai Isar di Munich<br></strong>Sungai Isar mengalir melalui jantung
        kota Munich dan English Gardens. Pada masa yang lalu sungai ini dikhususkan
        bagi keluarga angkatan bersenjata berpangkat tinggi, tetapi saat ini terbuka
        bagi umum. Sungai ini mengalir dengan tenang sehingga nikmat untuk dipakai berenang,
        berendam, untuk diselami ataupun membiarkannya mengalir sepanjang tubuh.</p>
        <p><strong>Menikmati minum bir di Hofbrauhaus<br></strong>Lepas dari Oktoberfest, wiatawan
        dapat menimati bir Jerman di rumah Hofbrau di Munich. Tempat ini dipenuhi oleh
        suara musik diselingi hiruk pikuk penggemar musik. Mug yang tersedia semua
        berukuran raksasa sehingga dipelukan kedua tangan untuk dapat minum semua bir
        didalamnya hingga tetes terakhir. Para penikmat bir disini mempunyai pengalaman
        yang unik, tidak ada keterbatasan bahasa, setiap orang dapat berkomunikasi
        hanya dengan senyum, bahasa tubuh, dan tentu saja ‘bahasa mug’ yakni dengan
        ungkapan mengangkat mug tinggi-tinggi.</p>
        <p><strong>Spa di Jerman<br></strong>Wisatawan dapat menikmati spa di
        Jerman, rileks dan penyegaran. Terkenal akan kekuatan penyembuhannya spa Jerman
        dapat dijumpai di beberapa lokasi mata air panas yang alami.</p>
        <p>Seperti di temapt lain di dunia, spa
        Jerman mempunyai metode terapi yang unik serta teknik masase yang dapat
        meredakan kepenatan oleh perjalanan. Bukan hanya rileks dengan air panas serta
        menimati air segar dari pegunungan Alpen, wisatawan juga dapat memilih
        hidroterapi, masase dan terapi menggunakan garam dan lumpur khusus. Terdapat
        lebih dari 350 resort spa dan kesehatan, membuat Jerman terkenal akan
        kenyamanan tubuh serta proses penyembuhan.</p>
        <p><strong>Mengeksplorasi pemandangan yang terbaik.<br></strong>Wisatawan yang menginginkan melihat
        setiap tempat penting di Jerman tanpa kehilangan kesempatan menyaksikan
        tempat-tempat favorit dianjurkan untuk menikmatinya sambil berjalan-jalan. Terdapat
        berbagai aktivitas terbaik dimana wisatawan dapat berpartisipasi serta
        memperoleh kesempatan untuk terlibat secara mendalam. &nbsp;Jerman memiliki berbagai masterpiece dalam
        bentuk museum, arsitektur, tempat bersejarah serta artefak bernilai tinggi.</p>
        <p>Salaj satu yang menarik adalah
        kastil dengan segala kebesarannya, museum, gedung opera, teater dan banyak
        bangunan bersejarah lainnya. Kastil Neuschwanstein merupakan kastil yang paling
        populer di Eropa yang berwujud kastil dalam dongeng dikelilingi oleh tujuh
        gunung serta tujuh lautan. Mengunjungi dreamland yang nyata ini akan membawa
        wisatawan ke alam mimpi. Ini hanya salah satu contoh tempat wisata yang
        memikat. Datang dan nikmati negeri Jerman</p>',
                'eatdrink' => '<p>Berikut adalah beberapa restoran Indonesia di Jerman beserta alamatnya:</p>
        <ol>
        <li>Warung Bayu - Manteuffelstra&szlig;e 41, 10997 Berlin, Germany</li>
        <li>Sari Rasa - Weidenallee 20, 20357 Hamburg, Germany</li>
        <li>Angkringan - Erkrather Str. 20, 40233 D&uuml;sseldorf, Germany</li>
        <li>Batavia - Lindenstra&szlig;e 38, 50674 K&ouml;ln, Germany</li>
        <li>Tuk Tuk - Augustenstra&szlig;e 97, 70197 Stuttgart, Germany</li>
        <li>Teman Teman - Danziger Str. 27, 10435 Berlin, Germany</li>
        <li>Jakarta - Z&auml;hringerstra&szlig;e 12, 50672 K&ouml;ln, Germany</li>
        <li>Padang - Wilmersdorfer Str. 40, 10627 Berlin, Germany</li>
        <li>IndoChine - Erkrather Str. 196, 40233 D&uuml;sseldorf, Germany</li>
        <li>Koi - Bergmannstra&szlig;e 102, 10961 Berlin, Germany</li>
        </ol>
        <p>Harap diperhatikan bahwa informasi ini dapat berubah sewaktu-waktu. Sebaiknya Anda selalu memverifikasi informasi terbaru sebelum mengunjungi restoran tersebut.</p>
        <p>Berikut adalah beberapa tempat wisata kuliner di Jerman yang bisa Anda kunjungi:</p>
        <ol>
        <li>Mercado Markthalle, Hamburg: Mercado adalah pasar makanan dalam ruangan yang menawarkan berbagai jenis makanan dari seluruh dunia, seperti makanan Jerman, Asia, Mediterania, dan Amerika Latin.</li>
        <li>Viktualienmarkt, Munich: Pasar makanan terkenal di Munich yang menawarkan berbagai jenis makanan Jerman tradisional, seperti sosis, kue apel, dan bir.</li>
        <li>Ratskeller, Bremen: Restoran bawah tanah yang terletak di bawah gedung balai kota tua yang terkenal di Bremen. Restoran ini menawarkan masakan Jerman tradisional dan anggur lokal.</li>
        <li>Schwarzwaldstube, Baiersbronn: Restoran bintang tiga Michelin yang terkenal dengan masakan khas daerah Schwarzwald. Restoran ini dikenal dengan teknik memasak modern dan penyajian makanan yang indah.</li>
        <li>Restaurant Tim Raue, Berlin: Restoran yang terkenal dengan masakan Asia kontemporer yang dibuat oleh chef terkenal Tim Raue. Restoran ini juga memiliki bar yang populer di Berlin.</li>
        <li>Speicherstadt Kaffeer&ouml;sterei, Hamburg: Toko kopi tradisional yang terletak di daerah Speicherstadt Hamburg. Toko ini menawarkan kopi yang digiling secara manual dan biji kopi dari seluruh dunia.</li>
        <li>Curry 36, Berlin: Toko sosis khas Berlin yang terkenal dengan sosis currynya. Toko ini sering dikunjungi oleh turis yang mencari pengalaman kuliner di Berlin.</li>
        <li>Alte Kanzlei, Stuttgart: Restoran yang terletak di dekat Altes Schloss di Stuttgart. Restoran ini menawarkan masakan Swabia, seperti Sp&auml;tzle dan Maultaschen, serta anggur lokal.</li>
        <li>Brauhaus Lemke, Berlin: Brauhaus tradisional di Berlin yang menawarkan bir yang dipanggang secara lokal dan masakan Jerman tradisional, seperti eisbein dan kn&ouml;del.</li>
        <li>Chocolaterie Michel, Cologne: Toko cokelat khas Jerman yang terletak di pusat kota Cologne. Toko ini menawarkan berbagai jenis cokelat dan kue khas Jerman.</li>
        </ol>
        <p>Berikut adalah beberapa tips untuk makan di Jerman:</p>
        <ol>
        <li>Perhatikan Jam Makan: Orang Jerman cenderung makan secara teratur dan jam makan mereka biasanya tergolong konservatif. Sarapan biasanya dimulai sekitar pukul 6:00-7:00 pagi, makan siang antara pukul 12:00-14:00, dan makan malam antara pukul 18:00-20:00. Pastikan untuk menyesuaikan jadwal makan Anda sesuai dengan kebiasaan makan orang Jerman.</li>
        <li>Tidak Ada Tip Wajib: Di Jerman, tip tidak dianggap sebagai hal yang wajib, tetapi lebih sebagai apresiasi atas layanan yang baik. Sebagai acuan, memberikan tip sebesar 10% dari total tagihan sudah dianggap cukup.</li>
        <li>Makanan Vegetarian dan Halal: Restoran di Jerman biasanya menyediakan pilihan makanan vegetarian dan makanan halal. Pastikan untuk menanyakan kepada pelayan restoran sebelum memesan.</li>
        <li>Mencoba Masakan Lokal: Jerman memiliki beragam masakan regional yang lezat, seperti sosis, roti, dan bir. Jangan ragu untuk mencoba makanan lokal dan bereksperimen dengan variasi rasa yang ditawarkan.</li>
        <li>Air Minum: Di Jerman, air minum yang disajikan di restoran biasanya berbayar. Jika Anda tidak ingin membayar untuk air minum, Anda bisa meminta air putih biasa (Leitungswasser) yang biasanya gratis.</li>
        <li>Pembayaran: Di Jerman, pembayaran tunai masih lebih umum daripada pembayaran kartu kredit. Pastikan untuk membawa cukup uang tunai ketika makan di restoran.</li>
        <li>Makan Siang Murah: Banyak restoran di Jerman menawarkan menu makan siang (Mittagsmen&uuml;) dengan harga yang lebih terjangkau. Jangan ragu untuk mencari restoran-restoran yang menawarkan menu makan siang untuk menghemat biaya makan.</li>
        <li>Porsi Makanan Besar: Porsi makanan di restoran-restoran di Jerman biasanya cukup besar. Jangan ragu untuk meminta untuk dibungkus (einpacken) jika Anda tidak bisa makan semua makanan yang disajikan.</li>
        </ol>
        <p>Semoga tips ini membantu Anda menikmati pengalaman makan di Jerman dengan lebih menyenangkan.</p>',
                'shopping' => '<p>Berikut adalah beberapa pusat perbelanjaan terkenal di Jerman:</p>
        <ol>
        <li>Kaufhaus des Westens (KaDeWe): Merupakan pusat perbelanjaan terbesar di Berlin dan juga Jerman. KaDeWe menawarkan berbagai barang mewah dan fashion terkenal dari seluruh dunia.</li>
        <li>MyZeil: Pusat perbelanjaan modern dan inovatif di Frankfurt. MyZeil menawarkan berbagai toko dan restoran, serta memiliki desain arsitektur yang unik.</li>
        <li>Neuer Wall: Merupakan pusat perbelanjaan high-end di Hamburg yang menawarkan berbagai barang mewah dan fashion terkemuka.</li>
        <li>Zeilgalerie: Pusat perbelanjaan modern di Frankfurt yang menawarkan berbagai merek internasional dan regional, serta toko buku dan restoran.</li>
        <li>M&uuml;nster Arkaden: Pusat perbelanjaan di M&uuml;nster yang menawarkan berbagai toko dan restoran dengan desain modern dan menarik.</li>
        <li>K&ouml;nigsallee: Merupakan jalan perbelanjaan utama di D&uuml;sseldorf, dengan berbagai butik dan toko-toko high-end yang menjual barang-barang mewah.</li>
        <li>Alexa: Pusat perbelanjaan besar di Berlin yang menawarkan berbagai toko dan restoran, serta bioskop dan pusat kebugaran.</li>
        <li>Rathaus Galerie: Pusat perbelanjaan di Leverkusen yang menawarkan berbagai toko dan restoran, serta memiliki taman bermain dan panggung untuk acara musik dan hiburan lainnya.</li>
        </ol>
        <p>Berikut adalah daftar beberapa merek butik mewah dan alamat butik mereka di Jerman:</p>
        <ol>
        <li>Chanel - Neuer Wall 42, 20354 Hamburg; Maximilianstra&szlig;e 22, 80539 Munich; K&ouml;nigsallee 56, 40212 D&uuml;sseldorf</li>
        <li>Louis Vuitton - Maximilianstra&szlig;e 18, 80539 Munich; K&ouml;nigsallee 2, 40212 D&uuml;sseldorf; Neuer Wall 63, 20354 Hamburg</li>
        <li>Prada - Kurf&uuml;rstendamm 186, 10707 Berlin; Maximilianstra&szlig;e 12, 80539 Munich; K&ouml;nigsallee 46, 40212 D&uuml;sseldorf</li>
        <li>Gucci - K&ouml;nigsallee 16, 40212 D&uuml;sseldorf; Maximilianstra&szlig;e 22, 80539 Munich; Neuer Wall 57, 20354 Hamburg</li>
        <li>Herm&egrave;s - Neuer Wall 5, 20354 Hamburg; Maximilianstra&szlig;e 22, 80539 Munich; K&ouml;nigsallee 31, 40212 D&uuml;sseldorf</li>
        <li>Burberry - K&ouml;nigsallee 62, 40212 D&uuml;sseldorf; Maximilianstra&szlig;e 14, 80539 Munich; Kaufingerstra&szlig;e 24, 80331 Munich</li>
        <li>Cartier - Maximilianstra&szlig;e 20, 80539 Munich; K&ouml;nigsallee 48, 40212 D&uuml;sseldorf; Neuer Wall 19, 20354 Hamburg</li>
        <li>Dolce &amp; Gabbana - Maximilianstra&szlig;e 14, 80539 Munich; K&ouml;nigsallee 56, 40212 D&uuml;sseldorf; Neuer Wall 61, 20354 Hamburg</li>
        <li>Giorgio Armani - Maximilianstra&szlig;e 32, 80539 Munich; K&ouml;nigsallee 68, 40212 D&uuml;sseldorf; Mittelstra&szlig;e 12, 50672 Cologne</li>
        <li>Valentino - Maximilianstra&szlig;e 6, 80539 Munich; K&ouml;nigsallee 56, 40212 D&uuml;sseldorf; Neuer Wall 62, 20354 Hamburg.</li>
        </ol>',
                'others' => '<p>Berikut adalah beberapa tips dan informasi jalan-jalan di Jerman:</p>
        <ol>
        <li>Perhatikan Musim: Jerman memiliki empat musim yang berbeda, dan cuaca di musim dingin dan musim panas sangat berbeda. Pastikan untuk memperhatikan musim dan kondisi cuaca sebelum melakukan perjalanan.</li>
        <li>Transportasi Umum: Jaringan transportasi umum di Jerman sangat baik dan teratur. Anda bisa menggunakan bus, kereta api, atau tram untuk berkeliling kota atau antar kota.</li>
        <li>Kartu Kredit: Kartu kredit dapat diterima di sebagian besar tempat di Jerman, namun pastikan untuk membawa uang tunai sebagai cadangan.</li>
        <li>Bahasa: Bahasa resmi di Jerman adalah bahasa Jerman, namun banyak orang di sana juga bisa berbicara bahasa Inggris. Pastikan untuk mempelajari beberapa kata dasar bahasa Jerman sebelum melakukan perjalanan.</li>
        <li>Jadwal Libur: Jerman memiliki beberapa hari libur nasional, yang seringkali dijadikan waktu untuk berlibur oleh masyarakat lokal. Pastikan untuk memperhatikan jadwal libur agar tidak terkejut jika beberapa tempat wisata tutup.</li>
        <li>Tiket Wisata: Banyak tempat wisata di Jerman menawarkan tiket khusus yang memberikan diskon atau akses ke beberapa tempat wisata sekaligus. Pastikan untuk memeriksa tiket wisata yang tersedia sebelum melakukan perjalanan.</li>
        <li>Makanan dan Minuman: Jerman terkenal dengan berbagai makanan dan minuman tradisionalnya, seperti sosis, bir, dan roti. Pastikan untuk mencoba makanan dan minuman lokal saat Anda melakukan perjalanan.</li>
        <li>Jam Operasional: Jam operasional di Jerman seringkali tergolong konservatif, dan banyak toko tutup pada hari Minggu. Pastikan untuk memperhatikan jam operasional tempat yang ingin Anda kunjungi.</li>
        <li>Kerahasiaan Pribadi: Orang Jerman sangat menjaga privasi dan kerahasiaan pribadi mereka. Pastikan untuk tidak memotret orang tanpa izin atau bertanya terlebih dahulu sebelum melakukan sesuatu yang dianggap mengganggu privasi mereka.</li>
        <li>Tipping: Memberikan tip sebesar 10% dianggap wajar di Jerman, namun bukanlah hal yang dianggap wajib. Pastikan untuk memperhatikan kebijakan tip di tempat-tempat yang Anda kunjungi.</li>
        </ol>
        <p>Semoga tips dan informasi ini membantu Anda dalam merencanakan dan melakukan perjalanan ke Jerman.</p>
        <p>Berikut adalah beberapa tips dan informasi tentang transportasi di Jerman:</p>
        <ol>
        <li>Kereta Api: Kereta api merupakan sarana transportasi yang sangat populer di Jerman. Jaringan kereta api di Jerman sangat luas dan teratur, dengan banyak pilihan kelas dan jadwal yang fleksibel. Anda bisa membeli tiket kereta api di stasiun, mesin tiket, atau online.</li>
        <li>Bus: Bus juga merupakan pilihan transportasi yang baik di Jerman, terutama jika Anda ingin berkunjung ke kota-kota kecil atau desa-desa di luar kota besar. Anda bisa membeli tiket bus di stasiun bus atau online.</li>
        <li>Taksi: Taksi tersedia di kota-kota besar di Jerman, namun biayanya tergolong mahal. Pastikan untuk menggunakan taksi resmi yang memiliki lampu taksi dan nomor pendaftaran resmi.</li>
        <li>Mobil: Jalan raya di Jerman sangat baik dan teratur, dan memungkinkan Anda untuk berkendara ke berbagai tempat wisata di Jerman. Namun, perlu diingat bahwa beberapa kota besar di Jerman memiliki zona lalu lintas terbatas dan harus membayar untuk masuk.</li>
        <li>Transportasi Umum: Jaringan transportasi umum di Jerman sangat baik dan teratur, terutama di kota-kota besar. Anda bisa menggunakan bus, kereta api, atau tram untuk berkeliling kota atau antar kota. Pastikan untuk membeli tiket sebelum naik transportasi umum.</li>
        <li>Sepeda: Sepeda juga merupakan sarana transportasi yang populer di Jerman, terutama di kota-kota kecil dan pedesaan. Ada banyak jalan sepeda yang indah di Jerman, dan Anda bisa menyewa sepeda di sebagian besar kota.</li>
        <li>Jam Operasional: Jam operasional transportasi di Jerman seringkali tergolong konservatif, dan banyak transportasi umum yang beroperasi dengan jadwal yang terbatas pada hari Minggu atau hari libur nasional. Pastikan untuk memeriksa jadwal transportasi sebelum melakukan perjalanan.</li>
        <li>Tiket: Pastikan untuk membeli tiket sebelum naik transportasi umum, karena Anda akan didenda jika ditemukan tidak memiliki tiket yang sah. Ada beberapa pilihan tiket, seperti tiket satu kali jalan, tiket harian, atau tiket mingguan.</li>
        <li>Kereta Cepat: Jerman memiliki kereta cepat yang disebut ICE (InterCityExpress) yang menghubungkan kota-kota besar di Jerman dan negara-negara tetangga. Tiket untuk kereta cepat harus dipesan lebih awal dan biasanya lebih mahal dari tiket kereta biasa.</li>
        <li>Transportasi ke Bandara: Bandara di Jerman biasanya mudah diakses dengan transportasi umum atau taksi. Pastikan untuk memeriksa opsi transportasi ke bandara sebelum melakukan perjalanan.</li>
        </ol>
        <p>Semoga tips dan informasi ini membantu Anda dalam merencanakan dan melakukan perjalanan di Jerman.</p>',
                'views' => 17390,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-26 18:19:36',
            ],
            [
                'id' => 5,
                'name' => 'Swiss',
                'title' => 'Kota-kota wisata di Swiss yang indah',
                'slug' => 'swiss',
                'international' => 'Switzerland',
                'codes' => 'ch',
                'latitude' => '46.8131873',
                'longitude' => '8.2242101',
                'keywords' => '',
                'description' => '<p class="dropcap">Swiss merupakan salah satu destinasi wisata terpopuler di Eropa dengan pemandangan alam yang indah dan kekayaan budaya yang luar biasa. Berikut adalah beberapa kota-kota wisata di Swiss beserta akomodasi mahal dan murah:</p>
        <ol>
        <li>
        <p>Zurich: Zurich adalah kota terbesar di Swiss dan merupakan pusat keuangan dan bisnis di negara ini. Zurich juga menawarkan banyak atraksi wisata, termasuk museum seni, taman, dan gedung-gedung bersejarah. Untuk akomodasi, beberapa hotel mewah di Zurich termasuk <a title="The Dolder Grand" href="https://www.booking.com/hotel/ch/the-dolder-grand.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Dolder Grand</a>, <a title="Baur au Lac" href="https://www.booking.com/hotel/ch/baur-au-lac.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Baur au Lac</a>, dan <a title="Widder Hotel" href="https://www.booking.com/hotel/ch/widderzurich.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Widder Hotel</a>. Untuk akomodasi yang lebih terjangkau, ada pilihan hostel seperti Langstars Backpackers dan <a title="Youth Hostel Zurich" href="https://www.booking.com/hotel/ch/jugendherberge-zuerich.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Youth Hostel Zurich</a>.</p>
        </li>
        <li>
        <p>Geneva: Geneva terkenal dengan Danau Geneva yang indah dan merupakan kota multikultural dengan banyak organisasi internasional. Beberapa akomodasi mewah di Geneva termasuk Hotel Beau Rivage, <a title="Four Seasons Hotel des Bergues" href="https://www.booking.com/hotel/ch/four-seasons-geneva.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Four Seasons Hotel des Bergues</a>, dan <a title="Mandarin Oriental Geneva" href="https://www.booking.com/hotel/ch/mandarin-oriental-geneva.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Mandarin Oriental Geneva</a>. Untuk akomodasi yang lebih terjangkau, ada pilihan seperti <a title="City Hostel Geneva" href="https://www.booking.com/hotel/ch/city-hostel-geneva.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">City Hostel Geneva</a> dan ibis Styles Geneva Gare.</p>
        </li>
        <li>
        <p>Lucerne: Lucerne adalah kota wisata yang terkenal dengan jembatan kapal dan taman-taman yang indah. Beberapa hotel mewah di Lucerne termasuk Palace Luzern, <a title="Grand Hotel National" href="https://www.booking.com/hotel/ch/grandhotelnationalluzern.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Grand Hotel National</a>, dan <a title="Art Deco Hotel Montana" href="https://www.booking.com/hotel/ch/artdecohotelmontana.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Art Deco Hotel Montana</a>. Untuk akomodasi yang lebih terjangkau, ada pilihan hostel seperti <a title="Lion Lodge Luzern" href="https://www.booking.com/hotel/ch/lion-lodge-luzern.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Lion Lodge Luzern</a> dan <a title="Backpackers Lucerne" href="https://www.booking.com/hotel/ch/backpackers-luzern.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Backpackers Lucerne</a>.</p>
        </li>
        <li>
        <p>Interlaken: Interlaken terkenal dengan pemandangan alam yang luar biasa dan aktivitas petualangan seperti hiking, ski, dan paragliding. Beberapa hotel mewah di Interlaken termasuk <a title="Victoria Jungfrau Grand Hotel &amp; Spa" href="https://www.booking.com/hotel/ch/victoria-jungfrau-grand-spa.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Victoria Jungfrau Grand Hotel &amp; Spa</a>, <a title="Lindner Grand Hotel Beau Rivage" href="https://www.booking.com/hotel/ch/lindner-grand-beau-rivage.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Lindner Grand Hotel Beau Rivage</a>, dan <a title="Hotel Interlaken" href="https://www.booking.com/hotel/ch/interlaken.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Interlaken</a>. Untuk akomodasi yang lebih terjangkau, ada pilihan hostel seperti <a title="Balmer\'s Hostel" href="https://www.booking.com/hotel/ch/balmers-herberge.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Balmer\'s Hostel</a> dan Youth Hostel Interlaken.</p>
        </li>
        <li>
        <p>Zermatt: Zermatt adalah kota ski yang terkenal dengan pemandangan Gunung Matterhorn yang ikonik. Beberapa hotel mewah di Zermatt termasuk <a title="Grand Hotel Zermatterhof" href="https://www.booking.com/hotel/ch/grand-zermatterhof.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Grand Hotel Zermatterhof</a>, <a title="The Omnia" href="https://www.booking.com/hotel/ch/the-omnia.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Omnia</a>, dan <a title="Mont Cervin Palace" href="https://www.booking.com/hotel/ch/mont-cervin-palace.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Mont Cervin Palace</a>. Untuk akomodasi yang lebih terjangkau, ada pilihan hostel seperti Matterhorn Hostel Zermatt dan <a title="Youth Hostel Zermatt" href="https://www.booking.com/hotel/ch/jugendherberge-zermatt.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Youth Hostel Zermatt</a>.</p>
        </li>
        </ol>
        <p>Itulah beberapa kota wisata di Swiss beserta akomodasi mahal dan murah yang dapat menjadi referensi untuk perjalanan Anda. Namun perlu diingat bahwa harga akomodasi dapat bervariasi tergantung pada waktu kunjungan dan permintaan. Pastikan untuk melakukan riset dan memesan akomodasi dengan waktu yang cukup agar dapat memperoleh harga yang terbaik.</p>',
                'short_desc' => 'Swiss mempunyai ekonomi sangat stabil, makmur, berteknologi tinggi, termasuk golongan negara termakmur dunia berdasarkan pendapatan per kapita. Swiss terletak antara berbagai kebudayaan Eropa kemudian mempengaruhi negara ini. Terdapat tiga bahasa resmi nasional yaitu bahasa Jerman, Perancis, Italia, serta satu bahasa resmi lokal, bahasa Romansh. Pemerintah federal diwajibkan menggunakan ketiga bahasa resmi tersebut disediakan pula penerjemah. Tiap pelajar Swiss harus mempelajari salah satu bahasa resmi sehingga kebanyakan penduduknya bilingual',
                'to_see' => '<p><strong>Nikmati tegangnya main Ski</strong> </p><div><br></div><div>Swiss tanpa diragukan lagi adalah surganya ski. Dengan nama-nama seperti&nbsp;Andermatt Crans Montana, Davos /Klosters, Flims /Laax, Grindelwald/Wengen, Saas-Fee, St Moritz and Zermatt, Swiss bisa mengaku sebagai negara ski terbesar. Dengan cuaca sedikit ringan dan ribuan kilometer rute ski yang sempurna bagi setiap pemain ski, baik bagi yang menginginkan rute mudah atau yang paling berat sekalipun. Baik bagi yang baru mau belajar ataupun sudah jagoan ski, di sana tersedia segala kondisi rute.</div><p></p><p><strong>Bersepeda melalui rute yang indah</strong></p><div>Bersepeda adalah salah satu kegiatan turis yang paling significant di Swiss. Menjelajahi kota-kota di Swiss dengan semau anda sendiri adalah pengalaman paling mengasikan yang tidak boleh dilewatkan. Mungkin akan terasa lebih melelahkan bersepeda di pegunungan, akan tetapi keindahan di sekeliling anda akan membuat anda lupa akan lelah. Rute2 yang tersedia cukup banyak sehingga tersedia banyak tempat selfie bagi anda.</div><div><br></div><div><strong>Kapal pesiar danau bawah tanah</strong></div><div><br></div><div><div>Perjalanan kapal melalui danau bawah tanah St. Leonard sulit diungkapkan dengan kata-kata. Dibuka untuk umum tahun 1949, ini adalah yang terbesar di Eropa. Panjang danau 300 m, lebar danau 20 m dan dalamnya 10 m. Perjalanan memakan waktu 30 menit dan dijelaskan dengan 4 bahasa. Hanya buka bulan Maret sampai November jam 9 pagi sampai 5 sore.</div></div><div><br></div><div><strong>Naik kereta diantara salju</strong> <div><br></div><div>Di Swiss asik juga menikmati naik kereta diantara belantara salju. Mulai berangkat dari Zermatt, Glacier Express disebut "kereta cepat terlamban di dunia". Di rutenya, kereta ini menyebrangi 291 jembatan, 91 terowongan, dan 7 lembah yang memukau. Kereta ini membawa anda ke salah satu dari tempat terindah di Swiss. Kereta ini menyediakan layanan dua kali sehari pada musim panas dan sekali sehari dalam musim dingin.</div><div><br></div><div><p><strong>Jungfraubahn Cog Railway</strong></p><div>Kereta bersejarah ini mengantarkan para penumpang ke atas puncak pegunungan Eiger melalui pemandangan pegunungan yang luar biasa. Nikmati rasanya menumpang kereta di atas ketinggian 11.333 kaki diatas permukaan laut dengan salju yang menutupi puncak, lembah yang jauh dan angin gunung. Anda bahkan bisa melihat puncak-puncak di negara-negara lain spt Perancis dan Jerman.</div></div></div><div><br></div><div><strong>Jalan jalan minum anggur ke Valais</strong> <div><br></div><div>Berada di tenggara Swiss, Valais adalah sebuah desa kecil yang terkenal oleh pemandangan pegunungan yang memukau. Akan tetapi banyak turis yang melewatkan ciri khas Valais. Bagi pengunjung non-muslim, Valais terkenal dengan anggur lokalnya. Dengan lebih dari 5200 hektar ladang anggurnya, Valais merupakan daerah terbesar penghasil anggur di Swiss. Ada sekitar 40 macam anggur yang dihasilkan di Valais. Maka dari itu, kalau anda doyan anggur, bisa mencicipi anggur yang khas dari Swiss.</div><div>  </div><br></div><div><strong>Main golf di lingkungan yang indah</strong></div><div><br></div><div>Swiss telah mencanangkan dirinya sebagai tempat main golf terbaik. Maka dari itu Swiss adalah tempat terindah bagi pemain golf untuk bermain golf. Bayangkan saja bermain golf dengan situasi dikelilingi pegunungan indah, danau berkilau, dan lain-lain.<br>  <br></div>',
                'eatdrink' => '<p>Jika Anda mencari restoran Indonesia di Swiss, berikut adalah beberapa tempat yang bisa Anda coba:</p>
        <ol>
        <li>
        <p>Waroeng Indo, Zurich: Restoran ini menawarkan berbagai hidangan Indonesia, seperti nasi goreng, rendang, sate, dan sup buntut. Lokasinya dekat dengan stasiun kereta api Zurich dan memiliki suasana yang nyaman.</p>
        </li>
        <li>
        <p>Indonesian Corner, Geneva: Restoran ini menawarkan hidangan Indonesia yang otentik, seperti nasi kuning, ayam goreng, dan sayur asem. Lokasinya dekat dengan stasiun kereta api Cornavin dan terletak di pusat kota Geneva.</p>
        </li>
        <li>
        <p>La Fontaine, Bern: Restoran ini menawarkan hidangan Indonesia serta masakan Asia dan Timur Tengah lainnya. Terletak di pusat kota Bern dan memiliki atmosfer yang nyaman.</p>
        </li>
        <li>
        <p>Indonesian Kitchen, Basel: Restoran ini menawarkan hidangan Indonesia, seperti nasi goreng, mie goreng, dan gado-gado. Terletak dekat dengan Basel SBB, stasiun kereta api utama di kota Basel.</p>
        </li>
        <li>
        <p>Rumah Makan Medan, Zurich: Restoran ini menyajikan hidangan Indonesia khas Medan, seperti sate padang, rendang, dan mie goreng. Terletak di wilayah Kreis 4 di Zurich dan memiliki suasana yang ramah.</p>
        </li>
        </ol>
        <p>Pastikan untuk memeriksa jadwal buka restoran dan memesan meja terlebih dahulu untuk memastikan tempat tersedia saat Anda ingin makan di sana.</p>
        <p>Swiss memiliki berbagai macam kuliner yang lezat dan khas dari daerahnya sendiri. Berikut adalah beberapa tempat wisata kuliner yang direkomendasikan di Swiss:</p>
        <ol>
        <li>
        <p>Zurich: Zurich dikenal sebagai kota dengan banyak restoran yang menawarkan hidangan internasional dan lokal. Anda bisa mencoba hidangan seperti geschnetzeltes (daging sapi cincang dengan saus krim), r&ouml;sti (panggang kentang), dan fondue (keju cair yang disajikan dengan roti). Jika Anda mencari tempat makan tradisional, Cobrawurst di pasar Limmatquai adalah tempat yang bagus untuk mencoba sosis khas Zurich.</p>
        </li>
        <li>
        <p>Lucerne: Lucerne terkenal dengan hidangan khasnya yang disebut ch&uuml;gelipastete, yaitu hidangan pastry yang diisi dengan daging sapi cincang dan saus krim. Anda juga bisa mencoba raclette, hidangan keju meleleh yang disajikan dengan kentang dan acar. Restoran Le Chef di Lucerne menawarkan menu yang bervariasi dan terkenal dengan hidangan steak dan seafood.</p>
        </li>
        <li>
        <p>Geneva: Geneva dikenal dengan hidangan kue kering dan cokelat. Anda bisa mencoba kue kering terkenal seperti macarons dan cokelat Swiss yang terkenal di seluruh dunia. Chocolaterie du Rh&ocirc;ne di Geneva adalah tempat yang bagus untuk mencoba cokelat dan kue kering.</p>
        </li>
        <li>
        <p>Bern: Bern dikenal dengan hidangan khasnya yang disebut bernaise, yaitu saus yang terbuat dari telur, mentega, dan rempah-rempah. Anda juga bisa mencoba hidangan seperti Berner Platte (hidangan daging panggang), dan &Auml;lplermagronen (hidangan pasta khas Bern). Restoran Altes Tramdepot di Bern menawarkan hidangan lokal yang lezat dan memiliki suasana yang ramah.</p>
        </li>
        <li>
        <p>Basel: Basel dikenal dengan hidangan kue kering yang disebut basler l&auml;ckerli, yaitu kue kering dengan rasa jahe dan madu. Anda juga bisa mencoba hidangan khas lainnya seperti sausages (sosis) dan r&ouml;sti. Restaurant Fischerstube di Basel adalah tempat yang bagus untuk mencoba hidangan lokal.</p>
        </li>
        </ol>
        <p>Pastikan untuk mencoba beberapa hidangan khas setiap daerah saat berkunjung ke Swiss. Jangan ragu untuk menanyakan rekomendasi tempat makan lokal kepada penduduk setempat untuk pengalaman kuliner yang lebih otentik.</p>',
                'shopping' => '<p>Swiss memiliki beberapa pusat perbelanjaan yang menawarkan berbagai jenis produk, mulai dari merek mewah hingga barang-barang tradisional. Berikut adalah beberapa pusat perbelanjaan terkenal di Swiss:</p>
        <ol>
        <li>
        <p>Bahnhofstrasse, Zurich: Jalan ini terkenal sebagai salah satu jalan perbelanjaan paling mewah di dunia, dengan toko-toko mewah yang menawarkan merek internasional seperti Gucci, Louis Vuitton, dan Prada.</p>
        </li>
        <li>
        <p>Rue du Rhone, Geneva: Jalan ini juga merupakan destinasi perbelanjaan mewah, dengan berbagai toko mewah seperti Chanel, Dior, dan Cartier.</p>
        </li>
        <li>
        <p>Manor, Geneva: Ini adalah pusat perbelanjaan besar di Geneva, dengan berbagai toko yang menawarkan pakaian, kosmetik, dan produk rumah tangga.</p>
        </li>
        <li>
        <p>Globus, Zurich: Ini adalah pusat perbelanjaan terkenal di Zurich, dengan berbagai produk seperti pakaian, kosmetik, dan perhiasan.</p>
        </li>
        <li>
        <p>Bahnhof Luzern: Stasiun kereta api di Lucerne juga memiliki pusat perbelanjaan di dalamnya, dengan berbagai toko yang menawarkan pakaian, aksesoris, dan barang-barang makanan.</p>
        </li>
        <li>
        <p>Freitag Tower, Zurich: Ini adalah toko khusus yang menawarkan tas buatan tangan yang terbuat dari bahan daur ulang, seperti ban truk dan sabuk pengaman mobil.</p>
        </li>
        <li>
        <p>Old Town, Bern: Kawasan ini menawarkan berbagai toko kecil yang menjual barang-barang tradisional Swiss, seperti jam tangan, perhiasan, dan produk kulit.</p>
        </li>
        <li>
        <p>Designer Outlet Landquart: Ini adalah outlet terbesar di Swiss, dengan berbagai merek internasional seperti Nike, Adidas, dan Tommy Hilfiger.</p>
        </li>
        <li>
        <p>ShopVille-Zurich Hauptbahnhof: Ini adalah pusat perbelanjaan yang terletak di stasiun kereta api Zurich, dengan berbagai toko yang menawarkan pakaian, kosmetik, dan produk elektronik.</p>
        </li>
        <li>
        <p>Mall of Switzerland, Ebikon: Ini adalah pusat perbelanjaan yang terletak di dekat Lucerne, dengan berbagai toko yang menawarkan merek internasional dan produk lokal.</p>
        </li>
        </ol>',
                'others' => '<p>Swiss adalah negara yang terkenal dengan pemandangan alamnya yang indah, serta kekayaan budaya dan sejarahnya yang unik. Berikut adalah beberapa tips wisata di Swiss yang bisa Anda jadikan referensi:</p>
        <ol>
        <li>
        <p>Kunjungi Kota Zurich Zurich adalah salah satu kota terbesar di Swiss dan memiliki banyak tempat wisata menarik seperti danau Zurich, kapel St. Peter, Museum Bahnhofstrasse, dan masih banyak lagi.</p>
        </li>
        <li>
        <p>Jelajahi Pegunungan Swiss Alps Swiss Alps menawarkan pemandangan alam yang luar biasa, mulai dari gunung yang menjulang tinggi hingga padang rumput yang hijau dan air terjun yang menakjubkan.</p>
        </li>
        <li>
        <p>Nikmati Keindahan Danau Geneva Danau Geneva adalah danau terbesar di Swiss yang membagi Swiss dan Perancis. Danau ini menawarkan pemandangan alam yang indah serta berbagai kegiatan air seperti berperahu atau berenang.</p>
        </li>
        <li>
        <p>Kunjungi Kota Berne Kota Berne adalah ibu kota Swiss dan memiliki banyak tempat wisata yang menarik seperti Menara Zytglogge, Palatium Federal Swiss, dan Katedral Berne.</p>
        </li>
        <li>
        <p>Jangan Lewatkan Swiss National Park Swiss National Park menawarkan pengalaman yang menakjubkan dalam menjelajahi alam liar Swiss dan melihat keindahan hewan liar serta tanaman yang unik.</p>
        </li>
        <li>
        <p>Kunjungi Chillon Castle Chillon Castle adalah kastil bersejarah di tepi Danau Geneva dan merupakan salah satu kastil paling terkenal di Swiss.</p>
        </li>
        <li>
        <p>Wisata Kuliner Swiss Nikmati hidangan khas Swiss seperti raclette, fondue, dan chocolate Swiss yang terkenal di seluruh dunia.</p>
        </li>
        </ol>
        <p>Swiss memiliki sistem transportasi yang sangat baik dan efisien, sehingga mudah untuk menjelajahi negara ini. Berikut adalah beberapa tips transportasi di Swiss:</p>
        <ol>
        <li>
        <p>Kereta Api Kereta api adalah salah satu sarana transportasi terbaik di Swiss. Swiss memiliki jaringan kereta api yang luas dan baik, sehingga mudah untuk mengakses kota-kota besar maupun desa-desa kecil. Anda bisa menggunakan Swiss Travel Pass atau Swiss Half Fare Card untuk mendapatkan diskon pada tarif kereta api.</p>
        </li>
        <li>
        <p>Bus Swiss juga memiliki jaringan bus yang baik, terutama untuk mengakses tempat-tempat yang tidak dilalui oleh kereta api. Anda bisa membeli Swiss Travel Pass atau Swiss Half Fare Card untuk mendapatkan diskon pada tarif bus.</p>
        </li>
        <li>
        <p>Tram Beberapa kota di Swiss memiliki sistem tram yang efisien. Tram adalah salah satu cara yang paling nyaman untuk berkeliling kota-kota besar di Swiss, seperti Zurich dan Bern.</p>
        </li>
        <li>
        <p>Mobil Swiss memiliki jalan tol yang baik, sehingga mudah untuk mengakses kota-kota besar dan desa-desa kecil dengan mobil. Namun, perlu diingat bahwa parkir di Swiss bisa sangat mahal, terutama di kota-kota besar. Anda juga harus memperhatikan aturan lalu lintas dan batas kecepatan yang ketat.</p>
        </li>
        <li>
        <p>Sepeda Swiss memiliki jalur sepeda yang baik dan aman, sehingga sepeda adalah pilihan yang baik untuk menjelajahi desa-desa kecil dan pedesaan di Swiss. Anda juga bisa menyewa sepeda di kota-kota besar seperti Zurich dan Bern.</p>
        </li>
        <li>
        <p>Taksi Taksi tersedia di kota-kota besar di Swiss, namun tarifnya bisa sangat mahal. Anda sebaiknya memesan taksi terlebih dahulu dan menanyakan tarif sebelum naik taksi.</p>
        </li>
        </ol>
        <p>Itulah beberapa tips wisata dan transportasi di Swiss. Selamat menjelajahi Swiss dengan nyaman dan efisien!</p>',
                'views' => 13988,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-27 09:57:11',
            ],
            [
                'id' => 6,
                'name' => 'Inggris Raya',
                'title' => '7  kota di Inggris Raya (Great Britain) yang menarik untuk dikunjungi',
                'slug' => 'inggris-raya',
                'international' => 'United Kingdom',
                'codes' => 'gb',
                'latitude' => '54.331014',
                'longitude' => '-2.2640869',
                'keywords' => '',
                'description' => '<p class="dropcap">Inggris memiliki banyak kota wisata yang menarik untuk dikunjungi, dan berikut adalah beberapa di antaranya beserta hotel favorit:</p>
        <ol>
        <li>London London merupakan ibukota Inggris dan memiliki banyak atraksi wisata seperti museum, taman, teater, dan landmark terkenal seperti London Eye, Tower Bridge, dan Buckingham Palace. Beberapa hotel favorit di London antara lain:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="The Ritz London" href="https://www.booking.com/hotel/gb/the-ritz-london.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Ritz London</a>: Hotel mewah dengan gaya arsitektur klasik dan kamar yang elegan.</li>
        <li><a title="The Langham, London" href="https://www.booking.com/hotel/gb/the-langham-london.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Langham, London</a>: Hotel bersejarah yang terletak di daerah West End dan menawarkan kamar-kamar yang mewah.</li>
        <li><a title="The Shangri-La Hotel at The Shard" href="https://www.booking.com/hotel/gb/shangri-la-at-the-shard-london.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Shangri-La Hotel at The Shard</a>: Hotel mewah yang terletak di gedung pencakar langit tertinggi di London, menawarkan pemandangan kota yang spektakuler.</li>
        </ul>
        </li>
        </ul>
        <ol start="2">
        <li>Bath Bath adalah kota yang terkenal dengan air panasnya dan memiliki banyak bangunan arsitektur Georgians yang menarik. Beberapa hotel favorit di Bath antara lain:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="The Gainsborough Bath Spa" href="https://www.booking.com/hotel/gb/the-gainsborough-bath-spa-bath.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Gainsborough Bath Spa</a>: Hotel mewah yang terletak di pusat kota dan menawarkan kolam renang indoor, spa, dan kamar-kamar yang elegan.</li>
        <li><a title="The Royal Crescent Hotel &amp; Spa" href="https://www.booking.com/hotel/gb/the-royal-crescent.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Royal Crescent Hotel &amp; Spa</a>: Hotel mewah yang terletak di bangunan arsitektur Georgian yang terkenal, menawarkan kamar-kamar yang elegan dan taman yang indah.</li>
        <li><a title="The Bath Priory Hotel and Spa" href="https://www.booking.com/hotel/gb/the-bath-priory.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Bath Priory Hotel and Spa</a>: Hotel mewah dengan taman yang luas, spa, dan kamar-kamar yang mewah.</li>
        </ul>
        </li>
        </ul>
        <ol start="3">
        <li>Edinburgh Edinburgh adalah ibukota Skotlandia dan terkenal dengan kastilnya yang megah, festival seni, dan museum. Beberapa hotel favorit di Edinburgh antara lain:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li>The Balmoral Hotel: Hotel mewah yang terletak di pusat kota Edinburgh dan menawarkan pemandangan kota yang spektakuler.</li>
        <li><a title="The Witchery by the Castle" href="https://www.booking.com/hotel/gb/the-witchery-by-the-castle.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Witchery by the Castle</a>: Hotel yang terletak di dekat Edinburgh Castle dan menawarkan kamar-kamar yang unik dan makanan lezat.</li>
        <li>The Dunstane Houses: Hotel mewah yang terletak di daerah West End dan menawarkan kamar-kamar yang elegan dan taman yang indah.</li>
        </ul>
        </li>
        </ul>
        <ol start="4">
        <li>Oxford Oxford adalah kota universitas yang terkenal dengan arsitektur Gothic dan memiliki banyak atraksi wisata seperti museum, taman, dan gedung-gedung universitas. Beberapa hotel favorit di Oxford antara lain:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li>The Old Bank Hotel: Hotel yang terletak di pusat kota Oxford dan menawarkan kamar-kamar yang mewah dan restoran yang lezat.</li>
        <li><a title="The Randolph Hotel" href="https://www.booking.com/hotel/gb/randolph-hotel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Randolph Hotel</a>: Hotel mewah yang terletak di daerah University Parks dan menawarkan kamar-kamar yang elegan dan restoran yang lezat.</li>
        <li><a title="Malmaison Oxford" href="https://www.booking.com/hotel/gb/malmaison-oxford.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Malmaison Oxford</a>: Hotel mewah yang terletak di daerah Oxford Castle Quarter dan menawarkan kamar-kamar yang unik dan restoran yang lezat.</li>
        </ul>
        </li>
        </ul>
        <ol start="5">
        <li>Liverpool Liverpool adalah kota pelabuhan yang terkenal dengan musik dan sepak bola. Beberapa atraksi wisata yang populer di Liverpool antara lain Beatles Story Museum, Liverpool Cathedral, dan Anfield Stadium. Beberapa hotel favorit di Liverpool antara lain:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Titanic Hotel Liverpool" href="https://www.booking.com/hotel/gb/titanic-liverpool.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Titanic Hotel Liverpool</a>: Hotel mewah yang terletak di bekas gudang kapal Titanic dan menawarkan kamar-kamar yang luas dan elegan.</li>
        <li>The Shankly Hotel: Hotel yang terletak dekat Anfield Stadium dan menawarkan kamar-kamar yang luas dan tematik sepak bola.</li>
        <li><a title="30 James Street" href="https://www.booking.com/hotel/gb/30-james-street.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">30 James Street</a>: Hotel yang terletak di bekas gedung kantor White Star Line dan menawarkan kamar-kamar yang elegan dan pemandangan sungai Mersey yang indah.</li>
        </ul>
        </li>
        </ul>
        <ol start="6">
        <li>York York adalah kota bersejarah yang terkenal dengan York Minster, kastil, dan kawasan kota tua yang berbatu. Beberapa hotel favorit di York antara lain:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="The Grand, York" href="https://www.booking.com/hotel/gb/cedar-court-grand.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Grand, York</a>: Hotel mewah yang terletak di pusat kota York dan menawarkan kamar-kamar yang elegan dan spa yang indah.</li>
        <li><a title="Middlethorpe Hall &amp; Spa" href="https://www.booking.com/hotel/gb/middlethorpehall.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Middlethorpe Hall &amp; Spa</a>: Hotel yang terletak di daerah pedesaan York dan menawarkan kamar-kamar yang mewah dan taman yang indah.</li>
        <li><a title="The Principal York" href="https://www.booking.com/hotel/gb/lemeridianyork.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Principal York</a>: Hotel mewah yang terletak di dekat stasiun kereta York dan menawarkan kamar-kamar yang elegan dan pemandangan kota yang indah.</li>
        </ul>
        </li>
        </ul>
        <ol start="7">
        <li>Cambridge Cambridge adalah kota universitas yang terkenal dengan arsitektur Gothic dan sungai Cam. Beberapa atraksi wisata yang populer di Cambridge antara lain King\'s College Chapel, River Cam, dan Fitzwilliam Museum. Beberapa hotel favorit di Cambridge antara lain:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="The Varsity Hotel &amp; Spa" href="https://www.booking.com/hotel/gb/the-varsity-spa.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Varsity Hotel &amp; Spa</a>: Hotel yang terletak di dekat sungai Cam dan menawarkan kamar-kamar yang mewah dan rooftop bar dengan pemandangan indah.</li>
        <li><a title="Hotel du Vin &amp; Bistro Cambridge" href="https://www.booking.com/hotel/gb/du-vin-bistro-cambridge.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel du Vin &amp; Bistro Cambridge</a>: Hotel yang terletak di bekas bangunan universitas dan menawarkan kamar-kamar yang elegan dan restoran yang lezat.</li>
        <li><a title="University Arms, Autograph Collection" href="https://www.booking.com/hotel/gb/universityarmshotel.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">University Arms, Autograph Collection</a>: Hotel yang terletak di pusat kota Cambridge dan menawarkan kamar-kamar yang mewah dan restoran yang lezat.</li>
        </ul>
        </li>
        </ul>
        <p>Itulah beberapa kota wisata di Inggris beserta hotel favorit. Pastikan untuk memeriksa ketersediaan dan harga kamar hotel sebelum memesan.</p>',
                'short_desc' => 'Inggris Raya (Great Britain) adalah nama yang digunakan untuk menyebut Inggris, Skotlandia, dan Wales yang membentuk satu kesatuan politik. Jangan lewatkan museum-museum terkenal seperti British Museum dan National Gallery.',
                'to_see' => '<p>Inggris Raya (Great Britain) memiliki banyak atraksi menarik dan unik, di antaranya:</p>
        <ol>
        <li>Stonehenge: Batu-batu raksasa misterius di Inggris yang telah menjadi salah satu ikon paling terkenal di dunia.</li>
        <li>Giant\'s Causeway: Formasi geologis yang unik di Irlandia Utara, terdiri dari ribuan kolom basal yang terbentuk secara alami.</li>
        <li>London Eye: Roda raksasa yang menghadap langsung ke Sungai Thames dan menawarkan pemandangan kota London dari ketinggian.</li>
        <li>Tower of London: Sebuah kastil dan istana tua yang terletak di tepi Sungai Thames di London, tempat di mana mahkota dan permata kerajaan Inggris disimpan.</li>
        <li>British Museum: Salah satu museum terbesar di dunia, dengan koleksi artefak dan benda-benda sejarah dari seluruh dunia.</li>
        <li>Edinburgh Castle: Salah satu istana yang paling ikonis di Skotlandia, yang menawarkan pemandangan indah dari kota Edinburgh.</li>
        <li>Stratford-upon-Avon: Kota kelahiran William Shakespeare, dengan banyak tempat wisata terkait sejarahnya.</li>
        <li>Lake District: Kawasan pegunungan yang indah di Inggris barat laut, yang menawarkan pemandangan alam yang spektakuler.</li>
        <li>Oxford dan Cambridge: Dua kota universitas yang terkenal di Inggris, dengan arsitektur dan sejarah yang indah.</li>
        <li>Loch Ness: Danau terkenal di Skotlandia, yang diyakini memiliki monster laut raksasa bernama Nessie.</li>
        <li>Windsor Castle: Istana yang dihuni oleh keluarga kerajaan Inggris, terletak di kota Windsor, Inggris.</li>
        <li>Hadrian\'s Wall: Tembok Romawi kuno yang dibangun pada abad ke-2 Masehi, yang membentang di sepanjang perbatasan antara Inggris dan Skotlandia.</li>
        <li>York Minster: Katedral Gothic yang terkenal di kota York, Inggris.</li>
        <li>Cotswolds: Kawasan pedesaan yang indah di Inggris tengah, dengan desa-desa yang indah dan arsitektur yang khas.</li>
        <li>Liverpool: Kota pelabuhan yang terkenal di Inggris, dengan banyak tempat wisata sejarah dan budaya seperti The Beatles Story dan Liverpool Cathedral.</li>
        </ol>',
                'eatdrink' => '<p>Berikut adalah beberapa alamat restoran Indonesia di Inggris Raya (Great Britain):</p>
        <ol>
        <li>Warung Padang London, London: 6 Melior St, London SE1 3QP, Inggris</li>
        <li>The Rice Table, London: 15 Frith St, London W1D 4RE, Inggris</li>
        <li>Bintang Restaurant, London: 93 Kentish Town Rd, London NW1 8NY, Inggris</li>
        <li>Nusa Dua Indonesian Restaurant, London: 309 Kennington Ln, London SE11 5QY, Inggris</li>
        <li>Satay House, London: 13 Sale Pl, London W2 1PX, Inggris</li>
        <li>Java Kitchen, Manchester: 140 Oxford Rd, Manchester M13 9GP, Inggris</li>
        <li>Jawa Indonesian Restaurant, Birmingham: 8 St Mary\'s Row, Moseley, Birmingham B13 8JG, Inggris</li>
        <li>Sari Rasa, Glasgow: 20 Woodlands Rd, Glasgow G3 6UR, Inggris</li>
        <li>Bali Brasserie, Hove: 7 Market St, Hove BN3 2DL, Inggris</li>
        <li>Java Indonesian Restaurant, Newcastle: 31-33 Queen St, Newcastle upon Tyne NE1 3UG, Inggris</li>
        </ol>
        <p>Pastikan untuk memeriksa jam buka dan reservasi terlebih dahulu sebelum berkunjung ke restoran tersebut. Selamat menikmati makanan Indonesia di Inggris!</p>
        <p>Berikut adalah beberapa tips makan di Inggris Raya (Great Britain):</p>
        <ol>
        <li>Cari tahu sebelumnya tentang tempat makanan: Inggris Raya (Great Britain) memiliki berbagai macam restoran dan tempat makan, termasuk restoran makanan cepat saji dan restoran mewah. Sebelum berkunjung ke suatu tempat, pastikan untuk mencari tahu tentang restoran tersebut dan jenis makanan yang disajikan.</li>
        <li>Cobalah makanan lokal: Inggris Raya (Great Britain) memiliki makanan tradisional yang sangat enak seperti fish and chips, shepherd\'s pie, dan pudding. Cobalah makanan lokal ini untuk merasakan pengalaman yang autentik.</li>
        <li>Siapkan anggaran: Harga makanan di Inggris Raya (Great Britain) bisa bervariasi, tergantung pada tempat makan dan jenis makanan yang Anda pesan. Pastikan untuk menyiapkan anggaran yang sesuai agar tidak mengalami kesulitan keuangan.</li>
        <li>Perhatikan waktu makan: Waktu makan di Inggris Raya (Great Britain) agak berbeda dari negara lain. Sarapan biasanya disajikan dari pagi hingga sekitar jam 10.30 pagi, makan siang dari jam 12 siang hingga 2.30 sore, dan makan malam dari jam 6 malam hingga 10 malam.</li>
        <li>Waspadai bahasa Inggris yang berbeda: Bahasa Inggris yang digunakan di Inggris Raya (Great Britain) bisa berbeda dengan bahasa Inggris yang digunakan di negara lain, terutama dalam hal kosakata makanan. Pastikan untuk bertanya jika tidak mengerti dan jangan ragu untuk meminta saran atau rekomendasi.</li>
        <li>Tipping: Tipping atau memberikan tip di restoran di Inggris Raya (Great Britain) adalah hal yang biasa. Biasanya diberikan sekitar 10-15% dari total tagihan. Namun, pastikan untuk memeriksa terlebih dahulu apakah tip sudah termasuk dalam tagihan atau tidak.</li>
        </ol>
        <p>Dengan mengikuti tips ini, Anda akan lebih siap untuk menikmati pengalaman kuliner di Inggris Raya (Great Britain) dengan baik dan benar. Selamat mencoba makanan yang enak dan nikmati perjalanan Anda!</p>',
                'shopping' => '<p>Inggris Raya (Great Britain) memiliki banyak pusat perbelanjaan yang menawarkan berbagai macam barang, mulai dari pakaian, aksesori, kosmetik, hingga peralatan elektronik. Berikut adalah beberapa pusat perbelanjaan terkenal di Inggris Raya (Great Britain):</p>
        <ol>
        <li>Westfield London: Terletak di Shepherds Bush, London, Westfield London adalah salah satu pusat perbelanjaan terbesar di Eropa, dengan lebih dari 300 toko yang menawarkan berbagai macam merek terkenal.</li>
        <li>Westfield Stratford City: Terletak di Stratford, London, Westfield Stratford City adalah pusat perbelanjaan terbesar di Eropa dengan luas sekitar 1,9 juta kaki persegi, dan menawarkan lebih dari 350 toko.</li>
        <li>Bluewater: Terletak di Greenhithe, Kent, Bluewater adalah pusat perbelanjaan terbesar kedua di Inggris, dengan lebih dari 300 toko yang menawarkan berbagai macam merek terkenal.</li>
        <li>The Bullring: Terletak di Birmingham, The Bullring adalah pusat perbelanjaan terkenal di kota tersebut, dengan lebih dari 200 toko yang menawarkan berbagai macam barang.</li>
        <li>Manchester Arndale: Terletak di pusat kota Manchester, Manchester Arndale adalah pusat perbelanjaan terbesar di kota tersebut, dengan lebih dari 200 toko yang menawarkan berbagai macam barang.</li>
        <li>Liverpool ONE: Terletak di Liverpool, Liverpool ONE adalah pusat perbelanjaan terbesar di kota tersebut, dengan lebih dari 170 toko yang menawarkan berbagai macam barang.</li>
        <li>The Oracle: Terletak di Reading, The Oracle adalah pusat perbelanjaan terkenal di kota tersebut, dengan lebih dari 80 toko yang menawarkan berbagai macam barang.</li>
        </ol>
        <p>Itulah beberapa pusat perbelanjaan terkenal di Inggris Raya (Great Britain) yang dapat dikunjungi. Semoga informasi ini bermanfaat!</p>
        <p>Berikut adalah beberapa alamat butik-butik mewah di Inggris Raya (Great Britain) berdasarkan merek:</p>
        <ul>
        <li>Chanel: 158-159 New Bond Street, London; Sloane Street, London; Brompton Road, London; Edinburgh.</li>
        <li>Louis Vuitton: New Bond Street, London; Sloane Street, London; Westfield London; Manchester.</li>
        <li>Gucci: Sloane Street, London; Bond Street, London; Edinburgh; Manchester.</li>
        <li>Prada: Old Bond Street, London; Sloane Street, London.</li>
        <li>Dior: New Bond Street, London; Sloane Street, London.</li>
        <li>Hermès: New Bond Street, London; Sloane Street, London.</li>
        <li>Burberry: Regent Street, London; New Bond Street, London; Edinburgh.</li>
        <li>Versace: New Bond Street, London; Sloane Street, London.</li>
        <li>Jimmy Choo: New Bond Street, London; Sloane Street, London; Edinburgh.</li>
        <li>Alexander McQueen: Old Bond Street, London; Dover Street, London.</li>
        </ul>
        <p>Harap dicatat bahwa informasi ini dapat berubah sewaktu-waktu dan selalu disarankan untuk memeriksa situs web merek untuk alamat butik yang paling terbaru.</p>',
                'others' => '<p>Berikut adalah beberapa tips dan informasi penting yang perlu Anda ketahui sebelum melakukan perjalanan ke Inggris Raya (Great Britain):</p>
        <ol>
        <li>Visa dan Imigrasi: Untuk mengunjungi Inggris Raya (Great Britain), warga negara Indonesia memerlukan visa. Pastikan untuk memeriksa persyaratan visa yang berlaku untuk negara Anda sebelum melakukan perjalanan.</li>
        <li>Cuaca: Inggris Raya (Great Britain) memiliki iklim yang berubah-ubah dan dapat sangat dingin dan lembab terutama di musim dingin. Pastikan Anda membawa pakaian hangat dan persiapan yang tepat tergantung pada musim dan cuaca.</li>
        <li>Transportasi: Inggris Raya (Great Britain) memiliki jaringan transportasi yang luas, termasuk kereta api, bus, dan pesawat terbang. Untuk menikmati perjalanan yang lebih mudah, pertimbangkan untuk membeli kartu transportasi seperti Oyster Card untuk London.</li>
        <li>Makanan: Inggris Raya (Great Britain) memiliki masakan yang beragam dan unik, namun harga makanan dapat cukup mahal di beberapa tempat. Maka, pastikan Anda memperhitungkan anggaran makan Anda dengan bijak.</li>
        <li>Tips: Tipping di Inggris Raya (Great Britain) adalah praktik yang umum, biasanya sekitar 10-15% dari total tagihan. Pastikan untuk membayar tips dengan uang tunai dan cek apakah tips sudah termasuk dalam tagihan sebelumnya.</li>
        <li>Koneksi Internet: Internet Wi-Fi tersedia di sebagian besar tempat di Inggris Raya (Great Britain), namun jika Anda membutuhkan koneksi internet seluler yang cepat, pastikan untuk membeli SIM card lokal.</li>
        <li>Tempat-tempat yang wajib dikunjungi: Inggris Raya (Great Britain) memiliki banyak tempat menarik, seperti Stonehenge, Tower Bridge, The British Museum, Big Ben, Buckingham Palace, dan masih banyak lagi. Pastikan untuk merencanakan itinerary Anda sebelum melakukan perjalanan.</li></ol>
        <p>Berikut adalah beberapa tips untuk transportasi di Inggris Raya (Great Britain):</p>
        <ul>
        <li>Oyster Card: Jika Anda berada di London, pertimbangkan untuk membeli Oyster Card yang dapat digunakan untuk transportasi publik seperti bus, kereta bawah tanah (tube), dan DLR (Docklands Light Railway). Oyster Card juga memberikan diskon pada tiket transportasi.</li>
        <li>Kereta api: Kereta api di Inggris Raya (Great Britain) merupakan salah satu sarana transportasi terbaik untuk perjalanan antar kota. Anda dapat memesan tiket kereta api dengan harga diskon jika memesannya sebelumnya.</li>
        <li>Bus: Jaringan bus di Inggris Raya (Great Britain) cukup luas dan dapat membawa Anda ke berbagai destinasi. Anda dapat membeli tiket bus langsung di bus atau melalui aplikasi mobile.</li>
        <li>Taksi: Taksi di Inggris Raya (Great Britain) cukup mahal. Pastikan untuk menggunakan aplikasi taksi seperti Uber atau Bolt yang dapat memberikan estimasi harga sebelum melakukan perjalanan.</li>
        <li>Rental mobil: Jika Anda ingin mengunjungi tempat-tempat yang sulit dijangkau dengan transportasi publik, Anda dapat menyewa mobil. Namun, pastikan Anda memiliki SIM internasional dan cukup pengalaman dalam mengemudi di jalan-jalan kecil dan berliku di Inggris Raya (Great Britain).</li>
        </ul>
        <p>Sepeda: Banyak kota di Inggris Raya (Great Britain) memiliki jaringan jalur sepeda yang baik dan dapat digunakan untuk menjelajahi kota. Anda dapat menyewa sepeda dari stasiun sepeda publik atau toko sewa sepeda lokal.</p>',
                'views' => 9477,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-26 18:01:37',
            ],
            [
                'id' => 8,
                'name' => 'Italia',
                'title' => 'Kota-kota di Italia dan tempat-tempat di Vatikan yang patut dikunjungi',
                'slug' => 'italia',
                'international' => 'Italy',
                'codes' => 'it',
                'latitude' => '41.2924601',
                'longitude' => '12.5736108',
                'keywords' => 'italia, Roma, venesia, florence, milan, musium, eropa, renaissance, galeri',
                'description' => '<p class="dropcap">Italia dan Vatikan adalah dua destinasi wisata yang populer di Eropa. Italia terkenal karena sejarah, budaya, seni, dan arsitektur yang kaya, sedangkan Vatikan merupakan pusat spiritual dunia dan merupakan rumah bagi Gereja Katolik Roma.</p>
        <p>Di Italia, terdapat banyak tempat wisata menarik yang harus dikunjungi, antara lain:</p>
        <ol>
        <li>Roma: Kota ini merupakan pusat sejarah dan seni Italia. Ada banyak bangunan kuno seperti Colosseum, Forum Romawi, dan Kuil Vesta yang harus dikunjungi.</li>
        <li>Venesia: Venesia adalah kota air yang terkenal dengan kanal-kanalnya yang indah. Ada banyak tempat wisata menarik seperti Basilika St. Mark, Palazzo Ducale, dan Piazza San Marco.</li>
        <li>Florence: Kota ini terkenal sebagai pusat seni dan arsitektur Renaissance. Ada banyak museum dan galeri seni seperti Galeri Uffizi, Palazzo Vecchio, dan Gereja Santa Maria del Fiore.</li>
        <li>Milan: Milan terkenal sebagai pusat mode Italia dan juga memiliki banyak tempat wisata menarik seperti Katedral Duomo, La Scala Opera House, dan Museum Seni Brera.</li>
        </ol>
        <p>Sementara itu, di Vatikan, terdapat banyak tempat wisata menarik yang terkait dengan agama Katolik Roma. Beberapa tempat wisata yang harus dikunjungi antara lain:</p>
        <ol>
        <li>Basilika St. Peter: Basilika ini adalah salah satu bangunan gereja terbesar di dunia dan merupakan pusat spiritual bagi umat Katolik Roma.</li>
        <li>Museum Vatikan: Museum ini memiliki koleksi seni dan arkeologi yang luar biasa, termasuk lukisan dan skulptur karya Michelangelo dan Rafael.</li>
        <li>Kapel Sistina: Kapel ini terkenal dengan lukisan dinding dan langit-langit yang indah, termasuk karya Michelangelo yang terkenal, "Penciptaan Adam".</li>
        <li>Istana Apostolik: Istana ini adalah kediaman resmi Paus dan juga merupakan pusat administrasi Vatikan.</li>
        <li>Taman Vatikan: Taman yang indah ini terletak di belakang Basilika St. Peter dan merupakan tempat yang bagus untuk bersantai dan menikmati pemandangan yang indah.</li>
        </ol>
        <p>Jadi, Italia dan Vatikan adalah dua destinasi wisata yang menarik di Eropa. Keduanya memiliki banyak tempat wisata menarik yang harus dikunjungi, terutama bagi mereka yang tertarik dengan sejarah, seni, arsitektur, dan agama.</p>',
                'short_desc' => 'Italia dan Vatikan adalah dua destinasi wisata yang populer di Eropa. Italia terkenal karena sejarah, budaya, seni, dan arsitektur yang kaya, sedangkan Vatikan merupakan pusat spiritual dunia dan merupakan rumah bagi Gereja Katolik Roma.',
                'to_see' => '<strong>Menjumpai Pendeta Pope</strong><br><br>Jika anda berada di kota Vatican, maka anda mesti menjumpai Pope yang ada disana dan mendengarnya berbicara. Pada setiap hari rabu pagi pk. 10:30 pagi saat berada di tempatnya menetap (ia menghabiskan musim panas di Castel Gandolfo diluar kota), ia melakukannya untuk para hadirin. Jika cuaca baik maka ia selalu mengadakannya di St Peter\'s Square; jika tidak maka akan berlangsung di aula hadirin Pope Paul VI (Pope Paul VI Audience Hall).<br><br>Supaya bisa mendapatkan tiket masuk aula penyimakan pembicaraan Pope (Papal Audience), anda perlu membuat permohonan anda dalam bentuk tulisan ke distrik gurbernur daerah dari Kerumah-tanggaan Pope (Papal Household) paling sedikit 10 hari sebelumnya. Tiket-tiket gratis dan harus diambil baik sehari sebelum tanggal pembicaraannya ataupun di pagi harinya saat akan berlangsung. Penyimakan pembicaraannya akan terdiri dari sedikit pengajaran dan pembacaan yang sebagian besar dalam bahasa Italia, dan sebagian sisanya dalam bahasa Inggris, Perancis, Jerman, Spanyol, Polandia, Portugis dan terkadang bahasa lain tergantung daripada kelompok yang menghadiri. Pope tersebut akan memberikan ucapan selamat dalam tiap bahasa tersebut; dan kelompok-kelompok khusus yang menghadirinya, Kelompok-kelompok penyanyi (Choirs), dll. dari bemacam-macam negara akan mendapat suatu penyampaian.<br><br>Pada akhir penyimakan pembicaraannya, Pope ini akan berdoa bersama dengan semua yang menghadiri ruang tersebut. Tuhan kita (Our Father ) berdoa dalam bahasa Latin. Doa ini biasanya tertera di belakang tiket penyimakan pembicaraan Pope (Papal Audience). Pada akhir doa sebagai kepala daripada gereja Katolik (Head of the Catholic Church) ia akan memberikan harapan rahmat kebaikan dari disiplin alirannya (Apostolic Blessing) diatas himpunan keramaian serta melebar kepada orang-orang yang dicintai yang sedang sakit dan menderita, dan memberkati setiap benda-benda berkaitan dengan agama seperti manik-manik bunga mawar yang orang-orang telah bawa bersama-sama untuk tujuan mendapatkan berkah dan rahmat.<br><br>Hendaklah sebagai yang diharapkan untuk bergabung dengan kelompok-kelompok pengikut Katolik, dan kelompok-kelompok turis yang mengambil gambar menggunakan kamera. Suasananya tak jauh beda dengan satu pertandingan olahraga. Pengikut-pengikut dari segala penjuru dunia melambai-lambaikan umbul-umbul dan ada dorongan-dorongan mendadak/spontanitas dari lagu dan musik. <br><br><strong>Menghadiri Kumpulan Massa Di Gereja St. Peter</strong><br><br>Jika anda ada di kota Vatican, cobalah untuk menghadiri kumpulan massa di St Peter\'s Basilica. Terdapat banyak sekali massa setiap harinya, dan menghadirinya adalah sebuah pengalaman yang anda tidak akan ingin terluput darinya. Tetapi anda mesti ingat bahwasanya itu adalah sebuah keramaian massa dan bukan sebuah kesempatan berfoto-foto bagi turis-turis, maka dimohon anda bersikap saling menghargai dengan layak tatkala sedang menghadiri massa di sana. Bagaimanapun juga, meja gereja (altar) daripada Pope yang berada di bawah bentangan atas penutup (kanopi) dari Bernini (Bernini\'s Canopy) hanyalah digunakan untuk massa-massa yang diberikan oleh Pope tersebut. Menghadiri massa di gereja St. Peter yang sangat memukau adalah benar-benar suatu pengalaman keruhanian ketuhanan.<br><br><strong>Mentraktir Pizza Italia (Italian Pizza)</strong><br><br>Itali adalah rumahnya satu diantara makanan dan masakan yang paling disukai di dunia yakni pizza. Ia ada di dapur Naples (Kitchen of Naples) dimana pizza menjadi sebuah nama rumahtangga di seluruh dunia, mulai lahir. Kunjungilah Naples dimana hampir di semua tepi tempat teduhan dan pojokannya akan anda dapatkan kios penjualan pizza. Menu makanan di kios-kios tempat jajanan ini kelihatannya tidak pernah berakhir dengan keaneka ragaman makanan yang membangkitkan air liur. Pesan saja salah satunya maka gigitan pizza pertama yang hangat dan baru masak (fresh) akan membuat hari itu hari baik anda.<br><br><strong>Pergi Mendaki Melalui Rute-Rute Yang Ditandai Dengan Baik (Well Marked Out Routes)</strong><br><br>Anda dapat memilih untuk pergi dengan tur pendakian dengan pemanduan terlatih  atau anda dapat melakukan petualangan semuanya sendiri ke dalam hutan kecil pohon kayu, melewati bukit-bukit. Hal yang bisa anda lakukan ialah pergi mendaki sendiri karena kebanyakan rute terkenal semua sudah ditandai dengan rapi dan mengenakkan. Daerah pegunungan Alpine adalah tujuan pendakian yang paling popouler untuk kecantikannya dan tingkat kesulitannya yang berbeda-beda. Ada banyak tempat berteduh dan berlindung, dan pilihan yang akan menyesuaikan jalur pendakian yang memungkinkannya memilih tur pendakian untuk lebih dari sehari. Bagian utara  Appennines dan Alpi Apuane di Tuscany adalah tempat-tempat lain yang cocok untuk pendakian di Itali. <br><br><strong>Menghabiskan Satu Hari di Pemandian Sumber Air Panas (Thermal Spas)</strong><br><br>Itali telah dianggap sebagai tujuan utama untuk kesehatan dan peremajaan kembali turis. Dengan iklim yang sedang dan lembut dan memiliki harta karun tumbuh-tumbuhan obat dan jamu-jamuan, Itali telah dapat mempromosikan kesehatan turisasi di negara untuk   <br><br>beberapa tahun terakhir. Terdapat banyak bangunan sebagai tempat peristirahatan (resort) pemandian air panas (Spa) terkenal di negara ini, yang mana Abano Terme, Tombolo Talassa Resort and Montegrotto adalah yang terbaik.<br><br><strong>Berseluncur Salju Di Pegunungan Alpine (the Alp) Yang Indah</strong><br><br>Ketika sebuah negara memiliki pegunungan indah Alpine yang membentuk satu bagian besar dari gambaran daerah pinggir daratan (landscape), maka sangatlah sulit memisahkan kegiatan berseluncur salju  (skiing) dari sasaran perjalanan. Berski telah menjadi kegiatan utama yang dinikmati para turis di sini. Terdapat banyak bangunan dengan sarana peralatan lengkap untuk berski di Alp pada ketinggian yang berbeda-beda sehingga anda dapt memilih sesuai tingkat keterampilan anda sendiri. Kebanyakan dari resort ini memiliki seorang pelatih yang akan memberikan pelatihan cukup jika anda adalah seorang pemula. Waktu yang terbaik untuk menikmati periode berseluncur salju adalah dari bulan Desember hingga April.<br><br><strong>Nikmati Bersepeda di Lembah-Lembah dan Desa-Desa Past Picturesque (Past Picturesque Valleys &amp; Villages)</strong><br><br>Bersepeda adalah pilihan baik di Itali bilamana banyak tempat di negara ini yang luar biasa memukau tapi tak dapat tercapai oleh mobil dan alat transportasi lain. Blah di lembah past picturesque dan lalui jalan sempit desa-desa yang penuh budaya untuk mendapatkan yang terbaik dari liburan anda di Itali. Daerah yang senantiasa sangat disukai untuk bersepeda ialah Tuscany and Umbria.<br><br><strong>Menikmati Suatu Hari Cokelat (Chocolaty Day)</strong><br><br>Eurochocolate  adalah satu dari sebuah festival ramah dan festival cokelat terbesar dimanapun didunia. Mereka mengatakan kunjungilah festival dan merasa seakan anda Tuhan bilamana anda di kelilingi dengan cokelat yang ia itu makanan dewa-dewa. Diadakan di kota Perugia, seseorang dapat merasakan macam-macam cokelat yang berbeda dibawa ke tempat ini dari segala penjuru dunia. Setiap tahun festival Eurochocolate internasional telah tetap terus melihat lebih dari sejuta pengunjung. Selain dari merasakan contoh (sample) cokelat, disini anda akan melihat karya seni patung terbuat dari cokelat dan bahkan kehidupan malam bertemakan cokelat. Ada rumah orang Eskimo (Igloo) dan bahkan ada jalan cokelat yang dibuat selama festival.<br><br><strong>Melintasi Cerobong Vulcan (Vulcan’s Chimney) di pulau Vulcano</strong><br><br>Dibuat dengan satu tangan oleh dewa-dewa pencipta alam, pulau Vulcano adalah sebuah pencampuran akan mitologis, kecantikan dan kesenangan. Dinamakan dengan merujuk dewa angin Yunani yang berusaha untuk memimpin rumah  Odysseus dalam kisah puisi panjang oleh burung merpati hebat yang selalu dapat kembali pulang, pulau Vulcano adalah satu dari tujuh pulau-pulau Aeolian yang terpisah dari pesisir daratan Sicily. Waktu terbaik untuk mengunjuni daerah ini adalah pada saat berlangsungnya festival tahunan Ferragosto (Ferragosto festival) pada bulan Agustus dimana pulau tersebut menjadi suatu daratan kegembiraan dengan musik, kegilaan, minuman alkohol bercampur buah (cocktail) dan sebuah pemandangan garis pemisah antara pulau tersebut dan langit dalam suasana terbuka yang tak terkalahkan.<br><br><strong>Menaiki Sampan Vaporetto Di Venice</strong><br><br>Jika anda pikir menaiki gondola ialah satu-satunya jalan untuk berlayar melewati kanal air di dalam  kota Venice, pikir kembali. Pilihan lain yang mudah adalah sampan yang bernama vaporetto yang melayani tujuan yang hampir sama dengan yang sebelumnya. Segera lompat saja ke dalam salah satunya di larut malam dan bersiap sedia untuk sebuah pelayaran romantis di kehangatan Venice dengan menyantap es khas Italia (gelato). Tatkala anda melaju tenang melewati jalan-jalan dan bangunan-bangunan besar, nikmatilah kejayaan kota anggun ini.<br><br><strong>Mengendarai Mobil Sepanjang Pesisir Amalfi</strong><br><br>Sebuah perjalanan dengan mengendarai mobil sepanjang  pesisir Amalfi adalah satu kesenangan bagi para pelancong yang gemar hidup menjauh ke tepi tempat. Jalan tersebut menanjaki seluruh garis batas pesisir Italia dan menawarkan suatu pengendaraan mobil yang agak mencekam. Satu hal lain yang dapat anda lakukan adalah membiarkan seseorang lain melakukan penyetiran untuk anda dan anda hanya menikmati keindahah alam yang tak tertandingi dari bagian Italia ini. Tetapi boleh jadi tawaran yang paling menggugah hati adalah menduduki sadel sepeda dan rasakan deraan hawa udara pada muka anda.<br><br><strong>Berjemur/Mandi Sinar Matahari di Sardinia</strong><br><br>Bagian selatan Italia adalah suatu daerah yang dicintai yang sangat banyak menerima sinar matahari, tetapi Costa Smeralda adalah rumah bagi pantai-pantai indah yang tidak hanya di Italia, tetapi juga di dunia. Walaupun pantai-pantai ini sering dikunjungi oleh turis setempat, anda bagaimanapun juga dapat pergi ke sana dan menghabiskan satu hari di tempat yang merilekskan seluruh jiwa raga anda (total relaxation) di sebuah pantai emas.<br><br><strong>Menyaksikan Sebuah Pertandingan Sepakbola Italia</strong><br><br>Kepopuleran sepak bola di dunia adalah tak diragukan lagi. Demikianpun Italia tak berbeda dengan sepak bola mulai menyeruak sebagai satu macam agama. Orang-orang Itali merasa sangat bernafsu akan pertandingan sepak bola mereka dan akan klub-klubnya yang mereka dukung. Maka pesanlah tiket anda untuk sebuah pertandingan sepakbola dan saksikan sendiri kenyataan dan kebenarannya.<br><br><strong>Nikmatilah Es Gelato (Es Krim Khas Itali)</strong><br><br>Mengunjungi Venice dan tidak menelan beberapa liter es krim gelato adalah sama dengan mendatangi Paris lalu pulang tanpa mencicipi minuman anggur Perancis (French wine). Gelato adalah semacam tanda pengenalan diri akan kota Venice dan anda tidak sanggup untuk kehilangan dengannya. Dibuat dari susu dan krim yang banyak dikurangi, ini adalah jamuan memuaskan tanpa mengusik anda akan kalori yang anda terima.<br><br><strong>Mereguk Kenikmatan Minuman Anggur Di Kota Pompei</strong><br><br>Berita baik bagi para penilai citarasa minuman anggur (wine connoisseurs), yang memperhatikan setiap sesapan dari gelas-gelas mereka dan memperhatikan bagaimana keinginan orang yang akan meminumnya sehingga setiap botol mesti diisi dengan sari anggur. Yang anda miliki hanyalah suatu kesempatan untuk merasakan suatu jenis minuman anggur yang desebut minuman anggur vulkanis kuno (Ancient Volcanic Wine) yang hanya ditemukan di Pompei, Itali. Terutama sekali apabila anda sedang berada di Itali, pencicipan segala ragam jenis minuman anggur adalah suatu kemestian dan disinilah tempatnya dimana minuman anggur vulkanik kuno dengan layak tepat memenuhinya. Lima kebun anggur kuno telah digali dan diangkat keatas oleh para  arkeolog yang mana sebagiannya telah berusia 2000 tahun. Dengan menggunakan teknologi terkini dan keluarga Mastroberardino telah diminta untuk menanam kembali beberapa jenis tanaman (varitas-varitas) anggur yang dahulu kala ada di tempat yang sama. Proyek tersebut dikerjakan oleh Soprintendenza Archeologica dan Società Mastroberardino, yang bertujuan kuat untuk tidak hanya menemukan kembali minuman-minuman anggur tetapi juga demi untuk menyampaikan warisan ini kepada anak-anak turunannya dan untuk mengatakan pada mereka akan akar kebudayaan mereka yang pernah Pompei miliki.',
                'eatdrink' => '<p>Restoran Indonesia tidak terlalu umum di Italia atau di Vatikan. Namun, beberapa restoran Indonesia yang dikenal di Italia dan Vatikan adalah sebagai berikut:</p>
        <ol>
        <li>
        <p>Bali Express: Restoran ini terletak di kota Roma, Italia, dan menawarkan berbagai hidangan khas Bali seperti nasi campur, ayam betutu, dan bebek betutu.</p>
        </li>
        <li>
        <p>Ristorante Indonesiano: Terletak di kota Milan, Italia, restoran ini menyajikan berbagai hidangan khas Indonesia seperti nasi goreng, mie goreng, dan sate.</p>
        </li>
        <li>
        <p>Ristorante Jakarta: Restoran ini terletak di kota Roma, Italia, dan menawarkan berbagai hidangan khas Indonesia seperti soto ayam, nasi uduk, dan nasi padang.</p>
        </li>
        <li>
        <p>Kantin Duta Mas: Terletak di kota Roma, Italia, restoran ini menyajikan berbagai hidangan khas Indonesia seperti rendang, sate, dan gado-gado.</p>
        </li>
        <li>
        <p>Warung, Indonesian Restaurant: Restoran ini terletak di kota Vatikan dan menawarkan berbagai hidangan khas Indonesia seperti nasi goreng, mie goreng, dan ayam goreng.</p>
        </li>
        </ol>
        <p>Pastikan untuk memeriksa ulasan dan harga sebelum mengunjungi restoran Indonesia di Italia atau Vatikan. Beberapa restoran mungkin memiliki harga yang lebih tinggi karena bahan-bahan impor yang mahal.</p>
        <h3>Tips</h3>
        <p>Berikut adalah beberapa tips dan informasi penting yang perlu Anda ketahui saat ingin makan di Italia:</p>
        <ol>
        <li>
        <p>Jam makan: Jam makan di Italia lebih lambat dibandingkan dengan di negara-negara lain. Makan siang biasanya dimulai antara pukul 12.30 hingga 14.00, sedangkan makan malam dimulai antara pukul 19.30 hingga 21.30. Jadi pastikan untuk menyesuaikan jadwal makan Anda dengan jam makan di Italia.</p>
        </li>
        <li>
        <p>Tipping: Di Italia, biasanya tip atau pemberian tambahan untuk pelayan sudah termasuk dalam harga makanan dan minuman. Namun, jika Anda ingin memberikan tip ekstra, Anda bisa memberikan 5-10% dari total tagihan.</p>
        </li>
        <li>
        <p>Sarapan: Sarapan di Italia biasanya terdiri dari espresso atau cappuccino dan pastry. Jadi, jika Anda ingin makan sarapan yang lebih lengkap, pastikan untuk mencari hotel yang menyediakan sarapan kontinental.</p>
        </li>
        <li>
        <p>Porsi: Porsi makanan di Italia biasanya lebih kecil dibandingkan dengan di negara-negara lain. Namun, porsi ini sangat cocok dengan gaya hidup Italia yang lebih lambat dan santai. Jadi, jangan khawatir jika porsi makanannya terlihat kecil.</p>
        </li>
        <li>
        <p>Menu: Ketika Anda memesan makanan di Italia, pastikan untuk membaca menu dengan seksama. Beberapa hidangan mungkin memiliki bahan-bahan yang tidak familiar atau tidak disukai oleh beberapa orang.</p>
        </li>
        <li>
        <p>Restoran: Ada banyak restoran di Italia yang menawarkan berbagai jenis masakan seperti pizza, pasta, dan hidangan lokal khas daerah. Pastikan untuk mencari ulasan restoran dan memesan meja terlebih dahulu, terutama di restoran yang populer.</p>
        </li>
        <li>
        <p>Harga: Harga makanan di Italia bervariasi tergantung pada tempat dan jenis makanannya. Makanan di restoran biasanya lebih mahal daripada di kafe atau warung. Namun, ada juga banyak tempat makan murah di Italia yang menawarkan makanan yang enak dan terjangkau.</p>
        </li>
        </ol>
        <p>Dengan mengikuti tips dan informasi di atas, Anda bisa menikmati pengalaman kuliner yang lebih baik saat berlibur di Italia. Dan jangan lupa mencicipi makanan khas Italia. Berikut adalah beberapa kuliner yang wajib dicoba saat berlibur ke Italia:</p>
        <ol>
        <li>
        <p>Pizza Napoletana: Pizza Napoli merupakan salah satu makanan Italia yang paling terkenal di seluruh dunia. Pizza ini berasal dari Naples dan terkenal dengan pinggiran bulatnya yang tebal dan topping yang enak.</p>
        </li>
        <li>
        <p>Pasta: Ada banyak jenis pasta yang bisa dicoba di Italia, seperti spaghetti, linguine, fettuccine, dan lain-lain. Masing-masing jenis pasta biasanya disajikan dengan berbagai saus yang lezat, seperti saus tomat, pesto, dan saus daging.</p>
        </li>
        <li>
        <p>Gelato: Gelato merupakan es krim Italia yang terbuat dari bahan-bahan alami, seperti susu, gula, dan buah-buahan. Gelato di Italia terkenal dengan tekstur yang lembut dan rasa yang kaya.</p>
        </li>
        <li>
        <p>Risotto: Risotto adalah nasi yang dimasak dengan saus kaldu, biasanya dibuat dengan bahan-bahan seperti jamur, udang, kacang hijau, dan sayuran.</p>
        </li>
        <li>
        <p>Tiramisu: Tiramisu merupakan makanan penutup khas Italia yang terbuat dari biskuit ladyfinger yang dicelupkan ke dalam kopi dan lapisan mascarpone cheese yang lembut.</p>
        </li>
        <li>
        <p>Focaccia: Focaccia merupakan roti Italia yang sering disajikan sebagai camilan atau pembuka makanan. Roti ini biasanya diolesi dengan minyak zaitun dan dihiasi dengan bawang, rosemary, atau olive.</p>
        </li>
        <li>
        <p>Prosciutto: Prosciutto adalah daging ham Italia yang terkenal dengan rasa yang gurih dan lezat. Daging ham ini biasanya disajikan sebagai hidangan pembuka atau sebagai topping untuk pizza dan pasta.</p>
        </li>
        <li>
        <p>Bruschetta: Bruschetta adalah roti panggang yang diolesi dengan bawang putih dan minyak zaitun, dan dihiasi dengan tomat, basil, dan keju parmesan.</p>
        </li>
        </ol>
        <p>Pastikan untuk mencoba makanan-makanan khas Italia saat berlibur ke sana. Anda bisa menemukan restoran dan kafe yang menyajikan hidangan-hidangan ini di seluruh kota di Italia.</p>',
                'shopping' => '<p>Berikut adalah beberapa pusat perbelanjaan terbesar dan terkenal di Italia:</p>
        <ol>
        <li>Galleria Vittorio Emanuele II, Milan: Galleria Vittorio Emanuele II adalah pusat perbelanjaan tertua dan paling terkenal di Italia yang terletak di Milan. Pusat perbelanjaan ini memiliki arsitektur yang indah dan kaya sejarah, serta merupakan tempat bagi merek-merek fashion terkenal.</li>
        <li>Via Montenapoleone, Milan: Via Montenapoleone adalah jalan perbelanjaan mewah di Milan yang terkenal dengan merek-merek fashion dan toko-toko desainer. Di sini pengunjung dapat menemukan berbagai barang mewah dan fashion dengan kualitas terbaik.</li>
        <li>The Mall, Tuscany: The Mall adalah pusat perbelanjaan outlet yang terletak di Tuscany dan menawarkan merek-merek fashion terkenal dengan harga diskon. Pusat perbelanjaan ini merupakan tempat yang populer bagi wisatawan dan pemburu diskon.</li>
        <li>Rinascente, Rome: Rinascente adalah pusat perbelanjaan mewah di Roma yang menawarkan berbagai merek fashion terkenal, produk kosmetik, perhiasan, dan aksesoris. Pusat perbelanjaan ini juga memiliki pemandangan yang indah dari atapnya.</li>
        <li>La Rinascente, Milan: La Rinascente adalah pusat perbelanjaan terkenal di Milan yang menawarkan berbagai merek fashion terkenal, produk kosmetik, aksesoris, dan barang-barang rumah tangga.</li>
        <li>Il Centro, Arese: Il Centro adalah pusat perbelanjaan terbesar di Italia yang terletak di Arese, Milan. Pusat perbelanjaan ini menawarkan berbagai merek fashion terkenal, restoran, dan tempat hiburan.</li>
        <li>Porta di Roma, Rome: Porta di Roma adalah pusat perbelanjaan besar yang terletak di pinggiran kota Roma. Pusat perbelanjaan ini menawarkan berbagai merek fashion, restoran, bioskop, dan tempat hiburan.</li>
        </ol>
        <p>Demikian beberapa pusat perbelanjaan terbesar dan terkenal di Italia. Namun, selain pusat perbelanjaan, Italia juga memiliki berbagai pasar tradisional yang menarik dan menawarkan berbagai produk lokal dan khas Italia yang unik dan menarik.</p>
        <p>Berikut adalah beberapa alamat toko butik mewah di Italia berdasarkan merek:</p>
        <ol>
        <li>Gucci:
        <ul>
        <li>Gucci Milano Flagship Store, Via Monte Napoleone, 5, 20121 Milano MI, Italia</li>
        <li>Gucci Rome Flagship Store, Piazza di Spagna, 9, 00187 Roma RM, Italia</li>
        <li>Gucci Florence Flagship Store, Piazza della Signoria, 10, 50122 Firenze FI, Italia</li>
        </ul>
        </li>
        <li>Prada:
        <ul>
        <li>Prada Galleria Vittorio Emanuele II, Galleria Vittorio Emanuele II, 20121 Milano MI, Italia</li>
        <li>Prada Rome Boutique, Via dei Condotti, 88, 00187 Roma RM, Italia</li>
        <li>Prada Florence Boutique, Via de\' Tornabuoni, 56/r, 50123 Firenze FI, Italia</li>
        </ul>
        </li>
        <li>Versace:
        <ul>
        <li>Versace Milano Boutique, Via Montenapoleone, 11, 20121 Milano MI, Italia</li>
        <li>Versace Rome Boutique, Piazza di Spagna, 31, 00187 Roma RM, Italia</li>
        <li>Versace Florence Boutique, Via de\' Tornabuoni, 83, 50123 Firenze FI, Italia</li>
        </ul>
        </li>
        <li>Dolce &amp; Gabbana:
        <ul>
        <li>Dolce &amp; Gabbana Milano Boutique, Corso Venezia, 15, 20121 Milano MI, Italia</li>
        <li>Dolce &amp; Gabbana Rome Boutique, Via dei Condotti, 57, 00187 Roma RM, Italia</li>
        <li>Dolce &amp; Gabbana Florence Boutique, Via della Vigna Nuova, 24, 50123 Firenze FI, Italia</li>
        </ul>
        </li>
        <li>Valentino:
        <ul>
        <li>Valentino Milano Boutique, Via Montenapoleone, 20, 20121 Milano MI, Italia</li>
        <li>Valentino Rome Boutique, Via dei Condotti, 13, 00187 Roma RM, Italia</li>
        <li>Valentino Florence Boutique, Via de\' Tornabuoni, 31/r, 50123 Firenze FI, Italia</li>
        </ul>
        </li>
        <li>Salvatore Ferragamo:
        <ul>
        <li>Salvatore Ferragamo Milano Boutique, Via Montenapoleone, 3, 20121 Milano MI, Italia</li>
        <li>Salvatore Ferragamo Rome Boutique, Via dei Condotti, 57, 00187 Roma RM, Italia</li>
        <li>Salvatore Ferragamo Florence Boutique, Via de\' Tornabuoni, 4, 50123 Firenze FI, Italia</li>
        </ul>
        </li>
        <li>Fendi:
        <ul>
        <li>Fendi Milano Boutique, Via Montenapoleone, 9, 20121 Milano MI, Italia</li>
        <li>Fendi Rome Boutique, Via dei Condotti, 89, 00187 Roma RM, Italia</li>
        <li>Fendi Florence Boutique, Via de\' Tornabuoni, 84/r, 50123 Firenze FI, Italia</li>
        </ul>
        </li>
        <li>Bottega Veneta:
        <ul>
        <li>Bottega Veneta Milano Boutique, Via Montenapoleone, 5, 20121 Milano MI, Italia</li>
        <li>Bottega Veneta Rome Boutique, Via dei Condotti, 19, 00187 Roma RM, Italia</li>
        <li>Bottega Veneta Florence Boutique, Via de\' Tornabuoni, 67/r, 50123 Firenze FI, Italia</li>
        </ul>
        </li>
        <li>Armani:
        <ul>
        <li>Armani Milan Boutique, Via Montenapoleone, 31, 20121 Milano MI, Italia</li>
        <li>Armani Rome Boutique, Via dei Condotti, 77, 00187 Roma RM, Italia</li>
        <li>Armani Florence Boutique, Via de\' Tornabuoni, 83/r, 501</li>
        </ul>
        </li>
        </ol>
        
        <h3>MILAN</h3><p>Milan dikenal sebagai kota mode dan pusat fashion terkenal di dunia. Banyak desainer terkenal dan merek fashion dunia berasal dari Milan, dan kota ini menjadi tempat penting untuk mode dan industri kreatif terkait lainnya.</p>
        <p>Setiap tahun, Milan menyelenggarakan acara fashion week, yaitu Milan Fashion Week, yang menampilkan koleksi terbaru dari merek-merek terkenal dan mendatangkan para pembeli, pengamat, dan wartawan dari seluruh dunia. Selain itu, di Milan juga terdapat beberapa museum dan galeri seni yang menampilkan karya-karya terkait fashion dan desain, seperti Museo del Design Italiano dan Armani/Silos.</p>
        <p>Milan juga memiliki banyak pusat perbelanjaan dan butik fashion terkenal, seperti Galleria Vittorio Emanuele II dan Quadrilatero della Moda, yang menawarkan berbagai pilihan fashion dan aksesori dari merek-merek terkenal. Selain itu, kota ini juga memiliki banyak acara fashion dan festival, seperti Vogue Fashion\'s Night Out dan Milan Design Week, yang menarik perhatian para pencinta fashion dan desain dari seluruh dunia.</p>
        <p>Ada beberapa outlet terkenal di dekat Milan, Italia. Berikut adalah beberapa di antaranya:</p>
        <ol>
        <li>
        <p>Serravalle Designer Outlet: Terletak sekitar 50 km dari Milan, outlet ini merupakan outlet terbesar di Italia dan menawarkan lebih dari 300 merek terkenal dengan harga diskon. Beberapa merek yang tersedia di sana antara lain Armani, Dolce &amp; Gabbana, Gucci, dan Prada.</p>
        </li>
        <li>
        <p>Vicolungo The Style Outlets: Terletak sekitar 30 km dari Milan, outlet ini menawarkan lebih dari 150 merek fashion dan aksesori dengan harga diskon. Beberapa merek yang tersedia di sana antara lain Calvin Klein, Furla, Michael Kors, dan Versace.</p>
        </li>
        <li>
        <p>FoxTown Factory Stores: Terletak sekitar 80 km dari Milan, outlet ini menawarkan lebih dari 160 merek fashion dan aksesori dengan harga diskon. Beberapa merek yang tersedia di sana antara lain Burberry, Gucci, Prada, dan Salvatore Ferragamo.</p>
        </li>
        <li>
        <p>Franciacorta Outlet Village: Terletak sekitar 90 km dari Milan, outlet ini menawarkan lebih dari 160 merek fashion dan aksesori dengan harga diskon. Beberapa merek yang tersedia di sana antara lain Armani, Versace, dan Michael Kors.</p>
        </li>
        <li>
        <p>The Place Luxury Outlet: Terletak di kota Biella, sekitar 100 km dari Milan, outlet ini menawarkan lebih dari 100 merek fashion dan aksesori dengan harga diskon. Beberapa merek yang tersedia di sana antara lain Giorgio Armani, Saint Laurent, dan Valentino.</p>
        </li>
        </ol>
        <p>Jadi, jika Anda ingin berbelanja dengan harga diskon saat berada di dekat Milan, Anda dapat mengunjungi salah satu outlet terkenal di atas. Pastikan untuk memeriksa jam operasional, promo, dan penawaran diskon terbaru sebelum berkunjung ke sana.</p>
        <p>Berikut adalah beberapa hotel terkenal di Milan:</p>
        <ol>
        <li>
        <p><a title="Park Hyatt Milan" href="https://www.booking.com/hotel/it/park-hyatt-milano.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Park Hyatt Milan</a>: Hotel mewah yang terletak di Piazza del Duomo dan dekat dengan beberapa atraksi utama Milan, seperti Katedral Milan dan Teatro alla Scala.</p>
        </li>
        <li>
        <p><a title="Bulgari Hotel Milan" href="https://www.booking.com/hotel/it/bulgari-resorts.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Bulgari Hotel Milan</a>: Hotel mewah yang terletak di daerah Brera, dekat dengan beberapa galeri seni terkenal dan butik fashion.</p>
        </li>
        <li>
        <p><a title="Four Seasons Hotel Milan" href="https://www.booking.com/hotel/it/four-seasons-milano.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Four Seasons Hotel Milan</a>: Hotel mewah yang terletak di kawasan Montenapoleone, pusat fashion dan perbelanjaan terkenal di Milan.</p>
        </li>
        <li>
        <p><a title="Armani Hotel Milan" href="https://www.booking.com/hotel/it/armani-milano.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Armani Hotel Milan</a>: Hotel mewah yang didesain oleh Giorgio Armani dan terletak di daerah Brera.</p>
        </li>
        <li>
        <p><a title="The Westin Palace Milan" href="https://www.booking.com/hotel/it/westinpalacemilano.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Westin Palace Milan</a>: Hotel mewah yang terletak di Piazza della Repubblica, dekat dengan beberapa atraksi utama Milan.</p>
        </li>
        <li>
        <p><a title="Mandarin Oriental Milan" href="https://www.booking.com/hotel/it/mandarin-oriental-milan.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Mandarin Oriental Milan</a>: Hotel mewah yang terletak di kawasan Montenapoleone, dekat dengan beberapa butik fashion dan restoran terkenal.</p>
        </li>
        <li>
        <p><a title="Grand Hotel et de Milan" href="https://www.booking.com/hotel/it/grand-et-de-milan.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Grand Hotel et de Milan</a>: Hotel mewah yang terletak di dekat Teatro alla Scala dan Katedral Milan.</p>
        </li>
        <li>
        <p><a title="Excelsior Hotel Gallia" href="https://www.booking.com/hotel/it/excelsior-hotel-gallia.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Excelsior Hotel Gallia</a>, a Luxury Collection Hotel: Hotel mewah yang terletak di dekat Stasiun Pusat Milan dan dekat dengan beberapa atraksi utama Milan.</p>
        </li>
        </ol>
        <p>Hotel-hotel tersebut menawarkan pelayanan yang berkualitas dan lokasi yang strategis di kota Milan. Namun, pastikan untuk mempertimbangkan budget dan preferensi Anda sebelum memilih hotel.</p>
        <p>Atau coba cek beberapa hotel murah di Milan yang dapat menjadi pilihan Anda:</p>
        <ol>
        <li>
        <p><a title="Ostello Bello" href="https://www.booking.com/hotel/it/ostello-bello.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Ostello Bello</a>: Hostel yang populer di Milan dan menawarkan kamar-kamar dorm dan pribadi dengan harga yang terjangkau.</p>
        </li>
        <li>
        <p><a title="MEININGER Milano Garibaldi" href="https://www.booking.com/hotel/it/meininger-milano-garibaldi.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">MEININGER Milano Garibaldi</a>: Hotel budget yang terletak di kawasan Garibaldi, dekat dengan beberapa atraksi utama Milan.</p>
        </li>
        <li>
        <p><a title="Hotel Sanpi Milano" href="https://www.booking.com/hotel/it/hotelsanpimilano.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Sanpi Milano</a>: Hotel budget yang terletak di daerah Porta Venezia, dekat dengan beberapa atraksi utama Milan.</p>
        </li>
        <li>
        <p>Hotel Ambasciatori: Hotel budget yang terletak di daerah Stasiun Pusat Milan, dekat dengan beberapa atraksi utama Milan.</p>
        </li>
        <li>
        <p><a title="B&amp;B Hotel Milano Sant\'Ambrogio" href="https://www.booking.com/hotel/it/b-amp-b-milano-sant-39-ambrogio.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">B&amp;B Hotel Milano Sant\'Ambrogio</a>: Hotel budget yang terletak di daerah Sant\'Ambrogio, dekat dengan beberapa atraksi utama Milan.</p>
        </li>
        </ol>
        <p>Pastikan untuk memeriksa ulasan dan fasilitas yang ditawarkan oleh hotel sebelum membuat reservasi. Jangan lupa juga untuk mempertimbangkan lokasi dan transportasi yang tersedia di sekitar hotel.</p>',
                'others' => '<p>Berikut adalah beberapa tips dan info untuk jalan-jalan di Italia dan Vatikan:</p>
        <ol>
        <li>Persiapkan jadwal dengan baik. Italia dan Vatikan memiliki banyak tempat wisata yang menarik, jadi pastikan Anda membuat jadwal yang baik dan menyesuaikan dengan waktu kunjungan Anda.</li>
        <li>Pakailah pakaian yang sopan. Saat mengunjungi Vatikan, pastikan Anda memakai pakaian yang sopan, terutama saat masuk ke dalam Basilika Santo Petrus dan Museum Vatikan. Dianjurkan untuk menghindari memakai celana pendek, rok mini, atau pakaian yang terlalu terbuka.</li>
        <li>Siapkan uang tunai. Meskipun kartu kredit umumnya diterima di Italia dan Vatikan, masih ada beberapa tempat yang menerima hanya uang tunai, seperti toko kecil dan pedagang kaki lima.</li>
        <li>Bersiaplah untuk berjalan kaki. Italia dan Vatikan memiliki banyak tempat wisata yang terkenal, seperti Colosseum, Fontana di Trevi, dan Basilika Santo Petrus, yang semuanya dapat dicapai dengan berjalan kaki. Pastikan Anda memakai sepatu yang nyaman dan siap untuk berjalan kaki dalam jarak yang cukup jauh.</li>
        <li>Periksa jam buka dan tutup. Pastikan Anda memeriksa jam buka dan tutup tempat wisata sebelum pergi, karena jam buka dan tutup bisa berbeda-beda tergantung pada musim dan hari libur.</li>
        <li>Gunakan transportasi umum. Seperti yang sudah disebutkan sebelumnya, transportasi umum seperti kereta dan bus adalah cara yang efektif dan mudah untuk bepergian di Italia dan Vatikan. Selain itu, Anda bisa menemukan taksi atau ojek yang dapat diambil di beberapa kota besar.</li>
        <li>Waspadalah terhadap penipuan. Seperti di negara lain, Italia dan Vatikan juga memiliki penipuan dan pencurian yang dapat terjadi, terutama di tempat wisata yang padat. Pastikan Anda selalu menjaga barang berharga Anda, seperti dompet dan ponsel, dan hati-hati terhadap orang yang mencoba menawarkan jasa yang tidak diminta.</li>
        </ol>
        <h3>Transportasi di Italia:</h3>
        <p>Kereta api adalah salah satu cara paling nyaman dan efisien untuk bepergian di Italia, terutama antara kota-kota besar seperti Roma, Florence, dan Venice. Anda bisa memesan tiket online di situs web Trenitalia atau Italo.</p>
        <p>Di kota-kota besar, seperti Roma dan Milan, ada juga sistem metro yang mudah digunakan dan cukup terjangkau. Anda bisa membeli tiket harian atau mingguan yang memungkinkan Anda naik bus, trem, atau metro dengan harga yang lebih terjangkau.</p>
        <p>Jika Anda ingin menjelajahi pedesaan Italia, menyewa mobil bisa menjadi pilihan yang baik. Namun, perlu diingat bahwa mengemudi di kota-kota besar di Italia bisa sangat rumit dan menantang, jadi disarankan untuk menghindari mengemudi di sana jika memungkinkan.</p>
        <h3>Transportasi di Vatikan:</h3>
        <p>Vatikan merupakan sebuah negara kecil yang terletak di dalam kota Roma, sehingga transportasi di dalam wilayah Vatikan cukup mudah dilakukan dengan berjalan kaki.</p>
        <p>Jika Anda ingin pergi dari Roma ke Vatikan, Anda bisa naik metro jalur A dan turun di stasiun Ottaviano-San Pietro atau Cipro-Musei Vaticani. Kemudian, Anda bisa melanjutkan perjalanan dengan berjalan kaki atau naik bus.</p>
        <p>Vatikan juga menawarkan layanan bus gratis yang menghubungkan beberapa tempat wisata utama di Vatikan, seperti Basilika Santo Petrus dan Museum Vatikan. Anda bisa mengambil bus di dekat stasiun kereta Roma San Pietro atau halte bus Piazza del Risorgimento.</p>',
                'views' => 20083,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-27 00:07:35',
            ],
            [
                'id' => 9,
                'name' => 'Yunani',
                'title' => 'Kota-kota cantik di Yunani',
                'slug' => 'yunani',
                'international' => 'Greece',
                'codes' => 'gr',
                'latitude' => '38.2749497',
                'longitude' => '23.8102717',
                'keywords' => '',
                'description' => '<p style="text-align: center; "><img src="https://jalan2eropa.com/assets/images/countries/photos/yunani.jpg" style="width: 500px;"><br></p><p class="dropcap">Perkataan Yunani selalu membawa imajinasi kita ke dunia aristektur yang luar biasa, kebudayaan yang berlimpah ruah serta sejarah&nbsp; kehebatan manusia. Sebagai negara yang terletak di perlintasan antara Asia dan Eropa, di masa lalu Yunani telah mengalami berbagai gejolak yang melibatkan penduduknya sepanjang perang yang keji. Diperintah oleh berbagai kekuatan kekaisaran yang berbeda dengan aturan yang berbeda pula telah mewariskan kekayaan budaya yang tidak terhingga.</p>
        <p>Berwisata di Yunani bukan berarti hanya mengunjungi berbagai tempat &nbsp;yang ataupun berbagai atraksi berbeda tetapi juga berarti mengarungi periode waktu yang berbeda. Bagian tenggara Eropa ini meliputi daerah seluas 131.990 km2 yang memiliki variasi pemandangan maupun klimat yang berbeda. Terletak di bagian selatan peninsula Balkan, Yunani berbatasan langsung dengan Albania, Bulgaria dan Yugoslavia (pada waktu yang lalu) di bagian utara serta Turki dan laut Ionian di sebelah barat. Dari 2000 gugusan pulau yang membentuk Yunani hanya sebanyak 166 pulau yang dihuni. Sebagian besar daratan Yunani tertutup oleh deretan pegunungan dimana pegunungan Pindos merupakan yang terluas. Keindahan bangunan berarsitektur lawas seperti Akropolis di Atena, kota Byzantine, kota Rhodes merupakan sebagian contoh dari kekayaan yang dimiliki Yunani pada zaman keemasannya.</p>
        <p>Yunani merupakan salah satu negara di dunia yang mengawali peradaban modern, bukan hanya untuk negara-negara Eropa tetapi juga untuk seluruh peradaban barat.&nbsp; Patut diingat bahwa di negeri ini berlangsung Olympic Games yang pertama di dunia. Yunani tidak hanya sebatas kejayaan sejarah, tetapi dilengkapi pula oleh berbagai atraksi alami nan molek dan infrastruktur pariwisata yang sangat mendasar sehingga menjadikan negeri tujuan wisata yang ternama. Atena disamping sebagai ibu kota Yunani juga merupakan kota terbesar di negeri ini. Wisatawan dapat menyaksikan perpaduan dengan Asia dengan melihat pasar yang bercorak warna-warni, jalanan macet dan penduduk yang ramah. Kota ini dipenuhi dengan bangunan-bangunan arkhaelogikal serta koleksi berbagai barang antik di dunia. Disamping Atena kota-kota lain seperti Rhodes, Serres, Volos, Ioannina dan Tessalonki merupakan tempat yang patut dikunjungi oleh wisatawan.&nbsp;</p>
        <p>Berikut adalah beberapa kota wisata di Yunani yang patut dikunjungi dengan hotel-hotel rekomendasi:</p>
        <ol>
        <li>
        <p>Athena adalah ibu kota Yunani dan kota tertua di Eropa. Kota ini memiliki banyak situs bersejarah seperti Akropolis, Parthenon, dan Agora. Rekomendasi hotel mahal di Athena adalah <a title="Hotel Grande Bretagne" href="https://www.booking.com/hotel/gr/grandbretagneathens.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Grande Bretagne</a> dan rekomendasi hotel murahnya adalah <a title="Athens Center Square Hotel" href="https://www.booking.com/hotel/gr/athens-center-square.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Athens Center Square Hotel</a>.</p>
        </li>
        <li>
        <p>Santorini adalah pulau yang indah dengan pemandangan laut yang memukau dan rumah putih tradisional yang cantik. Ada banyak pantai yang menakjubkan di pulau ini, serta kota-kota kecil yang menarik seperti Oia dan Fira. Rekomendasi hotel mahal di Santorini adalah <a title="Astra Suites" href="https://www.booking.com/hotel/gr/astra-suites.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Astra Suites</a> dan rekomendasi hotel murahnya adalah <a title="Hotel Thira\'s Dolphin" href="https://www.booking.com/hotel/gr/thira-s-dolphin.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Thira\'s Dolphin</a>.</p>
        </li>
        <li>
        <p>Mikonos adalah pulau yang terkenal dengan kehidupan malamnya yang ramai dan pantai-pantainya yang indah. Ada banyak bar dan klub malam di kota ini, serta pantai-pantai yang indah seperti Paradise Beach dan Super Paradise Beach. Rekomendasi hotel mahal di Mikonos adalah Belvedere Hotel dan rekomendasi hotel murahnya adalah <a title="Pension Marias Filoxenia" href="https://www.booking.com/hotel/gr/pension-marias.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Pension Marias Filoxenia</a>.</p>
        </li>
        <li>
        <p>Rhodes adalah pulau yang kaya akan sejarah dan keindahan alamnya. Ada banyak situs bersejarah seperti Palace of the Grand Master dan Kastil Rhodes, serta pantai-pantai yang indah seperti Lindos Beach dan Agathi Beach. Rekomendasi hotel mahal di Rhodes adalah <a title="Melenos Lindos" href="https://www.booking.com/hotel/gr/villa-melenos-lindos.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Melenos Lindos</a> dan rekomendasi hotel murahnya adalah Hotel Als.</p>
        </li>
        <li>
        <p>Kreta adalah pulau terbesar di Yunani dan memiliki banyak pantai yang menakjubkan serta situs arkeologi yang menarik. Ada banyak tempat wisata di pulau ini seperti Heraklion, Chania, dan Rethymnon. Rekomendasi hotel mahal di Kreta adalah <a title="Domes Noruz Chania" href="https://www.booking.com/hotel/gr/domes-noruz-chania.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Domes Noruz Chania</a> dan rekomendasi hotel murahnya adalah <a title="Hotel Kyknos Beach" href="https://www.booking.com/hotel/gr/kyknos.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Kyknos Beach</a>.</p>
        </li>
        </ol>
        <p>Itulah beberapa kota wisata di Yunani beserta rekomendasi hotel mahal dan murah. Namun, perlu diingat bahwa harga hotel dapat berubah tergantung pada musim dan waktu pemesanan. Pastikan untuk melakukan riset lebih lanjut dan memesan hotel dengan waktu yang tepat agar bisa mendapatkan harga yang lebih baik.</p>',
                'short_desc' => 'Yunani menyatakan bahwa setiap orang menetap akan menikmati perlindungan penuh akan kepercayaan mereka. Konstitusi Yunani menjamin kebebasan mutlak dalam beragama walaupun demikian, tidak ada rumah ibadah non-Kristen yang dapat ditemukan diAthena karena pendirian tempat ibadah agama lain ditentang oleh kalangan Kristen fundamentalis, keunikan lainnya setiap aktivitas berhubungan dengan pembangunan rumah ibadah resmi harus disetujui terlebih dahulu oleh Gereja Ortodoks. Nyatanya, agama mayoritas Yunani adalah Gereja Ortodoks Timur.',
                'to_see' => '<p>Ada banyak kegiatan atraksi wisata yang dapat dilakukan di Yunani, tergantung pada minat dan preferensi pengunjung. Berikut adalah beberapa kegiatan atraksi wisata populer di Yunani:</p>
        <ol>
        <li>
        <p>Mengunjungi situs arkeologi kuno: Yunani memiliki sejarah dan budaya kuno yang sangat kaya, dan banyak situs arkeologi kuno yang dapat dikunjungi, seperti Acropolis di Athena, Olympia, dan Knossos di Kreta.</p>
        </li>
        <li>
        <p>Berjalan-jalan di kota-kota kuno: Yunani memiliki banyak kota kuno yang masih berdiri tegak hingga kini, seperti Delphi, Mykonos, dan Santorini. Kota-kota ini menawarkan pemandangan yang spektakuler dan pengalaman yang unik untuk para pengunjung.</p>
        </li>
        <li>
        <p>Mengunjungi pulau-pulau Yunani: Yunani memiliki banyak pulau yang menakjubkan, seperti Santorini, Mykonos, Crete, dan Rhodes. Pulau-pulau ini menawarkan pantai-pantai yang indah, pemandangan alam yang menakjubkan, dan makanan laut yang lezat.</p>
        </li>
        <li>
        <p>Menikmati kehidupan malam Yunani: Kehidupan malam di Yunani sangat hidup dan beragam. Ada banyak klub malam, bar, dan restoran yang menyajikan makanan dan minuman lezat, serta musik dan tari-tarian Yunani yang menyenangkan.</p>
        </li>
        <li>
        <p>Berjalan-jalan di alam Yunani: Yunani memiliki banyak kawasan alam yang menakjubkan, seperti Gorge Samaria di Kreta, Pegunungan Pindus di daratan utama Yunani, dan Teluk Navagio di Zakynthos. Pengunjung dapat melakukan berbagai aktivitas seperti hiking, bersepeda, atau menjelajahi alam dengan mobil atau kapal.</p>
        </li>
        <li>
        <p>Berbelanja di pasar tradisional: Yunani memiliki banyak pasar tradisional yang menarik, seperti Pasar Monastiraki di Athena dan Pasar Athinas di Piraeus. Di pasar-pasar ini, pengunjung dapat membeli oleh-oleh khas Yunani seperti buah-buahan, minyak zaitun, kerajinan tangan, dan lain sebagainya.</p>
        </li>
        <li>
        <p>Menikmati kuliner Yunani: Kuliner Yunani terkenal dengan masakan-masakan tradisional yang lezat, seperti souvlaki, moussaka, dan gyros. Selain itu, Yunani juga terkenal dengan keju feta dan yoghurtnya yang lezat, serta anggurnya yang terkenal di seluruh dunia.</p>
        </li>
        </ol>
        <p>Itulah beberapa kegiatan atraksi wisata yang dapat dilakukan di Yunani. Dengan banyaknya pilihan kegiatan ini, para pengunjung pasti akan menemukan sesuatu yang sesuai dengan minat dan preferensi mereka.</p>',
                'eatdrink' => '<p>Sayangnya, saya tidak menemukan restoran Indonesia di Yunani. Meskipun banyak restoran di Yunani yang menyajikan masakan internasional, termasuk masakan Asia, namun kebanyakan dari mereka tidak menyajikan masakan Indonesia. Namun, para pengunjung masih dapat menemukan berbagai restoran yang menyajikan masakan Yunani.</p>
        <p>Wisata kuliner Yunani menawarkan banyak hidangan tradisional yang lezat dan unik, yang bisa menjadi pengalaman gastronomi yang tak terlupakan bagi para wisatawan. Beberapa hidangan tradisional Yunani yang populer antara lain:</p>
        <ol>
        <li>
        <p>Souvlaki: Hidangan ini terdiri dari potongan daging yang dibakar dan disajikan dalam roti pita dengan sayuran segar, kentang goreng, dan saus yogurt.</p>
        </li>
        <li>
        <p>Moussaka: Hidangan ini terdiri dari lapisan kentang, terong, daging cincang, dan saus Bechamel, yang kemudian dipanggang dalam oven.</p>
        </li>
        <li>
        <p>Greek Salad: Salad segar yang terdiri dari tomat, mentimun, bawang merah, dan keju feta, yang disajikan dengan dressing minyak zaitun dan jus lemon.</p>
        </li>
        <li>
        <p>Tzatziki: Saus yogurt klasik yang terbuat dari yogurt, mentimun, dan bawang putih.</p>
        </li>
        <li>
        <p>Baklava: Kue manis yang terbuat dari lapisan phyllo dan isian kacang atau walnut yang dicelupkan ke dalam sirup gula.</p>
        </li>
        <li>
        <p>Dolmades: Daun anggur yang diisi dengan nasi, daging cincang, atau sayuran, dan kemudian dimasak dalam saus tomat.</p>
        </li>
        <li>
        <p>Feta: Keju Yunani yang terbuat dari susu domba atau kambing, dan biasanya disajikan sebagai hidangan pembuka.</p>
        </li>
        <li>
        <p>Spanakopita: Kue yang terbuat dari lapisan phyllo dan isian bayam dan keju feta.</p>
        </li>
        </ol>
        <p>Selain itu, Yunani juga terkenal dengan minuman tradisionalnya seperti ouzo, rakomelo, dan metaxa. Ouzo adalah minuman keras beraroma anis yang disajikan dengan es dan air, sedangkan rakomelo adalah minuman keras tradisional yang terbuat dari racikan rakija dan madu. Metaxa adalah minuman keras brandy Yunani yang terbuat dari campuran anggur dan minuman keras lainnya.</p>
        <p>Bagi para pengunjung yang ingin mencoba hidangan tradisional Yunani, restoran-restoran lokal dan pasar-pasar di seluruh negeri menyediakan pilihan yang beragam dan lezat.</p>
        <p>Berikut adalah beberapa tips makan di Yunani yang dapat membantu Anda menikmati pengalaman kuliner yang lebih baik:</p>
        <ol>
        <li>
        <p>Cobalah hidangan tradisional: Yunani memiliki banyak hidangan tradisional yang lezat dan unik. Cobalah mencicipi hidangan-hidangan ini untuk merasakan keunikan cita rasa Yunani.</p>
        </li>
        <li>
        <p>Kunjungi pasar tradisional: Pasar tradisional di Yunani menyediakan berbagai macam makanan dan minuman lokal yang lezat. Kunjungi pasar-pasar ini untuk mencoba hidangan-hidangan khas Yunani yang segar dan lezat.</p>
        </li>
        <li>
        <p>Pilih restoran lokal: Pilih restoran-restoran yang ramai dan populer di kalangan penduduk setempat. Ini akan memberi Anda kesempatan untuk mencoba hidangan-hidangan lokal dan merasakan budaya kuliner Yunani.</p>
        </li>
        <li>
        <p>Hindari restoran turistik: Restoran-restoran yang terletak di pusat wisata seringkali memiliki harga yang lebih mahal dan menawarkan hidangan yang lebih umum. Cari tahu restoran-restoran lokal yang lebih tersembunyi dan menawarkan hidangan-hidangan lokal yang lebih autentik.</p>
        </li>
        <li>
        <p>Cari tahu jam makan: Waktu makan siang di Yunani biasanya dimulai antara pukul 12 siang dan 2 siang, sementara waktu makan malam dimulai antara pukul 8 malam dan 10 malam. Pastikan Anda menyesuaikan jadwal makan Anda dengan jam makan yang umum di Yunani.</p>
        </li>
        <li>
        <p>Cobalah minuman lokal: Yunani memiliki banyak minuman lokal yang lezat, termasuk ouzo, metaxa, dan anggur. Cobalah mencicipi minuman-minuman ini untuk merasakan keunikan minuman lokal Yunani.</p>
        </li>
        <li>
        <p>Jangan lupa tentang tips: Biasanya, restoran-restoran di Yunani sudah menambahkan tips dalam biaya layanan. Namun, jika Anda merasa layanan yang diberikan sangat baik, memberikan tips tambahan sebesar 5-10% adalah hal yang umum dilakukan di Yunani.</p>
        </li>
        </ol>',
                'shopping' => '<p>Berikut adalah beberapa pusat perbelanjaan populer di Yunani:</p>
        <ol>
        <li>
        <p>Ermou Street (Athena): Ermou Street adalah jalan perbelanjaan utama di Athena. Di sini pengunjung dapat menemukan berbagai toko-toko terkenal seperti Zara, H&amp;M, Mango, dan banyak toko-toko lainnya. Jalan ini juga dipenuhi dengan restoran, kafe, dan bar yang ramai dikunjungi.</p>
        </li>
        <li>
        <p>The Mall Athens (Athena): The Mall Athens adalah pusat perbelanjaan terbesar di Athena. Di sini pengunjung dapat menemukan berbagai toko-toko dari merek internasional dan lokal, bioskop, dan tempat makan.</p>
        </li>
        <li>
        <p>Golden Hall (Athena): Golden Hall adalah pusat perbelanjaan mewah di Athena. Di sini pengunjung dapat menemukan toko-toko dari merek-merek terkenal seperti Gucci, Prada, dan Armani, serta restoran-restoran mewah yang menyajikan hidangan yang lezat.</p>
        </li>
        <li>
        <p>Mediterranean Cosmos (Thessaloniki): Mediterranean Cosmos adalah pusat perbelanjaan terbesar di Thessaloniki. Di sini pengunjung dapat menemukan berbagai toko-toko dari merek-merek terkenal seperti Zara, H&amp;M, dan Mango, serta banyak restoran dan bioskop.</p>
        </li>
        <li>
        <p>McArthurGlen Designer Outlet Athens (Athena): McArthurGlen Designer Outlet Athens adalah outlet terbesar di Yunani. Di sini pengunjung dapat menemukan produk-produk dari merek-merek terkenal seperti Nike, Adidas, dan Calvin Klein dengan harga yang lebih murah.</p>
        </li>
        <li>
        <p>Apollonia Polis (Rhodes): Apollonia Polis adalah pusat perbelanjaan terbesar di Rhodes. Di sini pengunjung dapat menemukan berbagai toko-toko dari merek-merek terkenal seperti Zara, H&amp;M, dan Mango, serta banyak restoran dan kafe.</p>
        </li>
        </ol>
        <p>Itulah beberapa pusat perbelanjaan populer di Yunani. Dari pusat perbelanjaan mewah hingga outlet, Yunani memiliki banyak tempat untuk berbelanja bagi para pengunjung.</p>',
                'others' => '<p>Berikut adalah beberapa tips dan informasi global tentang wisata di Yunani:</p>
        <ol>
        <li>
        <p>Cuaca: Yunani memiliki cuaca yang hangat dan kering selama musim panas, dan sedikit lebih dingin selama musim dingin. Musim wisata yang paling sibuk di Yunani adalah antara bulan Juni dan Agustus, saat suhu udara paling hangat.</p>
        </li>
        <li>
        <p>Penginapan: Ada banyak pilihan penginapan di Yunani, termasuk hotel, apartemen, dan villa. Pilihlah penginapan yang sesuai dengan kebutuhan dan budget Anda.</p>
        </li>
        <li>
        <p>Transportasi: Ada beberapa pilihan transportasi di Yunani, termasuk taksi, bus, kereta api, dan kapal feri. Pastikan Anda merencanakan perjalanan Anda dengan baik dan menyesuaikan dengan pilihan transportasi yang tersedia.</p>
        </li>
        <li>
        <p>Bahasa: Bahasa resmi di Yunani adalah Bahasa Yunani, tetapi banyak orang di sektor pariwisata bisa berbicara bahasa Inggris.</p>
        </li>
        <li>
        <p>Pengeluaran: Biaya hidup di Yunani bisa bervariasi, tergantung pada daerah yang Anda kunjungi dan tipe akomodasi yang Anda pilih. Beberapa area wisata yang lebih populer bisa jadi lebih mahal. Namun, terdapat juga pilihan wisata budget-friendly yang dapat menghemat biaya perjalanan Anda.</p>
        </li>
        <li>
        <p>Makanan: Makanan Yunani terkenal dengan hidangan-hidangan tradisionalnya yang lezat. Cobalah hidangan khas seperti moussaka, souvlaki, dan gyros untuk merasakan cita rasa khas Yunani. Pastikan Anda mencari tahu restoran dan kafe lokal yang terbaik untuk mencicipi hidangan-hidangan lezat.</p>
        </li>
        <li>
        <p>Destinasi wisata: Yunani memiliki banyak tempat wisata menarik, termasuk situs arkeologi kuno, pulau-pulau indah, dan kota-kota yang kaya sejarah dan budaya. Beberapa tempat wisata yang populer di Yunani termasuk Akropolis di Athena, Santorini, Olympia, dan Delphi.</p>
        </li>
        <li>
        <p>Aktivitas wisata: Selain menikmati pemandangan yang indah, ada banyak kegiatan wisata yang dapat dilakukan di Yunani, termasuk berenang, snorkeling, olahraga air, hiking, dan berkunjung ke museum-museum lokal.</p>
        </li>
        <li>
        <p>Keamanan: Yunani tergolong aman untuk dikunjungi oleh para wisatawan. Namun, seperti di mana saja, selalu berhati-hati dengan barang-barang berharga Anda dan hindari daerah-daerah yang terkenal dengan kejahatan.</p>
        </li>
        <li>
        <p>Budaya: Yunani kaya akan budaya dan sejarahnya yang kaya. Pastikan Anda menunjukkan rasa hormat pada budaya Yunani dengan berpakaian sopan saat berkunjung ke situs-situs bersejarah dan monument, serta memperhatikan adab dalam interaksi dengan penduduk lokal.</p>
        </li>
        </ol>
        <p>Berikut adalah beberapa tips transportasi di Yunani:</p>
        <ol>
        <li>
        <p>Gunakan Taksi: Taksi dapat menjadi pilihan transportasi yang baik, terutama jika Anda perlu pergi ke tempat-tempat yang jauh dari kota atau di luar jangkauan transportasi umum. Pastikan untuk meminta harga sebelum naik taksi dan memastikan pengemudi menghidupkan argo meter.</p>
        </li>
        <li>
        <p>Bus: Bus adalah pilihan transportasi yang baik di Yunani, dan banyak kota memiliki sistem bus yang teratur dan terjangkau. Biasanya ada dua kelas bus, yaitu bus lokal dan bus ekspres. Bus lokal lebih lambat, tetapi lebih murah, sementara bus ekspres lebih cepat dan nyaman, tetapi biayanya lebih mahal.</p>
        </li>
        <li>
        <p>Kereta Api: Yunani memiliki jaringan kereta api yang baik, terutama di kota-kota besar seperti Athena dan Thessaloniki. Tiket kereta api dapat dibeli di stasiun kereta api atau online.</p>
        </li>
        <li>
        <p>Kapal Feri: Kapal feri adalah cara yang baik untuk mengeksplorasi pulau-pulau Yunani, dan ada banyak layanan kapal feri yang tersedia. Pastikan Anda memeriksa jadwal dan harga sebelum membeli tiket, karena kapal feri dapat menjadi sangat sibuk pada musim liburan.</p>
        </li>
        <li>
        <p>Sewa Mobil: Jika Anda ingin menjelajahi Yunani dengan lebih bebas dan fleksibel, menyewa mobil dapat menjadi pilihan yang baik. Namun, perlu diingat bahwa jalan-jalan di Yunani dapat menjadi sangat berliku dan sulit untuk dilalui.</p>
        </li>
        <li>
        <p>Berjalan kaki: Berjalan kaki adalah cara yang bagus untuk mengeksplorasi kota-kota Yunani yang indah. Selain itu, banyak situs arkeologi Yunani juga dapat diakses dengan berjalan kaki.</p>
        </li>
        <li>
        <p>Hindari berkendara di kota besar: Jika Anda tidak terbiasa dengan berkendara di kota-kota besar, sebaiknya hindari berkendara di Athena dan Thessaloniki. Lalu lintas bisa sangat padat dan sulit dikendalikan.</p>
        </li>
        <li>
        <p>Persiapkan uang tunai: Beberapa pilihan transportasi di Yunani menerima pembayaran tunai saja, jadi pastikan Anda selalu membawa cukup uang tunai untuk membayar biaya transportasi.</p>
        </li>
        <li>
        <p>Periksa jadwal transportasi secara online: Pastikan Anda memeriksa jadwal transportasi secara online sebelum memulai perjalanan Anda, karena jadwal bisa berubah terutama di musim liburan atau terjadi perubahan di layanan transportasi.</p>
        </li>
        <li>
        <p>Beri tip pada sopir taksi: Memberikan tip sekitar 10% dari biaya total di taksi adalah hal yang umum di Yunani.</p>
        </li>
        </ol>',
                'views' => 11072,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-26 22:14:02',
            ],
            [
                'id' => 13,
                'name' => 'Austria',
                'title' => ' 6 kegiatan yang menarik bagi turis yang berkunjung ke Austria',
                'slug' => 'austria',
                'international' => 'Austria',
                'codes' => 'at',
                'latitude' => '47.696472',
                'longitude' => '13.3457347',
                'keywords' => 'austria, Hofburg Palace, Mozart, Alpen, schnitzel, Salzburg Festival, Vienna',
                'description' => '<p><img style="width: 212.5px; height: 159.51px; float: right; margin:0 0 0 10px" src="https://jalan2eropa.com/assets/images/custom/uploaded_1477588266.jpg"></p>
        <p class="dropcap">Austria adalah sebuah negara yang terletak di Eropa Tengah dan terkenal dengan keindahan alam pegunungan dan warisan budaya yang kaya. Berikut adalah 6 kegiatan yang menarik bagi turis yang berkunjung ke Austria:</p>
        <ol>
        <li>Kesenian dan Musik: Austria terkenal dengan budaya musik dan kesenian yang kaya, terutama musik klasik. Beberapa tokoh besar dalam dunia musik seperti Mozart dan Strauss berasal dari Austria. Ada juga banyak festival musik dan teater yang diadakan di kota-kota seperti Salzburg dan Vienna.</li>
        <li>Arsitektur: Austria memiliki banyak bangunan-bangunan bersejarah dan istana yang indah, terutama di kota Vienna. Beberapa contoh bangunan yang menarik adalah Istana Schönbrunn dan Katedral Santo Stefanus.</li>
        <li>Alpen: Austria dikelilingi oleh Pegunungan Alpen yang menawarkan keindahan alam yang luar biasa. Ada banyak tempat wisata seperti ski resort, danau-danau dan tempat hiking yang menarik di wilayah ini.</li>
        <li>Kuliner: Austria memiliki masakan yang lezat dan terkenal, seperti strudel apel dan schnitzel. Selain itu, kopi dan kue juga menjadi populer di Austria.</li>
        <li>Olahraga: Austria memiliki sejarah yang panjang dalam olahraga musim dingin seperti ski dan snowboarding, dan juga mempunyai tradisi equestrian yang kuat, terutama di wilayah Wina dan Salzburg.</li>
        <li>Bagi turis yang mengunjungi Austria, pastikan untuk menikmati keindahan alam dan budaya yang kaya dalam negara ini. Jangan lupa untuk mencicipi makanan dan minuman lokal yang terkenal, dan mengunjungi beberapa tempat wisata terkenal seperti Istana Schönbrunn dan Salzburg.</li>
        </ol>',
                'short_desc' => 'Bagi turis yang mengunjungi Austria, pastikan untuk menikmati keindahan alam dan budaya yang kaya dalam negara ini. Jangan lupa untuk mencicipi makanan dan minuman lokal yang terkenal, dan mengunjungi beberapa tempat wisata terkenal seperti Istana Schönbrunn dan Salzburg.',
                'to_see' => '<p>Berikut adalah beberapa atraksi kegiatan unik di wisata Austria:</p>
        <ol>
        <li>
        <p>Melihat Keindahan Salju di Pegunungan Alpen: Austria dikenal karena pegunungannya yang indah dan terkenal seperti Pegunungan Alpen. Anda dapat menjelajahi pemandangan yang menakjubkan di sekitar pegunungan Alpen dengan berjalan-jalan atau bersepeda di sekitar danau-danau dan desa-desa yang indah di sekitar pegunungan.</p>
        </li>
        <li>
        <p>Bermain Ski dan Snowboard: Austria terkenal sebagai salah satu tujuan ski dan snowboard terbaik di dunia. Ada berbagai pilihan resort ski di Austria, seperti St. Anton, Ischgl, dan Kitzbuhel yang menawarkan berbagai macam fasilitas untuk para penggemar ski dan snowboard.</p>
        </li>
        <li>
        <p>Kunjungi Kastil Habsburg: Di Vienna, Anda dapat mengunjungi Kastil Habsburg, tempat keluarga kerajaan Austria hidup selama lebih dari 600 tahun. Kastil Habsburg menawarkan banyak atraksi, termasuk koleksi seni dan barang antik.</p>
        </li>
        <li>
        <p>Makan Gulung Sosis: Austria terkenal dengan gulung sosisnya yang lezat, dan Anda bisa mencoba berbagai varian gulung sosis di Wina. Beberapa tempat terkenal di Wina yang menyajikan gulung sosis adalah Bitzinger Wurstelstand, Wurstelprater, dan Bruder Frank.</p>
        </li>
        <li>
        <p>Menjelajahi Kebun Binatang Wina: Kebun Binatang Wina terletak di tengah kota dan menawarkan pengalaman yang unik dan menyenangkan untuk keluarga. Kebun binatang ini menampilkan berbagai macam satwa langka, termasuk panda besar, gajah, dan harimau.</p>
        </li>
        <li>
        <p>Mengunjungi Katedral Santo Stefanus: Katedral Santo Stefanus adalah salah satu atraksi terkenal di Wina dan merupakan simbol kota. Katedral ini menampilkan arsitektur yang indah dan memiliki pemandangan yang spektakuler dari menara loncengnya.</p>
        </li>
        <li>
        <p>Mengikuti Tur Musik Klasik: Austria terkenal dengan musik klasiknya, dan Anda dapat mengikuti tur musik klasik yang menampilkan konser musik klasik di berbagai tempat seperti Opera Wina atau Istana Belvedere.</p>
        </li>
        <li>
        <p>Mengunjungi Salzburg: Salzburg adalah kota kecil yang terkenal karena keindahan arsitekturnya dan merupakan tempat kelahiran Mozart. Anda dapat menjelajahi Salzburg dengan berjalan-jalan dan menikmati pemandangan yang indah.</p>
        </li>
        <li>
        <p>Menyusuri Sungai Danube: Sungai Danube adalah sungai terpanjang di Eropa dan terkenal dengan keindahan alamnya. Anda dapat menyusuri sungai Danube dengan kapal atau mengambil tur di sepanjang sungai.</p>
        </li>
        <li>
        <p>Menjelajahi Keindahan Tirol: Tirol adalah daerah pegunungan yang indah di Austria dan menawarkan berbagai macam kegiatan olahraga seperti hiking, bersepeda, dan paragliding. Anda juga dapat menikmati keindahan alam Tirol dengan berkuda atau menyusuri sungai dengan perahu.</p>
        </li>
        </ol>',
                'eatdrink' => '<p>Restoran Indonesia di Wina, Austria. Berikut adalah beberapa di antaranya:</p>
        <ol>
        <li>Warung Little Java - Restoran ini menawarkan masakan Indonesia yang autentik, seperti nasi goreng, rendang, dan sate. Terletak di Landstra&szlig;er Hauptstra&szlig;e 99, 1030 Wien.</li>
        <li>Dapur Indonesia - Restoran ini menawarkan masakan Indonesia yang lezat dan autentik, seperti mie goreng, nasi campur, dan nasi kuning. Terletak di Kinderspitalgasse 5, 1090 Wien.</li>
        <li>An-Di\'s Kitchen - Restoran ini menawarkan masakan Indonesia, Vietnam, dan Thailand. Terletak di M&auml;rzstra&szlig;e 42, 1150 Wien.</li>
        <li>Asian Cocos - Restoran ini menawarkan masakan Indonesia dan Asia, seperti nasi goreng, mie goreng, dan ayam penyet. Terletak di Landstra&szlig;er Hauptstra&szlig;e 103, 1030 Wien.</li>
        <li>Bali - Restoran ini menawarkan masakan Indonesia dan Asia, seperti nasi goreng, ayam goreng, dan sate. Terletak di Wiedner Hauptstra&szlig;e 42, 1040 Wien.</li>
        </ol>
        <p>Harap diingat bahwa informasi ini mungkin dapat berubah, jadi disarankan untuk memeriksa situs web atau menghubungi restoran sebelum berkunjung.</p>',
                'shopping' => '<img src="/assets/images/article/Mariahilferstrasse_(4008547760).jpg" style="width:300px;height:auto;float:right;margin:0px 0px 5px 5px" title="Mariahilferstrasse" alt="Mariahilferstrasse" class="img-thumbnail"><ol>
        <li>SCS Shopping City Süd, Wina: Pusat perbelanjaan terbesar di Austria, menawarkan lebih dari 330 toko yang menjual berbagai barang termasuk pakaian, aksesori, peralatan rumah tangga, dan banyak lagi.</li>
        <li>Donau Zentrum, Wina: Terletak di sepanjang Sungai Donau, pusat perbelanjaan ini memiliki lebih dari 260 toko dan restoran, serta bioskop dan arena bowling.</li>
        <li>Mariahilfer Straße, Wina: Jalan belanja terkenal di pusat kota Wina, menawarkan banyak toko dan butik yang menjual pakaian, aksesori, peralatan rumah tangga, dan banyak lagi.</li>
        <li>Designer Outlet Parndorf, Burgenland: Pusat perbelanjaan yang terletak di dekat perbatasan Austria-Hongaria ini menawarkan produk-produk merek terkenal dengan harga diskon.</li>
        <li>Europark, Salzburg: Pusat perbelanjaan terbesar di Salzburg, menawarkan lebih dari 130 toko yang menjual berbagai barang termasuk pakaian, aksesori, dan peralatan rumah tangga.</li>
        <li>DEZ Einkaufszentrum, Tirol: Pusat perbelanjaan terbesar di Innsbruck, menawarkan lebih dari 90 toko yang menjual barang-barang seperti pakaian, aksesori, peralatan rumah tangga, dan banyak lagi.</li>
        <li>Shopping City Seiersberg, Styria: Terletak di luar Graz, pusat perbelanjaan ini menawarkan lebih dari 200 toko yang menjual berbagai barang termasuk pakaian, aksesori, dan peralatan rumah tangga.</li>
        <li>Messepark, Vorarlberg: Pusat perbelanjaan terbesar di Vorarlberg, menawarkan lebih dari 50 toko yang menjual berbagai barang termasuk pakaian, aksesori, peralatan rumah tangga, dan banyak lagi.</li>
        <li>Rathaus Galerie, Wina: Terletak di pusat kota Wina, pusat perbelanjaan ini menawarkan lebih dari 20 toko yang menjual produk-produk seperti pakaian, aksesori, peralatan rumah tangga, dan lainnya.</li>
        <li>City Arkaden, Klagenfurt: Pusat perbelanjaan di pusat kota Klagenfurt, menawarkan lebih dari 70 toko yang menjual barang-barang seperti pakaian, aksesori, dan peralatan rumah tangga.</li>
        </ol><p>Untuk yang menyukai merek-merek mewah dan terkenal, di Austria juga ada beberapa butik-butik terkenal antara lain:</p>
        <ol>
        <li>Chanel - Terdapat butik Chanel di Kärntner Straße, Wina.</li>
        <li>Louis Vuitton - Terdapat butik Louis Vuitton di Kärntner Straße, Wina, serta di Judengasse, Salzburg.</li>
        <li>Prada - Terdapat butik Prada di Kärntner Straße, Wina, serta di Graben, Wina.</li>
        <li>Gucci - Terdapat butik Gucci di Kärntner Straße, Wina, serta di Judengasse, Salzburg.</li>
        <li>Dior - Terdapat butik Dior di Tuchlauben, Wina.</li>
        <li>Versace - Terdapat butik Versace di Tuchlauben, Wina.</li>
        <li>Armani - Terdapat butik Armani di Tuchlauben, Wina.</li>
        <li>Saint Laurent - Terdapat butik Saint Laurent di Goldenes Quartier, Wina.</li>
        <li>Valentino - Terdapat butik Valentino di Goldenes Quartier, Wina.</li>
        <li>Bottega Veneta - Terdapat butik Bottega Veneta di Goldenes Quartier, Wina.</li>
        <li>Cartier - Terdapat butik Cartier di Kohlmarkt, Wina.</li>
        <li>Swarovski - Terdapat butik Swarovski di Kohlmarkt, Wina.</li>
        <li>Hermès - Terdapat butik Hermès di Judengasse, Salzburg.</li>
        </ol>',
                'others' => '<h3>Beberapa tips perjalanan di Austria:</h3>
        <ol>
        <li>Musim dan cuaca: Pastikan untuk memeriksa cuaca sebelum berkunjung dan bawa pakaian yang sesuai dengan musim. Musim panas di Austria biasanya terjadi antara Juni hingga Agustus, sedangkan musim dingin antara Desember hingga Februari.</li>
        <li>Transportasi: Austria memiliki sistem transportasi yang baik, termasuk kereta api, bus, dan taksi. Untuk perjalanan yang lebih jauh, kereta api mungkin menjadi pilihan yang lebih nyaman dan ekonomis. Namun, jangan ragu untuk menjelajahi kota dengan berjalan kaki.</li>
        <li>Bahasa: Bahasa resmi di Austria adalah Jerman. Namun, di kota-kota wisata seperti Wina dan Salzburg, banyak orang yang bisa berbicara bahasa Inggris.</li>
        <li>Makanan dan minuman: Austria terkenal dengan makanan dan minumannya yang lezat, termasuk kue-kue seperti Apfelstrudel dan Sachertorte serta bir Austria yang terkenal. Pastikan untuk mencoba makanan dan minuman lokal selama perjalanan Anda.</li>
        <li>Budaya: Austria memiliki warisan budaya yang kaya, seperti seni dan arsitektur klasik, musik klasik, dan tarian rakyat. Pastikan untuk mengunjungi museum, galeri seni, dan teater selama perjalanan Anda.</li>
        <li>Keamanan: Austria umumnya dianggap sebagai negara yang aman. Namun, seperti di tempat lain, pastikan untuk tetap berhati-hati dan menjaga barang-barang berharga Anda agar tidak hilang.</li>
        <li>Dokumen perjalanan: Pastikan untuk membawa dokumen perjalanan yang lengkap dan valid selama perjalanan Anda, termasuk paspor, visa, dan tiket pesawat atau kereta api.</li>
        </ol>
        <p>Semoga tips-tips di atas bermanfaat dan membantu Anda merencanakan perjalanan yang menyenangkan di Austria.</p>',
                'views' => 15323,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-27 07:03:39',
            ],
            [
                'id' => 14,
                'name' => 'Spanyol',
                'title' => 'Kota-kota wisata di Spanyol yang keren',
                'slug' => 'spanyol',
                'international' => 'Spain',
                'codes' => 'es',
                'latitude' => '40.2085',
                'longitude' => '-3.713',
                'keywords' => '',
                'description' => '<p class="dropcap">Spanyol memiliki banyak kota wisata yang menarik untuk dikunjungi, mulai dari kota pantai hingga kota sejarah yang kaya akan budaya. Berikut ini adalah beberapa kota wisata populer di Spanyol dan rekomendasi hotel favorit dan terjangkau di setiap kota tersebut:</p>
        <ol>
        <li>Barcelona Barcelona adalah kota terbesar kedua di Spanyol yang terkenal dengan arsitektur Gaudi yang indah, taman-taman yang menakjubkan, dan pantai yang indah. Beberapa hotel favorit dan murah di Barcelona adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Hotel Barcelona House" href="https://www.booking.com/hotel/es/barcelona-house.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Barcelona House</a>: Terletak di tengah kota, dekat dengan banyak atraksi wisata.</li>
        <li><a title="Hotel Catalonia Portal de l\'Angel" href="https://www.booking.com/hotel/es/cataloniaalbinioni.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Catalonia Portal de l\'Angel</a>: Terletak di jantung kota dan dekat dengan jalan belanja populer.&nbsp;</li>
        </ul>
        </li>
        </ul>
        <ol start="2">
        <li>Madrid Madrid adalah ibu kota Spanyol dan salah satu kota terbesar di Eropa. Madrid memiliki banyak museum, taman, dan tempat wisata yang menarik. Beberapa hotel favorit dan murah di Madrid adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Hostal Persal" href="https://www.booking.com/hotel/es/persalmadrid.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hostal Persal</a>: Terletak di pusat kota dan dekat dengan beberapa atraksi wisata populer.</li>
        <li><a title="Hotel Regina" href="https://www.booking.com/hotel/es/regina-madrid.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Regina</a>: Terletak di pusat kota dan dekat dengan pusat perbelanjaan dan atraksi wisata.&nbsp;</li>
        </ul>
        </li>
        </ul>
        <ol start="3">
        <li>Valencia Valencia adalah kota pantai di Spanyol yang terkenal dengan arsitektur modern, taman-taman indah, dan pantai-pantai yang indah. Beberapa hotel favorit dan murah di Valencia adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Casual Valencia de las Artes" href="https://www.booking.com/hotel/es/casual-valencia-de-las-artes.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2">Casual Valencia de las Artes</a>: Terletak di dekat City of Arts and Sciences, taman-taman, dan pantai.&nbsp;</li>
        <li><a title="Hotel Villacarlos" href="https://www.booking.com/hotel/es/villacarlos.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Villacarlos</a>: Terletak di pusat kota dan dekat dengan pusat perbelanjaan dan atraksi wisata.&nbsp;</li>
        </ul>
        </li>
        </ul>
        <ol start="4">
        <li>Seville Seville adalah kota sejarah di Andalusia yang terkenal dengan arsitektur Moor dan katedral yang megah. Beberapa hotel favorit dan murah di Seville adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Hotel Patio de la Alameda" href="https://www.booking.com/hotel/es/patio-de-la-alameda.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Patio de la Alameda</a>: Terletak di daerah Alameda, dekat dengan beberapa atraksi wisata. Harga per malam mulai dari sekitar €50.</li>
        <li><a title="Hotel Don Paco" href="https://www.booking.com/hotel/es/donpaco_sevilla.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Don Paco</a>: Terletak di pusat kota dan dekat dengan katedral dan Alcazar. Harga per malam mulai dari sekitar €60.</li>
        </ul>
        </li>
        </ul>
        <ol start="5">
        <li>Granada Granada adalah kota yang terkenal dengan Alhambra, istana kuno yang sangat indah. Beberapa hotel favorit dan murah di Granada adalah:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Hotel Universal" href="https://www.booking.com/hotel/es/universal-granada.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Universal</a>: Terletak di pusat kota dan dekat dengan Alhambra. Harga per malam mulai dari sekitar €50.</li>
        <li><a title="Hotel Reino de Granada" href="https://www.booking.com/hotel/es/reino-de-granada-granada.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Reino de Granada</a>: Terletak di dekat Universitas Granada dan beberapa atraksi wisata lainnya. Harga per malam mulai dari sekitar €60.</li>
        </ul>
        </li>
        </ul>
        <p>Namun, perlu diingat bahwa harga hotel dapat berubah tergantung pada musim liburan</p>
        <p>dan ketersediaan kamar. Oleh karena itu, sebaiknya lakukan pengecekan harga dan ketersediaan kamar secara online atau langsung menghubungi hotel untuk mendapatkan informasi yang lebih akurat.</p>
        <p>Selain itu, jika Anda ingin menghemat pengeluaran akomodasi, bisa mempertimbangkan untuk menginap di hostel atau apartemen yang terletak di sekitar kota wisata tersebut. Selain lebih terjangkau, ini juga dapat memberikan pengalaman yang lebih lokal dan menyenangkan.</p>
        <p>Spanyol juga memiliki banyak kota wisata lainnya seperti Malaga, Bilbao, San Sebastian, dan banyak lagi. Jadi, pastikan untuk melakukan riset sebelum memutuskan kota wisata mana yang ingin dikunjungi dan mencari informasi mengenai hotel atau akomodasi yang sesuai dengan budget dan preferensi Anda.</p>',
                'short_desc' => 'Wilayah Spanyol dibatasi oleh Portugal di barat, serta Gibraltar dan Maroko di selatan. bersebelahan dengan Perancis dan Andorra di timur laut melalui Pegunungan Pirenia. Batas lautnya adalah Samudra Atlantik di barat dan Teluk Biscay di utara serta Laut Tengah di timur, di mana Spanyol memiliki wilayah Kepulauan Balearik. Di selatan, terdapat Selat Gibraltar. Kota-kota di Spanyol dengan jumlah penduduk terbanyak ialah Madrid, Barcelona, Valencia, Sevilla, dan Málaga.',
                'to_see' => '<p><strong>Berseluncur di atas salju</strong></p>
        <p>Hal yang terbaik tentang berseluncur di
        Spanyol, selain dari keindahannya secara alami, ialah kenyataannya bahwa ia
        biasa dikenal lebih murah daripada negara-negara Eropa Barat lainnya. Bulan
        Desember sampai Maret adalah waku yang baik untuk berseluncur salju ketika
        gunung-gunung diselimuti salju cukup banyak. Tempat perehatan turis (resort)
        yang terbaik di Spanyol ialah Sierra Nevada, the Pyrenees dan Galicia, Leon dan
        Cantabria yang ada di rentangan-rentangan pada sisi utara kota Madrid. Tempat
        perehatan Pyrenees mungkin yang termasyhur dari semuanya bagi peseluncur-peseluncur
        yang sangat nekat berani mati yang menginginkan suatu kemiringan lereng
        berkelas dunia. Dan Sierra Nevada sangat banyak diminati di antara turis-turis
        yang hanya hendak coba merasakan bagaimana rasanya berseluncur di Spanyol lalu
        kemudian jalan terus lagi kepada suatu daya tarik lain di Negeri tersebut. Hal
        terbaik daripada Sierra Nevada ialah kenyataan bahwa anda bisa menikmati
        berseluncur salju dan mengunjungi pantai-pantai pada hari yang sama.</p>
        <p><strong>Dapatkanlah Jalan Anda Dengan Melakukan
        Pendakian</strong></p>
        <p>Ini mungkin kegiatan terbaik yang seseorang
        bisa ikut menikmatinya di Spanyol. Spanyol memiliki beberapa jalur-jalur
        pendakian yang luar biasa yang mana segelintir darinya juga dinilai merupakan
        yang terbaik di Eropa. Terdapat banyak sekali panduan-panduan yang telah
        diterbitkan yang berkenaan dengan jalur-jalur pendakian di Spanyol. Pastikanlah
        anda memiliki dan menyimpannya; anda benar-benar tidak ingin kehilangan hal
        terbaik itu. Berjalan melalui pemukiman-pemukiman kampung adalah jalan baik
        untuk menemui orang-orang setempat dan belajar tentang kebudayaan mereka. Jika
        anda penasaran ingin tahu lebih jauh dan berjalan-jalan kaki, maka langsung
        saja lakukan sebuah perjalanan panjang menuju ke Camino de Santiago. Jalur ini
        telah digunakan secara teratur oleh orang-orang kristen yang melawat ke gereja
        suci mereka selama berabad-abad. Jalur ini akan membawa anda ke Pyrenees dan
        kemudian menyeberangi Pamplona Logrono dan Leon sebelum akhirnya berkumpul di
        gereja besar yang masyhur di Santiago de Compostela.</p>
        <p><strong>Bersepeda Gunung</strong></p>
        <p>Tidak seperti di negara-negara Eropa lainnya
        yang mana bersepeda bisa dilakukan sepanjang tahun, seorang turis mesti
        menunggu waktu yang tepat untuk mengikuti kegiatan bersepeda. Waktu yang
        terbaik untuk menikmati bersepeda di Spanyol adalah dari bulan September sampai
        November dan dari bulan Maret sampai Mei. Anda akan melihat kebanyakan
        orang-orang yang bersepeda ada di pulau Balearic yang lebih sedikit
        bergunung-gunung dan memiliki iklim sangat nyaman. Andalucia and Catalonia juga
        sangat masyhur akan jalur-jalur sepedanya yang mempesona. Anda pasti akan
        mendapatkan cukup sepeda-sepeda dari jasa penyewaan yang ada di tempat-tempat
        tujuan bersepeda. Akan tetapi jika anda berencana untuk menjelajahi jalur-jalur
        sepeda di tempat terkucil, maka lebih baik anda membawa dan menggunakan sepeda
        pribadi anda sendiri.</p>
        <p><strong>Menyaksikan Langsung Penampilan Peragaan
        Tari Salsa</strong></p>
        <p>Salsa boleh jadi ialah tarian yang paling
        dicari-caridi dunia. Ribuan pengunjung dari seluruh dunia bermaksud datang ke
        Spanyol untuk mendapatkan suatu sentuhan perasaan dari tarian paling romantis
        ini. Salsa secara harfiah (literally) dalam bahasa Spanyol berarti agak
        merangsang birahi, dan gerak-langkah tarian tersebut memang menyatakan langsung
        kebenaran namanya. Salsa menggabungkan pengaruh kebudayaan Afrika dan Eropa
        dalam gerak langkah tarian dan musiknya. Salsa boleh dikatakan aslinya adalah
        suatu jenis tarian berpasangan, akan tetapi tarian ini telah mengalami
        perubahan sehingga penampilan seorang diripun telah dikenal. Adalah suatu
        kejutan menyenangkan untuk bisa menyaksikan langsung penampilan tarian Salsa
        yang diperagakan langsung oleh penari-penari piawai berpengalaman. Anda dapat
        memutuskan untuk belajar tarian yang menggembirakan ini dari salah satu badan
        kebudayaan tarian ini.</p>
        <p><strong>Jadilah Anda Bagian dari Tomatina</strong></p>
        <p>Jika anda berada di Spanyol di sekitar bulan
        Agustus, janganlah sampai kehilangan kesempatan menjadi bagian dari La Tomatina
        yang masyhur, sebuah festival pertarungan makanan. Diatur secara tetap di kota
        Bunol, lebih dari 30.000 orang ambil bagian dalam festival sekali setahun ini.
        Diperkirakan lebih dari 1000 kg tomat dilempar ke jalan-jalan dalam satu hari.
        Terdapat beberapa peraturan tertentu yang harus dipatuhi oleh siapapun yang
        berpartisipasi dalam festival, seperti: seseorang tidak diizinkan membawa
        apapun yang bisa menyebabkan orang lain terluka serius, anda seharusnya
        memencet lebih dulu tomatnya sebelum melemparkannya, dan anda seharusnya tidak
        merobek pakaian orang lain. Meskipun peraturan terakhir ini sangat kurang
        dipedulikan dan dipatuhi sehingga banyak orang acapkali merobek pakaian orang
        lain. Dan anda sangat dianjurkan untuk memakai kacamata pelindung jika memang
        anda ingin ikut ambil bagian festival. Festival ini mulai dengan tembakan
        meriam air dan berlangsung selama tepat satu jam.</p>
        <p><strong>Perjalanan Petualangan Menggunakan Mobil
        Jeep (Jeep Safaris) : Mencapai Tempat Yang Tak Tercapai.</strong></p>
        <p>Sebagian tempat yang menurut pandangan mata
        sangat menarik yang ada di Spanyol ditelusuri paling baik dengan cara&nbsp;&nbsp; (jeep safari). Ini terutama dikarenakan
        tidak ada kendaraan umum lain bertugas melayani di sana ataupun dikarenakan
        medannya mungkin terlalu berat untuk dicapai dengan berjalan kaki. Tempat yang
        biasa disukai untuk perjalanan mobil jeep ini ialah sekitar El Teide yang
        merupakan salah satu gunung berapi terbesar di dunia. Perjalanan mobil jeep ini
        akan menyeberangi Vilaflor, desa tertinggi di Spanyol dan menyeberangi hutan
        Canarian Pine lalu menuju ke Mount Teide yang naik pada ketinggian lebih dari
        3718 meter. Kekayaan alam yang terdapat gunung-gunung yang mengelilingi
        sekitarnya dengan lembah-lembah hijaunya memperlihatkan pemandangan yang tak
        terlukiskan indahnya. Terdapat banyak badan usaha yang menawarkan tur
        perjalanan petualangan menggunakan mobil jeep untuk daerah tempat ini.</p>
        <p><strong>Menyaksikan Pertarungan Banteng Dengan
        Matador</strong></p>
        <p>Pertarungan banteng adalah sebuah olahraga
        yang melibatkan kekerasan dan luka berdarah yang telah menjadi bagian dari
        kebudayaan Spanyol. Dimulai pada abad ke-8 sebagai sebuah perayaan penobatan
        mahkota kerajaan kepada raja Alfonso VIII, olahraga ini telah dan tetap terus
        dijalankan sejak itu. Awal-awal waktu ia terbatas hanya disaksikan oleh para
        pejabat tinggi dan bangsawan ningrat, akan tetapi setelah olahraga tersebut
        dilarang oleh raja Felipe V, ia telah diambil penuh oleh orang-orang biasa dan
        umum. Dalam olahraga ini, seekor banteng dibiarkan masuk kedalam area
        pertunjukkan yang dibatasi (ring) di mana ia dijadikan menyerang ke selembar
        kain berwarna ungu-lembayung (magenta) yang dilambai-lambaikan oleh Matador di
        depan sang banteng, untuk melemahkannya, ia dihujam dengan banyak tombak. Sang
        Matador bergerak ke samping menghindari serangan banteng hingga ia membuktikan
        keunggulannya atas sang banteng dan kemudian pada babak terakhir Matador itu
        membunuh banteng tersebut dengan menusukkan atasnya sebilah pedang yang
        dinamakan \'espada\'. Olahraga ini dikatakan ditonton oleh jutaan warga Spanyol
        sepanjang tahun dan setiap pengajuan usulan (proposal) untuk melarang olahraga
        kejam ini dihadapi dengan tolakan kuat dari banyak orang Spanyol, yang
        menekankan bahwasanya ini adalah bagian dari kebudayaan mereka.</p>
        <p><strong>Makan Roti Isi Daging Dan Sayur (Roti
        Sandwich) Ciptaan Sendiri di Getafe, Spanyol</strong></p>
        <p>Jika kamu pernah mengunjungi Getafe,
        janganlah kehilangan perjalanan lapar ke Productos Extremeños. Ini adalah kedai
        makanan penjual sandwich yang disesuaikan harganya bagi kemampuan kalangan
        menengah kebawah dan pelajar. Tetapi apa yang membuatnya unik adalah cara
        berniaganya. Di sini, anda dapat memesan dan merencanakan sandwich anda sendiri
        dengan bermacam-macam isi pilihan anda. Ya, anda mendengarnya dengan benar,
        sekarang anda bisa menjadi pembuat roti sandiwich anda sendiri, dan tidak
        memakan roti sandwich lain yang terpaksa anda makan dari pilihan tawaran orang
        lain. Tempat tersebut benar-benar merupakan surga bagi orang-orang yang cinta
        dan getol makanan, dengan jenis-jenis makanan bergantungan di mana-mana dan rasanya
        bagai rumah anda sendiri tatkala pembuat sandwich berbicara dengan anda –
        sajian terbaik! Roti-roti sandwich itu berukuran sangat besar dan siap sedia
        dengan harga kurang dari lima Euro. Terdapat kemungkinan nama anda dan resep
        roti sandwich anda dicatat dan disimpan dalam pertunjukkan bagi para pelanggan.</p>
        <p><strong>Jadilah Anda Bagian Dari Festival Spanyol:
        Fiestas!</strong></p>
        <p>Ciri utama yang sama-sama ada diantara semua
        festival khas Spanyol (fiesta) ini adalah keceriaan dan kesenangannya. Anda
        dapat melihat sebuah iringan penuh warna bersama dengan orang-orang yang ikut
        ambil bagian (partisipant) yang mereka dipakaikan pakaian perancang baju,
        musik, penampilan-penampilan, penari-penari musik gitar Spanyol (flamenco) ada
        di mana-mana. Cobalah anda capai \'deruan lari banteng-banteng\' festival di
        Pamplona dari Basque Country, satu yang dirayakan di Andalucia atau fiesta of
        Las Fallas di kota Valencia. Tahapan dan urutan acaranya berbeda-beda dan
        kegembiraan yang akan anda peroleh pun satu macam yang berbeda sendiri.</p>
        <p><strong>Melakukan Beberapa Gerakan Flamenco</strong></p>
        <p>Tarian flamenco yang gerakannya sangat
        menarik merupakan suatu persembahan untuk anda saksikan dan apa lagi yang lebih
        baik daripada mengalaminya langsung dengan mencoba sedikit gerak-gerak langkah
        dengan satu diantara penari-penari. Gerakan-gerakan putar-balik angin berpusar
        dan tepukan-tepukan kaki menciptakan suatu suasana keadaan yang benar-benar
        berbeda dan dorongan untuk memukul lantai tempat menari menjadi tak
        tertahankan. Tempat yang terbaik untuk melakukan demikian ialah di Andalucia
        dan daerah selatan Spanyol.</p>
        <p><strong>Pesta Makan Makanan Laut di Red Sea
        Scorpions di El Faro</strong></p>
        <p>Makanan tidak dapat tetinggal di belakang
        pada setiap waktu liburan. Demikian pulalah halnya dengan Spanyol di mana anda
        dapat menikmati beberapa Red Sea Scorpions di El Faro,&nbsp; usaha jasa penyedia makanan dan masakan laut
        yang termasyhur. Ia berada di Cádiz yang merupakan sebuah tempat penuh
        keceriaan dengan festival-festival dan rombongan beriring-iringan nan indah
        terhiasi (karnaval-karnaval) sehingga menambah riang suasana hati orang-orang
        yang ada. Jadi anda bisa lihat beberapa perayaan sungguhan berjalan sekitar
        anda ketika anda sedang menikmati makanan di El Faro.</p>
        <p>Proses pemasakan dan penyiapan makanan dari
        red sea scorpions ada pada yang terbaiknya di restoran ini. Pengalaman yang
        anda akan dapati di sini akan merubah cara anda memandang akan makanan laut
        serta penanganannya.</p>
        <p><strong>Berpelesiran El Camino de Santiago</strong></p>
        <p>Hal ini merupakan sesuatu yang anda akan
        terus mengingatnya dalam waktu lama dan lambat hilang dari benak kapanpun anda
        bermaksud akan suatu pelesiran yang sebentar dan terjadwal di negeri asing.
        Anda tidak harus melakukan apapun, mulailah saja dengan kota Ponferrada dan
        kunjungi Castillode los Templario, Puerta del Reloj and the Plaza Mayor.</p>
        <p>Dari sana bergerak terus menuju Villafranca
        del Bierzo. Jika anda tertarik dengan gereja-gereja dan hal yang berkaitan
        dengannya, anda sungguh ada di tempat yang tepat karena Villafranca del Bierzo
        menjadi rumah bagi beberapa gereja bagus. Dan jangan lupa untuk mencari
        makanan-makanan ringan yang renyah yang dibuat oleh orang-orang setempat sebagaimana
        kota ini masyhur untuk hal itu. Anda bahkan bisa mendatangi Las Médulas, sebuah
        daerah pertambangan emas Romawi.</p>
        <p><strong>Minum Minuman Anggur Toro, di kota Toro</strong></p>
        <p>Terletak di propinsi Zamora dan berketinggian
        740 m di atas permukaan laut (dpl.), kota Toro merupakan pusat bagi sebagian
        bentuk kesenian tradisional dan yang terpenting ia adalah daerah penghasil
        minuman anggur yang utama. Setiap orang yang penuh nafsu semangat terhadap
        minuman anggur pasti akan menandai tempat ini akan hal sekeliling lingkungannya
        yang murni yang membawa para pelancong merasa ada di masa abad silam, sebagai
        satu tambahan atas minuman anggur kota Toro tersebut yang banyak di puji.</p>
        <p>Dikenal dengan kekuatan dan dampaknya,
        minuman anggur Toro sampai pada sebuah kedudukan berlambang yang mengikuti sebutannya:
        demi untuk memperingati petualang besar Columbus dan raja Alfonso IX dari Leon.
        Jenis-jenis yang sangat luas beragam dari anggur Tempranillo yang ditanam di kota
        Toro membuat minuman anggur lebih kaya kandungan dan kuat. Kunjungilah bar
        setempat dan pilih minuman anggur yang mana untuk diambil dari menu tertulis.
        Anda bisa berada di sana bertepatan dengan perburuan minuman anggur yang ada di
        musim apapun dalam tahunnya sebagaimana minuman anggur Toro itu luwes bersesuaian
        menurut perubahan-perubahan musim.&nbsp;</p>',
                'eatdrink' => '<p>Ada beberapa restoran Indonesia di Spanyol, di antaranya:</p>
        <ol>
        <li>Warung El Jard&iacute;n - Barcelona: Restoran ini menyajikan masakan Indonesia dengan nuansa taman yang asri. Menu andalannya adalah nasi goreng, mie goreng, dan ayam bakar.</li>
        <li>Restaurante Indonesia El Rinc&oacute;n de Yakarta - Madrid: Restoran ini telah beroperasi sejak tahun 1997 dan menjadi salah satu restoran Indonesia pertama di Spanyol. Restoran ini menyajikan hidangan Indonesia seperti nasi goreng, sate, dan rendang.</li>
        <li>Restaurante Indonesia Bali - Barcelona: Restoran ini memiliki suasana tradisional Bali dan menyajikan berbagai hidangan Indonesia seperti sate, rendang, dan gulai ayam.</li>
        <li>Indonesian Street Food - Valencia: Restoran ini menyajikan hidangan khas Indonesia seperti nasi goreng, mie goreng, dan ayam bakar dengan harga yang terjangkau.</li>
        <li>Sari Rasa - Barcelona: Restoran ini menyajikan hidangan khas Indonesia seperti nasi kuning, sate, dan ayam bakar dengan harga yang terjangkau.</li>
        </ol>
        <p>Itulah beberapa restoran Indonesia di Spanyol yang bisa Anda coba jika merindukan rasa masakan Indonesia. Namun, perlu diingat bahwa rasa dan bahan di restoran Indonesia di Spanyol bisa berbeda dengan di Indonesia karena pengaruh bahan lokal dan perubahan resep agar sesuai dengan lidah lokal.</p>
        <p>Spanyol memiliki banyak hidangan lezat dan unik yang pantas dicoba saat berkunjung ke negara ini. Berikut ini adalah beberapa tempat wisata kuliner yang terkenal di Spanyol:</p>
        <ol>
        <li>Mercado de la Boqueria - Barcelona: Pasar ini merupakan tempat wisata kuliner yang sangat populer di Barcelona. Terletak di jalan utama La Rambla, pasar ini menyajikan berbagai hidangan khas Spanyol seperti tapas, seafood, buah-buahan segar, dan banyak lagi.</li>
        <li>El Rastro - Madrid: Pasar ini terkenal sebagai tempat wisata kuliner terbaik di Madrid. Terdapat berbagai macam hidangan tradisional Spanyol seperti paella, churros, dan tapas.</li>
        <li>Basque Country - San Sebastian: San Sebastian terkenal sebagai kota kuliner di Spanyol dan Basque Country adalah tempat yang sempurna untuk mencicipi hidangan Basque yang otentik. Beberapa hidangan yang terkenal di kawasan ini antara lain pintxos (jenis tapas khas Basque), txangurro (kepiting), dan kokotxas (pangsit ikan).</li>
        <li>Valencia - Paella: Valencia merupakan kota asal paella, hidangan nasi khas Spanyol yang terkenal di seluruh dunia. Terdapat banyak restoran di Valencia yang menyajikan paella dengan berbagai jenis topping seperti ayam, udang, dan kerang.</li>
        <li>La Rioja - Wine Tour: La Rioja adalah kawasan penghasil anggur terkenal di Spanyol. Anda dapat mengunjungi beberapa winery dan mencicipi berbagai jenis anggur seperti Tempranillo dan Garnacha.</li>
        </ol>
        <p>Itulah beberapa tempat wisata kuliner yang terkenal di Spanyol. Namun, perlu diingat bahwa setiap daerah di Spanyol memiliki hidangan khasnya sendiri, jadi pastikan untuk mencoba hidangan lokal di setiap kota yang Anda kunjungi.</p>
        <p>Berikut adalah beberapa tips untuk makan di Spanyol:</p>
        <ol>
        <li>Ikuti jadwal makan Spanyol: Spanyol terkenal dengan jadwal makan siang yang panjang dan makan malam yang terlambat. Pastikan untuk mengikuti jadwal makan seperti penduduk setempat agar tidak kecewa jika restoran tidak buka atau terlalu sibuk di jam makan tertentu.</li>
        <li>Cari restoran lokal: Carilah restoran lokal yang dikelola oleh orang Spanyol, karena restoran ini cenderung menyajikan hidangan yang lebih autentik dan terpercaya.</li>
        <li>Cobalah tapas: Tapas adalah hidangan kecil yang biasanya dihidangkan dengan minuman dan merupakan bagian dari budaya makan Spanyol. Cobalah berbagai jenis tapas seperti tortilla, jamon, dan patatas bravas.</li>
        <li>Pesan hidangan utama untuk berbagi: Banyak restoran di Spanyol menyajikan hidangan utama yang cukup besar untuk dibagi dengan teman atau keluarga. Ini bisa lebih terjangkau daripada memesan satu hidangan untuk setiap orang.</li>
        <li>Mintalah rekomendasi: Jika Anda bingung memilih hidangan, jangan ragu untuk meminta rekomendasi dari pelayan atau chef di restoran.</li>
        <li>Cicipi berbagai jenis wine: Spanyol terkenal dengan produksi wine berkualitas tinggi. Coba beberapa jenis wine lokal dan nikmati pengalaman gastronomi yang lengkap.</li>
        <li>Pastikan Anda memahami bahasa Spanyol: Beberapa restoran di Spanyol mungkin tidak memiliki menu dalam bahasa Inggris atau bahasa lain, sehingga penting untuk memahami bahasa Spanyol. Bawa kamus atau gunakan aplikasi penerjemah jika diperlukan.</li>
        </ol>
        <p>Itulah beberapa tips untuk makan di Spanyol. Dengan mengikuti tips ini, Anda dapat menikmati makanan lokal yang lezat dan mendapatkan pengalaman kuliner yang tak terlupakan di Spanyol.</p>',
                'shopping' => '<p style="text-align: center; "><img src="https://jalan2eropa.com/assets/images/countries/photos/spanyol.jpg" style="width: 500px;"><br></p><p>Spanyol memiliki banyak pusat perbelanjaan yang populer, dari mal modern hingga pasar tradisional. Berikut ini adalah beberapa pusat perbelanjaan terkenal di Spanyol:</p>
        <ol>
        <li>El Corte Inglés: Merupakan jaringan pusat perbelanjaan terbesar di Spanyol dengan berbagai toko dan departemen yang menjual produk-produk seperti pakaian, kosmetik, elektronik, dan perhiasan. El Corte Inglés memiliki banyak toko di seluruh Spanyol, termasuk di kota-kota besar seperti Madrid, Barcelona, Valencia, dan Sevilla.</li>
        <li>La Roca Village: Terletak di luar Barcelona, La Roca Village adalah pusat perbelanjaan outlet dengan lebih dari 130 merek terkenal yang menjual produk-produk dengan harga diskon. Pusat perbelanjaan ini memiliki suasana yang mewah dan modern, serta menawarkan pengalaman belanja yang nyaman.</li>
        <li>Las Rozas Village: Terletak di luar Madrid, Las Rozas Village adalah pusat perbelanjaan outlet yang menawarkan produk-produk merek terkenal dengan harga diskon. Pusat perbelanjaan ini memiliki lebih dari 100 toko dan menyediakan berbagai layanan seperti shuttle bus gratis dari pusat kota Madrid.</li>
        <li>Maremagnum: Terletak di pelabuhan Barcelona, Maremagnum adalah pusat perbelanjaan modern yang menawarkan toko-toko, restoran, dan bioskop. Pusat perbelanjaan ini memiliki pemandangan laut yang indah dan terletak di dekat tempat wisata populer seperti Aquarium Barcelona dan La Rambla.</li>
        <li>Mercado de San Miguel: Merupakan pasar makanan tradisional yang terletak di pusat Madrid, dekat Plaza Mayor. Pasar ini menawarkan berbagai makanan dan minuman Spanyol seperti tapas, paella, dan anggur. Mercado de San Miguel adalah tempat yang populer di antara para pengunjung yang ingin mencicipi makanan dan minuman lokal.</li>
        </ol>
        <p>Itulah beberapa pusat perbelanjaan terkenal di Spanyol yang dapat menjadi pilihan untuk berbelanja dan menikmati pengalaman belanja yang berbeda-beda.</p>',
                'others' => '<p>Berikut adalah beberapa tips dan informasi yang dapat membantu Anda dalam perjalanan jalan-jalan di Spanyol:</p>
        <ol>
        <li>
        <p>Musim terbaik untuk berkunjung: Musim terbaik untuk berkunjung ke Spanyol adalah antara bulan April hingga Juni dan September hingga November ketika cuaca masih bersahabat dan wisatawan tidak terlalu banyak.</p>
        </li>
        <li>
        <p>Bahasa: Bahasa resmi di Spanyol adalah bahasa Spanyol (atau Castilia). Namun, di beberapa daerah seperti Catalonia, Basque, dan Galicia, bahasa daerah juga digunakan.</p>
        </li>
        <li>
        <p>Transportasi: Spanyol memiliki sistem transportasi yang baik, termasuk kereta api, bus, dan pesawat terbang. Perjalanan kereta api dan bus antar kota biasanya lebih murah daripada perjalanan dengan pesawat terbang.</p>
        </li>
        <li>
        <p>Tempat wisata: Spanyol memiliki banyak tempat wisata yang menarik seperti Alhambra di Granada, Sagrada Familia di Barcelona, ​​Alcazar di Sevilla, dan Palacio Real di Madrid. Pastikan Anda mempersiapkan waktu dan anggaran yang cukup untuk mengunjungi tempat-tempat ini.</p>
        </li>
        <li>
        <p>Kuliner: Spanyol dikenal dengan kuliner yang lezat seperti tapas, paella, churros, dan sangria. Jangan lewatkan untuk mencoba makanan dan minuman khas Spanyol saat Anda berada di sana.</p>
        </li>
        <li>
        <p>Keamanan: Seperti kebanyakan tempat wisata, pastikan Anda mengambil tindakan pencegahan keamanan seperti menjaga barang berharga Anda, menghindari daerah-daerah yang terkenal dengan kejahatan, dan menghindari memegang atau membawa barang-barang yang mencurigakan.</p>
        </li>
        <li>
        <p>Kebiasaan sosial: Di Spanyol, orang-orang sering makan siang siang dan makan malam cukup terlambat, sekitar pukul 9 malam atau bahkan lebih. Jadi, jangan kaget jika restoran atau toko-toko tutup untuk waktu siesta pada tengah hari.</p>
        </li>
        <li>
        <p>Wi-Fi dan akses internet: Anda bisa menemukan Wi-Fi gratis di banyak tempat umum di Spanyol, termasuk kafe, restoran, dan hotel. Namun, jika Anda ingin tetap terhubung selama perjalanan, pastikan untuk membeli kartu SIM atau paket data dari operator seluler lokal.</p>
        </li>
        </ol>
        <p>Spanyol terkenal dengan masakan yang lezat dan kaya rasa, dan setiap daerah memiliki masakan khas yang berbeda. Berikut adalah beberapa tips wisata kuliner yang dapat membantu Anda menikmati makanan dan minuman terbaik di Spanyol:</p>
        <ol>
        <li>
        <p>Coba Tapas: Tapas adalah hidangan kecil yang biasanya disajikan bersama minuman di bar atau restoran. Cobalah beberapa variasi tapas yang berbeda untuk mencicipi berbagai hidangan lezat dari Spanyol.</p>
        </li>
        <li>
        <p>Nikmati Paella: Paella adalah hidangan khas Valencia yang terdiri dari nasi dengan bahan tambahan seperti daging, ikan, atau seafood. Ini adalah hidangan yang harus dicoba saat Anda berada di Spanyol.</p>
        </li>
        <li>
        <p>Mencicipi Iberico Ham: Iberico Ham adalah daging babi yang diasinkan dan diangin-anginkan selama beberapa bulan hingga menghasilkan rasa yang lezat dan unik. Ini adalah salah satu hidangan paling terkenal di Spanyol.</p>
        </li>
        <li>
        <p>Cicipi Wine: Spanyol terkenal dengan anggurnya yang lezat dan Anda harus mencoba beberapa varietas anggur yang berbeda selama perjalanan Anda.</p>
        </li>
        <li>
        <p>Cobalah Dessert: Spanyol memiliki banyak dessert yang lezat seperti Churros, Crema Catalana, Tarta de Santiago, dan Leche Frita. Jangan lewatkan untuk mencicipi beberapa di antaranya.</p>
        </li>
        <li>
        <p>Jangan lewatkan pasar makanan: Spanyol memiliki pasar makanan tradisional yang menawarkan berbagai jenis makanan dan minuman. Cobalah beberapa hidangan dari pasar makanan setempat untuk mencicipi masakan yang otentik dan lezat.</p>
        </li>
        <li>
        <p>Cari restoran lokal: Hindari restoran yang ditujukan untuk wisatawan dan cari restoran lokal yang menawarkan masakan otentik dengan harga yang lebih terjangkau.</p>
        </li>
        <li>
        <p>Ikuti tur kuliner: Banyak kota di Spanyol menawarkan tur kuliner, yang membawa Anda mengelilingi berbagai tempat makan lokal dan memungkinkan Anda mencicipi berbagai hidangan khas.</p>
        </li>
        </ol>
        <p>Semoga tips ini membantu Anda menikmati kuliner terbaik di Spanyol dan membuat perjalanan Anda menjadi lebih berkesan. Selamat menikmati liburan di Spanyol!</p>',
                'views' => 15965,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-27 11:24:27',
            ],
            [
                'id' => 15,
                'name' => 'Denmark',
                'title' => '5 atraksi wisata terkenal di Denmark',
                'slug' => 'denmark',
                'international' => 'Denmark',
                'codes' => 'dk',
                'latitude' => '55.9396761',
                'longitude' => '9.5155848',
                'keywords' => 'denmark, nordik, eropa, norwegia, swedia, jerman, danau, ternak',
                'description' => '<p><img src="https://jalan2eropa.com/assets/images/countries/photos/denmark.jpg" class="img-responsive"><br></p><p class="dropcap">Denmark memiliki banyak tempat wisata menarik, dari kota-kota bersejarah hingga pemandangan alam yang menakjubkan. Beberapa tempat wisata populer di Denmark dan hotel-hotel disekitarnya adalah sebagai berikut:</p>
        <ol>
        <li>
        <p>Tivoli Gardens, Copenhagen - Tivoli Gardens adalah taman hiburan tertua di dunia yang masih beroperasi dan menawarkan wahana, atraksi, taman, restoran, dan pertunjukan musik. Beberapa hotel di dekat Tivoli Gardens adalah <a title="Hotel Danmark" href="https://www.booking.com/hotel/dk/hoteldanmarkcopenhagen.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Danmark</a>, <a title="Scandic Palace Hotel" href="https://www.booking.com/hotel/dk/scandic-palace.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Scandic Palace Hotel</a>, dan <a title="The Square Hotel" href="https://www.booking.com/hotel/dk/incredible-134m2-penthouse-in-the-city-center.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">The Square Hotel</a>.</p>
        </li>
        <li>
        <p>Nyhavn, Copenhagen - Nyhavn adalah pelabuhan tua di Copenhagen yang dikenal dengan rumah bergaya Belanda yang berwarna-warni dan kafe-kafe di tepinya. Beberapa hotel di dekat Nyhavn adalah <a title="Hotel Skt. Annae" href="https://www.booking.com/hotel/dk/hotel-skt-annae.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Skt. Annae</a>, <a title="71 Nyhavn Hotel" href="https://www.booking.com/hotel/dk/nyhavn.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">71 Nyhavn Hotel</a>, dan <a title="Copenhagen Admiral Hotel" href="https://www.booking.com/hotel/dk/copenhagen-admiral.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Copenhagen Admiral Hotel</a>.</p>
        </li>
        <li>
        <p>Legoland Billund - Legoland Billund adalah taman hiburan bermain-main dengan wahana dan atraksi bertema Lego yang cocok untuk keluarga. Beberapa hotel di dekat Legoland Billund adalah <a title="Hotel LEGOLAND" href="https://www.booking.com/hotel/dk/legoland.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel LEGOLAND</a>, <a title="Zleep Hotel Billund Airport" href="https://www.booking.com/hotel/dk/zleep-billund.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Zleep Hotel Billund Airport</a>, dan <a title="Lalandia Billund Resort" href="https://www.booking.com/hotel/dk/lalandia-billund.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Lalandia Billund Resort</a>.</p>
        </li>
        <li>
        <p>Odense - Odense adalah kota kelahiran penulis dongeng Denmark, Hans Christian Andersen, dan memiliki banyak situs bersejarah dan budaya yang menarik. Beberapa hotel di Odense adalah <a title="Hotel Plaza" href="https://www.booking.com/hotel/dk/hotel-plaza.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Plaza</a>, <a title="First Hotel Grand" href="https://www.booking.com/hotel/dk/first-grand.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">First Hotel Grand</a>, dan <a title="Best Western Hotel Knudsens Gaard" href="https://www.booking.com/hotel/dk/best-western-knudsens-gaard.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Best Western Hotel Knudsens Gaard</a>.</p>
        </li>
        <li>
        <p>Aarhus - Aarhus adalah kota kedua terbesar di Denmark dan memiliki berbagai atraksi menarik seperti Aros Aarhus Art Museum, Dewan Kota Aarhus, dan Tivoli Friheden. Beberapa hotel di Aarhus adalah <a title="Scandic Aarhus City" href="https://www.booking.com/hotel/dk/scandic-arhus-city.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Scandic Aarhus City</a>, <a title="Radisson Blu Scandinavia Hotel" href="https://www.booking.com/hotel/dk/radisson-sas-scandinavia-aarhus.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Radisson Blu Scandinavia Hotel</a>, dan <a title="Wakeup Aarhus Hotel" href="https://www.booking.com/hotel/dk/wakeup-aarhus.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Wakeup Aarhus Hotel</a>.</p>
        </li>
        </ol>
        <p>Pilihan hotel terbaik untuk Anda akan tergantung pada tempat wisata yang ingin Anda kunjungi dan anggaran Anda. Pastikan untuk melakukan penelitian lebih lanjut tentang lokasi dan fasilitas hotel sebelum membuat keputusan pemesanan.</p>',
                'short_desc' => 'Denmark adalah negara yang kaya akan warisan budaya dan sejarah, serta dikenal dengan keindahan alamnya yang menakjubkan. Selain itu, Denmark juga terkenal dengan pantai dan keindahan alamnya. Beberapa tempat yang direkomendasikan untuk dikunjungi adalah Pantai Skagen, Laut Utara, dan Taman Nasional Wadden Sea.',
                'to_see' => '<p>Denmark memiliki banyak atraksi menarik yang dapat dikunjungi selama liburan, berikut beberapa di antaranya:</p>
        <ol>
        <li>Taman Tivoli: Taman Tivoli merupakan taman hiburan tertua di dunia yang terletak di pusat kota Kopenhagen. Taman ini memiliki banyak atraksi dan wahana yang cocok untuk semua usia, seperti roller coaster, kincir ria, bioskop, dan masih banyak lagi.</li>
        <li>Istana Rosenborg: Istana Rosenborg merupakan istana abad ke-17 yang terletak di pusat Kopenhagen. Istana ini menawarkan pengalaman wisata sejarah yang menakjubkan, dengan koleksi perhiasan kerajaan dan ruangan yang mewah.</li>
        <li>Gereja Roskilde: Gereja Roskilde merupakan gereja katedral yang terletak di Roskilde, sekitar 30 kilometer barat daya Kopenhagen. Gereja ini memiliki arsitektur yang indah dan menampilkan kubah yang menakjubkan serta makam para raja Denmark.</li>
        <li>Legoland: Legoland adalah taman bermain bertema Lego yang terletak di kota Billund, Denmark. Taman ini memiliki banyak atraksi yang dibangun dengan bahan-bahan Lego, termasuk miniatur kota dan bangunan terkenal di dunia.</li>
        <li>Jelling Stones: Jelling Stones merupakan dua batu runic yang terletak di kota Jelling, Denmark. Batu-batu ini memiliki penting dalam sejarah Denmark karena dianggap sebagai tanda keberadaan Raja Gorm yang Agung, pendiri Denmark, dan putranya, Raja Harald Bluetooth.</li>
        <li>Odense: Odense adalah kota kelahiran Hans Christian Andersen, penulis dongeng terkenal. Di kota ini, Anda dapat mengunjungi Museum Hans Christian Andersen dan melihat berbagai objek yang terkait dengan kehidupan dan karya penulis tersebut.</li>
        <li>Kebun Binatang Copenhagen: Kebun Binatang Copenhagen merupakan kebun binatang yang terletak di Kopenhagen dan menawarkan berbagai macam satwa liar dan fasilitas modern, seperti pusat pameran, taman bermain anak, dan restoran.</li>
        </ol>
        <p>Itulah beberapa atraksi menarik di Denmark yang dapat dikunjungi selama liburan. Denmark memiliki banyak lagi tempat-tempat menarik lainnya yang dapat dijelajahi, terutama jika Anda menyukai sejarah, kebudayaan, dan arsitektur Eropa.</p>',
                'eatdrink' => '<p>Berikut adalah beberapa restoran Indonesia di Denmark beserta alamatnya:</p>
        <ol>
        <li>Warung Jawa, Copenhagen: N&oslash;rrebrogade 187, 2200 K&oslash;benhavn N, Denmark</li>
        <li>Padi, Copenhagen: Enghavevej 54, 1674 K&oslash;benhavn V, Denmark</li>
        <li>Java, Copenhagen: Reventlowsgade 16, 1651 K&oslash;benhavn V, Denmark</li>
        <li>Bali, Aalborg: Vesterbro 81, 9000 Aalborg, Denmark</li>
        <li>Sari Rasa, Aarhus: Frederiks All&eacute; 79, 8000 Aarhus C, Denmark</li>
        <li>Surabaya, Aarhus: Gr&oslash;nnegade 73, 8000 Aarhus C, Denmark</li>
        </ol>
        <p>Restoran-restoran tersebut menawarkan berbagai macam masakan Indonesia, seperti nasi goreng, rendang, sate, dan masih banyak lagi. Beberapa restoran tersebut mungkin juga menyajikan masakan Asia Tenggara lainnya. Perlu diingat bahwa harga di restoran Indonesia di Denmark bisa lebih mahal daripada harga di Indonesia, namun restoran-restoran tersebut menyajikan makanan yang autentik dan cocok bagi mereka yang ingin merasakan masakan Indonesia di Denmark.</p>
        <p>Berikut adalah beberapa tips yang dapat membantu saat makan di Denmark:</p>
        <ol>
        <li>Perhatikan jam makan: Biasanya di Denmark, sarapan disajikan dari pukul 7 pagi hingga 9 pagi, makan siang dari pukul 12 siang hingga 2 siang, dan makan malam dari pukul 6 sore hingga 9 malam. Beberapa restoran mungkin tutup pada hari Minggu atau Senin, jadi pastikan untuk mengecek jadwal operasional restoran sebelum berkunjung.</li>
        <li>Perhatikan etiket makan: Di Denmark, etiket makan yang baik meliputi menunggu sampai semua orang di meja duduk sebelum mulai makan, memotong makanan satu per satu, dan tidak bicara dengan mulut penuh.</li>
        <li>Cari restoran yang sesuai dengan anggaran: Harga makanan di Denmark dapat bervariasi dari yang murah hingga yang mahal. Pastikan untuk mengecek harga makanan di menu atau di situs web restoran sebelum pergi.</li>
        <li>Cobalah masakan lokal: Denmark memiliki makanan yang lezat dan unik, seperti sm&oslash;rrebr&oslash;d (roti panggang dengan berbagai topping), sup ikan (sup ikan dengan rempah-rempah), dan wienerbr&oslash;d (pastry khas Denmark). Cobalah makanan-makanan tersebut saat berkunjung ke Denmark.</li>
        <li>Bawa air minum: Air minum di Denmark umumnya aman diminum, tetapi botol air minum di restoran atau toko makanan bisa sangat mahal. Oleh karena itu, disarankan untuk membawa botol air minum sendiri dan mengisinya dari keran air.</li>
        </ol>
        <p>Jangan lupa tip: Biasanya di Denmark, tidak ada kewajiban untuk memberikan tip, tetapi jika Anda ingin memberikan tip, memberikan sekitar 10% dari harga makanan akan dianggap sebagai tanda terima kasih. Beberapa restoran mungkin juga sudah menambahkan biaya tip ke dalam tagihan, jadi pastikan untuk mengeceknya terlebih dahulu.</p>',
                'shopping' => '<p>Denmark memiliki beberapa pusat perbelanjaan terkenal yang dapat dikunjungi selama liburan atau berbelanja. Berikut adalah beberapa di antaranya:</p>
        <ol>
        <li>Str&oslash;get, Kopenhagen: Str&oslash;get merupakan jalan perbelanjaan utama di pusat kota Kopenhagen. Jalan ini menawarkan berbagai macam toko-toko, butik-butik, restoran, dan kafe yang menarik bagi pengunjung.</li>
        <li>Field\'s, Kopenhagen: Field\'s adalah pusat perbelanjaan terbesar di Skandinavia yang terletak di kota Kopenhagen. Pusat perbelanjaan ini menawarkan lebih dari 140 toko-toko, restoran, dan bioskop.</li>
        <li>Frederiksberg Centret, Kopenhagen: Frederiksberg Centret adalah pusat perbelanjaan terkenal di Kopenhagen yang menawarkan berbagai macam toko-toko, restoran, dan toko bahan makanan.</li>
        <li>Aalborg Storcenter, Aalborg: Aalborg Storcenter adalah pusat perbelanjaan terbesar di kota Aalborg, Denmark. Pusat perbelanjaan ini menawarkan lebih dari 100 toko-toko, restoran, dan pusat hiburan.</li>
        <li>Bruuns Galleri, Aarhus: Bruuns Galleri adalah pusat perbelanjaan terbesar di kota Aarhus, Denmark. Pusat perbelanjaan ini menawarkan lebih dari 100 toko-toko, restoran, dan pusat hiburan.</li>
        <li>Waves, Helsing&oslash;r: Waves adalah pusat perbelanjaan terbesar di Helsing&oslash;r, Denmark. Pusat perbelanjaan ini menawarkan lebih dari 100 toko-toko, restoran, dan bioskop.</li>
        </ol>
        <p>Itulah beberapa pusat perbelanjaan terkenal di Denmark yang dapat dikunjungi selama liburan atau berbelanja. Semua pusat perbelanjaan tersebut menawarkan berbagai macam toko-toko, restoran, dan fasilitas hiburan, sehingga cocok untuk pengunjung dari berbagai kalangan.</p>
        <p>Berikut ini adalah daftar beberapa butik mewah yang terkenal di Denmark beserta alamatnya:</p>
        <ol>
        <li>Gucci, Copenhagen: Vimmelskaftet 42, 1161 K&oslash;benhavn K, Denmark</li>
        <li>Herm&egrave;s, Copenhagen: H&oslash;jbro Plads 7, 1200 K&oslash;benhavn K, Denmark</li>
        <li>Louis Vuitton, Copenhagen: Ny &Oslash;stergade 2, 1101 K&oslash;benhavn K, Denmark</li>
        <li>Prada, Copenhagen: Amagertorv 23, 1160 K&oslash;benhavn K, Denmark</li>
        <li>Bottega Veneta, Copenhagen: Amagertorv 13, 1160 K&oslash;benhavn K, Denmark</li>
        <li>Chanel, Copenhagen: &Oslash;stergade 46, 1100 K&oslash;benhavn K, Denmark</li>
        <li>Burberry, Copenhagen: &Oslash;stergade 33, 1100 K&oslash;benhavn K, Denmark</li>
        <li>Ralph Lauren, Copenhagen: &Oslash;stergade 12, 1100 K&oslash;benhavn K, Denmark</li>
        <li>Georg Jensen, Copenhagen: Amagertorv 4, 1160 K&oslash;benhavn K, Denmark</li>
        <li>Rolex, Copenhagen: Amagertorv 1, 1160 K&oslash;benhavn K, Denmark</li>
        </ol>
        <p>Semua butik-butik tersebut terletak di pusat kota Kopenhagen, dengan beberapa di antaranya berada di area perbelanjaan terkenal seperti Str&oslash;get, Amagertorv, dan &Oslash;stergade. Perlu diingat bahwa harga produk di butik-butik mewah tersebut relatif mahal, sehingga disarankan untuk mengecek harga dan persediaan terlebih dahulu sebelum berkunjung.</p>',
                'others' => '<p>Berikut adalah beberapa tips dan informasi tambahan untuk jalan-jalan di Denmark:</p>
        <ol>
        <li>Gunakan transportasi umum: Denmark memiliki sistem transportasi umum yang baik, termasuk kereta api, bus, dan metro. Kita bisa menggunakan aplikasi Rejseplanen untuk mengecek jadwal dan rute transportasi umum.</li>
        <li>Bawa jaket dan payung: Meskipun Denmark terkenal dengan cuaca yang sejuk dan lembab, cuaca di Denmark juga dapat berubah-ubah. Pastikan untuk membawa jaket dan payung agar siap menghadapi cuaca yang tidak menentu.</li>
        <li>Pakai sepatu yang nyaman: Denmark dikenal dengan keindahan arsitektur dan jalan-jalan yang indah, sehingga perlu mempersiapkan sepatu yang nyaman untuk jalan-jalan seharian.</li>
        <li>Bawa kantong belanja: Denmark dikenal dengan desain dan gaya yang indah, serta produk-produk berkualitas. Pastikan untuk membawa kantong belanja untuk menghindari biaya tambahan untuk tas plastik atau kantong belanja di toko.</li>
        <li>Perhatikan jam operasional toko: Beberapa toko di Denmark tutup lebih awal pada hari Sabtu dan tutup pada hari Minggu. Pastikan untuk mengecek jam operasional toko sebelum berkunjung.</li>
        <li>Ikuti aturan jalan: Seperti negara lain di Eropa, di Denmark, orang harus berjalan di trotoar dan menggunakan penyeberangan yang aman. Ketika berkendara, pastikan untuk memperhatikan rambu-rambu lalu lintas dan mengikuti aturan jalan yang berlaku.</li>
        <li>Sertakan museum dan atraksi terkenal di Denmark dalam rencana perjalanan Anda: Denmark memiliki banyak museum dan atraksi terkenal, seperti Museum Ny Carlsberg Glyptotek, Istana Christiansborg, dan The Little Mermaid. Pastikan untuk menyertakan beberapa tempat ini dalam rencana perjalanan Anda.</li>
        <li>Bawa uang tunai atau kartu kredit: Di Denmark, kebanyakan toko, restoran, dan hotel menerima kartu kredit, tetapi masih ada beberapa tempat yang menerima hanya uang tunai. Pastikan untuk membawa sedikit uang tunai atau kartu kredit untuk menghindari kesulitan saat berbelanja atau makan di tempat yang tidak menerima kartu kredit.</li>
        </ol>
        <p>&nbsp;</p>
        <p>Berikut adalah beberapa tips transportasi di Denmark:</p>
        <ol>
        <li>Gunakan transportasi umum: Denmark memiliki sistem transportasi umum yang baik, termasuk kereta api, bus, dan metro. Transportasi umum di Denmark sangat andal dan nyaman, dan kadang-kadang lebih cepat dari mengemudi.</li>
        <li>Gunakan aplikasi untuk melacak jadwal: Aplikasi Rejseplanen adalah cara terbaik untuk melacak jadwal transportasi umum di Denmark. Aplikasi ini akan memberi tahu Anda waktu kedatangan dan keberangkatan bus, kereta api, dan metro.</li>
        <li>Beli tiket sebelumnya: Pastikan untuk membeli tiket transportasi umum sebelumnya, di stasiun kereta api atau toko-toko kecil, atau menggunakan aplikasi seperti DOT. Ini akan menghindarkan Anda dari antrian di mesin tiket di stasiun kereta api atau bus.</li>
        <li>Gunakan kartu rejeki (Rejsekort): Rejsekort adalah kartu pintar yang dapat digunakan untuk membayar perjalanan dengan transportasi umum di Denmark. Ini lebih mudah dan lebih cepat daripada membeli tiket setiap kali.</li>
        <li>Naik sepeda: Denmark dikenal sebagai negara yang ramah terhadap pengendara sepeda, dengan banyak jalur sepeda yang dibangun. Jika Anda ingin menjelajahi kota, sewa sepeda di banyak stasiun kereta api atau toko sepeda.</li>
        <li>Gunakan taksi: Denmark memiliki banyak perusahaan taksi yang andal dan aman. Pastikan untuk menggunakan taksi yang resmi dengan logo perusahaan dan nomor pendaftaran pada sisi mobil.</li>
        <li>Perhatikan aturan jalan: Seperti negara lain di Eropa, di Denmark, orang harus berjalan di trotoar dan menggunakan penyeberangan yang aman. Ketika berkendara, pastikan untuk memperhatikan rambu-rambu lalu lintas dan mengikuti aturan jalan yang berlaku.</li>
        </ol>
        <p>Berjalan kaki: Denmark adalah negara yang baik untuk berjalan kaki, dengan banyak jalan dan taman yang indah. Pastikan untuk memakai sepatu yang nyaman dan peta kota yang dapat membantu Anda menemukan arah.</p>',
                'views' => 10953,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-27 01:42:15',
            ],
            [
                'id' => 17,
                'name' => 'Rusia',
                'title' => 'Kota-kota wisata yang patut dikunjungi di Rusia',
                'slug' => 'rusia',
                'international' => 'Russia',
                'codes' => 'ru',
                'latitude' => '55',
                'longitude' => '103',
                'keywords' => '',
                'description' => '<p class="dropcap">Rusia merupakan satu one stop solution yang memenuhi selera berbagai jenis wisatawan. Pasca bubarnya negara Soviet pada Desember 1991, wisata di Rusia menjadi salah satu primadona dalam berbagai bidang. Dengan menelusuri daftar apa yang dapat diperoleh atau dilihat di Rusia, wisatawan akan segera mengambil kesimpulan Rusia berkonotasi dengan ‘terbesar’.</p>
        <p>Terletak di Eropa dan membentang sampai dengan Asia, Rusia menjadi negara terluas di dunia, yakni lebih dari 17 juta km2, memiliki 11 zona waktu dan mencakup seperdelapan luas planet ini yang terdiri atas hutan terluas, danau air tawar yang terluas serta 100 ribu sungai. Luas ini hampir setara dengan dua kali negara terluas berikutnya di dunia. Saat ini Rusia terbangun dari 49 oblasts, 21 republik, 10 daerah otonom, 6 krais, 2 kota federal dan 1 oblast otonom.&nbsp;</p>
        <p>Moskow sebagai ibukota Rusia juga merupakan kota terbesar di negeri ini. Keremlin dan Rded Square merupakan dua kota yang paling sering dikunjungi oleh wisatawan. Demikian pula dengan kekayaan alamnya, Rusia memiliki Danau Baikal yang merupakan danau air tawar terluas di dunia. Terdapat berbagai varietas tanaman dan kehidupan hewan, dua pertiganya tidak dijumpai di belahan lain dunia ini. UNESCO telah mendeklarasikan ekologi danau ini sebagai warisan dunia.&nbsp;</p>
        <p>Pada dekade terakhir ini Gunung Elbrus menjadi tujuan wisata yang penting. Puncak gunung tertinggi di dunia ini (lebih dari 5000 m) mungkin merupakan puncak termudah untuk didaki. Fasilitas yang tersedia memudahkan orang mencapai tujuan wisata yang terkenal ini.&nbsp;</p>
        <p>Rusia menyerupai negara gajah purba yang memiliki musim yang sangat bervariasi pada tempat-tempat yang berbeda, berkisar dari cuaca yang terik dan lembab pada musim panas sampai dingin yang menusuk pada musim dingin. Bulan yang terbaik untuk mengunjungi Rusia adalah antara bulan Mei sampai dengan Oktober.</p>
        <p>Berikut adalah beberapa kota wisata yang patut dikunjungi di Rusia beserta rekomendasi 3 hotel mahal dan murah di masing-masing kota:</p>
        <ol>
        <li>Moscow:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li>Red Square: kawasan pusat kota Moscow yang terkenal.</li>
        <li>Kremlin: kompleks kastil yang dibangun di pusat kota Moscow.</li>
        <li>GUM: pusat perbelanjaan mewah di Red Square.</li>
        <li>Hotel:</li>
        </ul>
        </li>
        </ul>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li>Four Seasons Hotel Moscow</li>
        <li>Ararat Park Hyatt Moscow</li>
        <li>The Ritz-Carlton, Moscow</li>
        <li><a title="Hotel Baltschug Kempinski Moscow" href="https://www.booking.com/hotel/ru/baltschug-kempinski-moscow.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Hotel Baltschug Kempinski Moscow</a></li>
        </ul>
        </li>
        </ul>
        </li>
        </ul>
        <ul>
        <li style="list-style-type: none;">&nbsp;</li>
        </ul>
        <ol start="2">
        <li>Saint Petersburg:</li>
        </ol>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li>Palace Square: terletak di pusat kota, kawasan ini berisi beberapa bangunan penting, termasuk Istana Musim Dingin.</li>
        <li>The Hermitage: museum seni yang terkenal di dunia yang memiliki koleksi seni terbesar di Rusia.</li>
        <li>St. Isaac\'s Cathedral: katedral yang indah dan megah dengan pemandangan yang luar biasa dari puncak menara.</li>
        <li>Hotel:</li>
        </ul>
        </li>
        </ul>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Corinthia Hotel St. Petersburg" href="https://www.booking.com/hotel/ru/corinthia-nevskij-palace.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Corinthia Hotel St. Petersburg</a></li>
        <li><a title="Nevsky Forum Hotel" href="https://www.booking.com/hotel/ru/nevsky-forum.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Nevsky Forum Hotel</a></li>
        <li><a title="Akyan St. Petersburg" href="https://www.booking.com/hotel/ru/ak-yan.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Akyan St. Petersburg</a></li>
        <li><a title="Station Hotel Premier S10" href="https://www.booking.com/hotel/ru/station-premier-s10.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Station Hotel Premier S10</a></li>
        </ul>
        </li>
        </ul>
        </li>
        </ul>
        <ol start="3">
        <li>Sochi:</li>
        </ol>
        <ul>
        <li>Krasnaya Polyana: pegunungan yang terkenal dengan pemandangan yang indah dan menawarkan aktivitas luar ruangan seperti ski dan hiking.</li>
        <li>Sochi Park: taman hiburan yang menyenangkan untuk anak-anak maupun orang dewasa.</li>
        <li>Olympic Park: kawasan yang dibangun untuk Olimpiade Musim Dingin 2014 dengan stadion, arena, dan pusat konvensi.</li>
        <li>Hotel:</li>
        </ul>
        <ul>
        <li style="list-style-type: none;">
        <ul>
        <li><a title="Swissotel Resort Sochi Kamelia" href="https://www.booking.com/hotel/ru/swissotel-kamelia-sochi.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Swissotel Resort Sochi Kamelia</a></li>
        <li>Pullman Sochi Centre Hotel</li>
        <li><a title="Mercure Sochi Centre" href="https://www.booking.com/hotel/ru/mercure-sochi-centre.id.html?aid=7989039&amp;no_rooms=1&amp;group_adults=2" target="_blank">Mercure Sochi Centre</a></li>
        </ul>
        </li>
        </ul>
        <p>Pastikan Anda melakukan pengecekan terlebih dahulu sebelum memesan, karena harga dan ketersediaan kamar dapat berubah sewaktu-waktu.</p>',
                'short_desc' => 'Rusia negara terbesar dunia wilayahnya kurang lebih dua kali wilayah China, Kanada, atau Amerika Serikat, seluas 17.075.400 km2 penduduknya menduduki peringkat ketujuh terbanyak di dunia setelah RRC, India, USA, RI, Brasil, dan Pakistan.
        Kota kota besar di Rusia antara lain Moskow, Saint Petersburg, Nizhny Novgorod, Yekaterinburg, Samara, Omsk, Kazan, Chelyabinsk, Rostov na Donu, Ufa, Volgograd, Perm, Krasnoyarsk, Saratov, Voronezh, Tolyatti, Krasnodar, Ulyanovsk, Simferopol, dan Izhevsk',
                'to_see' => '<strong>Shopping</strong><br>Rusia merupakan surga bagi mereka yang tertarik untuk berbelanja barang antik dan unik. Kota terpilih untuk belanja ini tentunya Moskow dan St. Petersburg.\\ yang merupakan kota terbesar di Rusia. Wisatawan dapat menjumpai barang-barang menarik di seluruh sudut-sudut kota kota ini. Kotak lakeur kholui dan palekh merupakan salah satu cinderamata yang paling diminati untuk dibawa pulang disamping  cawan kristal dan barang-barang hasil kerajinan tangan.  <br><br><strong>Menumpang Metro Moskow</strong><br>Terlepas dari berapa lama wisatawan tinggal di Moskow, menaiki kereta bawah tanah (Metro) di merupakan suatu keharusan. Hindari waktu-waktu padat agar dapat menikmati perjalanan dengan baik. Metro membawa wisarawan ke seluruh pemjuru kota. Bagian paling menarik dari perjalanan menaiki Metro ini  saat masuk ke stasiun yang terkenal seperti Kazan’skaya dan Maykovskaya.  <div><br></div><div><strong>Festival salju internasional dan pahatan es Perm.</strong><br>Festival yang diselenggarakan setiap tahun sejak 1995 ini mempersembahkan atraksi wisata yang menarik di Rusia. Kegiatan in i merupakan kompetisi internasional yang diikuti oleh negara Swis, Perancis, Meksiko, Rusia, Jerman dan beberapa negara lain. Terdapat dua kategori pahatan salju dan pahatan es. Pelaksanaan festival ini berlangsung di bulan Februari saat suhu terendah.<br></div><div><br></div><div><strong>Gereja-gereja di Moskow</strong><br>Banyaknya gereja yang spektakular di sini menggambarkan bervariasinya agama di sini. Arsitektur gereja yang indah seperti kupola emas, fresco lawas, struktur berbentuk kubah serta eksterior lavish  . Gereja yang paling terkenal di Moskow adalah Katedral Saint Basil yang dibangun pada abad 16 merupakan ciri khas kota Moskow. Gereja-gereja lain di Moskow yang cukup banyak dikunjungi adalah katedral Kristus sang penyelamat, Kazan, Monastri Andonikov dan Danilov.<br></div><div><br></div><div><strong>Festival "White Night"</strong><br>Ini merupakan festival yang sangat menarik yang diselenggarakan di kota bersejarah St. Petersburg. Dinamai dengan sebutan musim, festival ‘White Night’ ini menyuguhkan  pertunjukkan balet, opera, dan festival musik. Bukan hanya penari Rusia tetapi juga artis internasional ternama.<br></div><div><br></div><div><strong>Nikmati Heli-Skiing yang mendebarkan</strong><br>Heli-skiing merupakan atraksi yang mendebarkan tetapi membuat kecanduan wisatawan dan memecut jiwa petualang di Rusia. Bagi penggemar Heli-skiing dianjurkan untuk pergi ke dataran tinggi Kaukasus dan Kamchatka. Bukan hanya keindahan alamnya yang membuat wisatawan tertarik tetapi juga fasilitas yang tersedia disini merupakan salah satu yang terbaik di dunia. Bagi mereka yang menguasai, ataupun sedang-sedang saja dalam bermain ski, dianjurkan untuk mengambil Heli-Skiing ini. Sebelum memutuskan untuk bermain dengan Heli-Skiing, pastikan bahwa udara cerah dan aman.<br><br><strong>Jalur Kereta Trans-Siberian</strong><br>Jalur kereta Trans-Siberian telah diakui sebagai salah satu perjalanan dengan kereta yang paling indah dan menarik di sleuruh dunia. Panjang jalur adalah 9.466 km yang menjelajahi 8 zona waktu. Ini adalah jalur kereta terpanjang di dunia. Perjalanan dengan jalur ini menawarkan segala sesuatu yang dimiliki Rusia, dari kota cosmopolitan seperti Moskow sampai dengan desa-desa yang sunyi dan tersembunyi di pertemuan kaki langit dan gunung. Bagian yang paling menarik adalah saat kereta melintas sepanjang Danau Baikal yang terkenal di seluruh dunia. Seringkali wisatawan tidak dapat melepaskan pandangannya ke danau yang seakan  tidak penah berakhir dan kemudian disusul dengan hutan dengan binatang liarnya.<br></div>',
                'eatdrink' => '<p>Ada beberapa restoran Indonesia di Rusia yang menawarkan makanan Indonesia asli dan beberapa yang menggabungkan unsur-unsur masakan Indonesia dengan masakan internasional. Beberapa restoran Indonesia di Rusia yang populer antara lain:</p>
        <ol>
        <li>Bali Cafe - Moscow: Restoran ini menawarkan makanan Bali asli seperti Nasi Campur, Nasi Goreng, dan Ayam Betutu. Bali Cafe juga menawarkan suasana yang nyaman dan menyenangkan untuk menikmati makanan.</li>
        <li>Moscow Jakarta Restaurant: Restoran ini menawarkan hidangan khas Indonesia seperti Soto Ayam, Nasi Goreng, dan Rendang. Restoran ini juga menawarkan suasana yang nyaman dan dekorasi yang indah.</li>
        <li>Padi - Moscow: Restoran ini menawarkan hidangan Indonesia seperti Nasi Goreng, Mie Goreng, dan Sate Ayam. Padi juga menawarkan suasana yang santai dan nyaman.</li>
        <li>Djakarta Bali - St. Petersburg: Restoran ini menawarkan makanan Bali dan masakan Indonesia lainnya seperti Rendang, Sate Ayam, dan Sayur Lodeh. Djakarta Bali juga menawarkan suasana yang indah dan nyaman.</li>
        <li>Tugu - Moscow: Restoran ini menawarkan makanan Indonesia asli serta masakan Asia dan Eropa. Tugu juga menawarkan dekorasi yang indah dengan suasana tradisional Indonesia.</li>
        </ol>
        <p>Pastikan untuk mencari tahu lebih lanjut tentang restoran Indonesia ini sebelum mengunjunginya, termasuk lokasi, menu, dan jam buka, karena hal-hal ini dapat berubah sewaktu-waktu.</p>
        <p>Rusia memiliki warisan kuliner yang kaya dengan berbagai hidangan yang unik dan lezat. Berikut adalah beberapa tempat wisata kuliner yang populer di Rusia:</p>
        <ol>
        <li>Mercato Centrale Moscow: Mercato Centrale Moscow adalah pasar makanan yang terletak di pusat kota Moskow. Di sini, Anda dapat menemukan berbagai macam makanan, termasuk hidangan Rusia klasik seperti shchi (sup kubis) dan pelmeni (dumpling), serta makanan dari berbagai negara seperti sushi, pizza, dan burger.</li>
        <li>Teremok: Teremok adalah restoran cepat saji Rusia yang terkenal karena pancake (blini) khas Rusia-nya. Di sini, Anda dapat menikmati blini dengan berbagai topping seperti selai, keju cottage, daging asap, dan banyak lagi.</li>
        <li>Eliseevsky Gastronom: Eliseevsky Gastronom adalah toko makanan yang indah dan bergengsi di pusat kota Moskow. Di sini, Anda dapat menemukan berbagai macam makanan dan minuman, seperti cokelat, kue, dan anggur Rusia yang lezat.</li>
        <li>Cafe Pushkin: Cafe Pushkin adalah restoran mewah yang terkenal di Moskow. Di sini, Anda dapat menikmati hidangan khas Rusia seperti borscht, stroganoff daging, dan hidangan daging yang terkenal di Rusia. Restoran ini memiliki dekorasi yang indah dan suasana yang elegan.</li>
        <li>Varenichnaya No. 1: Varenichnaya No. 1 adalah restoran Rusia yang terkenal di St. Petersburg. Di sini, Anda dapat menikmati hidangan Rusia klasik seperti pelmeni, blini, dan hidangan daging panggang, serta minuman Rusia seperti vodka.</li>
        </ol>
        <p>Pastikan untuk mencoba hidangan Rusia khas yang unik selama perjalanan Anda di Rusia dan menjelajahi tempat-tempat wisata kuliner lainnya yang dapat Anda temukan di seluruh negara ini.</p>
        <p>Berikut adalah beberapa tips dan informasi penting untuk makan di Rusia:</p>
        <ol>
        <li>Makanan Rusia klasik: Ada banyak hidangan klasik Rusia yang harus dicoba saat berada di Rusia, seperti borscht (sup kubis), pelmeni (dumpling), stroganoff daging, blini (pancake), dan hidangan daging panggang. Cobalah juga minuman tradisional Rusia seperti vodka dan kvass.</li>
        <li>Restoran dan kafe: Rusia memiliki banyak restoran dan kafe yang menawarkan berbagai jenis makanan dari berbagai negara. Pastikan untuk mencari tahu tentang restoran dan kafe yang populer dan direkomendasikan oleh penduduk setempat.</li>
        <li>Bahasa: Bahasa Rusia cukup sulit, sehingga penting untuk mempelajari beberapa kata dasar seperti "terima kasih" (spasibo), "tolong" (pozhaluysta), dan "maaf" (izvinite). Banyak restoran dan kafe di Rusia juga memiliki menu dalam bahasa Inggris atau gambar makanan.</li>
        <li>Tipping: Tipping tidak dianggap sebagai keharusan di Rusia, tetapi biasanya diterima jika Anda memberikan tip sekitar 10% dari total tagihan.</li>
        <li>Keamanan makanan: Pastikan untuk memperhatikan keamanan makanan saat makan di restoran atau kafe. Gunakan air botol atau minuman kaleng yang tidak dibuka, hindari makanan yang terlihat tidak segar, dan cuci tangan sebelum makan.</li>
        <li>Waktu makan: Jadwal makan di Rusia agak berbeda dari negara lain. Sarapan biasanya ringan, makan siang (obed) biasanya dimulai pada siang hari dan makan malam (uzhin) biasanya dimulai pada pukul 7 atau 8 malam.</li>
        <li>Harga: Harga makanan di Rusia dapat bervariasi tergantung pada restoran atau kafe yang Anda kunjungi. Ada banyak pilihan makanan yang terjangkau, tetapi pastikan untuk memeriksa harga sebelum memesan.</li>
        </ol>
        <p>Semoga tips dan informasi ini membantu Anda untuk menikmati pengalaman makan yang menyenangkan selama perjalanan Anda di Rusia.</p>',
                'shopping' => '<p>Ada banyak pusat perbelanjaan besar di Rusia, di antaranya:</p>
        <ol>
        <li>GUM - Berlokasi di Moskow, GUM (singkatan dari Gosudarstvennyi Universalnyi Magazin) adalah salah satu pusat perbelanjaan terbesar dan paling terkenal di Rusia. Bangunan ini memiliki sejarah yang panjang dan indah, dengan arsitektur bergaya neoklasik.</li>
        <li>TSUM - Terletak di pusat Moskow, TSUM (singkatan dari Tsentr Universalnyh Magazinov) adalah pusat perbelanjaan mewah yang menawarkan barang-barang dari merek-merek mewah dunia seperti Chanel, Prada, dan Gucci.</li>
        <li>Mega Mall - Mega Mall adalah jaringan pusat perbelanjaan terbesar di Rusia, dengan beberapa lokasi di seluruh negara. Mereka menawarkan berbagai macam barang, mulai dari pakaian dan aksesoris hingga barang elektronik dan makanan.</li>
        <li>Aviapark - Terletak di Moskow, Aviapark adalah pusat perbelanjaan terbesar di Eropa dengan area seluas 390.000 meter persegi. Di sana Anda dapat menemukan lebih dari 500 merek, termasuk merek-merek internasional terkenal seperti H&amp;M dan Zara.</li>
        <li>Galeria - Galeria adalah pusat perbelanjaan mewah di St. Petersburg yang menawarkan merek-merek internasional seperti Burberry, Louis Vuitton, dan Dior.</li>
        <li>Nevsky Centre - Terletak di jantung St. Petersburg, Nevsky Centre adalah pusat perbelanjaan yang luas dengan berbagai macam toko-toko yang menawarkan barang-barang dari merek-merek terkenal, baik lokal maupun internasional.</li>
        <li>Afimall - Afimall adalah pusat perbelanjaan modern yang terletak di Moskow, dengan lebih dari 350 toko dan restoran yang menawarkan barang-barang dari merek-merek terkenal seperti Nike, Apple, dan Lego.</li>
        </ol>',
                'others' => '<p>Berikut adalah beberapa tips dan informasi penting untuk menjelajahi Rusia:</p>
        <ol>
        <li>Visa: Sebelum mengunjungi Rusia, pastikan untuk memeriksa visa yang diperlukan dan persyaratan imigrasi yang berlaku. Visa diperlukan untuk sebagian besar wisatawan.</li>
        <li>Pakaian: Rusia memiliki cuaca yang sangat dingin pada musim dingin, jadi pastikan untuk membawa pakaian yang hangat dan cocok untuk cuaca. Saat musim panas, cuacanya lebih hangat tetapi tetap sebaiknya membawa pakaian yang nyaman untuk dipakai saat berjalan-jalan.</li>
        <li>Transportasi: Rusia memiliki jaringan transportasi yang baik, termasuk kereta api, bus, taksi, dan penerbangan domestik. Pastikan untuk memeriksa jadwal transportasi dan memesan tiket dengan waktu yang cukup untuk memastikan perjalanan yang lancar.</li>
        <li>Bahasa: Bahasa Rusia sulit dipelajari, tetapi penting untuk mempelajari beberapa kata dasar seperti "halo" (zdravstvuyte), "terima kasih" (spasibo), dan "tolong" (pozhaluysta).</li>
        <li>Uang: Mata uang Rusia adalah rubel. Pastikan untuk menukar uang Anda di bank atau penukaran uang resmi dan membawa uang tunai secukupnya.</li>
        <li>Keamanan: Seperti di tempat lain, pastikan untuk memperhatikan keamanan saat menjelajahi Rusia. Jangan membawa barang berharga yang tidak perlu, hindari tempat-tempat yang terpencil dan sunyi, dan waspadalah terhadap kejahatan seperti penipuan dan pencurian.</li>
        <li>Wisata: Rusia memiliki banyak tempat wisata yang menakjubkan, seperti Istana Kekaisaran di St. Petersburg, Lapangan Merah di Moskow, dan Katedral St. Basil di Moskow. Pastikan untuk merencanakan perjalanan Anda dengan baik dan memeriksa waktu operasional tempat wisata yang Anda kunjungi.</li>
        <li>Makanan dan minuman: Rusia memiliki hidangan tradisional yang lezat dan minuman yang khas, seperti borscht, pelmeni, vodka, dan kvass. Pastikan untuk mencoba hidangan dan minuman khas Rusia saat Anda berada di sana.</li>
        </ol>
        <p>Semoga tips dan informasi ini membantu Anda dalam perjalanan Anda di Rusia dan memastikan perjalanan yang aman, nyaman, dan menyenangkan.</p>',
                'views' => 9046,
                'active' => 1,
                'created_at' => null,
                'updated_at' => '2023-03-27 08:20:32',
            ],
        ];

        foreach (array_chunk($rows, 100) as $chunk) {
            DB::table('countries')->insertOrIgnore($chunk);
        }
    }
}
