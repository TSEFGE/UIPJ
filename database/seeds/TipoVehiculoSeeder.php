<?php

use Illuminate\Database\Seeder;

class TipoVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XIV de Fortín de Las Flores
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_tipo_vehiculo')->insert([
            ['id'=>  1,'idClaseVehiculo'=>  10,'nombre' => 'CONVERTIBLE'],
            ['id'=>  2,'idClaseVehiculo'=>  10,'nombre' => 'COUPE'],
            ['id'=>  3,'idClaseVehiculo'=>  10,'nombre' => 'LIMOUSINE'],
            ['id'=>  4,'idClaseVehiculo'=>  10,'nombre' => 'SEDAN'],
            ['id'=>  5,'idClaseVehiculo'=>  10,'nombre' => 'SPORT'],
            ['id'=>  6,'idClaseVehiculo'=>  10,'nombre' => 'VAGONETA'],
            ['id'=>  7,'idClaseVehiculo'=>  1,'nombre' => 'COMBI'],
            ['id'=>  8,'idClaseVehiculo'=>  7,'nombre' => 'OTROS'],
            ['id'=>  9,'idClaseVehiculo'=>  2,'nombre' => 'AUTO TANQUE'],
            ['id'=> 10,'idClaseVehiculo'=>  2,'nombre' => 'CABINA'],
            ['id'=> 11,'idClaseVehiculo'=>  2,'nombre' => 'CAJA'],
            ['id'=> 12,'idClaseVehiculo'=>  2,'nombre' => 'CASETA'],
            ['id'=> 13,'idClaseVehiculo'=>  10,'nombre' => 'JEEP'],
            ['id'=> 14,'idClaseVehiculo'=>  2,'nombre' => 'CELDILLAS'],
            ['id'=> 15,'idClaseVehiculo'=>  2,'nombre' => 'CHASIS'],
            ['id'=> 16,'idClaseVehiculo'=>  2,'nombre' => 'ESTACAS'],
            ['id'=> 17,'idClaseVehiculo'=>  4,'nombre' => 'MICROBUS'],
            ['id'=> 18,'idClaseVehiculo'=>  4,'nombre' => 'OMNIBUS'],
            ['id'=> 19,'idClaseVehiculo'=>  2,'nombre' => 'PANEL'],
            ['id'=> 20,'idClaseVehiculo'=>  2,'nombre' => 'PICK UP'],
            ['id'=> 21,'idClaseVehiculo'=>  2,'nombre' => 'PIPA'],
            ['id'=> 22,'idClaseVehiculo'=>  2,'nombre' => 'PLATAFORMA'],
            ['id'=> 23,'idClaseVehiculo'=>  2,'nombre' => 'REDILAS'],
            ['id'=> 24,'idClaseVehiculo'=>  2,'nombre' => 'REFRIGERADOR'],
        	['id'=> 25,'idClaseVehiculo'=>  10,'nombre' => 'SIN INFORMACION']
        ]);
    }
}
