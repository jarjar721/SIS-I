<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Sinergia;
use App\Indicio;
use App\Pregunta;
use App\U_Informacion;
use App\Investigacion;
use Datatables;
use Session;
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
        $compeven = Evento::where('nombre', $request->nombreSinergia)->first();
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

        return view('investigacion.sinergia', compact('investigacion', 'evento'));
    }

    public function getSinergiaData(){
        $id = $request->get('eveID');

        $evento = Evento::where('id', $id)->first();
        $sinergias = Sinergia::whereIn('sinergia.fk_evento_ui', function($query) use ($evento){
            $query->select(DB::raw('evento_ui.id'))
                    ->from('evento_ui')
                    ->where('evento_ui.fk_evento', $evento->id);
        })->select(DB::raw('sinergia.*'))
        ->get();

        return Datatables::of($sinergias)
        ->addColumn('action', function ($sinergia) {
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
    }
}
