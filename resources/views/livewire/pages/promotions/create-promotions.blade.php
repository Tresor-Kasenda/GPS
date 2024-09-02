<div>
    <x-ui.content.block-head
        :title="__('Nouvelle Promotion')"
        :description="'Nom: '. $agent->person->name .' ||  Post-Nom: '. $agent->person->username .  ' || Prenom: '. $agent->person->firstname"
    >
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('agent.lists-promotions')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs">

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="grade_id">
                                {{ __('Grade') }}
                            </x-ui.forms.input.label>
                            <select
                                id="grade_id"
                                name="grade_id"
                                wire:model.live="grade_id"
                                class="form-select js-select2"
                                data-placeholder="grade_id">
                                <option>Selectionnez un grade</option>
                                @foreach($grades as $grade)
                                    <option
                                        wire:key="{{ $grade->id }}"
                                        value="{{ $grade->id }}"
                                    >
                                        {{ $grade->designation }}
                                    </option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('grade_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="date_allocated">
                                {{ __('Date') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                id="date_allocated"
                                name="date_allocated"
                                time="false"
                                date-format="Y-m-d"
                                wire:model.live="date_allocated"
                                placeholder="Selectionnez la date de promotion"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('date_allocated')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="motif_attribution">Motif</x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="motif_attribution"
                                name="motif_attribution"
                                wire:model.live="motif_attribution"
                                placeholder="Saissir le motif de promotion"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('motif_attribution')" class="mt-2"/>
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
