<div>
    <x-ui.content.block-head :title="__('Ajoutez une Personne')">
        <x-ui.block.button.link
            icon="arrow-long-left"
            :route="route('persons.lists-physic-person')"
            :action="__('Voir les listes')"
        />
    </x-ui.content.block-head>

    <x-ui.content.container>
        <x-ui.block.card class="mb-4">
            <x-ui.forms.layout wire:submit.prevent="submit">
                <div class="row g-gs">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.layout for="name">Nom</x-ui.forms.layout>
                            <x-ui.forms.input
                                type="text"
                                id="name"
                                name="name"
                                wire:model.live="name"
                                placeholder="Saisissez le nom"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="username">Post-Nom</x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="username"
                                name="username"
                                wire:model.live="username"
                                placeholder="Saisissez le post-nom"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('username')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="firstname">Prenom</x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="firstname"
                                name="firstname"
                                wire:model.live="firstname"
                                placeholder="Saisissez le prenom"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('firstname')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="gender">Genre</x-ui.forms.input.label>
                            <select id="gender" name="gender" wire:model.live="gender" class="form-select js-select2"
                                    data-placeholder="gender">
                                @foreach($genders as $gender)
                                    <option wire:key="{{ $gender }}" value="{{ $gender }}">{{ $gender }}</option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('gender')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="marital_status">Etat civil</x-ui.forms.input.label>
                            <select id="marital_status" name="marital_status" wire:model.live="marital_status"
                                    class="form-select js-select2" data-placeholder="marital_status">
                                @foreach($maritals as $marital)
                                    <option wire:key="{{ $marital }}" value="{{ $marital }}">{{ $marital }}</option>
                                @endforeach
                            </select>
                            <x-ui.forms.input.error :messages="$errors->get('marital_status')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="birthdate">Date de naissance</x-ui.forms.input.label>
                            <x-ui.forms.datepicker
                                id="birthdate"
                                name="birthdate"
                                time="false"
                                wire:model.live="birthdate"
                                placeholder="Saisissez la date de naissance"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('birthdate')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="birthplace">
                                Lieu de naissance
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="birthplace"
                                name="birthplace"
                                wire:model.live="birthplace"
                                placeholder="Saisissez le lieu de naissance"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('birthplace')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="phone_number">
                                Contact
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="phone_number"
                                name="phone_number"
                                wire:model.live="phone_number"
                                placeholder="Saisissez le numero de telephone"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('phone_number')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="address">
                                Adresse
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="address"
                                name="address"
                                wire:model.live="address"
                                placeholder="Saisissez l'address"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <x-ui.forms.input.label for="identity_piece">
                                N Piece d'identiter
                            </x-ui.forms.input.label>
                            <x-ui.forms.input
                                type="text"
                                id="identity_piece"
                                name="identity_piece"
                                wire:model.live="identity_piece"
                                placeholder="Saisir le numero de piece d'identiter"
                            />
                            <x-ui.forms.input.error :messages="$errors->get('identity_piece')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <x-ui.forms.input.label for="profile_picture">
                                Photo de profile
                            </x-ui.forms.input.label>

                            <x-ui.forms.file-upload
                                multiple
                                allowImagePreview
                                imagePreviewMaxHeight="400"
                                allowFileTypeValidation
                                allowFileSizeValidation
                                maxFileSize="5mb"
                                wire:model="profile_picture"
                            />

                            <x-ui.forms.input.error :messages="$errors->get('profile_picture')" class="mt-2" />
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
