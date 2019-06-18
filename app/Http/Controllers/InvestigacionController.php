<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pri_Rol;
use App\U_Estudio;
use App\Temporalidad;
use App\Evento;
use App\Pregunta;
use App\Contexto;
use App\Investigacion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Session;
use Datatables;

use DB;

class InvestigacionController extends Controller
{
    public function __construct(){}

    public function d_tema(){

        return view('investigacion.delimitacion_tema');
    }

    public function store(Request $request){

        //Creacion de la investigacion
        $investigacion = Investigacion::create([
            'titulo' => $request->titulo,
            'fk_usuario' => Auth::user()->id
        ]);
        //\Fin creacion de la investigacion

        //Ciclo para llenado de la investigacion
        $i = 1;
        $data = "optionsRadios".$i;

        //Se crea primero pregunta principal:
        while ($request->$data != "Primaria"){ 
            $i++;
            $data = "optionsRadios".$i;
        }
        $principal = Pregunta::create([
            'tipo' => $request->$data,
            $data = "pregunta".$i,
            'pregunta' => $request->$data,
            'fk_investigacion' => $investigacion->id
        ]);

        //Rellenado de resto de datos:
        $data = "unidad_estudio".$i;
        
        U_Estudio::create([
            'unidad_estudio' => $request->$data,
            'fk_pregunta' => $principal->id
        ]);

        $data = "contexto".$i;

        Contexto::create([
            'contexto' => $request->$data,
            'fk_pregunta' => $principal->id
        ]);

        $data = "temp_inicio".$i;

        Temporalidad::create([
            'fecha_inicio' => $request->$data,
            $data = "fecha_fin".$i,
            'fecha_fin' => $request->$data,
            'fk_pregunta' => $principal->id
        ]);

        $data = "evento".$i;

        Evento::create([
            'nombre' => $request->$data,
            $data = "tipoEvento".$i,
            'tipo' => $request->$data,
            'fk_investigacion' => $investigacion->id,
            'fk_pregunta' => $principal->id
        ]);
        //\ Fin creado principal

        $i = 0;

        while ($i != $request->iteracion){
            $i++;
            $data = "optionsRadios".$i;

            //Comprobar si existe ese dato en esta iteracion:
            if(!is_null($request->$data)){
                //Agregar solo secundarias:
                if($request->$data != "Principal"){
                    $secundaria = Pregunta::create([
                        'tipo' => $request->$data,
                        $data = "pregunta".$i,
                        'pregunta' => $request->$data,
                        'fk_investigacion' => $investigacion->id,
                        'fk_pregunta' => $principal->id
                    ]);

                    //Rellenado de resto de datos:
                    $data = "unidad_estudio".$i;
        
                    U_Estudio::create([
                        'unidad_estudio' => $request->$data,
                        'fk_pregunta' => $secundaria->id
                    ]);
            
                    $data = "contexto".$i;
            
                    Contexto::create([
                        'contexto' => $request->$data,
                        'fk_pregunta' => $secundaria->id
                    ]);
            
                    $data = "temp_inicio".$i;
            
                    Temporalidad::create([
                        'fecha_inicio' => $request->$data,
                        $data = "fecha_fin".$i,
                        'fecha_fin' => $request->$data,
                        'fk_pregunta' => $secundaria->id
                    ]);
            
                    $data = "evento".$i;
            
                    Evento::create([
                        'nombre' => $request->$data,
                        $data = "tipoEvento".$i,
                        'tipo' => $request->$data,
                        'fk_investigacion' => $investigacion->id,
                        'fk_pregunta' => $secundaria->id
                    ]);
                }
            };

        }
        //\Fin ciclo para llenado de la investigacion

        $data = $request;

        //Redireccion a fase_proyectiva.blade con los datos
        return view("investigacion.fase_proyectiva", compact('i', 'data'));
    }

    public function holo($code){
        $investigacion = Investigacion::where('id', $code)
        ->leftjoin('evento as e', 'e.fk_investigacion','=','investigacion.id')
        ->select(\DB::raw("investigacion.*"))
        ->first();

        return view('investigacion.holograma', compact('investigacion'));
    }
    
    public function getInvData(){
        if(Auth::user()->fk_rol == 1){
            $investigaciones = Investigacion::select()->get();
        }else{
            $investigaciones = Investigacion::where('fk_usuario', Auth::user()->id)
            ->get();
        }
        
        return Datatables::of($investigaciones)
        /*->addColumn('miembros', function($user) {
            return url('inv/', $user->id);
        })*/
        ->addColumn('action', function ($investigacion) {
            return '<a href="/investigacion/holograma/'.$investigacion->id.'" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>Ver</a>
                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
    }

    public function getUsersData($id){
            $usuarios = Users::join('usuario as u', 'u.id','=','investigacion.fk_usuario')
            ->where('u.id', $id)
            ->get();
        
        return Datatables::of($usuarios)->make(true);
    }
}
