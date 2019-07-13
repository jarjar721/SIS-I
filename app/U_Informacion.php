<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class U_Informacion extends Model
{
    protected $table='unidad_informacion';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'id',
        'cita',
        'nivel',
        'fk_categoria',
        'fk_pregunta'
    ];

    protected $guarded =[
        'id',
    ];
}
