<div
        x-data="{
       init() {
           flatpickr(this.$refs.myDatePicker, {
               minDate: 'today',
               dateFormat: 'Y-m-d',
               enableTime: false,
               onChange: (selectedDates, dateStr, instance) => {
                   this.$dispatch('input', dateStr)
               },
           })
       }
    }"
>
    <input
            native="false"
            readonly
            type="text"
            x-ref="myDatePicker" {{ $attributes->merge(['class' => 'form-control']) }}
    />

</div>

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@push('scripts')
    <script data-navigate-track src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endpush
