<div>
    <x-ui.content.block-head :title="__('Liste de grades')"/>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4 card-preview">
            <x-ui.table data-export-title="Exportez" data-auto-responsive="true">
                <thead>
                <x-ui.table.t-head class="tb-col-md" :title="__('N°')"/>
                <x-ui.table.t-head class="tb-col-lg" :title="__('Niveau')"/>
                <x-ui.table.t-head class="tb-col-md" :title="__('Designation')"/>
                </thead>
                <tbody>
                @foreach($grades as $grade)
                    <x-ui.table.tr wire:loading.class.delay="opacity-20" wire:key="table-{{ $grade->id }}">
                        <x-ui.table.td class="tb-col-md">
                            <div>
                                <span class="tb-amount">
                                    {{ $grade->id }}
                                </span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $grade->level }}</span>
                            </div>
                        </x-ui.table.td>
                        <x-ui.table.td class="tb-col-lg">
                            <div>
                                <span>{{ $grade->designation }}</span>
                            </div>
                        </x-ui.table.td>
                    </x-ui.table.tr>
                @endforeach
                </tbody>
            </x-ui.table>
        </x-ui.block.card>
    </x-ui.content.container>
</div>
