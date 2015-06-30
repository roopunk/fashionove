<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'brand_name',
        'description'
    ];
    public function brand_type(){
        return $this->belongsTo('\App\BrandType');
    }
    public function city(){
        return $this->belongsTo('\App\City');
    }
    public function brands(){
        return $this->hasMany('\App\Store');
    }
}
