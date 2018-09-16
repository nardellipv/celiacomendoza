<?php

namespace celiacomendoza\Http\Middleware;

use celiacomendoza\User;
use Closure;

class UserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userType = User::where('id', Auth()->user()->id)
            ->first();

        if ($userType->type === 'OWNER') {

            return redirect('/cliente-perfil');
        } else {

            return $next($request);
        }
    }
}
