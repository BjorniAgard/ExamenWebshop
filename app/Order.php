<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'date', 'status'
    ];

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function companys()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function customers()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product', 'id', 'order_id')->withPivot('order_id', 'amount', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'id', 'product_id')->withPivot('amount', 'order_id');
    }

}
