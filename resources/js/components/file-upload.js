import * as FilePond from "filepond";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css";
import "filepond/dist/filepond.min.css";
import "filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css";
import FilePondPluginFilePoster from "filepond-plugin-file-poster";
import FilePondPluginFileValidateSize from "filepond-plugin-file-validate-size";
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImageCrop from "filepond-plugin-image-crop";
import FilePondPluginImageEdit from "filepond-plugin-image-edit";
import FilePondPluginImageResize from "filepond-plugin-image-resize";
import FilePondPluginImageTransform from "filepond-plugin-image-transform";

// Import the plugin styles
import "filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css";

export default () => ({
    maxSize: null,
    maxFiles: null,
    fileTypes: null,
    init() {
        this.maxSize = this.$refs.input.getAttribute("data-max-files");
        this.maxFiles = this.$refs.input.getAttribute("data-max-file-size");
        this.fileTypes = this.$refs.input.getAttribute("accept-file");

        FilePond.registerPlugin(
            FilePondPluginFilePoster,
            FilePondPluginImagePreview,
            FilePondPluginFileValidateSize,
            FilePondPluginFileValidateType,
            FilePondPluginImageCrop,
            FilePondPluginImageEdit,
            FilePondPluginImageResize,
            FilePondPluginImageTransform
        );

        const inputElement = this.$refs.input;
        const uploadMethod = inputElement.getAttribute("data-upload-method");
        const removeMethod = inputElement.getAttribute("data-remove-method");
        
        FilePond.create(inputElement, {
            labelIdle: `Drag & Drop your files or <span class="filepond--label-action">Browse</span>`,
            imagePreviewMaxFileSize: this.maxSize,
            imageCropAspectRatio: 1,
            allowReorder: true,
            allowImageEdit: true,
            maxFileSize: this.maxFiles,
            acceptedFileTypes: this.fileTypes,
            allowImageCrop: true,
            imageResizeTargetWidth: 700,
            allowImagePreview: true,
            allowImageResize: true,
            imageResizeTargetHeight: 700,
            allowImageTransform: true,
            server: {
                process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    eval(uploadMethod);
                },
                revert: (filename, load) => {
                    eval(removeMethod);
                }
            }
        });
    }
})
