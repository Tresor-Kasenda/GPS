<div>
    <x-contents.back-brandcrumb
            title="Create person"
            :route="route('persons')"
            action="Retour Person"
    />

    <div class="card card-bordered">
        <div class="card-inner">
            <form wire:submit.prevent="submit">
                <div class="row g-gs">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="name">Nom</x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="name"
                                    name="name"
                                    wire:model.live="name"
                                    placeholder="Saisissez le nom"
                            />
                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="username">Post-Nom</x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="username"
                                    name="username"
                                    wire:model.live="username"
                                    placeholder="Saisissez le post-nom"
                            />
                            <x-input-error :messages="$errors->get('username')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="firstname">Prenom</x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="firstname"
                                    name="firstname"
                                    wire:model.live="firstname"
                                    placeholder="Saisissez le prenom"
                            />
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="gender">Genre</x-contents.forms.text-label>
                            <select id="gender" name="gender" wire:model.live="gender" class="form-select js-select2"
                                    data-placeholder="gender">
                                @foreach($genders as $gender)
                                    <option wire:key="{{ $gender }}" value="{{ $gender }}">{{ $gender }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('gender')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="marital_status">Etat civil</x-contents.forms.text-label>
                            <select id="marital_status" name="marital_status" wire:model.live="marital_status"
                                    class="form-select js-select2" data-placeholder="marital_status">
                                @foreach($maritals as $marital)
                                    <option wire:key="{{ $marital }}" value="{{ $marital }}">{{ $marital }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('marital_status')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="birthdate">Date de naissance</x-contents.forms.text-label>
                            <x-contents.forms.datepicker
                                    id="birthdate"
                                    name="birthdate"
                                    wire:model.live="birthdate"
                                    placeholder="Saisissez la date de naissance"
                            />
                            <x-input-error :messages="$errors->get('birthdate')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="birthplace">Lieu de naissance
                            </x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="birthplace"
                                    name="birthplace"
                                    wire:model.live="birthplace"
                                    placeholder="Saisissez le lieu de naissance"
                            />
                            <x-input-error :messages="$errors->get('birthplace')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="phone_number">
                                Contact
                            </x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="phone_number"
                                    name="phone_number"
                                    wire:model.live="phone_number"
                                    placeholder="Saisissez le numero de telephone"
                            />
                            <x-input-error :messages="$errors->get('phone_number')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="address">
                                Adresse
                            </x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="address"
                                    name="address"
                                    wire:model.live="address"
                                    placeholder="Saisissez l'address"
                            />
                            <x-input-error :messages="$errors->get('address')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-contents.forms.text-label for="identity_piece">
                                N Piece d'identiter
                            </x-contents.forms.text-label>
                            <x-contents.forms.text-input
                                    type="text"
                                    id="identity_piece"
                                    name="identity_piece"
                                    wire:model.live="identity_piece"
                                    placeholder="Saisir le numero de piece d'identiter"
                            />
                            <x-input-error :messages="$errors->get('identity_piece')" class="mt-2"/>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <x-contents.forms.text-label for="profile_picture">
                                Photo de profile
                            </x-contents.forms.text-label>

                            <x-contents.forms.file-upload
                                    multiple
                                    allowImagePreview
                                    imagePreviewMaxHeight="400"
                                    allowFileTypeValidation
                                    allowFileSizeValidation
                                    maxFileSize="5mb"
                                    wire:model="profile_picture"
                            />

                            <x-input-error :messages="$errors->get('profile_picture')" class="mt-2"/>
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
