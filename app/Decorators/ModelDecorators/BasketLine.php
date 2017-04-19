<?php

namespace App\Decorators\ModelDecorators;

use App\Decorators\ModelDecorators\Base;

class BasketLine extends Base
{
    public function setBasketId(int $basketId)
    {
        $this->basket_id = $basketId;
        return $this;
    }

    public function setProductId(int $productId)
    {
        $this->model->product_id = $productId;
        return $this;
    }

    public function setQuantity(int $quantity)
    {
        $this->model->quantity = $quantity;
        return $this;
    }
}
