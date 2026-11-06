<?php

use App\Models\Affiliate;
use App\Models\AffiliateDestination;
use App\Models\City;
use App\Models\Content;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    $this->admin = User::factory()->create();
});

test('admin pages require authentication', function () {
    foreach (['countries', 'places', 'content', 'affiliates', 'affiliate-links'] as $section) {
        $this->get('/admin/'.$section)->assertRedirect(route('login'));
    }
});

test('every admin section lists and opens its create form', function () {
    Country::factory()->create();
    City::factory()->create();
    Content::create(['title' => 'Visa', 'slug' => 'visa', 'type' => 'page', 'content' => '']);
    Affiliate::factory()->create();

    foreach (['countries', 'places', 'content', 'affiliates', 'affiliate-links'] as $section) {
        $this->actingAs($this->admin)->get('/admin/'.$section)->assertOk();
        $this->actingAs($this->admin)->get('/admin/'.$section.'/create')->assertOk();
    }
});

test('a country can be created with a slug from its name, a photo, and edited', function () {
    Storage::fake('public');

    $this->actingAs($this->admin)->post(route('admin.countries.store'), [
        'name' => 'Noorwegen', 'codes' => 'NO', 'active' => true,
        'photo' => UploadedFile::fake()->image('foto.jpg'),
    ])->assertRedirect();

    $country = Country::query()->where('name', 'Noorwegen')->sole();

    expect($country->slug)->toBe('noorwegen')->and($country->codes)->toBe('no')->and($country->description)->toBe('');
    Storage::disk('public')->assertExists('images/countries/photos/noorwegen.jpg');

    $this->actingAs($this->admin)->put(route('admin.countries.update', $country), [
        'name' => 'Noorwegen', 'codes' => 'no', 'active' => false, 'description' => '<p>Fjorden</p>',
    ])->assertRedirect();

    expect($country->fresh()->active)->toBeFalse()->and($country->fresh()->description)->toBe('<p>Fjorden</p>');
});

test('a country with places cannot be deleted but an empty one can', function () {
    $busy = Country::factory()->create();
    City::factory()->for($busy)->create();
    $empty = Country::factory()->create();

    $this->actingAs($this->admin)->delete(route('admin.countries.destroy', $busy));
    $this->actingAs($this->admin)->delete(route('admin.countries.destroy', $empty));

    expect(Country::query()->whereKey($busy->id)->exists())->toBeTrue()
        ->and(Country::query()->whereKey($empty->id)->exists())->toBeFalse();
});

test('a place needs valid coordinates, accepts a thumbnail upload and refreshes the planner cache', function () {
    Storage::fake('public');
    $country = Country::factory()->create();
    Cache::put('planner.places', ['stale']);

    $this->actingAs($this->admin)->post(route('admin.places.store'), [
        'country_id' => $country->id, 'name' => 'Atomium', 'type' => 'tourist', 'latitude' => 'abc', 'longitude' => '4.3',
    ])->assertSessionHasErrors('latitude');

    $this->actingAs($this->admin)->post(route('admin.places.store'), [
        'country_id' => $country->id, 'name' => 'Atomium', 'type' => 'tourist', 'latitude' => '50.89', 'longitude' => '4.34',
        'thumb_file' => UploadedFile::fake()->image('a.jpg'),
    ])->assertSessionHasNoErrors();

    $place = City::query()->where('name', 'Atomium')->sole();

    expect($place->slug)->toBe('atomium')->and($place->thumb)->not->toBe('')->and(Cache::has('planner.places'))->toBeFalse();
    Storage::disk('public')->assertExists('images/article/places/'.$place->thumb);
});

test('content used by the public tips cannot be deleted or renamed', function () {
    $visa = Content::create(['title' => 'Visa', 'slug' => 'visa', 'type' => 'page', 'content' => '<p>x</p>']);
    $extra = Content::create(['title' => 'Extra', 'slug' => 'extra', 'type' => 'page', 'content' => '']);

    $this->actingAs($this->admin)->delete(route('admin.content.destroy', $visa));
    $this->actingAs($this->admin)->put(route('admin.content.update', $visa), ['title' => 'Visa', 'slug' => 'nieuw', 'type' => 'page', 'content' => ''])->assertSessionHasErrors('slug');
    $this->actingAs($this->admin)->delete(route('admin.content.destroy', $extra));

    expect(Content::query()->where('slug', 'visa')->exists())->toBeTrue()
        ->and(Content::query()->where('slug', 'extra')->exists())->toBeFalse();
});

test('affiliate programs validate their short link and search templates', function () {
    $this->actingAs($this->admin)->post(route('admin.affiliates.store'), [
        'name' => 'Klook', 'active' => true, 'sort' => 10, 'url' => '', 'search_template' => 'https://x.test/?q=',
    ])->assertSessionHasErrors(['url', 'search_template']);

    $this->actingAs($this->admin)->post(route('admin.affiliates.store'), [
        'name' => 'Klook', 'active' => true, 'sort' => 10, 'categories' => ['tour', 'hotel'],
        'url' => 'https://klook.tpk.ro/abc', 'search_template' => 'https://x.test/?q={query}',
    ])->assertSessionHasNoErrors();

    expect(Affiliate::query()->where('slug', 'klook')->sole()->categories)->toBe(['tour', 'hotel']);
});

test('affiliate links need a query or url, and programs with links cannot be deleted', function () {
    $program = Affiliate::factory()->create();
    $country = Country::factory()->create();

    $this->actingAs($this->admin)->post(route('admin.affiliate-links.store'), [
        'affiliate_id' => $program->id, 'country_id' => $country->id, 'category' => 'tour', 'kind' => 'city', 'label' => 'Brussels',
    ])->assertSessionHasErrors(['query', 'url']);

    $this->actingAs($this->admin)->post(route('admin.affiliate-links.store'), [
        'affiliate_id' => $program->id, 'country_id' => $country->id, 'category' => 'tour', 'kind' => 'city', 'label' => 'Brussels', 'query' => 'Brussels',
    ])->assertSessionHasNoErrors();

    $this->actingAs($this->admin)->delete(route('admin.affiliates.destroy', $program));

    expect(Affiliate::query()->whereKey($program->id)->exists())->toBeTrue()
        ->and(AffiliateDestination::query()->count())->toBe(1);
});
