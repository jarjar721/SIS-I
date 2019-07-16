<?php

namespace App\Http\Controllers;

use App\Audit;
use App\Evento;
use App\Sinergia;
use App\Indicio;
use App\Pregunta;
use App\U_Informacion;
use App\Investigacion;
use Datatables;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;
use DB;

class EventoController extends Controller
{
    public function __construct(){}
    
    public function eventos($id){
        $investigacion = Investigacion::where('id', $id)->first();

        return view('investigacion.evento', compact('investigacion'));
    }

    public function store(Request $request){
        $investigacion = Investigacion::where('id', $request->InvID)->first();

        //Comprobar si no existe un evento del mismo nombre en dicha investigacion
        $pregunta = Pregunta::where('fk_investigacion', $investigacion->id)->first();
        $eventos = Evento::leftjoin('evento_ui','evento_ui.fk_evento','=','evento.id')
        ->whereIn('evento_ui.fk_unidad_informacion', function($query) use ($pregunta){
            $query->select(DB::raw('unidad_informacion.id'))
                    ->from('unidad_informacion')
                    ->where('unidad_informacion.fk_pregunta', $pregunta->id);
        })->select(DB::raw('evento.*, evento_ui.clase'))
        ->get();

        foreach($eventos as $evento){
            if($evento->nombre = $request->nombreEvento){
                Session::flash('message','Ya existe el evento '.$request->nombreEvento.' en esta investigación.');
                return Redirect::back()->withInput(Input::all());
            }
        }

        //Crear el evento
        $uiGenerica = U_Informacion::where('cita', $investigacion->tema)
        ->where('nivel', 'Genérica')
        ->first();
        //Se crea una Unidad de Informacion generica si no existe
        if(is_null($uiGenerica)){
            $uiGenerica = U_Informacion::create([
                'id' => (U_Informacion::max('id'))+1,
                'cita' => $investigacion->tema,
                'nivel' => 'Genérica',
                'fk_pregunta' => $pregunta->id
            ]);
        }

        Evento::create([
            'id' => (Evento::max('id'))+1,
            'nombre' => $request->nombreEvento,
            'tipo' => $request->tipoEvento
        ]);
        DB::table('evento_ui')->insert([
            'id' => (DB::table('evento_ui')->max('id'))+1,
            'clase' => $request->claseEvento,
            'fk_unidad_informacion' => $uiGenerica->id,
            'fk_evento' => Evento::max('id')
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Creación de evento '.Evento::max('id').'.'
        ]);

        return view('investigacion.evento', compact('investigacion'));
    }

    public function edit($Codigo, $id){
        $investigacion = Investigacion::where('id', $id)->first();
        $evento = Evento::where('id', $Codigo)
        ->leftjoin('evento_ui','evento_ui.fk_evento','=','evento.id')
        ->select(DB::raw('evento.*, evento_ui.clase as clase'))
        ->first();        

        return view('investigacion.evento', compact('investigacion','evento'));
    }

    public function update(Request $request){
        $investigacion = Investigacion::where('id', $request->InvID)->first();

        //Comprobar si no existe un evento del mismo nombre en dicha investigacion
        $pregunta = Pregunta::where('fk_investigacion', $investigacion->id)->first();
        $eventos = Evento::leftjoin('evento_ui','evento_ui.fk_evento','=','evento.id')
        ->whereIn('evento_ui.fk_unidad_informacion', function($query) use ($pregunta){
            $query->select(DB::raw('unidad_informacion.id'))
                    ->from('unidad_informacion')
                    ->where('unidad_informacion.fk_pregunta', $pregunta->id);
        })->select(DB::raw('evento.*, evento_ui.clase'))
        ->get();

        foreach($eventos as $evento){
            if($evento->nombre = $request->nombreEvento){
                Session::flash('message','Ya existe el evento '.$request->nombreEvento.' en esta investigación.');
                return Redirect::back()->withInput(Input::all());
            }
        }

        //Crear el evento
        $uiGenerica = U_Informacion::where('cita', $investigacion->tema)
        ->where('nivel', 'Genérica')
        ->first();
        //Se crea una Unidad de Informacion generica si no existe
        if(is_null($uiGenerica)){
            $uiGenerica = U_Informacion::create([
                'id' => (U_Informacion::max('id'))+1,
                'cita' => $investigacion->tema,
                'nivel' => 'Genérica',
                'fk_pregunta' => $pregunta->id
            ]);
        }

        $evento = Evento::where('id', $id)->first();
        $evento->fill([
            'nombre' => $request->nombreEvento,
            'tipo' => $request->tipoEvento
        ])->update();
        DB::table('evento_ui')->where('fk_evento',$evento->id)
        ->fill([
            'clase' => $request->claseEvento,
            'fk_unidad_informacion' => $uiGenerica->id,
        ])->update();

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Modificación de evento '.Evento::max('id').'.'
        ]);

        return view('investigacion.evento', compact('investigacion'));
    }

    public function delete($Codigo, $id){ 
        $investigacion = Investigacion::where('id', $id)->first();

        Evento::where('id', $Codigo)->update([
            'deleted' => TRUE
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Eliminación de evento '.$Codigo.'.'
        ]);

        Session::flash('messagedel','Evento eliminado correctamente.');
        return view('investigacion.evento', compact('investigacion'));
    }

    public function getEventoData(Request $request){
        $id = $request->get('id');

        $pregunta = Pregunta::where('fk_investigacion', $id)->first();
        $eventos = Evento::leftjoin('evento_ui','evento_ui.fk_evento','=','evento.id')
        ->where('evento.deleted','!=',true)
        ->whereIn('evento_ui.fk_unidad_informacion', function($query) use ($pregunta){
            $query->select(DB::raw('unidad_informacion.id'))
                    ->from('unidad_informacion')
                    ->where('unidad_informacion.deleted','!=',true)
                    ->where('unidad_informacion.fk_pregunta', $pregunta->id);
        })->select(DB::raw('evento.*, evento_ui.clase as clase'))
        ->get();

        return Datatables::of($eventos)
        ->addColumn('action', function ($evento) use($id) {
            return '<a href="/investigacion/'.$id.'/evento/'.$evento->id.'/sinergia" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>Sinergias</a>
                <a href="/evento/modificar/'.$evento->id.'/'.$id.'" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                <a href="/evento/eliminar/'.$evento->id.'/'.$id.'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
    }
}
