<div {{ $attributes->merge(['class' => 'card card-bordered']) }}>
    <div class="card-inner">
        {{ $slot }}
    </div>
</div>