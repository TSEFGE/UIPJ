<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcusacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acusacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCarpeta')->unsigned();
            $table->integer('idDenunciante')->unsigned();
            $table->integer('idTipifDelito')->unsigned();
            $table->integer('idDenunciado')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idCarpeta')->references('id')->on('carpeta')->onDelete('cascade');
            $table->foreign('idDenunciante')->references('id')->on('extra_denunciante')->onDelete('cascade');
            $table->foreign('idTipifDelito')->references('id')->on('tipif_delito')->onDelete('cascade');
            $table->foreign('idDenunciado')->references('id')->on('extra_denunciado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acusacion');
    }
}
