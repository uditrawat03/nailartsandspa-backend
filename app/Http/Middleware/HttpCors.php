<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Exception;

class HttpCors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $allowedHosts = explode(',', config('config.allowed_hosts'));

        $requestHost = parse_url($request->headers->get('host'), PHP_URL_HOST);

        if (!app()->runningUnitTests() && !app()->environment('local')) {
            if (!\in_array($requestHost, $allowedHosts, false)) {
                throw new Exception();
            }
        }

        return $next($request);
    }
}
