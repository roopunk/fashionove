<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
      'store_name'
    ];
    public function brand(){
        return $this->belongsTo('\App\Brand');
    }
    public function city(){
        return $this->belongsTo('\App\Brand');
    }
    public function paymentType(){
        return $this->belongsTo('\App\PaymentType');
    }

}
