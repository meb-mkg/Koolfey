<?php

namespace Koolfey\Koolfey\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = ['personal_number', 'username', 'email', 'password', 'phone', 'dob', 'mobile_ip'];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    //casting
    protected $casts = [
        'pn'  =>  'integer'
    ];
}
