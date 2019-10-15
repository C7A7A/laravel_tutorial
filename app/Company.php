<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'phone'];

    public function customers(){
        return $this->hasMany(Customer::class);
    }
}
