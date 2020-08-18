<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
             $table->increments('id');
             $table->string('title_menu');
             $table->string('subtitle_menu');
             $table->string('image_menu1');
             $table->string('name_menu1');
             $table->string('info_1');
             $table->string('price_1');
             $table->string('image_menu2');
             $table->string('name_menu2');
             $table->string('info_2');
             $table->string('price_2');
             $table->string('image_menu3');
             $table->string('name_menu3');
             $table->string('info_3');
             $table->string('price_3');
             $table->string('image_menu4');
             $table->string('name_menu4');
             $table->string('info_4');
             $table->string('price_4');
             $table->string('image_menu5');
             $table->string('name_menu5');
             $table->string('info_5');
             $table->string('price_5');
             $table->string('image_menu6');
             $table->string('name_menu6');
             $table->string('info_6');
             $table->string('price_6');
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
        Schema::dropIfExists('menu');
    }
}
