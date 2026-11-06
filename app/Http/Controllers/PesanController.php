<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Support\AffiliateOffers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Booking hub: all partner offers, optionally tailored to a chosen country.
     */
    public function __invoke(Request $request): View
    {
        $countries = Country::query()->where('active', true)->orderBy('name')->get();
        $country = $countries->firstWhere('slug', $request->string('negara')->toString());

        return view('pesan', [
            'countries' => $countries,
            'country' => $country,
            'cityCards' => $country ? AffiliateOffers::cityCards($country) : collect(),
            'attractions' => $country ? AffiliateOffers::attractions($country) : collect(),
        ]);
    }
}
