<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigacion extends Model
{
    protected $table='investigacion';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'titulo',
        'fk_usuario'
    ];

    protected $guarded =[
        'id',
    ];
}
