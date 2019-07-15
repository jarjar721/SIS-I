<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Rol;
use App\Pri_Rol;
use App\Persona;
use App\Audit;
use App\Institucion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Datatables;
use Session;
use Carbon\Carbon;

use DB;

class UserController extends Controller
{
    public function __construct(){}
    
    public function lista(){
        $users = User::leftjoin('rol','rol.id','=','usuario.fk_rol')
        ->where('u.deleted','!=',true)
        ->select(DB::raw('"usuario".*, "rol"."nombre" as rol'))
        ->get();
        return view("usuarios.lista", compact('users'));
    }

    public function instituciones(){
        return view("usuarios.instituciones");
    }

    public function audit(){
        return view("audit");
    }

    public function audit_load(){
        $audits = Audit::leftjoin('usuario as u','u.id','=','audit.fk_usuario')
        ->leftjoin('persona as p','p.fk_usuario','=','u.id')
        ->select(DB::raw("audit.*, CONCAT(u.username,': ',p.nombre,' ',p.apellido) AS user"))
        ->get();

        foreach($audits as $a){
            $a->created_at = date('d-m-Y H:i:s', $a->created_at);
        }

        return Datatables::of($audits)
        ->make(true);
    }

    public function inst_load(){
        $instituciones = Persona::join('usuario as u','u.id','=','persona.fk_usuario')
        ->rightjoin('institucion as i','i.id','=','persona.fk_institucion')
        ->rightjoin('investigacion as inv','inv.fk_usuario','=','u.id')
        ->where('u.deleted','!=',true)
        ->where('persona.deleted','!=',true)
        ->where('i.deleted','!=',true)
        ->where('inv.deleted','!=',true)
        ->select(DB::raw('i.nombre as institucion, inv.tema as investigacion'))
        ->get();

        return Datatables::of($instituciones)
        ->addColumn('action', function ($inst) {
            return '<a href="institucion/modificar/'.$inst->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="institucion/eliminar/'.$inst->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
        })
        ->make(true);
    }

    public function anyData(){
        $users = User::leftjoin('rol','rol.id','=','usuario.fk_rol')
        ->where('u.deleted','!=',true)
        ->select(DB::raw('"usuario".*, "rol"."nombre" as rol'))
        ->get();

        return Datatables::of($users)
        ->addColumn('action', function ($usuario) {
            return '<a href="usuario/modificar/'.$usuario->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
            <a href="usuario/eliminar/'.$usuario->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';
        })
        ->make(true);
    }

    public function edit($Codigo){
        $validated = User::where('usuario.id', $Codigo)
        ->leftjoin('rol','rol.id','=','usuario.fk_rol')
        ->select(\DB::raw("\"usuario\".*,\"rol\".\"id\" as cod, \"rol\".\"nombre\" as rol"))
        ->first();
        $rols = Rol::select()->orderBy('id', 'asc')->get();

        return view("usuarios.invconf", compact('validated', 'rols'));
    }

    public function imageUploadPost(){
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $imageName);

        Auth::user()->image = $imageName;
        Auth::user()->save();

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Subida de imagen de perfil de usuario '.Auth::user()->id.'.'
        ]);

        return back()
            ->with('success','Ha subido su imagen satisfactoriamente.')
            ->with('image', $imageName);
    }

    public function actualizar(Request $request){
        $priv = Pri_Rol::where('codigo_rol',Auth::user()->fk_rol)
        ->where('codigo_pri', 1)
        ->first();

        if(isset($priv)){
            $usuario = User::where('id', $request->id)->first();
            $rols = Rol::select()->orderBy('id', 'asc')->get();

            $us = User::where('usuario.email', $request->email)->first();
        
            if(isset($us) && $usuario->id != $us->id && $request->email == $us->email){
                Session::flash('message','El correo '.$request->email.' ya existe.');
                return Redirect::back()->withInput(Input::all())->with('rols', $rols);
            }

            $usuario->fill([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ])->update();

            //Auditoria
            Audit::create([
                'id' => Audit::max('id')+1,
                'fk_usuario' => Auth::user()->id,
                'descripcion' => 'Modificación de usuario '.$usuario->id.'.'
            ]);

            Session::flash('messagedel','Usuario modificado correctamente.');
            return redirect('usuario');
        }else{
            Session::flash('message','Usted no tiene permisos para realizar esta accion.');
            return Redirect::back();
        }
    }

    public function delete($Codigo){
        $priv = Pri_Rol::where('codigo_rol',Auth::user()->fk_rol)
        ->where('codigo_pri', 1)
        ->first();

        if(isset($priv)){
            Persona::where('fk_usuario', $Codigo)->delete();
            User::where('id', $Codigo)->update(['deleted' => TRUE]);

            //Auditoria
            Audit::create([
                'id' => Audit::max('id')+1,
                'fk_usuario' => Auth::user()->id,
                'descripcion' => 'Eliminación de usuario '.$Codigo.'.'
            ]);

            Session::flash('messagedel','Usuario eliminado correctamente.');
            return redirect('usuario');
        }else{
            Session::flash('message','Usted no tiene permisos para realizar esta accion.');
            return Redirect::back();
        }
    }

    public function crear(Request $request){
        if(is_null(Persona::where('cedula', $request->cedula)->first())){
            
            $p = Persona::create([
                'cedula' => $request->cedula,
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'fk_usuario' => Auth::user()->id
            ]);
            if(!is_null($request->nombre2)){
                $p->nombre_2 = $request->nombre2;
                $p->save();
            }
            if(!is_null($request->apellido2)){
                $p->apellido_2 = $request->apellido2;
                $p->save();
            }
            if(!is_null($request->institucion)){
                $i = Institucion::where('nombre', $request->institucion)->first();
                if(is_null($i)){
                    $i = Institucion::create([
                        'id' => (Institucion::max('id'))+1,
                        'nombre' => $request->institucion
                    ]);
                }
                $p->fk_institucion = $i->id;
                $p->save();
            }

            //Auditoria
            Audit::create([
                'id' => Audit::max('id')+1,
                'fk_usuario' => Auth::user()->id,
                'descripcion' => 'Creación de persona cédula '.$p->cedula.'.'
            ]);

            return redirect('/dashboard');

        }else{
            Session::flash('messagedel','La cédula de identidad '.$request->cedula.' ya existe.
            Contacte a alguno de los ejecutivos en caso de inconvenientes.');
            return Redirect::back()->withInput(Input::all());
        }
    }
}