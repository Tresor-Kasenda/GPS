<div>
    <x-ui.content.block-head :title="__('Nouvelle Experience')">
        <x-ui.block.button.link
                icon="arrow-long-left"
                :route="route('persons.lists-experience')"
                :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.layout for="person_id">Nom</x-ui.forms.layout>
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
                            <x-ui.forms.input.label for="company_name">Nom societer</x-ui.forms.input.label>
                            <x-ui.forms.input
                                    type="text"
                                    id="company_name"
                                    name="company_name"
                                    wire:model.live="company_name"
                                    placeholder="Saisir le nom de la societer"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('company_name')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="job_title">Fonction Occupter</x-ui.forms.input.label>
                            <x-ui.forms.input
                                    type="text"
                                    id="job_title"
                                    name="job_title"
                                    wire:model.live="job_title"
                                    placeholder="Saisir la fonction occuper"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('job_title')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="start_date">Date de debut</x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                    min_date="now"
                                    time="false"
                                    id="start_date"
                                    name="start_date"
                                    wire:model.live="start_date"
                                    placeholder="Selectionnez la date de debut"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('start_date')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="end_date">Date de fin du Contrat</x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                    min_date="now"
                                    time="false"
                                    id="end_date"
                                    name="end_date"
                                    wire:model.live="end_date"
                                    placeholder="Selectionnez la date de fin"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('end_date')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="company_address">
                                Adresse
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                    type="text"
                                    id="company_address"
                                    name="company_address"
                                    wire:model.live="company_address"
                                    placeholder="Saisissez l'adresse de la societer"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('company_address')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="company_phone">
                                Contact
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                    type="text"
                                    id="company_phone"
                                    name="company_phone"
                                    wire:model.live="company_phone"
                                    placeholder="Saisissez le contact de la societer"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('company_phone')" class="mt-2"/>
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
