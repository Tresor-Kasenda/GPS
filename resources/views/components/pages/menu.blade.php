<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-inner" data-simplebar>
        <ul class="nk-menu nk-menu-md">
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Accueil</h6>
            </li>
            <x-pages.menu.menu-link
                    icon="speed"
                    name="User"
                    :route="route('dashboard')"
            />
        </ul>
    </div>
</div>