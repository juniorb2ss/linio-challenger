<?php
namespace juniorb2ss\LinioChallenge\Tests;

use juniorb2ss\LinioChallenge\Challenger;
use juniorb2ss\LinioChallenge\Tests\TestCase;

class ChallengerTest extends TestCase
{
    public function setUp()
    {
        $this->mock = new Challenger;
    }

    /**
     * Test if every multiple of three print linio
     */
    public function testArrayResult()
    {
        // get expected array to make test validation
        $expectedArray = $this->getExpectedArrayResultMock();

        // get numbers/texts in array type
        $resultArray = $this->mock->getResponse()
                                  ->toArray();

        $this->assertEquals($expectedArray, $resultArray);
    }

    /**
     * [testStringResult description]
     * @return [type] [description]
     */
    public function testStringResult()
    {
        // get expected array to make test validation
        $expectedString = $this->getExpectedStringResultMock();

        // get numbers/texts in array type
        $resultString = $this->mock->getResponse()
                                   ->toString();

        $this->assertEquals($expectedString, $resultString);
    }

    /**
     * [testJsonStringResult description]
     * @return [type] [description]
     */
    public function testJsonStringResult()
    {
        // get expected array to make test validation
        $expectedJsonString = $this->getExpectedJsonStringResultMock();

        // get numbers/texts in array type
        $resultJsonString = $this->mock->getResponse()
                                       ->toJson();

        $this->assertEquals($expectedJsonString, $resultJsonString);
    }
}
