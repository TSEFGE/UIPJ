<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterpreteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interprete', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idLengua')->unsigned();
            $table->string('nombre', 200);
            $table->string('organizacion', 100)->nullable();

            $table->timestamps();

            $table->foreign('idLengua')->references('id')->on('cat_lengua')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interprete');
    }
}
