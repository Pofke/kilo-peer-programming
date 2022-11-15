<?php

namespace Povil\PeerProgramming\Service\Validators;

use Povil\PeerProgramming\Service\ValidatorInterface;

class SymbolValidator implements ValidatorInterface
{
    public function __construct(private string $symbol)
    {
    }

    public function check(mixed $input)
    {
        if (str_contains($input, $this->symbol)) {
            return true;
        }
        return sprintf("The input must be at least 1 %s characters", $this->symbol);
    }
}