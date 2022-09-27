<?php

use Src\ChainOfResponsibility\AbstractLogger;
use Src\ChainOfResponsibility\ConsoleLogger;
use Src\ChainOfResponsibility\ErrorLogger;
use Src\ChainOfResponsibility\FileLogger;

require_once __DIR__ . '/../vendor/autoload.php';

(function(){

    /**
     * get_logger function
     * 获取责任链接对象
     *     获取责任链
     * @return AbstractLogger 
     */
    function get_logger() {
        // 创建各个端点
        $errorLogger = new ErrorLogger(AbstractLogger::ERROR);
        $fileLogger = new FileLogger(AbstractLogger::DEBUG);
        $consoleLogger = new ConsoleLogger(AbstractLogger::INFO);

        // 构建责任链
        $errorLogger->setNextLogger($fileLogger);
        $fileLogger->setNextLogger($consoleLogger);

        return $errorLogger;

    }

    $loggerChain = get_logger();

    // 使用不同的状态去实现不同的效果
    $loggerChain->logMessage(AbstractLogger::INFO, 'This is an information.');
    $loggerChain->logMessage(AbstractLogger::DEBUG, 'This is an debug level information.');
    $loggerChain->logMessage(AbstractLogger::ERROR, 'This is an error information.');

})();

