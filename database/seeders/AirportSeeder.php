<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;

class AirportSeeder extends TransportPlaceSeeder
{
    protected function type(): string
    {
        return 'airport';
    }

    /**
     * Glasgow International was filed under Denmark by mistake.
     */
    protected function beforeSeeding(): void
    {
        $britain = Country::query()->where('slug', 'inggris-raya')->value('id');

        if ($britain !== null) {
            City::query()->where('slug', 'glasgow-international-airport')->where('type', 'airport')->update(['country_id' => $britain]);
        }
    }

    protected function places(): array
    {
        return [
            'negeri-belanda' => [
                ['Eindhoven Airport', 51.4501, 5.3744],
                ['Rotterdam The Hague Airport', 51.9569, 4.4372],
                ['Maastricht Aachen Airport', 50.9117, 5.7701],
                ['Groningen Airport Eelde', 53.1197, 6.5794],
            ],
            'belgia' => [
                ['Antwerp International Airport', 51.1894, 4.4603],
                ['Liège Airport', 50.6374, 5.4432],
                ['Ostend-Bruges International Airport', 51.1989, 2.8622],
            ],
            'jerman' => [
                ['Flughafen Nürnberg', 49.4987, 11.0669],
                ['Flughafen Dortmund', 51.5183, 7.6122],
                ['Flughafen Bremen', 53.0475, 8.7867],
                ['Flughafen Leipzig/Halle', 51.4324, 12.2416],
                ['Flughafen Dresden', 51.1328, 13.7672],
                ['Flughafen Weeze (Niederrhein)', 51.6024, 6.1422],
                ['Flughafen Frankfurt-Hahn', 49.9487, 7.2639],
                ['Flughafen Berlin Brandenburg', 52.3667, 13.5033],
            ],
            'perancis' => [
                ['Aéroport de Lille', 50.5619, 3.0894],
                ['Aéroport de Strasbourg', 48.5383, 7.6282],
                ['Aéroport de Montpellier-Méditerranée', 43.5762, 3.9630],
                ['Aéroport de Brest Bretagne', 48.4479, -4.4185],
            ],
            'swiss' => [
                ['Flughafen Bern-Belp', 46.9141, 7.4971],
                ['Aeroporto di Lugano', 46.0043, 8.9106],
            ],
            'inggris-raya' => [
                ['Bristol Airport', 51.3827, -2.7191],
                ['Cardiff Airport', 51.3967, -3.3433],
                ['Southampton Airport', 50.9503, -1.3568],
                ['London City Airport', 51.5053, 0.0553],
                ['London Luton Airport', 51.8747, -0.3683],
                ['Leeds Bradford Airport', 53.8659, -1.6606],
            ],
            'italia' => [
                ['Aeroporto di Napoli Capodichino', 40.8860, 14.2908],
                ['Aeroporto di Venezia Marco Polo', 45.5053, 12.3519],
                ['Aeroporto di Bologna Guglielmo Marconi', 44.5354, 11.2887],
                ['Aeroporto di Firenze Peretola', 43.8100, 11.2051],
                ['Aeroporto di Catania Fontanarossa', 37.4668, 15.0664],
                ['Aeroporto di Palermo Falcone Borsellino', 38.1760, 13.0910],
                ['Aeroporto di Torino Caselle', 45.2008, 7.6496],
                ['Aeroporto di Treviso Canova', 45.6484, 12.1944],
            ],
            'spanyol' => [
                ['Aeropuerto de Málaga-Costa del Sol', 36.6749, -4.4991],
                ['Aeropuerto de Sevilla', 37.4180, -5.8931],
                ['Aeropuerto de Palma de Mallorca', 39.5517, 2.7388],
                ['Aeropuerto de Girona-Costa Brava', 41.9010, 2.7606],
                ['Aeropuerto de Tenerife Sur', 28.0445, -16.5725],
                ['Aeropuerto de Gran Canaria', 27.9319, -15.3866],
                ['Aeropuerto de Ibiza', 38.8729, 1.3731],
                ['Aeropuerto de Santiago de Compostela', 42.8963, -8.4151],
                ['Aeropuerto de Granada', 37.1887, -3.7774],
            ],
            'austria' => [
                ['Flughafen Salzburg', 47.7933, 13.0043],
                ['Flughafen Innsbruck', 47.2602, 11.3440],
                ['Flughafen Graz', 46.9911, 15.4396],
                ['Flughafen Linz', 48.2332, 14.1875],
                ['Flughafen Klagenfurt', 46.6425, 14.3377],
            ],
            'denmark' => [
                ['Billund Lufthavn', 55.7403, 9.1518],
                ['Aalborg Lufthavn', 57.0928, 9.8492],
                ['Aarhus Lufthavn', 56.2999, 10.6190],
                ['Roskilde Lufthavn', 55.5856, 12.1314],
            ],
            'yunani' => [
                ['Heraklion International Airport', 35.3397, 25.1803],
                ['Rhodes International Airport', 36.4054, 28.0862],
                ['Corfu International Airport', 39.6019, 19.9117],
                ['Santorini (Thira) Airport', 36.3992, 25.4793],
                ['Mykonos Airport', 37.4351, 25.3481],
                ['Chania International Airport', 35.5317, 24.1497],
            ],
            'rusia' => [
                ['Zhukovsky International Airport', 55.5533, 38.1500],
                ['Sochi International Airport', 43.4499, 39.9566],
                ['Kazan International Airport', 55.6091, 49.2787],
                ['Koltsovo Airport (Yekaterinburg)', 56.7431, 60.8027],
            ],
        ];
    }
}
