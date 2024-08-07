<div>
    <x-ui.content.block-head :title="__('Nouvelle Engagement')">
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('engagement.lists-hiring')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs">

                    <div class="col-lg-4 col-sm-6">
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

                    <div class="col-lg-4 col-sm-6">
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

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="grade">
                                {{ __('Grade') }}
                            </x-ui.forms.input.label>
                            <select
                                id="grade"
                                name="grade"
                                wire:model.live="grade"
                                class="form-select js-select2"
                                data-placeholder="grade">
                                @foreach($grades as $grade)
                                    <option wire:key="{{ $grade->id }}" value="{{ $grade->id }}">
                                        {{ $grade->code }}
                                    </option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('grade')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="matriculate">
                                {{ __('N° Matricule') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="matriculate"
                                name="matriculate"
                                wire:model.live="matriculate"
                                placeholder="Saisissez le numero matricule de l'agent"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('matriculate')" class="mt-2"/>
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
