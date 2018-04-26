<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiligenciasSpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diligencias_sp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idAcusacion')->unsigned();
            $table->integer('numOficio');
            $table->string('termino', 50);
            $table->string('dictamen', 100);
            $table->integer('status');//1=pendiente, 2=aplicada
            $table->string('oficio', 100);
            $table->timestamps();

            $table->foreign('idAcusacion')->references('id')->on('acusacion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diligencias_sp');
    }
}
