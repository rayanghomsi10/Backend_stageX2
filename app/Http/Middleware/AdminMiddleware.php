<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (Auth::check()){
            if (Auth::user()->role == 'admin'){
                return $next($request);
            }
            else{
                return redirect('/private')->with('statut', 'acces refuser car vous n etes pas admin');
            }
        }
        else{
            return redirect('/private')->with('statut', 'Please Login first');
        }

        /*if ($request->user()->role == $role) return $next($request);

        abort(403);*/
    }
}
