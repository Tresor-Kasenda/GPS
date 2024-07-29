@props([
    'type',
    'message'
])
<div class="alert alert-icon alert-{{ $type }}" role="alert">
    <em class="icon ni ni-alert-circle"></em>
    <strong>Notification</strong>. {{ $message }}
</div>
