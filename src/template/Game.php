<?php

namespace Src\Template;

abstract class Game 
{
    // 初始化抽象方法
    public abstract function initialize();

    // 开始游戏抽象方法
    public abstract function startPlay();

    // 结束游戏抽象方法
    public abstract function endPlay();

    /**
     * play function
     * @final
     * @return void
     */
    public final function play() : void
    {
        // 初始化
        $this->initialize();

        // 开始游戏
        $this->startPlay();

        // 结束游戏
        $this->endPlay();

    }
}
