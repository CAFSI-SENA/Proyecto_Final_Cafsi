<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->binary('doc_cargue');

            $table->bigInteger('asignacion_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();
            $table->foreign('asignacion_id')->references('id')->on('asignaciones');
            $table->foreign('usuario_id')->references('id')->on('users');
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
        Schema::dropIfExists('documentos');
    }
}
