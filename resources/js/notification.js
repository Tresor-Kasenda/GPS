export const notification = (message, type) => {
    NioApp.Toast(`${message}`, `${type}`, {
        position: "top-right",
        duration: 5000
    });
};

