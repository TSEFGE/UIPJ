<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNarracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('narracion', function (Blueprint $table) {

           $table->increments('id');
           $table->integer('idInvolucrado')->unsigned(); 
           $table->integer('idCarpeta')->unsigned(); 
           $table->string('narracion',2000);
           $table->integer('tipo')->unsigned();
           $table->string('fiel',200);

      

            $table->foreign('idCarpeta')->references('id')->on('carpeta')->onDelete('cascade');
            
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('narracion');
    }
}
