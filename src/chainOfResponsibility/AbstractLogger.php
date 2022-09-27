<?php

namespace Src\ChainOfResponsibility;

/**
 * AbstractLogger class
 * 抽象日志类【核心】
 */
abstract class AbstractLogger 
{
    /**
     * 级别常量
     */
    public const INFO = 1;
    public const DEBUG = 2;
    public const ERROR = 3;

    /**
     * $level variable
     * 级别
     * @var int
     */
    protected $level;

    /**
     * $nextLogger variable
     * 下个日志对象【链】
     * @var AbstractLogger
     */
    protected $nextLogger;

    /**
     * setNextLogger function
     * 设置下一个日志对象【添加端点到链上】
     * @param AbstractLogger $nextLogger
     * @return void
     */
    public function setNextLogger(AbstractLogger $nextLogger)
    {
        $this->nextLogger = $nextLogger;
    }

    /**
     * logMessage function
     * 操作核心【主要处理逻辑所在】
     *     判断是否属于当前端点处理
     * @param integer $level
     * @param string $message
     * @return void
     */
    public function logMessage(int $level, string $message)
    {
        if ($this->level <= $level) {
            $this->write($message);
        }
        if ($this->nextLogger != null) {
            $this->nextLogger->logMessage($level, $message);
        }
    }

    /**
     * write function
     * 抽象处理方法
     *     实现类必须实现的方法【具体实现逻辑由子类实现】
     * @param string $message
     * @return void
     */
    protected abstract function write(string $message);

}
