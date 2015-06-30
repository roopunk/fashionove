<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductToStoreMap extends Model
{
    public function getStore(){
        return $this->belongsTo('\App\Store');
    }
}