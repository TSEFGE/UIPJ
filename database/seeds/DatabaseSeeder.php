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

         $this->call(ColoniaSeeder::class);
         $this->call(LocalidadSeeder::class);
         $this->call(LocalidadSeeder2::class);

         $this->call(UnidadSeeder::class);

         $this->call(RegistroPersona::class);

         $this->call(SPericialesSeeder::class);
         $this->call(PMinisterialSeeder::class);
         $this->call(PosibleCausaSeeder::class);
    }
}
