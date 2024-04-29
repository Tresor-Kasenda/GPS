<x-ui.block.sidebar>
    <x-ui.block.sidebar.separator-link :name="__('GESTION ENGAGEMENT')"/>

    <x-ui.block.sidebar.menu-link :title="__('Personne Physique')" icon="user">
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Pesonnes Physiques')"/>
        <x-ui.block.sidebar.link-sub :route="route('dashboard')" :name="__('Charges Sociales')"/>
        <x-ui.block.sidebar.link-sub :route="route('dashboard')" :name="__('Etudes Faites')"/>
        <x-ui.block.sidebar.link-sub :route="route('dashboard')" :name="__('Expérience Professionnelle')"/>
    </x-ui.block.sidebar.menu-link>

</x-ui.block.sidebar>