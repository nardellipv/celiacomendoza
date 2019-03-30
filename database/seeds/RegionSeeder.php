<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->delete();

        $regions = [
            ['province_id' => 02, 'name' => 'Comuna 1'],
            ['province_id' => 02, 'name' => 'Comuna 2'],
            ['province_id' => 02, 'name' => 'Comuna 3'],
            ['province_id' => 02, 'name' => 'Comuna 4'],
            ['province_id' => 02, 'name' => 'Comuna 5'],
            ['province_id' => 02, 'name' => 'Comuna 6'],
            ['province_id' => 02, 'name' => 'Comuna 7'],
            ['province_id' => 02, 'name' => 'Comuna 8'],
            ['province_id' => 02, 'name' => 'Comuna 9'],
            ['province_id' => 02, 'name' => 'Comuna 10'],
            ['province_id' => 02, 'name' => 'Comuna 11'],
            ['province_id' => 02, 'name' => 'Comuna 12'],
            ['province_id' => 02, 'name' => 'Comuna 13'],
            ['province_id' => 02, 'name' => 'Comuna 14'],
            ['province_id' => 02, 'name' => 'Comuna 15'],
            ['province_id' => 06, 'name' => 'Adolfo Alsina'],
            ['province_id' => 06, 'name' => 'Adolfo Gonzales Chaves'],
            ['province_id' => 06, 'name' => 'Alberti'],
            ['province_id' => 06, 'name' => 'Almirante Brown'],
            ['province_id' => 06, 'name' => 'Avellaneda'],
            ['province_id' => 06, 'name' => 'Ayacucho'],
            ['province_id' => 06, 'name' => 'Azul'],
            ['province_id' => 06, 'name' => 'Bahía Blanca'],
            ['province_id' => 06, 'name' => 'Balcarce'],
            ['province_id' => 06, 'name' => 'Baradero'],
            ['province_id' => 06, 'name' => 'Arrecifes'],
            ['province_id' => 06, 'name' => 'Benito Juárez'],
            ['province_id' => 06, 'name' => 'Berazategui'],
            ['province_id' => 06, 'name' => 'Berisso'],
            ['province_id' => 06, 'name' => 'Bolívar'],
            ['province_id' => 06, 'name' => 'Bragado'],
            ['province_id' => 06, 'name' => 'Brandsen'],
            ['province_id' => 06, 'name' => 'Campana'],
            ['province_id' => 06, 'name' => 'Cañuelas'],
            ['province_id' => 06, 'name' => 'Capitán Sarmiento'],
            ['province_id' => 06, 'name' => 'Carlos Casares'],
            ['province_id' => 06, 'name' => 'Carlos Tejedor'],
            ['province_id' => 06, 'name' => 'Carmen de Areco'],
            ['province_id' => 06, 'name' => 'Castelli'],
            ['province_id' => 06, 'name' => 'Colón'],
            ['province_id' => 06, 'name' => 'Coronel de Marina Leonardo Rosales'],
            ['province_id' => 06, 'name' => 'Coronel Dorrego'],
            ['province_id' => 06, 'name' => 'Coronel Pringles'],
            ['province_id' => 06, 'name' => 'Coronel Suárez'],
            ['province_id' => 06, 'name' => 'Chacabuco'],
            ['province_id' => 06, 'name' => 'Chascomús'],
            ['province_id' => 06, 'name' => 'Chivilcoy'],
            ['province_id' => 06, 'name' => 'Daireaux'],
            ['province_id' => 06, 'name' => 'Dolores'],
            ['province_id' => 06, 'name' => 'Ensenada'],
            ['province_id' => 06, 'name' => 'Escobar'],
            ['province_id' => 06, 'name' => 'Esteban Echeverría'],
            ['province_id' => 06, 'name' => 'Exaltación de la Cruz'],
            ['province_id' => 06, 'name' => 'Ezeiza'],
            ['province_id' => 06, 'name' => 'Florencio Varela'],
            ['province_id' => 06, 'name' => 'Florentino Ameghino'],
            ['province_id' => 06, 'name' => 'General Alvarado'],
            ['province_id' => 06, 'name' => 'General Alvear'],
            ['province_id' => 06, 'name' => 'General Arenales'],
            ['province_id' => 06, 'name' => 'General Belgrano'],
            ['province_id' => 06, 'name' => 'General Guido'],
            ['province_id' => 06, 'name' => 'General Juan Madariaga'],
            ['province_id' => 06, 'name' => 'General La Madrid'],
            ['province_id' => 06, 'name' => 'General Las Heras'],
            ['province_id' => 06, 'name' => 'General Lavalle'],
            ['province_id' => 06, 'name' => 'General Paz'],
            ['province_id' => 06, 'name' => 'General Pinto'],
            ['province_id' => 06, 'name' => 'General Pueyrredón'],
            ['province_id' => 06, 'name' => 'General Rodríguez'],
            ['province_id' => 06, 'name' => 'General San Martín'],
            ['province_id' => 06, 'name' => 'General Viamonte'],
            ['province_id' => 06, 'name' => 'General Villegas'],
            ['province_id' => 06, 'name' => 'Guaminí'],
            ['province_id' => 06, 'name' => 'Hipólito Yrigoyen'],
            ['province_id' => 06, 'name' => 'Hurlingham'],
            ['province_id' => 06, 'name' => 'Ituzaingó'],
            ['province_id' => 06, 'name' => 'José C. Paz'],
            ['province_id' => 06, 'name' => 'Junín'],
            ['province_id' => 06, 'name' => 'La Costa'],
            ['province_id' => 06, 'name' => 'La Matanza'],
            ['province_id' => 06, 'name' => 'Lanús'],
            ['province_id' => 06, 'name' => 'La Plata'],
            ['province_id' => 06, 'name' => 'Laprida'],
            ['province_id' => 06, 'name' => 'Las Flores'],
            ['province_id' => 06, 'name' => 'Leandro N. Alem'],
            ['province_id' => 06, 'name' => 'Lincoln'],
            ['province_id' => 06, 'name' => 'Lobería'],
            ['province_id' => 06, 'name' => 'Lobos'],
            ['province_id' => 06, 'name' => 'Lomas de Zamora'],
            ['province_id' => 06, 'name' => 'Luján'],
            ['province_id' => 06, 'name' => 'Magdalena'],
            ['province_id' => 06, 'name' => 'Maipú'],
            ['province_id' => 06, 'name' => 'Malvinas Argentinas'],
            ['province_id' => 06, 'name' => 'Mar Chiquita'],
            ['province_id' => 06, 'name' => 'Marcos Paz'],
            ['province_id' => 06, 'name' => 'Mercedes'],
            ['province_id' => 06, 'name' => 'Merlo'],
            ['province_id' => 06, 'name' => 'Monte'],
            ['province_id' => 06, 'name' => 'Monte Hermoso'],
            ['province_id' => 06, 'name' => 'Moreno'],
            ['province_id' => 06, 'name' => 'Morón'],
            ['province_id' => 06, 'name' => 'Navarro'],
            ['province_id' => 06, 'name' => 'Necochea'],
            ['province_id' => 06, 'name' => '9 de Julio'],
            ['province_id' => 06, 'name' => 'Olavarría'],
            ['province_id' => 06, 'name' => 'Patagones'],
            ['province_id' => 06, 'name' => 'Pehuajó'],
            ['province_id' => 06, 'name' => 'Pellegrini'],
            ['province_id' => 06, 'name' => 'Pergamino'],
            ['province_id' => 06, 'name' => 'Pila'],
            ['province_id' => 06, 'name' => 'Pilar'],
            ['province_id' => 06, 'name' => 'Pinamar'],
            ['province_id' => 06, 'name' => 'Presidente Perón'],
            ['province_id' => 06, 'name' => 'Puán'],
            ['province_id' => 06, 'name' => 'Punta Indio'],
            ['province_id' => 06, 'name' => 'Quilmes'],
            ['province_id' => 06, 'name' => 'Ramallo'],
            ['province_id' => 06, 'name' => 'Rauch'],
            ['province_id' => 06, 'name' => 'Rivadavia'],
            ['province_id' => 06, 'name' => 'Rojas'],
            ['province_id' => 06, 'name' => 'Roque Pérez'],
            ['province_id' => 06, 'name' => 'Saavedra'],
            ['province_id' => 06, 'name' => 'Saladillo'],
            ['province_id' => 06, 'name' => 'Salto'],
            ['province_id' => 06, 'name' => 'Salliqueló'],
            ['province_id' => 06, 'name' => 'San Andrés de Giles'],
            ['province_id' => 06, 'name' => 'San Antonio de Areco'],
            ['province_id' => 06, 'name' => 'San Cayetano'],
            ['province_id' => 06, 'name' => 'San Fernando'],
            ['province_id' => 06, 'name' => 'San Isidro'],
            ['province_id' => 06, 'name' => 'San Miguel'],
            ['province_id' => 06, 'name' => 'San Nicolás'],
            ['province_id' => 06, 'name' => 'San Pedro'],
            ['province_id' => 06, 'name' => 'San Vicente'],
            ['province_id' => 06, 'name' => 'Suipacha'],
            ['province_id' => 06, 'name' => 'Tandil'],
            ['province_id' => 06, 'name' => 'Tapalqué'],
            ['province_id' => 06, 'name' => 'Tigre'],
            ['province_id' => 06, 'name' => 'Tordillo'],
            ['province_id' => 06, 'name' => 'Tornquist'],
            ['province_id' => 06, 'name' => 'Trenque Lauquen'],
            ['province_id' => 06, 'name' => 'Tres Arroyos'],
            ['province_id' => 06, 'name' => 'Tres de Febrero'],
            ['province_id' => 06, 'name' => 'Tres Lomas'],
            ['province_id' => 06, 'name' => '25 de Mayo'],
            ['province_id' => 06, 'name' => 'Vicente López'],
            ['province_id' => 06, 'name' => 'Villa Gesell'],
            ['province_id' => 06, 'name' => 'Villarino'],
            ['province_id' => 06, 'name' => 'Zárate'],
            ['province_id' => 10, 'name' => 'Ambato'],
            ['province_id' => 10, 'name' => 'Ancasti'],
            ['province_id' => 10, 'name' => 'Andalgalá'],
            ['province_id' => 10, 'name' => 'Antofagasta de la Sierra'],
            ['province_id' => 10, 'name' => 'Belén'],
            ['province_id' => 10, 'name' => 'Capayán'],
            ['province_id' => 10, 'name' => 'Capital'],
            ['province_id' => 10, 'name' => 'El Alto'],
            ['province_id' => 10, 'name' => 'Fray Mamerto Esquiú'],
            ['province_id' => 10, 'name' => 'La Paz'],
            ['province_id' => 10, 'name' => 'Paclín'],
            ['province_id' => 10, 'name' => 'Pomán'],
            ['province_id' => 10, 'name' => 'Santa María'],
            ['province_id' => 10, 'name' => 'Santa Rosa'],
            ['province_id' => 10, 'name' => 'Tinogasta'],
            ['province_id' => 10, 'name' => 'Valle Viejo'],
            ['province_id' => 14, 'name' => 'Calamuchita'],
            ['province_id' => 14, 'name' => 'Capital'],
            ['province_id' => 14, 'name' => 'Colón'],
            ['province_id' => 14, 'name' => 'Cruz del Eje'],
            ['province_id' => 14, 'name' => 'General Roca'],
            ['province_id' => 14, 'name' => 'General San Martín'],
            ['province_id' => 14, 'name' => 'Ischilín'],
            ['province_id' => 14, 'name' => 'Juárez Celman'],
            ['province_id' => 14, 'name' => 'Marcos Juárez'],
            ['province_id' => 14, 'name' => 'Minas'],
            ['province_id' => 14, 'name' => 'Pocho'],
            ['province_id' => 14, 'name' => 'Presidente Roque Sáenz Peña'],
            ['province_id' => 14, 'name' => 'Punilla'],
            ['province_id' => 14, 'name' => 'Río Cuarto'],
            ['province_id' => 14, 'name' => 'Río Primero'],
            ['province_id' => 14, 'name' => 'Río Seco'],
            ['province_id' => 14, 'name' => 'Río Segundo'],
            ['province_id' => 14, 'name' => 'San Alberto'],
            ['province_id' => 14, 'name' => 'San Javier'],
            ['province_id' => 14, 'name' => 'San Justo'],
            ['province_id' => 14, 'name' => 'Santa María'],
            ['province_id' => 14, 'name' => 'Sobremonte'],
            ['province_id' => 14, 'name' => 'Tercero Arriba'],
            ['province_id' => 14, 'name' => 'Totoral'],
            ['province_id' => 14, 'name' => 'Tulumba'],
            ['province_id' => 14, 'name' => 'Unión'],
            ['province_id' => 18, 'name' => 'Bella Vista'],
            ['province_id' => 18, 'name' => 'Berón de Astrada'],
            ['province_id' => 18, 'name' => 'Capital'],
            ['province_id' => 18, 'name' => 'Concepción'],
            ['province_id' => 18, 'name' => 'Curuzú Cuatiá'],
            ['province_id' => 18, 'name' => 'Empedrado'],
            ['province_id' => 18, 'name' => 'Esquina'],
            ['province_id' => 18, 'name' => 'General Alvear'],
            ['province_id' => 18, 'name' => 'General Paz'],
            ['province_id' => 18, 'name' => 'Goya'],
            ['province_id' => 18, 'name' => 'Itatí'],
            ['province_id' => 18, 'name' => 'Ituzaingó'],
            ['province_id' => 18, 'name' => 'Lavalle'],
            ['province_id' => 18, 'name' => 'Mburucuyá'],
            ['province_id' => 18, 'name' => 'Mercedes'],
            ['province_id' => 18, 'name' => 'Monte Caseros'],
            ['province_id' => 18, 'name' => 'Paso de los Libres'],
            ['province_id' => 18, 'name' => 'Saladas'],
            ['province_id' => 18, 'name' => 'San Cosme'],
            ['province_id' => 18, 'name' => 'San Luis del Palmar'],
            ['province_id' => 18, 'name' => 'San Martín'],
            ['province_id' => 18, 'name' => 'San Miguel'],
            ['province_id' => 18, 'name' => 'San Roque'],
            ['province_id' => 18, 'name' => 'Santo Tomé'],
            ['province_id' => 18, 'name' => 'Sauce'],
            ['province_id' => 22, 'name' => 'Almirante Brown'],
            ['province_id' => 22, 'name' => 'Bermejo'],
            ['province_id' => 22, 'name' => 'Comandante Fernández'],
            ['province_id' => 22, 'name' => 'Chacabuco'],
            ['province_id' => 22, 'name' => '12 de Octubre'],
            ['province_id' => 22, 'name' => '2 de Abril'],
            ['province_id' => 22, 'name' => 'Fray Justo Santa María de Oro'],
            ['province_id' => 22, 'name' => 'General Belgrano'],
            ['province_id' => 22, 'name' => 'General Donovan'],
            ['province_id' => 22, 'name' => 'General Güemes'],
            ['province_id' => 22, 'name' => 'Independencia'],
            ['province_id' => 22, 'name' => 'Libertad'],
            ['province_id' => 22, 'name' => 'Libertador General San Martín'],
            ['province_id' => 22, 'name' => 'Maipú'],
            ['province_id' => 22, 'name' => 'Mayor Luis J. Fontana'],
            ['province_id' => 22, 'name' => '9 de Julio'],
            ['province_id' => 22, 'name' => 'OHiggins'],
            ['province_id' => 22, 'name' => 'Presidencia de la Plaza'],
            ['province_id' => 22, 'name' => '1º de Mayo'],
            ['province_id' => 22, 'name' => 'Quitilipi'],
            ['province_id' => 22, 'name' => 'San Fernando'],
            ['province_id' => 22, 'name' => 'San Lorenzo'],
            ['province_id' => 22, 'name' => 'Sargento Cabral'],
            ['province_id' => 22, 'name' => 'Tapenagá'],
            ['province_id' => 22, 'name' => '25 de Mayo'],
            ['province_id' => 26, 'name' => 'Biedma'],
            ['province_id' => 26, 'name' => 'Cushamen'],
            ['province_id' => 26, 'name' => 'Escalante'],
            ['province_id' => 26, 'name' => 'Florentino Ameghino'],
            ['province_id' => 26, 'name' => 'Futaleufú'],
            ['province_id' => 26, 'name' => 'Gaiman'],
            ['province_id' => 26, 'name' => 'Gastre'],
            ['province_id' => 26, 'name' => 'Languiñeo'],
            ['province_id' => 26, 'name' => 'Mártires'],
            ['province_id' => 26, 'name' => 'Paso de Indios'],
            ['province_id' => 26, 'name' => 'Rawson'],
            ['province_id' => 26, 'name' => 'Río Senguer'],
            ['province_id' => 26, 'name' => 'Sarmiento'],
            ['province_id' => 26, 'name' => 'Tehuelches'],
            ['province_id' => 26, 'name' => 'Telsen'],
            ['province_id' => 30, 'name' => 'Colón'],
            ['province_id' => 30, 'name' => 'Concordia'],
            ['province_id' => 30, 'name' => 'Diamante'],
            ['province_id' => 30, 'name' => 'Federación'],
            ['province_id' => 30, 'name' => 'Federal'],
            ['province_id' => 30, 'name' => 'Feliciano'],
            ['province_id' => 30, 'name' => 'Gualeguay'],
            ['province_id' => 30, 'name' => 'Gualeguaychú'],
            ['province_id' => 30, 'name' => 'Islas del Ibicuy'],
            ['province_id' => 30, 'name' => 'La Paz'],
            ['province_id' => 30, 'name' => 'Nogoyá'],
            ['province_id' => 30, 'name' => 'Paraná'],
            ['province_id' => 30, 'name' => 'San Salvador'],
            ['province_id' => 30, 'name' => 'Tala'],
            ['province_id' => 30, 'name' => 'Uruguay'],
            ['province_id' => 30, 'name' => 'Victoria'],
            ['province_id' => 30, 'name' => 'Villaguay'],
            ['province_id' => 34, 'name' => 'Bermejo'],
            ['province_id' => 34, 'name' => 'Formosa'],
            ['province_id' => 34, 'name' => 'Laishi'],
            ['province_id' => 34, 'name' => 'Matacos'],
            ['province_id' => 34, 'name' => 'Patiño'],
            ['province_id' => 34, 'name' => 'Pilagás'],
            ['province_id' => 34, 'name' => 'Pilcomayo'],
            ['province_id' => 34, 'name' => 'Pirané'],
            ['province_id' => 34, 'name' => 'Ramón Lista'],
            ['province_id' => 38, 'name' => 'Cochinoca'],
            ['province_id' => 38, 'name' => 'El Carmen'],
            ['province_id' => 38, 'name' => 'Dr. Manuel Belgrano'],
            ['province_id' => 38, 'name' => 'Humahuaca'],
            ['province_id' => 38, 'name' => 'Ledesma'],
            ['province_id' => 38, 'name' => 'Palpalá'],
            ['province_id' => 38, 'name' => 'Rinconada'],
            ['province_id' => 38, 'name' => 'San Antonio'],
            ['province_id' => 38, 'name' => 'San Pedro'],
            ['province_id' => 38, 'name' => 'Santa Bárbara'],
            ['province_id' => 38, 'name' => 'Santa Catalina'],
            ['province_id' => 38, 'name' => 'Susques'],
            ['province_id' => 38, 'name' => 'Tilcara'],
            ['province_id' => 38, 'name' => 'Tumbaya'],
            ['province_id' => 38, 'name' => 'Valle Grande'],
            ['province_id' => 38, 'name' => 'Yavi'],
            ['province_id' => 42, 'name' => 'Atreucó'],
            ['province_id' => 42, 'name' => 'Caleu Caleu'],
            ['province_id' => 42, 'name' => 'Capital'],
            ['province_id' => 42, 'name' => 'Catriló'],
            ['province_id' => 42, 'name' => 'Conhelo'],
            ['province_id' => 42, 'name' => 'Curacó'],
            ['province_id' => 42, 'name' => 'Chalileo'],
            ['province_id' => 42, 'name' => 'Chapaleufú'],
            ['province_id' => 42, 'name' => 'Chical Co'],
            ['province_id' => 42, 'name' => 'Guatraché'],
            ['province_id' => 42, 'name' => 'Hucal'],
            ['province_id' => 42, 'name' => 'Lihuel Calel'],
            ['province_id' => 42, 'name' => 'Limay Mahuida'],
            ['province_id' => 42, 'name' => 'Loventué'],
            ['province_id' => 42, 'name' => 'Maracó'],
            ['province_id' => 42, 'name' => 'Puelén'],
            ['province_id' => 42, 'name' => 'Quemú Quemú'],
            ['province_id' => 42, 'name' => 'Rancul'],
            ['province_id' => 42, 'name' => 'Realicó'],
            ['province_id' => 42, 'name' => 'Toay'],
            ['province_id' => 42, 'name' => 'Trenel'],
            ['province_id' => 42, 'name' => 'Utracán'],
            ['province_id' => 46, 'name' => 'Arauco'],
            ['province_id' => 46, 'name' => 'Capital'],
            ['province_id' => 46, 'name' => 'Castro Barros'],
            ['province_id' => 46, 'name' => 'Coronel Felipe Varela'],
            ['province_id' => 46, 'name' => 'Chamical'],
            ['province_id' => 46, 'name' => 'Chilecito'],
            ['province_id' => 46, 'name' => 'Famatina'],
            ['province_id' => 46, 'name' => 'General Ángel V. Peñaloza'],
            ['province_id' => 46, 'name' => 'General Belgrano'],
            ['province_id' => 46, 'name' => 'General Juan Facundo Quiroga'],
            ['province_id' => 46, 'name' => 'General Lamadrid'],
            ['province_id' => 46, 'name' => 'General Ocampo'],
            ['province_id' => 46, 'name' => 'General San Martín'],
            ['province_id' => 46, 'name' => 'Vinchina'],
            ['province_id' => 46, 'name' => 'Independencia'],
            ['province_id' => 46, 'name' => 'Rosario Vera Peñaloza'],
            ['province_id' => 46, 'name' => 'San Blas de los Sauces'],
            ['province_id' => 46, 'name' => 'Sanagasta'],
            ['province_id' => 50, 'name' => 'Capital'],
            ['province_id' => 50, 'name' => 'General Alvear'],
            ['province_id' => 50, 'name' => 'Godoy Cruz'],
            ['province_id' => 50, 'name' => 'Guaymallén'],
            ['province_id' => 50, 'name' => 'Junín'],
            ['province_id' => 50, 'name' => 'La Paz'],
            ['province_id' => 50, 'name' => 'Las Heras'],
            ['province_id' => 50, 'name' => 'Lavalle'],
            ['province_id' => 50, 'name' => 'Luján de Cuyo'],
            ['province_id' => 50, 'name' => 'Maipú'],
            ['province_id' => 50, 'name' => 'Malargüe'],
            ['province_id' => 50, 'name' => 'Rivadavia'],
            ['province_id' => 50, 'name' => 'San Carlos'],
            ['province_id' => 50, 'name' => 'San Martín'],
            ['province_id' => 50, 'name' => 'San Rafael'],
            ['province_id' => 50, 'name' => 'Santa Rosa'],
            ['province_id' => 50, 'name' => 'Tunuyán'],
            ['province_id' => 50, 'name' => 'Tupungato'],
            ['province_id' => 54, 'name' => 'Apóstoles'],
            ['province_id' => 54, 'name' => 'Cainguás'],
            ['province_id' => 54, 'name' => 'Candelaria'],
            ['province_id' => 54, 'name' => 'Capital'],
            ['province_id' => 54, 'name' => 'Concepción'],
            ['province_id' => 54, 'name' => 'Eldorado'],
            ['province_id' => 54, 'name' => 'General Manuel Belgrano'],
            ['province_id' => 54, 'name' => 'Guaraní'],
            ['province_id' => 54, 'name' => 'Iguazú'],
            ['province_id' => 54, 'name' => 'Leandro N. Alem'],
            ['province_id' => 54, 'name' => 'Libertador General San Martín'],
            ['province_id' => 54, 'name' => 'Montecarlo'],
            ['province_id' => 54, 'name' => 'Oberá'],
            ['province_id' => 54, 'name' => 'San Ignacio'],
            ['province_id' => 54, 'name' => 'San Javier'],
            ['province_id' => 54, 'name' => 'San Pedro'],
            ['province_id' => 54, 'name' => '25 de Mayo'],
            ['province_id' => 58, 'name' => 'Aluminé'],
            ['province_id' => 58, 'name' => 'Añelo'],
            ['province_id' => 58, 'name' => 'Catán Lil'],
            ['province_id' => 58, 'name' => 'Collón Curá'],
            ['province_id' => 58, 'name' => 'Confluencia'],
            ['province_id' => 58, 'name' => 'Chos Malal'],
            ['province_id' => 58, 'name' => 'Huiliches'],
            ['province_id' => 58, 'name' => 'Lácar'],
            ['province_id' => 58, 'name' => 'Loncopué'],
            ['province_id' => 58, 'name' => 'Los Lagos'],
            ['province_id' => 58, 'name' => 'Minas'],
            ['province_id' => 58, 'name' => 'Ñorquín'],
            ['province_id' => 58, 'name' => 'Pehuenches'],
            ['province_id' => 58, 'name' => 'Picún Leufú'],
            ['province_id' => 58, 'name' => 'Picunches'],
            ['province_id' => 58, 'name' => 'Zapala'],
            ['province_id' => 62, 'name' => 'Adolfo Alsina'],
            ['province_id' => 62, 'name' => 'Avellaneda'],
            ['province_id' => 62, 'name' => 'Bariloche'],
            ['province_id' => 62, 'name' => 'Conesa'],
            ['province_id' => 62, 'name' => 'El Cuy'],
            ['province_id' => 62, 'name' => 'General Roca'],
            ['province_id' => 62, 'name' => '9 de Julio'],
            ['province_id' => 62, 'name' => 'Ñorquincó'],
            ['province_id' => 62, 'name' => 'Pichi Mahuida'],
            ['province_id' => 62, 'name' => 'Pilcaniyeu'],
            ['province_id' => 62, 'name' => 'San Antonio'],
            ['province_id' => 62, 'name' => 'Valcheta'],
            ['province_id' => 62, 'name' => '25 de Mayo'],
            ['province_id' => 66, 'name' => 'Anta'],
            ['province_id' => 66, 'name' => 'Cachi'],
            ['province_id' => 66, 'name' => 'Cafayate'],
            ['province_id' => 66, 'name' => 'Capital'],
            ['province_id' => 66, 'name' => 'Cerrillos'],
            ['province_id' => 66, 'name' => 'Chicoana'],
            ['province_id' => 66, 'name' => 'General Güemes'],
            ['province_id' => 66, 'name' => 'General José de San Martín'],
            ['province_id' => 66, 'name' => 'Guachipas'],
            ['province_id' => 66, 'name' => 'Iruya'],
            ['province_id' => 66, 'name' => 'La Caldera'],
            ['province_id' => 66, 'name' => 'La Candelaria'],
            ['province_id' => 66, 'name' => 'La Poma'],
            ['province_id' => 66, 'name' => 'La Viña'],
            ['province_id' => 66, 'name' => 'Los Andes'],
            ['province_id' => 66, 'name' => 'Metán'],
            ['province_id' => 66, 'name' => 'Molinos'],
            ['province_id' => 66, 'name' => 'Orán'],
            ['province_id' => 66, 'name' => 'Rivadavia'],
            ['province_id' => 66, 'name' => 'Rosario de la Frontera'],
            ['province_id' => 66, 'name' => 'Rosario de Lerma'],
            ['province_id' => 66, 'name' => 'San Carlos'],
            ['province_id' => 66, 'name' => 'Santa Victoria'],
            ['province_id' => 70, 'name' => 'Albardón'],
            ['province_id' => 70, 'name' => 'Angaco'],
            ['province_id' => 70, 'name' => 'Calingasta'],
            ['province_id' => 70, 'name' => 'Capital'],
            ['province_id' => 70, 'name' => 'Caucete'],
            ['province_id' => 70, 'name' => 'Chimbas'],
            ['province_id' => 70, 'name' => 'Iglesia'],
            ['province_id' => 70, 'name' => 'Jáchal'],
            ['province_id' => 70, 'name' => '9 de Julio'],
            ['province_id' => 70, 'name' => 'Pocito'],
            ['province_id' => 70, 'name' => 'Rawson'],
            ['province_id' => 70, 'name' => 'Rivadavia'],
            ['province_id' => 70, 'name' => 'San Martín'],
            ['province_id' => 70, 'name' => 'Santa Lucía'],
            ['province_id' => 70, 'name' => 'Sarmiento'],
            ['province_id' => 70, 'name' => 'Ullum'],
            ['province_id' => 70, 'name' => 'Valle Fértil'],
            ['province_id' => 70, 'name' => '25 de Mayo'],
            ['province_id' => 70, 'name' => 'Zonda'],
            ['province_id' => 74, 'name' => 'Ayacucho'],
            ['province_id' => 74, 'name' => 'Belgrano'],
            ['province_id' => 74, 'name' => 'Coronel Pringles'],
            ['province_id' => 74, 'name' => 'Chacabuco'],
            ['province_id' => 74, 'name' => 'General Pedernera'],
            ['province_id' => 74, 'name' => 'Gobernador Dupuy'],
            ['province_id' => 74, 'name' => 'Junín'],
            ['province_id' => 74, 'name' => 'La Capital'],
            ['province_id' => 74, 'name' => 'Libertador General San Martín'],
            ['province_id' => 78, 'name' => 'Corpen Aike'],
            ['province_id' => 78, 'name' => 'Deseado'],
            ['province_id' => 78, 'name' => 'Güer Aike'],
            ['province_id' => 78, 'name' => 'Lago Argentino'],
            ['province_id' => 78, 'name' => 'Lago Buenos Aires'],
            ['province_id' => 78, 'name' => 'Magallanes'],
            ['province_id' => 78, 'name' => 'Río Chico'],
            ['province_id' => 82, 'name' => 'Belgrano'],
            ['province_id' => 82, 'name' => 'Caseros'],
            ['province_id' => 82, 'name' => 'Castellanos'],
            ['province_id' => 82, 'name' => 'Constitución'],
            ['province_id' => 82, 'name' => 'Garay'],
            ['province_id' => 82, 'name' => 'General López'],
            ['province_id' => 82, 'name' => 'General Obligado'],
            ['province_id' => 82, 'name' => 'Iriondo'],
            ['province_id' => 82, 'name' => 'La Capital'],
            ['province_id' => 82, 'name' => 'Las Colonias'],
            ['province_id' => 82, 'name' => '9 de Julio'],
            ['province_id' => 82, 'name' => 'Rosario'],
            ['province_id' => 82, 'name' => 'San Cristóbal'],
            ['province_id' => 82, 'name' => 'San Javier'],
            ['province_id' => 82, 'name' => 'San Jerónimo'],
            ['province_id' => 82, 'name' => 'San Justo'],
            ['province_id' => 82, 'name' => 'San Lorenzo'],
            ['province_id' => 82, 'name' => 'San Martín'],
            ['province_id' => 82, 'name' => 'Vera'],
            ['province_id' => 86, 'name' => 'Aguirre'],
            ['province_id' => 86, 'name' => 'Alberdi'],
            ['province_id' => 86, 'name' => 'Atamisqui'],
            ['province_id' => 86, 'name' => 'Avellaneda'],
            ['province_id' => 86, 'name' => 'Banda'],
            ['province_id' => 86, 'name' => 'Belgrano'],
            ['province_id' => 86, 'name' => 'Capital'],
            ['province_id' => 86, 'name' => 'Copo'],
            ['province_id' => 86, 'name' => 'Choya'],
            ['province_id' => 86, 'name' => 'Figueroa'],
            ['province_id' => 86, 'name' => 'General Taboada'],
            ['province_id' => 86, 'name' => 'Guasayán'],
            ['province_id' => 86, 'name' => 'Jiménez'],
            ['province_id' => 86, 'name' => 'Juan F. Ibarra'],
            ['province_id' => 86, 'name' => 'Loreto'],
            ['province_id' => 86, 'name' => 'Mitre'],
            ['province_id' => 86, 'name' => 'Moreno'],
            ['province_id' => 86, 'name' => 'Ojo de Agua'],
            ['province_id' => 86, 'name' => 'Pellegrini'],
            ['province_id' => 86, 'name' => 'Quebrachos'],
            ['province_id' => 86, 'name' => 'Río Hondo'],
            ['province_id' => 86, 'name' => 'Rivadavia'],
            ['province_id' => 86, 'name' => 'Robles'],
            ['province_id' => 86, 'name' => 'Salavina'],
            ['province_id' => 86, 'name' => 'San Martín'],
            ['province_id' => 86, 'name' => 'Sarmiento'],
            ['province_id' => 86, 'name' => 'Silípica'],
            ['province_id' => 90, 'name' => 'Burruyacú'],
            ['province_id' => 90, 'name' => 'Cruz Alta'],
            ['province_id' => 90, 'name' => 'Chicligasta'],
            ['province_id' => 90, 'name' => 'Famaillá'],
            ['province_id' => 90, 'name' => 'Graneros'],
            ['province_id' => 90, 'name' => 'Juan B. Alberdi'],
            ['province_id' => 90, 'name' => 'La Cocha'],
            ['province_id' => 90, 'name' => 'Leales'],
            ['province_id' => 90, 'name' => 'Lules'],
            ['province_id' => 90, 'name' => 'Monteros'],
            ['province_id' => 90, 'name' => 'Río Chico'],
            ['province_id' => 90, 'name' => 'Capital'],
            ['province_id' => 90, 'name' => 'Simoca'],
            ['province_id' => 90, 'name' => 'Tafí del Valle'],
            ['province_id' => 90, 'name' => 'Tafí Viejo'],
            ['province_id' => 90, 'name' => 'Trancas'],
            ['province_id' => 90, 'name' => 'Yerba Buena'],
            ['province_id' => 94, 'name' => 'Río Grande'],
            ['province_id' => 94, 'name' => 'Ushuaia'],
            ['province_id' => 94, 'name' => 'Islas del Atlántico Sur'],
            ['province_id' => 94, 'name' => 'Antártida Argentina'],
        ];

        foreach ($regions as $region) {
            celiacomendoza\Region::create($region);
        }
    }
}
