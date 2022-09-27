<?php
require_once __DIR__.'/../vendor/autoload.php';

use Src\Strategy\Context;
use Src\Strategy\OperationAdd;
use Src\Strategy\OperationMultiply;
use Src\Strategy\OperationSubstract;

(function(){

    $context = new Context(new OperationAdd());
    $result = $context->executeStrategy(1,2);
    echo 'Add:'.$result.PHP_EOL;

    $context = new Context(new OperationMultiply());
    $result = $context->executeStrategy(3,2);
    echo 'Multiply:'.$result.PHP_EOL;
    
    $context = new Context(new OperationSubstract());
    $result = $context->executeStrategy(4,2);
    echo 'Substract:'.$result.PHP_EOL;

})();
