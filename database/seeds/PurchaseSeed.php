<?php

use Illuminate\Database\Seeder;

class PurchaseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\celiacomendoza\Purchase::class, 100)->create();
    }
}
