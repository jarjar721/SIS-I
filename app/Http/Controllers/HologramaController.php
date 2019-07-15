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

        $pregunta = Pregunta::where('fk_investigacion', $id)->first();
        $eventos = Evento::leftjoin('evento_ui','evento_ui.fk_evento','=','evento.id')
        ->whereIn('evento_ui.fk_unidad_informacion', function($query) use ($pregunta){
            $query->select(DB::raw('unidad_informacion.id'))
                    ->from('unidad_informacion')
                    ->where('unidad_informacion.fk_pregunta', $pregunta->id);
        })->select(DB::raw('evento.*, evento_ui.clase'))
        ->get();

        return Datatables::of($eventos)
        ->addColumn('parametros_url', function($item) {
            return route('item_details.data', $item->id);
        })->make(true);
    }
    public function getTablaOperacionalizacion2($id){
        $pregunta = Pregunta::where('fk_investigacion', $id)->first();
        $eventos = Evento::leftjoin('evento_ui','evento_ui.fk_evento','=','evento.id')
        ->whereIn('evento_ui.fk_unidad_informacion', function($query) use ($pregunta){
            $query->select(DB::raw('unidad_informacion.id'))
                    ->from('unidad_informacion')
                    ->where('unidad_informacion.fk_pregunta', $pregunta->id);
        })->select(DB::raw('evento.*, evento_ui.clase'))
        ->get();

        return Datatables::of($eventos)
        ->addColumn('parametros_url', function($item) {
            return route('item_details.data', $item->id);
        })->make(true);
    }
    public function getTablaOperacionalizacion3($id){
        $pregunta = Pregunta::where('fk_investigacion', $id)->first();
        $eventos = Evento::leftjoin('evento_ui','evento_ui.fk_evento','=','evento.id')
        ->whereIn('evento_ui.fk_unidad_informacion', function($query) use ($pregunta){
            $query->select(DB::raw('unidad_informacion.id'))
                    ->from('unidad_informacion')
                    ->where('unidad_informacion.fk_pregunta', $pregunta->id);
        })->select(DB::raw('evento.*, evento_ui.clase'))
        ->get();

        return Datatables::of($eventos)
        ->addColumn('parametros_url', function($item) {
            return route('item_details.data', $item->id);
        })->make(true);
    }

}
