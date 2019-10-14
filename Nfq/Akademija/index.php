<?php
require '../../autoloader.php';

use Nfq\Akademija\StrictCalculate;
use Nfq\Akademija\SoftCalculate;
use Nfq\Akademija\NotTypedCalculate;

echo 'calculateHomeWorkSum: '.RootCalculate::calculateHomeWorkSum(3, 2.2, '1').'<br>';
echo '\Nfq\Akademija\NotTyped\calculateHomeWorkSum: '.NotTypedCalculate::calculateHomeWorkSum(3, 2.2, '1').'<br>';
echo '\Nfq\Akademija\Soft\calculateHomeWorkSum: '.SoftCalculate::calculateHomeWorkSum(3, 2.2, '1').'<br>';
echo '\Nfq\Akademija\Strict\calculateHomeWorkSum: '. StrictCalculate::calculateHomeWorkSum(3, 2.2, '1').'<br>';

