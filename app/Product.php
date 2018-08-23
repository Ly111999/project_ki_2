<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo('App\Category', 'categoryId');
    }

    public function getFormatPriceAttribute()
    {
        return sprintf('%s VND', number_format($this->price, 0));
    }
}
