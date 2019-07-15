<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pri_Rol;
use App\U_Estudio;
use App\U_Informacion;
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
            'id' => (Investigacion::max('id'))+1,
            'tema' => $request->tema,
            'fecha_creacion' => Carbon::now(),
            'disciplina' => $request->disciplina,
            'fk_usuario' => Auth::user()->id
        ]);
        //\Fin creacion de la investigacion

        //Llenado de la investigacion
        $data = Temporalidad::create([
            'id' => (Temporalidad::max('id'))+1,
            'fecha_inicio' => $request->$temp_inicio,
            'fecha_fin' => $request->$temp_fin
        ]);

        $pregunta = Pregunta::create([
            'id' => (Pregunta::max('id'))+1,
            'pregunta' => $request->$pregunta,
            'fk_investigacion' => $investigacion->id,
            'fk_tipo_investigacion' => $request->tipoInvestigacion,
            'fk_modalidad' => 1,
            'fk_temporalidad' => $data->id
        ]);

        //Rellenado de resto de datos:

        $ui = U_Informacion::create([
            'id' => (U_Informacion::max('id'))+1,
            'cita' => $request->$tema,
            'nivel' => 'Genérica',
            'fk_pregunta' => $pregunta->id
        ]);

        $data = U_Estudio::create([
            'id' => (U_Estudio::max('id'))+1,
            'nombre' => $request->$unidad_estudio
        ]);
        DB::table('unidad_estudio_ui')->insert([
            'id' => DB::table('unidad_estudio_ui')->max('id')+1,
            'fk_unidad_estudio' => $data->id,
            'fk_unidad_informacion' => $ui->id
        ]);

        $data = Contexto::create([
            'id' => (Contexto::max('id'))+1,
            'contexto' => $request->$contexto
        ]);
        DB::table('contexto_ui')->insert([
            'id' => DB::table('contexto_ui')->max('id')+1,
            'fk_contexto' => $data->id,
            'fk_unidad_informacion' => $ui->id
        ]);

        $data = Evento::create([
            'id' => (Evento::max('id'))+1,
            'nombre' => $request->$evento,
            'tipo' => $request->$tipoEvento
        ]);
        DB::table('evento_ui')->insert([
            'id' => DB::table('evento_ui')->max('id')+1,
            'fk_unidad_informacion' => $ui->id,
            'fk_evento' => $data->id
        ]);
        //\ Fin creado principal

        //Redireccion a fase_proyectiva.blade con los datos
        return view("investigacion.fase_proyectiva", compact('data', 'pregunta', 'ui'));
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
                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-journal"></i>Editar</a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
    }

    public function getPreguntaObjetivo2(){
        $preguntaObjetivo2 = ObjetivoEspecifico::join('objetivo_general as og', 'fk_objetivo_general','=', 'og.id')
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
