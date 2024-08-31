<div>
    <x-ui.content.block-head :title="__('Nouvelle fonction')" :description="__('Ajouter des nouvelles fonction')">
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('entity.functions-lists')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs px-4 py-2">

                    <div class="col-lg-12 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="name_function">Titre de fonction</x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="name_function"
                                name="name_function"
                                wire:model.live="name_function"
                                placeholder="Ex: Direction Generale"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('name_function')" class="mt-2"/>
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
