<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-2xl font-bold text-center mb-8 border-b-2 pb-2">
            {{ $sekolah->nama }}
        </h1>

        <!-- Identitas Sekolah Section -->
        <div class="bg-blue-500 text-white p-3 mb-4">
            <h2 class="font-semibold">Identitas Sekolah</h2>
        </div>
        <div class="bg-orange-100 p-4 mb-6 rounded">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p><span class="font-semibold">Kepala Sekolah:</span> {{ $sekolah->kapsek }}</p>
                    <p><span class="font-semibold">Akreditasi:</span> {{ $sekolah->akreditasi }}</p>
                    <p><span class="font-semibold">Kurikulum:</span> {{ $sekolah->kurikulum }}</p>
                </div>
                <div>
                    <p><span class="font-semibold">NPSN:</span> {{ $sekolah->npsn }}</p>
                    <p><span class="font-semibold">Alamat:</span> {{ $sekolah->alamat }}</p>
                </div>
            </div>
        </div>

        <!-- Tanah Section -->
        <div x-data="{ open: false }">
            <button 
                @click="open = !open"
                class="bg-blue-500 text-white p-3 w-full flex justify-between items-center mb-4"
            >
                <h2 class="font-semibold">Tanah</h2>
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>
            </button>
            <div x-show="open" class="bg-orange-100 p-4 mb-6 rounded">
                <div class="grid grid-cols-2 gap-4">
                    <p><span class="font-semibold">Status Tanah:</span> {{ $sekolah->status_tanah }}</p>
                    <p><span class="font-semibold">No. Sertifikat:</span> {{ $sekolah->no_sertifikat }}</p>
                </div>
            </div>
        </div>

        <!-- Denah & Foto Section -->
        <div x-data="{ open: false }">
            <button 
                @click="open = !open"
                class="bg-blue-500 text-white p-3 w-full flex justify-between items-center mb-4"
            >
                <h2 class="font-semibold">Denah & Foto Sekolah</h2>
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>
            </button>
            <div x-show="open" class="bg-orange-100 p-4 mb-6 rounded">
                <div class="mb-4">
                    <h3 class="font-semibold mb-2">Denah Sekolah</h3>
                    <div class="w-full flex justify-center">
                        <div class="w-full md:w-3/4 lg:w-4/5 flex justify-center items-center">
                            {!! $sekolah->denah !!}
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">Foto Sekolah</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @if(isset($sekolah->foto['dalam']))
                            <div class="rounded overflow-hidden">
                                <img src="{{ asset('storage/' . $sekolah->foto['dalam']) }}" 
                                     alt="Foto Dalam Sekolah" 
                                     class="w-full h-48 object-cover">
                                <p class="text-center mt-2">Dalam Sekolah</p>
                            </div>
                        @endif
                        @if(isset($sekolah->foto['depan']))
                            <div class="rounded overflow-hidden">
                                <img src="{{ asset('storage/' . $sekolah->foto['depan']) }}" 
                                     alt="Foto Depan Sekolah" 
                                     class="w-full h-48 object-cover">
                                <p class="text-center mt-2">Depan Sekolah</p>
                            </div>
                        @endif
                        @if(isset($sekolah->foto['halaman']))
                            <div class="rounded overflow-hidden">
                                <img src="{{ asset('storage/' . $sekolah->foto['halaman']) }}" 
                                     alt="Foto Halaman Sekolah" 
                                     class="w-full h-48 object-cover">
                                <p class="text-center mt-2">Halaman Sekolah</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Bangunan Section -->
<div x-data="{ open: false }">
    <button 
        @click="open = !open"
        class="bg-blue-500 text-white p-3 w-full flex justify-between items-center mb-4"
    >
        <h2 class="font-semibold">Bangunan</h2>
        <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
        <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <div x-show="open" class="bg-orange-100 p-4 mb-6 rounded">
        <div class="space-y-4">
            @php
                $facilities = [
                    'ruang_kelas' => 'Ruang Kelas',
                    'ruang_perpus' => 'Ruang Perpustakaan',
                    'ruang_lab' => 'Ruang Laboratorium',
                    'ruang_praktik' => 'Ruang Praktik',
                    'ruang_pimpinan' => 'Ruang Pimpinan',
                    'ruang_guru' => 'Ruang Guru',
                    'ruang_ibadah' => 'Ruang Ibadah',
                    'uks' => 'UKS',
                    'toilet' => 'Toilet',
                    'gudang' => 'Gudang',
                    'sirkulasi' => 'Sirkulasi',
                    'olahraga' => 'Olahraga',
                    'tu' => 'Tata Usaha',
                    'konseling' => 'Ruang Konseling',
                    'osis' => 'Ruang OSIS'
                ];
            @endphp

            @foreach($facilities as $key => $label)
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="font-semibold">{{ $label }}</h3>
                            <p class="text-sm text-gray-600">
                                Jumlah Unit: {{ $sekolah->sarpras->$key ?? 'Belum tersedia' }}
                            </p>
                        </div>
                        @if($sekolah->sarpras && $sekolah->sarpras->$key > 0)
                            <a href="{{ route('detail-sarpras', ['sarpras_id' => $sekolah->sarpras->id, 'jenis_ruang' => $key]) }}" 
                               class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-colors duration-200">
                                <span>Informasi Lebih Lanjut</span>
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        @else
                            <span class="text-gray-400 italic">Tidak tersedia</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</x-app-layout>