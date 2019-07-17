<?php

namespace App\Http\Controllers;

use App\Investigacion;
use App\CalidadPregunta;
use App\CalidadItem;
use App\CategoriaCalidad;
use Illuminate\Http\Request;
use DB;

class MAITIController extends Controller
{
    public function getMAITI($id)
    {
        $investigacion = Investigacion::where('id', $id)->first();
        $categoria_calidad = CategoriaCalidad::get();
        $pregunta_calidad = CalidadPregunta::get();
        $calidad_item = CalidadItem::where('fk_investigacion', $id)->get();
        $cuenta = DB::table('calidad_item')
        ->where([
            ['fk_investigacion', $id],
            ['respuesta', true]
            ])
        ->count('respuesta');

        $porcentaje_calidad = number_format(($cuenta*100)/16, 2, '.', '');

        return view('investigacion.MAITI', compact('investigacion', 'categoria_calidad', 'pregunta_calidad', 'calidad_item', 'porcentaje_calidad'));
    }
}
