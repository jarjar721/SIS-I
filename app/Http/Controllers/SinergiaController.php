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
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class SinergiaController extends Controller
{
    public function __construct(){}

    public function sinergias($idInv, $idEvento){
        $investigacion = Investigacion::where('id', $idInv)->first();
        $evento = Evento::where('id', $idEvento)->first();

        #DB::enableQueryLog();
        #dd(DB::getQueryLog());

        return view('investigacion.sinergia', compact('investigacion', 'evento'));
    }

    public function store(Request $request){
        $investigacion = Investigacion::where('id', $request->InvID)->first();
        $evento = Evento::where('id', $request->EveID)->first();

        //Comprobar si no existe una sinergia del mismo nombre en dicho evento
        $compeven = Sinergia::where('nombre', $request->nombreSinergia)->first();
        if(!is_null($compeven)){
            Session::flash('message','Ya existe la sinergía '.$request->nombreSinergia.' en este evento.');
            return Redirect::back()->withInput(Input::all());
        }

        //Crear la sinergia
        /* CONSEGUIR MANERA DE SACAR EL EVENTO_UI ESPECIFICO */
        $e_ui = DB::table('evento_ui')->where('fk_evento', $evento->id)->first();

        Sinergia::create([
            'id' => (Sinergia::max('id'))+1,
            'nombre' => $request->nombreSinergia,
            'fk_evento_ui' => $e_ui->id
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Creación de sinergia '.Sinergia::max('id').'.'
        ]);

        return view('investigacion.sinergia', compact('investigacion', 'evento'));
    }

    public function delete($Codigo, $id, $idE){ 
        $investigacion = Investigacion::where('id', $id)->first();
        $evento = Evento::where('id', $idE)->first();

        Sinergia::where('id', $Codigo)->update([
            'deleted' => TRUE
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Eliminación de sinergia '.$Codigo.'.'
        ]);

        Session::flash('messagedel','Sinergia eliminada correctamente.');
        return view('investigacion.sinergia', compact('investigacion', 'evento'));
    }

    public function getSinergiaData(Request $request){
        $id = $request->get('id');
        $eid = $request->get('eveID');
        
        $evento = Evento::where('id', $eid)->first();
        $sinergias = Sinergia::whereIn('fk_evento_ui', function($query) use ($evento){
            $query->select(DB::raw('evento_ui.id'))
                    ->from('evento_ui')
                    ->where('evento_ui.deleted','!=',true)
                    ->where('evento_ui.fk_evento', $evento->id);
        })->where('deleted != true')
        ->select(DB::raw('*'))
        ->get();

        return Datatables::of($sinergias)
        ->addColumn('action', function ($sinergia) use ($evento, $id) {
            return '<a href="/investigacion/'.$id.'/evento/'.$evento->id.'/sinergia/'.$sinergia->id.'/indicio" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>Indicios</a>
                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                <a href="/sinergia/eliminar/'.$sinergia->id.'/'.$id.'/'.$evento->id.'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
    }
}
