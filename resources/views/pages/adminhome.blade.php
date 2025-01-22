<x-app-layout>
    <!-- Admin Dashboard Header -->
    <div class="bg-sky-400 py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-white text-center">ADMIN DASHBOARD</h1>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container mx-auto px-4 py-8">
        <!-- Data Sekolah Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6">DATA SEKOLAH</h2>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                    @foreach($korwils as $korwil)
                        <a href="{{ route('data-sekolah.list', $korwil) }}" class="cursor-pointer">
                            <div class="relative group">
                                <div class="aspect-square overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                                    <img 
                                        src="{{ $korwil->image_url }}" 
                                        alt="{{ $korwil->nama }}"
                                        class="w-full h-full object-cover"
                                    >
                                    <div class="absolute bottom-0 left-0 right-0 bg-[#FFB930] text-black p-2">
                                        <p class="text-center font-semibold">{{ $korwil->nama }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Data Barang Section -->
        <section>
            <h2 class="text-2xl font-bold mb-6">DATA BARANG</h2>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($kibTypes as $kibType)
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                            <img src="{{ $kibType->image_url ?? asset('images/default-kib.png') }}"
                                 alt="{{ $kibType->nama }}"
                                 class="w-full h-48 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $kibType->nama }}</h2>
                                <p class="text-gray-600 text-sm mb-4">{{ Str::limit($kibType->deskripsi, 150) }}</p>
                                <a href="{{ route('data-barang.show', ['kibType' => $kibType->id]) }}" 
                                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-8">
                            <p class="text-gray-500">Belum ada data barang.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
</x-app-layout>