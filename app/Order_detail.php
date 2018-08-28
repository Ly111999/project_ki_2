<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table = 'order_details';

    protected $primaryKey = ['order_id','product_id'];
    public $incrementing = false;

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
