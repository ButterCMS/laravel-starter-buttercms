<?php

namespace App\Providers;

use ButterCMS\ButterCMS;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('isPreview', function () {
            $configVal = Config::get('app.allowPreview');

            if ($configVal !== null) {
                $returnVal = $configVal === true ? 1 : 0;
            } else {
                $returnVal = 1;
            }

            return $returnVal;
        });
    }
}
