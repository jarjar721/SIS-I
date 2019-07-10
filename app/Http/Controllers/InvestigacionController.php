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
use App\ObjetivoEspecifico;
use App\ObjetivoGeneral;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Session;
use Datatables;
use Carbon\Carbon;

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
            'tema' => $request->tema,
            'fecha_creacion' => Carbon::now(),
            'disciplina' => $request->disciplina,
            'fk_usuario' => Auth::user()->id
        ]);
        //\Fin creacion de la investigacion

        //Llenado de la investigacion
        $data = Temporalidad::create([
            'fecha_inicio' => $request->temp_inicio,
            'fecha_fin' => $request->temp_fin
        ]);

        $pregunta = Pregunta::create([
            'pregunta' => $request->pregunta,
            'fk_investigacion' => $investigacion->id,
            'fk_tipo_investigacion' => $request->tipoInvestigacion,
            'fk_modalidad' => 1,
            'fk_temporalidad' => $data->id
        ]);

        //Rellenado de resto de datos:

        $data = U_Estudio::create([
            'unidad_estudio' => $request->unidad_estudio
        ]);
        DB::table('unidad_estudio_ui')->create([
            'fk_unidad_estudio' => $data->id,
            'fk_unidad_informacion' => $pregunta->id
        ]);

        $data = Contexto::create([
            'contexto' => $request->contexto
        ]);
        DB::table('contexto_ui')->create([
            'fk_contexto' => $data->id,
            'fk_unidad_informacion' => $pregunta->id
        ]);

        $data = Evento::create([
            'nombre' => $request->evento,
            'tipo' => $request->tipoEvento
        ]);
        /*Evento m a m  
            DB::table('evento_ui')->create([
            'fk_unidad_informacion' => $pregunta->id,
            'fk_evento' => $data->id
        ]);*/
        //\ Fin creado principal

        //Redireccion a fase_proyectiva.blade con los datos
        return view("investigacion.fase_proyectiva", compact('data', 'pregunta'));
    }

    public function holograma($id){
        $investigacion = Investigacion::where('id', $id)
        ->first();
        $enunciado_holopraxico = Pregunta::where('fk_investigacion', $id)
        ->first();
        $objetivo_general = ObjetivoGeneral::where('fk_pregunta', $id)
        ->first();

        return view('investigacion.holograma', compact('investigacion', 'enunciado_holopraxico', 'objetivo_general'));
    }
    
    public function getInvData(){
        if(Auth::user()->fk_rol == 1){
            $investigaciones = Investigacion::get();
        }else{
            $investigaciones = Investigacion::where('fk_usuario', Auth::user()->id)
            ->get();
        }
        
        return Datatables::of($investigaciones)
        ->addColumn('action', function ($investigacion) {
            return '<a href="/investigacion/holograma/'.$investigacion->id.'" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>Holograma</a>
                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
    }

    public function getPreguntaObjetivo2(){
        $preguntaObjetivo2 = ObjetivoEspecifico::
        join('objetivo_general as og', 'fk_objetivo_general','=', 'og.id')
        ->join('pregunta', 'og.fk_pregunta','=', 'pregunta.id')
        ->join('investigacion', 'pregunta.fk_investigacion','=', 'investigacion.id')
        ->get();

        return Datatables::of($preguntaObjetivo2)
        ->addColumn('action', function ($preguntaObjetivo2) {
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>';
        })
        ->make(true);
    }

}
