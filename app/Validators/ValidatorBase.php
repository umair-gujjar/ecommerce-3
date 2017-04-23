<?php

namespace App\Validators;

use \Exception;

abstract class ValidatorBase
{
    protected $value;

    /**
     * Scrutinise the `value` property against the desired validation rule.
     *
     * @throws Exception
     * @return bool
     */
    abstract public function validate(string $value): bool;
}
