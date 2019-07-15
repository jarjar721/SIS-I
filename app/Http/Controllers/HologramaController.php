<?php

namespace App\Http\Controllers;

use App\Pregunta;
use App\Evento;
use App\Contexto;
use App\Investigacion;
use App\ObjetivoEspecifico;
use App\ObjetivoGeneral;
use Illuminate\Http\Request;
use Datatables;
use DB;

class HologramaController extends Controller
{

    public function holograma($id){
        $investigacion = Investigacion::where('id', $id)
        ->first();
        $enunciado_holopraxico = Pregunta::where('fk_investigacion', $id)
        ->first();
        $objetivo_general = ObjetivoGeneral::where('fk_pregunta', $id)
        ->first();

        return view('investigacion.holograma', compact('investigacion', 'enunciado_holopraxico', 'objetivo_general'));
    }

    public function getPreguntaObjetivo2(Request $request){
        $id = $request->get('id');

        $preguntasObjetivos2 = ObjetivoEspecifico::leftjoin('objetivo_general as og', 'og.id','=', 'objetivo_especifico.fk_objetivo_general')
        ->leftjoin('pregunta', 'pregunta.id','=', 'og.fk_pregunta')
        ->leftjoin('investigacion', 'investigacion.id','=', 'pregunta.fk_investigacion')
        ->where('investigacion.id', $id)
        ->select(DB::raw('objetivo_especifico.*, og.objetivo as pregunta_secundaria'))
        ->get();

        return Datatables::of($preguntasObjetivos2)
        ->addColumn('action', function ($preguntaObjetivo2) {
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>';
        })
        ->make(true);
    }

    public function getTablaOperacionalizacion(Request $request){
        $id = $request->get('id');

        $tablaOperacionalizacion = DB::select(DB::raw('SELECT e.nombre as evento, s.nombre as sinergia
        FROM evento e, evento_ui eui, unidad_informacion ui, sinergia s
        WHERE ui.fk_pregunta = '.$id.' AND ui.id = eui.fk_unidad_informacion
        AND eui.fk_evento = e.id AND eui.id = s.fk_evento_ui;'));

        return Datatables::of($tablaOperacionalizacion)
        ->make(true);
    }

}
