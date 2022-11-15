<?php

namespace Povil\PeerProgramming\Tests\Unit;

use Povil\PeerProgramming\Service\Validators\SymbolValidator;
use PHPUnit\Framework\TestCase;

class SymbolValidatorTest extends TestCase
{
    /**
     * @dataProvider symbolDataProvider
     */
    public function testSymbolValidationCorrect(string $input, string $symbol, mixed $expected)
    {
        $validator = new SymbolValidator($symbol);
        $actual = $validator->check($input);
        self::assertEquals($expected, $actual);
    }

    public function symbolDataProvider(): \Generator
    {
        yield 'first symbol t in test' => [
            'input' => "test",
            'symbol' => 't',
            'expected' => true
        ];


        yield 'second symbol @ in test' => [
            'input' => "test",
            'symbol' => '@',
            'expected' => 'The input must be at least 1 @ characters'
        ];
    }

}
