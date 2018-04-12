<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitatorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citatorio', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('idAcusacion')->unsigned();
            $table->integer('idCarpeta')->unsigned();
            $table->integer('idCitado')->unsigned();
            $table->integer('tipo');//testigo=2, investigado=1
            $table->string('motivo', 500);
            $table->dateTime('fecha');
            $table->integer('status');//1=pendiente
            $table->integer('intento');//1=primera
            $table->string('documento');

            $table->timestamps();

            //$table->foreign('idAcusacion')->references('id')->on('acusacion')->onDelete('cascade');
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
        Schema::dropIfExists('citatorio');
    }
}
