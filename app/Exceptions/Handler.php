<?php

namespace App\Exceptions;

use GuzzleHttp\Exception\ClientException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Spatie\LaravelIgnition\Exceptions\ViewException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (ClientException|ViewException $e, $request) {
            if ($e instanceof ClientException || $e->getPrevious() instanceof ClientException) {
                return response()->view('errors.404', [
                    'isInvalidToken' => true
                ]);
            }
        });
    }
}
