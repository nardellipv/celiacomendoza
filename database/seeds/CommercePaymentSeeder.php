<?php

use celiacomendoza\CommercePayment;
use Illuminate\Database\Seeder;

class CommercePaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CommercePayment::class, 100)->create();
    }
}
