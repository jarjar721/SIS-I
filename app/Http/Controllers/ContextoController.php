<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use Datatables;
use App\Investigacion;
use App\Pregunta;
use App\Audit;
use Illuminate\Support\Facades\Auth;
use App\Contexto;

class ContextoController extends Controller
{
    public function inicio($id){ 
        $investigacion = Investigacion::where('id', $id)->first();

        return view('investigacion.contexto', compact('investigacion'));
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

        Contexto::create([
            'id' => Contexto::max('id')+1,
            'contexto' => $request->contexto
        ]);
        DB::table('contexto_ui')->insert([
            'id' => DB::table('contexto_ui')->max('id')+1,
            'fk_unidad_informacion' => $uiGenerica->id,
            'fk_contexto' => Contexto::max('id')
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Creación de contexto '.Contexto::max('id').'.'
        ]);

        return view('investigacion.contexto', compact('investigacion'));
    }

    public function delete($Codigo, $id){ 
        $investigacion = Investigacion::where('id', $id)->first();

        Contexto::where('id', $Codigo)->update([
            'deleted' => TRUE
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Eliminación de contexto '.$Codigo.'.'
        ]);

        Session::flash('messagedel','Contexto eliminado correctamente.');
        return view('investigacion.contexto', compact('investigacion'));
    }

    public function getContextoData(Request $request){
        $id = $request->get('id');
        
        $pregunta = Pregunta::where('fk_investigacion', $id)->first();
        $contextos = Contexto::leftjoin('contexto_ui as c_ui','c_ui.fk_contexto','=','contexto.id')
        ->where('contexto.deleted','!=',true)
        ->whereIn('c_ui.fk_unidad_informacion', function($query) use ($pregunta){
            $query->select(DB::raw('unidad_informacion.id'))
                    ->from('unidad_informacion')
                    ->where('unidad_informacion.deleted','!=',true)
                    ->where('unidad_informacion.fk_pregunta', $pregunta->id);
        })->select(DB::raw('contexto.*'))
        ->get();
        
        #DB::enableQueryLog();
        #dd(DB::getQueryLog());

        return Datatables::of($contextos)
        ->addColumn('action', function ($contexto) use ($id){
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
            <a href="/contexto/eliminar/'.$contexto.'/'.$id.'" class="btn btn-danger btn-xs"><i class="fa fa-times"></i>Eliminar</a>';
        })
        ->make(true);
    }
    
}
