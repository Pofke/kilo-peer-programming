<?php

namespace Povil\PeerProgramming\Service;

interface ValidatorInterface
{
    public function check(mixed $input);
}