<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slid extends Model
{
    protected $table='slid';
    protected $fillable=[
     'slid_1', 'title_1', 'text_1', 'url_1', 'button_1',
     'slid_2', 'title_2', 'text_2', 'url_2', 'button_2',
     'slid_3', 'title_3', 'text_3', 'url_3', 'button_3',
    ];
}
