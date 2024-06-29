export const notification = (message, type) => {
    NioApp.Toast(`${message}`, `${type}`, {
        position: "top-right",
        delay: 4000,
        progressBar: true,
        showDuration: 5000
    });
};

