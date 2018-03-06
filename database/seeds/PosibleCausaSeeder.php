<?php

use Illuminate\Database\Seeder;

class PosibleCausaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_posible_causa')->insert([
            ['id'=> 1,	'nombre' => 'SIN INFORMACION'],
            ['id'=> 2,	'nombre' => 'NO APLICA'],
			['id'=> 3,	'nombre' => 'AHOGO'],
			['id'=> 4,	'nombre' => 'ESTRANGULACION'],
			['id'=> 5,	'nombre' => 'ASFIXIA'],
			['id'=> 6,	'nombre' => 'ESTADO DE EBRIEDAD'],
			['id'=> 7,	'nombre' => 'BAJO INFLUJO DE DROGAS'],
			['id'=> 8,	'nombre' => 'CONDUCCION DISTRAIDA: OTROS'],
			['id'=> 9,	'nombre' => 'CONDUCCION DISTRAIDA: DISPOSITIVO MOVIL DE COMUNICACION'],
			['id'=> 10,	'nombre' => 'ENFRENTAMIENTO Y/O AGRESION CON FUERZAS DE SEGURIDAD'],
			['id'=> 11,	'nombre' => 'DELINCUENCIA ORGANIZADA']  
        ]);
    }
}
