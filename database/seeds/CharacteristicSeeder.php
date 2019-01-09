<?php

use Illuminate\Database\Seeder;

class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characteristics')->delete();

        $characteristics = [
            ['name'=>'Mesas al aire libre', 'photo'=>'webStyle/img/services/sun.png'],
            ['name'=>'Juegos para chicos', 'photo'=>'webStyle/img/services/children.png'],
            ['name'=>'Aire Acondicionado', 'photo'=>'webStyle/img/services/air-conditioner.png'],
            ['name'=>'Menú Ejecutivo', 'photo'=>'webStyle/img/services/dinner.png'],
            ['name'=>'Estacionamiento', 'photo'=>'webStyle/img/services/parking.png'],
            ['name'=>'Accesibilidad', 'photo'=>'webStyle/img/services/wheelchair.png'],
            ['name'=>'Wi-Fi', 'photo'=>'webStyle/img/services/wifi.png'],
            ['name'=>'Barra de Tragos', 'photo'=>'webStyle/img/services/cocktail.png'],
        ];

        foreach ($characteristics as $characteristic) {
            \celiacomendoza\Characteristic::create($characteristic);
        }
    }
}
