<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
             $table->increments('id');
             $table->string('title_test');
             $table->string('image_test');
             $table->string('description_1');
             $table->string('name_test1');
             $table->string('text_test1');
             $table->string('description_2');
             $table->string('name_test2');
             $table->string('text_test2');
             $table->string('description_3');
             $table->string('name_test3');
             $table->string('text_test3');

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
        Schema::dropIfExists('testimonials');
    }
}
