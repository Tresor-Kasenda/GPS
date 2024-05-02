<div>
    <x-ui.content.block-head :title="__('Nouvelle Engagement')">
        <x-ui.block.button.link
                icon="arrow-long-left"
                :route="route('persons.lists-physic-person')"
                :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="date_commitment">Date Engagement</x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                    min_date="now"
                                    time="false"
                                    id="date_commitment"
                                    name="date_commitment"
                                    wire:model.live="date_commitment"
                                    placeholder="Selectionnez la date d'engagemnt"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('date_commitment')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="date_retirement">Date Retraite</x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                    min_date="now"
                                    time="false"
                                    id="date_retirement"
                                    name="date_retirement"
                                    wire:model.live="date_retirement"
                                    placeholder="Selectionnez la date de fin carriere"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('date_retirement')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="matriculate">
                                N Matricule
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
                            <x-ui.forms.input.label for="carriers_state">
                                Etat de Cariere
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                    type="text"
                                    id="carriers_state"
                                    name="carriers_state"
                                    wire:model.live="carriers_state"
                                    placeholder="Saisissez l'etat de carriere"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('carriers_state')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="document">
                                Doucument
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
