<?php

namespace juniorb2ss\LinioChallenge\Contracts;

/**
*
*/
interface NumberInterface
{
   
    /**
     * Generate numbers range from challenger
     * @return int
     */
    public static function build(int $from = self::FROM, int $to = self::TO): array;
}
