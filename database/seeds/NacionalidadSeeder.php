<?php

use Illuminate\Database\Seeder;
use App\Models\CatNacionalidad;

class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Basado en el catalogo de procesos
     * @return void
     */
    public function run()
    {
    	DB::table('cat_nacionalidad')->insert([
            ['id'=>  1,'nombre' => 'MEXICANA'],
            ['id'=>  2,'nombre' => 'FRANCESA'],
            ['id'=>  3,'nombre' => 'ARMENIANA'],
            ['id'=>  4,'nombre' => 'PORTUGUESA'],
            ['id'=>  5,'nombre' => 'RHODESIANA'],
            ['id'=>  6,'nombre' => 'RUANDESA'],
            ['id'=>  7,'nombre' => 'RUMANA'],
            ['id'=>  8,'nombre' => 'SALVADOREÑA'],
            ['id'=>  9,'nombre' => 'SENEGALESA'],
            ['id'=> 10,'nombre' => 'SIERRALEONESA'],
            ['id'=> 11,'nombre' => 'SINGAPURESA'],
            ['id'=> 12,'nombre' => 'SIRIA'],
            ['id'=> 13,'nombre' => 'SOVIETICA'],
            ['id'=> 14,'nombre' => 'AUSTRALIANA'],
            ['id'=> 15,'nombre' => 'SUDAFRICANA'],
            ['id'=> 16,'nombre' => 'SUDANI'],
            ['id'=> 17,'nombre' => 'SUECA'],
            ['id'=> 18,'nombre' => 'SUIZA'],
            ['id'=> 19,'nombre' => 'SURINAMESA'],
            ['id'=> 20,'nombre' => 'TAIWANDESA'],
            ['id'=> 21,'nombre' => 'TANZANI'],
            ['id'=> 22,'nombre' => 'THAILANDESA'],
            ['id'=> 23,'nombre' => 'TONGANI'],
            ['id'=> 24,'nombre' => 'TONGOLESA'],
            ['id'=> 25,'nombre' => 'AUSTRIACA'],
            ['id'=> 26,'nombre' => 'TUNESINA'],
            ['id'=> 27,'nombre' => 'TURCA'],
            ['id'=> 28,'nombre' => 'UGANDESA'],
            ['id'=> 29,'nombre' => 'URUGUAYA'],
            ['id'=> 30,'nombre' => 'VATICANA'],
            ['id'=> 31,'nombre' => 'VENEZOLANA'],
            ['id'=> 32,'nombre' => 'VIETNAMITA'],
            ['id'=> 33,'nombre' => 'YEMENITA'],
            ['id'=> 34,'nombre' => 'YUGOSLAVA'],
            ['id'=> 35,'nombre' => 'ZAIRENSE'],
            ['id'=> 36,'nombre' => 'BELGA'],
            ['id'=> 37,'nombre' => 'ZAMBIANESA'],
            ['id'=> 38,'nombre' => 'ZIMBABWANESA'],
            ['id'=> 39,'nombre' => 'BELICEÑA'],
            ['id'=> 40,'nombre' => 'BENINESA'],
            ['id'=> 41,'nombre' => 'BIRMANA'],
            ['id'=> 42,'nombre' => 'BOLIVIANA'],
            ['id'=> 43,'nombre' => 'BOPHUTHATSWANESA'],
            ['id'=> 44,'nombre' => 'BOTSWANESA'],
            ['id'=> 45,'nombre' => 'ALBANESA'],
            ['id'=> 46,'nombre' => 'BRASILEÑA'],
            ['id'=> 47,'nombre' => 'BRUNESA'],
            ['id'=> 48,'nombre' => 'BULGARA'],
            ['id'=> 49,'nombre' => 'BURUNDESA'],
            ['id'=> 50,'nombre' => 'BUTANI'],
            ['id'=> 51,'nombre' => 'CAMBOYANA'],
            ['id'=> 52,'nombre' => 'CAMERUNESA'],
            ['id'=> 53,'nombre' => 'CANADIENSE'],
            ['id'=> 54,'nombre' => 'CEILANDESA'],
            ['id'=> 55,'nombre' => 'CENTROAFRICANA'],
            ['id'=> 56,'nombre' => 'ALEMANA'],
            ['id'=> 57,'nombre' => 'CENTROAMERICANA'],
            ['id'=> 58,'nombre' => 'CHECOSLOVACA'],
            ['id'=> 59,'nombre' => 'CHILENA'],
            ['id'=> 60,'nombre' => 'CHINA'],
            ['id'=> 61,'nombre' => 'CHIPRIOTA'],
            ['id'=> 62,'nombre' => 'COLOMBIANA'],
            ['id'=> 63,'nombre' => 'CONGOLI'],
            ['id'=> 64,'nombre' => 'COREANA'],
            ['id'=> 65,'nombre' => 'COSTARRICENSE'],
            ['id'=> 66,'nombre' => 'CUBANA'],
            ['id'=> 67,'nombre' => 'ANDORREÑA'],
            ['id'=> 68,'nombre' => 'DANESA'],
            ['id'=> 69,'nombre' => 'DOMINICANA'],
            ['id'=> 70,'nombre' => 'ECUATORIANA'],
            ['id'=> 71,'nombre' => 'EGIPCIA'],
            ['id'=> 72,'nombre' => 'ESPAÑOLA'],
            ['id'=> 73,'nombre' => 'ETIOPE'],
            ['id'=> 74,'nombre' => 'FILIPINA'],
            ['id'=> 75,'nombre' => 'FINLANDESA'],
            ['id'=> 76,'nombre' => 'RUSA'],
            ['id'=> 77,'nombre' => 'GABONESA'],
            ['id'=> 78,'nombre' => 'ANGOLEÑA'],
            ['id'=> 79,'nombre' => 'GAMBIANA'],
            ['id'=> 80,'nombre' => 'GRANADA'],
            ['id'=> 81,'nombre' => 'GRIEGA'],
            ['id'=> 82,'nombre' => 'GUATEMALTECA'],
            ['id'=> 83,'nombre' => 'GUINESA'],
            ['id'=> 84,'nombre' => 'HAITIANA'],
            ['id'=> 85,'nombre' => 'HAWAIANA'],
            ['id'=> 86,'nombre' => 'HINDU'],
            ['id'=> 87,'nombre' => 'HOLANDESA'],
            ['id'=> 88,'nombre' => 'HONDUREÑA'],
            ['id'=> 89,'nombre' => 'ANTILLANA'],
            ['id'=> 90,'nombre' => 'HUNGARA'],
            ['id'=> 91,'nombre' => 'INDONESA'],
            ['id'=> 92,'nombre' => 'INGLESA'],
            ['id'=> 93,'nombre' => 'IRAKI'],
            ['id'=> 94,'nombre' => 'IRANI'],
            ['id'=> 95,'nombre' => 'IRLANDESA'],
            ['id'=> 96,'nombre' => 'ISLANDESA'],
            ['id'=> 97,'nombre' => 'ISRAELI'],
            ['id'=> 98,'nombre' => 'ITALIANA'],
            ['id'=> 99,'nombre' => 'JAMAIQUINA'],
            ['id'=>100,'nombre' => 'ARABE'],
            ['id'=>101,'nombre' => 'JAPONESA'],
            ['id'=>102,'nombre' => 'JORDANA'],
            ['id'=>103,'nombre' => 'KENIANA'],
            ['id'=>104,'nombre' => 'LAOSIANA'],
            ['id'=>105,'nombre' => 'LIBANESA'],
            ['id'=>106,'nombre' => 'LIBERIANA'],
            ['id'=>107,'nombre' => 'LIBIA'],
            ['id'=>108,'nombre' => 'LUXEMBURGESA'],
            ['id'=>109,'nombre' => 'MALASIA'],
            ['id'=>110,'nombre' => 'MALAWIANA'],
            ['id'=>111,'nombre' => 'ARGELINA'],
            ['id'=>112,'nombre' => 'MALIENSE'],
            ['id'=>113,'nombre' => 'MALTESA'],
            ['id'=>114,'nombre' => 'MARROQUI'],
            ['id'=>115,'nombre' => 'MAURITANA'],
            ['id'=>116,'nombre' => 'MONGOLICA'],
            ['id'=>117,'nombre' => 'MOZAMBIQUEÑA'],
            ['id'=>118,'nombre' => 'NABIMIANA'],
            ['id'=>119,'nombre' => 'NEOZELANDESA'],
            ['id'=>120,'nombre' => 'NEPALESA'],
            ['id'=>121,'nombre' => 'ARGENTINA'],
            ['id'=>122,'nombre' => 'NICARAGUENSA'],
            ['id'=>123,'nombre' => 'NIGERIANA'],
            ['id'=>124,'nombre' => 'NORTEAMERICANA'],
            ['id'=>125,'nombre' => 'NORUEGA'],
            ['id'=>126,'nombre' => 'PAKISTANI'],
            ['id'=>127,'nombre' => 'PANAMEÑA'],
            ['id'=>128,'nombre' => 'PARAGUAYA'],
            ['id'=>129,'nombre' => 'PERUANA'],
            ['id'=>130,'nombre' => 'POLACA'],
            ['id'=>131,'nombre' => 'PORTORRIQUEÑA'],
            ['id'=>132,'nombre' => 'SIN INFORMACION']
            /*
            */
        ]);
                  /*
        foreach( $this->arrayNacionalidades as $nacionalidad ) {
                  
                  $n = new Nacionalidad;
                  $n->nombre = $nacionalidad['nombre'];
                  $n->save();

                  DB::create(array(
                  'nombre'  =>  $nacionalidad['nombre']
            ));
            }
                  */
    }
}


