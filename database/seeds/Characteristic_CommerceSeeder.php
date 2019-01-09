<?php

use Illuminate\Database\Seeder;

class Characteristic_CommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\celiacomendoza\CharacteristicCommerce::class, 10)->create();
    }
}
