<?php

use App\Http\Controllers\Admin\AffiliateController;
use App\Http\Controllers\Admin\AffiliateLinkController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\PlaceController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('countries', CountryController::class)->except('show');
    Route::resource('places', PlaceController::class)->except('show');
    Route::resource('content', ContentController::class)->except('show');
    Route::resource('affiliates', AffiliateController::class)->except('show');
    Route::resource('affiliate-links', AffiliateLinkController::class)->except('show')->parameters(['affiliate-links' => 'affiliateLink']);
});
