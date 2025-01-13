<ul class="slides">
    @foreach($items as $item)
        <li>
            <div class="advs-box advs-box-multiple     boxed-inverse"
                 data-anima="scale-up" data-trigger="hover" style="">
                <a class="img-box">
                    <img decoding="async" alt="" class="anima"
                         src="{{ renderImage($item->galleryCover(), 350, 250, 'cover') }}"
                         draggable="false">
                </a>
                <div class="circle" style="background-image: url('{{asset('images/particles-bg.gif')}}')">
                    @if(optional($item->gallery)->items->contains('type', 'support'))
                        @php
                            $supportImage = $item->gallery->items->firstWhere('type', 'support');
                        @endphp

                        @if($supportImage)
                            <img style="width: 35px" src="{{ renderImage($supportImage->url, 35, 35, 'support') }}" />
                        @endif
                    @endif
                </div>
                <div class="advs-box-content">
                    <h3>{{$item->title}}</h3>
                    {!! $item->lead !!}
                    <a class="btn-text "
                            href="{{route('realization.show.'.$item->id)}}">więcej
                        informacji</a>
                </div>
            </div>
        </li>
    @endforeach
</ul>
