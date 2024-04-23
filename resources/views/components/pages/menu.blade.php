<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-inner" data-simplebar>
        <ul class="nk-menu nk-menu-md">
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Accueil</h6>
            </li>
            <x-pages.menu.menu-link-sub icon="menu" title="Gestion Entites" :route="route('entities-lists')">
                <x-pages.menu.menu-link
                        icon=""
                        name="Direction"
                        :route="route('directions')"
                />

                <x-pages.menu.menu-link
                        icon=""
                        name="Division"
                        :route="route('divisions')"
                />
            </x-pages.menu.menu-link-sub>
        </ul>
    </div>
</div>