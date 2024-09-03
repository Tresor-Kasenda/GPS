<div>
    <x-ui.content.block-head
        :title="__('Nouvelle affectation')"
        :description="'Nom: '. $agent->person->name .' ||  Post-Nom: '. $agent->person->username .  ' || Prenom: '. $agent->person->firstname"
    >
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('agent.agents-lists')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="end_reason">
                                {{ __('Raison') }}
                            </x-ui.forms.input.label>
                            <select
                                id="end_reason"
                                name="end_reason"
                                wire:model.live="end_reason"
                                class="form-select js-select2"
                                data-placeholder="end_reason">
                                <option>Selectionnez une raison</option>
                                @foreach($reasons as $reason)
                                    <option
                                        wire:key="{{ $reason }}"
                                        value="{{ $reason }}"
                                    >
                                        {{ $reason }}
                                    </option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('end_reason')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="end_date">
                                {{ __('Date') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                id="end_date"
                                name="end_date"
                                time="false"
                                date-format="Y-m-d"
                                wire:model.live="end_date"
                                placeholder="Selectionnez une date"
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
