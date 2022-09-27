<?php

namespace Src\ChainOfResponsibility;

/**
 * ConsoleLogger class
 * 控制台日志类
 */
class ConsoleLogger extends AbstractLogger
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
        echo 'Standard Console::Logger=>' . $message .PHP_EOL;
    }

}
