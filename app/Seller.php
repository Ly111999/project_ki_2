<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'sellers';

    public function getDiscountPriceStringAttribute()
    {
        if ($this->discount == 0) {
            return sprintf('%s (vnd)', number_format($this->price, 0));
        }
        return sprintf('%s (vnd)', number_format(($this->price - ($this->price * $this->discount / 100)), 0));
    }
    public function getOriginalPriceStringAttribute()
    {
        if ($this->discount == 0) {
            return '';
        }
        return sprintf('%s (vnd)', number_format($this->price, 0));
    }
   
}
