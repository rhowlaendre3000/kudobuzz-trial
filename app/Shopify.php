<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopify extends Model
{
    //

    public function product(){
        
        return $this->hasMany(Product::class);
    }
}
