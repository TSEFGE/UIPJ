<?php

use Illuminate\Database\Seeder;

class TipoUsoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_tipo_uso')->insert([
            ['id'=>  1,'nombre' => 'SERVICIO FEDERAL DE CARGA'],
            ['id'=>  2,'nombre' => 'SERVICIO FEDERAL DIPLOMATICO'],
            ['id'=>  3,'nombre' => 'TRANSPORTE PARTICULAR DEMOSTRA'],
            ['id'=>  4,'nombre' => 'TRANSPORTE PARTICULAR DISCAPAC'],
            ['id'=>  5,'nombre' => 'SERVICIO FEDERAL DISCAPACITADO'],
            ['id'=>  6,'nombre' => 'SERVICIO FEDERAL TRANSFRONTERI'],
            ['id'=>  7,'nombre' => 'SERVICIO FEDERAL PAQUETERIA'],
            ['id'=>  8,'nombre' => 'TRANSPORTE PARTICULAR'],
            ['id'=>  9,'nombre' => 'SERVICIO PUBLICO METROPOLITANO'],
            ['id'=> 10,'nombre' => 'SERVICIO PUBLICO LOCAL'],
            ['id'=> 11,'nombre' => 'SERVICIO PUBLICO LOCAL FRONTER'],
            ['id'=> 12,'nombre' => 'TRANSPORTE PARTICULAR FRONTERI'],
            ['id'=> 13,'nombre' => 'SERVICIO FEDERAL DE SEGURIDAD'],
            ['id'=> 14,'nombre' => 'TRANSPORTE PARTICULAR CARGA'],
            ['id'=> 15,'nombre' => 'SERVICIO LOCAL PAQUETERIA'],
            ['id'=> 16,'nombre' => 'SERVICIO PUBLICO FEDERAL'],
            ['id'=> 17,'nombre' => 'SERVICIO LOCAL ARRENDAMIENTO'],
            ['id'=> 18,'nombre' => 'SERVICIO FEDERAL ARRENDAMINETO'],
            ['id'=> 19,'nombre' => 'TRANSPORTE ESPECIALIZADO FEDER'],
            ['id'=> 20,'nombre' => 'TRANSPORTE ESPECIALIZADO LOCAL'],
            ['id'=> 21,'nombre' => 'SERVICIO LOCAL DE CARGA'],
            ['id'=> 22,'nombre' => 'SIN INFORMACION']




        ]);
    }
}
