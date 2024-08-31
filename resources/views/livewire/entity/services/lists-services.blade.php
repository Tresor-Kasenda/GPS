<div>
    <x-ui.content.block-head :title="__('Liste de services')">
        <x-ui.block.button.link :route="route('entity.create-service')" :action="__('Ajoutez un service')"/>
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
                <x-ui.table.t-head class="tb-col-md" :title="__('Titre')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Type')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $service->id }}">
                        <x-ui.table.td class="nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input
                                    type="checkbox"
                                    wire:model="selected"
                                    class="custom-control-input"
                                    id="uid3-{{ $service->id }}"
                                    value="{{ $service->id }}"
                                >
                                <label class="custom-control-label" for="uid3-{{ $service->id }}"></label>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $service->title }}
                                </span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $service->type }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <x-ui.table.action>
                                        <x-ui.table.action.link-down
                                            icon="edit"
                                            :href="route('entity.edit-service', $service->id)"
                                            :action="__('Modifier')"
                                        />
                                        <li>
                                            <button type="button" class="btn"
                                                    wire:click="deleteDirection({{ $service->id }})">
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
