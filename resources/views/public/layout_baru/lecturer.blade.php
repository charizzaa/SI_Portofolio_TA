@extends('public.layout_baru.layouts')

@section('content')
    <div id="content_1" class="flex flex-row">

        <div id="kontent1_kiri" class="flex flex-col justify-center w-auto h-auto pt-24 pb-10 me-60 mb-80">
            <p class="text-5xl text-teal-800 font-bold mb-12">{{$dosens->name}}</p>
            <p class="text-2xl text-teal-800 font-bold">NIKA</p>
            <p class="text-2xl text-teal-800 font-bold">123456789</p>
            <hr class="border-1 border-teal-800 rounded-full my-6">
            <p class="text-2xl text-teal-800 font-bold">Email</p>
            <p class="text-2xl text-teal-800 font-bold">{{$dosens->email}}</p>
        </div>

        <div class="flex">
            <div id="kontent1_kanan" class="relative bg-slate-200" style="width: 300px; height: 400px;">
                <div class="z-10 absolute top-0 start-0 bg-white rounded-2xl shadow-2xl shadow-teal-800">
                    <img src="{{asset('profile/thumbnail/' . $dosens->image_profile)}}" alt="" style="width: 300px; height: 400px;">
                </div>

                <div class="absolute mt-[-50px] me-[-50px] bg-teal-500 w-32 h-32 rounded-2xl end-0"></div>
                <div class="absolute mt-[-20px] ms-[-20px] border-4 border-teal-800 w-32 h-40 rounded-lg top-0 start-0">
                </div>
                <div class="absolute mb-[-50px] ms-[-60px] bg-teal-800 w-36 h-32 rounded-full bottom-0 start-0"></div>
                <div class="absolute mb-[-15px] me-[-15px] border-4 border-teal-800 w-32 h-40 rounded-lg bottom-0 end-0">
                </div>
                <div class="absolute mb-[-30px] me-[-30px] border-4 border-teal-800 w-40 h-48 rounded-lg bottom-0 end-0">
                </div>
            </div>
        </div>

    </div>
    <!-- GRID CONTENT -->


    <p class="text-5xl text-teal-800 font-bold mb-24">Bidang Keahilian</p>

    <div class="flex flex-row justify-center items-center mb-64 space-x-24">

        @foreach ( $arraySpecialities as $speciality )
        <div class="flex flex-col bg-teal-800 w-80 h-[27rem] pb-16 pt-16 rounded-xl items-center shadow-lg shadow-slate-500  hover:scale-105 transition-transform duration-300">
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
            <img src="{{ asset($url_image) }}" alt="" style="width: 140px; height: 140px;">
            <p class="text-xl mt-16 mx-16 text-center text-white font-bold">{{$speciality}}</p>
        </div>
        @endforeach

    </div>


    <p class="text-5xl text-teal-800 font-bold mb-24">Tugas Akhir</p>


    <div id="GRID_CONTENT" class="grid grid-cols-3 justify-center">


        <?php $counter = 0; ?>
        @foreach ($contents as $content)
            <button onclick="window.location.href='{{route('public.TA', $content->id)}}'" >
                <div id="item_content" class="flex flex-col w-auto h-auto mb-20 me-14 shadow-lg shadow-slate-500 hover:scale-105 transition-transform duration-300" >

                    <div class="flex flex-col bg-teal-800 rounded-xl px-6" style="width: 450px; height:800px;">
                        <!-- THUMBNAIL KONTEN -->
                        <img class="pt-6 rounded-xl w-[400px] h-[300px]"
                            src="{{ asset('content/content_image/thumbnail/' . $content->thumbnail_image_url) }}"
                            alt="">

                        <!-- DESKRIPSI KONTEN -->

                        <p class="text-xl text-left text-white font-bold mt-6 mb-[-15px]">{{ $content->tittle }}</p>
                        <div class="overflow-y-clip h-40 mt-2">
                            <p class="text-md text-white mt-6 text-left">{{ $content->description }}</p>
                        </div>
                        <p class="text-md text-white mt-6 font-bold text-left">Creator : {{ $content->owner }}</p>

                        @foreach ($arrayCategories[$counter] as $data)
                            <div class="bg-white w-fit h-auto p-3 rounded-t-xl mt-4">
                                <p class="text-teal-800 text-sm font-bold text-left">{{ $data }}</p>
                            </div>
                        @endforeach

                        <?php $counter +=1; ?>

                    </div>

                    <div class="mt-[-15px] h-20 bg-white rounded-xl border-2 border-teal-800 flex flex-row items-center px-6"
                        style="width: 450px;">
                        <img class="w-9" src="{{asset('asset/lecturer/Love.png')}}" alt="">
                        <p id="like" class="ms-4 text-xl text-teal-800 font-bold" name="like"> 2.4 K</p>
                        <div class="flex flex-row ms-52">
                            <img class="w-9 me-4" src="{{asset('asset/lecturer/Bookmark.png')}}" alt="">
                            <img class="w-8" src="{{asset('asset/lecturer/share.png')}}" alt="">
                        </div>

                    </div>

                </div>
            </button>
        @endforeach

    </div>


    @stack('script')
@endsection

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


</script>
