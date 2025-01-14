@extends('default.layout')
@section('content')

    <div class="header-base  white  bg-cover"
         style="background-image: url('{{asset('images/spawanie_2.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-base text-left">
                        <h1>{{$item->title}}</h1>
                        {!! $item->lead !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="section_5ZtkF" class="section-item section-empty   bg-white " style="">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_B0jW1" class="hc_column_cnt col-md-8  col-sm-12  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_grid_list_cnt">
                            <div class="grid-list     gallery" style="">
                                <div class="grid-box row" data-lightbox-anima='fade-in'>
                                    @foreach($item->gallery->items as $gallery)
                                        @if($gallery->type === 'gallery')
                                            <div class="grid-item col-md-6  ">
                                                <a class="img-box i-center  " href="{{renderImage($gallery->url, 1000, 800, 'resize')}}"
                                                   data-anima='fade-in' data-trigger='hover' data-anima-out='hide'><i class="anima fa-regular fa-image"></i><img decoding="async" alt="" src="{{renderImage($gallery->url, 355, 240, 'fit')}}" /></a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="column_qDtcQ" class="hc_column_cnt col-md-4  col-sm-12  " style="">
                    <div class="row">
                        <div class="col-md-12 hc_title_tag_cnt">
                            <h2 id="MC128" class='   ' style=''>{{$item->title}}</h2>
                        </div>
                        <div class="col-md-12 hc_text_block_cnt">
                            <div id="5VYy8" class='   ' style=''>{!! $item->text !!}</div>
                        </div>
                        <div class="col-md-12 hc_separator_cnt">
                            <hr class="default    " />
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space m    " />
                        </div>
                        <div class="col-md-12 hc_text_list_cnt">
                            <ul class="list-texts     " style="">
                            </ul>
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space xs    " />
                        </div>
                        <div class="col-md-12 hc_social_share_buttons_cnt">
                            <div class="text-left">
                                <div class="btn-group social-group  social-colors">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="column_CmT2w" class="hc_column_cnt col-md-12   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space     " style=" height: 5px" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts.body.bottom')
        <script>
            var lightbox = $('.gallery a').simpleLightbox({});
        </script>
    @endpush
@endsection
