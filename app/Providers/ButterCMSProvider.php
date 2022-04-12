<?php

namespace App\Providers;

use ButterCMS\ButterCMS;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class ButterCMSProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ButterCMS::class, function ($app, array $parameters): ButterCMS {
            return new ButterCMS(Config::get('app.butterCmsToken'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
