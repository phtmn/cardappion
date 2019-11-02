<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Auth;

class AuthenticateSuper
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
    if (!Auth::guard('super')->check()) :
      return redirect()->route('super.session.login');
    endif;

    // Define guard to use
    Auth::shouldUse($guard);

    return $next($request);
  }
}
