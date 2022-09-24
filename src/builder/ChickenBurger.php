<?php

namespace Src\Builder;

/**
 * ChickenBurger class
 * 鸡腿汉堡
 */
class ChickenBurger extends Burger
{
    /**
     * name function
     * 名称
     * @override
     * @return string
     */
    public function name() : string
    {
        return 'Checken Burger'.PHP_EOL;
    }

    /**
     * price function
     * 价格
     * @override
     * @return float
     */
    public function price() : float
    {
        return 30.9;
    }

}

