<x-guest-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
                    id="email"
                    class="form-control-lg"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    placeholder="Enter your Email address"
                    autocomplete="username"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>
        <div class="form-group">
            <x-input-label for="email">
                {{ __('Password') }}
                @if (Route::has('password.request'))
                    <a class="link link-primary link-sm ml-3" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </x-input-label>

            <div class="form-control-wrap">
                <x-text-input id="password" class="form-control-lg"
                              type="password"
                              name="password"
                              placeholder="Enter your Password"
                              required autocomplete="current-password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>
        </div>
        <div class="form-group">
            <x-primary-button type="submit">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
