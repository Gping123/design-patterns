<?php

namespace Src\Builder;

/**
 * Wrapper class
 * 包装器类
 */
class Wrapper implements Packing
{
    /**
     * pack function
     * 包装
     * @return string
     */
    public function pack() : string
    {
        return '盒子包装';
    }
}

