<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Rol;
use App\Pri_Rol;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Datatables;
use Session;

use DB;

class UserController extends Controller
{
    public function __construct(){}
    
    public function lista(){
        $users = User::leftjoin('rol','rol.code','=','usuario.fk_rol')
        ->select(DB::raw('"usuario".*, "rol"."nombre" as rol'))
        ->get();
        return view("usuarios.lista", compact('users'));
    }

    public function anyData(){
        $users = User::leftjoin('rol','rol.code','=','usuario.fk_rol')
        ->select(DB::raw('"usuario".*, "rol"."nombre" as rol'))
        ->get();

        return Datatables::of($users)
        ->addColumn('action', function ($usuario) {
            return '<a href="usuario/edit/'.$usuario->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="usuario/delete/'.$usuario->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
        })
        ->make(true);
    }

    public function edit($Codigo){
        $validated = Usuario::where('Usuario.Codigo', $Codigo)
        ->leftjoin('Rol','Rol.Codigo','=','Usuario.FK_Sele_Concede')
        ->select(\DB::raw("\"Usuario\".*,\"Rol\".\"Codigo\" as cod, \"Rol\".\"Tipo\" as rol"))
        ->first();
        $rols = Rol::select()->orderBy('Codigo', 'asc')->get();

        return view("persona.usuario.edituser", compact('validated', 'rols'));
    }

    public function actualizar(Request $request){
        $us = Usuario::where('Usuario.Nombre', $request->Nombre)->first();
        $usuario = Usuario::find($request->Codigo);
        $rols = Rol::select()->orderBy('Codigo', 'asc')->get();
        $usuario->FK_Sele_Concede = $request->FK_Sele_Concede;
        $usuario->save();

        if(isset($us) && $usuario->Codigo != $us->Codigo && $request->Nombre == $us->Nombre){
            Session::flash('message','El nombre de usuario '.$request->Nombre.' ya existe.');
            return Redirect::back()->withInput(Input::all())->with('rols', $rols);
        }else{
            $us = Usuario::where('Usuario.Correo', $request->Correo)->first();
           
            if(isset($us) && $usuario->Codigo != $us->Codigo && $request->Correo == $us->Correo){
                Session::flash('message','El correo '.$request->Correo.' ya existe.');
                return Redirect::back()->withInput(Input::all())->with('rols', $rols);
            }
        }
        $us = User::where('email', $request->Correo)->first();
        $usuario->Nombre = $request->Nombre;
        $usuario->Correo = $request->Correo;
        $usuario->save();
        if(is_null($us)){
        User::create([
            "name" => $request->Nombre,
            "email" => $request->Correo,
            "rol" => $request->FK_Sele_Concede
        ]);
        }else{
            $us->name = $request->Nombre;
            $us->email = $request->Correo;
            $us->rol = $request->FK_Sele_Concede;
            $us->save();
        }

        $user = Usuario::where('Correo', Auth::user()->email)->first();
        Audi::create([
            'Codigo' => Audi::max('Codigo')+1,
            'Usuario' => Auth::user()->name,
            'Accion' => 'Actualiza Usuario',
            'Fecha_Ingreso' => Carbon::now()->format('Y-m-d'),
            'FK_Observa' => $user->Codigo
        ]);
        Session::flash('message','Usuario modificado correctamente.');
        return Redirect::to('/user/lista');
    }

    public function delete($Codigo){
        $priv = Priv_Rol::where('FK_Accede_Sis',Auth::user()->rol)
        ->where('FK_Opcion',13)
        ->first();

        if(isset($priv)){
            DB::table('usuario')->where('Codigo', $Codigo)->delete();

            $user = Usuario::where('Correo', Auth::user()->email)->first();
            Audi::create([
                'Codigo' => Audi::max('Codigo')+1,
                'Usuario' => Auth::user()->name,
                'Accion' => 'Elimina Usuario',
                'Fecha_Ingreso' => Carbon::now()->format('Y-m-d'),
                'FK_Observa' => $user->Codigo
            ]);
            Session::flash('messagedel','Usuario eliminado correctamente.');
            return redirect('/user/lista');
        }else{
            Session::flash('message','Usted no tiene permisos para realizar esta accion.');
            return Redirect::back()->withInput(Input::all());
        }
    }

    //Auditoria
    public function alista (){
        $audis = Audi::select()
        ->orderBy('Fecha_Ingreso')
        ->paginate(50);
        return view("auditoria.lista", compact('audis'));
    }
}