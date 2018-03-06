<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMunicipio')->unsigned()->default(2497);
            $table->integer('idLocalidad')->unsigned()->default(27592);
            $table->integer('idColonia')->unsigned()->default(8982);
            $table->string('calle', 100)->default("SIN INFORMACION");
            $table->string('numExterno', 10)->default('S/N');
            $table->string('numInterno', 10)->default('S/N');

            $table->foreign('idMunicipio')->references('id')->on('cat_municipio')->onDelete('cascade');
            $table->foreign('idLocalidad')->references('id')->on('cat_localidad')->onDelete('cascade');
            $table->foreign('idColonia')->references('id')->on('cat_colonia')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domicilio');
    }
}
