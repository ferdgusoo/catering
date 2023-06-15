<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased ">
    <div class="min-h-screen bg-gradient-to-l from-[#FF0000] to-[#EFF046]">
        @include('layouts.navigation')


        <div class="flex flex-row gap-20 min-h-[90vh] w-full">
            <div class="w-1/6 h-[200px] mt-56 bg-white p-8 rounded-tr-3xl rounded-br-3xl drop-shadow-lg">
                <div class="flex flex-col gap-6">
                    <div class="flex flex-row gap-5">
                        <img src="{{ url('/img/minimize.png') }}"/>
                        <a href="{{ route('dashboard') }}" class="text-red-500">
                            {{ __('Home') }}
                        </a>
                    </div>
                    <div class="flex flex-row gap-5">
                        <img src="{{ url('/img/view-list.png') }}"/>
                        <a href="{{ route('menu.index') }}">
                            {{ __('Daftar Menu') }}
                        </a>
                    </div>
                    <div class="flex flex-row gap-5">
                        <img src="{{ url('/img/write.png') }}"/>
                        <a href="{{ route('menu.create') }}" class="text-blue-500">
                            {{ __('Input Menu') }}
                        </a>
                    </div>
                </div>
            </div>
            <!-- Page Content -->
            <main class="w-[72%]">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
