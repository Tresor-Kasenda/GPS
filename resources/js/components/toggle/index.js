export const toggle = () => {
    return {
        open: false,
        init() {
            this.open = !this.open;
        }
    };
};
