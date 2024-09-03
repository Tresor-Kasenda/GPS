<div>
    <x-ui.content.block-head :title="__('Mobilité')"/>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4 card-preview">
            <x-ui.table data-export-title="Exportez" data-auto-responsive="true">
                <thead>
                <x-ui.table.t-head class="tb-col-md" :title="__('Agent')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Date')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Motif')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Date debut')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Date de fin')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($mobilities as $mobility)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $mobility->id }}">
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <a href="{{ route('agent.show-agents', $mobility->agent->id) }}" class="tb-amount">
                                    {{ $mobility->agent->person->name. ' ' .$mobility->agent->person->username . ' ' .$mobility->agent->person->firstname }}
                                </a>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $mobility->mobility_date->format('Y-m-d') }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $mobility->mobility_type }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $mobility->start_date->format('Y-m-d') }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $mobility->end_date->format('Y-m-d') }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <x-ui.table.action>
                                        <x-ui.table.action.link-down
                                            icon="edit"
                                            :href="route('agent.mobility-edit', $mobility->id)"
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
