<?php

namespace Koolfey\Koolfey\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';
	//protected $fillable = ['personal_number', 'username', 'email', 'password', 'phone', 'dob', 'mobile_ip'];

	public function setPasswordAttribute($value){
	    $this->attributes['password'] = bcrypt($value);
	}
}
