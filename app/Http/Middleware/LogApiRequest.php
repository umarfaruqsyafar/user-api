<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogApiRequest
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('API Request', [
            'ip'     => $request->ip(),
            'method' => $request->method(),
            'url'    => $request->fullUrl(),
            'body'   => $request->except(['password', 'token'])
        ]);

        return $next($request);
    }
}
