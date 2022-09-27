<?php

namespace Src\Template;

/**
 * Football class
 * 足球类
 */
class Football extends Game
{
    /**
     * initialize function
     * 初始化方法
     * @override
     * @return void
     */
    public function initialize()
    {
        echo 'Football Game Initialized! Start playing.'.PHP_EOL;
    }

    /**
     * startPlay function
     * 开始游戏
     * @override
     * @return void
     */
    public function startPlay()
    {
        echo 'Football Game Started. Enjoy the game!'.PHP_EOL;
    }

    /**
     * endPlay function
     * 结束游戏
     * @override
     * @return void
     */
    public function endPlay()
    {
        echo 'Football Game Finished!'.PHP_EOL;
    }
}
