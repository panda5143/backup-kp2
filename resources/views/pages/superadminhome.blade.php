<x-app-layout>

<!-- Content Section -->
<div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Data Inventaris Sekolah</h1>
                <button class="bg-[#E40004] text-white px-4 py-2 rounded hover:bg-[#940000] transition">
                    + Tambah Data Sekolah
                </button>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 text-left">NPSN</th>
                            <th class="px-4 py-2 text-left">Nama Sekolah</th>
                            <th class="px-4 py-2 text-left">Alamat</th>
                            <th class="px-4 py-2 text-left">Jenjang</th>
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">20328973</td>
                            <td class="px-4 py-3">SDN Ungaran 01</td>
                            <td class="px-4 py-3">Jl. Diponegoro No. 12, Ungaran</td>
                            <td class="px-4 py-3">SD</td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                    Aktif
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800">
                                        Edit
                                    </button>
                                    <button class="text-red-600 hover:text-red-800">
                                        Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    

<!-- Content Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Data Inventaris Barang</h1>
                <button class="bg-[#E40004] text-white px-4 py-2 rounded hover:bg-[#940000] transition">
                    + Tambah Barang
                </button>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 text-left">Kode Barang</th>
                            <th class="px-4 py-2 text-left">Nama Barang</th>
                            <th class="px-4 py-2 text-left">Kategori</th>
                            <th class="px-4 py-2 text-left">Jumlah</th>
                            <th class="px-4 py-2 text-left">Kondisi</th>
                            <th class="px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">BRG-001</td>
                            <td class="px-4 py-3">Meja Guru</td>
                            <td class="px-4 py-3">Furniture</td>
                            <td class="px-4 py-3">50</td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                    Baik
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800">
                                        Edit
                                    </button>
                                    <button class="text-red-600 hover:text-red-800">
                                        Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>