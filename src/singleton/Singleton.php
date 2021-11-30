<?php

namespace Src\Singleton;

class Singleton {

    /**
     * 类唯一实例对象
     */
    protected static $singleton = null;

    protected static $time = 0;

    /**
     * 禁止外部使用构造方法实例化对象
     */
    protected function __construct()
    {
        self::$time = time();
    }

    /**
     * 禁止克隆
     */
    private function __clone()
    {
        return null;
    }

    /**
     * 禁止序列化
     */
    private function __sleep()
    {
        return null;
    }

    /**
     * 禁止反序列化
     */
    private function __wakeup()
    {
        return null;
    }

    /**
     * 获取时间
     */
    public function getTime()
    {
        return static::$time;
    }


    # ====== static methods ======
    /**
     * 获取单例方法
     */
    public static function getSingleton() 
    {
        if (is_null(static::$singleton)) {
            static::$singleton = new static();
        }   
        return static::$singleton;     
    }

}
