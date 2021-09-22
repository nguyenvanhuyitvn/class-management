<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckLogout
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
        // if(Auth::check()) {
        //     return redirect()->route('home');
        // }else {
        //     return $next($request); // chuyển tiếp về trang login
        // }

        if(Auth::guest()) {
            return $next($request);
        }else{
            return redirect()->route('home');
        }
    }
}
