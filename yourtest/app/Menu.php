<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='menu';
    protected $fillable=['title_menu','subtitle_menu', 
    'image_menu1', 'name_menu1','info_1', 'price_1',
    'image_menu2', 'name_menu2','info_2', 'price_2',
    'image_menu3', 'name_menu3','info_3', 'price_3',
    'image_menu4', 'name_menu4','info_4', 'price_4',
    'image_menu5', 'name_menu5','info_5', 'price_5',
    'image_menu6', 'name_menu6','info_6', 'price_6',
        ];

}
