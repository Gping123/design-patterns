<?php

namespace Src\Builder;

/**
 * Pepsi class
 * 百事可乐
 */
class Pepsi extends ColdDrink
{
    /**
     * name function
     * 名称
     * @override
     * @return string
     */
    public function name() : string 
    {
        return 'Pepsi Drink';
    }

    /**
     * price function
     * 价格
     * @override
     * @return float
     */
    public function price() : float
    {
        return 14.0;
    }

}
