<div class="footer-menu">
    @if($items->count() > 0)
        @foreach($items as $item)
            @php
                $isActive = false;
                $url = null;
                $target = '_self';
                if($item->page) {
                    $url = route($item->page->type);
                } else {
                    $url = url()->to($item->url);
                }
                if($item->target) {
                    $target = $item->target;
                }
                $isActive = request()->fullUrlIs($url);
            @endphp
                <a href="{{ $url }}" target="{{ $target }}">{{ $item->label }}</a>
        @endforeach
    @endif
</div>

