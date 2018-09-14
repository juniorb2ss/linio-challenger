<?php

namespace juniorb2ss\LinioChallenge;

use juniorb2ss\LinioChallenge\Number;
use juniorb2ss\LinioChallenge\Contracts\NumberInterface;
use juniorb2ss\LinioChallenge\Contracts\ResponseInterface;
use juniorb2ss\LinioChallenge\Abstracts\ChallengerAbstract;

/**
*
*/
final class Challenger extends ChallengerAbstract
{
    /**
     * [__construct description]
     * @param \juniorb2ss\LinioChallenge\Contracts\ResponseInterface|null $response
     * @param \juniorb2ss\LinioChallenge\Contracts\NumberInterface|null   $numberFactory
     */
    public function __construct(ResponseInterface $response = null, NumberInterface $numberFactory = null)
    {
        // response instance
        $responseInstance = $response ?? (new Response);

        // number factory class to generate range of numbers
        self::$numberFactory = $numberFactory ?? (new Number);

        // set response handler
        $this->setResponse($responseInstance);

        // initiliaze wordmap with numbers
        self::$numbersMap = $this->buildNumberRange();

        // input texts in array each multiple
        $this->changeNumbersWordArray();
    }

    /**
     * [buildNumberRange description]
     * @return [type] [description]
     */
    private function buildNumberRange(): array
    {
        return self::$numberFactory::build();
    }

    /**
     * [changeNumbersWordArray description]
     * @param  array|null $array [description]
     * @return [type]            [description]
     */
    private function changeNumbersWordArray(array $array = null): void
    {
        $arrayToMap = $array ?? self::$numbersMap;

         // prepare response array with numbers
        $this->addResponseArray($arrayToMap);

        // fill number array with text
        foreach (self::$multipleTable as $multipleNumber => $text) {
            // generate multiple of number
            // and get current text for number multiple
            // [1,2,Linio,4,...]
            $range = range($multipleNumber, self::$numberFactory::TO, $multipleNumber);

            // fill word map array with number and text
            foreach ($range as $i) {
                $this->addResponseValue($i, $text);
            }
        }
    }
}
