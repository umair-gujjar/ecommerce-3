<?php

namespace App\Validators;

use App\Validators\ValidatorBase;
use App\Exceptions\InvalidHumanNameException;

class HumanNameValidator extends ValidatorBase
{
    public function validate(string $value): bool
    {
        if (preg_match('/^[[:alpha:]]+( +[[:alpha:]]+)*$/', $value)) {
            return true;
        }

        throw new InvalidHumanNameException();
    }
}
