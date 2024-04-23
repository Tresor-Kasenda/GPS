@props([
    'icon',
    'title',
    'route'
])
<li
        @class([
            'nk-men-item has-sub',
            'active current-page' => request()->is($route),
        ])
>
    <a href="#" class="nk-menu-link nk-menu-toggle">
        <span class="nk-menu-icon"><em class="icon ni ni-{{ $icon }}"></em></span>
        <span class="nk-menu-text">{{ $title }}</span>
    </a>

    <ul class="nk-menu-sub">
        {{ $slot }}
    </ul>
</li>