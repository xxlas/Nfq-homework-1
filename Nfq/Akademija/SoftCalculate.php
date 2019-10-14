<?php
namespace Nfq\Akademija;

class SoftCalculate
{
    static function calculateHomeWorkSum(int...$numbers) : int
    {
        return array_sum($numbers);
    }
}
