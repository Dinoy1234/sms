<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
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
        if (auth()->user()->role == 'admin' || (auth()->user()->role=='student' && auth()->user()->status='Approved') || (auth()->user()->role=='teacher')) {

            return $next($request);
        } else {

            return redirect()->route('admin.dashboard')->with('message', 'login Successfully');
        }
    }
}
