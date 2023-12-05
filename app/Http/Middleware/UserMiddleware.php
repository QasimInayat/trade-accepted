<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->is_ban){
            $banned = Auth::user()->is_ban == '1';
            Auth::logout();

            if($banned == 1){
                $message = 'Your account has banned. Please contact admin.';
            }
            return redirect()->route('login')
                    ->with('error',$message);
        }
        return $next($request);
    }
}
