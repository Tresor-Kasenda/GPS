@php use App\Enums\ReasonEnum; @endphp
<div>
    <x-contents.back-brandcrumb
            title="Edition Assignment"
            :route="route('assignments')"
            action="Retour Assignment (Engagement)"
    />

    <div class="card card-bordered">
        <div class="card-inner">
            <form wire:submit.prevent="submit">
                <div class="row g-gs">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="hiring_id">Agent</x-contents.forms.text-label>
                            <select data-search="on" id="hiring_id" name="hiring_id" wire:model.live="hiring_id"
                                    class="form-select js-select2" data-placeholder="hiring_id">
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
                            <x-contents.forms.text-label for="grade_id">Grade</x-contents.forms.text-label>
                            <select data-search="on" id="grade_id" name="grade_id" wire:model.live="grade_id"
                                    class="form-select js-select2" data-placeholder="grade_id">

                                @foreach($grades as $grade)
                                    <option wire:key="{{ $grade->id }}" value="{{ $grade->id }}">
                                        {{ $grade->priority }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('grade_id')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="date_assignment">
                                Date d'assignement de grade
                            </x-contents.forms.text-label>
                            <x-contents.forms.datepicker
                                    id="date_assignment"
                                    name="date_assignment"
                                    wire:model.live="date_assignment"
                                    placeholder="Selectionnez la date d'assignement de grade"
                            />
                            <x-input-error :messages="$errors->get('date_assignment')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="reason">Raison</x-contents.forms.text-label>
                            <select data-search="on" id="reason" name="reason" wire:model.live="reason"
                                    class="form-select js-select2" data-placeholder="reason">
                                @foreach(ReasonEnum::cases() as $reason)
                                    <option wire:key="{{ $reason->value }}" value="{{ $reason->value }}">
                                        {{ $reason->value }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('reason')" class="mt-2"/>
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
