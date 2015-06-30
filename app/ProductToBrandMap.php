<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductToBrandMap extends Model
{
    public function getBrand(){
        return $this->belongsTo('\App\Brand');
    }
}
