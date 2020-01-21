<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Restaurant;

class Product extends Model
{
    protected $fillable = [
        'name', 'code', 'price'
    ];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class);
    }

}
