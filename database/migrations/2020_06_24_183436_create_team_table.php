<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
             $table->increments('id');
             $table->string('title_team');
             $table->string('subtitle_team');
             $table->string('image_team1');
             $table->string('text_team1');
             $table->string('icon_1_1');
             $table->string('url_1_1');
             $table->string('icon_1_2');
             $table->string('url_1_2');
             $table->string('name_team1');
             $table->string('position_1');
             $table->string('image_team2');
             $table->string('text_team2');
             $table->string('icon_2_1');
             $table->string('url_2_1');
             $table->string('icon_2_2');
             $table->string('url_2_2');
             $table->string('name_team2');
             $table->string('position_2');
             $table->string('image_team3');
             $table->string('text_team3');
             $table->string('icon_3_1');
             $table->string('url_3_1');
             $table->string('icon_3_2');
             $table->string('url_3_2');
             $table->string('name_team3');
             $table->string('position_3');
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
        Schema::dropIfExists('team');
    }
}
