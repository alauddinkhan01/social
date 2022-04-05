<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Customer 
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
        if (!Auth::check()) 
        {
            return redirect()->route('login');
        }
        //role 1= admin
        if (Auth::user()->role==1) 
        {
            return redirect()->route('dashboard');

        }
        //role 2= vendor
        if (Auth::user()->role==2) 
        {
            return redirect()->route('vendorpanel');
        }
        //role 3= vendor
        if (Auth::user()->role==3) 
        {
            return $next($request);
        }     
    }
}
