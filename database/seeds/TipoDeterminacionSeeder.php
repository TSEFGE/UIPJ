<?php

use Illuminate\Database\Seeder;

class TipoDeterminacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_tipo_determinacion')->insert([
            [ 'id' => 1, 'nombre' => 'ABSTENCION DE INVESTIGAR'],
            [ 'id' => 2, 'nombre' => 'ARCHIVO TEMPORAL'],
            [ 'id' => 3, 'nombre' => 'LA APLICACION DE UN CRITERIO DE OPORTUNIDAD'],
            [ 'id' => 4, 'nombre' => 'NO EJERCICIO DE LA ACCION PENAL'],
            [ 'id' => 5, 'nombre' => 'POR DETERMINAR']
	    ]);
    }
}
