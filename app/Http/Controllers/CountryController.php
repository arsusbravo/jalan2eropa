<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Support\AffiliateOffers;
use Illuminate\Contracts\View\View;

class CountryController extends Controller
{
    /**
     * List every active country.
     */
    public function index(): View
    {
        return view('countries.index', [
            'countries' => Country::query()->where('active', true)->orderBy('name')->get(),
        ]);
    }

    /**
     * Show a country guide with its places.
     */
    public function show(Country $country): View
    {
        abort_unless($country->active, 404);

        $places = $country->cities()->orderBy('id')->get()->groupBy('type');

        $neighbours = Country::query()->where('active', true)->orderBy('name')->get();
        $position = $neighbours->search(fn (Country $candidate): bool => $candidate->is($country));

        return view('countries.show', [
            'country' => $country,
            'tourist' => $places->get('tourist', collect()),
            'shopping' => $places->get('shopping', collect()),
            'airports' => $places->get('airport', collect()),
            'stations' => $places->get('train station', collect()),
            'cityCards' => AffiliateOffers::cityCards($country),
            'attractions' => AffiliateOffers::attractions($country),
            'previous' => $position > 0 ? $neighbours[$position - 1] : null,
            'next' => $neighbours[$position + 1] ?? null,
        ]);
    }
}
