<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table='cities';
    public function country(){
    	return $this->belongsTo(Country::class);
    }
    public function locations(){
    	return $this->hasMany(Location::class);
    }
}
