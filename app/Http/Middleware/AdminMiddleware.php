<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\Admin;

class AdminMiddleware 
{

    protected $exceptRoutes = [
        'admin'
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /*** Handle an incoming request.** @param  \Illuminate\Http\Request  $request* @param  \Closure  $next* @return mixed*/
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user && $user->role === 'admin') {
            return $next($request);
        }
        
        return redirect( route('admin.login'));
    }
    
}
