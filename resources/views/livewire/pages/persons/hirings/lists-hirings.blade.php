<div>
    <x-ui.content.block-head :title="__('Listes des engagements')">
        <x-ui.block.button.link :route="route('persons.create-hirings')" :action="__('Ajoutez un engagement')"/>
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4 card-preview">
            <x-ui.table data-export-title="Exportez" data-auto-responsive="true">
                <thead>
                <x-ui.table.t-head class="tb-col-md" :title="__('N°')"/>
                <x-ui.table.t-head class="tb-col-md" :title="__('Reference')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Date')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Service')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($hirings as $hiring)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $hiring->id }}">
                        <x-ui.table.td class="tb-col-md">
                            {{ $hiring->id }}
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $hiring->reference }}
                                </span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $hiring->hiring_date->format('d-m-Y') }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $hiring->service->title }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <x-ui.table.action>
                                        <x-ui.table.action.link-down
                                            icon="edit"
                                            :href="route('persons.edit-hirings', $hiring->id)"
                                            :action="__('Modifier')"
                                        />
                                        <li>
                                            <button type="button" class="btn"
                                                    wire:click="deleteDirection({{ $hiring->id }})">
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
