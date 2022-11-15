<?php

namespace Povil\PeerProgramming\Service;

class ValidatorService
{
    public function __construct(private array $validators)
    {
    }

    public function validate(string|int $input)
    {
        foreach ($this->validators as $validator) {
            $validator->check($input);
        }
    }
}
