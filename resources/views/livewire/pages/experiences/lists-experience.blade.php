<div>
    <x-ui.content.block-head :title="__('Experience Professionnelle')"/>

    <x-ui.content.container>

        <x-ui.block.card class="mb-4 card-preview">
            <x-ui.table>
                <thead>
                <x-ui.table.t-head class="nk-td-head">
                    <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid">
                        <label class="custom-control-label" for="uid"></label>
                    </div>
                </x-ui.table.t-head>
                <x-ui.table.t-head class="tb-col-md" :title="__('Profile')"/>
                <x-ui.table.t-head class="tb-col-md" :title="__('Nom, Prenom et Sexe')"/>
                <x-ui.table.t-head class="tb-col-md" :title="__('Nom de Societe et Fonction')"/>
                <x-ui.table.t-head class="tb-col-md" :title="__('Adresse, Date debut et fin')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Contact')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($experiences as $experience)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $experience->id }}">
                        <x-ui.table.td class="nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input
                                        type="checkbox"
                                        wire:model="selected"
                                        class="custom-control-input"
                                        id="uid3-{{ $experience->id }}"
                                        value="{{ $experience->id }}"
                                >
                                <label class="custom-control-label" for="uid3-{{ $experience->id }}"></label>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td>
                            <div class="user-card">
                                <div class="user-avatar">
                                    <img
                                            src="{{ asset('storage/'.$experience->person->profile_picture) }}"
                                            alt="{{ $experience->person->username }}"
                                            srcset="{{ asset('storage/'.$experience->person->profile_picture) }}"
                                    >
                                </div>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $experience->person->name }} {{ $experience->person->firstname }}
                                </span>
                                <div>
                                    <span style="font-size: smaller; font-style: italic;">{{ $experience->person->gender }}</span>
                                </div>
                            </div>

                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span>{{ $experience->company_name }}</span>
                            </div>
                            <div>
                                <span style="font-size: smaller; font-style: italic;">{{ $experience->job_title }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span>{{ str()->substr($experience->company_address, 0, 21) }}</span>
                            </div>
                            <div>
                                <span style="font-size: smaller; font-style: italic;">{{ $experience->start_date->format('Y-m-d') }}</span>|
                                <span style="font-size: smaller; font-style: italic;">{{ $experience->end_date->format('Y-m-d') }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $experience->company_phone }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <x-ui.table.action>
                                        <x-ui.table.action.link-down
                                                icon="eye"
                                                :href="route('persons.show-physic-person', $experience->id)"
                                                :action="__('Voir fiche')"
                                        />
                                        <x-ui.table.action.link-down
                                                icon="edit"
                                                :href="route('engagement.edit-hiring', $experience->id)"
                                                :action="__('Modifier')"
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
