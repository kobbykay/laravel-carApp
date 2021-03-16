<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUser
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
        if(!auth()->user()){

            return redirect('/');
        }

        if(auth()->user()->is_admin == 0){

            return $next($request);

        }

        //return redirect('admin/home')->with("You don't access.");
        return redirect()->back()->with('Error')->with('error','You dont have User permission');
    }
}
