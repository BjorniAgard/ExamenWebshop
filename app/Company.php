<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'description', 'address', 'postal_code', 'city', 'telephone'
    ];
}
