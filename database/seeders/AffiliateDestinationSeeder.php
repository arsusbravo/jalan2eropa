<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AffiliateDestinationSeeder extends Seeder
{
    /**
     * Key cities per country: [label, Klook search query, photo place slug, Tiqets page, KKday page, Go City page].
     *
     * Klook links use its search page (a confirmed pattern). Tiqets, KKday and
     * Go City only appear where a real page URL was found; unknown ones are left
     * out on purpose, never guessed.
     *
     * @var array<string, list<array{0: string, 1: string, 2: ?string, 3: ?string, 4: ?string, 5: ?string}>>
     */
    private const CITIES = [
        'belgia' => [
            ['Brussels', 'Brussels', 'alun-alun-brussels', 'https://www.tiqets.com/en/brussels-attractions-c60843/', null, null],
            ['Antwerp', 'Antwerp', 'museum-berlian-di-antwerpen', 'https://www.tiqets.com/en/antwerp-attractions-c60863/', null, null],
            ['Bruges', 'Bruges', null, 'https://www.tiqets.com/en/bruges-attractions-c60844/', null, null],
        ],
        'negeri-belanda' => [
            ['Amsterdam', 'Amsterdam', 'rijksmuseum-amsterdam', 'https://www.tiqets.com/en/amsterdam-attractions-c75061/', 'https://www.kkday.com/en/category/nl-amsterdam/experiences/list', 'https://gocity.com/en/amsterdam/attractions'],
            ['Rotterdam', 'Rotterdam', 'plaza-rotterdam', null, null, null],
        ],
        'perancis' => [
            ['Paris', 'Paris', 'menara-eiffel', 'https://www.tiqets.com/en/paris-attractions-c66746/', 'https://www.kkday.com/en/category/fr-paris/experiences/list', 'https://gocity.com/en/paris/attractions'],
            ['Nice', 'Nice', null, 'https://www.tiqets.com/en/nice-attractions-c66770/', null, null],
        ],
        'jerman' => [
            ['Berlin', 'Berlin', 'berliner-dom', 'https://www.tiqets.com/en/berlin-attractions-c65144/', null, null],
            ['Munich', 'Munich', 'marienplatz-munich', null, null, null],
            ['Cologne', 'Cologne', 'katedral-koln', 'https://www.tiqets.com/en/cologne-attractions-c64765/', null, null],
        ],
        'swiss' => [
            ['Zurich', 'Zurich', null, 'https://www.tiqets.com/en/zurich-attractions-c20/', null, null],
            ['Lucerne', 'Lucerne', 'mt-pilatus', 'https://www.tiqets.com/en/lucerne-attractions-c62662/', null, null],
            ['Geneva', 'Geneva', 'geneva', null, null, null],
        ],
        'inggris-raya' => [
            ['London', 'London', 'musium-inggris-british-museum', 'https://www.tiqets.com/en/london-attractions-c67458/', null, 'https://gocity.com/en/london/attractions'],
            ['Edinburgh', 'Edinburgh', 'edinburgh-castle', null, null, null],
        ],
        'italia' => [
            ['Rome', 'Rome', 'colosseum', 'https://www.tiqets.com/en/rome-attractions-c71631/', 'https://www.kkday.com/en/category/it-rome/experiences/list', null],
            ['Venice', 'Venice', 'venice', null, null, null],
            ['Florence', 'Florence', 'ponte-vecchio', 'https://www.tiqets.com/en/florence-attractions-c71854/', null, null],
            ['Milan', 'Milan', null, 'https://www.tiqets.com/en/milan-attractions-c71749/', null, null],
        ],
        'yunani' => [
            ['Athens', 'Athens', 'acropolis', 'https://www.tiqets.com/en/athens-attractions-c99239/', null, null],
            ['Santorini', 'Santorini', null, 'https://www.tiqets.com/en/fira-attractions-c187711/', null, null],
        ],
        'austria' => [
            ['Vienna', 'Vienna', 'vienna', 'https://www.tiqets.com/en/vienna-attractions-c60335/', null, null],
            ['Salzburg', 'Salzburg', 'salzburg-festival', 'https://www.tiqets.com/en/salzburg-attractions-c60346/', null, null],
        ],
        'spanyol' => [
            ['Barcelona', 'Barcelona', 'barcelona', 'https://www.tiqets.com/en/barcelona-attractions-c66342/', null, 'https://gocity.com/en/barcelona/attractions'],
            ['Madrid', 'Madrid', 'el-prado-madrid', 'https://www.tiqets.com/en/madrid-attractions-c66254/', null, null],
        ],
        'denmark' => [
            ['Copenhagen', 'Copenhagen', 'tivoli-garden', 'https://www.tiqets.com/en/copenhagen-attractions-c113/', null, null],
        ],
    ];

    /**
     * Famous attractions per country: [label, Klook search query, our place slug, Tiqets page].
     *
     * @var array<string, list<array{0: string, 1: string, 2: ?string, 3: ?string}>>
     */
    private const ATTRACTIONS = [
        'belgia' => [
            ['Atomium', 'Atomium Brussels', 'atomium', 'https://www.tiqets.com/en/atomium-tickets-l146466/'],
            ['Kastil Gravensteen, Ghent', 'Gravensteen Castle Ghent', 'kastil-gravensteen-ghent', null],
        ],
        'negeri-belanda' => [
            ['Rijksmuseum', 'Rijksmuseum Amsterdam', 'rijksmuseum-amsterdam', null],
            ['Museum Van Gogh', 'Van Gogh Museum Amsterdam', 'museum-van-gogh-amsterdam', null],
            ['Anne Frank House', 'Anne Frank House Amsterdam', 'anne-frank-house', null],
            ['Kinderdijk', 'Kinderdijk windmills', 'kinderdijk', null],
        ],
        'perancis' => [
            ['Menara Eiffel', 'Eiffel Tower Paris', 'menara-eiffel', null],
            ['Museum Louvre', 'Louvre Museum Paris', 'museum-louvre', null],
            ['Mont-Saint-Michel', 'Mont Saint-Michel', 'teluk-mont-saint-michel', null],
        ],
        'jerman' => [
            ['Kastil Neuschwanstein', 'Neuschwanstein Castle', 'kastil-neuschwanstein', null],
            ['Katedral Köln', 'Cologne Cathedral', 'katedral-koln', 'https://www.tiqets.com/en/cologne-cathedral-l245806/'],
            ['Oktoberfest, Munich', 'Oktoberfest Munich', 'oktoberfest-munich', null],
        ],
        'swiss' => [
            ['The Matterhorn', 'Matterhorn', 'the-matterhorn', null],
            ['Jungfraujoch', 'Jungfraujoch', 'jungfraujoch', null],
            ['Chateau de Chillon', 'Chillon Castle', 'chateau-de-chillon', null],
            ['Mt. Pilatus', 'Mount Pilatus', 'mt-pilatus', null],
        ],
        'inggris-raya' => [
            ['Stonehenge', 'Stonehenge', 'stonehenge-batu-raksasa-stonehenge', null],
            ['Edinburgh Castle', 'Edinburgh Castle', 'edinburgh-castle', null],
            ['Windsor Castle', 'Windsor Castle', 'windsor-castle', null],
            ["Giant's Causeway", "Giant's Causeway", 'giants-causeway', null],
        ],
        'italia' => [
            ['Colosseum', 'Colosseum Rome', 'colosseum', null],
            ['Museum Vatikan', 'Vatican Museums', 'museum-vatikan', null],
            ['Menara Condong Pisa', 'Leaning Tower of Pisa', 'menara-condong-pisa', null],
            ['Galeri Uffizi, Florence', 'Uffizi Gallery Florence', null, 'https://www.tiqets.com/en/uffizi-gallery-tickets-l143605/'],
            ['Duomo di Milano', 'Duomo di Milano', null, 'https://www.tiqets.com/en/duomo-di-milano-tickets-l145637/'],
            ['Cinque Terre', 'Cinque Terre', 'cinque-terre', null],
        ],
        'yunani' => [
            ['Acropolis', 'Acropolis Athens', 'acropolis', 'https://www.tiqets.com/en/athens-attractions-c99239/tickets-for-acropolis-of-athens-entry-ticket-digital-hellenic-heritage-guide-p975704/'],
            ['Delphi', 'Delphi', 'delphi', null],
            ['Meteora', 'Meteora', 'meteora', null],
        ],
        'austria' => [
            ['Hofburg Palace', 'Hofburg Palace Vienna', 'hofburg-palace', null],
            ['Benteng Hohensalzburg', 'Hohensalzburg Fortress Salzburg', null, 'https://www.tiqets.com/en/hohensalzburg-fortress-tickets-l147026/'],
            ['Giant Wheel in Vienna', 'Vienna Giant Ferris Wheel', 'giant-wheel-in-vienna', 'https://www.tiqets.com/en/vienna-attractions-c60335/tickets-for-vienna-s-giant-ferris-wheel-skip-the-line-p976992/'],
        ],
        'spanyol' => [
            ['La Sagrada Familia', 'Sagrada Familia Barcelona', 'la-sagrada-familia', 'https://www.tiqets.com/en/barcelona-attractions-c66342/tickets-for-sagrada-familia-fast-track-p918256/'],
            ['Park Güell', 'Park Guell Barcelona', 'park-guell', null],
            ['Casa Batlló', 'Casa Batllo Barcelona', 'casa-battlo', null],
            ['Museum El Prado, Madrid', 'Prado Museum Madrid', 'el-prado-madrid', null],
            ['Camp Nou', 'Camp Nou Barcelona', 'camp-nou', null],
        ],
        'denmark' => [
            ['Tivoli Gardens', 'Tivoli Gardens Copenhagen', 'tivoli-garden', 'https://www.tiqets.com/en/tivoli-gardens-tickets-l145543/'],
            ['Christiansborg Palace', 'Christiansborg Palace Copenhagen', 'christiansborg-palace', 'https://www.tiqets.com/en/copenhagen-attractions-c113/tickets-for-christiansborg-full-palace-access-p975814/'],
            ['Rosenborg Palace', 'Rosenborg Castle Copenhagen', 'rosenborg-palace', null],
        ],
    ];

    /**
     * Seed the curated city and attraction destinations.
     *
     * Rows are skipped for programs, countries or places that are not in the database.
     */
    public function run(): void
    {
        $affiliates = DB::table('affiliates')->pluck('id', 'slug');
        $countries = DB::table('countries')->pluck('id', 'slug');
        $now = now();

        $place = function (string $countrySlug, ?string $slug) use ($countries): ?int {
            if ($slug === null || ! isset($countries[$countrySlug])) {
                return null;
            }

            return DB::table('cities')->where('country_id', $countries[$countrySlug])->where('slug', $slug)->value('id');
        };

        $write = function (string $program, string $countrySlug, string $kind, string $label, int $sort, ?int $placeId, ?string $query, ?string $url) use ($affiliates, $countries, $now): void {
            if (! isset($affiliates[$program], $countries[$countrySlug])) {
                return;
            }

            DB::table('affiliate_destinations')->updateOrInsert(
                [
                    'affiliate_id' => $affiliates[$program],
                    'country_id' => $countries[$countrySlug],
                    'kind' => $kind,
                    'label' => $label,
                    'category' => 'tour',
                ],
                ['city_id' => $placeId, 'sort' => $sort, 'query' => $query, 'url' => $url, 'created_at' => $now, 'updated_at' => $now],
            );
        };

        foreach (self::CITIES as $countrySlug => $cities) {
            foreach ($cities as $index => [$label, $klookQuery, $placeSlug, $tiqets, $kkday, $goCity]) {
                $placeId = $place($countrySlug, $placeSlug);

                $write('klook', $countrySlug, 'city', $label, $index, $placeId, $klookQuery, null);

                foreach (['tiqets' => $tiqets, 'kkday' => $kkday, 'go-city' => $goCity] as $program => $url) {
                    if ($url !== null) {
                        $write($program, $countrySlug, 'city', $label, $index, $placeId, null, $url);
                    }
                }
            }
        }

        foreach (self::ATTRACTIONS as $countrySlug => $attractions) {
            foreach ($attractions as $index => [$label, $klookQuery, $placeSlug, $tiqets]) {
                $placeId = $place($countrySlug, $placeSlug);

                $write('klook', $countrySlug, 'attraction', $label, $index, $placeId, $klookQuery, null);

                if ($tiqets !== null) {
                    $write('tiqets', $countrySlug, 'attraction', $label, $index, $placeId, null, $tiqets);
                }
            }
        }
    }
}
