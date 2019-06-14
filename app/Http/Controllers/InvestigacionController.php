<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pri_Rol;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Session;
use Datatables;

use DB;

class InvestigacionController extends Controller
{
    public function __construct(){}

    public function d_tema(){

        return view('investigacion.delimitacion_tema');
    }
}
