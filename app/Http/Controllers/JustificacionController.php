<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Investigacion;
use App\Justificacion;

class JustificacionController extends Controller
{
    public function __construct(){}

    public function create()
    {
        return view('investigacion.justificacion');
    }

    public function store(Request $request)
    {

        //Ciclo para llenado de las justificaciones
        $i = 0;

        while ($i != $request->iteracion) {
            $i++;
            $data = "argumento" . $i;

            //Comprobar si existe ese dato en esta iteracion:
            if (!is_null($request->$data)) {

                //Agrega las justificaciones:
                $secundaria = Justificacion::create([
                    'argumento' => $request->$data,
                    $data = "tipo-argumento" . $i,
                    'tipo_argumento' => $request->$data,
                    //'fk_investigacion' => $investigacion->id,
                ]);
            };
        }
        //\Fin ciclo para llenado de las justificaciones
    }
}
