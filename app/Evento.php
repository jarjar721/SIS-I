<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table='evento';

    protected $primaryKey='id';

    protected $fillable =[
        'nombre',
        'tipo',
        'fk_evento',
        'fk_investigacion',
        'fk_unidad_informacion',
        'fk_pregunta'
    ];

    protected $guarded =[
        'id',
    ];
}
