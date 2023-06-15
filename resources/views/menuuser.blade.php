<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen relative">
        <div class="bg-gradient-to-l from-[#FF0000] to-[#EFF046]">
            <nav class="py-4">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <a href="/" class="text-[36px] text-[#FF0000] font-bold">
                                    JnA Catering
                                </a>
                            </div>
                        </div>

                        <!-- Navigation Links -->
                        <div class="flex flex-row items-center">
                            <div class="space-x-8 -my-px ml-10 flex">
                                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-[#FF0000] text-base font-semibold">
                                    {{ __('Home') }}
                                </x-nav-link>
                                <x-nav-link :href="route('menuuser')" :active="request()->routeIs('menuuser')" class="text-[#FF0000] text-base font-semibold">
                                    {{ __('Daftar Menu') }}
                                </x-nav-link>
                                <a href="login" class="inline-flex items-center px-3 py-2 text-base font-bold rounded-md text-black bg-[#EFF406] h-1/2">
                                    <img src="{{ url('/img/wa.png') }}" alt="" class="mr-1">
                                    08213398905
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div>
                        <h1 class="text-white font-bold text-2xl">Menu Paket</h1>
                        <div class="bg-white rounded-xl grid grid-cols-3 gap-20 py-8 px-20">
                            @forelse ($menupaket as $menu)
                            <div>
                                <img src="{{ url('/images/'.$menu->image) }}" alt="" class="w-full object-cover h-[280px] rounded-[10px]">
                                <div class="text-black">
                                    <div class="my-4">
                                        <h1 class="text-[18px] font-bold">{{ $menu->name }}</h1>
                                        <p class="text-base">{{ $menu->package }}</p>
                                    </div>
                                    <h1 class="text-[24px] font-medium">Rp. {{ $menu->price }},-</h1>

                                </div>
                            </div>
                            @empty
                                Menu Kosong
                            @endforelse
                        </div>
                    </div>

                    <div class="mt-12">
                        <h1 class="text-white font-bold text-2xl">Lauk & Sayur</h1>

                        <div class="bg-white rounded-xl grid grid-cols-3 gap-20 py-8 px-20">
                            @forelse ($menulauk as $menu)
                            <div>
                                <img src="{{ url('/images/'.$menu->image) }}" alt="" class="w-full object-cover h-[280px] rounded-[10px]">
                                <div class="text-black">
                                    <div class="my-4">
                                        <h1 class="text-[18px] font-bold">{{ $menu->name }}</h1>
                                        <p class="text-base">{{ $menu->package }}</p>
                                    </div>
                                    <h1 class="text-[24px] font-medium">Rp. {{ $menu->price }},-</h1>

                                </div>
                            </div>
                            @empty
                                Menu Kosong
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
