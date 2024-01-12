<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['seller_id','customer_id','order','order_date','total','order_wrkflw'];

    public function cliente()
    {
        return $this->hasOne('App\Models\Customer','id','customer_id');
    }

    public function vendedor()
    {
        return $this->hasOne('App\Models\Seller','id','seller_id');
    }

    public function productos()
    {
        return $this->hasMany('App\Models\Orderdetail','order_id','id');
    }

    public function producto()
    {
        return $this->hasOne('App\Models\Product','id','product_id');
    }
}
