<div>
    <x-ui.content.block-head :title="__('Nouveau Service')" :description="__('Ajouter un service')">
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('entity.services-lists')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs px-4 py-2">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="title">Nom service</x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="title"
                                name="title"
                                wire:model.live="title"
                                placeholder="Ex: Direction Generale"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('title')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="type">Genre</x-ui.forms.input.label>
                            <select id="type" name="type" wire:model.live="type" class="form-select js-select2"
                                    data-placeholder="type">
                                @foreach($types as $type)
                                    <option wire:key="{{ $type }}" value="{{ $type }}">{{ $type }}</option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('type')" class="mt-2"/>
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
