<?php

namespace Src\Command;

/**
 * Stock class
 * 股票类
 */
class Stock
{
    /**
     * $name variable
     * 名称
     * @var string
     */
    private $name = 'ABC';

    /**
     * $quantity variable
     * 数量
     * @var integer
     */
    private $quantity = 10;

    /**
     * buy function
     * 买入
     * @return void
     */
    public function buy()
    {
        echo sprintf("Stock [Name:%s,Quantity:%d bought]\n", $this->name, $this->quantity);
    }

    /**
     * sell function
     * 卖出
     * @return void
     */
    public function sell()
    {
        echo sprintf("Stock [Name:%s,Quantity:%d sold]\n", $this->name, $this->quantity);
    }

}
