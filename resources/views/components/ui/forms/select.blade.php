@props(['valueField', 'textField', 'placeholder', 'options' => [], 'selected' => null])

<div class="form-control-wrap" wire:ignore>
    <select {{ $attributes->merge(['class' => 'form-select js-select2']) }}>
        @if($placeholder)
            <option selected>{{ $placeholder }}</option>
        @endif
        @foreach($options as $option)
            <option
                value="{{ $option->{$valueField} }}" {{ $selected == $option->{$valueField} ? 'selected' : '' }}>
                {{ $option->{$textField} }}
            </option>
        @endforeach
    </select>
</div>
