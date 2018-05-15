<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosAuxiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_auxiliares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idAuxiliar')->unsigned();
            $table->integer('idCarpeta')->unsigned();
            $table->timestamps();
            
            $table->foreign('idAuxiliar')->references('id')->on('auxiliares')->onDelete('cascade');
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
        Schema::dropIfExists('permisos_auxiliares');
    }
}
