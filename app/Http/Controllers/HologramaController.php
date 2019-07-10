<?php

namespace App\Http\Controllers;

use App\Pregunta;
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

    public function getPreguntaObjetivo2($id){
        $preguntaObjetivo2 = ObjetivoEspecifico::
        join('objetivo_general as og', 'fk_objetivo_general','=', 'og.id')
        ->leftjoin('pregunta', 'og.fk_pregunta','=', 'pregunta.id')
        ->leftjoin('investigacion', 'pregunta.fk_investigacion','=', 'investigacion.id')
        ->where('investigacion.id', $id)
        ->get();

        return Datatables::of($preguntaObjetivo2)
        ->addColumn('action', function ($preguntaObjetivo2) {
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>';
        })
        ->make(true);
    }

    public function getTablaOperacionalizacion($id){
        $tablaOperacionalizacion = collect(DB::select('SELECT e.nombre as evento, s.nombre as sinergia' +
        'FROM evento e, evento_ui eui, unidad_informacion ui, sinergia s' +
        'WHERE ui.fk_pregunta = ' + $id + ' AND ui.id = eui.fk_unidad_informacion' +
            'AND eui.fk_evento = e.id AND eui.id = s.fk_evento_ui;'));

        return Datatables::of($tablaOperacionalizacion)
        ->make(true);
    }

}
