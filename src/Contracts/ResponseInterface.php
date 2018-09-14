<?php

namespace juniorb2ss\LinioChallenge\Contracts;

/**
*
*/
interface ResponseInterface
{
    /**
     * Add array data to response parse
     * @param array $array data
     * @return void
     */
    public function addResponseValue(int $key, string $value): void;

    /**
     * [addResponseArray description]
     * @param array $data [description]
     */
    public function addResponseArray(array $data): void;

    /**
     * Return data in string mode
     * @return string
     */
    public function toString(): string;
}
