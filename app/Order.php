<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    public $guarded = [];
    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'orders_products');
    }
}
