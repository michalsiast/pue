@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

{{--    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main']) --}}
@endsection
<div class="parallax-mirror"
     style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 588px; width: 1200px;">
    <img class="parallax-slider" src="https://ekokan.com.pl/wp-content/uploads/2021/11/hd-8a.jpg"
         style="transform: translate3d(0px, 0px, 0px); position: absolute; left: -114px; height: 910px; width: 1429px; max-width: none;">
</div>
<div class="parallax-mirror"
     style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 738px; width: 1200px;">
    <img class="parallax-slider" src="https://ekokan.com.pl/wp-content/uploads/2021/11/hd-5-1920x1080.jpg"
         style="transform: translate3d(0px, 0px, 0px); position: absolute; left: -235px; height: 940px; width: 1671px; max-width: none;">
</div>
<div id="preloader" style="display: none;"></div>
<div class=" content-parallax">
    <header class="scroll-change fixed-top menu-top-logo" data-menu-anima="fade-in" data-menu-height="139"
            style="height: 139px;">
        <div class="navbar navbar-default navbar-fixed-top " role="navigation">
            <div class="navbar navbar-main navbar-middle">
                <div class="container">
                    <div class="scroll-hide">
                        <div class="container">
                            <a class="navbar-brand center" href="https://ekokan.com.pl" style="">
                                <img class="logo-default"
                                     src="https://ekokan.com.pl/wp-content/uploads/2018/10/logo_ekokan_jpg.jpg"
                                     alt="" style="">
                                <img class="logo-retina"
                                     src="https://ekokan.com.pl/wp-content/uploads/2018/10/logo_ekokan_jpg.jpg"
                                     alt="" style=""></a>
                        </div>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="https://ekokan.com.pl" style=""><img class="logo-default"
                                                                                           src="https://ekokan.com.pl/wp-content/uploads/2018/10/logo_ekokan_jpg.jpg" alt=""
                                                                                           style=""><img class="logo-retina"
                                                                                                         src="https://ekokan.com.pl/wp-content/uploads/2018/10/logo_ekokan_jpg.jpg" alt=""
                                                                                                         style=""></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul id="main-menu" class="nav navbar-nav " style="">
                            <li class="active"><a href="https://ekokan.com.pl/">Strona główna</a></li>
                            <li class="   dropdown multi-level "><a class="dropdown-toggle" data-toggle="dropdown"
                                                                    href="#">Firma<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class=" "><a href="https://ekokan.com.pl/about/">O firmie</a></li>
                                    <li class=" "><a
                                            href="https://ekokan.com.pl/projects/nagrody-i-osiagniecia/">Nagrody i
                                            Osiągnięcia</a></li>
                                </ul>
                            </li>
                            <li class=" "><a href="https://ekokan.com.pl/pracuj-z-nami/">Pracuj z nami</a></li>
                            <li class="logo-item scroll-show"><a href="https://ekokan.com.pl"><img
                                        class="logo-default"
                                        src="https://ekokan.com.pl/wp-content/uploads/2018/10/logo_ekokan_jpg.jpg"
                                        alt="logo" style=""><img class="logo-retina"
                                                                 src="https://ekokan.com.pl/wp-content/uploads/2018/10/logo_ekokan_jpg.jpg"
                                                                 alt="" style=""></a></li>
                            <li class=" "><a href="#">Aktualności</a></li>
                            <li class="   dropdown multi-level "><a class="dropdown-toggle" data-toggle="dropdown"
                                                                    href="#">Realizacje<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class=" "><a href="https://ekokan.com.pl/projects/ropociagi/">Rurociągi do
                                            przesyłu <br> ropopochodnych</a></li>
                                    <li class=" "><a href="https://ekokan.com.pl/projects/gazociagi/">Gazociągi</a>
                                    </li>
                                    <li class=" "><a href="https://ekokan.com.pl/projects/wodociagi/">Wodociągi</a>
                                    </li>
                                    <li class=" "><a
                                            href="https://ekokan.com.pl/projects/cieplownictwo/">Ciepłownictwo</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" "><a href="https://ekokan.com.pl/contacts-two/">Kontakt</a></li>
                        </ul>
                        <div class="nav navbar-nav navbar-right">
                            <div class="custom-area"><a href="https://ekokan.com.pl/contacts-two/"
                                                        class="btn btn-sm hidden-sm">Kontakt</a>
                                <div class="custom-menu"><span>PN - PT 7:00 - 15:00</span><span>tel. (+48) 14 637 45
                                            98</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="section_5ZtkF" class="section-item section-slider  white  no-padding-bottom " style=""
         data-sub-height="">
        <div class="flexslider slider" data-options="animation:fade">
            <ul class="slides">
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"
                    class="flex-active-slide"><img decoding="async" alt="slide"
                                                   src="https://ekokan.com.pl/wp-content/uploads/2021/11/pic3.jpg" draggable="false"
                                                   style="margin-top: -15px;"></li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                    class=""><img decoding="async" alt="slide"
                                  src="https://ekokan.com.pl/wp-content/uploads/2021/11/pic1a.jpg" draggable="false"
                                  style="margin-top: -15px;"></li>
            </ul>
            <ol class="flex-control-nav flex-control-paging">
                <li><a class="flex-active">1</a></li>
                <li><a class="">2</a></li>
            </ol>
            <ul class="flex-direction-nav">
                <li class="flex-nav-prev"><a class="flex-prev" href="#"></a></li>
                <li class="flex-nav-next"><a class="flex-next" href="#"></a></li>
            </ul>
        </div>
        <div class="overlaybox">
            <div class="content " style="">
                <div class="row ">
                    <div id="column_6kou3" class="hc_column_cnt col-md-12   " style="">
                        <div class="row">
                            <div class="col-md-12 hc_space_cnt">
                                <hr class="space   hidden-sm   ">
                            </div>
                            <div class="col-md-12 hc_space_cnt">
                                <hr class="space     ">
                            </div>
                            <div class="col-md-12 hc_slider_cnt">
                                <div id="CQKOO" class="flexslider slider    " data-options="animationSpeed:1000"
                                     style="">

                                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                        <ul class="slides"
                                            style="width: 1000%; transition-duration: 1s; transform: translate3d(-4560px, 0px, 0px);">
                                            <li class="clone" aria-hidden="true"
                                                style="width: 1140px; float: left; display: block;">
                                                <div id="column_M7XK0_clone"
                                                     class="hc_column_cnt col-md-12  vertical-row  " style="">
                                                    <div class="row">
                                                        <div id="mYmYC_clone"
                                                             class="hc_column_cnt col-md-6  text-left-sm  " style="">
                                                            <div class="row">
                                                                <div class="col-md-12 hc_title_tag_cnt">
                                                                    <h1 id="TcAd2_clone" class="   " style="">
                                                                        NOWOCZESNE PRZEDSIĘBIORSTWO USŁUGOWE</h1>
                                                                </div>
                                                                <div class="col-md-12 hc_text_block_cnt">
                                                                    <div id="CJsKT_clone" class=" text-l   "
                                                                         style="">Projekty w obszarze gazu ziemnego,
                                                                        ropy naftowej, chemii, ochrony środowiska i
                                                                        energetyki cieplnej.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="WGCi3_clone"
                                                             class="hc_column_cnt col-md-6  text-right text-left-sm  "
                                                             style="">
                                                            <div class="row">
                                                                <div class="col-md-12 hc_space_cnt">
                                                                    <hr class="space   visible-sm   ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="width: 1140px; float: left; display: block;"
                                                class="flex-active-slide">
                                                <div id="column_PD3Fb"
                                                     class="hc_column_cnt col-md-12  vertical-row  " style="">
                                                    <div class="row">
                                                        <div id="column_ScHGF"
                                                             class="hc_column_cnt col-md-6  text-left-sm  " style="">
                                                            <div class="row">
                                                                <div class="col-md-12 hc_title_tag_cnt">
                                                                    <h1 id="2cdXg" class="   " style="">SIECI I
                                                                        INSTALACJE</h1>
                                                                </div>
                                                                <div class="col-md-12 hc_text_block_cnt">
                                                                    <div id="mEwsR" class=" text-l   " style="">
                                                                        Najwyższy poziom techniczny, <br>zgodny z
                                                                        oczekiwaniami Klienta</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="column_oVIpr"
                                                             class="hc_column_cnt col-md-6  text-right text-left-sm  "
                                                             style="">
                                                            <div class="row">
                                                                <div class="col-md-12 hc_space_cnt">
                                                                    <hr class="space   visible-sm   ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="width: 1140px; float: left; display: block;" class="">
                                                <div id="column_rJeUc"
                                                     class="hc_column_cnt col-md-12  vertical-row  " style="">
                                                    <div class="row">
                                                        <div id="zU7nn"
                                                             class="hc_column_cnt col-md-6  text-left-sm  " style="">
                                                            <div class="row">
                                                                <div class="col-md-12 hc_title_tag_cnt">
                                                                    <h1 id="RTGdS" class="   " style="">DOSTĘP DO
                                                                        NAJNOWSZYCH OSIĄGNIĘĆ I ROZWIĄZAŃ
                                                                        TECHNICZNYCH</h1>
                                                                </div>
                                                                <div class="col-md-12 hc_text_block_cnt">
                                                                    <div id="jnwgG" class=" text-l   " style="">
                                                                        Stosowanie zaawansowanych rozwiązań
                                                                        technicznych i technologicznych</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Uoyr4"
                                                             class="hc_column_cnt col-md-6  text-right text-left-sm  "
                                                             style="">
                                                            <div class="row">
                                                                <div class="col-md-12 hc_space_cnt">
                                                                    <hr class="space   visible-sm   ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="width: 1140px; float: left; display: block;" class="">
                                                <div id="column_M7XK0"
                                                     class="hc_column_cnt col-md-12  vertical-row  " style="">
                                                    <div class="row">
                                                        <div id="mYmYC"
                                                             class="hc_column_cnt col-md-6  text-left-sm  " style="">
                                                            <div class="row">
                                                                <div class="col-md-12 hc_title_tag_cnt">
                                                                    <h1 id="TcAd2" class="   " style="">NOWOCZESNE
                                                                        PRZEDSIĘBIORSTWO USŁUGOWE</h1>
                                                                </div>
                                                                <div class="col-md-12 hc_text_block_cnt">
                                                                    <div id="CJsKT" class=" text-l   " style="">
                                                                        Projekty w obszarze gazu ziemnego, ropy
                                                                        naftowej, chemii, ochrony środowiska i
                                                                        energetyki cieplnej.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="WGCi3"
                                                             class="hc_column_cnt col-md-6  text-right text-left-sm  "
                                                             style="">
                                                            <div class="row">
                                                                <div class="col-md-12 hc_space_cnt">
                                                                    <hr class="space   visible-sm   ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="width: 1140px; float: left; display: block;" class="clone"
                                                aria-hidden="true">
                                                <div id="column_PD3Fb_clone"
                                                     class="hc_column_cnt col-md-12  vertical-row  " style="">
                                                    <div class="row">
                                                        <div id="column_ScHGF_clone"
                                                             class="hc_column_cnt col-md-6  text-left-sm  " style="">
                                                            <div class="row">
                                                                <div class="col-md-12 hc_title_tag_cnt">
                                                                    <h1 id="2cdXg_clone" class="   " style="">SIECI
                                                                        I INSTALACJE</h1>
                                                                </div>
                                                                <div class="col-md-12 hc_text_block_cnt">
                                                                    <div id="mEwsR_clone" class=" text-l   "
                                                                         style="">Najwyższy poziom techniczny,
                                                                        <br>zgodny z oczekiwaniami Klienta</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="column_oVIpr_clone"
                                                             class="hc_column_cnt col-md-6  text-right text-left-sm  "
                                                             style="">
                                                            <div class="row">
                                                                <div class="col-md-12 hc_space_cnt">
                                                                    <hr class="space   visible-sm   ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <ol class="flex-control-nav flex-control-paging">
                                        <li><a class="flex-active">1</a></li>
                                        <li><a class="">2</a></li>
                                        <li><a class="">3</a></li>
                                    </ol>
                                    <ul class="flex-direction-nav">
                                        <li class="flex-nav-prev"><a class="flex-prev" href="#"></a></li>
                                        <li class="flex-nav-next"><a class="flex-next" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_lgDGx" class="section-item section-empty    " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_bIFWD" class="hc_column_cnt col-md-12   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_grid_table_cnt">
                            <table class="grid-table  border-table grid-table-sm-12  text-left   " style="">
                                <tbody>
                                <tr>
                                    <td>
                                        <h2 id="LpgPH" class="   " style="">NOWOCZESNE PRZEDSIĘBIORSTWO USŁUGOWE
                                        </h2>
                                    </td>
                                    <td>
                                        <div id="XTr5Y" class="  margin-top-sm " style="">Projekty w obszarze
                                            gazu ziemnego, ropy naftowej, chemii,<br>ochrony środowiska i
                                            energetyki cieplnej.</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space     ">
                        </div>
                        <div class="col-md-12 hc_slider_cnt">
                            <div id="y0gM1" class="flexslider carousel     outer-navs"
                                 data-options="minWidth:250,itemMargin:30" style="">

                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                    <ul class="slides"
                                        style="width: 800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                        <li style="padding-right: 30px; width: 390px; float: left; display: block;">
                                            <div class="advs-box advs-box-multiple     boxed-inverse"
                                                 data-anima="scale-up" data-trigger="hover" style="">
                                                <a class="img-box">
                                                    <img decoding="async" alt="" class="anima"
                                                         src="https://ekokan.com.pl/wp-content/uploads/2021/11/z1.jpg"
                                                         draggable="false">
                                                </a>
                                                <div class="circle">
                                                    <i class=" im-solar "></i>
                                                </div>
                                                <div class="advs-box-content">
                                                    <h3>GAZOCIĄGI</h3>
                                                    <p class=""><br>
                                                        Misją naszej firmy jest realizacja usług na najwyższym
                                                        poziomie pozwalająca na udzielenie długotrwałych gwarancji.

                                                    </p> <a class="btn-text "
                                                            href="https://ekokan.com.pl/projects/gazociagi/">więcej
                                                        informacji</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="padding-right: 30px; width: 390px; float: left; display: block;">
                                            <div class="advs-box advs-box-multiple     boxed-inverse"
                                                 data-anima="scale-up" data-trigger="hover" style="">
                                                <a class="img-box">
                                                    <img decoding="async" alt="" class="anima"
                                                         src="https://ekokan.com.pl/wp-content/uploads/2021/11/pic2a.jpg"
                                                         draggable="false" aid="0.9467629102156132"
                                                         style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;">
                                                </a>
                                                <div class="circle">
                                                    <i class=" im-pencil-ruler "></i>
                                                </div>
                                                <div class="advs-box-content">
                                                    <h3 class="text-l">Rurociągi do przesyłu ropopochodnych</h3>
                                                    <p class="">Projektowanie i budowa sieci do przesyłu
                                                        ropopochodnych.</p> <a class="btn-text "
                                                                               href="https://ekokan.com.pl/projects/ropociagi/">więcej
                                                        informacji</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="padding-right: 30px; width: 390px; float: left; display: block;">
                                            <div class="advs-box advs-box-multiple     boxed-inverse"
                                                 data-anima="scale-up" data-trigger="hover" style="">
                                                <a class="img-box">
                                                    <img decoding="async" alt="" class="anima"
                                                         src="https://ekokan.com.pl/wp-content/uploads/2021/11/pic3a.jpg"
                                                         draggable="false">
                                                </a>
                                                <div class="circle">
                                                    <i class=" im-suitcase "></i>
                                                </div>
                                                <div class="advs-box-content">
                                                    <h3>WODOCIĄGI</h3>
                                                    <p class=""><br>
                                                        <br>
                                                        <br>
                                                        Projektowanie i budowa sieci wodociągowych.
                                                    </p> <a class="btn-text "
                                                            href="https://ekokan.com.pl/projects/wodociagi/">więcej
                                                        informacji</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="padding-right: 30px; width: 390px; float: left; display: block;">
                                            <div class="advs-box advs-box-multiple     boxed-inverse"
                                                 data-anima="scale-up" data-trigger="hover" style="">
                                                <a class="img-box">
                                                    <img decoding="async" alt="" class="anima"
                                                         src="https://ekokan.com.pl/wp-content/uploads/2021/11/pic4a.jpg"
                                                         draggable="false">
                                                </a>
                                                <div class="circle">
                                                    <i class=" im-worker "></i>
                                                </div>
                                                <div class="advs-box-content">
                                                    <h3>CIEPŁOWNICTWO</h3>
                                                    <p class=""><br>
                                                        <br>
                                                        <br>
                                                        Projektowanie i budowa sieci ciepłowniczych.
                                                    </p> <a class="btn-text "
                                                            href="https://ekokan.com.pl/projects/cieplownictwo/">więcej
                                                        informacji</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ol class="flex-control-nav flex-control-paging">
                                    <li><a class="flex-active">1</a></li>
                                    <li><a class="">2</a></li>
                                </ol>
                                <ul class="flex-direction-nav">
                                    <li class="flex-nav-prev"><a class="flex-prev" href="#"></a></li>
                                    <li class="flex-nav-next"><a class="flex-next" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_0Vg7m" class="section-item section-empty   bg-white " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_XquUk" class="hc_column_cnt col-md-4   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            <h4 id="K5yKK" class=" text-color   " style="">Siedziba firmy</h4>
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="KkkNZ" class=" no-margins text-s   " style="">Kwiatkowskiego 8, 33-100 Tarnów
                            </div>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m    ">
                        </div>
                        <div class="col-md-12 hc_title_tag_cnt">
                            <h4 id="3W0Ts" class=" text-color   " style="">W jakich godzinach pracujemy</h4>
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="WGeZc" class=" no-margins text-s   " style="">Poniedziałek - Piątek : 7:00 -
                                15:00</div>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m    ">
                        </div>
                        <div class="col-md-12 hc_title_tag_cnt">
                            <h4 id="nXTg1" class=" text-color   " style="">Email</h4>
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="I9yMn" class=" no-margins text-s   " style="">sekretariat@puepg.com.pl</div>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m    ">
                        </div>
                        <div class="col-md-12 hc_title_tag_cnt">
                            <h4 id="8OHf0" class=" text-color   " style="">TELEFON KONTAKTOWY</h4>
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="sU5l5" class=" no-margins text-s   " style="">(+48) 14 637 45 98</div>
                        </div>
                    </div>
                </div>
                <div id="column_I88Jr" class="hc_column_cnt col-md-2   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_icon_list_simple_cnt">
                            <ul id="zdqGl" class="ul-dots no-icons text-s text-left    "
                                style=" list-style: initial">
                                <li><i class="fa-li "></i> Tarnów</li>
                                <li><i class="fa-li "></i> Kraków</li>
                                <li><i class="fa-li "></i> Łańcut</li>
                                <li><i class="fa-li "></i> Gdańsk</li>
                                <li><i class="fa-li "></i> Warszawa</li>
                                <li><i class="fa-li "></i> Trzebinia</li>
                                <li><i class="fa-li "></i> Dębica</li>
                                <li><i class="fa-li "></i> Krynica Zdrój</li>
                                <li><i class="fa-li "></i> Dąbrowa Tarnowska</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="column_jLjR2" class="hc_column_cnt col-md-2   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_icon_list_simple_cnt">
                            <ul id="Odsq5" class="ul-dots no-icons text-s text-left    "
                                style=" list-style: initial">
                                <li><i class="fa-li "></i> Wrocław</li>
                                <li><i class="fa-li "></i> Kędzierzyn Koźle</li>
                                <li><i class="fa-li "></i> Płock</li>
                                <li><i class="fa-li "></i> Sędziszów Małopolski</li>
                                <li><i class="fa-li "></i> Lwówek</li>
                                <li><i class="fa-li "></i> Adamów</li>
                                <li><i class="fa-li "></i> Grudziądz</li>
                                <li><i class="fa-li "></i> Pogórska Wola</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="column_VYrKa" class="hc_column_cnt col-md-4  col-sm-12  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space   visible-sm   ">
                        </div>
                        <div class="col-md-12 hc_title_tag_cnt">
                            <h2 id="ZLRAt" class="   " style="">WYKONYWALIŚMY NASZE USŁUGI W PRZESZŁO 20 MIASTACH
                                POLSKI</h2>
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="Y8uC2" class="   " style="">Firma buduje swoją pozycję na rynku jako
                                specjalistyczne przedsiębiorstwo inżynieryjne, realizujące skomplikowane i złożone
                                projekty.</div>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space l    ">
                        </div>
                        <div class="col-md-12 hc_button_cnt">
                            <div id="oPsmA" class="button-cnt    " style="display: block; text-align:left">
                                <a class="btn btn-sm btn-icon  " href="https://ekokan.com.pl/about/">
                                    <i class="fa im-cursor"></i>Więcej Informacji </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_yBlEj " class="section-item section-two-blocks blocks-right  " data-parallax="scroll"
         data-image-src="https://ekokan.com.pl/wp-content/uploads/2021/11/hd-5-1920x1080.jpg">
        <div class="row ">
            <div class="col-md-6 ">
            </div>
            <div class="col-md-6">
                <div class="content">
                    <div id="column_r6oKu" class="hc_column_cnt col-md-12   " style="">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h2 id="q737w" class="   " style="">PONAD 20 LAT DOŚWIADCZENIA<br>NA RYNKU PRACY
                                </h2>
                            </div>
                            <div class="col-md-12 hc_text_block_cnt">
                                <div id="eyQdg" class="   " style="">Firma buduje swoją pozycję na rynku jako
                                    specjalistyczne przedsiębiorstwo inżynieryjne, realizujące skomplikowane i
                                    złożone zadania i projekty w obszarze gazu ziemnego, ropy naftowej, chemii,
                                    ochrony środowiskai energetyki cieplnej.</div>
                            </div>
                            <div class="col-md-12 hc_space_cnt">
                                <hr class="space l    ">
                            </div>
                            <div class="col-md-12 hc_grid_table_cnt">
                                <table class="grid-table  border-table    " style="">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="counter-box-icon icon-box  text-left   " style="">
                                                <div class="icon-box-cell">
                                                    <i class="icon text-xl im-gears-2 "></i>
                                                </div>
                                                <div class="icon-box-cell">
                                                    <b>
                                                        <label class="counter text-l" data-to="25"
                                                               data-separator="">0</label>
                                                    </b>
                                                    <p class="text-s">
                                                        Lat na rynku </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="counter-box-icon icon-box  text-left   " style="">
                                                <div class="icon-box-cell">
                                                    <i class="icon text-xl im-worker "></i>
                                                </div>
                                                <div class="icon-box-cell">
                                                    <b>
                                                        <label class="counter text-l" data-to="65"
                                                               data-separator="">0</label>
                                                    </b>
                                                    <p class="text-s">
                                                        Ilość pracowników </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_YJtJg" class="section-item section-empty    " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_MblQW" class="hc_column_cnt col-md-4  col-sm-12  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_progress_bar_cnt">
                            <div class="   " style="">
                                <p class="progress-label">Produkty ekologiczne</p>
                                <div class="progress">
                                    <div class="progress-bar " data-progress="70">
                                        <span><span class="counter" data-to="70">70</span> %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m    ">
                        </div>
                        <div class="col-md-12 hc_progress_bar_cnt">
                            <div class="   " style="">
                                <p class="progress-label">Produkty odzyskane</p>
                                <div class="progress">
                                    <div class="progress-bar " data-progress="60">
                                        <span><span class="counter" data-to="60">60</span> %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m    ">
                        </div>
                        <div class="col-md-12 hc_progress_bar_cnt">
                            <div class="   " style="">
                                <p class="progress-label">Produkty bezpieczne</p>
                                <div class="progress">
                                    <div class="progress-bar " data-progress="100">
                                        <span><span class="counter" data-to="100">100</span> %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m    ">
                        </div>
                        <div class="col-md-12 hc_progress_bar_cnt">
                            <div class="   " style="">
                                <p class="progress-label">Produkty Niezagrażające środowisku</p>
                                <div class="progress">
                                    <div class="progress-bar " data-progress="100">
                                        <span><span class="counter" data-to="100">100</span> %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="column_whlBe" class="hc_column_cnt col-md-4  col-sm-12  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="5gWLD" class="   " style="">Szczególnie dbamy o:<br>• najwyższy poziom
                                techniczny, zgodny z oczekiwaniami Klienta,<br>• realizowanie zadań zgodnie z
                                obowiązującą w Firmie Polityką ZSZ (Zintegrowany System Zarządzania),<br>• zgodność
                                z obowiązującymi normami technicznymi i sztuką budowlaną<br>• spełnianie wymagań
                                ochrony środowiska i warunków BHP,<br>• wykonawstwo wolne od wad ukrytych,<br>•
                                stosowanie zaawansowanych rozwiązań technicznych i technologicznych.</div>
                        </div>
                    </div>
                </div>
                <div id="column_iPrti" class="hc_column_cnt col-md-4  col-sm-12  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m  visible-sm   ">
                        </div>
                        <div class="col-md-12 hc_title_tag_cnt">
                            <h2 id="6Ftaa" class="   " style="">misja i wizja firmy</h2>
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="4C986" class="   " style="">Misją naszej firmy jest realizacja usług na
                                najwyższym poziomie pozwalająca na udzielenie długotrwałych gwarancji. </div>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space l    ">
                        </div>
                        <div class="col-md-12 hc_button_cnt">
                            <div id="LePaH" class="button-cnt    " style="display: block; text-align:left">
                                <a class="btn btn-sm btn-icon  " href="https://ekokan.com.pl/about/">
                                    <i class="fa im-engineering"></i>Dowiedz się więcej </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Lz0Xr " class="section-item section-two-blocks   " data-bleed="0" data-parallax="scroll"
         data-image-src="https://ekokan.com.pl/wp-content/uploads/2021/11/hd-8a.jpg">
        <div class="row ">
            <div class="col-md-6 ">
            </div>
            <div class="col-md-6">
                <div class="content">
                    <div id="D7Pi9" class="hc_column_cnt col-md-12   " style="">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h2 id="iihzd" class="   " style="">BUDUJEMY SILNE RELACJE Z NASZYMI KLIENTAMI</h2>
                            </div>
                            <div class="col-md-12 hc_text_block_cnt">
                                <div id="TFiYl" class="   " style="">PUE Polski Gaz od początku swej działalności na
                                    pierwszym miejscu stawia na wysoką jakość świadczonych usług poprzez właściwą
                                    organizacje pracy, rzetelność, terminowość oraz stosowanie najnowszych
                                    technologii i materiałów najwyższej jakości.</div>
                            </div>
                            <div class="col-md-12 hc_button_cnt">
                                <div id="YpNX5" class="button-cnt    " style="display: block; text-align:left">
                                    <a class="btn-text btn-icon  " href="https://ekokan.com.pl/">
                                        <i class="fa im-hipster-men"></i>Nasi Partnerzy </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_yIxXx" class="section-item section-bg-image   bg-white   " style="background-image: url(); ">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_76Qhp" class="hc_column_cnt col-md-12   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_slider_cnt">
                            <div id="hqFc7" class="flexslider carousel png-over no-navs"
                                 data-options="controlNav:false,directionNav:false,numItems:5,minWidth:100,itemMargin:60"
                                 style="">

                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                    <ul class="slides"
                                        style="width: 1400%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                        <li style="padding-right: 60px; width: 240px; float: left; display: block;">
                                            <a id="V1jes" class="img-box     scroll-to " href="#"
                                               data-anima-out="hide" style="">
                                                    <span>
                                                        <img decoding="async" alt=""
                                                             src="https://ekokan.com.pl/wp-content/uploads/2021/11/gaz_system.png"
                                                             data-width="374" data-height="103" draggable="false">
                                                    </span>
                                            </a>
                                        </li>
                                        <li style="padding-right: 60px; width: 240px; float: left; display: block;">
                                            <a id="c6RYC" class="img-box     scroll-to " href="#"
                                               data-anima-out="hide" style="">
                                                    <span>
                                                        <img decoding="async" alt=""
                                                             src="https://ekokan.com.pl/wp-content/uploads/2021/11/lotos.png"
                                                             data-width="374" data-height="103" draggable="false">
                                                    </span>
                                            </a>
                                        </li>
                                        <li style="padding-right: 60px; width: 240px; float: left; display: block;">
                                            <a id="R0NmP" class="img-box     scroll-to " href="#"
                                               data-anima-out="hide" style="">
                                                    <span>
                                                        <img decoding="async" alt=""
                                                             src="https://ekokan.com.pl/wp-content/uploads/2021/11/psg.png"
                                                             data-width="374" data-height="103" draggable="false">
                                                    </span>
                                            </a>
                                        </li>
                                        <li style="padding-right: 60px; width: 240px; float: left; display: block;">
                                            <a id="vfM8T" class="img-box     scroll-to " href="#"
                                               data-anima-out="hide" style="">
                                                    <span>
                                                        <img decoding="async" alt=""
                                                             src="https://ekokan.com.pl/wp-content/uploads/2021/11/strabag.png"
                                                             data-width="374" data-height="103" draggable="false">
                                                    </span>
                                            </a>
                                        </li>
                                        <li style="padding-right: 60px; width: 240px; float: left; display: block;">
                                            <a id="8B9yZ" class="img-box     scroll-to " href="#"
                                               data-anima-out="hide" style="">
                                                    <span>
                                                        <img decoding="async" alt=""
                                                             src="https://ekokan.com.pl/wp-content/uploads/2021/11/grupa_azoty2.png"
                                                             data-width="289" data-height="103" draggable="false">
                                                    </span>
                                            </a>
                                        </li>
                                        <li style="padding-right: 60px; width: 240px; float: left; display: block;">
                                            <a id="q5X8W" class="img-box     scroll-to " href="#"
                                               data-anima-out="hide" style="">
                                                    <span>
                                                        <img decoding="async" alt=""
                                                             src="https://ekokan.com.pl/wp-content/uploads/2021/11/pern.png"
                                                             data-width="374" data-height="103" draggable="false">
                                                    </span>
                                            </a>
                                        </li>
                                        <li style="padding-right: 60px; width: 240px; float: left; display: block;">
                                            <a id="DCM5p" class="img-box     scroll-to " href="#"
                                               data-anima-out="hide" style="">
                                                    <span>
                                                        <img decoding="async" alt=""
                                                             src="https://ekokan.com.pl/wp-content/uploads/2021/11/skanska.png"
                                                             data-width="374" data-height="103" draggable="false">
                                                    </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_r8QVx"
         class="section-item section-empty  col-center  <figure class='wp-block-image size-full aligncenter'>  box-middle-container"
         style="">
        <div class="content container " style="padding:0">
            <div class="row vertical-row box-middle">
                <div id="column_uVFOU"
                     class="hc_column_cnt col-md-6  col-center  <figure class='wp-block-image size-full aligncenter'>"
                     style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            <h1 id="DQ5I2" class=" text-center   " style=""></h1>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space l    " style=" height: 20px">
                        </div>
                        <div class="col-md-12 hc_image_box_cnt"><a id="XaCL0" class="img-box i-center    " href=""
                                                                   style="">
                                    <span>
                                        <img decoding="async" alt=""
                                             src="https://ekokan.com.pl/wp-content/uploads/2024/02/znak-cert_syst_zarz_male1.png"
                                             data-width="350" data-height="95">
                                    </span>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_6qxhT" class="section-item section-empty   bg-white " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_7B59T" class="hc_column_cnt col-md-4   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_content_box_cnt">
                            <div class="advs-box advs-box-top-icon  text-left  icon-color  " data-anima="scale-up"
                                 data-trigger="hover" style="">
                                <i class="icon circle anima im-information "></i>
                                <h3>Masz pytania?</h3>
                                <p class="big-text ">Tel: (+48) 14 637 45 98

                                    <br>

                                    <br>
                                </p> <a class="btn-text " href="https://ekokan.com.pl/contacts-two/">Kontakt</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="column_BEJhz" class="hc_column_cnt col-md-4   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_content_box_cnt">
                            <div class="advs-box advs-box-top-icon  text-left  icon-color  " data-anima="scale-up"
                                 data-trigger="hover" style="">
                                <i class="icon circle anima im-envelope "></i>
                                <h3>Potrzebujesz pomocy?</h3>
                                <p class="big-text ">sekretariat@puepg.com.pl

                                    <br>

                                    <br>
                                </p> <a class="btn-text " href="https://ekokan.com.pl/contacts-two/">Kontakt</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="column_yoE9o" class="hc_column_cnt col-md-4   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_content_box_cnt">
                            <div class="advs-box advs-box-top-icon  text-left  icon-color  " data-anima="scale-up"
                                 data-trigger="hover" style="">
                                <i class="icon circle anima im-calendar-3 "></i>
                                <h3>Kiedy pracujemy</h3>
                                <p class="big-text ">Od Poniedziałku do Piątku<br>W godzinach 07:00 – 15:00</p> <a
                                    class="btn-text " href="https://ekokan.com.pl/contacts-two/">Kontakt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="y7Gpx" class="section-item section-empty   shortcode-cnt " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="qLsIf" class="hc_column_cnt col-md-12   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="L6M8y" class="   " style="">[sb type='chat']</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="comments-cnt">
        <div class="container">
            <div id="comments" class="comments-area">
            </div>
        </div>
    </div>
</div>
