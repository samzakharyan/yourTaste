<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
      protected $table='about';
      protected $fillable=['title_about', 'subtitle_about', 'description_about', 'image_about'];
}
