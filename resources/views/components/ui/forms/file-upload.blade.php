@props([
    'maxFileSize' => 3,
    'maxFiles' => 3,
    'multiple' => false,
    'fileTypes' => 'image/jpg,image/jpeg,image/png,image/gif,image/svg',
])
<div
    wire:ignore
    x-data="fileUpload"
>
    <input
        type="file"
        x-ref="input"
        {{ $multiple ? 'multiple' : '' }}
        data-allow-reorder="true"
        accept-file="['{{ $fileTypes }}']"
        data-max-file-size="{{ $maxFileSize }}MB"
        data-max-files="{{ $maxFiles }}"
        {{ $attributes->except('wire:model') }}
    >
</div>
