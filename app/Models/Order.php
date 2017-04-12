<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderLine;
use App\Models\Customer;

class Order extends Model
{
    protected $table = 'order';

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orderLines()
    {
        return $this->hasMany(OrderLIne::class);
    }
}
