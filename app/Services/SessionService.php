<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;

final class SessionService
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (! self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getSessionId()
    {
        return Session::getId();
    }
}
