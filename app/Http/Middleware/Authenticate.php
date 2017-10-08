<?php

namespace App\Http\Middleware;

use Closure,redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->guest()){
            Session::put('oldUrl',$request->url());
            if($request->ajax() || $request->wantsJson()){
                return response('unauthorized.', 401);
            }else{
                Session::put('oldUrl',$request->url());
                return redirect()->route('user.SignIn');
            }
        }
        return $next($request);
    }
}
