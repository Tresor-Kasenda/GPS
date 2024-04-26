<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js scroll-smooth">

<head>
    <base href="">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="">
    <title>Dashboard | CMS | {{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
<div class="nk-app-root">

</div>

<script src="{{ asset('js/bundle.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
@stack('scripts')
</body>

</html>