<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <div class="nk-menu-trigger">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu">
                    <em class="icon ni ni-arrow-left"></em>
                </a>
                <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu">
                    <em class="icon ni ni-menu"></em>
                </a>
            </div>
        </div>
        <x-ui.block.logo/>
    </div>

    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    {{ $slot }}
                </ul>
            </div>
        </div>
    </div>
</div>