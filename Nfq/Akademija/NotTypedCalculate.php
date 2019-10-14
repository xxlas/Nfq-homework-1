<?php

namespace Nfq\Akademija;

class NotTypedCalculate
{
    static function calculateHomeWorkSum(...$numbers): int
    {
        return array_sum($numbers);
    }
}
