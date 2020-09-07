<?php

namespace App\Http\Controllers;

use App\Operacion;
use Illuminate\Http\Request;

class InicioController extends Controller {

    public function index(){

        $operaciones = Operacion::latest()->paginate(10);

        return view("inicio", compact("operaciones"));

    }

}
