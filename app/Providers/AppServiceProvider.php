<?php

namespace App\Providers;

use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('generalSettings', app(GeneralSettings::class));
        });

        App::setLocale(session('locale', config('app.locale')));

    }
}
