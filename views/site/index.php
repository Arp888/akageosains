<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'AKA Geosains Consulting';
?>

<?php if (!empty($sliders) || $sliders != []): ?> 
<!-- REVOLUTION SLIDER -->
<div class="g-overflow-hidden">    
    <div id="rev_slider_24_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="website-intro" data-source="gallery" style="background:#000000;padding:0px;">
    <div id="rev_slider_24_1" class="rev_slider fullscreenbanner tiny_bullet_slider" style="display:none;" data-version="5.4.1">
        <ul>            
            <?php foreach ($sliders as $key => $slider): ?>
            <li data-index=<?= $key ?> data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="img/banner1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent">
                <!-- MAIN IMAGE -->
                <img src=<?= \Yii::$app->imagemanager->getImagePath($slider['image'], 1920, 1080, 'inset') ?> alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg">
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-9"
                   data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']"
                   data-width="['250','250','150','150']"
                   data-height="['150','150','100','100']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="250"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-10"
                   data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']"
                   data-width="['150','150','100','100']"
                   data-height="['200','150','150','150']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="250"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-29"
                   data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']"
                   data-width="['250','250','150','150']"
                   data-height="['150','150','100','100']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="250"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-12"
                   data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']"
                   data-width="['250','250','100','100']"
                   data-height="150"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="250"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-34"
                   data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']"
                   data-width="['300','300','150','150']"
                   data-height="['200','200','150','150']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="250"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-11"
                   data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']"
                   data-width="150"
                   data-height="['250','150','50','50']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="250"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-27"
                   data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']"
                   data-width="['250','250','150','150']"
                   data-height="['300','300','150','150']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="300"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-28"
                   data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']"
                   data-width="['300','300','150','150']"
                   data-height="['250','250','100','100']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="300"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 9 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-30"
                   data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']"
                   data-width="['300','300','150','200']"
                   data-height="['250','250','150','50']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="300"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 10 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-31"
                   data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']"
                   data-width="['300','300','150','150']"
                   data-height="['250','250','100','100']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="300"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 11 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-32"
                   data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']"
                   data-width="['300','300','150','150']"
                   data-height="['200','200','150','150']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="300"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 12 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-33"
                   data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']"
                   data-width="['450','400','250','250']"
                   data-height="['100','100','50','50']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="250"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 13 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                   id="slide-67-layer-35"
                   data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']"
                   data-width="['350','400','250','250']"
                   data-height="['100','100','50','50']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-slicey_offset="250"
                   data-slicey_blurstart="0"
                   data-slicey_blurend="20"
                   data-responsive_offset="on"

                   data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 14 -->
                <div class="tp-caption tp-shape tp-shapewrapper "
                   id="slide-67-layer-1"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                   data-width="full"
                   data-height="full"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-basealign="slide"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);"></div>

                <!-- LAYER NR. 15 -->
                <div class="tp-caption tp-resizeme"
                   id="slide-67-layer-2"
                   data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']"
                   data-fontsize="['90','90','70','50']"
                   data-lineheight="['90','90','70','50']"
                   data-width="['none','none','non','none']"
                   data-height="none"
                   data-whitespace="['nowrap','nowrap','nowrap','nowrap']"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 19; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 500; color: #ffffff; letter-spacing: -5px;font-family:Rubik;"><?= $slider['title'] ?>                                                                                                                                                                          
                </div>

                <!-- LAYER NR. 16 -->
                <div class="tp-caption   tp-resizeme"
                   id="slide-67-layer-3"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['90','90','60','30']"
                   data-fontsize="['25','25','25','20']"
                   data-lineheight="['35','35','35','30']"
                   data-width="['480','480','480','360']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Rubik;"><?= $slider['subtitle'] ?>
                </div>

                <!-- LAYER NR. 17 -->
                <a class="tp-caption rev-btn  tp-resizeme"
                    href=<?= \yii\helpers\Url::to(['contact']) ?> id="slide-67-layer-7"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']"
                    data-width="250"
                    data-height="none"
                    data-whitespace="nowrap"

                    data-type="button"
                    data-actions=''
                    data-responsive_offset="on"

                    data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                    data-textAlign="['center','center','center','center']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[50,50,50,50]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[50,50,50,50]"

                    style="z-index: 21; min-width: 250px; max-width: 250px; white-space: nowrap; font-size: 18px; line-height: 60px; font-weight: 700; color: rgba(255,255,255,1); letter-spacing: px;font-family:Rubik;background-color:rgb(87,202,133);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">CONTACT US</a>
            </li> 
            <?php endforeach; ?>          
        </ul>
        <div class="tp-bannertimer tp-bottom" style="height: 5px; background: rgb(87,202,133);"></div>
    </div>
</div>
<!-- END REVOLUTION SLIDER -->
<?php endif; ?>

<!-- COMPANY OVERVIEW -->
<div id="overview-section">
    <div class="container g-pt-100">
        <div class="g-max-width-700 text-center mx-auto g-mb-100">
            <h1 class="text-uppercase g-color-main-light-v1 g-font-weight-600 g-font-size-13 g-letter-spacing-2 mb-4">AKA Geosains Consultant</h1>
            <p class="g-font-size-20">We are an Indonesian-based geological and mining consultant. We have expertise and are experienced across all commodities and mining methods.</p>
        </div>
    </div>
</div>
<!-- END COMPANY OVERVIEW -->

<!-- SERVICE OVERVIEW -->
<div id="services-section" class="g-bg-secondary g-py-50">
    <div class="container">
        <!-- Heading -->
        <div class="g-max-width-550 text-center mx-auto g-mb-40">
            <h2 class="text-uppercase g-color-main-light-v1 g-font-weight-600 g-font-size-13 g-letter-spacing-2 mb-4">We provide most quality solution for you</h2>
        </div>
        <!-- End Heading -->

        <div class="row justify-content-center g-mb-20">
            <div class="col g-mb-20">
                <!-- Services -->
                <div class="card u-shadow-v28 g-bg-white text-left text-md-center rounded g-pt-40 g-pb-5 h-100">
                    <div class="card-block d-flex flex-column">
                        <!-- Services - Header -->
                        <header class="text-center g-px-15 mb-5">
                            <div class="g-mb-25">
                                <span class="u-icon-v2 u-icon-size--md g-brd-text g-color-primary rounded-circle">
                                    <i class="icon-science-006 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <h2 class="h5 g-font-weight-600">Exploration Service</h2>
                        </header>
                        <!-- End Services - Header -->
                    </div>

                </div>
                <!-- End Services -->
            </div>

            <div class="col g-mb-20">
                <!-- Services -->
                <div class="card u-shadow-v29 g-bg-primary text-left text-md-center rounded g-pt-40 g-pb-5 h-100">
                    <div class="card-block d-flex flex-column">
                        <!-- Services - Header -->
                        <header class="text-center g-px-15 mb-5">
                            <div class="g-mb-25">
                                <span class="u-icon-v3 u-icon-size--md g-color-text g-bg-secondary rounded-circle">
                                    <i class="icon-finance-002 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <h2 class="h5 g-color-white g-font-weight-600">Technical Due Diligence</h2>
                            <!-- <p class="g-color-white-opacity-0_9 g-font-size-13">Now that we've aligned the details, it's time to get things organized.</p> -->
                        </header>
                        <!-- End Services - Header -->
                    </div>
                </div>
                <!-- End Services -->
            </div>

            <div class="col g-mb-20">
                <!-- Services -->
                <div class="card u-shadow-v28 g-bg-white text-left text-md-center rounded g-pt-40 g-pb-5 h-100">
                    <div class="card-block d-flex flex-column">
                        <!-- Services - Header -->
                        <header class="text-center g-px-15 mb-5">
                            <div class="g-mb-25">
                                <span class="u-icon-v2 u-icon-size--md g-brd-text g-color-primary rounded-circle">
                                    <i class="icon-finance-222 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <h2 class="h5 g-font-weight-600">Quality Assurance<br>Quality Control Service</h2>
                            <!-- <p class="g-font-size-13">This is where we begin to visualize your sketches and make them into beautiful pixels.</p> -->
                        </header>
                        <!-- End Services - Header -->
                    </div>
                </div>
                <!-- End Services -->
            </div>

            <div class="col g-mb-20">
                <!-- Services -->
                <div class="card u-shadow-v29 g-bg-primary text-left text-md-center rounded g-pt-40 g-pb-5 h-100">
                    <div class="card-block d-flex flex-column">
                        <!-- Services - Header -->
                        <header class="text-center g-px-35 mb-5">
                            <div class="g-mb-25">
                                <span class="u-icon-v3 u-icon-size--md g-color-text g-bg-secondary rounded-circle">
                                    <i class="icon-finance-216 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <h2 class="h5 g-color-white g-font-weight-600">Reporting</h2>
                            <!-- <p class="g-color-white-opacity-0_9 g-font-size-13">Now that we've aligned the details, it's time to get things organized.</p> -->
                        </header>
                        <!-- End Services - Header -->
                    </div>
                </div>
                <!-- End Services -->
            </div>

            <div class="col g-mb-20">
                <!-- Services -->
                <div class="card u-shadow-v28 g-bg-white text-left text-md-center rounded g-pt-40 g-pb-5 h-100">
                    <div class="card-block d-flex flex-column">
                        <!-- Services - Header -->
                        <header class="text-center g-px-35 mb-5">
                            <div class="g-mb-25">
                                <span class="u-icon-v2 u-icon-size--md g-brd-text g-color-primary rounded-circle">
                                    <i class="icon-education-200 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <h2 class="h5 g-font-weight-600">Training</h2>
                            <!-- <p class="g-font-size-13">This is where we begin to visualize your sketches and make them into beautiful pixels.</p> -->
                        </header>
                        <!-- End Services - Header -->
                    </div>
                </div>
                <!-- End Services -->
            </div>
        </div>

        <div class="text-center">
            <?= Html::a('View Our Service', ['services'], ['class' => 'btn u-btn-outline-primary g-font-weight-600 g-font-size-12 g-rounded-30 g-py-15 g-px-35']) ?>
        </div>
    </div>
</div>
<!-- END SERVICE OVERVIEW -->

<?php if (!empty($experts) || $experts != []): ?>

<!-- TEAM BLOCK -->
<div class="container g-pt-70 g-pb-70">
    <!-- Heading -->
    <div class="g-max-width-700 text-center mx-auto g-mb-40">
        <h1 class="text-uppercase g-color-main-light-v1 g-font-weight-600 g-font-size-13 g-letter-spacing-2 mb-4">Our Experts are Ready to Help You</h1>
    </div>
    <!-- End Heading -->    
    <div class="g-mx-minus-9--sm">
        <div class="js-carousel" data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-50 g-height-50 g-font-size-default g-color-gray-dark-v5 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover" data-arrow-left-classes="fa fa-angle-left g-left-minus-25" data-arrow-right-classes="fa fa-angle-right g-right-minus-25" data-slides-show="3" data-responsive="[{
            'breakpoint': 992, 'settings': {'slidesToShow': 2 }}, {'breakpoint': 576, 'settings': {'slidesToShow': 1 }}]">            
            <?php foreach ($experts as $key => $expert): ?>
            <div class="js-slide">
                <!-- Figure -->
                <figure class="text-center g-px-5">
                    <!-- Figure Image -->
                    <?= Html::img(\Yii::$app->imagemanager->getImagePath($expert['picture'], 400, 450, 'outbound'), ['class' => 'w-100 g-mb-35', 'alt' => $expert['name']]) ?>
                    <!-- End Figure Image -->
                    <!-- Figure Info -->
                    <div class="g-mb-20">
                        <em class="g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5 d-md-block d-none"><?= $expert['position'] ?></em>
                        <h4 class="h5 g-color-black"><?= $expert['name'] ?></h4>
                    </div>
                    <!-- End Figure Info -->
                    <!-- Figure Social Icons -->
                    <ul class="list-inline mb-0 d-md-block d-none">
                        <li class="list-inline-item g-mx-3">
                            <?= Html::a('<i class="fa fa-facebook"></i>', ($expert['facebook_link'] != null ? $expert['facebook_link'] : '#'), ['class' => 'u-icon-v2 u-icon-size--sm g-font-size-default g-color-gray-dark-v5 g-bg-gray-light-v5 g-brd-gray-light-v5 g-bg-primary--hover g-color-white--hover rounded-circle', 'target' => 'blank']) ?>
                        </li>
                        <li class="list-inline-item g-mx-3">
                            <?= Html::a('<i class="fa fa-twitter"></i>', ($expert['twitter_link'] != null ? $expert['twitter_link'] : '#'), ['class' => 'u-icon-v2 u-icon-size--sm g-font-size-default g-color-gray-dark-v5 g-bg-gray-light-v5 g-brd-gray-light-v5 g-bg-primary--hover g-color-white--hover rounded-circle', 'target' => 'blank']) ?>
                        </li>
                        <li class="list-inline-item g-mx-3">
                            <?= Html::a('<i class="fa fa-instagram"></i>', ($expert['instagram_link'] != null ? $expert['instagram_link'] : '#'), ['class' => 'u-icon-v2 u-icon-size--sm g-font-size-default g-color-gray-dark-v5 g-bg-gray-light-v5 g-brd-gray-light-v5 g-bg-primary--hover g-color-white--hover rounded-circle', 'target' => 'blank']) ?>
                        </li>
                        <li class="list-inline-item g-mx-3">
                            <?= Html::a('<i class="fa fa-linkedin"></i>', ($expert['linkedin_link'] != null ? $expert['linkedin_link'] : '#'), ['class' => 'u-icon-v2 u-icon-size--sm g-font-size-default g-color-gray-dark-v5 g-bg-gray-light-v5 g-brd-gray-light-v5 g-bg-primary--hover g-color-white--hover rounded-circle', 'target' => 'blank']) ?>
                        </li>
                    </ul>
                    <!-- End Figure Social Icons -->
                </figure>
                <!-- End Figure -->
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- END TEAM BLOCK -->

<?php endif; ?>

      

<!-- Client list -->
<!-- <div class="container g-py-70">
  <div id="carousel3" class="js-carousel" data-autoplay="true" data-slides-show="6">
    <div class="js-slide g-brd-around g-brd-gray-light-v3--hover g-transition-0_2 rounded g-pa-20 g-mx-10">
      <img class="mx-auto g-width-120" src="themes/consulting/general-assets/img-temp/200x100/img4.png" alt="Image Description">
    </div>

    <div class="js-slide g-brd-around g-brd-gray-light-v3--hover g-transition-0_2 rounded g-pa-20 g-mx-10">
      <img class="mx-auto g-width-120" src="themes/consulting/general-assets/img-temp/200x100/img2.png" alt="Image Description">
    </div>

    <div class="js-slide g-brd-around g-brd-gray-light-v3--hover g-transition-0_2 rounded g-pa-20 g-mx-10">
      <img class="mx-auto g-width-120" src="themes/consulting/general-assets/img-temp/200x100/img3.png" alt="Image Description">
    </div>

    <div class="js-slide g-brd-around g-brd-gray-light-v3--hover g-transition-0_2 rounded g-pa-20 g-mx-10">
      <img class="mx-auto g-width-120" src="themes/consulting/general-assets/img-temp/200x100/img4.png" alt="Image Description">
    </div>

    <div class="js-slide g-brd-around g-brd-gray-light-v3--hover g-transition-0_2 rounded g-pa-20 g-mx-10">
      <img class="mx-auto g-width-120" src="themes/consulting/general-assets/img-temp/200x100/img5.png" alt="Image Description">
    </div>

    <div class="js-slide g-brd-around g-brd-gray-light-v3--hover g-transition-0_2 rounded g-pa-20 g-mx-10">
      <img class="mx-auto g-width-120" src="themes/consulting/general-assets/img-temp/200x100/img6.png" alt="Image Description">
    </div>

    <div class="js-slide g-brd-around g-brd-gray-light-v3--hover g-transition-0_2 rounded g-pa-20 g-mx-10">
      <img class="mx-auto g-width-120" src="themes/consulting/general-assets/img-temp/200x100/img7.png" alt="Image Description">
    </div>

    <div class="js-slide g-brd-around g-brd-gray-light-v3--hover g-transition-0_2 rounded g-pa-20 g-mx-10">
      <img class="mx-auto g-width-120" src="themes/consulting/general-assets/img-temp/200x100/img8.png" alt="Image Description">
    </div>

    <div class="js-slide g-brd-around g-brd-gray-light-v3--hover g-transition-0_2 rounded g-pa-20 g-mx-10">
      <img class="mx-auto g-width-120" src="themes/consulting/general-assets/img-temp/200x100/img9.png" alt="Image Description">
    </div>
  </div>
</div> -->


