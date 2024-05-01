@props([
    'action'
])
<div class="form-group">
    <button {{ $attributes->merge(['class' => 'btn btn-primary']) }}>
        <div wire:loading.delay.long wire:loading.flex wire:target="submit" class="spinner-border spinner-border-sm"
             role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <span wire:loading.class="invisible" wire:target="submit">
                {{ $action ?? $slot }}
            </span>
    </button>
</div>