<?php

use Illuminate\Database\Seeder;

class Agrupacion1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cat_agrupacion1')->insert([

            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 1],
            ['nombre' => 'CULPOSAS', 'idCatDelito' => 1],
            ['nombre' => 'DOLOSAS', 'idCatDelito' => 1],
            ['nombre' => 'EN GRADO DE TENTATIVA', 'idCatDelito' => 1],
            ['nombre' => 'CALIFICADAS', 'idCatDelito' => 1],
            ['nombre' => 'MUTUAS', 'idCatDelito' => 1],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 2],
            ['nombre' => 'A PIPA', 'idCatDelito' => 2],
            ['nombre' => 'A TRAILER', 'idCatDelito' => 2],
            ['nombre' => 'A TAXI', 'idCatDelito' => 2],
            ['nombre' => 'A PARTICULAR', 'idCatDelito' => 2],
            ['nombre' => 'A OTROS', 'idCatDelito' => 2],
            ['nombre' => 'EN CAMINO VECINAL', 'idCatDelito' => 2],
            ['nombre' => 'EN CARRETERA', 'idCatDelito' => 2],
            ['nombre' => 'EN GRADO DE TENTATIVA', 'idCatDelito' => 2],
            ['nombre' => 'OTROS ASALTOS', 'idCatDelito' => 2],
            ['nombre' => 'A CAMION ', 'idCatDelito' => 2],
            ['nombre' => 'FAMILIAR', 'idCatDelito' => 3],
            ['nombre' => 'FISICA', 'idCatDelito' => 3],
            ['nombre' => 'PSICOLOGICA', 'idCatDelito' => 3],
            ['nombre' => 'ECONOMICA O PATRIMONIAL', 'idCatDelito' => 3],
            ['nombre' => 'OBSTETRICA', 'idCatDelito' => 3],
            ['nombre' => 'INSTITUCIONAL', 'idCatDelito' => 3],
            ['nombre' => 'LABORAL', 'idCatDelito' => 3],
            ['nombre' => 'EN EL AMBITO', 'idCatDelito' => 3],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 4],
            ['nombre' => 'DE TERRENO AGRICOLA O GANADERO', 'idCatDelito' => 4],
            ['nombre' => 'DE LOS SERVIDORES PUBLICOS ART. 284', 'idCatDelito' => 5],
            ['nombre' => 'CONTRA ', 'idCatDelito' => 5],
            ['nombre' => 'ELECTORALES', 'idCatDelito' => 5],
            ['nombre' => 'INFORMATICOS', 'idCatDelito' => 5],
            ['nombre' => 'AMBIENTALES', 'idCatDelito' => 5],
            ['nombre' => 'DE ABOGADOS, DEFENSORES Y LITIGANTES', 'idCatDelito' => 5],
            ['nombre' => 'COMETIDOS', 'idCatDelito' => 5],
            ['nombre' => 'NO CONSTITUTIVOS DE DELITO', 'idCatDelito' => 6],
            ['nombre' => 'DELICTUOSOS NO ESPECIFICADOS', 'idCatDelito' => 6],
            ['nombre' => 'SEXUAL', 'idCatDelito' => 7],
            ['nombre' => 'Y HOSTIGAMIENTO SEXUAL', 'idCatDelito' => 7],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 8],
            ['nombre' => 'DE OBJETOS A INTERIOR DE VEHICULO', 'idCatDelito' => 8],
            ['nombre' => 'A  OTROS', 'idCatDelito' => 8],
            ['nombre' => 'A BANCO', 'idCatDelito' => 8],
            ['nombre' => 'A CAMION REPARTIDOR CON VIOLENCIA', 'idCatDelito' => 8],
            ['nombre' => 'A CAMION REPARTIDOR SIN VIOLENCIA', 'idCatDelito' => 8],
            ['nombre' => 'A CASA HABITACION', 'idCatDelito' => 8],
            ['nombre' => 'A NEGOCIACIONES', 'idCatDelito' => 8],
            ['nombre' => 'A TRANSEUNTE CON VIOLENCIA', 'idCatDelito' => 8],
            ['nombre' => 'A TRANSEUNTE SIN VIOLENCIA', 'idCatDelito' => 8],
            ['nombre' => 'A TRANSEUNTES SIN VIOLENCIA ', 'idCatDelito' => 8],
            ['nombre' => 'A TRANSEUNTES CON VIOLENCIA ', 'idCatDelito' => 8],
            ['nombre' => 'DE FRUTOS', 'idCatDelito' => 8],
            ['nombre' => 'DE VEHICULO CON VIOLENCIA', 'idCatDelito' => 8],
            ['nombre' => 'DE VEHICULO SIN VIOLENCIA', 'idCatDelito' => 8],
            ['nombre' => 'EN GRADO DE TENTATIVA', 'idCatDelito' => 8],
            ['nombre' => 'CALIFICADO', 'idCatDelito' => 8],
            ['nombre' => 'DE FLUIDO', 'idCatDelito' => 8],
            ['nombre' => 'AGRAVADO', 'idCatDelito' => 8],
            ['nombre' => 'ESPECIFICO', 'idCatDelito' => 8],
            ['nombre' => 'GENERICO', 'idCatDelito' => 8],
            ['nombre' => 'DE VEHICULO', 'idCatDelito' => 8],
            ['nombre' => 'DE MAQUINARIA  (CABLES, TUBOS y OTROS OBJETOS DESTINADOS AL SERVICIO PUBLICO)', 'idCatDelito' => 8],
            ['nombre' => 'DE MAQUINARIA ', 'idCatDelito' => 8],
            ['nombre' => 'DE MAQUINARIA (TRACTORES)', 'idCatDelito' => 8],
            ['nombre' => 'DE MAQUINARIA (HERRAMIENTA INDUSTRIAL O AGRICOLA)', 'idCatDelito' => 8],
            ['nombre' => 'DE VEHICULO AUTOMOTOR (EMBARCACIONES PEQUEÑAS Y GRANDES)', 'idCatDelito' => 8],
            ['nombre' => 'DE VEHICULO AUTOMOTOR (MOTOCICLETA)', 'idCatDelito' => 8],
            ['nombre' => 'A TRANSEUNTE  EN ESPACIO ABIERTO AL PUBLICO', 'idCatDelito' => 8],
            ['nombre' => 'A TRANSPORTISTAS', 'idCatDelito' => 8],
            ['nombre' => 'DE AUTOPARTES', 'idCatDelito' => 8],
            ['nombre' => 'DE FAMILIARES', 'idCatDelito' => 9],
            ['nombre' => 'DE FUNCIONES PUBLICAS', 'idCatDelito' => 10],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 11],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 12],
            ['nombre' => 'EN GRADO DE TENTATIVA', 'idCatDelito' => 12],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 13],
            ['nombre' => 'DE CONFIANZA', 'idCatDelito' => 14],
            ['nombre' => 'EROTICO-SEXUAL', 'idCatDelito' => 14],
            ['nombre' => 'DE AUTORIDAD', 'idCatDelito' => 14],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 15],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 16],
            ['nombre' => 'DE MORADA', 'idCatDelito' => 17],
            ['nombre' => 'DE DESPACHO, OFICINA O CONSULTORIO', 'idCatDelito' => 17],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 18],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 19],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 20],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 21],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 22],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 23],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 24],
            ['nombre' => 'EN GRADO DE TENTATIVA', 'idCatDelito' => 24],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 25],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 26],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 27],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 28],
            ['nombre' => 'CULPOSOS', 'idCatDelito' => 28],
            ['nombre' => 'DOLOSOS', 'idCatDelito' => 28],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 29],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 30],
            ['nombre' => 'POR FAVORECIMIENTO', 'idCatDelito' => 31],
            ['nombre' => 'POR RECEPTACION', 'idCatDelito' => 31],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 32],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 33],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 34],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 35],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 36],
            ['nombre' => 'EN GRADO DE TENTATIVA', 'idCatDelito' => 37],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 37],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 38],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 39],
            ['nombre' => 'DE DOCUMENTOS', 'idCatDelito' => 40],
            ['nombre' => 'DE SELLOS, LLAVES, MARCAS Y CONTRASEÑAS', 'idCatDelito' => 40],
            ['nombre' => 'DE TITULOS Y CONTRA LA FE PUBLICA', 'idCatDelito' => 40],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 41],
            ['nombre' => 'DE CORRESPONDENCIA', 'idCatDelito' => 41],
            ['nombre' => 'DE LAS LEYES SOBRE INHUMACIONES Y EXHUMACIONES', 'idCatDelito' => 41],
            ['nombre' => 'EN GRADO DE TENTATIVA', 'idCatDelito' => 41],
            ['nombre' => 'ENTRE PARIENTES', 'idCatDelito' => 41],
            ['nombre' => 'POR EQUIPARACION', 'idCatDelito' => 41],
            ['nombre' => 'TUMULTUARIA', 'idCatDelito' => 41],
            ['nombre' => 'DE LA INTIMIDAD PERSONAL', 'idCatDelito' => 41],
            ['nombre' => 'ESPECIFICA', 'idCatDelito' => 41],
            ['nombre' => 'GENERICA', 'idCatDelito' => 41],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 42],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 43],
            ['nombre' => 'PROCESAL', 'idCatDelito' => 43],
            ['nombre' => 'EN GRADO DE TENTATIVA', 'idCatDelito' => 43],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 44],
            ['nombre' => 'CULPOSO', 'idCatDelito' => 44],
            ['nombre' => 'DOLOSO', 'idCatDelito' => 44],
            ['nombre' => 'EN GRADO DE TENTATIVA', 'idCatDelito' => 44],
            ['nombre' => 'POR ACCIDENTE DE TRANSITO', 'idCatDelito' => 44],
            ['nombre' => 'CALIFICADO', 'idCatDelito' => 44],
            ['nombre' => 'EN RIÑA', 'idCatDelito' => 44],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 45],
            ['nombre' => 'DE LA OBLIGACION DE DAR ALIMENTOS', 'idCatDelito' => 46],
            ['nombre' => 'DE UN DEBER LEGAL', 'idCatDelito' => 46],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 47],
            ['nombre' => 'EN GRADO DE TENTATIVA', 'idCatDelito' => 47],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 48],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 49],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 50],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 51],
            ['nombre' => 'A MENORES', 'idCatDelito' => 51],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 52],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 53],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 54],
            ['nombre' => 'A ATROPELLADOS', 'idCatDelito' => 54],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 55],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 56],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 57],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 58],
            ['nombre' => 'DE LA LIBERTAD ', 'idCatDelito' => 59],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 60],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 61],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 62],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 63],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 64],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 65],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 66],
            ['nombre' => 'EN GRADO DE TENTATIVA', 'idCatDelito' => 67],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 67],
            ['nombre' => 'EXPRESS', 'idCatDelito' => 67],
            ['nombre' => 'AGRAVADO', 'idCatDelito' => 67],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 68],
            ['nombre' => 'SIN AGRUPACION', 'idCatDelito' => 69],

        ]);
    }
}
