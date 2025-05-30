<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('theme::title', config('app.name', 'Devsome'))</title>
    <meta name="description" content="{{ config('app.description', 'Description') }}">
    <!-- Coded by Devsome.com -->
    <meta name="author" content="Alexander Frank">
    <link rel="icon" href="{{ asset('themes/kidora-theme/assets_custom/images/kidora-favicon.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{(Session::get('locale') === 'ar') ? mix('/css/app-rtl.css') : mix('/css/app.css')}}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{ mix('/plugins/datatables/css/dataTables.css') }}" rel="stylesheet">

    <!-- toastr -->
    <link href="{{ asset('plugins/toastr/css/toastr.css') }}" rel="stylesheet">

    <!-- select2 -->
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/kidora-theme/css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/kidora-theme/assets_custom/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/kidora-theme/assets_custom/css/m1xawy.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('themes/kidora-theme/assets_custom/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/kidora-theme/assets_custom/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/kidora-theme/assets_custom/revolution/css/navigation.css') }}">

    @stack('theme::css')

</head>
<body data-theme="dark" dir="{{( Session::get('locale') === 'ar' ? 'rtl' : 'ltr' )}}">

<div id="app">
    @include('theme::layouts.navbar')

    {{--
    @if (Route::getCurrentRoute()->uri() == '/')

    <div class="margin-bottom-30">
        <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-3045" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/datcolor-100x50.jpg') }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/datcolor.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption NotGeneric-Title   tp-resizeme"
                             id="slide-3045-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']"
                             data-lineheight="['70','70','70','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[10,10,10,10]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 5; white-space: nowrap;text-transform:left;">EAGLE </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption NotGeneric-SubTitle   tp-resizeme"
                             id="slide-3045-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 6; white-space: nowrap;text-transform:left;">O   N   L   I   N   E</div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption NotGeneric-Icon   tp-resizeme"
                             id="slide-3045-layer-8"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 7; white-space: nowrap;text-transform:left;cursor:default;"><i class="pe-7s-refresh"></i> </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-3046" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/touchit-100x50.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Parallax" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/touchit.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-3"
                             id="slide-3046-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']"
                             data-lineheight="['70','70','70','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[10,10,10,10]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 8; white-space: nowrap;text-transform:left;">EAGLE </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-2"
                             id="slide-3046-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 9; white-space: nowrap;text-transform:left;">O   N   L   I   N   E</div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-1"
                             id="slide-3046-layer-8"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 10; white-space: nowrap;text-transform:left;cursor:default;"><i class="pe-7s-mouse"></i> </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-8"
                             id="slide-3046-layer-10"
                             data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']"
                             data-y="['top','top','top','top']" data-voffset="['632','632','632','632']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="image"
                             data-responsive_offset="on"
                             data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 11;text-transform:left;border-width:0px;">
                            <div class="rs-looped rs-pendulum"  data-easing="linearEaseNone" data-startdeg="-20" data-enddeg="360" data-speed="35" data-origin="50% 50%"><img src="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/blurflake4.png') }}" alt="" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" width="240" height="240" data-no-retina> </div>
                        </div>
                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-7"
                             id="slide-3046-layer-11"
                             data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']"
                             data-y="['top','top','top','top']" data-voffset="['487','487','487','487']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="image"
                             data-responsive_offset="on"
                             data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 12;text-transform:left;border-width:0px;">
                            <div class="rs-looped rs-wave"  data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%"><img src="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/blurflake3.png') }}" alt="" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" width="170" height="170" data-no-retina> </div>
                        </div>
                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-4"
                             id="slide-3046-layer-12"
                             data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']"
                             data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="image"
                             data-responsive_offset="on"
                             data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 13;text-transform:left;border-width:0px;">
                            <div class="rs-looped rs-rotate"  data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%"><img src="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/blurflake2.png') }}" alt="" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" width="50" height="51" data-no-retina> </div>
                        </div>
                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-6"
                             id="slide-3046-layer-13"
                             data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']"
                             data-y="['top','top','top','top']" data-voffset="['216','216','216','216']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="image"
                             data-responsive_offset="on"
                             data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 14;text-transform:left;border-width:0px;">
                            <div class="rs-looped rs-wave"  data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%"><img src="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/blurflake1.png') }}" alt="" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" width="120" height="120" data-no-retina> </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-3047" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/bike-100x50.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/bike.jpg') }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme"
                             id="slide-3047-layer-9"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                             data-width="500"
                             data-height="140"
                             data-whitespace="nowrap"
                             data-type="shape"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 15;text-transform:left;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0.50);border-width:0px;"> </div>
                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption NotGeneric-Title   tp-resizeme"
                             id="slide-3047-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']"
                             data-lineheight="['70','70','70','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[10,10,10,10]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 16; white-space: nowrap;text-transform:left;">EAGLE </div>
                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption NotGeneric-SubTitle   tp-resizeme"
                             id="slide-3047-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 17; white-space: nowrap;text-transform:left;">O   N   L   I   N   E</div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-3049" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/lambo-100x50.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Love it?" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('themes/kidora-theme/assets_custom/revolution/assets/images/lambo.jpg') }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 18 -->
                        <div class="tp-caption NotGeneric-Title   tp-resizeme"
                             id="slide-3049-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']"
                             data-lineheight="['70','70','70','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.1,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[10,10,10,10]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 22; white-space: nowrap;text-transform:left;">EAGLE </div>
                        <!-- LAYER NR. 19 -->
                        <div class="tp-caption NotGeneric-SubTitle   tp-resizeme"
                             id="slide-3049-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 23; white-space: nowrap;text-transform:left;">O   N   L   I   N   E</div>
                        <!-- LAYER NR. 20 -->
                        <div class="tp-caption NotGeneric-Icon   tp-resizeme"
                             id="slide-3049-layer-8"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 24; white-space: nowrap;text-transform:left;cursor:default;"><i class="pe-7s-diamond"></i> </div>
                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
            </div>
        </div>
    </div>

    @else
        <div class="breadcrumbs margin-bottom-30">
            <div class="container">
                <h1>Home</h1>
            </div>
        </div>
    @endif
    --}}

    <div class="breadcrumbs margin-bottom-30">
        <div class="container">
            <div class="header-image"></div>
        </div>
    </div>

    <div class="breadcrumbs-title margin-bottom-30">
        <div class="container">
            <h1>Home</h1>
        </div>
    </div>

    <main role="main" class="container">
        <div class="row mt-5">

            @yield('theme::content')

            @section('theme::sidebar')
                @include('theme::layouts.sidebar')
            @show

        </div>
        <div class="clearfix"></div>
    </main>
    @include('theme::layouts.footer')
</div>

<!--
<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
-->

<!-- scripts -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{ asset('themes/kidora-theme/js/custom.js') }}"></script>

<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>
<script>
    $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
    });
</script>
<script type="text/javascript" src="{{ asset('themes/kidora-theme/assets_custom/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/kidora-theme/assets_custom/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('themes/kidora-theme/assets_custom/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/kidora-theme/assets_custom/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/kidora-theme/assets_custom/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/kidora-theme/assets_custom/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/kidora-theme/assets_custom/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/kidora-theme/assets_custom/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/kidora-theme/assets_custom/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/kidora-theme/assets_custom/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/kidora-theme/assets_custom/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript">
    var tpj=jQuery;

    var revapi1078;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_1078_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_1078_1");
        }else{
            revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"revolution/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        }
                    }
                    ,
                    bullets: {
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        style:"metis",
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:30,
                        space:5,
                        tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                    }
                },
                viewPort: {
                    enable:true,
                    outof:"pause",
                    visible_area:"80%",
                    presize:false
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,600,500,400],
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
                    type:"mouse",
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });	/*ready*/
</script>

<script>

    jQuery(".col-md-12 > h1").hide();
    //jQuery(".btn-link:contains('Forgot Your Password?')").removeClass("btn btn-link");
    //jQuery(".btn-link[data-toggle='collapse']").removeClass("btn btn-link");

    if (jQuery(".col-md-12 > h1").text().length > 0) {
        jQuery(".breadcrumbs-title h1").text(jQuery(".col-md-12 > h1").text());

    } else if(window.location.href.indexOf("register") > -1){
        jQuery(".breadcrumbs-title h1").text("Register");

    } else if(window.location.href.indexOf("login") > -1){
        jQuery(".breadcrumbs-title h1").text("Login");

    }else {
        jQuery(".breadcrumbs-title h1").text("Home");
    }

    $('body').append($('.modal'));
</script>

<script>
    const serverTime = new Date({{ \Carbon\Carbon::now()->format('Y, n, j, G, i, s') }});
    const currentTimestamp = {{ \Carbon\Carbon::now()->format('U') }} -Math.round(+new Date() / 1000);
</script>
<script src="{{ mix('/js/app.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('plugins/datatables/js/dataTables.js') }}"></script>
<!-- toastr -->
<script src="{{ asset('plugins/toastr/js/toastr.min.js') }}"></script>
<!-- select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- custom -->
<script src="{{ asset('js/custom.js') }}"></script>

@stack('theme::javascript')
</body>
</html>
