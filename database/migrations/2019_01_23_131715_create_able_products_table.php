<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbleProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('able_products', function (Blueprint $table) {
            $table->increments('id');

            $table->text('marca');
            $table->text('nombre_comercial');
            $table->mediumText('denominacion_venta');
            $table->text('rnpa');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('able_products');
    }
}
