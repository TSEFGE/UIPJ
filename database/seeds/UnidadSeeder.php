<?php

use Illuminate\Database\Seeder;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidad')->insert([
        	
			['id'=> 1,'nombre' => 'UIPJ Pánuco','direccion'=>'Francisco Colorado No. 307, Col. Maza, C.P 93996 Pánuco, Veracruz','latitud'=>'22.0512874', 'longitud'=> '-98.1856205', 'telefono'=>'8462662679','distrito'=>'I','region'=>'Tantoyuca', 'municipio'=> 'Pánuco' , 'nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial I de Pánuco '],
			
			['id'=> 2,'nombre' => 'UIPJ Ozuluama','direccion'=>'Camino a la Comunidad El Laurel, Col. 5 de Mayo, C.P 92080, Ozuluama, Veracruz','latitud'=>'21.6611265', 'longitud'=>'-97.8478812', 'telefono'=>'8462570343','distrito'=>'II','region'=>'Tantoyuca', 'municipio'=> 'Ozuluama de Mascareñas' , 'nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial II de Ozuluama'],
			
			['id'=> 3,'nombre' => 'UIPJ Tantoyuca','direccion'=>'Gabino Barreda No. 207,  Col. El Jagüey, C.P 92126 Tantoyuca, Veracruz','latitud'=>'21.3461728', 'longitud'=>'-98.2298589', 'telefono'=>'7898930273','distrito'=>'III','region'=>'Tantoyuca', 'municipio'=> 'Tantoyuca','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial III de Tantoyuca'],
			
			['id'=> 4,'nombre' => 'UIPJ Huayacocotla','direccion'=>'Corregidora S/N,  Col. Zona Centro, C.P 92600 Huayacocotla, Veracruz','latitud'=>'20.5372438', 'longitud'=>'-98.4794309', 'telefono'=>'7747580320','distrito'=>'IV','region'=>'Tantoyuca', 'municipio'=> 'Huayacocotla','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial IV de Huayacocotla'],
			
			['id'=> 5,'nombre' => 'UIPJ Chicontepec','direccion'=>'Avenida López Mateos S/N ,  Col. Zona Centro, C.P 92700 Chicontepec, Veracruz','latitud'=>'20.9705136', 'longitud'=>'-98.1685895', 'telefono'=>'7468921037','distrito'=>'V','region'=>'Tantoyuca', 'municipio'=> 'Chicontepec','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial V de Chicontepec'],
			
			['id'=> 6,'nombre' => 'UIPJ Tuxpan','direccion'=>'Boulevard Maples Arce No. 183,  Col. Ruiz Cortines, C.P 92880 Tuxpan, Veracruz','latitud'=>'20.9441938', 'longitud'=>'-97.3697989', 'telefono'=>'7831834030','distrito'=>'VI','region'=>'Poza Rica', 'municipio'=> 'Tuxpan','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial VI de Tuxpan'],
			
			['id'=>   7,'nombre' => 'UIPJ Poza Rica','direccion'=>'Boulevard Lázaro Cárdenas No. 800,  Col. Morelos, C.P 93340 Poza Rica, Veracruz','latitud'=>'20.5311883', 'longitud'=>'-97.4707771', 'telefono'=>'7828220137','distrito'=>'VII','region'=>'Poza Rica', 'municipio'=> 'Poza Rica de Hidalgo','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial VII de Poza Rica'],
			
			['id'=>   8,'nombre' => 'UIPJ Papantla','direccion'=>'Francisco I Madero No. 730 Esq.Bugambilias,  Col. Centro, C.P 93400 Papantla, Veracruz','latitud'=>'20.4555001', 'longitud'=>'-97.3342234', 'telefono'=>'7848425418','distrito'=>'VIII','region'=>'Poza Rica', 'municipio'=> 'Papantla','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial VIII de Papantla'],
			
			['id'=>   9,'nombre' => 'UIPJ Misantla','direccion'=>'Leona Vicario No.13 Esquina Camino Real, Col. Linda Vista. Misantla, Veracruz','latitud'=>'19.9438990', 'longitud'=>'-96.8557460', 'telefono'=>'2353232938','distrito'=>'IX','region'=>'Xalapa', 'municipio'=> 'Misantla','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial IX Misantla'],
			
			['id'=>   10,'nombre' => 'UIPJ Jalacingo','direccion'=>'Carretera Federal Teziutlán-Perote S/N Col. Cuartel Segundo. Jalacingo, Veracruz','latitud'=>'19.801852', 'longitud'=>'-97.301624', 'telefono'=>'2263183395','distrito'=>'X','region'=>'Xalapa', 'municipio'=> 'Jalacingo','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial X de Jalacingo'],
			
			['id'=>   11,'nombre' => 'UIPJ Xalapa','direccion'=>'Circuito Guizar y Valencia No. 147,  Col. Reserva Territorial, C.P 91096 Xalapa Enríquez, Veracruz.','latitud'=>'19.508299', 'longitud'=>'-96.875428', 'telefono'=>'2288147214','distrito'=>'XI','region'=>'Xalapa', 'municipio'=> 'Xalapa','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial XI de Xalapa'],
			
			['id'=>   12,'nombre' => 'UIPJ Coatepec','direccion'=>'Zaragoza #2, Col. Centro, Coatepec, Veracruz.','latitud'=>'19.453586', 'longitud'=>'-96.9573011', 'telefono'=>'2288161014','distrito'=>'XII','region'=>'Xalapa', 'municipio'=> 'Coatepec','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial XII de Coatepec'],
			
			['id'=>   13,'nombre' => 'UIPJ Huatusco','direccion'=>'Avenida 1 poniente entre calles 6 y 8 No.824,  Col. Centro, C.P 94100 Huatusco, Veracruz','latitud'=>'19.1502822', 'longitud'=>'-96.967072', 'telefono'=>'2737340157','distrito'=>'XIII','region'=>'Cordoba', 'municipio'=> 'Huatusco','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial XIII de Huatusco'],
			
			['id'=>   14,'nombre' => 'UIPJ Cordoba','direccion'=>'Calle 9 No. 714 esquina con av.9 y 7,  Col. Centro, C.P 94500 Córdoba, Veracruz','latitud'=>'18.8902639', 'longitud'=>'-96.9332738', 'telefono'=>'2717128064','distrito'=>'XIV','region'=>'Cordoba', 'municipio'=> 'Córdoba','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial XIV de Córdoba'],
			
			['id'=>   15,'nombre' => 'UIPJ Orizaba','direccion'=>'Calle Norte 8 entre Oriente 3 y 5 No. 140,  Col. Centro, C.P 94300 Orizaba, Veracruz','latitud'=>'18.8509247', 'longitud'=>'-97.1021856', 'telefono'=>'2727263280','distrito'=>'XV','region'=>'Cordoba', 'municipio'=> 'Orizaba','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial XV de Orizaba'],
			
			['id'=>   16,'nombre' => 'UIPJ Zongolica','direccion'=>'Calle Benito Juárez y Vicente Guerrero S/N,  Col. Centro, C.P 95000 Zongolica, Veracruz ','latitud'=>'18.6669022', 'longitud'=>'-97.0003625', 'telefono'=>'2787326234','distrito'=>'XVI','region'=>'Cordoba', 'municipio'=> 'Zongolica','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial XVI de Zongolica'],
			
			['id'=>   17,'nombre' => 'UIPJ Veracruz','direccion'=>'Km. 8 Carretera Veracruz-Xalapa,  Col. Predio Rustico el Jobo, C.P 91963 Veracruz, Veracruz','latitud'=>'19.1477889', 'longitud'=>'-96.1690636', 'telefono'=>'2299252395','distrito'=>'XVII','region'=>'Veracruz', 'municipio'=> 'Veracruz','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial XVII de Veracruz '],
			
			['id'=>   18,'nombre' => 'UIPJ Cosamaloapan','direccion'=>'Avenida Miguel Hidalgo No. 103 esquina,  Col. Centro, C.P 95400 Cosamaloapan, Veracruz','latitud'=>'18.3637277', 'longitud'=>'-95.7952015', 'telefono'=>'2888820735','distrito'=>'XVIII','region'=>'Cosamaloapan', 'municipio'=> 'Cosamaloapan de Carpio','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial XVIII de Cosamaloapan'],
			
			['id'=>   19,'nombre' => 'UIPJ San Andrés Tuxtla','direccion'=>'Independencia Esq con Callejón Virgilio Uribe S/N,  Col.Centro, C.P 95700 San Andrés Tuxtla, Veracru','latitud'=>'18.4475342', 'longitud'=>'-95.212033', 'telefono'=>'2949420403','distrito'=>'XIX','region'=>'Cosamaloapan', 'municipio'=> 'San Andrés Tuxtla','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial XIX de San Andrés Tuxtla'],
			
			['id'=>   20,'nombre' => 'UIPJ Acayucan','direccion'=>'Zaragoza No. 26,  Col. Centro, C.P 96000 Acayucan, Veracruz','latitud'=>'17.9478309', 'longitud'=>'-94.9131544', 'telefono'=>'9242455277','distrito'=>'XX','region'=>'Coatzacoalcos', 'municipio'=> 'Acayucan','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial XX de Acayucan'],
			
			['id'=>   21,'nombre' => 'UIPJ Coatzacoalcos','direccion'=>'Av.Benito Juárez No. 408,  Col. Centro, C.P 96400 Coatzacoalcos, Veracruz','latitud'=>'18.1454057', 'longitud'=>'-94.4167427', 'telefono'=>'9212153877','distrito'=>'XXI','region'=>'Coatzacoalcos', 'municipio'=> 'Coatzacoalcos','nomCompleto'=>'Unidad Integral de Procuración de Justicia del Distrito Judicial XXI de Coatzacoalcos'],
			
			['id'=>   22,'nombre' => 'UIPJ Álamo (Subunidad)','direccion'=>'Pemex No.101,  Col. Centro, C.P 92730 Álamo Temapache, Veracruz','latitud'=>'20.9152718', 'longitud'=>'-97.6800753', 'telefono'=>'7658449231','distrito'=>'VI','region'=>'Poza Rica', 'municipio'=> 'Álamo Temapache','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial VI de Álamo'],
			
			['id'=>   23,'nombre' => 'UIPJ Perote (Subunidad)','direccion'=>'Calle Agustín Melgar Esq. Con Ponciano Col. Centro. Perote, Veracruz','latitud'=>'19.5645590', 'longitud'=>'-97.2476500', 'telefono'=>'2828252466','distrito'=>'XI','region'=>'Xalapa', 'municipio'=> 'Perote','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XI de Perote'],
			
			['id'=>   24,'nombre' => 'UIPJ Martínez de la torre (Subunidad)','direccion'=>'Calle 5 de Febrero No. 13 Esq. Luis G. Franco, Col. Constitución, Martínez de la Torre, Veracruz','latitud'=>'20.0619520', 'longitud'=>'-97.0617290', 'telefono'=>'2323731996','distrito'=>'XI','region'=>'Xalapa', 'municipio'=> 'Martínez de la torre','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XI de Martínez de la Torre'],
			
			['id'=>   25,'nombre' => 'UIPJ Tlapacoyan (Subunidad)','direccion'=>'Calle Gutiérrez Zamora No. 104 Col. Centro. Tlapacoyan, Veracruz','latitud'=>'19.9647710', 'longitud'=>'-97.2165340', 'telefono'=>'2253151759','distrito'=>'XI','region'=>'Xalapa', 'municipio'=> 'Tlapacoyan','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XI de Tlapacoyan'],
			
			['id'=>   26,'nombre' => 'UIPJ Fortín de las Flores (Subunidad)','direccion'=>'Circuito Guizar y Valencia #707,  Col. Reserva Territorial, C.P 91096 Xalapa Enríquez, Ver','latitud'=>'19.508299', 'longitud'=>'-96.875428', 'telefono'=>'2288147214','distrito'=>'XIV','region'=>'Cordoba', 'municipio'=> 'Xalapa','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XIV de Fortín de Las Flores'],
			
			['id'=>   27,'nombre' => 'UIPJ Paso del Macho (Subunidad)','direccion'=>'Circuito Guizar y Valencia #707,  Col. Reserva Territorial, C.P 91096 Xalapa Enríquez, Ver','latitud'=>'19.508299', 'longitud'=>'-96.875428', 'telefono'=>'3737380491','distrito'=>'XIV','region'=>'Cordoba', 'municipio'=> 'Xalapa','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XIV de Paso del Macho'],
			
			['id'=>   28,'nombre' => 'UIPJ Cd. Mendoza (Subunidad)','direccion'=>'Circuito Guizar y Valencia #707,  Col. Reserva Territorial, C.P 91096 Xalapa Enríquez, Ver','latitud'=>'19.508299', 'longitud'=>'-96.875428', 'telefono'=>'2288147214','distrito'=>'XIV','region'=>'Cordoba', 'municipio'=> 'Xalapa','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XIV de CD. Mendoza'],
			
			['id'=>   29,'nombre' => 'UIPJ Las Choapas (Subunidad)','direccion'=>'Francisco Zarco No. 405,  Col. Reforma, C.P 96980 Las Choapas, Veracruz','latitud'=>'17.9167487', 'longitud'=>'-94.0985045', 'telefono'=>'9232375278','distrito'=>'XXI','region'=>'Coatzacoalcos', 'municipio'=> 'Las Choapas','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XXI de Las Choapas'],
			
			['id'=>   30,'nombre' => 'UIPJ Minatitlán (Subunidad)','direccion'=>'Guillermo Prieto No.1,  Col.Santa Clara, C.P 96730 Minatitlán, Veracruz','latitud'=>'17.9923559', 'longitud'=>'-94.5573519', 'telefono'=>'9222231105','distrito'=>'XXI','region'=>'Coatzacoalcos', 'municipio'=> 'Minatitlán','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XXI de Minatitlán'],
			
			['id'=>   31,'nombre' => 'UIPJ Nanchital (Subunidad)','direccion'=>'San Javier No.1,  Col. Guadalupe Tepeyac, C.P 96360 Nanchital, Veracruz','latitud'=>'18.0542682', 'longitud'=>'-94.4082408', 'telefono'=>'9212160682','distrito'=>'XXI','region'=>'Coatzacoalcos', 'municipio'=> 'Nanchital de Lázaro Cárdenas del Río','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XXI de Nanchital'],
			
			['id'=>   32,'nombre' => 'UIPJ Cd. Isla (Subunidad)','direccion'=>'Calle Raúl Sandoval Esq. Nicolás bravo,  Col. Centro, C.P 95640 Cd. Isla, Veracruz','latitud'=>'18.0233918', 'longitud'=>'-95.5280838', 'telefono'=>'2838740114','distrito'=>'XVIII','region'=>'Cosamaloapan', 'municipio'=> 'Isla','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XVIII de CD. Isla'],
			
			['id'=>   33,'nombre' => 'UIPJ Playa Vicente(Subunidad)','direccion'=>'Calle de la Rosa S/N  Col. Emiliano Zapata, C.P 95600, Playa Vicente, Veracruz','latitud'=>'17.8254751', 'longitud'=>'-95.8125331', 'telefono'=>'2838710493','distrito'=>'XVIII','region'=>'Cosamaloapan', 'municipio'=> 'Playa Vicente','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XVIII de Playa Vicente'],
			
			['id'=>   34,'nombre' => 'UIPJ Boca del Rio (Subunidad)','direccion'=>'Boulevard Adolfo Ruíz Cortines No.19, Col. Fraccionamiento Costa Verde, C.P 94299, Boca del Río, Ver','latitud'=>'19.1676436', 'longitud'=>'-96.1159244', 'telefono'=>'2299351591','distrito'=>'XVII','region'=>'Veracruz', 'municipio'=> 'Boca del Río','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XVII de Boca del Río'],
			
			['id'=>   35,'nombre' => 'UIPJ Tatahuicapan (Subunidad)','direccion'=>'Emiliano Zapata S/N bajos del Palacio  Municipal, Col. Centro, C.P 95940, Tatahuicapan de Juárez, V','latitud'=>'18.2455629', 'longitud'=>'-94.7606018', 'telefono'=>'9242193085','distrito'=>'XXI','region'=>'Coatzacoalcos', 'municipio'=> 'Tatahuicapan de Juárez','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XXI de Tatahuicapan'],
			
			['id'=>   36,'nombre' => 'UIPJ Cosoleacaque (Subunidad)','direccion'=>'Héroes de Totoapan No. 49 Altos, Col. Barrio Primero, C.P 96350, Cosoleacaque, Veracruz','latitud'=>'17.9968575', 'longitud'=>'-94.6371407', 'telefono'=>'9222640461','distrito'=>'XXI','region'=>'Coatzacoalcos', 'municipio'=> 'Cosoleacaque','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XXI de Cosoleacaque'],
			
			['id'=>   37,'nombre' => 'UIPJ Jesús Carranza (Subunidad)','direccion'=>'Aldama No.115, entre Lázaro Cárdenas y  Porfirio Díaz , Col. Centro, C.P 96950, Jesús Carranza, Ver','latitud'=>'17.4356839', 'longitud'=>'-95.0296701', 'telefono'=>'9242440280','distrito'=>'XX','region'=>'Coatzacoalcos', 'municipio'=> 'Jesús Carranza','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XX de Jesús Carranza'],
			
			['id'=>   38,'nombre' => 'Fiscalia Itinerante Huayacocotla','direccion'=>'Unidad Móvil','latitud'=>'Sin Dato', 'longitud'=>'Sin Dato', 'telefono'=>'Sin Dato','distrito'=>'VII','region'=>'Poza Rica', 'municipio'=> 'Huayacocotla','nomCompleto'=>'Sin Dato'],
			
			['id'=>   39,'nombre' => 'Fiscalia Itinerante Tantoyuca','direccion'=>'Unidad Móvil','latitud'=>'Sin Dato', 'longitud'=>'Sin Dato', 'telefono'=>'Sin Dato','distrito'=>'III','region'=>'Tantoyuca', 'municipio'=> 'Tantoyuca','nomCompleto'=>'Sin Dato'],
			
			['id'=>   40,'nombre' => 'Fiscalia Itinerante Chicontepec','direccion'=>'Unidad Móvil','latitud'=>'Sin Dato', 'longitud'=>'Sin Dato', 'telefono'=>'Sin Dato','distrito'=>'III','region'=>'Tantoyuca', 'municipio'=> 'Chicontepec','nomCompleto'=>'Sin Dato'],
			
			['id'=>   41,'nombre' => 'Fiscalia Itinerante Papantla','direccion'=>'Unidad Móvil','latitud'=>'Sin Dato', 'longitud'=>'Sin Dato', 'telefono'=>'Sin Dato','distrito'=>'VII','region'=>'Poza Rica', 'municipio'=> 'Papantla','nomCompleto'=>'Sin Dato'],
			
			['id'=>   42,'nombre' => 'Fiscalia Itinerante Orizaba','direccion'=>'Unidad Móvil','latitud'=>'Sin Dato', 'longitud'=>'Sin Dato', 'telefono'=>'Sin Dato','distrito'=>'XIV','region'=>'Cordoba', 'municipio'=> 'Orizaba','nomCompleto'=>'Sin Dato'],
			
			['id'=>   43,'nombre' => 'Fiscalia Itinerante Zongolica','direccion'=>'Unidad Móvil','latitud'=>'Sin Dato', 'longitud'=>'Sin Dato', 'telefono'=>'Sin Dato','distrito'=>'XIV','region'=>'Cordoba', 'municipio'=> 'Zongolica','nomCompleto'=>'Sin Dato'],
			
			['id'=>   44,'nombre' => 'Fiscalia Itinerante Uxpanapa','direccion'=>'Unidad Móvil','latitud'=>'Sin Dato', 'longitud'=>'Sin Dato', 'telefono'=>'Sin Dato','distrito'=>'XXI','region'=>'Coatzacoalcos', 'municipio'=> 'Uxpanapa','nomCompleto'=>'Sin Dato'],
			
			['id'=>   45,'nombre' => 'UIPJ Tierra Blanca(Subunidad)','direccion'=>'Miguel Lerdo No. 1201 entre Arista y Vicente Guerrero, Col. Lomas del Jazmin C.P 95100, Tierra Blanc','latitud'=>'Sin Dato', 'longitud'=>'Sin Dato', 'telefono'=>'2747432950','distrito'=>'XVIII','region'=>'Cosamaloapan', 'municipio'=> 'Tierra Blanca','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XX de Tierra Blanca'],
			
			['id'=>   46,'nombre' => 'UIPJ Cardel (Subunidad)','direccion'=>'Dr. Juan Martínez No. 72, Col. Centro C.P 91680, Cardel, Veracruz','latitud'=>'19.3667787', 'longitud'=>'-96.3788834', 'telefono'=>'2969621387','distrito'=>'XVII','region'=>'Veracruz', 'municipio'=> 'La Antigua','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XVII de Cardel'],
			
			['id'=>   47,'nombre' => 'Fiscalía de Investigaciones Ministeriales','direccion'=>'Circuito Guizar y Valencia No. 707, Col. Reserva Territorial, C.P 91096, Xalapa, Veracruz','latitud'=>'19.508299', 'longitud'=>'-96.875428', 'telefono'=>'2288416170','distrito'=>'XI','region'=>'Xalapa', 'municipio'=> 'Xalapa','nomCompleto'=>'Fiscalía de Investigaciones Ministeriales '],
			
			['id'=>   48,'nombre' => 'Tezonapa','direccion'=>'Calle Morelos entre Boulevard Emiliano  Zapata Avenida 5 de Mayo, Col. Las Flores, C.P 95096, Tezon','latitud'=>'18.6015308', 'longitud'=>'-96.6871915', 'telefono'=>'2787360567','distrito'=>'XIV','region'=>'Cordoba', 'municipio'=> 'Tezonapa','nomCompleto'=>'Fiscalia Tezonapa'],
			
			['id'=>   49,'nombre' => 'UIPJ Tihuatlan','direccion'=>'Cuauhtémoc No. 36 Esq. Corregidora Col. Centro, C.P 92900, Tihuatlán, Veracruz.','latitud'=>'20.7208383', 'longitud'=>'-97.5373465', 'telefono'=>'7468430645','distrito'=>'VII','region'=>'Poza Rica', 'municipio'=> 'Tihuatlán','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial VII de Tihuatlán'],
			
			['id'=>   50,'nombre' => 'UIPJ Alvarado','direccion'=>'Hidalgo No.100 esquina 15 de Octubre Col. Centro, C.P 95270, Alvarado, Veracruz','latitud'=>'18.7670882', 'longitud'=>'-95.7583932', 'telefono'=>'2979732360','distrito'=>'XVII','region'=>'Veracruz', 'municipio'=> 'Alvarado','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XVII de Alvarado'],
			
			['id'=>   51,'nombre' => 'UIPJ Tres Valles','direccion'=>'Calle Benito Juarez No.408 Altos Col. Centro, C.P 95300, Tres Valles, Veracruz','latitud'=>'18.237547', 'longitud'=>'-96.1338859', 'telefono'=>'2888851214','distrito'=>'XVIII','region'=>'Cosamaloapan', 'municipio'=> 'Tres Valles','nomCompleto'=>'Micro Unidad Integral de Procuración de Justicia del Distrito Judicial XVIII de Tres Valles'],
			
			['id'=>   52,'nombre' => 'Fiscalía Coordinadora Especializada (Familia, Mujeres , Niñas y Niños y de Trata) XALAPA','direccion'=>'Avila Camacho No.191 Col. Ferrer Guardia, C.P 91020 Xalapa, Veracruz','latitud'=>'19.5312089', 'longitud'=>'-96.9291648', 'telefono'=>'2288203069','distrito'=>'XIV','region'=>'Xalapa', 'municipio'=> 'Xalapa','nomCompleto'=>'Fiscalía Coordinadora Especializada (Familia, Mujeres , Niñas y Niños y de Trata) XALAPA'],
			
			['id'=>   53,'nombre' => 'Fiscalía Coordinadora Especializada (Familia, Mujeres , Niñas y Niños y de Trata) VERACRUZ','direccion'=>'Echeven No. 2567 Col. Centro C.P 94700, Veracruz, Veracruz','latitud'=>'19.1820771', 'longitud'=>'-96.1469781', 'telefono'=>'2299329386','distrito'=>'XVII','region'=>'Veracruz', 'municipio'=> 'Maltrata','nomCompleto'=>'Fiscalía Coordinadora Especializada (Familia, Mujeres , Niñas y Niños y de Trata) VERACRUZ'],
			
			['id'=>   54,'nombre' => 'Fiscalía Coordinadora Especializada (Familia, Mujeres , Niñas y Niños y de Trata) COSAMALOAPAN','direccion'=>'Hermenegildo Galeana No. 507 Col. Centro C.P 95400, Cosamaloapan, Veracruz','latitud'=>'18.3707499', 'longitud'=>'-95.7969089', 'telefono'=>'2888824784','distrito'=>'XIX','region'=>'Cosamaloapan', 'municipio'=> 'Cosamaloapan de Carpio','nomCompleto'=>'Fiscalía Coordinadora Especializada (Familia, Mujeres , Niñas y Niños y de Trata) COSAMALOAPAN'],
			
			['id'=>   55,'nombre' => 'UIPJ Uxpanapa(Agencia Especializada En Delitos Contra La Libertad Sexual Y La Familia)','direccion'=>'Calle Naciones Unidas No. 35 Esquina Lázaro Cárdenas Col. Centro C.P 96998 Uxpanapa, Veracruz','latitud'=>'Sin Dato', 'longitud'=>'Sin Dato', 'telefono'=>'9222443506','distrito'=>'XXI','region'=>'Coatzacoalcos', 'municipio'=> 'Uxpanapa','nomCompleto'=>'sin Dato'],
			
			['id'=>   56,'nombre' => 'Fiscalia Itinerante San Andres Tuxtla','direccion'=>'Calle Zamora No. 101, Esq. Francisco Col. Centro, C.P 95700 San Andrés Tuxtla, Veracruz','latitud'=>'18.4438894', 'longitud'=>'-95.2132766', 'telefono'=>'2949427092','distrito'=>'XIX','region'=>'Cosamaloapan', 'municipio'=> 'San Andrés Tuxtla' , 'nomCompleto'=>'Fiscalia Itinerante San Andrés Tuxtla']


        ]);
    }
}
