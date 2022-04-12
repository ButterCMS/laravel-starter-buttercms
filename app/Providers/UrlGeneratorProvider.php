<?php

namespace App\Providers;

use App\Http\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

class UrlGeneratorProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton("url", function ($app) {
            $routes = $app['router']->getRoutes();
            return new UrlGenerator(
                $routes,
                $app->rebinding(
                    'request',
                    $this->requestRebinder()
                ),
                $app['config']['app.asset_url']
            );
        });
    }

    protected function requestRebinder(): callable
    {
        return function ($app, $request) {
            $app['url']->setRequest($request);
        };
    }
}
