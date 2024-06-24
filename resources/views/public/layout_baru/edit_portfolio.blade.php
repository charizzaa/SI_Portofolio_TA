@extends('public.layout_baru.layouts')

@section('content')
<div class="container mx-auto p-4 mb-12">
    <h1 class="text-4xl font-bold text-center mb-12">Sunting Portofolio Tugas Akhir</h1>
    <div class="p-6 rounded-lg">

        <form action="{{ route('public.update_portfolio') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-base font-medium text-gray-700">Ubah Foto Portofolio</label>
                <div class="w-full border-dashed border-2 border-gray-300 rounded-lg p-4 text-center cursor-pointer" id="fileUploadBox1">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="block mt-2 text-gray-500">Tambah Foto</span> -->
                    <input type="file" name="thumbnail_image_url" id="fileInput1" accept="image/*">
                </div>
                <span id="fileName1" class="block mt-2 text-gray-700"></span>
                <span id="errorMessage1" class="hidden mt-2 text-red-500 text-sm">File yang diunggah harus berupa PNG, JPEG, JPG</span>
            </div>
            <div class="mb-4">
                <label for="nama-pembuat" class="block text-base font-medium text-gray-700">Nama
                    Pembuat</label>
                <input readonly type="text" value="{{ $content['first_name'] . ' ' . $content['last_name'] }}" id="nama-pembuat" name="owner" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="judul-portofolio" class="block text-base font-medium text-gray-700">Judul
                    Portofolio</label>
                <input readonly type="text" value="{{ $content['tittle'] }}" id="judul-portofolio" name="judul-portofolio" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="dosen" class="block text-base font-medium text-gray-700">Dosen</label>
                <input readonly type="text" id="dosen" name="dosen" value="{{ $content['lecturer'] }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-base font-medium text-gray-700">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" readonly class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $content['description'] }}</textarea>
            </div>
            <div class="mb-4">
                <label for="tag" class="block text-base font-medium text-gray-700">Tag</label>
                <select id="tag" name="tags[]" multiple class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="Software Engineering">Software Engineering</option>
                    <option value="Intelligent Gaming">Intelligent Gaming</option>
                    <option value="System Security and Cybersecurity">System Security and Cybersecurity</option>
                    <option value="Mobile and Responsive App Development">Mobile and Responsive App Development</option>
                    <option value="Blockchain Technology and Digital Finance">Blockchain Technology and Digital Finance</option>
                    <option value="Artificial Intelligence and Natural Language Processing">Artificial Intelligence and Natural Language Processing</option>
                    <option value="IoT">IoT</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="video_tittle" class="block text-base font-medium text-gray-700">Judul Video</label>
                <textarea id="video_tittle" name="video_tittle" rows="1" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $content['video_tittle'] }}</textarea>
            </div>
            <div class="mb-4">
                <label for="video_url" class="block text-base font-medium text-gray-700">Tautan Video</label>
                <textarea id="video_url" name="video_url" rows="1" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $content['video_url'] }}</textarea>
            </div>
            <div class="mb-4">
                <label for="tipe_konten" class="block text-base font-medium text-gray-700">Tipe Konten</label>
                <select id="tipe_konten" name="tipe_konten" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="jurnal">Jurnal</option>
                    <option value="tugas akhir">Tugas Akhir</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-base font-medium text-gray-700">Tambah Paper Portofolio</label>
                <div class="w-full border-dashed border-2 border-gray-300 rounded-lg p-4 text-center cursor-pointer" id="fileUploadBox">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg> -->
                    <!-- <span class="block mt-2 text-gray-500">Tambah paper</span> -->
                    <input type="file" id="fileInput" accept="application/pdf" name="content_url">
                </div>
                <span id="fileName" class="block mt-2 text-gray-700"></span>
                <span id="errorMessage" class="hidden mt-2 text-red-500 text-sm">File yang diunggah harus berupa PDF.</span>
            </div>
            <!-- <div class="mb-4">
            <label class="block text-base font-medium text-gray-700">Tambah Demo</label>
            <div class="w-full border-dashed border-2 border-gray-300 rounded-lg p-4 text-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span class="block mt-2 text-gray-500">Tambah video demo</span>
            </div>
        </div> -->
            <div class="text-right">
                <button type="submit" class="flex flex-row bg-teal-800 text-lg text-white py-2 px-4 rounded-md shadow-sm hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                    </svg>
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection