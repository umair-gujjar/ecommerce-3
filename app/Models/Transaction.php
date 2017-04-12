<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Transaction extends Model
{
    protected $table = 'transaction';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
