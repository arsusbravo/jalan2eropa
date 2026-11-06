<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Models\AffiliateDestination;
use App\Models\City;
use App\Models\Content;
use App\Models\Country;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    /**
     * Overview of the content managed in the admin.
     */
    public function __invoke(): Response
    {
        return Inertia::render('dashboard', [
            'stats' => [
                'countries' => Country::query()->count(),
                'places' => City::query()->count(),
                'content' => Content::query()->count(),
                'programs' => Affiliate::query()->where('active', true)->count(),
                'links' => AffiliateDestination::query()->count(),
            ],
        ]);
    }
}
