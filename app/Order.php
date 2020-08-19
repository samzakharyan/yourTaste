<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='order';
    protected $fillable=[
    'user_id', 'reserve_id'];

 public function reserve(){
    	return $this->hasMany("App\Reserve","id", "reserve_id");
    }	
}
