<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\History;
class CheckRole
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
        if (Auth::check() && Auth::user()->role == 'admin' && Auth::user()->status == '1') {

            History::create([
                'user_id' => auth()->user()->id,
                'content' => auth()->user()->name.' login '
            ]);
            return $next($request);
        }else{
            return redirect('/login');
        }

    }
}
