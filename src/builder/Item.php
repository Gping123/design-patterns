<?php

namespace Src\Builder;

interface Item 
{
    /**
     * name function
     * 名称
     * @return string
     */
    public function name() : string;

    /**
     * packing function
     * 包装
     * @return Packing
     */
    public function packing() : Packing;

    /**
     * price function
     * 价格
     * @return float
     */
    public function price() : float;

}
