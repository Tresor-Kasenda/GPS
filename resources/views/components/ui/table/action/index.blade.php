<div {{ $attributes->merge(['class' => 'drodown']) }}>
    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
       data-bs-toggle="dropdown">
        <em class="icon ni ni-more-h"></em>
    </a>
    <div class="dropdown-menu dropdown-menu-end">
        <ul class="link-list-opt no-bdr">
            {{ $slot }}
        </ul>
    </div>
</div>