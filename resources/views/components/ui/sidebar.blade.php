<x-ui.block.sidebar>
    <x-ui.block.sidebar.separator-link :name="__('GESTION ENGAGEMENT')"/>

    <x-ui.block.sidebar.menu-link :title="__('Personne Physique')" icon="user">
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Pesonnes Physiques')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.links
        :route="route('persons.lists-physic-person')"
        icon="swap-v"
        :title="__('Agents')"
    />

    <x-ui.block.sidebar.separator-link :name="__('GESTION MOUVEMENT')"/>

    <x-ui.block.sidebar.menu-link :title="__('Mouvement Agent')" icon="shuffle">
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Affectation')"/>
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Transfert')"/>
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Mobilité')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Cessassion Service')" icon="stop">
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Mise à la retraite')"/>
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Décès')"/>
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Demission')"/>
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Révocation')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.separator-link :name="__('GESTION ENTITE')"/>

    <x-ui.block.sidebar.menu-link :title="__('Service')" icon="bookmark">
        <x-ui.block.sidebar.link-sub :route="route('entity.create-service')" :name="__('Nouveu Service')"/>
        <x-ui.block.sidebar.link-sub :route="route('entity.services-lists')" :name="__('Liste des Servicecs')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Grade')" icon="block-over">
        <x-ui.block.sidebar.link-sub :route="route('entity.lists-grades')" :name="__('Liste de Grades')"/>
        <x-ui.block.sidebar.link-sub :route="route('entity.create-grades')" :name="__('Nouveau Grade')"/>
    </x-ui.block.sidebar.menu-link>


    <x-ui.block.sidebar.separator-link :name="__('PARAMETRE')"/>

    <x-ui.block.sidebar.menu-link :title="__('Parametre')" icon="shield">
        <x-ui.block.sidebar.link-sub :route="route('settings.users.lists')" :name="__('Utilisateur')"/>
        <x-ui.block.sidebar.link-sub :route="route('settings.index')" :name="__('Parametre')"/>
    </x-ui.block.sidebar.menu-link>

</x-ui.block.sidebar>
