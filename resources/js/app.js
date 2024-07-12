import "./bootstrap";
import {notification} from "./notification.js";
import datePicker from "./components/datePicker.js";
import fileUpload from "./components/file-upload.js";
import dropzone from "./components/dropzone.js";

document.addEventListener("livewire:init", () => {
    /**
     * Écoute les messages émis par Livewire et déclenche une notification.
     *
     * @param {string} title - Le titre du message à afficher dans la notification.
     * @param {string} type - Le type de la notification (par exemple, 'success', 'error').
     */
    window.Livewire.on("message", ({title, type}) => notification(title, type));
});

Alpine.data("datepicker", datePicker);
Alpine.data("fileUpload", fileUpload);
Alpine.data('dropzone', dropzone);
