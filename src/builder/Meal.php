<?php

namespace Src\Builder;

class Meal 
{
    /**
     * list variable
     * item 对象列表
     * @var array
     */
    protected $list = [];
    
    /**
     * setItem function
     * 添加项
     * @param Item $item
     * @return static
     */
    public function setItem(Item $item)
    {
        $this->list[] =  $item;
        return $this;
    }

    /**
     * getCost function
     * 计算成本
     *
     * @return float
     */
    public function getCost() : float
    {
        $sum = 0;
        foreach($this->list as $item) {
            /**
             * @var Item $item
             */
            $sum += $item->price();
        }
        return $sum;
    }

    /**
     * showItem function
     * 显示所有项
     *
     * @return class
     */
    public function showItem()
    {
        foreach($this->list as $item) {
            /**
             * @var Item $item
             */
            echo 'item : ' . $item->name().
                 'packing : ' . $item->packing()->pack().
                 'price : ' . $item->price().PHP_EOL;
        }
        return $this;
    }
    
}

