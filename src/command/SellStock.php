<?php

namespace Src\Command;

/**
 * SellStock class
 * 卖出股票
 */
class SellStock implements Order
{
    /**
     * $abcStock variable
     *
     * @var Stock
     */
    private $abcStock;

    /**
     * construct function
     *
     * @param Stock $abcStock
     */
    public function __construct(Stock $abcStock)
    {
        $this->abcStock = $abcStock;
    }

    /**
     * execute function
     * 执行方法具体实现
     * @override
     * @return void
     */
    public function execute() : void
    {
        $this->abcStock->sell();
    }

}
