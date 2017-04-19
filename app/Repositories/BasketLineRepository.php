<?php

namespace App\Repositories;

use App\Models\BasketLine;
use App\Models\Basket;
use App\Models\Product;

class BasketLineRepository
{
    public static function getByProduct(Basket $basket, Product $product)
    {
        return BasketLine::where([
                ['basket_id', $basket->id],
                ['product_id', $product->id]
            ])->get()->first();
    }
}
