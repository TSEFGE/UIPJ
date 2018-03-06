<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatColoniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_colonia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMunicipio')->unsigned();
            $table->string('nombre', 50);
            $table->integer('codigoPostal');

            $table->foreign('idMunicipio')->references('id')->on('cat_municipio')->onDelete('cascade');

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
        Schema::dropIfExists('cat_colonia');
    }
}
