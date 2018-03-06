<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatArmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_arma', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTipoArma')->unsigned();
            $table->string('nombre', 50);

            $table->foreign('idTipoArma')->references('id')->on('cat_tipo_arma')->onDelete('cascade');

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
        Schema::dropIfExists('cat_arma');
    }
}
