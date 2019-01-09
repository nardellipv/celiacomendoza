<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommercePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commerce_payments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('commerce_id')->unsigned();
            $table->integer('payment_id')->unsigned();


            //relaciones

            $table->foreign('commerce_id')->references('id')->on('commerces')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('payment_id')->references('id')->on('payments')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commerce_payments');
    }
}
