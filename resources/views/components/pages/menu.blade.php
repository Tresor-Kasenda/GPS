<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-inner" data-simplebar>
        <ul class="nk-menu nk-menu-md">
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Accueil</h6>
            </li>
            <x-pages.menu.menu-link-sub
                    icon="account-setting"
                    title="Gestion Engagement"
                    :route="route('entities-lists')"
            >
                <x-pages.menu.menu-link
                        icon=""
                        name="Personne"
                        :route="route('persons')"
                />

                <x-pages.menu.menu-link
                        icon=""
                        name="Agent (Engagement)"
                        :route="route('hirings')"
                />

                <x-pages.menu.menu-link
                        icon=""
                        name="Attribution Grade"
                        :route="route('assignments')"
                />

                <x-pages.menu.menu-link
                        icon=""
                        name="Admission Sous Status"
                        :route="route('admissions')"
                />

            </x-pages.menu.menu-link-sub>

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

                <x-pages.menu.menu-link
                        icon=""
                        name="Bureau"
                        :route="route('offices')"
                />
                <x-pages.menu.menu-link
                        icon=""
                        name="Grades"
                        :route="route('grades')"
                />
                <x-pages.menu.menu-link
                        icon=""
                        name="Fonction"
                        :route="route('positions')"
                />
            </x-pages.menu.menu-link-sub>
        </ul>
    </div>
</div>