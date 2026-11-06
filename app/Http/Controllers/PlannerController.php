<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Support\HotelLinker;
use App\Support\PlannerData;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PlannerController extends Controller
{
    /**
     * Show the route planner.
     */
    public function __invoke(): View
    {
        return view('planner', [
            'places' => PlannerData::places(),
            'countries' => Country::query()->where('active', true)->orderBy('name')->get(['name', 'slug']),
        ]);
    }

    /**
     * Tracked hotel search link for a hotel name typed on a stay stop.
     */
    public function hotel(Request $request, HotelLinker $hotels): JsonResponse
    {
        $name = $request->validate(['name' => ['required', 'string', 'max:120']])['name'];

        return response()->json(['url' => $hotels->url($name)]);
    }
}
