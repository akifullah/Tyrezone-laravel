<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;



    function user(){
        return $this->belongsTo(User::class);
    }

    function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class,);
    }

    function orderItem(){
        return $this->hasMany(OrderItem::class, "o_id");
    }
    
  
}
