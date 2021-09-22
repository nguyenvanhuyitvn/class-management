<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckLogin
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
        if(Auth::check()) { // TRUE
            return $next($request); 
            // nếu người dùng đã đăng nhập sẽ được tiếp tục hành vi của mình
            // VD: tiếp tục vào trang home, admin,...
        }else{ // FALSE
            return redirect(route('login'));
            // nếu chưa đăng nhập sẽ bị điều hướng trở về trang login
        }
    }
}
