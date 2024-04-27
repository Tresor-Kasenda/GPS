@props([
    'route',
    'action'
])
<a href="{{ $route }}" class="btn btn-success btn-dim">
    <em class="icon ni ni-plus"></em>
    <span>{{ $action }}</span>
</a>