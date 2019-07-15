<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $table='audit';

    protected $primaryKey='id';

    protected $fillable =[
        'id',
        'descripcion',
        'fk_usuario'
    ];

    protected $guarded =[
        'id',
    ];
}
