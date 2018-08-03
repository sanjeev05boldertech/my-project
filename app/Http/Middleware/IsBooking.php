<?php

namespace App\Http\Middleware;

use Closure;

class IsBooking
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if(auth()->user()->isBooking()) {
				return $next($request);
			}
        return redirect('/');
    }
}
