<?php

namespace App\Decorators\ModelDecorators;

use App\Decorators\ModelDecorators\Base;

class Basket extends Base
{
    public function setSessionId(string $sessionId)
    {
        $this->model->session_id = $sessionId;
        return $this;
    }
}
