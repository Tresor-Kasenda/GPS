@props([
    'title',
    'description' => null
])
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">{{ $title }}</h3>
            @if($description)
                <div class="nk-block-des text-soft">
                    <p>{{ $description }}</p>
                </div>
            @endif
        </div>
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                    <em class="icon ni ni-menu-alt-r"></em>
                </a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        {{ $slot }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>