<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);

        $newRol=explode('|',$roles);

        $rolname= strtolower($request->user()->role->label);

        if (!in_array($rolname,$newRol))
            return abort(403,__('Unatorized'));
        return $next($request);

        

    }





}
