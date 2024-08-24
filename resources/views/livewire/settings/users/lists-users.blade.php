<div>
    <x-ui.content.block-head :title="__('Liste des utilisateurs')">
        <x-ui.block.button.link
            :route="route('settings.users.create')"
            :action="__('Ajoutez un utilisateur')"/>
    </x-ui.content.block-head>

    <x-ui.content.container>

        <x-ui.block.card class="mb-4 card-preview">
            <x-ui.table data-export-title="Exportez" data-auto-responsive="true">
                <thead>
                <x-ui.table.t-head class="nk-td-head">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input
                            wire:model="selected"
                            type="checkbox"
                            class="custom-control-input"
                            id="uid">
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
                @foreach($users as $person)
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
                            <span class="user-avatar sq md bg-info-dim">
                                <img
                                    src="{{ $person->picture }}"
                                    srcset="{{ $person->picture  }}"
                                    alt="{{ $person->username }}"
                                >
                            </span>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $person->name }} {{ $person->username }}
                                    <span class="currency"> {{ $person->firstname }}</span>
                                </span>
                            </div>
                            <div>
                                <span class="ucap fw-bold">{{ $person->gender }} </span>|
                                <span class="ucap fw-bold"> {{ $person->marital_status }} </span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $person->birthday }}</span>
                            </div>
                            <div>
                                <span class="ucap fw-bold">{{ $person->birthplace }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $person->address }}</span>
                            </div>
                            <div>
                                <span class="ucap fw-bold">{{ $person->phone_number }}</span>
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
                                                    wire:click="deletePerson({{ $person->id }})">
                                                <em class="icon ni ni-delete"></em>
                                                <span>Supprimer</span>
                                            </button>
                                        </li>
                                        <li class="divider"></li>
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
