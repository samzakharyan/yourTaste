<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function (Blueprint $table) {
             $table->increments('id');
             $table->string('find');
             $table->string('find_text');
             $table->string('reserv_info');
             $table->string('phone_footer');
             $table->string('url');
             $table->string('mail');
             $table->string('image_footer');
             $table->string('hours');
             $table->string('closed_time');
             $table->string('week');
             $table->string('times');
             $table->string('week_1');
             $table->string('times_1');
             $table->string('icon_1');
             $table->string('url_footer1');
             $table->string('icon_2');
             $table->string('url_footer2');
             $table->string('icon_3');
             $table->string('url_footer3');
             $table->string('icon_4');
             $table->string('url_footer4');
             $table->string('text');
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
        Schema::dropIfExists('footer');
    }
}
