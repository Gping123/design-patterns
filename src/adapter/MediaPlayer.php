<?php

namespace Src\Adapter;

/**
 * MediaPlayer interface
 * 媒体播放器接口
 */
interface MediaPlayer 
{
    /**
     * play function
     * 播放方法
     * @param string $audioType
     * @param string $fileName
     * @return void
     */
    public function play(string $audioType, string $fileName) : void;
}
