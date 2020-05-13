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
            $table->string('type')->default('text');
            $table->boolean('show')->default('1');;
            $table->string('name')->nullable();
            $table->string('image_name')->nullable();
            $table->string('image')->nullable();
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
