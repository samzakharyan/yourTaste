<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $table='reserve';
    protected $fillable=[
    'name', 'phone', 'email', 'data', 'start_time', 'end_time','table_number', 'type',
    ];
}
