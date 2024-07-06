@props([
    'maxFileSize' => 3,
    'maxFiles' => 3,
    'multiple' => false,
    'fileTypes' => null,
])
<div
    wire:ignore
    x-data="fileUpload"
>
    <input
        type="file"
        x-ref="input"
        {{ $multiple ? 'multiple' : '' }}
        data-upload-method="@this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)"
        data-remove-method="@this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)"
        data-allow-reorder="true"
        accept-file="['{{ $fileTypes }}']"
        data-max-file-size="{{ $maxFileSize }}MB"
        data-max-files="{{ $maxFiles }}"
        {{ $attributes->except('wire:model') }}
    >
</div>
