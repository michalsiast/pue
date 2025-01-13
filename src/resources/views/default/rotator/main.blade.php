<div id="section_5ZtkF" class="section-item section-slider  white  no-padding-bottom " style="" data-sub-height="">
    <div class="flexslider slider" data-options="animation:fade">
        <ul class="slides">
            @foreach($rotator->gallery->items as $item)
                <li><img decoding="async" alt="slide" src="{{renderImage($item->url, 1920, 700, `fit`)}}" />
                </li>@endforeach
        </ul>
    </div>
    <div class="overlaybox">
        <div class="content " style="">
            <div class="row ">
                <div id="column_6kou3" class="hc_column_cnt col-md-12   " style="">
                    <div class="row">
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space   hidden-sm   " />
                        </div>
                        <div class="col-md-12 hc_space_cnt">
                            <hr class="space     " />
                        </div>
                        <div class="col-md-12 hc_slider_cnt">
                            <div id="CQKOO" class="flexslider slider    " data-options="animationSpeed:1000" style="">
                                <ul class="slides">
                                    @foreach($rotator->gallery->items as $item)
                                        <li>
                                            <div id="column_M7XK0" class="hc_column_cnt col-md-12  vertical-row  " style="" >
                                                <div class="row"><div id="mYmYC" class="hc_column_cnt col-md-6  text-left-sm  " style="" >
                                                        <div class="row"><div class="col-md-12 hc_title_tag_cnt"><h1 id="TcAd2" class='   ' style=''>{{$item->name}}</h1></div><div class="col-md-12 hc_text_block_cnt"><div id="CJsKT" class=' text-l   ' style=''>{!! $item->text !!}</div></div></div></div>
                                                    <div id="WGCi3" class="hc_column_cnt col-md-6  text-right text-left-sm  " style="" >
                                                        <div class="row"><div class="col-md-12 hc_space_cnt"><hr class="space   visible-sm   "  />
                                                            </div></div></div>
                                                </div></div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
