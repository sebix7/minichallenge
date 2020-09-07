<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller {

    public function store(){

        request()->validate([
            "concepto" => "required",
            "monto" => "required",
            "fecha" => "required",
            "tipo" => "required",
        ]);

        return "Datos validos";

    }

}
