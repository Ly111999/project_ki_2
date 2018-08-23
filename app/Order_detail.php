<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table = 'order_details';

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
