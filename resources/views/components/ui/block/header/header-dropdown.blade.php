<div {{ $attributes->merge(['class' => 'dropdown-inner']) }}>
    <ul class="link-list">
        {{ $slot }}
    </ul>
</div>