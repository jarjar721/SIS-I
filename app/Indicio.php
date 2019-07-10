<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicio extends Model
{
    protected $table='indicio';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'nombre',
        'fk_sinergia'
    ];

    protected $guarded =[
        'id',
    ];
}
