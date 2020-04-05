<?php

namespace App\Http\Middleware;

use Closure;

class test
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
        $pa = $request->$_POST['apwd'];
        if($pa != '123456')
        {
            return redirect('/adminpage');
        }
        return $next($request);
    }
}
