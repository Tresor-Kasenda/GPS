<div>
    <x-ui.content.block-head
        :title="__('Liste de Bureaux')"
        :description="__('Les details des bureaux en fonctions des divisions')"
    />

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
                <x-ui.table.t-head class="tb-col-md" :title="__('Division')"/>
                <x-ui.table.t-head class="tb-col-md" :title="__('Prioriter')"/>
                <x-ui.table.t-head class="tb-col-md" :title="__('Abbreviation')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Description')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($offices as $office)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $office->id }}">
                        <x-ui.table.td class="nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input
                                    type="checkbox"
                                    wire:model="selected"
                                    class="custom-control-input"
                                    id="uid3-{{ $office->id }}"
                                    value="{{ $office->id }}"
                                >
                                <label class="custom-control-label" for="uid3-{{ $office->id }}"></label>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $office->division->priority }}
                                </span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $office->priority }}
                                </span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $office->abbreviation }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $office->designation }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <x-ui.table.action>
                                        <x-ui.table.action.link-down
                                            icon="edit"
                                            :href="route('entity.edit-office', $office->id)"
                                            :action="__('Modifier')"
                                        />
                                        <li>
                                            <button type="button" class="btn"
                                                    wire:click="deleteDirection({{ $office->id }})">
                                                <em class="icon ni ni-trash"></em>
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
