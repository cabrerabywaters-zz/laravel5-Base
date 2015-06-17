<?php

namespace cyb;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'rut',
        'fancy_name',
        'description',
        'adress',
        'city',
        'location',
        'phone_number'
    ];

    public function users()
    {
        return $this->hasMany('User');
    }

}
