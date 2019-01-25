<?php

namespace juniorb2ss\LinioChallenge;

use juniorb2ss\LinioChallenge\Contracts\ResponseInterface;
use juniorb2ss\LinioChallenge\Contracts\ArrayResponseInterface;
use juniorb2ss\LinioChallenge\Contracts\JsonResponseInterface;

/**
*
*/
class Response implements ResponseInterface, JsonResponseInterface, ArrayResponseInterface
{
    /**
     * @var array
     */
    private $responseArray = [];

    public function addResponseValue(int $key, string $value): void
    {
        $this->responseArray[$key] = $value;
    }

    /**
     * [addResponseArray description]
     * @param array $data [description]
     */
    public function addResponseArray(array $data): void
    {
        $this->responseArray = $data;
    }

    /**
     * [getResponseArrayData description]
     * @return [type] [description]
     */
    private function getResponseArrayData(): array
    {
        return $this->responseArray;
    }

    public function toArray(): array
    {
        return $this->getResponseArrayData();
    }

    public function toString(): string
    {
        return implode(' ', $this->getResponseArrayData());
    }

    public function toJson(): string
    {
        return json_encode($this->getResponseArrayData());
    }
}
