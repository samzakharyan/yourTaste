<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table='team';
    protected $fillable=['title_team','subtitle_team', 
    'image_team1', 'text_team1','icon_1_1','url_1_1','icon_1_2', 'url_1_2','name_team1','position_1',
    'image_team2', 'text_team2','icon_2_1','url_2_1','icon_2_2', 'url_2_2','name_team2','position_2',
    'image_team3', 'text_team3','icon_3_1','url_3_1','icon_3_2', 'url_3_2','name_team3','position_3',];
}
