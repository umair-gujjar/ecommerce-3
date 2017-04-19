<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BasketLine;

class Basket extends Model
{
    protected $table = 'basket';

    public static function getBySessionId(string $sessionId)
    {
        return self::where('session_id', $sessionId)->first();
    }

    public function lines()
    {
        return $this->hasMany(BasketLine::class);
    }
}
