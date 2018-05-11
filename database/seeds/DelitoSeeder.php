<?php

use Illuminate\Database\Seeder;

class DelitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    ////BASADO EN EL SISTEMA NACIONAL
    public function run()
    {
        DB::table('cat_delito')->insert([

            ['id' => 1, 'nombre' => 'LESIONES'],
            ['id' => 2, 'nombre' => 'ASALTO'],
            ['id' => 3, 'nombre' => 'VIOLENCIA'],
            ['id' => 4, 'nombre' => 'DESPOJO'],
            ['id' => 5, 'nombre' => 'DELITOS'],
            ['id' => 6, 'nombre' => 'HECHOS'],
            ['id' => 7, 'nombre' => 'ACOSO'],
            ['id' => 8, 'nombre' => 'ROBO'],
            ['id' => 9, 'nombre' => 'ABANDONO'],
            ['id' => 10, 'nombre' => 'EJERCICIO INDEBIDO O ABANDONO'],
            ['id' => 11, 'nombre' => 'INMERSION'],
            ['id' => 12, 'nombre' => 'ABIGEATO'],
            ['id' => 13, 'nombre' => 'ABORTO'],
            ['id' => 14, 'nombre' => 'ABUSO'],
            ['id' => 15, 'nombre' => 'ABUSOS DESHONESTOS'],
            ['id' => 16, 'nombre' => 'ADMINISTRACION FRAUDULENTA'],
            ['id' => 17, 'nombre' => 'ALLANAMIENTO'],
            ['id' => 18, 'nombre' => 'AMENAZAS'],
            ['id' => 19, 'nombre' => 'COACCION Y AMENAZAS'],
            ['id' => 20, 'nombre' => 'ATAQUES A LA LIBERTAD DE REUNION Y EXPRESION'],
            ['id' => 21, 'nombre' => 'BIGAMIA'],
            ['id' => 22, 'nombre' => 'CALUMNIAS'],
            ['id' => 23, 'nombre' => 'COALICION'],
            ['id' => 24, 'nombre' => 'COHECHO'],
            ['id' => 25, 'nombre' => 'CONGESTION ETILICA'],
            ['id' => 26, 'nombre' => 'CONSPIRACION'],
            ['id' => 27, 'nombre' => 'CORRUPCION DE MENORES O INCAPACES'],
            ['id' => 28, 'nombre' => 'DAÑOS'],
            ['id' => 29, 'nombre' => 'DESAPARICION DE PERSONAS'],
            ['id' => 30, 'nombre' => 'DESOBEDIENCIA Y RESISTENCIA DE PARTICULARES'],
            ['id' => 31, 'nombre' => 'ENCUBRIMIENTO'],
            ['id' => 32, 'nombre' => 'ENRIQUECIMIENTO ILICITO'],
            ['id' => 33, 'nombre' => 'ESTRAGOS'],
            ['id' => 34, 'nombre' => 'ESTUPRO'],
            ['id' => 35, 'nombre' => 'EVASION DE PRESOS'],
            ['id' => 36, 'nombre' => 'EXACCION ILEGAL'],
            ['id' => 37, 'nombre' => 'EXTORSION'],
            ['id' => 38, 'nombre' => 'FALSAS DENUNCIAS Y SIMULACION DE PRUEBAS'],
            ['id' => 39, 'nombre' => 'FALSEDAD ANTE LA AUTORIDAD'],
            ['id' => 40, 'nombre' => 'FALSIFICACION'],
            ['id' => 41, 'nombre' => 'VIOLACION'],
            ['id' => 42, 'nombre' => 'FRACCIONAMIENTO INDEBIDO'],
            ['id' => 43, 'nombre' => 'FRAUDE'],
            ['id' => 44, 'nombre' => 'HOMICIDIO'],
            ['id' => 45, 'nombre' => 'INCESTO'],
            ['id' => 46, 'nombre' => 'INCUMPLIMIENTO'],
            ['id' => 47, 'nombre' => 'INDUCCION O AYUDA AL SUICIDIO'],
            ['id' => 48, 'nombre' => 'INDUCCION A LA MENDICIDAD'],
            ['id' => 49, 'nombre' => 'INTIMIDACION'],
            ['id' => 50, 'nombre' => 'LENOCINIO Y TRATA DE PERSONAS'],
            ['id' => 51, 'nombre' => 'MALTRATO'],
            ['id' => 52, 'nombre' => 'MATRIMONIOS ILEGALES'],
            ['id' => 53, 'nombre' => 'MOTIN'],
            ['id' => 54, 'nombre' => 'OMISION DE AUXILIO'],
            ['id' => 55, 'nombre' => 'OMISION DE CUIDADO'],
            ['id' => 56, 'nombre' => 'OTRAS MUERTES NO DELICTIVAS'],
            ['id' => 57, 'nombre' => 'PECULADO'],
            ['id' => 58, 'nombre' => 'PELIGRO DE CONTAGIO'],
            ['id' => 59, 'nombre' => 'PRIVACION'],
            ['id' => 60, 'nombre' => 'INCITACION A COMETER UN DELITO APOLOGIA DE ESTE O DE ALGUN VICIO'],
            ['id' => 61, 'nombre' => 'QUEBRANTAMIENTO DE LA SANCION DE PRIVACION, SUSPENSION O INHABILITACION DE DERECHOS'],
            ['id' => 62, 'nombre' => 'QUEBRANTAMIENTO DE SELLOS'],
            ['id' => 63, 'nombre' => 'REBELION'],
            ['id' => 64, 'nombre' => 'REVELACION DE SECRETOS'],
            ['id' => 65, 'nombre' => 'REVELACION DE INFORMACION RESERVADA'],
            ['id' => 66, 'nombre' => 'SABOTAJE'],
            ['id' => 67, 'nombre' => 'SECUESTRO'],
            ['id' => 68, 'nombre' => 'SIMULACION AL SECUESTRO'],
            ['id' => 69, 'nombre' => 'EQUIPARACION AL SECUESTRO'],

        ]);
    }
}
