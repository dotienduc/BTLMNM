<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $table = "bills";

	protected $primaryKey = 'id';

	protected $fillable = ['id_customer', 'date_order', 'total', 'note'];

	public function billDetail()
	{
		return $this->hasMany('App\BillDetail');
	}

	public function customer()
	{
		return $this->hasOne('App\Customer');
	}
}
