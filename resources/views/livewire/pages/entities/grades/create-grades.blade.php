<div>
    <x-contents.back-brandcrumb
            title="Back to Grades"
            :route="route('grades')"
            action="Retour Grade"
    />

    <div class="card card-bordered">
        <div class="card-inner">
            <form wire:submit.prevent="submit">
                <div class="row g-gs">
                    <div class="col-lg-6 col-sm-6">
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
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="level">Niveau Grade</x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="level"
                                    name="level"
                                    wire:model.live="level"
                                    placeholder="Saisissez le Niveau de Grade"
                            />
                            <x-input-error :messages="$errors->get('level')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="tier">Echelon</x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="tier"
                                    name="tier"
                                    wire:model.live="tier"
                                    placeholder="Saisissez l'Echelon"
                            />
                            <x-input-error :messages="$errors->get('tier')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="code">Sigle</x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="code"
                                    name="code"
                                    wire:model.live="code"
                                    placeholder="Saisissez le sigle"
                            />
                            <x-input-error :messages="$errors->get('code')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-12">
                        <x-contents.forms.text-label for="description">Description</x-contents.forms.text-label>
                        <x-contents.forms.textarea
                                id="description"
                                name="description"
                                wire:model.live="description"
                                placeholder="Saisir la description"
                        />
                        <x-input-error :messages="$errors->get('description')" class="mt-2"/>
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
