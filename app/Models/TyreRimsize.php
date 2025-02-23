<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TyreRimsize extends Model
{
    use HasFactory;
    function profile(){
        return $this->belongsTo(TyreProfile::class);
    }
}
