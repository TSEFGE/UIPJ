<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcumulacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acumulacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCarpetaP')->unsigned();
            $table->integer('idCarpetaS')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idCarpetaP')->references('id')->on('carpeta')->onDelete('cascade');
            $table->foreign('idCarpetaS')->references('id')->on('carpeta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acumulacion');
    }
}
