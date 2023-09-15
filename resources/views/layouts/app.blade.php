<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @include('layouts.favicons')

        <!-- Styles -->
        @vite('resources/css/app.css')

        @livewireStyles

        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @if(!isset($hideNav) || $hideNav !== true)
            @livewire('navigation-menu')
            @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow dark:bg-gray-800">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
