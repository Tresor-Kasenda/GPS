<div>
    <x-ui.content.block-head :title="__('Nouveau Grade')" :description="__('Ajouter des nouvelles grades')">
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('entity.lists-grades')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs px-4 py-2">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="priority">Prioriter</x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="priority"
                                name="priority"
                                wire:model.live="priority"
                                placeholder="Ex: Direction Generale"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('priority')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="level">Niveau de grade</x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="level"
                                name="level"
                                wire:model.live="level"
                                placeholder="Ex: DRH, DAF, DG, etc."
                            />
                            <x-ui.forms.input.error :messages="$errors->get('level')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="code">Sigle</x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="code"
                                name="code"
                                wire:model.live="code"
                                placeholder="Ex: DI"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('code')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="tier">Echelon</x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="tier"
                                name="tier"
                                wire:model.live="tier"
                                placeholder="Ex: DRH, DAF, DG, etc."
                            />
                            <x-ui.forms.input.error :messages="$errors->get('tier')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <x-ui.forms.input.label for="description">
                                Description du Grade
                            </x-ui.forms.input.label>

                            <x-ui.forms.textarea
                                id="description"
                                name="description"
                                wire:model.live="description"
                                placeholder="Saisir le document"
                            />

                            <x-ui.forms.input.error :messages="$errors->get('description')" class="mt-2"/>
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
