<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name', 'code'
    ];

    public function products()
    {
        return $this->hasOne(Product::class);
    }

    public function orders()
    {
        return $this->hasOne(Order::class);
    }

    public function employees()
    {
        return $this->hasOne(Employee::class);
    }
}
