<x-app-layout>
    <div class="py-12">
        <div>
            <div class="overflow-auto">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('menu.store') }}" method="POST" class="bg-white rounded-xl flex flex-row gap-20 p-12" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col gap-20 w-1/2">
                            <div>
                                <label for="name" class="text-sm font-medium text-gray-700">Nama Menu</label>
                                <input type="text" name="name" class="border-gray-300 focus:border-black focus:ring-black rounded-md shadow-sm w-full">
                            </div>
                            <div>
                                <label for="package" class="text-sm font-medium text-gray-700">Isi Menu</label>
                                <input type="text" id="package" name="package" class="border-gray-300 focus:border-black focus:ring-black rounded-md shadow-sm w-full">
                            </div>
                            <div>
                                <label for="price" class="text-sm font-medium text-gray-700">Harga Menu</label>
                                <input type="number" id="price" name="price" class="border-gray-300 focus:border-black focus:ring-black rounded-md shadow-sm w-full">
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="type1" name="type" class="border-gray-300 focus:border-black focus:ring-black rounded-md shadow-sm" value="Menu Paket">
                                <label for="paket" class="ml-2">Menu Paket</label>
                                <input type="radio" id="type2" name="type" class="border-gray-300 focus:border-black focus:ring-black rounded-md shadow-sm ml-4" value="Lauk & Sayur">
                                <label for="lauk" class="ml-2">Lauk & Sayur</label>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between gap-20 w-1/2">
                            <div>
                                <label for="desc" class="text-sm font-medium text-gray-700">Deskripsi Menu</label>
                                <textarea name="desc" rows="5" class="border-gray-300 focus:border-black focus:ring-black rounded-md shadow-sm w-full"></textarea>
                            </div>
                            <div>
                                <label for="image" class="text-sm font-medium text-gray-700">Foto Menu</label>
                                <input type="file" id="image" name="image" class="w-full">
                            </div>
                            <button type="submit" class="bg-[#EFF046] p-4 rounded-xl">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
