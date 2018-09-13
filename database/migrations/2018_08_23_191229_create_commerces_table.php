<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommercesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commerces', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->string('number')->nullable();
            $table->string('phone')->nullable();
            $table->string('web')->nullable();
            $table->mediumText('about')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('logo')->nullable();

            $table->integer('user_id')->unsigned();

            $table->timestamps();

            //relaciones

            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('commerces');
    }
}
