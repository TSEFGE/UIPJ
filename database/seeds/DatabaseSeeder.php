<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(OcupacionSeeder::class);
         $this->call(EstadoCivilSeeder::class);
         $this->call(EscolaridadSeeder::class);
         $this->call(ReligionSeeder::class);
         $this->call(NacionalidadSeeder::class);
         $this->call(EtniaSeeder::class);
         $this->call(LenguaSeeder::class);
         $this->call(EstadoSeeder::class);
         $this->call(TipoDeterminacionSeeder::class);
         $this->call(DelitoSeeder::class);
         $this->call(TipoArmaSeeder::class);
         $this->call(ModalidadSeeder::class);
         $this->call(LugarSeeder::class);
         $this->call(ZonaSeeder::class);
         $this->call(PuestoSeeder::class);
         $this->call(ClaseVehiculoSeeder::class);
         $this->call(ColorSeeder::class);
         $this->call(MarcaSeeder::class);
         $this->call(AseguradoraSeeder::class);
         $this->call(ProcedenciaSeeder::class);
         $this->call(TipoUsoSeeder::class);

         $this->call(MunicipioSeeder::class);
         $this->call(ArmaSeeder::class);
         $this->call(TipoVehiculoSeeder::class);
         $this->call(SubmarcaSeeder::class);
         $this->call(SubmarcaSeeder2::class);

         //$this->call(ColoniaSeeder::class);
         $this->call(ColoniasChiapasSeeder::class);
         $this->call(ColoniasCDMXSeeder::class);
         $this->call(ColoniasHidalgoSeeder::class);
         $this->call(ColoniasOaxacaSeeder::class);
         $this->call(ColoniasPueblaSeeder::class);
         $this->call(ColoniasSanLuisPotosiSeeder::class);
         $this->call(ColoniasTabascoSeeder::class);
         $this->call(ColoniasTamaulipasSeeder::class);
         $this->call(ColoniasVeracruzSeeder::class);



         //$this->call(LocalidadSeeder::class);
         //$this->call(LocalidadSeeder2::class);
         $this->call(LocalidadesChiapasSeeder::class);
         $this->call(LocalidadesCDMXSeeder::class);
         $this->call(LocalidadesHidalgoSeeder::class);
         $this->call(LocalidadesOaxacaSeeder::class);
         $this->call(LocalidadesPueblaSeeder::class);
         $this->call(LocalidadesSanLuisPotosiSeeder::class);
         $this->call(LocalidadesTabascoSeeder::class);
         $this->call(LocalidadesTamaulipasSeeder::class);
         $this->call(LocalidadesVeracruzSeeder::class);


         $this->call(UnidadSeeder::class);

         $this->call(RegistroPersona::class);

         $this->call(SPericialesSeeder::class);
         $this->call(PMinisterialSeeder::class);
         $this->call(PosibleCausaSeeder::class);

        $this->call(Agrupacion1Seeder::class);
    }
}
