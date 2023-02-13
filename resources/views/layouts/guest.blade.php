<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/css/dashlite.min.css', 'resources/css/theme.css', 'resources/js/scripts.js','resources/js/bundle.js','resources/js/app.js'])
</head>
<body class="nk-body bg-white npc-general pg-auth">
<div class="nk-app-root">
    <div class="nk-main">
        {{ $slot }}
    </div>
</div>
</body>
</html>
