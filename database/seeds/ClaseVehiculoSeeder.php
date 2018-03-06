<?php

use Illuminate\Database\Seeder;

class ClaseVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    ////BASADO EN EL SISTEMA NACIONAL
    public function run()
    {
        DB::table('cat_clase_vehiculo')->insert([
        	['id' => 10,'nombre' => 'SIN INFORMACION'],
            ['id' => 1,'nombre' => 'AUTOMOVIL'],
            ['id' => 2,'nombre' => 'CAMIONETA'],
            ['id' => 3,'nombre' => 'CAMION'],
            ['id' => 4,'nombre' => 'OMNIBUS'],
            ['id' => 5,'nombre' => 'REMOLQUE'],
            ['id' => 6,'nombre' => 'MOTOCICLETA'],
            ['id' => 7,'nombre' => 'OTROS'],
            ['id' => 8,'nombre' => 'AUTO ANTIGUO'],
            ['id' => 9,'nombre' => 'AGROINDUSTRIAL']
        ]);
    }
}
