<div>
    <x-ui.content.block-head
        :title="__('Nouvelle affectation')"
        :description="'Nom: '. $agent->person->name .' ||  Post-Nom: '. $agent->person->username .  ' || Prenom: '. $agent->person->firstname"
    >
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('agent.affectations-lists')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="company_function_id">
                                {{ __('Nouvelle fonction') }}
                            </x-ui.forms.input.label>
                            <select
                                id="company_function_id"
                                name="company_function_id"
                                wire:model.live="company_function_id"
                                class="form-select js-select2"
                                data-placeholder="company_function_id">
                                <option>Selectionnez une fonction</option>
                                @foreach($functions as $function)
                                    <option
                                        wire:key="{{ $function->id }}"
                                        value="{{ $function->id }}"
                                    >
                                        {{ $function->name_function }}
                                    </option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('company_function_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="date_affectation">
                                {{ __('Date Affectation') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                id="date_affectation"
                                name="date_affectation"
                                time="false"
                                date-format="Y-m-d"
                                wire:model.live="date_affectation"
                                placeholder="Selectionnez la date d'engagemnt"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('date_affectation')" class="mt-2"/>
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
