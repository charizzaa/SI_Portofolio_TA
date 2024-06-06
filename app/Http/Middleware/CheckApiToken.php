<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckApiToken
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('api_token')) {
            return redirect()->route('login'); // Redirect to login if token is missing
        }
        
        return $next($request);
    }
}
