@extends('default.layout')
@section('content')
    <div id="section_r56Od" class="section-item section-bg-image  white    parallax-window ken-burn " data-parallax="scroll"
         data-natural-height="1080" data-natural-width="1920" data-position="top"
         data-image-src="{{asset('images/hd-12.jpg')}}" style="background-image: url('{{asset('images/hd-12.jpg')}}')">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_I2gpo" class="hc_column_cnt col-md-7   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            <h1 id="mzyat" class='   ' style=''>O Firmie</h1>
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="FKtmY" class=' text-l   ' style=''>{!! $fields->text1 !!}
                            </div>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m    " />
                        </div>
                        <div class="col-md-12 hc_button_cnt">
                            <div id="lvq5o" class="button-cnt" style="display: block; text-align:left">
                                <a class="btn btn-xs btn-icon" href="/">
                                    <i class="fa-solid fa-user-check"></i>Nasi Partnerzy
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="column_dIeIg" class="hc_column_cnt col-md-5  hidden-sm  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_breadcrumbs_cnt">
                            <ol class="breadcrumb b ">
                                <li><a href="/">Home</a></li>
                                <li class="active">{{$page->name}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_5ZtkF" class="section-item section-empty   bg-white " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_lVlZO" class="hc_column_cnt col-md-6  col-sm-6  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            @if(!empty($fields->about_us_header))
                                <h2 id="spbP4" class="" style="">{{$fields->about_us_header}}</h2>
                            @endif
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            @if(!empty($fields->about_us_description))
                                <div id="7XjSG" class="" style="">{!! $fields->about_us_description !!}</div>
                            @endif
                        </div>

                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m    " />
                        </div>
                        <div class="col-md-12 hc_image_cnt"><img decoding="async" class="" style="" src="{{asset('images/sign-1.jpg')}}" alt="" /></div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m" />
                        </div>
                        <div class="col-md-12 hc_title_tag_cnt">
                            <h4 id="pxASD" class='' style=''>Jan Niemiec</h4>
                        </div>
                        <div class="col-md-12 hc_title_tag_cnt">
                            <h4 id="vlrTh" class=' text-color text-s' style=''>Prezes Zarządu</h4>
                        </div>
                    </div>
                </div>
                <div id="column_kOLLp" class="hc_column_cnt col-md-3  col-sm-6  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_image_box_cnt">
                            <a id="CwDAN" class="img-box   row-15  lightbox " href="{{asset('images/about_company_1.jpg')}}" data-lightbox-anima="fade-in" data-anima-out="hide" style="">
                                <span>
                                    <img decoding="async" alt="" src="{{asset('images/about_company_1.jpg')}}" data-width="809" data-height="550">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="column_WtMXQ" class="hc_column_cnt col-md-3  col-sm-12  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_image_box_cnt">
                            <a id="kwWi7" class="img-box i-center  row-15  lightbox " href="{{asset('images/about_company_2.jpg')}}" data-lightbox-anima="fade-in" data-anima-out="hide" style="">
                                <span>
                                    <img decoding="async" alt="" src="{{asset('images/about_company_2.jpg')}}" data-width="809" data-height="550">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bRiLV" class="section-item section-slider  no-paddings-y  projects-slider " style="" data-sub-height="">
        <div class="flexslider slider" data-options="">
            <ul class="slides">
                @foreach($gallery->items as $gallery)
                    @if($gallery->type === 'slider')
                        <li><img decoding="async" alt="slide" src="{{renderImage($gallery->url, 1980, 1200, 'fit')}}" /></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="overlaybox">
            <div class="content container " style="">
                <div class="row ">
                    <div id="RkJGA" class="hc_column_cnt col-md-12" style="">
                        <div class="row">
                            <div class="col-md-12 hc_slider_cnt">
                                <div id="aFUlm" class="flexslider carousel     nav-inner outer-navs visible-dir-nav"
                                     data-options="slideshow:false,slideshowSpeed:15000,numItems:4,minWidth:200,itemMargin:0"
                                     style="">
                                    <ul class="slides">
                                        @include('default.offer.home')
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_Zcsnu" class="section-item section-empty   bg-white " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_0C6aB" class="hc_column_cnt col-md-3 col-sm-6" style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            @if(!empty($fields->counter_1_header))
                                <h4 id="s7V8h" class="" style="">{{$fields->counter_1_header}}</h4>
                            @endif
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space xs" />
                        </div>
                        <div class="col-md-12 hc_counter_cnt">
            <span class="counter-box-simple text-color" style="">
                @if(!empty($fields->counter_1_value))
                    <span class="counter text-xl" data-to="{{$fields->counter_1_value}}" data-separator="">0</span>
                @endif
                @if(!empty($fields->counter_1_unit))
                    <span class="default">{{$fields->counter_1_unit}}</span>
                @endif
            </span>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space xs" />
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            @if(!empty($fields->counter_1_description))
                                <div id="BurHi" class="text-xs text-uppercase" style="">{{$fields->counter_1_description}}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div id="column_Hg1yC" class="hc_column_cnt col-md-3 col-sm-6" style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            @if(!empty($fields->counter_2_header))
                                <h4 id="tgpRn" class="" style="">{{$fields->counter_2_header}}</h4>
                            @endif
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space xs" />
                        </div>
                        <div class="col-md-12 hc_counter_cnt">
            <span class="counter-box-simple text-color" style="">
                @if(!empty($fields->counter_2_value))
                    <span class="counter text-xl" data-to="{{$fields->counter_2_value}}" data-separator="">0</span>
                @endif
                @if(!empty($fields->counter_2_unit))
                    <span class="default">{{$fields->counter_2_unit}}</span>
                @endif
            </span>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space xs" />
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            @if(!empty($fields->counter_2_description))
                                <div id="EpKaC" class="text-xs text-uppercase" style="">{{$fields->counter_2_description}}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div id="column_W8nKW" class="hc_column_cnt col-md-3 col-sm-6" style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            @if(!empty($fields->counter_3_header))
                                <h4 id="lmiQl" class="" style="">{{$fields->counter_3_header}}</h4>
                            @endif
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space xs" />
                        </div>
                        <div class="col-md-12 hc_counter_cnt">
                        <span class="counter-box-simple text-color" style="">
                            @if(!empty($fields->counter_3_value))
                                <span class="counter text-xl" data-to="{{$fields->counter_3_value}}" data-separator="">0</span>
                            @endif
                            @if(!empty($fields->counter_3_unit))
                                <span class="default">{{$fields->counter_3_unit}}</span>
                            @endif
                        </span>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space xs" />
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            @if(!empty($fields->counter_3_description))
                                <div id="7IF0m" class="text-xs text-uppercase" style="">{{$fields->counter_3_description}}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div id="column_JYtcd" class="hc_column_cnt col-md-3 col-sm-6" style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            @if(!empty($fields->counter_4_header))
                                <h4 id="9WZnj" class="" style="">{{$fields->counter_4_header}}</h4>
                            @endif
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space xs" />
                        </div>
                        <div class="col-md-12 hc_counter_cnt">
                        <span class="counter-box-simple text-color" style="">
                            @if(!empty($fields->counter_4_value))
                                <span class="counter text-xl" data-to="{{$fields->counter_4_value}}" data-separator="">0</span>
                            @endif
                            @if(!empty($fields->counter_4_unit))
                                <span class="default">{{$fields->counter_4_unit}}</span>
                            @endif
                        </span>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space xs" />
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            @if(!empty($fields->counter_4_description))
                                <div id="55gh3" class="text-xs text-uppercase" style="">{{$fields->counter_4_description}}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_dkmWj" class="section-item section-empty    " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_WxaYZ" class="hc_column_cnt col-md-12  proporzional-row  proporzional-row-sm" style="">
                    <div class="row">
                        <div id="column_f5oJO" class="hc_column_cnt col-md-3" style="">
                            <div class="row">
                                <div class="col-md-12 hc_title_tag_cnt">
                                    @if(!empty($fields->certificate_1_header))
                                        <h2 id="iidCq" class="text-color" style="">{{$fields->certificate_1_header}}</h2>
                                    @endif
                                </div>
                                <div class="col-md-12 hc_text_block_cnt">
                                    @if(!empty($fields->certificate_1_description))
                                        <div id="UjHVq" class="" style="">{!! $fields->certificate_1_description !!}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div id="column_u496x" class="hc_column_cnt col-md-3   " style="">
                            <div class="row">
                                <div class="col-md-12 hc_image_box_cnt">
                                    @foreach($page->gallery->items as $gallery)
                                        @if($gallery->name === 'cert_1')
                                            <a id="lQ0bc" class="img-box lightbox " href="{{renderImage($gallery->url, 1000, 800, 'resize')}}" data-lightbox-anima="fade-in" data-anima-out="hide" style="">
                                                <span>
                                                    <img decoding="async" alt=""
                                                         src="{{renderImage($gallery->url, 240, 340, 'fit')}}"
                                                         data-width="616" data-height="881">
                                                </span>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="column_I6QHe" class="hc_column_cnt col-md-3   " style="">
                            <div class="row">
                                <div class="col-md-12 hc_title_tag_cnt">
                                    @if(!empty($fields->certificate_2_header))
                                        <h2 id="8xbI0" class="text-color" style="">{{$fields->certificate_2_header}}</h2>
                                    @endif
                                </div>
                                <div class="col-md-12 hc_text_block_cnt">
                                    @if(!empty($fields->certificate_2_description))
                                        <div id="GLLE7" class="" style="">{!! $fields->certificate_2_description !!}</div>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div id="column_eNhO1" class="hc_column_cnt col-md-3   " style="">
                            <div class="row">
                                <div class="col-md-12 hc_image_box_cnt">
                                    @foreach($page->gallery->items as $gallery)
                                        @if($gallery->name === 'cert_2')
                                            <a id="mQsC8" class="img-box lightbox " href="{{renderImage($gallery->url, 1000, 800, 'resize')}}" data-lightbox-anima="fade-in" data-anima-out="hide" style="">
                                                <span>
                                                    <img decoding="async" alt=""
                                                         src="{{renderImage($gallery->url, 240, 340, 'fit')}}"
                                                         data-width="605" data-height="861">
                                                </span>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
