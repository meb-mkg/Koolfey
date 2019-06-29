<?php

namespace Koolfey\Koolfey;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class KoolfeyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->publishes([
                __DIR__.'/public' => public_path('/'),
            ], 'public');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'Koolfey');//add package name as second parameter
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        //$this->mergeConfigFrom(__DIR__.'/config', config_path(''));
        $this->publishes([
                __DIR__.'/config' => config_path('/'),
            ]);
    }
}
