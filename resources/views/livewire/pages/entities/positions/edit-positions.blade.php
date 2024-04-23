<div>
    <x-contents.back-brandcrumb
            title="Create Fonction"
            :route="route('positions')"
            action="Retour Fonction"
    />

    <div class="card card-bordered">
        <div class="card-inner">
            <form wire:submit.prevent="submit">
                <div class="row g-gs">
                    <div class="col-lg-12 col-sm-6">
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

                    <div class="col-12">
                        <x-contents.forms.text-label for="description">Designation</x-contents.forms.text-label>
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
