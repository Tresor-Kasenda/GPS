@props([
    'icon',
    'href',
    'action'
])
<li>
    <a href="{{ $href }}">
        <em class="icon ni ni-{{ $icon }}"></em>
        <span>{{ $action ?? $slot }}</span>
    </a>
</li>