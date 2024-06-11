@extends('public.layout_baru.layouts')

@section('content')
<div class="container mx-auto p-4">
    <div class="text-center">
        <img src="{{ asset('asset/Ellipse 66.png') }}" alt="Profile Picture" class="w-32 h-32 rounded-full mx-auto">
        <h2 class="text-xl font-semibold mt-4">{{$content['first_name']. ' ' . $content['last_name']}}</h2>
        <p class="text-gray-600">charizzathunjung@gmail.com</p>
        <div class="flex justify-center">
            <button class="flex flex-row mt-4 px-4 py-2 bg-teal-800 text-white rounded hover:bg-teal-700 " onclick="window.location.href='{{route('public.edit_profile')}}'">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                  </svg>              
                Edit Profil
            </button>
        </div>
        
    </div>

    @if(session('user')['role'] == 'mahasiswa_ta')
    <h3 class="text-2xl font-semibold text-center m-8">Tugas Akhir yang Dimiliki</h3>
    {{-- TUGAS AKHIR YANG DIMILIKI --}}
    <div class="flex items-center justify-center mb-6">
        <div class="flex flex-row justify-end w-2/5">
            <div class="flex justify-end mx-4">
                <button class="flex flex-row mt-4 px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-400" onclick="window.location.href='{{route('public.edit_portfolio')}}'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>
                      Edit Tugas Akhir
                </button>
            </div>
            <div class="flex justify-end">
                <button class="flex flex-row mt-4 px-4 py-2 bg-teal-800 text-white rounded hover:bg-teal-700" onclick="window.location.href='{{route('public.add_portfolio')}}'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                      </svg>
                      Tambah Tugas Akhir
                </button>
            </div>
        </div>
    </div>
    <button class="flex mx-auto" type="button" onclick="window.location.href='{{route('public.TA', $content['id'])}}'">
        <div id="item_content" class="flex flex-col w-auto h-auto shadow-lg shadow-slate-500 hover:scale-105 transition-transform duration-300">

            <div class="flex flex-col bg-teal-800 pb-12 rounded-xl px-6 max-w-400px h-[700px]">
                <!-- THUMBNAIL KONTEN -->
                <img class="pt-6 rounded-xl w-[400px] h-[300px]" src="{{ asset('content/content_image/thumbnail/' . $content['thumbnail_image_url']) }}" alt="">

                <!-- DESKRIPSI KONTEN -->

                <p class="text-lg text-white font-bold mt-6 mb-[-15px] text-left">{{ $content['tittle'] }}</p>
                <div class="h-32 mt-2">
                    <p class="text-sm text-white mt-6 text-left">{{$content['description']}}</p>
                </div>
                <p class="text-lg text-white mt-2 font-bold text-left">{{$content['first_name']. ' ' . $content['last_name']}}</p>
                @php
                $tags = json_decode($content['tags'], true) ?? [];
                @endphp
                @foreach ($tags as $data)
                <div class="bg-white w-fit h-auto p-3 rounded-t-xl mt-6">
                    <p class="text-teal-800 text-sm font-bold text-left">{{ $data }}</p>
                </div>
                @endforeach
            </div>

            <div class="mt-[-15px] h-20 bg-white rounded-xl border-2 border-teal-800 flex flex-row items-center px-6" style="width: 100%;">
                <div class="flex flex-1">
                    <img class="w-9" src="{{asset('asset/Love.png')}}" alt="">
                    <p id="like" class="ms-4 text-xl text-teal-800 font-bold" name="like">2.4K</p>
                </div>
                <div class="flex flex-1 flex-row justify-end">
                    <img class="w-9 me-4" src="{{asset('asset/Bookmark.png')}}" alt="">
                    <img class="w-8" src="{{asset('asset/share.png')}}" alt="">
                </div>

            </div>

        </div>
    </button>
    @endif

    {{-- SWIPER --}}
    <div class="swiper-container mt-4">
        <div class="swiper-wrapper">
            <!-- Slides will be inserted here by JavaScript -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    {{-- PAGINATION --}}
    <div class="flex justify-center mt-8">
        <a href="#" class="px-3 py-1 border border-gray-300 text-gray-700 rounded-l-lg hover:bg-gray-200">&laquo;</a>
        <a href="#" class="px-3 py-1 border border-gray-300 text-gray-700 hover:bg-gray-200">1</a>
        <a href="#" class="px-3 py-1 border border-gray-300 text-gray-700 hover:bg-gray-200">2</a>
        <a href="#" class="px-3 py-1 border border-gray-300 text-gray-700 bg-green-500 text-white">3</a>
        <a href="#" class="px-3 py-1 border border-gray-300 text-gray-700 hover:bg-gray-200">4</a>
        <a href="#" class="px-3 py-1 border border-gray-300 text-gray-700 hover:bg-gray-200">5</a>
        <a href="#" class="px-3 py-1 border border-gray-300 text-gray-700 rounded-r-lg hover:bg-gray-200">&raquo;</a>
    </div>
</div>
@endsection

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const projects = [{
            title: 'RunningPexels',
            author: 'Zayn Malik',
            keywords: ['Intelligent Gaming', 'Artificial Intelligent', 'Mobile Apps Development'],
            likes: '2.4k',
            image: 'image.png'
        },
        // Add more project data here
    ];

    const swiperWrapper = document.querySelector('.swiper-wrapper');
    projects.forEach(project => {
        const slide = document.createElement('div');
        slide.className = 'swiper-slide p-4';

        slide.innerHTML = `
                    <div class="bg-teal-700 text-white p-4 rounded-lg shadow-lg w-full">
                        <img src="${project.image}" alt="Project Image" class="w-full rounded-lg">
                        <h4 class="mt-4 text-lg font-semibold">${project.title}</h4>
                        <p class="mt-2">Penulis: ${project.author}</p>
                        <div class="mt-4">
                            ${project.keywords.map(keyword => `<span class="bg-yellow-500 text-black px-2 py-1 rounded mr-2">${keyword}</span>`).join('')}
                        </div>
                        <button class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Edit Tugas Akhir</button>
                        <div class="mt-4 text-right">
                            <span class="text-white">${project.likes}</span>
                        </div>
                    </div>
                `;

        swiperWrapper.appendChild(slide);
    });

    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        }
    });
</script>