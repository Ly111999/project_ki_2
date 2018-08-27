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

    public function getOriginalPriceStringAttribute()
    {
        if ($this->discount == 0) {
            return '';
        }
        return sprintf('%s vnd', number_format($this->price, 0));
    }
    
    public function getDiscountPriceStringAttribute()
    {
        if ($this->discount == 0) {
            return sprintf('%s vnd', number_format($this->price, 0));
        }
        return sprintf('%s (vnd)', number_format(($this->price - ($this->price * $this->discount / 100)), 0));
    }

    public function getDiscountPriceAttribute()
    {
        if ($this->discount == 0) {
            return $this->price;
        }
        return ($this->price - ($this->price * $this->discount / 100));
    }
}
