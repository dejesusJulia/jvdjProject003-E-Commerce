<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'description', 'price', 'product_img', 'product_type_id'
    ];

    public function product_types(){
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

}
