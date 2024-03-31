@extends('public.layout_baru.layouts')

@section('content')
    @if (session('success'))
        <div class="ms-12 text-gray-500 font-bold mt-8 text-lg">
            {{ session('success') }}
        </div>
    @endif

    <div id="searc_container" class="flex flex-col items-center">
        <p class="text-4xl text-teal-800 font-bold mb-2">Topik Tugas Akhir</p>
        <p class="text-4xl text-teal-800 font-bold mb-10">Teknologi Rekayasa Perangkat Lunak</p>

        <div id="search_bar" class="flex items-center">
            <div class="bg-teal-500 rounded-full w-20 h-20 z-10 flex justify-center items-center shadow-lg shadow-slate-700">
                <button>
                    <img class="w-10 h-auto" src="{{asset('asset/search.png')}}" alt="">
                </button>
            </div>
            <input type="text" placeholder="Cari portofolio Tugas Akhir di sini..."
                class="z-0 h-16 ms-[-30px] ps-16 text-lg bg-teal-800 rounded-xl text-white font-bold shadow-lg shadow-slate-700"
                style="width: 600px;">
        </div>
    </div>

    <p class="text-lg text-teal-800 font-bold mt-16 self-start ms-32">Cari Berdasarkan Topik</p>

    <div class="mt-[-100px] mx-auto py-8" style="max-width: 1308px;">
        <div class="relative">

            <!-- Carousel Container -->
            <div class="overflow-hidden w-full rounded-lg">
                <!-- Slides Container -->
                <div id="slides" class="flex transition-transform ease-in-out duration-300 transform translate-x-0">
                    <!-- Slide 1 -->
                    <div id="container_tag" class="flex mt-48 space-x-16 w-100 h-80 me-8">

                        <div id="item_tag" class="flex flex-col">
                            <button onclick="window.location.href='{{route('public.portofolio', ['category' => 'Artificial Intelligence'])}}'">

                            <div class="relative w-96 h-36 bg-teal-800 rounded-xl shadow-lg shadow-slate-700 hover:scale-105 transition-transform duration-300">
                                <p class="text-white text-xl pt-14 text-left ms-20 font-bold">Artificial
                                    Intelligence</p>
                                <div
                                    class="absolute w-36 h-36 bg-teal-500 rounded-full shadow-md shadow-slate-800 end-[-20px] top-[-80px]">
                                    <div class="w-full h-full flex flex-col justify-center items-center drop-shadow-xl">
                                        <img class="w-20 h-20" src="{{ asset('asset/icon_white/aiwh.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            </button>
                        </div>

                        <div id="item_tag" class="flex flex-col">
                            <button onclick="window.location.href='{{route('public.portofolio', ['category' => 'Software Engineering'])}}'">

                            <div class="relative w-96 h-36 bg-teal-800 rounded-xl shadow-lg shadow-slate-700 hover:scale-105 transition-transform duration-300">
                                <p class="text-white text-xl pt-14 text-leftms-20 font-bold">Software Engineering</p>
                                <div
                                    class="absolute w-36 h-36 bg-teal-500 rounded-full shadow-md shadow-slate-800 end-[-20px] top-[-80px]">
                                    <div class="w-full h-full flex flex-col justify-center items-center">
                                        <img class="w-20 h-20" src="{{ asset('asset/icon_white/softw.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            </button>
                        </div>

                        <div id="item_tag" class="flex flex-col">
                            <button onclick="window.location.href='{{route('public.portofolio', ['category' => 'Software Engineering'])}}'">

                            <div class="relative w-96 h-36 bg-teal-800 rounded-xl shadow-lg shadow-slate-700 hover:scale-105 transition-transform duration-300">
                                <p class="text-white text-xl pt-14 text-left ms-20 font-bold">Intelligent Gaming</p>
                                <div
                                    class="absolute w-36 h-36 bg-teal-500 rounded-full shadow-md shadow-slate-800 end-[-20px] top-[-80px]">
                                    <div class="w-full h-full flex flex-col justify-center items-center">
                                        <img class="w-20 h-20" src="{{ asset('asset/icon_white/gaming.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            </button>
                        </div>

                    </div>
                    <!-- Slide 2 -->
                    <div id="content" class="w-full flex-shrink-0">
                        <div id="container_tag" class="flex mt-48 space-x-16 w-100 h-80">

                            <div id="item_tag" class="flex flex-col">
                                <button onclick="window.location.href='{{route('public.portofolio', ['category' => 'Data Science'])}}'">

                                <div class="relative w-96 h-36 bg-teal-800 rounded-xl shadow-lg shadow-slate-700 hover:scale-105 transition-transform duration-300">
                                    <p class="text-white text-xl pt-14 text-left ms-20 font-bold">Data Science</p>
                                    <div
                                        class="absolute w-36 h-36 bg-teal-500  rounded-full shadow-md shadow-slate-800 end-[-20px] top-[-80px]">
                                        <div class="w-full h-full flex flex-col justify-center items-center drop-shadow-xl">
                                            <img class="w-20 h-20" src="{{ asset('asset/icon_white/data sc.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                </button>
                            </div>

                            <div id="item_tag" class="flex flex-col">
                                <button onclick="window.location.href='{{route('public.portofolio', ['category' => 'System Security and Cybersecurity'])}}'">

                                <div class="relative w-96 h-36 bg-teal-800 rounded-xl shadow-lg shadow-slate-700 hover:scale-105 transition-transform duration-300">
                                    <p class="text-white text-xl pt-14 text-left ms-12 font-bold">System Security and Cybersecurity
                                    </p>
                                    <div
                                        class="absolute w-36 h-36 bg-teal-500 rounded-full shadow-md shadow-slate-800 end-[-20px] top-[-80px]">
                                        <div class="w-full h-full flex flex-col justify-center items-center">
                                            <img class="w-20 h-20" src="{{ asset('asset/icon_white/cyber.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                </button>
                            </div>

                            <div id="item_tag" class="flex flex-col">
                                <button onclick="window.location.href='{{route('public.portofolio', ['category' => 'Mobile and Responsive App Development'])}}'">

                                <div class="relative w-96 h-36 bg-teal-800 rounded-xl shadow-lg shadow-slate-700 pe-20 hover:scale-105 transition-transform duration-300">
                                    <p class="text-white text-xl pt-14 text-left ms-12 font-bold">Mobile and Responsive App
                                        Development</p>
                                    <div
                                        class="absolute w-36 h-36 bg-teal-500 rounded-full shadow-md shadow-slate-800 end-[-20px] top-[-80px]">
                                        <div class="w-full h-full flex flex-col justify-center items-center">
                                            <img class="w-20 h-20" src="{{ asset('asset/icon_white/mobile.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                </button>
                            </div>

                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div id="content" class="w-full flex-shrink-0">
                        <div id="container_tag" class="flex mt-48 space-x-16 w-100 h-80">

                            <div id="item_tag" class="flex flex-col">
                                <button onclick="window.location.href='{{route('public.portofolio', ['category' => 'Blockchain Technology and Digital Finance'])}}'">

                                <div class="relative w-96 h-36 bg-teal-800 rounded-xl shadow-lg shadow-slate-700 pe-20 hover:scale-105 transition-transform duration-300">
                                    <p class="text-white text-xl pt-14 text-left ms-12 font-bold">Blockchain Technology and
                                        Digital
                                        Finance</p>
                                    <div
                                        class="absolute w-36 h-36 bg-teal-500 rounded-full shadow-md shadow-slate-800 end-[-20px] top-[-80px]">
                                        <div class="w-full h-full flex flex-col justify-center items-center drop-shadow-xl">
                                            <img class="w-20 h-20" src="{{ asset('asset/icon_white/blockch.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                </button>
                            </div>

                            <div id="item_tag" class="flex flex-col">
                                <button onclick="window.location.href='{{route('public.portofolio', ['category' => 'IoT'])}}'">

                                <div class="relative w-96 h-36 bg-teal-800 rounded-xl shadow-lg shadow-slate-700 hover:scale-105 transition-transform duration-300">
                                    <p class="text-white text-xl pt-14 text-left ms-20 font-bold">IoT</p>
                                    <div
                                        class="absolute w-36 h-36 bg-teal-500 rounded-full shadow-md shadow-slate-800 end-[-20px] top-[-80px]">
                                        <div class="w-full h-full flex flex-col justify-center items-center">
                                            <img class="w-20 h-20" src="{{ asset('asset/icon_white/iot.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                </button>
                            </div>

                            <!-- <div id="item_tag" class="flex">
                                                <div class="relative w-96 h-36 bg-teal-800 rounded-xl shadow-lg shadow-slate-700">
                                                    <p class="text-white text-xl mt-14 ms-20 font-bold">Data Science</p>
                                                    <div class="absolute w-36 h-36 bg-teal-500 rounded-full shadow-md shadow-slate-800 end-[-20px] top-[-80px]">
                                                        <div class="w-full h-full flex flex-col justify-center items-center">
                                                            <img class="w-20 h-20" src="icon_white/data sc.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button
                class="w-16 h-16 absolute top-1/2 left-0 ms-[-13px] mt-[-40px] transform -translate-y-1/2 -translate-x-4 text-teal-800 text-xl font-bold bg-white rounded-full shadow-md shadow-slate-800 border-2 border-slate-300"
                onclick="prevSlide()">
                &lt;
            </button>
            <button
                class="w-16 h-16 absolute top-1/2 right-0 me-[-18px] mt-[-40px] transform -translate-y-1/2 translate-x-4 text-teal-800 text-xl font-bold bg-white rounded-full shadow-md shadow-slate-800 border-2 border-slate-300"
                onclick="nextSlide()">
                &gt;

            </button>
        </div>
    </div>


    <div class="flex w-full justify-start items-center mb-20 mt-[-60px]">
        <p class="text-lg text-teal-800 font-bold me-12 ms-32">Urutkan Berdasarkan</p>

        <div>
            <select id="role" name="role" aria-placeholder="Pilih Urutan"
                class="w-full rounded p-2 pe-20 text-teal-800 font-bold bg-white border-teal-800 border-4">
                <option class="text-teal-800 font-bold p-4 px-6" value="Admin">Pilih Urutan</option>
                <option class="text-teal-800 font-bold p-4 px-6" value="Admin">Tanggal Upload</option>
                <option class="text-teal-800 font-bold p-4 px-6" value="Dosen">Like</option>
                <option class="text-teal-800 font-bold p-4 px-6" value="Dosen">Like</option>
            </select>
        </div>

    </div>




    <!-- GRID CONTENT -->

    <div id="GRID_CONTENT" class="grid grid-cols-3 justify-center">

        <?php $counter = 0; ?>
        @foreach ($contents as $content)
            <button type="button" onclick="window.location.href='{{route('public.TA', $content->id)}}'">
                <div id="item_content" class="flex flex-col w-auto h-auto mb-20 me-14 shadow-lg shadow-slate-500 hover:scale-105 transition-transform duration-300">

                    <div class="flex flex-col bg-teal-800 pb-12 rounded-xl px-6" style="width: 450px; height:800px;">
                        <!-- THUMBNAIL KONTEN -->
                        <img class="pt-6 rounded-xl w-[400px] h-[300px]"
                            src="{{ asset('content/content_image/thumbnail/' . $content->thumbnail_image_url) }}"
                            alt="">

                        <!-- DESKRIPSI KONTEN -->

                        <p class="text-lg text-white font-bold mt-6 mb-[-15px] text-left">{{ $content->tittle }}</p>
                        <div class="h-32 mt-2">
                            <p class="text-sm text-white mt-6 text-left">{{$content->description}}</p>
                        </div>
                        <p class="text-lg text-white mt-2 font-bold text-left">{{$content->name}}</p>

                        @foreach ($arrayCategories[$counter] as $data)
                            <div class="bg-white w-fit h-auto p-3 rounded-t-xl mt-6">
                                <p class="text-teal-800 text-sm font-bold text-left">{{ $data }}</p>
                            </div>
                        @endforeach
                        <?php $counter += 1; ?>
                    </div>

                    <div class="mt-[-15px] h-20 bg-white rounded-xl border-2 border-teal-800 flex flex-row items-center px-6"
                        style="width: 450px;">
                        <img class="w-9" src="{{asset('asset/Love.png')}}" alt="">
                        <p id="like" class="ms-4 text-xl text-teal-800 font-bold" name="like">2.4K</p>
                        <div class="flex flex-row ms-52">
                            <img class="w-9 me-4" src="{{asset('asset/Bookmark.png')}}" alt="">
                            <img class="w-8" src="{{asset('asset/share.png')}}" alt="">
                        </div>

                    </div>

                </div>
            </button>
        @endforeach

    </div>

    {{-- <div class="flex justify-center mt-4">
        {{ $contents->links() }}
    </div> --}}


    <!-- PAGINATION -->

    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6 mb-20">
        <div class="flex flex-1 justify-between sm:hidden">
            <a href="#"
                class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
            <a href="#"
                class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
        </div>
        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <!-- <div>
                                <p class="text-sm text-gray-700">
                                    Showing
                                    <span class="font-medium">1</span>
                                    to
                                    <span class="font-medium">10</span>
                                    of
                                    <span class="font-medium">97</span>
                                    results
                                </p>
                                </div> -->
            {{-- <div>
                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                    <a href="#"
                        class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                    <a href="#" aria-current="page"
                        class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                    <a href="#"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                    <a href="#"
                        class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                    <span
                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                    <a href="#"
                        class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                    <a href="#"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                    <a href="#"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                    <a href="#"
                        class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </nav>
            </div> --}}

        </div>
    </div>
    @stack('script')
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    let currentSlide = 0;

    function showSlide(index) {
        const slides = document.querySelector('#slides');
        const slideWidth = document.querySelector('#content').offsetWidth;
        slides.style.transform = `translateX(-${index * slideWidth}px)`;
        currentSlide = index;
    }

    function prevSlide() {
        console.log(currentSlide);
        currentSlide = (currentSlide - 1 + 3) % 3;
        showSlide(currentSlide);
    }

    function nextSlide() {
        console.log(currentSlide);
        currentSlide = (currentSlide + 1) % 3;
        showSlide(currentSlide);
    }

    // let currentSlide = 0;

    // function showSlide(index) {
    // const slides = document.querySelector('#slides');
    // const slideWidth = document.querySelector('#content').offsetWidth;
    // slides.style.transform = `translateX(-${index * slideWidth}px)`;
    // currentSlide = index;
    // }

    // function prevSlide() {
    // currentSlide = Math.max(currentSlide - 1, 0);
    // showSlide(currentSlide);
    // }

    // function nextSlide() {
    // const totalSlides = document.querySelectorAll('#content').length;
    // currentSlide = Math.min(currentSlide + 1, totalSlides - 1);
    // showSlide(currentSlide);
    // }
</script>
