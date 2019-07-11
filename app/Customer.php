<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $table = "customers";

	protected $primaryKey = 'id';

	protected $fillable = ['name', 'gender', 'email', 'address', 'phone', 'note'];

	public function bill()
	{
		return $this->hasMany('App\Bill');
	}
}
