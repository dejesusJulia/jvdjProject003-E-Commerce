<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $fillable = [
        'type'
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
