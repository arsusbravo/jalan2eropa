<?php

use App\Models\Affiliate;
use App\Models\AffiliateDestination;
use App\Models\City;
use App\Models\Country;
use App\Support\AffiliateLink;
use App\Support\AffiliateOffers;

function klook(array $overrides = []): Affiliate
{
    return Affiliate::factory()->create($overrides + [
        'name' => 'Klook',
        'url' => 'https://klook.tpk.ro/abc',
        'categories' => ['tour', 'hotel'],
        'search_template' => 'https://k.test/search?query={query}&scope=main',
        'sort' => 1,
    ]);
}

test('the tracked url carries the encoded destination in the u parameter', function () {
    $program = Affiliate::factory()->make(['url' => 'https://klook.tpk.ro/abc123']);

    expect(AffiliateLink::url($program, 'https://www.klook.com/en-US/search/?query=amsterdam'))
        ->toBe('https://klook.tpk.ro/abc123?u=https%3A%2F%2Fwww.klook.com%2Fen-US%2Fsearch%2F%3Fquery%3Damsterdam')
        ->and(AffiliateLink::url($program))->toBe('https://klook.tpk.ro/abc123');
});

test('search templates fill and encode the query', function () {
    expect(AffiliateLink::fromTemplate('https://x.test/s?q={query}', 'New York & Co'))->toBe('https://x.test/s?q=New%20York%20%26%20Co')
        ->and(AffiliateLink::fromTemplate(null, 'a'))->toBeNull()
        ->and(AffiliateLink::fromTemplate('https://x.test/s', 'a'))->toBeNull();
});

test('generic offers need a search template and never fall back to a homepage', function () {
    $country = Country::factory()->create(['international' => 'Belgium']);
    klook();
    Affiliate::factory()->create(['categories' => ['tour'], 'search_template' => null, 'sort' => 2]);
    Affiliate::factory()->inactive()->create(['categories' => ['tour']]);
    Affiliate::factory()->create(['categories' => ['tour'], 'url' => '']);

    $offers = AffiliateOffers::for('tour', $country);

    expect($offers)->toHaveCount(1)
        ->and($offers->first()['url'])->toBe('https://klook.tpk.ro/abc?u='.rawurlencode('https://k.test/search?query=Belgium&scope=main'))
        ->and(AffiliateOffers::for('hotel', $country)->first()['url'])->toContain(rawurlencode('https://k.test/search?query=Belgium&scope=main'))
        ->and(AffiliateOffers::for('car', $country))->toBeEmpty();
});

test('a place links to its curated attraction page, else to a search for its search term, else nothing', function () {
    $country = Country::factory()->create();
    $program = klook();
    $tiqets = Affiliate::factory()->create(['name' => 'Tiqets', 'url' => 'https://tiqets.tpk.ro/x', 'categories' => ['tour'], 'search_template' => null, 'sort' => 2]);

    $curated = City::factory()->for($country)->create(['search_term' => 'Atomium Brussels']);
    AffiliateDestination::create(['affiliate_id' => $tiqets->id, 'country_id' => $country->id, 'city_id' => $curated->id, 'kind' => 'attraction', 'category' => 'tour', 'label' => 'Atomium', 'url' => 'https://tiqets.test/atomium']);

    $searchOnly = City::factory()->for($country)->create(['search_term' => 'Manneken Pis']);
    $nothing = City::factory()->for($country)->create(['search_term' => null]);

    expect(AffiliateOffers::forPlace($curated)->pluck('url')->all())->toBe([
        'https://klook.tpk.ro/abc?u='.rawurlencode('https://k.test/search?query=Atomium%20Brussels&scope=main'),
        'https://tiqets.tpk.ro/x?u='.rawurlencode('https://tiqets.test/atomium'),
    ])
        ->and(AffiliateOffers::forPlace($searchOnly)->pluck('program.name')->all())->toBe(['Klook'])
        ->and(AffiliateOffers::forPlace($nothing))->toBeEmpty();
});

test('city cards and attractions group providers by label', function () {
    $country = Country::factory()->create();
    $program = klook();
    $tiqets = Affiliate::factory()->create(['name' => 'Tiqets', 'url' => 'https://tiqets.tpk.ro/x', 'categories' => ['tour'], 'search_template' => null, 'sort' => 2]);

    AffiliateDestination::create(['affiliate_id' => $program->id, 'country_id' => $country->id, 'kind' => 'city', 'category' => 'tour', 'label' => 'Brussels', 'query' => 'Brussels']);
    AffiliateDestination::create(['affiliate_id' => $tiqets->id, 'country_id' => $country->id, 'kind' => 'city', 'category' => 'tour', 'label' => 'Brussels', 'url' => 'https://tiqets.test/brussels']);
    AffiliateDestination::create(['affiliate_id' => $program->id, 'country_id' => $country->id, 'kind' => 'attraction', 'category' => 'tour', 'label' => 'Atomium', 'query' => 'Atomium Brussels']);

    $cities = AffiliateOffers::cityCards($country);

    expect($cities)->toHaveCount(1)
        ->and($cities[0]['label'])->toBe('Brussels')
        ->and($cities[0]['links']->pluck('program.name')->all())->toBe(['Klook', 'Tiqets'])
        ->and($cities[0]['hotelUrl'])->toContain(rawurlencode('https://k.test/search?query=Brussels&scope=main'))
        ->and(AffiliateOffers::attractions($country)->pluck('label')->all())->toBe(['Atomium']);
});

test('rows of inactive programs or without a destination are ignored', function () {
    $country = Country::factory()->create();
    $off = Affiliate::factory()->inactive()->create(['categories' => ['tour']]);
    $noTemplate = Affiliate::factory()->create(['categories' => ['tour'], 'search_template' => null]);

    AffiliateDestination::create(['affiliate_id' => $off->id, 'country_id' => $country->id, 'kind' => 'city', 'category' => 'tour', 'label' => 'Brussels', 'url' => 'https://x.test']);
    AffiliateDestination::create(['affiliate_id' => $noTemplate->id, 'country_id' => $country->id, 'kind' => 'city', 'category' => 'tour', 'label' => 'Brussels', 'query' => 'Brussels']);

    expect(AffiliateOffers::cityCards($country))->toBeEmpty();
});

test('hotel names in content open a tracked search for that exact hotel', function () {
    klook(['categories' => ['hotel']]);
    $country = Country::factory()->create();
    $place = City::factory()->for($country)->create([
        'attractions' => '<p>Hotel murah:</p><ol><li><a title="ibis budget Antwerpen Port" href="https://www.booking.com/hotel/be/etap-antwerpen-haven.id.html?aid=1">ibis budget Antwerpen Port</a>: dekat pelabuhan.</li></ol>',
    ]);

    $html = $place->body;

    expect($html)
        ->toContain('https://klook.tpk.ro/abc?u='.rawurlencode('https://k.test/search?query=ibis%20budget%20Antwerpen%20Port&scope=main'))
        ->toContain('rel="sponsored nofollow noopener"')
        ->toContain('target="_blank"')
        ->toContain('data-hotel')
        ->not->toContain('booking.com');
});

test('hotel names fall back to plain text when no hotel program is active', function () {
    Affiliate::factory()->inactive()->create(['categories' => ['hotel'], 'search_template' => 'https://k.test/?q={query}']);
    $place = City::factory()->for(Country::factory()->create())->create([
        'attractions' => '<p><a title="Hotel X" href="https://www.booking.com/hotel/be/x.html">Hotel X</a></p>',
    ]);

    expect($place->body)->toContain('Hotel X')->not->toContain('<a')->not->toContain('booking.com');
});

test('country pages show city cards, attraction rows and a disclosure', function () {
    $country = Country::factory()->create(['name' => 'Belgia', 'slug' => 'belgia']);
    $program = klook();
    AffiliateDestination::create(['affiliate_id' => $program->id, 'country_id' => $country->id, 'kind' => 'city', 'category' => 'tour', 'label' => 'Brussels', 'query' => 'Brussels']);
    AffiliateDestination::create(['affiliate_id' => $program->id, 'country_id' => $country->id, 'kind' => 'attraction', 'category' => 'tour', 'label' => 'Atomium', 'query' => 'Atomium Brussels']);

    $this->get(route('countries.show', $country))
        ->assertOk()
        ->assertSee('Tur &amp; tiket populer di Belgia', false)
        ->assertSee('Brussels')
        ->assertSee('Cek tiket di Klook')
        ->assertSee('rel="sponsored nofollow noopener"', false)
        ->assertSee('tautan afiliasi')
        ->assertDontSee('href="https://klook.tpk.ro/abc"', false)
        ->assertDontSee('agoda', false);
});

test('country pages without curated destinations render no affiliate block', function () {
    $country = Country::factory()->create(['slug' => 'belgia']);
    klook();

    $this->get(route('countries.show', $country))->assertOk()->assertDontSee('tiket populer di');
});

test('tourist place pages show a tickets card for that place only', function () {
    $country = Country::factory()->create();
    klook();
    $place = City::factory()->for($country)->create(['name' => 'Atomium', 'search_term' => 'Atomium Brussels']);
    $unsearchable = City::factory()->for($country)->create(['name' => 'Tempat Lokal', 'search_term' => null]);

    $this->get(route('places.show', [$country, $place]))
        ->assertOk()
        ->assertSee('Cek di Klook')
        ->assertSee(rawurlencode(rawurlencode('Atomium Brussels')), false);

    $this->get(route('places.show', [$country, $unsearchable]))->assertOk()->assertDontSee('Cek di Klook');
});

test('the booking hub shows countries, and city offers once a country is chosen', function () {
    $country = Country::factory()->create(['name' => 'Belgia', 'slug' => 'belgia']);
    $program = klook();
    AffiliateDestination::create(['affiliate_id' => $program->id, 'country_id' => $country->id, 'kind' => 'city', 'category' => 'tour', 'label' => 'Brussels', 'query' => 'Brussels']);

    $this->get(route('pesan'))->assertOk()->assertSee('Ke mana Anda ingin pergi?')->assertSee('Belgia');
    $this->get(route('pesan', ['negara' => 'belgia']))->assertOk()->assertSee('Brussels');
});

test('the legacy Agoda program is never rendered', function () {
    $country = Country::factory()->create();
    Affiliate::factory()->inactive()->create(['name' => 'Agoda', 'slug' => 'agoda', 'categories' => ['hotel']]);

    $this->get(route('countries.show', $country))->assertOk()->assertDontSee('Agoda');
    $this->get(route('pesan'))->assertOk()->assertDontSee('Agoda');
});
