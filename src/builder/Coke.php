<?php

namespace Src\Builder;

/**
 * Coke class
 * 可口可乐
 */
class Coke extends ColdDrink
{
    /**
     * name function
     * 名称
     * @override
     * @return string
     */
    public function name() : string
    {
        return 'coke';
    }

    /**
     * price function
     * 价格
     * @override
     * @return float
     */
    public function price() : float
    {
        return 15;
    }

}
