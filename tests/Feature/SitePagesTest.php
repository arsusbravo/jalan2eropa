<?php

use App\Models\City;
use App\Models\Content;
use App\Models\Country;

test('country index and country page render', function () {
    $country = Country::factory()->create(['name' => 'Belgia', 'slug' => 'belgia', 'description' => '<p>Negara kecil yang indah.</p>']);
    City::factory()->for($country)->create(['name' => 'Atomium', 'slug' => 'atomium']);
    City::factory()->for($country)->create(['name' => 'Brussels Airport', 'slug' => 'brussels-airport', 'type' => 'airport']);

    $this->get(route('countries.index'))->assertOk()->assertSee('Belgia');

    $this->get(route('countries.show', $country))
        ->assertOk()
        ->assertSee('Negara kecil yang indah.', false)
        ->assertSee('Atomium')
        ->assertSee('Brussels Airport');
});

test('inactive countries are not found', function () {
    $country = Country::factory()->create(['active' => false]);

    $this->get(route('countries.show', $country))->assertNotFound();
});

test('a place only resolves under its own country', function () {
    $belgium = Country::factory()->create(['slug' => 'belgia']);
    $france = Country::factory()->create(['slug' => 'perancis']);
    $place = City::factory()->for($belgium)->create(['name' => 'Atomium', 'slug' => 'atomium', 'attractions' => '<p>Monumen ikonik.</p>']);

    $this->get(route('places.show', [$belgium, $place]))->assertOk()->assertSee('Monumen ikonik.', false);
    $this->get('/negara/perancis/atomium')->assertNotFound();
});

test('place pages only embed youtube videos', function () {
    $country = Country::factory()->create();
    $safe = City::factory()->for($country)->create(['youtube' => 'https://www.youtube.com/embed/abc123']);
    $unsafe = City::factory()->for($country)->create(['youtube' => 'https://evil.example/embed/abc123']);

    $this->get(route('places.show', [$country, $safe]))->assertSee('youtube.com/embed/abc123', false);
    $this->get(route('places.show', [$country, $unsafe]))->assertDontSee('evil.example', false);
});

test('tip pages render cleaned content and unknown tips are not found', function () {
    Content::create([
        'title' => 'Bagaimana mengurus visa ke Eropa',
        'slug' => 'visa',
        'type' => 'page',
        'content' => '<p>Siapkan paspor. <a href="https://www.booking.com/x?aid=1">Cari hotel</a></p>',
    ]);

    $this->get(route('tips.show', 'visa'))
        ->assertOk()
        ->assertSee('Siapkan paspor.')
        ->assertSee('Cari hotel')
        ->assertDontSee('booking.com', false);

    $this->get(route('tips.show', 'tidak-ada'))->assertNotFound();
    $this->get(route('tips.index'))->assertOk();
});

test('route planner page renders', function () {
    $this->get(route('planner'))->assertOk()->assertSee('Route planner');
});

test('booking page shows the partner widgets with and without a country', function () {
    $country = Country::factory()->create(['slug' => 'belgia']);

    foreach ([route('pesan'), route('pesan', ['negara' => $country->slug])] as $url) {
        $this->get($url)
            ->assertOk()
            ->assertSee('https://tpwgt.com/content?currency=usd&amp;trs=593998', false)
            ->assertSee('Antar jemput')
            ->assertSee('Rental sepeda')
            ->assertDontSee('agoda', false);
    }
});

test('tips page shows the partner widgets', function () {
    $this->get(route('tips.index'))
        ->assertOk()
        ->assertSee('https://tpwgt.com/content?currency=usd&amp;trs=593998', false)
        ->assertSee('Siapkan perjalanan');
});

test('tip article pages show the partner widgets', function () {
    Content::create(['title' => 'Visa', 'slug' => 'visa', 'type' => 'page', 'content' => '<p>Isi.</p>']);

    $this->get(route('tips.show', 'visa'))
        ->assertOk()
        ->assertSee('Antar jemput')
        ->assertSee('Rental sepeda')
        ->assertSee('campaign_id=541', false)
        ->assertDontSee('Tiket pesawat murah')
        ->assertDontSee('Sudah siap?');
});

test('airports and train stations have no detail page and are not linked', function () {
    $country = Country::factory()->create(['slug' => 'belgia']);
    $airport = City::factory()->for($country)->create(['name' => 'Brussels Airport', 'slug' => 'brussels-airport', 'type' => 'airport']);
    $station = City::factory()->for($country)->create(['name' => 'Brussel-Zuid', 'slug' => 'brussel-zuid', 'type' => 'train station']);

    $this->get(route('places.show', [$country, $airport]))->assertNotFound();
    $this->get(route('places.show', [$country, $station]))->assertNotFound();
    $this->get(route('countries.show', $country))
        ->assertOk()
        ->assertSee('Brussels Airport')
        ->assertDontSee('/negara/belgia/brussels-airport', false);
});

test('place page shows the nearest airport and train station', function () {
    $country = Country::factory()->create(['slug' => 'belgia']);
    $place = City::factory()->for($country)->create(['slug' => 'atomium', 'type' => 'tourist', 'latitude' => '50.894', 'longitude' => '4.341']);
    City::factory()->for($country)->create(['name' => 'Brussels Airport', 'type' => 'airport', 'latitude' => '50.901', 'longitude' => '4.484']);
    City::factory()->for($country)->create(['name' => 'Far Airport', 'type' => 'airport', 'latitude' => '51.2', 'longitude' => '2.9']);
    City::factory()->for($country)->create(['name' => 'Brussel-Zuid', 'type' => 'train station', 'latitude' => '50.836', 'longitude' => '4.336']);

    $this->get(route('places.show', [$country, $place]))
        ->assertOk()
        ->assertSee('Transportasi terdekat')
        ->assertSee('Brussels Airport')
        ->assertDontSee('Far Airport')
        ->assertSee('Brussel-Zuid');
});
