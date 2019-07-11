<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $primaryKey = 'id';

    protected $fillable = ['parent_comment_id', 'comment', 'comment_sender_name',
    						'date', 'id_product'
 						  ];

 	public function product()
 	{
 		return $this->hasOne('App\Product');
 	}
}
