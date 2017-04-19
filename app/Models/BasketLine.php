<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Basket;
use App\Models\Product;

class BasketLine extends Model
{
    protected $table = 'basket_line';

    public function basket()
    {
        return $this->belongsTo(Basket::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function setProductId($productId)
    {
        $this->product_id = $productId;
    }

    public function getProductId()
    {
        return $this->product_id;
    }
}
