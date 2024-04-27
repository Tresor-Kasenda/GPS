@props(['title'])
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    <base href="{{ config('app.name') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="">
    <title>{{ config('app.name') }} | {{ $title }}</title>
    @vite(['resources/css/app.css'])
</head>

<body class="nk-body bg-white npc-general pg-auth">
<div class="nk-app-root">
    <div class="nk-main">
        <div class="nk-wrap nk-wrap-nosidebar">
            <div class="nk-content ">
                <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                    <div class="brand-logo pb-4 text-center">
                        <x-ui.auth.logo :route="route('welcome')"/>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                <x-ui.auth.auth-footer/>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/bundle.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>