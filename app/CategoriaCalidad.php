<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaCalidad extends Model
{
    protected $table='categoria_calidad';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'id',
        'nombre'
    ];

    protected $guarded =[
        'id',
    ];
}
