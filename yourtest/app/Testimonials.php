<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $table='testimonials';
    protected $fillable=['title_test','image_test',
    'description_1','name_test1','text_test1',
    'description_2','name_test2','text_test2',
    'description_3','name_test3','text_test3',];
}
