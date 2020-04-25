<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

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
        $now = Carbon::now()->format('Y年m月d日だよ！');;
        $data=[
            ['name'=>'本日の日付: ','user'=>$now],
       ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
