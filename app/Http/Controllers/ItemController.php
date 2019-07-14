<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Sinergia;
use App\Indicio;
use App\Item;
use App\Pregunta;
use App\U_Informacion;
use App\Investigacion;
use Datatables;
use Session;
use Illuminate\Http\Request;
use DB;

class ItemController extends Controller
{
    public function items($idInv, $idEvento, $idSinergia, $idIndicio){
        $investigacion = Investigacion::where('id', $idInv)->first();
        $evento = Evento::where('id', $idEvento)->first();
        $sinergia = Sinergia::where('id', $idSinergia)->first();
        $indicio = Indicio::where('id', $idIndicio)->first();

        #DB::enableQueryLog();
        #dd(DB::getQueryLog());

        return view('investigacion.item', compact('investigacion','evento','sinergia','indicio'));
    }

    public function store(Request $request){
        $investigacion = Investigacion::where('id', $request->InvID)->first();
        $evento = Evento::where('id', $request->EveID)->first();
        $sinergia = Sinergia::where('id', $request->SinID)->first();
        $indicio = Indicio::where('id', $request->IndID)->first();

        //Comprobar si no existe una sinergia del mismo nombre en dicho evento
        /*$compitem = Indicio::where('descripcion', $request->item)->first();
        if(!is_null($compitem) && $compitem->instrumento == $request->item){
            Session::flash('message','Ya existe el item '.$request->item.' en este indicio.');
            return Redirect::back()->withInput(Input::all());
        }*/

        //Crear el Indicio
        Item::create([
            'id' => (Item::max('id'))+1,
            'numero' => Item::where('fk_indicio',$indicio->IndID)->max('numero')+1,
            'descripcion' => $request->item,
            'descripcion' => $request->item,
            'fk_sinergia' => $sinergia->id
        ]);

        return view('investigacion.item', compact('investigacion','evento','sinergia','indicio'));
    }

    public function getItemData(Request $request){
        $id = $request->get('id');
        $eid = $request->get('eveID');
        $sid = $request->get('sinID');
        $iid = $request->get('indID');
        
        $evento = Evento::where('id', $eid)->first();
        $sinergia = Sinergia::where('id', $sid)->first();
        $indicio = Indicio::where('id', $iid)->first();
        $items = Item::leftjoin('instrumento as i','i.id','=','item.fk_instrumento')
        ->select(DB::raw('item.*, i.nombre as instrumento'))
        ->get();

        return Datatables::of($items)
        ->addColumn('parametros_url', function($item) {
            return route('item_details.data', $item->id);
        })->addColumn('action', function ($item) {
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        //->rawColumns(['status', 'action'])
        ->make(true);
    }

    public function getItemDetailsData($id){
        $item = Item::where('id', $id)->first();
        $parametros = DB::table('parametro')->where('id', $item->fk_parametro)->get();
        return Datatables::of($parametros)
        ->addColumn('action', function ($parametro) {
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
    }
}
