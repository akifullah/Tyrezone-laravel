<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TyreSpeed extends Model
{
    use HasFactory;

    function rimSize(){
        return $this->belongsTo(TyreRimsize::class, "rim_id");
    }
    
}
