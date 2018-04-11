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
            $table->integer('idAcusacion')->unsigned();
            $table->string('tipo',50); 
            $table->integer('status');
            $table->integer('intento');
            $table->string('documento');

            $table->timestamps();

            $table->foreign('idAcusacion')->references('id')->on('acusacion')->onDelete('cascade');
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
