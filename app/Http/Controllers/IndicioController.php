<?php

namespace App\Http\Controllers;

use App\Audit;
use App\Evento;
use App\Sinergia;
use App\Indicio;
use App\Item;
use App\Pregunta;
use App\U_Informacion;
use App\Investigacion;
use Datatables;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;
use DB;

class IndicioController extends Controller
{
    public function __construct(){}

    public function indicios($idInv, $idEvento, $idSinergia){
        $investigacion = Investigacion::where('id', $idInv)->first();
        $evento = Evento::where('id', $idEvento)->first();
        $sinergia = Sinergia::where('id', $idSinergia)->first();

        #DB::enableQueryLog();
        #dd(DB::getQueryLog());

        return view('investigacion.indicio', compact('investigacion', 'evento', 'sinergia'));
    }

    public function store(Request $request){
        $investigacion = Investigacion::where('id', $request->InvID)->first();
        $evento = Evento::where('id', $request->EveID)->first();
        $sinergia = Sinergia::where('id', $request->SinID)->first();

        //Comprobar si no existe una sinergia del mismo nombre en dicho evento
        $compind = Indicio::where('nombre', $request->nombreIndicio)->first();
        if(!is_null($compind)){
            Session::flash('message','Ya existe el indicio '.$request->nombreIndicio.' en esta sinergía.');
            return Redirect::back()->withInput(Input::all());
        }

        //Crear el Indicio
        Indicio::create([
            'id' => (Indicio::max('id'))+1,
            'nombre' => $request->nombreIndicio,
            'fk_sinergia' => $sinergia->id
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Creación de indicio '.Indicio::max('id').'.'
        ]);

        return view('investigacion.indicio', compact('investigacion', 'evento', 'sinergia'));
    }

    public function getIndicioData(Request $request){
        $id = $request->get('id');
        $eid = $request->get('eveID');
        $sid = $request->get('sinID');
        
        $evento = Evento::where('id', $eid)->first();
        $sinergia = Sinergia::where('id', $sid)->first();
        $indicios = Indicio::where('fk_sinergia', $sid)->get();

        return Datatables::of($indicios)
        ->addColumn('action', function ($indicio) use($evento, $id, $sinergia) {
            return '<a href="/investigacion/'.$id.'/evento/'.$evento->id.'/sinergia/'.$sinergia->id.'/indicio/'.$indicio->id.'/item" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>Items</a>
                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
    }
}
