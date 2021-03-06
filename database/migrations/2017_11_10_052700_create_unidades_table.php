<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idRegion')->unsigned();
            $table->integer('idDistrito')->unsigned();
            $table->string('nombre', 100)->unique();
            $table->string('direccion', 100);
            $table->string('latitud', 15);
            $table->string('longitud', 15);
            $table->string('telefono', 15);
            $table->string('abrevMun', 50)->unique();
            $table->string('municipio', 50);
            $table->string('nomCompleto', 100);
            $table->integer('consecutivo');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('idDistrito')->references('id')->on('distrito')->onDelete('cascade');
            $table->foreign('idRegion')->references('id')->on('region')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad');
    }
}
