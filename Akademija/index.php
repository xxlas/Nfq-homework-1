<?php
require __DIR__.'/namespaces.php';
require __DIR__.'/NotTyped/namespaces.php';
require __DIR__.'/Soft/namespaces.php';
require __DIR__.'/Strict/namespaces.php';

echo 'calculateHomeWorkSum: '.Nfq\Akademija\calculateHomeWorkSum(3, 2.2, '1').'<br>';
echo '\Nfq\Akademija\NotTyped\calculateHomeWorkSum: '.Nfq\Akademija\NotTyped\calculateHomeWorkSum(3, 2.2, '1').'<br>';
echo '\Nfq\Akademija\Soft\calculateHomeWorkSum: '. Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1').'<br>';
echo '\Nfq\Akademija\Strict\calculateHomeWorkSum: '. Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1').'<br>';

