<?php

use Illuminate\Database\Seeder;

class DistritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distrito')->insert([

            ['id' => 1, 'idRegion' => 1, 'distrito' => 'I'],
            ['id' => 2, 'idRegion' => 1, 'distrito' => 'II'],
            ['id' => 3, 'idRegion' => 1, 'distrito' => 'III'],
            ['id' => 4, 'idRegion' => 1, 'distrito' => 'IV'],
            ['id' => 5, 'idRegion' => 1, 'distrito' => 'V'],
            ['id' => 6, 'idRegion' => 2, 'distrito' => 'VI'],
            ['id' => 7, 'idRegion' => 2, 'distrito' => 'VII'],
            ['id' => 8, 'idRegion' => 2, 'distrito' => 'VIII'],
            ['id' => 9, 'idRegion' => 3, 'distrito' => 'IX'],
            ['id' => 10, 'idRegion' => 3, 'distrito' => 'X'],
            ['id' => 11, 'idRegion' => 3, 'distrito' => 'XI'],
            ['id' => 12, 'idRegion' => 3, 'distrito' => 'XII'],
            ['id' => 13, 'idRegion' => 4, 'distrito' => 'XIII'],
            ['id' => 14, 'idRegion' => 4, 'distrito' => 'XIV'],
            ['id' => 15, 'idRegion' => 4, 'distrito' => 'XV'],
            ['id' => 16, 'idRegion' => 4, 'distrito' => 'XVI'],
            ['id' => 17, 'idRegion' => 5, 'distrito' => 'XVII'],
            ['id' => 18, 'idRegion' => 6, 'distrito' => 'XVIII'],
            ['id' => 19, 'idRegion' => 6, 'distrito' => 'XIX'],
            ['id' => 20, 'idRegion' => 7, 'distrito' => 'XX'],
            ['id' => 21, 'idRegion' => 7, 'distrito' => 'XXI'],
        ]);
    }
}
