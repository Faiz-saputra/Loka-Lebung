<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // cek login + admin
        if (!auth()->check() || auth()->user()->is_admin != 1) {
            return redirect('/')->with('error', 'Akses ditolak!');
        }

        return $next($request);
    }
}
