<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_activo',20);
            $table->string('numero_serie',30);
            $table->string('modelo',30);
            $table->date('fecha_adquisicion');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('tipo_activo_id')->unsigned();
            $table->bigInteger('marca_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();

            $table->foreign('categoria_id')->references('id')->on('categorias_activo');
            $table->foreign('tipo_activo_id')->references('id')->on('tipos_activo');
            $table->foreign('marca_id')->references('id')->on('marcas');
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
        Schema::dropIfExists('activos');
    }
}
