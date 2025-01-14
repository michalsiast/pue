@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
<div id="section_lgDGx" class="section-item section-empty    " style="">
    <div class="content container " style="">
        <div class="row ">
            <div id="column_bIFWD" class="hc_column_cnt col-md-12   " style="">
                <div class="row">
                    <div class="col-md-12 hc_grid_table_cnt">
                        <table class="grid-table  border-table grid-table-sm-12  text-left   " style="">
                            <tbody>
                            <tr>
                                @if(!empty($fields->realization_title))
                                    <td>
                                        <h2 id="LpgPH">{{$fields->realization_title}}</h2>
                                    </td>
                                @endif
                                @if(!empty($fields->realization_description))
                                    <td>
                                        <div id="XTr5Y" class="  margin-top-sm " style="">{!! $fields->realization_description !!}</div>
                                    </td>
                                @endif
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
                                @include('default.realization.home')
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
<div id="section_0Vg7m" class="section-item section-empty bg-white " style="">
    <div class="content container " style="">
        <div class="row ">
            <div id="column_XquUk" class="hc_column_cnt col-md-4" style="">
                <div class="row">
                    <div class="col-md-12 hc_title_tag_cnt">
                        @if(!empty($fields->header_company_address))
                            <h4 id="K5yKK" class=" text-color " style="">{{ $fields->header_company_address }}</h4>
                        @endif
                    </div>
                    <div class="col-md-12 hc_text_block_cnt">
                        <div id="KkkNZ" class=" no-margins text-s   " style="">{{getConstField('company_address')}}, {{getConstField('company_post_code')}} {{getConstField('company_city')}}</div>
                    </div>
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space m    ">
                    </div>
                    <div class="col-md-12 hc_title_tag_cnt">
                        @if(!empty($fields->header_working_hours))
                            <h4 id="3W0Ts" class=" text-color " style="">{{ $fields->header_working_hours }}</h4>
                        @endif
                    </div>
                    <div class="col-md-12 hc_text_block_cnt">
                        @if(!empty($fields->description_working_hours))
                            <div id="WGeZc" class="no-margins text-s" style="">{!! $fields->description_working_hours !!}</div>
                        @endif
                    </div>
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space m    ">
                    </div>
                    <div class="col-md-12 hc_title_tag_cnt">
                        @if(!empty($fields->header_email))
                            <h4 id="nXTg1" class=" text-color   " style="">{{ $fields->header_email }}</h4>
                        @endif
                    </div>
                    <div class="col-md-12 hc_text_block_cnt">
                        <div id="I9yMn" class=" no-margins text-s   " style=""><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a> </div>
                    </div>
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space m    ">
                    </div>
                    <div class="col-md-12 hc_title_tag_cnt">
                        @if(!empty($fields->header_phone))
                            <h4 id="8OHf0" class="text-color" style="">{{ $fields->header_phone }}</h4>
                        @endif
                    </div>
                    <div class="col-md-12 hc_text_block_cnt">
                        <div id="sU5l5" class="no-margins text-s" style=""><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></div>
                    </div>
                </div>
            </div>
            @php
                $cities = !empty($fields->cities_list)
                    ? array_map('trim', explode(',', strip_tags($fields->cities_list)))
                    : [];
                $chunks = array_chunk($cities, 9);
            @endphp

            @foreach($chunks as $chunk)
                <div id="column_{{ uniqid() }}" class="hc_column_cnt col-md-2" style="">
                    <div class="row">
                        <div class="col-md-12 hc_icon_list_simple_cnt">
                            <ul id="{{ uniqid() }}" class="ul-dots no-icons text-s text-left" style="list-style: initial">
                                @foreach($chunk as $city)
                                    @if(!empty($city))
                                        <li><i class="fa-li"></i> {{ $city }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach


            <div id="column_VYrKa" class="hc_column_cnt col-md-4  col-sm-12  " style="">
                <div class="row">
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space   visible-sm   ">
                    </div>
                    <div class="col-md-12 hc_title_tag_cnt">
                        @if(!empty($fields->header_about_us))
                            <h2 id="ZLRAt" class="   " style="">{{$fields->header_about_us}}</h2>
                        @endif
                    </div>
                    <div class="col-md-12 hc_text_block_cnt">
                        @if(!empty($fields->description_about_us))
                            <div id="Y8uC2" class="   " style="">{!! $fields->description_about_us !!}</div>
                        @endif
                    </div>
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space l    ">
                    </div>
                    <div class="col-md-12 hc_button_cnt">
                        <div id="oPsmA" class="button-cnt    " style="display: block; text-align:left">
                            <a class="btn btn-sm btn-icon  " href="{{route('about-us.show')}}">
                                <i class="fa-solid fa-arrow-pointer"></i> Więcej Informacji </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section_yBlEj " class="section-item section-two-blocks blocks-right  " data-parallax="scroll"
     data-image-src="{{asset('images/hd-5-1920x1080.jpg')}}" style="background-image: url('{{asset('images/hd-5-1920x1080.jpg')}}'); background-position: center; background-size: cover;background-attachment: fixed;">
    <div class="row ">
        <div class="col-md-6 ">
        </div>
        <div class="col-md-6">
            <div class="content">
                <div id="column_r6oKu" class="hc_column_cnt col-md-12   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            @if(!empty($fields->header_experience))
                                <h2 id="q737w" class="   " style="">{{$fields->header_experience}}</h2>
                            @endif
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            @if(!empty($fields->description_experience))
                            <div id="eyQdg" class="   " style="">{!! $fields->description_experience !!}</div>
                            @endif
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
                                                <i style="font-size: 30px;" class="fa-solid fa-gears"></i>
                                            </div>
                                            <div class="icon-box-cell">
                                                <b>
                                                    <label class="counter text-l" data-to="{{$fields->counter_years_market}}" data-separator="">0</label>
                                                </b>
                                                <p class="text-s"> {{$fields->counter_years_market_text}} </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="counter-box-icon icon-box  text-left   " style="">
                                            <div class="icon-box-cell">
                                                <i style="font-size: 30px;" class="fas fa-hard-hat"></i>
                                            </div>
                                            <div class="icon-box-cell">
                                                <b>
                                                    <label class="counter text-l" data-to="{{$fields->counter_employees}}" data-separator="">0</label>
                                                </b>
                                                <p class="text-s">{{ $fields->counter_employees_text }}</p>
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
<div id="section_YJtJg" class="section-item section-empty" style="">
    <div class="content container " style="">
        <div class="row ">
            <div id="column_MblQW" class="hc_column_cnt col-md-4  col-sm-12  " style="">
                <div class="row">
                    <div class="col-md-12 hc_progress_bar_cnt">
                        <div class="" style="">
                            @if(!empty($fields->header_counter_1))
                                <p class="progress-label">{{$fields->header_counter_1}}</p>
                            @endif
                            <div class="progress">
                                @if(!empty($fields->counter_value_1))
                                    <div class="progress-bar" data-progress="{{$fields->counter_value_1}}">
                    <span>
                        <span class="counter" data-to="{{$fields->counter_value_1}}">{{$fields->counter_value_1}}</span> %
                    </span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space m">
                    </div>
                    <div class="col-md-12 hc_progress_bar_cnt">
                        <div class="" style="">
                            @if(!empty($fields->header_counter_2))
                                <p class="progress-label">{{$fields->header_counter_2}}</p>
                            @endif
                            <div class="progress">
                                @if(!empty($fields->counter_value_2))
                                    <div class="progress-bar" data-progress="{{$fields->counter_value_2}}">
                    <span>
                        <span class="counter" data-to="{{$fields->counter_value_2}}">{{$fields->counter_value_2}}</span> %
                    </span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space m">
                    </div>
                    <div class="col-md-12 hc_progress_bar_cnt">
                        <div class="" style="">
                            @if(!empty($fields->header_counter_3))
                                <p class="progress-label">{{$fields->header_counter_3}}</p>
                            @endif
                            <div class="progress">
                                @if(!empty($fields->counter_value_3))
                                    <div class="progress-bar" data-progress="{{$fields->counter_value_3}}">
                    <span>
                        <span class="counter" data-to="{{$fields->counter_value_3}}">{{$fields->counter_value_3}}</span> %
                    </span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space m">
                    </div>
                    <div class="col-md-12 hc_progress_bar_cnt">
                        <div class="" style="">
                            @if(!empty($fields->header_counter_4))
                                <p class="progress-label">{{$fields->header_counter_4}}</p>
                            @endif
                            <div class="progress">
                                @if(!empty($fields->counter_value_4))
                                    <div class="progress-bar" data-progress="{{$fields->counter_value_4}}">
                    <span>
                        <span class="counter" data-to="{{$fields->counter_value_4}}">{{$fields->counter_value_4}}</span> %
                    </span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="column_whlBe" class="hc_column_cnt col-md-4 col-sm-12" style="">
                <div class="row">
                    <div class="col-md-12 hc_text_block_cnt">
                        @if(!empty($fields->mission_details))
                            <div id="5gWLD" class="" style="">{!! $fields->mission_details !!}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div id="column_iPrti" class="hc_column_cnt col-md-4  col-sm-12  " style="">
                <div class="row">
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space m  visible-sm   ">
                    </div>
                    <div class="col-md-12 hc_title_tag_cnt">
                        @if(!empty($fields->mission_vision_header))
                            <h2 id="6Ftaa" class="" style="">{{$fields->mission_vision_header}}</h2>
                        @endif
                    </div>
                    <div class="col-md-12 hc_text_block_cnt">
                        @if(!empty($fields->mission_vision_description))
                            <div id="4C986" class="" style="">{!! $fields->mission_vision_description !!}</div>
                        @endif
                    </div>
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space l    ">
                    </div>
                    <div class="col-md-12 hc_button_cnt">
                        <div id="LePaH" class="button-cnt    " style="display: block; text-align:left">
                            <a class="btn btn-sm btn-icon  " href="{{route('about-us.show')}}">
                                <i class="fas fa-hard-hat"></i>Dowiedz się więcej </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="Lz0Xr " class="section-item section-two-blocks   " data-bleed="0" data-parallax="scroll" data-image-src="{{asset('images/hd-8a.jpg')}}" style="background-image: url('{{asset('images/hd-8a.jpg')}}'); background-position: center; background-size: cover;background-attachment: fixed;">
    <div class="row ">
        <div class="col-md-6 ">
        </div>
        <div class="col-md-6">
            <div class="content">
                <div id="D7Pi9" class="hc_column_cnt col-md-12   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            @if(!empty($fields->client_relations_header))
                                <h2 id="iihzd" class="" style="">{{$fields->client_relations_header}}</h2>
                            @endif
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            @if(!empty($fields->client_relations_description))
                                <div id="TFiYl" class="" style="">{!! $fields->client_relations_description !!}</div>
                            @endif
                        </div>

                        <div class="col-md-12 hc_button_cnt">
                            <div id="YpNX5" class="button-cnt    " style="display: block; text-align:left">
                                <a class="btn-text btn-icon  " href="/">
                                    <i class="fa-solid fa-glasses"></i>Nasi Partnerzy </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div id="section_yIxXx" class="section-item section-bg-image   bg-white   " style="">
    <div class="content container " style="">
        <div class="row ">
            <div id="column_76Qhp" class="hc_column_cnt col-md-12   " style="">
                <div class="row">
                    <div class="col-md-12 hc_slider_cnt">
                        <div id="hqFc7" class="flexslider carousel png-over no-navs"
                             data-options="controlNav:false,directionNav:false,numItems:5,minWidth:100,itemMargin:60"
                             style="">

                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                @include('default.realization.category.home')
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
                                             src="{{asset('images/znak-cert_syst_zarz_male1.png')}}"
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
                            <i class="icon fa-regular fa-circle-question"></i>
                            @if(!empty($fields->questions_header))
                            <h3>{{$fields->questions_header}}</h3>
                            @endif
                            <p class="big-text "><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">Tel: {{getConstField('phone')}}</a><br>

                                <br>
                            </p> <a class="btn-text " href="{{route('contact.show')}}">Kontakt</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="column_BEJhz" class="hc_column_cnt col-md-4   " style="">
                <div class="row">
                    <div class="col-md-12 hc_content_box_cnt">
                        <div class="advs-box advs-box-top-icon  text-left  icon-color  " data-anima="scale-up"
                             data-trigger="hover" style="">
                            <i class="icon fa-regular fa-envelope"></i>
                            @if(!empty($fields->help_header))
                            <h3>{{$fields->help_header}}</h3>
                            @endif
                            <p class="big-text "><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a>

                                <br>

                                <br>
                            </p> <a class="btn-text " href="{{route('contact.show')}}">Kontakt</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="column_yoE9o" class="hc_column_cnt col-md-4   " style="">
                <div class="row">
                    <div class="col-md-12 hc_content_box_cnt">
                        <div class="advs-box advs-box-top-icon  text-left  icon-color  " data-anima="scale-up"
                             data-trigger="hover" style="">
                            <i class="icon fa-regular fa-calendar-days"></i>
                            @if(!empty($fields->work_hours_header))
                            <h3>{{$fields->work_hours_header}}</h3>
                            @endif
                                @if(!empty($fields->work_hours_description))
                            <p class="big-text ">{{$fields->work_hours_description}}</p>@endif <a
                                class="btn-text " href="{{route('contact.show')}}">Kontakt</a>
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

@endsection

