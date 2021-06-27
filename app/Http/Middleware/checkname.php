<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkname
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
        // dd($request->route()->parameters('name'));

        if($request->route()->parameter('name') == 'gadeer'){
            return $next($request);
        }else{
            return 'I am sorry';
        }

        // return $next($request);
    }
}
