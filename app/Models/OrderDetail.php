<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;

    public function producto()
    {
        return $this->hasOne('App\Models\Product','id','product_id');
    }

    
}
