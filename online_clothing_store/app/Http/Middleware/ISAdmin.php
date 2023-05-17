<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ISAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function handle(Request $request, Closure $next): Response
    {
        $logedUser=Auth::user();
        if($logedUser->role=='admin'){
            return $next($request);
        }else{
            abort(403);
            //prevent caching
            $response = $next($request);
    
            $response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
            
            $response->headers->set('Pragma','no-cache');
            
            $response->headers->set('Expires','Sat, 01 Jan 1990 00:00:00 GMT');
            
            return $response;
            
        }
        
    }
}
