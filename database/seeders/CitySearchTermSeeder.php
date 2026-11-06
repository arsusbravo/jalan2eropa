<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySearchTermSeeder extends Seeder
{
    /**
     * English search phrases for tourist places, keyed by "country-slug/place-slug".
     *
     * Place names in the database are partly Indonesian, which gives empty results
     * on partner sites. Places without a ticketable equivalent are left out on purpose,
     * so they show no ticket link instead of a poor search.
     *
     * @var array<string, string>
     */
    private const TERMS = [
        'austria/hofburg-palace' => 'Hofburg Palace Vienna',
        'austria/salzburg-festival' => 'Salzburg',
        'austria/vienna' => 'Vienna',
        'austria/giant-wheel-in-vienna' => 'Vienna Giant Ferris Wheel',
        'austria/graz' => 'Graz',
        'belgia/royal-museum-of-fine-art' => 'Royal Museums of Fine Arts Brussels',
        'belgia/alun-alun-brussels' => 'Brussels Grand Place',
        'belgia/atomium' => 'Atomium Brussels',
        'belgia/museum-berlian-di-antwerpen' => 'Antwerp',
        'belgia/kastil-gravensteen-ghent' => 'Gravensteen Castle Ghent',
        'denmark/istana-amalienborg' => 'Amalienborg Copenhagen',
        'denmark/copenhagen-city-hall' => 'Copenhagen City Hall tower',
        'denmark/christiansborg-palace' => 'Christiansborg Palace Copenhagen',
        'denmark/kronborg-castle' => 'Kronborg Castle',
        'denmark/roskilde-cathedral' => 'Roskilde',
        'denmark/tivoli-garden' => 'Tivoli Gardens Copenhagen',
        'denmark/rosenborg-palace' => 'Rosenborg Castle Copenhagen',
        'denmark/copenhagen-zoo' => 'Copenhagen Zoo',
        'inggris-raya/stonehenge-batu-raksasa-stonehenge' => 'Stonehenge',
        'inggris-raya/giants-causeway' => "Giant's Causeway",
        'inggris-raya/york-minster' => 'York Minster',
        'inggris-raya/musium-inggris-british-museum' => 'British Museum London tour',
        'inggris-raya/edinburgh-castle' => 'Edinburgh Castle',
        'inggris-raya/windsor-castle' => 'Windsor Castle',
        'inggris-raya/highgate-cemetery' => 'Highgate Cemetery London',
        'italia/museum-vatikan' => 'Vatican Museums',
        'italia/gereja-st-peter-st-peters-basilica-di-kota-vatican' => "St Peter's Basilica Vatican",
        'italia/valley-of-the-temples' => 'Valley of the Temples Agrigento',
        'italia/menara-condong-pisa' => 'Leaning Tower of Pisa',
        'italia/pantheon' => 'Pantheon Rome',
        'italia/venice' => 'Venice',
        'italia/vatican-city' => 'Vatican City',
        'italia/musium-musium-vatican' => 'Vatican Museums',
        'italia/sistine-chapel' => 'Sistine Chapel Vatican Museums',
        'italia/vatican-gardens' => 'Vatican Gardens',
        'italia/st-peters-square' => "St Peter's Square Vatican",
        'italia/museo-nationale-romano' => 'Museo Nazionale Romano',
        'italia/colosseum' => 'Colosseum Rome',
        'italia/borghese-gallery' => 'Borghese Gallery Rome',
        'italia/cinque-terre' => 'Cinque Terre',
        'italia/sassi-di-matera' => 'Matera',
        'italia/grotta-azzurra' => 'Blue Grotto Capri',
        'italia/pengalaman-minum-minuman-anggur-chianti' => 'Chianti wine tasting',
        'italia/trulli-di-alberobello' => 'Alberobello',
        'italia/ponte-vecchio' => 'Florence',
        'italia/cascata-delle-marmore' => 'Marmore Falls',
        'jerman/kastil-neuschwanstein' => 'Neuschwanstein Castle',
        'jerman/tembok-berlin' => 'Berlin Wall',
        'jerman/katedral-koln' => 'Cologne Cathedral',
        'jerman/marienplatz-munich' => 'Munich walking tour',
        'jerman/oktoberfest-munich' => 'Oktoberfest Munich',
        'jerman/berliner-dom' => 'Berlin Cathedral',
        'jerman/berlin-cabaret' => 'Berlin cabaret show',
        'negeri-belanda/rijksmuseum-amsterdam' => 'Rijksmuseum Amsterdam',
        'negeri-belanda/museum-van-gogh-amsterdam' => 'Van Gogh Museum Amsterdam',
        'negeri-belanda/madurodam' => 'Madurodam',
        'negeri-belanda/kinderdijk' => 'Kinderdijk windmills',
        'negeri-belanda/hoge-veluwe-national-park' => 'Hoge Veluwe National Park',
        'negeri-belanda/anne-frank-house' => 'Anne Frank House Amsterdam',
        'negeri-belanda/plaza-rotterdam' => 'Rotterdam',
        'perancis/menara-eiffel' => 'Eiffel Tower Paris',
        'perancis/sacre-coeur' => 'Sacre Coeur Paris',
        'perancis/museum-louvre' => 'Louvre Museum Paris',
        'perancis/katedral-notre-dame' => 'Notre Dame Paris',
        'perancis/pantheon' => 'Pantheon Paris',
        'perancis/menara-montparnasse' => 'Montparnasse Tower Paris',
        'perancis/teluk-mont-saint-michel' => 'Mont Saint-Michel',
        'perancis/pegunungan-alpen-perancis' => 'Chamonix Mont Blanc',
        'rusia/red-square-lapangan-merah' => 'Red Square Moscow',
        'rusia/atraksi-st-petersburg' => 'Saint Petersburg',
        'rusia/danau-baikal' => 'Lake Baikal',
        'rusia/kremlin' => 'Moscow Kremlin',
        'rusia/veliky-novgorod' => 'Veliky Novgorod',
        'rusia/teater-bolshoi' => 'Bolshoi Theatre Moscow',
        'spanyol/musium-guggenheim-bilbao' => 'Guggenheim Museum Bilbao',
        'spanyol/sierra-nevada' => 'Sierra Nevada Spain',
        'spanyol/katedral-kota-burgos' => 'Burgos Cathedral',
        'spanyol/la-mezquita' => 'Mezquita Cordoba',
        'spanyol/el-prado-madrid' => 'Prado Museum Madrid',
        'spanyol/la-sagrada-familia' => 'Sagrada Familia Barcelona',
        'spanyol/barcelona' => 'Barcelona',
        'spanyol/park-guell' => 'Park Guell Barcelona',
        'spanyol/casa-battlo' => 'Casa Batllo Barcelona',
        'spanyol/casa-milla' => 'Casa Mila La Pedrera Barcelona',
        'spanyol/the-magic-fountain-of-montjuic' => 'Magic Fountain Montjuic Barcelona',
        'spanyol/laquarium-de-barcelona' => 'Barcelona Aquarium',
        'spanyol/poble-espanyol-de-montjuic' => 'Poble Espanyol Barcelona',
        'spanyol/camp-nou' => 'Camp Nou Barcelona',
        'spanyol/bonbin-barcelona' => 'Barcelona Zoo',
        'spanyol/museu-picasso' => 'Picasso Museum Barcelona',
        'spanyol/el-barri-gotic' => 'Gothic Quarter Barcelona walking tour',
        'spanyol/tibidabo' => 'Tibidabo Barcelona',
        'spanyol/museu-nacional-dart-de-catalunya' => 'National Art Museum of Catalonia Barcelona',
        'swiss/chateau-de-chillon' => 'Chillon Castle',
        'swiss/the-matterhorn' => 'Matterhorn',
        'swiss/jungfraujoch' => 'Jungfraujoch',
        'swiss/geneva' => 'Geneva',
        'swiss/st-moritz' => 'St Moritz',
        'swiss/mt-pilatus' => 'Mount Pilatus',
        'swiss/station-jungfraujoch' => 'Jungfraujoch',
        'yunani/istana-knossos' => 'Knossos Palace Crete',
        'yunani/delphi' => 'Delphi',
        'yunani/olympia' => 'Ancient Olympia',
        'yunani/acropolis' => 'Acropolis Athens',
        'yunani/meteora' => 'Meteora',
        'yunani/mycenae' => 'Mycenae',
        'yunani/musium-arkeologikal-nasional' => 'National Archaeological Museum Athens',
        'yunani/agora-kuno' => 'Ancient Agora Athens',
        'yunani/plaka' => 'Plaka Athens walking tour',
    ];

    /**
     * Fill `cities.search_term` for tourist places.
     */
    public function run(): void
    {
        $countries = DB::table('countries')->pluck('id', 'slug');

        foreach (self::TERMS as $key => $term) {
            [$countrySlug, $placeSlug] = explode('/', $key, 2);

            if (! isset($countries[$countrySlug])) {
                continue;
            }

            DB::table('cities')
                ->where('country_id', $countries[$countrySlug])
                ->where('slug', $placeSlug)
                ->update(['search_term' => $term]);
        }
    }
}
