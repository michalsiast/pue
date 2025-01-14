@foreach($items as $item)
    <li>
        <div id="X07sw" class="adv-img-double-content">
            <div class="img-box adv-img adv-img-half-content" style="">
                <img decoding="async" alt="" style="object-fit: contain;max-height: 190px;" src="{{ renderImage($item->galleryCover(), 285, 200, 'cover') }}">
                <div class="caption">
                    <h3>{{$item->lead}}</h3>
                    {!! $item->text !!}
                </div>
            </div>
            <div class="caption-bottom">
                <h2>{{$item->title}}</h2>
                <p>{{ $loop->index + 1 }}</p>
            </div>
        </div>
    </li>
@endforeach
