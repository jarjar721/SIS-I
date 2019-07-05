<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table='institucion';

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
