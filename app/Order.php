<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Restaurant;

class Order extends Model
{
    protected $fillable = [
        'code'
    ];

    public $timestamps = false;

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class);
    }
}
