<?php

namespace Src\Adapter;

/**
 * VlcPlayer class
 * vlc格式播放器
 */
class VlcPlayer implements AdvancedMediaPlayer
{

    /**
     * playVlc function
     * vlc格式播放
     *
     * @param string $fileName
     * @return void
     */
    public function playVlc(string $fileName) : void
    {
        echo '播放vlc文件： '. $fileName.PHP_EOL;
    }

    /**
     * playMp4 function
     * mp4格式播放
     * @param string $fileName
     * @return void
     */
    public function playMp4(string $fileName) : void
    {
        echo '不支持mp4类文件'.PHP_EOL;
    }

}
