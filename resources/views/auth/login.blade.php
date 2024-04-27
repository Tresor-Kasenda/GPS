<x-guest-layout :title="__('Authentication')">

    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title text-center">{{ __("S'authentifier") }}</h4>
            <div class="nk-block-des">
                <p>
                    {{ __("Accédez a GRH en utilisant votre email et votre code d'accès.") }}
                </p>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <div class="form-label-group">
                <x-ui.forms.input.label for="email" :value="__('Email')"/>
            </div>
            <div class="form-control-wrap">
                <x-ui.forms.input
                        id="email" class="form-control-lg" type="email" name="email" :value="old('email')" required
                        autofocus autocomplete="username" placeholder="Enter your email address or username"
                />
                <x-ui.forms.input.error :messages="$errors->get('email')" class="mt-2"/>
            </div>
        </div>

        <div class="form-group">
            <div class="form-label-group">
                <x-ui.forms.input.label for="password" :value="__('Password')"/>
            </div>
            <div class="form-control-wrap">
                <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                </a>
                <x-ui.forms.input
                        id="password" class="form-control-lg"
                        type="password"
                        name="password"
                        required autocomplete="current-password"
                />
                <x-ui.forms.input.error :messages="$errors->get('password')" class="mt-2"/>
            </div>
        </div>
        <div class="form-group">
            <x-ui.block.button class="btn-lg btn-dim btn-block">
                {{ __('Authentifier') }}
            </x-ui.block.button>
        </div>
    </form>
</x-guest-layout>
