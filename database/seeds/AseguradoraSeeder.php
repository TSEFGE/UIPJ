<?php

use Illuminate\Database\Seeder;

class AseguradoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_aseguradora')->insert([
            ['id'=>  1,'nombre' => 'ABA SEGUROS, S.A.'],
            ['id'=>  2,'nombre' => 'AGROASEMEX, S.A.'],
            ['id'=>  3,'nombre' => 'AIG MEXICO SEG. INTER. S.A.'],
            ['id'=>  4,'nombre' => 'ANA CIA. DE SEG. S.A.'],
            ['id'=>  5,'nombre' => 'ANGLO MEX. DE SEG. S.A.'],
            ['id'=>  6,'nombre' => 'ALLIANZ MEX., S.A.'],
            ['id'=>  7,'nombre' => 'GBM ATLANTICO S.A.'],
            ['id'=>  8,'nombre' => 'HIDALGO S.A.'],
            ['id'=>  9,'nombre' => 'INTERACCIONES S.A.'],
            ['id'=> 10,'nombre' => 'INVERLINCOLN S.A.'],
            ['id'=> 11,'nombre' => 'MAYA S.A.'],
            ['id'=> 12,'nombre' => 'MEXICANA S.A.'],
            ['id'=> 13,'nombre' => 'OBRERA S.A.'],
            ['id'=> 14,'nombre' => 'C.B.I. SEG., S.A.'],
            ['id'=> 15,'nombre' => 'CHUBB DE MEXICO S.A.'],
            ['id'=> 16,'nombre' => 'CIA. MEX. SEG. DE CREDITO S.A.'],
            ['id'=> 17,'nombre' => 'CICA SEGUROS DE MEXICO S.A.'],
            ['id'=> 18,'nombre' => 'COLONIAL PENN DE MEX. S.A.'],
            ['id'=> 19,'nombre' => 'EL AGUILA S.A.'],
            ['id'=> 20,'nombre' => 'GENERAL DE SEGUROS S.A.'],
            ['id'=> 21,'nombre' => 'GEO NEW YORK LIFE S.A.'],
            ['id'=> 22,'nombre' => 'GERLING DE MEX. SEG. S.A.'],
            ['id'=> 23,'nombre' => 'GRUPO NACIONAL PROVINCIAL S.A.'],
            ['id'=> 24,'nombre' => 'ING SEG. S.A. DE C.V.'],
            ['id'=> 25,'nombre' => 'SIN INFORMACION']
            
        ]);
    }
}
