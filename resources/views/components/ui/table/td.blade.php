@props(['title'])
<td {{ $attributes->merge(['class' => 'nk-tb-col']) }}>
    {{ $title ?? $slot }}
</td>