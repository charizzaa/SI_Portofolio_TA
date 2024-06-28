@extends('public.layout_baru.layouts')

@section('content')
<main class="w-full flex flex-col items-center mt-12">

    <div class="w-full flex justify-end mb-80">
        <div class="relative bg-teal-800 w-[40vw] h-[25vw] shadow-md shadow-slate-800">
            <div class="absolute right-[25vw] me-20 top-[7vw] w-[40vw] h-[25vw] border-teal-500 border-[15px] shadow-md shadow-slate-800">
            </div>

            <div class="absolute right-[15vw] top-[10vw] w-[50vw] h-[25vw] shadow-md shadow-slate-800 overflow-hidden">
                <img src="{{ $contents['thumbnail_image_url']?? asset('asset/Rectangle 282.png') }}" class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <p class="text-teal-800 w-[70%] text-center text-5xl font-bold">{{$contents['tittle']}}</p>

    <!-- <div class="mt-[-100px] mx-auto py-8 w-[80%]" style="max-width: 1308px;">
        <div class="relative"> -->

    <!-- Carousel Container -->
    <!-- <div class="overflow-hidden w-full rounded-lg"> -->
    <!-- Slides Container -->
    <!-- <div id="slides" class="flex transition-transform ease-in-out duration-300 transform translate-x-0"> -->
    <!-- Slide 1 -->

    <!-- <div id="container_tag" class="flex mt-48 space-x-16 w-500 h-80 me-8">
                        <img src="{{ $contents['thumbnail_image_url'] }}" alt="">
                    </div>
                </div>
            </div> -->

    <!-- Navigation Arrows -->
    <!-- <button class="w-16 h-16 absolute top-[22rem] left-0 ms-[-30px] transform -translate-y-1/2 -translate-x-4 text-teal-800 text-xl font-bold bg-white rounded-full shadow-md shadow-slate-800 border-2 border-slate-300" onclick="prevSlide()">
                &lt;
            </button>
            <button class="w-16 h-16 absolute top-[22rem] right-0 transform -translate-y-1/2 translate-x-4 text-teal-800 text-xl font-bold bg-white rounded-full shadow-md shadow-slate-800 border-2 border-slate-300" onclick="nextSlide()">
                &gt;

            </button>
        </div>
    </div> -->

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
        $tags = ($contents['tags']);
        $tags = explode(',', $tags);
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
            $url_image = 'asset/icon_white/blockch.png';
        } elseif ($data == 'Artificial Intelligence and Natural Language Processing') {
            $url_image = 'asset/icon_white/aiwh.png';
        } elseif ($data == 'IoT') {
            $url_image = 'asset/icon_white/iot.png';
        }
        ?>
        <div class="flex flex-col items-center justify-center bg-teal-800 h-auto w-96 px-12 pt-20 pb-12 rounded-t-full rounded-b-xl">
            <img class="w-40 h-auto" src="{{ asset($url_image) }}" alt="">
            <p class="text-white text-xl text-center font-bold w-full mt-16">{{$data}}</p>
        </div>
        @endforeach

    </div>
    @php
    if (!function_exists('convertYoutubeUrlToEmbed')) {
    function convertYoutubeUrlToEmbed($url) {
    $pattern = '/^https:\/\/www\.youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)$/';
    if (preg_match($pattern, $url, $matches)) {
    return 'https://www.youtube.com/embed/' . $matches[1];
    }
    return $url;
    }

    $embedUrl = convertYoutubeUrlToEmbed($contents['video_url']);
    }
    @endphp
    <div class="w-full h-auto bg-teal-800 flex flex-col items-center py-4 pb-24 mb-64 justify-center">
        <p class="text-white text-5xl text-center font-bold w-full mt-16 mb-16 text-wrap px-8">Demo Tugas Akhir </p>
        <p class="text-white text-4xl text-center font-bold w-full mt-4 mb-16 text-wrap px-8">{{ $contents['video_tittle'] }} </p>
        <iframe class="w-full h-[50rem] px-40" src="{{ $embedUrl }}" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="flex mb-64">
        <div id="kontent1_kanan" class="relative bg-slate-200" style="width: 60vw; height: 1000px;">
            <div class="z-10 absolute top-0 start-0 w-full h-full bg-white rounded-2xl shadow-2xl shadow-teal-800">
                <embed class="bg-white w-full h-full overflow-hidden" src="{{ $contents['content_url'] }}" type="application/pdf">
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



    <div class="flex flex-col items-center w-[100vw] mx-64 mb-12 gap-4">
        <p class="text-xl font-bold text-slate-500">{{ $like }} suka</p>
        <!-- <a id="like-button" class="grow-button bg-transparent border-none" type="button" data-content-id="{{ $contents['id'] }}" data-is-liked="{{ $isLiked }}">
            @if($isLiked)
            <svg width="100px" height="100px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" d="M8.85714 2C10.2878 2 11.6162 2.44463 12.7154 3.20515C13.1897 3.53331 13.6213 3.92028 14 4.35573C14.3787 3.92028 14.8103 3.53331 15.2846 3.20515C16.3838 2.44463 17.7122 2 19.1429 2C22.93 2 26 5.11539 26 8.95841C26 13.6204 23.2697 18.1581 14.6855 25.7523C14.2987 26.0945 13.7153 26.0802 13.3435 25.7212C5.57029 18.2161 2 14.4596 2 8.95841C2 5.11539 5.07005 2 8.85714 2ZM12.5005 5.69874L13.2455 6.55523C13.6441 7.01354 14.3559 7.01354 14.7545 6.55523L15.4995 5.69874C16.3924 4.67212 17.6924 4.02954 19.1429 4.02954C21.8254 4.02954 24 6.23627 24 8.95841C24 12.4335 22.1642 16.1947 14.7507 22.9817C14.3631 23.3366 13.7656 23.3258 13.389 22.9593C10.1819 19.8384 7.90173 17.4961 6.36637 15.3837C4.6874 13.0736 4 11.1716 4 8.95841C4 6.23627 6.17462 4.02954 8.85714 4.02954C10.3076 4.02954 11.6076 4.67212 12.5005 5.69874Z" fill="#000000" fill-rule="evenodd" />
            </svg>
            @else
            <svg width="100px" height="100px" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #9f4c4c;
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <path class="cls-1" d="M663.187,148.681a4.511,4.511,0,0,1-6.375,0S630,127.085,630,107a17,17,0,0,1,17-17c7.625,0,11.563,6.057,13,6.057S665.375,90,673,90a17,17,0,0,1,17,17C690,127.085,663.187,148.681,663.187,148.681Z" id="favorite" transform="translate(-630 -90)" />
            </svg>
            @endif
        </a> -->
        <div id="like-container-{{ $contents['id'] }}">
            <!-- <p id="like-count-{{ $contents['id'] }}">Loading likes...</p> -->
            @if(session('user'))
            @if($isLiked)
            <form action="{{ route('unlike', ['contentId' => $contents['id']]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"><svg width="100px" height="100px" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #9f4c4c;
                                    fill-rule: evenodd;
                                }
                            </style>
                        </defs>
                        <path class="cls-1" d="M663.187,148.681a4.511,4.511,0,0,1-6.375,0S630,127.085,630,107a17,17,0,0,1,17-17c7.625,0,11.563,6.057,13,6.057S665.375,90,673,90a17,17,0,0,1,17,17C690,127.085,663.187,148.681,663.187,148.681Z" id="favorite" transform="translate(-630 -90)" />
                    </svg>
                </button>
            </form>
            @else
            <form action="{{ route('like',['contentId' => $contents['id']]) }}" method="POST">
                @csrf
                <!-- <input type="hidden" name="id" value="{{ $contents['id'] }}" /> -->
                <button type="submit"><svg width="100px" height="100px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" d="M8.85714 2C10.2878 2 11.6162 2.44463 12.7154 3.20515C13.1897 3.53331 13.6213 3.92028 14 4.35573C14.3787 3.92028 14.8103 3.53331 15.2846 3.20515C16.3838 2.44463 17.7122 2 19.1429 2C22.93 2 26 5.11539 26 8.95841C26 13.6204 23.2697 18.1581 14.6855 25.7523C14.2987 26.0945 13.7153 26.0802 13.3435 25.7212C5.57029 18.2161 2 14.4596 2 8.95841C2 5.11539 5.07005 2 8.85714 2ZM12.5005 5.69874L13.2455 6.55523C13.6441 7.01354 14.3559 7.01354 14.7545 6.55523L15.4995 5.69874C16.3924 4.67212 17.6924 4.02954 19.1429 4.02954C21.8254 4.02954 24 6.23627 24 8.95841C24 12.4335 22.1642 16.1947 14.7507 22.9817C14.3631 23.3366 13.7656 23.3258 13.389 22.9593C10.1819 19.8384 7.90173 17.4961 6.36637 15.3837C4.6874 13.0736 4 11.1716 4 8.95841C4 6.23627 6.17462 4.02954 8.85714 4.02954C10.3076 4.02954 11.6076 4.67212 12.5005 5.69874Z" fill="#000000" fill-rule="evenodd" />
                    </svg></button>
            </form>
            @endif
            @else

            <!-- <input type="hidden" name="id" value="{{ $contents['id'] }}" /> -->
            <button onclick="showAlert()"> <svg width="100px" height="100px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" d="M8.85714 2C10.2878 2 11.6162 2.44463 12.7154 3.20515C13.1897 3.53331 13.6213 3.92028 14 4.35573C14.3787 3.92028 14.8103 3.53331 15.2846 3.20515C16.3838 2.44463 17.7122 2 19.1429 2C22.93 2 26 5.11539 26 8.95841C26 13.6204 23.2697 18.1581 14.6855 25.7523C14.2987 26.0945 13.7153 26.0802 13.3435 25.7212C5.57029 18.2161 2 14.4596 2 8.95841C2 5.11539 5.07005 2 8.85714 2ZM12.5005 5.69874L13.2455 6.55523C13.6441 7.01354 14.3559 7.01354 14.7545 6.55523L15.4995 5.69874C16.3924 4.67212 17.6924 4.02954 19.1429 4.02954C21.8254 4.02954 24 6.23627 24 8.95841C24 12.4335 22.1642 16.1947 14.7507 22.9817C14.3631 23.3366 13.7656 23.3258 13.389 22.9593C10.1819 19.8384 7.90173 17.4961 6.36637 15.3837C4.6874 13.0736 4 11.1716 4 8.95841C4 6.23627 6.17462 4.02954 8.85714 4.02954C10.3076 4.02954 11.6076 4.67212 12.5005 5.69874Z" fill="#000000" fill-rule="evenodd" />
                </svg></button>
            @endif
        </div>
    </div>


    <div class="flex flex-col-reverse lg:flex-row justify-center items-center w-[100vw] mx-64 mb-64 gap-20">
        <div class="flex flex-col w-[80vw] shadow-md shadow-slate-800">
            @if($comments==null)
            <p class="text-xl font-bold text-slate-500 mt-4 text-wrap text-justify text-center"> Belum ada komentar </p>
            @else
            @foreach ($comments as $comment)
            <div class="flex flex-col bg-white p-12 shadow-md shadow-slate-800">
                <div id="commenent" class="flex flex-col">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-row w-12 h-12 items-center justify-center bg-slate-200 rounded-full me-4 overflow-hidden">
                            <img class="w-full h-full object-cover" src="{{ $comment['photo'] }}" alt="Profile photo of user">
                        </div>
                        <p class="text-xl font-bold text-black">{{ $comment['first_name'] . ' ' . $comment['last_name'] }}</p>
                    </div>
                    <p class="text-xl font-bold text-slate-500 mt-4">{{ (new \DateTime($comment['created_at']))->format('d-m-Y')  }}</p>
                    <p class="text-xl font-bold text-slate-500 mt-4 text-wrap text-justify">{{ $comment['content'] }}</p>
                </div>
            </div>
            @endforeach
            @endif

            <div class="bg-teal-800 flex flex-row justify-center p-4 py-8 space-x-6">
                @if(session('user'))
                <form class="bg-teal-800 flex flex-row justify-center p-4 py-8 space-x-6" action="{{ route('public.comments') }}" method="POST">
                    @csrf
                    <div class="flex flex-row w-12 h-12 items-center justify-center bg-slate-200 rounded-full overflow-hidden ">
                        <img class="w-full h-full object-cover" src="{{ $user['photo_url'] }}" alt="Profile photo of user">
                    </div>
                    <input name="comment" class="rounded-full w-[32rem] ps-6" type="text">
                    <input name="content_id" class="rounded-full w-[32rem] ps-6" type="text" value="{{ $contents['id'] }}" hidden>
                    <button type="submit" class="flex flex-row px-4 py-2 bg-teal-600 text-white text-xl rounded hover:bg-teal-700">
                        Kirim
                    </button>
                </form>
                @else
                <p class="text-xl font-bold text-white mt-4 text-wrap text-justify text-center"> Login untuk dapat berkomentar </p>
                @endif
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



@endsection
@stack('script')
<script>
    function showAlert() {
        alert("Login untuk menyukai");
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script>
    $(document).ready(function() {
        $('#like-button').click(function() {
            var button = $(this);
            var contentId = button.data('content-id');
            var isLiked = button.data('is-liked');
            var url = isLiked ? `/api/content/${contentId}/unlike` : `/api/content/${contentId}/like`;

            $.ajax({
                url: url,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    button.data('is-liked', !isLiked);
                    button.empty();
                    if (isLiked) {
                        button.append(`
                            <svg width="100px" height="100px" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #9f4c4c;
                                            fill-rule: evenodd;
                                        }
                                    </style>
                                </defs>
                                <path class="cls-1" d="M663.187,148.681a4.511,4.511,0,0,1-6.375,0S630,127.085,630,107a17,17,0,0,1,17-17c7.625,0,11.563,6.057,13,6.057S665.375,90,673,90a17,17,0,0,1,17,17C690,127.085,663.187,148.681,663.187,148.681Z" id="favorite" transform="translate(-630 -90)" />
                            </svg>
                        `);
                    } else {
                        button.append(`
                            <svg width="100px" height="100px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M8.85714 2C10.2878 2 11.6162 2.44463 12.7154 3.20515C13.1897 3.53331 13.6213 3.92028 14 4.35573C14.3787 3.92028 14.8103 3.53331 15.2846 3.20515C16.3838 2.44463 17.7122 2 19.1429 2C22.93 2 26 5.11539 26 8.95841C26 13.6204 23.2697 18.1581 14.6855 25.7523C14.2987 26.0945 13.7153 26.0802 13.3435 25.7212C5.57029 18.2161 2 14.4596 2 8.95841C2 5.11539 5.07005 2 8.85714 2ZM12.5005 5.69874L13.2455 6.55523C13.6441 7.01354 14.3559 7.01354 14.7545 6.55523L15.4995 5.69874C16.3924 4.67212 17.6924 4.02954 19.1429 4.02954C21.8254 4.02954 24 6.23627 24 8.95841C24 12.4335 22.1642 16.1947 14.7507 22.9817C14.3631 23.3366 13.7656 23.3258 13.389 22.9593C10.1819 19.8384 7.90173 17.4961 6.36637 15.3837C4.6874 13.0736 4 11.1716 4 8.95841C4 6.23627 6.17462 4.02954 8.85714 4.02954C10.3076 4.02954 11.6076 4.67212 12.5005 5.69874Z" fill="#000000" fill-rule="evenodd" />
                            </svg>
                        `);
                    }
                }
            });
        });
    });
</script>
<script>
    async function toggleLike(contentId) {
        const likeIcon = document.getElementById('like-icon');
        const likeCount = document.getElementById('like-count');

        // Determine the action (like/unlike) based on the current state
        const isLiked = likeIcon.classList.contains('text-teal-800'); // Check for class indicating liked state
        const action = isLiked ? 'unlike' : 'like';
        const method = isLiked ? 'DELETE' : 'POST';

        try {
            const response = await fetch(`/api/content/${$contentId}/${action}`, {
                method: $ {
                    method
                },
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    content_id: contentId
                })
            });

            if (!response.ok) {
                throw new Error('Network response was not ok');
            }

            const data = await response.json();
            likeCount.textContent = data.likes;

            // Toggle the like button state
            likeIcon.classList.toggle('text-teal-800'); // Toggle the heart icon color class

        } catch (error) {
            console.error('Error:', error);
        }
    }
</script> -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        fetchLikeCount({
            {
                $contents['id']
            }
        });
    });

    async function fetchLikeCount(contentId) {
        
        try {
            const response = await fetch(`/api/contents/${contentId}/likes-count`);
            const data = await response.json();
            const likeCountText = transChoice('{0} no likes|{1} :count like|[2,*] :count likes', data.count, {
                count: data.count
            });
            document.getElementById(`like-count-${contentId}`).innerText = likeCountText;
        } catch (error) {
            console.error('Error fetching like count:', error);
        }
    }

    

</script>

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