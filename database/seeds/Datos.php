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
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idUnidad" => "17",
                "username" => "uipj",
                "nombres" => "UIPJ",
                "apellidos" => "Test",
                "email" => "uipj@fiscaliaveracruz.gob.mx",
                "password" => "\$2y\$10\$ooCu6PRAQO1H6M6ErbAu9eq0arFzwZKUus8RJtfaej/b9ciwcnVt.",
                "numFiscal" => "22",
                "nivel" => "1",
                "oficioConsecutivo" => "0",
                "tokenSession" => "qoXwmy8j5CkTAfj0mlKYGL8BTWhpu0yNk1C0Dac9",
                "remember_token" => "9iRHZNCxUZ3vctpPtEiqKW4uSVELWJN2L0H60CwSxnk2fYb2JdADckHl0vBh",
                "deleted_at" => ""
            ]
        ];


        foreach ($entries as $entry) {
            DB::table('users')->insert($entry);
        }


        $entries =
        [
            [
                "id" => "1",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idLengua" => "37",
                "nombre" => "ULISES VAZQUEZ HERNANDEZ",
                "organizacion" => "LENGUAS MEXICO"
            ]
        ];


        foreach ($entries as $entry) {
            DB::table('interprete')->insert($entry);
        }

        $entries =
        [
            [
                "id" => "1",
                "created_at" => "2018-05-15 17:14:48",
                "updated_at" => "2018-05-15 17:14:48",
                "idUnidad" => "17",
                "idFiscal" => "1",
                "numCarpeta" => "UIPJ/D17/VER1/22/1/2018",
                "fechaInicio" => "2018-05-15",
                "conDetenido" => "0",
                "esRelevante" => "1",
                "estadoCarpeta" => "INICIO",
                "horaIntervencion" => "",
                "descripcionHechos" => "ESTA ES LA CAUSA POR LA QUE SE INICIA LA CARPETA",
                "npd" => "SIN INFORMACION",
                "numIph" => "SIN INFORMACION",
                "fechaIph" => "1969-12-31",
                "narracionIph" => "SIN INFORMACION",
                "idTipoDeterminacion" => "5",
                "fechaDeterminacion" => "1969-12-31",
                "asignadaUat" => "0",
                "deleted_at" => ""
            ],
            [
                "id" => "2",
                "created_at" => "2018-05-15 17:14:48",
                "updated_at" => "2018-05-15 17:14:48",
                "idUnidad" => "17",
                "idFiscal" => "1",
                "numCarpeta" => "UIPJ/D17/VER1/22/2/2018",
                "fechaInicio" => "2018-05-15",
                "conDetenido" => "1",
                "esRelevante" => "0",
                "estadoCarpeta" => "INICIO",
                "horaIntervencion" => "08:19:00",
                "descripcionHechos" => "ESTA ES LA CAUSA POR LA QUE SE INICIA LA CARPETA",
                "npd" => "3232",
                "numIph" => "3242342",
                "fechaIph" => "2018-05-08",
                "narracionIph" => "ESTE ES EL CAMPO IPH",
                "idTipoDeterminacion" => "5",
                "fechaDeterminacion" => "1969-12-31",
                "asignadaUat" => "0",
                "deleted_at" => ""
            ],
            [
                "id" => "3",
                "created_at" => "2018-05-15 17:14:48",
                "updated_at" => "2018-05-15 17:14:48",
                "idUnidad" => "11",
                "idFiscal" => "1",
                "numCarpeta" => "UIPJ/D11/XAL1/11/1/2018",
                "fechaInicio" => "2018-05-15",
                "conDetenido" => "0",
                "esRelevante" => "1",
                "estadoCarpeta" => "INICIO",
                "horaIntervencion" => "",
                "descripcionHechos" => "ESTA ES LA CAUSA",
                "npd" => "SIN INFORMACION",
                "numIph" => "SIN INFORMACION",
                "fechaIph" => "1969-12-31",
                "narracionIph" => "SIN INFORMACION",
                "idTipoDeterminacion" => "5",
                "fechaDeterminacion" => "1969-12-31",
                "asignadaUat" => "0",
                "deleted_at" => ""
            ]
        ];
        foreach ($entries as $entry) {
            DB::table('carpeta')->insert($entry);
        }

        //--------------------------------------------

        $entries =
    [
        [
            "id" => "3",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
            "nombres" => "ENRIQUE",
            "primerAp" => "ORTEGA",
            "segundoAp" => "GONZALEZ",
            "fechaNacimiento" => "1992-09-24 00:00:00",
            "rfc" => "OEGE9209244B3",
            "curp" => "OEGE920924HVZRNN02",
            "sexo" => "HOMBRE",
            "idNacionalidad" => "1",
            "idEtnia" => "1",
            "idLengua" => "70",
            "idMunicipioOrigen" => "2090",
            "esEmpresa" => "0",
            "deleted_at" => ""
        ],
        [
            "id" => "4",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
            "nombres" => "ALEJANDRO",
            "primerAp" => "FERNANDEZ",
            "segundoAp" => "FERNANDEZ",
            "fechaNacimiento" => "1994-04-15 00:00:00",
            "rfc" => "FEFA940415126",
            "curp" => "FEFA940415HVZRRL04",
            "sexo" => "HOMBRE",
            "idNacionalidad" => "1",
            "idEtnia" => "1",
            "idLengua" => "70",
            "idMunicipioOrigen" => "2088",
            "esEmpresa" => "0",
            "deleted_at" => ""
        ],
        [
            "id" => "6",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
            "nombres" => "FGEV",
            "primerAp" => "",
            "segundoAp" => "",
            "fechaNacimiento" => "0000-00-00 00:00:00",
            "rfc" => "FGE180515NA5",
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
            "id" => "7",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
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
            "id" => "8",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
            "nombres" => "VICTOR",
            "primerAp" => "RUIZ",
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
            "id" => "9",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
            "nombres" => "LUIS MIGUEL",
            "primerAp" => "VASTERI",
            "segundoAp" => "REYES",
            "fechaNacimiento" => "1989-01-05 00:00:00",
            "rfc" => "VARL890105H95",
            "curp" => "VARL890105HVZSYS08",
            "sexo" => "HOMBRE",
            "idNacionalidad" => "1",
            "idEtnia" => "1",
            "idLengua" => "70",
            "idMunicipioOrigen" => "2142",
            "esEmpresa" => "0",
            "deleted_at" => ""
        ],
        [
            "id" => "10",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
            "nombres" => "RICARDO",
            "primerAp" => "ORTIZ",
            "segundoAp" => "FERNANDEZ",
            "fechaNacimiento" => "1990-05-18 00:00:00",
            "rfc" => "OIFR900518UR4",
            "curp" => "OIFR900518HVZRRC07",
            "sexo" => "HOMBRE",
            "idNacionalidad" => "1",
            "idEtnia" => "1",
            "idLengua" => "37",
            "idMunicipioOrigen" => "2115",
            "esEmpresa" => "0",
            "deleted_at" => ""
        ],
        [
            "id" => "11",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
            "nombres" => "FELIX",
            "primerAp" => "OBREGON",
            "segundoAp" => "ITURBIDE",
            "fechaNacimiento" => "2002-05-15 00:00:00",
            "rfc" => "OBFE020515I47",
            "curp" => "OEIF020515HVZBTLA9",
            "sexo" => "HOMBRE",
            "idNacionalidad" => "1",
            "idEtnia" => "13",
            "idLengua" => "69",
            "idMunicipioOrigen" => "2090",
            "esEmpresa" => "0",
            "deleted_at" => ""
        ],
        [
            "id" => "12",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
            "nombres" => "FERNANDO",
            "primerAp" => "AGUILAR",
            "segundoAp" => "MURRIETA",
            "fechaNacimiento" => "2002-05-08 00:00:00",
            "rfc" => "AUMF020508JR4",
            "curp" => "AUMF020508HVZGRRA1",
            "sexo" => "HOMBRE",
            "idNacionalidad" => "1",
            "idEtnia" => "1",
            "idLengua" => "70",
            "idMunicipioOrigen" => "2110",
            "esEmpresa" => "0",
            "deleted_at" => ""
        ],
        [
            "id" => "13",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
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
        ]
    ];


        foreach ($entries as $entry) {
            DB::table('persona')->insert($entry);
        }

        $entries =
    [
        [
            "id" => "2",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2107",
            "idLocalidad" => "83432",
            "idColonia" => "44900",
            "calle" => "NORTE 23",
            "numExterno" => "12",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "3",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2107",
            "idLocalidad" => "83432",
            "idColonia" => "44900",
            "calle" => "NORTE 23",
            "numExterno" => "12",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "4",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2097",
            "idLocalidad" => "82456",
            "idColonia" => "43492",
            "calle" => "SUR",
            "numExterno" => "67",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "5",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2151",
            "idLocalidad" => "88255",
            "idColonia" => "42663",
            "calle" => "OESTE",
            "numExterno" => "98",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "6",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2151",
            "idLocalidad" => "88255",
            "idColonia" => "42663",
            "calle" => "OESTE",
            "numExterno" => "98",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "7",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2096",
            "idLocalidad" => "82168",
            "idColonia" => "40637",
            "calle" => "ESTE",
            "numExterno" => "62",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "8",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2113",
            "idLocalidad" => "83882",
            "idColonia" => "40492",
            "calle" => "OESTE",
            "numExterno" => "98",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "9",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2113",
            "idLocalidad" => "83882",
            "idColonia" => "40492",
            "calle" => "OESTE",
            "numExterno" => "98",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "10",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2496",
            "idLocalidad" => "108971",
            "idColonia" => "49172",
            "calle" => "SIN INFORMACION",
            "numExterno" => "S/N",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "11",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2496",
            "idLocalidad" => "108971",
            "idColonia" => "49172",
            "calle" => "SIN INFORMACION",
            "numExterno" => "S/N",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "12",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2496",
            "idLocalidad" => "108971",
            "idColonia" => "49172",
            "calle" => "SIN INFORMACION",
            "numExterno" => "S/N",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "13",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2101",
            "idLocalidad" => "83011",
            "idColonia" => "45021",
            "calle" => "SIN INFORMACION",
            "numExterno" => "S/N",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "14",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2496",
            "idLocalidad" => "108971",
            "idColonia" => "49172",
            "calle" => "SIN INFORMACION",
            "numExterno" => "S/N",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "15",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2496",
            "idLocalidad" => "108971",
            "idColonia" => "49172",
            "calle" => "SIN INFORMACION",
            "numExterno" => "S/N",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "16",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2295",
            "idLocalidad" => "108250",
            "idColonia" => "45935",
            "calle" => "ESTE",
            "numExterno" => "65",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "17",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2109",
            "idLocalidad" => "83539",
            "idColonia" => "44335",
            "calle" => "ESTE",
            "numExterno" => "23",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "18",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2089",
            "idLocalidad" => "81221",
            "idColonia" => "48960",
            "calle" => "SIN INFORMACION",
            "numExterno" => "98",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "19",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2089",
            "idLocalidad" => "81221",
            "idColonia" => "48960",
            "calle" => "SIN INFORMACION",
            "numExterno" => "98",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "20",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2097",
            "idLocalidad" => "82357",
            "idColonia" => "43477",
            "calle" => "OESTE",
            "numExterno" => "87",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "21",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2090",
            "idLocalidad" => "81671",
            "idColonia" => "47531",
            "calle" => "SUROESTE",
            "numExterno" => "11",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "22",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2174",
            "idLocalidad" => "90515",
            "idColonia" => "40299",
            "calle" => "NOROESTE",
            "numExterno" => "76",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "23",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2096",
            "idLocalidad" => "82337",
            "idColonia" => "40631",
            "calle" => "NOROESTE",
            "numExterno" => "828",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "24",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2096",
            "idLocalidad" => "82337",
            "idColonia" => "40631",
            "calle" => "NOROESTE",
            "numExterno" => "828",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "25",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2106",
            "idLocalidad" => "83385",
            "idColonia" => "44889",
            "calle" => "SUR",
            "numExterno" => "121",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "26",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2496",
            "idLocalidad" => "108971",
            "idColonia" => "49172",
            "calle" => "SIN INFORMACION",
            "numExterno" => "S/N",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "27",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2496",
            "idLocalidad" => "108971",
            "idColonia" => "49172",
            "calle" => "SIN INFORMACION",
            "numExterno" => "S/N",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "28",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2496",
            "idLocalidad" => "108971",
            "idColonia" => "49172",
            "calle" => "SIN INFORMACION",
            "numExterno" => "S/N",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ],
        [
            "id" => "29",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idMunicipio" => "2174",
            "idLocalidad" => "90515",
            "idColonia" => "40047",
            "calle" => "SUR",
            "numExterno" => "232",
            "numInterno" => "S/N",
            "deleted_at" => ""
        ]
    ];


        foreach ($entries as $entry) {
            DB::table('domicilio')->insert($entry);
        }

        $entries =
        [
            [
                "id" => "1",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idDomicilio" => "3",
                "correo" => "sin@informacion.com",
                "telefono" => "2282212323",
                "fax" => "SIN INFORMACION",
                "deleted_at" => ""
            ],
            [
                "id" => "2",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idDomicilio" => "6",
                "correo" => "sin@informacion.com",
                "telefono" => "2281191212",
                "fax" => "SIN INFORMACION",
                "deleted_at" => ""
            ],
            [
                "id" => "3",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idDomicilio" => "9",
                "correo" => "sin@informacion.com",
                "telefono" => "22281127121",
                "fax" => "SIN INFORMACION",
                "deleted_at" => ""
            ],
            [
                "id" => "4",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idDomicilio" => "12",
                "correo" => "SIN INFORMACION",
                "telefono" => "SIN INFORMACION",
                "fax" => "SIN INFORMACION",
                "deleted_at" => ""
            ],
            [
                "id" => "5",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idDomicilio" => "15",
                "correo" => "SIN INFORMACION",
                "telefono" => "SIN INFORMACION",
                "fax" => "SIN INFORMACION",
                "deleted_at" => ""
            ],
            [
                "id" => "6",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idDomicilio" => "19",
                "correo" => "sin@informacion.com",
                "telefono" => "27858645555",
                "fax" => "SIN INFORMACION",
                "deleted_at" => ""
            ],
            [
                "id" => "7",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idDomicilio" => "24",
                "correo" => "sin@informacion.com",
                "telefono" => "2872872672762",
                "fax" => "SIN INFORMACION",
                "deleted_at" => ""
            ],
            [
                "id" => "8",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idDomicilio" => "28",
                "correo" => "SIN INFORMACION",
                "telefono" => "SIN INFORMACION",
                "fax" => "SIN INFORMACION",
                "deleted_at" => ""
            ]
        ];


        foreach ($entries as $entry) {
            DB::table('notificacion')->insert($entry);
        }
        $entries =
        [
            [
                "id" => "1",
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idCarpeta" => "1",
                "idPersona" => "3",
                "edad" => "25",
                "telefono" => "2282212323",
                "motivoEstancia" => "SIN INFORMACION",
                "idOcupacion" => "2771",
                "idEstadoCivil" => "6",
                "idEscolaridad" => "12",
                "idReligion" => "10",
                "idDomicilio" => "2",
                "idInterprete" => null,
                "docIdentificacion" => "CREDENCIAL ESCOLAR",
                "numDocIdentificacion" => "62637272626",
                "lugarTrabajo" => "TITAN",
                "idDomicilioTrabajo" => "4",
                "telefonoTrabajo" => "2281121212",
                "representanteLegal" => "NO APLICA",
                "deleted_at" => ""
            ],
            [
                "id" => "2",
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idCarpeta" => "1",
                "idPersona" => "4",
                "edad" => "24",
                "telefono" => "2281191212",
                "motivoEstancia" => "SIN INFORMACION",
                "idOcupacion" => "1183",
                "idEstadoCivil" => "1",
                "idEscolaridad" => "11",
                "idReligion" => "15",
                "idDomicilio" => "5",
                "idInterprete" => null,
                "docIdentificacion" => "CARTILLA MILITAR",
                "numDocIdentificacion" => "2928282828",
                "lugarTrabajo" => "TIERRA",
                "idDomicilioTrabajo" => "7",
                "telefonoTrabajo" => "22812212121",
                "representanteLegal" => "NO APLICA",
                "deleted_at" => ""
            ],
            [
                "id" => "3",
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idCarpeta" => "1",
                "idPersona" => "6",
                "edad" => "",
                "telefono" => "SIN INFORMACION",
                "motivoEstancia" => "SIN INFORMACION",
                "idOcupacion" => "2941",
                "idEstadoCivil" => "7",
                "idEscolaridad" => "14",
                "idReligion" => "29",
                "idDomicilio" => "8",
                "idInterprete" => null,
                "docIdentificacion" => "SIN INFORMACION",
                "numDocIdentificacion" => "SIN INFORMACION",
                "lugarTrabajo" => "SIN INFORMACION",
                "idDomicilioTrabajo" => "8",
                "telefonoTrabajo" => "SIN INFORMACION",
                "representanteLegal" => "JOSE AGUIRRE ORTEGA",
                "deleted_at" => ""
            ],
            [
                "id" => "4",
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idCarpeta" => "1",
                "idPersona" => "7",
                "edad" => "",
                "telefono" => "SIN INFORMACION",
                "motivoEstancia" => "SIN INFORMACION",
                "idOcupacion" => "2941",
                "idEstadoCivil" => "7",
                "idEscolaridad" => "14",
                "idReligion" => "29",
                "idDomicilio" => "10",
                "idInterprete" => null,
                "docIdentificacion" => "SIN INFORMACION",
                "numDocIdentificacion" => "SIN INFORMACION",
                "lugarTrabajo" => "SIN INFORMACION",
                "idDomicilioTrabajo" => "11",
                "telefonoTrabajo" => "SIN INFORMACION",
                "representanteLegal" => "SIN INFORMACION",
                "deleted_at" => ""
            ],
            [
                "id" => "5",
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idCarpeta" => "1",
                "idPersona" => "8",
                "edad" => "",
                "telefono" => "SIN INFORMACION",
                "motivoEstancia" => "SIN INFORMACION",
                "idOcupacion" => "2941",
                "idEstadoCivil" => "7",
                "idEscolaridad" => "14",
                "idReligion" => "29",
                "idDomicilio" => "13",
                "idInterprete" => null,
                "docIdentificacion" => "SIN INFORMACION",
                "numDocIdentificacion" => "SIN INFORMACION",
                "lugarTrabajo" => "SIN INFORMACION",
                "idDomicilioTrabajo" => "14",
                "telefonoTrabajo" => "SIN INFORMACION",
                "representanteLegal" => "SIN INFORMACION",
                "deleted_at" => ""
            ],
            [
                "id" => "6",
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idCarpeta" => "1",
                "idPersona" => "9",
                "edad" => "29",
                "telefono" => "292172821738212",
                "motivoEstancia" => "SIN INFORMACION",
                "idOcupacion" => "2945",
                "idEstadoCivil" => "7",
                "idEscolaridad" => "4",
                "idReligion" => "21",
                "idDomicilio" => "16",
                "idInterprete" => null,
                "docIdentificacion" => "CREDENCIAL ESCOLAR",
                "numDocIdentificacion" => "287372823728272",
                "lugarTrabajo" => "ALEXANDRIA",
                "idDomicilioTrabajo" => "17",
                "telefonoTrabajo" => "282819281928",
                "representanteLegal" => "NO APLICA",
                "deleted_at" => ""
            ],
            [
                "id" => "7",
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idCarpeta" => "1",
                "idPersona" => "10",
                "edad" => "27",
                "telefono" => "27858645555",
                "motivoEstancia" => "SIN INFORMACION",
                "idOcupacion" => "2469",
                "idEstadoCivil" => "1",
                "idEscolaridad" => "6",
                "idReligion" => "5",
                "idDomicilio" => "18",
                "idInterprete" => "1",
                "docIdentificacion" => "CREDENCIAL DE ELECTOR",
                "numDocIdentificacion" => "654556456",
                "lugarTrabajo" => "OVERTHERE",
                "idDomicilioTrabajo" => "20",
                "telefonoTrabajo" => "29837282727",
                "representanteLegal" => "NO APLICA",
                "deleted_at" => ""
            ],
            [
                "id" => "8",
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idCarpeta" => "1",
                "idPersona" => "11",
                "edad" => "16",
                "telefono" => "2937283727627",
                "motivoEstancia" => "NO APLICA",
                "idOcupacion" => "2469",
                "idEstadoCivil" => "4",
                "idEscolaridad" => "8",
                "idReligion" => "29",
                "idDomicilio" => "1",
                "idInterprete" => null,
                "docIdentificacion" => "NO APLICA",
                "numDocIdentificacion" => "NO APLICA",
                "lugarTrabajo" => "OVERBOARD",
                "idDomicilioTrabajo" => "21",
                "telefonoTrabajo" => "2828381292",
                "representanteLegal" => "NO APLICA",
                "deleted_at" => ""
            ],
            [
                "id" => "9",
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idCarpeta" => "2",
                "idPersona" => "12",
                "edad" => "16",
                "telefono" => "2872872672762",
                "motivoEstancia" => "SIN INFORMACION",
                "idOcupacion" => "1937",
                "idEstadoCivil" => "7",
                "idEscolaridad" => "11",
                "idReligion" => "5",
                "idDomicilio" => "23",
                "idInterprete" => null,
                "docIdentificacion" => "CARTILLA MILITAR",
                "numDocIdentificacion" => "54453224233",
                "lugarTrabajo" => "KINSLANDIN",
                "idDomicilioTrabajo" => "25",
                "telefonoTrabajo" => "281827282727",
                "representanteLegal" => "NO APLICA",
                "deleted_at" => ""
            ],
            [
                "id" => "10",
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idCarpeta" => "2",
                "idPersona" => "13",
                "edad" => "",
                "telefono" => "SIN INFORMACION",
                "motivoEstancia" => "SIN INFORMACION",
                "idOcupacion" => "2941",
                "idEstadoCivil" => "7",
                "idEscolaridad" => "14",
                "idReligion" => "29",
                "idDomicilio" => "26",
                "idInterprete" => null,
                "docIdentificacion" => "SIN INFORMACION",
                "numDocIdentificacion" => "SIN INFORMACION",
                "lugarTrabajo" => "SIN INFORMACION",
                "idDomicilioTrabajo" => "27",
                "telefonoTrabajo" => "SIN INFORMACION",
                "representanteLegal" => "SIN INFORMACION",
                "deleted_at" => ""
            ]
        ];


        foreach ($entries as $entry) {
            DB::table('variables_persona')->insert($entry);
        }

        $entries =
    [
        [
            "id" => "1",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idVariablesPersona" => "8",
            "cedulaProf" => "28272726762672",
            "sector" => "PÚBLICO",
            "correo" => "sin@informacion.com",
            "tipo" => "ASESOR JURIDICO",
            "deleted_at" => ""
        ]
    ];


        foreach ($entries as $entry) {
            DB::table('extra_abogado')->insert($entry);
        }

        $entries =
        [
            [
                "id" => "1",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idVariablesPersona" => "1",
                "idNotificacion" => "1",
                "idAbogado" => "1",
                "conoceAlDenunciado" => "0",
                "esVictima" => "1",
                "deleted_at" => ""
            ],
            [
                "id" => "2",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idVariablesPersona" => "2",
                "idNotificacion" => "2",
                "idAbogado" => "1",
                "conoceAlDenunciado" => "0",
                "esVictima" => "1",
                "deleted_at" => ""
            ],
            [
                "id" => "3",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idVariablesPersona" => "3",
                "idNotificacion" => "3",
                "idAbogado" => "1",
                "conoceAlDenunciado" => "0",
                "esVictima" => "0",
                "deleted_at" => ""
            ],
            [
                "id" => "4",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idVariablesPersona" => "9",
                "idNotificacion" => "7",
                "idAbogado" => null,
                "conoceAlDenunciado" => "0",
                "esVictima" => "1",
                "deleted_at" => ""
            ]
        ];


        foreach ($entries as $entry) {
            DB::table('extra_denunciante')->insert($entry);
        }
        $entries =
    [
        [
            "id" => "1",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idVariablesPersona" => "4",
            "idNotificacion" => "4",
            "idPuesto" => "9",
            "alias" => "SIN INFORMACION",
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
            "id" => "2",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idVariablesPersona" => "5",
            "idNotificacion" => "5",
            "idPuesto" => "9",
            "alias" => "CONTRERAS",
            "senasPartic" => "CAMPO DE SEÑAS PARTICULARES DEL INVESTIGADO",
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
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idVariablesPersona" => "10",
            "idNotificacion" => "8",
            "idPuesto" => "9",
            "alias" => "SIN INFORMACION",
            "senasPartic" => "SIN INFORMACION",
            "ingreso" => "0",
            "periodoIngreso" => "SIN INFORMACION",
            "residenciaAnterior" => "SIN INFORMACION",
            "idAbogado" => null,
            "personasBajoSuGuarda" => "0",
            "perseguidoPenalmente" => "0",
            "vestimenta" => "SIN INFORMACION",
            "deleted_at" => ""
        ]
    ];


        foreach ($entries as $entry) {
            DB::table('extra_denunciado')->insert($entry);
        }

        $entries =
        [
            [
                "id" => "1",
                "created_at" => "2018-05-15 17:16:26",
                "updated_at" => "2018-05-15 17:16:26",
                "idVariablesPersona" => "6",
                "antiguedad" => "10",
                "rango" => "CABO",
                "horarioLaboral" => "9-14",
                "deleted_at" => ""
            ]
        ];


        foreach ($entries as $entry) {
            DB::table('extra_autoridad')->insert($entry);
        }

        $entries =
                [
                    [
                        "id" => "1",
                        "created_at" => "2018-05-15 17:16:26",
                        "updated_at" => "2018-05-15 17:16:26",
                        "idVariablesPersona" => "7",
                        "idNotificacion" => "6",
                        "conoceAlDenunciado" => "0",
                        "deleted_at" => ""
                    ]
                ];


        foreach ($entries as $entry) {
            DB::table('extra_testigo')->insert($entry);
        }



        $entries =
    [
        [
            "id" => "1",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idPersona" => "3",
            "nombres" => "ALEJANDRA",
            "primerAp" => "GUZMAN",
            "segundoAp" => "GUZMAN",
            "parentesco" => "MADRE",
            "idOcupacion" => "2469",
            "deleted_at" => ""
        ],
        [
            "id" => "2",
            "created_at" => "2018-05-15 17:16:26",
            "updated_at" => "2018-05-15 17:16:26",
            "idPersona" => "4",
            "nombres" => "VICENTE",
            "primerAp" => "FERNANDEZ",
            "segundoAp" => "FERNANDEZ",
            "parentesco" => "PADRE",
            "idOcupacion" => "2748",
            "deleted_at" => ""
        ]
    ];


        foreach ($entries as $entry) {
            DB::table('familiar')->insert($entry);
        }

        $entries =
    [
        [
            "id" => "1",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
            "idCarpeta" => "1",
            "idDelito" => "32",
            "idAgrupacion1" => "101",
            "idAgrupacion2" => "143",
            "conViolencia" => "0",
            "idArma" => "1",
            "idPosibleCausa" => "1",
            "idModalidad" => "1",
            "formaComision" => "CULPOSO",
            "consumacion" => "INSTANTÁNEA",
            "fecha" => "2018-05-09",
            "hora" => "09:13:00",
            "idZona" => "2",
            "idLugar" => "3",
            "idDomicilio" => "22",
            "entreCalle" => "SIN INFORMACION",
            "yCalle" => "SIN INFORMACION",
            "calleTrasera" => "SIN INFORMACION",
            "puntoReferencia" => "PORTON AZUL",
            "deleted_at" => ""
        ],
        [
            "id" => "2",
            "created_at" => "2018-05-15 17:16:27",
            "updated_at" => "2018-05-15 17:16:27",
            "idCarpeta" => "2",
            "idDelito" => "37",
            "idAgrupacion1" => "106",
            "idAgrupacion2" => "148",
            "conViolencia" => "1",
            "idArma" => "5",
            "idPosibleCausa" => "11",
            "idModalidad" => "1",
            "formaComision" => "CULPOSO",
            "consumacion" => "PERMANENTE",
            "fecha" => "2018-02-09",
            "hora" => "09:25:00",
            "idZona" => "1",
            "idLugar" => "2",
            "idDomicilio" => "29",
            "entreCalle" => "SIN INFORMACION",
            "yCalle" => "SIN INFORMACION",
            "calleTrasera" => "SIN INFORMACION",
            "puntoReferencia" => "FRENTE A AURAUCARIA",
            "deleted_at" => ""
        ]
    ];


        foreach ($entries as $entry) {
            DB::table('tipif_delito')->insert($entry);
        }
        $entries =
        [
            [
                "id" => "1",
                "created_at" => "2018-05-15 17:16:27",
                "updated_at" => "2018-05-15 17:16:27",
                "idTipifDelito" => "1",
                "placas" => "727X182",
                "idEstado" => "30",
                "idSubmarca" => "19689",
                "modelo" => "2012",
                "nrpv" => "SIN INFORMACION",
                "idColor" => "5",
                "permiso" => "SIN INFORMACION",
                "numSerie" => "SIN INFORMACION",
                "numMotor" => "SIN INFORMACION",
                "idTipoVehiculo" => "25",
                "idTipoUso" => "22",
                "senasPartic" => "SIN INFORMACION",
                "idProcedencia" => "2",
                "idAseguradora" => "10",
                "deleted_at" => ""
            ]
        ];


        foreach ($entries as $entry) {
            DB::table('vehiculo')->insert($entry);
        }

        $entries =
        [
            [
                "id" => "1",
                "created_at" => "2018-05-15 17:14:48",
                "updated_at" => "2018-05-15 17:14:48",
                "idCarpeta" => "1",
                "idDenunciante" => "2",
                "idTipifDelito" => "1",
                "idDenunciado" => "1",
                "deleted_at" => ""
            ],
            [
                "id" => "2",
                "created_at" => "2018-05-15 17:14:48",
                "updated_at" => "2018-05-15 17:14:48",
                "idCarpeta" => "1",
                "idDenunciante" => "3",
                "idTipifDelito" => "1",
                "idDenunciado" => "2",
                "deleted_at" => ""
            ],
            [
                "id" => "3",
                "created_at" => "2018-05-15 17:14:48",
                "updated_at" => "2018-05-15 17:14:48",
                "idCarpeta" => "2",
                "idDenunciante" => "4",
                "idTipifDelito" => "2",
                "idDenunciado" => "3",
                "deleted_at" => ""
            ]
        ];


        foreach ($entries as $entry) {
            DB::table('acusacion')->insert($entry);
        }
    }
}
