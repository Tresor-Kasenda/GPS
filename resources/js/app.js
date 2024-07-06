import "./bootstrap";
import { notification } from "./notification";
import datePicker from "./components/datePicker";
import fileUpload from "./components/file-upload";
import dropzone from "./components/dropzone.js";

document.addEventListener("livewire:init", () => {
    window.Livewire.on("message", (event) => {
        const title = event.title;
        notification(title, "success");
    });
});

Alpine.data("datepicker", datePicker);
Alpine.data("fileUpload", fileUpload);
Alpine.data('dropzone', dropzone);
