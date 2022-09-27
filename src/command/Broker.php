<?php

namespace Src\Command;

/**
 * Broker class
 * 经纪人
 */
class Broker 
{
    /**
     * $orderList variable
     * 订单列表
     * @var array
     */
    private $orderList = [];

    /**
     * takeOrder function
     * 添加订单
     * @param Order $order
     * @return void
     */
    public function takeOrder(Order $order)
    {
        $this->orderList[] = $order;
    }

    /**
     * placeOrders function
     * 下订单
     * @return void
     */
    public function placeOrders()
    {
        foreach($this->orderList as $order) {
            /**
             * @var Order $order
             */
            $order->execute();
        }

        $this->orderList = [];
    }

}
