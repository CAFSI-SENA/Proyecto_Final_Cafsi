<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bajas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_baja');
            $table->string('observacion',100);

            $table->bigInteger('activo_id')->unsigned();
            $table->bigInteger('tipo_baja_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();
            $table->foreign('activo_id')->references('id')->on('activos');
            $table->foreign('tipo_baja_id')->references('id')->on('tipos_baja');
            $table->foreign('usuario_id')->references('id')->on('users');
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
        Schema::dropIfExists('bajas');
    }
}
