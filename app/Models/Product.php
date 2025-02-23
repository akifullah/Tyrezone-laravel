<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    function patteren()
    {
        return $this->belongsTo(Patteren::class);
    }


    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
