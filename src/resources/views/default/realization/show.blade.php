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
                                <div class="grid-box row " data-lightbox-anima='fade-in'>
                                    <div class="grid-item col-md-6  ">
                                        <a class="img-box i-center  "
                                           href="https://ekokan.com.pl/wp-content/uploads/2021/11/rop1.jpg"
                                           data-anima='fade-in' data-trigger='hover' data-anima-out='hide'><i
                                                class='anima im-photo-2'></i><img decoding="async" alt=""
                                                                                  src="https://ekokan.com.pl/wp-content/uploads/2021/11/rop1.jpg" /></a>
                                    </div>
                                    <div class="grid-item col-md-6  ">
                                        <a class="img-box i-center  "
                                           href="https://ekokan.com.pl/wp-content/uploads/2021/11/rop2.jpg"
                                           data-anima='fade-in' data-trigger='hover' data-anima-out='hide'><i
                                                class='anima im-photo-2'></i><img decoding="async" alt=""
                                                                                  src="https://ekokan.com.pl/wp-content/uploads/2021/11/rop2.jpg" /></a>
                                    </div>
                                    <div class="grid-item col-md-6  ">
                                        <a class="img-box i-center  "
                                           href="https://ekokan.com.pl/wp-content/uploads/2021/11/rop3.jpg"
                                           data-anima='fade-in' data-trigger='hover' data-anima-out='hide'><i
                                                class='anima im-photo-2'></i><img decoding="async" alt=""
                                                                                  src="https://ekokan.com.pl/wp-content/uploads/2021/11/rop3.jpg" /></a>
                                    </div>
                                    <div class="grid-item col-md-6  ">
                                        <a class="img-box i-center  "
                                           href="https://ekokan.com.pl/wp-content/uploads/2021/11/rop4.jpg"
                                           data-anima='fade-in' data-trigger='hover' data-anima-out='hide'><i
                                                class='anima im-photo-2'></i><img decoding="async" alt=""
                                                                                  src="https://ekokan.com.pl/wp-content/uploads/2021/11/rop4.jpg" /></a>
                                    </div>
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
