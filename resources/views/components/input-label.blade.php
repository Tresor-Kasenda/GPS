@props(['value'])

<div class="form-label-group">
    <label {{ $attributes->merge(['class' => 'form-label']) }}>
        {{ $value ?? $slot }}
    </label>
</div>