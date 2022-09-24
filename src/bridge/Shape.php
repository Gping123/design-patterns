<?php

namespace Src\Bridge;

/**
 * Shape class
 * 抽象图形类
 */
abstract class Shape 
{
    /**
     * DrawAPI variable
     * 绘制接口【通过它实现DrawAPI接口】
     *     操作 $drawApi的方式是从抽象函数draw方法中具体实现
     * @var DrawAPI 
     */
    protected $drawApi;

    /**
     * __construct function
     * 构造方法
     *
     * @param DrawAPI $drawApi
     */
    protected function __construct(DrawAPI $drawApi)
    {
        $this->drawApi = $drawApi;
    }

    /**
     * draw function
     * 绘画方法
     *
     * @return void
     */
    public abstract function draw() : void ;

}
