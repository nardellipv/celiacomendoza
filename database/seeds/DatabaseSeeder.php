<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(CharacteristicSeeder::class);
        $this->call(CommerceTableSeeder::class);
        $this->call(CommercePaymentSeeder::class);
        $this->call(Characteristic_CommerceSeeder::class);
        $this->call(CateogorySeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(PictureTableSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(ProvinceSeeder::class);
    }
}
