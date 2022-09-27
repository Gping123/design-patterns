<?php

use Src\Command\Broker;
use Src\Command\BuyStock;
use Src\Command\SellStock;
use Src\Command\Stock;

require_once __DIR__ . '/../vendor/autoload.php';

(function(){
    // 股票
    $abcStock = new Stock();

    // 买入
    $buyStockOrder = new BuyStock($abcStock);
    // 卖出
    $sellStockOrder = new SellStock($abcStock);

    // 经纪人
    $broker = new Broker();
    // 选单
    $broker->takeOrder($buyStockOrder);
    $broker->takeOrder($sellStockOrder);

    // 下单
    $broker->placeOrders();

})();
