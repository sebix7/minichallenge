<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller {

    public function index(){

        $operaciones = [
            ["title" => "Operacion 1"],
            ["title" => "Operacion 2"],
            ["title" => "Operacion 3"],
            ["title" => "Operacion 4"],
        ];

        return view("inicio", compact("operaciones"));

    }

}
