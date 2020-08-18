<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table='logo';
    protected $fillable=['name','image_name', 'image_logo', 'call_name', 'phone', 'reserv_name','column','favicon'];
}
