<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('image_logo')->nullable();
            $table->string('column');
            $table->string('favicon');
            $table->string('menu_1');
            $table->string('menu_2');
            $table->string('menu_3');
            $table->string('menu_4');
            $table->string('menu_5');
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
        Schema::dropIfExists('logo');
    }
}
