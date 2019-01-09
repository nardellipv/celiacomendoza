<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->delete();

        $payments = [
            ['name'=>'Visa', 'photo'=>'webStyle/img/payments/visa.png'],
            ['name'=>'MasterCard', 'photo'=>'webStyle/img/payments/mastercard.png'],
            ['name'=>'AmericanExpress', 'photo'=>'webStyle/img/payments/amex.png'],
            ['name'=>'AngenCard', 'photo'=>'webStyle/img/payments/agencard.png'],
            ['name'=>'Cabal', 'photo'=>'webStyle/img/payments/cabal.png'],
            ['name'=>'Maestro', 'photo'=>'webStyle/img/payments/maestro.png'],
            ['name'=>'Diners Club', 'photo'=>'webStyle/img/payments/diners.png'],
            ['name'=>'Visa Electron', 'photo'=>'webStyle/img/payments/visaelectron.png'],
        ];

        foreach ($payments as $payment) {
            \celiacomendoza\Payment::create($payment);
        }
    }
}
