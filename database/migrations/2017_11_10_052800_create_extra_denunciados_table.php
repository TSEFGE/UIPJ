<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraDenunciadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_denunciado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idVariablesPersona')->unsigned();
            $table->integer('idNotificacion')->unsigned();
            $table->integer('idPuesto')->unsigned()->default(9);
            $table->string('alias', 50)->default("SIN INFORMACION");;
            $table->string('senasPartic', 150)->default("SIN INFORMACION");
            $table->integer('ingreso')->default(0);
            $table->string('periodoIngreso', 20)->default("SIN INFORMACION");
            $table->string('residenciaAnterior', 100)->default("SIN INFORMACION");
            $table->integer('idAbogado')->unsigned()->nullable();
            $table->integer('personasBajoSuGuarda')->default(0);
            $table->boolean('perseguidoPenalmente')->default(false);
            $table->string('vestimenta', 150)->default("SIN INFORMACION");
            $table->string('narracion',2000)->default("SIN INFORMACION");

            $table->foreign('idVariablesPersona')->references('id')->on('variables_persona')->onDelete('cascade');
            $table->foreign('idNotificacion')->references('id')->on('notificacion')->onDelete('cascade');
            $table->foreign('idPuesto')->references('id')->on('cat_puesto')->onDelete('cascade');
            $table->foreign('idAbogado')->references('id')->on('extra_abogado')->onDelete('cascade');

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
        Schema::dropIfExists('extra_denunciado');
    }
}
