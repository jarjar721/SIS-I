<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sinergia extends Model
{
    protected $table='sinergia';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'nombre',
        'fk_evento_ui'
    ];

    protected $guarded =[
        'id',
    ];
}
