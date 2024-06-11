@extends('public.layout_baru.layouts')

@section('content')
    <div class="container mx-auto p-4 mb-12">
        <h1 class="text-4xl font-bold text-center mb-12">Sunting Portofolio Tugas Akhir</h1>
        <div class="p-6 rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center">
                    <div class="w-full border-dashed border-2 border-gray-300 rounded-lg p-4 text-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        <span class="block mt-2 text-gray-500">Ubah Foto</span>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <form>
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label for="nama-pembuat" class="block text-base font-medium text-gray-700">Nama
                                    Pembuat</label>
                                <input type="text" id="nama-pembuat" name="nama-pembuat"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="judul-portofolio" class="block text-base font-medium text-gray-700">Judul
                                    Portofolio</label>
                                <input type="text" id="judul-portofolio" name="judul-portofolio"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="kategori" class="block text-base font-medium text-gray-700">Kategori</label>
                                <input type="text" id="kategori" name="kategori"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="dosen" class="block text-base font-medium text-gray-700">Dosen</label>
                                <input type="text" id="dosen" name="dosen"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-base font-medium text-gray-700">Tambah Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Tulis deskripsi..."></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-base font-medium text-gray-700">Tambah Foto Portofolio</label>
                <div class="w-full border-dashed border-2 border-gray-300 rounded-lg p-4 text-center cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="block mt-2 text-gray-500">Tambah 3 foto atau lebih</span>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-base font-medium text-gray-700">Tambah Paper Portofolio</label>
                <div class="w-full border-dashed border-2 border-gray-300 rounded-lg p-4 text-center cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="block mt-2 text-gray-500">Tambah paper</span>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-base font-medium text-gray-700">Tambah Demo</label>
                <div class="w-full border-dashed border-2 border-gray-300 rounded-lg p-4 text-center cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="block mt-2 text-gray-500">Tambah video demo</span>
                </div>
            </div>
            <div class="text-right">
                <button type="submit"
                    class="flex flex-row bg-teal-800 text-lg text-white py-2 px-4 rounded-md shadow-sm hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                      </svg>                      
                    Simpan
                </button>
            </div>
        </div>
    </div>
@endsection