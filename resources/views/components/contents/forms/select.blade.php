@props([
    'valueField',
    'textField',
    'placeholder',
    'options' => [],
    'selected' => null,
])

<div {{ $attributes->merge(['class' => 'form-control-wrap']) }}>
    <select class="form-select js-select2">
        @if($placeholder)
            <option selected>{{ $placeholder }}</option>
        @endif
        @if($options)
            @foreach($options as $option)
                <option
                        :value="{{ $option->{$valueField} }}"
                        {{ $selected == $option->{$valueField} ? 'selected' : '' }}
                >
                    {{ $option->{$textField} }}
                </option>
            @endforeach
        @endif
    </select>
</div>