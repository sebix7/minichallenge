<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacionTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('operacion', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("concepto");
            $table->integer("monto");
            $table->date("fecha");
            $table->string("tipo");
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::dropIfExists('operacion');

    }

}
