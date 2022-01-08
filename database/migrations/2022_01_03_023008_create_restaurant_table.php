<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('restaurant_id')->nullable()->unsigned()->index();
            $table->string('restaurant_image',255);
            $table->string('restaurant_name',255);
            $table->string('operational_day',255);
            $table->string('operational_time',255);
            $table->string('restaurant_type',255);
            $table->string('restaurant_location',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant');
    }
}
