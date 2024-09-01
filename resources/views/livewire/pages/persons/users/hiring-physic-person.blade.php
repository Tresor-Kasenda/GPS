<div>
    <x-ui.content.block-head
        :title="__('Engagement de '. $person->name . ' '. $person->username . ' '. $person->firstname )"
        :description="'Reference: '. $hiring_id->reference .' ||  Date: '. $hiring_id->hiring_date .  ' || Service: '. $hiring_id->service->title"
    >
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('agent.agents-lists')"
            :action="__('Retour')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="grade_id">
                                {{ __('Grade') }}
                            </x-ui.forms.input.label>
                            <select
                                id="grade_id"
                                name="grade_id"
                                wire:model.live="grade_id"
                                class="form-select js-select2"
                                data-placeholder="grade_id">
                                <option>Selectionner le grade</option>
                                @foreach($grades as $grade)
                                    <option
                                        wire:key="{{ $grade->id }}"
                                        value="{{ $grade->id }}"
                                    >
                                        {{ $grade->designation }}
                                    </option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('grade_id')" class="mt-2"/>
                        </div>
                    </div>


                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="matricule">
                                {{ __('Matricule') }}
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="matricule"
                                name="matricule"
                                time="false"
                                date-format="Y-m-d"
                                wire:model.live="matricule"
                                placeholder="Saisissez le matricule sinon NU"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('matricule')" class="mt-2"/>
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
