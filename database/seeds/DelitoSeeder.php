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

            ['id' =>1,'nombre' => 'LESIONES'],
            ['id' =>2,'nombre' => 'ASALTO'],
            ['id' =>3,'nombre' => 'VIOLENCIA'],
            ['id' =>4,'nombre' => 'DESPOJO'],
            ['id' =>6,'nombre' => 'DELITOS'],
            ['id' =>7,'nombre' => 'HECHOS'],
            ['id' =>8,'nombre' => 'INMERSION'],
            ['id' =>9,'nombre' => 'ACOSO SEXUAL'],
            ['id' =>10,'nombre' => 'ROBO'],
            ['id' =>11,'nombre' => 'ABANDONO'],
            ['id' =>12,'nombre' => 'ABIGEATO'],
            ['id' =>13,'nombre' => 'ABORTO'],
            ['id' =>14,'nombre' => 'ABUSO'], 
            ['id' =>15,'nombre' => 'ADMINISTRACION FRAUDULENTA'],
            ['id' =>16,'nombre' => 'ALLANAMIENTO'],
            ['id' =>17,'nombre' => 'AMENAZAS'],
            ['id' =>18,'nombre' => 'ATAQUES A LA LIBERTAD DE REUNION Y EXPRESION'],
            ['id' =>19,'nombre' => 'BIGAMIA'],
            ['id' =>20,'nombre' => 'CALUMNIAS'],
            ['id' =>21,'nombre' => 'COACCION Y AMENAZAS'],
            ['id' =>22,'nombre' => 'COALICION'],
            ['id' =>23,'nombre' => 'COHECHO'],         
            ['id' =>24,'nombre' => 'CONGESTION ETILICA'],
            ['id' =>25,'nombre' => 'CONSPIRACION'],
            ['id' =>26,'nombre' => 'CORRUPCION'],
            ['id' =>27,'nombre' => 'DAÑOS'],    
            ['id' =>28,'nombre' => 'DESAPARICION DE PERSONAS'],
            ['id' =>29,'nombre' => 'DESOBEDIENCIA Y RESISTENCIA DE PARTICULARES'],
            ['id' =>30,'nombre' => 'EJERCICIO INDEBIDO O ABANDONO DE FUNCIONES PUBLICAS'],
            ['id' =>31,'nombre' => 'ENCUBRIMIENTO'],
            ['id' =>32,'nombre' => 'ENRIQUECIMIENTO ILICITO'],
            ['id' =>33,'nombre' => 'ESTRAGOS'],
            ['id' =>34,'nombre' => 'ESTUPRO'],
            ['id' =>35,'nombre' => 'EVASION DE PRESOS'],
            ['id' =>36,'nombre' => 'EXACCION ILEGAL'],
            ['id' =>37,'nombre' => 'EXTORSION'],
            ['id' =>38,'nombre' => 'FALSAS DENUNCIAS Y SIMULACION DE PRUEBAS'],
            ['id' =>39,'nombre' => 'FALSEDAD ANTE LA AUTORIDAD'],
            ['id' =>40,'nombre' => 'FALSIFICACION'],        
            ['id' =>41,'nombre' => 'FRACCIONAMIENTO INDEBIDO'],
            ['id' =>42,'nombre' => 'FRAUDE'],    
            ['id' =>43,'nombre' => 'HOMICIDIO'],
            ['id' =>44,'nombre' => 'INCUMPLIMIENTO'],
            ['id' =>45,'nombre' => 'INDUCCION'],
            ['id' =>46,'nombre' => 'INTIMIDACION'],
            ['id' =>47,'nombre' => 'LENOCINIO Y TRATA DE PERSONAS'],
            ['id' =>48,'nombre' => 'MALTRATO'],
            ['id' =>49,'nombre' => 'MATRIMONIOS ILEGALES'],
            ['id' =>50,'nombre' => 'MOTIN'],
            ['id' =>51,'nombre' => 'OMISION'],
            ['id' =>52,'nombre' => 'OTRAS MUERTES NO DELICTIVAS'],
            ['id' =>53,'nombre' => 'OTROS ASALTOS'],
            ['id' =>54,'nombre' => 'PECULADO'],
            ['id' =>55,'nombre' => 'PELIGRO DE CONTAGIO'],
            ['id' =>56,'nombre' => 'PRIVACION'],
            ['id' =>57,'nombre' => 'INCITACION'],
            ['id' =>58,'nombre' => 'QUEBRANTAMIENTO'],
            ['id' =>59,'nombre' => 'REBELION'],
            ['id' =>60,'nombre' => 'REVELACION'],
            ['id' =>61,'nombre' => 'SABOTAJE'],
            ['id' =>62,'nombre' => 'SECUESTRO'],
            ['id' =>63,'nombre' => 'SEDICION'],
            ['id' =>64,'nombre' => 'SUICIDIO EN GRADO DE TENTATIVA'],
            ['id' =>65,'nombre' => 'SUMERSION'],
            ['id' =>66,'nombre' => 'SUSTRACCION '],
            ['id' =>67,'nombre' => 'TERRORISMO'],
            ['id' =>68,'nombre' => 'TRAFICO'],
            ['id' =>69,'nombre' => 'ULTRAJES'],
            ['id' =>70,'nombre' => 'USO DE DOCUMENTO FALSO'],
            ['id' =>71,'nombre' => 'USURA'],
            ['id' =>72,'nombre' => 'USURPACION'],
            ['id' =>73,'nombre' => 'VARIACION DE NOMBRE O DOMICILIO'],
            ['id' =>74,'nombre' => 'VEHICULO PUESTO A DISPOSICION DEL MINISTERIO PUBLICO'],
            ['id' =>75,'nombre' => 'VENTA O PROMESA DE VENTA INDEBIDA'],
            ['id' =>76,'nombre' => 'VIOLACION'],   
            ['id' =>77,'nombre' => 'EXPOSICION DE MENORES E INCAPACES'],
            ['id' =>78,'nombre' => 'MANIPULACION GENETICA'],
            ['id' =>79,'nombre' => 'DISCRIMINACION'],
            ['id' =>80,'nombre' => 'RETENCION INDEBIDA DE COSA MUEBLE'],
            ['id' =>81,'nombre' => 'INSOLVENCIA FRAUDULENTA EN PERJUICIO DE ACREEDORES'],
            ['id' =>82,'nombre' => 'OPERACIONES CON RECURSOS DE PROCEDENCIA ILICITA'],
            ['id' =>83,'nombre' => 'PEDERASTIA'],
            ['id' =>84,'nombre' => 'ESPIONAJE'],
            ['id' =>85,'nombre' => 'FEMINICIDIO'],
            ['id' =>86,'nombre' => 'EQUIPARACION AL SECUESTRO'],
            ['id' =>87,'nombre' => 'SIMULACION AL SECUESTRO'],
            ['id' =>88,'nombre' => 'TRATA DE PERSONAS'],
            ['id' =>89,'nombre' => 'NARCOMENUDEO'],
            ['id' =>90,'nombre' => 'GRAFITI ILEGAL'],
            ['id' =>91,'nombre' => 'ESTERILIDAD FORZADA'],
            ['id' =>92,'nombre' => 'MOVILIZACION DE SERVICIOS DE EMERGENCIA'],
            ['id' =>93,'nombre' => 'PERTURBACION DEL ORDEN PUBLICO'],
          //  ['id' =>94,'nombre' => 'DESAPARCION FORZADA DE PERSONAS'],
            ['id' =>94,'nombre' => 'PORNOGRAFIA'],
            ['id' =>95,'nombre' => 'ACOSO Y HOSTIGAMIENTO SEXUAL'],
            ['id' =>96,'nombre' => 'TORTURA']



        ]);
    }
}
