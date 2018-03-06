<?php

use Illuminate\Database\Seeder;

class PMinisterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_pministerial')->insert([
            ['id'=>  1,'nombre' => 'INSPECCION OCULAR DEL LUGAR DEL HECHO DELICTIVO'],
            ['id'=>  2,'nombre' => 'UBICACIÓN DE TESTIGOS Y DATOS PARA ESTABLECER EL HECHO DELICTIVO'],
            ['id'=>  3,'nombre' => 'UBICACIÓN E IDENTIFICACIÓN DE PROBABLES RESPONSABLES'],
            ['id'=>  4,'nombre' => 'VERIFICACIÓN DE HECHOS DELICTIVOS DE VEHÍCULOS']
        ]);
    }
}
