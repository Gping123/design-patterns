<?php

namespace Src\Command;

/**
 * Order interface
 * 订单接口
 */
interface Order 
{
    // 订单执行方法
    public function execute() : void;
}
