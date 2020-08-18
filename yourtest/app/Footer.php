<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table='footer';
    protected $fillable=[
    'find','find_text','reserv_info', 'phone_footer', 'url',
    'mail', 'image_footer', 'hours', 'closed_time', 'week', 'times',
    'week_1', 'times_1', 'icon_1', 'url_footer1', 'icon_2', 'url_footer2',
    'icon_3', 'url_footer3', 'icon_4', 'url_footer4', 'text'];
}
