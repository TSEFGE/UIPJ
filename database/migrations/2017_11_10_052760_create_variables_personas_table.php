<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariablesPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variables_persona', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCarpeta')->unsigned();
            $table->integer('idPersona')->unsigned();
            $table->integer('edad')->nullable();
            $table->string('telefono',15)->default("SIN INFORMACION");
            $table->string('motivoEstancia',200)->default("SIN INFORMACION");
            $table->integer('idOcupacion')->unsigned()->default(2941);
            $table->integer('idEstadoCivil')->unsigned()->default(7);
            $table->integer('idEscolaridad')->unsigned()->default(14);
            $table->integer('idReligion')->unsigned()->default(29);
            $table->integer('idDomicilio')->unsigned()->default(1);
            $table->string('docIdentificacion',50)->default("SIN INFORMACION");
            $table->string('numDocIdentificacion',50)->default("SIN INFORMACION");
            $table->string('lugarTrabajo',50)->default("SIN INFORMACION");
            $table->integer('idDomicilioTrabajo')->unsigned()->default(1);
            $table->string('telefonoTrabajo',15)->default("SIN INFORMACION");
            $table->string('representanteLegal',100)->default("SIN INFORMACION");
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idCarpeta')->references('id')->on('carpeta')->onDelete('cascade');
            $table->foreign('idPersona')->references('id')->on('persona')->onDelete('cascade');
            $table->foreign('idOcupacion')->references('id')->on('cat_ocupacion')->onDelete('cascade');
            $table->foreign('idEstadoCivil')->references('id')->on('cat_estado_civil')->onDelete('cascade');
            $table->foreign('idEscolaridad')->references('id')->on('cat_escolaridad')->onDelete('cascade');
            $table->foreign('idReligion')->references('id')->on('cat_religion')->onDelete('cascade');
            $table->foreign('idDomicilio')->references('id')->on('domicilio')->onDelete('cascade');
            $table->foreign('idDomicilioTrabajo')->references('id')->on('domicilio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variables_persona');
    }
}
