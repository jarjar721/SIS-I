<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Persona;

class PersonaRegister
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
        $persona = Persona::where('fk_usuario', Auth::user()->id)->first();

        if (is_null($persona)) {
            return redirect('/usuario/persona');
        }

        return $next($request);
    }
}
