@props(['title','icon'])
<li class="nk-menu-item has-sub">
    <a href="#" class="nk-menu-link nk-menu-toggle">
        <span class="nk-menu-icon"><em class="icon ni ni-{{ $icon }}"></em></span>
        <span class="nk-menu-text">{{ $title ?? $slot }}</span>
    </a>
    <ul class="nk-menu-sub">
        {{ $slot }}
    </ul>
</li>