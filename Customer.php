<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function company()
    {
    	return $this->belongsTo(Company::class);
    }
    
    public function scopeActive($query){
    	return $query->where('isActive',1);
    }

    public function scopeInactive($query){
    	return $query->where('isActive',0);
    }
}
