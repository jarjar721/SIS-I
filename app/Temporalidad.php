<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporalidad extends Model
{
    protected $table='temporalidad';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'fecha_inicio',
        'fecha_fin',
        'fk_pregunta'
    ];

    protected $guarded =[
        'id',
    ];
}
