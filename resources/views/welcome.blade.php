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
        <div class="bg bg-gradient-to-r from-black/[15%] to-white/0">
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
                                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-[#FF0000] text-base font-semibold">
                                    {{ __('Review') }}
                                </x-nav-link>
                                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-[#FF0000] text-base font-semibold">
                                    {{ __('Daftar Menu') }}
                                </x-nav-link>
                                <a href="login" class="inline-flex items-center px-3 py-2 text-base font-bold rounded-md text-black bg-[#EFF406] h-1/2">
                                    08213398905
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <img src="{{ url('/img/leaves.png') }}" alt="" class="absolute top-10 right-5 -z-20">

                    {{-- Hero --}}
                    <div class="w-full flex flex-row justify-between items-center gap-40 h-[76vh]">
                        <div class="w-1/2">
                            <h1 class="text-[48px] font-bold leading-[50px]">Lihat segala jenis menu yang kami sediakan untuk Anda.</h1>
                            <p class="text-base leading-[26px] my-[26px]">Melalui laman ini, kami akan menunjukkan menu tersedia yang dapat Anda pesan melalui Kontak WhatsApp yang terlampir</p>
                            <div class="flex gap-[24px]">
                                <div class="flex gap-2 py-4 px-8 bg-[#EFF406] drop-shadow-xl">
                                    <a href="#" class="text-white">Order Now</a>
                                    <img src="{{ url('/img/cart.png') }}" class="object-contain">
                                </div>
                                <div class="flex gap-2 py-4 px-8 bg-white drop-shadow-xl">
                                    <a href="#" class="text-[#FF0000]">Lihat Menu</a>
                                    <img src="{{ url('/img/arrow.png') }}" class="object-contain">
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <img src="{{ url('/img/hero.png') }}">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <main>

            {{-- Counter --}}
            <div class="w-full bg-[#EFF406]">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="w-full py-12 flex flex-row justify-center items-center gap-[118px]">
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{ url('/img/cutlery.png') }}" alt="">
                            <p class="mt-[12px] text-base font-bold">Berbagai Jenis Menu</p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{ url('/img/bell-ringing.png') }}" alt="">
                            <p class="mt-[12px] text-base font-bold">Stock Selalu Update</p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{ url('/img/heart.png') }}" alt="">
                            <p class="mt-[12px] text-base font-bold">Menu Disukai Customer</p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{ url('/img/percent.png') }}" alt="">
                            <p class="mt-[12px] text-base font-bold">Harga Terjangkau</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- About --}}
            <div class="w-full" style="background-image: url('{{ url('img/aboutbg.png') }}') ;">

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="py-12">
                        <div class="flex flex-row gap-10 items-center">
                            <img src="{{ url('/img/about2.png') }}" alt="">
                            <div>
                                <h1 class="text-[32px] font-bold leading[40px]">Kami selalu memprioritaskan penggunaan bahan baku untuk hasil terbaik</h1>
                                <p class="text-base leading-[28px] my-[24px]">Penyediaan bahan baku merupakan langkah penting yang selalu berada dalam kualitas kontrol kami.</p>
                                <div class="flex gap-2 py-4 px-8 bg-[#EFF406] drop-shadow-xl w-1/3">
                                    <a href="#" class="text-[#FF0000]">Lihat Menu</a>
                                    <img src="{{ url('/img/arrow.png') }}" class="object-contain">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row gap-10 items-center mt-[150px]">
                            <div>
                                <h1 class="text-[32px] font-bold leading[40px]">Siap untuk melayani setiap kebutuhan konsumsi Anda.</h1>
                                <p class="text-base leading-[28px] my-[24px]">Komitmen untuk selalu menyediakan kebutuhan konsumsi Anda, kami akan siap melengkapi kebutuhan yang diperlukan. Semua itu akan kami hidangkan dengan hati untuk kepuasaan Anda.</p>
                                <div class="flex gap-2 py-4 px-8 bg-[#EFF406] drop-shadow-xl w-1/3">
                                    <a href="#" class="text-[#FF0000]">Lihat Menu</a>
                                    <img src="{{ url('/img/arrow.png') }}" class="object-contain">
                                </div>
                            </div>
                            <img src="{{ url('/img/about1.png') }}" alt="">

                        </div>
                    </div>
                </div>

                <div>
                    <img src="{{ url('/img/story.png') }}" alt="">
                </div>

                {{-- Produk --}}
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-[130px]">
                <div class="py-12">
                    <div class="w-full flex justify-center">
                        <div class="text-center">
                            <h1 class="text-[36px] font-bold leading-[40px]">Pilihan Menu yang Paling Diminati</h1>
                            <p class="text-base mt-[14px] mb-[58px]">Berikut beberapa pilihan menu yang disukai oleh customer yang sudah mempercayakan kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
