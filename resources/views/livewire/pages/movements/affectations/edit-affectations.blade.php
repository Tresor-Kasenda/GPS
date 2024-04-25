<div>
    <x-contents.back-brandcrumb
            title="Create Affectation"
            :route="route('affectations')"
            action="Retour sur Affectation"
    />

    <div class="card card-bordered">
        <div class="card-inner">
            <form wire:submit.prevent="submit">
                <div class="row g-gs">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="hiring_id">Agent</x-contents.forms.text-label>
                            <select
                                    data-search="on"
                                    id="hiring_id"
                                    name="hiring_id"
                                    wire:model.live="hiring_id"
                                    class="form-select js-select2"
                                    data-placeholder="hiring_id"
                            >
                                <option>Selectionnez un element</option>
                                @foreach($hirings as $hiring)
                                    <option wire:key="{{ $hiring->id }}" value="{{ $hiring->id }}">
                                        {{ $hiring->person->name . " - ". $hiring->person->username }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('hiring_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="direction">
                                Direction
                            </x-contents.forms.text-label>
                            <select
                                    data-search="on"
                                    id="direction"
                                    name="direction"
                                    wire:model.live="direction"
                                    class="form-select js-select2"
                                    wire:change="direction"
                                    data-placeholder="direction"
                            >
                                <option>Selectionnez un element</option>
                                @foreach($directions as $direction)
                                    <option wire:key="{{ $direction->id }}" value="{{ $direction->id }}">
                                        {{ $direction->priority }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('direction')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="division">
                                Division
                            </x-contents.forms.text-label>
                            <select data-search="on" id="division" name="division" wire:model.live="division"
                                    class="form-select js-select2" data-placeholder="division">
                                <option>Selectionnez un element</option>
                                @foreach($divisions as $division)
                                    <option wire:key="{{ $division->id }}" value="{{ $division->id }}">
                                        {{ $division->priority }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('division')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="office">
                                Bureau
                            </x-contents.forms.text-label>
                            <select data-search="on" id="office" name="office" wire:model.live="office"
                                    class="form-select js-select2" data-placeholder="office">
                                <option>Selectionnez un element</option>
                                @foreach($offices as $office)
                                    <option wire:key="{{ $office->id }}" value="{{ $office->id }}">
                                        {{ $office->priority }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('office')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="position">
                                Fonction
                            </x-contents.forms.text-label>
                            <select data-search="on" id="position" name="position" wire:model.live="position"
                                    class="form-select js-select2" data-placeholder="position">
                                <option>Selectionnez un element</option>
                                @foreach($positions as $position)
                                    <option wire:key="{{ $position->id }}" value="{{ $position->id }}">
                                        {{ $position->priority }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('position')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="date_affectation">
                                Date d'admissions sous status
                            </x-contents.forms.text-label>
                            <x-contents.forms.datepicker
                                    id="date_affectation"
                                    name="date_affectation"
                                    wire:model.live="date_affectation"
                                    placeholder="Selectionnez la date d'admissions de grade"
                            />
                            <x-input-error :messages="$errors->get('date_affectation')" class="mt-2"/>
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
