<?php

use App\Models\City;
use App\Models\Country;
use Database\Seeders\AirportSeeder;
use Database\Seeders\TrainStationSeeder;

beforeEach(function () {
    $this->netherlands = Country::factory()->create(['slug' => 'negeri-belanda']);
    $this->britain = Country::factory()->create(['slug' => 'inggris-raya']);
    $this->denmark = Country::factory()->create(['slug' => 'denmark']);
});

test('seeders add missing hubs and can run twice without duplicates', function () {
    City::factory()->for($this->netherlands)->create(['name' => 'Luchthaven Schiphol', 'slug' => 'luchthaven-schiphol', 'type' => 'airport', 'latitude' => '52.3105386', 'longitude' => '4.7682744']);

    $this->seed(AirportSeeder::class);
    $this->seed(TrainStationSeeder::class);
    $airports = City::where('type', 'airport')->count();
    $stations = City::where('type', 'train station')->count();

    $this->seed(AirportSeeder::class);
    $this->seed(TrainStationSeeder::class);

    expect(City::where('type', 'airport')->count())->toBe($airports)
        ->and(City::where('type', 'train station')->count())->toBe($stations)
        ->and(City::where('slug', 'eindhoven-airport')->where('type', 'airport')->exists())->toBeTrue()
        ->and(City::where('slug', 'utrecht-centraal')->where('type', 'train station')->exists())->toBeTrue()
        ->and(City::where('slug', 'luchthaven-schiphol')->count())->toBe(1);
});

test('seeded hubs have valid europe coordinates and a country', function () {
    $this->seed(AirportSeeder::class);
    $this->seed(TrainStationSeeder::class);

    City::whereIn('type', ['airport', 'train station'])->get()->each(function (City $place): void {
        expect($place->country_id)->not->toBeNull()
            ->and((float) $place->latitude)->toBeBetween(27, 70)
            ->and((float) $place->longitude)->toBeBetween(-17, 62)
            ->and($place->has_detail_page)->toBeFalse();
    });
});

test('an existing place within 100 metres is not added twice', function () {
    City::factory()->for($this->netherlands)->create(['name' => 'Utrecht CS', 'slug' => 'utrecht-cs', 'type' => 'train station', 'latitude' => '52.0894', 'longitude' => '5.1102']);

    $this->seed(TrainStationSeeder::class);

    expect(City::where('slug', 'utrecht-centraal')->exists())->toBeFalse();
});

test('glasgow moves to britain and html entities are cleaned from names', function () {
    City::factory()->for($this->denmark)->create(['name' => 'Glasgow International Airport', 'slug' => 'glasgow-international-airport', 'type' => 'airport', 'latitude' => '55.86', 'longitude' => '-4.43']);
    City::factory()->for($this->britain)->create(['name' => 'Cote d&#039;Azur Airport', 'slug' => 'cote-d-azur', 'type' => 'airport', 'latitude' => '43.66', 'longitude' => '7.2']);

    $this->seed(AirportSeeder::class);

    expect(City::where('slug', 'glasgow-international-airport')->value('country_id'))->toBe($this->britain->id)
        ->and(City::where('slug', 'cote-d-azur')->value('name'))->toBe("Cote d'Azur Airport");
});
