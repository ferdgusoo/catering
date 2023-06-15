<x-app-layout>
    <div class="py-12">
        <div class="text-center">
            <div class="overflow-auto">
                <div class="p-6 text-gray-900">
                    <div class="bg-white rounded-xl grid grid-cols-3 gap-20 p-20">
                        @forelse ($menus as $menu)
                        <div class="h-full flex flex-col justify-center items-center">
                            <img src="{{ url('/images/'.$menu->image) }}" alt="" class="w-full object-cover h-[280px] rounded-[10px]">
                            <div class="text-black">
                                <div class="mt-4">
                                    <h1 class="text-[18px] font-bold">{{ $menu->name }}</h1>
                                    <p class="text-base">{{ $menu->package }}</p>
                                </div>
                                <h1 class="text-[24px] font-medium">Rp. {{ $menu->price }},-</h1>
                            </div>
                            <form action="{{ route('menu.destroy',$menu->id) }}" method="POST">
                                <a class="p-2.5 bg-blue-500 rounded-lg" href="{{ route('menu.edit',$menu->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 bg-red-500 rounded-lg">Delete</button>
                            </form>
                        </div>
                        @empty
                        Tidak ada menu
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
