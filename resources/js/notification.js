import Push from "push.js";

export default function notification(message, type) {
    NioApp.Toast(`${message}`, `${type}`, {
        position: 'top-right'
    });
}

export const push = (title) => {
    Push.Permission.request(() => {
            console.log('Permission granted');
            Push.create("Hello world!", {
                body: "This is a custom notification",
                icon: '/path/to/icon.png',
                timeout: 4000,
                onClick: function () {
                    window.focus();
                    this.close();
                }
            });
        },
        () => console.log('Permission denied')
    );

    // Check if the user closed the dialog without making a choice
    if (Push.Permission.get() === Push.Permission.DEFAULT) {
        console.log('User closed the dialog without making a choice');
    }
}