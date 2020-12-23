<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',30);
            $table->string('apellidos',30);
            $table->string('identificacion',15);
            $table->string('telefono',10);
            $table->string('celular',10);
            $table->bigInteger('tipo_identificacion_id')->unsigned();
            $table->bigInteger('genero_id')->unsigned();
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();

            $table->foreign('tipo_identificacion_id')->references('id')->on('tipos_identificacion');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
