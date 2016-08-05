<?php

namespace FFMPEG;

use Exception;

/**
 * Class FFMPEG
 * @package FFMPEG
 */
class FFMPEG
{
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
     * @see https://ffmpeg.org/ffmpeg.html#Synopsis
     *
     * @param string $input
     * @return $this
     */
    public function input($input)
    {
        $this->option('-i', $input);

        return $this;
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