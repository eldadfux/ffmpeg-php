# FFmpeg-PHP

** **LIVE** - WORK IN PROGRESS **

Simple PHP driver for the ffmpeg CLI tool

## Getting Started

First, install ffmpeg cli tool on your operating system. Visit the compilation guide [here](https://trac.ffmpeg.org/wiki/CompilationGuide) to see installation instruction for OSX, Linux, Windows and some other platforms.

You can learn more about how to use ffmpeg from command line in [this tutorial](http://blog.superuser.com/2012/02/24/ffmpeg-the-ultimate-video-and-audio-manipulation-tool/)

## Usage

```php
$ffmpeg = new FFmpeg('/usr/local/bin/ffmpeg');

$ffmpeg
    ->logLevel(FFmpeg::LOG_LEVEL_FATAL)
    ->input('original.mp4')
    ->size(FFmpeg::VIDEO_SIZE_2K)
    ->output('demo.mp4')
    ->execute()
;
```

http://blog.superuser.com/2011/11/07/video-conversion-done-right-codecs-and-software/
https://support.jwplayer.com/customer/portal/articles/1430240-hls-adaptive-streaming