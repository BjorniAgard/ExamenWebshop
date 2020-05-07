<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use Sortable;
    
    protected $fillable = [
        'id', 'name', 'description', 'price', 'status', 'stock', 'category_id'
    ];

    public $sortable = ['id', 'name', 'description', 'price', 'status', 'stock', 'category_id'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
