<div>
    <x-ui.content.block-head :title="__('Transfert')"/>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4 card-preview">
            <x-ui.table data-export-title="Exportez" data-auto-responsive="true">
                <thead>
                <x-ui.table.t-head class="tb-col-md" :title="__('Agent')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Service de provenance')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Service de Transfert')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Date')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($transfers as $transfer)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $transfer->id }}">
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $transfer->agent->person->name. ' ' .$transfer->agent->person->username . ' ' .$transfer->agent->person->firstname }}
                                </span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $transfer->sourceService->title ?? "" }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $transfer->service->title }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $transfer->transfer_date->format('d-m-Y') }}</span>
                            </div>
                        </x-ui.table.td>

                        <x-ui.table.td class="nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <x-ui.table.action>
                                        <x-ui.table.action.link-down
                                            icon="edit"
                                            :href="route('agent.edit-transfers', $transfer->id)"
                                            :action="__('Modifier')"
                                        />
                                        <li>
                                            <button type="button" class="btn"
                                                    wire:click="deleteDirection({{ $transfer->id }})">
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
