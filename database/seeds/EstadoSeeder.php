<?php

use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //BASADO EN EL SISTEMA NACIONAL
    public function run()
    {
        DB::table('cat_estado')->insert([
        	['id' => 1, 'nombre' => 'AGUASCALIENTES', 'abreviatura' => 'AGS.'],
            ['id' => 2, 'nombre' => 'BAJA CALIFORNIA', 'abreviatura' => 'BC'],
            ['id' => 3, 'nombre' => 'BAJA CALIFORNIA SUR', 'abreviatura' => 'BCS'],
            ['id' => 4, 'nombre' => 'CAMPECHE', 'abreviatura' => 'CAMP.'],
            ['id' => 5, 'nombre' => 'COAHUILA DE ZARAGOZA', 'abreviatura' => 'COAH.'],
            ['id' => 6, 'nombre' => 'COLIMA', 'abreviatura' => 'COL.'],
            ['id' => 7, 'nombre' => 'CHIAPAS', 'abreviatura' => 'CHIS.'],
            ['id' => 8, 'nombre' => 'CHIHUAHUA', 'abreviatura' => 'CHIH.'],
            ['id' => 9, 'nombre' => 'CIUDAD DE MEXICO', 'abreviatura' => 'CDMX'],
            ['id' => 10, 'nombre' => 'DURANGO', 'abreviatura' => 'DGO.'],
            ['id' => 11, 'nombre' => 'GUANAJUATO', 'abreviatura' => 'GTO.'],
            ['id' => 12, 'nombre' => 'GUERRERO', 'abreviatura' => 'GRO.'],
            ['id' => 13, 'nombre' => 'HIDALGO', 'abreviatura' => 'HGO.'],
            ['id' => 14, 'nombre' => 'JALISCO', 'abreviatura' => 'JAL.'],
            ['id' => 15, 'nombre' => 'MEXICO', 'abreviatura' => 'MEX.'],
            ['id' => 16, 'nombre' => 'MICHOACAN DE OCAMPO', 'abreviatura' => 'MICH.'],
            ['id' => 17, 'nombre' => 'MORELOS', 'abreviatura' => 'MOR.'],
            ['id' => 18, 'nombre' => 'NAYARIT', 'abreviatura' => 'NAY.'],
            ['id' => 19, 'nombre' => 'NUEVO LEON', 'abreviatura' => 'NL'],
            ['id' => 20, 'nombre' => 'OAXACA', 'abreviatura' => 'OAX.'],
            ['id' => 21, 'nombre' => 'PUEBLA', 'abreviatura' => 'PUE.'],
            ['id' => 22, 'nombre' => 'QUERETARO', 'abreviatura' => 'QRO.'],
            ['id' => 23, 'nombre' => 'QUINTANA ROO', 'abreviatura' => 'Q. ROO'],
            ['id' => 24, 'nombre' => 'SAN LUIS POTOSI', 'abreviatura' => 'SLP'],
            ['id' => 25, 'nombre' => 'SINALOA', 'abreviatura' => 'SIN.'],
            ['id' => 26, 'nombre' => 'SONORA', 'abreviatura' => 'SON.'],
            ['id' => 27, 'nombre' => 'TABASCO', 'abreviatura' => 'TAB.'],
            ['id' => 28, 'nombre' => 'TAMAULIPAS', 'abreviatura' => 'TAMPS.'],
            ['id' => 29, 'nombre' => 'TLAXCALA', 'abreviatura' => 'TLAX.'],
            ['id' => 30, 'nombre' => 'VERACRUZ DE IGNACIO DE LA LLAVE', 'abreviatura' => 'VER.'],
            ['id' => 31, 'nombre' => 'YUCATAN', 'abreviatura' => 'YUC.'],
            ['id' => 32, 'nombre' => 'ZACATECAS', 'abreviatura' => 'ZAC.'],
            ['id' => 33, 'nombre' => 'SIN INFORMACION', 'abreviatura' => 'S/I']
        ]);
    }
}
