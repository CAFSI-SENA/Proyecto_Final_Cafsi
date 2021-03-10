<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->string('observacion',100);

            $table->bigInteger('funcionario_id')->unsigned();
            $table->bigInteger('activo_id')->unsigned();
            $table->bigInteger('tipo_asignacion')->unsigned();
            $table->bigInteger('estado_id')->unsigned();
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('activo_id')->references('id')->on('activos');
            $table->foreign('tipo_asignacion')->references('id')->on('tipos_asignacion');
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
        Schema::dropIfExists('asignaciones');
    }
}
