<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public $table = 'products';

    public $guarded = [];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'orders_products');
    }

    public static function savePhoto(UploadedFile $photo)
    {
        $path = storage_path('app/public/products');

        $ext = $photo->getClientOriginalExtension();
        $name = $photo->getClientOriginalName();
        $name = mb_substr($name, 0, strlen($name) - strlen($ext) - 1);
        $index = null;
        while (file_exists("$path$name$index.$ext")) {
            $index = (int)$index + 1;
        }
        $filename = "$name$index.$ext";

        $photo->move($path, $filename);
        return $filename;
    }

    public function getPhotoUrl()
    {
        return asset("storage/products/$this->photo");
    }
}
