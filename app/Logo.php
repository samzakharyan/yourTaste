<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table='logo';
    protected $fillable=['type', 'show', 'name','image_name', 'image', 'call_name', 'phone', 'reserv_name','column','favicon'];
}
