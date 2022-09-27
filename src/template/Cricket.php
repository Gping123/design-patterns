<?php

namespace Src\Template;

/**
 * Cricket class
 * 板球类
 */
class Cricket extends Game 
{
    /**
     * initialize function
     * 初始化方法
     * @override
     * @return void
     */
    public function initialize()
    {
        echo 'Cricket Game Initialized! Start playing.'.PHP_EOL;
    }

    /**
     * startPlay function
     * 开始游戏
     * @override
     * @return void
     */
    public function startPlay()
    {
        echo 'Cricket Game Started. Enjoy the game!'.PHP_EOL;
    }

    /**
     * endPlay function
     * 结束游戏
     * @override
     * @return void
     */
    public function endPlay()
    {
        echo 'Cricket Game Finished!'.PHP_EOL;
    }
}
