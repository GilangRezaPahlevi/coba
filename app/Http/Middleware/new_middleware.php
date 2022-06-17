<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

//untuk membuat middleware gunakan php artisan make:middleware nama_middleware
//jangan lupa untuk mendaftarkan middleware di file kernel supaya bisa digunakan
class new_middleware
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
        if (!auth()->user() || auth()->user()->name !== 'MaiZera') {
            abort(403, "Jangan Coba Coba Masuk Ke Url Ini");
        }
        return $next($request);
    }
}
