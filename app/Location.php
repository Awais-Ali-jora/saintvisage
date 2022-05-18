<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function city(){
    	return $this->belongsTo(City::class);
    }
    public function country(){
    	return $this->belongsTo(Country::class);
    }
    public function continent(){
    	return $this->belongsTo(Continent::class);
    }
}
