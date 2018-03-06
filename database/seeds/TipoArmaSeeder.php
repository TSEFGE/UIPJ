<?php

use Illuminate\Database\Seeder;

class TipoArmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //BASADO EN EL SISTEMA NACIONAL
    public function run()
    {
    	DB::table('cat_tipo_arma')->insert([
	        [ 'id' => 4, 'nombre' => 'SIN INFORMACIÓN'],
	        [ 'id' => 1, 'nombre' => 'ARMA DE FUEGO'],
	        [ 'id' => 2, 'nombre' => 'ARMA BLANCA'],
	        [ 'id' => 3, 'nombre' => 'FABRICACION RUDIMENTARIA']
	    ]);
    }
}
