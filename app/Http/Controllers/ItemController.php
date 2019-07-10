<?php

namespace App\Http\Controllers;

use App\Item;
use App\Indicio;
use App\Investigacion;
use Datatables;
use Illuminate\Http\Request;
use DB;

class ItemController extends Controller
{

    public function getItemData(){
        /*
        if(Auth::user()->fk_rol == 1){
            $investigaciones = Investigacion::get();
        }else{
            $investigaciones = Investigacion::where('fk_usuario', Auth::user()->id)
            ->get();
        }
        
        return Datatables::of($investigaciones)
        ->addColumn('action', function ($investigacion) {
            return '<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>Sinergias</a>
                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
        */
    }
    
}
