<x-ui.block.sidebar>
    <x-ui.block.sidebar.separator-link :name="__('GESTION ENGAGEMENT')"/>

    <x-ui.block.sidebar.menu-link :title="__('Personne Physique')" icon="user">
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Pesonnes Physiques')"/>
        <x-ui.block.sidebar.link-sub :route="route('dashboard')" :name="__('Charges Sociales')"/>
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-qualifications')" :name="__('Etudes Faites')"/>
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-experience')"
                                     :name="__('Expérience Professionnelle')"/>
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

    <x-ui.block.sidebar.menu-link :title="__('Service')" icon="bookmark">
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Nouveau Service')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste de Services')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Grade')" icon="arrow-up">
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Nouveau Grade')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste de Grades')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Fonction')" icon="align-center">
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Nouvelle Fonction')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste de Fonction')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.separator-link :name="__('PARAMETRE')"/>

    <x-ui.block.sidebar.menu-link :title="__('Parametre')" icon="shield">
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Utilisateur')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste de Role')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Liste de Permission')"/>
        <x-ui.block.sidebar.link-sub :route="route('engagement.lists-hiring')" :name="__('Parametre')"/>
    </x-ui.block.sidebar.menu-link>

</x-ui.block.sidebar>