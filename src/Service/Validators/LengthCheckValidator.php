<?php

namespace Povil\PeerProgramming\Service\Validators;

use Povil\PeerProgramming\Service\ValidatorInterface;

class LengthCheckValidator implements ValidatorInterface
{
    public function __construct(private int $length)
    {
    }

    public function check(mixed $input)
    {
        if (strlen($input) >= $this->length) {
            return true;
        }
        return sprintf("The input must be at least %d characters", $this->length);
    }
}
