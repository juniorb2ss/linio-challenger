<?php
namespace juniorb2ss\LinioChallenge\Tests;

use juniorb2ss\LinioChallenge\Response;
use juniorb2ss\LinioChallenge\Tests\TestCase;

class ResponseTest extends TestCase
{
    public function setUp()
    {
        $data = $this->data();

        $this->response = new Response;

        $this->response->addResponseArray($data);
    }

    public function testAddArrayToResponse()
    {
        $expected = $this->data();
        $result = $this->response->toArray();

        $this->assertEquals($expected, $result);
    }

    public function testArrayResponse()
    {
        $result = $this->response->toArray();
        $expected = $this->data();

        $this->assertEquals($expected, $result);
    }

    public function testStringResponse()
    {
        $result = $this->response->toString();

        $expected = implode(' ', $this->data());

        $this->assertEquals($expected, $result);
    }

    public function testJsonStringResponse()
    {
        $result = $this->response->toJson();

        $expected = json_encode($this->data());

        $this->assertEquals($expected, $result);
    }

    /**
     * [data description]
     * @return [type] [description]
     */
    private function data(): array
    {
        return [
            'a',
            'b'
        ];
    }
}
