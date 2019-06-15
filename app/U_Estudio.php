<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class U_Estudio extends Model
{
    protected $table='unidad_estudio';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'unidad_estudio',
        'fk_pregunta'
    ];

    protected $guarded =[
        'id',
    ];
}
