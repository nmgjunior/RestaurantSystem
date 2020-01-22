<?php

namespace App\Http\Middleware;

use Closure;

class VerifyLevelTwo
{
    /**
     *Verifica se o funcionário tem acesso aos produtos
     */
    public function handle($request, Closure $next)
    {
        $request=Request();
        $user = $request->session()->get('user');
        $levels=explode(',',$user['user_role']);
        if(in_array('2',$levels))
        {
            return $next($request);
        }
        return redirect('/');
    }
}
