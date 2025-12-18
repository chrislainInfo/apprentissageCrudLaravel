<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AuthList
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session()->has('auth')) {
            return $next($request);
        }
        else {

            if($request->password == ""){
                return redirect('login')->with('error','Non auth');
            }
            
            if($request->password != "admin"){
                return redirect('login')->with('error','Password false');
            }

            Session(['auth' => 'ok']);
            return $next($request);
        }

        //creation de la session

        

        
        
    }
}
