<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_color')->insert([
            ['id'=>  1,'nombre' => 'ROJO CLARO'],
            ['id'=>  2,'nombre' => 'ROJO CLARO METALICO'],
            ['id'=>  3,'nombre' => 'ROJO MEDIO'],
            ['id'=>  4,'nombre' => 'ROJO MEDIO METALICO'],
            ['id'=>  5,'nombre' => 'ROJO OBSCURO'],
            ['id'=>  6,'nombre' => 'ROJO OBSCURO METALICO'],
            ['id'=>  7,'nombre' => 'AZUL CLARO'],
            ['id'=>  8,'nombre' => 'AZUL CLARO METALICO'],
            ['id'=>  9,'nombre' => 'AZUL MEDIO'],
            ['id'=> 10,'nombre' => 'AZUL MEDIO METALICO'],
            ['id'=> 11,'nombre' => 'AZUL OBSCURO'],
            ['id'=> 12,'nombre' => 'AZUL OBSCURO METALICO'],
            ['id'=> 13,'nombre' => 'BEIGE/CREMA CLARO'],
            ['id'=> 14,'nombre' => 'BEIGE/CREMA CLARO METALICO'],
            ['id'=> 15,'nombre' => 'BEIGE/CREMA MEDIO'],
            ['id'=> 16,'nombre' => 'BEIGE/CREMA MEDIO METALICO'],
            ['id'=> 17,'nombre' => 'BEIGE/CREMA OBSCURO'],
            ['id'=> 18,'nombre' => 'BEIGE/CREMA OBSCURO METALICO'],
            ['id'=> 19,'nombre' => 'AMARILLO CLARO'],
            ['id'=> 20,'nombre' => 'AMARILLO CLARO METALICO'],
            ['id'=> 21,'nombre' => 'AMARILLO MEDIO'],
            ['id'=> 22,'nombre' => 'AMARILLO MEDIO METALICO'],
            ['id'=> 23,'nombre' => 'AMARILLO OBSCURO'],
            ['id'=> 24,'nombre' => 'AMARILLO OBSCURO METALICO'],
            ['id'=> 25,'nombre' => 'SIN INFORMACION']
        ]);
    }
}
