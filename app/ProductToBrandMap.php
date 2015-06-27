<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductToBrandMap extends Model
{
    public function brand_name(){
        return $this->belongsTo('\App\Brand');
    }
}
