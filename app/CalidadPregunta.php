<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalidadPregunta extends Model
{
    protected $table='calidad_pregunta';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'pregunta',
        'fk_categoria_calidad'
    ];

    protected $guarded =[
        'id',
    ];
}
