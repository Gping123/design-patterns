<?php

namespace Src\Prototype;

/**
 * Shape class
 * 图形抽象类
 */
abstract class Shape 
{
    /**
     * 对象唯一ID
     * @var mixed
     */
    protected $id;

    /**
     * 对象类型 
     * @var string
     */
    protected $type;

    // 抽象方法
    public abstract function draw();

    /**
     * __construct function
     * 统一构造方法
     */
    public function __construct()
    {
        sleep(1);// 模拟实例化一个对象需要很久
        echo '实例化了一个'.$this->type.'类对象'.PHP_EOL;
    }

    /**
     * setId function
     * 设置对象id
     *
     * @param mixed $id
     * @return static
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * getId function
     * 获取对象id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    // clone 方法不用实现 php默认实现
    public function __clone()
    {
        echo '克隆了一个'.$this->type.'类对象'.PHP_EOL;
    }

    /**
     * 克隆对象方法
     *     可以在克隆的时候设置对象的唯一ID
     *
     * @return static
     */
    public function clone()
    {
        return clone $this;
    }

}

