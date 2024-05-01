@props(['title'])
<th {{ $attributes->merge(['class' => 'nk-tb-col']) }}>
    <span class="sub-text">{{ $title ?? $slot }}</span>
</th>