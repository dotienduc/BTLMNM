<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = "products";

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'id_category', 'description', 'unit_price', 'promotion_price',
     						'image', 'image', 'unit', 'new'
 						  ];

 	public function category()
 	{
 		return $this->hasOne('App\Category');
 	}

 	public function comment()
 	{
 		return $this->hasMany('App\Comment');
 	}

 	//Get list product 
 	public function scopeGetListProduct($query)
 	{
 		return $query->where('new', '=', '1')
 					 ->limit(9)
 					 ->orderBy('id', 'desc');
 	}
}
