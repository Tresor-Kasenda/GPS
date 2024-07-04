import flatpickr from "flatpickr";

export default () => ({
    init() {
        const dateInput = this.$refs.dateInput;
        flatpickr(dateInput, {
            minDate: dateInput.getAttribute("date-min-date"),
            enableTime: dateInput.getAttribute("date-time") === "true",
            dateFormat: dateInput.getAttribute("date-format"),
            onChange: (selectedDates, dateStr) => {
                this.$dispatch("input", dateStr);
            }
        });
    }
});
