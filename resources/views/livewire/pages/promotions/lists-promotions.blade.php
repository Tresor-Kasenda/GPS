<div>
    <x-ui.content.block-head :title="__('Promotion')"/>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4 card-preview">
            <x-ui.table data-export-title="Exportez" data-auto-responsive="true">
                <thead>
                <x-ui.table.t-head class="tb-col-md" :title="__('Agent')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Grade')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Date')"/>
                <x-ui.table.t-head class=" tb-col-md" :title="__('Action')"/>
                </thead>
                <tbody>
                @foreach($promotions as $promotion)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $promotion->id }}">
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <a href="{{ route('agent.show-agents', $promotion->agent->id) }}" class="tb-amount">
                                    {{ $promotion->agent->person->name. ' ' .$promotion->agent->person->username . ' ' .$promotion->agent->person->firstname }}
                                </a>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $promotion->grade->designation }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $promotion->date_allocated->format('d-m-Y') }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <x-ui.table.action>
                                        <x-ui.table.action.link-down
                                            icon="edit"
                                            :href="route('agent.edit-promotions', $promotion->id)"
                                            :action="__('Modifier')"
                                        />
                                        <li>
                                            <form method="post"
                                                  action="{{ route('agent.delete-promotion', $promotion->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn">
                                                    <em class="icon ni ni-delete"></em>
                                                    <span>Supprimer</span>
                                                </button>
                                            </form>
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
