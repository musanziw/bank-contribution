<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/css/dashlite.min.css', 'resources/css/theme.css', 'resources/js/scripts.js','resources/js/bundle.js','resources/js/app.js'])
</head>
<body class="nk-body bg-lighter npc-general has-sidebar ">
<div class="nk-app-root">
    <div class="nk-main">
        @include('partials.sidebar-bank')
        <div class="nk-wrap">
            @include('partials.header-bank')
            <div class="nk-content">
                <div class="container-fluid">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
