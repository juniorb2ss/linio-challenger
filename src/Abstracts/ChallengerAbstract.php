<?php

namespace juniorb2ss\LinioChallenge\Abstracts;

use juniorb2ss\LinioChallenge\Contracts\ResponseInterface;

/**
 * Class Result
 * @package Linio
 */
abstract class ChallengerAbstract
{
    /**
     * Response
     * @var \juniorb2ss\LinioChallenge\Contracts\ResponseInterface $response
     */
    protected $response;

    /**
     * array with all range of numbers and texts
     * @var array
     */
    protected static $wordmap = [];

    /**
     * array with all range of numbers
     * @var array
     */
    protected static $numbersMap = [];

    /**
     * [$numberFactory description]
     * @var juniorb2ss\LinioChallenge\Contracts\NumberInterface
     */
    protected static $numberFactory;

    /**
     * [$tableOfMultiple description]
     * @var [type]
     */
    public static $multipleTable = [
        3 => 'Linio',
        5 => 'IT',
        15 => 'Linianos'
    ];

    /**
     * [setResponse description]
     * @param ResponseInterface $response [description]
     */
    public function setResponse(ResponseInterface $response): void
    {
        $this->response = $response;
    }
   
    /**
     * [response description]
     * @return [type] [description]
     */
    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    /**
     * [addArrayToResponse description]
     * @param array $array [description]
     */
    public function addResponseValue(int $key, string $value): void
    {
        $this->response->addResponseValue($key, $value);
    }

    /**
     * [addResponseArray description]
     * @param array $data [description]
     */
    public function addResponseArray(array $data): void
    {
        $this->response->addResponseArray($data);
    }
}
