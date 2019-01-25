<?php

namespace juniorb2ss\LinioChallenge;

use juniorb2ss\LinioChallenge\Contracts\NumbersInterface;

/**
 *
 */
class Numbers implements NumbersInterface
{
    /**
     * Initial number from range
     */
    const FROM = 0;

    /**
     * Final number for range
     */
    const TO = 100;

    /**
     *
     */
    public static function build(int $from = self::FROM, int $to = self::TO): array
    {
        // generate numbers list of range 0-100
        $numbersMap = range($from, $to);

        return array_slice($numbersMap, 1, null, true);
    }
}
