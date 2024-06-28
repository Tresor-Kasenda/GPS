<x-ui.block.sidebar>
    <x-ui.block.sidebar.separator-link :name="__('GESTION ENGAGEMENT')"/>

    <x-ui.block.sidebar.menu-link :title="__('Personne Physique')" icon="user">
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Pesonnes Physiques')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Engagement')" icon="user-list">
        <x-ui.block.sidebar.link-sub :route="route('engagement.create-hiring')" :name="__('Nouvelle Engagements')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste des Engagements')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.separator-link :name="__('GESTION MOUVEMENT')"/>

    <x-ui.block.sidebar.menu-link :title="__('Mouvement Agent')" icon="shuffle">
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Affectation')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Transfert')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Mobilité')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Cessassion Service')" icon="stop">
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Mise à la retraite')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Décès')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Demission')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Révocation')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.separator-link :name="__('GESTION ENTITE')"/>

    <x-ui.block.sidebar.menu-link :title="__('Direction')" icon="bookmark">
        <x-ui.block.sidebar.link-sub :route="route('entity.create-direction')" :name="__('Nouvelle Direction')"/>
        <x-ui.block.sidebar.link-sub :route="route('entity.lists-direction')" :name="__('Liste de Directions')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Division')" icon="bookmark">
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Nouvelle Division')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste de Divisions')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Bureau')" icon="arrow-up">
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Nouveau Bureau')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste de Bureaux')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Grade')" icon="block-over">
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Nouveau Grade')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste de Grades')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Fonction')" icon="align-center">
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Nouvelle Fonction')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste de Fonctions')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.separator-link :name="__('PARAMETRE')"/>

    <x-ui.block.sidebar.menu-link :title="__('Parametre')" icon="shield">
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Utilisateur')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste de Role')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste de Permission')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Parametre')"/>
    </x-ui.block.sidebar.menu-link>

</x-ui.block.sidebar>
