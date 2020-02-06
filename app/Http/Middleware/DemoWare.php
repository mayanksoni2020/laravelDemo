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
        // if($request->input('age')<20){
        //     return redirect('/');
        // }
        // else{
        //     echo "Valid User";
        // }

        $ip = $request->ip();
        //$ip = '192.32.0.2';
        if($ip == '127.0.0.1'){
            return redirect('/');
        }
        else{
            return redirect('/nav');
        }
        return $next($request);
    }
}
