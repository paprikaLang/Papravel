<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if ($this->auth->guest()){
          if ($request->ajax()){
              return response('Unauthorized',401);
          }else{
              return redirect()->guest('user/login');
          }
      }

        return $next($request);
    }
}
