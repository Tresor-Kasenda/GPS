<div>
    <x-ui.content.block-head
        :title="__('Editer un transfert')"
        :description="'Nom: '. $transfer->agent->person->name .' ||  Post-Nom: '. $transfer->agent->person->username .  ' || Prenom: '. $transfer->agent->person->firstname"
    >
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('agent.lists-transfers')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs">

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="service_id">
                                {{ __('Service') }}
                            </x-ui.forms.input.label>
                            <select
                                id="service_id"
                                name="service_id"
                                wire:model.live="service_id"
                                class="form-select js-select2"
                                data-placeholder="service_id">
                                <option>Selectionnez un service</option>
                                @foreach($services as $service)
                                    <option
                                        wire:key="{{ $service->id }}"
                                        value="{{ $service->id }}"
                                        {{ $transfer->service_id = $service->id  ? 'selected' : '' }}
                                    >
                                        {{ $service->title }}
                                    </option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('service_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="transfer_date">
                                {{ __('Date Transfer') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                id="transfer_date"
                                name="transfer_date"
                                time="false"
                                date-format="Y-m-d"
                                wire:model.live="transfer_date"
                                placeholder="Selectionnez la date de transfer"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('transfer_date')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="motif">Motif</x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="motif"
                                name="motif"
                                wire:model.live="motif"
                                placeholder="Saissir le motif de transfer"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('motif')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-12">
                        <x-ui.block.button.submit :action="__('Enregistrer')"/>
                    </div>

                </div>
            </x-ui.forms.layout>
        </x-ui.block.card>
    </x-ui.content.container>
</div>
