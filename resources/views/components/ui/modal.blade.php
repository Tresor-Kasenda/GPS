@props([
    'dropdown_name' => null
])
<div class="modal fade" id="{{ $dropdown_name }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>