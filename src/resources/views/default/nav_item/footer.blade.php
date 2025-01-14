@if($items->count() > 0)
    @include('default.nav_item.footer_items', ['items' => $items])
@endif
