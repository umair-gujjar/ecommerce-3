<?php

namespace App\Factories;

use App\Models\Basket;
use App\Decorators\ModelDecorators\Basket as BasketDecorator;
use App\Services\SessionService;

class BasketFactory
{
    public static function create()
    {
        $basket = new Basket();
        $decorator = new BasketDecorator($basket);
        $decorator->setSessionId(SessionService::getSessionId());
        $basket = $decorator->getModel();
        $basket->save();

        return $basket;
    }
}
