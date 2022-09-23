<?php

namespace Src\AbstractFactory;

/**
 * AbstractFactory interface
 * 抽象工厂接口
 */
interface AbstractFactory 
{
    /**
     * getShape function
     * 获取图形实例
     *
     * @param string $type
     * @return Shape|null
     */
    public function getShape(string $type);

    /**
     * getColor function
     * 获取颜色实例
     *
     * @param string $color
     * @return Color|null
     */
    public function getColor(string $color);

}
