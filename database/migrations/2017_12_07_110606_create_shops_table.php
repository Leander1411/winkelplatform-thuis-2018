<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->text('product_id');
            $table->integer('social_id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('image_small')->nullable();
            $table->text('description_small');
            $table->text('special_offer')->nullable();
            $table->string('google_maps')->nullable(); /* optioneel: datatype voor google_maps nog aanpassen? */
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
        Schema::dropIfExists('shops');
    }
}
