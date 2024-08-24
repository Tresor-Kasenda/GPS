<div>
    <x-ui.content.block-head :title="__('Nouvelle Affectation')">
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('movement.affectations-lists')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs px-4 py-2">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="person_id">
                                {{ __('Nom') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="person_id"
                                name="person_id"
                                value="{{ $person->username }}"
                                readonly
                                placeholder="Saisissez le nom"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('person_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="direction_id">
                                {{ __('Direction') }}
                            </x-ui.forms.input.label>
                            <select
                                id="direction_id"
                                name="direction_id"
                                wire:model.live="direction_id"
                                class="form-select js-select2"
                                data-placeholder="direction_id">
                                @foreach($directions as $direction)
                                    <option wire:key="{{ $direction->id }}" value="{{ $direction->id }}">
                                        {{ $direction->priority }}
                                    </option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('direction_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="direction_id">
                                {{ __('Direction') }}
                            </x-ui.forms.input.label>
                            <select
                                id="direction_id"
                                name="direction_id"
                                wire:model.live="direction_id"
                                class="form-select js-select2"
                                data-placeholder="direction_id">
                                @foreach($divisions as $division)
                                    <option wire:key="{{ $division->id }}" value="{{ $division->id }}">
                                        {{ $division->priority }}
                                    </option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('direction_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="direction_id">
                                {{ __('Direction') }}
                            </x-ui.forms.input.label>
                            <select
                                id="direction_id"
                                name="direction_id"
                                wire:model.live="direction_id"
                                class="form-select js-select2"
                                data-placeholder="direction_id">
                                @foreach($offices as $office)
                                    <option wire:key="{{ $office->id }}" value="{{ $office->id }}">
                                        {{ $office->priority }}
                                    </option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('direction_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="direction_id">
                                {{ __('Direction') }}
                            </x-ui.forms.input.label>
                            <select
                                id="direction_id"
                                name="direction_id"
                                wire:model.live="direction_id"
                                class="form-select js-select2"
                                data-placeholder="direction_id">
                                @foreach($positions as $position)
                                    <option wire:key="{{ $position->id }}" value="{{ $position->id }}">
                                        {{ $position->priority }}
                                    </option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('direction_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="date_commitment">
                                {{ __('Date Engagement') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                id="date_commitment"
                                name="date_commitment"
                                time="false"
                                date-format="Y-m-d"
                                wire:model.live="date_commitment"
                                placeholder="Selectionnez la date d'engagemnt"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('date_commitment')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="person_id">
                                {{ __('Nom') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="person_id"
                                name="person_id"
                                wire:model.live=""
                                readonly
                                placeholder="Saisissez le nom"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('person_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="document">
                                {{ __('Doucument') }}
                            </x-ui.forms.input.label>

                            <x-ui.forms.input
                                type="file"
                                id="document"
                                name="document"
                                wire:model.live="document"
                                placeholder="Selectionnez le document"
                            />

                            <x-ui.forms.input.error :messages="$errors->get('document')" class="mt-2"/>
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
