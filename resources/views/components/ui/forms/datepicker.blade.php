@props([
    'min_date' => null,
    'time' => false
])
<div x-data="datepicker">
    <input
        x-ref="dateInput"
        native="false"
        readonly
        type="text"
        date-format="{{ $time ? 'Y-m-d H:i' : 'Y-m-d' }}"
        date-min-date="{{ $min_date }}"
        date-time="{{ $time }}"
        {{ $attributes->merge(['class' => 'form-control']) }}
    />
</div>
