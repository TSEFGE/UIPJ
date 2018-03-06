<?php

use Illuminate\Database\Seeder;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //BASADO EN EL SISTEMA NACIONAL
    public function run()
    {
        DB::table('cat_lugar')->insert([
        	[ 'id' => 24, 'nombre' => 'SIN INFORMACION'],
            [ 'id' => 1, 'nombre' => 'VIA PUBLICA'],
            [ 'id' => 2, 'nombre' => 'CASA HABITACION'],
            [ 'id' => 3, 'nombre' => 'ESCUELA'],
            [ 'id' => 4, 'nombre' => 'LUGAR DE TRABAJO'],
            [ 'id' => 5, 'nombre' => 'CENTRO COMERCIAL'],
            [ 'id' => 6, 'nombre' => 'MERCADO POPULAR'],
            [ 'id' => 7, 'nombre' => 'CENTRAL CAMIONERA'],
            [ 'id' => 8, 'nombre' => 'AEROPUERTO'],
            [ 'id' => 9, 'nombre' => 'PARQUE PUBLICO'],
            [ 'id' => 10, 'nombre' => 'SALA DE EXHIBICION'],
            [ 'id' => 11, 'nombre' => 'CENTRO NOCTURNO'],
            [ 'id' => 12, 'nombre' => 'HOTEL'],
            [ 'id' => 13, 'nombre' => 'NEGOCIO'],
            [ 'id' => 14, 'nombre' => 'METRO'],
            [ 'id' => 15, 'nombre' => 'CARRETERA'],
            [ 'id' => 16, 'nombre' => 'DESPOBLADO'],
            [ 'id' => 17, 'nombre' => 'ESTACIONAMIENTO PUBLICO'],
            [ 'id' => 18, 'nombre' => 'LUGAR PUBLICO'],
            [ 'id' => 19, 'nombre' => 'CLUB SOCIAL'],
            [ 'id' => 20, 'nombre' => 'OFICINAS PUBLICAS'],
            [ 'id' => 21, 'nombre' => 'PREDIO'],
            [ 'id' => 22, 'nombre' => 'COSTA/PLAYA'],
            [ 'id' => 23, 'nombre' => 'CAMINO VECINAL']
        ]);
    }
}
