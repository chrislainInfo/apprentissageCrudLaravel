<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthList
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->password == ""){
            return redirect('login')->with('error','Non auth');
        }
        
        if($request->password != "admin"){
            return redirect('login')->with('error','Password false');
        }
        return $next($request);
    }
}
