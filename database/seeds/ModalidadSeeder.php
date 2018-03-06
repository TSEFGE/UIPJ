<?php

use Illuminate\Database\Seeder;

class ModalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_modalidad')->insert([
        	['id' => 1,'nombre' => 'AUTORIA'],
            ['id' => 2,'nombre' => 'PARTICIPE']
        ]);
    }
}
