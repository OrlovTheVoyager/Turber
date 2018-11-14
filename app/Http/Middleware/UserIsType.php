<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserIsType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ... $types)
    {
        if (Auth::check()) {
            foreach($types as $type) {
                if ( Auth::user()->isType($type) ) {
                    return $next($request);
                }
            }
            return redirect()->back();        
        }
    }
}
