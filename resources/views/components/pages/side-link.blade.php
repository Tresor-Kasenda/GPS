@props([
    'title',
    'route',
    'icon'
])
<li
        @class([
            'nk-menu-item',
            'active current-page' => request()->is($route)
        ])
>
    <a href="{{ $route }}" class="nk-menu-link" title="{{ $title }}">
        <span class="nk-menu-icon"><em class="icon ni ni-{{ $icon }}"></em></span>
    </a>
</li>
