<?php

namespace Database\Seeders;

class TrainStationSeeder extends TransportPlaceSeeder
{
    protected function type(): string
    {
        return 'train station';
    }

    protected function places(): array
    {
        return [
            'negeri-belanda' => [
                ['Amsterdam Zuid', 52.3388, 4.8718],
                ['Amsterdam Schiphol Airport Station', 52.3095, 4.7612],
                ['Utrecht Centraal', 52.0894, 5.1101],
                ['Den Haag Centraal', 52.0806, 4.3247],
                ['Eindhoven Centraal', 51.4433, 5.4809],
                ['Maastricht Station', 50.8499, 5.7053],
                ['Arnhem Centraal', 51.9850, 5.8997],
            ],
            'belgia' => [
                ['Brussels-Midi / Brussel-Zuid', 50.8357, 4.3366],
                ['Brussels-Central', 50.8453, 4.3571],
                ['Antwerpen-Centraal', 51.2172, 4.4212],
                ['Gent-Sint-Pieters', 51.0357, 3.7106],
                ['Brugge Station', 51.1972, 3.2170],
                ['Leuven Station', 50.8815, 4.7155],
                ['Liège-Guillemins', 50.6244, 5.5668],
            ],
            'jerman' => [
                ['München Ost', 48.1274, 11.6043],
                ['Düsseldorf Hbf', 51.2200, 6.7942],
                ['Dresden Hbf', 51.0404, 13.7320],
                ['Leipzig Hbf', 51.3452, 12.3821],
                ['Nürnberg Hbf', 49.4456, 11.0825],
                ['Hannover Hbf', 52.3766, 9.7410],
                ['Bremen Hbf', 53.0833, 8.8135],
                ['Frankfurt Flughafen Fernbahnhof', 50.0531, 8.5703],
                ['Heidelberg Hbf', 49.4034, 8.6757],
            ],
            'perancis' => [
                ['Paris Montparnasse', 48.8411, 2.3207],
                ['Paris Est', 48.8768, 2.3592],
                ['Paris Saint-Lazare', 48.8761, 2.3249],
                ['Paris Austerlitz', 48.8422, 2.3652],
                ['Lyon Part-Dieu', 45.7606, 4.8597],
                ['Marseille Saint-Charles', 43.3027, 5.3806],
                ['Gare de Strasbourg', 48.5851, 7.7346],
                ['Lille Europe', 50.6395, 3.0765],
                ['Lille Flandres', 50.6366, 3.0702],
                ['Bordeaux Saint-Jean', 44.8260, -0.5560],
                ['Toulouse Matabiau', 43.6111, 1.4537],
            ],
            'swiss' => [
                ['Bahnhof Bern', 46.9489, 7.4392],
                ['Basel SBB', 47.5476, 7.5896],
                ['Gare de Lausanne', 46.5167, 6.6296],
                ['Interlaken Ost', 46.6905, 7.8693],
                ['Stazione di Lugano', 46.0054, 8.9470],
                ['Genève-Aéroport', 46.2316, 6.1073],
            ],
            'inggris-raya' => [
                ['London King\'s Cross', 51.5309, -0.1233],
                ['London Euston', 51.5282, -0.1337],
                ['London Waterloo', 51.5031, -0.1132],
                ['London Liverpool Street', 51.5178, -0.0823],
                ['London Bridge', 51.5050, -0.0864],
                ['Manchester Piccadilly', 53.4770, -2.2309],
                ['Birmingham New Street', 52.4778, -1.8984],
                ['Edinburgh Waverley', 55.9520, -3.1893],
                ['Glasgow Central', 55.8590, -4.2582],
                ['Cardiff Central', 51.4753, -3.1790],
            ],
            'italia' => [
                ['Napoli Centrale', 40.8531, 14.2720],
                ['Firenze Santa Maria Novella', 43.7765, 11.2478],
                ['Bologna Centrale', 44.5058, 11.3430],
                ['Torino Porta Nuova', 45.0620, 7.6783],
                ['Verona Porta Nuova', 45.4287, 10.9827],
                ['Pisa Centrale', 43.7085, 10.3989],
                ['Genova Piazza Principe', 44.4166, 8.9222],
            ],
            'spanyol' => [
                ['Barcelona Sants', 41.3791, 2.1405],
                ['Madrid Chamartín', 40.4725, -3.6823],
                ['Valencia Joaquín Sorolla', 39.4586, -0.3743],
                ['Sevilla Santa Justa', 37.3920, -5.9753],
                ['Málaga María Zambrano', 36.7119, -4.4323],
                ['Zaragoza Delicias', 41.6586, -0.9111],
            ],
            'austria' => [
                ['Wien Hauptbahnhof', 48.1853, 16.3761],
                ['Wien Meidling', 48.1743, 16.3338],
                ['Salzburg Hauptbahnhof', 47.8130, 13.0457],
                ['Graz Hauptbahnhof', 47.0724, 15.4172],
                ['Linz Hauptbahnhof', 48.2903, 14.2918],
            ],
            'denmark' => [
                ['Aarhus H', 56.1501, 10.2048],
                ['Aalborg Station', 57.0434, 9.9168],
                ['Roskilde Station', 55.6402, 12.0806],
                ['Københavns Lufthavn Station', 55.6294, 12.6469],
            ],
            'yunani' => [
                ['Athens Larissa Station', 37.9923, 23.7218],
                ['Thessaloniki Railway Station', 40.6436, 22.9301],
                ['Piraeus Station', 37.9486, 23.6433],
                ['Larissa Railway Station', 39.6320, 22.4153],
            ],
            'rusia' => [
                ['Leningradsky railway station', 55.7767, 37.6556],
                ['Yaroslavsky railway station', 55.7757, 37.6559],
                ['Kursky railway station', 55.7580, 37.6598],
                ['Paveletsky railway station', 55.7295, 37.6397],
                ['Moskovsky railway station (Saint Petersburg)', 59.9304, 30.3622],
                ['Ladozhsky railway station', 59.9323, 30.4397],
            ],
        ];
    }
}
