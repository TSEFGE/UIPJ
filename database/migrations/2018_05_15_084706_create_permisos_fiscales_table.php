<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosFiscalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_fiscales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idFiscal')->unsigned();
            $table->integer('idCarpeta')->unsigned();
            $table->timestamps();
            
            $table->foreign('idFiscal')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idCarpeta')->references('id')->on('carpeta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_fiscales');
    }
}
