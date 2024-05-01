<div
        class="form-control-wrap"
        x-data="{
            init() {
                this.$refs.textarea.addEventListener('input', this.resize.bind(this))
            },
            resize() {
                this.$refs.textarea.style.height = 'auto'
                this.$refs.textarea.style.height = this.$refs.textarea.scrollHeight + 'px'
            }
        }"
        x-init="init"
>
    <textarea {{ $attributes->merge(['class' => 'form-control']) }}  x-ref="textarea"></textarea>
</div>