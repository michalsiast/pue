@extends('default.layout')
@section('content')
    <div class="header-title overlay-container  white ken-burn" data-parallax="scroll" data-natural-height="800"
         data-natural-width="1920" data-position="top"
         data-image-src="{{asset('images/wide-1-1920x800-1.jpg')}}" style="background-image: url('{{asset('images/wide-1-1920x800-1-2.jpg')}}')" data-sub-height="">
        <div class="overlay-content overlaybox">
            <div class="container">
                <div class="title-base ">
                    <hr class="anima" />
                    <h1>{{$page->name}}</h1>
                    {!! $fields->text1 !!}
                </div>
            </div>
        </div>
    </div>
    <div id="section_6dPWE" class="section-item section-empty    " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_OMPVM" class="hc_column_cnt col-md-12   " style="">
                    <div class="row">
                        @if(!empty($fields->heading))
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h2 id="uqZ2T" class='   ' style=''>{{$fields->heading}}</h2>
                            </div>
                        @endif
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space l    " />
                        </div>
                        @php
                            $chunks = $items->chunk(3);
                        @endphp

                        @foreach($chunks as $chunk)
                            <div class="col-md-12 hc_slider_cnt">
                                <div id="YCXmh" class="flexslider carousel outer-navs" data-options="minWidth:200,itemMargin:30" style="">
                                    <ul class="slides">
                                        @foreach($chunk as $item)
                                            <li>
                                                <div class="advs-box advs-box-top-icon-img text-left boxed-inverse extra-content-cnt" style="">
                                                    <a class="img-box img-scale-up" href="{{route('offer_category.show.'.$item->id)}}">
                                <span>
                                    <img decoding="async" alt="" src="{{renderImage($item->galleryCover(), 356, 240, 'fit')}}" />
                                </span>
                                                    </a>
                                                    <div class="advs-box-content">
                                                        <h3>{{$item->title}}</h3>
                                                        <span class="extra-content">Lokalizacja</span>
                                                        {!! $item->lead !!}
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_TSKuK" class="section-item section-empty   bg-white " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_XTiJ6" class="hc_column_cnt col-md-3  col-sm-12  " style="">
                    <div class="row">
                        @if(!empty($fields->heading))
                            <div class="col-md-12 hc_title_tag_cnt">
                                <h2 id="PikYy" class='' style=''>{{$fields->contact_heading}}</h2>
                            </div>
                        @endif
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m    " />
                        </div>
                        <div class="col-md-12 hc_icon_list_simple_cnt">
                            <ul id="dlF1C" class="ul-dots no-icons  text-left" style=" list-style: initial">
                                <li><i class="fa-li "></i> {{getConstField('company_name')}}</li>
                                <li><i class="fa-li "></i> {{getConstField('company_address')}}, {{getConstField('company_post_code')}} {{getConstField('company_city')}}</li>
                                <li><i class="fa-li "></i> <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></li>
                                <li><i class="fa-li "></i> <a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></li>
                                <li><i class="fa-li "></i> {{getConstField('company_nip')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="column_En1tQ" class="hc_column_cnt col-md-9  col-sm-12  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_contact_form_cnt">
                            @include('default.form.contact_form2')
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space" style=" height: 10px" />
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="5ZtkF" class='   ' style=''>{!! getConstField('contact_form_rule') !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
