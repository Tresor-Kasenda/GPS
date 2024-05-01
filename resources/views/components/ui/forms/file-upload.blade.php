<div
        wire:ignore
        x-data="{
        init() {
            FilePond.registerPlugin(FilePondPluginFileValidateType);
            FilePond.registerPlugin(FilePondPluginFileValidateSize);
            FilePond.registerPlugin(FilePondPluginImagePreview);
            FilePond.setOptions({
                allowMultiple: {{ $attributes->has('multiple') ? 'true' : 'false' }},
                allowFileTypeValidation: {{ $attributes->has('allowFileTypeValidation') ? 'true' : 'false' }},
                acceptedFileTypes: ['image/png', 'image/jpg', 'images/jpeg', 'image/gif'],
                allowFileSizeValidation: {{ $attributes->has('allowFileSizeValidation') ? 'true' : 'false' }},
                maxFileSize: {!! $attributes->has('maxFileSize') ? "'".$attributes->get('maxFileSize')."'" : 'null' !!},
                server: {
                     process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                        @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)
                    },
                    revert: (filename, load) => {
                        @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
                    },
                },
                allowRemove: {{ $attributes->has('allowRemove') ? 'true' : 'false' }},
                allowReorder: true,
            });
            FilePond.create(this.$refs.input);
        }
    }"
>
    <input
            type="file"
            x-ref="input"
            {{ $attributes->except('wire:model') }}
    >
</div>

@push('styles')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
          rel="stylesheet">
@endpush

@push('scripts')
    <script
            src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script
            src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
@endpush
