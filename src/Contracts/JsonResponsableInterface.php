<?php

namespace juniorb2ss\LinioChallenge\Contracts;

/**
*
*/
interface JsonResponsableInterface
{
    /**
     * Return data in json type
     * @return string Json String
     */
    public function toJson(): string;
}
