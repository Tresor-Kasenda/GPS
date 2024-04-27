@props([
    'route',
    'name'
])
<li
        @class([
            'nk-menu-item',
            'active current-page' => request()->is($route)
        ])
>
    <a href="{{ $route }}" class="nk-menu-link" wire:navigate>
        <span class="nk-menu-text">{{ $name }}</span>
    </a>
</li>