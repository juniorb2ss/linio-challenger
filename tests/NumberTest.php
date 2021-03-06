<?php
namespace juniorb2ss\LinioChallenge\Tests;

use juniorb2ss\LinioChallenge\Numbers;
use juniorb2ss\LinioChallenge\Tests\TestCase;

class NumberTest extends TestCase
{
    public function testNumberCorrectRanger()
    {
        $numbersMap = Numbers::build(0, 5);

        $expected = [
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5
                    ];

        $this->assertEquals($expected, $numbersMap);
    }
}
