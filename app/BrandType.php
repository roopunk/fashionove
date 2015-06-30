<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandType extends Model
{
    public function brands(){
        return $this->hasMany('\App\Brand');
    }
}
