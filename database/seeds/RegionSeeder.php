<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('region')->insert([

            ['id' => 1, 'region' => 'Tantoyuca'],
            ['id' => 2, 'region' => 'Poza Rica'],
            ['id' => 3, 'region' => 'Xalapa'],
            ['id' => 4, 'region' => 'Cordoba'],
            ['id' => 5, 'region' => 'Veracruz'],
            ['id' => 6, 'region' => 'Cosamaloapan'],
            ['id' => 7, 'region' => 'Coatzacoalcos'],
        ]);
    }
}
