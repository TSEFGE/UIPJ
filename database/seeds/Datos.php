<?php

use Illuminate\Database\Seeder;

class Datos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       // users
       // carpeta
       // persona
       // domicilio
       // notificacion
       // variables_persona
       //  extra_abogado
       //  extra_denunciante
       //  extra_denunciado
       //  extra_autoridad
       //  extra_testigo
       //  bitacora
       //  familiar
       //  tipif_delito
       //  vehiculo
       //  acusacion

       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idUnidad" => "17",
               "username" => "uipj",
               "nombres" => "UIPJ",
               "apellidos" => "Test",
               "email" => "uipj@fiscaliaveracruz.gob.mx",
               "password" => "\$2y\$10\$Ch3CzT6wLv3RNq6NgVMoJ.YRdCI8WLoGvJfFblRRfG.MdnADvXo2S",
               "numFiscal" => "22",
               "nivel" => "1",
               "tokenSession" => "dp8HWxwKpeBQOSrrsMRyNIcKcER0I2AYarPM0uxX",
               "remember_token" => "04g80GFIeFX5dLchMXM7PSrP7itMtIgs3uZMQUGGVmLLrH5Nab1ogNtUm6ax",
               "deleted_at" => ""
           ]
       ];


       foreach($entries as $entry){
           DB::table('users')->insert($entry);
       }
       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idUnidad" => "17",
               "idFiscal" => "1",
               "numCarpeta" => "UIPJ/DXVII/VER1/22/1/2018",
               "fechaInicio" => "2018-04-12",
               "conDetenido" => "0",
               "esRelevante" => "1",
               "estadoCarpeta" => "INICIO",
               "horaIntervencion" => "",
               "descripcionHechos" => "ESTA ES UNA DESCRIPCION",
               "npd" => "SIN INFORMACION",
               "numIph" => "SIN INFORMACION",
               "fechaIph" => "",
               "narracionIph" => "SIN INFORMACION",
               "idTipoDeterminacion" => "5",
               "fechaDeterminacion" => "",
               "deleted_at" => ""
           ]
       ];


       foreach($entries as $entry){
           DB::table('carpeta')->insert($entry);
       }
       $entries =
       [
           [
               "id" => "3",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "nombres" => "COMPAÑIA",
               "primerAp" => "",
               "segundoAp" => "",
               "fechaNacimiento" => "1900-01-01 00:00:00",
               "rfc" => "ORE180404UKA",
               "curp" => null,
               "sexo" => "SIN INFORMACION",
               "idNacionalidad" => "132",
               "idEtnia" => "13",
               "idLengua" => "69",
               "idMunicipioOrigen" => "2496",
               "esEmpresa" => "1",
               "deleted_at" => ""
           ],
           [
               "id" => "4",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "nombres" => "QUIEN RESULTE RESPONSABLE",
               "primerAp" => "",
               "segundoAp" => "",
               "fechaNacimiento" => "1900-01-01 00:00:00",
               "rfc" => "AAAA000101",
               "curp" => null,
               "sexo" => "SIN INFORMACION",
               "idNacionalidad" => "132",
               "idEtnia" => "13",
               "idLengua" => "69",
               "idMunicipioOrigen" => "2496",
               "esEmpresa" => "0",
               "deleted_at" => ""
           ],
           [
               "id" => "5",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "nombres" => "JAU",
               "primerAp" => "NSNOE",
               "segundoAp" => "SNWOW",
               "fechaNacimiento" => "2002-04-12 00:00:00",
               "rfc" => "NOSJ020412DZ4",
               "curp" => "NOSJ020412HVZSNXA9",
               "sexo" => "HOMBRE",
               "idNacionalidad" => "1",
               "idEtnia" => "1",
               "idLengua" => "70",
               "idMunicipioOrigen" => "2174",
               "esEmpresa" => "0",
               "deleted_at" => ""
           ],
           [
               "id" => "6",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "nombres" => "JUANITO",
               "primerAp" => "LOPEZ",
               "segundoAp" => "PEREZ",
               "fechaNacimiento" => "2002-04-12 00:00:00",
               "rfc" => "GUSJ020412CH9",
               "curp" => "GUSJ020412MVZTNJA3",
               "sexo" => "MUJER",
               "idNacionalidad" => "1",
               "idEtnia" => "1",
               "idLengua" => "70",
               "idMunicipioOrigen" => "2174",
               "esEmpresa" => "0",
               "deleted_at" => ""
           ],
           [
               "id" => "7",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "nombres" => "WALTER",
               "primerAp" => "WHITE",
               "segundoAp" => "",
               "fechaNacimiento" => "1999-04-12 00:00:00",
               "rfc" => "WHWA0204127M7",
               "curp" => "WIXW990412MVZHXL06",
               "sexo" => "MUJER",
               "idNacionalidad" => "1",
               "idEtnia" => "1",
               "idLengua" => "70",
               "idMunicipioOrigen" => "2174",
               "esEmpresa" => "0",
               "deleted_at" => ""
           ],
           [
               "id" => "8",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "nombres" => "FERNANDO",
               "primerAp" => "PEREZ",
               "segundoAp" => "HERNANDEZ",
               "fechaNacimiento" => "2002-04-12 00:00:00",
               "rfc" => "PEHF020412NH2",
               "curp" => "PEHF020412HVZRRRA7",
               "sexo" => "HOMBRE",
               "idNacionalidad" => "1",
               "idEtnia" => "13",
               "idLengua" => "69",
               "idMunicipioOrigen" => "2174",
               "esEmpresa" => "0",
               "deleted_at" => ""
           ],
           [
               "id" => "9",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "nombres" => "CAROLINA",
               "primerAp" => "PEÑA",
               "segundoAp" => "",
               "fechaNacimiento" => "2002-04-12 00:00:00",
               "rfc" => "PECA020412273",
               "curp" => "PEXC020412MVZXXRA6",
               "sexo" => "MUJER",
               "idNacionalidad" => "1",
               "idEtnia" => "13",
               "idLengua" => "69",
               "idMunicipioOrigen" => "2174",
               "esEmpresa" => "0",
               "deleted_at" => ""
           ],
           [
               "id" => "10",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "nombres" => "CAROLINA",
               "primerAp" => "TORRES",
               "segundoAp" => "TORRES",
               "fechaNacimiento" => "2002-04-12 00:00:00",
               "rfc" => "TOTC020412HP2",
               "curp" => "TOTC020412MVZRRRA5",
               "sexo" => "MUJER",
               "idNacionalidad" => "1",
               "idEtnia" => "13",
               "idLengua" => "69",
               "idMunicipioOrigen" => "2174",
               "esEmpresa" => "0",
               "deleted_at" => ""
           ],
           [
               "id" => "11",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "nombres" => "ENRIQUERE",
               "primerAp" => "HAWLET",
               "segundoAp" => "",
               "fechaNacimiento" => "1900-01-01 00:00:00",
               "rfc" => "SIN INFORMACION",
               "curp" => null,
               "sexo" => "SIN INFORMACION",
               "idNacionalidad" => "132",
               "idEtnia" => "13",
               "idLengua" => "69",
               "idMunicipioOrigen" => "2496",
               "esEmpresa" => "0",
               "deleted_at" => ""
           ],
           [
               "id" => "12",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "nombres" => "HP",
               "primerAp" => "",
               "segundoAp" => "",
               "fechaNacimiento" => "1900-01-01 00:00:00",
               "rfc" => "HPX180412FN6",
               "curp" => null,
               "sexo" => "SIN INFORMACION",
               "idNacionalidad" => "132",
               "idEtnia" => "13",
               "idLengua" => "69",
               "idMunicipioOrigen" => "2496",
               "esEmpresa" => "1",
               "deleted_at" => ""
           ],
           [
               "id" => "13",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "nombres" => "MARK",
               "primerAp" => "SUCKEMBERG",
               "segundoAp" => "SERVE",
               "fechaNacimiento" => "1963-05-10 00:00:00",
               "rfc" => "SUSM630510961",
               "curp" => "LOGL000312HPLPLSA0",
               "sexo" => "HOMBRE",
               "idNacionalidad" => "1",
               "idEtnia" => "1",
               "idLengua" => "70",
               "idMunicipioOrigen" => "2174",
               "esEmpresa" => "0",
               "deleted_at" => ""
           ]
       ];
       foreach($entries as $entry){
           DB::table('persona')->insert($entry);
       }
       $entries =
       [
           [
               "id" => "2",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40175",
               "calle" => "SUE",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "3",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40175",
               "calle" => "SUE",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "4",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2496",
               "idLocalidad" => "108971",
               "idColonia" => "49172",
               "calle" => "SIN INFORMACION",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "5",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2496",
               "idLocalidad" => "108971",
               "idColonia" => "49172",
               "calle" => "SIN INFORMACION",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "6",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2496",
               "idLocalidad" => "108971",
               "idColonia" => "49172",
               "calle" => "SIN INFORMACION",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "7",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40047",
               "calle" => "SUR",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "8",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40047",
               "calle" => "SUR",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "9",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40047",
               "calle" => "SUR",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "10",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40047",
               "calle" => "SUR",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "11",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40302",
               "calle" => "SUR",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "12",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40047",
               "calle" => "SUR",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "13",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40030",
               "calle" => "SUR",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "14",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40201",
               "calle" => "ESTE",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "15",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40122",
               "calle" => "ESTE",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "16",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2281",
               "idLocalidad" => "106940",
               "idColonia" => "40528",
               "calle" => "ESTE",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "17",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40047",
               "calle" => "SUR",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "18",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40347",
               "calle" => "SIN INFORMACION",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "19",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2496",
               "idLocalidad" => "108971",
               "idColonia" => "49172",
               "calle" => "SIN INFORMACION",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "20",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2496",
               "idLocalidad" => "108971",
               "idColonia" => "49172",
               "calle" => "SIN INFORMACION",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "21",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40201",
               "calle" => "ESTE",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "22",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40201",
               "calle" => "ESTE",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "23",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40154",
               "calle" => "ESTE 3",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "24",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40155",
               "calle" => "NMORETESTE",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ],
           [
               "id" => "25",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idMunicipio" => "2174",
               "idLocalidad" => "90515",
               "idColonia" => "40154",
               "calle" => "ESTE 3",
               "numExterno" => "S/N",
               "numInterno" => "S/N",
               "deleted_at" => ""
           ]
       ];
       foreach($entries as $entry){
           DB::table('domicilio')->insert($entry);
       }

       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idDomicilio" => "3",
               "correo" => "sin@informacion.com",
               "telefono" => "213123123123",
               "fax" => "SIN INFORMACION",
               "deleted_at" => ""
           ],
           [
               "id" => "2",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idDomicilio" => "6",
               "correo" => "SIN INFORMACION",
               "telefono" => "SIN INFORMACION",
               "fax" => "SIN INFORMACION",
               "deleted_at" => ""
           ],
           [
               "id" => "3",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idDomicilio" => "9",
               "correo" => "sin@informacion.com",
               "telefono" => "324243242342",
               "fax" => "SIN INFORMACION",
               "deleted_at" => ""
           ],
           [
               "id" => "4",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idDomicilio" => "12",
               "correo" => "sin@informacion.com",
               "telefono" => "324243242342",
               "fax" => "SIN INFORMACION",
               "deleted_at" => ""
           ],
           [
               "id" => "5",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idDomicilio" => "20",
               "correo" => "SIN INFORMACION",
               "telefono" => "SIN INFORMACION",
               "fax" => "SIN INFORMACION",
               "deleted_at" => ""
           ],
           [
               "id" => "6",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idDomicilio" => "22",
               "correo" => "sin@informacion.com",
               "telefono" => "83837378223",
               "fax" => "SIN INFORMACION",
               "deleted_at" => ""
           ],
           [
               "id" => "7",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idDomicilio" => "25",
               "correo" => "sin@informacion.com",
               "telefono" => "9283839829",
               "fax" => "SIN INFORMACION",
               "deleted_at" => ""
           ]
       ];
       foreach($entries as $entry){
           DB::table('notificacion')->insert($entry);
       }
       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idCarpeta" => "1",
               "idPersona" => "3",
               "edad" => "",
               "telefono" => "SIN INFORMACION",
               "motivoEstancia" => "SIN INFORMACION",
               "idOcupacion" => "2941",
               "idEstadoCivil" => "7",
               "idEscolaridad" => "14",
               "idReligion" => "29",
               "idDomicilio" => "2",
               "docIdentificacion" => "SIN INFORMACION",
               "numDocIdentificacion" => "SIN INFORMACION",
               "lugarTrabajo" => "SIN INFORMACION",
               "idDomicilioTrabajo" => "2",
               "telefonoTrabajo" => "SIN INFORMACION",
               "representanteLegal" => "SEÑOR DEL OREO",
               "deleted_at" => ""
           ],
           [
               "id" => "2",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idCarpeta" => "1",
               "idPersona" => "4",
               "edad" => "",
               "telefono" => "SIN INFORMACION",
               "motivoEstancia" => "SIN INFORMACION",
               "idOcupacion" => "2941",
               "idEstadoCivil" => "7",
               "idEscolaridad" => "14",
               "idReligion" => "29",
               "idDomicilio" => "4",
               "docIdentificacion" => "SIN INFORMACION",
               "numDocIdentificacion" => "SIN INFORMACION",
               "lugarTrabajo" => "SIN INFORMACION",
               "idDomicilioTrabajo" => "5",
               "telefonoTrabajo" => "SIN INFORMACION",
               "representanteLegal" => "SIN INFORMACION",
               "deleted_at" => ""
           ],
           [
               "id" => "3",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idCarpeta" => "1",
               "idPersona" => "5",
               "edad" => "16",
               "telefono" => "324243242342",
               "motivoEstancia" => "SIN INFORMACION",
               "idOcupacion" => "2016",
               "idEstadoCivil" => "2",
               "idEscolaridad" => "6",
               "idReligion" => "29",
               "idDomicilio" => "7",
               "docIdentificacion" => "INE",
               "numDocIdentificacion" => "2132432423423",
               "lugarTrabajo" => "NOQHEWRE",
               "idDomicilioTrabajo" => "8",
               "telefonoTrabajo" => "3432432432",
               "representanteLegal" => "NO APLICA",
               "deleted_at" => ""
           ],
           [
               "id" => "4",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idCarpeta" => "1",
               "idPersona" => "6",
               "edad" => "16",
               "telefono" => "324243242342",
               "motivoEstancia" => "SIN INFORMACION",
               "idOcupacion" => "2016",
               "idEstadoCivil" => "2",
               "idEscolaridad" => "6",
               "idReligion" => "29",
               "idDomicilio" => "10",
               "docIdentificacion" => "INE",
               "numDocIdentificacion" => "2132432423423",
               "lugarTrabajo" => "NOQHEWRE",
               "idDomicilioTrabajo" => "11",
               "telefonoTrabajo" => "3432432432",
               "representanteLegal" => "NO APLICA",
               "deleted_at" => ""
           ],
           [
               "id" => "5",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idCarpeta" => "1",
               "idPersona" => "7",
               "edad" => "19",
               "telefono" => "2928282882",
               "motivoEstancia" => "SIN INFORMACION",
               "idOcupacion" => "2943",
               "idEstadoCivil" => "5",
               "idEscolaridad" => "11",
               "idReligion" => "4",
               "idDomicilio" => "13",
               "docIdentificacion" => "INE",
               "numDocIdentificacion" => "8932983298328932",
               "lugarTrabajo" => "NEWWHERE",
               "idDomicilioTrabajo" => "14",
               "telefonoTrabajo" => "2821929881",
               "representanteLegal" => "NO APLICA",
               "deleted_at" => ""
           ],
           [
               "id" => "6",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idCarpeta" => "1",
               "idPersona" => "8",
               "edad" => "16",
               "telefono" => "28291829182",
               "motivoEstancia" => "NO APLICA",
               "idOcupacion" => "2469",
               "idEstadoCivil" => "4",
               "idEscolaridad" => "8",
               "idReligion" => "29",
               "idDomicilio" => "1",
               "docIdentificacion" => "NO APLICA",
               "numDocIdentificacion" => "NO APLICA",
               "lugarTrabajo" => "ABOGADOS SA DE CV",
               "idDomicilioTrabajo" => "15",
               "telefonoTrabajo" => "77372837878",
               "representanteLegal" => "NO APLICA",
               "deleted_at" => ""
           ],
           [
               "id" => "7",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idCarpeta" => "1",
               "idPersona" => "10",
               "edad" => "16",
               "telefono" => "8728767676767",
               "motivoEstancia" => "NO APLICA",
               "idOcupacion" => "2469",
               "idEstadoCivil" => "7",
               "idEscolaridad" => "8",
               "idReligion" => "29",
               "idDomicilio" => "1",
               "docIdentificacion" => "NO APLICA",
               "numDocIdentificacion" => "NO APLICA",
               "lugarTrabajo" => "BBCS SA DE CV",
               "idDomicilioTrabajo" => "16",
               "telefonoTrabajo" => "76676767667",
               "representanteLegal" => "NO APLICA",
               "deleted_at" => ""
           ],
           [
               "id" => "8",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idCarpeta" => "1",
               "idPersona" => "11",
               "edad" => "",
               "telefono" => "SIN INFORMACION",
               "motivoEstancia" => "SIN INFORMACION",
               "idOcupacion" => "2941",
               "idEstadoCivil" => "7",
               "idEscolaridad" => "14",
               "idReligion" => "29",
               "idDomicilio" => "18",
               "docIdentificacion" => "SIN INFORMACION",
               "numDocIdentificacion" => "SIN INFORMACION",
               "lugarTrabajo" => "SIN INFORMACION",
               "idDomicilioTrabajo" => "19",
               "telefonoTrabajo" => "SIN INFORMACION",
               "representanteLegal" => "SIN INFORMACION",
               "deleted_at" => ""
           ],
           [
               "id" => "9",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idCarpeta" => "1",
               "idPersona" => "12",
               "edad" => "",
               "telefono" => "SIN INFORMACION",
               "motivoEstancia" => "SIN INFORMACION",
               "idOcupacion" => "2941",
               "idEstadoCivil" => "7",
               "idEscolaridad" => "14",
               "idReligion" => "29",
               "idDomicilio" => "21",
               "docIdentificacion" => "SIN INFORMACION",
               "numDocIdentificacion" => "SIN INFORMACION",
               "lugarTrabajo" => "SIN INFORMACION",
               "idDomicilioTrabajo" => "21",
               "telefonoTrabajo" => "SIN INFORMACION",
               "representanteLegal" => "CARLOS",
               "deleted_at" => ""
           ],
           [
               "id" => "10",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idCarpeta" => "1",
               "idPersona" => "13",
               "edad" => "54",
               "telefono" => "9283839829",
               "motivoEstancia" => "SIN INFORMACION",
               "idOcupacion" => "1183",
               "idEstadoCivil" => "5",
               "idEscolaridad" => "7",
               "idReligion" => "5",
               "idDomicilio" => "23",
               "docIdentificacion" => "INE",
               "numDocIdentificacion" => "8378387837873",
               "lugarTrabajo" => "NORESTE",
               "idDomicilioTrabajo" => "24",
               "telefonoTrabajo" => "737838737878",
               "representanteLegal" => "NO APLICA",
               "deleted_at" => ""
           ]
       ];
       foreach($entries as $entry){
           DB::table('variables_persona')->insert($entry);
       }
       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idVariablesPersona" => "6",
               "cedulaProf" => "982389328932893289",
               "sector" => "PARTICULAR",
               "correo" => "SIN@INFORMACION.COM",
               "tipo" => "ASESOR JURIDICO",
               "deleted_at" => ""
           ],
           [
               "id" => "2",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idVariablesPersona" => "7",
               "cedulaProf" => "32324234234",
               "sector" => "PARTICULAR",
               "correo" => "sin@informacion.com",
               "tipo" => "ABOGADO DEFENSOR",
               "deleted_at" => ""
           ]
       ];


       foreach($entries as $entry){
           DB::table('extra_abogado')->insert($entry);
       }
       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idVariablesPersona" => "1",
               "idNotificacion" => "1",
               "idAbogado" => "1",
               "conoceAlDenunciado" => "0",
               "esVictima" => "0",
               "deleted_at" => ""
           ]
       ];


       foreach($entries as $entry){
           DB::table('extra_denunciante')->insert($entry);
       }
       $entries =
       [            [
                       "id" => "1",
                       "created_at" => "2018-04-12 18:18:31",
                       "updated_at" => "2018-04-12 18:18:31",
                       "idVariablesPersona" => "2",
                       "idNotificacion" => "2",
                       "idPuesto" => "9",
                       "alias" => "SIN INFORMACION",
                       "senasPartic" => "SIN INFORMACION",
                       "ingreso" => "0",
                       "periodoIngreso" => "SIN INFORMACION",
                       "residenciaAnterior" => "SIN INFORMACION",
                       "idAbogado" => "2",
                       "personasBajoSuGuarda" => "0",
                       "perseguidoPenalmente" => "0",
                       "vestimenta" => "SIN INFORMACION",
                       "deleted_at" => ""
                   ],
           [
               "id" => "2",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idVariablesPersona" => "8",
               "idNotificacion" => "5",
               "idPuesto" => "9",
               "alias" => "HAWLET",
               "senasPartic" => "SIN INFORMACION",
               "ingreso" => "0",
               "periodoIngreso" => "SIN INFORMACION",
               "residenciaAnterior" => "SIN INFORMACION",
               "idAbogado" => null,
               "personasBajoSuGuarda" => "0",
               "perseguidoPenalmente" => "0",
               "vestimenta" => "SIN INFORMACION",
               "deleted_at" => ""
           ],
           [
               "id" => "3",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idVariablesPersona" => "9",
               "idNotificacion" => "6",
               "idPuesto" => "9",
               "alias" => "SIN INFORMACION",
               "senasPartic" => "SEÑAS PARTICULARES",
               "ingreso" => "0",
               "periodoIngreso" => "SIN INFORMACION",
               "residenciaAnterior" => "SIN INFORMACION",
               "idAbogado" => null,
               "personasBajoSuGuarda" => "0",
               "perseguidoPenalmente" => "0",
               "vestimenta" => "SIN INFORMACION",
               "deleted_at" => ""
           ],
           [
               "id" => "4",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idVariablesPersona" => "10",
               "idNotificacion" => "7",
               "idPuesto" => "9",
               "alias" => "IRONMAN",
               "senasPartic" => "SEÑAS PARTICULARES",
               "ingreso" => "20000",
               "periodoIngreso" => "QUINCENAL",
               "residenciaAnterior" => "XALAPA",
               "idAbogado" => null,
               "personasBajoSuGuarda" => "12",
               "perseguidoPenalmente" => "0",
               "vestimenta" => "SOLDADO",
               "deleted_at" => ""
           ]
       ];

       foreach($entries as $entry){
           DB::table('extra_denunciado')->insert($entry);
       }

       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:31",
               "updated_at" => "2018-04-12 18:18:31",
               "idVariablesPersona" => "5",
               "antiguedad" => "20",
               "rango" => "CABO",
               "horarioLaboral" => "9-2",
               "deleted_at" => ""
           ]
       ];


       foreach($entries as $entry){
           DB::table('extra_autoridad')->insert($entry);
       }
       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idVariablesPersona" => "4",
               "idNotificacion" => "4",
               "conoceAlDenunciado" => "0",
               "deleted_at" => ""
           ]
       ];


       foreach($entries as $entry){
           DB::table('extra_testigo')->insert($entry);
       }
       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "2",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "3",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "4",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "5",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "carpeta",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva carpeta.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "6",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "unidad",
               "accion" => "update",
               "descripcion" => "Se ha actualizado el campo consecutivo al haber registrado una nueva carpeta.",
               "idFilaAccion" => "17"
           ],
           [
               "id" => "7",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "8",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "9",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "10",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "11",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "12",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "13",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "14",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "15",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "16",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "17",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "18",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "19",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "20",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "21",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "22",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "23",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "24",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "25",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "26",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "27",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "28",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "29",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "30",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un RFC diferente al generado por el sistema para una persona moral de tipo denunciante.",
               "idFilaAccion" => "3"
           ],
           [
               "id" => "31",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva persona moral de tipo denunciante.",
               "idFilaAccion" => "3"
           ],
           [
               "id" => "32",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona moral de tipo denunciante.",
               "idFilaAccion" => "2"
           ],
           [
               "id" => "33",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de trabajo para persona moral de tipo denunciante.",
               "idFilaAccion" => "3"
           ],
           [
               "id" => "34",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "notificacion",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva notificación para persona moral de tipo denunciante.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "35",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "variables_persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo variables persona de persona moral de tipo denunciante.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "36",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "extra_denunciante",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo extra denunciante de persona moral.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "37",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "38",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "39",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "40",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "41",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "42",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "43",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "44",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "45",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva persona física de tipo denunciado QRR.",
               "idFilaAccion" => "4"
           ],
           [
               "id" => "46",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona física de tipo denunciado QRR.",
               "idFilaAccion" => "4"
           ],
           [
               "id" => "47",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona física de tipo denunciado QRR.",
               "idFilaAccion" => "5"
           ],
           [
               "id" => "48",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona física de tipo denunciado QRR.",
               "idFilaAccion" => "6"
           ],
           [
               "id" => "49",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "variables_persona",
               "accion" => "insert",
               "descripcion" => "Se han registrado nuevas variables de persona física de tipo denunciado QRR.",
               "idFilaAccion" => "2"
           ],
           [
               "id" => "50",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "notificacion",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva notificación de persona física de tipo denunciado QRR.",
               "idFilaAccion" => "2"
           ],
           [
               "id" => "51",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "extra_denunciado",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo extra denunciado de persona fisica de tipo denunciado QRR.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "52",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "53",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "54",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "55",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "56",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "57",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "58",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "59",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "60",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "61",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "62",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "63",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "64",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "65",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "66",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "67",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "68",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "69",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "70",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Logout",
               "descripcion" => "Cierre de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "71",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "72",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "73",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "74",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "75",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "76",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "77",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "78",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "79",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "80",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "81",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "82",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "83",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "84",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "85",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "86",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "87",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "88",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "89",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "90",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "91",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "92",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "93",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "94",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "95",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "96",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "97",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "98",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "99",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "100",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "101",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "102",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "103",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "104",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "105",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "106",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "107",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "108",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "109",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "110",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "111",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "112",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "113",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "114",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "115",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "116",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "117",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "118",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "119",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "120",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "121",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "122",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "123",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "124",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "125",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "126",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "127",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "128",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "129",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "130",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "131",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "132",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "133",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "134",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "135",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "136",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "137",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "138",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "139",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "140",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "141",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "142",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "143",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "144",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "145",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "146",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "147",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "148",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "149",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "150",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "151",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "152",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "153",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "154",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "155",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "156",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "157",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "158",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "159",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "160",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "161",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "162",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "163",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "164",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "165",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "166",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "167",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "168",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "169",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "170",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "171",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "172",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "173",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "174",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "175",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "176",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "177",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "178",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "179",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "180",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "181",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "182",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "183",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "184",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "185",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "186",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "187",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "188",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "189",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "190",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "191",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "192",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "193",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "194",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "195",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "196",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "197",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "198",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "199",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "200",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "201",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "202",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "203",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "204",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "205",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "206",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "207",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "208",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "209",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "210",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "211",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "212",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "213",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "214",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "215",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "216",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "217",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "218",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "219",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "220",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "221",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "222",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "223",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "224",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "225",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "226",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "227",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "228",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "229",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "230",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "231",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "232",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "233",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "234",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "235",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "236",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "237",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "238",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "239",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "240",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "241",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "242",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "243",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "244",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "245",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "246",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "247",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "248",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "249",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "250",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "251",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "252",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "253",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "254",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "255",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "256",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "257",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "258",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "259",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "260",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "261",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "262",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "263",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "264",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "265",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "266",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "267",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "268",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "269",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "270",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "271",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "272",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "273",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "274",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "275",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "276",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "277",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "278",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "279",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "280",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "281",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "282",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "283",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "284",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "285",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "286",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "287",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "288",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "289",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "290",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "291",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "292",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "293",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "294",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "295",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva persona física de tipo testigo.",
               "idFilaAccion" => "5"
           ],
           [
               "id" => "296",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio para persona física de tipo testigo.",
               "idFilaAccion" => "7"
           ],
           [
               "id" => "297",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de trabajo para persona física de tipo testigo.",
               "idFilaAccion" => "8"
           ],
           [
               "id" => "298",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio para notificaciones para persona física.",
               "idFilaAccion" => "9"
           ],
           [
               "id" => "299",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "notificacion",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva notificación para persona física de tipo testigo.",
               "idFilaAccion" => "3"
           ],
           [
               "id" => "300",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "variables_persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo variables persona de persona física de tipo testigo.",
               "idFilaAccion" => "3"
           ],
           [
               "id" => "301",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "302",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "303",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "304",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "305",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "306",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "307",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "308",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "309",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "310",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "311",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "312",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "313",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "314",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "315",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "316",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "317",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "318",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "319",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "320",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "321",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "322",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "323",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "324",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "325",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "326",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva persona física de tipo testigo.",
               "idFilaAccion" => "6"
           ],
           [
               "id" => "327",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio para persona física de tipo testigo.",
               "idFilaAccion" => "10"
           ],
           [
               "id" => "328",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de trabajo para persona física de tipo testigo.",
               "idFilaAccion" => "11"
           ],
           [
               "id" => "329",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio para notificaciones para persona física.",
               "idFilaAccion" => "12"
           ],
           [
               "id" => "330",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "notificacion",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva notificación para persona física de tipo testigo.",
               "idFilaAccion" => "4"
           ],
           [
               "id" => "331",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "variables_persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo variables persona de persona física de tipo testigo.",
               "idFilaAccion" => "4"
           ],
           [
               "id" => "332",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "extra_testigo",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo extra testigo de persona física.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "333",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "334",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "335",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "336",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Logout",
               "descripcion" => "Cierre de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "337",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "338",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "339",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "340",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "341",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "342",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "343",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "344",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "345",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "346",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "347",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "348",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "349",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "350",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "351",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "352",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "353",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "354",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "355",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "356",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "357",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "358",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "359",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "360",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "361",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se han registrado Datos Personales de una nueva Autoridad",
               "idFilaAccion" => "7"
           ],
           [
               "id" => "362",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado la Direccion de Autoridad",
               "idFilaAccion" => "13"
           ],
           [
               "id" => "363",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "variables_persona,domicilio",
               "accion" => "insert",
               "descripcion" => "Se han registrado Datos del Trabajo de Autoridad",
               "idFilaAccion" => "14"
           ],
           [
               "id" => "364",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "variables_persona",
               "accion" => "insert",
               "descripcion" => "Se han registrado Variables Persona de Autoridad",
               "idFilaAccion" => "5"
           ],
           [
               "id" => "365",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "extra_autoridad",
               "accion" => "insert",
               "descripcion" => "Se ha registrado Informacion extra de Autoridad",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "366",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "367",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "368",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "369",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "370",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "371",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "372",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "373",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "374",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "375",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "376",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "377",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "378",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "379",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva persona física de tipo abogado.",
               "idFilaAccion" => "8"
           ],
           [
               "id" => "380",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona física de tipo abogado.",
               "idFilaAccion" => "15"
           ],
           [
               "id" => "381",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "variables_persona",
               "accion" => "insert",
               "descripcion" => "Se han registrado nuevas variables de persona física de tipo abogado.",
               "idFilaAccion" => "6"
           ],
           [
               "id" => "382",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "extra_abogado",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo extra abogado de persona física de tipo abogado.",
               "idFilaAccion" => "6"
           ],
           [
               "id" => "383",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "384",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "385",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "386",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "387",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "388",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "389",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "390",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "391",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "392",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "393",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "394",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "395",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "396",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un RFC diferente al generado por el sistema para una persona física de tipo Abogado.",
               "idFilaAccion" => "9"
           ],
           [
               "id" => "397",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva persona física de tipo abogado.",
               "idFilaAccion" => "9"
           ],
           [
               "id" => "398",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "399",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "400",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "401",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "402",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "403",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "404",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "405",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "406",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "407",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "408",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "409",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "410",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "411",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva persona física de tipo abogado.",
               "idFilaAccion" => "10"
           ],
           [
               "id" => "412",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona física de tipo abogado.",
               "idFilaAccion" => "16"
           ],
           [
               "id" => "413",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "variables_persona",
               "accion" => "insert",
               "descripcion" => "Se han registrado nuevas variables de persona física de tipo abogado.",
               "idFilaAccion" => "7"
           ],
           [
               "id" => "414",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "extra_abogado",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo extra abogado de persona física de tipo abogado.",
               "idFilaAccion" => "7"
           ],
           [
               "id" => "415",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "416",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "417",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "418",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "419",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "420",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "extra_denunciado",
               "accion" => "update",
               "descripcion" => "Se ha asignado un abogado a un denunciado.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "421",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "422",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "423",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "424",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "extra_denunciante",
               "accion" => "update",
               "descripcion" => "Se ha asignado un abogado a un denunciante.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "425",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "426",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "427",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "428",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "429",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "familiar",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo familiar de denunciado.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "430",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "431",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "432",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "433",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "434",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "435",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "436",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "437",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "438",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "439",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "440",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "441",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "442",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "443",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "444",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "445",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "446",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "447",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "tipif_delito",
               "accion" => "insert",
               "descripcion" => "Se ha registrado Información de un Delito con Violencia",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "448",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado Información sobre el lugar de un Delito con Violencia",
               "idFilaAccion" => "17"
           ],
           [
               "id" => "449",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "450",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "451",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "452",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "453",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "acusacion",
               "accion" => "insert",
               "descripcion" => "Se han registrado nueva Acusación del Denunciante 1 por el Delito de 1 al Denunciado: 1",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "454",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "455",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "456",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "457",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "458",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "459",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "460",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "461",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "462",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "vehiculo",
               "accion" => "insert",
               "descripcion" => "Se han registrado datos generales de un Vehículo del delito: 1 con Placas: XYX-121 Del estado: 30",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "463",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "464",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "465",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "466",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "467",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "468",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "469",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "470",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "471",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "472",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "473",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "474",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "475",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "476",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "477",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva persona fisica de tipo denunciado conocido.",
               "idFilaAccion" => "11"
           ],
           [
               "id" => "478",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona física de tipo denunciado conocido.",
               "idFilaAccion" => "18"
           ],
           [
               "id" => "479",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona física de tipo denunciado conocido.",
               "idFilaAccion" => "19"
           ],
           [
               "id" => "480",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona física de tipo denunciado conocido.",
               "idFilaAccion" => "20"
           ],
           [
               "id" => "481",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "variables_persona",
               "accion" => "insert",
               "descripcion" => "Se han registrado nuevas variables de persona física de tipo denunciado conocido.",
               "idFilaAccion" => "8"
           ],
           [
               "id" => "482",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "notificacion",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva notificación de persona física de tipo denunciado conocido.",
               "idFilaAccion" => "5"
           ],
           [
               "id" => "483",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "extra_denunciado",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo extra denunciado de persona física de tipo denunciado conocido.",
               "idFilaAccion" => "2"
           ],
           [
               "id" => "484",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "485",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "486",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "487",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "488",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "489",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "490",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "491",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "492",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "493",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "494",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "495",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "496",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva persona moral de tipo denunciado por comparecencia.",
               "idFilaAccion" => "12"
           ],
           [
               "id" => "497",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona física de tipo denunciado por comparecencia.",
               "idFilaAccion" => "21"
           ],
           [
               "id" => "498",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona moral de tipo denunciado por comparecencia.",
               "idFilaAccion" => "22"
           ],
           [
               "id" => "499",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "notificacion",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva notificación de persona moral de tipo denunciado por comparecencia.",
               "idFilaAccion" => "6"
           ],
           [
               "id" => "500",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "variables_persona",
               "accion" => "insert",
               "descripcion" => "Se han registrado nuevas variables de persona moral de tipo denunciado por comparecencia.",
               "idFilaAccion" => "9"
           ],
           [
               "id" => "501",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "extra_denunciado",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo extra denunciado de persona moral de tipo denunciado por comparecencia.",
               "idFilaAccion" => "3"
           ],
           [
               "id" => "502",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "503",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "504",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "505",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "506",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "507",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "508",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "509",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "510",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "511",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "512",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "513",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "514",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "515",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "516",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "517",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "518",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "519",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "520",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "521",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "522",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "523",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "524",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "persona",
               "accion" => "insert",
               "descripcion" => "Se ha registrado una nueva persona física de tipo denunciado por comparecencia.",
               "idFilaAccion" => "13"
           ],
           [
               "id" => "525",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona física de tipo denunciado por comparecencia.",
               "idFilaAccion" => "23"
           ],
           [
               "id" => "526",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "Se ha registrado un nuevo domicilio de persona física de tipo denunciado por comparecencia.",
               "idFilaAccion" => "24"
           ],
           [
               "id" => "527",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "domicilio",
               "accion" => "insert",
               "descripcion" => "SSe ha registrado un nuevo domicilio de persona física de tipo denunciado por comparecencia.",
               "idFilaAccion" => "25"
           ],
           [
               "id" => "528",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "notificacion",
               "accion" => "insert",
               "descripcion" => "Se ha registrado notificación de persona física de tipo denunciado por comparecencia.",
               "idFilaAccion" => "7"
           ],
           [
               "id" => "529",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "variables_persona",
               "accion" => "insert",
               "descripcion" => "Se han registrado nuevas variables de persona física de tipo denunciado por comparecencia.",
               "idFilaAccion" => "10"
           ],
           [
               "id" => "530",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "extra_denunciado",
               "accion" => "insert",
               "descripcion" => "Se ha registradoun nuevo extra denunciado de persona física de tipo denunciado por comparecencia.",
               "idFilaAccion" => "4"
           ],
           [
               "id" => "531",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "532",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "533",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "534",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "535",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "536",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "537",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "538",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "539",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "540",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "541",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "542",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "543",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ],
           [
               "id" => "544",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idusuario" => "1",
               "tabla" => "users",
               "accion" => "Login",
               "descripcion" => "Inicio de sesión.",
               "idFilaAccion" => "1"
           ]
       ];


     foreach($entries as $entry){
           DB::table('bitacora')->insert($entry);
       }

       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idPersona" => "4",
               "nombres" => "CARO",
               "primerAp" => "TORRES",
               "segundoAp" => "TORRES",
               "parentesco" => "MADRE",
               "idOcupacion" => "2469",
               "deleted_at" => ""
           ]
       ];


       foreach($entries as $entry){
           DB::table('familiar')->insert($entry);
       }

       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idCarpeta" => "1",
               "idDelito" => "9",
               "idAgrupacion1" => "52",
               "idAgrupacion2" => "98",
               "conViolencia" => "1",
               "idArma" => "5",
               "idPosibleCausa" => "7",
               "idModalidad" => "1",
               "formaComision" => "DOLOSO",
               "consumacion" => "INSTANTÁNEA",
               "fecha" => "2018-04-12",
               "hora" => "10:47:00",
               "idZona" => "4",
               "idLugar" => "15",
               "idDomicilio" => "17",
               "entreCalle" => "ESTE 6",
               "yCalle" => "OESTE 2",
               "calleTrasera" => "SUR 23",
               "puntoReferencia" => "CASA AZUL",
               "deleted_at" => ""
           ]
       ];


       foreach($entries as $entry){
           DB::table('tipif_delito')->insert($entry);
       }
       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:32",
               "updated_at" => "2018-04-12 18:18:32",
               "idTipifDelito" => "1",
               "placas" => "XYX-121",
               "idEstado" => "30",
               "idSubmarca" => "4160",
               "modelo" => "2018",
               "nrpv" => "ADEWRWR2324234231",
               "idColor" => "20",
               "permiso" => "9021939198",
               "numSerie" => "78272665656454545",
               "numMotor" => "72727826782",
               "idTipoVehiculo" => "7",
               "idTipoUso" => "1",
               "senasPartic" => "SEÑAS PARTICULARES",
               "idProcedencia" => "1",
               "idAseguradora" => "3",
               "deleted_at" => ""
           ]
       ];


       foreach($entries as $entry){
           DB::table('vehiculo')->insert($entry);
       }
       $entries =
       [
           [
               "id" => "1",
               "created_at" => "2018-04-12 18:18:22",
               "updated_at" => "2018-04-12 18:18:22",
               "idCarpeta" => "1",
               "idDenunciante" => "1",
               "idTipifDelito" => "1",
               "idDenunciado" => "1",
               "deleted_at" => ""
           ]
       ];
       foreach($entries as $entry){
           DB::table('acusacion')->insert($entry);
       }

     }
}
