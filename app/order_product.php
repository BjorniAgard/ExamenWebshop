<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class order_product extends Pivot
{
    protected $table = 'order_product';

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product', 'id', 'order_id')->withPivot('order_id', 'amount', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'id', 'product_id')->withPivot('amount', 'order_id');
    }
}

