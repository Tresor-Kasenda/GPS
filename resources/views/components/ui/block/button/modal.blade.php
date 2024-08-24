@props([
    'button_name',
    'modal_name'
])
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $modal_name }}">
    {{ $button_name }}
</button>
