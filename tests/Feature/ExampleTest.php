<?php

use App\Models\City;
use App\Models\Country;

test('homepage renders with navigation and content from the database', function () {
    $country = Country::factory()->create(['name' => 'Italia', 'slug' => 'italia', 'codes' => 'it']);

    $this->get(route('home'))
        ->assertOk()
        ->assertSee('Italia')
        ->assertSee(url('/negara/italia'), false)
        ->assertDontSee('agoda', false);
});

test('homepage hides destination section when there is no data', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertDontSee('Tujuan populer');
});

test('homepage only lists destinations whose thumbnail exists', function () {
    $country = Country::factory()->create();
    City::factory()->for($country)->create(['name' => 'Kota Hantu', 'thumb' => 'missing-file.jpg']);

    $this->get(route('home'))->assertOk()->assertDontSee('Kota Hantu');
});
