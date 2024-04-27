@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-primary-dim']) }}>
        {{ $status }}
    </div>
@endif
