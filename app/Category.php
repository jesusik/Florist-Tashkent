<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

    public $guarded = [];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id')->where('status', '=', 'active');
    }

    public function activeProducts()
    {
        return $this->products()->where('status', '=', 'active');
    }
}
