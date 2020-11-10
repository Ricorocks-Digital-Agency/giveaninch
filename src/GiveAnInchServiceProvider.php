<?php

namespace RicorocksDigitalAgency\Giveaninch;

use Illuminate\Support\ServiceProvider;

class GiveAnInchServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('giveaninch.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'giveaninch');

        $this->app->bind('giveaninch', function () {
            return new GiveAnInch;
        });
    }
}
