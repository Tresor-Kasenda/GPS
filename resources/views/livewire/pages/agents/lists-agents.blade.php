@php use App\Enums\StateCarrier; @endphp
<div>
    <x-ui.content.block-head :title="__('Carrieres')"/>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4 card-preview">
            <x-ui.table data-export-title="Exportez" data-auto-responsive="true">
                <thead>
                <x-ui.table.t-head class="tb-col-md" :title="__('Nom Post-nom et Prenom')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Grade initial')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Matricule')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Ancienneter')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Service initiale')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Etat')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($agents as $agent)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $agent->id }}">
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $agent->person->name. ' ' . $agent->person->username. ' ' . $agent->person->firstname }}
                                </span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $agent->grade->designation }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $agent->person_number }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $agent->seniority }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $agent->hiring->service->title }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span
                                    @class([
                                        'badge lg',
                                        'bg-primary' => $agent->status === StateCarrier::PROGRESSING,
                                        'bg-secondary' => $agent->status === StateCarrier::PENDING,
                                        'bg-success' => $agent->status === StateCarrier::ACTIVE,
                                        'bg-warning' => $agent->status === StateCarrier::INACTIVE,
                                        'bg-danger' => $agent->status === StateCarrier::RESIGNATION,
                                    ])
                                >{{ $agent->status }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <x-ui.table.action>
                                        <x-ui.table.action.link-down
                                            icon="eye"
                                            :href="route('agent.show-agents', $agent->id)"
                                            :action="__('Voir')"
                                        />
                                        <x-ui.table.action.link-down
                                            icon="edit"
                                            :href="route('agent.agents-edit', $agent->id)"
                                            :action="__('Modifier')"
                                        />
                                        <li>
                                            <button type="button" class="btn"
                                                    wire:click="deleteDirection({{ $agent->id }})">
                                                <em class="icon ni ni-trash"></em>
                                                <span>Supprimer</span>
                                            </button>
                                        </li>
                                        <li class="divider"></li>
                                        <x-ui.table.action.link-down
                                            icon="swap"
                                            :href="route('agent.agent-affectation', $agent->id)"
                                            :action="__('Affectation')"
                                        />
                                        <x-ui.table.action.link-down
                                            icon="send"
                                            :href="route('agent.mobility-create', $agent->id)"
                                            :action="__('Mobiliter')"
                                        />
                                        <x-ui.table.action.link-down
                                            icon="minimize-alt"
                                            :href="route('agent.create-transfers', $agent->id)"
                                            :action="__('Transfert')"
                                        />
                                        <x-ui.table.action.link-down
                                            icon="user-add"
                                            :href="route('persons.hiring-physic-person', $agent->id)"
                                            :action="__('Attribution grade')"
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
