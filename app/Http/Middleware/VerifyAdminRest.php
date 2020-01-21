<?php

namespace App\Http\Middleware;

use Closure;
 
use App\Employee;

class VerifyAdminRest
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
        $request=Request();
        if ($request->session()->has('user')){

            $user=$request->session()->get('user');
                 if ($user['user_role']==1)
                {
                    return $next($request);
                } else
                {
                    return redirect ('/');
                }

        } else{
            return redirect('/login');
        }
    }
}
