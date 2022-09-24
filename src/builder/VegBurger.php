<?php

namespace Src\Builder;

/**
 * VegBurger class
 * 素食汉堡
 */
class VegBurger extends Burger
{
    /**
     * name function
     * 名称
     * @override
     * @return string
     */
    public function name() : string
    {
        return 'veg burger'.PHP_EOL;
    }

    /**
     * price function
     * 价格
     * @override
     * @return float
     */
    public function price() : float
    {
        return 11.1;
    }
}
