<div>
    <x-ui.content.block-head :title="__('Ajouter une mobility')">
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('agent.mobility-lists')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="agent_id">
                                {{ __('Nom') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="agent_id"
                                name="agent_id"
                                value="{{ $mobility->agent->person->name }}"
                                readonly
                                placeholder="Saisissez le nom"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('agent_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="mobility_date">
                                {{ __('Date') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                id="mobility_date"
                                name="mobility_date"
                                time="false"
                                date-format="Y-m-d"
                                wire:model.live="mobility_date"
                                placeholder="Selectionnez la date d'engagemnt"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('mobility_date')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="mobility_type">
                                {{ __('Type') }}
                            </x-ui.forms.input.label>

                            <x-ui.forms.input
                                type="text"
                                id="mobility_type"
                                name="mobility_type"
                                wire:model.live="mobility_type"
                                placeholder="Selectionnez le document"
                            />

                            <x-ui.forms.input.error :messages="$errors->get('mobility_type')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="start_date">
                                {{ __('Date de debut') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                id="start_date"
                                name="start_date"
                                time="false"
                                date-format="Y-m-d"
                                wire:model.live="start_date"
                                placeholder="Selectionnez la date d'engagemnt"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('start_date')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="end_date">
                                {{ __('Date de fin') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                id="end_date"
                                name="end_date"
                                time="false"
                                date-format="Y-m-d"
                                wire:model.live="end_date"
                                placeholder="Selectionnez la date d'engagemnt"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('end_date')" class="mt-2"/>
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
