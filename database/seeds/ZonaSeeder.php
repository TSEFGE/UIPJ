<?php

use Illuminate\Database\Seeder;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('cat_zona')->insert([
	        [ 'id' => 1, 'nombre' => 'URBANA'],
	        [ 'id' => 2, 'nombre' => 'RURAL'],
	        [ 'id' => 3, 'nombre' => 'CAMINO VECINAL'],
	        [ 'id' => 4, 'nombre' => 'CARRETERA']
	    ]);
    }
}
