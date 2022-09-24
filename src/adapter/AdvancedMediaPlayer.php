<?php

namespace Src\Adapter;

/**
 * AdvancedMediaPlayer interface
 */
interface AdvancedMediaPlayer 
{
    /**
     * playVlc function
     * 播放vlc方法
     * @param string $fileName
     * @return void
     */
    public function playVlc(string $fileName) : void ;

    /**
     * playMp4 function
     * 播放MP4文件
     * @param string $fileName
     * @return void
     */
    public function playMp4(string $fileName) : void ;

}
