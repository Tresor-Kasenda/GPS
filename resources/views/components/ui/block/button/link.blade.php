@props([
    'route',
    'action'
])
<a href="{{ $route }}" class="btn btn-primary btn-dim">
    <em class="icon ni ni-plus"></em>
    <span>{{ $action }}</span>
</a>