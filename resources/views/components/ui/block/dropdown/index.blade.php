@props([
'dropdown_name'
])
<li {{ $attributes }}>
    <div class="drodown">
        <a href="#{{ $dropdown_name }}" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown">
            <em class="icon ni ni-plus"></em>
        </a>
        {{ $slot }}
    </div>
</li>
