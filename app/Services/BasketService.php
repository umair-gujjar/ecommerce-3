<?php

namespace App\Services;

use App\Models\BasketLine;
use App\Models\Product;
use App\Repositories\BasketRepository;
use App\Repositories\BasketLineRepository;
use App\Factories\BasketLineFactory;
use App\Decorators\ModelDecorators\BasketLine as BasketLineDecorator;

abstract class BasketService
{
    public static function getBasket()
    {
        return BasketRepository::getActive();
    }

    public static function saveLine(Product $product, int $quantity)
    {
        $basket = self::getBasket();

        if ($basketLine = BasketLineRepository::getByProduct($basket, $product)) {
            $basketLine->quantity = $quantity;
            $basketLine->save();
        } else {
            $basketLine = BasketLineFactory::create($basket);
            $decorator = new BasketLineDecorator($basketLine);
            $decorator->setProductId($product->id)
                ->setQuantity($quantity)
                ->getModel()
                ->save();
        }
    }

    public static function getLines()
    {
        if ($basket = self::getBasket()) {
            return $basket->lines();
        }
    }

    public static function getLineCount()
    {
        if ($basket = self::getBasket()) {
            return count($basket->lines());
        }
    }

    public static function deleteLine(int $lineId)
    {
        if ($basketLine = BasketLine::find($lineId)) {
            $basketLine->delete();
        }
    }

    public static function clear()
    {
        if ($basket = self::getBasket()) {
            $basket->delete();
        }
    }
}
