<?php

namespace App\Factories;

use App\Models\BasketLine;
use App\Models\Basket;

class BasketLineFactory
{
    public static function create(Basket $basket)
    {
        $basketLine = new BasketLine();
        $basketLine->basket()->associate($basket);
        return $basketLine;
    }
}
