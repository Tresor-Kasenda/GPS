@props([
    'name',
    'icon'
])
<li>
    <a {{ $attributes }} wire:navigate>
        <em class="icon ni ni-{{ $icon }}"></em>
        <span>{{ $name }}</span>
    </a>
</li>