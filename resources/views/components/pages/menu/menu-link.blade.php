@props([
    'icon',
    'name',
    'route'
])
<li class="nk-menu-item">
    <a href="{{ $route }}"
            @class([
                'nk-menu-link',
                'active current-page' => request()->is($route)
            ])
    >
        <span class="nk-menu-icon"><em class="icon ni ni-{{ $icon }}"></em></span>
        <span class="nk-menu-text">{{ $name }}</span>
    </a>
</li>