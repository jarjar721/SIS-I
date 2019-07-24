<?php

namespace App\Http\Controllers;

use App\Persona;
use App\Investigacion;
use App\Institucion;

use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function getPerfil(){
        $persona = Persona::where('fk_usuario', Auth::user()->id)
        ->first();
        $investigacion = Investigacion::where('fk_usuario', Auth::user()->id)
        ->get();

        return view('usuarios.persona.perfil', compact('persona', 'investigacion'));
    }

    public function loadConfiguraciones(){
        $persona = Persona::where('fk_usuario', Auth::user()->id)
        ->first();
        $institucion = Institucion::join('persona', 'persona.fk_institucion', 'id')
        ->where('persona.fk_usuario', Auth::user()->id)
        ->select('institucion.nombre')
        ->first();

        return view('usuarios.persona.editar_perfil', compact('persona', 'institucion'));
    }

}
