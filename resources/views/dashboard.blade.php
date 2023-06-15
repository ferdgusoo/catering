<x-app-layout>
    <div class="py-12 h-full flex items-center justify-center">
        <div class="text-center">
            <div class="">
                <div class="p-6 text-gray-900 -mt-20">
                    <h1 class="text-5xl font-bold">SELAMAT DATANG!</h1>
                    <h1 class="text-5xl font-bold">{{ Auth::user()->name }}</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
