<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function shopify(){
        
        return $this->belongsTo(Shopify::class);
    }
}
