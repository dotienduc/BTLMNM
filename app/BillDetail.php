<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $table = "billdetails";

	protected $primaryKey = 'id';

	protected $fillable = ['id_bill', 'id_product', 'quantity', 'price'];

	public function product()
	{
		return $this->hasOne('App\Product');
	}

}
