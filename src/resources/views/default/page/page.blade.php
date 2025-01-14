@extends('default.layout')
@section('content')
    <div class="header-base  white  bg-cover no-subtitle" style="background-image: url('{{asset('images/spawanie_2.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-base text-left">
                        <h1>{{$page->name}}</h1>
                        <p>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="section_5ZtkF" class="section-item section-empty   bg-white " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_qDtcQ" class="hc_column_cnt col-md-12  col-sm-12  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="5VYy8" class='   ' style=''>
                                {!! $fields->text1 !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
