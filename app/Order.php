<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id', 'product_id', 'quantity', 'price', 'checkout', 'completed'
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'user_id');
    }

    public function products(){
        // an order belongs to many products?
    }
}
