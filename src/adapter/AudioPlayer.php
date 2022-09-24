<?php

namespace Src\Adapter;

class AudioPlayer implements MediaPlayer
{
    /**
     * MediaAdapter variable
     *
     * @var MediaAdapter
     */
    protected $mediaAdapter;

    /**
     * play function
     *
     * @param string $audioType
     * @param string $fileName
     * @return void
     */
    public function play(string $audioType, string $fileName) : void
    {
        switch(strtolower($audioType)) {
            case 'vlc':
            case 'mp4':
                $this->mediaAdapter = new MediaAdapter($audioType);
                $this->mediaAdapter->play($audioType, $fileName);
                break;
            case 'mp3':
                echo '播放mp3音频文件'.PHP_EOL;
                break;
            default:
                echo '暂不支付此类文件'.PHP_EOL;
        }
    }

}

