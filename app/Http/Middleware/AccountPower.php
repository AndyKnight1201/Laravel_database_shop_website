<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountPower
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
        // 設多個使用者由中介站判定
        // 一個是最高管理員123登錄可以進後台
        // 其他只能登錄進前台管理留言
        // if(Auth::user()->name == '123'){
        //     return $next($request);
        // }else{
        //     return redirect('/');
        // }


        // 設多個使用者由中介站判定
        // 一個是權限1可以進後台
        // 其他只能登錄進前台管理留言
        if(Auth::user()->power == '1'){
            return $next($request);
        }else{
            return redirect('/');
        }

    }
}
