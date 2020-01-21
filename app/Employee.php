<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Restaurant;

class Employee extends Model
{
    protected $fillable = [
        'code', 'name', 'role'
    ];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class);
    }
}
