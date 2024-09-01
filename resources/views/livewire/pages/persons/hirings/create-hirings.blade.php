<div>
    <x-ui.content.block-head
        :title="__('Creer un engagement')">
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('persons.lists-hirings')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs">
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="hiring_date">
                                {{ __('Date') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                id="hiring_date"
                                name="hiring_date"
                                time="false"
                                date-format="Y-m-d"
                                wire:model.live="hiring_date"
                                placeholder="Selectionnez la date d'engagemnt"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('hiring_date')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="reference">
                                {{ __('Reference') }}
                            </x-ui.forms.input.label>

                            <x-ui.forms.input
                                type="text"
                                id="reference"
                                name="reference"
                                wire:model.live="reference"
                                placeholder="Saisir la refence de l'arr"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('reference')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="service_id">
                                {{ __('Service') }}
                            </x-ui.forms.input.label>
                            <select
                                id="service_id"
                                name="service_id"
                                wire:model.live="service_id"
                                class="form-select js-select2"
                                data-placeholder="service_id">
                                <option>Selectionner un service</option>
                                @foreach($services as $service)
                                    <option wire:key="{{ $service->id }}" value="{{ $service->id }}">
                                        {{ $service->title }}
                                    </option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('service_id')" class="mt-2"/>
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

