<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patteren extends Model
{
    use HasFactory;
    function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
    function products()
    {
        return $this->hasMany(Product::class);
    }
}
