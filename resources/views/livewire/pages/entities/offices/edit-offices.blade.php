<div>
    <x-contents.back-brandcrumb
            title="Back to Office"
            :route="route('offices')"
            action="Retour Office"
    />

    <div class="card card-bordered">
        <div class="card-inner">
            <form wire:submit.prevent="submit">
                <div class="row g-gs">
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="division_id">Division</x-contents.forms.text-label>
                            <x-contents.forms.select
                                    data-placeholder="division_id"
                                    wire:model.live="division_id"
                                    placeholder="Select Division"
                                    valueField="id"
                                    textField="priority"
                                    :options="$divisions"
                                    :selected="old('division_id')"
                            />
                            <x-input-error :messages="$errors->get('division_id')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="priority">Prioriter</x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="priority"
                                    name="priority"
                                    wire:model.live="priority"
                                    placeholder="Saisissez la prioriter"
                            />
                            <x-input-error :messages="$errors->get('priority')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="abbreviation">Sigle</x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="abbreviation"
                                    name="abbreviation"
                                    wire:model.live="abbreviation"
                                    placeholder="Saisissez le sigle(DIR)"
                            />
                            <x-input-error :messages="$errors->get('abbreviation')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-12">
                        <x-contents.forms.text-label for="designation">Designation</x-contents.forms.text-label>
                        <x-contents.forms.textarea
                                id="designation"
                                name="designation"
                                wire:model.live="designation"
                                placeholder="Saisir la designation"
                        />
                        <x-input-error :messages="$errors->get('designation')" class="mt-2"/>
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