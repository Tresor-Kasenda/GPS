<div>
    <x-ui.content.block-head :title="__('Listes des mobiliters')"/>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4 card-preview">
            <x-ui.table data-export-title="Exportez" data-auto-responsive="true">
                <thead>
                <x-ui.table.t-head class="tb-col-md" :title="__('Nom')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Prenom')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Date de transfer')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Service')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Motif')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($transfers as $transfer)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $transfer->id }}">
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $transfer->agent->person->name }}
                                </span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $transfer->agent->person->firstname }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $transfer->transfer_date->format('Y-m-d') }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $transfer->service->title }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $transfer->start_date->motif }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <x-ui.table.action>
                                        <x-ui.table.action.link-down
                                            icon="edit"
                                            :href="route('agent.edit-transfers', $mobility->id)"
                                            :action="__('Modifier')"
                                        />
                                        <li>
                                            <button type="button" class="btn"
                                                    wire:click="deleteDirection({{ $mobility->id }})">
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
