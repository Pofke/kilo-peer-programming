<?php

namespace Povil\PeerProgramming\Service\Validators;

use Povil\PeerProgramming\Service\ValidatorInterface;

class LowercaseValidator implements ValidatorInterface
{

    public function __construct()
    {
    }

    public function check(mixed $input)
    {
        if (ctype_lower($input)) {
            return true;
        }
        return "The input must contains only lowercase characters";
    }
}