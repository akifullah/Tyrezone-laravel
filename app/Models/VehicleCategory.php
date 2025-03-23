<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleCategory extends Model
{

    protected $table = "vehicle_categories";
    public function products()
    {
        return $this->hasMany(Product::class, "v_category", "v_cat_name");
    }
}
