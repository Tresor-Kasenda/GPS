<x-ui.block.sidebar>
    <x-ui.block.sidebar.separator-link :name="__('GESTION ENGAGEMENT')"/>

    <x-ui.block.sidebar.menu-link :title="__('Personne Physique')" icon="user">
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-physic-person')" :name="__('Pesonnes Physiques')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Gestion Carriere')" icon="arrow-to-down">
        <x-ui.block.sidebar.link-sub :route="route('persons.lists-hirings')" :name="__('Engagement')"/>
        <x-ui.block.sidebar.link-sub :route="route('agent.agents-lists')" :name="__('Carriere Agent')"/>
        <x-ui.block.sidebar.link-sub :route="route('agent.lists-promotions')" :name="__('Promotion')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.separator-link :name="__('GESTION MOUVEMENT')"/>

    <x-ui.block.sidebar.menu-link :title="__('Mouvement Agent')" icon="shuffle">
        <x-ui.block.sidebar.link-sub :route="route('agent.affectations-lists')" :name="__('Affectation')"/>
        <x-ui.block.sidebar.link-sub :route="route('agent.lists-transfers')" :name="__('Transfert')"/>
        <x-ui.block.sidebar.link-sub :route="route('agent.mobility-lists')" :name="__('Mobilité')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Cessassion Service')" icon="stop">
        <x-ui.block.sidebar.link-sub :route="route('agent.lists-end-carriers')" :name="__('Mise à la retraite')"/>
        <x-ui.block.sidebar.link-sub :route="route('agent.lists-end-deceased')" :name="__('Décès')"/>
        <x-ui.block.sidebar.link-sub :route="route('agent.lists-end-designation')" :name="__('Demission')"/>
        <x-ui.block.sidebar.link-sub :route="route('agent.lists-end-revoked')" :name="__('Révocation')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.separator-link :name="__('GESTION ENTITE')"/>

    <x-ui.block.sidebar.menu-link :title="__('Service')" icon="bookmark">
        <x-ui.block.sidebar.link-sub :route="route('entity.create-service')" :name="__('Nouveu Service')"/>
        <x-ui.block.sidebar.link-sub :route="route('entity.services-lists')" :name="__('Liste des Servicecs')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Grade')" icon="block-over">
        <x-ui.block.sidebar.link-sub :route="route('entity.lists-grades')" :name="__('Liste de Grades')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.menu-link :title="__('Fonction')" icon="bookmark">
        <x-ui.block.sidebar.link-sub :route="route('entity.create-function')" :name="__('Nouvelle fonction')"/>
        <x-ui.block.sidebar.link-sub :route="route('entity.functions-lists')" :name="__('Liste des fonctions')"/>
    </x-ui.block.sidebar.menu-link>

    <x-ui.block.sidebar.separator-link :name="__('PARAMETRE')"/>

    <x-ui.block.sidebar.menu-link :title="__('Parametre')" icon="shield">
        <x-ui.block.sidebar.link-sub :route="route('settings.users.lists')" :name="__('Utilisateur')"/>
    </x-ui.block.sidebar.menu-link>

</x-ui.block.sidebar>
