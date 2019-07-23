<?php

namespace App\Http\Controllers;

use App\Persona;
use App\Investigacion;
use Illuminate\Http\Request;
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
}
