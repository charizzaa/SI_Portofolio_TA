@extends('public.layout_baru.layouts')

@section('content')
<main class="w-full flex flex-col items-center mt-12">

    <div class="w-full flex justify-end mb-80">
        <div class="relative bg-teal-800 w-[40vw] h-[25vw] shadow-md shadow-slate-800">
            <div class="absolute right-[25vw] me-20 top-[7vw] w-[40vw] h-[25vw] border-teal-500 border-[15px] shadow-md shadow-slate-800">
            </div>
            <img src="{{asset('content/content_image/thumbnail/' . $contents['thumbnail_image_url'])}}" class="absolute right-[15vw] top-[10vw] w-[50vw] h-[25vw] shadow-md shadow-slate-800">
        </div>
    </div>

    <p class="text-teal-800 w-[70%] text-center text-5xl font-bold">{{$contents['tittle']}}</p>

    <div class="mt-[-100px] mx-auto py-8 w-[80%]" style="max-width: 1308px;">
        <div class="relative">

            <!-- Carousel Container -->
            <div class="overflow-hidden w-full rounded-lg">
                <!-- Slides Container -->
                <div id="slides" class="flex transition-transform ease-in-out duration-300 transform translate-x-0">
                    <!-- Slide 1 -->
                    @php
                    $images = json_decode($contents['thumbnail_image_url'], true) ?? [];
                    @endphp
                    @foreach ($images as $data)
                    <div id="container_tag" class="flex mt-48 space-x-16 w-500 h-80 me-8">
                        <img src="{{asset('content/content_image/preview/' . $data)}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button class="w-16 h-16 absolute top-[22rem] left-0 ms-[-30px] transform -translate-y-1/2 -translate-x-4 text-teal-800 text-xl font-bold bg-white rounded-full shadow-md shadow-slate-800 border-2 border-slate-300" onclick="prevSlide()">
                &lt;
            </button>
            <button class="w-16 h-16 absolute top-[22rem] right-0 transform -translate-y-1/2 translate-x-4 text-teal-800 text-xl font-bold bg-white rounded-full shadow-md shadow-slate-800 border-2 border-slate-300" onclick="nextSlide()">
                &gt;

            </button>
        </div>
    </div>

    <div class="flex flex-col justify-start w-[80%] mt-12">
        <div class="relative flex w-full h-auto">
            <p class="text-teal-800 text-3xl w-auto font-bold border-b-4 border-teal-800 mb-12 py-2">Deskripsi</p>
            <div class="absolute top-14 start-0 border-b-2 w-full border-teal-800 z-20"></div>
        </div>
        <p class="text-teal-800 text-2xl w-auto font-bold mb-20">{{$contents['description']}}</p>
        <div class="relative flex w-full h-auto">
            <p class="text-teal-800 text-3xl w-auto font-bold border-b-4 border-teal-800 mb-4 py-2">Informasi</p>
            <div class="absolute top-14 start-0 border-b-2 w-full border-teal-800 z-20"></div>
        </div>
        <table class="table-fixed border-separate border-spacing-y-8">
            <tbody class="">
                <tr class="align-top">
                    <td class="text-teal-800 text-2xl w-auto font-bold">Pembuat</td>
                    <td class="text-teal-800 text-2xl w-auto font-bold">{{$contents['first_name']. ' ' . $contents['last_name']}}</td>
                </tr>
                <tr class="align-top">
                    <td class="text-teal-800 text-2xl w-auto font-bold">Tanggal di ubah</td>
                    <td class="text-teal-800 text-2xl w-auto font-bold">{{ (new \DateTime($contents['updated_at']))->format('d-m-Y') }}</td>
                </tr>
                <tr class="align-top">
                    <td class="text-teal-800 text-2xl w-auto font-bold">Dosen pembimbing</td>
                    <td class="text-teal-800 text-2xl w-auto font-bold">{{$contents['lecturer']}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <p class="text-teal-800 text-5xl font-bold mt-32 mb-24 ">KATA KUNCI</p>

    <div class="flex flex-row flex-wrap mb-80 w-100 gap-20 justify-center">
        @php
        $tags = json_decode($contents['tags'], true) ?? [];
        @endphp
        @foreach ($tags as $data)
        <?php
        $url_image = '';
        if ($data == 'Intelligent Gaming') {
            $url_image = 'asset/icon_white/gaming.png';
        } elseif ($data == 'Software Engineering') {
            $url_image = 'asset/icon_white/softw.png';
        } elseif ($data == 'Data Science') {
            $url_image = 'asset/icon_white/data sc.png';
        } elseif ($data == 'System Security and Cybersecurity') {
            $url_image = 'asset/icon_white/cyber.png';
        } elseif ($data == 'Mobile and Responsive App Development') {
            $url_image = 'asset/icon_white/mobile.png';
        } elseif ($data == 'Blockchain Technology and Digital Finance') {
            $url_image = 'asset/icon_white/blokch.png';
        } elseif ($data == 'Artificial Intelligence and Natural Language Processing') {
            $url_image = 'asset/icon_white/ai.png';
        } elseif ($data == 'IoT') {
            $url_image = 'asset/icon_white/iot.png';
        }
        ?>
        <div class="flex flex-col items-center justify-center bg-teal-800 h-auto w-96 px-12 pt-20 pb-12 rounded-t-full rounded-b-xl">
            <img class="w-40 h-auto" src="{{asset($url_image)}}" alt="">
            <p class="text-white text-xl text-center font-bold w-full mt-16">{{$data}}</p>
        </div>
        @endforeach

    </div>

    <div class="w-full h-auto bg-teal-800 flex flex-col items-center py-4 pb-24 mb-64 justify-center">
        <p class="text-white text-5xl text-center font-bold w-full mt-16 mb-16 text-wrap px-8">Demo Tugas Akhir </p>
        <iframe class="w-full h-[50rem] px-40 " src="{{$contents['video_url']}}" frameborder="0"></iframe>
    </div>

    <div class="flex mb-64">
        <div id="kontent1_kanan" class="relative bg-slate-200" style="width: 60vw; height: 1000px;">
            <div class="z-10 absolute top-0 start-0 w-full h-full bg-white rounded-2xl shadow-2xl shadow-teal-800">
                <embed class="bg-white w-full h-full overflow-hidden" src="{{asset('content/document/'.$contents['content_url'])}}" type="">
            </div>

            <div class="absolute mt-[-70px] ms-[-40px] border-[6px] border-teal-800 w-[30vw] md:w-[20vw] h-56 rounded-2xl top-0 start-0">
            </div>
            <div class="absolute mt-[-100px] ms-[-10px] bg-teal-500 w-20 h-20 rounded-full top-0 start-0"></div>
            <div class="absolute mb-[-60px] me-[-40px] border-[6px] border-teal-800 w-[30vw] md:w-[20vw] h-96 rounded-2xl bottom-0 end-0">
            </div>
            <div class="absolute mb-[-20px] me-[-95px] bg-teal-500 w-20 h-20 rounded-full bottom-0 end-0"></div>
        </div>
    </div>

    <div class="relative flex w-[80vw] h-auto justify-center lg:justify-start">
        <p class="text-teal-800 text-5xl w-auto font-bold border-b-4 border-teal-800 mb-24 py-2">Rating dan Ulasan</p>
    </div>

    <div class="flex flex-col-reverse lg:flex-row justify-center items-center w-[80vw]  mb-64 gap-20">

        <div class="flex flex-col items-center lg:items-end">
            <div class="flex flex-row items-center gap-8">
                <p class="text-[6rem] text-teal-800 font-bold">2.4 K</p>
                <img class="w-20 h-20" src={{ asset('asset/Love.png')}} alt="">
            </div>
            <p class="text-2xl text-teal-800 font-bold">Sukai Tugas Akhir Ini</p>
        </div>

        <div class="flex flex-col shadow-md shadow-slate-800 w-[60vw]">

            <div class="flex flex-col bg-white p-12">
                <div id="commenent" class="flex flex-col">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-row w-12 h-12 items-center justify-center bg-slate-200 rounded-full me-4">
                            <P class="text-3xl font-bold text-black">H</P>
                        </div>
                        <p class="text-xl font-bold text-black">Harry Styles</p>
                    </div>
                    <p class="text-xl font-bold text-slate-500 mt-4">16-Agustus-2023</p>
                    <p class="text-xl font-bold text-slate-500 mt-4 text-wrap text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Nulla nobis soluta expedita ipsam qui minus quidem officia aut eveniet sapiente commodi
                        quo, ipsum reiciendis ex beatae excepturi dolor praesentium quod.</p>
                </div>
            </div>

            <div class="flex flex-col bg-white p-12 shadow-md shadow-slate-800">
                <div id="commenent" class="flex flex-col">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-row w-12 h-12 items-center justify-center bg-slate-200 rounded-full me-4">
                            <P class="text-3xl font-bold text-black">H</P>
                        </div>
                        <p class="text-xl font-bold text-black">Harry Styles</p>
                    </div>
                    <p class="text-xl font-bold text-slate-500 mt-4">16-Agustus-2023</p>
                    <p class="text-xl font-bold text-slate-500 mt-4 text-wrap text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Nulla nobis soluta expedita ipsam qui minus quidem officia aut eveniet sapiente commodi
                        quo, ipsum reiciendis ex beatae excepturi dolor praesentium quod.</p>
                </div>
            </div>

            <div class="bg-teal-800 flex flex-row justify-center p-4 py-8 space-x-6">
                <div class="flex flex-row w-12 h-12 items-center justify-center bg-slate-200 rounded-full">
                    <P class="text-3xl font-bold text-black">H</P>
                </div>
                <input class="rounded-full w-[32rem] ps-6" type="text">
                <div class="flex flex-row w-12 h-12 items-center justify-center bg-slate-200 rounded-full">
                    <img src="upload.png" alt="">
                </div>
            </div>
        </div>

    </div>

</main>

{{-- <footer class="w-full bg-teal-800 h-auto grid grid-cols-3 py-16 pb-16">
                <div id="footer_kiri" class="flex flex-col ms-16 ">
                    <img class="w-40 h-auto" src="ugm.png" alt="">
                    <p class="text-white text-lg mt-6">Universitas Gadjah Mada</p>
                    <p class="text-white text-lg mt-1">Sekolah Vokasi</p>
                    <p class="text-white text-lg mt-1">Gedung TILC, Belimbingsari, Caturtunggal</p>
                    <p class="text-white text-lg mt-1 mb-6">Depok, Sleman, Yogyakarta, Indonesia, 55281</p>
                    <div class="flex flex-row items-center">
                        <img class="w-6 h-auto" src="email.png" alt="">
                        <a href="" class="text-white text-lg ms-4">sv@ugm.ac.id</a>
                    </div>
                    <div class="flex flex-row items-center mt-3">
                        <img class="w-5 h-auto" src="telephone.png" alt="">
                        <p class="text-white text-lg ms-4">+62 (274) 541020</p>
                    </div>
                </div>

                <div id="footer_kanan" class="flex justify-center col-span-2 space-x-16">
                    <div class="flex flex-col">
                        <p class="text-white text-2xl font-bold mb-4">PRANALA PENTING</p>
                        <p class="text-white text-lg mt-6">Pendaftaran Mahasiswa Baru</p>
                        <p class="text-white text-lg mt-5">Informasi Beasiswa</p>
                        <p class="text-white text-lg mt-5">Carrer Center ( VDC )</p>
                        <p class="text-white text-lg mt-5">Buku Elektronik</p>
                        <p class="text-white text-lg mt-5">Unduhan</p>
                    </div>

                    <div class="flex flex-col">
                        <p class="text-white text-2xl font-bold mb-4">SOCIAL MEDIA</p>
                        <p class="text-white text-lg mt-6">Facebook</p>
                        <p class="text-white text-lg mt-5">Twitter</p>
                        <p class="text-white text-lg mt-5">Instagram</p>
                        <p class="text-white text-lg mt-5">Youtube</p>
                        <p class="text-white text-lg mt-5">RSS Feed</p>
                        <p class="text-white text-lg mt-5">Aplikasi Vokasi UGM</p>
                    </div>

                    <div class="flex flex-col">
                        <p class="text-white text-2xl font-bold mb-4">INFORMASI PUBLIK</p>
                        <p class="text-white text-lg mt-6">Daftar Informasi Tersedia Setiap Saat</p>
                        <p class="text-white text-lg mt-5">Daftar Informasi Wajib Berkala</p>
                        <p class="text-white text-lg mt-5">Permohonan Informasi</p>
                    </div>
                </div>
            </footer> --}}


{{-- <div class="flex justify-center font-bold text-teal-800 py-6"> Copyright © 2017 Sekolah Vokasi Universitas Gadjah Mada </div>


        </div> --}}
@stack('script')
@endsection


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
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
{{-- </body>
</html> --}}