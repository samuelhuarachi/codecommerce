<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
						    'category_id', 
						    'name', 
						    'description', 
						    'price', 
						    'recommended', 
						    'featured'
						  ];

    public function category() {
    	return $this->belongsTo('CodeCommerce\Category');
    }

    public function images() {
    	return $this->hasMany('CodeCommerce\ProductImage');
    }
    

}
