<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesActivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_activo', function (Blueprint $table) {
            $table->id();
            $table->string('sistema_operativo',25);
            $table->boolean('unidad_disco');
            $table->string('memoria_ram',10);
            $table->string('procesador',25);
            $table->string('disco_duro',25);

            $table->bigInteger('activo_id')->unsigned();
            $table->foreign('activo_id')->references('id')->on('activos');
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
        Schema::dropIfExists('detalles_activo');
    }
}
