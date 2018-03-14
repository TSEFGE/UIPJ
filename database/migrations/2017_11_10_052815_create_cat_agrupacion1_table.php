<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatAgrupacion1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cat_agrupacion1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 200);
            $table->integer('idCatDelito')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('idCatDelito')->references('id')->on('cat_delito')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_agrupacion1');
    }
}
