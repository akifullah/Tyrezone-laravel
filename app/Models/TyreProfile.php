<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TyreProfile extends Model
{
    use HasFactory;

    function width(){
       return  $this->belongsTo(TyreWidth::class);
    }
}
