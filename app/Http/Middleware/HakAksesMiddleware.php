<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;
class HakAksesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$ruleName)
    {

        if(auth()->check() && !auth()->user()->punyaRule($ruleName))
        {
          $roles_id="";
          $roles_id = User::where('roles_id',$roles_id)->firstOrFail();
          return redirect ('errors.404');
        }


        return $next($request);
    }
}
