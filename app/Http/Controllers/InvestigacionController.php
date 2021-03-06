<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Audit;
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
use App\CalidadPregunta;
use App\CalidadItem;
use App\CategoriaCalidad;
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
            'fecha_inicio' => $request->temp_inicio,
            'fecha_fin' => $request->temp_fin
        ]);

        $pregunta = Pregunta::create([
            'id' => (Pregunta::max('id'))+1,
            'pregunta' => $request->pregunta,
            'fk_investigacion' => $investigacion->id,
            'fk_tipo_investigacion' => $request->tipoInvestigacion,
            'fk_modalidad' => 1,
            'fk_temporalidad' => $data->id
        ]);

        //Rellenado de resto de datos:

        $ui = U_Informacion::create([
            'id' => (U_Informacion::max('id'))+1,
            'cita' => $request->tema,
            'nivel' => 'Genérica',
            'fk_pregunta' => $pregunta->id
        ]);

        $data = U_Estudio::create([
            'id' => (U_Estudio::max('id'))+1,
            'nombre' => $request->unidad_estudio
        ]);
        DB::table('unidad_estudio_ui')->insert([
            'id' => DB::table('unidad_estudio_ui')->max('id')+1,
            'fk_unidad_estudio' => $data->id,
            'fk_unidad_informacion' => $ui->id
        ]);

        $data = Contexto::create([
            'id' => (Contexto::max('id'))+1,
            'contexto' => $request->contexto
        ]);
        DB::table('contexto_ui')->insert([
            'id' => DB::table('contexto_ui')->max('id')+1,
            'fk_contexto' => $data->id,
            'fk_unidad_informacion' => $ui->id
        ]);

        $data = Evento::create([
            'id' => (Evento::max('id'))+1,
            'nombre' => $request->evento,
            'tipo' => $request->tipoEvento
        ]);
        DB::table('evento_ui')->insert([
            'id' => DB::table('evento_ui')->max('id')+1,
            'clase' => $request->claseEvento,
            'fk_unidad_informacion' => $ui->id,
            'fk_evento' => $data->id
        ]);
        //\ Fin creado principal

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Creación de investigación '.$investigacion->id.', temporalidad '.Temporalidad::max('id').', pregunta '.Pregunta::max('id').', unidad de estudio '.U_Estudio::max('id').', contexto '.Contexto::max('id').' y evento '.Evento::max('id')
        ]);

        //Calidad
        $p_c = CalidadPregunta::get();
        foreach($p_c as $p){
            CalidadItem::create([
                'id' => CalidadItem::max('id')+1,
                'respuesta' => false,
                'fk_calidad_pregunta' => $p->id,
                'fk_investigacion' => $investigacion->id
            ]);
        }
        $c_i = CalidadItem::where('fk_investigacion', $investigacion->id)->get();
        foreach($c_i as $c){
            if($c->fk_calidad_pregunta == 7 || $c->fk_calidad_pregunta == 10){
                $c->respuesta = true; $c->save();
            }
        }

        //Redireccion a welcome.blade con los datos
        return view("welcome", compact('data', 'pregunta', 'ui'));
    }

    public function edit($Codigo){
        $investigacion = Investigacion::where('id', $Codigo)->first(); 
        $pregunta = Pregunta::where('fk_investigacion', $investigacion->id)->first();
        $temp = Temporalidad::where('id', $pregunta->fk_temporalidad)->first();

        return view('investigacion.indicioedit', compact('investigacion','pregunta','temp'));
    }

    public function update(Request $request){
        $investigacion = Investigacion::where('id', $request->InvID)->first();
        $pregunta = Pregunta::where('id', $request->PID)->first();
        $temp = Temporalidad::where('id', $request->TID)->first();

        $investigacion->fill([
            'tema' => $request->tema,
            'fecha_creacion' => Carbon::now(),
            'disciplina' => $request->disciplina
        ])->update();
        $pregunta->fill([
            'pregunta' => $request->$pregunta,
            'fk_tipo_investigacion' => $request->tipoInvestigacion,
            'fk_modalidad' => 1
        ])->update();
        $temp->fill([
            'fecha_inicio' => $request->temp_inicio,
            'fecha_fin' => $request->temp_fin
        ])->update();

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Modificación de investigación '.$request->InvID.', temporalidad '.$request->TID.', pregunta '.$request->PID
        ]);

        return view('welcome');
    }

    public function delete($Codigo){ 
        $investigacion = Investigacion::where('id', $Codigo)->update([
            'deleted' => TRUE
        ]);

        //Auditoria
        Audit::create([
            'id' => Audit::max('id')+1,
            'fk_usuario' => Auth::user()->id,
            'descripcion' => 'Eliminación de investigación '.$Codigo.'.'
        ]);

        Session::flash('messagedel','Investigacion eliminada correctamente.');
        return view('welcome');
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
            $investigaciones = Investigacion::where('investigacion.deleted','!=',true)
            ->get();
        }else{
            $investigaciones = Investigacion::where('fk_usuario', Auth::user()->id)
            ->where('investigacion.deleted','!=',true)
            ->get();
        }
        
        return Datatables::of($investigaciones)
        ->addColumn('action', function ($investigacion) {
            return '<a href="/investigacion/holograma/'.$investigacion->id.'" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>Holograma</a>
                <a href="/investigacion/modificar/'.$investigacion->id.'" class="btn btn-info btn-xs"><i class="fa fa-journal"></i>Editar</a>
                <a href="/investigacion/eliminar/'.$investigacion->id.'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</a>';
        })
        ->make(true);
    }

    public function getPreguntaObjetivo2(){
        $preguntaObjetivo2 = ObjetivoEspecifico::join('objetivo_general as og', 'fk_objetivo_general','=', 'og.id')
        ->join('pregunta', 'og.fk_pregunta','=', 'pregunta.id')
        ->join('investigacion', 'pregunta.fk_investigacion','=', 'investigacion.id')
        ->where('og.deleted','!=',true)
        ->where('pregunta.deleted','!=',true)
        ->where('deleted','!=',true)
        ->where('investigacion.deleted','!=',true)
        ->get();

        return Datatables::of($preguntaObjetivo2)
        ->addColumn('action', function ($preguntaObjetivo2) {
            return '<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Editar</a>';
        })
        ->make(true);
    }

}
