<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slid', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slid_1');
            $table->string('title_1');
            $table->string('text_1');
            $table->string('url_1');
            $table->string('button_1');
            $table->string('slid_2');
            $table->string('title_2');
            $table->string('text_2');
            $table->string('url_2');
            $table->string('button_2');
            $table->string('slid_3');
            $table->string('title_3');
            $table->string('text_3');
            $table->string('url_3');
            $table->string('button_3');
           
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
        Schema::dropIfExists('slid');
    }
}
