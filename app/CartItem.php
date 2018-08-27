<?php

namespace App;


class CartItem
{
    public function getTotalPriceWithFormat(){
        return sprintf('%s', number_format(($this->product->price  - ($this->product->price * $this->product->discount / 100)) * $this->quantity, 0));
    }
}
