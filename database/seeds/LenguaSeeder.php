<?php

use Illuminate\Database\Seeder;

class LenguaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_lengua')->insert([
            ['id'=>   1,'nombre' => 'AKATEKO'],
			['id'=>   2,'nombre' => 'AMUZGO'],
			['id'=>   3,'nombre' => 'AWAKATEKO'],
			['id'=>   4,'nombre' => 'AYAPANECO'],
			['id'=>   5,'nombre' => 'CHATINO'],
			['id'=>   6,'nombre' => 'CHICHIMECO JONAZ'],
			['id'=>   7,'nombre' => 'CHINANTECO'],
			['id'=>   8,'nombre' => 'CHOCHOLTECO'],
			['id'=>   9,'nombre' => 'CH´OL'],
			['id'=>   10,'nombre' => 'CHONTAL DE OAXACA'],
			['id'=>   11,'nombre' => 'CHONTAL DE TABASCO'],
			['id'=>   12,'nombre' => 'CHUJ'],
			['id'=>   13,'nombre' => 'CORA'],
			['id'=>   14,'nombre' => 'CUCAPÁ'],
			['id'=>   15,'nombre' => 'CUICATECO'],
			['id'=>   16,'nombre' => 'GUARIJÍO'],
			['id'=>   17,'nombre' => 'HUASTECO'],
			['id'=>   18,'nombre' => 'HUAVE'],
			['id'=>   19,'nombre' => 'HUICHOL'],
			['id'=>   20,'nombre' => 'IXCATECO'],
			['id'=>   21,'nombre' => 'IXIL'],
			['id'=>   22,'nombre' => 'JAKALTEKO'],
			['id'=>   23,'nombre' => 'KAQCHIKEL'],
			['id'=>   24,'nombre' => 'K´ICHE'],
			['id'=>   25,'nombre' => 'KICKAPOO'],
			['id'=>   26,'nombre' => 'KILIWA'],
			['id'=>   27,'nombre' => 'KU´AHL'],
			['id'=>   28,'nombre' => 'KUMIAI'],
			['id'=>   29,'nombre' => 'LACANDÓN'],
			['id'=>   30,'nombre' => 'MAM'],
			['id'=>   31,'nombre' => 'MATLATZINCA'],
			['id'=>   32,'nombre' => 'MAYA'],
			['id'=>   33,'nombre' => 'MAYO'],
			['id'=>   34,'nombre' => 'MAZAHUA'],
			['id'=>   35,'nombre' => 'MAZATECO'],
			['id'=>   36,'nombre' => 'MIXE'],
			['id'=>   37,'nombre' => 'MIXTECO'],
			['id'=>   38,'nombre' => 'NÁHUATL'],
			['id'=>   39,'nombre' => 'OLUTECO'],
			['id'=>   40,'nombre' => 'OTOMÍ'],
			['id'=>   41,'nombre' => 'PAIPAI'],
			['id'=>   42,'nombre' => 'PAME'],
			['id'=>   43,'nombre' => 'PÁPAGO'],
			['id'=>   44,'nombre' => 'PIMA'],
			['id'=>   45,'nombre' => 'POPOLOCA'],
			['id'=>   46,'nombre' => 'POPOLUCA DE LA SIERRA'],
			['id'=>   47,'nombre' => 'Q´ANJOB´AL'],
			['id'=>   48,'nombre' => 'QATO´K'],
			['id'=>   49,'nombre' => 'Q´EQCHÍ'],
			['id'=>   50,'nombre' => 'SAYULTECO'],
			['id'=>   51,'nombre' => 'SERI'],
			['id'=>   52,'nombre' => 'TARAHUMARA'],
			['id'=>   53,'nombre' => 'TARASCO'],
			['id'=>   54,'nombre' => 'TEKO'],
			['id'=>   55,'nombre' => 'TEPEHUA'],
			['id'=>   56,'nombre' => 'TEPEHUANO DEL NORTE'],
			['id'=>   57,'nombre' => 'TEPEHUANO DEL SUR'],
			['id'=>   58,'nombre' => 'TEXISTEPEQUEÑO'],
			['id'=>   59,'nombre' => 'TLAHUICA'],
			['id'=>   60,'nombre' => 'TLAPANECO'],
			['id'=>   61,'nombre' => 'TOJOLABAL'],
			['id'=>   62,'nombre' => 'TOTONACO'],
			['id'=>   63,'nombre' => 'TRIQUI'],
			['id'=>   64,'nombre' => 'TSELTAL'],
			['id'=>   65,'nombre' => 'TSOTSIL'],
			['id'=>   66,'nombre' => 'YAQUI'],
			['id'=>   67,'nombre' => 'ZAPOTECO'],
			['id'=>   68,'nombre' => 'ZOQUE'],
            ['id'=>   69,'nombre' => 'SIN INFORMACION'],
            ['id'=>   70,'nombre' => 'NO APLICA']


        ]);     
    }
}
