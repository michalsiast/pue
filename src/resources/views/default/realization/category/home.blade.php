<ul class="slides">
    @foreach($items as $item)
        <li>
            <a id="V1jes" class="img-box     scroll-to " target="_blank" href="{{$item->title}}"
               data-anima-out="hide" style="">
                <span>
                    <img decoding="async" alt=""
                         src="{{ renderImage($item->galleryCover(), 370, 103, 'cover') }}"
                         data-width="374" data-height="103" draggable="false">
                </span>
            </a>
        </li>
    @endforeach
</ul>
