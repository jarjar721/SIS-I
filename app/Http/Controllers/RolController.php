<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Audit;
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
        $priv = Pri_Rol::where('codigo_rol', Auth::user()->fk_rol)
        ->where('codigo_pri', 1)
        ->first();

        if(isset($priv)){

            $request->validate([
                'nombre' => 'required'
            ]);

            Rol::create([
                'code' =>  Rol::max('code')+1,
                'nombre' => $request->nombre
            ]);

            //Auditoria
            Audit::create([
                'id' => Audit::max('id')+1,
                'fk_usuario' => Auth::user()->id,
                'descripcion' => 'Creación de rol '.Rol::max('code').'.'
            ]);

            Session::flash('message','Rol creado correctamente.');
            return Redirect::to('rol');

        }else{
            Session::flash('message','Usted no tiene permisos para realizar esta accion.');
            return Redirect::back()->withInput(Input::all());
        }
    }
    
    public function lista(){
        return view("usuarios.rol.lista");
    }

    public function anyData(){
        $roles = Rol::where('deleted','!=',true)->get();

        return Datatables::of($roles)
        ->addColumn('action', function ($rol) {
            return '<a href="rol/modificar/'.$rol->code.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="rol/eliminar/'.$rol->code.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
        })
        ->make(true);
    }

    public function edit($Codigo){

        $userol = Rol::where('code', Auth::user()->fk_rol)->first();
        $privs = DB::table('privilegio')->orderBy('code')->get();
        $pr = Pri_Rol::where('codigo_rol', $Codigo)->get();
        $validated = Rol::where('code', $Codigo)->first();

        return view("usuarios.rol.editrol", compact('validated','privs','pr','userol'));

    }

    public function actualizar(Request $request){
        $priv = Pri_Rol::where('codigo_rol',Auth::user()->fk_rol)
        ->where('codigo_pri', 1)
        ->first();

        if(isset($priv)){

            $rol = Rol::find($request->Codigo);
            $privs = DB::table('privilegio')->orderBy('code')->get();
            Pri_Rol::where('codigo_rol', $request->Codigo)->delete();
        
            $rol->nombre = $request->nombre;
            $rol->save();

            foreach($privs as $priv){
                if($request->{$priv->nombre}){
                    Pri_Rol::create([
                        'codigo_pri' => $priv->Codigo,
                        'codigo_rol' => $rol->Codigo
                    ]);
                }
            }

            //Auditoria
            Audit::create([
                'id' => Audit::max('id')+1,
                'fk_usuario' => Auth::user()->id,
                'descripcion' => 'Modificación de rol '.$rol->code.'.'
            ]);

            Session::flash('message','Rol modificado correctamente.');
            return Redirect::to('rol');
        }else{
            Session::flash('message','Usted no tiene permisos para realizar esta accion.');
            return Redirect::back()->withInput(Input::all());
        }
    }

    public function delete($Codigo){
        $priv = Pri_Rol::where('codigo_rol',Auth::user()->fk_rol)
        ->where('codigo_pri', 1)
        ->first();

        if(isset($priv)){

            Pri_Rol::where('codigo_rol', $Codigo)->delete();
            Rol::find($Codigo)->delete();

            //Auditoria
            Audit::create([
                'id' => Audit::max('id')+1,
                'fk_usuario' => Auth::user()->id,
                'descripcion' => 'Eliminación de rol '.$Codigo.'.'
            ]);

            Session::flash('messagedel','Rol eliminado correctamente.');
            return redirect('rol');
        }else{
            Session::flash('message','Usted no tiene permisos para realizar esta accion.');
            return Redirect::back();
        }
    }
}
