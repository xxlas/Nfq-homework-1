<?php
declare(strict_types=1);
namespace Nfq\Akademija;

class StrictCalculate
{
    static function calculateHomeWorkSum(int...$numbers) : int
    {
        return array_sum($numbers);
    }
}

