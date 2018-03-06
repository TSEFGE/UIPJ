<?php

use Illuminate\Database\Seeder;

class ArmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_arma')->insert([
	        [ 'id' => 1, 'idTipoArma' => 4, 'nombre' => 'SIN INFORMACION'],
	        [ 'id' => 2, 'idTipoArma' => 4, 'nombre' => 'CUERPO(MANOS, PIES)'],
	        [ 'id' => 3, 'idTipoArma' => 4, 'nombre' => 'OTRA'],

	        [ 'id' => 4, 'idTipoArma' => 1, 'nombre' => 'SIN INFORMACION'],
	        [ 'id' => 5, 'idTipoArma' => 1, 'nombre' => 'PISTOLA'],
	        [ 'id' => 6, 'idTipoArma' => 1, 'nombre' => 'REVOLVER'],
	        [ 'id' => 7, 'idTipoArma' => 1, 'nombre' => 'OTRA'],
	        
	        [ 'id' => 8, 'idTipoArma' => 2, 'nombre' => 'SIN INFORMACION'],
	        [ 'id' => 9, 'idTipoArma' => 2, 'nombre' => 'NAVAJA'],
	        [ 'id' => 10, 'idTipoArma' => 2, 'nombre' => 'CUCHILLO'],
	        [ 'id' => 11, 'idTipoArma' => 2, 'nombre' => 'OTRA'],
	        
	        [ 'id' => 12, 'idTipoArma' => 3, 'nombre' => 'SIN INFORMACION'],
	        [ 'id' => 13, 'idTipoArma' => 3, 'nombre' => 'PALO CON CLABOS'],
	        [ 'id' => 14, 'idTipoArma' => 3, 'nombre' => 'GUANTES CON PUAS'],
	        [ 'id' => 15, 'idTipoArma' => 3, 'nombre' => 'OTRA']
	        
	        
	    ]);
    }
}
