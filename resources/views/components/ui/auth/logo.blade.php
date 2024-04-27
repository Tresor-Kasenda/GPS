@props(['route'])
<a href="{{ $route }}" class="logo-link">
    <img
            class="logo-light logo-img"
            src="{{ asset('images/logo.jpg') }}"
            srcset="{{ asset('images/logo.jpg') }} 2x"
            alt="logo du Haut Katanga"/>
    <img
            class="logo-dark logo-img"
            src="{{ asset('images/logo.jpg') }}"
            srcset="{{ asset('images/logo.jpg') }} 2x"
            alt="logo du Haut Katanga"/>
</a>