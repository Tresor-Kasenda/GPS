@props([ 'route', 'icon', 'name'])
<li>
    <a href="{{ $route }}">
        <em class="icon ni ni-{{ $icon }}"></em>
        <span>{{ $name }}</span>
    </a>
</li>
