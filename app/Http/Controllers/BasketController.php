<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Basket;
use App\Models\BasketLine;
use App\Services\BasketService;
use Illuminate\Support\Facades\Session;

class BasketController extends Controller
{
    public function index()
    {
        return BasketService::getBasket()->lines;
    }

    public function lineCount()
    {
        return BasketService::getLineCount();
    }

    public function lineSave(int $productId, int $quantity)
    {
        $product = Product::find($productId);
        BasketService::saveLine($product, $quantity);

        return BasketService::getBasket()->lines;
    }

    public function lineDelete(int $basketLineId)
    {
        BasketService::deleteLine($basketLineId);

        return BasketService::getBasket()->lines;
    }

    public function clear()
    {
        BasketService::clear();

        return BasketService::getBasket()->lines;
    }
}
