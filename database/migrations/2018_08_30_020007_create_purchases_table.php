<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');

            $table->string('num_invoice');
            $table->string('name');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('photo')->nullable();
            $table->enum('status',['PENDING','FINISH']);

            $table->integer('commerce_id')->unsigned();
            $table->integer('product_id')->unsigned();

            $table->timestamps();

            //relaciones

            $table->foreign('commerce_id')->references('id')->on('commerces')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('product_id')->references('id')->on('products')
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
        Schema::dropIfExists('purchases');
    }
}
