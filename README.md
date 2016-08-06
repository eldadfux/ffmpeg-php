# FFmpeg-PHP

** **LIVE** - WORK IN PROGRESS **

Simple PHP driver for the ffmpeg CLI tool

## Getting Started

First, install ffmpeg cli tool on your operating system. Visit the compilation guide [here](https://trac.ffmpeg.org/wiki/CompilationGuide) to see installation instruction for OSX, Linux, Windows and some other platforms.

You can learn more about how to use ffmpeg from command line in [this tutorial](http://blog.superuser.com/2012/02/24/ffmpeg-the-ultimate-video-and-audio-manipulation-tool/)

## Usage
    
    $ffmpeg
        ->logLevel(FFmpeg::LOG_LEVEL_FATAL)
        ->size(FFmpeg::VIDEO_SIZE_2K)
        ->output('demo.mp4')
        ->execute()
    ;

http://blog.superuser.com/2011/11/07/video-conversion-done-right-codecs-and-software/
https://support.jwplayer.com/customer/portal/articles/1430240-hls-adaptive-streaming

TODO LIST


/**
 *
1 Synopsis
2 Description
3 Detailed description
    3.1 Filtering
        3.1.1 Simple filtergraphs
        3.1.2 Complex filtergraphs
    3.2 Stream copy
4 Stream selection
5 Options
    5.1 Stream specifiers
    5.2 Generic options
    5.3 AVOptions
    5.4 Main options
    5.5 Video Options
    5.6 Advanced Video options
    5.7 Audio Options
    5.8 Advanced Audio options
    5.9 Subtitle options
    5.10 Advanced Subtitle options
    5.11 Advanced options
    5.12 Preset files
        5.12.1 ffpreset files
        5.12.2 avpreset files
6 Examples
    6.1 Video and Audio grabbing
    6.2 X11 grabbing
    6.3 Video and Audio file format conversion
7 Syntax
    7.1 Quoting and escaping
    7.1.1 Examples
    7.2 Date
    7.3 Time duration
    7.3.1 Examples
    7.4 Video size - WORK IN PROGRESS
    7.5 Video rate
    7.6 Ratio
    7.7 Color
    7.8 Channel Layout
8 Expression Evaluation
9 OpenCL Options
10 Codec Options
11 Decoders
12 Video Decoders
    12.1 hevc
    12.2 rawvideo
        12.2.1 Options
13 Audio Decoders
    13.1 ac3
        13.1.1 AC-3 Decoder Options
    13.2 flac
        13.2.1 FLAC Decoder options
    13.3 ffwavesynth
    13.4 libcelt
    13.5 libgsm
    13.6 libilbc
    13.6.1 Options
    13.7 libopencore-amrnb
    13.8 libopencore-amrwb
    13.9 libopus
14 Subtitles Decoders
    14.1 dvbsub
        14.1.1 Options
    14.2 dvdsub
        14.2.1 Options
    14.3 libzvbi-teletext
        14.3.1 Options
15 Encoders
16 Audio Encoders
    16.1 aac
        16.1.1 Options
    16.2 ac3 and ac3_fixed
        16.2.1 AC-3 Metadata
            16.2.1.1 Metadata Control Options
            16.2.1.2 Downmix Levels
            16.2.1.3 Audio Production Information
            16.2.1.4 Other Metadata Options
        16.2.2 Extended Bitstream Information
            16.2.2.1 Extended Bitstream Information - Part 1
            16.2.2.2 Extended Bitstream Information - Part 2
        16.2.3 Other AC-3 Encoding Options
        16.2.4 Floating-Point-Only AC-3 Encoding Options
    16.3 flac
        16.3.1 Options
    16.4 libfaac
        16.4.1 Options
        16.4.2 Examples
    16.5 libfdk_aac
        16.5.1 Options
        16.5.2 Examples
    16.6 libmp3lame
        16.6.1 Options
    16.7 libopencore-amrnb
        16.7.1 Options
    16.8 libshine
        16.8.1 Options
    16.9 libtwolame
        16.9.1 Options
    16.10 libvo-amrwbenc
        16.10.1 Options
    16.11 libopus
        16.11.1 Option Mapping
    16.12 libvorbis
        16.12.1 Options
    16.13 libwavpack
        16.13.1 Options
    16.14 wavpack
        16.14.1 Options
            16.14.1.1 Shared options
            16.14.1.2 Private options
17 Video Encoders
    17.1 libopenh264
        17.1.1 Options
    17.2 jpeg2000
        17.2.1 Options
    17.3 snow
        17.3.1 Options
    17.4 libtheora
        17.4.1 Options
        17.4.2 Examples
    17.5 libvpx
        17.5.1 Options
    17.6 libwebp
        17.6.1 Pixel Format
        17.6.2 Options
    17.7 libx264, libx264rgb
        17.7.1 Supported Pixel Formats
        17.7.2 Options
    17.8 libx265
        17.8.1 Options
    17.9 libxvid
        17.9.1 Options
    17.10 mpeg2
        17.10.1 Options
    17.11 png
        17.11.1 Private options
    17.12 ProRes
        17.12.1 Private Options for prores-ks
        17.12.2 Speed considerations
    17.13 libkvazaar
        17.13.1 Options
    17.14 QSV encoders
    17.15 vc2
        17.15.1 Options
18 Subtitles Encoders
    18.1 dvdsub
        18.1.1 Options
19 Bitstream Filters
    19.1 aac_adtstoasc
    19.2 chomp
    19.3 dump_extra
    19.4 dca_core
    19.5 h264_mp4toannexb
    19.6 imxdump
    19.7 mjpeg2jpeg
    19.8 mjpega_dump_header
    19.9 movsub
    19.10 mp3_header_decompress
    19.11 mpeg4_unpack_bframes
    19.12 noise
    19.13 remove_extra
20 Format Options
    20.1 Format stream specifiers
21 Demuxers
    21.1 aa
    21.2 applehttp
    21.3 apng
    21.4 asf
    21.5 concat
        21.5.1 Syntax
        21.5.2 Options
        21.5.3 Examples
    21.6 flv
    21.7 libgme
    21.8 libopenmpt
    21.9 gif
    21.10 image2
    21.10.1 Examples
    21.11 mov/mp4/3gp/QuickTime
    21.12 mpegts
    21.13 mpjpeg
    21.14 rawvideo
    21.15 sbg
    21.16 tedcaptions
22 Muxers
    22.1 aiff
        22.1.1 Options
    22.2 asf
        22.2.1 Options
    22.3 chromaprint
        22.3.1 Options
    22.4 crc
        22.4.1 Examples
    22.5 framecrc
        22.5.1 Examples
    22.6 framehash
        22.6.1 Examples
    22.7 framemd5
        22.7.1 Examples
    22.8 gif
    22.9 hash
        22.9.1 Examples
    22.10 hls
        22.10.1 Options
    22.11 ico
    22.12 image2
        22.12.1 Examples
        22.12.2 Options
    22.13 matroska
        22.13.1 Metadata
        22.13.2 Options
    22.14 md5
        22.14.1 Examples
    22.15 mov, mp4, ismv
        22.15.1 Options
        22.15.2 Example
        22.15.3 Audible AAX
    22.16 mp3
    22.17 mpegts
        22.17.1 Options
        22.17.2 Example
    22.18 mxf, mxf_d10
        22.18.1 Options
    22.19 null
    22.20 nut
    22.21 ogg
    22.22 segment, stream_segment, ssegment
        22.22.1 Options
        22.22.2 Examples
    22.23 smoothstreaming
    22.24 tee
        22.24.1 Examples
    22.25 webm_dash_manifest
        22.25.1 Options
        22.25.2 Example
    22.26 webm_chunk
        22.26.1 Options
        22.26.2 Example
23 Metadata
24 Protocol Options
25 Protocols
    25.1 async
    25.2 bluray
    25.3 cache
    25.4 concat
    25.5 crypto
    25.6 data
    25.7 file
    25.8 ftp
    25.9 gopher
    25.10 hls
    25.11 http
        25.11.1 HTTP Cookies
    25.12 Icecast
    25.13 mmst
    25.14 mmsh
    25.15 md5
    25.16 pipe
    25.17 rtmp
    25.18 rtmpe
    25.19 rtmps
    25.20 rtmpt
    25.21 rtmpte
    25.22 rtmpts
    25.23 libsmbclient
    25.24 libssh
    25.25 librtmp rtmp, rtmpe, rtmps, rtmpt, rtmpte
    25.26 rtp
    25.27 rtsp
        25.27.1 Examples
    25.28 sap
        25.28.1 Muxer
        25.28.2 Demuxer
    25.29 sctp
    25.30 srtp
    25.31 subfile
    25.32 tee
    25.33 tcp
    25.34 tls
    25.35 udp
        25.35.1 Examples
    25.36 unix
26 Device Options
27 Input Devices
    27.1 alsa
    27.1.1 Options
    27.2 avfoundation
        27.2.1 Options
        27.2.2 Examples
    27.3 bktr
        27.3.1 Options
    27.4 decklink
        27.4.1 Options
        27.4.2 Examples
    27.5 dshow
        27.5.1 Options
        27.5.2 Examples
    27.6 dv1394
        27.6.1 Options
    27.7 fbdev
        27.7.1 Options
    27.8 gdigrab
        27.8.1 Options
    27.9 iec61883
        27.9.1 Options
        27.9.2 Examples
    27.10 jack
        27.10.1 Options
    27.11 lavfi
        27.11.1 Options
        27.11.2 Examples
    27.12 libcdio
        27.12.1 Options
    27.13 libdc1394
    27.14 openal
        27.14.1 Options
        27.14.2 Examples
    27.15 oss
        27.15.1 Options
    27.16 pulse
        27.16.1 Options
        27.16.2 Examples
    27.17 qtkit
        27.17.1 Options
    27.18 sndio
        27.18.1 Options
    27.19 video4linux2, v4l2
        27.19.1 Options
    27.20 vfwcap
        27.20.1 Options
    27.21 x11grab
        27.21.1 Options
    28 Output Devices
        28.1 alsa
            28.1.1 Examples
    28.2 caca
28.2.1 Options
28.2.2 Examples
28.3 decklink
28.3.1 Options
28.3.2 Examples
28.4 fbdev
28.4.1 Options
28.4.2 Examples
28.5 opengl
28.5.1 Options
28.5.2 Examples
28.6 oss
28.7 pulse
28.7.1 Options
28.7.2 Examples
28.8 sdl
28.8.1 Options
28.8.2 Interactive commands
28.8.3 Examples
28.9 sndio
28.10 xv
28.10.1 Options
28.10.2 Examples
29 Resampler Options
30 Scaler Options
31 Filtering Introduction
32 graph2dot
33 Filtergraph description
33.1 Filtergraph syntax
33.2 Notes on filtergraph escaping
34 Timeline editing
35 Audio Filters
35.1 acompressor
35.2 acrossfade
35.2.1 Examples
35.3 adelay
35.3.1 Examples
35.4 aecho
35.4.1 Examples
35.5 aemphasis
35.6 aeval
35.6.1 Examples
35.7 afade
35.7.1 Examples
35.8 afftfilt
35.8.1 Examples
35.9 aformat
35.10 agate
35.11 alimiter
35.12 allpass
35.13 amerge
35.13.1 Examples
35.14 amix
35.15 anequalizer
35.15.1 Examples
35.15.2 Commands
35.16 anull
35.17 apad
35.17.1 Examples
35.18 aphaser
35.19 apulsator
35.20 aresample
35.20.1 Examples
35.21 asetnsamples
35.22 asetrate
35.23 ashowinfo
35.24 astats
35.25 asyncts
35.26 atempo
35.26.1 Examples
35.27 atrim
35.28 bandpass
35.29 bandreject
35.30 bass
35.31 biquad
35.32 bs2b
35.33 channelmap
35.34 channelsplit
35.35 chorus
35.35.1 Examples
35.36 compand
35.36.1 Examples
35.37 compensationdelay
35.38 dcshift
35.39 dynaudnorm
35.40 earwax
35.41 equalizer
35.41.1 Examples
35.42 extrastereo
35.43 firequalizer
35.43.1 Examples
35.44 flanger
35.45 highpass
35.46 join
35.47 ladspa
35.47.1 Examples
35.47.2 Commands
35.48 loudnorm
35.49 lowpass
35.50 pan
35.50.1 Mixing examples
35.50.2 Remapping examples
35.51 replaygain
35.52 resample
35.53 rubberband
35.54 sidechaincompress
35.54.1 Examples
35.55 sidechaingate
35.56 silencedetect
35.56.1 Examples
35.57 silenceremove
35.57.1 Examples
35.58 sofalizer
35.58.1 Examples
35.59 stereotools
35.59.1 Examples
35.60 stereowiden
35.61 scale_npp
35.62 select
35.63 treble
35.64 tremolo
35.65 vibrato
35.66 volume
35.66.1 Commands
35.66.2 Examples
35.67 volumedetect
35.67.1 Examples
36 Audio Sources
36.1 abuffer
36.1.1 Examples
36.2 aevalsrc
36.2.1 Examples
36.3 anullsrc
36.3.1 Examples
36.4 flite
36.4.1 Examples
36.5 anoisesrc
36.5.1 Examples
36.6 sine
36.6.1 Examples
37 Audio Sinks
37.1 abuffersink
37.2 anullsink
38 Video Filters
38.1 alphaextract
38.2 alphamerge
38.3 ass
38.4 atadenoise
38.5 bbox
38.6 blackdetect
38.7 blackframe
38.8 blend, tblend
38.8.1 Examples
38.9 boxblur
38.9.1 Examples
38.10 bwdif
38.11 chromakey
38.11.1 Examples
38.12 ciescope
38.13 codecview
38.13.1 Examples
38.14 colorbalance
38.14.1 Examples
38.15 colorkey
38.15.1 Examples
38.16 colorlevels
38.16.1 Examples
38.17 colorchannelmixer
38.17.1 Examples
38.18 colormatrix
38.19 colorspace
38.20 convolution
38.20.1 Examples
38.21 copy
38.22 coreimage
38.22.1 Examples
38.23 crop
38.23.1 Examples
38.23.2 Commands
38.24 cropdetect
38.25 curves
38.25.1 Examples
38.26 datascope
38.27 dctdnoiz
38.27.1 Examples
38.28 deband
38.29 decimate
38.30 deflate
38.31 dejudder
38.32 delogo
38.32.1 Examples
38.33 deshake
38.34 detelecine
38.35 dilation
38.36 displace
38.36.1 Examples
38.37 drawbox
38.37.1 Examples
38.38 drawgraph, adrawgraph
38.39 drawgrid
38.39.1 Examples
38.40 drawtext
38.40.1 Syntax
38.40.2 Text expansion
38.40.3 Examples
38.41 edgedetect
38.41.1 Examples
38.42 eq
38.42.1 Commands
38.43 erosion
38.44 extractplanes
38.44.1 Examples
38.45 elbg
38.46 fade
38.46.1 Examples
38.47 fftfilt
38.47.1 Examples
38.48 field
38.49 fieldhint
38.50 fieldmatch
38.50.1 p/c/n/u/b meaning
38.50.1.1 p/c/n
38.50.1.2 u/b
38.50.2 Examples
38.51 fieldorder
38.52 fifo, afifo
38.53 find_rect
38.53.1 Examples
38.54 cover_rect
38.54.1 Examples
38.55 format
38.55.1 Examples
38.56 fps
38.56.1 Examples
38.57 framepack
38.58 framerate
38.59 framestep
38.60 frei0r
38.60.1 Examples
38.61 fspp
38.62 geq
38.62.1 Examples
38.63 gradfun
38.63.1 Examples
38.64 haldclut
38.64.1 Workflow examples
38.64.1.1 Hald CLUT video stream
38.64.1.2 Hald CLUT with preview
38.65 hdcd
38.66 hflip
38.67 histeq
38.68 histogram
38.68.1 Examples
38.69 hqdn3d
38.70 hwupload_cuda
38.71 hqx
38.72 hstack
38.73 hue
38.73.1 Examples
38.73.2 Commands
38.74 idet
38.75 il
38.76 inflate
38.77 interlace
38.78 kerndeint
38.78.1 Examples
38.79 lenscorrection
38.79.1 Options
38.80 loop, aloop
38.81 lut3d
38.82 lut, lutrgb, lutyuv
38.82.1 Examples
38.83 maskedmerge
38.84 mcdeint
38.85 mergeplanes
38.85.1 Examples
38.86 metadata, ametadata
38.86.1 Examples
38.87 mpdecimate
38.88 negate
38.89 nnedi
38.90 noformat
38.90.1 Examples
38.91 noise
38.91.1 Examples
38.92 null
38.93 ocr
38.94 ocv
38.94.1 dilate
38.94.2 erode
38.94.3 smooth
38.95 overlay
38.95.1 Commands
38.95.2 Examples
38.96 owdenoise
38.97 pad
38.97.1 Examples
38.98 palettegen
38.98.1 Examples
38.99 paletteuse
38.99.1 Examples
38.100 perspective
38.101 phase
38.102 pixdesctest
38.103 pp
38.103.1 Examples
38.104 pp7
38.105 psnr
38.106 pullup
38.107 qp
38.107.1 Examples
38.108 random
38.109 readvitc
38.109.1 Examples
38.110 remap
38.111 removegrain
38.112 removelogo
38.113 repeatfields
38.114 reverse, areverse
38.114.1 Examples
38.115 rotate
38.115.1 Examples
38.115.2 Commands
38.116 sab
38.117 scale
38.117.1 Options
38.117.2 Examples
38.117.3 Commands
38.118 scale2ref
38.118.1 Examples
38.119 selectivecolor
38.119.1 Examples
38.120 separatefields
38.121 setdar, setsar
38.121.1 Examples
38.122 setfield
38.123 showinfo
38.124 showpalette
38.125 shuffleframes
38.126 shuffleplanes
38.127 signalstats
38.127.1 Examples
38.128 smartblur
38.129 ssim
38.130 stereo3d
38.130.1 Examples
38.131 streamselect, astreamselect
38.131.1 Commands
38.131.2 Examples
38.132 spp
38.133 subtitles
38.134 super2xsai
38.135 swaprect
38.136 swapuv
38.137 telecine
38.138 thumbnail
38.138.1 Examples
38.139 tile
38.139.1 Examples
38.140 tinterlace
38.141 transpose
38.142 trim
38.143 unsharp
38.143.1 Examples
38.144 uspp
38.145 vectorscope
38.146 vidstabdetect
38.146.1 Examples
38.147 vidstabtransform
38.147.1 Options
38.147.2 Examples
38.148 vflip
38.149 vignette
38.149.1 Expressions
38.149.2 Examples
38.150 vstack
38.151 w3fdif
38.152 waveform
38.153 xbr
38.154 yadif
38.155 zoompan
38.155.1 Examples
38.156 zscale
38.156.1 Options
39 Video Sources
39.1 buffer
39.2 cellauto
39.2.1 Examples
39.3 coreimagesrc
39.3.1 Examples
39.4 mandelbrot
39.5 mptestsrc
39.6 frei0r_src
39.7 life
39.7.1 Examples
39.8 allrgb, allyuv, color, haldclutsrc, nullsrc, rgbtestsrc, smptebars, smptehdbars, testsrc, testsrc2
39.8.1 Commands
40 Video Sinks
40.1 buffersink
40.2 nullsink
41 Multimedia Filters
41.1 ahistogram
41.2 aphasemeter
41.3 avectorscope
41.3.1 Examples
41.4 bench, abench
41.4.1 Examples
41.5 concat
41.5.1 Examples
41.6 ebur128
41.6.1 Examples
41.7 interleave, ainterleave
41.7.1 Examples
41.8 perms, aperms
41.9 realtime, arealtime
41.10 select, aselect
41.10.1 Examples
41.11 sendcmd, asendcmd
41.11.1 Commands syntax
41.11.2 Examples
41.12 setpts, asetpts
41.12.1 Examples
41.13 settb, asettb
41.13.1 Examples
41.14 showcqt
41.14.1 Examples
41.15 showfreqs
41.16 showspectrum
41.16.1 Examples
41.17 showspectrumpic
41.17.1 Examples
41.18 showvolume
41.19 showwaves
41.19.1 Examples
41.20 showwavespic
41.20.1 Examples
41.21 spectrumsynth
41.21.1 Examples
41.22 split, asplit
41.22.1 Examples
41.23 zmq, azmq
41.23.1 Examples
42 Multimedia Sources
42.1 amovie
42.2 movie
42.2.1 Examples
42.2.2 Commands
43 See Also
44 Authors