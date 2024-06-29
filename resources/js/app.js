import "./bootstrap";
import { notification } from "./notification.js";

document.addEventListener("livewire:init", () => {
    window.Livewire.on("message", (event) => {
        const title = event.title;
        notification(title, "success");
    });
});

