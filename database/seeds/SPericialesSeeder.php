<?php

use Illuminate\Database\Seeder;

class SPericialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 	    DB::table('cat_spericiales')->insert([
            ['id'=> 1,	'nombre' => 'NO ESPECIFICADO'],
			['id'=> 2,	'nombre' => 'LEVANTAMIENTO DE CADAVERES'],
			['id'=> 3,	'nombre' => 'PERICIALES DE BALISTICA'],
			['id'=> 4,	'nombre' => 'INSPECCIONES Y SECUENCIAS FOTOGRAFICAS'],
			['id'=> 5,	'nombre' => 'CAUSALIDAD DE TRANSITO TERRESTRE'],
			['id'=> 6,	'nombre' => 'IDENTIFICACION DE DETENIDOS Y CADAVERES'],
			['id'=> 7,	'nombre' => 'ANALISIS DE VOZ'],
			['id'=> 8,	'nombre' => 'ELABORACION DE RETRATOS HABLADOS'],
			['id'=> 9,	'nombre' => 'PERICIALES DE DACTILOSCOPIA'],
			['id'=> 10,	'nombre' => 'PERICIALES DE GRAFOSCOPIA'],
			['id'=> 11,	'nombre' => 'PERICIALES DE DOCUMENTOSCOPIA'],
			['id'=> 12,	'nombre' => 'LEVANTAMIENTO DE HUELLAS'],
			['id'=> 13,	'nombre' => 'GENETICA'],
			['id'=> 14,	'nombre' => 'ANTROPOLOGIA FORENSE'],
			['id'=> 15,	'nombre' => 'COMPARATIVO FOTOGRAFICO'],
			['id'=> 16,	'nombre' => 'ESTOMATOLOGÍA FORENSE'],
			['id'=> 17,	'nombre' => 'CLASIFICACION DE LESIONES'],
			['id'=> 18,	'nombre' => 'NECROCIRUGIAS'],
			['id'=> 19,	'nombre' => 'RECONOCIMIENTO DE LEY (NECROPCIA)'],
			['id'=> 20,	'nombre' => 'TOXICOMANIA'],
			['id'=> 21,	'nombre' => 'ANATOMOPATOLOGIA'],
			['id'=> 22,	'nombre' => 'EXHUMACIONES'],
			['id'=> 23,	'nombre' => 'GINECOLOGICOS'],
			['id'=> 24,	'nombre' => 'PROCTOLOGICOS'],
			['id'=> 25,	'nombre' => 'ANDROLOGICOS'],
			['id'=> 26,	'nombre' => 'CRONOTANATODIAGNOSTICO'],
			['id'=> 27,	'nombre' => 'EDAD CLINICA'],
			['id'=> 28,	'nombre' => 'SINDROME DEL NIÑO MALTRATADO'],
			['id'=> 29,	'nombre' => 'RESPONSABILIDAD MEDICA'],
			['id'=> 30,	'nombre' => 'PSICOLOGICOS'],
			['id'=> 31,	'nombre' => 'VALORACION DE OBJETOS'],
			['id'=> 32,	'nombre' => 'IDENTIFICACION DE VEHICULOS'],
			['id'=> 33,	'nombre' => 'TOPOGRAFICOS'],
			['id'=> 34,	'nombre' => 'INCENDIOS Y EXPLOSIONES'],
			['id'=> 35,	'nombre' => 'CONTABLES'],
			['id'=> 36,	'nombre' => 'ARQUITECTURA'],
			['id'=> 37,	'nombre' => 'AVALUO SEMOVIENTES'],
			['id'=> 38,	'nombre' => 'ESTENOGRAFIA'],
			['id'=> 39,	'nombre' => 'INFORMATICA'],
			['id'=> 40,	'nombre' => 'RADIOLOGIA'],
			['id'=> 41,	'nombre' => 'INGENIERIA ELECTRICA'],
			['id'=> 42,	'nombre' => 'VALUACION DE COMPUTO'],
			['id'=> 43,	'nombre' => 'VALUACIONES ARQUITECTONICOS'],
			['id'=> 44,	'nombre' => 'VALUACION DE JOYAS'],
			['id'=> 45,	'nombre' => 'AVALUOS DIVERSOS'],
			['id'=> 46,	'nombre' => 'INTERPRETE DE SEÑAS'],
			['id'=> 47,	'nombre' => 'MECANICA AUTOMOTRIZ'],
			['id'=> 48,	'nombre' => 'INTERPRETE EN LENGUA INGLESA'],
			['id'=> 49,	'nombre' => 'CRIMINOLOGIA'],
			['id'=> 50,	'nombre' => 'POLIGRAFIA'],
			['id'=> 51,	'nombre' => 'MEDIO AMBIENTE'],
			['id'=> 52,	'nombre' => 'AGRONOMIA'],
			['id'=> 53,	'nombre' => 'PERITAJES DIVERSOS'],
			['id'=> 54,	'nombre' => 'PERICIALES DE RODIZONATO DE SODIO (FORANEO)'],
			['id'=> 55,	'nombre' => 'PERICIALES DE WALKER'],
			['id'=> 56,	'nombre' => 'QUIMICO TOXICOLOGICO'],
			['id'=> 57,	'nombre' => 'MICROSCOPIA ELECTRONICA DE BARRIDO'],
			['id'=> 58,	'nombre' => 'ORGANOLEPTICOS DE DROGAS Y ENERVANTES'],
			['id'=> 59,	'nombre' => 'IDENTIFICACION DE CELULAS ESPERMATICAS'],
			['id'=> 60,	'nombre' => 'HEMATOLOGIA'],
			['id'=> 61,	'nombre' => 'IDENTIFICACION DE SUSTANCIAS QUIMICAS'],
			['id'=> 62,	'nombre' => 'COMPARATIVO DE FIBRAS Y FIBRAS PILOSAS'],
			['id'=> 63,	'nombre' => 'DOPING'],
			['id'=> 64,	'nombre' => 'IDENTIFICACION DE ETANOL'],
			['id'=> 65,	'nombre' => 'HISTOPATOLOGIA'],
			['id'=> 66,	'nombre' => 'MEDICO PSICOLOGICO PROTOCOLO DE ESTAMBUL'],
			['id'=> 67,	'nombre' => 'PERICIAL DE ALCOHOLÍMETRO'],
			['id'=> 68,	'nombre' => 'TRABAJO SOCIAL'],
			['id'=> 70,	'nombre' => 'VERIFICAR HECHOS DELICTIVOS DE VEHICULOS'],
			['id'=> 71,	'nombre' => 'INSPECCION OCULTAR DEL LUGAR DEL HECHO DELICTIVO'],
			['id'=> 72,	'nombre' => 'UBICACION E IDENTIFICACION DE PROBABLES RESPONSABLES'],
			['id'=> 73,	'nombre' => 'UBICACION DE TESTIGOS Y DATOS PARA ESTABLECER EL HECHJO DELICTIVO'],
			['id'=> 74,	'nombre' => 'INFORME DELICTIVO'],
			['id'=> 75,	'nombre' => 'MEDIDAS DE PROTECCION'],
			['id'=> 76,	'nombre' => 'MEDIDAS DE PROTECCION CIRCUITO DE CAMARA DE VIGILANCIA'],
			['id'=> 77,	'nombre' => 'IDENTIFICACION DE POLICIA POR ABUSO DE AUTORIDAD']

           
        ]);
    }
}
