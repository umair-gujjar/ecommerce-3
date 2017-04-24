<?php

namespace App\Repositories;

use App\Models\Basket;
use App\Factories\BasketFactory;
use App\Services\SessionService;

class BasketRepository
{
    /**
     * Fetches a basket model for the current session.
     *
     * @return Basket $basket
     */
    public static function getActive()
    {
        if ($basket = Basket::getBySessionId(SessionService::getInstance()->getSessionId())) {
            return $basket;
        }

        return BasketFactory::create();
    }
}
