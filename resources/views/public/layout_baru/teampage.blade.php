@extends('public.layout_baru.layouts')
@section('content')
    <div id="searc_container" class="flex flex-col items-center">
        <p class="text-4xl text-teal-800 font-bold mb-2">Tim Tugas Akhir</p>
        <p class="text-4xl text-teal-800 font-bold mb-10">Teknologi Rekayasa Perangkat Lunak</p>

        <div id="search_bar" class="flex items-center">
            <div class="bg-teal-500 rounded-full w-20 h-20 z-10 flex justify-center items-center shadow-lg shadow-slate-700">
                <button>
                    <img class="w-10 h-auto" src="search.png" alt="">
                </button>
            </div>
            <input type="text" placeholder="Cari portofolio Tugas Akhir di sini..."
                class="z-0 h-16 ms-[-30px] ps-16 text-lg bg-teal-800 rounded-xl text-white font-bold shadow-lg shadow-slate-700"
                style="width: 600px;">
        </div>
    </div>

    <div class="flex flex-col w-full mt-64">

        <?php $counter = 0; ?>
        @foreach ($contents as $content)
            @if (fmod($counter, 2) == 0)
                <div class="relative flex flex-row-reverse w-full justify-start items-center mb-40">

                    <div
                        class="flex flex-col items-start w-[70%] h-auto ps-12 pe-56 py-12 bg-teal-800 shadow-xl shadow-slate-500">
                        <p class="text-4xl text-white font-bold text-start mb-12">{{ $content->name }}</p>
                        <p class="text-3xl text-white font-bold text-start mb-6">Bidang Keahlian</p>
                        <div class="flex justify-center space-x-6">
                            @foreach ($arraySpecialities[$counter] as $speciality)
                                <?php
                                $url_image = '';
                                if ($speciality == 'Intelligent Gaming') {
                                    $url_image = 'asset/icon_white/gaming.png';
                                } elseif ($speciality == 'Software Engineering') {
                                    $url_image = 'asset/icon_white/softw.png';
                                } elseif ($speciality == 'Data Science') {
                                    $url_image = 'asset/icon_white/data sc.png';
                                } elseif ($speciality == 'System Security and Cybersecurity') {
                                    $url_image = 'asset/icon_white/cyber.png';
                                } elseif ($speciality == 'Mobile and Responsive App Development') {
                                    $url_image = 'asset/icon_white/mobile.png';
                                } elseif ($speciality == 'Blockchain Technology and Digital Finance') {
                                    $url_image = 'asset/icon_white/blockch.png';
                                } elseif ($speciality == 'Artificial Intelligence and Natural Language Processing') {
                                    $url_image = 'asset/icon_white/aiwh.png';
                                } elseif ($speciality == 'IoT') {
                                    $url_image = 'asset/icon_white/iot.png';
                                }
                                ?>
                                <img src="{{ asset($url_image) }}" alt="" style="width: 70px; height: 70px;">
                            @endforeach
                        </div>
                        <button onclick="window.location.href='{{route('public.lecturer', $content->id)}}'"
                            class="flex w-fit mt-12 h-fit px-12 items-end py-4 bg-white hover:bg-slate-300 rounded-md">
                            <p class="text-teal-800 font-bold text-center text-xl">Read More</p>
                            <img class="" src="button_g.png" alt="">
                        </button>
                    </div>

                    <div class="absolute flex justify-end items-end w-[40%] h-full bg-teal-500 rounded-tl-full">
                        <img class="w-[300px] h-[400px] me-32"
                            src="{{ asset('profile/thumbnail/' . $content->image_profile) }}" alt="">
                    </div>

                </div>
            @else
                <div class="relative flex flex-row w-full justify-start items-center mb-40">

                    <div class="absolute flex justify-start items-end w-[40%] h-full bg-teal-500 rounded-tr-full">
                        <img class="w-[300px] h-[400px] ms-32" src="{{ asset('profile/thumbnail/' . $content->image_profile) }}" alt="">
                    </div>

                    <div
                        class="flex flex-col items-end w-[70%] h-auto ps-56 pe-12 py-12 bg-teal-800 shadow-xl shadow-slate-500">
                        <p class="text-4xl text-white font-bold text-start mb-12">{{ $content->name }}</p>
                        <p class="text-3xl text-white font-bold text-start mb-6">Bidang Keahlian</p>
                        <div class="flex justify-center space-x-6">
                            @foreach ($arraySpecialities[$counter] as $speciality)
                                <?php
                                $url_image = '';
                                if ($speciality == 'Intelligent Gaming') {
                                    $url_image = 'asset/icon_white/gaming.png';
                                } elseif ($speciality == 'Software Engineering') {
                                    $url_image = 'asset/icon_white/softw.png';
                                } elseif ($speciality == 'Data Science') {
                                    $url_image = 'asset/icon_white/data sc.png';
                                } elseif ($speciality == 'System Security and Cybersecurity') {
                                    $url_image = 'asset/icon_white/cyber.png';
                                } elseif ($speciality == 'Mobile and Responsive App Development') {
                                    $url_image = 'asset/icon_white/mobile.png';
                                } elseif ($speciality == 'Blockchain Technology and Digital Finance') {
                                    $url_image = 'asset/icon_white/blockch.png';
                                } elseif ($speciality == 'Artificial Intelligence and Natural Language Processing') {
                                    $url_image = 'asset/icon_white/aiwh.png';
                                } elseif ($speciality == 'IoT') {
                                    $url_image = 'asset/icon_white/iot.png';
                                }
                                ?>
                                <img src="{{ asset($url_image) }}" alt="" style="width: 70px; height: 70px;">
                            @endforeach
                        </div>
                        <button onclick="window.location.href='{{route('public.lecturer', $content->id)}}'"
                            class="flex w-fit mt-12 h-fit px-12 items-end py-4 bg-white hover:bg-slate-300 rounded-md">
                            <p class="text-teal-800 font-bold text-center text-xl">Read More</p>
                            <img class=""
                                src=""
                                alt="">
                        </button>
                    </div>

                </div>
            @endif

            <?php $counter += 1; ?>
        @endforeach


        <div class="flex justify-center mt-4 mb-6">
            {{ $contents->links() }}
        </div>


    </div>


    @stack('script')
@endsection
{{--
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
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
