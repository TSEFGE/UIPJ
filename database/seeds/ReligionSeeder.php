<?php

use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_religion')->insert([
        	[ 'id' => 29, 'nombre' => 'SIN INFORMACION'],
            [ 'id' => 1, 'nombre' => 'CATOLICA'],
            [ 'id' => 2, 'nombre' => 'ATEA'],
            [ 'id' => 3, 'nombre' => 'MORMONA'],
            [ 'id' => 4, 'nombre' => 'BAUTISTA'],
            [ 'id' => 5, 'nombre' => 'BRAHMANISTA'],
            [ 'id' => 6, 'nombre' => 'BUDISTA'],
            [ 'id' => 7, 'nombre' => 'CRISLAM'],
            [ 'id' => 8, 'nombre' => 'CRISTIANA'],
            [ 'id' => 9, 'nombre' => 'EVANGELISTA'],
            [ 'id' => 10, 'nombre' => 'HINDUISTA'],
            [ 'id' => 11, 'nombre' => 'ISLAMICA'],
            [ 'id' => 12, 'nombre' => 'JUDAICA'],
            [ 'id' => 13, 'nombre' => 'LUTERANA'],
            [ 'id' => 14, 'nombre' => 'LUZ DEL MUNDO'],
            [ 'id' => 15, 'nombre' => 'MAZDEISTA'],
            [ 'id' => 16, 'nombre' => 'METODISTA'],
            [ 'id' => 17, 'nombre' => 'MUSULMANA'],
            [ 'id' => 18, 'nombre' => 'ORTODOXA GRIEGA|'],
            [ 'id' => 19, 'nombre' => 'ORTODOXA RUSA'],
            [ 'id' => 20, 'nombre' => 'OTRA RELIGION'],
            [ 'id' => 21, 'nombre' => 'PAOISTA'],
            [ 'id' => 22, 'nombre' => 'PENTECOSTESA'],
            [ 'id' => 23, 'nombre' => 'PRESBITERIANA'],
            [ 'id' => 24, 'nombre' => 'PROTESTANTE'],
            [ 'id' => 25, 'nombre' => 'SIN RELIGION|'],
            [ 'id' => 26, 'nombre' => 'SINTOISTA'],
            [ 'id' => 27, 'nombre' => 'TESTIGOS DE JEHOVA'],
            [ 'id' => 28, 'nombre' => 'SE DESCONOCE']
        ]);
    }
}
