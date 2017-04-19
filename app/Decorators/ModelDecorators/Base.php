<?php

namespace App\Decorators\ModelDecorators;

use Illuminate\Database\Eloquent\Model;

abstract class Base
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }
}
