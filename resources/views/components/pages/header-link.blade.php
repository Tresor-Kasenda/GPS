@props([
    'name',
    'icon'
])
<li>
    <a {{ $attributes }}>
        <em class="icon ni ni-{{ $icon }}"></em>
        <span>{{ $name }}</span>
    </a>
</li>