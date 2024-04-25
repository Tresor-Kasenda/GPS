<div>
    <x-contents.back-brandcrumb
            title="Editer Hiring"
            :route="route('hirings')"
            action="Retour Agent (Engagement)"
    />

    @if(session()->has('status'))
        <div class="alert alert-danger alert-icon alert-dismissible">
            <em class="icon ni ni-cross-circle"></em>
            <strong>Error</strong>
            {{ session('status') }}
            <button class="close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card card-bordered">
        <div class="card-inner">
            <form wire:submit.prevent="submit">
                <div class="row g-gs">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="person_id">Person</x-contents.forms.text-label>
                            <select data-search="on" id="person_id" readonly="" name="person_id"
                                    wire:model.live="person_id"
                                    class="form-select js-select2" data-placeholder="person_id">
                                @foreach($peoples as $person)
                                    <option wire:key="{{ $person->id }}" value="{{ $person->id }}">
                                        {{ $person->name . " - ". $person->username }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('person_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="date_commitment">
                                Date d'engagement
                            </x-contents.forms.text-label>
                            <x-contents.forms.datepicker
                                    id="date_commitment"
                                    name="date_commitment"
                                    wire:model.live="date_commitment"
                                    placeholder="Selectionnez la date d'engagemnt"
                            />
                            <x-input-error :messages="$errors->get('date_commitment')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="date_retirement">
                                Date d'engagement
                            </x-contents.forms.text-label>
                            <x-contents.forms.datepicker
                                    id="date_retirement"
                                    name="date_retirement"
                                    wire:model.live="date_retirement"
                                    placeholder="Selectionnez la date de fin carriere"
                            />
                            <x-input-error :messages="$errors->get('date_retirement')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="matriculate">Matricule</x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="matriculate"
                                    name="matriculate"
                                    readonly
                                    wire:model.live="matriculate"
                                    placeholder="Saisissez le numero matricule de l'agent"
                            />
                            <x-input-error :messages="$errors->get('matriculate')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="carriers_state">Etat de carriere
                            </x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="carriers_state"
                                    name="carriers_state"
                                    wire:model.live="carriers_state"
                                    placeholder="Saisissez l'etat de carriere"
                            />
                            <x-input-error :messages="$errors->get('carriers_state')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="document">Document</x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="file"
                                    id="document"
                                    name="document"
                                    wire:model.live="document"
                                    placeholder="Selectionnez le document"
                            />
                            <x-input-error :messages="$errors->get('document')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-12">
                        <x-contents.forms.submit type="submit">
                            {{ __('Enregistrer') }}
                        </x-contents.forms.submit>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
