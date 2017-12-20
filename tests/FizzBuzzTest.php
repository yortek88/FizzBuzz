<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use src\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    /**
     * @expectedException     RangeException
     * @dataProvider rangeExceptionProvider
     */
    public function testRangeException($startRange, $endRange)
    {
        $fizzBuzzer = new FizzBuzz();
        $fizzBuzzer->checkFizzBuzz($startRange, $endRange);
    }

    /**
     * @dataProvider checkFizzBuzzProvider
     */
    public function testCheckFizzBuzz($startRange, $endRange, $expectedResults)
    {
        $fizzBuzzer = new FizzBuzz();
        $this->assertEquals($expectedResults, $fizzBuzzer->checkFizzBuzz($startRange, $endRange));
    }

    public function rangeExceptionProvider()
    {
        return [
            'exception thrown' => [0, 1],
        ];

    }

    public function checkFizzBuzzProvider()
    {
        return [
            [
                1,
                15,
                [
                    '1', '2', '3fizz', '4', '5buzz',
                    '6fizz', '7', '8', '9fizz', '10buzz',
                    '11', '12fizz', '13', '14', '15fizzbuzz'
                ]
            ],
            [
                15,
                1,
                [
                    '1', '2', '3fizz', '4', '5buzz',
                    '6fizz', '7', '8', '9fizz', '10buzz',
                    '11', '12fizz', '13', '14', '15fizzbuzz'
                ]
            ],
            [
                1,
                10,
                [
                    '1', '2', '3fizz', '4', '5buzz',
                    '6fizz', '7', '8', '9fizz', '10buzz'
                ]
            ]
        ];

    }

}