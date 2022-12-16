<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function toppings()
    {
        return $this->belongsTo(Icecream::class, 'icecream_id');
    }
    
}
