<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUnidad')->unsigned()->nullable();
            $table->string('username', 20);
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->integer('numFiscal')->nullable();
            $table->enum('nivel', ['1', '2', '3', '4', '5'])->default('1')->nullable();
            $table->integer('oficioConsecutivo')->default('0')->nullable();
            $table->string('tokenSession')->nullable();


            $table->foreign('idUnidad')->references('id')->on('unidad')->onDelete('cascade');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
