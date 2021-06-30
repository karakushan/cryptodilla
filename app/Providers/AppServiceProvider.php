<?php

namespace App\Providers;

use App\Services\ExchangeConnector;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Date\Date;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ExchangeConnector::class, function ($app) {
            return new ExchangeConnector();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Date::setLocale(app()->getLocale());
    }
}
