<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipifDelitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipif_delito', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCarpeta')->unsigned();
            $table->integer('idDelito')->unsigned();
            $table->boolean('conViolencia')->default(false);
            $table->integer('idArma')->unsigned()->default(1);//Default sin información
            $table->integer('idPosibleCausa')->unsigned()->default(1);
            $table->integer('idModalidad')->unsigned();
            $table->string('formaComision',50);
            $table->string('consumacion',50);
            $table->date('fecha');
            $table->time('hora');
            $table->integer('idZona')->unsigned();
            $table->integer('idLugar')->unsigned()->default(24);
            $table->integer('idDomicilio')->unsigned()->default(1);
            $table->string('entreCalle',100)->default("SIN INFORMACION");
            $table->string('yCalle',100)->default("SIN INFORMACION");
            $table->string('calleTrasera',100)->default("SIN INFORMACION");
            $table->string('puntoReferencia',100)->default("SIN INFORMACION");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('idCarpeta')->references('id')->on('carpeta')->onDelete('cascade');
            $table->foreign('idDelito')->references('id')->on('cat_delito')->onDelete('cascade');
            $table->foreign('idArma')->references('id')->on('cat_arma')->onDelete('cascade');
            $table->foreign('idPosibleCausa')->references('id')->on('cat_posible_causa')->onDelete('cascade');
            $table->foreign('idModalidad')->references('id')->on('cat_modalidad')->onDelete('cascade');
            $table->foreign('idZona')->references('id')->on('cat_zona')->onDelete('cascade');
            $table->foreign('idLugar')->references('id')->on('cat_lugar')->onDelete('cascade');
            $table->foreign('idDomicilio')->references('id')->on('domicilio')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipif_delito');
    }
}
