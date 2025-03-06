<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // aturan hanya admin yang bisa mengakses.
        if(Auth::check() && Auth::user()->admin)
        {
            // jika admin, teruskan ke halaman dashboard admin
            return $next($request);
        }
        // jika bukan admin, arahkan ke route yang lain
        return redirect()->route('dashboard.user');
    }
}
