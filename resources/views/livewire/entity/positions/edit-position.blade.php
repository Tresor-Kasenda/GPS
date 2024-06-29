<div>
    <x-ui.content.block-head :title="__('Nouvelle fonction')" :description="__('Modifier une nouvelle fonction')">
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('entity.lists-position')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs px-4 py-2">

                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <x-ui.forms.input.label for="priority">Prioriter</x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="priority"
                                name="priority"
                                wire:model.live="priority"
                                placeholder="Ex: Direction Generale"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('priority')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <x-ui.forms.input.label for="description">
                                Description de la direction
                            </x-ui.forms.input.label>

                            <x-ui.forms.textarea
                                id="description"
                                name="description"
                                wire:model.live="description"
                                placeholder="Saisir le document"
                            />

                            <x-ui.forms.input.error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-12">
                        <x-ui.block.button.submit :action="__('Enregistrer')" />
                    </div>
                </div>
            </x-ui.forms.layout>
        </x-ui.block.card>
    </x-ui.content.container>
</div>
