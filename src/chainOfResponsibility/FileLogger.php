<?php

namespace Src\ChainOfResponsibility;

/**
 * FileLogger class
 * 文件日志类
 */
class FileLogger extends AbstractLogger
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
        echo 'File::Logger=>' . $message .PHP_EOL;
    }

}
