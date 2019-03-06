<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public function orderProduct() {
        return $this->hasMany('App\OrderProduct', 'order_id', 'id');
    }
    
}
