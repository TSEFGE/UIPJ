<?php

use Illuminate\Database\Seeder;

class RegistroPersona extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persona')->insert([
        	[ 'id' => 1, 'nombres' => 'QUIEN', 'primerAp' => 'RESULTE', 'segundoAp' => 'RESPONSABLE', 'fechaNacimiento' => '2017-01-01', 'rfc' => 'AAAA000000BBB', 'curp' => 'AAAA000000BBBBBB00', 'sexo' => 'SIN INFORMACION', 'idNacionalidad' => 132, 'idEtnia' => 13, 'idLengua' => 69, 'idMunicipioOrigen' => 1, 'esEmpresa' => 0],
        	[ 'id' => 2, 'nombres' => 'QUIEN', 'primerAp' => 'RESULTE', 'segundoAp' => 'AGRAVIADO', 'fechaNacimiento' => '2017-01-01', 'rfc' => 'AAAA000000BBB', 'curp' => 'CCCC000000BBBBBB00', 'sexo' => 'SIN INFORMACION', 'idNacionalidad' => 132, 'idEtnia' => 13, 'idLengua' => 69, 'idMunicipioOrigen' => 1, 'esEmpresa' => 0]
        ]);

        DB::table('domicilio')->insert([
        	[ 'id' => 1, 'idMunicipio' => 1, 'idLocalidad' => 27592, 'idColonia' => 8982, 'calle' => 'SIN INFORMACION', 'numExterno' => 'S/N', 'numInterno' => 'S/N']
        ]);
    }
}
