<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nombres', 200)->nullable();
             $table->string('primerAp', 50)->nullable();
             $table->string('segundoAp', 50)->nullable();
             $table->dateTime('fechaNacimiento')->default("1900-01-01");
             $table->string('rfc', 20)->default("AAAA000101");
             $table->string('curp', 20)->unique()->nullable();
             $table->string('sexo', 20)->default("SIN INFORMACION");
             $table->integer('idNacionalidad')->unsigned()->default(132);
             $table->integer('idEtnia')->unsigned()->default(13);
             $table->integer('idLengua')->unsigned()->default(69);
             $table->integer('idMunicipioOrigen')->unsigned()->default(2497);
             $table->boolean('esEmpresa')->default(false);

             $table->foreign('idNacionalidad')->references('id')->on('cat_nacionalidad')->onDelete('cascade');
             $table->foreign('idEtnia')->references('id')->on('cat_etnia')->onDelete('cascade');
             $table->foreign('idLengua')->references('id')->on('cat_lengua')->onDelete('cascade');
             $table->foreign('idMunicipioOrigen')->references('id')->on('cat_municipio')->onDelete('cascade');

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
        Schema::dropIfExists('persona');
    }
}
