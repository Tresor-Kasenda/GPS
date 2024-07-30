@props([
    'route',
    'icon',
    'title'
])
<li class="nk-menu-item">
    <a href="{{ $route }}" class="nk-menu-link">
        <span class="nk-menu-icon">
            <em class="icon ni ni-{{ $icon }}"></em>
        </span>
        <span class="nk-menu-text">{{ $title }}</span>
    </a>
</li>
