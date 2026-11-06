<?php

use App\Models\Affiliate;
use App\Models\AffiliateDestination;
use App\Models\City;
use App\Models\Country;
use App\Support\PlannerData;

beforeEach(function () {
    $this->country = Country::factory()->create(['name' => 'Belgia', 'slug' => 'belgia']);
    $this->klook = Affiliate::factory()->create([
        'name' => 'Klook', 'url' => 'https://klook.tpk.ro/abc', 'categories' => ['tour', 'hotel'],
        'search_template' => 'https://www.klook.com/en-US/search/result/?query={query}&search_scope=main_search', 'hotel_search_template' => 'https://www.klook.com/en-US/search/result/?query={query}&search_scope=main_search&tab_key=54', 'sort' => 1,
    ]);
});

test('planner page renders the map shell and place data with coordinates', function () {
    City::factory()->for($this->country)->create(['name' => 'Atomium', 'slug' => 'atomium', 'type' => 'tourist', 'latitude' => '50.8949', 'longitude' => '4.3415']);

    $this->get(route('planner'))
        ->assertOk()
        ->assertSee('id="planner-map"', false)
        ->assertSee('Atomium')
        ->assertSee('50.8949', false)
        ->assertDontSee('booking.com', false)
        ->assertDontSee('agoda', false);
});

test('tourist places get specific ticket and hotel links and never a homepage link', function () {
    City::factory()->for($this->country)->create(['name' => 'Atomium', 'slug' => 'atomium', 'type' => 'tourist', 'search_term' => 'Atomium Brussels', 'latitude' => '50.89', 'longitude' => '4.34']);

    $place = collect(PlannerData::places())->firstWhere('name', 'Atomium');

    expect($place['links'])->toHaveCount(1)
        ->and($place['links'][0]['url'])->toContain('https://klook.tpk.ro/abc?u=')->toContain(rawurlencode(rawurlencode('Atomium Brussels')))
        ->and($place['hotelUrl'])->toContain(rawurlencode(rawurlencode('Atomium Brussels')))->toContain(rawurlencode('tab_key=54'))
        ->and($place['hotelUrl'])->not->toContain('hotels');
});

test('a curated attraction page wins over search and non-tourist places have no ticket links', function () {
    $atomium = City::factory()->for($this->country)->create(['name' => 'Atomium', 'type' => 'tourist', 'search_term' => 'Atomium Brussels', 'latitude' => '50.89', 'longitude' => '4.34']);
    City::factory()->for($this->country)->create(['name' => 'Brussels Airport', 'type' => 'airport', 'latitude' => '50.9', 'longitude' => '4.48']);
    AffiliateDestination::create(['affiliate_id' => $this->klook->id, 'country_id' => $this->country->id, 'city_id' => $atomium->id, 'kind' => 'attraction', 'category' => 'tour', 'label' => 'Atomium', 'url' => 'https://www.klook.com/en-US/activity/109603-atomium/']);

    $places = collect(PlannerData::places())->keyBy('name');

    expect($places['Atomium']['links'][0]['url'])->toContain(rawurlencode('https://www.klook.com/en-US/activity/109603-atomium/'))
        ->and($places['Brussels Airport']['links'])->toBe([])
        ->and($places['Brussels Airport']['url'])->toBeNull();
});

test('places without usable coordinates are left out', function () {
    City::factory()->for($this->country)->create(['name' => 'Nergens', 'latitude' => '', 'longitude' => '']);

    expect(collect(PlannerData::places())->pluck('name'))->not->toContain('Nergens');
});

test('hotel endpoint returns a tracked search link and validates input', function () {
    $this->getJson(route('planner.hotel', ['name' => 'ibis budget Antwerpen Port']))
        ->assertOk()
        ->assertJsonPath('url', 'https://klook.tpk.ro/abc?u='.rawurlencode('https://www.klook.com/en-US/search/result/?query=ibis%20budget%20Antwerpen%20Port&search_scope=main_search&tab_key=54'));

    $this->getJson(route('planner.hotel'))->assertUnprocessable();
});
