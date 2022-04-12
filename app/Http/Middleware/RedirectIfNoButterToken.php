<?php

namespace App\Http\Middleware;

use ButterCMS\ButterCMS;
use Closure;
use Illuminate\Http\Request;

class RedirectIfNoButterToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $butterCmsToken = config('app.butterCmsToken');
        if (empty($butterCmsToken)) {
            return response(view('errors.noapitoken'));
        }

        return $next($request);
    }
}
