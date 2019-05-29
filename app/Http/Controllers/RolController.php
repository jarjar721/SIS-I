<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Rol;
use App\Pri_Rol;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Session;
use Datatables;

use DB;

class RolController extends Controller
{
    public function __construct(){}

    public function store(Request $request){
        $priv = Pri_Rol::where('fk_rol', Auth::user()->rol)
        //->where('fk_privilegio',7)
        ->first();

        if(isset($priv)){

            $request->validate([
                'Tipo' => 'required'
            ]);

            Rol::create([
                'Codigo' =>  Rol::max('Codigo')+1,
                'Tipo' => $request->Tipo
            ]);

            $user = Usuario::where('Correo', Auth::user()->email)->first();
            Audi::create([
                'Codigo' => Audi::max('Codigo')+1,
                'Usuario' => Auth::user()->name,
                'Accion' => 'Crea Rol',
                'Fecha_Ingreso' => Carbon::now()->format('Y-m-d'),
                'FK_Observa' => $user->Codigo
            ]);
            Session::flash('message','Rol creado correctamente.');
            return Redirect::to('rol');

        }else{
            Session::flash('message','Usted no tiene permisos para realizar esta accion.');
            return Redirect::back()->withInput(Input::all());
        }
    }
    
    public function lista(){
        return view("rol.lista");
    }

    public function anyData(){
        return Datatables::of(Rol::query())
        ->addColumn('action', function ($rol) {
            return '<a href="rol/edit/'.$rol->code.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="rol/delete/'.$rol->code.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
        })
        ->make(true);
    }

    public function edit($Codigo){

            $validated = Rol::where('Codigo', $Codigo)->first();
            $privs = DB::table('Privilegio')->orderBy('Codigo')->get();
            $pr = Priv_Rol::where('FK_Accede_Sis', $Codigo)->get();
            return view("rol.editrol", compact('validated','privs','pr'));

    }

    public function actualizar(Request $request){
        $priv = Priv_Rol::where('FK_Accede_Sis',Auth::user()->rol)
        ->where('FK_Opcion',7)
        ->first();

        if(isset($priv)){

            $rol = Rol::find($request->Codigo);
            $privs = DB::table('Privilegio')->orderBy('Codigo')->get();
            Priv_Rol::where('FK_Accede_Sis', $request->Codigo)->delete();
        
            $rol->Tipo = $request->Tipo;
            $rol->save();

            foreach($privs as $priv){
                if($request->{$priv->tipo}){
                    Priv_Rol::create([
                        'Codigo' => Priv_Rol::max('Codigo')+1,
                        'FK_Opcion' => $priv->Codigo,
                        'FK_Accede_Sis' => $rol->Codigo
                    ]);
                }
            }

            $user = Usuario::where('Correo', Auth::user()->email)->first();
            Audi::create([
                'Codigo' => Audi::max('Codigo')+1,
                'Usuario' => Auth::user()->name,
                'Accion' => 'Modifica Rol',
                'Fecha_Ingreso' => Carbon::now()->format('Y-m-d'),
                'FK_Observa' => $user->Codigo
            ]);
            Session::flash('message','Rol modificado correctamente.');
            return Redirect::to('/rol');
        }else{
            Session::flash('message','Usted no tiene permisos para realizar esta accion.');
            return Redirect::back()->withInput(Input::all());
        }
    }

    public function delete($Codigo){
        $priv = Priv_Rol::where('FK_Accede_Sis',Auth::user()->rol)
        ->where('FK_Opcion',7)
        ->first();

        if(isset($priv)){

            Priv_Rol::where('FK_Accede_Sis', $Codigo)->delete();
            Rol::find($Codigo)->delete();

            $user = Usuario::where('Correo', Auth::user()->email)->first();
            Audi::create([
                'Codigo' => Audi::max('Codigo')+1,
                'Usuario' => Auth::user()->name,
                'Accion' => 'Elimina Rol',
                'Fecha_Ingreso' => Carbon::now()->format('Y-m-d'),
                'FK_Observa' => $user->Codigo
            ]);
            Session::flash('messagedel','Rol eliminado correctamente.');
            return redirect('/rol');
        }else{
            Session::flash('message','Usted no tiene permisos para realizar esta accion.');
            return Redirect::back()->withInput(Input::all());
        }
    }
}
