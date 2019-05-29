<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table='rol';

    protected $primaryKey='code';

    public $timestamps=false;

    protected $fillable =[
        'code',
        'nombre'
    ];

    protected $guarded =[
        'code'
    ];
}
