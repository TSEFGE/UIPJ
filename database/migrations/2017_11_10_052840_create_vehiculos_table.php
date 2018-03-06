<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTipifDelito')->unsigned();
            $table->string('status', 20);
            $table->string('placas', 9);
            $table->integer('idEstado')->unsigned()->default(33);
            $table->integer('idSubmarca')->unsigned()->default(24403);
            $table->integer('modelo');
            $table->string('nrpv', 50)->default("SIN INFORMACION");
            $table->integer('idColor')->unsigned()->default(25);
            $table->string('permiso', 50)->default("SIN INFORMACION");
            $table->string('numSerie', 17);
            $table->string('numMotor', 50);
            $table->integer('idTipoVehiculo')->unsigned()->default(25);
            $table->integer('idTipoUso')->unsigned()->default(22);
            $table->string('senasPartic', 100);
            $table->integer('idProcedencia')->unsigned()->default(4);
            $table->integer('idAseguradora')->unsigned()->default(25);

            $table->foreign('idTipifDelito')->references('id')->on('tipif_delito')->onDelete('cascade');
            $table->foreign('idEstado')->references('id')->on('cat_estado')->onDelete('cascade');
            $table->foreign('idSubmarca')->references('id')->on('cat_submarca')->onDelete('cascade');
            $table->foreign('idColor')->references('id')->on('cat_color')->onDelete('cascade');
            $table->foreign('idTipoVehiculo')->references('id')->on('cat_tipo_vehiculo')->onDelete('cascade');
            $table->foreign('idTipoUso')->references('id')->on('cat_tipo_uso')->onDelete('cascade');
            $table->foreign('idProcedencia')->references('id')->on('cat_procedencia')->onDelete('cascade');
            $table->foreign('idAseguradora')->references('id')->on('cat_aseguradora')->onDelete('cascade');

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
        Schema::dropIfExists('vehiculo');
    }
}
