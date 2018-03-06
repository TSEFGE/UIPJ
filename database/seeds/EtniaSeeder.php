<?php

use Illuminate\Database\Seeder;

class EtniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_etnia')->insert([
        	['id' => 13,'nombre' => 'SIN INFORMACION'],
            ['id' => 1,'nombre' => 'NO APLICA'],
            ['id' => 2,'nombre' => 'TOTONACO'],
            ['id' => 3,'nombre' => 'HUASTECO'],
            ['id' => 4,'nombre' => 'POPOLUCA'],
            ['id' => 5,'nombre' => 'ZAPOTECO'],
            ['id' => 6,'nombre' => 'CHINANTECO'],
            ['id' => 7,'nombre' => 'OTOMI'],
            ['id' => 8,'nombre' => 'MAZATECO'],
            ['id' => 9,'nombre' => 'TEPEHUA'],
            ['id' => 10,'nombre' => 'MIXTECO'],
            ['id' => 11,'nombre' => 'ZOQUE'],
            ['id' => 12,'nombre' => 'MIXE']
        ]);
    }
}
