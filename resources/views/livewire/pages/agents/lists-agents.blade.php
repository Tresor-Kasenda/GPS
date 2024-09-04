@php use App\Enums\StateCarrier;use App\Models\Affectation;use App\Models\LevelAttribution;use App\Models\TransferAgent; @endphp
<div>
    <x-ui.content.block-head :title="__('Carrieres')"/>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4 card-preview">
            <x-ui.table data-export-title="Exportez" data-auto-responsive="true">
                <thead>
                <x-ui.table.t-head class="tb-col-md" :title="__('Nom Post-nom et Prenom')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Sexe')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Matricule')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Grade')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Fonction')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Service initiale')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Etat')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($agents as $key =>  $agent)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $agent->id }}">
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <a href="{{ route('persons.show-physic-person', $agent->person->id) }}"
                                   class="tb-amount">
                                    {{ $agent->person->name. ' ' . $agent->person->username. ' ' . $agent->person->firstname }}
                                </a>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $agent->person->gender }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $agent->person_number }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            @php
                                $fonction = Affectation::firstWhere('agent_id', $agent->id);
                                $promotion = LevelAttribution::firstWhere('agent_id', $agent->id);
                                $actuel = $promotion ? $promotion->grade->designation : $agent->hiring->service->designation;
                                $transfer = TransferAgent::firstWhere('agent_id', $agent->id);
                                $function = $fonction ? $fonction->companyFunction->name_function : "";
                                $transfert = $transfer ? $transfer->service->title : ""
                            @endphp
                            <div>
                                <span>{{ $actuel }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $function }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $transfert }}</span>
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
                                            :action="__('Voir Profil Agent')"
                                        />
                                        <x-ui.table.action.link-down
                                            icon="edit"
                                            :href="route('agent.agents-edit', $agent->id)"
                                            :action="__('Modifier')"
                                        />
                                        <li>
                                            <form method="post"
                                                  action="{{ route('agent.delete-agent', $agent->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn">
                                                    <em class="icon ni ni-delete"></em>
                                                    <span>Supprimer</span>
                                                </button>
                                            </form>
                                        </li>
                                        <li class="divider"></li>
                                        <x-ui.table.action.link-down
                                            icon="swap"
                                            :href="route('agent.agent-affectation', $agent->id)"
                                            :action="__('Affecter Agent')"
                                        />
                                        <x-ui.table.action.link-down
                                            icon="send"
                                            :href="route('agent.mobility-create', $agent->id)"
                                            :action="__('Gerer Mobilité')"
                                        />
                                        <x-ui.table.action.link-down
                                            icon="minimize-alt"
                                            :href="route('agent.create-transfers', $agent->id)"
                                            :action="__('Transferer Agent')"
                                        />
                                        <x-ui.table.action.link-down
                                            icon="user-add"
                                            :href="route('agent.create-promotions', $agent->id)"
                                            :action="__('Donner Promotion')"
                                        />
                                        <x-ui.table.action.link-down
                                            icon="user-add"
                                            :href="route('agent.carriers-end-create', $agent->id)"
                                            :action="__('Arreter Carriere')"
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
