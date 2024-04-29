<x-guest-layout :title="__('Authentication')">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title text-center">{{ __("Verification d'email") }}</h4>
            <div class="nk-block-des">
                <p>
                    {{ __("Merci de vous être inscrit ! Avant de commencer, pourriez-vous vérifier votre adresse électronique en cliquant sur le lien que nous venons de vous envoyer ? Si vous n'avez pas reçu l'e-mail, nous vous en enverrons un autre avec plaisir.") }}
                </p>
            </div>
        </div>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-success">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-ui.block.button class="btn-dim">
                    {{ __('Resend Verification Email') }}
                </x-ui.block.button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-ui.block.button type="submit" class="btn-dim">
                {{ __('Log Out') }}
            </x-ui.block.button>
        </form>
    </div>
</x-guest-layout>
