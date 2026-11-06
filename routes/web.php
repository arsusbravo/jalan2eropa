<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\PlannerController;
use App\Http\Controllers\TipController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('negara', [CountryController::class, 'index'])->name('countries.index');
Route::get('negara/{country:slug}', [CountryController::class, 'show'])->name('countries.show');
Route::get('negara/{country:slug}/{city:slug}', [PlaceController::class, 'show'])
    ->scopeBindings()
    ->name('places.show');

Route::get('tips', [TipController::class, 'index'])->name('tips.index');
Route::get('tips/{slug}', [TipController::class, 'show'])->name('tips.show');

Route::get('pesan', PesanController::class)->name('pesan');
Route::get('route-planner', PlannerController::class)->name('planner');
Route::get('route-planner/hotel', [PlannerController::class, 'hotel'])->middleware('throttle:60,1')->name('planner.hotel');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
});

require __DIR__.'/admin.php';
require __DIR__.'/settings.php';
