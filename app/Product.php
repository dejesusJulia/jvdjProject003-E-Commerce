<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'product_img', 'product_type_id', 'slug'
    ];

    public function productTypes(){
        return $this->belongsTo(ProductType::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
