<?php

namespace FFmpeg;

use Exception;

/**
 * Class FFMPEG
 *
 * $ffmpeg = new FFmpeg('/usr/local/bin/ffmpeg');
 *
 * $ffmpeg
 *      ->logLevel(FFmpeg::LOG_LEVEL_FATAL)
 *      ->size(FFmpeg::VIDEO_SIZE_2K)
 *      ->output('demo.mp4')
 *      ->execute()
 * ;
 *
 * @package FFMPEG
 *
 */
class FFmpeg
{
    /**
     * Log level options
     */
    const LOG_LEVEL_QUIET   = -8;   // Show nothing at all; be silent.
    const LOG_LEVEL_PANIC   = 0;    // Only show fatal errors which could lead the process to crash, such as and assert failure. This is not currently used for anything.
    const LOG_LEVEL_FATAL   = 8;    // Only show fatal errors. These are errors after which the process absolutely cannot continue after.
    const LOG_LEVEL_ERROR   = 16;   // Show all errors, including ones which can be recovered from.
    const LOG_LEVEL_WARNING = 24;   // Show all warnings and errors. Any message related to possibly incorrect or unexpected events will be shown.
    const LOG_LEVEL_INFO    = 32;   // Show informative messages during processing. This is in addition to warnings and errors. This is the default value.
    const LOG_LEVEL_VERBOSE = 40;   // Same as info, except more verbose.
    const LOG_LEVEL_DEBUG   = 48;   // Show everything, including debugging information.
    const LOG_LEVEL_TRACE   = 50;

    /**
     * Standard  supported video sizes
     */
    const VIDEO_SIZE_NTSC       = 'ntsc'; // 720x480
    const VIDEO_SIZE_PAL        = 'pal'; // 720x576
    const VIDEO_SIZE_QNTSC      = 'qntsc'; // 352x240
    const VIDEO_SIZE_QPAL       = 'qpal'; // 352x288
    const VIDEO_SIZE_SNTSC      = 'sntsc'; // 640x480
    const VIDEO_SIZE_SPAL       = 'spal'; // 768x576
    const VIDEO_SIZE_FILM       = 'film'; // 352x240
    const VIDEO_SIZE_NTSC_FILM  = 'ntsc-film'; // 352x240
    const VIDEO_SIZE_SQCIF      = 'sqcif'; // 128x96
    const VIDEO_SIZE_QCIF       = 'qcif'; // 176x144
    const VIDEO_SIZE_CIF        = 'cif'; // 352x288
    const VIDEO_SIZE_4CIF       = '4cif'; // 704x576
    const VIDEO_SIZE_16CIF      = '16cif'; // 1408x1152
    const VIDEO_SIZE_QQVGA      = 'qqvga'; // 160x120
    const VIDEO_SIZE_qvga       = 'qvga'; // 320x240
    const VIDEO_SIZE_VGA        = 'vga'; // 640x480
    const VIDEO_SIZE_SVGA       = 'svga'; // 800x600
    const VIDEO_SIZE_XGA        = 'xga'; // 1024x768
    const VIDEO_SIZE_UXGA       = 'uxga'; // 1600x1200
    const VIDEO_SIZE_QXGA       = 'qxga'; // 2048x1536
    const VIDEO_SIZE_SXGA       = 'sxga'; // 1280x1024
    const VIDEO_SIZE_QSXGA      = 'qsxga'; // 2560x2048
    const VIDEO_SIZE_HSXGA      = 'hsxga'; // 5120x4096
    const VIDEO_SIZE_WVGA       = 'wvga'; // 852x480
    const VIDEO_SIZE_WXGA       = 'wxga'; // 1366x768
    const VIDEO_SIZE_WSXGA      = 'wsxga'; // 1600x1024
    const VIDEO_SIZE_WUXGA      = 'wuxga'; // 1920x1200
    const VIDEO_SIZE_WOXGA      = 'woxga'; // 2560x1600
    const VIDEO_SIZE_WQSXGA     = 'wqsxga'; // 3200x2048
    const VIDEO_SIZE_WQUXGA     = 'wquxga'; // 3840x2400
    const VIDEO_SIZE_WHSXGA     = 'whsxga'; // 6400x4096
    const VIDEO_SIZE_WHUXGA     = 'whuxga'; // 7680x4800
    const VIDEO_SIZE_CGA        = 'cga'; // 320x200
    const VIDEO_SIZE_EGA        = 'ega'; // 640x350
    const VIDEO_SIZE_HD480      = 'hd480'; // 852x480
    const VIDEO_SIZE_HD720      = 'hd720'; // 1280x720
    const VIDEO_SIZE_HD1080     = '1920x1080'; //
    const VIDEO_SIZE_2K         = '2k'; // 2048x1080
    const VIDEO_SIZE_2KFLAT     = '2kflat'; // 1998x1080
    const VIDEO_SIZE_2KSCOPE    = '2kscope'; // 2048x858
    const VIDEO_SIZE_4K         = '4k'; // 4096x2160
    const VIDEO_SIZE_4KFLAT     = '4kflat'; // 3996x2160
    const VIDEO_SIZE_4KSCOPE    = '4kscope'; // 4096x1716
    const VIDEO_SIZE_NHD        = 'nhd'; // 640x360
    const VIDEO_SIZE_HQVGA      = 'hqvga'; // 240x160
    const VIDEO_SIZE_WQVGA      = 'wqvga'; // 400x240
    const VIDEO_SIZE_FWQVGA     = 'fwqvga'; // 432x240
    const VIDEO_SIZE_HVGA       = 'hvga'; // 480x320
    const VIDEO_SIZE_QHD        = 'qhd'; // 960x540
    const VIDEO_SIZE_2KDCI      = '2kdci'; // 2048x1080
    const VIDEO_SIZE_4KDCI      = '4kdci'; // 4096x2160
    const VIDEO_SIZE_UHD2160    = 'uhd2160'; // 3840x2160
    const VIDEO_SIZE_UHD4320    = 'uhd4320'; // 7680x4320

    /**
     * @var string
     */
    protected $bin;

    /**
     * @var string
     */
    protected $output;

    /**
     * @var array
     */
    protected $options = array();

    /**
     * FFMPEG constructor.
     * @param $bin
     */
    public function __construct($bin)
    {
        $this->bin = $bin;
    }

    /**
     * @param $level
     * @return FFmpeg
     */
    public function logLevel($level)
    {
        return $this->option('-loglevel', $level);
    }

    /**
     * @see https://ffmpeg.org/ffmpeg.html#Synopsis
     *
     * @param string $input
     * @return $this
     */
    public function input($input)
    {
        return $this->option('-i', $input);
    }

    /**
     * Set frame size (WxH or abbreviation)
     *
     * For example:
     *
     * $ffmpeg->size('800x600');
     *
     * or set using one of the pre defined constants:
     *
     * $ffmpeg->size(FFmpeg::VIDEO_SIZE_4K);
     *
     * @param $size
     * @return $this
     */
    public function size($size)
    {
        return $this->option('-s', $size);
    }

    /**
     * Sets video bitrate value. Accepts value like '800k' or '1m' format
     *
     * @param $rate
     * @return $this
     */
    public function videoBitrate($rate)
    {
        return $this->option('-b:v', $rate);
    }

    /**
     * Select an encoder (when used before an output file) or a decoder (when used before an input file) for one or more streams.
     * codec is the name of a decoder/encoder or a special value copy (output only) to indicate that the stream is not to be re-encoded.
     *
     * To check list of your available encoder use:
     *  $ ffmpeg -codecs
     *
     * @param $codec
     * @return $this
     */
    public function videoCodec($codec)
    {
        return $this->option('-c:v', $codec);
    }

    /**
     * Sets video bitrate value. Accepts value like '128k' format
     *
     * @param $rate
     * @return $this
     */
    public function audioBitrate($rate)
    {
        return $this->option('-b:a', $rate);
    }

    /**
     * @param $codec
     * @return $this
     */
    public function audioCodec($codec)
    {
        return $this->option('-c:a', $codec);
    }

    /**
     * Set output filename and container format
     *
     * @param $output
     * @return $this
     */
    public function output($output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * Add Option
     *
     * Adds an FFMPEG cli option to instance
     *
     * @param $key
     * @param $value
     * @return $this
     */
    public function option($key, $value)
    {
        $this->options[$key] = $value;

        return $this;
    }

    /**
     * Execute FFMPEG command and get result
     */
    public function execute()
    {
        if(empty($this->output)) {
            throw new Exception('Missing output format. Use $ffmpeg->output(\'example.mp4\'); before execution');
        }

        $args = '';

        foreach($this->options as $key => $value) {
            $args .= $key . ' ' . $value . '';
        }

        $output = shell_exec("{$this->bin} {$args}{$this->output}");

        return $output;
    }
}

$ffmpeg = new FFmpeg('/usr/local/bin/ffmpeg');

$ffmpeg
    ->size(FFmpeg::VIDEO_SIZE_2K)
;


