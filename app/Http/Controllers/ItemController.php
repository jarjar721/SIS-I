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

        //Crear el Item
        $parametro = DB::table('parametro')->insert([
            'id' => DB::table('parametro')->max('id')+1,
            'nivel' => $request->itemNivel,
            'descripcion' => $request->parametro,
            'categoria' => $request->parametro
        ]);
        Item::create([
            'id' => (Item::max('id'))+1,
            'numero' => Item::where('fk_indicio',$indicio->IndID)->max('numero')+1,
            'descripcion' => $request->item,
            'fk_indicio' => $indicio->id,
            'fk_parametro' => $parametro->id,
            'fk_instrumento' => 1 
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Creación del item '.Item::max('id').'.'
        ]);

        return view('investigacion.item', compact('investigacion','evento','sinergia','indicio'));
    }

    public function delete($Codigo, $id, $idS, $idE, $idI){ 
        $investigacion = Investigacion::where('id', $id)->first();
        $evento = Evento::where('id', $idE)->first();
        $sinergia = Sinergia::where('id', $idS)->first();
        $indicio = Indicio::where('id', $idI)->first();

        Item::where('id', $Codigo)->update([
            'deleted' => TRUE
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Eliminación de item '.$Codigo.'.'
        ]);

        Session::flash('messagedel','Item eliminado correctamente.');
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
        ->where('i.deleted','!=',true)
        ->where('item.deleted','!=',true)
        ->select(DB::raw('item.*, i.nombre as instrumento'))
        ->get();

        return Datatables::of($items)
        ->addColumn('parametros_url', function($item) {
            return route('item_details.data', $item->id);
        })->addColumn('action', function ($item) use($id, $eid, $sid, $iid) {
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                <a href="/item/eliminar/'.$item.'/'.$id.'/'.$eid.'/'.$sid.'/'.$iid.'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
    }

    public function getItemDetailsData($id){
        $item = Item::where('id', $id)->first();
        $parametros = DB::table('parametro')->where('id', $item->fk_parametro)
        ->where('parametro.deleted','!=',true)
        ->get();
        return Datatables::of($parametros)
        ->addColumn('action', function ($parametro) {
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
    }
}
