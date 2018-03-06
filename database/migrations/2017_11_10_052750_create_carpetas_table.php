<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarpetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carpeta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUnidad')->unsigned();
            $table->integer('idFiscal')->unsigned();
            $table->string('numCarpeta', 30);
            $table->date('fechaInicio');
            $table->boolean('conDetenido')->default(false);
            $table->boolean('esRelevante')->default(false);
            $table->string('estadoCarpeta',50)->default("INICIO");
            $table->time('horaIntervencion')->nullable();
            $table->string('descripcionHechos',500);
            $table->string('npd',50)->default("SIN INFORMACION");
            $table->string('numIph',50)->default("SIN INFORMACION");
            $table->date('fechaIph')->nullable();
            $table->string('narracionIph',2000)->default("SIN INFORMACION");
            $table->integer('idTipoDeterminacion')->unsigned()->default(5);
            $table->date('fechaDeterminacion')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idUnidad')->references('id')->on('unidad')->onDelete('cascade');
            $table->foreign('idFiscal')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idTipoDeterminacion')->references('id')->on('cat_tipo_determinacion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carpeta');
    }
}
