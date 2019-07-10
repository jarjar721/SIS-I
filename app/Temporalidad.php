<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporalidad extends Model
{
    protected $table='temporalidad';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'id',
        'fecha_inicio',
        'fecha_fin'
    ];

    protected $guarded =[
        'id',
    ];
}
