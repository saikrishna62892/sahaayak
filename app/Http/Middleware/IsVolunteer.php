<?php

namespace App\Http\Middleware;

use Closure;

class IsVolunteer
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
        if(auth()->user()->is_Volunteer == 1 && auth()->user()->volunteer->step2_done == 1 && auth()->user()->volunteer->is_Approved == 1){
            return $next($request);
        }
   
        return redirect('home')->with('error',"You don't have access.");
    }
}
