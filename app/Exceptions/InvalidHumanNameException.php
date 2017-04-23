<?php

namespace App\Exceptions;

use \Exception;

class InvalidHumanNameException extends Exception
{
    protected $message = 'The provided value is not a recognised human name. For example, it may contain non-permitted or illegal characters.';
}
