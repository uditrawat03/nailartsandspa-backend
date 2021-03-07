<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ApiResponseServiceProvider extends ServiceProvider
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
        Response::macro('asSuccess', function ($data, $message = null) {
            return Response::json(['success' => true, 'payload' => $data, 'message' => $message]);
        });
        Response::macro('asError', function ($message, $error_code) {
            return Response::json(['success' => false, 'message' => $message], $error_code);
        });
    }
}
