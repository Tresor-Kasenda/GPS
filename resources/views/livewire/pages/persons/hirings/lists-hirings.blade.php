<div>
    <x-ui.content.block-head :title="__('Liste de Engagement')"/>

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
                <x-ui.table.t-head class="tb-col-md" :title="__('Nom, Prenom et Sexe')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Date Engagement et Retraite')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Matricule et Etat de Carriere')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($hirings as $hiring)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $hiring->id }}">
                        <x-ui.table.td class="nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input
                                        type="checkbox"
                                        wire:model="selected"
                                        class="custom-control-input"
                                        id="uid3-{{ $hiring->id }}"
                                        value="{{ $hiring->id }}"
                                >
                                <label class="custom-control-label" for="uid3-{{ $hiring->id }}"></label>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td>
                            <div class="user-card">
                                <div class="user-avatar">
                                    <img
                                            src="{{ asset('storage/'.$hiring->person->profile_picture) }}"
                                            alt="{{ $hiring->person->username }}"
                                            srcset="{{ asset('storage/'.$hiring->person->profile_picture) }}"
                                    >
                                </div>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $hiring->person->name }} {{ $hiring->person->firstname }}
                                </span>
                                <div>
                                    <span style="font-size: smaller; font-style: italic;">{{ $hiring->person->gender }}</span>
                                </div>
                            </div>

                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $hiring->dateEngagement() }}</span>
                            </div>
                            <div>
                                <span style="font-size: smaller; font-style: italic;">
                                    {{ $hiring->getRetirementAttribute() }}
                                </span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $hiring->matriculate }}</span>
                            </div>
                            <div>
                                <span style="font-size: smaller; font-style: italic;">{{ $hiring->carriers_state }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <x-ui.table.action>
                                        <x-ui.table.action.link-down
                                                icon="eye"
                                                :href="route('persons.show-physic-person', $hiring->id)"
                                                :action="__('Voir fiche')"
                                        />
                                        <x-ui.table.action.link-down
                                                icon="edit"
                                                :href="route('engagement.edit-hiring', $hiring->id)"
                                                :action="__('Modifier')"
                                        />
                                        <li>
                                            <button type="button" class="btn"
                                                    wire:click="$wire.deletePerson({{ $hiring->id }})">
                                                <em class="icon ni ni-delete"></em>
                                                <span>Supprimer</span>
                                            </button>
                                        </li>
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
