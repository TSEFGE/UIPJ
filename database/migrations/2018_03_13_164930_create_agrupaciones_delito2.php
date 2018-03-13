<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgrupacionesDelito2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agrupacion_delito2', function (Blueprint $table) {
            
            $table->increments('idAgrupacion2');

            $table->integer('idAgrupacion')->unsigned();  

           $table->string('nombre',100);
            
//depende de tabl agrupacion

            $table->foreign('idAgrupacion2')->references('idAgrupacion')->on('agrupacion_delito')->onDelete('cascade');

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
        Schema::dropIfExists('agrupacion_delito2');
    }
}
