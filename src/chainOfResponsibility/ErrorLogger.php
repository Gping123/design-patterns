<?php

namespace Src\ChainOfResponsibility;

/**
 * ErrorLogger class
 * 错误日志类
 */
class ErrorLogger extends AbstractLogger
{
    /**
     * construct function
     *
     * @param integer $level
     */
    public function __construct(int $level)
    {
        $this->level = $level;
    }

    /**
     * write function
     * 具体实现
     * @override
     * @param string $message
     * @return void
     */
    public function write(string $message)
    {
        echo 'Error Console::Logger=>' . $message .PHP_EOL;
    }

}
