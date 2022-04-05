<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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
        
        if (Auth::user()->role==1) 
        {
            return $next($request);
        }
        //role 2= vendor
        if (Auth::user()->role==2) 
        {
            return redirect()->route('vendorpanel');
        }
        //role 3= vendor
        if (Auth::user()->role==3) 
        {
            return redirect()->route('products');
        }
    }
}
