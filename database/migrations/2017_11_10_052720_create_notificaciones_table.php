<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDomicilio')->unsigned();
            $table->string('correo', 100)->default("SIN INFORMACION");
            $table->string('telefono', 15)->default("SIN INFORMACION");
            $table->string('fax', 20)->default("SIN INFORMACION");

            $table->foreign('idDomicilio')->references('id')->on('domicilio')->onDelete('cascade');

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
        Schema::dropIfExists('notificacion');
    }
}
