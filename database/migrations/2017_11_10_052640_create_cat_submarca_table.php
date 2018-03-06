<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatSubmarcaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_submarca', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idSubmarca', 50);
            $table->integer('idMarca')->unsigned();
            $table->string('nombre', 50);

            $table->foreign('idMarca')->references('id')->on('cat_marca')->onDelete('cascade');

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
        Schema::dropIfExists('cat_submarca');
    }
}
