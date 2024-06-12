<div>
    <x-ui.content.block-head :title="__('Liste des personnels')">
        <x-ui.block.button.link :route="route('persons.add-physic-person')" :action="__('Ajoutez une Personne')"/>
    </x-ui.content.block-head>

    <x-ui.content.container>

        <x-ui.block.card class="mb-4 card-preview">
            <x-ui.table data-export-title="Exportez" data-auto-responsive="true">
                <thead>
                <x-ui.table.t-head class="nk-td-head">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid">
                        <label class="custom-control-label" for="uid"></label>
                    </div>
                </x-ui.table.t-head>
                <x-ui.table.t-head class="tb-col-md" :title="__('Profile')"/>
                <x-ui.table.t-head class="tb-col-md" :title="__('Nom, Sexe et Etat-Civil')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Naissance')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Adresse et Contact')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($persons as $person)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $person->id }}">
                        <x-ui.table.td class="nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input
                                        type="checkbox"
                                        wire:model="selected"
                                        class="custom-control-input"
                                        id="uid3-{{ $person->id }}"
                                        value="{{ $person->id }}"
                                >
                                <label class="custom-control-label" for="uid3-{{ $person->id }}"></label>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td>
                            <div class="user-card">
                                <div class="user-avatar">
                                    <img
                                            src="{{ asset('storage/'.$person->profile_picture) }}"
                                            alt="{{ $person->username }}"
                                            srcset="{{ asset('storage/'.$person->profile_picture) }}"
                                            class="thumb"
                                    >
                                </div>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $person->name }} {{ $person->username }}
                                    <span class="currency"> {{ $person->firstname }}</span>
                                </span>
                            </div>
                            <div>
                                <span style="font-size: smaller;">{{ $person->gender }} </span>|
                                <span style="font-size: smaller;"> {{ $person->marital_status }} </span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $person->birthday() }}</span>
                            </div>
                            <div>
                                <span style="font-size: smaller; font-style: italic;">{{ $person->birthplace }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $person->address }}</span>
                            </div>
                            <div>
                                <span style="font-size: smaller; font-style: italic;">{{ $person->phone_number }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <x-ui.table.action>
                                        <x-ui.table.action.link-down
                                                icon="eye"
                                                :href="route('persons.show-physic-person', $person->id)"
                                                :action="__('Voir fiche')"
                                        />
                                        <x-ui.table.action.link-down
                                                icon="edit"
                                                :href="route('persons.edit-physic-person', $person->id)"
                                                :action="__('Modifier')"
                                        />
                                        <li>
                                            <button type="button" class="btn"
                                                    wire:click="$wire.deletePerson({{ $person->id }})">
                                                <em class="icon ni ni-delete"></em>
                                                <span>Supprimer</span>
                                            </button>
                                        </li>
                                        <li class="divider"></li>
                                        <x-ui.table.action.link-down
                                                icon="users"
                                                :href="route('persons.edit-physic-person', $person->id)"
                                                :action="__('Charge Sociale')"
                                        />
                                        <x-ui.table.action.link-down
                                                icon="award"
                                                :href="route('persons.create-qualifications', $person->id)"
                                                :action="__('Etudes Faites')"
                                        />
                                        <x-ui.table.action.link-down
                                                icon="briefcase"
                                                :href="route('persons.create-experience', $person->id)"
                                                :action="__('Expérience Professionnelle')"
                                        />
                                        <x-ui.table.action.link-down
                                                icon="user-add"
                                                :href="route('persons.hiring-physic-person', $person->id)"
                                                :action="__('Engagement')"
                                        />
                                    </x-ui.table.action>
                                </li>
                            </ul>
                        </x-ui.table.td>
                    </x-ui.table.tr>
                @endforeach
                </tbody>
            </x-ui.table>
        </x-ui.block.card>

    </x-ui.content.container>
</div>
