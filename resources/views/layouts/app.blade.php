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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
<div class="nk-app-root">
    <div class="nk-main ">
        <x-ui.sidebar/>
        <div class="nk-wrap ">
            <x-ui.header/>
            <div class="nk-content ">
                <div class="container-fluid">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
            <x-ui.footer/>
        </div>
    </div>
</div>

<script src="{{ asset('js/bundle.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
@stack('scripts')
</body>
</html>
