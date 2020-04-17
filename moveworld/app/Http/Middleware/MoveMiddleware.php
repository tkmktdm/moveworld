<?php

namespace App\Http\Middleware;

use Closure;

class MoveMiddleware
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
        $data=[
            ['name'=>'first','user'=>'aieee'],
            ['name'=>'second','user'=>'ieee'],
            ['name'=>'thard','user'=>'ueee'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
