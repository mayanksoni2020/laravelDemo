<?php

namespace App\Http\Middleware;

use Closure;

class DemoWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //echo "Hello! This is DemoWare";
        if($request->input('age')<20){
            return redirect('/');
        }
        else{
            echo "Valid User";
        }
        return $next($request);
    }
}
