<div>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>
    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-success">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <x-ui.block.button class="btn-dim" wire:click="sendVerification">
            {{ __('Resend Verification Email') }}
        </x-ui.block.button>

        <x-ui.block.button type="submit" class="btn-dim" wire:click="logout">
            {{ __('Log Out') }}
        </x-ui.block.button>
    </div>
</div>
