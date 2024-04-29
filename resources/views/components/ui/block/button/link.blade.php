@props([
    'route',
    'action',
    'icon' => 'plus'
])
<a href="{{ $route }}" class="btn btn-primary btn-dim">
    <em class="icon ni ni-{{  $icon }}"></em>
    <span>{{ $action }}</span>
</a>