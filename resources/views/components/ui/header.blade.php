<x-ui.block.header name="{{  __('Logiciel de gestion du personnel....................') }}">
    <x-ui.block.header.header-dropdown>
        <x-ui.block.header.header-link
                :route="route('dashboard')"
                icon="user-alt"
                :name="__('Profile')"
        />
        <x-ui.block.header.header-link
                :route="route('dashboard')"
                icon="setting-alt"
                :name="__('Statistique')"
        />
        <x-ui.block.header.header-link
                :route="route('dashboard')"
                icon="activity-alt"
                :name="__('Statistique')"
        />
    </x-ui.block.header.header-dropdown>
    <x-ui.block.header.header-dropdown>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                <em class="icon ni ni-signout"></em>
                <span>{{ __('Se déconnecter') }}</span>
            </a>
        </form>
    </x-ui.block.header.header-dropdown>
</x-ui.block.header>