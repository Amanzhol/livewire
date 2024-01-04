<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite(['resources/css/app.css'])
        @livewireStyles
        @vite(['resources/js/app.js'])
    </head>
    <body>

    <div class="container flex-auto mt-5 ml-10">

        {{ $slot }}
    </div>

        @livewireScriptConfig
    </body>
</html>
