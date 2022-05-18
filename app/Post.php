<?php

namespace App;

use App\Models\TreatmentCategory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','cat_id','description','image','thumbnail_image','banner_title','banner_image'];
    public function category(){
    	return $this->belongsTo(TreatmentCategory::class,'cat_id','id');
    }
}
