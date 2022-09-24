<?php

namespace Src\Builder;

/**
 * Bottle class
 * 瓶子类
 */
class Bottle implements Packing
{
    /**
     * pack function
     * 包装
     * @return string
     * @override pack
     */
    public function pack() : string
    {
        return '瓶子包装';
    }
}

