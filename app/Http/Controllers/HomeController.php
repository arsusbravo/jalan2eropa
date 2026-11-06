<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Support\AffiliateOffers;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Show the public homepage.
     */
    public function __invoke(): View
    {
        $countries = Country::query()->where('active', true)->orderBy('name')->get();

        $destinations = City::query()
            ->with('country')
            ->where('type', 'tourist')
            ->where('thumb', '!=', '')
            ->orderBy('id')
            ->get()
            ->filter(fn (City $city): bool => $city->thumb_url !== null && $city->country !== null)
            ->groupBy('country_id')
            ->flatMap(fn ($cities) => $cities->take(2))
            ->shuffle(crc32(now()->toDateString()))
            ->take(8)
            ->values();

        return view('home', [
            'countries' => $countries,
            'destinations' => $destinations,
            'booking' => AffiliateOffers::groups(['hotel', 'tour', 'flight', 'esim', 'car', 'transfer'], limit: 1),
            'cityCount' => City::query()->where('type', 'tourist')->count(),
        ]);
    }
}
