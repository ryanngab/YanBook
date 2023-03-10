<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
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

        if (!auth()->check() || !auth()->user()->role_id) {
            abort(403);
        }

        return $next($request);
    }

    // isUser
        //   public function handle(Request $request, Closure $next)
        //  {
        //      if(Auth::guest())
        //      {
        //          return redirect()->route('auth.login');
        //      }
        //      return $next($request);
        //  }
    // endUser

    // isAdmin
        // public function handle(Request $request, Closure $next)
        // {
        //     if(Auth::user() && Auth::user()->role_id == 1){
        //     return $next($request);
        //     }
        //     return back()->with('your not admin');
        // }
    // endAdmin

}
