@props([
    'title',
    'route'
])
<li
        @class([
            'nk-menu-item',
            'active current-page' => request()->is($route)
        ])
>
    <a href="{{ $route }}" class="nk-menu-link" title="{{ $title }}">
        {{ $slot }}
    </a>
</li>