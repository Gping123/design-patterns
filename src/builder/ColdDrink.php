<?php

namespace Src\Builder;

/**
 * ColdDrink class
 * 冷饮抽象类
 */
abstract class ColdDrink implements Item 
{
    /**
     * packing function
     * 包装
     * @return Packing
     */
    public function packing() : Packing
    {
        return new Bottle();
    }

    /**
     * price function
     * 价格
     * @return float
     * @override 
     */
    public abstract function price() : float;

}

