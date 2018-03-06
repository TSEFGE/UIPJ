<?php

use Illuminate\Database\Seeder;

class PuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //BASADO EN EL SISTEMA NACIONAL
    public function run()
    {
        DB::table('cat_puesto')->insert([
        	[ 'id' => 9, 'nombre' => 'SIN INFORMACION'],
            [ 'id' => 1, 'nombre' => 'DISCAPACITADO'],
            [ 'id' => 2, 'nombre' => 'BOTONES'],
            [ 'id' => 3, 'nombre' => 'POLICIA'],
            [ 'id' => 4, 'nombre' => 'FRANELERO'],
            [ 'id' => 5, 'nombre' => 'INDIGENTE'],
            [ 'id' => 6, 'nombre' => 'SOCORRISTA'],
            [ 'id' => 7, 'nombre' => 'VALET PARKING'],
            [ 'id' => 8, 'nombre' => 'VENDEDOR']
        ]);
    }
}
