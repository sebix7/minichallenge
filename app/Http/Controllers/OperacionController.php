<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarOperacionRequest;
use App\Http\Requests\CrearOperacionRequest;
use App\Operacion;
use Illuminate\Http\Request;

class OperacionController extends Controller {

    public function index(){

        $operaciones = Operacion::get();

        return view("operacion.index", compact("operaciones"));

    }

    public function create(){

        return view("operacion.create");

    }

    public function store(CrearOperacionRequest $request){

        Operacion::create(request()->validated());

        $mensaje = "Operación exitosa";
        return view("operacion.create", compact("mensaje"));

    }

    public function show($id){

        $operacion = Operacion::find($id);
        return $this->edit($operacion);

    }

    public function edit(Operacion $operacion){

        return view("operacion.show", [
            "operacion" => $operacion
        ]);

    }

    public function update(Operacion $operacion, ActualizarOperacionRequest $request){

        $operacion->update(request()->validated());

        return redirect()->route("operacion.create");

    }

}
