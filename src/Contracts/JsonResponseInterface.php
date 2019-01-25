<?php

namespace juniorb2ss\LinioChallenge\Contracts;

/**
*
*/
interface JsonResponseInterface
{
    /**
     * Return data in json type
     * @return string Json String
     */
    public function toJson(): string;
}
