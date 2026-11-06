<?php

namespace App\Providers;

use App\Models\Country;
use App\Support\HotelLinker;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->scoped(HotelLinker::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureDefaults();
        $this->shareSiteNavigation();
    }

    /**
     * Provide the country list to the public site layout for navigation and footer.
     */
    protected function shareSiteNavigation(): void
    {
        View::composer('components.layouts.site', function ($view): void {
            $view->with('navCountries', Country::query()->where('active', true)->orderBy('name')->get());
        });
    }

    /**
     * Configure default behaviors for production-ready applications.
     */
    protected function configureDefaults(): void
    {
        Date::use(CarbonImmutable::class);

        // Keeps indexed string columns within the index key limit of older MySQL 5.x servers.
        Schema::defaultStringLength(191);

        DB::prohibitDestructiveCommands(
            app()->isProduction(),
        );

        Password::defaults(fn (): ?Password => app()->isProduction()
            ? Password::min(12)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()
            : null,
        );
    }
}
