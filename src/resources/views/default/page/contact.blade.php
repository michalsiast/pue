@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])
    <div id="section_5ZtkF" class="section-item section-empty  no-paddings   " style="margin-top: 15px;">
        <div class="content " style="">
            <div class="row ">
                <div id="column_zymt7" class="hc_column_cnt col-md-12   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_google_map_cnt">
                            <div class="google-map -map" ><iframe src="{{getConstField('google_map_iframe')}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="vrc3Y" class="section-item section-empty    " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="Pj4i7" class="hc_column_cnt col-md-6  text-left col-sm-12  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            @if(!empty($fields->contact_header))
                                <h2 id="Wft2S" class="" style="">{{$fields->contact_header}}</h2>
                            @endif
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            @if(!empty($fields->contact_description))
                                <div id="NAWNB" class="" style="">{!! $fields->contact_description !!}</div>
                            @endif
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m    " />
                        </div>
                        <div class="col-md-12 hc_contact_form_cnt">
                            @include('default.form.contact_form')

                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space     " style=" height: 10px" />
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="XjayW" class='' style=''>{!! getConstField('contact_form_rule') !!}</div>
                        </div>
                    </div>
                </div>
                <div id="MrTpI" class="hc_column_cnt col-md-6  boxed-inverse col-sm-12  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_text_list_cnt">
                            <ul class="list-texts     list-texts-justified" style="">
                                <li><b>Nazwa Firmy:</b> <span> {{getConstField('company_name')}}</span></li>
                                <li><b>Adres:</b> <span>{{getConstField('company_address')}}, {{getConstField('company_post_code')}} {{getConstField('company_city')}}</span></li>
                                <li><b>Telefon:</b> <span><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></span></li>
                                <li><b>Email:</b> <span><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></span></li>
                            </ul>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space xs    " />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
