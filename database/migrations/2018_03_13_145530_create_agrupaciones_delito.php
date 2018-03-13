<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgrupacionesDelito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agrupacion_delito', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDelito')->unsigned();  

           $table->string('nombre',100);
            
            $table->foreign('idDelito')->references('id')->on('cat_delito')->onDelete('cascade');

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
        Schema::dropIfExists('agrupacion_delito');
    }
}


