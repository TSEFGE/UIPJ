<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraAutoridadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_autoridad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idVariablesPersona')->unsigned();
            $table->string('antiguedad', 50);
            $table->string('rango', 50);
            $table->string('horarioLaboral', 50);
            $table->string('narracion',2000);

            $table->foreign('idVariablesPersona')->references('id')->on('variables_persona')->onDelete('cascade');

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
        Schema::dropIfExists('extra_autoridad');
    }
}
