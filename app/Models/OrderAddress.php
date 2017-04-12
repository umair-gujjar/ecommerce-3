<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class OrderAddress extends Model
{
    protected $table = 'order_address';

    /*
     * Get the order this address record belongs to.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
