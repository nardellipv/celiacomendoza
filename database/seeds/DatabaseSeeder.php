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
//        $this->call(UserTableSeeder::class);
        $this->call(RegionSeeder::class);
//        $this->call(CommerceTableSeeder::class);
        $this->call(CateogorySeeder::class);
//        $this->call(ProductTableSeeder::class);
//        $this->call(PictureTableSeeder::class);
//        $this->call(PurchaseSeed::class);
//        $this->call(MessageSeeder::class);
//        $this->call(BlogSeeder::class);
    }
}
