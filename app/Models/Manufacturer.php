<?php

namespace App\Models;

use Doctrine\Inflector\Rules\Pattern;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    function patteren()
    {
        $this->belongsTo(Pattern::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
