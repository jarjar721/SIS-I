<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pri_Rol;
use App\U_Estudio;
use App\EH;
use App\Temporalidad;
use App\Evento;
use App\Pregunta;
use App\Contexto;
use App\Investigacion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Session;
use Datatables;

use DB;

class InvestigacionController extends Controller
{
    public function __construct(){}

    public function d_tema(){

        return view('investigacion.delimitacion_tema');
    }

    public function store(Request $request){

        EH::create([
            'pregunta' => $request->eh
        ]);

        Pregunta::create([
            'pregunta'
        ]);

        U_Estudio::create([
            'unidad_estudio' => $request->unidad_estudio,
            /*if() fk_pregunta*/
        ]);

        Contexto::create([
            'contexto' => $request->contexto,
            /*if() fk_pregunta*/
        ]);

        Temporalidad::create([
            'fecha_inicio' => $request->temp_inicio,
            'fecha_fin' => $request->temp_fin,
            /*if() fk_pregunta*/
        ]);

        Evento::create([
            'nombre' => $request->evento,
            /*'tipo' => ,
            'fk_evento',
            'fk_investigacion',
            'fk_unidad_informacion',
            'fk_pregunta'*/
        ]);

    }
}
