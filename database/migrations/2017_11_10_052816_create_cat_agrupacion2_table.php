<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatAgrupacion2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cat_agrupacion2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 200);
            $table->integer('idAgrupacion1')->unsigned();
            $table->timestamps();
            $table->softDeletes();

        $table->foreign('idAgrupacion1')->references('id')->on('cat_agrupacion1')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_agrupacion2');
    }
}
