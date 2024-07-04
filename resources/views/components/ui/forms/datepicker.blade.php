@props([
    'min_date' => null,
    'time' => false,
    'dateFormat' => null,
])
<div x-data="datepicker">
    <input
        x-ref="dateInput"
        native="false"
        readonly
        type="text"
        date-format="{{ $dateFormat }}"
        date-min-date="{{ $min_date }}"
        date-time="{{ $time }}"
        {{ $attributes->merge(['class' => 'form-control']) }}
    />
</div>
