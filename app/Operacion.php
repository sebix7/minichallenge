<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model {

    protected $table = "operacion";
    protected $fillable = ["concepto", "monto", "fecha", "tipo"];

}
