<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Audit;
use Session;
use Datatables;
use App\Investigacion;
use App\U_Informacion;
use App\Pregunta;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Justificacion;

class JustificacionController extends Controller
{
    public function inicio($id){ 
        $investigacion = Investigacion::where('id', $id)->first();

        return view('investigacion.justificacion', compact('investigacion'));
    }

    public function store(Request $request){ 
        $investigacion = Investigacion::where('id', $request->InvID)->first();

        $uiGenerica = U_Informacion::where('cita', $investigacion->tema)
        ->where('nivel', 'Genérica')
        ->first();
        //Se crea una Unidad de Informacion generica si no existe
        if(is_null($uiGenerica)){
            $uiGenerica = U_Informacion::create([
                'id' => (U_Informacion::max('id'))+1,
                'cita' => $investigacion->$tema,
                'nivel' => 'Genérica',
                'fk_pregunta' => $pregunta->id
            ]);
        }

        Justificacion::create([
            'id' => Justificacion::max('id')+1,
            'argumento' => $request->argumento,
            'tipo' => $request->tipo,
            'acerca_de' => $request->acerca_de
        ]);
        DB::table('justificacion_ui')->insert([
            'id' => DB::table('justificacion_ui')->max('id')+1,
            'fk_unidad_informacion' => $uiGenerica->id,
            'fk_justificacion' => Justificacion::max('id')
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Creación de justificación '.Justificacion::max('id').'.'
        ]);

        return view('investigacion.justificacion', compact('investigacion'));
    }

    public function delete($Codigo, $id){ 
        $investigacion = Investigacion::where('id', $id)->first();

        Justificacion::where('id', $Codigo)->update([
            'deleted' => TRUE
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Eliminación de justificación '.$Codigo.'.'
        ]);

        Session::flash('messagedel','Justificacion eliminada correctamente.');
        return view('investigacion.justificacion', compact('investigacion'));
    }

    public function getJustificacionData(Request $request){
        $id = $request->get('id');
        
        $pregunta = Pregunta::where('fk_investigacion', $id)->first();
        $justificaciones = Justificacion::leftjoin('justificacion_ui as j_ui','j_ui.fk_justificacion','=','justificacion.id')
        ->whereIn('j_ui.fk_unidad_informacion', function($query) use ($pregunta){
            $query->select(DB::raw('unidad_informacion.id'))
                    ->from('unidad_informacion')
                    ->where('unidad_informacion.deleted','!=',true)
                    ->where('unidad_informacion.fk_pregunta', $pregunta->id);
        })->select(DB::raw('justificacion.*'))
        ->where('j_ui.deleted','!=',true)
        ->where('justificacion.deleted','!=',true)
        ->get();

        return Datatables::of($justificaciones)
        ->addColumn('action', function ($justificacion) use($id) {
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
            <a href="/justificacion/eliminar/'.$justificacion.'/'.$id.'" class="btn btn-info btn-xs"><i class="fa fa-times"></i>Eliminar</a>';
        })
        ->make(true);
    }
    
}
