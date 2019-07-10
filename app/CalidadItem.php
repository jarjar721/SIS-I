<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalidadItem extends Model
{
    protected $table='calidad_item';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'respuesta',
        'fk_calidad_pregunta',
        'fk_investigacion'
    ];

    protected $guarded =[
        'id',
    ];
}
