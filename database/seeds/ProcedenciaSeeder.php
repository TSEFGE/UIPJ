<?php

use Illuminate\Database\Seeder;

class ProcedenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    ////BASADO EN EL SISTEMA NACIONAL
    public function run()
    {
        DB::table('cat_procedencia')->insert([
        	['id' => 4,'nombre' => 'SIN INFORMACION'],
            ['id' => 1,'nombre' => 'NACIONAL'],
            ['id' => 2,'nombre' => 'EXTRANJERO'],
            ['id' => 3,'nombre' => 'FRONTERIZO']
        ]);
    }
}
