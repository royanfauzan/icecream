<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icecream extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    
    public function toppings()
    {
        return $this->hasMany(Topping::class,'icecream_id','id');
    }
}
