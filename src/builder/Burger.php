<?php

namespace Src\Builder;

/**
 * Burger class
 * 汉堡包抽象类
 */
abstract class Burger implements Item
{
    /**
     * packing function
     * 包装
     * @return Packing
     * @override
     */
    public function packing() : Packing
    {
        return new Wrapper();
    }

    /**
     * price function
     * 价格
     * @return float
     * @override
     */
    public abstract function price() : float;
}
