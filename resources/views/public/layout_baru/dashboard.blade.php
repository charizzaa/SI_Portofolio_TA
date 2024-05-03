@extends('public.layout_baru.layouts')

@section('content')
    <div id="konten_1" class="lg:flex flex-col lg:flex-row flex flex-row justify-center items-center px-12 py-12 my-20 mb-72">
        <div id="kiri" class="flex flex-col justify-center items-end me-40">
            <p class="text-3xl text-teal-800 font-bold mb-6">Sistem Informasi Portofolio Tugas Akhir</p>
            <p class="text-5xl text-teal-800 font-bold">Teknologi Rekayasa Perangkat Lunak</p>
        </div>

        <div class="flex">
            <div id="kontent1_kanan" class="relative" style="width: 350px; height: 450px;">
                <div class="absolute top-0 start-0 bg-white rounded-t-full shadow-lg shadow-slate-500">
                    <img class="rounded-t-full" src="{{ asset('asset/dashboard/pp_1.png') }}" alt=""
                        style="width: 350px; height: 450px;">
                </div>
                <img class="absolute mb-[-70px] ms-[-120px] w-60 h-60 rounded-full bottom-0 start-0 shadow-lg shadow-slate-500"
                    src="{{ asset('asset/dashboard/pp_2.png') }}">
            </div>
        </div>

    </div>


    <div id="konten_2" class="flex flex-col md:flex-row justify-center align-midle w-auto h-auto mt-32 mb-24 ps-32 px-24 space-x-8">
        <div id="2_kiri" class="flex flex-col basis-2/3 mt-20">
            <p class="w-full text-5xl text-teal-800 font-bold mb-20 text-center">Berita Terkini</p>
            <img class="w-full h-auto mb-12" src="{{ asset('asset/dashboard/berita_kiri.png') }}" alt="">
            <p class="w-full text-3xl text-teal-800 font-bold mb-16">Evolusi Desain UI/UX: Menapaki Jejak Inovasi dan
                Kesenangan Pengguna</p>
            <p class="w-full text-2xl text-slate-800 mb-12">Dalam era digital yang terus berkembang, perkembangan desain
                antarmuka (UI) dan pengalaman pengguna (UX) menjadi elemen krusial dalam memastikan aplikasi dan situs web
                memenuhi tuntutan pengguna modern. Desain UI/UX tidak lagi hanya sekadar estetika visual, tetapi juga
                melibatkan pengguna secara mendalam untuk memberikan pengalaman yang optimal.
                Dengan terus munculnya teknologi baru, seperti kecerdasan buatan dan realitas virtual, para desainer UI/UX
                kini dihadapkan pada ...</p>
            <p class="w-full text-2xl text-teal-800 font-bold mb-2">Hermione Granger</p>
            <p class="w-full text-2xl text-teal-800 font-bold">23 September 2023, 11.45 WIB</p>
        </div>

        <div id="2_kiri" class="flex flex-col basis-1/3 justify-center items-center">
            <div class="w-full h-auto bg-teal-800 rounded-2xl shadow-slate-500 shadow-lg">
                <div class="flex flex-col w-auto h-auto p-12">
                    <div class="flex flex-col mb-20">
                        <img class="mb-6 hover:scale-105 transition-transform duration-300"
                            src="https://trpl.sv.ugm.ac.id/wp-content/uploads/sites/1382/2021/09/maxresdefault-560x376.jpg"
                            alt="">
                        <p class="w-full text-lg text-white font-bold mb-6 hover:text-slate-300">Webinar: Career In Game
                            Industry</p>
                        <p class="w-full text-lg text-white font-bold">Oleh: trpl.sv</p>
                        <p class="w-full text-lg text-white font-bold">23 SEPTEMBER 2021</p>
                    </div>

                    <div class="flex flex-col mb-20">
                        <img class="mb-6 hover:scale-105 transition-transform duration-300"
                            src="https://trpl.sv.ugm.ac.id/wp-content/uploads/sites/1382/2021/09/hqdefault.jpg"
                            alt="">
                        <p class="w-full text-lg text-white font-bold mb-6 hover:text-slate-300">Webinar: The Art of Clean
                            Code</p>
                        <p class="w-full text-lg text-white font-bold">Oleh: trpl.sv</p>
                        <p class="w-full text-lg text-white font-bold">23 SEPTEMBER 2021</p>
                    </div>

                    <div class="flex flex-col">
                        <a
                            href="https://trpl.sv.ugm.ac.id/2021/09/23/webinar-optimalisasi-scada-dan-adaptive-defense-scheme-di-saluran-transmisi-pln/">
                            <img class="mb-6 hover:scale-105 transition-transform duration-300"
                                src="https://trpl.sv.ugm.ac.id/wp-content/uploads/sites/1382/2021/09/hqdefault-1.jpg"
                                alt="">
                            <p class="w-full text-lg text-white font-bold mb-6 hover:text-slate-300">Webinar: Optimalisasi
                                SCADA dan Adaptive
                                Defense
                                Scheme di Saluran Transmisi PLN</p>
                            <p class="w-full text-lg text-white font-bold">Oleh: trpl.sv</p>
                            <p class="w-full text-lg text-white font-bold">23 SEPTEMBER 2021</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-center items-center mb-40">
        <button src="https://trpl.sv.ugm.ac.id/"
            class="flex items-center justify-center w-auto h-auto ps-12 pe-8 py-6 bg-teal-800 hover:bg-teal-900 rounded-xl shadow-lg shadow-slate-500"
            onclick="window.location.href='https://trpl.sv.ugm.ac.id/'">
            <a src="https://trpl.sv.ugm.ac.id/" class="text-white font-bold text-center text-2xl">Read More</a>
            <img class="ms-12" src="{{ asset('asset/dashboard/button.png') }}" alt="">
        </button>
    </div>

    <svg width="100vw" height="auto" viewBox="0 0 300 43" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_307_215)">
            <path d="M-144.965 2.20943C-144.965 2.20943 -85.3779 23.4812 -40.0039 23.4036C0.147415 23.3348 9.76545 3.49974 49.8694 2.2094C93.26 0.81329 130.937 11.3857 173.829 15.9335C210.221 19.7919 212.849 14.6806 248.15 7.68169C291.5 -4 327.778 2.20943 327.778 2.20943V41.4931H-148.09L-144.965 2.20943Z" fill="#2D918C"/>
            <path d="M0 13C0 13 46.4982 27.5988 75.2922 27.5242C100.772 27.4583 114.033 17.0781 139.482 15.8381C167.018 14.4964 187.389 18.9802 214.608 23.3506C237.701 27.0585 256.648 30.0765 279.048 23.3506C293.531 19.0025 300 13 300 13V42.2154H0V13Z" fill="#025E5A"/>
        </g>
        <defs>
            <clipPath id="clip0_307_215">
                <rect width="300" height="42.1875" fill="white"/>
            </clipPath>
        </defs>
    </svg>


    <div class="w-full flex flex-row bg-teal-800 justify-center items-center py-12 my-[-25px]">
        <p class="text-5xl text-white font-bold text-center">Topik Tugas Akhir<br><br>
            Teknologi Rekayasa Perangkat Lunak</p>
    </div>


    <svg width="100vw" height="auto" viewBox="0 0 300 45" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_306_237)">
            <path d="M415 42.8716C415 42.8716 355.381 21.1902 309.983 21.2693C269.808 21.3394 260.185 41.5565 220.061 42.8716C176.647 44.2947 138.949 33.5186 96.0326 28.8833C59.622 24.9505 56.9913 30.1602 21.6719 37.294C-1.16113 41.9058 -58 42.8716 -58 42.8716L-55.047 0H410.261L415 42.8716Z" fill="#2D918C"/>
            <path d="M300 25.6596C300 25.6596 260 30 231.5 20.5C206 14 185.5 3.5 139 20.5C99 40 89 35.5 73.5 31C58 26.5 43.7914 17.5741 21.1636 22.8892C6.5351 26.3252 0 31.0686 0 31.0686V0H65.6685H300V25.6596Z" fill="#025E5A"/>
        </g>
        <defs>
            <clipPath id="clip0_306_237">
                <rect width="300" height="44.9653" fill="white"/>
            </clipPath>
        </defs>
    </svg>



    <div class="mt-[-100px] mx-auto mb-2 pt-8 w-full md:w-auto" style="max-width: 940px;">

        <div class="relative">

            <div class="flex h-fit mt-64 mx-20">

                <!-- Carousel Container -->
                <div class="overflow-hidden w-full h-fit rounded-lg mx-20">

                    <!-- Slides Container -->
                    <div id="slides"
                        class="flex py-4 mb-16 items-end transition-all ease-in-out duration-300 translate-x-[40px]">

                        <!-- Slide 1 -->

                        <div id="item"
                            class="item1 w-80 mb-6 mx-[-50px] z-10 flex flex-col h-fit justify-center shadow-lg shadow-slate-700">

                            <button
                                onclick="window.location.href='{{ route('public.portofolio', ['category' => 'Software Engineering']) }}'">

                                <div id="cont_atas"
                                    class="bg-white w-full h-fit p-12 border-4 border-black rounded-t-2xl">
                                    <img class="w-full h-auto" src="{{ asset('asset/icon_green/softw.png') }}"
                                        alt="" draggable="false">
                                </div>

                                <div id="cont_bawah"
                                    class="w-80 h-fit py-10 px-12 bg-teal-950 justify-center rounded-b-2xl">
                                    <p class="text-white text-lg text-clip font-bold text-center">Software Engineering
                                    </p>
                                </div>

                            </button>

                        </div>

                        <div id="item"
                            class="item2 w-64flex flex-col mx-4 h-fit justify-center shadow-lg shadow-slate-700 opacity-70">

                            <button
                                onclick="window.location.href='{{ route('public.portofolio', ['category' => 'Intelligent Gaming']) }}'">
                                <div id="cont_atas"
                                    class="bg-white w-full h-fit p-12 border-4 border-black rounded-t-2xl">
                                    <img class="w-full h-auto" src="{{ asset('asset/icon_green/game.png') }}"
                                        alt="" draggable="false">
                                </div>

                                <div id="cont_bawah"
                                    class="w-64 h-fit py-10 px-12 bg-teal-950 justify-center rounded-b-2xl">
                                    <p class="text-white text-lg text-clip font-bold text-center">Intelligent Gaming
                                    </p>
                                </div>
                            </button>

                        </div>

                        <div id="item"
                            class="item3 w-64 flex flex-col h-fit justify-center shadow-lg shadow-slate-700">

                            <button
                                onclick="window.location.href='{{ route('public.portofolio', ['category' => 'Data Science']) }}'">
                                <div id="cont_atas"
                                    class="bg-white w-full h-fit p-12 border-4 border-black rounded-t-2xl">
                                    <img class="w-full h-auto" src="{{ asset('asset/icon_green/data sc.png') }}"
                                        alt="" draggable="false">
                                </div>

                                <div id="cont_bawah"
                                    class="w-64 h-fit py-10 px-12 bg-teal-950 justify-center rounded-b-2xl">
                                    <p class="text-white text-lg text-clip font-bold text-center">Data Science
                                    </p>
                                </div>
                                <button>
                        </div>

                        <div id="item"
                            class="item4 w-64 flex flex-col h-fit justify-center shadow-lg shadow-slate-700">

                            <button
                                onclick="window.location.href='{{ route('public.portofolio', ['category' => 'System Security and Cybersecurity']) }}'">
                                <div id="cont_atas"
                                    class="bg-white w-full h-fit p-12 border-4 border-black rounded-t-2xl">
                                    <img class="w-full h-auto" src="{{ asset('asset/icon_green/cyber.png') }}"
                                        alt="" draggable="false">
                                </div>

                                <div id="cont_bawah"
                                    class="w-64 h-fit py-10 px-12 bg-teal-950 justify-center rounded-b-2xl">
                                    <p class="text-white text-lg text-clip font-bold text-center">System Security and
                                        Cybersecurity
                                    </p>
                                </div>
                                <button>

                        </div>

                        <div id="item"
                            class="item5 w-64 flex flex-col h-fit justify-center shadow-lg shadow-slate-700">

                            <button
                                onclick="window.location.href='{{ route('public.portofolio', ['category' => 'Mobile and Responsive App Development']) }}'">
                                <div id="cont_atas"
                                    class="bg-white w-full h-fit p-12 border-4 border-black rounded-t-2xl">
                                    <img class="w-full h-auto" src="{{ asset('asset/icon_green/mobile.png') }}"
                                        alt="" draggable="false">
                                </div>

                                <div id="cont_bawah"
                                    class="w-64 h-fit py-10 px-12 bg-teal-950 justify-center rounded-b-2xl">
                                    <p class="text-white text-lg text-clip font-bold text-center">Mobile and Responsive App
                                        Development
                                    </p>
                                </div>
                                <button>
                        </div>

                        <div id="item"
                            class="item6 w-64 flex flex-col h-fit justify-center shadow-lg shadow-slate-700 ">

                            <button
                                onclick="window.location.href='{{ route('public.portofolio', ['category' => 'Blockchain Technology and Digital Finance']) }}'">
                                <div id="cont_atas"
                                    class="bg-white w-full h-fit p-12 border-4 border-black rounded-t-2xl">
                                    <img class="w-full h-auto" src="{{ asset('asset/icon_green/blokch.png') }}"
                                        alt="" draggable="false">
                                </div>

                                <div id="cont_bawah"
                                    class="w-64 h-fit py-10 px-12 bg-teal-950 justify-center rounded-b-2xl">
                                    <p class="text-white text-lg text-clip font-bold text-center">Blockchain Technology and
                                        Digital Finance
                                    </p>
                                </div>
                            </button>

                        </div>

                        <div id="item"
                            class="item7 w-64 flex flex-col h-fit justify-center shadow-lg shadow-slate-700">

                            <button
                                onclick="window.location.href='{{ route('public.portofolio', ['category' => 'Artificial Intelligence and Natural Language Processing']) }}'">
                                <div id="cont_atas"
                                    class="bg-white w-full h-fit p-12 border-4 border-black rounded-t-2xl">
                                    <img class="w-full h-auto" src="{{ asset('asset/icon_green/ai.png') }}"
                                        alt="" draggable="false">
                                </div>

                                <div id="cont_bawah"
                                    class="w-64 h-fit py-10 px-12 bg-teal-950 justify-center rounded-b-2xl">
                                    <p class="text-white text-md text-clip font-bold text-center">Artificial Intelligence
                                        and Natural Language Processing
                                    </p>
                                </div>
                            </button>

                        </div>

                        <div id="item"
                            class="item8 w-64 flex flex-col h-fit justify-center shadow-lg shadow-slate-700">

                            <button
                                onclick="window.location.href='{{ route('public.portofolio', ['category' => 'IoT']) }}'">

                                <div id="cont_atas"
                                    class="bg-white w-full h-fit p-12 border-4 border-black rounded-t-2xl">
                                    <img class="w-full h-auto" src="{{ asset('asset/icon_green/iot.png') }}"
                                        alt="" draggable="false">
                                </div>

                                <div id="cont_bawah"
                                    class="w-64 h-fit py-10 px-12 bg-teal-950 justify-center rounded-b-2xl">
                                    <p class="text-white text-lg text-clip font-bold text-center">IoT
                                    </p>
                                </div>
                                <button>
                        </div>

                    </div>

                    <!-- Navigation Arrows -->
                    <button id="btn"
                        class="w-16 h-16 absolute top-1/2 left-0 ms-[-13px] mt-[-40px] transform -translate-y-1/2 -translate-x-4 text-teal-800 text-xl font-bold bg-white rounded-full shadow-md shadow-slate-800 border-2 border-slate-300"
                        onclick="prevSlide()">
                        &lt;
                    </button>
                    <button id="btn"
                        class="w-16 h-16 absolute top-1/2 right-0 me-[-18px] mt-[-40px] transform -translate-y-1/2 translate-x-4 text-teal-800 text-xl font-bold bg-white rounded-full shadow-md shadow-slate-800 border-2 border-slate-300"
                        onclick="nextSlide()">
                        &gt;
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div class="flex flex-row space-x-4 justify-center items-center mb-40">
        <div class="circle w-16 h-6 bg-teal-800 rounded-full transition-all"></div>
        <div class="circle w-6 h-6 bg-teal-800 rounded-full transition-all"></div>
        <div class="circle w-6 h-6 bg-teal-800 rounded-full transition-all"></div>
        <div class="circle w-6 h-6 bg-teal-800 rounded-full transition-all"></div>
        <div class="circle w-6 h-6 bg-teal-800 rounded-full transition-all"></div>
        <div class="circle w-6 h-6 bg-teal-800 rounded-full transition-all"></div>
        <div class="circle w-6 h-6 bg-teal-800 rounded-full transition-all"></div>
        <div class="circle w-6 h-6 bg-teal-800 rounded-full transition-all"></div>
    </div>


    <div class="w-full flex justify-center items-center bg-teal-800 pt-40 pb-12 text-center text-5xl text-white font-bold">
        Tentang Tugas Akhir<br><br>Teknologi Rekayasa Perangkat Lunak
    </div>
    <div class="flex flex-col w-full bg-teal pb-40 justify-center items-center bg-teal-800 mb-40 px-40">
        <div class="flex flex-col md:flex-row-reverse items-center justify-center mt-12 gap-20">

            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="502" height="408" viewBox="0 0 502 408"
                    fill="none">
                    <rect width="502" height="408" rx="10" fill="white" />
                    <path
                        d="M375.404 212.253C306.662 172.726 195.201 172.726 126.459 212.253C57.7168 251.781 57.7168 315.864 126.459 355.392C195.208 394.919 306.662 394.919 375.404 355.392C444.146 315.864 444.146 251.773 375.404 212.253Z"
                        fill="#F5F5F5" />
                    <path
                        d="M246.257 370.851L178.541 331.756C177.629 331.232 177.629 330.381 178.541 329.856L311.085 253.332C311.997 252.807 313.464 252.807 314.376 253.332L382.092 292.426C383.004 292.951 383.004 293.802 382.092 294.326L249.548 370.851C248.644 371.375 247.169 371.375 246.257 370.851Z"
                        fill="#E0E0E0" />
                    <path
                        d="M155.901 300.854C150.452 297.708 150.452 292.601 155.901 289.454L188.634 270.553C194.084 267.407 202.93 267.407 208.379 270.553L247.96 293.406L195.429 323.677L155.901 300.854Z"
                        fill="#E0E0E0" />
                    <path
                        d="M408.35 274.406C415.129 278.366 415.129 284.788 408.35 288.747C401.571 292.707 390.574 292.707 383.787 288.747C377.008 284.788 377.008 278.366 383.787 274.406C390.574 270.447 401.571 270.447 408.35 274.406Z"
                        fill="#E0E0E0" />
                    <path
                        d="M246.007 32.3085C245.999 32.2021 245.984 32.1033 245.954 32.0045C245.961 31.9817 245.954 31.9589 245.946 31.9361C245.938 31.8297 245.9 31.7309 245.87 31.6473C245.824 31.4953 245.764 31.3585 245.672 31.2217C245.65 31.1533 245.604 31.1001 245.566 31.0469C245.536 31.0013 245.513 30.9633 245.467 30.9253C245.399 30.8417 245.338 30.7733 245.254 30.7125C245.254 30.7125 245.247 30.7049 245.232 30.6897C245.148 30.6213 245.049 30.5681 244.95 30.5301C244.358 30.2489 243.59 30.3249 242.731 30.8113L98.316 113.925C96.4996 114.974 95.0176 117.535 95.0176 119.633V243.664C95.0176 243.672 95.0176 243.68 95.0176 243.695V244.417C95.0176 245.314 95.5192 246.028 96.2032 246.4C96.2488 246.431 96.2944 246.461 96.34 246.492C96.3932 246.522 96.4464 246.56 96.5148 246.59C96.5984 246.636 96.6972 246.667 96.796 246.689C96.9328 246.72 97.0772 246.742 97.214 246.742C97.5484 246.75 97.9284 246.644 98.3084 246.431L98.392 246.378H98.3996L101.538 244.561L242.724 163.264C244.54 162.215 246.022 159.662 246.022 157.557V32.7189C246.03 32.5821 246.022 32.4377 246.007 32.3085Z"
                        fill="#455A64" />
                    <path
                        d="M244.95 30.5378C244.357 30.2566 243.59 30.3326 242.731 30.819L98.3159 113.925C96.4995 114.974 95.0175 117.535 95.0175 119.633V124.451L90.8147 121.989V117.246C90.8147 115.149 92.2815 112.595 94.0979 111.546L238.528 28.4402C239.471 27.8854 240.314 27.8778 240.915 28.2426C241.515 28.5998 244.243 30.1654 244.95 30.5378Z"
                        fill="#27DEBF" />
                    <path
                        d="M246.022 32.6959C246.007 30.6135 244.54 29.7775 242.731 30.8187L98.3159 113.925C96.4995 114.974 95.0251 117.527 95.0251 119.632V124.458L246.022 37.5599V32.6959Z"
                        fill="#27DEBF" />
                    <g opacity="0.5">
                        <path
                            d="M242.731 30.819L98.3159 113.925C97.4115 114.457 96.5831 115.346 95.9979 116.372L91.8103 113.948C92.4031 112.929 93.2087 112.048 94.1055 111.546L238.528 28.4326C239.471 27.8854 240.314 27.8778 240.922 28.235C241.515 28.5998 244.251 30.1502 244.943 30.5226C244.357 30.249 243.582 30.3326 242.731 30.819Z"
                            fill="white" />
                    </g>
                    <path opacity="0.15"
                        d="M90.8071 122.003V117.246C90.8071 116.182 91.1947 114.996 91.8103 113.955L96.0055 116.372C95.3975 117.405 95.0251 118.576 95.0251 119.647V124.466L90.8071 122.003Z"
                        fill="black" />
                    <path opacity="0.9"
                        d="M96.2031 246.408L96.0359 246.309L92.5627 244.303C91.6203 243.771 90.9895 242.821 90.8451 241.749C90.8223 241.589 90.8147 241.43 90.8147 241.27V121.988L95.0251 124.458V244.409C95.0251 245.23 95.4431 245.906 96.0511 246.279C96.0815 246.309 96.1271 246.332 96.1575 246.355C96.1651 246.362 96.1651 246.377 96.1803 246.377L96.2031 246.408Z"
                        fill="#263238" />
                    <g opacity="0.5">
                        <path
                            d="M118.463 119.769L148.681 102.327C149.137 102.061 149.509 102.251 149.509 102.745C149.509 103.239 149.137 103.855 148.681 104.113L118.463 121.555C118.007 121.821 117.635 121.631 117.635 121.137C117.635 120.651 118.007 120.035 118.463 119.769Z"
                            fill="#27DEBF" />
                        <path
                            d="M131.938 133.64L190.58 99.7513C191.036 99.4853 191.408 99.6753 191.408 100.169C191.408 100.663 191.036 101.279 190.58 101.537L131.938 135.426C131.482 135.692 131.11 135.502 131.11 135.008C131.11 134.521 131.482 133.906 131.938 133.64Z"
                            fill="#27DEBF" />
                        <path
                            d="M151.873 100.488L191.074 77.9163C191.53 77.6503 191.902 77.8404 191.902 78.3344C191.902 78.8284 191.53 79.4439 191.074 79.7023L151.873 102.274C151.417 102.54 151.045 102.35 151.045 101.856C151.052 101.362 151.425 100.747 151.873 100.488Z"
                            fill="#27DEBF" />
                        <path
                            d="M118.463 124.907L132.599 116.744C133.055 116.478 133.428 116.668 133.428 117.162C133.428 117.656 133.055 118.272 132.599 118.53L118.463 126.693C118.007 126.959 117.635 126.769 117.635 126.275C117.635 125.781 118.007 125.173 118.463 124.907Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M118.463 124.907L132.599 116.744C133.055 116.478 133.428 116.668 133.428 117.162C133.428 117.656 133.055 118.272 132.599 118.53L118.463 126.693C118.007 126.959 117.635 126.769 117.635 126.275C117.635 125.781 118.007 125.173 118.463 124.907Z"
                            fill="white" />
                        <path
                            d="M118.463 130.014L126.01 125.682C126.466 125.416 126.839 125.606 126.839 126.1C126.839 126.594 126.466 127.21 126.01 127.468L118.463 131.8C118.007 132.066 117.635 131.876 117.635 131.382C117.635 130.888 118.007 130.272 118.463 130.014Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M118.463 130.014L126.01 125.682C126.466 125.416 126.839 125.606 126.839 126.1C126.839 126.594 126.466 127.21 126.01 127.468L118.463 131.8C118.007 132.066 117.635 131.876 117.635 131.382C117.635 130.888 118.007 130.272 118.463 130.014Z"
                            fill="white" />
                        <path
                            d="M135.792 114.898L171.816 94.1195C172.272 93.8535 172.644 94.0435 172.644 94.5375C172.644 95.0315 172.272 95.6471 171.816 95.9055L135.792 116.684C135.336 116.95 134.963 116.76 134.963 116.266C134.971 115.772 135.336 115.156 135.792 114.898Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M135.792 114.898L171.816 94.1195C172.272 93.8535 172.644 94.0435 172.644 94.5375C172.644 95.0315 172.272 95.6471 171.816 95.9055L135.792 116.684C135.336 116.95 134.963 116.76 134.963 116.266C134.971 115.772 135.336 115.156 135.792 114.898Z"
                            fill="white" />
                        <path
                            d="M153.507 139.545L191.074 117.839C191.53 117.573 191.902 117.763 191.902 118.257C191.902 118.751 191.53 119.367 191.074 119.625L153.507 141.331C153.051 141.597 152.679 141.407 152.679 140.913C152.686 140.426 153.051 139.811 153.507 139.545Z"
                            fill="#FFA8A7" />
                        <path
                            d="M153.507 134.446L191.074 112.717C191.53 112.451 191.902 112.641 191.902 113.135C191.902 113.629 191.53 114.245 191.074 114.503L153.507 136.232C153.051 136.498 152.679 136.308 152.679 135.814C152.686 135.32 153.051 134.712 153.507 134.446Z"
                            fill="#FFA8A7" />
                        <path
                            d="M128.655 124.17L144.98 114.701C145.436 114.435 145.808 114.625 145.808 115.119C145.808 115.613 145.436 116.228 144.98 116.487L128.655 125.956C128.199 126.222 127.827 126.032 127.827 125.538C127.827 125.044 128.199 124.429 128.655 124.17Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M128.655 124.17L144.98 114.701C145.436 114.435 145.808 114.625 145.808 115.119C145.808 115.613 145.436 116.228 144.98 116.487L128.655 125.956C128.199 126.222 127.827 126.032 127.827 125.538C127.827 125.044 128.199 124.429 128.655 124.17Z"
                            fill="white" />
                        <path
                            d="M148.179 112.853L190.595 88.5941C191.051 88.3281 191.423 88.5181 191.423 89.0121C191.423 89.5061 191.051 90.1217 190.595 90.3801L148.179 114.639C147.723 114.905 147.351 114.715 147.351 114.221C147.351 113.727 147.723 113.112 148.179 112.853Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M148.179 112.853L190.595 88.5941C191.051 88.3281 191.423 88.5181 191.423 89.0121C191.423 89.5061 191.051 90.1217 190.595 90.3801L148.179 114.639C147.723 114.905 147.351 114.715 147.351 114.221C147.351 113.727 147.723 113.112 148.179 112.853Z"
                            fill="white" />
                        <path
                            d="M128.655 129.65L144.98 120.18C145.436 119.914 145.808 120.104 145.808 120.598C145.808 121.092 145.436 121.708 144.98 121.966L128.655 131.436C128.199 131.702 127.827 131.512 127.827 131.018C127.827 130.524 128.199 129.908 128.655 129.65Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M128.655 129.65L144.98 120.18C145.436 119.914 145.808 120.104 145.808 120.598C145.808 121.092 145.436 121.708 144.98 121.966L128.655 131.436C128.199 131.702 127.827 131.512 127.827 131.018C127.827 130.524 128.199 129.908 128.655 129.65Z"
                            fill="white" />
                        <path
                            d="M148.179 118.333L190.595 94.0736C191.051 93.8076 191.423 93.9976 191.423 94.4916C191.423 94.9856 191.051 95.6012 190.595 95.8596L148.179 120.119C147.723 120.385 147.351 120.195 147.351 119.701C147.351 119.207 147.723 118.591 148.179 118.333Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M148.179 118.333L190.595 94.0736C191.051 93.8076 191.423 93.9976 191.423 94.4916C191.423 94.9856 191.051 95.6012 190.595 95.8596L148.179 120.119C147.723 120.385 147.351 120.195 147.351 119.701C147.351 119.207 147.723 118.591 148.179 118.333Z"
                            fill="white" />
                        <path
                            d="M153.507 144.712L191.074 123.128C191.53 122.862 191.902 123.052 191.902 123.546C191.902 124.04 191.53 124.656 191.074 124.914L153.507 146.498C153.051 146.764 152.679 146.574 152.679 146.08C152.679 145.586 153.051 144.978 153.507 144.712Z"
                            fill="#F28F8F" />
                        <path
                            d="M153.507 149.827L191.074 128.244C191.53 127.978 191.902 128.167 191.902 128.661C191.902 129.155 191.53 129.771 191.074 130.029L153.507 151.614C153.051 151.879 152.679 151.689 152.679 151.195C152.686 150.709 153.051 150.093 153.507 149.827Z"
                            fill="#F28F8F" />
                        <path
                            d="M153.507 154.943L191.074 133.359C191.53 133.093 191.902 133.283 191.902 133.777C191.902 134.271 191.53 134.886 191.074 135.145L153.507 156.729C153.051 156.995 152.679 156.805 152.679 156.311C152.686 155.824 153.051 155.209 153.507 154.943Z"
                            fill="#F28F8F" />
                        <path
                            d="M153.507 161.737L191.074 140.168C191.53 139.902 191.902 140.092 191.902 140.586C191.902 141.08 191.53 141.696 191.074 141.954L153.507 163.523C153.051 163.789 152.679 163.599 152.679 163.105C152.686 162.611 153.051 161.996 153.507 161.737Z"
                            fill="#27DEBF" />
                        <path
                            d="M116.267 183.252L123.905 178.836C124.361 178.57 124.734 178.76 124.734 179.254C124.734 179.748 124.361 180.364 123.905 180.622L116.267 185.038C115.811 185.304 115.439 185.114 115.439 184.62C115.446 184.126 115.819 183.518 116.267 183.252Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M116.267 183.252L123.905 178.836C124.361 178.57 124.734 178.76 124.734 179.254C124.734 179.748 124.361 180.364 123.905 180.622L116.267 185.038C115.811 185.304 115.439 185.114 115.439 184.62C115.446 184.126 115.819 183.518 116.267 183.252Z"
                            fill="white" />
                        <path
                            d="M116.267 187.881L123.905 183.465C124.361 183.199 124.734 183.389 124.734 183.883C124.734 184.377 124.361 184.993 123.905 185.251L116.267 189.667C115.811 189.933 115.439 189.743 115.439 189.249C115.446 188.755 115.819 188.139 116.267 187.881Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M116.267 187.881L123.905 183.465C124.361 183.199 124.734 183.389 124.734 183.883C124.734 184.377 124.361 184.993 123.905 185.251L116.267 189.667C115.811 189.933 115.439 189.743 115.439 189.249C115.446 188.755 115.819 188.139 116.267 187.881Z"
                            fill="white" />
                        <path
                            d="M153.507 166.396L191.074 144.667C191.53 144.401 191.902 144.591 191.902 145.085C191.902 145.579 191.53 146.195 191.074 146.453L153.507 168.182C153.051 168.448 152.679 168.258 152.679 167.764C152.686 167.27 153.051 166.654 153.507 166.396Z"
                            fill="#FFA8A7" />
                        <path
                            d="M128.921 214.093L148.681 202.708C149.137 202.442 149.51 202.632 149.51 203.126C149.51 203.62 149.137 204.236 148.681 204.494L128.921 215.879C128.465 216.145 128.093 215.955 128.093 215.461C128.1 214.967 128.465 214.359 128.921 214.093Z"
                            fill="#27DEBF" />
                        <path
                            d="M151.873 200.801L191.074 178.275C191.53 178.009 191.902 178.199 191.902 178.693C191.902 179.187 191.53 179.802 191.074 180.061L151.873 202.587C151.417 202.853 151.045 202.663 151.045 202.169C151.052 201.683 151.425 201.067 151.873 200.801Z"
                            fill="#27DEBF" />
                        <path
                            d="M116.267 221.366L123.905 216.951C124.361 216.685 124.734 216.875 124.734 217.369C124.734 217.863 124.361 218.478 123.905 218.737L116.267 223.152C115.811 223.418 115.439 223.228 115.439 222.734C115.446 222.24 115.819 221.625 116.267 221.366Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M116.267 221.366L123.905 216.951C124.361 216.685 124.734 216.875 124.734 217.369C124.734 217.863 124.361 218.478 123.905 218.737L116.267 223.152C115.811 223.418 115.439 223.228 115.439 222.734C115.446 222.24 115.819 221.625 116.267 221.366Z"
                            fill="white" />
                        <path
                            d="M116.267 225.987L123.905 221.572C124.361 221.306 124.734 221.496 124.734 221.99C124.734 222.484 124.361 223.099 123.905 223.358L116.267 227.773C115.811 228.039 115.439 227.849 115.439 227.355C115.446 226.861 115.819 226.253 116.267 225.987Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M116.267 225.987L123.905 221.572C124.361 221.306 124.734 221.496 124.734 221.99C124.734 222.484 124.361 223.099 123.905 223.358L116.267 227.773C115.811 228.039 115.439 227.849 115.439 227.355C115.446 226.861 115.819 226.253 116.267 225.987Z"
                            fill="white" />
                        <path
                            d="M155.057 203.552L191.081 182.774C191.537 182.508 191.91 182.698 191.91 183.192C191.91 183.686 191.537 184.301 191.081 184.56L155.057 205.338C154.601 205.604 154.229 205.414 154.229 204.92C154.229 204.426 154.601 203.811 155.057 203.552Z"
                            fill="#FFA8A7" />
                        <path
                            d="M128.655 191.772L191.081 155.824C191.537 155.558 191.91 155.748 191.91 156.242C191.91 156.736 191.537 157.351 191.081 157.61L128.655 193.558C128.199 193.824 127.827 193.634 127.827 193.14C127.827 192.653 128.199 192.038 128.655 191.772Z"
                            fill="#27DEBF" />
                        <path
                            d="M116.267 198.878L123.905 194.462C124.361 194.196 124.734 194.386 124.734 194.88C124.734 195.374 124.361 195.99 123.905 196.248L116.267 200.664C115.811 200.93 115.439 200.74 115.439 200.246C115.446 199.752 115.819 199.136 116.267 198.878Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M116.267 198.878L123.905 194.462C124.361 194.196 124.734 194.386 124.734 194.88C124.734 195.374 124.361 195.99 123.905 196.248L116.267 200.664C115.811 200.93 115.439 200.74 115.439 200.246C115.446 199.752 115.819 199.136 116.267 198.878Z"
                            fill="white" />
                        <path
                            d="M128.655 196.826L191.081 160.878C191.537 160.612 191.91 160.802 191.91 161.296C191.91 161.79 191.537 162.406 191.081 162.664L128.655 198.612C128.199 198.878 127.827 198.688 127.827 198.194C127.827 197.7 128.199 197.092 128.655 196.826Z"
                            fill="#27DEBF" />
                        <path
                            d="M116.267 203.993L123.905 199.577C124.361 199.311 124.734 199.501 124.734 199.995C124.734 200.489 124.361 201.105 123.905 201.363L116.267 205.779C115.811 206.045 115.439 205.855 115.439 205.361C115.446 204.867 115.819 204.251 116.267 203.993Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M116.267 203.993L123.905 199.577C124.361 199.311 124.734 199.501 124.734 199.995C124.734 200.489 124.361 201.105 123.905 201.363L116.267 205.779C115.811 206.045 115.439 205.855 115.439 205.361C115.446 204.867 115.819 204.251 116.267 203.993Z"
                            fill="white" />
                        <path
                            d="M128.655 201.964L191.081 166.016C191.537 165.75 191.91 165.94 191.91 166.434C191.91 166.928 191.537 167.544 191.081 167.802L128.655 203.75C128.199 204.016 127.827 203.826 127.827 203.332C127.827 202.838 128.199 202.23 128.655 201.964Z"
                            fill="#F28F8F" />
                        <path
                            d="M116.267 209.107L123.905 204.692C124.361 204.426 124.734 204.616 124.734 205.11C124.734 205.604 124.361 206.219 123.905 206.478L116.267 210.893C115.811 211.159 115.439 210.969 115.439 210.475C115.446 209.981 115.819 209.373 116.267 209.107Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M116.267 209.107L123.905 204.692C124.361 204.426 124.734 204.616 124.734 205.11C124.734 205.604 124.361 206.219 123.905 206.478L116.267 210.893C115.811 211.159 115.439 210.969 115.439 210.475C115.446 209.981 115.819 209.373 116.267 209.107Z"
                            fill="white" />
                        <g opacity="0.6">
                            <path
                                d="M104.365 193.87L108.857 191.278C109.305 191.02 109.67 191.232 109.67 191.749V193.398C109.67 193.915 109.305 194.554 108.857 194.812L104.365 197.404C103.917 197.662 103.552 197.449 103.552 196.932V195.283C103.552 194.766 103.917 194.128 104.365 193.87Z"
                                fill="white" />
                            <path
                                d="M104.365 200.436L108.857 197.844C109.305 197.586 109.67 197.799 109.67 198.316V199.965C109.67 200.482 109.305 201.12 108.857 201.378L104.365 203.97C103.917 204.228 103.552 204.016 103.552 203.499V201.85C103.552 201.333 103.917 200.702 104.365 200.436Z"
                                fill="white" />
                            <path
                                d="M104.365 207.002L108.857 204.411C109.305 204.152 109.67 204.365 109.67 204.882V206.531C109.67 207.048 109.305 207.686 108.857 207.945L104.365 210.536C103.917 210.795 103.552 210.582 103.552 210.065V208.416C103.552 207.899 103.917 207.268 104.365 207.002Z"
                                fill="white" />
                            <path
                                d="M104.365 213.569L108.857 210.977C109.305 210.719 109.67 210.932 109.67 211.448V213.098C109.67 213.614 109.305 214.253 108.857 214.511L104.365 217.103C103.917 217.361 103.552 217.148 103.552 216.632V214.982C103.552 214.466 103.917 213.835 104.365 213.569Z"
                                fill="white" />
                        </g>
                        <path
                            d="M116.267 155.308L123.905 150.892C124.361 150.626 124.734 150.816 124.734 151.31C124.734 151.804 124.361 152.42 123.905 152.678L116.267 157.094C115.811 157.36 115.439 157.17 115.439 156.676C115.446 156.182 115.819 155.566 116.267 155.308Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M116.267 155.308L123.905 150.892C124.361 150.626 124.734 150.816 124.734 151.31C124.734 151.804 124.361 152.42 123.905 152.678L116.267 157.094C115.811 157.36 115.439 157.17 115.439 156.676C115.446 156.182 115.819 155.566 116.267 155.308Z"
                            fill="white" />
                        <path
                            d="M116.267 166.305L123.905 161.889C124.361 161.623 124.734 161.813 124.734 162.307C124.734 162.801 124.361 163.417 123.905 163.675L116.267 168.091C115.811 168.357 115.439 168.167 115.439 167.673C115.446 167.179 115.819 166.563 116.267 166.305Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M116.267 166.305L123.905 161.889C124.361 161.623 124.734 161.813 124.734 162.307C124.734 162.801 124.361 163.417 123.905 163.675L116.267 168.091C115.811 168.357 115.439 168.167 115.439 167.673C115.446 167.179 115.819 166.563 116.267 166.305Z"
                            fill="white" />
                        <path
                            d="M116.267 171.419L123.905 167.003C124.361 166.737 124.734 166.927 124.734 167.421C124.734 167.915 124.361 168.531 123.905 168.789L116.267 173.205C115.811 173.471 115.439 173.281 115.439 172.787C115.446 172.293 115.819 171.677 116.267 171.419Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M116.267 171.419L123.905 167.003C124.361 166.737 124.734 166.927 124.734 167.421C124.734 167.915 124.361 168.531 123.905 168.789L116.267 173.205C115.811 173.471 115.439 173.281 115.439 172.787C115.446 172.293 115.819 171.677 116.267 171.419Z"
                            fill="white" />
                        <path
                            d="M116.267 176.534L123.905 172.118C124.361 171.852 124.734 172.043 124.734 172.537C124.734 173.031 124.361 173.646 123.905 173.904L116.267 178.32C115.811 178.586 115.439 178.396 115.439 177.902C115.446 177.408 115.819 176.8 116.267 176.534Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M116.267 176.534L123.905 172.118C124.361 171.852 124.734 172.043 124.734 172.537C124.734 173.031 124.361 173.646 123.905 173.904L116.267 178.32C115.811 178.586 115.439 178.396 115.439 177.902C115.446 177.408 115.819 176.8 116.267 176.534Z"
                            fill="white" />
                        <g opacity="0.6">
                            <path
                                d="M104.365 161.296L108.857 158.705C109.305 158.446 109.67 158.659 109.67 159.176V160.825C109.67 161.342 109.305 161.98 108.857 162.239L104.365 164.83C103.917 165.089 103.552 164.876 103.552 164.359V162.71C103.552 162.193 103.917 161.562 104.365 161.296Z"
                                fill="white" />
                            <path
                                d="M104.365 167.863L108.857 165.271C109.305 165.013 109.67 165.226 109.67 165.742V167.392C109.67 167.908 109.305 168.547 108.857 168.805L104.365 171.397C103.917 171.655 103.552 171.442 103.552 170.926V169.276C103.552 168.76 103.917 168.129 104.365 167.863Z"
                                fill="white" />
                            <path
                                d="M104.365 174.429L108.857 171.838C109.305 171.579 109.67 171.792 109.67 172.309V173.958C109.67 174.475 109.305 175.113 108.857 175.372L104.365 177.963C103.917 178.222 103.552 178.009 103.552 177.492V175.843C103.552 175.326 103.917 174.695 104.365 174.429Z"
                                fill="white" />
                            <path
                                d="M104.365 180.996L108.857 178.404C109.305 178.146 109.67 178.358 109.67 178.875V180.524C109.67 181.041 109.305 181.68 108.857 181.938L104.365 184.53C103.917 184.788 103.552 184.575 103.552 184.058V182.409C103.552 181.892 103.917 181.262 104.365 180.996Z"
                                fill="white" />
                            <path
                                d="M104.365 226.444L108.857 223.852C109.305 223.594 109.67 223.807 109.67 224.323V225.973C109.67 226.489 109.305 227.128 108.857 227.386L104.365 229.978C103.917 230.236 103.552 230.023 103.552 229.507V227.857C103.552 227.341 103.917 226.702 104.365 226.444Z"
                                fill="white" />
                            <path
                                d="M104.365 233.01L108.857 230.419C109.305 230.16 109.67 230.373 109.67 230.89V232.539C109.67 233.056 109.305 233.694 108.857 233.953L104.365 236.544C103.917 236.803 103.552 236.59 103.552 236.073V234.424C103.552 233.907 103.917 233.276 104.365 233.01Z"
                                fill="white" />
                        </g>
                        <g opacity="0.6">
                            <path
                                d="M104.365 128.722L108.857 126.131C109.305 125.872 109.67 126.085 109.67 126.602V128.251C109.67 128.768 109.305 129.406 108.857 129.665L104.365 132.256C103.917 132.515 103.552 132.302 103.552 131.785V130.136C103.552 129.619 103.917 128.988 104.365 128.722Z"
                                fill="white" />
                            <path
                                d="M104.365 135.289L108.857 132.697C109.305 132.439 109.67 132.651 109.67 133.168V134.817C109.67 135.334 109.305 135.973 108.857 136.231L104.365 138.823C103.917 139.081 103.552 138.868 103.552 138.351V136.702C103.552 136.185 103.917 135.555 104.365 135.289Z"
                                fill="white" />
                            <path
                                d="M104.365 141.855L108.857 139.263C109.305 139.005 109.67 139.218 109.67 139.735V141.384C109.67 141.901 109.305 142.539 108.857 142.797L104.365 145.389C103.917 145.647 103.552 145.435 103.552 144.918V143.269C103.552 142.752 103.917 142.121 104.365 141.855Z"
                                fill="white" />
                            <path
                                d="M104.365 148.421L108.857 145.83C109.305 145.571 109.67 145.784 109.67 146.301V147.95C109.67 148.467 109.305 149.105 108.857 149.364L104.365 151.955C103.917 152.214 103.552 152.001 103.552 151.484V149.835C103.552 149.318 103.917 148.687 104.365 148.421Z"
                                fill="white" />
                        </g>
                        <path
                            d="M236.248 100.998L201.813 120.879C200.536 121.616 199.502 123.41 199.502 124.884V176.754C199.502 178.229 200.536 178.829 201.813 178.092L236.248 158.21C237.525 157.473 238.559 155.68 238.559 154.205V102.343C238.559 100.861 237.525 100.26 236.248 100.998Z"
                            fill="#37474F" />
                        <path
                            d="M233.049 140.419L229.879 142.251C229.233 142.623 228.709 143.497 228.709 144.197C228.709 144.896 229.233 145.162 229.879 144.789L233.049 142.958C233.695 142.585 234.219 141.711 234.219 141.012C234.219 140.313 233.695 140.047 233.049 140.419Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M233.049 140.419L229.879 142.251C229.233 142.623 228.709 143.497 228.709 144.197C228.709 144.896 229.233 145.162 229.879 144.789L233.049 142.958C233.695 142.585 234.219 141.711 234.219 141.012C234.219 140.313 233.695 140.047 233.049 140.419Z"
                            fill="white" />
                        <path
                            d="M233.049 107.853L229.879 109.685C229.233 110.057 228.709 110.931 228.709 111.63C228.709 112.329 229.233 112.595 229.879 112.223L233.049 110.391C233.695 110.019 234.219 109.145 234.219 108.446C234.219 107.747 233.695 107.481 233.049 107.853Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M233.049 107.853L229.879 109.685C229.233 110.057 228.709 110.931 228.709 111.63C228.709 112.329 229.233 112.595 229.879 112.223L233.049 110.391C233.695 110.019 234.219 109.145 234.219 108.446C234.219 107.747 233.695 107.481 233.049 107.853Z"
                            fill="white" />
                        <path
                            d="M228.595 116.928L225.426 118.759C224.78 119.132 224.255 120.006 224.255 120.705C224.255 121.404 224.78 121.67 225.426 121.298L228.595 119.466C229.241 119.094 229.765 118.22 229.765 117.521C229.765 116.814 229.241 116.555 228.595 116.928Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M228.595 116.928L225.426 118.759C224.78 119.132 224.255 120.006 224.255 120.705C224.255 121.404 224.78 121.67 225.426 121.298L228.595 119.466C229.241 119.094 229.765 118.22 229.765 117.521C229.765 116.814 229.241 116.555 228.595 116.928Z"
                            fill="white" />
                        <path
                            d="M228.595 123.417L225.426 125.249C224.78 125.621 224.255 126.495 224.255 127.195C224.255 127.894 224.78 128.16 225.426 127.787L228.595 125.956C229.241 125.583 229.765 124.709 229.765 124.01C229.765 123.311 229.241 123.045 228.595 123.417Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M228.595 123.417L225.426 125.249C224.78 125.621 224.255 126.495 224.255 127.195C224.255 127.894 224.78 128.16 225.426 127.787L228.595 125.956C229.241 125.583 229.765 124.709 229.765 124.01C229.765 123.311 229.241 123.045 228.595 123.417Z"
                            fill="white" />
                        <path
                            d="M233.049 127.385L229.879 129.217C229.233 129.589 228.709 130.463 228.709 131.162C228.709 131.862 229.233 132.128 229.879 131.755L233.049 129.924C233.695 129.551 234.219 128.677 234.219 127.978C234.219 127.279 233.695 127.013 233.049 127.385Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M233.049 127.385L229.879 129.217C229.233 129.589 228.709 130.463 228.709 131.162C228.709 131.862 229.233 132.128 229.879 131.755L233.049 129.924C233.695 129.551 234.219 128.677 234.219 127.978C234.219 127.279 233.695 127.013 233.049 127.385Z"
                            fill="white" />
                        <path
                            d="M228.595 136.467L225.426 138.298C224.78 138.671 224.255 139.545 224.255 140.244C224.255 140.943 224.78 141.209 225.426 140.837L228.595 139.005C229.241 138.633 229.765 137.759 229.765 137.06C229.765 136.353 229.241 136.094 228.595 136.467Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M228.595 136.467L225.426 138.298C224.78 138.671 224.255 139.545 224.255 140.244C224.255 140.943 224.78 141.209 225.426 140.837L228.595 139.005C229.241 138.633 229.765 137.759 229.765 137.06C229.765 136.353 229.241 136.094 228.595 136.467Z"
                            fill="white" />
                        <path
                            d="M224.369 112.869L205.012 124.048C204.366 124.421 203.842 125.295 203.842 125.994C203.842 126.693 204.366 126.959 205.012 126.587L224.369 115.407C225.015 115.035 225.54 114.161 225.54 113.461C225.54 112.762 225.015 112.496 224.369 112.869Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M224.369 112.869L205.012 124.048C204.366 124.421 203.842 125.295 203.842 125.994C203.842 126.693 204.366 126.959 205.012 126.587L224.369 115.407C225.015 115.035 225.54 114.161 225.54 113.461C225.54 112.762 225.015 112.496 224.369 112.869Z"
                            fill="white" />
                        <path
                            d="M224.369 145.435L205.012 156.614C204.366 156.987 203.842 157.861 203.842 158.56C203.842 159.259 204.366 159.525 205.012 159.153L224.369 147.973C225.015 147.601 225.54 146.727 225.54 146.027C225.54 145.321 225.015 145.062 224.369 145.435Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M224.369 145.435L205.012 156.614C204.366 156.987 203.842 157.861 203.842 158.56C203.842 159.259 204.366 159.525 205.012 159.153L224.369 147.973C225.015 147.601 225.54 146.727 225.54 146.027C225.54 145.321 225.015 145.062 224.369 145.435Z"
                            fill="white" />
                        <path
                            d="M219.916 121.935L205.012 130.553C204.366 130.926 203.842 131.8 203.842 132.499C203.842 133.198 204.366 133.464 205.012 133.092L219.916 124.473C220.562 124.101 221.086 123.227 221.086 122.528C221.086 121.829 220.562 121.563 219.916 121.935Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M219.916 121.935L205.012 130.553C204.366 130.926 203.842 131.8 203.842 132.499C203.842 133.198 204.366 133.464 205.012 133.092L219.916 124.473C220.562 124.101 221.086 123.227 221.086 122.528C221.086 121.829 220.562 121.563 219.916 121.935Z"
                            fill="white" />
                        <path
                            d="M219.916 128.449L205.012 137.067C204.366 137.439 203.842 138.313 203.842 139.013C203.842 139.712 204.366 139.978 205.012 139.605L219.916 130.987C220.562 130.615 221.086 129.741 221.086 129.041C221.086 128.342 220.562 128.076 219.916 128.449Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M219.916 128.449L205.012 137.067C204.366 137.439 203.842 138.313 203.842 139.013C203.842 139.712 204.366 139.978 205.012 139.605L219.916 130.987C220.562 130.615 221.086 129.741 221.086 129.041C221.086 128.342 220.562 128.076 219.916 128.449Z"
                            fill="white" />
                        <path
                            d="M224.369 132.409L205.012 143.588C204.366 143.961 203.842 144.835 203.842 145.534C203.842 146.233 204.366 146.499 205.012 146.127L224.369 134.947C225.015 134.575 225.54 133.701 225.54 133.001C225.54 132.302 225.015 132.036 224.369 132.409Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M224.369 132.409L205.012 143.588C204.366 143.961 203.842 144.835 203.842 145.534C203.842 146.233 204.366 146.499 205.012 146.127L224.369 134.947C225.015 134.575 225.54 133.701 225.54 133.001C225.54 132.302 225.015 132.036 224.369 132.409Z"
                            fill="white" />
                        <path
                            d="M219.916 141.475L205.012 150.093C204.366 150.466 203.842 151.34 203.842 152.039C203.842 152.738 204.366 153.004 205.012 152.632L219.916 144.013C220.562 143.641 221.086 142.767 221.086 142.068C221.086 141.369 220.562 141.103 219.916 141.475Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M219.916 141.475L205.012 150.093C204.366 150.466 203.842 151.34 203.842 152.039C203.842 152.738 204.366 153.004 205.012 152.632L219.916 144.013C220.562 143.641 221.086 142.767 221.086 142.068C221.086 141.369 220.562 141.103 219.916 141.475Z"
                            fill="white" />
                        <path
                            d="M233.049 153.513L229.879 155.345C229.233 155.717 228.709 156.591 228.709 157.29C228.709 157.99 229.233 158.256 229.879 157.883L233.049 156.052C233.695 155.679 234.219 154.805 234.219 154.106C234.219 153.407 233.695 153.141 233.049 153.513Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M233.049 153.513L229.879 155.345C229.233 155.717 228.709 156.591 228.709 157.29C228.709 157.99 229.233 158.256 229.879 157.883L233.049 156.052C233.695 155.679 234.219 154.805 234.219 154.106C234.219 153.407 233.695 153.141 233.049 153.513Z"
                            fill="white" />
                        <path
                            d="M228.595 149.561L225.426 151.393C224.78 151.765 224.255 152.639 224.255 153.338C224.255 154.037 224.78 154.303 225.426 153.931L228.595 152.099C229.241 151.727 229.765 150.853 229.765 150.154C229.765 149.455 229.241 149.189 228.595 149.561Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M228.595 149.561L225.426 151.393C224.78 151.765 224.255 152.639 224.255 153.338C224.255 154.037 224.78 154.303 225.426 153.931L228.595 152.099C229.241 151.727 229.765 150.853 229.765 150.154C229.765 149.455 229.241 149.189 228.595 149.561Z"
                            fill="white" />
                        <path
                            d="M224.369 158.53L205.012 169.709C204.366 170.082 203.842 170.956 203.842 171.655C203.842 172.354 204.366 172.62 205.012 172.248L224.369 161.068C225.015 160.696 225.54 159.822 225.54 159.123C225.54 158.423 225.015 158.157 224.369 158.53Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M224.369 158.53L205.012 169.709C204.366 170.082 203.842 170.956 203.842 171.655C203.842 172.354 204.366 172.62 205.012 172.248L224.369 161.068C225.015 160.696 225.54 159.822 225.54 159.123C225.54 158.423 225.015 158.157 224.369 158.53Z"
                            fill="white" />
                        <path
                            d="M219.916 154.577L205.012 163.196C204.366 163.568 203.842 164.442 203.842 165.141C203.842 165.84 204.366 166.106 205.012 165.734L219.916 157.116C220.562 156.743 221.086 155.869 221.086 155.17C221.086 154.463 220.562 154.205 219.916 154.577Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M219.916 154.577L205.012 163.196C204.366 163.568 203.842 164.442 203.842 165.141C203.842 165.84 204.366 166.106 205.012 165.734L219.916 157.116C220.562 156.743 221.086 155.869 221.086 155.17C221.086 154.463 220.562 154.205 219.916 154.577Z"
                            fill="white" />
                        <path
                            d="M236.248 47.6531L201.813 67.5347C200.536 68.2719 199.502 70.0655 199.502 71.5399V111.303C199.502 112.777 200.536 113.378 201.813 112.641L236.248 92.7591C237.525 92.0219 238.559 90.2283 238.559 88.7539V48.9907C238.559 47.5163 237.525 46.9159 236.248 47.6531Z"
                            fill="#37474F" />
                        <path
                            d="M233.049 87.0668L229.879 88.8985C229.233 89.2709 228.709 90.1449 228.709 90.8441C228.709 91.5433 229.233 91.8093 229.879 91.4369L233.049 89.6053C233.695 89.2329 234.219 88.3588 234.219 87.6596C234.219 86.9604 233.695 86.6944 233.049 87.0668Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M233.049 87.0668L229.879 88.8985C229.233 89.2709 228.709 90.1449 228.709 90.8441C228.709 91.5433 229.233 91.8093 229.879 91.4369L233.049 89.6053C233.695 89.2329 234.219 88.3588 234.219 87.6596C234.219 86.9604 233.695 86.6944 233.049 87.0668Z"
                            fill="white" />
                        <path
                            d="M233.049 54.5083L229.879 56.3399C229.233 56.7123 228.709 57.5863 228.709 58.2855C228.709 58.9847 229.233 59.2507 229.879 58.8783L233.049 57.0467C233.695 56.6743 234.219 55.8003 234.219 55.1011C234.219 54.4019 233.695 54.1359 233.049 54.5083Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M233.049 54.5083L229.879 56.3399C229.233 56.7123 228.709 57.5863 228.709 58.2855C228.709 58.9847 229.233 59.2507 229.879 58.8783L233.049 57.0467C233.695 56.6743 234.219 55.8003 234.219 55.1011C234.219 54.4019 233.695 54.1359 233.049 54.5083Z"
                            fill="white" />
                        <path
                            d="M228.595 63.5747L225.426 65.4063C224.78 65.7787 224.255 66.6527 224.255 67.3519C224.255 68.0511 224.78 68.3171 225.426 67.9447L228.595 66.1131C229.241 65.7407 229.765 64.8667 229.765 64.1675C229.765 63.4683 229.241 63.2023 228.595 63.5747Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M228.595 63.5747L225.426 65.4063C224.78 65.7787 224.255 66.6527 224.255 67.3519C224.255 68.0511 224.78 68.3171 225.426 67.9447L228.595 66.1131C229.241 65.7407 229.765 64.8667 229.765 64.1675C229.765 63.4683 229.241 63.2023 228.595 63.5747Z"
                            fill="white" />
                        <path
                            d="M228.595 70.0727L225.426 71.9043C224.78 72.2767 224.255 73.1507 224.255 73.8499C224.255 74.5491 224.78 74.8151 225.426 74.4427L228.595 72.6111C229.241 72.2387 229.765 71.3647 229.765 70.6655C229.765 69.9663 229.241 69.7003 228.595 70.0727Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M228.595 70.0727L225.426 71.9043C224.78 72.2767 224.255 73.1507 224.255 73.8499C224.255 74.5491 224.78 74.8151 225.426 74.4427L228.595 72.6111C229.241 72.2387 229.765 71.3647 229.765 70.6655C229.765 69.9663 229.241 69.7003 228.595 70.0727Z"
                            fill="white" />
                        <path
                            d="M233.049 74.0405L229.879 75.8721C229.233 76.2445 228.709 77.1185 228.709 77.8177C228.709 78.5169 229.233 78.7829 229.879 78.4105L233.049 76.5789C233.695 76.2065 234.219 75.3325 234.219 74.6333C234.219 73.9341 233.695 73.6681 233.049 74.0405Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M233.049 74.0405L229.879 75.8721C229.233 76.2445 228.709 77.1185 228.709 77.8177C228.709 78.5169 229.233 78.7829 229.879 78.4105L233.049 76.5789C233.695 76.2065 234.219 75.3325 234.219 74.6333C234.219 73.9341 233.695 73.6681 233.049 74.0405Z"
                            fill="white" />
                        <path
                            d="M228.595 83.1147L225.426 84.9463C224.78 85.3187 224.255 86.1927 224.255 86.8919C224.255 87.5911 224.78 87.8571 225.426 87.4847L228.595 85.6531C229.241 85.2807 229.765 84.4067 229.765 83.7075C229.765 83.0083 229.241 82.7423 228.595 83.1147Z"
                            fill="#27DEBF" />
                        <path opacity="0.6"
                            d="M228.595 83.1147L225.426 84.9463C224.78 85.3187 224.255 86.1927 224.255 86.8919C224.255 87.5911 224.78 87.8571 225.426 87.4847L228.595 85.6531C229.241 85.2807 229.765 84.4067 229.765 83.7075C229.765 83.0083 229.241 82.7423 228.595 83.1147Z"
                            fill="white" />
                        <path
                            d="M224.369 59.5244L205.012 70.704C204.366 71.0764 203.842 71.9504 203.842 72.6496C203.842 73.3488 204.366 73.6148 205.012 73.2424L224.369 62.0628C225.015 61.6904 225.54 60.8164 225.54 60.1172C225.54 59.4104 225.015 59.152 224.369 59.5244Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M224.369 59.5244L205.012 70.704C204.366 71.0764 203.842 71.9504 203.842 72.6496C203.842 73.3488 204.366 73.6148 205.012 73.2424L224.369 62.0628C225.015 61.6904 225.54 60.8164 225.54 60.1172C225.54 59.4104 225.015 59.152 224.369 59.5244Z"
                            fill="white" />
                        <path
                            d="M224.369 92.0825L205.012 103.262C204.366 103.634 203.842 104.508 203.842 105.208C203.842 105.907 204.366 106.173 205.012 105.8L224.369 94.6209C225.015 94.2485 225.54 93.3745 225.54 92.6753C225.54 91.9761 225.015 91.7101 224.369 92.0825Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M224.369 92.0825L205.012 103.262C204.366 103.634 203.842 104.508 203.842 105.208C203.842 105.907 204.366 106.173 205.012 105.8L224.369 94.6209C225.015 94.2485 225.54 93.3745 225.54 92.6753C225.54 91.9761 225.015 91.7101 224.369 92.0825Z"
                            fill="white" />
                        <path
                            d="M219.916 68.5913L205.012 77.2097C204.366 77.5821 203.842 78.4561 203.842 79.1553C203.842 79.8545 204.366 80.1205 205.012 79.7481L219.916 71.1297C220.562 70.7573 221.086 69.8833 221.086 69.1841C221.086 68.4849 220.562 68.2189 219.916 68.5913Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M219.916 68.5913L205.012 77.2097C204.366 77.5821 203.842 78.4561 203.842 79.1553C203.842 79.8545 204.366 80.1205 205.012 79.7481L219.916 71.1297C220.562 70.7573 221.086 69.8833 221.086 69.1841C221.086 68.4849 220.562 68.2189 219.916 68.5913Z"
                            fill="white" />
                        <path
                            d="M219.916 75.104L205.012 83.7224C204.366 84.0948 203.842 84.9688 203.842 85.668C203.842 86.3672 204.366 86.6332 205.012 86.2608L219.916 77.6424C220.562 77.27 221.086 76.396 221.086 75.6968C221.086 74.9976 220.562 74.7316 219.916 75.104Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M219.916 75.104L205.012 83.7224C204.366 84.0948 203.842 84.9688 203.842 85.668C203.842 86.3672 204.366 86.6332 205.012 86.2608L219.916 77.6424C220.562 77.27 221.086 76.396 221.086 75.6968C221.086 74.9976 220.562 74.7316 219.916 75.104Z"
                            fill="white" />
                        <path
                            d="M224.369 79.0561L205.012 90.2357C204.366 90.6081 203.842 91.4821 203.842 92.1813C203.842 92.8805 204.366 93.1465 205.012 92.7741L224.369 81.5945C225.015 81.2221 225.54 80.3481 225.54 79.6489C225.54 78.9497 225.015 78.6837 224.369 79.0561Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M224.369 79.0561L205.012 90.2357C204.366 90.6081 203.842 91.4821 203.842 92.1813C203.842 92.8805 204.366 93.1465 205.012 92.7741L224.369 81.5945C225.015 81.2221 225.54 80.3481 225.54 79.6489C225.54 78.9497 225.015 78.6837 224.369 79.0561Z"
                            fill="white" />
                        <path
                            d="M219.916 88.1303L205.012 96.7487C204.366 97.1211 203.842 97.9951 203.842 98.6943C203.842 99.3935 204.366 99.6595 205.012 99.2871L219.916 90.6687C220.562 90.2963 221.086 89.4223 221.086 88.7231C221.086 88.0239 220.562 87.7579 219.916 88.1303Z"
                            fill="#27DEBF" />
                        <path opacity="0.8"
                            d="M219.916 88.1303L205.012 96.7487C204.366 97.1211 203.842 97.9951 203.842 98.6943C203.842 99.3935 204.366 99.6595 205.012 99.2871L219.916 90.6687C220.562 90.2963 221.086 89.4223 221.086 88.7231C221.086 88.0239 220.562 87.7579 219.916 88.1303Z"
                            fill="white" />
                    </g>
                    <path
                        d="M143.977 132.081L115.735 148.353C115.112 148.71 114.603 149.584 114.603 150.306V188.929C114.603 189.651 115.112 190.518 115.735 190.875L117.886 192.091C118.509 192.448 119.528 192.441 120.151 192.083L148.392 175.812C149.016 175.455 149.517 174.58 149.517 173.858V135.235C149.517 134.513 149.008 133.647 148.385 133.29L146.234 132.074C145.611 131.717 144.6 131.724 143.977 132.081Z"
                        fill="#27DEBF" />
                    <path opacity="0.2"
                        d="M120.151 192.083C119.55 192.433 118.456 192.44 117.886 192.098L115.743 190.875C115.12 190.525 114.61 189.651 114.61 188.937V150.313C114.61 149.941 114.747 149.523 114.968 149.158L119.36 151.697C119.155 152.046 119.026 152.449 119.026 152.806V191.429C119.018 192.091 119.49 192.471 120.151 192.083Z"
                        fill="black" />
                    <path opacity="0.5"
                        d="M149.51 135.03C149.418 134.46 148.955 134.263 148.392 134.582L120.151 150.853C119.839 151.036 119.558 151.34 119.353 151.697L114.96 149.158C115.165 148.816 115.431 148.528 115.735 148.353L143.977 132.081C144.6 131.724 145.611 131.717 146.242 132.074L148.385 133.29C148.955 133.609 149.426 134.354 149.51 135.03Z"
                        fill="white" />
                    <path
                        d="M148.392 134.582L120.151 150.853C119.527 151.21 119.026 152.084 119.026 152.806V179.019V191.43C119.026 192.152 119.527 192.44 120.151 192.083L148.392 175.812C149.015 175.454 149.517 174.58 149.517 173.858V135.235C149.517 134.513 149.015 134.224 148.392 134.582Z"
                        fill="#27DEBF" />
                    <path
                        d="M120.888 170.91C120.888 170.636 120.934 170.401 121.017 170.211C121.101 170.021 121.222 169.8 121.374 169.557L128.04 158.788C128.085 158.727 128.123 158.689 128.146 158.659C128.176 158.636 128.199 158.613 128.222 158.605C128.321 158.545 128.404 158.552 128.473 158.613C128.541 158.674 128.572 158.788 128.572 158.94V163.097C128.572 163.439 128.511 163.728 128.382 163.963C128.252 164.199 128.138 164.389 128.04 164.533L125.121 169.01L128.04 170.15C128.138 170.18 128.252 170.233 128.382 170.309C128.511 170.393 128.572 170.598 128.572 170.94V175.097C128.572 175.249 128.541 175.401 128.473 175.538C128.404 175.683 128.321 175.781 128.222 175.835C128.199 175.85 128.176 175.857 128.146 175.865C128.116 175.873 128.085 175.873 128.04 175.865L121.374 172.787C121.222 172.726 121.101 172.643 121.017 172.544C120.934 172.445 120.888 172.263 120.888 171.989V170.91Z"
                        fill="white" />
                    <path
                        d="M135.412 152.654C135.465 152.434 135.548 152.214 135.662 151.986C135.776 151.758 135.936 151.583 136.149 151.461L138.383 150.169C138.482 150.108 138.566 150.116 138.642 150.184C138.71 150.253 138.748 150.367 138.748 150.519C138.748 150.587 138.74 150.671 138.718 150.77L133.086 174.763C133.04 174.96 132.964 175.173 132.85 175.409C132.736 175.644 132.569 175.827 132.349 175.956L130.168 177.218C130.069 177.278 129.985 177.271 129.909 177.202C129.833 177.134 129.803 177.02 129.803 176.868C129.803 176.8 129.81 176.716 129.841 176.617L135.412 152.654Z"
                        fill="white" />
                    <path
                        d="M147.655 156.538C147.655 156.812 147.61 157.047 147.534 157.237C147.45 157.427 147.328 157.648 147.176 157.891L140.511 168.66C140.466 168.721 140.428 168.759 140.405 168.789C140.374 168.812 140.352 168.835 140.329 168.842C140.23 168.903 140.146 168.896 140.078 168.835C140.01 168.774 139.979 168.66 139.979 168.508V164.351C139.979 164.009 140.04 163.728 140.169 163.5C140.298 163.272 140.412 163.089 140.511 162.945L143.43 158.438L140.511 157.328C140.412 157.298 140.298 157.245 140.169 157.154C140.04 157.062 139.979 156.85 139.979 156.508V152.35C139.979 152.198 140.01 152.046 140.078 151.91C140.146 151.773 140.23 151.666 140.329 151.613C140.352 151.598 140.374 151.59 140.405 151.583C140.435 151.575 140.466 151.575 140.511 151.583L147.176 154.661C147.328 154.722 147.45 154.805 147.534 154.904C147.617 155.003 147.655 155.185 147.655 155.459V156.538Z"
                        fill="white" />
                    <path
                        d="M111.525 239.902C111.365 239.818 111.152 239.834 110.947 239.978L109.777 240.822L109.541 241.551C109.397 241.992 109.594 242.554 109.921 242.874C110.126 243.071 110.316 243.284 110.499 243.52C110.78 243.884 111.266 243.998 111.639 243.725L114.375 241.764C114.58 241.62 114.785 241.597 114.945 241.68L111.525 239.902ZM107.618 250.39C107.132 248.133 105.635 247.054 103.765 247.282C103.948 247.654 104.1 248.095 104.206 248.596C104.974 252.176 102.891 257.39 99.5624 260.232C98.3388 261.273 97.1152 261.851 96.0208 261.988C97.2444 264.359 100.11 264.473 102.975 262.026C106.311 259.183 108.386 253.977 107.618 250.39ZM107.056 234.97C106.988 234.939 106.912 234.909 106.828 234.894L104.692 234.498C104.236 234.415 103.712 234.688 103.514 235.099L101.675 238.975C101.592 239.165 101.432 239.332 101.25 239.499H101.242C101.143 239.59 101.029 239.674 100.915 239.742L101.622 241.787C101.774 242.22 102.222 242.387 102.64 242.205C103.074 242.007 103.507 241.848 103.925 241.726C104.176 241.65 104.442 241.49 104.662 241.3C104.844 241.141 105.004 240.958 105.088 240.768L106.919 236.892C107.117 236.482 107.649 236.208 108.097 236.292L110.24 236.687C110.316 236.702 110.392 236.725 110.453 236.756L107.056 234.97ZM102.572 271.944C102.481 271.875 102.405 271.769 102.359 271.632L101.546 269.284C101.402 268.85 100.946 268.676 100.528 268.866C100.094 269.063 99.6612 269.223 99.2432 269.344C99.114 269.382 98.9772 269.451 98.8404 269.534L98.9468 269.838C99.0076 270.013 99.1064 270.135 99.2356 270.196V270.203L102.572 271.944ZM97.1152 237.295C97.0392 237.257 96.9632 237.242 96.8796 237.242C96.7504 237.25 96.6212 237.295 96.4996 237.409L93.4216 240.031C93.376 240.069 93.338 240.107 93.3076 240.153C93.2772 240.183 93.2544 240.214 93.2316 240.252C93.1252 240.404 93.0416 240.578 92.9732 240.761C92.9656 240.799 92.9504 240.844 92.9428 240.882H92.9504C92.9048 241.065 92.8668 241.24 92.8896 241.399L93.2012 244.409C93.2468 244.865 93.0492 245.526 92.768 245.891C92.274 246.537 91.8104 247.206 91.3772 247.897C91.2328 248.133 90.9744 248.338 90.7008 248.467C90.6096 248.513 90.5184 248.543 90.4272 248.558C90.3816 248.574 90.336 248.581 90.298 248.589C90.2372 248.604 90.1764 248.612 90.1156 248.604L88.0712 248.589H88.018C87.9648 248.589 87.904 248.596 87.8508 248.612C87.7976 248.619 87.752 248.634 87.6988 248.65C87.6912 248.65 87.6912 248.65 87.6836 248.657C87.6304 248.672 87.5772 248.703 87.5164 248.733C87.41 248.786 87.3188 248.855 87.2276 248.931C87.0908 249.052 86.9844 249.204 86.916 249.364L85.1756 253.734C85.016 254.122 85.1832 254.555 85.5404 254.752L87.8584 255.968C87.9344 256.151 87.9724 256.356 87.9344 256.554C87.8052 257.245 87.714 257.944 87.6608 258.613C87.6304 259.069 87.3568 259.708 87.0376 260.034L87.0072 260.065L84.332 262.732C84.2864 262.778 84.2408 262.831 84.2028 262.884C84.1952 262.892 84.1952 262.9 84.1876 262.915C84.142 262.976 84.1116 263.036 84.0812 263.105C83.914 263.424 83.8456 263.827 83.914 264.138L84.5676 267.178C84.6056 267.368 84.7044 267.505 84.826 267.581L88.2308 269.36C88.1092 269.284 88.0256 269.154 87.98 268.964L87.3264 265.924C87.2884 265.75 87.296 265.537 87.334 265.332C87.4024 265.02 87.5392 264.708 87.7368 264.511L90.412 261.843L90.4424 261.813C90.7692 261.486 91.0352 260.848 91.0732 260.392C91.1264 259.715 91.21 259.024 91.3468 258.332C91.4304 257.876 91.1644 257.382 90.7312 257.215L89.0516 256.584C88.626 256.417 88.4056 255.938 88.5804 255.512L90.3208 251.135C90.3892 250.975 90.4956 250.831 90.6324 250.702C90.8604 250.496 91.172 250.36 91.4608 250.36L93.5052 250.375C93.6952 250.375 93.9004 250.329 94.0904 250.238C94.3716 250.109 94.6224 249.904 94.7668 249.668C95.2 248.976 95.6712 248.3 96.1576 247.662C96.4464 247.297 96.6364 246.643 96.5908 246.18L96.2792 243.17C96.264 243.01 96.2792 242.828 96.3324 242.646C96.416 242.311 96.5984 241.992 96.8264 241.794L99.8968 239.172C100.11 238.99 100.338 238.96 100.52 239.058L97.1152 237.295ZM93.6496 269.512C93.7864 269.071 93.5888 268.508 93.262 268.189C93.0568 267.992 92.8668 267.779 92.692 267.543C92.4108 267.178 91.9244 267.064 91.552 267.33L89.9864 268.448L88.9452 271.647C88.8312 271.997 88.9756 272.339 89.2644 272.498L89.2568 272.506L92.6844 274.3C92.388 274.132 92.2512 273.798 92.3652 273.448L93.6496 269.512Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M111.525 239.902C111.365 239.818 111.152 239.834 110.947 239.978L109.777 240.822L109.541 241.551C109.397 241.992 109.594 242.554 109.921 242.874C110.126 243.071 110.316 243.284 110.499 243.52C110.78 243.884 111.266 243.998 111.639 243.725L114.375 241.764C114.58 241.62 114.785 241.597 114.945 241.68L111.525 239.902ZM107.618 250.39C107.132 248.133 105.635 247.054 103.765 247.282C103.948 247.654 104.1 248.095 104.206 248.596C104.974 252.176 102.891 257.39 99.5624 260.232C98.3388 261.273 97.1152 261.851 96.0208 261.988C97.2444 264.359 100.11 264.473 102.975 262.026C106.311 259.183 108.386 253.977 107.618 250.39ZM107.056 234.97C106.988 234.939 106.912 234.909 106.828 234.894L104.692 234.498C104.236 234.415 103.712 234.688 103.514 235.099L101.675 238.975C101.592 239.165 101.432 239.332 101.25 239.499H101.242C101.143 239.59 101.029 239.674 100.915 239.742L101.622 241.787C101.774 242.22 102.222 242.387 102.64 242.205C103.074 242.007 103.507 241.848 103.925 241.726C104.176 241.65 104.442 241.49 104.662 241.3C104.844 241.141 105.004 240.958 105.088 240.768L106.919 236.892C107.117 236.482 107.649 236.208 108.097 236.292L110.24 236.687C110.316 236.702 110.392 236.725 110.453 236.756L107.056 234.97ZM102.572 271.944C102.481 271.875 102.405 271.769 102.359 271.632L101.546 269.284C101.402 268.85 100.946 268.676 100.528 268.866C100.094 269.063 99.6612 269.223 99.2432 269.344C99.114 269.382 98.9772 269.451 98.8404 269.534L98.9468 269.838C99.0076 270.013 99.1064 270.135 99.2356 270.196V270.203L102.572 271.944ZM97.1152 237.295C97.0392 237.257 96.9632 237.242 96.8796 237.242C96.7504 237.25 96.6212 237.295 96.4996 237.409L93.4216 240.031C93.376 240.069 93.338 240.107 93.3076 240.153C93.2772 240.183 93.2544 240.214 93.2316 240.252C93.1252 240.404 93.0416 240.578 92.9732 240.761C92.9656 240.799 92.9504 240.844 92.9428 240.882H92.9504C92.9048 241.065 92.8668 241.24 92.8896 241.399L93.2012 244.409C93.2468 244.865 93.0492 245.526 92.768 245.891C92.274 246.537 91.8104 247.206 91.3772 247.897C91.2328 248.133 90.9744 248.338 90.7008 248.467C90.6096 248.513 90.5184 248.543 90.4272 248.558C90.3816 248.574 90.336 248.581 90.298 248.589C90.2372 248.604 90.1764 248.612 90.1156 248.604L88.0712 248.589H88.018C87.9648 248.589 87.904 248.596 87.8508 248.612C87.7976 248.619 87.752 248.634 87.6988 248.65C87.6912 248.65 87.6912 248.65 87.6836 248.657C87.6304 248.672 87.5772 248.703 87.5164 248.733C87.41 248.786 87.3188 248.855 87.2276 248.931C87.0908 249.052 86.9844 249.204 86.916 249.364L85.1756 253.734C85.016 254.122 85.1832 254.555 85.5404 254.752L87.8584 255.968C87.9344 256.151 87.9724 256.356 87.9344 256.554C87.8052 257.245 87.714 257.944 87.6608 258.613C87.6304 259.069 87.3568 259.708 87.0376 260.034L87.0072 260.065L84.332 262.732C84.2864 262.778 84.2408 262.831 84.2028 262.884C84.1952 262.892 84.1952 262.9 84.1876 262.915C84.142 262.976 84.1116 263.036 84.0812 263.105C83.914 263.424 83.8456 263.827 83.914 264.138L84.5676 267.178C84.6056 267.368 84.7044 267.505 84.826 267.581L88.2308 269.36C88.1092 269.284 88.0256 269.154 87.98 268.964L87.3264 265.924C87.2884 265.75 87.296 265.537 87.334 265.332C87.4024 265.02 87.5392 264.708 87.7368 264.511L90.412 261.843L90.4424 261.813C90.7692 261.486 91.0352 260.848 91.0732 260.392C91.1264 259.715 91.21 259.024 91.3468 258.332C91.4304 257.876 91.1644 257.382 90.7312 257.215L89.0516 256.584C88.626 256.417 88.4056 255.938 88.5804 255.512L90.3208 251.135C90.3892 250.975 90.4956 250.831 90.6324 250.702C90.8604 250.496 91.172 250.36 91.4608 250.36L93.5052 250.375C93.6952 250.375 93.9004 250.329 94.0904 250.238C94.3716 250.109 94.6224 249.904 94.7668 249.668C95.2 248.976 95.6712 248.3 96.1576 247.662C96.4464 247.297 96.6364 246.643 96.5908 246.18L96.2792 243.17C96.264 243.01 96.2792 242.828 96.3324 242.646C96.416 242.311 96.5984 241.992 96.8264 241.794L99.8968 239.172C100.11 238.99 100.338 238.96 100.52 239.058L97.1152 237.295ZM93.6496 269.512C93.7864 269.071 93.5888 268.508 93.262 268.189C93.0568 267.992 92.8668 267.779 92.692 267.543C92.4108 267.178 91.9244 267.064 91.552 267.33L89.9864 268.448L88.9452 271.647C88.8312 271.997 88.9756 272.339 89.2644 272.498L89.2568 272.506L92.6844 274.3C92.388 274.132 92.2512 273.798 92.3652 273.448L93.6496 269.512Z"
                        fill="black" />
                    <path
                        d="M90.4044 261.85L87.7292 264.518C87.5316 264.716 87.3872 265.02 87.3264 265.339L83.9216 263.553C83.952 263.393 84.0052 263.241 84.0736 263.104C84.0964 263.036 84.1344 262.975 84.18 262.914C84.1876 262.907 84.1876 262.899 84.1952 262.884C84.2332 262.831 84.2712 262.778 84.3244 262.732L86.9996 260.064L90.4044 261.85Z"
                        fill="#27DEBF" />
                    <path
                        d="M94.0979 250.253C93.9079 250.345 93.7027 250.398 93.5127 250.39L91.4683 250.375C91.1795 250.367 90.8679 250.512 90.6399 250.717L87.2275 248.923C87.3111 248.847 87.4099 248.779 87.5163 248.726C87.5695 248.695 87.6227 248.673 87.6835 248.65C87.6911 248.642 87.6911 248.642 87.6987 248.642C87.7443 248.627 87.7975 248.612 87.8507 248.604C87.9039 248.589 87.9647 248.581 88.0179 248.581H88.0711L90.1155 248.597C90.1763 248.597 90.2371 248.589 90.2979 248.581C90.3435 248.574 90.3891 248.566 90.4271 248.551C90.5183 248.528 90.6019 248.49 90.6931 248.452L90.7007 248.46L94.0979 250.253Z"
                        fill="#27DEBF" />
                    <path
                        d="M114.937 241.688C114.778 241.605 114.572 241.627 114.367 241.779L111.631 243.74C111.259 244.006 110.772 243.9 110.491 243.527C110.309 243.292 110.126 243.071 109.914 242.881C109.587 242.562 109.389 242 109.534 241.559L109.769 240.829L110.94 239.986C111.152 239.841 111.358 239.819 111.517 239.91V239.902L114.937 241.688Z"
                        fill="#27DEBF" />
                    <path
                        d="M110.468 236.756C110.408 236.725 110.332 236.702 110.256 236.687L108.112 236.292C107.664 236.208 107.14 236.482 106.934 236.892L105.103 240.768C105.019 240.958 104.86 241.141 104.677 241.3L101.265 239.499C101.447 239.34 101.599 239.165 101.69 238.975L103.53 235.099C103.727 234.688 104.252 234.415 104.708 234.498L106.843 234.894C106.927 234.909 107.003 234.939 107.071 234.977V234.97L110.468 236.756Z"
                        fill="#27DEBF" />
                    <path
                        d="M100.535 239.081C100.353 238.983 100.125 239.013 99.9119 239.195L96.8415 241.817C96.6135 242.007 96.4311 242.334 96.3475 242.669L92.9351 240.883C92.9427 240.845 92.9579 240.799 92.9655 240.761C93.0339 240.579 93.1175 240.396 93.2239 240.252C93.2467 240.214 93.2695 240.183 93.2999 240.153C93.3379 240.107 93.3759 240.069 93.4139 240.031L96.4919 237.409C96.6135 237.295 96.7503 237.25 96.8719 237.242C96.9555 237.242 97.0315 237.257 97.1075 237.295L100.535 239.081Z"
                        fill="#27DEBF" />
                    <path opacity="0.2"
                        d="M90.4044 261.85L87.7292 264.518C87.5316 264.716 87.3872 265.02 87.3264 265.339L83.9216 263.553C83.952 263.393 84.0052 263.241 84.0736 263.104C84.0964 263.036 84.1344 262.975 84.18 262.914C84.1876 262.907 84.1876 262.899 84.1952 262.884C84.2332 262.831 84.2712 262.778 84.3244 262.732L86.9996 260.064L90.4044 261.85Z"
                        fill="black" />
                    <path opacity="0.2"
                        d="M94.0979 250.253C93.9079 250.345 93.7027 250.398 93.5127 250.39L91.4683 250.375C91.1795 250.367 90.8679 250.512 90.6399 250.717L87.2275 248.923C87.3111 248.847 87.4099 248.779 87.5163 248.726C87.5695 248.695 87.6227 248.673 87.6835 248.65C87.6911 248.642 87.6911 248.642 87.6987 248.642C87.7443 248.627 87.7975 248.612 87.8507 248.604C87.9039 248.589 87.9647 248.581 88.0179 248.581H88.0711L90.1155 248.597C90.1763 248.597 90.2371 248.589 90.2979 248.581C90.3435 248.574 90.3891 248.566 90.4271 248.551C90.5183 248.528 90.6019 248.49 90.6931 248.452L90.7007 248.46L94.0979 250.253Z"
                        fill="black" />
                    <path opacity="0.2"
                        d="M114.937 241.688C114.778 241.605 114.572 241.627 114.367 241.779L111.631 243.74C111.259 244.006 110.772 243.9 110.491 243.527C110.309 243.292 110.126 243.071 109.914 242.881C109.587 242.562 109.389 242 109.534 241.559L109.769 240.829L110.94 239.986C111.152 239.841 111.358 239.819 111.517 239.91V239.902L114.937 241.688Z"
                        fill="black" />
                    <path opacity="0.2"
                        d="M110.468 236.756C110.408 236.725 110.332 236.702 110.256 236.687L108.112 236.292C107.664 236.208 107.14 236.482 106.934 236.892L105.103 240.768C105.019 240.958 104.86 241.141 104.677 241.3L101.265 239.499C101.447 239.34 101.599 239.165 101.69 238.975L103.53 235.099C103.727 234.688 104.252 234.415 104.708 234.498L106.843 234.894C106.927 234.909 107.003 234.939 107.071 234.977V234.97L110.468 236.756Z"
                        fill="black" />
                    <path opacity="0.2"
                        d="M100.535 239.081C100.353 238.983 100.125 239.013 99.9119 239.195L96.8415 241.817C96.6135 242.007 96.4311 242.334 96.3475 242.669L92.9351 240.883C92.9427 240.845 92.9579 240.799 92.9655 240.761C93.0339 240.579 93.1175 240.396 93.2239 240.252C93.2467 240.214 93.2695 240.183 93.2999 240.153C93.3379 240.107 93.3759 240.069 93.4139 240.031L96.4919 237.409C96.6135 237.295 96.7503 237.25 96.8719 237.242C96.9555 237.242 97.0315 237.257 97.1075 237.295L100.535 239.081Z"
                        fill="black" />
                    <path
                        d="M115.864 245.146L115.211 242.106C115.112 241.657 114.732 241.505 114.36 241.779L111.624 243.74C111.251 244.006 110.765 243.899 110.484 243.535C110.301 243.299 110.111 243.086 109.906 242.889C109.579 242.569 109.382 241.999 109.526 241.566L110.803 237.637C110.947 237.196 110.696 236.778 110.24 236.695L108.105 236.307C107.649 236.223 107.124 236.497 106.927 236.907L105.088 240.783C104.89 241.201 104.366 241.604 103.925 241.733C103.507 241.863 103.074 242.022 102.64 242.22C102.222 242.41 101.774 242.235 101.622 241.802L100.809 239.453C100.657 239.02 100.254 238.906 99.9045 239.21L96.8341 241.832C96.4845 242.129 96.2413 242.744 96.2869 243.2L96.5985 246.21C96.6441 246.666 96.4465 247.327 96.1653 247.692C95.6713 248.338 95.2077 249.007 94.7745 249.698C94.5313 250.086 93.9689 250.405 93.5129 250.405L91.4685 250.39C91.0049 250.382 90.4957 250.732 90.3285 251.157L88.5881 255.535C88.4209 255.961 88.6261 256.439 89.0593 256.607L90.7313 257.245C91.1645 257.405 91.4229 257.906 91.3393 258.355C91.2101 259.054 91.1189 259.745 91.0657 260.422C91.0353 260.878 90.7617 261.516 90.4349 261.843L87.7293 264.541C87.4025 264.868 87.2201 265.491 87.3113 265.947L87.9649 268.987C88.0637 269.435 88.4437 269.587 88.8161 269.314L91.5521 267.353C91.9245 267.087 92.4109 267.193 92.6921 267.558C92.8745 267.794 93.0645 268.007 93.2697 268.204C93.5965 268.523 93.7941 269.093 93.6497 269.527L92.3729 273.456C92.2285 273.897 92.4793 274.315 92.9353 274.398L95.0709 274.786C95.5269 274.869 96.0513 274.596 96.2489 274.185L98.0881 270.309C98.2857 269.891 98.8101 269.489 99.2509 269.359C99.6689 269.23 100.102 269.071 100.535 268.873C100.953 268.683 101.402 268.858 101.554 269.291L102.367 271.639C102.519 272.073 102.922 272.187 103.271 271.883L106.342 269.261C106.691 268.964 106.934 268.349 106.889 267.893L106.577 264.883C106.532 264.427 106.729 263.766 107.01 263.401C107.504 262.755 107.968 262.086 108.401 261.395C108.644 261.007 109.207 260.688 109.663 260.688L111.707 260.703C112.171 260.711 112.68 260.361 112.847 259.935L114.588 255.558C114.755 255.132 114.55 254.653 114.116 254.486L112.444 253.848C112.011 253.688 111.753 253.187 111.836 252.738C111.966 252.039 112.057 251.347 112.11 250.671C112.14 250.215 112.414 249.577 112.741 249.25L115.446 246.552C115.781 246.225 115.963 245.602 115.864 245.146ZM102.982 262.025C99.6537 264.868 96.3325 264.26 95.5649 260.68C94.7973 257.093 96.8721 251.887 100.201 249.045C103.53 246.202 106.851 246.81 107.618 250.39C108.386 253.977 106.311 259.183 102.982 262.025Z"
                        fill="#27DEBF" />
                    <path
                        d="M150.612 238.367C150.429 238.253 150.171 238.253 149.905 238.413L148.43 239.332L148.088 240.191C147.883 240.708 148.066 241.4 148.438 241.81C148.666 242.061 148.879 242.334 149.076 242.638C149.388 243.094 149.958 243.269 150.422 242.973L153.864 240.837C154.123 240.685 154.374 240.67 154.556 240.784L150.612 238.367ZM145.064 250.649C144.661 247.898 142.958 246.476 140.686 246.606C140.876 247.069 141.02 247.601 141.112 248.224C141.742 252.587 138.816 258.682 134.591 261.821C133.033 262.976 131.52 263.569 130.198 263.645C131.475 266.594 134.902 266.966 138.55 264.253C142.776 261.106 145.694 255.019 145.064 250.649ZM145.641 232.082C145.565 232.036 145.474 231.998 145.375 231.975L142.844 231.329C142.305 231.193 141.651 231.474 141.385 231.96L138.862 236.467C138.74 236.688 138.543 236.878 138.307 237.06H138.3C138.17 237.166 138.034 237.25 137.882 237.326L138.566 239.842C138.71 240.374 139.242 240.617 139.751 240.419C140.291 240.222 140.823 240.062 141.34 239.948C141.644 239.879 141.978 239.712 142.259 239.499C142.495 239.325 142.7 239.12 142.814 238.899L145.33 234.392C145.603 233.913 146.257 233.625 146.789 233.762L149.327 234.408C149.418 234.43 149.51 234.468 149.578 234.506L145.641 232.082ZM137.258 276.116C137.152 276.025 137.068 275.896 137.03 275.721L136.248 272.833C136.111 272.301 135.579 272.05 135.062 272.256C134.53 272.453 133.998 272.613 133.474 272.727C133.314 272.765 133.139 272.833 132.972 272.917L133.078 273.289C133.139 273.502 133.246 273.654 133.398 273.738V273.745L137.258 276.116ZM133.512 234.065C133.428 234.02 133.337 233.99 133.23 233.982C133.078 233.974 132.911 234.028 132.759 234.149L128.853 237.045C128.8 237.083 128.746 237.128 128.701 237.182C128.663 237.212 128.632 237.25 128.594 237.296C128.458 237.463 128.336 237.668 128.245 237.888C128.23 237.934 128.207 237.987 128.192 238.033H128.199C128.123 238.246 128.078 238.458 128.085 238.648L128.214 242.289C128.23 242.844 127.941 243.619 127.568 244.029C126.922 244.759 126.307 245.534 125.729 246.324C125.532 246.59 125.212 246.818 124.87 246.948C124.756 246.993 124.65 247.024 124.536 247.039C124.483 247.054 124.43 247.062 124.376 247.062C124.3 247.069 124.232 247.077 124.156 247.069L121.709 246.879H121.648C121.58 246.879 121.511 246.879 121.45 246.894C121.39 246.902 121.329 246.909 121.268 246.932C121.26 246.932 121.253 246.932 121.245 246.94C121.177 246.955 121.108 246.986 121.04 247.016C120.911 247.069 120.789 247.145 120.683 247.229C120.516 247.366 120.364 247.533 120.272 247.723L117.825 252.838C117.605 253.294 117.764 253.818 118.182 254.092L120.865 255.741C120.949 255.969 120.964 256.22 120.903 256.448C120.69 257.268 120.523 258.097 120.409 258.902C120.333 259.449 119.961 260.194 119.543 260.559L119.505 260.589L116.07 263.576C116.009 263.63 115.956 263.69 115.902 263.751C115.895 263.766 115.887 263.774 115.88 263.782C115.826 263.85 115.773 263.918 115.743 264.002C115.522 264.367 115.401 264.846 115.454 265.233L115.994 268.942C116.024 269.178 116.13 269.345 116.275 269.451L120.219 271.868C120.082 271.769 119.984 271.602 119.953 271.374L119.421 267.665C119.383 267.452 119.414 267.194 119.482 266.958C119.588 266.586 119.786 266.229 120.037 266.008L123.464 263.022L123.502 262.991C123.92 262.626 124.293 261.882 124.376 261.334C124.49 260.529 124.658 259.7 124.87 258.879C125.007 258.34 124.726 257.724 124.224 257.489L122.264 256.592C121.762 256.356 121.542 255.763 121.785 255.269L124.232 250.155C124.323 249.972 124.46 249.797 124.642 249.661C124.939 249.433 125.319 249.288 125.668 249.319L128.123 249.509C128.351 249.532 128.602 249.478 128.838 249.387C129.18 249.258 129.506 249.03 129.696 248.764C130.274 247.973 130.89 247.198 131.536 246.469C131.908 246.058 132.197 245.283 132.182 244.728L132.052 241.096C132.045 240.898 132.083 240.685 132.166 240.472C132.296 240.085 132.539 239.705 132.828 239.492L136.726 236.596C136.992 236.399 137.274 236.376 137.486 236.513L133.512 234.065ZM126.732 272.483C126.93 271.967 126.748 271.275 126.375 270.865C126.147 270.614 125.934 270.34 125.744 270.036C125.433 269.573 124.863 269.406 124.399 269.694L122.431 270.91L120.926 274.672C120.759 275.083 120.903 275.501 121.238 275.721L121.23 275.729L125.197 278.168C124.855 277.948 124.718 277.53 124.886 277.119L126.732 272.483Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M150.612 238.367C150.429 238.253 150.171 238.253 149.905 238.413L148.43 239.332L148.088 240.191C147.883 240.708 148.066 241.4 148.438 241.81C148.666 242.061 148.879 242.334 149.076 242.638C149.388 243.094 149.958 243.269 150.422 242.973L153.864 240.837C154.123 240.685 154.374 240.67 154.556 240.784L150.612 238.367ZM145.064 250.649C144.661 247.898 142.958 246.476 140.686 246.606C140.876 247.069 141.02 247.601 141.112 248.224C141.742 252.587 138.816 258.682 134.591 261.821C133.033 262.976 131.52 263.569 130.198 263.645C131.475 266.594 134.902 266.966 138.55 264.253C142.776 261.106 145.694 255.019 145.064 250.649ZM145.641 232.082C145.565 232.036 145.474 231.998 145.375 231.975L142.844 231.329C142.305 231.193 141.651 231.474 141.385 231.96L138.862 236.467C138.74 236.688 138.543 236.878 138.307 237.06H138.3C138.17 237.166 138.034 237.25 137.882 237.326L138.566 239.842C138.71 240.374 139.242 240.617 139.751 240.419C140.291 240.222 140.823 240.062 141.34 239.948C141.644 239.879 141.978 239.712 142.259 239.499C142.495 239.325 142.7 239.12 142.814 238.899L145.33 234.392C145.603 233.913 146.257 233.625 146.789 233.762L149.327 234.408C149.418 234.43 149.51 234.468 149.578 234.506L145.641 232.082ZM137.258 276.116C137.152 276.025 137.068 275.896 137.03 275.721L136.248 272.833C136.111 272.301 135.579 272.05 135.062 272.256C134.53 272.453 133.998 272.613 133.474 272.727C133.314 272.765 133.139 272.833 132.972 272.917L133.078 273.289C133.139 273.502 133.246 273.654 133.398 273.738V273.745L137.258 276.116ZM133.512 234.065C133.428 234.02 133.337 233.99 133.23 233.982C133.078 233.974 132.911 234.028 132.759 234.149L128.853 237.045C128.8 237.083 128.746 237.128 128.701 237.182C128.663 237.212 128.632 237.25 128.594 237.296C128.458 237.463 128.336 237.668 128.245 237.888C128.23 237.934 128.207 237.987 128.192 238.033H128.199C128.123 238.246 128.078 238.458 128.085 238.648L128.214 242.289C128.23 242.844 127.941 243.619 127.568 244.029C126.922 244.759 126.307 245.534 125.729 246.324C125.532 246.59 125.212 246.818 124.87 246.948C124.756 246.993 124.65 247.024 124.536 247.039C124.483 247.054 124.43 247.062 124.376 247.062C124.3 247.069 124.232 247.077 124.156 247.069L121.709 246.879H121.648C121.58 246.879 121.511 246.879 121.45 246.894C121.39 246.902 121.329 246.909 121.268 246.932C121.26 246.932 121.253 246.932 121.245 246.94C121.177 246.955 121.108 246.986 121.04 247.016C120.911 247.069 120.789 247.145 120.683 247.229C120.516 247.366 120.364 247.533 120.272 247.723L117.825 252.838C117.605 253.294 117.764 253.818 118.182 254.092L120.865 255.741C120.949 255.969 120.964 256.22 120.903 256.448C120.69 257.268 120.523 258.097 120.409 258.902C120.333 259.449 119.961 260.194 119.543 260.559L119.505 260.589L116.07 263.576C116.009 263.63 115.956 263.69 115.902 263.751C115.895 263.766 115.887 263.774 115.88 263.782C115.826 263.85 115.773 263.918 115.743 264.002C115.522 264.367 115.401 264.846 115.454 265.233L115.994 268.942C116.024 269.178 116.13 269.345 116.275 269.451L120.219 271.868C120.082 271.769 119.984 271.602 119.953 271.374L119.421 267.665C119.383 267.452 119.414 267.194 119.482 266.958C119.588 266.586 119.786 266.229 120.037 266.008L123.464 263.022L123.502 262.991C123.92 262.626 124.293 261.882 124.376 261.334C124.49 260.529 124.658 259.7 124.87 258.879C125.007 258.34 124.726 257.724 124.224 257.489L122.264 256.592C121.762 256.356 121.542 255.763 121.785 255.269L124.232 250.155C124.323 249.972 124.46 249.797 124.642 249.661C124.939 249.433 125.319 249.288 125.668 249.319L128.123 249.509C128.351 249.532 128.602 249.478 128.838 249.387C129.18 249.258 129.506 249.03 129.696 248.764C130.274 247.973 130.89 247.198 131.536 246.469C131.908 246.058 132.197 245.283 132.182 244.728L132.052 241.096C132.045 240.898 132.083 240.685 132.166 240.472C132.296 240.085 132.539 239.705 132.828 239.492L136.726 236.596C136.992 236.399 137.274 236.376 137.486 236.513L133.512 234.065ZM126.732 272.483C126.93 271.967 126.748 271.275 126.375 270.865C126.147 270.614 125.934 270.34 125.744 270.036C125.433 269.573 124.863 269.406 124.399 269.694L122.431 270.91L120.926 274.672C120.759 275.083 120.903 275.501 121.238 275.721L121.23 275.729L125.197 278.168C124.855 277.948 124.718 277.53 124.886 277.119L126.732 272.483Z"
                        fill="black" />
                    <path
                        d="M123.457 263.014L120.029 266.001C119.778 266.221 119.581 266.578 119.474 266.951L115.53 264.526C115.583 264.344 115.652 264.162 115.743 263.994C115.781 263.918 115.826 263.842 115.88 263.774C115.887 263.759 115.895 263.751 115.902 263.744C115.948 263.675 116.009 263.622 116.07 263.569L119.505 260.582L123.457 263.014Z"
                        fill="#27DEBF" />
                    <path
                        d="M128.838 249.379C128.602 249.47 128.351 249.516 128.123 249.501L125.668 249.311C125.319 249.28 124.939 249.425 124.642 249.653L120.69 247.221C120.797 247.137 120.918 247.069 121.048 247.008C121.116 246.977 121.184 246.955 121.253 246.932C121.26 246.924 121.268 246.924 121.276 246.924C121.336 246.909 121.397 246.894 121.458 246.886C121.526 246.871 121.595 246.871 121.656 246.871H121.716L124.164 247.061C124.24 247.069 124.308 247.069 124.384 247.053C124.437 247.046 124.49 247.046 124.544 247.031C124.65 247.008 124.756 246.97 124.87 246.932L124.886 246.939L128.838 249.379Z"
                        fill="#27DEBF" />
                    <path
                        d="M154.556 240.792C154.374 240.678 154.123 240.693 153.865 240.852L150.422 242.988C149.951 243.277 149.381 243.11 149.077 242.646C148.879 242.35 148.674 242.076 148.438 241.818C148.066 241.407 147.883 240.716 148.089 240.199L148.431 239.348L149.905 238.428C150.171 238.268 150.422 238.261 150.612 238.382V238.375L154.556 240.792Z"
                        fill="#27DEBF" />
                    <path
                        d="M149.593 234.507C149.517 234.461 149.434 234.431 149.343 234.408L146.804 233.762C146.272 233.625 145.619 233.914 145.345 234.393L142.829 238.9C142.708 239.12 142.503 239.325 142.275 239.5L138.323 237.06C138.558 236.878 138.756 236.688 138.877 236.468L141.401 231.961C141.667 231.482 142.328 231.193 142.86 231.33L145.391 231.976C145.489 231.999 145.573 232.044 145.657 232.09V232.082L149.593 234.507Z"
                        fill="#27DEBF" />
                    <path
                        d="M137.479 236.49C137.266 236.361 136.985 236.376 136.719 236.574L132.82 239.469C132.531 239.682 132.288 240.054 132.159 240.45L128.207 238.025C128.222 237.98 128.245 237.926 128.26 237.881C128.351 237.66 128.473 237.455 128.61 237.288C128.648 237.25 128.67 237.212 128.716 237.174C128.762 237.121 128.815 237.075 128.868 237.037L132.774 234.142C132.934 234.02 133.094 233.967 133.246 233.974C133.344 233.974 133.436 234.005 133.527 234.058L137.479 236.49Z"
                        fill="#27DEBF" />
                    <path opacity="0.2"
                        d="M123.457 263.014L120.029 266.001C119.778 266.221 119.581 266.578 119.474 266.951L115.53 264.526C115.583 264.344 115.652 264.162 115.743 263.994C115.781 263.918 115.826 263.842 115.88 263.774C115.887 263.759 115.895 263.751 115.902 263.744C115.948 263.675 116.009 263.622 116.07 263.569L119.505 260.582L123.457 263.014Z"
                        fill="black" />
                    <path opacity="0.2"
                        d="M128.838 249.379C128.602 249.47 128.351 249.516 128.123 249.501L125.668 249.311C125.319 249.28 124.939 249.425 124.642 249.653L120.69 247.221C120.797 247.137 120.918 247.069 121.048 247.008C121.116 246.977 121.184 246.955 121.253 246.932C121.26 246.924 121.268 246.924 121.276 246.924C121.336 246.909 121.397 246.894 121.458 246.886C121.526 246.871 121.595 246.871 121.656 246.871H121.716L124.164 247.061C124.24 247.069 124.308 247.069 124.384 247.053C124.437 247.046 124.49 247.046 124.544 247.031C124.65 247.008 124.756 246.97 124.87 246.932L124.886 246.939L128.838 249.379Z"
                        fill="black" />
                    <path opacity="0.2"
                        d="M154.556 240.792C154.374 240.678 154.123 240.693 153.865 240.852L150.422 242.988C149.951 243.277 149.381 243.11 149.077 242.646C148.879 242.35 148.674 242.076 148.438 241.818C148.066 241.407 147.883 240.716 148.089 240.199L148.431 239.348L149.905 238.428C150.171 238.268 150.422 238.261 150.612 238.382V238.375L154.556 240.792Z"
                        fill="black" />
                    <path opacity="0.2"
                        d="M149.593 234.507C149.517 234.461 149.434 234.431 149.343 234.408L146.804 233.762C146.272 233.625 145.619 233.914 145.345 234.393L142.829 238.9C142.708 239.12 142.503 239.325 142.275 239.5L138.323 237.06C138.558 236.878 138.756 236.688 138.877 236.468L141.401 231.961C141.667 231.482 142.328 231.193 142.86 231.33L145.391 231.976C145.489 231.999 145.573 232.044 145.657 232.09V232.082L149.593 234.507Z"
                        fill="black" />
                    <path opacity="0.2"
                        d="M137.479 236.49C137.266 236.361 136.985 236.376 136.719 236.574L132.82 239.469C132.531 239.682 132.288 240.054 132.159 240.45L128.207 238.025C128.222 237.98 128.245 237.926 128.26 237.881C128.351 237.66 128.473 237.455 128.61 237.288C128.648 237.25 128.67 237.212 128.716 237.174C128.762 237.121 128.815 237.075 128.868 237.037L132.774 234.142C132.934 234.02 133.094 233.967 133.246 233.974C133.344 233.974 133.436 234.005 133.527 234.058L137.479 236.49Z"
                        fill="black" />
                    <path
                        d="M155.4 245.024L154.868 241.316C154.792 240.768 154.343 240.556 153.872 240.852L150.429 242.988C149.958 243.276 149.388 243.109 149.076 242.646C148.879 242.349 148.666 242.076 148.438 241.817C148.066 241.407 147.876 240.708 148.088 240.198L149.943 235.578C150.148 235.061 149.882 234.536 149.342 234.4L146.812 233.761C146.272 233.624 145.618 233.906 145.352 234.392L142.829 238.891C142.556 239.378 141.895 239.818 141.355 239.94C140.838 240.054 140.306 240.214 139.774 240.419C139.257 240.609 138.733 240.373 138.581 239.834L137.798 236.953C137.654 236.421 137.175 236.254 136.726 236.581L132.828 239.476C132.379 239.803 132.037 240.525 132.06 241.08L132.189 244.72C132.212 245.275 131.916 246.05 131.551 246.461C130.905 247.19 130.289 247.958 129.712 248.764C129.385 249.212 128.686 249.554 128.138 249.508L125.684 249.318C125.129 249.273 124.49 249.645 124.247 250.147L121.8 255.262C121.557 255.763 121.777 256.356 122.279 256.584L124.24 257.481C124.741 257.709 125.022 258.332 124.886 258.864C124.673 259.692 124.506 260.513 124.392 261.319C124.316 261.866 123.936 262.611 123.518 262.976L120.052 265.993C119.634 266.358 119.36 267.095 119.436 267.642L119.968 271.351C120.044 271.898 120.493 272.111 120.964 271.814L124.407 269.679C124.878 269.39 125.448 269.557 125.76 270.021C125.957 270.317 126.17 270.591 126.398 270.849C126.771 271.26 126.96 271.959 126.748 272.468L124.893 277.089C124.688 277.606 124.954 278.13 125.494 278.267L128.024 278.905C128.564 279.042 129.218 278.761 129.484 278.274L132.007 273.775C132.28 273.289 132.942 272.848 133.481 272.726C133.998 272.612 134.53 272.453 135.062 272.248C135.579 272.05 136.103 272.293 136.255 272.833L137.038 275.713C137.183 276.245 137.661 276.412 138.11 276.086L142.008 273.19C142.457 272.863 142.799 272.141 142.776 271.586L142.647 267.946C142.624 267.391 142.92 266.616 143.293 266.206C143.939 265.476 144.554 264.708 145.132 263.91C145.459 263.462 146.158 263.12 146.705 263.166L149.16 263.356C149.715 263.401 150.353 263.029 150.597 262.527L153.044 257.412C153.287 256.911 153.067 256.318 152.565 256.09L150.604 255.193C150.103 254.965 149.821 254.342 149.958 253.81C150.171 252.982 150.338 252.161 150.452 251.355C150.528 250.808 150.908 250.063 151.326 249.698L154.792 246.681C155.202 246.309 155.476 245.572 155.4 245.024ZM138.55 264.245C134.325 267.384 130.38 266.396 129.75 262.026C129.119 257.656 132.037 251.568 136.263 248.429C140.488 245.29 144.433 246.278 145.056 250.648C145.694 255.018 142.776 261.106 138.55 264.245Z"
                        fill="#27DEBF" />
                    <path
                        d="M384.874 283.458C378.885 277.28 375.367 252.124 381.211 247.222H410.935C416.771 252.124 413.26 277.264 407.271 283.451C407.218 283.512 407.165 283.565 407.104 283.618C407.036 283.686 406.967 283.755 406.899 283.823C406.732 283.99 406.549 284.15 406.359 284.31C406.314 284.348 406.261 284.386 406.215 284.424C406.071 284.538 405.926 284.659 405.767 284.766C405.508 284.948 405.257 285.123 404.991 285.267C400.067 288.14 392.079 288.14 387.147 285.267C386.881 285.123 386.622 284.948 386.364 284.766C386.212 284.659 386.083 284.553 385.946 284.446C385.885 284.401 385.824 284.355 385.771 284.31C385.589 284.158 385.414 283.998 385.247 283.838C385.163 283.762 385.087 283.679 385.011 283.603C384.965 283.55 384.92 283.504 384.874 283.458Z"
                        fill="#455A64" />
                    <path
                        d="M408.35 245.253C415.13 249.213 415.13 255.634 408.35 259.594C401.571 263.554 390.574 263.554 383.787 259.594C377.008 255.634 377.008 249.213 383.787 245.253C390.574 241.293 401.571 241.293 408.35 245.253Z"
                        fill="#455A64" />
                    <g opacity="0.1">
                        <path
                            d="M408.35 245.253C415.13 249.213 415.13 255.634 408.35 259.594C401.571 263.554 390.574 263.554 383.787 259.594C377.008 255.634 377.008 249.213 383.787 245.253C390.574 241.293 401.571 241.293 408.35 245.253Z"
                            fill="white" />
                    </g>
                    <path
                        d="M405.09 247.153C410.068 250.064 410.068 254.776 405.09 257.687C400.112 260.597 392.033 260.597 387.055 257.687C382.077 254.776 382.077 250.064 387.055 247.153C392.033 244.25 400.112 244.25 405.09 247.153Z"
                        fill="#263238" />
                    <path
                        d="M387.055 252.154C392.033 249.243 400.112 249.243 405.09 252.154C406.473 252.959 407.461 253.909 408.077 254.92C407.461 255.931 406.481 256.881 405.09 257.687C400.112 260.597 392.033 260.597 387.055 257.687C385.672 256.881 384.684 255.931 384.069 254.92C384.684 253.909 385.672 252.959 387.055 252.154Z"
                        fill="#F5F5F5" />
                    <path
                        d="M412.546 198.43L405.994 204.251L411.9 202.306C411.9 202.306 411.846 207.527 409.536 212.231L402.263 216.13L408.107 215.233C408.107 215.233 408.647 217.338 407.803 220.394C407.742 220.622 407.666 220.857 407.59 221.093C407.066 222.666 406.321 225.66 405.06 229.202C405.06 229.21 405.06 229.21 405.052 229.21C404.064 231.991 402.749 235.122 400.963 238.147C400.158 239.523 399.261 240.868 398.242 242.16C398.182 242.244 398.121 242.32 398.06 242.403C396.228 241.18 394.321 239.979 392.337 238.808C391.197 235.89 389.936 228.799 389.708 223.046C388.849 201.029 406.245 189.674 419.819 186.414C419.826 186.429 414.856 191.833 412.546 198.43Z"
                        fill="#27DEBF" />
                    <path
                        d="M403.068 198.681C401.814 199.722 400.864 201.052 399.975 202.405C399.154 203.803 398.41 205.239 397.802 206.744C396.563 209.739 395.696 212.87 395.134 216.054C394.009 222.415 394.283 229.043 396.183 235.191V235.199C396.236 235.366 396.137 235.541 395.97 235.594C395.803 235.647 395.628 235.548 395.575 235.381V235.373C393.743 229.073 393.591 222.377 394.822 215.993C395.438 212.801 396.365 209.663 397.65 206.676C398.28 205.179 399.056 203.742 399.899 202.359C400.826 201.021 401.799 199.707 403.068 198.681Z"
                        fill="#FAFAFA" />
                    <path
                        d="M359.893 209.875C359.893 209.875 359.9 209.883 359.908 209.89C360.182 210.232 364.643 215.887 371.186 226.815L378.102 228.898L374.09 230.22L378.399 237.539L386.082 239.903L380.755 241.377C380.755 241.377 382.936 250.033 389.122 253.811C392.535 255.893 394.23 256.243 395.301 255.285C396.054 254.616 396.35 250.505 397.072 246.849C397.794 243.193 398.022 237.22 394.777 229.901C393.918 227.955 392.74 226.154 391.334 224.49C383.286 214.952 367.683 209.997 359.893 209.875Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M359.893 209.875C359.893 209.875 359.9 209.883 359.908 209.89C360.182 210.232 364.643 215.887 371.186 226.815L378.102 228.898L374.09 230.22L378.399 237.539L386.082 239.903L380.755 241.377C380.755 241.377 382.936 250.033 389.122 253.811C392.535 255.893 394.23 256.243 395.301 255.285C396.054 254.616 396.35 250.505 397.072 246.849C397.794 243.193 398.022 237.22 394.777 229.901C393.918 227.955 392.74 226.154 391.334 224.49C383.286 214.952 367.683 209.997 359.893 209.875Z"
                        fill="black" />
                    <path opacity="0.1"
                        d="M392.368 233.648C392.368 233.655 392.375 233.648 392.368 233.648C392.375 233.663 392.375 233.663 392.375 233.671C393.705 236.855 394.382 240.214 394.708 243.216C394.708 243.224 394.716 243.224 394.716 243.224V243.231C394.914 245.093 394.967 252.055 394.655 255.65C394.891 255.566 395.111 255.452 395.301 255.285C396.054 254.616 396.35 250.505 397.072 246.849C397.794 243.193 398.022 237.22 394.777 229.901C393.918 227.955 392.74 226.154 391.334 224.49C383.286 214.959 367.683 209.997 359.893 209.875C371.787 212.193 384.388 220.545 390.445 229.985C391.205 231.155 391.828 232.379 392.368 233.648Z"
                        fill="black" />
                    <path
                        d="M371.749 213.987C377.586 216.761 383.08 220.5 387.329 225.47C389.449 227.94 391.281 230.707 392.535 233.731C393.774 236.756 394.541 239.971 394.739 243.216C394.739 243.231 394.724 243.247 394.708 243.247C394.693 243.247 394.678 243.239 394.678 243.216C394.123 240.024 393.28 236.901 391.957 233.982C390.658 231.056 388.993 228.282 386.949 225.797C384.904 223.312 382.526 221.1 379.949 219.155C377.38 217.201 374.606 215.507 371.726 214.04C371.711 214.032 371.703 214.009 371.711 213.994C371.718 213.987 371.734 213.979 371.749 213.987Z"
                        fill="#FAFAFA" />
                    <path
                        d="M430.884 217.992C430.026 217.923 429.06 217.916 428.004 217.961C424.835 218.106 420.875 218.782 416.855 220.029C415.51 220.447 414.164 220.925 412.834 221.473C412.166 221.746 411.504 222.035 410.858 222.347C407.59 223.882 404.528 225.843 402.073 228.252C400.857 229.437 399.808 230.752 398.942 232.166C398.828 232.348 398.706 232.531 398.6 232.721C398.6 232.721 398.6 232.721 398.6 232.728C398.326 233.215 398.075 233.701 397.84 234.172C395.104 239.53 394.686 243.338 394.61 247.579C394.549 250.869 395.453 254.677 396.061 255.331C396.145 255.422 396.236 255.49 396.335 255.559C397.239 256.205 398.744 255.939 401.609 254.54C407.355 251.736 409.977 243.961 409.977 243.961L406.344 242.616L412.356 240.784L416.741 234.704L412.865 233.777L419.568 231.945C426.21 222.879 430.596 218.281 430.862 217.999C430.877 217.999 430.884 217.992 430.884 217.992Z"
                        fill="#27DEBF" />
                    <path opacity="0.05"
                        d="M427.996 217.969C424.827 218.114 420.868 218.79 416.847 220.037C415.502 220.455 414.157 220.933 412.827 221.481C412.158 221.754 411.497 222.043 410.851 222.355C407.583 223.89 404.52 225.851 402.065 228.26C400.849 229.445 399.8 230.76 398.934 232.174C398.82 232.356 398.698 232.539 398.592 232.729C398.592 232.729 398.592 232.729 398.592 232.736C398.318 233.223 398.068 233.709 397.832 234.18C395.096 239.538 394.678 243.346 394.602 247.587C394.541 250.877 395.446 254.685 396.054 255.339C396.137 255.43 396.228 255.498 396.327 255.567C396.502 255.688 396.707 255.772 396.928 255.825C396.525 250.703 399.74 237.942 403.821 232.843C408.069 227.538 417.858 220.052 430.869 218.007L430.862 217.992C430.003 217.924 429.045 217.916 427.996 217.969Z"
                        fill="black" />
                    <path
                        d="M396.897 255.824C396.829 252.055 397.346 248.277 398.25 244.614C399.2 240.966 400.522 237.371 402.574 234.149C403.6 232.538 404.877 231.109 406.23 229.779C407.583 228.441 409.057 227.241 410.6 226.139C413.701 223.957 417.06 222.141 420.617 220.864C420.632 220.857 420.655 220.864 420.655 220.887C420.662 220.902 420.655 220.917 420.64 220.925C417.235 222.529 413.967 224.406 410.972 226.648C409.468 227.757 408.024 228.943 406.663 230.227C405.31 231.512 404.026 232.88 403 234.43C400.94 237.539 399.565 241.088 398.562 244.69C397.581 248.308 396.981 252.055 396.966 255.817C396.966 255.832 396.95 255.847 396.935 255.847C396.912 255.855 396.897 255.839 396.897 255.824Z"
                        fill="#FAFAFA" />
                    <path
                        d="M196.987 318.008C196.462 318.008 196.037 317.583 196.037 317.058V256.068C196.037 255.544 196.462 255.118 196.987 255.118C197.511 255.118 197.937 255.544 197.937 256.068V317.058C197.937 317.583 197.511 318.008 196.987 318.008Z"
                        fill="#263238" />
                    <path
                        d="M234.721 295.808C234.341 295.808 233.984 295.58 233.839 295.208L215.136 247.867C214.946 247.381 215.181 246.826 215.668 246.636C216.154 246.439 216.709 246.682 216.899 247.168L235.602 294.509C235.792 294.995 235.557 295.55 235.07 295.74C234.956 295.785 234.835 295.808 234.721 295.808Z"
                        fill="#263238" />
                    <path
                        d="M232.471 290.123C232.22 290.123 231.97 290.025 231.78 289.827L196.979 252.997L162.24 289.667C161.882 290.047 161.282 290.063 160.902 289.705C160.522 289.348 160.507 288.748 160.864 288.368L196.295 250.968C196.478 250.778 196.721 250.672 196.987 250.672C197.245 250.672 197.496 250.778 197.678 250.968L233.17 288.52C233.528 288.9 233.512 289.5 233.132 289.857C232.942 290.04 232.707 290.123 232.471 290.123Z"
                        fill="#263238" />
                    <path
                        d="M159.253 295.808C159.139 295.808 159.017 295.785 158.903 295.74C158.417 295.55 158.174 294.995 158.371 294.509L177.075 247.168C177.265 246.682 177.82 246.439 178.306 246.636C178.793 246.826 179.036 247.381 178.838 247.867L160.135 295.208C159.983 295.58 159.625 295.808 159.253 295.808Z"
                        fill="#263238" />
                    <path
                        d="M233.429 288.664L235.899 295.192C235.914 295.246 235.922 295.306 235.922 295.36C235.922 295.398 235.922 295.436 235.922 295.481C235.899 295.618 235.732 295.785 235.549 295.892C235.131 296.135 234.463 296.135 234.045 295.892C233.893 295.8 233.794 295.694 233.748 295.588V295.58L233.733 295.489L231.438 289.371L233.429 288.664Z"
                        fill="#27DEBF" />
                    <path
                        d="M160.537 288.664L158.067 295.192C158.052 295.246 158.044 295.306 158.044 295.36C158.044 295.398 158.044 295.436 158.044 295.481C158.067 295.618 158.234 295.785 158.417 295.892C158.835 296.135 159.504 296.135 159.922 295.892C160.074 295.8 160.172 295.694 160.218 295.588V295.58L160.233 295.489L162.528 289.371L160.537 288.664Z"
                        fill="#27DEBF" />
                    <path
                        d="M198.081 312.338V317.734C198.081 317.894 197.975 318.061 197.762 318.182C197.336 318.426 196.645 318.426 196.212 318.182C195.999 318.061 195.892 317.901 195.892 317.734V312.338C196.622 311.973 197.352 311.973 198.081 312.338Z"
                        fill="#27DEBF" />
                    <path
                        d="M232.692 250.094C232.692 248.665 231.438 247.137 228.785 245.42C223.891 242.243 212.954 235.867 206.107 232.074C206.092 232.021 206.046 232.021 206.046 232.021C200.772 228.821 195.862 213.591 192.214 202.016C190.968 198.072 189.448 195.837 187.646 194.789C187.221 194.538 185.64 193.671 185.283 193.459C181.703 191.315 177.006 193.892 171.154 197.091C165.766 200.04 161.556 203.817 160.704 213.842C160.188 219.945 160.682 231.603 161.92 240.442V240.434C163.714 255.201 165.918 255.224 169.118 257.694C174.62 261.942 187.016 267.923 192.237 269.975C201.714 273.699 209.451 267.954 215.227 265.104C220.995 262.254 228.094 257.808 230.518 256.045C231.962 254.996 232.707 253.932 232.692 252.815C232.684 252.374 232.692 250.55 232.692 250.094Z"
                        fill="#27DEBF" />
                    <path opacity="0.25"
                        d="M232.692 250.094C232.692 248.665 231.438 247.137 228.785 245.42C223.891 242.243 212.954 235.867 206.107 232.074C206.092 232.021 206.046 232.021 206.046 232.021C200.772 228.821 195.862 213.591 192.214 202.016C190.968 198.072 189.448 195.837 187.646 194.789C187.221 194.538 185.64 193.671 185.283 193.459C181.703 191.315 177.006 193.892 171.154 197.091C165.766 200.04 161.556 203.817 160.704 213.842C160.188 219.945 160.682 231.603 161.92 240.442V240.434C163.714 255.201 165.918 255.224 169.118 257.694C174.62 261.942 187.016 267.923 192.237 269.975C201.714 273.699 209.451 267.954 215.227 265.104C220.995 262.254 228.094 257.808 230.518 256.045C231.962 254.996 232.707 253.932 232.692 252.815C232.684 252.374 232.692 250.55 232.692 250.094Z"
                        fill="black" />
                    <path
                        d="M187.434 194.66C183.884 192.798 179.279 195.328 173.579 198.452C169.931 200.451 166.815 202.83 164.922 207.268L162.513 205.877C164.406 201.454 167.506 199.083 171.147 197.092C176.999 193.884 181.696 191.316 185.275 193.459C185.602 193.634 186.841 194.325 187.434 194.66Z"
                        fill="#27DEBF" />
                    <path
                        d="M228.793 245.42C225.616 243.36 225.547 242.836 205.955 231.975C206.008 231.99 206.031 232.006 206.046 232.013C200.779 228.806 195.862 213.583 192.221 202.008C188.52 190.259 182.341 193.664 173.586 198.459C168.198 201.408 163.987 205.185 163.136 215.21C162.293 225.196 164.139 250.078 167.559 253.08C171.291 257.207 186.263 264.876 192.237 267.224C201.714 270.948 209.451 265.202 215.227 262.352C220.995 259.502 228.093 255.056 230.518 253.293C233.793 250.907 233.497 248.467 228.793 245.42Z"
                        fill="#27DEBF" />
                    <g opacity="0.1">
                        <path
                            d="M173.579 198.459C182.334 193.664 188.513 190.259 192.214 202.008C195.862 213.583 200.779 228.814 206.046 232.013C206.046 232.013 197.01 232.006 183.907 239.081C170.288 246.438 168.206 253.628 167.582 253.111C164.14 250.253 162.278 225.226 163.121 215.202C163.98 205.185 168.19 201.408 173.579 198.459Z"
                            fill="black" />
                    </g>
                    <path
                        d="M219.316 301.652C219.316 301.652 219.506 311.608 220.919 314.694C222.515 318.174 224.096 321.23 226.688 324.551C227.25 325.273 228.55 326.633 229.013 327.218C229.424 327.743 229.462 328.32 228.816 328.883C227.531 329.992 222.325 330 219.529 327.667C216.732 325.334 214.505 321.625 212.856 319.778C212.035 318.851 211.26 317.969 210.697 317.323C210.158 316.7 209.975 315.841 210.226 315.051C210.295 314.83 210.378 314.564 210.469 314.26C211.283 311.494 209.922 303.461 209.922 303.461C212.613 300.14 216.2 300.922 219.316 301.652Z"
                        fill="#FFA8A7" />
                    <path
                        d="M209.793 317.787C209.793 317.787 209.603 318.608 209.861 319.315C210.127 320.022 212.012 321.367 212.993 321.914C213.973 322.461 214.71 323.259 215.516 324.817C216.633 326.945 218.343 329.263 220.577 330.426C222.812 331.589 226.156 332.455 230.275 331.923C234.387 331.399 234.843 329.012 234.843 329.012C234.843 329.012 235.169 326.763 234.174 326.352C233.178 325.934 209.793 317.787 209.793 317.787Z"
                        fill="#263238" />
                    <path
                        d="M209.375 314.975C209.329 315.94 209.42 316.897 209.785 317.787C210.902 319.512 213.714 320.203 215.234 322.559C216.754 324.915 218.533 328.518 223.815 329.848C229.104 331.178 233.239 329.688 234.303 328.214C235.367 326.747 234.538 325.265 231.21 323.243C227.676 321.1 223.625 315.643 223.625 315.643C223.032 314.807 221.246 311.175 220.927 310.187C220.775 309.715 220.6 309.176 220.136 308.993C219.726 308.834 219.278 309.047 218.882 309.252C218.214 309.601 217.438 310.187 216.709 310.384C216.131 310.544 215.341 310.445 214.74 310.422C214.414 310.407 214.049 310.399 213.821 310.627C213.616 310.833 213.6 311.144 213.608 311.433C213.616 311.798 213.654 312.155 213.707 312.512C213.737 312.687 213.768 312.869 213.707 313.037C213.616 313.28 213.342 313.417 213.084 313.417C212.825 313.417 212.582 313.295 212.362 313.151C211.495 312.596 210.872 311.912 210.712 310.893C210.712 310.893 210.697 310.346 210.659 309.845C210.363 310.004 210.066 310.255 209.968 310.589C209.846 310.992 209.869 311.441 209.785 311.851C209.603 312.877 209.42 313.926 209.375 314.975Z"
                        fill="#27DEBF" />
                    <path opacity="0.4"
                        d="M209.375 314.975C209.329 315.94 209.42 316.897 209.785 317.787C210.902 319.512 213.714 320.203 215.234 322.559C216.754 324.915 218.533 328.518 223.815 329.848C229.104 331.178 233.239 329.688 234.303 328.214C235.367 326.747 234.538 325.265 231.21 323.243C227.676 321.1 223.625 315.643 223.625 315.643C223.032 314.807 221.246 311.175 220.927 310.187C220.775 309.715 220.6 309.176 220.136 308.993C219.726 308.834 219.278 309.047 218.882 309.252C218.214 309.601 217.438 310.187 216.709 310.384C216.131 310.544 215.341 310.445 214.74 310.422C214.414 310.407 214.049 310.399 213.821 310.627C213.616 310.833 213.6 311.144 213.608 311.433C213.616 311.798 213.654 312.155 213.707 312.512C213.737 312.687 213.768 312.869 213.707 313.037C213.616 313.28 213.342 313.417 213.084 313.417C212.825 313.417 212.582 313.295 212.362 313.151C211.495 312.596 210.872 311.912 210.712 310.893C210.712 310.893 210.697 310.346 210.659 309.845C210.363 310.004 210.066 310.255 209.968 310.589C209.846 310.992 209.869 311.441 209.785 311.851C209.603 312.877 209.42 313.926 209.375 314.975Z"
                        fill="black" />
                    <path
                        d="M241.614 289.294C241.614 289.294 242.412 299.546 243.689 302.7C245.133 306.249 246.569 309.365 249.009 312.808C249.541 313.553 250.772 314.974 251.213 315.582C251.6 316.122 251.616 316.707 250.939 317.239C249.609 318.288 244.403 318.06 241.72 315.605C239.03 313.15 236.97 309.343 235.412 307.427C234.63 306.47 233.9 305.55 233.368 304.874C232.851 304.228 232.714 303.361 233.003 302.586C233.087 302.366 233.178 302.107 233.284 301.803C234.227 299.075 231.772 291.505 231.772 291.505C234.584 288.291 238.536 288.42 241.614 289.294Z"
                        fill="#FFA8A7" />
                    <path
                        d="M232.425 305.93C232.425 305.93 232.235 306.75 232.494 307.457C232.76 308.164 234.645 309.509 235.625 310.056C236.605 310.604 237.343 311.402 238.148 312.96C239.265 315.095 240.975 317.406 243.21 318.568C245.444 319.731 248.788 320.598 252.907 320.066C257.019 319.541 257.475 317.155 257.475 317.155C257.475 317.155 257.802 314.905 256.806 314.495C255.811 314.085 232.425 305.93 232.425 305.93Z"
                        fill="#263238" />
                    <path
                        d="M246.265 303.787C245.878 303.24 245.52 302.731 245.239 302.123C244.943 301.477 244.646 300.808 244.38 300.17C244.016 299.281 243.689 298.376 243.339 297.479C243.225 297.198 243.104 296.894 242.853 296.719C242.473 296.446 241.941 296.552 241.53 296.78C241.128 297.008 240.786 297.343 240.375 297.555C239.706 297.897 238.916 297.867 238.171 298.004C236.674 298.277 236.134 299.265 236.347 300.656C236.378 300.831 236.408 301.013 236.347 301.181C236.256 301.424 235.982 301.561 235.724 301.561C235.466 301.561 235.222 301.439 235.002 301.295C234.136 300.74 233.581 300.048 233.429 299.03C233.429 299.03 233.398 298.49 233.307 297.989C233.011 298.148 232.714 298.399 232.616 298.733C232.494 299.136 232.517 299.577 232.433 299.995C232.236 301.021 232.053 302.07 232.008 303.111C231.962 304.076 232.053 305.034 232.426 305.923C233.543 307.648 236.355 308.34 237.875 310.696C239.395 313.052 241.173 316.654 246.455 317.984C251.745 319.314 255.879 317.825 256.943 316.35C258.007 314.883 257.179 313.401 253.85 311.38C250.316 309.244 246.265 303.795 246.265 303.787Z"
                        fill="#27DEBF" />
                    <path opacity="0.4"
                        d="M246.265 303.787C245.878 303.24 245.52 302.731 245.239 302.123C244.943 301.477 244.646 300.808 244.38 300.17C244.016 299.281 243.689 298.376 243.339 297.479C243.225 297.198 243.104 296.894 242.853 296.719C242.473 296.446 241.941 296.552 241.53 296.78C241.128 297.008 240.786 297.343 240.375 297.555C239.706 297.897 238.916 297.867 238.171 298.004C236.674 298.277 236.134 299.265 236.347 300.656C236.378 300.831 236.408 301.013 236.347 301.181C236.256 301.424 235.982 301.561 235.724 301.561C235.466 301.561 235.222 301.439 235.002 301.295C234.136 300.74 233.581 300.048 233.429 299.03C233.429 299.03 233.398 298.49 233.307 297.989C233.011 298.148 232.714 298.399 232.616 298.733C232.494 299.136 232.517 299.577 232.433 299.995C232.236 301.021 232.053 302.07 232.008 303.111C231.962 304.076 232.053 305.034 232.426 305.923C233.543 307.648 236.355 308.34 237.875 310.696C239.395 313.052 241.173 316.654 246.455 317.984C251.745 319.314 255.879 317.825 256.943 316.35C258.007 314.883 257.179 313.401 253.85 311.38C250.316 309.244 246.265 303.795 246.265 303.787Z"
                        fill="black" />
                    <path
                        d="M173.814 232.013L185.26 232.264L210.834 230.204C210.834 230.204 234.303 243.345 237.647 250.747C239.585 255.026 241.796 287.546 242.131 292.38C240.368 293.786 234.151 295.101 232 294.728C230.662 290.882 230.229 289.583 228.367 283.913C226.855 279.292 225.441 276.207 224.362 273.023C222.371 267.171 222.112 261.47 222.112 261.47C222.112 261.47 218.905 259.008 209.747 252.328C213.175 256.082 218.616 262.132 219.285 263.629C221.193 267.923 219.726 300.504 219.726 304.775C218.32 306.599 211.617 307.314 209.922 306.166C208.904 300.466 207.558 295.807 206.092 290.024C203.515 279.809 204.67 275.128 205.05 271.784C205.05 271.784 198.651 267.383 189.63 261.258C185.359 258.354 181.369 255.991 178.891 253.133C174.377 247.92 173.883 238.655 173.814 232.013Z"
                        fill="#37474F" />
                    <path opacity="0.15"
                        d="M209.755 252.328L202.231 244.728C202.231 244.728 207.749 242.379 209.086 235.547C209.086 235.547 210.72 240.236 206.434 245.168L211.678 251.575L222.12 261.47L209.755 252.328Z"
                        fill="black" />
                    <path
                        d="M202.079 183.092C207.543 183.008 210.727 184.878 212.612 189.156C214.505 193.435 221.96 215.559 221.96 215.559C221.96 215.559 233.292 221.327 239.524 223.812L233.497 229.581C233.497 229.581 218.464 225.788 215.797 224.778C213.121 223.767 212.855 223.455 209.283 214.692C204.191 202.198 202.079 183.092 202.079 183.092Z"
                        fill="#FFA8A7" />
                    <path
                        d="M200.308 183.092C203.515 182.651 208.683 182.91 211.183 186.246C213.684 189.582 220.121 209.601 220.121 209.601C220.121 209.601 216.344 214.396 208.873 214.928L201.379 195.624L200.308 183.092Z"
                        fill="#37474F" />
                    <path
                        d="M191.089 183.32C187.806 183.457 179.985 185.015 177.059 185.654C173.503 186.87 176.847 186.68 175.121 191.597C172.545 198.938 173.343 209.069 173.343 216.016C173.343 225.234 173.563 235.905 173.563 235.905C181.353 242.486 206.73 239.439 210.986 230.212C210.986 230.212 208.82 219.352 210.317 198.323C210.986 188.906 207.627 183.077 201.098 183.077C201.091 183.077 194.38 183.176 191.089 183.32Z"
                        fill="#27DEBF" />
                    <path opacity="0.4"
                        d="M191.089 183.32C187.806 183.457 179.985 185.015 177.059 185.654C173.503 186.87 176.847 186.68 175.121 191.597C172.545 198.938 173.343 209.069 173.343 216.016C173.343 225.234 173.563 235.905 173.563 235.905C181.353 242.486 206.73 239.439 210.986 230.212C210.986 230.212 208.82 219.352 210.317 198.323C210.986 188.906 207.627 183.077 201.098 183.077C201.091 183.077 194.38 183.176 191.089 183.32Z"
                        fill="black" />
                    <path
                        d="M193.97 159.396C194.251 163.12 197.504 165.916 201.228 165.635C204.952 165.354 207.749 162.101 207.467 158.377C207.186 154.653 203.933 151.856 200.209 152.138C196.478 152.411 193.681 155.664 193.97 159.396Z"
                        fill="#263238" />
                    <path
                        d="M180.791 167.672C180.791 167.672 182.972 175.333 183.71 176.564C184.447 177.795 185.792 178.061 185.792 178.061L185.268 172.597L180.791 167.672Z"
                        fill="#263238" />
                    <path
                        d="M181.946 156.371C181.946 156.371 180.784 156.173 179.72 158.157C178.808 159.859 178.846 163.522 180.799 167.672L183.824 167.801L181.946 156.371Z"
                        fill="#263238" />
                    <path
                        d="M180.958 158.027L177.288 158.377C177.12 157.328 177.804 156.401 178.815 156.309C179.834 156.211 180.791 156.978 180.958 158.027Z"
                        fill="#263238" />
                    <path
                        d="M180.442 157.191L177.523 154.782C178.139 153.954 179.286 153.817 180.092 154.486C180.898 155.147 181.057 156.363 180.442 157.191Z"
                        fill="#263238" />
                    <path
                        d="M184.713 167.733C184.713 167.733 183.193 167.018 182.387 166.266C181.582 165.514 179.203 164.928 178.192 167.664C177.166 170.454 179.461 172.825 181.232 173.592C182.805 174.276 184.424 172.376 184.424 172.376L185.093 184.597C191.234 192.737 202.565 190.692 197.177 183.966L196.797 180.007C196.797 180.007 199.806 180.25 201.235 179.908C203.622 179.338 204.594 177.978 205.187 175.249C205.909 171.966 205.985 169.215 205.894 165.232C205.856 163.53 205.537 160.68 205.195 159.183C203.28 150.701 192.548 149.288 187.152 153.437C181.772 157.602 184.713 167.733 184.713 167.733Z"
                        fill="#FFA8A7" />
                    <path
                        d="M196.903 157.929C194.684 157.997 192.412 157.594 190.474 156.971C190.268 156.903 190.04 156.842 189.85 156.941C189.653 157.047 189.584 157.298 189.539 157.518C189.334 158.544 189.197 159.593 188.84 160.581C188.482 161.561 187.867 162.504 186.947 162.998C186.62 163.173 186.248 163.294 186.073 163.644C185.906 163.963 185.883 164.343 185.936 164.7C186.005 165.164 186.202 165.589 186.354 166.03C186.56 166.638 186.924 167.687 186.643 168.303C186.377 168.88 185.746 169.063 185.192 168.766C184.629 168.47 184.28 167.968 183.831 167.52C183.193 166.874 182.737 166.486 182.395 166.266C181.901 165.947 181.962 165.073 181.787 164.533C181.437 163.446 181.179 162.337 180.936 161.227C180.73 160.285 180.502 159.335 180.373 158.377C180.229 157.305 180.054 156.219 180.176 155.139C180.282 154.159 180.632 153.384 181.171 152.555C181.224 152.472 181.278 152.396 181.331 152.32C182.851 150.131 185.085 149.075 187.631 148.421C189.615 147.919 191.652 147.684 193.658 147.296C195.832 146.878 197.967 146.27 200.034 145.487C200.323 145.381 200.627 145.267 200.931 145.32C201.433 145.411 201.744 145.951 201.752 146.46C201.76 146.969 201.539 147.448 201.319 147.904C201.934 147.517 202.565 147.129 203.272 146.947C203.979 146.757 204.777 146.802 205.362 147.235C206.076 147.76 206.32 148.717 206.35 149.599C206.434 152.464 204.678 155.231 202.178 156.621C200.612 157.488 198.78 157.875 196.903 157.929Z"
                        fill="#263238" />
                    <path
                        d="M196.804 180.014C196.804 180.014 191.332 179.292 189.372 178.395C188.057 177.795 186.924 176.663 186.567 175.91C186.567 175.91 187.046 177.552 188.285 178.965C189.805 180.698 196.918 181.511 196.918 181.511L196.804 180.014Z"
                        fill="#F28F8F" />
                    <path
                        d="M195.459 165.741C195.535 166.402 195.094 166.995 194.486 167.055C193.878 167.124 193.324 166.637 193.248 165.976C193.172 165.315 193.605 164.722 194.22 164.661C194.828 164.601 195.383 165.079 195.459 165.741Z"
                        fill="#263238" />
                    <path
                        d="M193.567 162.2L191.355 163.826C190.93 163.157 191.074 162.253 191.69 161.804C192.298 161.348 193.141 161.531 193.567 162.2Z"
                        fill="#263238" />
                    <path
                        d="M195.361 172.771L199.457 173.866C199.199 175.082 198.074 175.819 196.949 175.515C195.809 175.219 195.102 173.987 195.361 172.771Z"
                        fill="#B16668" />
                    <path
                        d="M198.097 175.47C197.922 174.482 197.025 173.76 196.007 173.843C195.801 173.859 195.604 173.919 195.421 173.995C195.649 174.725 196.197 175.325 196.941 175.523C197.337 175.629 197.739 175.599 198.097 175.47Z"
                        fill="#F28F8F" />
                    <path
                        d="M204.526 161.751L201.821 161.113C201.942 160.337 202.649 159.851 203.394 160.033C204.139 160.208 204.648 160.976 204.526 161.751Z"
                        fill="#263238" />
                    <path
                        d="M204.45 164.54C204.526 165.202 204.085 165.794 203.477 165.855C202.869 165.924 202.315 165.437 202.239 164.776C202.163 164.115 202.603 163.522 203.211 163.461C203.827 163.4 204.382 163.879 204.45 164.54Z"
                        fill="#263238" />
                    <path d="M198.431 164.274L199.898 171.38L203.538 169.731L198.431 164.274Z" fill="#F28F8F" />
                    <path
                        d="M176.9 186.155C175.996 185.935 170.577 186.033 167.864 191.893C165.872 196.187 161.768 207.876 158.364 216.654C152.314 211.782 145.231 206.622 144.425 205.801C142.252 203.597 141.621 201.826 139.394 199.554C137.175 197.281 136.384 195.921 136.073 195.473C135.389 194.485 134.705 195.625 134.538 196.233C134.249 197.243 134.264 198.345 134.591 199.349C134.88 200.245 135.389 201.287 134.826 202.039C134.363 202.662 133.443 202.662 132.668 202.571C129.765 202.252 126.884 201.651 124.095 200.762C123.632 200.618 123.153 200.458 122.666 200.473C122.18 200.489 121.663 200.717 121.443 201.157C121.23 201.591 121.352 202.123 121.633 202.518C121.906 202.913 122.317 203.194 122.712 203.468C122.157 204.099 122.096 205.056 122.347 205.862C122.522 206.439 122.872 206.903 123.039 207.481C123.229 208.127 123.457 208.78 123.89 209.305C124.475 210.019 125.357 210.422 126.223 210.749C128.062 211.44 129.917 211.927 131.847 212.208C133.109 212.39 134.37 212.588 135.632 212.808C136.787 213.006 138.049 213.089 139.09 213.659C140.99 214.701 142.51 216.297 144.083 217.756C146.515 220.005 151.037 225.257 156.889 230.091C160.188 232.819 163.235 232.469 165.774 228.297C167.111 226.101 175.388 207.511 175.388 207.511C175.388 207.511 181.825 192.691 176.9 186.155Z"
                        fill="#FFA8A7" />
                    <path
                        d="M158.364 216.661C160.378 217.733 162.726 220.902 162.908 224.064C162.908 224.064 164.208 218.136 159.131 214.647L158.364 216.661Z"
                        fill="#F28F8F" />
                    <path
                        d="M177.227 185.615C171.739 186.041 168.608 188.199 166.222 194.522C162.695 203.87 159.845 211.273 159.845 211.273C159.845 211.273 161.799 216.464 171.215 218.774L175.342 208.05C177.493 203.422 178.845 200.466 179.301 196.498C179.864 191.672 178.952 187.538 177.227 185.615Z"
                        fill="#37474F" />
                    <path
                        d="M272.934 273.76C272.409 273.76 271.984 273.335 271.984 272.81V211.82C271.984 211.296 272.409 210.87 272.934 210.87C273.458 210.87 273.884 211.296 273.884 211.82V272.81C273.884 273.335 273.458 273.76 272.934 273.76Z"
                        fill="#263238" />
                    <path
                        d="M310.668 251.56C310.288 251.56 309.93 251.332 309.786 250.96L291.082 203.619C290.892 203.133 291.128 202.578 291.614 202.388C292.101 202.191 292.656 202.434 292.846 202.92L311.549 250.261C311.739 250.747 311.504 251.302 311.017 251.492C310.903 251.537 310.789 251.56 310.668 251.56Z"
                        fill="#263238" />
                    <path
                        d="M308.426 245.875C308.175 245.875 307.924 245.777 307.734 245.579L272.934 208.749L238.194 245.419C237.837 245.799 237.236 245.815 236.856 245.457C236.476 245.1 236.461 244.5 236.818 244.12L272.242 206.72C272.424 206.53 272.668 206.424 272.934 206.424C273.192 206.424 273.443 206.53 273.625 206.72L309.117 244.272C309.474 244.652 309.459 245.252 309.079 245.609C308.889 245.784 308.661 245.875 308.426 245.875Z"
                        fill="#263238" />
                    <path
                        d="M235.199 251.56C235.085 251.56 234.964 251.537 234.85 251.492C234.363 251.302 234.12 250.747 234.318 250.261L253.021 202.92C253.211 202.434 253.766 202.191 254.253 202.388C254.739 202.578 254.982 203.133 254.785 203.619L236.081 250.96C235.937 251.332 235.579 251.56 235.199 251.56Z"
                        fill="#263238" />
                    <path
                        d="M309.383 244.408L311.853 250.937C311.868 250.99 311.876 251.051 311.876 251.104C311.876 251.142 311.876 251.18 311.876 251.225C311.853 251.362 311.686 251.529 311.504 251.636C311.086 251.879 310.417 251.879 309.999 251.636C309.847 251.545 309.748 251.438 309.702 251.332V251.324L309.687 251.233L307.392 245.115L309.383 244.408Z"
                        fill="#27DEBF" />
                    <path
                        d="M236.492 244.408L234.022 250.937C234.006 250.99 233.999 251.051 233.999 251.104C233.999 251.142 233.999 251.18 233.999 251.225C234.022 251.362 234.189 251.529 234.371 251.636C234.789 251.879 235.458 251.879 235.876 251.636C236.028 251.545 236.127 251.438 236.172 251.332V251.324L236.188 251.233L238.483 245.115L236.492 244.408Z"
                        fill="#27DEBF" />
                    <path
                        d="M274.028 268.09V273.486C274.028 273.646 273.922 273.813 273.709 273.934C273.283 274.178 272.591 274.178 272.158 273.934C271.945 273.813 271.839 273.653 271.839 273.486V268.09C272.569 267.725 273.298 267.725 274.028 268.09Z"
                        fill="#27DEBF" />
                    <path
                        d="M308.646 205.839C308.646 204.41 307.392 202.883 304.739 201.165C299.845 197.988 288.909 191.612 282.061 187.819C282.046 187.766 282 187.766 282 187.766C276.726 184.567 271.816 169.336 268.168 157.761C266.922 153.817 265.402 151.583 263.601 150.534C263.175 150.283 261.594 149.417 261.237 149.204C257.657 147.061 252.961 149.637 247.109 152.837C241.72 155.785 237.51 159.563 236.659 169.587C236.142 175.69 236.636 187.348 237.875 196.187V196.179C239.668 210.946 241.872 210.969 245.072 213.439C250.574 217.687 262.97 223.669 268.191 225.721C277.668 229.445 285.405 223.699 291.181 220.849C296.949 217.999 304.048 213.553 306.472 211.79C307.916 210.741 308.661 209.677 308.646 208.56C308.631 208.119 308.646 206.303 308.646 205.839Z"
                        fill="#27DEBF" />
                    <path opacity="0.25"
                        d="M308.646 205.839C308.646 204.41 307.392 202.883 304.739 201.165C299.845 197.988 288.909 191.612 282.061 187.819C282.046 187.766 282 187.766 282 187.766C276.726 184.567 271.816 169.336 268.168 157.761C266.922 153.817 265.402 151.583 263.601 150.534C263.175 150.283 261.594 149.417 261.237 149.204C257.657 147.061 252.961 149.637 247.109 152.837C241.72 155.785 237.51 159.563 236.659 169.587C236.142 175.69 236.636 187.348 237.875 196.187V196.179C239.668 210.946 241.872 210.969 245.072 213.439C250.574 217.687 262.97 223.669 268.191 225.721C277.668 229.445 285.405 223.699 291.181 220.849C296.949 217.999 304.048 213.553 306.472 211.79C307.916 210.741 308.661 209.677 308.646 208.56C308.631 208.119 308.646 206.303 308.646 205.839Z"
                        fill="black" />
                    <path
                        d="M263.388 150.413C259.839 148.551 255.233 151.081 249.533 154.205C245.885 156.204 242.769 158.583 240.877 163.021L238.468 161.63C240.36 157.207 243.461 154.836 247.101 152.845C252.953 149.637 257.65 147.069 261.23 149.212C261.549 149.387 262.795 150.078 263.388 150.413Z"
                        fill="#27DEBF" />
                    <path
                        d="M304.739 201.165C301.563 199.105 301.494 198.581 281.901 187.72C281.955 187.736 281.977 187.751 281.993 187.758C276.726 184.551 271.809 169.328 268.168 157.754C264.467 146.004 258.288 149.409 249.533 154.204C244.145 157.153 239.934 160.93 239.083 170.955C238.239 180.941 240.086 205.824 243.506 208.826C247.238 212.952 262.21 220.621 268.183 222.969C277.661 226.693 285.397 220.948 291.173 218.098C296.942 215.248 304.04 210.802 306.465 209.038C309.748 206.66 309.444 204.22 304.739 201.165Z"
                        fill="#27DEBF" />
                    <path
                        d="M281.993 187.759C281.993 187.759 282.001 187.759 282.001 187.767C282.001 187.767 282.001 187.767 281.993 187.759Z"
                        fill="#27DEBF" />
                    <g opacity="0.1">
                        <path
                            d="M249.526 154.204C258.281 149.409 264.46 146.004 268.161 157.754C271.809 169.328 276.726 184.559 281.993 187.758C281.993 187.758 272.956 187.751 259.854 194.826C246.235 202.183 244.152 209.373 243.529 208.856C240.086 205.998 238.224 180.972 239.068 170.947C239.927 160.938 244.137 157.161 249.526 154.204Z"
                            fill="black" />
                    </g>
                    <path
                        d="M291.295 244.455C290.603 244.979 289.813 245.595 289.767 246.385C289.722 247.176 289.828 249.114 291.189 251.143C292.549 253.172 293.096 256.714 293.035 259.047C292.982 261.388 292.275 267.263 294.821 270.014C297.367 272.765 304.23 275.022 304.899 270.759C305.568 266.495 299.716 248.795 299.716 248.795L291.295 244.455Z"
                        fill="#263238" />
                    <path
                        d="M294.776 247.807C295.27 250.079 295.999 253.871 296.189 257.405C296.379 260.939 297.01 263.501 298.606 264.694C300.202 265.887 302.839 266.123 302.224 263.653C301.608 261.175 299.723 248.802 299.723 248.802L294.776 247.807Z"
                        fill="#9A4A4D" />
                    <path
                        d="M281.985 186.475C291.812 193.125 291.971 192.897 300.377 199.258C306.548 203.924 312.4 208.469 313.282 211.593C314.217 214.891 312.712 222.172 310.865 229.118C309.026 236.065 305.499 248.506 305.499 248.506L290.391 215.856L272.614 199.668L281.985 186.475Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M281.985 186.475C291.812 193.125 291.971 192.897 300.377 199.258C306.548 203.924 312.4 208.469 313.282 211.593C314.217 214.891 312.712 222.172 310.865 229.118C309.026 236.065 305.499 248.506 305.499 248.506L290.391 215.856L272.614 199.668L281.985 186.475Z"
                        fill="black" />
                    <path opacity="0.1"
                        d="M302.079 221.177C300.841 216.343 297.063 212.672 293.469 209.587C290.611 207.132 284.972 202.557 282.16 200.284C282.813 199.144 283.725 196.385 284.022 194.554C282.471 196.993 280.936 199.068 279.431 200.125L296.547 217.802L306.563 244.881C306.563 244.873 303.326 226.003 302.079 221.177Z"
                        fill="black" />
                    <path
                        d="M303.729 270.903C303.098 271.192 302.954 272.613 302.855 273.655C302.748 274.696 301.791 275.935 303.045 277.766C304.299 279.598 306.807 280.137 308.517 282.63C310.227 285.123 312.742 289.637 318.328 290.808C323.914 291.978 328.163 290.124 329.204 288.459C330.245 286.795 329.303 285.222 325.723 283.193C321.923 281.034 320.852 280.403 320.852 280.403L303.729 270.903Z"
                        fill="#263238" />
                    <path
                        d="M309.702 259.404C309.702 259.404 312.423 266.86 314.072 270.28C315.722 273.7 318.321 276.938 321.201 279.962C321.832 280.616 323.246 281.832 323.755 282.364C324.211 282.835 324.31 283.405 323.724 284.021C322.569 285.244 317.439 285.769 314.452 283.747C311.466 281.725 308.433 277.758 306.632 276.101C305.728 275.273 304.876 274.483 304.253 273.898C303.653 273.335 303.394 272.507 303.562 271.709C303.607 271.481 303.66 271.215 303.721 270.903C304.033 269.224 301.51 262.513 301.51 262.513L309.702 259.404Z"
                        fill="#B16668" />
                    <path
                        d="M254.663 185.806C254.83 191.916 251.593 201.013 253.713 205.68C256.191 211.144 259.428 213.515 267.492 217.703C274.165 221.168 283.992 226.162 285.968 226.922C287.951 227.682 288.209 228.852 288.111 232.561C288.019 236.277 289.593 242.258 294.069 249.638C298.804 257.428 302.87 266.518 302.87 266.518C302.87 266.518 308.615 267.414 311.412 263.926C311.412 263.926 301.312 223.714 299.435 218.957C297.55 214.207 278.611 199.463 278.611 199.463C278.611 199.463 280.176 191.711 281.347 186.072L254.663 185.806Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M254.663 185.806C254.83 191.916 251.593 201.013 253.713 205.68C256.191 211.144 259.428 213.515 267.492 217.703C274.165 221.168 283.992 226.162 285.968 226.922C287.951 227.682 288.209 228.852 288.111 232.561C288.019 236.277 289.593 242.258 294.069 249.638C298.804 257.428 302.87 266.518 302.87 266.518C302.87 266.518 308.615 267.414 311.412 263.926C311.412 263.926 301.312 223.714 299.435 218.957C297.55 214.207 278.611 199.463 278.611 199.463C278.611 199.463 280.176 191.711 281.347 186.072L254.663 185.806Z"
                        fill="black" />
                    <path
                        d="M273.093 150.405C277.653 150.162 279.295 150.055 283.118 153.095C284.379 154.098 294.654 163.355 298.781 166.79C299.929 159.836 301.038 153.209 301.084 152.16C301.228 149.356 300.582 147.775 300.719 144.887C300.848 142.007 300.567 140.608 300.499 140.114C300.362 139.035 301.517 139.392 301.996 139.696C302.802 140.213 303.455 140.966 303.843 141.84C304.185 142.622 304.466 143.633 305.302 143.8C305.994 143.937 306.617 143.382 307.088 142.858C308.866 140.89 310.447 138.739 311.8 136.459C312.028 136.079 312.256 135.684 312.598 135.395C312.94 135.106 313.426 134.954 313.837 135.121C314.24 135.288 314.483 135.722 314.528 136.155C314.582 136.588 314.475 137.021 314.369 137.447C315.129 137.538 315.744 138.146 316.064 138.845C316.292 139.339 316.337 139.871 316.573 140.358C316.839 140.905 317.074 141.49 317.097 142.106C317.135 142.942 316.778 143.747 316.39 144.492C315.562 146.073 314.604 147.524 313.464 148.877C312.72 149.766 311.982 150.663 311.268 151.568C310.607 152.404 309.801 153.217 309.444 154.228C308.783 156.082 308.722 158.081 308.54 160.019C308.251 163.013 309.094 171.069 307.369 177.582C306.374 181.329 304.208 182.621 299.952 180.379C297.884 179.285 279.964 166.41 279.964 166.41C279.964 166.41 273.701 157.8 273.093 150.405Z"
                        fill="#B16668" />
                    <path
                        d="M298.781 166.783C298.067 168.721 298.584 174.276 299.366 175.842C299.366 175.842 296.547 171.358 297.869 165.932L298.781 166.783Z"
                        fill="#9A4A4D" />
                    <path
                        d="M261.047 152.169L252.839 154.342C252.839 154.342 256.305 160.156 255.385 165.75C254.39 171.815 253.766 172.354 251.775 173.867C252.664 177.431 254.39 185.647 254.39 185.647C253.006 189.865 252.254 194.554 252.231 198.688C252.231 198.688 257.969 202.04 271.421 199.038C283.239 196.401 283.672 187.516 283.672 187.516L281.005 185.153L280.663 174.231C280.663 174.231 286.636 169.139 283.604 162.543C280.602 156.014 273.093 150.413 273.093 150.413L268.184 150.823L261.047 152.169Z"
                        fill="#27DEBF" />
                    <path opacity="0.7"
                        d="M261.047 152.169L252.839 154.342C252.839 154.342 256.305 160.156 255.385 165.75C254.39 171.815 253.766 172.354 251.775 173.867C252.664 177.431 254.39 185.647 254.39 185.647C253.006 189.865 252.254 194.554 252.231 198.688C252.231 198.688 257.969 202.04 271.421 199.038C283.239 196.401 283.672 187.516 283.672 187.516L281.005 185.153L280.663 174.231C280.663 174.231 286.636 169.139 283.604 162.543C280.602 156.014 273.093 150.413 273.093 150.413L268.184 150.823L261.047 152.169Z"
                        fill="white" />
                    <path opacity="0.1"
                        d="M273.883 173.836C273.883 173.836 271.178 177.909 265.721 177.294C260.029 176.655 259.056 172.855 259.056 172.855C259.056 172.855 260.052 178.396 265.797 178.7C273.025 179.08 273.883 173.836 273.883 173.836Z"
                        fill="black" />
                    <path
                        d="M278.018 130.622C277.699 122.247 271.657 117.695 264.824 116.653C259.504 115.65 257.46 117.261 252.11 116.897C249.913 116.745 247.907 116.722 246.47 117.52C244.836 118.424 243.932 120.301 244.244 122.657C244.441 124.117 245.148 125.15 245.961 125.887C244.532 128.342 246.235 132.264 249.852 133.016L253.949 144.925C253.949 144.925 269.871 150.443 269.764 147.707C272.508 142.136 278.383 140.153 278.018 130.622Z"
                        fill="#263238" />
                    <path
                        d="M273.618 116.395L272.994 120.575C274.188 120.78 275.297 120.012 275.464 118.857C275.639 117.702 274.811 116.6 273.618 116.395Z"
                        fill="#263238" />
                    <path
                        d="M277.592 119.701L273.329 120.324C273.466 121.51 274.53 122.323 275.708 122.156C276.893 121.981 277.729 120.887 277.592 119.701Z"
                        fill="#263238" />
                    <path
                        d="M269.954 152.381L269.491 140.274C269.491 140.274 271.11 141.764 273.329 140.001C275.312 138.428 276.05 135.175 274.552 133.571C273.488 132.439 270.327 131.907 269.194 134.483C269.194 134.483 265.546 134.445 260.667 131.253C255.697 128.008 254.542 125.128 251.616 124.907C250.286 126.002 249.077 129.133 249.526 137.242C249.86 143.238 252.657 146.005 254.07 146.985C255.226 147.783 256.654 147.844 259.064 147.358L259.284 153.042C259.284 153.042 264.46 160.81 270.213 160.232C278.854 159.373 269.954 152.381 269.954 152.381Z"
                        fill="#B16668" />
                    <path
                        d="M269.164 133.928L269.293 137.257C267.986 137.31 266.884 136.307 266.831 135.022L266.709 131.808L269.164 133.928Z"
                        fill="#263238" />
                    <path
                        d="M260.302 134.78C260.295 135.395 260.781 135.904 261.389 135.904C261.997 135.912 262.491 135.41 262.499 134.795C262.506 134.179 262.02 133.67 261.412 133.67C260.804 133.662 260.31 134.164 260.302 134.78Z"
                        fill="#263238" />
                    <path
                        d="M250.635 132.036L252.832 130.387C252.391 129.771 251.54 129.642 250.932 130.098C250.324 130.554 250.194 131.42 250.635 132.036Z"
                        fill="#263238" />
                    <path
                        d="M261.07 140.389L257.992 141.947C258.41 142.805 259.428 143.155 260.28 142.722C261.138 142.289 261.488 141.247 261.07 140.389Z"
                        fill="#9A4A4D" />
                    <path
                        d="M251.889 134.392C251.882 135.008 252.368 135.517 252.976 135.517C253.584 135.524 254.078 135.023 254.086 134.407C254.093 133.792 253.607 133.282 252.999 133.282C252.398 133.275 251.904 133.776 251.889 134.392Z"
                        fill="#263238" />
                    <path d="M257.513 133.624L257.574 139.522L254.382 138.678L257.513 133.624Z" fill="#9A4A4D" />
                    <path
                        d="M259.056 147.358C261.595 146.932 266.785 145.253 267.53 143.186C267.53 143.186 267.31 144.478 265.79 145.853C264.27 147.229 259.117 148.916 259.117 148.916L259.056 147.358Z"
                        fill="#9A4A4D" />
                    <path d="M376.446 295.322L378.171 294.326V226.2L376.446 225.242V295.322Z" fill="#37474F" />
                    <path d="M376.446 295.322L374.728 294.296V226.17L376.446 227.196V295.322Z" fill="#455A64" />
                    <path d="M311.952 258.044L313.67 257.086V188.96L311.952 189.918V258.044Z" fill="#37474F" />
                    <path d="M311.952 258.044L310.227 257.086V188.96L311.952 189.918V258.044Z" fill="#455A64" />
                    <path d="M310.227 192.669L376.446 230.775V225.242L310.227 187.007V192.669Z" fill="#455A64" />
                    <path d="M311.853 208.629L376.362 245.915V243.992L311.853 206.714V208.629Z" fill="#455A64" />
                    <path d="M374.728 243.049L311.952 206.767V204.821L374.728 241.066" fill="#37474F" />
                    <path d="M378.171 230.303L249.267 304.487V298.711L378.171 224.383V230.303Z" fill="#37474F" />
                    <path d="M249.267 368.798L250.985 367.803V299.676L249.267 298.719V368.798Z" fill="#37474F" />
                    <path d="M249.267 368.799L247.542 367.773V299.646L249.267 300.672V368.799Z" fill="#455A64" />
                    <path d="M184.766 331.528L186.483 330.571V262.444L184.766 263.394V331.528Z" fill="#37474F" />
                    <path d="M184.766 331.528L183.048 330.571V262.444L184.766 263.394V331.528Z" fill="#455A64" />
                    <path d="M183.048 266.146L249.267 304.26V298.719L183.048 260.491V266.146Z" fill="#455A64" />
                    <path d="M184.667 282.113L249.176 319.391V317.468L184.667 280.19V282.113Z" fill="#455A64" />
                    <path d="M247.542 316.526L184.766 280.251V278.298L247.542 314.542" fill="#37474F" />
                    <path d="M249.267 298.719L183.048 260.491L311.952 186.155L378.171 224.383L249.267 298.719Z"
                        fill="#27DEBF" />
                    <path opacity="0.8"
                        d="M249.267 298.719L183.048 260.491L311.952 186.155L378.171 224.383L249.267 298.719Z"
                        fill="white" />
                    <path
                        d="M258.417 209.244C257.536 208.719 256.639 208.225 255.719 207.777C251.365 205.626 248.461 204.129 245.444 202.472C242.427 200.815 239.448 199.349 237.259 197.859C234.424 195.929 235.002 194.454 235.823 189.719C237.282 181.367 240.428 170.583 241.872 164.936C243.901 156.986 246.067 155.177 252.847 154.189C254.8 156.279 257.3 169.291 251.995 174.725L246.82 191.559C249.51 193.755 258.676 199.911 260.538 200.914C262.461 201.948 264.224 201.781 266.329 201.895C267.925 201.986 269.468 202.419 271.041 202.655C271.824 202.769 272.622 202.845 273.42 202.784C273.747 202.761 274.066 202.784 274.393 202.738C274.681 202.693 275.001 202.571 275.274 202.753C275.495 202.898 275.563 203.202 275.517 203.46C275.411 204.061 274.841 204.463 274.301 204.745C273.177 205.337 271.961 205.748 270.707 205.961C270.904 206.508 271.497 206.781 272.037 206.979C274.362 207.861 276.771 208.522 279.226 208.947C279.5 208.993 279.773 209.039 280.017 209.175C280.26 209.305 280.465 209.54 280.48 209.814C280.503 210.171 280.207 210.475 279.887 210.642C279.568 210.809 279.211 210.908 278.922 211.121C278.603 211.364 278.413 211.729 278.162 212.041C277.638 212.687 276.87 213.082 276.125 213.454C275.221 213.903 274.309 214.351 273.321 214.549C271.793 214.853 270.235 214.541 268.753 214.184C267.332 213.842 265.987 213.409 264.642 212.808C262.445 211.82 260.469 210.475 258.417 209.244Z"
                        fill="#B16668" />
                    <path opacity="0.1"
                        d="M279.492 246.142L256.365 232.789C255.955 232.553 255.446 232.553 255.035 232.789L214.907 255.961C214.71 256.075 214.71 256.357 214.907 256.471L238.255 269.953L279.492 246.142Z"
                        fill="black" />
                    <path
                        d="M277.767 243.33V243.847C277.767 244.607 277.364 245.314 276.703 245.701L239.326 267.278C238.999 267.468 238.627 267.559 238.262 267.559C237.89 267.559 237.525 267.468 237.191 267.278L216.815 255.551C216.161 255.171 215.751 254.464 215.751 253.696V252.974H215.759V252.982C215.759 253.073 215.804 253.157 215.895 253.218L238.27 266.138L277.767 243.33Z"
                        fill="#37474F" />
                    <path
                        d="M277.767 243.33L255.605 230.539C255.21 230.311 254.724 230.311 254.329 230.539L215.88 252.739C215.69 252.845 215.69 253.119 215.88 253.233L238.247 266.153L277.767 243.33Z"
                        fill="#455A64" />
                    <path
                        d="M220.752 214.929C224.02 216.494 228.124 218.554 230.495 219.618C232.904 220.705 234.592 221.244 237.252 222.293C239.296 223.099 241.834 223.714 243.37 224.923C244.912 226.131 252.801 232.736 254.496 233.845C256.183 234.955 255.514 236.384 252.619 237.508C249.723 238.633 247.557 238.23 245.452 237.379C243.347 236.528 240.307 234.202 240.307 234.202C240.307 234.202 237.936 234.339 236.279 233.214C234.622 232.082 233.558 230.661 232.6 229.977C231.749 229.369 222.865 226.853 216.222 224.938L220.752 214.929Z"
                        fill="#FFA8A7" />
                    <path d="M238.049 264.261L226.102 257.367L261.047 237.189L273.063 244.045L238.049 264.261Z"
                        fill="#37474F" />
                    <path
                        d="M273.063 244.045L272.607 244.311L261.047 237.714L226.558 257.633L226.102 257.367L261.047 237.189L273.063 244.045Z"
                        fill="#27DEBF" />
                    <path
                        d="M273.063 244.045L272.607 244.311L261.047 237.714L226.558 257.633L226.102 257.367L261.047 237.189L273.063 244.045Z"
                        fill="#263238" />
                    <path
                        d="M232.175 245.085L232.395 245.214L238.255 248.596L248.674 242.577L248.895 242.456L242.815 238.944L232.175 245.085Z"
                        fill="#263238" />
                    <path d="M232.395 245.215L238.255 248.597L248.674 242.577L242.815 239.195L232.395 245.215Z"
                        fill="#37474F" />
                    <path
                        d="M238.255 266.145V267.567C238.619 267.567 238.992 267.475 239.319 267.285L276.695 245.709C277.357 245.329 277.767 244.622 277.767 243.855V243.338L238.255 266.145Z"
                        fill="#27DEBF" />
                    <path
                        d="M238.255 266.145V267.567C238.619 267.567 238.992 267.475 239.319 267.285L276.695 245.709C277.357 245.329 277.767 244.622 277.767 243.855V243.338L238.255 266.145Z"
                        fill="#263238" />
                    <path fill="#37474F"
                        d="M238.855 266.457C239.562 266.731 240.367 266.678 241.036 266.29L278.246 244.805C278.899 244.425 279.348 243.779 279.477 243.034L283.551 218.737C283.573 218.6 283.581 218.463 283.581 218.319C283.581 217.642 283.315 216.996 282.836 216.518L244.167 238.846C243.689 239.128 243.354 239.606 243.255 240.154L238.855 266.457Z" />
                    <path fill="#455A64"
                        d="M238.255 266.145L238.505 266.289C238.619 266.35 238.733 266.411 238.855 266.456L243.255 240.168C243.347 239.621 243.681 239.142 244.167 238.861L282.836 216.532C282.684 216.38 282.509 216.251 282.319 216.137L243.567 238.511C243.088 238.792 242.754 239.271 242.655 239.818L238.255 266.145Z" />
                    <path
                        d="M243.62 239.355L243.02 239.006C242.845 239.241 242.716 239.515 242.663 239.811L238.255 266.138L238.505 266.282C238.619 266.343 238.733 266.404 238.855 266.449L243.255 240.161C243.316 239.865 243.438 239.591 243.62 239.355Z"
                        fill="#263238" />
                    <path fill="#27DEBF"
                        d="M259.816 244.029C260.09 242.403 261.769 240.244 263.57 239.203C265.372 238.162 266.603 238.641 266.337 240.267C266.063 241.894 264.384 244.052 262.582 245.093C260.781 246.134 259.542 245.656 259.816 244.029Z" />
                    <path opacity="0.1"
                        d="M243.955 284.507C241.424 285.905 241.424 288.178 243.955 289.576C246.486 290.974 250.582 290.974 253.105 289.576C255.636 288.178 255.636 285.905 253.105 284.507C250.582 283.108 246.478 283.108 243.955 284.507Z"
                        fill="black" />
                    <path
                        d="M252.451 276.223C250.171 275.448 246.561 275.539 244.395 276.428C242.229 277.317 242.267 278.67 244.471 279.445C246.683 280.22 250.285 280.129 252.527 279.24C254.769 278.351 254.739 276.998 252.451 276.223Z"
                        fill="#27DEBF" />
                    <g opacity="0.3">
                        <path
                            d="M252.451 276.223C250.171 275.448 246.561 275.539 244.395 276.428C242.229 277.317 242.267 278.67 244.471 279.445C246.683 280.22 250.285 280.129 252.527 279.24C254.769 278.351 254.739 276.998 252.451 276.223Z"
                            fill="black" />
                    </g>
                    <path
                        d="M254.184 273.441L242.579 273.753L243.81 287.403H243.818C243.886 287.897 244.365 288.375 245.262 288.733C247.17 289.493 250.286 289.417 252.224 288.55C253.128 288.147 253.599 287.646 253.645 287.144H253.652L254.184 273.441Z"
                        fill="#FAFAFA" />
                    <path
                        d="M242.579 273.753L242.83 276.527C243.104 276.702 243.423 276.869 243.81 277.021C246.349 277.994 250.483 277.888 253.052 276.786C253.166 276.74 253.257 276.687 253.356 276.634C253.766 276.428 254.07 276.208 254.07 276.208L254.177 273.449L242.579 273.753Z"
                        fill="#EBEBEB" />
                    <path
                        d="M254.929 273.822L254.876 271.732L253.523 271.77C253.341 271.678 253.143 271.595 252.923 271.511C250.301 270.538 246.159 270.645 243.681 271.747C243.476 271.838 243.294 271.937 243.119 272.036L241.804 272.066L241.857 274.156C241.872 274.84 242.518 275.501 243.788 275.988C246.326 276.96 250.46 276.854 253.029 275.752C254.314 275.205 254.952 274.506 254.929 273.822Z"
                        fill="#27DEBF" />
                    <g opacity="0.2">
                        <path
                            d="M254.929 273.822L254.876 271.732L253.523 271.77C253.341 271.678 253.143 271.595 252.923 271.511C250.301 270.538 246.159 270.645 243.681 271.747C243.476 271.838 243.294 271.937 243.119 272.036L241.804 272.066L241.857 274.156C241.872 274.84 242.518 275.501 243.788 275.988C246.326 276.96 250.46 276.854 253.029 275.752C254.314 275.205 254.952 274.506 254.929 273.822Z"
                            fill="black" />
                    </g>
                    <path
                        d="M252.885 269.9C250.263 268.927 246.121 269.034 243.643 270.136C241.158 271.238 241.204 272.925 243.742 273.898C246.28 274.87 250.415 274.764 252.984 273.662C255.545 272.56 255.507 270.873 252.885 269.9Z"
                        fill="#27DEBF" />
                    <path
                        d="M253.66 271.26L253.204 269.55L249.883 269.633C248.804 269.527 247.648 269.557 246.584 269.717L243.362 269.801L242.99 271.533H242.997C242.807 272.164 243.316 272.81 244.54 273.259C246.63 274.026 250.042 273.935 252.163 273.061C253.394 272.552 253.896 271.883 253.66 271.26Z"
                        fill="#27DEBF" />
                    <path opacity="0.2"
                        d="M253.66 271.26L253.204 269.55L249.883 269.633C248.804 269.527 247.648 269.557 246.584 269.717L243.362 269.801L242.99 271.533H242.997C242.807 272.164 243.316 272.81 244.54 273.259C246.63 274.026 250.042 273.935 252.163 273.061C253.394 272.552 253.896 271.883 253.66 271.26Z"
                        fill="black" />
                    <path
                        d="M251.73 268.486C249.746 267.825 246.615 267.901 244.73 268.668C242.845 269.428 242.876 270.591 244.798 271.252C246.714 271.921 249.852 271.838 251.798 271.07C253.744 270.31 253.713 269.147 251.73 268.486Z"
                        fill="#27DEBF" />
                    <path
                        d="M252.558 269.763C252.558 269.793 252.505 269.885 252.345 270.014C252.193 270.135 251.942 270.287 251.547 270.439C250.688 270.774 249.495 270.987 248.272 271.025C247.048 271.055 245.862 270.903 245.019 270.614C244.624 270.477 244.373 270.333 244.228 270.227C244.069 270.105 244.016 270.006 244.016 269.983C244.016 269.938 244.175 269.626 244.981 269.299C245.809 268.965 246.98 268.752 248.203 268.722C249.427 268.691 250.635 268.836 251.509 269.132C252.338 269.406 252.55 269.702 252.558 269.763Z"
                        fill="#27DEBF" />
                    <g opacity="0.5">
                        <path
                            d="M252.558 269.763C252.558 269.793 252.505 269.885 252.345 270.014C252.193 270.135 251.942 270.287 251.547 270.439C250.688 270.774 249.495 270.987 248.272 271.025C247.048 271.055 245.862 270.903 245.019 270.614C244.624 270.477 244.373 270.333 244.228 270.227C244.069 270.105 244.016 270.006 244.016 269.983C244.016 269.938 244.175 269.626 244.981 269.299C245.809 268.965 246.98 268.752 248.203 268.722C249.427 268.691 250.635 268.836 251.509 269.132C252.338 269.406 252.55 269.702 252.558 269.763Z"
                            fill="black" />
                    </g>
                    <path
                        d="M252.345 270.014C252.193 270.135 251.942 270.288 251.547 270.44C250.688 270.774 249.495 270.987 248.271 271.025C247.048 271.055 245.862 270.903 245.019 270.614C244.623 270.477 244.373 270.333 244.228 270.227C244.365 270.105 244.608 269.953 244.996 269.794C245.824 269.459 246.995 269.246 248.218 269.216C249.442 269.185 250.65 269.33 251.524 269.626C251.927 269.763 252.185 269.892 252.345 270.014Z"
                        fill="#27DEBF" />
                    <g opacity="0.2">
                        <path
                            d="M252.345 270.014C252.193 270.135 251.942 270.288 251.547 270.44C250.688 270.774 249.495 270.987 248.271 271.025C247.048 271.055 245.862 270.903 245.019 270.614C244.623 270.477 244.373 270.333 244.228 270.227C244.365 270.105 244.608 269.953 244.996 269.794C245.824 269.459 246.995 269.246 248.218 269.216C249.442 269.185 250.65 269.33 251.524 269.626C251.927 269.763 252.185 269.892 252.345 270.014Z"
                            fill="black" />
                    </g>
                    <g opacity="0.5">
                        <path
                            d="M250.377 270.105C250.658 269.938 251.008 269.862 251.152 269.938C251.296 270.014 251.19 270.219 250.901 270.386C250.62 270.561 250.27 270.629 250.126 270.553C249.982 270.477 250.095 270.272 250.377 270.105Z"
                            fill="black" />
                    </g>
                    <path
                        d="M243.256 282.994C243.271 283.511 243.795 284.013 244.836 284.377C246.919 285.107 250.316 285.023 252.429 284.18C253.485 283.762 254.002 283.237 253.987 282.721L254.184 277.689C254.2 278.237 253.645 278.799 252.528 279.24C250.286 280.129 246.683 280.228 244.472 279.445C243.37 279.057 242.807 278.525 242.792 277.978L243.256 282.994Z"
                        fill="#27DEBF" />
                    <path
                        d="M246.805 283.2C246.607 282.949 246.493 282.637 246.334 282.356C246.014 281.809 245.558 281.444 244.988 281.231C244.912 281.201 244.821 281.239 244.783 281.307C244.51 281.893 244.707 282.706 245.315 283.283C245.916 283.853 246.729 284.013 247.299 283.724C247.329 283.709 247.337 283.64 247.314 283.625C247.124 283.526 246.957 283.39 246.805 283.2Z"
                        fill="#37474F" />
                    <path
                        d="M245.3 281.071C245.604 281.178 245.893 281.353 246.144 281.558C246.402 281.778 246.607 282.059 246.767 282.363C247.003 282.827 247.215 283.108 247.55 283.344C247.618 283.397 247.732 283.374 247.778 283.306C248.15 282.713 247.975 281.824 247.322 281.201C246.706 280.615 245.863 280.463 245.285 280.79C245.156 280.843 245.179 281.026 245.3 281.071Z"
                        fill="#37474F" />
                    <path opacity="0.1"
                        d="M285.717 226.435L298.895 234.065C299.344 234.324 300.066 234.324 300.514 234.065L343.028 209.502C343.477 209.244 343.477 208.826 343.028 208.567L329.85 200.937C329.402 200.679 328.68 200.679 328.231 200.937L285.717 225.508C285.276 225.759 285.276 226.177 285.717 226.435Z"
                        fill="black" />
                    <path
                        d="M286.507 224.345V224.056C286.507 223.593 286.834 223.03 287.237 222.795L325.321 200.785C325.723 200.557 326.369 200.557 326.772 200.785L338.575 207.618C338.978 207.846 339.305 208.416 339.305 208.879V209.168C339.305 209.632 338.978 210.194 338.575 210.43L300.491 232.439C300.089 232.667 299.443 232.667 299.04 232.439L287.237 225.607C286.834 225.371 286.507 224.809 286.507 224.345Z"
                        fill="#263238" />
                    <path
                        d="M287.237 223.639L299.04 230.471C299.443 230.699 300.089 230.699 300.491 230.471L338.575 208.461C338.978 208.233 338.978 207.853 338.575 207.625L326.772 200.793C326.369 200.565 325.723 200.565 325.321 200.793L287.237 222.803C286.834 223.031 286.834 223.411 287.237 223.639Z"
                        fill="#455A64" />
                    <path opacity="0.1"
                        d="M365.95 222.779L363.617 221.472C362.895 221.024 361.709 221.016 360.972 221.442L349.344 228.152L347.816 227.256C347.17 226.876 346.114 226.876 345.46 227.248L331.34 235.456C330.686 235.836 330.686 236.444 331.34 236.816L332.829 237.675L316.018 247.373C315.281 247.798 315.281 248.49 316.018 248.916L318.359 250.268C319.096 250.694 320.289 250.694 321.026 250.268L337.83 240.563C338.484 240.936 339.54 240.936 340.186 240.563L354.254 232.386C354.884 232.021 354.9 231.428 354.307 231.048L365.927 224.337C366.672 223.934 366.68 223.228 365.95 222.779Z"
                        fill="black" />
                    <path
                        d="M358.935 213.371L361.998 176.237C362.097 175.082 361.405 173.706 360.463 173.167C359.521 172.627 357.947 172.65 356.944 173.235L316.284 196.711C315.281 197.289 314.392 198.695 314.293 199.85L311.23 236.984C311.131 238.139 311.823 239.515 312.758 240.054C313.7 240.594 315.273 240.571 316.277 239.986L356.944 216.509C357.947 215.932 358.844 214.526 358.935 213.371Z"
                        fill="#263238" />
                    <path
                        d="M358.935 213.371L361.998 176.237C362.097 175.082 361.405 173.706 360.463 173.167C359.52 172.627 357.947 172.65 356.944 173.235L316.284 196.711C315.79 197 315.319 197.487 314.962 198.049L321.285 201.697V237.105L356.952 216.517C357.947 215.932 358.844 214.526 358.935 213.371Z"
                        fill="#455A64" />
                    <path
                        d="M314.642 238.944L317.705 201.811C317.804 200.656 318.693 199.25 319.696 198.672L360.356 175.196C361.36 174.618 362.097 175.082 361.998 176.237L358.935 213.37C358.836 214.526 357.947 215.932 356.944 216.509L316.276 239.986C315.281 240.571 314.544 240.1 314.642 238.944Z"
                        fill="#37474F" />
                    <path
                        d="M335.626 209.152C335.786 207.252 337.116 205.01 338.605 204.152C340.095 203.293 341.166 204.136 341.014 206.036C340.855 207.936 339.525 210.178 338.035 211.037C336.546 211.896 335.466 211.052 335.626 209.152Z"
                        fill="#27DEBF" />
                    <path d="M336.584 220.378L346.578 214.571L344.875 213.591L334.889 219.397L336.584 220.378Z"
                        fill="#455A64" />
                    <path
                        d="M351.221 231.618L339.046 238.648C338.826 238.777 338.544 238.831 338.263 238.823C338.028 238.815 337.784 238.755 337.602 238.656C337.594 238.656 337.594 238.648 337.587 238.648L332.229 235.555C332.221 235.547 332.214 235.547 332.206 235.54C331.811 235.304 331.507 234.757 331.507 234.301V234.012C331.507 233.549 331.826 233.359 332.229 233.594L335.466 235.456L336.188 235.874L336.029 235.053L334.889 219.405L336.584 220.385L346.585 214.579L351.791 230.379C351.875 230.828 351.624 231.39 351.221 231.618Z"
                        fill="#37474F" />
                    <path d="M331.727 233.533L335.884 231.132L336.728 236.718L331.727 233.533Z" fill="black" />
                    <path
                        d="M336.584 220.386L334.889 219.405L336.029 235.054C336.12 235.51 335.862 235.692 335.466 235.456L332.229 233.594C331.826 233.359 331.507 233.549 331.507 234.012V234.301C331.507 234.765 331.811 235.304 332.206 235.54C332.214 235.548 332.221 235.548 332.229 235.555L337.587 238.648C337.594 238.648 337.594 238.656 337.602 238.656C337.784 238.755 338.028 238.816 338.263 238.823L336.584 220.386Z"
                        fill="#263238" />
                    <path opacity="0.15"
                        d="M285.648 259.632C282.464 261.472 282.464 264.458 285.648 266.298C288.833 268.137 294.001 268.137 297.193 266.298C300.377 264.458 300.377 261.472 297.193 259.632C294.001 257.793 288.833 257.793 285.648 259.632Z"
                        fill="black" />
                    <path
                        d="M296.493 263.379C299.267 260.544 300.901 253.476 298.196 251.227H284.425C281.719 253.469 283.345 260.537 286.119 263.371C286.142 263.394 286.173 263.425 286.195 263.447C286.226 263.478 286.256 263.508 286.294 263.539C286.37 263.615 286.454 263.691 286.545 263.759C286.568 263.774 286.591 263.797 286.613 263.812C286.682 263.865 286.75 263.919 286.826 263.972C286.948 264.055 287.062 264.131 287.183 264.2C289.463 265.515 293.165 265.515 295.452 264.2C295.574 264.131 295.695 264.055 295.817 263.972C295.885 263.926 295.946 263.873 296.015 263.827C296.045 263.805 296.068 263.789 296.098 263.767C296.182 263.698 296.265 263.622 296.341 263.554C296.379 263.516 296.417 263.485 296.455 263.447C296.448 263.417 296.471 263.402 296.493 263.379Z"
                        fill="#37474F" />
                    <path
                        d="M285.61 250.322C282.464 252.139 282.464 255.08 285.61 256.896C288.757 258.713 293.849 258.713 296.995 256.896C300.141 255.08 300.141 252.139 296.995 250.322C293.849 248.506 288.757 248.506 285.61 250.322Z"
                        fill="#455A64" />
                    <path
                        d="M287.07 251.158C284.729 252.511 284.729 254.7 287.07 256.053C289.41 257.406 293.203 257.406 295.544 256.053C297.884 254.7 297.884 252.511 295.544 251.158C293.203 249.813 289.403 249.813 287.07 251.158Z"
                        fill="#263238" />
                    <path
                        d="M295.544 253.484C293.203 252.132 289.41 252.132 287.07 253.484C286.416 253.857 285.96 254.298 285.671 254.769C285.96 255.24 286.424 255.681 287.07 256.053C289.41 257.406 293.203 257.406 295.544 256.053C296.197 255.681 296.653 255.24 296.942 254.769C296.653 254.298 296.19 253.857 295.544 253.484Z"
                        fill="#E0E0E0" />
                    <path
                        d="M295.718 243.064V253.468C295.718 254.122 295.285 254.775 294.426 255.277C294.403 255.292 294.388 255.3 294.365 255.307C293.795 255.627 293.111 255.839 292.389 255.946C291.683 256.052 290.93 256.052 290.216 255.946C289.494 255.839 288.81 255.627 288.24 255.307C288.217 255.3 288.202 255.285 288.179 255.277C287.313 254.775 286.887 254.129 286.887 253.468V243.064C286.887 240.624 288.871 238.641 291.303 238.641C293.742 238.641 295.718 240.624 295.718 243.064Z"
                        fill="#27DEBF" />
                    <path opacity="0.1"
                        d="M291.303 238.641C291.204 238.663 288.24 239.408 288.24 243.033V255.307C288.217 255.3 288.202 255.285 288.179 255.277C287.313 254.775 286.887 254.129 286.887 253.468V243.064C286.887 240.624 288.863 238.641 291.303 238.641Z"
                        fill="black" />
                    <path opacity="0.1"
                        d="M295.718 243.064V253.468C295.718 254.122 295.285 254.775 294.426 255.277C294.403 255.292 294.388 255.3 294.365 255.307V243.033C294.365 239.408 291.394 238.663 291.303 238.648C291.295 238.641 291.295 238.641 291.295 238.641C293.742 238.641 295.718 240.624 295.718 243.064Z"
                        fill="black" />
                    <g opacity="0.1">
                        <path
                            d="M292.389 242.182V255.946C291.683 256.053 290.93 256.053 290.216 255.946V242.182C290.216 240.153 291.234 238.732 291.295 238.648C291.303 238.641 291.28 239.34 291.28 239.34C291.28 239.34 291.303 238.641 291.303 238.648C291.371 238.732 292.389 240.153 292.389 242.182Z"
                            fill="black" />
                    </g>
                    <path
                        d="M292.389 256.091C292.306 256.091 292.245 256.022 292.245 255.946V254.768C292.245 254.685 292.313 254.624 292.389 254.624C292.473 254.624 292.534 254.692 292.534 254.768V255.946C292.534 256.03 292.473 256.091 292.389 256.091ZM290.216 255.331C290.132 255.331 290.071 255.262 290.071 255.186V254.008C290.071 253.925 290.14 253.864 290.216 253.864C290.299 253.864 290.36 253.932 290.36 254.008V255.186C290.368 255.262 290.299 255.331 290.216 255.331ZM292.389 253.735C292.306 253.735 292.245 253.666 292.245 253.59V252.412C292.245 252.329 292.313 252.268 292.389 252.268C292.473 252.268 292.534 252.336 292.534 252.412V253.59C292.534 253.666 292.473 253.735 292.389 253.735ZM290.216 252.967C290.132 252.967 290.071 252.899 290.071 252.823V251.645C290.071 251.561 290.14 251.5 290.216 251.5C290.299 251.5 290.36 251.569 290.36 251.645V252.823C290.368 252.899 290.299 252.967 290.216 252.967ZM292.389 251.371C292.306 251.371 292.245 251.303 292.245 251.227V250.049C292.245 249.965 292.313 249.904 292.389 249.904C292.473 249.904 292.534 249.973 292.534 250.049V251.227C292.534 251.303 292.473 251.371 292.389 251.371ZM290.216 250.603C290.132 250.603 290.071 250.535 290.071 250.459V249.281C290.071 249.197 290.14 249.137 290.216 249.137C290.299 249.137 290.36 249.205 290.36 249.281V250.459C290.368 250.535 290.299 250.603 290.216 250.603ZM292.389 249.007C292.306 249.007 292.245 248.939 292.245 248.863V247.685C292.245 247.601 292.313 247.541 292.389 247.541C292.473 247.541 292.534 247.609 292.534 247.685V248.863C292.534 248.939 292.473 249.007 292.389 249.007ZM290.216 248.24C290.132 248.24 290.071 248.171 290.071 248.095V246.917C290.071 246.834 290.14 246.773 290.216 246.773C290.299 246.773 290.36 246.841 290.36 246.917V248.095C290.368 248.171 290.299 248.24 290.216 248.24ZM292.389 246.644C292.306 246.644 292.245 246.575 292.245 246.499V245.321C292.245 245.238 292.313 245.177 292.389 245.177C292.473 245.177 292.534 245.245 292.534 245.321V246.499C292.534 246.575 292.473 246.644 292.389 246.644ZM290.216 245.876C290.132 245.876 290.071 245.808 290.071 245.732V244.554C290.071 244.47 290.14 244.409 290.216 244.409C290.299 244.409 290.36 244.478 290.36 244.554V245.732C290.368 245.808 290.299 245.876 290.216 245.876ZM292.389 244.28C292.306 244.28 292.245 244.212 292.245 244.136V242.958C292.245 242.874 292.313 242.813 292.389 242.813C292.473 242.813 292.534 242.882 292.534 242.958V244.136C292.534 244.212 292.473 244.28 292.389 244.28ZM290.216 243.513C290.132 243.513 290.071 243.444 290.071 243.368V242.19C290.071 242.107 290.14 242.046 290.216 242.046C290.299 242.046 290.36 242.114 290.36 242.19V243.368C290.368 243.444 290.299 243.513 290.216 243.513ZM292.374 241.917C292.298 241.917 292.23 241.856 292.23 241.78C292.199 241.4 292.131 241.02 292.032 240.647C292.009 240.571 292.055 240.488 292.138 240.465C292.214 240.442 292.298 240.488 292.321 240.571C292.427 240.967 292.496 241.362 292.526 241.765C292.534 241.848 292.473 241.917 292.389 241.924C292.382 241.917 292.374 241.917 292.374 241.917ZM290.33 241.157C290.322 241.157 290.314 241.157 290.299 241.157C290.216 241.141 290.17 241.065 290.185 240.982C290.261 240.594 290.375 240.199 290.52 239.819C290.55 239.743 290.634 239.705 290.71 239.735C290.786 239.766 290.824 239.849 290.793 239.925C290.649 240.29 290.542 240.663 290.474 241.035C290.466 241.111 290.398 241.157 290.33 241.157ZM291.774 239.644C291.72 239.644 291.667 239.614 291.637 239.561C291.53 239.333 291.416 239.112 291.295 238.915C291.249 238.968 291.166 238.983 291.105 238.945C291.036 238.899 291.014 238.808 291.059 238.74C291.12 238.641 291.166 238.58 291.181 238.565C291.211 238.542 291.257 238.512 291.295 238.512C291.333 238.512 291.386 238.519 291.409 238.55C291.416 238.557 291.424 238.565 291.432 238.58C291.606 238.854 291.766 239.135 291.903 239.439C291.933 239.515 291.903 239.599 291.827 239.637C291.812 239.637 291.789 239.644 291.774 239.644Z"
                        fill="#FAFAFA" />
                    <path
                        d="M290.748 238.991C290.695 238.991 290.641 238.961 290.611 238.908C290.581 238.832 290.611 238.748 290.687 238.71C290.976 238.581 291.189 238.52 291.257 238.505C291.31 238.49 291.371 238.505 291.409 238.543C291.462 238.604 291.462 238.695 291.401 238.748L291.394 238.756C291.371 238.778 291.348 238.786 291.318 238.794C291.318 238.794 291.12 238.839 290.809 238.976C290.793 238.991 290.771 238.991 290.748 238.991Z"
                        fill="#FAFAFA" />
                    <path
                        d="M288.24 253.735C288.156 253.735 288.095 253.667 288.095 253.591V252.466C288.095 252.383 288.164 252.322 288.24 252.322C288.323 252.322 288.384 252.39 288.384 252.466V253.591C288.392 253.667 288.323 253.735 288.24 253.735ZM288.24 251.486C288.156 251.486 288.095 251.417 288.095 251.341V250.217C288.095 250.133 288.164 250.072 288.24 250.072C288.323 250.072 288.384 250.141 288.384 250.217V251.341C288.392 251.417 288.323 251.486 288.24 251.486ZM288.24 249.236C288.156 249.236 288.095 249.168 288.095 249.092V247.967C288.095 247.883 288.164 247.823 288.24 247.823C288.323 247.823 288.384 247.891 288.384 247.967V249.092C288.392 249.175 288.323 249.236 288.24 249.236ZM288.24 246.994C288.156 246.994 288.095 246.926 288.095 246.85V245.725C288.095 245.641 288.164 245.581 288.24 245.581C288.323 245.581 288.384 245.649 288.384 245.725V246.85C288.392 246.926 288.323 246.994 288.24 246.994ZM288.24 244.745C288.156 244.745 288.095 244.676 288.095 244.6V243.475C288.095 243.392 288.164 243.331 288.24 243.331C288.323 243.331 288.384 243.399 288.384 243.475V244.6C288.392 244.676 288.323 244.745 288.24 244.745ZM288.278 242.495C288.27 242.495 288.27 242.495 288.263 242.495C288.179 242.487 288.126 242.411 288.133 242.335C288.179 241.94 288.263 241.56 288.384 241.211C288.415 241.135 288.498 241.089 288.574 241.119C288.65 241.15 288.688 241.233 288.665 241.309C288.551 241.636 288.468 241.993 288.422 242.373C288.415 242.442 288.354 242.495 288.278 242.495ZM289.038 240.405C289.007 240.405 288.977 240.397 288.954 240.375C288.886 240.329 288.871 240.238 288.916 240.169C289.137 239.85 289.403 239.569 289.707 239.318C289.767 239.265 289.866 239.273 289.912 239.341C289.965 239.402 289.957 239.501 289.889 239.546C289.608 239.774 289.357 240.04 289.152 240.337C289.129 240.382 289.083 240.405 289.038 240.405Z"
                        fill="#FAFAFA" />
                    <path
                        d="M288.24 255.461C288.156 255.461 288.095 255.392 288.095 255.316V254.724C288.095 254.64 288.164 254.579 288.24 254.579C288.323 254.579 288.384 254.648 288.384 254.724V255.316C288.392 255.392 288.323 255.461 288.24 255.461Z"
                        fill="#FAFAFA" />
                    <path
                        d="M291.85 238.991C291.827 238.991 291.812 238.983 291.789 238.976C291.477 238.831 291.28 238.793 291.272 238.793C291.242 238.786 291.211 238.77 291.189 238.748C291.135 238.687 291.135 238.588 291.196 238.535C291.242 238.497 291.303 238.489 291.356 238.504C291.439 238.527 291.645 238.588 291.911 238.702C291.987 238.732 292.017 238.824 291.987 238.9C291.964 238.96 291.911 238.991 291.85 238.991Z"
                        fill="#FAFAFA" />
                    <path
                        d="M294.365 253.735C294.282 253.735 294.221 253.667 294.221 253.591V252.466C294.221 252.382 294.289 252.321 294.365 252.321C294.441 252.321 294.51 252.39 294.51 252.466V253.591C294.51 253.667 294.449 253.735 294.365 253.735ZM294.365 251.485C294.282 251.485 294.221 251.417 294.221 251.341V250.216C294.221 250.133 294.289 250.072 294.365 250.072C294.441 250.072 294.51 250.14 294.51 250.216V251.341C294.51 251.417 294.449 251.485 294.365 251.485ZM294.365 249.236C294.282 249.236 294.221 249.167 294.221 249.091V247.967C294.221 247.883 294.289 247.822 294.365 247.822C294.441 247.822 294.51 247.891 294.51 247.967V249.091C294.51 249.175 294.449 249.236 294.365 249.236ZM294.365 246.986C294.282 246.986 294.221 246.918 294.221 246.842V245.717C294.221 245.633 294.289 245.573 294.365 245.573C294.441 245.573 294.51 245.641 294.51 245.717V246.842C294.51 246.925 294.449 246.986 294.365 246.986ZM294.365 244.744C294.282 244.744 294.221 244.676 294.221 244.6V243.475C294.221 243.391 294.289 243.331 294.365 243.331C294.441 243.331 294.51 243.399 294.51 243.475V244.6C294.51 244.676 294.449 244.744 294.365 244.744ZM294.327 242.495C294.251 242.495 294.191 242.441 294.183 242.365C294.137 241.985 294.061 241.628 293.94 241.301C293.909 241.225 293.955 241.142 294.031 241.111C294.107 241.081 294.191 241.127 294.221 241.203C294.343 241.552 294.434 241.932 294.479 242.327C294.487 242.411 294.434 242.479 294.35 242.495C294.335 242.495 294.335 242.495 294.327 242.495ZM293.567 240.405C293.522 240.405 293.476 240.382 293.446 240.344C293.241 240.047 292.99 239.781 292.709 239.553C292.648 239.5 292.633 239.409 292.686 239.348C292.739 239.287 292.83 239.272 292.891 239.325C293.195 239.576 293.461 239.857 293.681 240.177C293.727 240.245 293.712 240.336 293.643 240.382C293.628 240.397 293.598 240.405 293.567 240.405Z"
                        fill="#FAFAFA" />
                    <path
                        d="M294.365 255.46C294.282 255.46 294.221 255.391 294.221 255.315V254.723C294.221 254.639 294.289 254.578 294.365 254.578C294.441 254.578 294.51 254.647 294.51 254.723V255.315C294.51 255.391 294.449 255.46 294.365 255.46Z"
                        fill="#FAFAFA" />
                    <path
                        d="M390.901 121.35L362.317 137.819C361.922 138.047 361.61 138.594 361.61 139.05V155.01C361.61 155.466 361.93 156.006 362.325 156.234L365.144 157.837C365.54 158.058 366.178 158.058 366.566 157.83L395.149 141.36C395.544 141.132 395.856 140.585 395.856 140.129V124.169C395.856 123.721 395.537 123.174 395.142 122.946L392.322 121.342C391.927 121.122 391.288 121.122 390.901 121.35Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M366.391 157.898C366.003 158.05 365.479 158.027 365.137 157.83L362.317 156.226C361.922 156.006 361.603 155.458 361.603 155.01V139.05C361.603 138.814 361.694 138.548 361.823 138.32L366.056 140.76C365.935 140.98 365.851 141.231 365.851 141.459V157.412C365.851 157.799 366.087 157.989 366.391 157.898Z"
                        fill="black" />
                    <g opacity="0.5">
                        <path
                            d="M395.848 124.04C395.795 123.683 395.499 123.554 395.149 123.759L366.566 140.228C366.368 140.342 366.193 140.54 366.064 140.76L361.831 138.32C361.96 138.108 362.127 137.925 362.317 137.819L390.908 121.35C391.296 121.122 391.934 121.122 392.33 121.342L395.149 122.946C395.499 123.151 395.795 123.614 395.848 124.04Z"
                            fill="white" />
                    </g>
                    <path
                        d="M395.149 123.759L366.566 140.228C366.17 140.456 365.859 141.004 365.859 141.46V157.42C365.859 157.876 366.178 158.058 366.566 157.83L395.149 141.361C395.544 141.133 395.856 140.586 395.856 140.13V124.17C395.856 123.714 395.537 123.531 395.149 123.759Z"
                        fill="#27DEBF" />
                    <path
                        d="M374.918 139.37C375.313 139.142 375.663 139.005 375.982 138.959C376.294 138.914 376.56 138.967 376.788 139.119C377.008 139.271 377.183 139.522 377.297 139.864C377.411 140.206 377.479 140.662 377.479 141.209C377.479 141.771 377.418 142.288 377.297 142.774C377.175 143.261 377.008 143.702 376.788 144.104C376.567 144.507 376.301 144.872 375.982 145.191C375.67 145.518 375.313 145.792 374.918 146.02L373.74 146.704V149.599C373.74 149.706 373.717 149.804 373.664 149.911C373.611 150.017 373.558 150.086 373.489 150.124L372.281 150.823C372.212 150.861 372.152 150.861 372.106 150.808C372.06 150.754 372.03 150.686 372.03 150.58V141.399C372.03 141.292 372.053 141.194 372.106 141.087C372.159 140.981 372.212 140.912 372.281 140.874L374.918 139.37ZM373.74 144.5L374.872 143.846C375.131 143.694 375.344 143.489 375.511 143.215C375.678 142.942 375.762 142.607 375.762 142.212C375.762 141.817 375.678 141.574 375.511 141.498C375.344 141.422 375.131 141.452 374.872 141.604L373.74 142.258V144.5Z"
                        fill="#FAFAFA" />
                    <path
                        d="M383.582 134.376C383.65 134.338 383.704 134.338 383.757 134.392C383.802 134.437 383.833 134.513 383.833 134.62V143.8C383.833 143.907 383.81 144.006 383.757 144.112C383.704 144.218 383.65 144.287 383.582 144.325L382.374 145.024C382.305 145.062 382.244 145.062 382.199 145.009C382.153 144.963 382.123 144.887 382.123 144.781V141.3L380.071 142.486V145.966C380.071 146.073 380.048 146.172 379.995 146.278C379.949 146.384 379.888 146.453 379.82 146.491L378.612 147.19C378.543 147.228 378.482 147.228 378.437 147.182C378.391 147.137 378.361 147.061 378.361 146.947V137.766C378.361 137.66 378.384 137.561 378.437 137.454C378.49 137.348 378.543 137.28 378.612 137.242L379.82 136.542C379.888 136.504 379.949 136.504 379.995 136.558C380.048 136.603 380.071 136.679 380.071 136.786V140.213L382.123 139.028V135.6C382.123 135.494 382.146 135.395 382.199 135.288C382.244 135.182 382.305 135.114 382.374 135.076L383.582 134.376Z"
                        fill="#FAFAFA" />
                    <path
                        d="M388.005 131.815C388.4 131.587 388.75 131.45 389.069 131.404C389.381 131.359 389.647 131.412 389.875 131.564C390.095 131.716 390.27 131.967 390.384 132.309C390.506 132.658 390.566 133.107 390.566 133.654C390.566 134.216 390.506 134.733 390.384 135.22C390.262 135.706 390.095 136.147 389.875 136.55C389.654 136.952 389.388 137.317 389.069 137.636C388.758 137.963 388.4 138.237 388.005 138.465L386.827 139.149V142.044C386.827 142.151 386.804 142.25 386.751 142.356C386.698 142.462 386.645 142.531 386.576 142.569L385.368 143.268C385.3 143.306 385.246 143.306 385.193 143.253C385.14 143.207 385.117 143.131 385.117 143.025V133.844C385.117 133.738 385.14 133.639 385.193 133.532C385.246 133.426 385.3 133.358 385.368 133.32L388.005 131.815ZM386.827 136.945L387.96 136.291C388.218 136.139 388.431 135.934 388.598 135.66C388.765 135.387 388.849 135.052 388.849 134.657C388.849 134.262 388.765 134.019 388.598 133.943C388.431 133.867 388.218 133.897 387.96 134.049L386.827 134.703V136.945Z"
                        fill="#FAFAFA" />
                    <path
                        d="M390.901 88.1838L362.317 104.653C361.922 104.881 361.61 105.428 361.61 105.884V121.844C361.61 122.3 361.93 122.84 362.325 123.068L365.144 124.671C365.54 124.892 366.178 124.892 366.566 124.664L395.149 108.195C395.544 107.967 395.856 107.419 395.856 106.963V91.0034C395.856 90.5474 395.537 90.0078 395.142 89.7798L392.322 88.1762C391.927 87.9558 391.288 87.9634 390.901 88.1838Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M366.391 124.732C366.003 124.884 365.479 124.861 365.137 124.663L362.317 123.06C361.922 122.839 361.603 122.292 361.603 121.844V105.884C361.603 105.648 361.694 105.382 361.823 105.154L366.056 107.594C365.935 107.814 365.851 108.065 365.851 108.293V124.245C365.851 124.633 366.087 124.823 366.391 124.732Z"
                        fill="black" />
                    <g opacity="0.5">
                        <path
                            d="M395.848 90.8741C395.795 90.5169 395.499 90.3877 395.149 90.5929L366.566 107.062C366.368 107.176 366.193 107.374 366.064 107.594L361.831 105.154C361.96 104.942 362.127 104.759 362.317 104.653L390.908 88.1837C391.296 87.9557 391.934 87.9557 392.33 88.1761L395.149 89.7797C395.499 89.9849 395.795 90.4561 395.848 90.8741Z"
                            fill="white" />
                    </g>
                    <path
                        d="M395.149 90.5925L366.566 107.062C366.17 107.29 365.859 107.837 365.859 108.293V124.253C365.859 124.709 366.178 124.891 366.566 124.663L395.149 108.194C395.544 107.966 395.856 107.419 395.856 106.963V91.0029C395.856 90.5545 395.537 90.3721 395.149 90.5925Z"
                        fill="#27DEBF" />
                    <path
                        d="M373.048 107.336C373.117 107.298 373.17 107.305 373.223 107.351C373.269 107.397 373.299 107.473 373.299 107.579V116.661C373.299 116.767 373.276 116.866 373.223 116.973C373.178 117.079 373.117 117.147 373.048 117.185L371.855 117.877C371.787 117.915 371.734 117.915 371.68 117.862C371.635 117.816 371.604 117.74 371.604 117.634V114.191L369.575 115.361V118.804C369.575 118.911 369.552 119.009 369.499 119.116C369.454 119.222 369.393 119.291 369.324 119.329L368.131 120.02C368.063 120.058 368.01 120.058 367.956 120.013C367.911 119.967 367.88 119.891 367.88 119.785V110.703C367.88 110.596 367.903 110.497 367.956 110.391C368.002 110.285 368.063 110.216 368.131 110.178L369.324 109.487C369.393 109.449 369.446 109.456 369.499 109.502C369.545 109.547 369.575 109.623 369.575 109.73V113.119L371.604 111.949V108.559C371.604 108.453 371.627 108.354 371.68 108.248C371.726 108.141 371.787 108.073 371.855 108.035L373.048 107.336Z"
                        fill="#FAFAFA" />
                    <path
                        d="M379.721 103.482C379.79 103.444 379.843 103.452 379.896 103.498C379.942 103.543 379.972 103.619 379.972 103.726V105.215C379.972 105.322 379.949 105.42 379.896 105.527C379.85 105.633 379.79 105.702 379.721 105.74L378.118 106.667V113.879C378.118 113.986 378.095 114.084 378.042 114.191C377.996 114.297 377.935 114.366 377.867 114.404L376.674 115.095C376.605 115.133 376.544 115.133 376.499 115.08C376.453 115.034 376.423 114.958 376.423 114.852V107.64L374.819 108.567C374.751 108.605 374.698 108.605 374.644 108.552C374.599 108.506 374.568 108.43 374.568 108.324V106.834C374.568 106.728 374.591 106.629 374.644 106.522C374.69 106.416 374.751 106.348 374.819 106.31L379.721 103.482Z"
                        fill="#FAFAFA" />
                    <path
                        d="M383.916 108.422C383.863 108.369 383.825 108.316 383.795 108.263L382.936 106.439V111.09C382.936 111.196 382.913 111.295 382.86 111.402C382.814 111.508 382.754 111.576 382.685 111.614L381.492 112.306C381.424 112.344 381.37 112.344 381.317 112.291C381.272 112.245 381.241 112.169 381.241 112.063V102.981C381.241 102.874 381.264 102.776 381.317 102.669C381.363 102.57 381.424 102.494 381.492 102.456L382.548 101.848C382.67 101.78 382.761 101.78 382.822 101.848C382.883 101.917 382.921 101.97 382.944 102.008L384.426 105.048L385.908 100.298C385.923 100.237 385.968 100.146 386.029 100.002C386.09 99.8648 386.181 99.7583 386.303 99.6899L387.359 99.0819C387.428 99.0439 387.481 99.0515 387.534 99.0971C387.58 99.1427 387.61 99.2187 387.61 99.3251V108.407C387.61 108.514 387.587 108.612 387.534 108.719C387.488 108.825 387.428 108.894 387.359 108.932L386.166 109.623C386.098 109.661 386.044 109.661 385.991 109.608C385.946 109.562 385.915 109.486 385.915 109.38V104.729L385.056 107.541C385.026 107.632 384.988 107.731 384.935 107.845C384.882 107.951 384.813 108.035 384.722 108.088L384.137 108.422C384.038 108.468 383.97 108.468 383.916 108.422Z"
                        fill="#FAFAFA" />
                    <path
                        d="M393.812 102.943C393.88 102.905 393.933 102.913 393.986 102.958C394.032 103.004 394.062 103.08 394.062 103.186V104.676C394.062 104.782 394.04 104.881 393.986 104.987C393.941 105.094 393.88 105.162 393.812 105.2L389.586 107.64C389.518 107.678 389.464 107.678 389.411 107.625C389.366 107.579 389.335 107.503 389.335 107.397V98.3146C389.335 98.2082 389.358 98.1093 389.411 98.0029C389.457 97.8965 389.518 97.8282 389.586 97.7902L390.779 97.0985C390.848 97.0605 390.901 97.0682 390.954 97.1138C391 97.1594 391.03 97.2354 391.03 97.3418V104.554L393.812 102.943Z"
                        fill="#FAFAFA" />
                    <path
                        d="M390.901 55.0245L362.317 71.4937C361.922 71.7217 361.61 72.2689 361.61 72.7249V88.6849C361.61 89.1409 361.93 89.6805 362.325 89.9085L365.144 91.5121C365.54 91.7325 366.178 91.7325 366.566 91.5045L395.149 75.0353C395.544 74.8073 395.856 74.2601 395.856 73.8041V57.8441C395.856 57.3881 395.537 56.8485 395.142 56.6205L392.322 55.0169C391.927 54.7965 391.288 54.7965 390.901 55.0245Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M366.391 91.5727C366.003 91.7247 365.479 91.7019 365.137 91.5043L362.317 89.9007C361.922 89.6803 361.603 89.1331 361.603 88.6847V72.7247C361.603 72.4891 361.694 72.2231 361.823 71.9951L366.056 74.4347C365.935 74.6551 365.851 74.9059 365.851 75.1339V91.0863C365.851 91.4739 366.087 91.6639 366.391 91.5727Z"
                        fill="black" />
                    <g opacity="0.5">
                        <path
                            d="M395.848 57.7149C395.795 57.3577 395.499 57.2285 395.149 57.4337L366.566 73.9029C366.368 74.0169 366.193 74.2145 366.064 74.4349L361.831 71.9953C361.96 71.7825 362.127 71.6001 362.317 71.4937L390.908 55.0245C391.296 54.7965 391.934 54.7965 392.33 55.0169L395.149 56.6205C395.499 56.8257 395.795 57.2893 395.848 57.7149Z"
                            fill="white" />
                    </g>
                    <path
                        d="M395.149 57.4341L366.566 73.9033C366.17 74.1313 365.859 74.6785 365.859 75.1345V91.0945C365.859 91.5505 366.178 91.7329 366.566 91.5049L395.149 75.0357C395.544 74.8077 395.856 74.2605 395.856 73.8045V57.8445C395.856 57.3885 395.537 57.2061 395.149 57.4341Z"
                        fill="#27DEBF" />
                    <path
                        d="M372.912 77.9913C372.904 78.1205 372.904 78.2877 372.896 78.5081C372.896 78.7285 372.889 78.9489 372.889 79.1769C372.889 79.4049 372.889 79.6329 372.896 79.8457C372.896 80.0661 372.904 80.2333 372.912 80.3473C372.927 80.5525 372.95 80.7425 372.995 80.9173C373.041 81.0921 373.102 81.2213 373.193 81.3201C373.284 81.4189 373.398 81.4721 373.542 81.4797C373.679 81.4873 373.854 81.4341 374.059 81.3125C374.264 81.1909 374.439 81.0541 374.568 80.9021C374.705 80.7501 374.812 80.5981 374.895 80.4385C374.979 80.2789 375.047 80.1269 375.093 79.9673C375.138 79.8077 375.176 79.6709 375.199 79.5417C375.23 79.3745 375.26 79.2529 375.298 79.1693C375.336 79.0857 375.404 79.0173 375.511 78.9565L376.704 78.2649C376.757 78.2345 376.803 78.2345 376.848 78.2725C376.886 78.3105 376.909 78.3713 376.909 78.4549C376.902 78.9337 376.826 79.4277 376.681 79.9369C376.537 80.4461 376.332 80.9249 376.081 81.3809C375.822 81.8369 375.526 82.2549 375.184 82.6349C374.842 83.0149 374.47 83.3189 374.067 83.5545C373.626 83.8053 373.238 83.9345 372.896 83.9269C372.554 83.9269 372.258 83.8205 372.015 83.6153C371.772 83.4101 371.582 83.1137 371.452 82.7261C371.323 82.3385 371.247 81.8901 371.232 81.3885C371.217 81.0085 371.217 80.6057 371.217 80.1649C371.217 79.7241 371.224 79.2985 371.232 78.8881C371.247 78.3637 371.316 77.8317 371.452 77.2921C371.589 76.7525 371.772 76.2357 372.015 75.7493C372.258 75.2629 372.547 74.8221 372.896 74.4193C373.246 74.0165 373.634 73.6897 374.074 73.4389C374.477 73.2033 374.85 73.0817 375.192 73.0665C375.534 73.0513 375.838 73.1197 376.088 73.2869C376.347 73.4465 376.544 73.6973 376.689 74.0317C376.833 74.3661 376.909 74.7765 376.917 75.2477C376.917 75.3313 376.894 75.4149 376.856 75.4985C376.818 75.5821 376.772 75.6429 376.712 75.6733L375.518 76.3649C375.412 76.4257 375.344 76.4333 375.306 76.3953C375.268 76.3573 375.237 76.2661 375.207 76.1369C375.184 76.0381 375.146 75.9393 375.1 75.8329C375.055 75.7265 374.986 75.6505 374.903 75.5897C374.819 75.5289 374.705 75.5061 374.576 75.5061C374.439 75.5061 374.272 75.5669 374.067 75.6885C373.862 75.8101 373.687 75.9545 373.55 76.1217C373.413 76.2889 373.292 76.4789 373.2 76.6841C373.109 76.8893 373.041 77.1021 373.003 77.3225C372.957 77.5429 372.927 77.7709 372.912 77.9913Z"
                        fill="#FAFAFA" />
                    <path
                        d="M380.679 69.6241C381.066 69.3961 381.424 69.2821 381.75 69.2669C382.077 69.2517 382.358 69.3125 382.594 69.4493C382.83 69.5861 383.02 69.7761 383.149 70.0269C383.286 70.2777 383.354 70.5513 383.362 70.8477C383.362 70.9313 383.339 71.0149 383.301 71.0985C383.263 71.1821 383.217 71.2353 383.172 71.2657L381.978 71.9573C381.895 72.0029 381.826 72.0257 381.773 72.0181C381.72 72.0105 381.667 71.9877 381.614 71.9421C381.598 71.9269 381.568 71.8965 381.53 71.8509C381.492 71.8053 381.431 71.7749 381.363 71.7445C381.287 71.7141 381.196 71.7065 381.089 71.7217C380.983 71.7293 380.846 71.7825 380.686 71.8737C380.572 71.9421 380.458 72.0181 380.352 72.1017C380.246 72.1853 380.154 72.2765 380.071 72.3753C379.987 72.4741 379.919 72.5881 379.873 72.7097C379.82 72.8313 379.797 72.9681 379.797 73.1049C379.797 73.2417 379.828 73.3481 379.881 73.4089C379.942 73.4697 380.033 73.5001 380.17 73.5001C380.306 73.5001 380.489 73.4773 380.709 73.4165C380.937 73.3633 381.211 73.2873 381.545 73.1961C381.88 73.1049 382.168 73.0669 382.419 73.0821C382.67 73.0973 382.875 73.1733 383.042 73.3177C383.21 73.4621 383.331 73.6673 383.415 73.9409C383.498 74.2145 383.536 74.5717 383.536 75.0125C383.536 75.4913 383.468 75.9549 383.324 76.4109C383.187 76.8669 382.989 77.3001 382.738 77.7105C382.488 78.1209 382.191 78.5009 381.842 78.8353C381.5 79.1773 381.12 79.4585 380.717 79.6941C380.306 79.9297 379.926 80.0665 379.584 80.0969C379.242 80.1273 378.954 80.0741 378.703 79.9373C378.46 79.8005 378.262 79.6029 378.125 79.3369C377.988 79.0709 377.912 78.7593 377.905 78.4097C377.905 78.3261 377.928 78.2425 377.966 78.1589C378.004 78.0753 378.049 78.0221 378.095 77.9917L379.288 77.3001C379.372 77.2545 379.44 77.2317 379.486 77.2317C379.531 77.2393 379.584 77.2545 379.63 77.2925C379.653 77.3153 379.691 77.3533 379.736 77.4141C379.782 77.4673 379.85 77.5205 379.934 77.5585C380.018 77.5965 380.116 77.6193 380.246 77.6117C380.367 77.6041 380.527 77.5509 380.709 77.4445C381.028 77.2545 381.302 77.0493 381.515 76.8137C381.728 76.5781 381.842 76.3273 381.842 76.0461C381.842 75.9093 381.804 75.8105 381.72 75.7649C381.644 75.7193 381.522 75.6965 381.363 75.7117C381.203 75.7269 381.006 75.7649 380.755 75.8333C380.512 75.9017 380.215 75.9777 379.881 76.0537C379.258 76.2057 378.794 76.1297 378.505 75.8105C378.216 75.4913 378.072 74.9365 378.072 74.1309C378.072 73.7281 378.133 73.3101 378.247 72.8769C378.368 72.4437 378.536 72.0181 378.764 71.6077C378.992 71.1973 379.258 70.8173 379.577 70.4677C379.926 70.1409 380.284 69.8597 380.679 69.6241Z"
                        fill="#FAFAFA" />
                    <path
                        d="M387.291 65.8087C387.678 65.5807 388.036 65.4667 388.362 65.4515C388.689 65.4363 388.97 65.4971 389.206 65.6339C389.442 65.7707 389.632 65.9607 389.761 66.2115C389.898 66.4623 389.966 66.7359 389.974 67.0323C389.974 67.1159 389.951 67.1995 389.913 67.2831C389.875 67.3667 389.829 67.4199 389.784 67.4503L388.59 68.1419C388.507 68.1875 388.438 68.2103 388.385 68.2027C388.332 68.1951 388.279 68.1723 388.226 68.1267C388.21 68.1115 388.18 68.0811 388.142 68.0355C388.104 67.9899 388.043 67.9595 387.975 67.9291C387.899 67.8987 387.808 67.8911 387.701 67.9063C387.595 67.9139 387.458 67.9671 387.298 68.0583C387.184 68.1267 387.07 68.2027 386.964 68.2863C386.858 68.3699 386.766 68.4611 386.683 68.5599C386.599 68.6587 386.531 68.7727 386.485 68.8943C386.432 69.0159 386.409 69.1527 386.409 69.2895C386.409 69.4263 386.44 69.5327 386.493 69.5935C386.554 69.6543 386.645 69.6847 386.782 69.6847C386.918 69.6847 387.101 69.6619 387.321 69.6011C387.549 69.5479 387.823 69.4719 388.165 69.3807C388.499 69.2895 388.788 69.2515 389.039 69.2667C389.29 69.2819 389.495 69.3579 389.662 69.5023C389.829 69.6467 389.951 69.8519 390.034 70.1255C390.118 70.3991 390.156 70.7563 390.156 71.1971C390.156 71.6759 390.088 72.1395 389.943 72.5955C389.806 73.0515 389.609 73.4847 389.358 73.8951C389.107 74.3055 388.803 74.6855 388.461 75.0199C388.119 75.3619 387.739 75.6431 387.336 75.8787C386.918 76.1143 386.546 76.2511 386.204 76.2815C385.862 76.3119 385.573 76.2587 385.322 76.1219C385.072 75.9851 384.882 75.7875 384.745 75.5215C384.608 75.2555 384.532 74.9439 384.524 74.5943C384.524 74.5107 384.547 74.4271 384.585 74.3435C384.623 74.2599 384.669 74.2067 384.714 74.1763L385.908 73.4847C385.991 73.4391 386.06 73.4163 386.105 73.4163C386.151 73.4239 386.204 73.4391 386.25 73.4771C386.272 73.4999 386.31 73.5379 386.356 73.5987C386.402 73.6519 386.47 73.7051 386.554 73.7431C386.637 73.7811 386.736 73.8039 386.865 73.7963C386.987 73.7887 387.146 73.7355 387.329 73.6291C387.648 73.4391 387.922 73.2339 388.134 72.9983C388.347 72.7627 388.461 72.5119 388.461 72.2307C388.461 72.0939 388.423 71.9951 388.34 71.9495C388.264 71.9039 388.142 71.8811 387.982 71.8963C387.823 71.9115 387.625 71.9495 387.374 72.0179C387.131 72.0863 386.835 72.1623 386.5 72.2383C385.877 72.3903 385.414 72.3143 385.125 71.9951C384.836 71.6759 384.692 71.1211 384.692 70.3155C384.692 69.9127 384.752 69.4947 384.866 69.0615C384.988 68.6283 385.155 68.2027 385.383 67.7923C385.611 67.3819 385.877 67.0019 386.196 66.6523C386.538 66.3255 386.896 66.0367 387.291 65.8087Z"
                        fill="#FAFAFA" />
                    <path
                        d="M338.316 42.6367V112.42C338.316 113.347 337.663 114.472 336.865 114.928L296.775 138.055C296.607 138.154 296.44 138.199 296.296 138.192C296.235 138.192 296.174 138.184 296.113 138.169C296.068 138.161 296.03 138.146 295.992 138.123C295.961 138.108 295.931 138.093 295.863 138.055C295.733 137.979 295.581 137.774 295.483 137.568C295.391 137.386 295.331 137.105 295.331 136.839V67.4204C295.331 66.5008 295.984 65.3683 296.782 64.9123L336.872 41.8083C337.245 41.5955 337.587 41.5575 337.845 41.6867C337.891 41.7095 337.929 41.7323 337.967 41.7551C337.974 41.7627 337.974 41.7627 337.974 41.7627C338.012 41.7931 338.043 41.8235 338.073 41.8615C338.096 41.8767 338.103 41.8919 338.119 41.9147C338.141 41.9375 338.157 41.9604 338.164 41.9908C338.202 42.0516 338.233 42.1123 338.248 42.1731C338.263 42.2111 338.278 42.2568 338.278 42.3024C338.286 42.31 338.286 42.3175 338.286 42.3327C338.301 42.3783 338.309 42.4163 338.309 42.4695C338.316 42.5151 338.316 42.5759 338.316 42.6367Z"
                        fill="#455A64" />
                    <path
                        d="M337.845 41.679C337.587 41.5574 337.245 41.5878 336.872 41.8006L296.782 64.9046C295.984 65.3682 295.331 66.493 295.331 67.4126V72.1474L291.607 70.0042V65.2998C291.607 64.3802 292.253 63.2554 293.051 62.7918L333.148 39.6878C333.559 39.4446 333.931 39.437 334.197 39.6042C334.463 39.7714 337.533 41.5194 337.845 41.679Z"
                        fill="#27DEBF" />
                    <path
                        d="M338.316 42.6286C338.309 41.7166 337.663 41.3442 336.865 41.8002L296.775 64.9042C295.977 65.3678 295.323 66.4926 295.323 67.4122V72.1546L338.309 47.3786V42.6286H338.316Z"
                        fill="#27DEBF" />
                    <g opacity="0.5">
                        <path
                            d="M336.865 41.8007L296.775 64.9047C296.38 65.1403 296.015 65.5279 295.756 65.9839L292.048 63.8559C292.306 63.4075 292.663 63.0199 293.058 62.7995L333.148 39.6955C333.566 39.4523 333.931 39.4523 334.205 39.6119C334.463 39.7715 337.541 41.5119 337.845 41.6791C337.579 41.5575 337.237 41.5879 336.865 41.8007Z"
                            fill="white" />
                    </g>
                    <path opacity="0.15"
                        d="M291.607 70.0191V65.3071C291.607 64.8359 291.782 64.3191 292.048 63.8555L295.764 65.9759C295.498 66.4319 295.331 66.9487 295.331 67.4123V72.1547L291.607 70.0191Z"
                        fill="black" />
                    <path
                        d="M330.093 47.7209C329.645 47.9793 329.272 48.7545 329.272 49.4537C329.272 50.1529 329.637 50.5025 330.093 50.2441C330.549 49.9857 330.914 49.2105 330.914 48.5113C330.914 47.8121 330.549 47.4549 330.093 47.7209Z"
                        fill="#455A64" />
                    <path
                        d="M333.042 46.0108C332.586 46.2692 332.221 47.0444 332.221 47.7436C332.221 48.4428 332.586 48.7924 333.042 48.534C333.49 48.2756 333.863 47.5004 333.863 46.8012C333.863 46.102 333.49 45.7524 333.042 46.0108Z"
                        fill="#455A64" />
                    <path
                        d="M335.991 44.3087C335.542 44.5671 335.17 45.3423 335.17 46.0415C335.17 46.7407 335.535 47.0903 335.991 46.8319C336.447 46.5735 336.812 45.7983 336.812 45.0991C336.812 44.3999 336.439 44.0503 335.991 44.3087Z"
                        fill="#455A64" />
                    <path
                        d="M295.863 138.07C295.809 138.039 295.749 138.001 295.68 137.963C295.544 137.88 292.245 135.987 292.215 135.972C291.987 135.835 291.827 135.592 291.774 135.478C291.667 135.258 291.607 134.992 291.607 134.711V70.0117L295.331 72.1549V136.846C295.346 137.135 295.384 137.378 295.483 137.576C295.642 137.91 295.847 138.062 295.863 138.07Z"
                        fill="#37474F" />
                    <path
                        d="M298.956 76.0314C298.956 75.9402 298.979 75.849 299.032 75.7578L300.088 73.5766C300.103 73.5462 300.119 73.5234 300.134 73.5158C300.149 73.5082 300.157 73.5006 300.164 73.493C300.195 73.4778 300.225 73.4778 300.248 73.5006C300.271 73.5234 300.286 73.5614 300.286 73.607V74.3366C300.286 74.4278 300.278 74.5038 300.263 74.5646C300.248 74.6254 300.225 74.6862 300.187 74.7622L299.632 75.9174L300.187 76.4266C300.225 76.4646 300.248 76.495 300.263 76.5406C300.278 76.5786 300.286 76.647 300.286 76.7458V77.4754C300.286 77.521 300.271 77.5742 300.248 77.6198C300.225 77.6654 300.195 77.7034 300.164 77.7186C300.164 77.7186 300.149 77.7262 300.134 77.7262C300.119 77.7338 300.103 77.7262 300.088 77.7186L299.032 76.7534C298.979 76.7154 298.956 76.6546 298.956 76.5634V76.0314Z"
                        fill="#27DEBF" />
                    <path
                        d="M302.809 70.559C302.824 70.4906 302.855 70.4146 302.885 70.3462C302.923 70.2702 302.969 70.217 303.037 70.179L303.432 69.951C303.463 69.9358 303.493 69.9358 303.516 69.9586C303.539 69.9814 303.554 70.0194 303.554 70.065C303.554 70.0878 303.554 70.1106 303.546 70.1486L301.737 77.8398C301.722 77.9006 301.699 77.969 301.661 78.045C301.623 78.121 301.57 78.1818 301.502 78.2198L301.122 78.4402C301.091 78.4554 301.061 78.4554 301.038 78.4326C301.015 78.4098 301 78.3718 301 78.3262C301 78.3034 301 78.2806 301.008 78.2426L302.809 70.559Z"
                        fill="#27DEBF" />
                    <path
                        d="M305.606 72.7323C305.606 72.8235 305.583 72.9071 305.53 73.0059L304.473 75.1871C304.458 75.2175 304.443 75.2403 304.428 75.2555C304.413 75.2631 304.405 75.2707 304.405 75.2783C304.375 75.2935 304.344 75.2935 304.321 75.2707C304.299 75.2479 304.283 75.2099 304.283 75.1643V74.4347C304.283 74.3435 304.291 74.2675 304.306 74.2067C304.321 74.1459 304.344 74.0851 304.382 74.0091L304.937 72.8539L304.382 72.3447C304.344 72.3067 304.321 72.2763 304.306 72.2307C304.291 72.1927 304.283 72.1243 304.283 72.0255V71.2959C304.283 71.2503 304.291 71.1971 304.321 71.1515C304.344 71.1059 304.375 71.0679 304.405 71.0527C304.405 71.0527 304.42 71.0451 304.428 71.0451C304.443 71.0375 304.458 71.0451 304.473 71.0527L305.53 72.0179C305.583 72.0559 305.606 72.1167 305.606 72.2079V72.7323Z"
                        fill="#27DEBF" />
                    <path
                        d="M308.532 72.2311C308.57 72.2083 308.608 72.2083 308.631 72.2387C308.661 72.2691 308.676 72.3071 308.676 72.3679V73.1735C308.676 73.2343 308.661 73.2951 308.631 73.3559C308.6 73.4167 308.57 73.4547 308.532 73.4775L308.038 73.7663C308 73.7891 307.962 73.7891 307.939 73.7587C307.909 73.7283 307.893 73.6903 307.893 73.6295V72.8239C307.893 72.7631 307.909 72.7023 307.939 72.6415C307.969 72.5807 308 72.5427 308.038 72.5199L308.532 72.2311Z"
                        fill="#27DEBF" />
                    <path
                        d="M310.196 71.2663C310.234 71.2435 310.272 71.2435 310.295 71.2739C310.325 71.3043 310.341 71.3423 310.341 71.4031V72.2086C310.341 72.2694 310.325 72.3303 310.295 72.3911C310.265 72.4519 310.234 72.4899 310.196 72.5127L309.702 72.8015C309.664 72.8243 309.626 72.8243 309.603 72.7939C309.573 72.7635 309.558 72.7255 309.558 72.6647V71.8591C309.558 71.7983 309.573 71.7375 309.603 71.6767C309.634 71.6159 309.664 71.5779 309.702 71.5551L310.196 71.2663Z"
                        fill="#27DEBF" />
                    <path
                        d="M311.853 70.3082C311.891 70.2854 311.929 70.2854 311.952 70.3158C311.982 70.3462 311.997 70.3842 311.997 70.445V71.2506C311.997 71.3114 311.982 71.3722 311.952 71.433C311.921 71.4938 311.891 71.5318 311.853 71.5546L311.359 71.8434C311.321 71.8662 311.283 71.8662 311.26 71.8358C311.23 71.8054 311.215 71.7674 311.215 71.7066V70.901C311.215 70.8402 311.23 70.7794 311.26 70.7186C311.291 70.6578 311.321 70.6198 311.359 70.597L311.853 70.3082Z"
                        fill="#27DEBF" />
                    <path
                        d="M299.397 81.9057L323.747 67.8457C324.036 67.6785 324.264 67.8001 324.264 68.1117C324.264 68.4233 324.028 68.8109 323.747 68.9781L299.397 83.0381C299.108 83.2053 298.88 83.0837 298.88 82.7721C298.88 82.4605 299.108 82.0729 299.397 81.9057Z"
                        fill="#27DEBF" />
                    <path
                        d="M307.209 90.9262L331.56 76.8662C331.849 76.699 332.077 76.8206 332.077 77.1322C332.077 77.4438 331.841 77.8314 331.56 77.9986L307.209 92.0586C306.921 92.2258 306.693 92.1042 306.693 91.7926C306.693 91.481 306.921 91.0934 307.209 90.9262Z"
                        fill="#F28F8F" />
                    <path
                        d="M307.21 99.9477L318.868 93.2217C319.157 93.0545 319.385 93.1761 319.385 93.4877C319.385 93.7993 319.149 94.1869 318.868 94.3541L307.217 101.08C306.928 101.247 306.7 101.126 306.7 100.814C306.693 100.502 306.921 100.115 307.21 99.9477Z"
                        fill="#F28F8F" />
                    <path
                        d="M325.769 66.6826L335.466 61.0586C335.755 60.8914 335.983 61.013 335.983 61.3246C335.983 61.6362 335.748 62.0238 335.466 62.191L325.769 67.815C325.48 67.9822 325.252 67.8606 325.252 67.549C325.252 67.2374 325.48 66.8498 325.769 66.6826Z"
                        fill="#27DEBF" />
                    <path
                        d="M299.397 131.518L323.747 117.458C324.036 117.291 324.264 117.412 324.264 117.724C324.264 118.036 324.028 118.423 323.747 118.59L299.397 132.65C299.108 132.818 298.88 132.696 298.88 132.384C298.88 132.073 299.108 131.685 299.397 131.518Z"
                        fill="#27DEBF" />
                    <path
                        d="M325.769 116.296L335.466 110.672C335.755 110.505 335.983 110.626 335.983 110.938C335.983 111.249 335.747 111.637 335.466 111.804L325.769 117.428C325.48 117.595 325.252 117.474 325.252 117.162C325.244 116.851 325.48 116.463 325.769 116.296Z"
                        fill="#27DEBF" />
                    <path
                        d="M325.769 102.79L335.466 97.166C335.755 96.9988 335.983 97.1204 335.983 97.432C335.983 97.7436 335.747 98.1312 335.466 98.2984L325.769 103.922C325.48 104.09 325.252 103.968 325.252 103.656C325.244 103.337 325.48 102.957 325.769 102.79Z"
                        fill="#27DEBF" />
                    <path
                        d="M325.769 107.297L335.466 101.673C335.755 101.506 335.983 101.627 335.983 101.939C335.983 102.25 335.747 102.638 335.466 102.805L325.769 108.429C325.48 108.596 325.252 108.475 325.252 108.163C325.244 107.852 325.48 107.464 325.769 107.297Z"
                        fill="#27DEBF" />
                    <path
                        d="M317.492 107.548L322.942 104.401C323.23 104.234 323.458 104.356 323.458 104.667C323.458 104.979 323.223 105.367 322.942 105.534L317.492 108.68C317.204 108.847 316.976 108.726 316.976 108.414C316.976 108.103 317.204 107.715 317.492 107.548Z"
                        fill="#27DEBF" />
                    <path
                        d="M299.397 86.4277L313.601 78.2197C313.89 78.0525 314.118 78.1741 314.118 78.4857C314.118 78.7973 313.882 79.1849 313.601 79.3521L299.397 87.5601C299.108 87.7197 298.88 87.6057 298.88 87.2941C298.88 86.9825 299.108 86.5949 299.397 86.4277Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M299.397 86.4277L313.601 78.2197C313.89 78.0525 314.118 78.1741 314.118 78.4857C314.118 78.7973 313.882 79.1849 313.601 79.3521L299.397 87.5601C299.108 87.7197 298.88 87.6057 298.88 87.2941C298.88 86.9825 299.108 86.5949 299.397 86.4277Z"
                        fill="white" />
                    <path
                        d="M299.397 90.9261L304.215 88.1445C304.504 87.9773 304.732 88.0989 304.732 88.4105C304.732 88.7221 304.496 89.1097 304.215 89.2769L299.397 92.0585C299.108 92.2257 298.88 92.1041 298.88 91.7925C298.88 91.4809 299.108 91.0933 299.397 90.9261Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M299.397 90.9261L304.215 88.1445C304.504 87.9773 304.732 88.0989 304.732 88.4105C304.732 88.7221 304.496 89.1097 304.215 89.2769L299.397 92.0585C299.108 92.2257 298.88 92.1041 298.88 91.7925C298.88 91.4809 299.108 91.0933 299.397 90.9261Z"
                        fill="white" />
                    <path
                        d="M299.397 95.4408L304.215 92.6592C304.504 92.492 304.732 92.6136 304.732 92.9252C304.732 93.2368 304.496 93.6244 304.215 93.7916L299.397 96.5732C299.108 96.7404 298.88 96.6188 298.88 96.3072C298.88 95.9956 299.108 95.608 299.397 95.4408Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M299.397 95.4408L304.215 92.6592C304.504 92.492 304.732 92.6136 304.732 92.9252C304.732 93.2368 304.496 93.6244 304.215 93.7916L299.397 96.5732C299.108 96.7404 298.88 96.6188 298.88 96.3072C298.88 95.9956 299.108 95.608 299.397 95.4408Z"
                        fill="white" />
                    <path
                        d="M299.397 99.9476L304.215 97.166C304.504 96.9988 304.732 97.1204 304.732 97.432C304.732 97.7436 304.496 98.1312 304.215 98.2984L299.397 101.08C299.108 101.247 298.88 101.126 298.88 100.814C298.88 100.502 299.108 100.115 299.397 99.9476Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M299.397 99.9476L304.215 97.166C304.504 96.9988 304.732 97.1204 304.732 97.432C304.732 97.7436 304.496 98.1312 304.215 98.2984L299.397 101.08C299.108 101.247 298.88 101.126 298.88 100.814C298.88 100.502 299.108 100.115 299.397 99.9476Z"
                        fill="white" />
                    <path
                        d="M307.209 95.4414L321.414 87.2334C321.703 87.0662 321.931 87.1878 321.931 87.4994C321.931 87.811 321.695 88.1986 321.414 88.3658L307.209 96.5738C306.921 96.741 306.693 96.6194 306.693 96.3078C306.693 95.9886 306.921 95.6086 307.209 95.4414Z"
                        fill="#27DEBF" />
                    <path
                        d="M323.436 86.0705L329.614 82.5137C329.903 82.3465 330.131 82.4681 330.131 82.7797C330.131 83.0913 329.896 83.4789 329.614 83.6461L323.436 87.2029C323.147 87.3701 322.919 87.2485 322.911 86.9369C322.911 86.6177 323.147 86.2301 323.436 86.0705Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M307.209 95.4414L321.414 87.2334C321.703 87.0662 321.931 87.1878 321.931 87.4994C321.931 87.811 321.695 88.1986 321.414 88.3658L307.209 96.5738C306.921 96.741 306.693 96.6194 306.693 96.3078C306.693 95.9886 306.921 95.6086 307.209 95.4414Z"
                        fill="white" />
                    <path opacity="0.6"
                        d="M323.436 86.0705L329.614 82.5137C329.903 82.3465 330.131 82.4681 330.131 82.7797C330.131 83.0913 329.896 83.4789 329.614 83.6461L323.436 87.2029C323.147 87.3701 322.919 87.2485 322.911 86.9369C322.911 86.6177 323.147 86.2301 323.436 86.0705Z"
                        fill="white" />
                    <path
                        d="M299.397 104.462L304.215 101.681C304.504 101.513 304.732 101.635 304.732 101.947C304.732 102.258 304.496 102.646 304.215 102.813L299.397 105.595C299.108 105.762 298.88 105.64 298.88 105.329C298.88 105.017 299.108 104.629 299.397 104.462Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M299.397 104.462L304.215 101.681C304.504 101.513 304.732 101.635 304.732 101.947C304.732 102.258 304.496 102.646 304.215 102.813L299.397 105.595C299.108 105.762 298.88 105.64 298.88 105.329C298.88 105.017 299.108 104.629 299.397 104.462Z"
                        fill="white" />
                    <path
                        d="M299.397 118.234L304.215 115.452C304.504 115.285 304.732 115.407 304.732 115.718C304.732 116.03 304.496 116.417 304.215 116.585L299.397 119.366C299.108 119.533 298.88 119.412 298.88 119.1C298.88 118.781 299.108 118.401 299.397 118.234Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M299.397 118.234L304.215 115.452C304.504 115.285 304.732 115.407 304.732 115.718C304.732 116.03 304.496 116.417 304.215 116.585L299.397 119.366C299.108 119.533 298.88 119.412 298.88 119.1C298.88 118.781 299.108 118.401 299.397 118.234Z"
                        fill="white" />
                    <path
                        d="M299.397 122.741L304.215 119.959C304.504 119.792 304.732 119.913 304.732 120.225C304.732 120.537 304.496 120.924 304.215 121.091L299.397 123.873C299.108 124.04 298.88 123.919 298.88 123.607C298.88 123.295 299.108 122.908 299.397 122.741Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M299.397 122.741L304.215 119.959C304.504 119.792 304.732 119.913 304.732 120.225C304.732 120.537 304.496 120.924 304.215 121.091L299.397 123.873C299.108 124.04 298.88 123.919 298.88 123.607C298.88 123.295 299.108 122.908 299.397 122.741Z"
                        fill="white" />
                    <path
                        d="M299.397 127.254L304.215 124.473C304.504 124.305 304.732 124.427 304.732 124.739C304.732 125.05 304.496 125.438 304.215 125.605L299.397 128.387C299.108 128.554 298.88 128.432 298.88 128.121C298.88 127.801 299.108 127.421 299.397 127.254Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M299.397 127.254L304.215 124.473C304.504 124.305 304.732 124.427 304.732 124.739C304.732 125.05 304.496 125.438 304.215 125.605L299.397 128.387C299.108 128.554 298.88 128.432 298.88 128.121C298.88 127.801 299.108 127.421 299.397 127.254Z"
                        fill="white" />
                    <path
                        d="M315.623 77.0568L321.802 73.5C322.09 73.3328 322.318 73.4544 322.318 73.766C322.318 74.0776 322.083 74.4652 321.802 74.6324L315.623 78.1892C315.334 78.3564 315.098 78.2348 315.098 77.9232C315.098 77.6116 315.334 77.224 315.623 77.0568Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M315.623 77.0568L321.802 73.5C322.09 73.3328 322.318 73.4544 322.318 73.766C322.318 74.0776 322.083 74.4652 321.802 74.6324L315.623 78.1892C315.334 78.3564 315.098 78.2348 315.098 77.9232C315.098 77.6116 315.334 77.224 315.623 77.0568Z"
                        fill="white" />
                    <path
                        d="M313.069 101.072L327.273 92.8643C327.562 92.6971 327.79 92.8187 327.79 93.1303C327.79 93.4419 327.555 93.8295 327.273 93.9967L313.069 102.205C312.78 102.372 312.552 102.25 312.552 101.939C312.552 101.619 312.78 101.239 313.069 101.072Z"
                        fill="#FFA8A7" />
                    <path
                        d="M321.262 100.867L335.466 92.6592C335.755 92.492 335.983 92.6136 335.983 92.9252C335.983 93.2368 335.748 93.6244 335.466 93.7916L321.262 102C320.973 102.167 320.745 102.045 320.745 101.734C320.745 101.422 320.981 101.034 321.262 100.867Z"
                        fill="#FFA8A7" />
                    <path
                        d="M329.295 91.7013L335.474 88.1445C335.763 87.9773 335.991 88.0989 335.991 88.4105C335.991 88.7221 335.755 89.1097 335.474 89.2769L329.295 92.8337C329.006 93.0009 328.778 92.8793 328.778 92.5677C328.771 92.2485 329.006 91.8609 329.295 91.7013Z"
                        fill="#FFA8A7" />
                    <path
                        d="M329.295 109.562L335.474 106.005C335.763 105.838 335.991 105.959 335.991 106.271C335.991 106.582 335.755 106.97 335.474 107.137L329.295 110.694C329.006 110.861 328.778 110.74 328.778 110.428C328.771 110.116 329.006 109.729 329.295 109.562Z"
                        fill="#F28F8F" />
                    <path
                        d="M307.209 86.4199L321.414 78.2119C321.703 78.0447 321.931 78.1663 321.931 78.4779C321.931 78.7895 321.695 79.1771 321.414 79.3443L307.209 87.5523C306.921 87.7195 306.693 87.5979 306.693 87.2863C306.693 86.9747 306.921 86.5871 307.209 86.4199Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M307.209 86.4199L321.414 78.2119C321.703 78.0447 321.931 78.1663 321.931 78.4779C321.931 78.7895 321.695 79.1771 321.414 79.3443L307.209 87.5523C306.921 87.7195 306.693 87.5979 306.693 87.2863C306.693 86.9747 306.921 86.5871 307.209 86.4199Z"
                        fill="white" />
                    <path
                        d="M323.436 77.049L329.614 73.4922C329.903 73.325 330.131 73.4466 330.131 73.7582C330.131 74.0698 329.896 74.4574 329.614 74.6246L323.436 78.1814C323.147 78.3486 322.919 78.227 322.911 77.9154C322.911 77.6038 323.147 77.2162 323.436 77.049Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M323.436 77.049L329.614 73.4922C329.903 73.325 330.131 73.4466 330.131 73.7582C330.131 74.0698 329.896 74.4574 329.614 74.6246L323.436 78.1814C323.147 78.3486 322.919 78.227 322.911 77.9154C322.911 77.6038 323.147 77.2162 323.436 77.049Z"
                        fill="white" />
                    <path
                        d="M291.629 112.116L283.482 120.271C282.783 120.879 283.003 121.852 283.642 122.255C283.908 122.422 286.674 123.972 287.282 124.383C287.556 124.565 287.913 124.641 288.301 124.535L295.3 122.749V114.267L291.629 112.116Z"
                        fill="#37474F" />
                    <path
                        d="M295.3 114.267L287.153 122.421C286.157 123.288 287.031 124.899 288.301 124.534L295.3 122.748V114.267Z"
                        fill="#455A64" />
                </svg>
            </div>

            <div class="flex flex-col items-start md: items-end">
                <p class="text-4xl text-white font-bold text-end mb-10">Tim Tugas Akhir</p>
                <p class="text-xl text-white font  text-end mb-10">Tim pembentuk dan pengembang Tugas Akhir <br>
                    Teknologi Rekayasa Perangkat Lunak</p>
                <button onclick="window.location.href='{{ route('public.team') }}'"
                    class="flex items-center justify-center w-auto h-auto ps-12 pe-8 py-4 bg-white hover:bg-slate-300 rounded-xl">
                    <p class="text-teal-800 font-bold text-center text-xl">Read More</p>
                    <img class="ms-6 w-12 h-auto" src="{{ asset('asset/dashboard/button_g.png') }}" alt="">
                </button>
            </div>

            
        </div>

        <div class="flex flex-col md:flex-row items-center justify-center gap-20 mt-20">


            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="502" height="408" viewBox="0 0 502 408"
                    fill="none">
                    <rect width="502" height="408" rx="10" fill="white" />
                    <path
                        d="M120.858 353.151C48.9845 311.655 48.9845 244.372 120.858 202.876C192.731 161.38 309.269 161.38 381.142 202.876C453.016 244.372 453.016 311.655 381.142 353.151C309.269 394.647 192.731 394.647 120.858 353.151Z"
                        fill="#F5F5F5" />
                    <path
                        d="M375.009 336.962C397.604 336.962 415.92 326.387 415.92 313.341C415.92 300.296 397.604 289.721 375.009 289.721C352.415 289.721 334.098 300.296 334.098 313.341C334.098 326.387 352.415 336.962 375.009 336.962Z"
                        fill="#E0E0E0" />
                    <path
                        d="M285.177 317.85L216.534 278.216C214.809 277.22 214.809 275.601 216.534 274.606L324.12 212.491C325.845 211.495 328.642 211.495 330.367 212.491L399.01 252.125C400.735 253.12 400.735 254.739 399.01 255.735L291.424 317.85C289.699 318.845 286.902 318.845 285.177 317.85Z"
                        fill="#E0E0E0" />
                    <path
                        d="M157.588 338.278C156.228 338.278 155.004 337.267 154.746 335.929L154.085 332.448C152.557 332.167 151.075 331.802 149.669 331.369C149.662 331.369 149.57 331.369 149.555 331.377L143.43 334.219C143.004 334.417 142.51 334.516 142.001 334.516C141.37 334.516 140.754 334.356 140.26 334.075L134.158 330.548C133.405 330.115 132.926 329.363 132.888 328.542C132.85 327.721 133.246 326.923 133.952 326.414L137.654 323.754C137.312 323.298 137 322.834 136.726 322.356L128.944 321.862C127.477 321.77 126.337 320.547 126.337 319.08V314.543C126.337 313.076 127.485 311.86 128.944 311.761L136.726 311.267C137 310.796 137.312 310.325 137.654 309.869L133.96 307.209C133.253 306.7 132.858 305.909 132.896 305.081C132.934 304.26 133.413 303.508 134.165 303.074L140.268 299.548C140.762 299.259 141.378 299.107 142.008 299.107C142.518 299.107 143.012 299.214 143.437 299.404L149.563 302.246C149.586 302.246 149.608 302.254 149.646 302.254C149.662 302.254 149.646 302.261 149.624 302.269C151.045 301.828 152.542 301.456 154.092 301.167L154.754 297.686C155.004 296.348 156.228 295.33 157.596 295.33H166.572C167.94 295.33 169.156 296.341 169.414 297.686L170.075 301.159C171.603 301.44 173.085 301.805 174.491 302.238C174.498 302.238 174.582 302.238 174.605 302.231L180.73 299.388C181.156 299.191 181.65 299.092 182.159 299.092C182.79 299.092 183.406 299.252 183.9 299.533L190.002 303.059C190.755 303.492 191.234 304.245 191.272 305.066C191.31 305.886 190.914 306.684 190.208 307.194L186.506 309.854C186.848 310.31 187.16 310.773 187.434 311.252L195.216 311.746C196.675 311.837 197.823 313.061 197.823 314.528V319.065C197.823 320.532 196.675 321.748 195.216 321.846L187.434 322.34C187.16 322.819 186.848 323.283 186.506 323.739L190.2 326.399C190.907 326.908 191.302 327.698 191.264 328.527C191.226 329.348 190.747 330.1 189.995 330.533L183.892 334.06C183.398 334.341 182.782 334.5 182.152 334.5C181.642 334.5 181.148 334.394 180.723 334.204L174.597 331.362C174.574 331.362 174.552 331.354 174.514 331.354C174.491 331.354 174.514 331.346 174.536 331.339C173.115 331.78 171.618 332.152 170.068 332.441L169.406 335.922C169.156 337.259 167.932 338.278 166.564 338.278H157.588ZM162.072 312.711C158.516 312.711 155.202 313.494 152.74 314.915C150.65 316.124 149.456 317.666 149.456 319.164C149.456 320.661 150.657 322.204 152.74 323.412C155.202 324.833 158.516 325.616 162.072 325.616C165.629 325.616 168.943 324.833 171.398 323.412C173.488 322.204 174.688 320.661 174.688 319.164C174.688 317.666 173.488 316.124 171.398 314.915C168.943 313.494 165.629 312.711 162.072 312.711Z"
                        fill="#E0E0E0" />
                    <path
                        d="M226.741 343.423C226.543 343.423 226.353 343.4 226.171 343.362L219.642 341.796C218.958 341.637 218.388 341.181 218.084 340.542C217.773 339.881 217.788 339.106 218.13 338.43L219.118 336.461C218.518 336.134 217.948 335.785 217.408 335.412L211.533 336.4C211.374 336.431 211.199 336.446 211.024 336.446C210.089 336.446 209.238 336.051 208.752 335.382C208.752 335.382 206.935 332.836 206.213 331.848C205.491 330.852 205.833 329.849 205.833 329.849C205.879 329.697 205.947 329.545 206.031 329.401L206.076 329.325C206.38 328.838 206.882 328.466 207.49 328.268L212.02 326.84C212.02 326.695 212.02 326.543 212.02 326.399L207.353 324.917C206.54 324.651 205.97 323.99 205.818 323.192L205.78 323.07V322.979L205.772 322.948L205.78 322.758C205.78 322.242 205.947 321.732 206.266 321.292L208.622 318.001C209.177 317.233 210.12 316.754 211.024 316.754C211.168 316.754 211.305 316.77 211.434 316.785L217.408 317.788C217.416 317.788 217.423 317.78 217.423 317.78C217.818 317.507 218.274 317.218 218.761 316.937C218.875 316.868 218.989 316.808 219.103 316.747L218.046 314.649C217.879 314.3 217.811 313.973 217.818 313.638C217.826 312.574 218.609 311.655 219.756 311.381L226.026 309.884C226.262 309.823 226.513 309.8 226.771 309.8C227.592 309.8 228.344 310.097 228.838 310.614L231.559 313.479C232.152 313.448 232.783 313.426 233.414 313.426C234.06 313.426 234.721 313.441 235.382 313.479L237.951 310.773C238.528 310.165 239.395 309.785 240.208 309.785C240.413 309.785 240.618 309.808 240.816 309.861L247.322 311.412C248.294 311.655 248.963 312.422 249.085 313.365L249.108 313.456V313.722C249.092 314.125 248.994 314.49 248.826 314.809L247.846 316.747C247.952 316.8 248.059 316.861 248.158 316.922C248.652 317.203 249.115 317.492 249.548 317.796L255.423 316.808C255.59 316.777 255.765 316.77 255.932 316.77C256.875 316.77 257.726 317.172 258.212 317.841L260.812 321.466C261.07 321.808 261.222 322.264 261.222 322.728V322.789L261.214 322.85C261.161 323.822 260.462 324.651 259.436 324.97L254.937 326.399C254.937 326.543 254.937 326.695 254.937 326.84L259.603 328.314C260.538 328.603 261.176 329.469 261.184 330.457C261.176 330.982 261.017 331.468 260.72 331.894L258.334 335.215C257.794 335.967 256.852 336.461 255.94 336.461C255.796 336.461 255.651 336.446 255.514 336.423L249.548 335.42C249.548 335.42 249.541 335.42 249.541 335.428C249.016 335.792 248.446 336.142 247.846 336.469L248.902 338.566C249.206 339.174 249.214 339.866 248.933 340.474C248.629 341.143 247.998 341.637 247.223 341.834L240.93 343.332C240.694 343.392 240.436 343.423 240.178 343.423C239.357 343.423 238.604 343.126 238.118 342.61L235.39 339.737C234.789 339.767 234.136 339.79 233.49 339.79C232.851 339.79 232.205 339.775 231.559 339.737L228.99 342.442C228.428 343.05 227.562 343.423 226.741 343.423ZM224.681 324.856C224.628 324.917 224.575 324.985 224.522 325.046C224.453 325.137 224.4 325.213 224.347 325.289C224.324 325.327 224.225 325.487 224.225 325.487C223.739 326.346 223.807 327.182 224.423 328.033C224.712 328.428 225.092 328.808 225.563 329.15C225.814 329.34 226.08 329.515 226.361 329.667C228.223 330.723 230.814 331.331 233.49 331.331C234.85 331.331 236.172 331.179 237.434 330.875C238.642 330.586 239.714 330.176 240.611 329.667C240.892 329.507 241.15 329.34 241.378 329.173C241.948 328.755 242.397 328.299 242.678 327.835L242.686 327.805L242.845 327.524L242.906 327.364C243.195 326.634 243.081 325.912 242.541 325.16C241.128 323.192 237.487 321.862 233.482 321.862C232.122 321.862 230.799 322.014 229.538 322.318C227.531 322.796 225.874 323.625 224.871 324.643L224.681 324.856Z"
                        fill="#E0E0E0" />
                    <path
                        d="M225.373 214.473L222.827 213.006C221.102 212.011 218.305 212.011 216.58 213.006L82.1736 290.61C80.456 291.606 80.456 293.224 82.1736 294.22L84.7196 295.687C86.4372 296.682 89.2492 296.682 90.9668 295.687L131.802 272.112L148.347 281.665C153.028 284.37 160.689 284.37 165.371 281.665L193.544 265.401C197.542 263.09 197.542 259.313 193.544 257.003L175.752 246.735L225.373 218.083C227.09 217.088 227.09 215.469 225.373 214.473Z"
                        fill="#E0E0E0" />
                    <g opacity="0.1">
                        <path
                            d="M230.579 82.8263L108.979 153.035V221.838C108.979 222.263 109.093 222.674 109.298 222.963C109.427 223.153 109.655 223.373 109.99 223.373C110.149 223.373 110.309 223.32 110.484 223.221L233.474 152.153V84.4983C233.474 82.6439 232.175 81.8991 230.579 82.8263Z"
                            fill="black" />
                    </g>
                    <path
                        d="M195.847 309.967V306.335C195.847 305.917 195.505 305.552 195.087 305.521L189.296 305.157V297.025H189.288C189.296 296.857 189.204 296.698 189.007 296.584L182.904 293.057C182.539 292.845 181.931 292.822 181.551 292.997L175.365 295.862C174.985 296.037 174.354 296.075 173.951 295.945C172.408 295.467 170.797 295.087 169.148 294.805C168.73 294.737 168.335 294.349 168.251 293.939L167.476 289.858C167.4 289.447 166.99 289.105 166.572 289.105H157.596C157.178 289.105 156.768 289.44 156.692 289.85L155.916 293.931C155.84 294.342 155.438 294.729 155.02 294.798C153.37 295.079 151.759 295.459 150.216 295.938C149.814 296.059 149.183 296.029 148.803 295.854L142.616 292.989C142.236 292.814 141.628 292.837 141.264 293.05L135.161 296.576C134.963 296.69 134.872 296.85 134.88 297.009C134.88 297.009 134.88 297.002 134.872 297.002L134.88 305.157L129.081 305.521C128.663 305.552 128.321 305.909 128.321 306.335V310.872V314.056V318.593V318.601C128.321 318.7 128.389 318.768 128.427 318.859C128.465 318.958 128.473 319.072 128.549 319.148C128.648 319.255 128.792 319.293 128.936 319.331C128.99 319.346 129.028 319.399 129.081 319.399L129.187 319.407L134.788 319.764L135.115 319.787L134.872 320.197V324.453V324.461V324.544V325.988V327.934C134.872 327.941 134.88 327.949 134.88 327.957C134.887 328.01 134.895 328.063 134.925 328.116C134.925 328.116 134.933 328.124 134.94 328.124C134.986 328.2 135.054 328.276 135.161 328.329L141.264 331.855C141.264 331.855 141.271 331.855 141.279 331.855C141.438 331.947 141.651 331.992 141.864 332.007C141.925 332.015 141.97 332.007 142.024 332.007C142.1 332.007 142.168 332.023 142.244 332.015V331.977C142.373 331.962 142.51 331.962 142.616 331.916L148.803 329.051C149.183 328.876 149.814 328.838 150.216 328.967C151.759 329.446 153.37 329.826 155.02 330.107C155.438 330.176 155.833 330.563 155.916 330.974L156.692 335.055C156.707 335.154 156.79 335.215 156.844 335.298V335.389C156.874 335.435 156.927 335.465 156.973 335.503C157.011 335.541 157.041 335.572 157.087 335.61C157.239 335.724 157.414 335.8 157.596 335.807H166.572C166.777 335.807 166.982 335.724 167.142 335.595C167.309 335.458 167.438 335.275 167.476 335.063L168.251 330.981C168.327 330.571 168.73 330.183 169.148 330.115C170.797 329.834 172.408 329.454 173.951 328.975C174.354 328.853 174.985 328.884 175.365 329.059L181.551 331.924C181.718 332 181.924 332.03 182.129 332.03V332.015C182.41 332.023 182.691 331.977 182.904 331.855L189.007 328.329C189.197 328.223 189.288 328.071 189.288 327.911V319.749L195.079 319.384C195.497 319.353 195.839 318.996 195.839 318.571L195.854 310.097C195.862 310.074 195.854 310.021 195.847 309.967ZM173.586 313.775C173.222 314.049 172.826 314.307 172.393 314.558C166.693 317.849 157.459 317.849 151.759 314.558C151.326 314.307 150.931 314.041 150.558 313.775C150.931 313.517 151.326 313.266 151.759 313.015C157.459 309.724 166.693 309.724 172.393 313.015C172.826 313.258 173.222 313.517 173.586 313.775Z"
                        fill="#27DEBF" />
                    <path opacity="0.2"
                        d="M195.847 309.967V306.335C195.847 305.917 195.505 305.552 195.087 305.521L189.296 305.157V297.025H189.288C189.296 296.857 189.204 296.698 189.007 296.584L182.904 293.057C182.539 292.845 181.931 292.822 181.551 292.997L175.365 295.862C174.985 296.037 174.354 296.075 173.951 295.945C172.408 295.467 170.797 295.087 169.148 294.805C168.73 294.737 168.335 294.349 168.251 293.939L167.476 289.858C167.4 289.447 166.99 289.105 166.572 289.105H157.596C157.178 289.105 156.768 289.44 156.692 289.85L155.916 293.931C155.84 294.342 155.438 294.729 155.02 294.798C153.37 295.079 151.759 295.459 150.216 295.938C149.814 296.059 149.183 296.029 148.803 295.854L142.616 292.989C142.236 292.814 141.628 292.837 141.264 293.05L135.161 296.576C134.963 296.69 134.872 296.85 134.88 297.009C134.88 297.009 134.88 297.002 134.872 297.002L134.88 305.157L129.081 305.521C128.663 305.552 128.321 305.909 128.321 306.335V310.872V314.056V318.593V318.601C128.321 318.7 128.389 318.768 128.427 318.859C128.465 318.958 128.473 319.072 128.549 319.148C128.648 319.255 128.792 319.293 128.936 319.331C128.99 319.346 129.028 319.399 129.081 319.399L129.187 319.407L134.788 319.764L135.115 319.787L134.872 320.197V324.453V324.461V324.544V325.988V327.934C134.872 327.941 134.88 327.949 134.88 327.957C134.887 328.01 134.895 328.063 134.925 328.116C134.925 328.116 134.933 328.124 134.94 328.124C134.986 328.2 135.054 328.276 135.161 328.329L141.264 331.855C141.264 331.855 141.271 331.855 141.279 331.855C141.438 331.947 141.651 331.992 141.864 332.007C141.925 332.015 141.97 332.007 142.024 332.007C142.1 332.007 142.168 332.023 142.244 332.015V331.977C142.373 331.962 142.51 331.962 142.616 331.916L148.803 329.051C149.183 328.876 149.814 328.838 150.216 328.967C151.759 329.446 153.37 329.826 155.02 330.107C155.438 330.176 155.833 330.563 155.916 330.974L156.692 335.055C156.707 335.154 156.79 335.215 156.844 335.298V335.389C156.874 335.435 156.927 335.465 156.973 335.503C157.011 335.541 157.041 335.572 157.087 335.61C157.239 335.724 157.414 335.8 157.596 335.807H166.572C166.777 335.807 166.982 335.724 167.142 335.595C167.309 335.458 167.438 335.275 167.476 335.063L168.251 330.981C168.327 330.571 168.73 330.183 169.148 330.115C170.797 329.834 172.408 329.454 173.951 328.975C174.354 328.853 174.985 328.884 175.365 329.059L181.551 331.924C181.718 332 181.924 332.03 182.129 332.03V332.015C182.41 332.023 182.691 331.977 182.904 331.855L189.007 328.329C189.197 328.223 189.288 328.071 189.288 327.911V319.749L195.079 319.384C195.497 319.353 195.839 318.996 195.839 318.571L195.854 310.097C195.862 310.074 195.854 310.021 195.847 309.967ZM173.586 313.775C173.222 314.049 172.826 314.307 172.393 314.558C166.693 317.849 157.459 317.849 151.759 314.558C151.326 314.307 150.931 314.041 150.558 313.775C150.931 313.517 151.326 313.266 151.759 313.015C157.459 309.724 166.693 309.724 172.393 313.015C172.826 313.258 173.222 313.517 173.586 313.775Z"
                        fill="black" />
                    <path
                        d="M141.256 293.057L135.153 296.584C134.788 296.797 134.773 297.161 135.115 297.412L139.956 300.893C140.298 301.136 140.329 301.577 140.048 301.889C139.341 302.664 138.763 303.462 138.322 304.283C138.125 304.655 137.646 304.989 137.22 305.012L129.081 305.529C128.663 305.559 128.321 305.917 128.321 306.342V310.879C128.321 311.297 128.663 311.662 129.081 311.693L137.22 312.209C137.638 312.24 138.117 312.567 138.322 312.939C138.771 313.76 139.341 314.565 140.048 315.333C140.329 315.645 140.298 316.078 139.956 316.329L135.115 319.809C134.773 320.053 134.796 320.425 135.153 320.638L141.256 324.164C141.621 324.377 142.229 324.4 142.609 324.225L148.795 321.36C149.175 321.185 149.814 321.147 150.209 321.276C151.752 321.755 153.363 322.135 155.012 322.416C155.43 322.485 155.825 322.872 155.909 323.283L156.684 327.364C156.76 327.774 157.17 328.109 157.588 328.109H166.564C166.982 328.109 167.392 327.774 167.468 327.364L168.244 323.283C168.32 322.872 168.722 322.485 169.14 322.416C170.79 322.135 172.401 321.755 173.944 321.276C174.346 321.147 174.977 321.185 175.357 321.36L181.544 324.225C181.924 324.4 182.532 324.377 182.896 324.164L188.999 320.638C189.364 320.425 189.379 320.06 189.037 319.809L184.196 316.329C183.854 316.085 183.824 315.645 184.105 315.333C184.812 314.558 185.389 313.76 185.83 312.939C186.028 312.567 186.506 312.232 186.932 312.209L195.072 311.693C195.49 311.67 195.832 311.305 195.832 310.879V306.342C195.832 305.924 195.49 305.559 195.072 305.529L186.932 305.012C186.514 304.982 186.035 304.655 185.83 304.283C185.382 303.462 184.812 302.656 184.105 301.889C183.824 301.577 183.854 301.144 184.196 300.893L189.037 297.412C189.379 297.169 189.364 296.797 188.999 296.584L182.896 293.057C182.532 292.845 181.924 292.822 181.544 292.997L175.357 295.862C174.977 296.037 174.346 296.075 173.944 295.945C172.401 295.467 170.79 295.087 169.14 294.805C168.722 294.737 168.327 294.349 168.244 293.939L167.468 289.858C167.392 289.447 166.982 289.105 166.564 289.105H157.588C157.17 289.105 156.76 289.44 156.684 289.85L155.909 293.931C155.833 294.342 155.43 294.729 155.012 294.798C153.363 295.079 151.752 295.459 150.209 295.938C149.806 296.059 149.175 296.029 148.795 295.854L142.609 292.989C142.221 292.814 141.621 292.845 141.256 293.057ZM172.393 302.649C178.093 305.939 178.093 311.275 172.393 314.558C166.693 317.849 157.459 317.849 151.759 314.558C146.059 311.267 146.059 305.939 151.759 302.649C157.459 299.358 166.693 299.358 172.393 302.649Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M135.108 319.795L137.54 318.04V312.271C137.426 312.226 137.312 312.195 137.205 312.188L129.066 311.671C128.648 311.648 128.306 311.283 128.306 310.865V318.61C128.313 319.028 128.655 319.377 129.066 319.408C129.066 319.408 129.066 319.408 129.073 319.408L129.18 319.415L133.808 319.712L135.108 319.795Z"
                        fill="black" />
                    <path opacity="0.15"
                        d="M149.259 321.223C149.084 321.245 148.924 321.283 148.788 321.344L142.601 324.209C142.381 324.308 142.084 324.339 141.803 324.308V332.037C141.94 332.053 142.084 332.053 142.221 332.037H142.229V331.999C142.358 331.984 142.502 331.984 142.601 331.939L148.795 329.073C148.924 329.013 149.099 328.997 149.259 328.967V321.223Z"
                        fill="black" />
                    <path opacity="0.15"
                        d="M156.798 327.637C156.745 327.545 156.699 327.447 156.684 327.348L155.909 323.267C155.886 323.16 155.848 323.054 155.787 322.955V330.692C155.848 330.783 155.886 330.889 155.909 330.996L156.684 335.077C156.699 335.153 156.752 335.214 156.798 335.275V327.637Z"
                        fill="black" />
                    <path opacity="0.15"
                        d="M168.365 322.963C168.304 323.062 168.266 323.16 168.244 323.267L167.468 327.348C167.446 327.454 167.408 327.553 167.354 327.644V335.374C167.408 335.282 167.453 335.184 167.468 335.085L168.244 331.004C168.259 330.905 168.304 330.814 168.365 330.722V322.963Z"
                        fill="black" />
                    <path opacity="0.15"
                        d="M182.342 324.308C182.06 324.339 181.772 324.308 181.551 324.209L175.357 321.344C175.228 321.283 175.061 321.245 174.894 321.223V328.952C175.061 328.975 175.228 329.013 175.357 329.073L181.551 331.939C181.718 332.015 181.916 332.045 182.129 332.053V332.037C182.197 332.037 182.273 332.037 182.342 332.03V324.308Z"
                        fill="black" />
                    <path
                        d="M207.634 322.933C207.634 323.26 207.642 329.363 207.642 329.537C207.642 329.591 207.657 329.651 207.695 329.705L210.294 333.322C210.446 333.535 210.872 333.664 211.244 333.603L217.226 332.593C217.598 332.532 218.077 332.615 218.297 332.775C218.753 333.102 219.24 333.406 219.749 333.695C219.749 333.695 219.741 338.551 219.756 338.657C219.779 338.832 219.901 338.969 220.091 339.015L226.604 340.573C226.908 340.649 227.379 340.474 227.653 340.185L230.336 337.358C230.609 337.069 231.096 336.864 231.438 336.879C232.783 336.963 234.151 336.97 235.519 336.887C235.876 336.864 236.317 337.001 236.507 337.191L239.501 340.345C239.691 340.542 240.14 340.626 240.52 340.535L246.782 339.037C247.094 338.961 247.291 338.764 247.276 338.566L247.268 333.679C247.702 333.429 248.112 333.17 248.492 332.904C248.834 332.676 249.351 332.517 249.67 332.57L255.841 333.611C256.153 333.664 256.594 333.459 256.814 333.155L259.178 329.864C259.269 329.735 259.314 329.598 259.314 329.484C259.307 329.37 259.307 327.432 259.307 324.727C259.337 324.681 259.352 324.628 259.36 324.575C259.36 324.521 259.345 315.728 259.345 315.181C259.345 315.173 259.345 315.166 259.345 315.151C259.345 315.097 259.33 315.037 259.292 314.991L256.692 311.373C256.54 311.161 256.115 311.031 255.742 311.1L249.761 312.103C249.389 312.164 248.918 312.08 248.69 311.921C248.234 311.594 247.747 311.282 247.238 310.993C247.238 308.729 247.23 306.395 247.23 306.129C247.23 306.122 247.23 306.114 247.23 306.107C247.23 305.901 247.109 305.734 246.896 305.673L240.383 304.115C240.079 304.039 239.608 304.214 239.334 304.503L236.651 307.323C236.378 307.611 235.891 307.824 235.549 307.801C234.204 307.718 232.836 307.71 231.468 307.794C231.111 307.817 230.67 307.68 230.48 307.49L227.486 304.336C227.303 304.146 226.847 304.055 226.475 304.146L220.205 305.643C219.901 305.719 219.711 305.901 219.711 306.099L219.703 306.091L219.711 311.001C219.285 311.244 218.867 311.51 218.487 311.776C218.145 312.004 217.628 312.171 217.309 312.111L211.138 311.077C210.826 311.024 210.386 311.229 210.165 311.533L207.802 314.824C207.71 314.945 207.672 315.075 207.672 315.189C207.672 315.196 207.672 315.196 207.672 315.204C207.672 315.493 207.672 320.106 207.68 322.766C207.657 322.811 207.642 322.857 207.634 322.91C207.634 322.918 207.634 322.918 207.634 322.933C207.634 322.925 207.634 322.925 207.634 322.933ZM241.546 323.739C240.52 324.324 239.288 324.81 237.875 325.145C233.49 326.193 228.626 325.555 225.441 323.746C225.092 323.549 224.765 323.336 224.461 323.108C224.742 322.91 225.046 322.72 225.373 322.53C229.849 319.946 237.1 319.946 241.576 322.53C241.91 322.72 242.222 322.918 242.503 323.123C242.214 323.336 241.888 323.549 241.546 323.739Z"
                        fill="#27DEBF" />
                    <path opacity="0.2"
                        d="M207.634 322.933C207.634 323.26 207.642 329.363 207.642 329.537C207.642 329.591 207.657 329.651 207.695 329.705L210.294 333.322C210.446 333.535 210.872 333.664 211.244 333.603L217.226 332.593C217.598 332.532 218.077 332.615 218.297 332.775C218.753 333.102 219.24 333.406 219.749 333.695C219.749 333.695 219.741 338.551 219.756 338.657C219.779 338.832 219.901 338.969 220.091 339.015L226.604 340.573C226.908 340.649 227.379 340.474 227.653 340.185L230.336 337.358C230.609 337.069 231.096 336.864 231.438 336.879C232.783 336.963 234.151 336.97 235.519 336.887C235.876 336.864 236.317 337.001 236.507 337.191L239.501 340.345C239.691 340.542 240.14 340.626 240.52 340.535L246.782 339.037C247.094 338.961 247.291 338.764 247.276 338.566L247.268 333.679C247.702 333.429 248.112 333.17 248.492 332.904C248.834 332.676 249.351 332.517 249.67 332.57L255.841 333.611C256.153 333.664 256.594 333.459 256.814 333.155L259.178 329.864C259.269 329.735 259.314 329.598 259.314 329.484C259.307 329.37 259.307 327.432 259.307 324.727C259.337 324.681 259.352 324.628 259.36 324.575C259.36 324.521 259.345 315.728 259.345 315.181C259.345 315.173 259.345 315.166 259.345 315.151C259.345 315.097 259.33 315.037 259.292 314.991L256.692 311.373C256.54 311.161 256.115 311.031 255.742 311.1L249.761 312.103C249.389 312.164 248.918 312.08 248.69 311.921C248.234 311.594 247.747 311.282 247.238 310.993C247.238 308.729 247.23 306.395 247.23 306.129C247.23 306.122 247.23 306.114 247.23 306.107C247.23 305.901 247.109 305.734 246.896 305.673L240.383 304.115C240.079 304.039 239.608 304.214 239.334 304.503L236.651 307.323C236.378 307.611 235.891 307.824 235.549 307.801C234.204 307.718 232.836 307.71 231.468 307.794C231.111 307.817 230.67 307.68 230.48 307.49L227.486 304.336C227.303 304.146 226.847 304.055 226.475 304.146L220.205 305.643C219.901 305.719 219.711 305.901 219.711 306.099L219.703 306.091L219.711 311.001C219.285 311.244 218.867 311.51 218.487 311.776C218.145 312.004 217.628 312.171 217.309 312.111L211.138 311.077C210.826 311.024 210.386 311.229 210.165 311.533L207.802 314.824C207.71 314.945 207.672 315.075 207.672 315.189C207.672 315.196 207.672 315.196 207.672 315.204C207.672 315.493 207.672 320.106 207.68 322.766C207.657 322.811 207.642 322.857 207.634 322.91C207.634 322.918 207.634 322.918 207.634 322.933C207.634 322.925 207.634 322.925 207.634 322.933ZM241.546 323.739C240.52 324.324 239.288 324.81 237.875 325.145C233.49 326.193 228.626 325.555 225.441 323.746C225.092 323.549 224.765 323.336 224.461 323.108C224.742 322.91 225.046 322.72 225.373 322.53C229.849 319.946 237.1 319.946 241.576 322.53C241.91 322.72 242.222 322.918 242.503 323.123C242.214 323.336 241.888 323.549 241.546 323.739Z"
                        fill="black" />
                    <path opacity="0.15"
                        d="M252.976 317.986C253.09 318.67 253.09 319.346 252.984 320.03C252.938 320.334 253.113 320.653 253.402 320.752L259.041 322.53C259.208 322.584 259.307 322.72 259.307 322.888C259.299 323.002 259.307 324.719 259.307 324.719C259.33 324.674 259.352 324.628 259.352 324.582C259.345 321.383 259.337 316.032 259.337 315.561V315.166C259.33 315.333 259.155 315.5 258.889 315.592L253.561 317.279C253.181 317.4 252.938 317.712 252.976 317.986Z"
                        fill="black" />
                    <path opacity="0.15"
                        d="M249.45 325.951V332.563C249.533 332.556 249.609 332.556 249.678 332.571L255.849 333.604C255.948 333.62 256.054 333.612 256.168 333.582V326.977C256.054 327.008 255.94 327.015 255.841 327L249.67 325.959C249.594 325.951 249.526 325.951 249.45 325.951Z"
                        fill="black" />
                    <path opacity="0.15"
                        d="M236.127 330.373V336.985C236.279 337.038 236.423 337.107 236.507 337.198L239.501 340.352C239.615 340.466 239.82 340.542 240.048 340.572V333.96C239.813 333.937 239.6 333.869 239.494 333.747L236.492 330.586C236.408 330.502 236.279 330.426 236.127 330.373Z"
                        fill="black" />
                    <path opacity="0.15"
                        d="M227.052 333.931V340.535C227.273 340.474 227.493 340.353 227.653 340.186L230.336 337.358C230.518 337.168 230.784 337.024 231.042 336.948V330.336C230.776 330.412 230.503 330.564 230.32 330.754L227.638 333.574C227.486 333.741 227.265 333.862 227.052 333.931Z"
                        fill="black" />
                    <path opacity="0.15"
                        d="M217.644 325.965V332.577C217.902 332.6 218.153 332.668 218.297 332.774C218.753 333.101 219.24 333.405 219.749 333.694C219.749 333.694 219.741 332.182 219.741 331.976C219.741 331.893 219.764 331.802 219.81 331.71L221.375 328.61C221.535 328.298 221.444 327.948 221.178 327.827C220.121 327.34 219.148 326.786 218.282 326.17C218.145 326.056 217.902 325.988 217.644 325.965Z"
                        fill="black" />
                    <path opacity="0.15"
                        d="M207.634 322.934C207.634 323.26 207.642 329.363 207.642 329.538C207.65 329.591 207.665 329.652 207.703 329.705L210.302 333.323C210.386 333.444 210.553 333.528 210.743 333.581V326.977C210.545 326.931 210.37 326.84 210.279 326.718L207.688 323.101C207.65 323.04 207.634 322.987 207.634 322.934Z"
                        fill="black" />
                    <path
                        d="M246.896 305.673L240.383 304.115C240.079 304.039 239.608 304.214 239.334 304.503L236.651 307.323C236.378 307.611 235.891 307.824 235.549 307.801C234.204 307.718 232.836 307.71 231.468 307.794C231.111 307.817 230.67 307.68 230.48 307.49L227.486 304.336C227.303 304.146 226.847 304.055 226.475 304.146L220.205 305.643C219.901 305.719 219.711 305.901 219.711 306.099C219.711 306.145 219.718 306.19 219.741 306.228L221.444 309.595C221.565 309.831 221.36 310.157 220.995 310.332C220.554 310.545 220.129 310.773 219.718 311.001C219.293 311.244 218.875 311.51 218.495 311.776C218.153 312.004 217.636 312.171 217.317 312.111L211.146 311.077C210.834 311.024 210.393 311.229 210.173 311.533L207.809 314.824C207.718 314.945 207.68 315.075 207.68 315.189C207.68 315.196 207.68 315.196 207.68 315.204C207.688 315.363 207.771 315.493 207.938 315.546L213.578 317.332C213.866 317.423 214.041 317.75 213.996 318.054C213.889 318.73 213.889 319.407 214.003 320.091C214.049 320.364 213.798 320.676 213.418 320.797L208.09 322.485C207.893 322.553 207.748 322.652 207.68 322.766C207.657 322.811 207.642 322.857 207.634 322.91C207.634 322.91 207.634 322.91 207.634 322.925C207.634 322.979 207.65 323.032 207.688 323.085L210.279 326.703C210.439 326.915 210.864 327.045 211.229 326.976L217.21 325.973C217.575 325.912 218.054 325.996 218.282 326.155C219.148 326.771 220.121 327.326 221.178 327.82C221.444 327.941 221.535 328.291 221.375 328.603L219.81 331.696C219.65 332.007 219.772 332.319 220.076 332.395L226.589 333.953C226.893 334.021 227.364 333.854 227.63 333.565L230.313 330.738C230.586 330.449 231.08 330.244 231.415 330.267C232.76 330.351 234.128 330.351 235.496 330.267C235.853 330.244 236.294 330.381 236.476 330.579L239.478 333.733C239.661 333.923 240.117 334.014 240.489 333.923L246.759 332.425C247.132 332.334 247.337 332.068 247.215 331.833L245.52 328.473C245.399 328.23 245.604 327.911 245.969 327.736C246.888 327.295 247.717 326.817 248.469 326.3C248.804 326.064 249.328 325.905 249.647 325.958L255.818 326.999C256.138 327.052 256.571 326.847 256.791 326.543L259.155 323.252C259.238 323.131 259.284 323.001 259.284 322.887C259.284 322.72 259.193 322.583 259.018 322.53L253.379 320.744C253.09 320.653 252.915 320.326 252.961 320.022C253.067 319.346 253.067 318.662 252.953 317.985C252.908 317.712 253.158 317.4 253.538 317.279L258.866 315.591C259.14 315.508 259.307 315.341 259.322 315.173C259.322 315.166 259.322 315.158 259.322 315.143C259.322 315.09 259.307 315.029 259.269 314.983L256.67 311.366C256.518 311.153 256.092 311.024 255.72 311.092L249.738 312.095C249.366 312.156 248.887 312.073 248.667 311.913C248.211 311.586 247.724 311.275 247.215 310.986C246.759 310.727 246.273 310.477 245.779 310.249C245.513 310.127 245.422 309.777 245.581 309.466L247.139 306.373C247.185 306.289 247.208 306.198 247.208 306.122C247.208 306.114 247.208 306.107 247.208 306.099C247.23 305.894 247.109 305.727 246.896 305.673ZM229.104 312.931C234.949 311.533 241.652 313.137 244.076 316.511C245.019 317.826 245.178 319.217 244.662 320.509C244.646 320.562 244.624 320.607 244.601 320.653C244.586 320.699 244.563 320.744 244.54 320.79C244.517 320.835 244.502 320.873 244.472 320.919C244.472 320.934 244.464 320.942 244.456 320.949C244.046 321.74 243.385 322.477 242.503 323.123C242.214 323.343 241.888 323.549 241.546 323.746C240.52 324.331 239.288 324.818 237.875 325.152C233.49 326.201 228.626 325.563 225.441 323.754C225.092 323.556 224.765 323.343 224.461 323.115C223.838 322.659 223.313 322.143 222.91 321.58C221.824 320.068 221.786 318.457 222.599 317.013C222.622 316.975 222.637 316.944 222.66 316.906C222.705 316.83 222.751 316.762 222.796 316.686C222.872 316.572 222.948 316.458 223.04 316.344C223.116 316.245 223.192 316.154 223.268 316.063C223.306 316.025 223.336 315.979 223.382 315.941C223.435 315.88 223.488 315.835 223.541 315.774C224.742 314.535 226.657 313.517 229.104 312.931Z"
                        fill="#27DEBF" />
                    <path
                        d="M167.917 277.652L191.218 264.177C193.62 262.794 194.821 260.97 194.821 259.153C194.821 257.337 194.828 255.908 194.828 255.908L172.902 243.459C171.618 242.722 170.584 240.921 170.584 239.439V210.711L129.886 234.248V262.976C129.886 264.458 130.928 266.252 132.204 266.997L150.52 277.659C155.324 280.426 163.114 280.426 167.917 277.652Z"
                        fill="#37474F" />
                    <path
                        d="M139.652 268.06V271.29L132.189 266.988C130.92 266.251 129.871 264.458 129.871 262.968V234.24L137.623 229.764C137.783 231.732 137.958 233.769 138.117 235.752L132.683 238.899V261.342C132.683 262.831 133.717 264.625 135.001 265.362L139.652 268.06Z"
                        fill="#263238" />
                    <path
                        d="M132.691 261.357C132.691 262.839 133.732 264.633 135.009 265.378L150.513 274.422C155.316 277.196 163.106 277.196 167.909 274.422L191.226 260.947C196.029 258.173 196.029 253.681 191.226 250.907L175.707 241.863C174.422 241.126 173.389 239.325 173.389 237.843V215.393L132.683 238.915V261.357H132.691Z"
                        fill="#455A64" />
                    <path opacity="0.15"
                        d="M180.434 244.584L175.707 241.856C174.422 241.118 173.389 239.317 173.389 237.835V215.385L132.683 238.907V261.357C132.683 262.839 133.724 264.633 135.001 265.378L139.645 268.06L180.434 244.584Z"
                        fill="black" />
                    <path
                        d="M84.2029 279.072C85.7077 279.938 88.2233 279.893 89.8193 278.966C109.83 267.414 203.72 213.203 223.731 201.651C225.335 200.724 226.627 198.482 226.627 196.627V84.4968C226.627 82.65 225.411 80.446 223.906 79.5796C222.401 78.7132 219.886 78.7588 218.29 79.686L84.3853 156.993C82.7817 157.92 81.4821 160.17 81.4821 162.017V274.155C81.4821 276.002 82.7057 278.206 84.2029 279.072Z"
                        fill="#37474F" />
                    <path
                        d="M89.8269 278.966L223.739 201.651C225.343 200.724 226.642 198.474 226.642 196.627V84.4969C226.642 82.6501 225.343 81.8977 223.739 82.8249L89.8269 160.132C88.2233 161.059 86.9237 163.309 86.9237 165.156V277.294C86.9237 279.141 88.2233 279.885 89.8269 278.966Z"
                        fill="#455A64" />
                    <path
                        d="M90.7616 263.765V166.447C90.7616 165.307 91.5596 163.924 92.5476 163.361L221.018 89.1854C222.006 88.6154 222.804 89.079 222.804 90.2114L222.812 187.529C222.812 188.669 222.014 190.053 221.026 190.615L92.54 264.791C91.5596 265.361 90.7616 264.905 90.7616 263.765Z"
                        fill="#27DEBF" />
                    <path opacity="0.75"
                        d="M90.7616 263.765V166.447C90.7616 165.307 91.5596 163.924 92.5476 163.361L221.018 89.1854C222.006 88.6154 222.804 89.079 222.804 90.2114L222.812 187.529C222.812 188.669 222.014 190.053 221.026 190.615L92.54 264.791C91.5596 265.361 90.7616 264.905 90.7616 263.765Z"
                        fill="white" />
                    <path
                        d="M82.3409 159.152L87.7749 162.284C87.2505 163.196 86.9313 164.229 86.9161 165.149V263.751L86.9237 277.287C86.9237 278.974 88.0637 279.916 89.8193 278.966C88.0637 279.985 85.5633 279.863 84.2029 279.073C82.7057 278.199 81.4821 276.367 81.4821 274.505V260.612V162.018C81.4821 161.098 81.8165 160.064 82.3409 159.152Z"
                        fill="#263238" />
                    <path
                        d="M150.862 235.995L162.696 229.163C163.281 228.821 163.76 229.064 163.76 229.702C163.76 230.341 163.281 231.131 162.696 231.466L150.862 238.298C150.277 238.64 149.798 238.397 149.798 237.758C149.798 237.128 150.277 236.337 150.862 235.995Z"
                        fill="#27DEBF" />
                    <path
                        d="M222.082 270.165C220.767 269.238 220.76 267.999 220.76 266.281V185.296C220.76 183.578 221.968 181.488 223.45 180.629L326.696 121.022C328.186 120.164 329.554 120.787 330.952 121.592C332.35 122.398 333.24 123.09 333.24 124.807V205.793C333.24 207.51 332.031 209.6 330.549 210.459L227.303 270.066C225.046 271.586 223.511 271.176 222.082 270.165Z"
                        fill="#27DEBF" />
                    <path opacity="0.5"
                        d="M227.303 270.065C225.054 271.578 223.518 271.167 222.082 270.157C220.767 269.229 220.76 267.991 220.76 266.273V185.295C220.76 184.436 221.056 183.494 221.542 182.643L225.388 184.877C224.902 185.713 224.605 186.663 224.605 187.522V268.515C224.605 270.225 225.814 270.924 227.303 270.065Z"
                        fill="black" />
                    <path opacity="0.3"
                        d="M333.24 124.807C333.24 123.09 332.031 122.398 330.549 123.249L227.303 182.864C226.558 183.297 225.882 184.034 225.403 184.878L221.573 182.659L221.558 182.651C222.044 181.807 222.72 181.063 223.465 180.637L326.711 121.03C328.201 120.171 329.569 120.795 330.967 121.6C332.35 122.391 333.24 123.09 333.24 124.807Z"
                        fill="black" />
                    <path opacity="0.6"
                        d="M333.24 124.807C333.24 124.662 333.224 124.533 333.209 124.396C333.224 124.526 333.24 124.662 333.24 124.807Z"
                        fill="black" />
                    <path opacity="0.4"
                        d="M224.605 187.523V268.509C224.605 270.226 225.814 270.926 227.296 270.067L330.542 210.46C332.031 209.601 333.232 207.511 333.232 205.794V124.808C333.232 123.09 332.024 122.391 330.542 123.25L227.296 182.857C225.814 183.723 224.605 185.806 224.605 187.523Z"
                        fill="black" />
                    <path
                        d="M228.747 185.965L328.292 128.509C329.181 127.992 329.911 128.41 329.911 129.443V203.247C329.911 204.281 329.189 205.527 328.292 206.044L228.747 263.5C227.858 264.017 227.128 263.599 227.128 262.565V188.761C227.136 187.735 227.858 186.481 228.747 185.965Z"
                        fill="#263238" />
                    <path
                        d="M228.747 185.966C227.858 186.482 227.128 187.736 227.128 188.762V262.087L326.088 204.973C326.977 204.456 327.707 203.202 327.707 202.176V128.852L228.747 185.966Z"
                        fill="#37474F" />
                    <path
                        d="M224.605 274.542C224.605 276.153 225.814 278.152 227.296 279.011L285.93 312.869C287.419 313.728 289.828 313.728 291.318 312.869L394.564 253.262C396.054 252.403 397.254 250.404 397.254 248.793C397.254 247.182 396.046 245.183 394.564 244.324L335.93 210.466C334.44 209.608 332.031 209.608 330.542 210.466L227.296 270.073C225.814 270.924 224.605 272.931 224.605 274.542Z"
                        fill="#27DEBF" />
                    <path opacity="0.4"
                        d="M397.262 248.785C397.262 250.396 396.054 252.395 394.572 253.254L291.326 312.868C290.581 313.294 289.608 313.514 288.635 313.514V307.685C289.608 307.685 290.581 307.465 291.326 307.039L394.572 247.432C395.871 246.68 396.038 245.517 395.058 244.666C396.304 245.631 397.262 247.356 397.262 248.785Z"
                        fill="black" />
                    <path opacity="0.3"
                        d="M227.303 273.174L285.937 307.032C287.427 307.891 289.836 307.891 291.326 307.032L394.572 247.425C396.061 246.566 396.061 245.175 394.572 244.317L335.938 210.459C334.448 209.6 332.039 209.6 330.549 210.459L227.303 270.065C225.814 270.924 225.814 272.315 227.303 273.174Z"
                        fill="black" />
                    <path
                        d="M234.751 270.225L330.587 214.897C331.332 214.472 332.533 214.472 333.278 214.897L336.067 216.364C336.812 216.797 336.812 217.489 336.067 217.922L240.216 273.235C239.471 273.661 238.262 273.661 237.525 273.235L234.751 271.776C234.006 271.35 234.006 270.659 234.751 270.225Z"
                        fill="#37474F" />
                    <path opacity="0.2"
                        d="M242.268 274.694L338.104 219.366C338.848 218.94 339.95 218.879 340.566 219.229L365.509 233.631C366.125 233.988 366.018 234.619 365.274 235.052L269.552 290.304C268.807 290.737 267.705 290.798 267.089 290.441L242.04 276.107C241.424 275.758 241.523 275.127 242.268 274.694Z"
                        fill="black" />
                    <path
                        d="M295.908 248.564L293.264 247.044C293.165 246.976 292.975 246.991 292.846 247.067L289.844 248.8C289.722 248.876 289.699 248.982 289.798 249.043L292.443 250.563C292.549 250.631 292.739 250.616 292.861 250.54L295.863 248.807C296 248.739 296.022 248.633 295.908 248.564ZM331.917 226.661L331.218 226.258C331.112 226.197 330.922 226.205 330.792 226.281L327.798 228.014C327.669 228.09 327.646 228.204 327.752 228.257L328.452 228.66C328.558 228.728 328.748 228.713 328.877 228.637L331.879 226.904C332.001 226.828 332.024 226.722 331.917 226.661ZM354.352 234.55L351.708 233.022C351.609 232.961 351.419 232.969 351.29 233.045L348.288 234.778C348.158 234.854 348.143 234.968 348.242 235.021L350.887 236.549C350.993 236.609 351.183 236.602 351.305 236.526L354.307 234.785C354.436 234.717 354.459 234.611 354.352 234.55ZM346.251 224.807L343.606 223.287C343.507 223.218 343.31 223.233 343.188 223.309L340.186 225.042C340.057 225.111 340.042 225.225 340.14 225.285L342.785 226.805C342.884 226.874 343.082 226.859 343.203 226.783L346.205 225.05C346.334 224.974 346.35 224.867 346.251 224.807ZM340.688 221.592L339.981 221.189C339.882 221.128 339.692 221.136 339.563 221.212L336.561 222.945C336.439 223.021 336.416 223.135 336.523 223.188L337.222 223.591C337.328 223.659 337.518 223.644 337.64 223.568L340.642 221.835C340.779 221.767 340.794 221.66 340.688 221.592ZM327.532 229.192L326.833 228.789C326.726 228.728 326.536 228.736 326.415 228.812L323.413 230.545C323.284 230.621 323.261 230.735 323.367 230.788L324.066 231.191C324.173 231.259 324.363 231.244 324.492 231.168L327.494 229.435C327.616 229.367 327.638 229.253 327.532 229.192ZM304.686 243.503L302.042 241.983C301.943 241.914 301.753 241.929 301.624 242.005L298.622 243.738C298.492 243.807 298.477 243.921 298.576 243.981L301.221 245.509C301.327 245.57 301.517 245.555 301.639 245.479L304.641 243.746C304.77 243.677 304.793 243.571 304.686 243.503ZM300.301 246.033L297.656 244.513C297.558 244.445 297.368 244.46 297.238 244.536L294.236 246.269C294.107 246.345 294.092 246.451 294.191 246.512L296.836 248.04C296.942 248.101 297.132 248.085 297.254 248.009L300.256 246.277C300.385 246.208 300.408 246.102 300.301 246.033ZM318.807 235.348L316.162 233.82C316.064 233.759 315.874 233.767 315.744 233.843L312.742 235.583C312.613 235.652 312.598 235.766 312.697 235.819L315.342 237.347C315.448 237.407 315.638 237.4 315.767 237.324L318.762 235.583C318.898 235.515 318.914 235.409 318.807 235.348ZM309.072 240.972L306.427 239.452C306.328 239.383 306.138 239.399 306.009 239.475L303.007 241.207C302.878 241.276 302.862 241.39 302.961 241.451L305.606 242.978C305.712 243.039 305.902 243.024 306.024 242.948L309.026 241.215C309.155 241.147 309.17 241.033 309.072 240.972ZM323.192 232.817L320.548 231.289C320.449 231.229 320.259 231.236 320.13 231.312L317.128 233.053C316.998 233.129 316.983 233.235 317.082 233.288L319.727 234.816C319.833 234.877 320.023 234.869 320.145 234.793L323.147 233.06C323.284 232.984 323.306 232.878 323.192 232.817ZM314.422 237.886L311.777 236.359C311.678 236.298 311.488 236.305 311.359 236.381L308.357 238.122C308.236 238.198 308.213 238.304 308.312 238.357L310.956 239.885C311.063 239.946 311.253 239.938 311.382 239.862L314.384 238.122C314.506 238.046 314.528 237.939 314.422 237.886ZM336.302 224.123L335.603 223.72C335.497 223.659 335.307 223.667 335.178 223.743L332.176 225.475C332.054 225.551 332.031 225.665 332.138 225.719L332.837 226.121C332.943 226.19 333.133 226.175 333.262 226.099L336.257 224.366C336.386 224.297 336.409 224.191 336.302 224.123ZM311.656 259.197L309.011 257.669C308.904 257.608 308.714 257.623 308.593 257.699L305.591 259.432C305.462 259.508 305.446 259.615 305.545 259.668L308.19 261.195C308.289 261.264 308.479 261.249 308.608 261.173L311.61 259.44C311.739 259.371 311.754 259.265 311.656 259.197ZM302.878 264.266L300.233 262.738C300.134 262.677 299.944 262.685 299.815 262.769L296.813 264.501C296.684 264.577 296.668 264.684 296.767 264.737L299.412 266.265C299.518 266.333 299.708 266.318 299.83 266.242L302.832 264.509C302.969 264.441 302.992 264.327 302.878 264.266ZM307.263 261.735L304.618 260.207C304.519 260.147 304.329 260.162 304.2 260.238L301.198 261.971C301.069 262.039 301.054 262.153 301.152 262.206L303.797 263.734C303.896 263.802 304.094 263.787 304.215 263.711L307.217 261.978C307.354 261.902 307.369 261.796 307.263 261.735ZM289.722 271.858L287.077 270.331C286.978 270.27 286.788 270.277 286.659 270.361L283.657 272.094C283.536 272.17 283.513 272.276 283.612 272.329L286.256 273.857C286.363 273.925 286.553 273.91 286.682 273.834L289.684 272.101C289.806 272.033 289.828 271.919 289.722 271.858ZM298.492 266.797L295.848 265.269C295.749 265.208 295.559 265.216 295.43 265.299L292.428 267.032C292.298 267.101 292.283 267.215 292.382 267.268L295.027 268.795C295.133 268.864 295.323 268.849 295.445 268.773L298.447 267.04C298.584 266.971 298.599 266.865 298.492 266.797ZM294.107 269.327L291.462 267.8C291.364 267.739 291.174 267.747 291.044 267.83L288.042 269.563C287.913 269.631 287.898 269.745 287.997 269.799L290.642 271.326C290.748 271.395 290.938 271.379 291.06 271.303L294.062 269.571C294.198 269.502 294.214 269.396 294.107 269.327ZM335.884 245.213L333.247 243.685C333.141 243.617 332.951 243.632 332.822 243.708L329.82 245.441C329.698 245.509 329.675 245.623 329.782 245.684L332.419 247.211C332.525 247.272 332.715 247.265 332.844 247.181L335.846 245.448C335.968 245.38 335.991 245.273 335.884 245.213ZM316.041 256.666L313.396 255.138C313.29 255.077 313.1 255.093 312.978 255.169L309.976 256.901C309.847 256.977 309.824 257.084 309.93 257.137L312.575 258.665C312.674 258.733 312.864 258.718 312.993 258.642L315.995 256.909C316.124 256.841 316.14 256.734 316.041 256.666ZM341.417 237.21L338.772 235.682C338.674 235.614 338.484 235.629 338.354 235.705L335.352 237.438C335.231 237.514 335.208 237.62 335.307 237.681L337.952 239.209C338.058 239.269 338.248 239.262 338.37 239.178L341.372 237.445C341.501 237.377 341.524 237.271 341.417 237.21ZM345.582 239.611L342.937 238.084C342.838 238.023 342.648 238.031 342.519 238.107L339.517 239.839C339.396 239.915 339.373 240.029 339.472 240.083L342.116 241.61C342.223 241.671 342.413 241.663 342.534 241.58L345.536 239.847C345.666 239.779 345.688 239.672 345.582 239.611ZM326.194 250.806L323.55 249.286C323.443 249.218 323.253 249.233 323.132 249.309L314.361 254.371C314.232 254.439 314.209 254.553 314.316 254.614L316.96 256.134C317.059 256.202 317.249 256.187 317.378 256.111L326.149 251.049C326.286 250.973 326.293 250.867 326.194 250.806ZM331.948 237.871L329.303 236.343C329.204 236.283 329.014 236.298 328.885 236.374L325.883 238.107C325.761 238.175 325.738 238.289 325.837 238.35L328.482 239.87C328.588 239.938 328.778 239.923 328.908 239.847L331.91 238.114C332.031 238.038 332.054 237.932 331.948 237.871ZM349.967 237.081L347.322 235.553C347.224 235.492 347.034 235.5 346.904 235.576L343.902 237.309C343.773 237.385 343.758 237.499 343.857 237.552L346.502 239.079C346.608 239.14 346.798 239.133 346.92 239.049L349.922 237.316C350.051 237.248 350.074 237.141 349.967 237.081ZM340.049 247.614L337.412 246.087C337.306 246.026 337.116 246.033 336.986 246.109L333.984 247.842C333.863 247.918 333.84 248.032 333.946 248.085L336.591 249.613C336.69 249.674 336.88 249.666 337.009 249.583L340.011 247.85C340.133 247.781 340.156 247.675 340.049 247.614ZM324.355 256.673L321.71 255.146C321.604 255.085 321.414 255.093 321.292 255.169L317.599 257.304C317.47 257.373 317.447 257.487 317.553 257.547L320.198 259.067C320.297 259.136 320.487 259.121 320.616 259.045L324.31 256.909C324.446 256.841 324.454 256.734 324.355 256.673ZM277.965 283.463L275.32 281.936C275.214 281.875 275.024 281.883 274.894 281.959L271.208 284.094C271.079 284.17 271.056 284.277 271.163 284.337L273.808 285.857C273.906 285.926 274.096 285.911 274.226 285.835L277.919 283.699C278.041 283.623 278.064 283.517 277.965 283.463ZM314.202 262.541L311.557 261.013C311.458 260.945 311.26 260.96 311.139 261.036L307.445 263.171C307.316 263.247 307.301 263.354 307.4 263.407L310.044 264.935C310.143 265.003 310.341 264.988 310.462 264.912L314.156 262.776C314.285 262.708 314.3 262.601 314.202 262.541ZM283.042 280.522L280.397 279.002C280.29 278.934 280.1 278.949 279.971 279.025L276.278 281.161C276.156 281.237 276.133 281.343 276.24 281.396L278.884 282.924C278.983 282.985 279.173 282.977 279.302 282.901L282.996 280.765C283.118 280.697 283.14 280.591 283.042 280.522ZM309.117 265.467L306.472 263.939C306.374 263.878 306.184 263.886 306.054 263.969L281.354 278.227C281.233 278.303 281.21 278.409 281.316 278.47L283.961 279.998C284.06 280.059 284.25 280.043 284.379 279.967L309.072 265.71C309.208 265.634 309.231 265.527 309.117 265.467ZM330.359 253.215L327.714 251.688C327.608 251.619 327.418 251.635 327.296 251.711L322.683 254.378C322.554 254.454 322.531 254.561 322.638 254.614L325.282 256.141C325.381 256.202 325.571 256.195 325.7 256.119L330.314 253.451C330.443 253.375 330.458 253.269 330.359 253.215ZM319.278 259.607L316.634 258.079C316.527 258.019 316.337 258.034 316.216 258.11L312.522 260.238C312.393 260.314 312.378 260.428 312.476 260.481L315.121 262.009C315.22 262.069 315.41 262.062 315.539 261.978L319.233 259.85C319.362 259.774 319.377 259.668 319.278 259.607ZM362.902 234.421L356.093 230.491C355.994 230.431 355.804 230.438 355.675 230.514L352.673 232.247C352.544 232.323 352.528 232.437 352.627 232.49L359.437 236.419C359.543 236.48 359.733 236.473 359.855 236.397L362.857 234.664C362.986 234.588 363.001 234.481 362.902 234.421ZM358.517 236.951L355.872 235.424C355.774 235.363 355.584 235.371 355.454 235.447L352.452 237.187C352.323 237.263 352.308 237.369 352.407 237.423L355.052 238.95C355.158 239.011 355.348 239.003 355.47 238.927L358.472 237.195C358.601 237.119 358.624 237.012 358.517 236.951ZM335.664 250.145L333.019 248.617C332.913 248.557 332.723 248.564 332.594 248.64L329.592 250.373C329.47 250.449 329.447 250.563 329.554 250.616L332.198 252.144C332.297 252.205 332.487 252.197 332.616 252.113L335.618 250.381C335.748 250.312 335.77 250.206 335.664 250.145ZM285.337 274.389L282.692 272.861C282.593 272.801 282.403 272.808 282.274 272.892L279.272 274.625C279.15 274.701 279.128 274.807 279.234 274.86L281.871 276.388C281.978 276.456 282.168 276.441 282.297 276.365L285.299 274.632C285.42 274.564 285.443 274.45 285.337 274.389ZM344.434 245.083L341.79 243.556C341.691 243.495 341.501 243.503 341.372 243.579L338.37 245.311C338.248 245.387 338.225 245.501 338.332 245.555L340.969 247.082C341.075 247.143 341.265 247.135 341.394 247.052L344.396 245.319C344.518 245.251 344.541 245.137 344.434 245.083ZM354.124 239.482L351.48 237.955C351.381 237.894 351.191 237.901 351.062 237.977L343.674 242.249C343.553 242.325 343.53 242.431 343.629 242.484L346.274 244.012C346.38 244.073 346.57 244.065 346.699 243.989L354.079 239.718C354.216 239.649 354.238 239.543 354.124 239.482ZM265.79 265.968L263.145 264.441C263.038 264.372 262.848 264.387 262.727 264.463L259.725 266.196C259.596 266.272 259.573 266.386 259.679 266.439L262.324 267.967C262.423 268.028 262.613 268.02 262.742 267.937L265.744 266.204C265.873 266.135 265.888 266.021 265.79 265.968ZM270.175 263.437L267.53 261.91C267.424 261.841 267.234 261.857 267.112 261.933L264.11 263.665C263.981 263.741 263.958 263.855 264.064 263.909L266.709 265.436C266.808 265.497 266.998 265.489 267.127 265.406L270.129 263.673C270.258 263.597 270.274 263.491 270.175 263.437ZM272.888 286.389L270.243 284.862C270.137 284.801 269.947 284.816 269.825 284.892L265.212 287.552C265.083 287.628 265.06 287.735 265.166 287.795L267.811 289.323C267.91 289.384 268.1 289.376 268.229 289.293L272.842 286.633C272.972 286.564 272.987 286.458 272.888 286.389ZM276.46 259.797L273.815 258.269C273.716 258.209 273.526 258.216 273.397 258.3L270.395 260.033C270.266 260.101 270.251 260.215 270.35 260.268L272.994 261.796C273.101 261.857 273.291 261.849 273.412 261.773L276.414 260.04C276.551 259.964 276.574 259.858 276.46 259.797ZM285.238 254.735L282.593 253.208C282.494 253.147 282.297 253.155 282.175 253.238L279.173 254.971C279.044 255.039 279.029 255.153 279.128 255.207L281.772 256.734C281.871 256.795 282.069 256.787 282.19 256.711L285.192 254.979C285.322 254.903 285.337 254.789 285.238 254.735ZM261.397 268.499L258.752 266.971C258.646 266.903 258.456 266.918 258.334 266.994L255.332 268.727C255.203 268.803 255.18 268.917 255.286 268.97L257.931 270.498C258.03 270.559 258.22 270.551 258.349 270.467L261.351 268.735C261.488 268.666 261.503 268.56 261.397 268.499ZM280.845 257.266L278.2 255.739C278.102 255.678 277.912 255.685 277.782 255.769L274.78 257.502C274.651 257.57 274.636 257.684 274.735 257.737L277.38 259.265C277.486 259.326 277.676 259.318 277.798 259.242L280.8 257.509C280.936 257.433 280.952 257.327 280.845 257.266ZM289.623 252.205L286.978 250.677C286.872 250.616 286.682 250.624 286.56 250.707L283.558 252.44C283.429 252.516 283.414 252.623 283.513 252.676L286.158 254.203C286.256 254.272 286.446 254.257 286.576 254.181L289.578 252.448C289.707 252.372 289.722 252.258 289.623 252.205ZM267.796 284.52L265.151 282.992C265.045 282.931 264.855 282.939 264.733 283.023L261.04 285.151C260.91 285.219 260.888 285.333 260.994 285.394L263.639 286.921C263.738 286.982 263.928 286.967 264.057 286.891L267.75 284.763C267.887 284.687 267.902 284.581 267.796 284.52ZM265.714 280.925L263.069 279.397C262.962 279.329 262.772 279.344 262.651 279.42L256.882 282.757C256.753 282.833 256.73 282.939 256.837 283L259.482 284.52C259.58 284.588 259.77 284.573 259.9 284.497L265.668 281.161C265.797 281.085 265.812 280.978 265.714 280.925ZM257.012 271.03L254.367 269.502C254.268 269.434 254.07 269.449 253.949 269.525L250.947 271.258C250.818 271.334 250.802 271.448 250.901 271.501L253.546 273.029C253.645 273.089 253.842 273.082 253.964 272.998L256.966 271.265C257.103 271.197 257.118 271.091 257.012 271.03ZM250.719 274.663L248.082 273.135C247.975 273.074 247.785 273.089 247.656 273.165L243.962 275.293C243.841 275.369 243.818 275.483 243.924 275.537L246.569 277.064C246.668 277.125 246.858 277.117 246.987 277.034L250.681 274.906C250.802 274.83 250.825 274.723 250.719 274.663ZM260.394 279.185L257.749 277.657C257.642 277.596 257.452 277.604 257.331 277.68L252.718 280.347C252.588 280.416 252.566 280.53 252.672 280.583L255.317 282.111C255.416 282.179 255.606 282.164 255.735 282.088L260.348 279.42C260.485 279.352 260.5 279.238 260.394 279.185ZM254.618 277.71L251.973 276.183C251.866 276.122 251.676 276.129 251.555 276.213L248.553 277.946C248.424 278.014 248.401 278.128 248.507 278.181L251.152 279.709C251.251 279.77 251.441 279.762 251.57 279.686L254.572 277.953C254.709 277.877 254.716 277.771 254.618 277.71ZM280.952 276.927L278.314 275.4C278.208 275.339 278.018 275.347 277.889 275.43L274.887 277.163C274.765 277.231 274.742 277.345 274.849 277.399L277.494 278.926C277.592 278.995 277.782 278.979 277.912 278.903L280.914 277.171C281.035 277.087 281.058 276.981 280.952 276.927ZM286.705 263.992L284.06 262.465C283.961 262.404 283.771 262.411 283.642 262.487L280.64 264.228C280.511 264.296 280.496 264.41 280.594 264.463L283.239 265.991C283.346 266.052 283.536 266.044 283.657 265.968L286.659 264.235C286.796 264.159 286.811 264.045 286.705 263.992ZM282.32 266.523L279.675 264.995C279.576 264.935 279.386 264.942 279.257 265.018L276.255 266.759C276.133 266.827 276.11 266.941 276.209 266.994L278.854 268.522C278.96 268.583 279.15 268.575 279.28 268.499L282.274 266.766C282.411 266.69 282.426 266.584 282.32 266.523ZM299.868 256.392L297.223 254.865C297.124 254.804 296.927 254.811 296.805 254.895L293.803 256.628C293.674 256.696 293.659 256.81 293.758 256.863L296.402 258.391C296.501 258.452 296.691 258.444 296.82 258.368L299.822 256.635C299.952 256.559 299.967 256.453 299.868 256.392ZM291.09 261.461L288.445 259.934C288.346 259.873 288.156 259.881 288.027 259.957L285.025 261.697C284.896 261.765 284.881 261.879 284.98 261.933L287.624 263.46C287.731 263.521 287.921 263.513 288.042 263.437L291.044 261.705C291.181 261.621 291.204 261.515 291.09 261.461ZM295.475 258.923L292.83 257.395C292.732 257.335 292.542 257.342 292.412 257.426L289.41 259.159C289.281 259.227 289.266 259.341 289.365 259.394L292.01 260.922C292.116 260.983 292.306 260.975 292.428 260.899L295.43 259.166C295.566 259.09 295.582 258.984 295.475 258.923ZM277.934 269.054L275.29 267.526C275.191 267.465 275.001 267.473 274.872 267.549L271.87 269.289C271.748 269.358 271.725 269.472 271.824 269.525L274.469 271.053C274.575 271.113 274.765 271.106 274.894 271.03L277.896 269.297C278.018 269.221 278.041 269.115 277.934 269.054ZM273.549 271.585L270.904 270.057C270.806 269.996 270.616 270.004 270.486 270.08L267.484 271.82C267.363 271.889 267.34 272.003 267.446 272.056L270.084 273.583C270.19 273.644 270.38 273.637 270.509 273.561L273.511 271.828C273.633 271.752 273.656 271.645 273.549 271.585ZM287.64 268.263L284.995 266.736C284.896 266.675 284.706 266.683 284.577 266.759L281.575 268.491C281.446 268.567 281.43 268.681 281.529 268.735L284.174 270.262C284.28 270.323 284.47 270.315 284.592 270.232L287.594 268.499C287.723 268.423 287.746 268.317 287.64 268.263ZM283.254 270.794L280.61 269.267C280.511 269.206 280.321 269.213 280.192 269.289L277.19 271.022C277.068 271.098 277.045 271.212 277.144 271.265L279.789 272.793C279.895 272.854 280.085 272.846 280.214 272.763L283.216 271.03C283.338 270.961 283.361 270.847 283.254 270.794ZM278.862 273.325L276.217 271.797C276.118 271.737 275.928 271.744 275.799 271.82L272.797 273.553C272.675 273.629 272.652 273.743 272.759 273.796L275.396 275.324C275.502 275.385 275.692 275.377 275.822 275.293L278.824 273.561C278.953 273.492 278.976 273.386 278.862 273.325ZM269.164 274.115L266.527 272.588C266.42 272.527 266.23 272.535 266.101 272.611L263.099 274.351C262.978 274.419 262.955 274.533 263.061 274.587L265.706 276.114C265.805 276.175 265.995 276.167 266.124 276.091L269.126 274.359C269.248 274.283 269.27 274.176 269.164 274.115ZM274.476 275.856L271.839 274.328C271.733 274.26 271.543 274.275 271.414 274.351L268.412 276.084C268.29 276.16 268.267 276.274 268.374 276.327L271.018 277.855C271.117 277.915 271.307 277.908 271.436 277.824L274.438 276.091C274.568 276.023 274.59 275.917 274.476 275.856ZM308.638 251.331L305.994 249.803C305.887 249.742 305.697 249.75 305.576 249.833L302.574 251.566C302.444 251.635 302.422 251.749 302.528 251.802L305.173 253.329C305.272 253.398 305.462 253.383 305.591 253.307L308.593 251.574C308.722 251.498 308.737 251.384 308.638 251.331ZM345.802 234.679L343.158 233.151C343.059 233.083 342.869 233.098 342.74 233.174L339.738 234.907C339.608 234.975 339.593 235.097 339.692 235.15L342.337 236.678C342.443 236.739 342.633 236.731 342.755 236.647L345.757 234.915C345.886 234.846 345.909 234.74 345.802 234.679ZM304.253 253.861L301.608 252.334C301.502 252.273 301.312 252.281 301.19 252.364L298.188 254.097C298.059 254.165 298.044 254.279 298.143 254.333L300.788 255.86C300.886 255.921 301.076 255.913 301.206 255.837L304.208 254.105C304.337 254.029 304.352 253.922 304.253 253.861ZM337.252 234.801L334.608 233.281C334.509 233.212 334.319 233.227 334.19 233.303L331.188 235.036C331.058 235.105 331.043 235.219 331.142 235.279L333.787 236.807C333.893 236.868 334.083 236.853 334.205 236.777L337.207 235.044C337.344 234.975 337.366 234.869 337.252 234.801ZM354.573 229.617L347.763 225.688C347.664 225.62 347.474 225.635 347.345 225.711L344.343 227.444C344.214 227.512 344.199 227.626 344.298 227.687L351.107 231.616C351.214 231.677 351.404 231.669 351.525 231.586L354.527 229.853C354.664 229.785 354.679 229.671 354.573 229.617ZM346.03 229.739L343.386 228.219C343.287 228.151 343.097 228.166 342.968 228.242L339.966 229.975C339.836 230.043 339.821 230.157 339.92 230.218L342.565 231.745C342.671 231.806 342.861 231.791 342.983 231.715L345.985 229.982C346.114 229.914 346.137 229.8 346.03 229.739ZM341.638 232.27L338.993 230.75C338.894 230.681 338.704 230.697 338.575 230.773L335.573 232.505C335.444 232.581 335.428 232.688 335.527 232.749L338.172 234.276C338.278 234.337 338.468 234.322 338.59 234.246L341.592 232.513C341.729 232.445 341.752 232.338 341.638 232.27ZM350.188 232.148L347.543 230.621C347.444 230.552 347.254 230.567 347.125 230.643L344.123 232.376C343.994 232.445 343.978 232.566 344.077 232.619L346.722 234.147C346.828 234.208 347.018 234.2 347.14 234.117L350.142 232.384C350.279 232.315 350.294 232.209 350.188 232.148ZM296.41 263.194L293.765 261.667C293.666 261.606 293.476 261.613 293.347 261.689L290.345 263.422C290.216 263.498 290.201 263.612 290.3 263.665L292.944 265.193C293.051 265.254 293.241 265.246 293.362 265.17L296.364 263.43C296.494 263.361 296.516 263.255 296.41 263.194ZM341.866 227.337L339.221 225.817C339.122 225.749 338.932 225.764 338.803 225.84L335.801 227.573C335.672 227.641 335.656 227.755 335.755 227.816L338.4 229.336C338.506 229.405 338.696 229.389 338.818 229.313L341.82 227.581C341.949 227.512 341.972 227.398 341.866 227.337ZM313.024 248.8L310.379 247.272C310.272 247.211 310.082 247.219 309.961 247.303L306.959 249.035C306.83 249.104 306.807 249.218 306.913 249.271L309.558 250.799C309.657 250.867 309.847 250.852 309.976 250.776L312.978 249.043C313.107 248.967 313.122 248.853 313.024 248.8ZM337.48 229.868L334.836 228.341C334.737 228.28 334.547 228.295 334.418 228.371L331.416 230.104C331.286 230.18 331.271 230.286 331.37 230.347L334.015 231.867C334.121 231.935 334.311 231.92 334.433 231.844L337.435 230.111C337.564 230.043 337.587 229.937 337.48 229.868ZM327.783 235.469L325.138 233.942C325.039 233.881 324.849 233.889 324.72 233.972L321.718 235.705C321.596 235.773 321.574 235.887 321.672 235.941L324.317 237.468C324.424 237.537 324.614 237.521 324.743 237.445L327.737 235.713C327.866 235.637 327.889 235.53 327.783 235.469ZM333.095 232.399L330.45 230.871C330.352 230.811 330.162 230.826 330.032 230.902L327.03 232.635C326.901 232.703 326.886 232.817 326.985 232.878L329.63 234.398C329.736 234.466 329.926 234.451 330.048 234.375L333.05 232.642C333.179 232.574 333.202 232.467 333.095 232.399ZM292.025 265.725L289.38 264.197C289.281 264.137 289.091 264.144 288.962 264.22L285.96 265.953C285.831 266.029 285.816 266.143 285.914 266.196L288.559 267.724C288.666 267.785 288.856 267.777 288.977 267.701L291.979 265.961C292.108 265.892 292.131 265.786 292.025 265.725ZM272.158 267.579L269.514 266.052C269.415 265.991 269.225 265.999 269.096 266.082L266.094 267.815C265.972 267.883 265.949 267.997 266.048 268.051L268.693 269.578C268.799 269.647 268.989 269.631 269.118 269.555L272.12 267.823C272.242 267.747 272.265 267.64 272.158 267.579ZM276.544 265.049L273.899 263.521C273.8 263.46 273.61 263.468 273.481 263.551L270.479 265.284C270.357 265.36 270.334 265.467 270.433 265.52L273.078 267.047C273.184 267.116 273.374 267.101 273.504 267.025L276.498 265.292C276.627 265.223 276.65 265.109 276.544 265.049ZM280.929 262.518L278.284 260.99C278.185 260.929 277.995 260.937 277.866 261.021L274.864 262.753C274.735 262.829 274.72 262.936 274.818 262.989L277.463 264.517C277.57 264.585 277.76 264.57 277.881 264.494L280.883 262.761C281.012 262.693 281.035 262.579 280.929 262.518ZM289.699 257.456L287.054 255.929C286.956 255.868 286.766 255.875 286.636 255.959L283.634 257.692C283.505 257.76 283.49 257.874 283.589 257.927L286.234 259.455C286.34 259.523 286.53 259.508 286.652 259.432L289.654 257.699C289.79 257.631 289.798 257.517 289.699 257.456ZM267.773 270.118L265.136 268.59C265.03 268.529 264.84 268.537 264.71 268.621L261.708 270.353C261.587 270.422 261.564 270.536 261.67 270.589L264.308 272.117C264.414 272.185 264.604 272.17 264.733 272.094L267.735 270.361C267.857 270.277 267.88 270.171 267.773 270.118ZM285.314 259.987L282.669 258.459C282.57 258.399 282.38 258.406 282.251 258.49L279.249 260.223C279.12 260.291 279.105 260.405 279.204 260.458L281.848 261.986C281.955 262.054 282.145 262.039 282.266 261.963L285.268 260.23C285.398 260.162 285.42 260.048 285.314 259.987ZM263.38 272.649L260.743 271.121C260.637 271.06 260.447 271.068 260.318 271.151L257.316 272.884C257.194 272.953 257.171 273.067 257.278 273.12L259.922 274.647C260.021 274.708 260.211 274.701 260.34 274.625L263.342 272.892C263.472 272.816 263.494 272.702 263.38 272.649ZM272.181 281.989L269.536 280.461C269.43 280.401 269.24 280.408 269.118 280.492L266.116 282.225C265.987 282.293 265.964 282.407 266.071 282.46L268.716 283.988C268.814 284.049 269.004 284.041 269.134 283.965L272.136 282.232C272.265 282.156 272.288 282.05 272.181 281.989ZM276.574 279.458L273.929 277.931C273.823 277.87 273.633 277.877 273.504 277.961L270.502 279.694C270.38 279.762 270.357 279.876 270.464 279.929L273.108 281.457C273.207 281.525 273.397 281.51 273.526 281.434L276.528 279.701C276.65 279.625 276.673 279.511 276.574 279.458ZM264.786 276.654L262.142 275.126C262.035 275.065 261.845 275.073 261.716 275.149L258.722 276.889C258.592 276.958 258.57 277.072 258.676 277.125L261.321 278.653C261.42 278.713 261.61 278.706 261.739 278.63L264.741 276.889C264.862 276.813 264.885 276.707 264.786 276.654ZM259.003 275.179L256.358 273.652C256.252 273.591 256.062 273.599 255.932 273.682L252.938 275.415C252.809 275.491 252.786 275.597 252.892 275.651L255.537 277.178C255.636 277.239 255.826 277.231 255.955 277.155L258.957 275.423C259.086 275.347 259.109 275.24 259.003 275.179ZM270.099 278.387L267.454 276.859C267.348 276.791 267.158 276.806 267.028 276.882L264.034 278.615C263.905 278.691 263.882 278.805 263.988 278.858L266.633 280.385C266.732 280.446 266.922 280.439 267.051 280.355L270.053 278.622C270.182 278.554 270.198 278.447 270.099 278.387ZM294.084 254.925L291.44 253.398C291.341 253.337 291.143 253.352 291.022 253.428L288.02 255.161C287.89 255.229 287.875 255.343 287.974 255.397L290.619 256.924C290.718 256.993 290.908 256.977 291.037 256.901L294.039 255.169C294.176 255.093 294.191 254.986 294.084 254.925ZM298.47 252.387L295.825 250.859C295.718 250.799 295.528 250.814 295.407 250.89L292.405 252.623C292.276 252.691 292.26 252.805 292.359 252.858L295.004 254.386C295.103 254.454 295.293 254.439 295.422 254.363L298.424 252.63C298.561 252.562 298.576 252.455 298.47 252.387ZM322.03 248.405L315.22 244.475C315.114 244.415 314.924 244.422 314.794 244.506L311.336 246.505C311.207 246.581 311.184 246.687 311.291 246.74L315.068 248.929C315.174 248.997 315.152 249.104 315.03 249.172L312.264 250.776C312.134 250.852 312.112 250.958 312.218 251.011L314.863 252.539C314.962 252.6 315.152 252.592 315.281 252.516L321.976 248.648C322.113 248.572 322.136 248.465 322.03 248.405ZM323.17 242.933L320.532 241.405C320.426 241.344 320.236 241.359 320.107 241.435L317.105 243.168C316.983 243.237 316.96 243.351 317.067 243.411L319.712 244.931C319.81 245 320 244.985 320.13 244.909L323.132 243.176C323.261 243.107 323.284 243.001 323.17 242.933ZM300.795 260.663L298.15 259.136C298.052 259.075 297.862 259.083 297.732 259.159L294.73 260.891C294.601 260.967 294.586 261.081 294.685 261.135L297.33 262.662C297.436 262.723 297.626 262.715 297.748 262.639L300.75 260.899C300.879 260.831 300.894 260.724 300.795 260.663ZM305.18 258.133L302.536 256.605C302.437 256.544 302.239 256.552 302.118 256.628L299.116 258.361C298.986 258.437 298.971 258.551 299.07 258.604L301.715 260.131C301.814 260.192 302.011 260.185 302.133 260.109L305.135 258.368C305.272 258.3 305.279 258.193 305.18 258.133ZM309.566 255.602L306.921 254.074C306.814 254.013 306.624 254.021 306.503 254.097L303.501 255.83C303.372 255.906 303.356 256.02 303.455 256.073L306.1 257.601C306.199 257.661 306.389 257.654 306.518 257.578L309.52 255.837C309.657 255.769 309.672 255.655 309.566 255.602ZM313.951 253.071L311.306 251.543C311.2 251.483 311.01 251.49 310.888 251.566L307.886 253.299C307.757 253.375 307.734 253.489 307.84 253.542L310.485 255.07C310.584 255.131 310.774 255.123 310.903 255.047L313.905 253.307C314.042 253.231 314.057 253.124 313.951 253.071ZM302.855 249.856L300.21 248.329C300.104 248.268 299.914 248.275 299.792 248.359L296.79 250.092C296.661 250.168 296.638 250.274 296.744 250.327L299.389 251.855C299.488 251.923 299.678 251.908 299.807 251.832L302.809 250.099C302.946 250.031 302.961 249.925 302.855 249.856ZM307.248 247.325L304.603 245.798C304.496 245.737 304.306 245.752 304.185 245.828L301.183 247.561C301.054 247.629 301.031 247.743 301.137 247.797L303.782 249.324C303.881 249.393 304.071 249.377 304.2 249.301L307.202 247.569C307.331 247.5 307.346 247.394 307.248 247.325ZM319.012 240.531L316.375 239.003C316.269 238.943 316.079 238.95 315.95 239.034L312.948 240.767C312.826 240.843 312.803 240.949 312.91 241.002L315.554 242.53C315.653 242.598 315.843 242.583 315.972 242.507L318.974 240.774C319.096 240.706 319.119 240.592 319.012 240.531ZM313.708 243.594L311.063 242.066C310.956 242.005 310.766 242.013 310.637 242.097L305.568 245.023C305.439 245.091 305.416 245.205 305.522 245.258L308.167 246.786C308.266 246.854 308.456 246.839 308.585 246.763L313.662 243.837C313.791 243.761 313.806 243.655 313.708 243.594ZM323.398 238L320.753 236.473C320.654 236.412 320.464 236.419 320.335 236.503L317.333 238.236C317.211 238.312 317.188 238.418 317.295 238.471L319.932 239.999C320.038 240.067 320.228 240.052 320.358 239.976L323.36 238.243C323.481 238.175 323.504 238.053 323.398 238ZM327.562 240.402L324.918 238.874C324.819 238.813 324.629 238.829 324.5 238.905L321.498 240.637C321.376 240.706 321.353 240.82 321.46 240.881L324.097 242.401C324.203 242.469 324.393 242.454 324.522 242.378L327.524 240.645C327.646 240.577 327.669 240.463 327.562 240.402Z"
                        fill="#37474F" />
                    <path opacity="0.4"
                        d="M305.88 273.22L306.495 273.57L322.835 283.001L351.898 266.228L352.498 265.879L335.542 256.09L305.88 273.22Z"
                        fill="black" />
                    <path d="M351.624 266.379L335.542 257.107L306.761 273.729L322.835 283.001L351.624 266.379Z"
                        fill="#27DEBF" />
                    <path opacity="0.45"
                        d="M351.624 266.379L335.542 257.107L306.761 273.729L322.835 283.001L351.624 266.379Z"
                        fill="black" />
                    <path opacity="0.5"
                        d="M288.628 307.686V313.515C287.655 313.515 286.674 313.302 285.937 312.877L227.303 279.019C225.814 278.16 224.613 276.161 224.613 274.55C224.613 273.037 225.677 271.183 227.03 270.256C225.821 271.122 225.92 272.391 227.303 273.189L285.937 307.047C286.674 307.465 287.655 307.686 288.628 307.686Z"
                        fill="black" />
                    <path
                        d="M241.439 186.915L241.842 186.611V183.625L241.432 183.868V183.533L242.192 182.842V186.414L242.587 186.262V186.604L241.439 187.265V186.915Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M242.8 190.563C242.8 191.072 242.724 191.505 242.579 191.862C242.435 192.219 242.23 192.47 241.979 192.615C241.728 192.759 241.523 192.744 241.378 192.554C241.234 192.364 241.158 192.022 241.158 191.513V190.57C241.158 190.061 241.234 189.628 241.378 189.271C241.523 188.913 241.728 188.663 241.979 188.511C242.237 188.366 242.435 188.381 242.587 188.571C242.731 188.761 242.807 189.103 242.807 189.613V190.563H242.8ZM242.45 189.704C242.45 189.362 242.412 189.119 242.328 188.997C242.245 188.868 242.131 188.853 241.971 188.944C241.819 189.035 241.705 189.187 241.622 189.407C241.538 189.628 241.5 189.909 241.5 190.259V191.429C241.5 191.771 241.538 192.014 241.622 192.143C241.705 192.273 241.819 192.295 241.971 192.204C242.123 192.113 242.245 191.961 242.321 191.741C242.404 191.52 242.442 191.231 242.442 190.889V189.704H242.45Z"
                        fill="#27DEBF" />
                    <path
                        d="M241.439 198.14L241.842 197.836V194.849L241.432 195.092V194.758L242.192 194.066V197.638L242.587 197.486V197.828L241.439 198.49V198.14Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M242.8 201.789C242.8 202.298 242.724 202.732 242.579 203.089C242.435 203.446 242.23 203.697 241.979 203.841C241.728 203.986 241.523 203.97 241.378 203.78C241.234 203.59 241.158 203.248 241.158 202.739V201.797C241.158 201.288 241.234 200.854 241.378 200.497C241.523 200.14 241.728 199.889 241.979 199.737C242.237 199.593 242.435 199.608 242.587 199.798C242.731 199.988 242.807 200.33 242.807 200.839V201.789H242.8ZM242.45 200.93C242.45 200.588 242.412 200.353 242.328 200.224C242.245 200.094 242.131 200.079 241.971 200.17C241.819 200.262 241.705 200.414 241.622 200.634C241.538 200.854 241.5 201.136 241.5 201.485V202.656C241.5 202.998 241.538 203.241 241.622 203.37C241.705 203.499 241.819 203.522 241.971 203.431C242.123 203.34 242.245 203.188 242.321 202.967C242.404 202.747 242.442 202.458 242.442 202.116V200.93H242.45Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M241.439 209.367L241.842 209.063V206.076L241.432 206.319V205.985L242.192 205.293V208.857L242.587 208.705V209.047L241.439 209.709V209.367Z"
                        fill="#27DEBF" />
                    <path
                        d="M241.439 214.974L241.842 214.67V211.683L241.432 211.926V211.592L242.192 210.9V214.472L242.587 214.32V214.662L241.439 215.324V214.974Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M241.439 220.591L241.842 220.287V217.3L241.432 217.544V217.209L242.192 216.518V220.09L242.587 219.938V220.28L241.439 220.941V220.591Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M242.8 224.238C242.8 224.748 242.724 225.181 242.579 225.538C242.435 225.895 242.23 226.146 241.979 226.29C241.728 226.435 241.523 226.42 241.378 226.23C241.234 226.04 241.158 225.698 241.158 225.188V224.246C241.158 223.737 241.234 223.304 241.378 222.946C241.523 222.589 241.728 222.338 241.979 222.186C242.237 222.042 242.435 222.057 242.587 222.247C242.731 222.437 242.807 222.779 242.807 223.288V224.238H242.8ZM242.45 223.38C242.45 223.038 242.412 222.794 242.328 222.673C242.245 222.544 242.131 222.528 241.971 222.62C241.819 222.711 241.705 222.863 241.622 223.083C241.538 223.304 241.5 223.585 241.5 223.934V225.105C241.5 225.447 241.538 225.69 241.622 225.819C241.705 225.948 241.819 225.971 241.971 225.88C242.123 225.789 242.245 225.637 242.321 225.416C242.404 225.196 242.442 224.907 242.442 224.565V223.38H242.45Z"
                        fill="#27DEBF" />
                    <path
                        d="M241.439 231.816L241.842 231.512V228.525L241.432 228.768V228.434L242.192 227.742V231.314L242.587 231.162V231.504L241.439 232.165V231.816Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M242.8 235.465C242.8 235.974 242.724 236.407 242.579 236.765C242.435 237.122 242.23 237.373 241.979 237.517C241.728 237.661 241.523 237.646 241.378 237.456C241.234 237.266 241.158 236.924 241.158 236.415V235.473C241.158 234.963 241.234 234.53 241.378 234.173C241.523 233.816 241.728 233.565 241.979 233.413C242.237 233.269 242.435 233.284 242.587 233.474C242.731 233.664 242.807 234.013 242.807 234.515V235.465H242.8ZM242.45 234.606C242.45 234.264 242.412 234.021 242.328 233.899C242.245 233.77 242.131 233.755 241.971 233.846C241.819 233.937 241.705 234.089 241.622 234.31C241.538 234.53 241.5 234.811 241.5 235.161V236.331C241.5 236.673 241.538 236.917 241.622 237.046C241.705 237.175 241.819 237.198 241.971 237.107C242.123 237.015 242.245 236.863 242.321 236.643C242.404 236.423 242.442 236.134 242.442 235.792V234.606H242.45Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M241.439 243.042L241.842 242.738V239.752L241.432 239.995V239.66L242.192 238.969V242.541L242.587 242.389V242.731L241.439 243.392V243.042Z"
                        fill="#27DEBF" />
                    <path
                        d="M242.8 246.69C242.8 247.199 242.724 247.632 242.579 247.989C242.435 248.346 242.23 248.597 241.979 248.742C241.728 248.886 241.523 248.871 241.378 248.681C241.234 248.491 241.158 248.149 241.158 247.64V246.697C241.158 246.188 241.234 245.755 241.378 245.398C241.523 245.04 241.728 244.79 241.979 244.638C242.237 244.493 242.435 244.508 242.587 244.698C242.731 244.888 242.807 245.238 242.807 245.74V246.69H242.8ZM242.45 245.831C242.45 245.489 242.412 245.246 242.328 245.124C242.245 244.995 242.131 244.98 241.971 245.063C241.819 245.154 241.705 245.306 241.622 245.527C241.538 245.747 241.5 246.028 241.5 246.378V247.548C241.5 247.89 241.538 248.134 241.622 248.263C241.705 248.392 241.819 248.415 241.971 248.324C242.123 248.232 242.245 248.08 242.321 247.852C242.397 247.624 242.442 247.343 242.442 247.001V245.831H242.45Z"
                        fill="#27DEBF" />
                    <path
                        d="M237.692 187.897C237.692 188.406 237.616 188.839 237.472 189.196C237.328 189.553 237.122 189.804 236.872 189.949C236.621 190.093 236.416 190.078 236.271 189.888C236.127 189.698 236.051 189.356 236.051 188.847V187.904C236.051 187.395 236.127 186.962 236.271 186.605C236.416 186.247 236.621 185.997 236.872 185.845C237.13 185.7 237.328 185.715 237.48 185.905C237.624 186.095 237.7 186.437 237.7 186.947V187.897H237.692ZM237.343 187.038C237.343 186.696 237.305 186.453 237.221 186.331C237.138 186.202 237.024 186.187 236.864 186.278C236.712 186.369 236.598 186.521 236.514 186.741C236.431 186.962 236.393 187.243 236.393 187.593V188.763C236.393 189.105 236.431 189.348 236.514 189.477C236.598 189.607 236.712 189.629 236.864 189.538C237.016 189.447 237.138 189.295 237.214 189.075C237.297 188.854 237.335 188.565 237.335 188.223V187.038H237.343Z"
                        fill="#27DEBF" />
                    <path
                        d="M236.332 195.474L236.735 195.17V192.183L236.324 192.426V192.092L237.084 191.4V194.972L237.48 194.82V195.162L236.332 195.824V195.474Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M236.332 201.091L236.735 200.787V197.8L236.324 198.044V197.709L237.084 197.018V200.59L237.48 200.438V200.78L236.332 201.441V201.091Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M236.332 206.699L236.735 206.395V203.408L236.324 203.651V203.317L237.084 202.625V206.197L237.48 206.045V206.387L236.332 207.048V206.699Z"
                        fill="#27DEBF" />
                    <path
                        d="M237.692 210.348C237.692 210.857 237.616 211.29 237.472 211.647C237.328 212.005 237.122 212.255 236.872 212.4C236.621 212.544 236.416 212.529 236.271 212.339C236.127 212.149 236.051 211.807 236.051 211.298V210.355C236.051 209.846 236.127 209.413 236.271 209.056C236.416 208.699 236.621 208.448 236.872 208.296C237.13 208.151 237.328 208.167 237.48 208.357C237.624 208.547 237.7 208.889 237.7 209.398V210.348H237.692ZM237.343 209.489C237.343 209.147 237.305 208.904 237.221 208.782C237.138 208.653 237.024 208.638 236.864 208.729C236.712 208.82 236.598 208.972 236.514 209.193C236.431 209.413 236.393 209.694 236.393 210.044V211.214C236.393 211.556 236.431 211.799 236.514 211.929C236.598 212.058 236.712 212.081 236.864 211.989C237.016 211.898 237.138 211.746 237.214 211.526C237.297 211.305 237.335 211.017 237.335 210.675V209.489H237.343Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M237.692 215.963C237.692 216.472 237.616 216.905 237.472 217.263C237.328 217.62 237.122 217.871 236.872 218.015C236.621 218.159 236.416 218.144 236.271 217.954C236.127 217.764 236.051 217.422 236.051 216.913V215.971C236.051 215.461 236.127 215.028 236.271 214.671C236.416 214.314 236.621 214.063 236.872 213.911C237.13 213.767 237.328 213.782 237.48 213.972C237.624 214.162 237.7 214.504 237.7 215.013V215.963H237.692ZM237.343 215.104C237.343 214.762 237.305 214.519 237.221 214.397C237.138 214.268 237.024 214.253 236.864 214.344C236.712 214.435 236.598 214.587 236.514 214.808C236.431 215.028 236.393 215.309 236.393 215.659V216.829C236.393 217.171 236.431 217.415 236.514 217.544C236.598 217.673 236.712 217.696 236.864 217.605C237.016 217.513 237.138 217.361 237.214 217.141C237.297 216.921 237.335 216.632 237.335 216.29V215.104H237.343Z"
                        fill="#27DEBF" />
                    <path
                        d="M236.332 223.54L236.735 223.236V220.25L236.324 220.493V220.158L237.084 219.467V223.039L237.48 222.887V223.229L236.332 223.89V223.54Z"
                        fill="#27DEBF" />
                    <path
                        d="M237.692 227.19C237.692 227.699 237.616 228.132 237.472 228.489C237.328 228.846 237.122 229.097 236.872 229.242C236.621 229.386 236.416 229.371 236.271 229.181C236.127 228.991 236.051 228.649 236.051 228.14V227.197C236.051 226.688 236.127 226.255 236.271 225.898C236.416 225.54 236.621 225.29 236.872 225.138C237.13 224.993 237.328 225.008 237.48 225.198C237.624 225.388 237.7 225.73 237.7 226.24V227.19H237.692ZM237.343 226.331C237.343 225.989 237.305 225.746 237.221 225.624C237.138 225.495 237.024 225.48 236.864 225.571C236.712 225.662 236.598 225.814 236.514 226.034C236.431 226.255 236.393 226.536 236.393 226.886V228.056C236.393 228.398 236.431 228.641 236.514 228.77C236.598 228.9 236.712 228.922 236.864 228.831C237.016 228.74 237.138 228.588 237.214 228.368C237.297 228.147 237.335 227.858 237.335 227.516V226.331H237.343Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M236.332 234.765L236.735 234.461V231.474L236.324 231.717V231.383L237.084 230.691V234.263L237.48 234.111V234.453L236.332 235.115V234.765Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M237.692 238.414C237.692 238.923 237.616 239.357 237.472 239.714C237.328 240.071 237.122 240.322 236.872 240.466C236.621 240.611 236.416 240.595 236.271 240.405C236.127 240.215 236.051 239.873 236.051 239.364V238.422C236.051 237.913 236.127 237.479 236.271 237.122C236.416 236.765 236.621 236.514 236.872 236.362C237.13 236.218 237.328 236.233 237.48 236.423C237.624 236.613 237.7 236.955 237.7 237.464V238.414H237.692ZM237.343 237.555C237.343 237.213 237.305 236.97 237.221 236.849C237.138 236.719 237.024 236.704 236.864 236.795C236.712 236.887 236.598 237.039 236.514 237.259C236.431 237.479 236.393 237.761 236.393 238.11V239.281C236.393 239.623 236.431 239.866 236.514 239.995C236.598 240.124 236.712 240.147 236.864 240.056C237.016 239.965 237.138 239.813 237.214 239.585C237.297 239.364 237.335 239.075 237.335 238.733V237.555H237.343Z"
                        fill="#27DEBF" />
                    <path
                        d="M236.332 245.991L236.735 245.68V242.693L236.324 242.936V242.602L237.084 241.91V245.475L237.48 245.323V245.665L236.332 246.326V245.991Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M237.692 249.639C237.692 250.148 237.616 250.581 237.472 250.938C237.328 251.296 237.122 251.546 236.872 251.691C236.621 251.835 236.416 251.82 236.271 251.63C236.127 251.44 236.051 251.098 236.051 250.589V249.646C236.051 249.137 236.127 248.704 236.271 248.347C236.416 247.99 236.621 247.739 236.872 247.587C237.13 247.442 237.328 247.458 237.48 247.648C237.624 247.838 237.7 248.18 237.7 248.689V249.639H237.692ZM237.343 248.78C237.343 248.438 237.305 248.195 237.221 248.073C237.138 247.944 237.024 247.929 236.864 248.02C236.712 248.111 236.598 248.263 236.514 248.484C236.431 248.704 236.393 248.985 236.393 249.335V250.505C236.393 250.847 236.431 251.09 236.514 251.22C236.598 251.349 236.712 251.372 236.864 251.28C237.016 251.189 237.138 251.037 237.214 250.809C237.297 250.589 237.335 250.3 237.335 249.958V248.78H237.343Z"
                        fill="#27DEBF" />
                    <path
                        d="M231.225 192.814L231.628 192.51V189.523L231.217 189.766V189.432L231.977 188.74V192.312L232.372 192.16V192.502L231.225 193.163V192.814Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M231.225 198.423L231.628 198.119V195.132L231.217 195.376V195.041L231.977 194.35V197.922L232.372 197.77V198.112L231.225 198.773V198.423Z"
                        fill="#27DEBF" />
                    <path
                        d="M232.585 202.071C232.585 202.58 232.509 203.013 232.365 203.37C232.22 203.727 232.015 203.978 231.764 204.123C231.514 204.267 231.308 204.252 231.164 204.062C231.012 203.872 230.944 203.53 230.944 203.021V202.078C230.944 201.569 231.02 201.136 231.164 200.778C231.308 200.421 231.514 200.17 231.764 200.018C232.023 199.874 232.22 199.889 232.372 200.079C232.524 200.269 232.593 200.611 232.593 201.121V202.071H232.585ZM232.236 201.212C232.236 200.87 232.198 200.626 232.114 200.505C232.03 200.376 231.916 200.361 231.757 200.452C231.605 200.543 231.491 200.695 231.407 200.915C231.324 201.136 231.286 201.417 231.286 201.766V202.937C231.286 203.279 231.324 203.522 231.407 203.651C231.491 203.78 231.605 203.803 231.757 203.712C231.909 203.621 232.03 203.469 232.106 203.248C232.19 203.028 232.228 202.739 232.228 202.397V201.212H232.236Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M231.225 209.648L231.628 209.344V206.357L231.217 206.6V206.266L231.977 205.574V209.139L232.372 208.987V209.329L231.225 209.99V209.648Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M232.585 213.295C232.585 213.804 232.509 214.238 232.365 214.595C232.22 214.952 232.015 215.203 231.764 215.347C231.514 215.492 231.308 215.476 231.164 215.286C231.012 215.096 230.944 214.754 230.944 214.245V213.303C230.944 212.794 231.02 212.36 231.164 212.003C231.308 211.646 231.514 211.395 231.764 211.243C232.023 211.099 232.22 211.114 232.372 211.304C232.524 211.494 232.593 211.836 232.593 212.345V213.295H232.585ZM232.236 212.436C232.236 212.094 232.198 211.851 232.114 211.73C232.03 211.6 231.916 211.585 231.757 211.676C231.605 211.768 231.491 211.92 231.407 212.14C231.324 212.36 231.286 212.642 231.286 212.991V214.162C231.286 214.504 231.324 214.747 231.407 214.876C231.491 215.005 231.605 215.028 231.757 214.937C231.909 214.846 232.03 214.694 232.106 214.473C232.19 214.253 232.228 213.964 232.228 213.622V212.436H232.236Z"
                        fill="#27DEBF" />
                    <path
                        d="M232.585 218.912C232.585 219.421 232.509 219.855 232.365 220.212C232.22 220.569 232.015 220.82 231.764 220.964C231.514 221.109 231.308 221.093 231.164 220.903C231.012 220.713 230.944 220.371 230.944 219.862V218.92C230.944 218.411 231.02 217.977 231.164 217.62C231.308 217.263 231.514 217.012 231.764 216.86C232.023 216.716 232.22 216.731 232.372 216.921C232.524 217.111 232.593 217.453 232.593 217.962V218.912H232.585ZM232.236 218.053C232.236 217.711 232.198 217.468 232.114 217.347C232.03 217.217 231.916 217.202 231.757 217.293C231.605 217.385 231.491 217.537 231.407 217.757C231.324 217.977 231.286 218.259 231.286 218.608V219.779C231.286 220.121 231.324 220.364 231.407 220.493C231.491 220.622 231.605 220.645 231.757 220.554C231.909 220.463 232.03 220.311 232.106 220.09C232.19 219.87 232.228 219.581 232.228 219.239V218.053H232.236Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M231.225 226.49L231.628 226.186V223.199L231.217 223.442V223.108L231.977 222.416V225.988L232.372 225.836V226.178L231.225 226.839V226.49Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M232.585 230.137C232.585 230.646 232.509 231.079 232.365 231.437C232.22 231.794 232.015 232.045 231.764 232.189C231.514 232.333 231.308 232.318 231.164 232.128C231.012 231.938 230.944 231.596 230.944 231.087V230.145C230.944 229.635 231.02 229.202 231.164 228.845C231.308 228.488 231.514 228.237 231.764 228.085C232.023 227.941 232.22 227.956 232.372 228.146C232.524 228.336 232.593 228.678 232.593 229.187V230.137H232.585ZM232.236 229.278C232.236 228.936 232.198 228.693 232.114 228.571C232.03 228.442 231.916 228.427 231.757 228.518C231.605 228.609 231.491 228.761 231.407 228.982C231.324 229.202 231.286 229.483 231.286 229.833V231.003C231.286 231.345 231.324 231.589 231.407 231.718C231.491 231.847 231.605 231.87 231.757 231.778C231.909 231.687 232.03 231.535 232.106 231.307C232.19 231.087 232.228 230.798 232.228 230.456V229.278H232.236Z"
                        fill="#27DEBF" />
                    <path
                        d="M232.585 235.746C232.585 236.255 232.509 236.689 232.365 237.046C232.22 237.403 232.015 237.654 231.764 237.798C231.514 237.943 231.308 237.927 231.164 237.737C231.012 237.547 230.944 237.205 230.944 236.696V235.754C230.944 235.245 231.02 234.811 231.164 234.454C231.308 234.097 231.514 233.846 231.764 233.694C232.023 233.55 232.22 233.565 232.372 233.755C232.524 233.945 232.593 234.287 232.593 234.796V235.746H232.585ZM232.236 234.895C232.236 234.553 232.198 234.31 232.114 234.188C232.03 234.059 231.916 234.044 231.757 234.135C231.605 234.226 231.491 234.378 231.407 234.599C231.324 234.819 231.286 235.1 231.286 235.45V236.62C231.286 236.962 231.324 237.205 231.407 237.335C231.491 237.464 231.605 237.487 231.757 237.395C231.909 237.304 232.03 237.152 232.106 236.924C232.19 236.704 232.228 236.415 232.228 236.073V234.895H232.236Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M231.225 243.324L231.628 243.02V240.033L231.217 240.276V239.942L231.977 239.25V242.822L232.372 242.67V243.012L231.225 243.673V243.324Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M231.225 248.941L231.628 248.629V245.642L231.217 245.885V245.551L231.977 244.859V248.431L232.372 248.279V248.621L231.225 249.283V248.941Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M232.585 252.588C232.585 253.097 232.509 253.53 232.365 253.888C232.22 254.245 232.015 254.496 231.764 254.64C231.514 254.784 231.308 254.769 231.164 254.579C231.012 254.389 230.944 254.047 230.944 253.538V252.596C230.944 252.086 231.02 251.653 231.164 251.296C231.308 250.939 231.514 250.688 231.764 250.536C232.023 250.392 232.22 250.407 232.372 250.597C232.524 250.787 232.593 251.129 232.593 251.638V252.588H232.585ZM232.236 251.729C232.236 251.387 232.198 251.144 232.114 251.022C232.03 250.893 231.916 250.878 231.757 250.969C231.605 251.06 231.491 251.212 231.407 251.433C231.324 251.653 231.286 251.934 231.286 252.284V253.454C231.286 253.796 231.324 254.04 231.407 254.169C231.491 254.298 231.605 254.321 231.757 254.23C231.909 254.138 232.03 253.986 232.106 253.758C232.19 253.538 232.228 253.249 232.228 252.907V251.729H232.236Z"
                        fill="#27DEBF" />
                    <path
                        d="M256.715 178.091L257.118 177.787V174.8L256.708 175.044V174.709L257.468 174.018V177.59L257.863 177.438V177.78L256.715 178.441V178.091Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M258.076 181.738C258.076 182.248 258 182.681 257.855 183.038C257.711 183.395 257.506 183.646 257.255 183.79C257.004 183.935 256.799 183.92 256.654 183.73C256.51 183.54 256.434 183.198 256.434 182.688V181.746C256.434 181.237 256.51 180.804 256.654 180.446C256.799 180.089 257.004 179.838 257.255 179.686C257.513 179.542 257.711 179.557 257.863 179.747C258.007 179.937 258.083 180.279 258.083 180.788V181.738H258.076ZM257.726 180.88C257.726 180.538 257.688 180.294 257.604 180.173C257.521 180.044 257.407 180.028 257.247 180.12C257.095 180.211 256.981 180.363 256.898 180.583C256.814 180.804 256.776 181.085 256.776 181.434V182.605C256.776 182.947 256.814 183.19 256.898 183.319C256.981 183.448 257.095 183.471 257.247 183.38C257.399 183.289 257.521 183.137 257.597 182.916C257.68 182.696 257.718 182.407 257.718 182.065V180.88H257.726Z"
                        fill="#27DEBF" />
                    <path
                        d="M256.715 189.316L257.118 189.012V186.025L256.708 186.268V185.934L257.468 185.242V188.814L257.863 188.662V189.004L256.715 189.665V189.316Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M258.076 192.965C258.076 193.474 258 193.907 257.855 194.265C257.711 194.622 257.506 194.873 257.255 195.017C257.004 195.161 256.799 195.146 256.654 194.956C256.51 194.766 256.434 194.424 256.434 193.915V192.973C256.434 192.463 256.51 192.03 256.654 191.673C256.799 191.316 257.004 191.065 257.255 190.913C257.513 190.769 257.711 190.784 257.863 190.974C258.007 191.164 258.083 191.506 258.083 192.015V192.965H258.076ZM257.726 192.106C257.726 191.764 257.688 191.521 257.604 191.399C257.521 191.27 257.407 191.255 257.247 191.346C257.095 191.437 256.981 191.589 256.898 191.81C256.814 192.03 256.776 192.311 256.776 192.661V193.831C256.776 194.173 256.814 194.417 256.898 194.546C256.981 194.675 257.095 194.698 257.247 194.607C257.399 194.515 257.521 194.363 257.597 194.143C257.68 193.923 257.718 193.634 257.718 193.292V192.106H257.726Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M256.715 200.542L257.118 200.238V197.252L256.708 197.495V197.16L257.468 196.469V200.041L257.863 199.889V200.231L256.715 200.892V200.542Z"
                        fill="#27DEBF" />
                    <path
                        d="M256.715 206.15L257.118 205.846V202.859L256.708 203.102V202.768L257.468 202.076V205.648L257.863 205.496V205.838L256.715 206.499V206.15Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M256.715 211.767L257.118 211.463V208.476L256.708 208.719V208.385L257.468 207.693V211.265L257.863 211.113V211.455L256.715 212.117V211.767Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M258.076 215.414C258.076 215.923 258 216.357 257.855 216.714C257.711 217.071 257.506 217.322 257.255 217.466C257.004 217.611 256.799 217.595 256.654 217.405C256.51 217.215 256.434 216.873 256.434 216.364V215.422C256.434 214.913 256.51 214.479 256.654 214.122C256.799 213.765 257.004 213.514 257.255 213.362C257.513 213.218 257.711 213.233 257.863 213.423C258.007 213.613 258.083 213.955 258.083 214.464V215.414H258.076ZM257.726 214.555C257.726 214.213 257.688 213.97 257.604 213.849C257.521 213.719 257.407 213.704 257.247 213.795C257.095 213.887 256.981 214.039 256.898 214.259C256.814 214.479 256.776 214.761 256.776 215.11V216.281C256.776 216.623 256.814 216.866 256.898 216.995C256.981 217.124 257.095 217.147 257.247 217.056C257.399 216.965 257.521 216.813 257.597 216.592C257.68 216.372 257.718 216.083 257.718 215.741V214.555H257.726Z"
                        fill="#27DEBF" />
                    <path
                        d="M256.715 222.992L257.118 222.688V219.701L256.708 219.944V219.61L257.468 218.918V222.49L257.863 222.338V222.68L256.715 223.341V222.992Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M258.076 226.641C258.076 227.15 258 227.583 257.855 227.94C257.711 228.298 257.506 228.548 257.255 228.693C257.004 228.837 256.799 228.822 256.654 228.632C256.51 228.442 256.434 228.1 256.434 227.591V226.648C256.434 226.139 256.51 225.706 256.654 225.349C256.799 224.992 257.004 224.741 257.255 224.589C257.513 224.444 257.711 224.46 257.863 224.65C258.007 224.84 258.083 225.189 258.083 225.691V226.641H258.076ZM257.726 225.782C257.726 225.44 257.688 225.197 257.604 225.075C257.521 224.946 257.407 224.931 257.247 225.022C257.095 225.113 256.981 225.265 256.898 225.486C256.814 225.706 256.776 225.987 256.776 226.337V227.507C256.776 227.849 256.814 228.092 256.898 228.222C256.981 228.351 257.095 228.374 257.247 228.282C257.399 228.191 257.521 228.039 257.597 227.819C257.68 227.598 257.718 227.31 257.718 226.968V225.782H257.726Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M256.715 234.218L257.118 233.914V230.927L256.708 231.171V230.836L257.468 230.145V233.717L257.863 233.565V233.907L256.715 234.568V234.218Z"
                        fill="#27DEBF" />
                    <path
                        d="M258.076 237.865C258.076 238.375 258 238.808 257.855 239.165C257.711 239.522 257.506 239.773 257.255 239.917C257.004 240.062 256.799 240.047 256.654 239.857C256.51 239.667 256.434 239.325 256.434 238.815V237.873C256.434 237.364 256.51 236.931 256.654 236.573C256.799 236.216 257.004 235.965 257.255 235.813C257.513 235.669 257.711 235.684 257.863 235.874C258.007 236.064 258.083 236.414 258.083 236.915V237.865H258.076ZM257.726 237.007C257.726 236.665 257.688 236.421 257.604 236.3C257.521 236.171 257.407 236.155 257.247 236.247C257.095 236.338 256.981 236.49 256.898 236.71C256.814 236.931 256.776 237.212 256.776 237.561V238.732C256.776 239.074 256.814 239.317 256.898 239.446C256.981 239.575 257.095 239.598 257.247 239.507C257.399 239.416 257.521 239.264 257.597 239.036C257.68 238.815 257.718 238.527 257.718 238.185V237.007H257.726Z"
                        fill="#27DEBF" />
                    <path
                        d="M252.968 179.078C252.968 179.588 252.892 180.021 252.748 180.378C252.604 180.735 252.398 180.986 252.148 181.13C251.897 181.275 251.692 181.26 251.547 181.07C251.395 180.88 251.327 180.538 251.327 180.028V179.086C251.327 178.577 251.403 178.144 251.547 177.786C251.692 177.429 251.897 177.178 252.148 177.026C252.406 176.882 252.604 176.897 252.756 177.087C252.908 177.277 252.976 177.619 252.976 178.128V179.078H252.968ZM252.619 178.22C252.619 177.878 252.581 177.634 252.497 177.513C252.414 177.384 252.3 177.368 252.14 177.46C251.988 177.551 251.874 177.703 251.79 177.923C251.707 178.144 251.669 178.425 251.669 178.774V179.945C251.669 180.287 251.707 180.53 251.79 180.659C251.874 180.788 251.988 180.811 252.14 180.72C252.292 180.629 252.414 180.477 252.49 180.256C252.573 180.036 252.611 179.747 252.611 179.405V178.22H252.619Z"
                        fill="#27DEBF" />
                    <path
                        d="M251.608 186.648L252.011 186.344V183.357L251.6 183.6V183.266L252.36 182.574V186.146L252.756 185.994V186.336L251.608 186.997V186.648Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M251.608 192.265L252.011 191.961V188.974L251.6 189.217V188.883L252.36 188.191V191.763L252.756 191.611V191.953L251.608 192.615V192.265Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M251.608 197.872L252.011 197.568V194.582L251.6 194.825V194.49L252.36 193.799V197.371L252.756 197.219V197.561L251.608 198.222V197.872Z"
                        fill="#27DEBF" />
                    <path
                        d="M252.968 201.529C252.968 202.039 252.892 202.472 252.748 202.829C252.604 203.186 252.398 203.437 252.148 203.581C251.897 203.726 251.692 203.711 251.547 203.521C251.395 203.331 251.327 202.989 251.327 202.479V201.537C251.327 201.028 251.403 200.595 251.547 200.237C251.692 199.88 251.897 199.629 252.148 199.477C252.406 199.333 252.604 199.348 252.756 199.538C252.908 199.728 252.976 200.07 252.976 200.579V201.529H252.968ZM252.619 200.671C252.619 200.329 252.581 200.085 252.497 199.964C252.414 199.835 252.3 199.819 252.14 199.911C251.988 200.002 251.874 200.154 251.79 200.374C251.707 200.595 251.669 200.876 251.669 201.225V202.396C251.669 202.738 251.707 202.981 251.79 203.11C251.874 203.239 251.988 203.262 252.14 203.171C252.292 203.08 252.414 202.928 252.49 202.707C252.573 202.487 252.611 202.198 252.611 201.856V200.671H252.619Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M252.968 207.137C252.968 207.646 252.892 208.079 252.748 208.437C252.604 208.794 252.398 209.044 252.148 209.189C251.897 209.333 251.692 209.318 251.547 209.128C251.395 208.938 251.327 208.596 251.327 208.087V207.145C251.327 206.635 251.403 206.202 251.547 205.845C251.692 205.488 251.897 205.237 252.148 205.085C252.406 204.941 252.604 204.956 252.756 205.146C252.908 205.336 252.976 205.678 252.976 206.187V207.137H252.968ZM252.619 206.278C252.619 205.936 252.581 205.701 252.497 205.571C252.414 205.442 252.3 205.427 252.14 205.518C251.988 205.609 251.874 205.761 251.79 205.982C251.707 206.202 251.669 206.483 251.669 206.833V208.003C251.669 208.345 251.707 208.589 251.79 208.718C251.874 208.847 251.988 208.87 252.14 208.779C252.292 208.687 252.414 208.535 252.49 208.315C252.573 208.095 252.611 207.806 252.611 207.464V206.278H252.619Z"
                        fill="#27DEBF" />
                    <path
                        d="M251.608 214.714L252.011 214.41V211.423L251.6 211.667V211.332L252.36 210.641V214.213L252.756 214.061V214.403L251.608 215.064V214.714Z"
                        fill="#27DEBF" />
                    <path
                        d="M252.968 218.363C252.968 218.873 252.892 219.306 252.748 219.663C252.604 220.02 252.398 220.271 252.148 220.415C251.897 220.56 251.692 220.545 251.547 220.355C251.395 220.165 251.327 219.823 251.327 219.313V218.371C251.327 217.862 251.403 217.429 251.547 217.071C251.692 216.714 251.897 216.463 252.148 216.311C252.406 216.167 252.604 216.182 252.756 216.372C252.908 216.562 252.976 216.904 252.976 217.413V218.363H252.968ZM252.619 217.505C252.619 217.163 252.581 216.919 252.497 216.798C252.414 216.669 252.3 216.653 252.14 216.745C251.988 216.836 251.874 216.988 251.79 217.208C251.707 217.429 251.669 217.71 251.669 218.059V219.23C251.669 219.572 251.707 219.815 251.79 219.944C251.874 220.073 251.988 220.096 252.14 220.005C252.292 219.914 252.414 219.762 252.49 219.541C252.573 219.321 252.611 219.032 252.611 218.69V217.505H252.619Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M251.608 225.941L252.011 225.637V222.65L251.6 222.893V222.559L252.36 221.867V225.439L252.756 225.287V225.629L251.608 226.29V225.941Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M252.968 229.588C252.968 230.097 252.892 230.53 252.748 230.888C252.604 231.245 252.398 231.496 252.148 231.64C251.897 231.784 251.692 231.769 251.547 231.579C251.395 231.389 251.327 231.047 251.327 230.538V229.596C251.327 229.086 251.403 228.653 251.547 228.296C251.692 227.939 251.897 227.688 252.148 227.536C252.406 227.392 252.604 227.407 252.756 227.597C252.908 227.787 252.976 228.129 252.976 228.638V229.588H252.968ZM252.619 228.729C252.619 228.387 252.581 228.144 252.497 228.022C252.414 227.893 252.3 227.878 252.14 227.969C251.988 228.06 251.874 228.212 251.79 228.433C251.707 228.653 251.669 228.934 251.669 229.284V230.454C251.669 230.796 251.707 231.04 251.79 231.169C251.874 231.298 251.988 231.321 252.14 231.23C252.292 231.138 252.414 230.986 252.49 230.758C252.573 230.538 252.611 230.249 252.611 229.907V228.729H252.619Z"
                        fill="#27DEBF" />
                    <path
                        d="M251.608 237.165L252.011 236.854V233.867L251.6 234.11V233.776L252.36 233.084V236.656L252.756 236.504V236.846L251.608 237.507V237.165Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M252.968 240.813C252.968 241.322 252.892 241.755 252.748 242.112C252.604 242.469 252.398 242.72 252.148 242.865C251.897 243.009 251.692 242.994 251.547 242.804C251.395 242.614 251.327 242.272 251.327 241.763V240.82C251.327 240.311 251.403 239.878 251.547 239.521C251.692 239.163 251.897 238.913 252.148 238.761C252.406 238.616 252.604 238.631 252.756 238.821C252.908 239.011 252.976 239.361 252.976 239.863V240.813H252.968ZM252.619 239.954C252.619 239.612 252.581 239.369 252.497 239.247C252.414 239.118 252.3 239.103 252.14 239.194C251.988 239.285 251.874 239.437 251.79 239.657C251.707 239.878 251.669 240.159 251.669 240.509V241.679C251.669 242.021 251.707 242.264 251.79 242.393C251.874 242.523 251.988 242.545 252.14 242.454C252.292 242.363 252.414 242.211 252.49 241.983C252.573 241.763 252.611 241.474 252.611 241.132V239.954H252.619Z"
                        fill="#27DEBF" />
                    <path
                        d="M246.501 183.99L246.904 183.686V180.699L246.493 180.942V180.608L247.253 179.916V183.48L247.648 183.328V183.67L246.501 184.332V183.99Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M246.501 189.599L246.904 189.295V186.308L246.493 186.551V186.217L247.253 185.525V189.097L247.648 188.945V189.287L246.501 189.949V189.599Z"
                        fill="#27DEBF" />
                    <path
                        d="M247.861 193.254C247.861 193.763 247.785 194.196 247.641 194.554C247.496 194.911 247.291 195.162 247.04 195.306C246.79 195.45 246.584 195.435 246.44 195.245C246.296 195.055 246.22 194.713 246.22 194.204V193.262C246.22 192.752 246.296 192.319 246.44 191.962C246.584 191.605 246.79 191.354 247.04 191.202C247.299 191.058 247.496 191.073 247.648 191.263C247.793 191.453 247.869 191.795 247.869 192.304V193.254H247.861ZM247.512 192.395C247.512 192.053 247.474 191.81 247.39 191.688C247.306 191.559 247.192 191.544 247.033 191.635C246.881 191.726 246.767 191.878 246.683 192.099C246.6 192.319 246.562 192.6 246.562 192.95V194.12C246.562 194.462 246.6 194.706 246.683 194.835C246.767 194.964 246.881 194.987 247.033 194.896C247.185 194.804 247.306 194.652 247.382 194.432C247.466 194.212 247.504 193.923 247.504 193.581V192.395H247.512Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M246.501 200.824L246.904 200.52V197.533L246.493 197.776V197.442L247.253 196.75V200.322L247.648 200.17V200.512L246.501 201.173V200.824Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M247.861 204.479C247.861 204.988 247.785 205.421 247.641 205.778C247.496 206.136 247.291 206.386 247.04 206.531C246.79 206.675 246.584 206.66 246.44 206.47C246.296 206.28 246.22 205.938 246.22 205.429V204.486C246.22 203.977 246.296 203.544 246.44 203.187C246.584 202.829 246.79 202.579 247.04 202.427C247.299 202.282 247.496 202.298 247.648 202.488C247.793 202.678 247.869 203.02 247.869 203.529V204.479H247.861ZM247.512 203.62C247.512 203.278 247.474 203.035 247.39 202.913C247.306 202.784 247.192 202.769 247.033 202.86C246.881 202.951 246.767 203.103 246.683 203.324C246.6 203.544 246.562 203.825 246.562 204.175V205.345C246.562 205.687 246.6 205.93 246.683 206.06C246.767 206.189 246.881 206.212 247.033 206.12C247.185 206.029 247.306 205.877 247.382 205.657C247.466 205.436 247.504 205.148 247.504 204.806V203.62H247.512Z"
                        fill="#27DEBF" />
                    <path
                        d="M247.861 210.088C247.861 210.597 247.785 211.03 247.641 211.388C247.496 211.745 247.291 211.996 247.04 212.14C246.79 212.284 246.584 212.269 246.44 212.079C246.296 211.889 246.22 211.547 246.22 211.038V210.096C246.22 209.586 246.296 209.153 246.44 208.796C246.584 208.439 246.79 208.188 247.04 208.036C247.299 207.892 247.496 207.907 247.648 208.097C247.793 208.287 247.869 208.629 247.869 209.138V210.088H247.861ZM247.512 209.229C247.512 208.887 247.474 208.644 247.39 208.522C247.306 208.393 247.192 208.378 247.033 208.469C246.881 208.56 246.767 208.712 246.683 208.933C246.6 209.153 246.562 209.434 246.562 209.784V210.954C246.562 211.296 246.6 211.54 246.683 211.669C246.767 211.798 246.881 211.821 247.033 211.73C247.185 211.638 247.306 211.486 247.382 211.266C247.466 211.046 247.504 210.757 247.504 210.415V209.229H247.512Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M246.501 217.665L246.904 217.361V214.375L246.493 214.618V214.283L247.253 213.592V217.164L247.648 217.012V217.354L246.501 218.015V217.665Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M247.861 221.313C247.861 221.822 247.785 222.255 247.641 222.612C247.496 222.969 247.291 223.22 247.04 223.365C246.79 223.509 246.584 223.494 246.44 223.304C246.296 223.114 246.22 222.772 246.22 222.263V221.32C246.22 220.811 246.296 220.378 246.44 220.021C246.584 219.663 246.79 219.413 247.04 219.261C247.299 219.116 247.496 219.131 247.648 219.321C247.793 219.511 247.869 219.853 247.869 220.363V221.313H247.861ZM247.512 220.454C247.512 220.112 247.474 219.869 247.39 219.747C247.306 219.618 247.192 219.603 247.033 219.694C246.881 219.785 246.767 219.937 246.683 220.157C246.6 220.378 246.562 220.659 246.562 221.009V222.179C246.562 222.521 246.6 222.764 246.683 222.893C246.767 223.023 246.881 223.045 247.033 222.954C247.185 222.863 247.306 222.711 247.382 222.483C247.466 222.263 247.504 221.974 247.504 221.632V220.454H247.512Z"
                        fill="#27DEBF" />
                    <path
                        d="M247.861 226.93C247.861 227.439 247.785 227.872 247.641 228.229C247.496 228.587 247.291 228.837 247.04 228.982C246.79 229.126 246.584 229.111 246.44 228.921C246.296 228.731 246.22 228.389 246.22 227.88V226.937C246.22 226.428 246.296 225.995 246.44 225.638C246.584 225.281 246.79 225.03 247.04 224.878C247.299 224.733 247.496 224.749 247.648 224.939C247.793 225.129 247.869 225.471 247.869 225.98V226.93H247.861ZM247.512 226.071C247.512 225.729 247.474 225.486 247.39 225.364C247.306 225.235 247.192 225.22 247.033 225.311C246.881 225.402 246.767 225.554 246.683 225.775C246.6 225.995 246.562 226.276 246.562 226.626V227.796C246.562 228.138 246.6 228.381 246.683 228.511C246.767 228.64 246.881 228.663 247.033 228.571C247.185 228.48 247.306 228.328 247.382 228.1C247.466 227.88 247.504 227.591 247.504 227.249V226.071H247.512Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M246.501 234.507L246.904 234.203V231.216L246.493 231.46V231.125L247.253 230.434V234.006L247.648 233.854V234.196L246.501 234.857V234.507Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M246.501 240.116L246.904 239.805V236.818L246.493 237.061V236.727L247.253 236.035V239.607L247.648 239.455V239.797L246.501 240.458V240.116Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M247.861 243.764C247.861 244.273 247.785 244.706 247.641 245.063C247.496 245.421 247.291 245.671 247.04 245.816C246.79 245.96 246.584 245.945 246.44 245.755C246.296 245.565 246.22 245.223 246.22 244.714V243.771C246.22 243.262 246.296 242.829 246.44 242.472C246.584 242.115 246.79 241.864 247.04 241.712C247.299 241.567 247.496 241.583 247.648 241.773C247.793 241.963 247.869 242.305 247.869 242.814V243.764H247.861ZM247.512 242.905C247.512 242.563 247.474 242.32 247.39 242.198C247.306 242.069 247.192 242.054 247.033 242.145C246.881 242.236 246.767 242.388 246.683 242.609C246.6 242.829 246.562 243.11 246.562 243.46V244.63C246.562 244.972 246.6 245.215 246.683 245.345C246.767 245.474 246.881 245.497 247.033 245.405C247.185 245.314 247.306 245.162 247.382 244.934C247.466 244.714 247.504 244.425 247.504 244.083V242.905H247.512Z"
                        fill="#27DEBF" />
                    <path
                        d="M271.991 169.267L272.394 168.963V165.976L271.984 166.219V165.885L272.744 165.193V168.765L273.139 168.613V168.955L271.991 169.617V169.267Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M273.352 172.922C273.352 173.431 273.276 173.864 273.131 174.222C272.987 174.579 272.782 174.83 272.531 174.974C272.28 175.118 272.075 175.103 271.93 174.913C271.778 174.723 271.71 174.381 271.71 173.872V172.93C271.71 172.42 271.786 171.987 271.93 171.63C272.075 171.273 272.28 171.022 272.531 170.87C272.789 170.726 272.987 170.741 273.139 170.931C273.283 171.121 273.359 171.463 273.359 171.972V172.922H273.352ZM273.002 172.063C273.002 171.721 272.964 171.478 272.88 171.356C272.797 171.227 272.683 171.212 272.523 171.303C272.371 171.394 272.257 171.546 272.174 171.767C272.09 171.987 272.052 172.268 272.052 172.618V173.788C272.052 174.13 272.09 174.374 272.174 174.503C272.257 174.632 272.371 174.655 272.523 174.564C272.675 174.472 272.797 174.32 272.873 174.1C272.956 173.88 272.994 173.591 272.994 173.249V172.063H273.002Z"
                        fill="#27DEBF" />
                    <path
                        d="M271.991 180.492L272.394 180.188V177.201L271.984 177.444V177.11L272.744 176.418V179.99L273.139 179.838V180.18L271.991 180.841V180.492Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M273.352 184.149C273.352 184.658 273.276 185.091 273.131 185.448C272.987 185.805 272.782 186.056 272.531 186.201C272.28 186.345 272.075 186.33 271.93 186.14C271.778 185.95 271.71 185.608 271.71 185.099V184.156C271.71 183.647 271.786 183.214 271.93 182.857C272.075 182.499 272.28 182.249 272.531 182.097C272.789 181.952 272.987 181.967 273.139 182.157C273.283 182.347 273.359 182.689 273.359 183.199V184.149H273.352ZM273.002 183.29C273.002 182.948 272.964 182.705 272.88 182.583C272.797 182.454 272.683 182.439 272.523 182.53C272.371 182.621 272.257 182.773 272.174 182.993C272.09 183.214 272.052 183.495 272.052 183.845V185.015C272.052 185.357 272.09 185.6 272.174 185.729C272.257 185.859 272.371 185.881 272.523 185.79C272.675 185.699 272.797 185.547 272.873 185.327C272.956 185.106 272.994 184.817 272.994 184.475V183.29H273.002Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M271.991 191.718L272.394 191.414V188.427L271.984 188.671V188.336L272.744 187.645V191.217L273.139 191.065V191.407L271.991 192.068V191.718Z"
                        fill="#27DEBF" />
                    <path
                        d="M271.991 197.333L272.394 197.029V194.043L271.984 194.286V193.951L272.744 193.26V196.832L273.139 196.68V197.022L271.991 197.683V197.333Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M271.991 202.943L272.394 202.639V199.652L271.984 199.895V199.561L272.744 198.869V202.441L273.139 202.289V202.631L271.991 203.292V202.943Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M273.352 206.598C273.352 207.107 273.276 207.54 273.131 207.897C272.987 208.255 272.782 208.505 272.531 208.65C272.28 208.794 272.075 208.779 271.93 208.589C271.778 208.399 271.71 208.057 271.71 207.548V206.605C271.71 206.096 271.786 205.663 271.93 205.306C272.075 204.949 272.28 204.698 272.531 204.546C272.789 204.401 272.987 204.417 273.139 204.607C273.283 204.797 273.359 205.139 273.359 205.648V206.598H273.352ZM273.002 205.739C273.002 205.397 272.964 205.154 272.88 205.032C272.797 204.903 272.683 204.888 272.523 204.979C272.371 205.07 272.257 205.222 272.174 205.443C272.09 205.663 272.052 205.944 272.052 206.294V207.464C272.052 207.806 272.09 208.049 272.174 208.179C272.257 208.308 272.371 208.331 272.523 208.239C272.675 208.148 272.797 207.996 272.873 207.776C272.956 207.555 272.994 207.267 272.994 206.925V205.739H273.002Z"
                        fill="#27DEBF" />
                    <path
                        d="M271.991 214.167L272.394 213.863V210.877L271.984 211.12V210.785L272.744 210.094V213.666L273.139 213.514V213.856L271.991 214.517V214.167Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M273.352 217.822C273.352 218.332 273.276 218.765 273.131 219.122C272.987 219.479 272.782 219.73 272.531 219.874C272.28 220.019 272.075 220.004 271.93 219.814C271.778 219.624 271.71 219.282 271.71 218.772V217.83C271.71 217.321 271.786 216.888 271.93 216.53C272.075 216.173 272.28 215.922 272.531 215.77C272.789 215.626 272.987 215.641 273.139 215.831C273.283 216.021 273.359 216.371 273.359 216.872V217.822H273.352ZM273.002 216.964C273.002 216.622 272.964 216.378 272.88 216.257C272.797 216.128 272.683 216.112 272.523 216.204C272.371 216.295 272.257 216.447 272.174 216.667C272.09 216.888 272.052 217.169 272.052 217.518V218.689C272.052 219.031 272.09 219.274 272.174 219.403C272.257 219.532 272.371 219.555 272.523 219.464C272.675 219.373 272.797 219.221 272.873 218.993C272.956 218.772 272.994 218.484 272.994 218.142V216.964H273.002Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M271.991 225.394L272.394 225.09V222.103L271.984 222.346V222.012L272.744 221.32V224.892L273.139 224.74V225.082L271.991 225.743V225.394Z"
                        fill="#27DEBF" />
                    <path
                        d="M273.352 229.049C273.352 229.558 273.276 229.991 273.131 230.349C272.987 230.706 272.782 230.957 272.531 231.101C272.28 231.245 272.075 231.23 271.93 231.04C271.778 230.85 271.71 230.508 271.71 229.999V229.057C271.71 228.547 271.786 228.114 271.93 227.757C272.075 227.4 272.28 227.149 272.531 226.997C272.789 226.853 272.987 226.868 273.139 227.058C273.283 227.248 273.359 227.59 273.359 228.099V229.049H273.352ZM273.002 228.19C273.002 227.848 272.964 227.605 272.88 227.483C272.797 227.354 272.683 227.339 272.523 227.43C272.371 227.521 272.257 227.673 272.174 227.894C272.09 228.114 272.052 228.395 272.052 228.745V229.915C272.052 230.257 272.09 230.501 272.174 230.63C272.257 230.759 272.371 230.782 272.523 230.691C272.675 230.599 272.797 230.447 272.873 230.219C272.956 229.999 272.994 229.71 272.994 229.368V228.19H273.002Z"
                        fill="#27DEBF" />
                    <path
                        d="M268.244 170.254C268.244 170.763 268.168 171.196 268.024 171.554C267.88 171.911 267.674 172.162 267.424 172.306C267.173 172.45 266.968 172.435 266.823 172.245C266.679 172.055 266.603 171.713 266.603 171.204V170.262C266.603 169.752 266.679 169.319 266.823 168.962C266.968 168.605 267.173 168.354 267.424 168.202C267.682 168.058 267.88 168.073 268.032 168.263C268.176 168.453 268.252 168.795 268.252 169.304V170.254H268.244ZM267.895 169.395C267.895 169.053 267.857 168.81 267.773 168.688C267.69 168.559 267.576 168.544 267.416 168.635C267.264 168.726 267.142 168.878 267.066 169.099C266.983 169.319 266.945 169.6 266.945 169.95V171.12C266.945 171.462 266.983 171.706 267.066 171.835C267.15 171.964 267.264 171.987 267.416 171.896C267.568 171.804 267.69 171.652 267.766 171.432C267.849 171.212 267.887 170.923 267.887 170.581V169.395H267.895Z"
                        fill="#27DEBF" />
                    <path
                        d="M266.884 177.831L267.287 177.527V174.541L266.876 174.784V174.449L267.636 173.758V177.33L268.032 177.178V177.52L266.884 178.181V177.831Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M266.884 183.441L267.287 183.137V180.15L266.876 180.393V180.059L267.636 179.367V182.939L268.032 182.787V183.129L266.884 183.79V183.441Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M266.884 189.056L267.287 188.752V185.757L266.876 186.001V185.666L267.636 184.975V188.547L268.032 188.395V188.737L266.884 189.398V189.056Z"
                        fill="#27DEBF" />
                    <path
                        d="M268.244 192.705C268.244 193.214 268.168 193.648 268.024 194.005C267.88 194.362 267.674 194.613 267.424 194.757C267.173 194.902 266.968 194.886 266.823 194.696C266.679 194.506 266.603 194.164 266.603 193.655V192.713C266.603 192.204 266.679 191.77 266.823 191.413C266.968 191.056 267.173 190.805 267.424 190.653C267.682 190.509 267.88 190.524 268.032 190.714C268.176 190.904 268.252 191.246 268.252 191.755V192.705H268.244ZM267.895 191.846C267.895 191.504 267.857 191.261 267.773 191.14C267.69 191.01 267.576 190.995 267.416 191.086C267.264 191.178 267.142 191.33 267.066 191.55C266.983 191.77 266.945 192.052 266.945 192.401V193.572C266.945 193.914 266.983 194.157 267.066 194.286C267.15 194.415 267.264 194.438 267.416 194.347C267.568 194.256 267.69 194.104 267.766 193.883C267.849 193.663 267.887 193.374 267.887 193.032V191.846H267.895Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M268.244 198.32C268.244 198.83 268.168 199.263 268.024 199.62C267.88 199.977 267.674 200.228 267.424 200.372C267.173 200.517 266.968 200.502 266.823 200.312C266.679 200.122 266.603 199.78 266.603 199.27V198.328C266.603 197.819 266.679 197.386 266.823 197.028C266.968 196.671 267.173 196.42 267.424 196.268C267.682 196.124 267.88 196.139 268.032 196.329C268.176 196.519 268.252 196.861 268.252 197.37V198.32H268.244ZM267.895 197.462C267.895 197.12 267.857 196.876 267.773 196.755C267.69 196.626 267.576 196.61 267.416 196.702C267.264 196.793 267.142 196.945 267.066 197.165C266.983 197.386 266.945 197.667 266.945 198.016V199.187C266.945 199.529 266.983 199.772 267.066 199.901C267.15 200.03 267.264 200.053 267.416 199.962C267.568 199.871 267.69 199.719 267.766 199.498C267.849 199.278 267.887 198.989 267.887 198.647V197.462H267.895Z"
                        fill="#27DEBF" />
                    <path
                        d="M266.884 205.89L267.287 205.586V202.599L266.876 202.842V202.508L267.636 201.816V205.388L268.032 205.236V205.578L266.884 206.24V205.89Z"
                        fill="#27DEBF" />
                    <path
                        d="M268.244 209.547C268.244 210.056 268.168 210.489 268.024 210.847C267.88 211.204 267.674 211.455 267.424 211.599C267.173 211.743 266.968 211.728 266.823 211.538C266.679 211.348 266.603 211.006 266.603 210.497V209.555C266.603 209.045 266.679 208.612 266.823 208.255C266.968 207.898 267.173 207.647 267.424 207.495C267.682 207.351 267.88 207.366 268.032 207.556C268.176 207.746 268.252 208.088 268.252 208.597V209.547H268.244ZM267.895 208.688C267.895 208.346 267.857 208.103 267.773 207.981C267.69 207.852 267.576 207.837 267.416 207.928C267.264 208.019 267.142 208.171 267.066 208.392C266.983 208.612 266.945 208.893 266.945 209.243V210.413C266.945 210.755 266.983 210.999 267.066 211.128C267.15 211.257 267.264 211.28 267.416 211.189C267.568 211.097 267.69 210.945 267.766 210.725C267.849 210.505 267.887 210.216 267.887 209.874V208.688H267.895Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M266.884 217.117L267.287 216.813V213.826L266.876 214.069V213.735L267.636 213.043V216.615L268.032 216.463V216.805L266.884 217.466V217.117Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M268.244 220.772C268.244 221.281 268.168 221.714 268.024 222.071C267.88 222.428 267.674 222.679 267.424 222.824C267.173 222.968 266.968 222.953 266.823 222.763C266.679 222.573 266.603 222.231 266.603 221.722V220.779C266.603 220.27 266.679 219.837 266.823 219.48C266.968 219.122 267.173 218.872 267.424 218.72C267.682 218.575 267.88 218.59 268.032 218.78C268.176 218.97 268.252 219.312 268.252 219.822V220.772H268.244ZM267.895 219.913C267.895 219.571 267.857 219.328 267.773 219.206C267.69 219.077 267.576 219.062 267.416 219.153C267.264 219.244 267.142 219.396 267.066 219.616C266.983 219.837 266.945 220.118 266.945 220.468V221.638C266.945 221.98 266.983 222.223 267.066 222.352C267.15 222.482 267.264 222.504 267.416 222.413C267.568 222.322 267.69 222.17 267.766 221.942C267.849 221.722 267.887 221.433 267.887 221.091V219.913H267.895Z"
                        fill="#27DEBF" />
                    <path
                        d="M266.884 228.341L267.287 228.029V225.043L266.876 225.286V224.951L267.636 224.26V227.832L268.032 227.68V228.022L266.884 228.683V228.341Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M268.244 231.996C268.244 232.505 268.168 232.939 268.024 233.296C267.88 233.653 267.674 233.904 267.424 234.048C267.173 234.193 266.968 234.177 266.823 233.987C266.679 233.797 266.603 233.455 266.603 232.946V232.004C266.603 231.495 266.679 231.061 266.823 230.704C266.968 230.347 267.173 230.096 267.424 229.944C267.682 229.8 267.88 229.815 268.032 230.005C268.176 230.195 268.252 230.545 268.252 231.046V231.996H268.244ZM267.895 231.137C267.895 230.795 267.857 230.552 267.773 230.431C267.69 230.301 267.576 230.286 267.416 230.377C267.264 230.469 267.142 230.621 267.066 230.841C266.983 231.061 266.945 231.343 266.945 231.692V232.863C266.945 233.205 266.983 233.448 267.066 233.577C267.15 233.706 267.264 233.729 267.416 233.638C267.568 233.547 267.69 233.395 267.766 233.167C267.849 232.946 267.887 232.657 267.887 232.315V231.137H267.895Z"
                        fill="#27DEBF" />
                    <path
                        d="M261.777 175.165L262.18 174.861V171.875L261.769 172.118V171.783L262.529 171.092V174.664L262.924 174.512V174.854L261.777 175.515V175.165Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M261.777 180.783L262.18 180.479V177.492L261.769 177.735V177.401L262.529 176.709V180.281L262.924 180.129V180.471L261.777 181.132V180.783Z"
                        fill="#27DEBF" />
                    <path
                        d="M263.137 184.43C263.137 184.939 263.061 185.372 262.917 185.729C262.772 186.087 262.567 186.337 262.316 186.482C262.066 186.626 261.86 186.611 261.716 186.421C261.564 186.231 261.496 185.889 261.496 185.38V184.437C261.496 183.928 261.572 183.495 261.716 183.138C261.86 182.781 262.066 182.53 262.316 182.378C262.575 182.233 262.772 182.249 262.924 182.439C263.069 182.629 263.145 182.971 263.145 183.48V184.43H263.137ZM262.788 183.571C262.788 183.229 262.75 182.993 262.666 182.864C262.582 182.735 262.468 182.72 262.309 182.811C262.157 182.902 262.035 183.054 261.959 183.275C261.876 183.495 261.838 183.776 261.838 184.126V185.296C261.838 185.638 261.876 185.881 261.959 186.011C262.043 186.14 262.157 186.163 262.309 186.071C262.461 185.98 262.582 185.828 262.658 185.608C262.742 185.387 262.78 185.099 262.78 184.757V183.571H262.788Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M261.777 192.007L262.18 191.703V188.716L261.769 188.96V188.625L262.529 187.934V191.506L262.924 191.354V191.696L261.777 192.357V192.007Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M263.137 195.654C263.137 196.164 263.061 196.597 262.917 196.954C262.772 197.311 262.567 197.562 262.316 197.706C262.066 197.851 261.86 197.836 261.716 197.646C261.564 197.456 261.496 197.114 261.496 196.604V195.662C261.496 195.153 261.572 194.72 261.716 194.362C261.86 194.005 262.066 193.754 262.316 193.602C262.575 193.458 262.772 193.473 262.924 193.663C263.069 193.853 263.145 194.195 263.145 194.704V195.654H263.137ZM262.788 194.796C262.788 194.454 262.75 194.21 262.666 194.089C262.582 193.96 262.468 193.944 262.309 194.036C262.157 194.127 262.035 194.279 261.959 194.499C261.876 194.72 261.838 195.001 261.838 195.35V196.521C261.838 196.863 261.876 197.106 261.959 197.235C262.043 197.364 262.157 197.387 262.309 197.296C262.461 197.205 262.582 197.053 262.658 196.832C262.742 196.612 262.78 196.323 262.78 195.981V194.796H262.788Z"
                        fill="#27DEBF" />
                    <path
                        d="M263.137 201.272C263.137 201.781 263.061 202.214 262.917 202.571C262.772 202.928 262.567 203.179 262.316 203.324C262.066 203.468 261.86 203.453 261.716 203.263C261.564 203.073 261.496 202.731 261.496 202.222V201.279C261.496 200.77 261.572 200.337 261.716 199.98C261.86 199.622 262.066 199.372 262.316 199.22C262.575 199.075 262.772 199.09 262.924 199.28C263.069 199.47 263.145 199.812 263.145 200.322V201.272H263.137ZM262.788 200.413C262.788 200.071 262.75 199.828 262.666 199.706C262.582 199.577 262.468 199.562 262.309 199.653C262.157 199.744 262.035 199.896 261.959 200.116C261.876 200.337 261.838 200.618 261.838 200.968V202.138C261.838 202.48 261.876 202.723 261.959 202.852C262.043 202.982 262.157 203.004 262.309 202.913C262.461 202.822 262.582 202.67 262.658 202.45C262.742 202.229 262.78 201.94 262.78 201.598V200.413H262.788Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M261.777 208.841L262.18 208.537V205.55L261.769 205.794V205.459L262.529 204.768V208.34L262.924 208.188V208.53L261.777 209.191V208.841Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M263.137 212.496C263.137 213.005 263.061 213.439 262.917 213.796C262.772 214.153 262.567 214.404 262.316 214.548C262.066 214.693 261.86 214.677 261.716 214.487C261.564 214.297 261.496 213.955 261.496 213.446V212.504C261.496 211.995 261.572 211.561 261.716 211.204C261.86 210.847 262.066 210.596 262.316 210.444C262.575 210.3 262.772 210.315 262.924 210.505C263.069 210.695 263.145 211.037 263.145 211.546V212.496H263.137ZM262.788 211.637C262.788 211.295 262.75 211.06 262.666 210.931C262.582 210.801 262.468 210.786 262.309 210.877C262.157 210.969 262.035 211.121 261.959 211.341C261.876 211.561 261.838 211.843 261.838 212.192V213.363C261.838 213.705 261.876 213.948 261.959 214.077C262.043 214.206 262.157 214.229 262.309 214.138C262.461 214.047 262.582 213.895 262.658 213.667C262.742 213.446 262.78 213.157 262.78 212.815V211.637H262.788Z"
                        fill="#27DEBF" />
                    <path
                        d="M263.137 218.106C263.137 218.615 263.061 219.048 262.917 219.405C262.772 219.762 262.567 220.013 262.316 220.158C262.066 220.302 261.86 220.287 261.716 220.097C261.564 219.907 261.496 219.565 261.496 219.056V218.113C261.496 217.604 261.572 217.171 261.716 216.814C261.86 216.456 262.066 216.206 262.316 216.054C262.575 215.909 262.772 215.924 262.924 216.114C263.069 216.304 263.145 216.646 263.145 217.156V218.106H263.137ZM262.788 217.247C262.788 216.905 262.75 216.662 262.666 216.54C262.582 216.411 262.468 216.396 262.309 216.487C262.157 216.578 262.035 216.73 261.959 216.95C261.876 217.171 261.838 217.452 261.838 217.802V218.972C261.838 219.314 261.876 219.557 261.959 219.686C262.043 219.816 262.157 219.838 262.309 219.747C262.461 219.656 262.582 219.504 262.658 219.276C262.742 219.056 262.78 218.767 262.78 218.425V217.247H262.788Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M261.777 225.683L262.18 225.379V222.392L261.769 222.635V222.301L262.529 221.609V225.181L262.924 225.029V225.371L261.777 226.033V225.683Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M261.777 231.292L262.18 230.981V227.994L261.769 228.237V227.903L262.529 227.211V230.783L262.924 230.631V230.973L261.777 231.634V231.292Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M263.137 234.947C263.137 235.457 263.061 235.89 262.917 236.247C262.772 236.604 262.567 236.855 262.316 236.999C262.066 237.144 261.86 237.129 261.716 236.939C261.564 236.749 261.496 236.407 261.496 235.897V234.955C261.496 234.446 261.572 234.013 261.716 233.655C261.86 233.298 262.066 233.047 262.316 232.895C262.575 232.751 262.772 232.766 262.924 232.956C263.069 233.146 263.145 233.496 263.145 233.997V234.947H263.137ZM262.788 234.089C262.788 233.747 262.75 233.503 262.666 233.382C262.582 233.253 262.468 233.237 262.309 233.329C262.157 233.42 262.035 233.572 261.959 233.792C261.876 234.013 261.838 234.294 261.838 234.643V235.814C261.838 236.156 261.876 236.399 261.959 236.528C262.043 236.657 262.157 236.68 262.309 236.589C262.461 236.498 262.582 236.346 262.658 236.118C262.734 235.89 262.78 235.609 262.78 235.267V234.089H262.788Z"
                        fill="#27DEBF" />
                    <path
                        d="M287.267 160.453L287.67 160.149V157.162L287.26 157.405V157.071L288.02 156.379V159.951L288.415 159.799V160.141L287.267 160.802V160.453Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M288.635 164.1C288.635 164.609 288.559 165.042 288.415 165.399C288.27 165.757 288.065 166.007 287.814 166.152C287.564 166.296 287.358 166.281 287.214 166.091C287.062 165.901 286.994 165.559 286.994 165.05V164.107C286.994 163.598 287.07 163.165 287.214 162.808C287.358 162.451 287.564 162.2 287.814 162.048C288.073 161.903 288.27 161.919 288.422 162.109C288.574 162.299 288.643 162.641 288.643 163.15V164.1H288.635ZM288.278 163.241C288.278 162.899 288.24 162.656 288.156 162.534C288.073 162.405 287.959 162.39 287.799 162.481C287.647 162.572 287.526 162.724 287.45 162.945C287.366 163.165 287.328 163.446 287.328 163.796V164.966C287.328 165.308 287.366 165.551 287.45 165.681C287.533 165.81 287.647 165.833 287.799 165.741C287.951 165.65 288.073 165.498 288.149 165.278C288.232 165.057 288.27 164.769 288.27 164.427V163.241H288.278Z"
                        fill="#27DEBF" />
                    <path
                        d="M287.267 171.677L287.67 171.373V168.386L287.26 168.63V168.295L288.02 167.604V171.176L288.415 171.024V171.366L287.267 172.027V171.677Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M288.635 175.326C288.635 175.836 288.559 176.269 288.415 176.626C288.27 176.983 288.065 177.234 287.814 177.378C287.564 177.523 287.358 177.508 287.214 177.318C287.062 177.128 286.994 176.786 286.994 176.276V175.334C286.994 174.825 287.07 174.392 287.214 174.034C287.358 173.677 287.564 173.426 287.814 173.274C288.073 173.13 288.27 173.145 288.422 173.335C288.574 173.525 288.643 173.867 288.643 174.376V175.326H288.635ZM288.278 174.468C288.278 174.126 288.24 173.882 288.156 173.761C288.073 173.632 287.959 173.616 287.799 173.708C287.647 173.799 287.526 173.951 287.45 174.171C287.366 174.392 287.328 174.673 287.328 175.022V176.193C287.328 176.535 287.366 176.778 287.45 176.907C287.533 177.036 287.647 177.059 287.799 176.968C287.951 176.877 288.073 176.725 288.149 176.504C288.232 176.284 288.27 175.995 288.27 175.653V174.468H288.278Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M287.267 182.904L287.67 182.6V179.613L287.26 179.856V179.522L288.02 178.83V182.402L288.415 182.25V182.592L287.267 183.253V182.904Z"
                        fill="#27DEBF" />
                    <path
                        d="M287.267 188.511L287.67 188.207V185.22L287.26 185.464V185.129L288.02 184.438V188.01L288.415 187.858V188.2L287.267 188.861V188.511Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M287.267 194.128L287.67 193.824V190.837L287.26 191.081V190.746L288.02 190.055V193.627L288.415 193.475V193.817L287.267 194.478V194.128Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M288.635 197.776C288.635 198.285 288.559 198.718 288.415 199.075C288.27 199.432 288.065 199.683 287.814 199.828C287.564 199.972 287.358 199.957 287.214 199.767C287.062 199.577 286.994 199.235 286.994 198.726V197.783C286.994 197.274 287.07 196.841 287.214 196.484C287.358 196.126 287.564 195.876 287.814 195.724C288.073 195.579 288.27 195.594 288.422 195.784C288.574 195.974 288.643 196.316 288.643 196.826V197.776H288.635ZM288.278 196.917C288.278 196.575 288.24 196.339 288.156 196.21C288.073 196.081 287.959 196.066 287.799 196.157C287.647 196.248 287.526 196.4 287.45 196.62C287.366 196.841 287.328 197.122 287.328 197.472V198.642C287.328 198.984 287.366 199.227 287.45 199.356C287.533 199.486 287.647 199.508 287.799 199.417C287.951 199.326 288.073 199.174 288.149 198.954C288.232 198.733 288.27 198.444 288.27 198.102V196.917H288.278Z"
                        fill="#27DEBF" />
                    <path
                        d="M287.267 205.353L287.67 205.041V202.054L287.26 202.297V201.963L288.02 201.271V204.843L288.415 204.691V205.033L287.267 205.695V205.353Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M288.635 209.002C288.635 209.511 288.559 209.945 288.415 210.302C288.27 210.659 288.065 210.91 287.814 211.054C287.564 211.199 287.358 211.183 287.214 210.993C287.062 210.803 286.994 210.461 286.994 209.952V209.01C286.994 208.501 287.07 208.067 287.214 207.71C287.358 207.353 287.564 207.102 287.814 206.95C288.073 206.806 288.27 206.821 288.422 207.011C288.574 207.201 288.643 207.551 288.643 208.052V209.002H288.635ZM288.278 208.143C288.278 207.801 288.24 207.558 288.156 207.437C288.073 207.307 287.959 207.292 287.799 207.383C287.647 207.475 287.526 207.627 287.45 207.847C287.366 208.067 287.328 208.349 287.328 208.698V209.869C287.328 210.211 287.366 210.454 287.45 210.583C287.533 210.712 287.647 210.735 287.799 210.644C287.951 210.553 288.073 210.401 288.149 210.173C288.232 209.952 288.27 209.663 288.27 209.321V208.143H288.278Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M287.267 216.579L287.67 216.275V213.289L287.26 213.532V213.197L288.02 212.506V216.078L288.415 215.926V216.268L287.267 216.929V216.579Z"
                        fill="#27DEBF" />
                    <path
                        d="M288.635 220.227C288.635 220.736 288.559 221.169 288.415 221.526C288.27 221.884 288.065 222.134 287.814 222.279C287.564 222.423 287.358 222.408 287.214 222.218C287.062 222.028 286.994 221.686 286.994 221.177V220.234C286.994 219.725 287.07 219.292 287.214 218.935C287.358 218.578 287.564 218.327 287.814 218.175C288.073 218.03 288.27 218.046 288.422 218.236C288.574 218.426 288.643 218.768 288.643 219.277V220.227H288.635ZM288.278 219.368C288.278 219.026 288.24 218.783 288.156 218.661C288.073 218.532 287.959 218.517 287.799 218.608C287.647 218.699 287.526 218.851 287.45 219.072C287.366 219.292 287.328 219.573 287.328 219.923V221.093C287.328 221.435 287.366 221.678 287.45 221.808C287.533 221.937 287.647 221.96 287.799 221.868C287.951 221.777 288.073 221.625 288.149 221.397C288.232 221.177 288.27 220.888 288.27 220.546V219.368H288.278Z"
                        fill="#27DEBF" />
                    <path
                        d="M283.52 161.44C283.52 161.949 283.444 162.382 283.3 162.739C283.156 163.096 282.95 163.347 282.7 163.492C282.449 163.636 282.244 163.621 282.099 163.431C281.947 163.241 281.879 162.899 281.879 162.39V161.447C281.879 160.938 281.955 160.505 282.099 160.148C282.244 159.79 282.449 159.54 282.7 159.388C282.958 159.243 283.156 159.258 283.308 159.448C283.452 159.638 283.528 159.98 283.528 160.49V161.44H283.52ZM283.171 160.581C283.171 160.239 283.133 159.996 283.049 159.874C282.966 159.745 282.852 159.73 282.692 159.821C282.54 159.912 282.418 160.064 282.342 160.284C282.259 160.505 282.221 160.786 282.221 161.136V162.306C282.221 162.648 282.259 162.891 282.342 163.02C282.426 163.15 282.54 163.172 282.692 163.081C282.844 162.99 282.966 162.838 283.042 162.618C283.125 162.397 283.163 162.108 283.163 161.766V160.581H283.171Z"
                        fill="#27DEBF" />
                    <path
                        d="M282.16 169.009L282.563 168.705V165.718L282.152 165.962V165.627L282.912 164.936V168.508L283.308 168.356V168.698L282.16 169.359V169.009Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M282.16 174.626L282.563 174.322V171.336L282.152 171.579V171.244L282.912 170.553V174.117L283.308 173.965V174.307L282.16 174.968V174.626Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M282.16 180.234L282.563 179.93V176.943L282.152 177.186V176.852L282.912 176.16V179.732L283.308 179.58V179.922L282.16 180.583V180.234Z"
                        fill="#27DEBF" />
                    <path
                        d="M283.52 183.891C283.52 184.4 283.444 184.833 283.3 185.19C283.156 185.548 282.95 185.798 282.7 185.943C282.449 186.087 282.244 186.072 282.099 185.882C281.947 185.692 281.879 185.35 281.879 184.841V183.898C281.879 183.389 281.955 182.956 282.099 182.599C282.244 182.242 282.449 181.991 282.7 181.839C282.958 181.694 283.156 181.71 283.308 181.9C283.452 182.09 283.528 182.432 283.528 182.941V183.891H283.52ZM283.171 183.032C283.171 182.69 283.133 182.447 283.049 182.325C282.966 182.196 282.852 182.181 282.692 182.272C282.54 182.363 282.418 182.515 282.342 182.736C282.259 182.956 282.221 183.237 282.221 183.587V184.757C282.221 185.099 282.259 185.342 282.342 185.472C282.426 185.601 282.54 185.624 282.692 185.532C282.844 185.441 282.966 185.289 283.042 185.069C283.125 184.848 283.163 184.56 283.163 184.218V183.032H283.171Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M283.52 189.498C283.52 190.007 283.444 190.441 283.3 190.798C283.156 191.155 282.95 191.406 282.7 191.55C282.449 191.695 282.244 191.679 282.099 191.489C281.947 191.299 281.879 190.957 281.879 190.448V189.506C281.879 188.997 281.955 188.563 282.099 188.206C282.244 187.849 282.449 187.598 282.7 187.446C282.958 187.302 283.156 187.317 283.308 187.507C283.452 187.697 283.528 188.039 283.528 188.548V189.498H283.52ZM283.171 188.639C283.171 188.297 283.133 188.062 283.049 187.933C282.966 187.803 282.852 187.788 282.692 187.879C282.54 187.971 282.418 188.123 282.342 188.343C282.259 188.563 282.221 188.845 282.221 189.194V190.365C282.221 190.707 282.259 190.95 282.342 191.079C282.426 191.208 282.54 191.231 282.692 191.14C282.844 191.049 282.966 190.897 283.042 190.676C283.125 190.456 283.163 190.167 283.163 189.825V188.639H283.171Z"
                        fill="#27DEBF" />
                    <path
                        d="M282.16 197.076L282.563 196.772V193.785L282.152 194.028V193.694L282.912 193.002V196.566L283.308 196.414V196.756L282.16 197.418V197.076Z"
                        fill="#27DEBF" />
                    <path
                        d="M283.52 200.725C283.52 201.234 283.444 201.667 283.3 202.024C283.156 202.382 282.95 202.632 282.7 202.777C282.449 202.921 282.244 202.906 282.099 202.716C281.947 202.526 281.879 202.184 281.879 201.675V200.732C281.879 200.223 281.955 199.79 282.099 199.433C282.244 199.076 282.449 198.825 282.7 198.673C282.958 198.528 283.156 198.544 283.308 198.734C283.452 198.924 283.528 199.266 283.528 199.775V200.725H283.52ZM283.171 199.866C283.171 199.524 283.133 199.281 283.049 199.159C282.966 199.03 282.852 199.015 282.692 199.106C282.54 199.197 282.418 199.349 282.342 199.57C282.259 199.79 282.221 200.071 282.221 200.421V201.591C282.221 201.933 282.259 202.176 282.342 202.306C282.426 202.435 282.54 202.458 282.692 202.366C282.844 202.275 282.966 202.123 283.042 201.903C283.125 201.682 283.163 201.394 283.163 201.052V199.866H283.171Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M282.16 208.302L282.563 207.998V205.011L282.152 205.255V204.92L282.912 204.229V207.801L283.308 207.649V207.991L282.16 208.652V208.302Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M283.52 211.949C283.52 212.459 283.444 212.892 283.3 213.249C283.156 213.606 282.95 213.857 282.7 214.001C282.449 214.146 282.244 214.131 282.099 213.941C281.947 213.751 281.879 213.409 281.879 212.899V211.957C281.879 211.448 281.955 211.015 282.099 210.657C282.244 210.3 282.449 210.049 282.7 209.897C282.958 209.753 283.156 209.768 283.308 209.958C283.452 210.148 283.528 210.498 283.528 210.999V211.949H283.52ZM283.171 211.091C283.171 210.749 283.133 210.505 283.049 210.384C282.966 210.255 282.852 210.239 282.692 210.331C282.54 210.422 282.418 210.574 282.342 210.794C282.259 211.015 282.221 211.296 282.221 211.645V212.816C282.221 213.158 282.259 213.401 282.342 213.53C282.426 213.659 282.54 213.682 282.692 213.591C282.844 213.5 282.966 213.348 283.042 213.12C283.125 212.899 283.163 212.611 283.163 212.269V211.091H283.171Z"
                        fill="#27DEBF" />
                    <path
                        d="M282.16 219.527L282.563 219.215V216.228L282.152 216.471V216.137L282.912 215.445V219.017L283.308 218.865V219.207L282.16 219.869V219.527Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M283.52 223.174C283.52 223.683 283.444 224.116 283.3 224.474C283.156 224.831 282.95 225.082 282.7 225.226C282.449 225.37 282.244 225.355 282.099 225.165C281.947 224.975 281.879 224.633 281.879 224.124V223.182C281.879 222.672 281.955 222.239 282.099 221.882C282.244 221.525 282.449 221.274 282.7 221.122C282.958 220.978 283.156 220.993 283.308 221.183C283.452 221.373 283.528 221.722 283.528 222.224V223.174H283.52ZM283.171 222.315C283.171 221.973 283.133 221.73 283.049 221.608C282.966 221.479 282.852 221.464 282.692 221.555C282.54 221.646 282.418 221.798 282.342 222.019C282.259 222.239 282.221 222.52 282.221 222.87V224.04C282.221 224.382 282.259 224.626 282.342 224.755C282.426 224.884 282.54 224.907 282.692 224.816C282.844 224.724 282.966 224.572 283.042 224.344C283.125 224.124 283.163 223.835 283.163 223.493V222.315H283.171Z"
                        fill="#27DEBF" />
                    <path
                        d="M277.053 166.351L277.456 166.047V163.06L277.045 163.303V162.961L277.805 162.27V165.842L278.2 165.69V166.032L277.053 166.693V166.351Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M277.053 171.96L277.456 171.656V168.67L277.045 168.913V168.578L277.805 167.887V171.459L278.2 171.307V171.649L277.053 172.31V171.96Z"
                        fill="#27DEBF" />
                    <path
                        d="M278.413 175.615C278.413 176.125 278.337 176.558 278.193 176.915C278.048 177.272 277.843 177.523 277.592 177.667C277.342 177.812 277.136 177.797 276.992 177.607C276.84 177.417 276.772 177.075 276.772 176.565V175.623C276.772 175.114 276.848 174.681 276.992 174.323C277.136 173.966 277.342 173.715 277.592 173.563C277.851 173.419 278.048 173.434 278.2 173.624C278.352 173.814 278.421 174.156 278.421 174.665V175.615H278.413ZM278.064 174.757C278.064 174.415 278.026 174.171 277.942 174.05C277.858 173.921 277.744 173.905 277.585 173.997C277.433 174.088 277.319 174.24 277.235 174.46C277.152 174.681 277.114 174.962 277.114 175.311V176.482C277.114 176.824 277.152 177.067 277.235 177.196C277.319 177.325 277.433 177.348 277.585 177.257C277.737 177.166 277.858 177.014 277.934 176.793C278.018 176.573 278.056 176.284 278.056 175.942V174.757H278.064Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M277.053 183.185L277.456 182.881V179.894L277.045 180.137V179.803L277.805 179.111V182.683L278.2 182.531V182.873L277.053 183.535V183.185Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M278.413 186.84C278.413 187.349 278.337 187.782 278.193 188.14C278.048 188.497 277.843 188.748 277.592 188.892C277.342 189.036 277.136 189.021 276.992 188.831C276.84 188.641 276.772 188.299 276.772 187.79V186.848C276.772 186.338 276.848 185.905 276.992 185.548C277.136 185.191 277.342 184.94 277.592 184.788C277.851 184.644 278.048 184.659 278.2 184.849C278.352 185.039 278.421 185.381 278.421 185.89V186.84H278.413ZM278.064 185.981C278.064 185.639 278.026 185.396 277.942 185.274C277.858 185.145 277.744 185.13 277.585 185.221C277.433 185.312 277.319 185.464 277.235 185.685C277.152 185.905 277.114 186.186 277.114 186.536V187.706C277.114 188.048 277.152 188.292 277.235 188.421C277.319 188.55 277.433 188.573 277.585 188.482C277.737 188.39 277.858 188.238 277.934 188.018C278.018 187.798 278.056 187.509 278.056 187.167V185.981H278.064Z"
                        fill="#27DEBF" />
                    <path
                        d="M278.413 192.449C278.413 192.959 278.337 193.392 278.193 193.749C278.048 194.106 277.843 194.357 277.592 194.501C277.342 194.646 277.136 194.631 276.992 194.441C276.84 194.251 276.772 193.909 276.772 193.399V192.457C276.772 191.948 276.848 191.515 276.992 191.157C277.136 190.8 277.342 190.549 277.592 190.397C277.851 190.253 278.048 190.268 278.2 190.458C278.352 190.648 278.421 190.99 278.421 191.499V192.449H278.413ZM278.064 191.591C278.064 191.249 278.026 191.005 277.942 190.884C277.858 190.755 277.744 190.739 277.585 190.831C277.433 190.922 277.319 191.074 277.235 191.294C277.152 191.515 277.114 191.796 277.114 192.145V193.316C277.114 193.658 277.152 193.901 277.235 194.03C277.319 194.159 277.433 194.182 277.585 194.091C277.737 194 277.858 193.848 277.934 193.627C278.018 193.407 278.056 193.118 278.056 192.776V191.591H278.064Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M277.053 200.027L277.456 199.723V196.736L277.045 196.979V196.645L277.805 195.953V199.518L278.2 199.366V199.708L277.053 200.369V200.027Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M278.413 203.674C278.413 204.183 278.337 204.616 278.193 204.974C278.048 205.331 277.843 205.582 277.592 205.726C277.342 205.87 277.136 205.855 276.992 205.665C276.84 205.475 276.772 205.133 276.772 204.624V203.682C276.772 203.172 276.848 202.739 276.992 202.382C277.136 202.025 277.342 201.774 277.592 201.622C277.851 201.478 278.048 201.493 278.2 201.683C278.352 201.873 278.421 202.215 278.421 202.724V203.674H278.413ZM278.064 202.815C278.064 202.473 278.026 202.23 277.942 202.108C277.858 201.979 277.744 201.964 277.585 202.055C277.433 202.146 277.319 202.298 277.235 202.519C277.152 202.739 277.114 203.02 277.114 203.37V204.54C277.114 204.882 277.152 205.126 277.235 205.255C277.319 205.384 277.433 205.407 277.585 205.316C277.737 205.224 277.858 205.072 277.934 204.844C278.018 204.624 278.056 204.335 278.056 203.993V202.815H278.064Z"
                        fill="#27DEBF" />
                    <path
                        d="M278.413 209.291C278.413 209.8 278.337 210.234 278.193 210.591C278.048 210.948 277.843 211.199 277.592 211.343C277.342 211.488 277.136 211.472 276.992 211.282C276.84 211.092 276.772 210.75 276.772 210.241V209.299C276.772 208.79 276.848 208.356 276.992 207.999C277.136 207.642 277.342 207.391 277.592 207.239C277.851 207.095 278.048 207.11 278.2 207.3C278.352 207.49 278.421 207.832 278.421 208.341V209.291H278.413ZM278.064 208.432C278.064 208.09 278.026 207.847 277.942 207.726C277.858 207.596 277.744 207.581 277.585 207.672C277.433 207.764 277.319 207.916 277.235 208.136C277.152 208.356 277.114 208.638 277.114 208.987V210.158C277.114 210.5 277.152 210.743 277.235 210.872C277.319 211.001 277.433 211.024 277.585 210.933C277.737 210.842 277.858 210.69 277.934 210.462C278.018 210.241 278.056 209.952 278.056 209.61V208.432H278.064Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M277.053 216.861L277.456 216.557V213.57L277.045 213.813V213.479L277.805 212.787V216.359L278.2 216.207V216.549L277.053 217.21V216.861Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M277.053 222.476L277.456 222.172V219.185L277.045 219.428V219.094L277.805 218.402V221.974L278.2 221.822V222.164L277.053 222.826V222.476Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M278.413 226.125C278.413 226.634 278.337 227.068 278.193 227.425C278.048 227.782 277.843 228.033 277.592 228.177C277.342 228.322 277.136 228.306 276.992 228.116C276.84 227.926 276.772 227.584 276.772 227.075V226.133C276.772 225.624 276.848 225.19 276.992 224.833C277.136 224.476 277.342 224.225 277.592 224.073C277.851 223.929 278.048 223.944 278.2 224.134C278.352 224.324 278.421 224.674 278.421 225.175V226.125H278.413ZM278.064 225.266C278.064 224.924 278.026 224.681 277.942 224.56C277.858 224.43 277.744 224.415 277.585 224.506C277.433 224.598 277.319 224.75 277.235 224.97C277.152 225.19 277.114 225.472 277.114 225.821V226.992C277.114 227.334 277.152 227.577 277.235 227.706C277.319 227.835 277.433 227.858 277.585 227.767C277.737 227.676 277.858 227.524 277.934 227.296C278.018 227.075 278.056 226.786 278.056 226.444V225.266H278.064Z"
                        fill="#27DEBF" />
                    <path
                        d="M302.551 151.628L302.953 151.324V148.337L302.543 148.581V148.246L303.303 147.555V151.127L303.698 150.975V151.317L302.551 151.978V151.628Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M303.911 155.276C303.911 155.785 303.835 156.218 303.691 156.575C303.546 156.932 303.341 157.183 303.09 157.328C302.84 157.472 302.634 157.457 302.49 157.267C302.346 157.077 302.27 156.735 302.27 156.226V155.283C302.27 154.774 302.346 154.341 302.49 153.984C302.634 153.626 302.84 153.376 303.09 153.224C303.349 153.079 303.546 153.094 303.698 153.284C303.85 153.474 303.919 153.816 303.919 154.326V155.276H303.911ZM303.562 154.417C303.562 154.075 303.524 153.832 303.44 153.71C303.356 153.581 303.242 153.566 303.083 153.657C302.931 153.748 302.809 153.9 302.733 154.12C302.65 154.341 302.612 154.622 302.612 154.972V156.142C302.612 156.484 302.65 156.727 302.733 156.856C302.817 156.986 302.931 157.008 303.083 156.917C303.235 156.826 303.356 156.674 303.432 156.454C303.516 156.233 303.554 155.944 303.554 155.602V154.417H303.562Z"
                        fill="#27DEBF" />
                    <path
                        d="M302.551 162.853L302.953 162.549V159.562L302.543 159.805V159.471L303.303 158.779V162.351L303.698 162.199V162.541L302.551 163.203V162.853Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M303.911 166.502C303.911 167.011 303.835 167.445 303.691 167.802C303.546 168.159 303.341 168.41 303.09 168.554C302.84 168.699 302.634 168.683 302.49 168.493C302.346 168.303 302.27 167.961 302.27 167.452V166.51C302.27 166.001 302.346 165.567 302.49 165.21C302.634 164.853 302.84 164.602 303.09 164.45C303.349 164.306 303.546 164.321 303.698 164.511C303.85 164.701 303.919 165.043 303.919 165.552V166.502H303.911ZM303.562 165.643C303.562 165.301 303.524 165.058 303.44 164.937C303.356 164.807 303.242 164.792 303.083 164.883C302.931 164.975 302.809 165.127 302.733 165.347C302.65 165.567 302.612 165.849 302.612 166.198V167.369C302.612 167.711 302.65 167.954 302.733 168.083C302.817 168.212 302.931 168.235 303.083 168.144C303.235 168.053 303.356 167.901 303.432 167.68C303.516 167.46 303.554 167.171 303.554 166.829V165.643H303.562Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M302.551 174.079L302.953 173.775V170.789L302.543 171.032V170.697L303.303 170.006V173.578L303.698 173.426V173.768L302.551 174.429V174.079Z"
                        fill="#27DEBF" />
                    <path
                        d="M302.551 179.695L302.953 179.391V176.404L302.543 176.647V176.313L303.303 175.621V179.193L303.698 179.041V179.383L302.551 180.044V179.695Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M302.551 185.304L302.953 185V182.013L302.543 182.256V181.922L303.303 181.23V184.802L303.698 184.65V184.992L302.551 185.654V185.304Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M303.911 188.951C303.911 189.461 303.835 189.894 303.691 190.251C303.546 190.608 303.341 190.859 303.09 191.003C302.84 191.148 302.634 191.133 302.49 190.943C302.346 190.753 302.27 190.411 302.27 189.901V188.959C302.27 188.45 302.346 188.017 302.49 187.659C302.634 187.302 302.84 187.051 303.09 186.899C303.349 186.755 303.546 186.77 303.698 186.96C303.85 187.15 303.919 187.492 303.919 188.001V188.951H303.911ZM303.562 188.093C303.562 187.751 303.524 187.507 303.44 187.386C303.356 187.257 303.242 187.241 303.083 187.333C302.931 187.424 302.809 187.576 302.733 187.796C302.65 188.017 302.612 188.298 302.612 188.647V189.818C302.612 190.16 302.65 190.403 302.733 190.532C302.817 190.661 302.931 190.684 303.083 190.593C303.235 190.502 303.356 190.35 303.432 190.129C303.516 189.909 303.554 189.62 303.554 189.278V188.093H303.562Z"
                        fill="#27DEBF" />
                    <path
                        d="M302.551 196.529L302.953 196.225V193.238L302.543 193.481V193.147L303.303 192.455V196.027L303.698 195.875V196.217L302.551 196.878V196.529Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M303.911 200.178C303.911 200.687 303.835 201.12 303.691 201.478C303.546 201.835 303.341 202.086 303.09 202.23C302.84 202.374 302.634 202.359 302.49 202.169C302.346 201.979 302.27 201.637 302.27 201.128V200.186C302.27 199.676 302.346 199.243 302.49 198.886C302.634 198.529 302.84 198.278 303.09 198.126C303.349 197.982 303.546 197.997 303.698 198.187C303.85 198.377 303.919 198.726 303.919 199.228V200.178H303.911ZM303.562 199.327C303.562 198.985 303.524 198.742 303.44 198.62C303.356 198.491 303.242 198.476 303.083 198.567C302.931 198.658 302.809 198.81 302.733 199.03C302.65 199.251 302.612 199.532 302.612 199.882V201.052C302.612 201.394 302.65 201.637 302.733 201.766C302.817 201.896 302.931 201.918 303.083 201.827C303.235 201.736 303.356 201.584 303.432 201.356C303.516 201.136 303.554 200.847 303.554 200.505V199.327H303.562Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M302.551 207.755L302.953 207.451V204.464L302.543 204.708V204.373L303.303 203.682V207.254L303.698 207.102V207.444L302.551 208.105V207.755Z"
                        fill="#27DEBF" />
                    <path
                        d="M303.911 211.403C303.911 211.912 303.835 212.345 303.691 212.702C303.546 213.059 303.341 213.31 303.09 213.455C302.84 213.599 302.634 213.584 302.49 213.394C302.346 213.204 302.27 212.862 302.27 212.353V211.41C302.27 210.901 302.346 210.468 302.49 210.111C302.634 209.753 302.84 209.503 303.09 209.351C303.349 209.206 303.546 209.221 303.698 209.411C303.85 209.601 303.919 209.943 303.919 210.453V211.403H303.911ZM303.562 210.544C303.562 210.202 303.524 209.959 303.44 209.837C303.356 209.708 303.242 209.693 303.083 209.784C302.931 209.875 302.809 210.027 302.733 210.247C302.65 210.468 302.612 210.749 302.612 211.099V212.269C302.612 212.611 302.65 212.854 302.733 212.983C302.817 213.113 302.931 213.135 303.083 213.044C303.235 212.953 303.356 212.801 303.432 212.573C303.516 212.353 303.554 212.064 303.554 211.722V210.544H303.562Z"
                        fill="#27DEBF" />
                    <path
                        d="M298.804 152.615C298.804 153.125 298.728 153.558 298.584 153.915C298.439 154.272 298.234 154.523 297.983 154.667C297.732 154.812 297.527 154.797 297.383 154.607C297.238 154.417 297.162 154.075 297.162 153.565V152.623C297.162 152.114 297.238 151.681 297.383 151.323C297.527 150.966 297.732 150.715 297.983 150.563C298.242 150.419 298.439 150.434 298.591 150.624C298.743 150.814 298.812 151.156 298.812 151.665V152.615H298.804ZM298.454 151.757C298.454 151.415 298.416 151.171 298.333 151.05C298.249 150.921 298.135 150.905 297.976 150.997C297.824 151.088 297.71 151.24 297.626 151.46C297.542 151.681 297.504 151.962 297.504 152.311V153.482C297.504 153.824 297.542 154.067 297.626 154.196C297.71 154.325 297.824 154.348 297.976 154.257C298.128 154.166 298.249 154.014 298.325 153.793C298.409 153.573 298.447 153.284 298.447 152.942V151.757H298.454Z"
                        fill="#27DEBF" />
                    <path
                        d="M297.436 160.193L297.839 159.889V156.902L297.428 157.145V156.811L298.188 156.119V159.691L298.584 159.539V159.881L297.436 160.542V160.193Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M297.436 165.802L297.839 165.498V162.511L297.428 162.755V162.42L298.188 161.729V165.301L298.584 165.149V165.491L297.436 166.152V165.802Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M297.436 171.417L297.839 171.113V168.127L297.428 168.37V168.035L298.188 167.344V170.916L298.584 170.764V171.106L297.436 171.767V171.417Z"
                        fill="#27DEBF" />
                    <path
                        d="M298.804 175.067C298.804 175.576 298.728 176.009 298.584 176.366C298.439 176.723 298.234 176.974 297.983 177.119C297.732 177.263 297.527 177.248 297.383 177.058C297.238 176.868 297.162 176.526 297.162 176.017V175.074C297.162 174.565 297.238 174.132 297.383 173.775C297.527 173.417 297.732 173.167 297.983 173.015C298.242 172.87 298.439 172.885 298.591 173.075C298.743 173.265 298.812 173.607 298.812 174.117V175.067H298.804ZM298.454 174.208C298.454 173.866 298.416 173.623 298.333 173.501C298.249 173.372 298.135 173.357 297.976 173.448C297.824 173.539 297.71 173.691 297.626 173.911C297.542 174.132 297.504 174.413 297.504 174.763V175.933C297.504 176.275 297.542 176.518 297.626 176.647C297.71 176.777 297.824 176.799 297.976 176.708C298.128 176.617 298.249 176.465 298.325 176.245C298.409 176.024 298.447 175.735 298.447 175.393V174.208H298.454Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M298.804 180.674C298.804 181.183 298.728 181.616 298.584 181.974C298.439 182.331 298.234 182.582 297.983 182.726C297.732 182.87 297.527 182.855 297.383 182.665C297.238 182.475 297.162 182.133 297.162 181.624V180.682C297.162 180.172 297.238 179.739 297.383 179.382C297.527 179.025 297.732 178.774 297.983 178.622C298.242 178.478 298.439 178.493 298.591 178.683C298.743 178.873 298.812 179.215 298.812 179.724V180.674H298.804ZM298.454 179.823C298.454 179.481 298.416 179.238 298.333 179.116C298.249 178.987 298.135 178.972 297.976 179.063C297.824 179.154 297.71 179.306 297.626 179.526C297.542 179.747 297.504 180.028 297.504 180.378V181.548C297.504 181.89 297.542 182.133 297.626 182.262C297.71 182.392 297.824 182.414 297.976 182.323C298.128 182.232 298.249 182.08 298.325 181.86C298.409 181.639 298.447 181.35 298.447 181.008V179.823H298.454Z"
                        fill="#27DEBF" />
                    <path
                        d="M297.436 188.251L297.839 187.947V184.961L297.428 185.204V184.869L298.188 184.178V187.75L298.584 187.598V187.94L297.436 188.601V188.251Z"
                        fill="#27DEBF" />
                    <path
                        d="M298.804 191.901C298.804 192.41 298.728 192.843 298.584 193.2C298.439 193.557 298.234 193.808 297.983 193.953C297.732 194.097 297.527 194.082 297.383 193.892C297.238 193.702 297.162 193.36 297.162 192.851V191.908C297.162 191.399 297.238 190.966 297.383 190.609C297.527 190.251 297.732 190.001 297.983 189.849C298.242 189.704 298.439 189.719 298.591 189.909C298.743 190.099 298.812 190.441 298.812 190.951V191.901H298.804ZM298.454 191.049C298.454 190.707 298.416 190.464 298.333 190.343C298.249 190.213 298.135 190.198 297.976 190.289C297.824 190.381 297.71 190.533 297.626 190.753C297.542 190.973 297.504 191.255 297.504 191.604V192.775C297.504 193.117 297.542 193.36 297.626 193.489C297.71 193.618 297.824 193.641 297.976 193.55C298.128 193.459 298.249 193.307 298.325 193.086C298.409 192.866 298.447 192.577 298.447 192.235V191.049H298.454Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M297.436 199.478L297.839 199.174V196.187L297.428 196.43V196.096L298.188 195.404V198.969L298.584 198.817V199.159L297.436 199.82V199.478Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M298.804 203.125C298.804 203.634 298.728 204.068 298.584 204.425C298.439 204.782 298.234 205.033 297.983 205.177C297.732 205.322 297.527 205.306 297.383 205.116C297.238 204.926 297.162 204.584 297.162 204.075V203.133C297.162 202.624 297.238 202.19 297.383 201.833C297.527 201.476 297.732 201.225 297.983 201.073C298.242 200.929 298.439 200.944 298.591 201.134C298.743 201.324 298.812 201.674 298.812 202.175V203.125H298.804ZM298.454 202.274C298.454 201.932 298.416 201.689 298.333 201.567C298.249 201.438 298.135 201.423 297.976 201.514C297.824 201.605 297.71 201.757 297.626 201.978C297.542 202.198 297.504 202.479 297.504 202.829V203.999C297.504 204.341 297.542 204.584 297.626 204.714C297.71 204.843 297.824 204.866 297.976 204.774C298.128 204.683 298.249 204.531 298.325 204.303C298.409 204.083 298.447 203.794 298.447 203.452V202.274H298.454Z"
                        fill="#27DEBF" />
                    <path
                        d="M297.436 210.702L297.839 210.391V207.404L297.428 207.647V207.313L298.188 206.621V210.186L298.584 210.033V210.376L297.436 211.037V210.702Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M298.804 214.35C298.804 214.859 298.728 215.292 298.584 215.649C298.439 216.007 298.234 216.257 297.983 216.402C297.732 216.546 297.527 216.531 297.383 216.341C297.238 216.151 297.162 215.809 297.162 215.3V214.357C297.162 213.848 297.238 213.415 297.383 213.058C297.527 212.701 297.732 212.45 297.983 212.298C298.242 212.153 298.439 212.169 298.591 212.359C298.743 212.549 298.812 212.898 298.812 213.4V214.35H298.804ZM298.454 213.491C298.454 213.149 298.416 212.906 298.333 212.784C298.249 212.655 298.135 212.64 297.976 212.731C297.824 212.822 297.71 212.974 297.626 213.195C297.542 213.415 297.504 213.696 297.504 214.046V215.216C297.504 215.558 297.542 215.801 297.626 215.931C297.71 216.06 297.824 216.083 297.976 215.991C298.128 215.9 298.249 215.748 298.325 215.52C298.409 215.3 298.447 215.011 298.447 214.669V213.491H298.454Z"
                        fill="#27DEBF" />
                    <path
                        d="M292.329 157.527L292.732 157.223V154.236L292.321 154.479V154.145L293.081 153.453V157.025L293.476 156.873V157.215L292.329 157.876V157.527Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M292.329 163.144L292.732 162.84V159.853L292.321 160.096V159.762L293.081 159.07V162.642L293.476 162.49V162.832L292.329 163.494V163.144Z"
                        fill="#27DEBF" />
                    <path
                        d="M293.697 166.791C293.697 167.3 293.621 167.734 293.476 168.091C293.332 168.448 293.127 168.699 292.876 168.843C292.625 168.988 292.42 168.972 292.276 168.782C292.124 168.592 292.055 168.25 292.055 167.741V166.799C292.055 166.29 292.131 165.856 292.276 165.499C292.42 165.142 292.625 164.891 292.876 164.739C293.134 164.595 293.332 164.61 293.484 164.8C293.636 164.99 293.704 165.332 293.704 165.841V166.791H293.697ZM293.34 165.932C293.34 165.59 293.302 165.355 293.218 165.226C293.134 165.096 293.02 165.081 292.861 165.172C292.709 165.264 292.595 165.416 292.511 165.636C292.428 165.856 292.39 166.138 292.39 166.487V167.658C292.39 168 292.428 168.243 292.511 168.372C292.595 168.501 292.709 168.524 292.861 168.433C293.013 168.342 293.134 168.19 293.21 167.969C293.294 167.749 293.332 167.46 293.332 167.118V165.932H293.34Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M292.329 174.369L292.732 174.065V171.078L292.321 171.321V170.987L293.081 170.295V173.867L293.476 173.715V174.057L292.329 174.718V174.369Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M293.697 178.016C293.697 178.525 293.621 178.958 293.476 179.315C293.332 179.673 293.127 179.923 292.876 180.068C292.625 180.212 292.42 180.197 292.276 180.007C292.124 179.817 292.055 179.475 292.055 178.966V178.023C292.055 177.514 292.131 177.081 292.276 176.724C292.42 176.367 292.625 176.116 292.876 175.964C293.134 175.819 293.332 175.835 293.484 176.025C293.636 176.215 293.704 176.557 293.704 177.066V178.016H293.697ZM293.34 177.157C293.34 176.815 293.302 176.572 293.218 176.45C293.134 176.321 293.02 176.306 292.861 176.397C292.709 176.488 292.595 176.64 292.511 176.861C292.428 177.081 292.39 177.362 292.39 177.712V178.882C292.39 179.224 292.428 179.467 292.511 179.597C292.595 179.726 292.709 179.749 292.861 179.657C293.013 179.566 293.134 179.414 293.21 179.194C293.294 178.973 293.332 178.685 293.332 178.343V177.157H293.34Z"
                        fill="#27DEBF" />
                    <path
                        d="M293.697 183.625C293.697 184.134 293.621 184.568 293.476 184.925C293.332 185.282 293.127 185.533 292.876 185.677C292.625 185.822 292.42 185.806 292.276 185.616C292.124 185.426 292.055 185.084 292.055 184.575V183.633C292.055 183.124 292.131 182.69 292.276 182.333C292.42 181.976 292.625 181.725 292.876 181.573C293.134 181.429 293.332 181.444 293.484 181.634C293.636 181.824 293.704 182.166 293.704 182.675V183.625H293.697ZM293.34 182.774C293.34 182.432 293.302 182.189 293.218 182.067C293.134 181.938 293.02 181.923 292.861 182.014C292.709 182.105 292.595 182.257 292.511 182.478C292.428 182.698 292.39 182.979 292.39 183.329V184.499C292.39 184.841 292.428 185.084 292.511 185.214C292.595 185.343 292.709 185.366 292.861 185.274C293.013 185.183 293.134 185.031 293.21 184.811C293.294 184.59 293.332 184.302 293.332 183.96V182.774H293.34Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M292.329 191.203L292.732 190.898V187.912L292.321 188.155V187.821L293.081 187.129V190.701L293.476 190.549V190.891L292.329 191.552V191.203Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M293.697 194.85C293.697 195.359 293.621 195.792 293.476 196.149C293.332 196.507 293.127 196.757 292.876 196.902C292.625 197.046 292.42 197.031 292.276 196.841C292.124 196.651 292.055 196.309 292.055 195.8V194.857C292.055 194.348 292.131 193.915 292.276 193.558C292.42 193.201 292.625 192.95 292.876 192.798C293.134 192.653 293.332 192.669 293.484 192.859C293.636 193.049 293.704 193.391 293.704 193.9V194.85H293.697ZM293.34 193.999C293.34 193.657 293.302 193.421 293.218 193.292C293.134 193.163 293.02 193.147 292.861 193.239C292.709 193.33 292.595 193.482 292.511 193.702C292.428 193.923 292.39 194.204 292.39 194.553V195.724C292.39 196.066 292.428 196.309 292.511 196.438C292.595 196.567 292.709 196.59 292.861 196.499C293.013 196.408 293.134 196.256 293.21 196.028C293.294 195.807 293.332 195.519 293.332 195.177V193.999H293.34Z"
                        fill="#27DEBF" />
                    <path
                        d="M293.697 200.467C293.697 200.976 293.621 201.409 293.476 201.767C293.332 202.124 293.127 202.375 292.876 202.519C292.625 202.663 292.42 202.648 292.276 202.458C292.124 202.268 292.055 201.926 292.055 201.417V200.475C292.055 199.965 292.131 199.532 292.276 199.175C292.42 198.818 292.625 198.567 292.876 198.415C293.134 198.271 293.332 198.286 293.484 198.476C293.636 198.666 293.704 199.008 293.704 199.517V200.467H293.697ZM293.34 199.608C293.34 199.266 293.302 199.023 293.218 198.901C293.134 198.772 293.02 198.757 292.861 198.848C292.709 198.939 292.595 199.091 292.511 199.312C292.428 199.532 292.39 199.813 292.39 200.163V201.333C292.39 201.675 292.428 201.919 292.511 202.048C292.595 202.177 292.709 202.2 292.861 202.109C293.013 202.017 293.134 201.865 293.21 201.637C293.294 201.417 293.332 201.128 293.332 200.786V199.608H293.34Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M292.329 208.044L292.732 207.74V204.754L292.321 204.997V204.662L293.081 203.971V207.543L293.476 207.391V207.733L292.329 208.394V208.044Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M292.329 213.654L292.732 213.35V210.363L292.321 210.606V210.272L293.081 209.58V213.152L293.476 213V213.342L292.329 214.003V213.654Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M293.697 217.309C293.697 217.818 293.621 218.251 293.476 218.608C293.332 218.966 293.127 219.216 292.876 219.361C292.625 219.505 292.42 219.49 292.276 219.3C292.124 219.11 292.055 218.768 292.055 218.259V217.316C292.055 216.807 292.131 216.374 292.276 216.017C292.42 215.66 292.625 215.409 292.876 215.257C293.134 215.112 293.332 215.128 293.484 215.318C293.636 215.508 293.704 215.857 293.704 216.359V217.309H293.697ZM293.34 216.45C293.34 216.108 293.302 215.865 293.218 215.743C293.134 215.614 293.02 215.599 292.861 215.69C292.709 215.781 292.595 215.933 292.511 216.154C292.428 216.374 292.39 216.655 292.39 217.005V218.175C292.39 218.517 292.428 218.76 292.511 218.89C292.595 219.019 292.709 219.042 292.861 218.95C293.013 218.859 293.134 218.707 293.21 218.479C293.294 218.259 293.332 217.97 293.332 217.628V216.45H293.34Z"
                        fill="#27DEBF" />
                    <path
                        d="M317.827 142.804L318.229 142.5V139.513L317.819 139.756V139.422L318.579 138.73V142.302L318.974 142.15V142.492L317.827 143.154V142.804Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M319.187 146.459C319.187 146.968 319.111 147.402 318.967 147.759C318.822 148.116 318.617 148.367 318.366 148.511C318.116 148.656 317.91 148.64 317.766 148.45C317.614 148.26 317.546 147.918 317.546 147.409V146.467C317.546 145.958 317.622 145.524 317.766 145.167C317.91 144.81 318.116 144.559 318.366 144.407C318.625 144.263 318.822 144.278 318.974 144.468C319.119 144.658 319.195 145 319.195 145.509V146.459H319.187ZM318.838 145.6C318.838 145.258 318.8 145.015 318.716 144.894C318.632 144.764 318.518 144.749 318.359 144.84C318.207 144.932 318.093 145.084 318.009 145.304C317.926 145.524 317.888 145.806 317.888 146.155V147.326C317.888 147.668 317.926 147.911 318.009 148.04C318.093 148.169 318.207 148.192 318.359 148.101C318.511 148.01 318.632 147.858 318.708 147.637C318.792 147.417 318.83 147.128 318.83 146.786V145.6H318.838Z"
                        fill="#27DEBF" />
                    <path
                        d="M317.827 154.029L318.229 153.725V150.738L317.819 150.981V150.647L318.579 149.955V153.527L318.974 153.375V153.717L317.827 154.378V154.029Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M319.187 157.686C319.187 158.195 319.111 158.628 318.967 158.985C318.822 159.343 318.617 159.593 318.366 159.738C318.116 159.882 317.91 159.867 317.766 159.677C317.614 159.487 317.546 159.145 317.546 158.636V157.693C317.546 157.184 317.622 156.751 317.766 156.394C317.91 156.037 318.116 155.786 318.366 155.634C318.625 155.489 318.822 155.505 318.974 155.695C319.119 155.885 319.195 156.227 319.195 156.736V157.686H319.187ZM318.838 156.827C318.838 156.485 318.8 156.242 318.716 156.12C318.632 155.991 318.518 155.976 318.359 156.067C318.207 156.158 318.093 156.31 318.009 156.531C317.926 156.751 317.888 157.032 317.888 157.382V158.552C317.888 158.894 317.926 159.137 318.009 159.267C318.093 159.396 318.207 159.419 318.359 159.327C318.511 159.236 318.632 159.084 318.708 158.864C318.792 158.643 318.83 158.355 318.83 158.013V156.827H318.838Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M317.827 165.255L318.229 164.951V161.964L317.819 162.208V161.873L318.579 161.182V164.754L318.974 164.602V164.944L317.827 165.605V165.255Z"
                        fill="#27DEBF" />
                    <path
                        d="M317.827 170.87L318.229 170.566V167.58L317.819 167.823V167.488L318.579 166.797V170.369L318.974 170.217V170.559L317.827 171.22V170.87Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M317.827 176.48L318.229 176.176V173.189L317.819 173.432V173.098L318.579 172.406V175.978L318.974 175.826V176.168L317.827 176.829V176.48Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M319.187 180.135C319.187 180.644 319.111 181.077 318.967 181.435C318.822 181.792 318.617 182.043 318.366 182.187C318.116 182.331 317.91 182.316 317.766 182.126C317.614 181.936 317.546 181.594 317.546 181.085V180.143C317.546 179.633 317.622 179.2 317.766 178.843C317.91 178.486 318.116 178.235 318.366 178.083C318.625 177.939 318.822 177.954 318.974 178.144C319.119 178.334 319.195 178.676 319.195 179.185V180.135H319.187ZM318.838 179.276C318.838 178.934 318.8 178.699 318.716 178.569C318.632 178.44 318.518 178.425 318.359 178.516C318.207 178.607 318.093 178.759 318.009 178.98C317.926 179.2 317.888 179.481 317.888 179.831V181.001C317.888 181.343 317.926 181.587 318.009 181.716C318.093 181.845 318.207 181.868 318.359 181.777C318.511 181.685 318.632 181.533 318.708 181.313C318.792 181.093 318.83 180.804 318.83 180.462V179.276H318.838Z"
                        fill="#27DEBF" />
                    <path
                        d="M317.827 187.704L318.229 187.4V184.414L317.819 184.657V184.322L318.579 183.631V187.203L318.974 187.051V187.393L317.827 188.054V187.704Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M319.187 191.36C319.187 191.869 319.111 192.302 318.967 192.659C318.822 193.016 318.617 193.267 318.366 193.412C318.116 193.556 317.91 193.541 317.766 193.351C317.614 193.161 317.546 192.819 317.546 192.31V191.367C317.546 190.858 317.622 190.425 317.766 190.068C317.91 189.71 318.116 189.46 318.366 189.308C318.625 189.163 318.822 189.178 318.974 189.368C319.119 189.558 319.195 189.908 319.195 190.41V191.36H319.187ZM318.838 190.501C318.838 190.159 318.8 189.916 318.716 189.794C318.632 189.665 318.518 189.65 318.359 189.741C318.207 189.832 318.093 189.984 318.009 190.204C317.926 190.425 317.888 190.706 317.888 191.056V192.226C317.888 192.568 317.926 192.811 318.009 192.94C318.093 193.07 318.207 193.092 318.359 193.001C318.511 192.91 318.632 192.758 318.708 192.53C318.792 192.31 318.83 192.021 318.83 191.679V190.501H318.838Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M317.827 198.931L318.229 198.627V195.64L317.819 195.883V195.549L318.579 194.857V198.429L318.974 198.277V198.619L317.827 199.281V198.931Z"
                        fill="#27DEBF" />
                    <path
                        d="M319.187 202.586C319.187 203.095 319.111 203.529 318.967 203.886C318.822 204.243 318.617 204.494 318.366 204.638C318.116 204.783 317.91 204.767 317.766 204.577C317.614 204.387 317.546 204.045 317.546 203.536V202.594C317.546 202.085 317.622 201.651 317.766 201.294C317.91 200.937 318.116 200.686 318.366 200.534C318.625 200.39 318.822 200.405 318.974 200.595C319.119 200.785 319.195 201.135 319.195 201.636V202.586H319.187ZM318.838 201.727C318.838 201.385 318.8 201.142 318.716 201.021C318.632 200.891 318.518 200.876 318.359 200.967C318.207 201.059 318.093 201.211 318.009 201.431C317.926 201.651 317.888 201.933 317.888 202.282V203.453C317.888 203.795 317.926 204.038 318.009 204.167C318.093 204.296 318.207 204.319 318.359 204.228C318.511 204.137 318.632 203.985 318.708 203.757C318.792 203.536 318.83 203.247 318.83 202.905V201.727H318.838Z"
                        fill="#27DEBF" />
                    <path
                        d="M314.08 143.791C314.08 144.3 314.004 144.734 313.86 145.091C313.715 145.448 313.51 145.699 313.259 145.843C313.008 145.988 312.803 145.972 312.659 145.782C312.507 145.592 312.438 145.25 312.438 144.741V143.799C312.438 143.29 312.514 142.856 312.659 142.499C312.803 142.142 313.008 141.891 313.259 141.739C313.518 141.595 313.715 141.61 313.867 141.8C314.019 141.99 314.088 142.332 314.088 142.841V143.791H314.08ZM313.73 142.932C313.73 142.59 313.692 142.355 313.609 142.226C313.525 142.096 313.411 142.081 313.252 142.172C313.1 142.264 312.986 142.416 312.902 142.636C312.818 142.856 312.78 143.138 312.78 143.487V144.658C312.78 145 312.818 145.243 312.902 145.372C312.986 145.501 313.1 145.524 313.252 145.433C313.404 145.342 313.525 145.19 313.601 144.969C313.685 144.749 313.723 144.46 313.723 144.118V142.932H313.73Z"
                        fill="#27DEBF" />
                    <path
                        d="M312.719 151.369L313.122 151.065V148.078L312.712 148.321V147.987L313.472 147.295V150.867L313.867 150.715V151.057L312.719 151.718V151.369Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M312.719 156.978L313.122 156.674V153.687L312.712 153.93V153.596L313.472 152.904V156.476L313.867 156.324V156.666L312.719 157.327V156.978Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M312.719 162.593L313.122 162.289V159.302L312.712 159.546V159.211L313.472 158.52V162.092L313.867 161.94V162.282L312.719 162.943V162.593Z"
                        fill="#27DEBF" />
                    <path
                        d="M314.08 166.242C314.08 166.752 314.004 167.185 313.86 167.542C313.715 167.899 313.51 168.15 313.259 168.294C313.008 168.439 312.803 168.424 312.659 168.234C312.507 168.044 312.438 167.702 312.438 167.192V166.25C312.438 165.741 312.514 165.308 312.659 164.95C312.803 164.593 313.008 164.342 313.259 164.19C313.518 164.046 313.715 164.061 313.867 164.251C314.019 164.441 314.088 164.783 314.088 165.292V166.242H314.08ZM313.73 165.384C313.73 165.042 313.692 164.798 313.609 164.677C313.525 164.548 313.411 164.532 313.252 164.624C313.1 164.715 312.986 164.867 312.902 165.087C312.818 165.308 312.78 165.589 312.78 165.938V167.109C312.78 167.451 312.818 167.694 312.902 167.823C312.986 167.952 313.1 167.975 313.252 167.884C313.404 167.793 313.525 167.641 313.601 167.42C313.685 167.2 313.723 166.911 313.723 166.569V165.384H313.73Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M314.08 171.858C314.08 172.367 314.004 172.8 313.86 173.157C313.715 173.514 313.51 173.765 313.259 173.91C313.008 174.054 312.803 174.039 312.659 173.849C312.507 173.659 312.438 173.317 312.438 172.808V171.865C312.438 171.356 312.514 170.923 312.659 170.566C312.803 170.208 313.008 169.958 313.259 169.806C313.518 169.661 313.715 169.676 313.867 169.866C314.019 170.056 314.088 170.398 314.088 170.908V171.858H314.08ZM313.73 170.999C313.73 170.657 313.692 170.421 313.609 170.292C313.525 170.163 313.411 170.148 313.252 170.239C313.1 170.33 312.986 170.482 312.902 170.702C312.818 170.923 312.78 171.204 312.78 171.554V172.724C312.78 173.066 312.818 173.309 312.902 173.438C312.986 173.568 313.1 173.59 313.252 173.499C313.404 173.408 313.525 173.256 313.601 173.036C313.685 172.815 313.723 172.526 313.723 172.184V170.999H313.73Z"
                        fill="#27DEBF" />
                    <path
                        d="M312.719 179.435L313.122 179.131V176.144L312.712 176.387V176.053L313.472 175.361V178.918L313.867 178.766V179.108L312.719 179.769V179.435Z"
                        fill="#27DEBF" />
                    <path
                        d="M314.08 183.084C314.08 183.593 314.004 184.027 313.86 184.384C313.715 184.741 313.51 184.992 313.259 185.136C313.008 185.281 312.803 185.265 312.659 185.075C312.507 184.885 312.438 184.543 312.438 184.034V183.092C312.438 182.583 312.514 182.149 312.659 181.792C312.803 181.435 313.008 181.184 313.259 181.032C313.518 180.888 313.715 180.903 313.867 181.093C314.019 181.283 314.088 181.625 314.088 182.134V183.084H314.08ZM313.73 182.225C313.73 181.883 313.692 181.64 313.609 181.519C313.525 181.389 313.411 181.374 313.252 181.465C313.1 181.557 312.986 181.709 312.902 181.929C312.818 182.149 312.78 182.431 312.78 182.78V183.951C312.78 184.293 312.818 184.536 312.902 184.665C312.986 184.794 313.1 184.817 313.252 184.726C313.404 184.635 313.525 184.483 313.601 184.262C313.685 184.042 313.723 183.753 313.723 183.411V182.225H313.73Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M312.719 190.66L313.122 190.356V187.369L312.712 187.612V187.278L313.472 186.586V190.158L313.867 190.006V190.348L312.719 191.009V190.66Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M314.08 194.309C314.08 194.818 314.004 195.251 313.86 195.608C313.715 195.966 313.51 196.216 313.259 196.361C313.008 196.505 312.803 196.49 312.659 196.3C312.507 196.11 312.438 195.768 312.438 195.259V194.316C312.438 193.807 312.514 193.374 312.659 193.017C312.803 192.66 313.008 192.409 313.259 192.257C313.518 192.112 313.715 192.128 313.867 192.318C314.019 192.508 314.088 192.857 314.088 193.359V194.309H314.08ZM313.73 193.45C313.73 193.108 313.692 192.865 313.609 192.743C313.525 192.614 313.411 192.599 313.252 192.69C313.1 192.781 312.986 192.933 312.902 193.154C312.818 193.374 312.78 193.655 312.78 194.005V195.175C312.78 195.517 312.818 195.76 312.902 195.89C312.986 196.019 313.1 196.042 313.252 195.95C313.404 195.859 313.525 195.707 313.601 195.479C313.685 195.259 313.723 194.97 313.723 194.628V193.45H313.73Z"
                        fill="#27DEBF" />
                    <path
                        d="M312.719 201.878L313.122 201.566V198.58L312.712 198.823V198.488L313.472 197.797V201.369L313.867 201.217V201.559L312.719 202.22V201.878Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M314.08 205.533C314.08 206.043 314.004 206.476 313.86 206.833C313.715 207.19 313.51 207.441 313.259 207.585C313.008 207.73 312.803 207.715 312.659 207.525C312.507 207.335 312.438 206.993 312.438 206.483V205.541C312.438 205.032 312.514 204.599 312.659 204.241C312.803 203.884 313.008 203.633 313.259 203.481C313.518 203.337 313.715 203.352 313.867 203.542C314.019 203.732 314.088 204.074 314.088 204.583V205.533H314.08ZM313.73 204.675C313.73 204.333 313.692 204.089 313.609 203.968C313.525 203.839 313.411 203.823 313.252 203.915C313.1 204.006 312.986 204.158 312.902 204.378C312.818 204.599 312.78 204.88 312.78 205.229V206.4C312.78 206.742 312.818 206.985 312.902 207.114C312.986 207.243 313.1 207.266 313.252 207.175C313.404 207.084 313.525 206.932 313.601 206.704C313.685 206.483 313.723 206.195 313.723 205.853V204.675H313.73Z"
                        fill="#27DEBF" />
                    <path
                        d="M307.612 148.703L308.015 148.398V145.412L307.605 145.655V145.32L308.365 144.629V148.201L308.76 148.049V148.391L307.612 149.052V148.703Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M307.612 154.32L308.015 154.016V151.029L307.605 151.272V150.938L308.365 150.246V153.818L308.76 153.666V154.008L307.612 154.669V154.32Z"
                        fill="#27DEBF" />
                    <path
                        d="M308.973 157.967C308.973 158.476 308.897 158.909 308.752 159.267C308.608 159.624 308.403 159.875 308.152 160.019C307.901 160.163 307.696 160.148 307.552 159.958C307.4 159.768 307.331 159.426 307.331 158.917V157.975C307.331 157.465 307.407 157.032 307.552 156.675C307.696 156.318 307.901 156.067 308.152 155.915C308.41 155.771 308.608 155.786 308.76 155.976C308.912 156.166 308.98 156.508 308.98 157.017V157.967H308.973ZM308.623 157.108C308.623 156.766 308.585 156.523 308.502 156.401C308.418 156.272 308.304 156.257 308.144 156.348C307.992 156.439 307.878 156.591 307.795 156.812C307.711 157.032 307.673 157.313 307.673 157.663V158.833C307.673 159.175 307.711 159.419 307.795 159.548C307.878 159.677 307.992 159.7 308.144 159.609C308.296 159.517 308.418 159.365 308.494 159.145C308.578 158.925 308.616 158.636 308.616 158.294V157.108H308.623Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M307.612 165.544L308.015 165.24V162.254L307.605 162.497V162.162L308.365 161.471V165.043L308.76 164.891V165.233L307.612 165.894V165.544Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M308.973 169.192C308.973 169.701 308.897 170.134 308.752 170.491C308.608 170.848 308.403 171.099 308.152 171.244C307.901 171.388 307.696 171.373 307.552 171.183C307.4 170.993 307.331 170.651 307.331 170.142V169.199C307.331 168.69 307.407 168.257 307.552 167.9C307.696 167.542 307.901 167.292 308.152 167.14C308.41 166.995 308.608 167.01 308.76 167.2C308.912 167.39 308.98 167.732 308.98 168.242V169.192H308.973ZM308.623 168.333C308.623 167.991 308.585 167.748 308.502 167.626C308.418 167.497 308.304 167.482 308.144 167.573C307.992 167.664 307.878 167.816 307.795 168.036C307.711 168.257 307.673 168.538 307.673 168.888V170.058C307.673 170.4 307.711 170.643 307.795 170.772C307.878 170.902 307.992 170.924 308.144 170.833C308.296 170.742 308.418 170.59 308.494 170.37C308.578 170.149 308.616 169.86 308.616 169.518V168.333H308.623Z"
                        fill="#27DEBF" />
                    <path
                        d="M308.973 174.809C308.973 175.318 308.897 175.751 308.752 176.108C308.608 176.466 308.403 176.716 308.152 176.861C307.901 177.005 307.696 176.99 307.552 176.8C307.4 176.61 307.331 176.268 307.331 175.759V174.816C307.331 174.307 307.407 173.874 307.552 173.517C307.696 173.16 307.901 172.909 308.152 172.757C308.41 172.612 308.608 172.628 308.76 172.818C308.912 173.008 308.98 173.35 308.98 173.859V174.809H308.973ZM308.623 173.95C308.623 173.608 308.585 173.365 308.502 173.243C308.418 173.114 308.304 173.099 308.144 173.19C307.992 173.281 307.878 173.433 307.795 173.654C307.711 173.874 307.673 174.155 307.673 174.505V175.675C307.673 176.017 307.711 176.26 307.795 176.39C307.878 176.519 307.992 176.542 308.144 176.45C308.296 176.359 308.418 176.207 308.494 175.987C308.578 175.766 308.616 175.478 308.616 175.136V173.95H308.623Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M307.612 182.386L308.015 182.082V179.095L307.605 179.339V179.004L308.365 178.312V181.884L308.76 181.733V182.074L307.612 182.736V182.386Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M308.973 186.033C308.973 186.543 308.897 186.976 308.752 187.333C308.608 187.69 308.403 187.941 308.152 188.085C307.901 188.23 307.696 188.215 307.552 188.025C307.4 187.835 307.331 187.493 307.331 186.983V186.041C307.331 185.532 307.407 185.099 307.552 184.741C307.696 184.384 307.901 184.133 308.152 183.981C308.41 183.837 308.608 183.852 308.76 184.042C308.912 184.232 308.98 184.574 308.98 185.083V186.033H308.973ZM308.623 185.175C308.623 184.833 308.585 184.589 308.502 184.468C308.418 184.339 308.304 184.323 308.144 184.415C307.992 184.506 307.878 184.658 307.795 184.878C307.711 185.099 307.673 185.38 307.673 185.729V186.9C307.673 187.242 307.711 187.485 307.795 187.614C307.878 187.743 307.992 187.766 308.144 187.675C308.296 187.584 308.418 187.432 308.494 187.204C308.578 186.983 308.616 186.695 308.616 186.353V185.175H308.623Z"
                        fill="#27DEBF" />
                    <path
                        d="M308.973 191.643C308.973 192.152 308.897 192.585 308.752 192.942C308.608 193.3 308.403 193.55 308.152 193.695C307.901 193.839 307.696 193.824 307.552 193.634C307.4 193.444 307.331 193.102 307.331 192.593V191.65C307.331 191.141 307.407 190.708 307.552 190.351C307.696 189.994 307.901 189.743 308.152 189.591C308.41 189.446 308.608 189.462 308.76 189.652C308.912 189.842 308.98 190.184 308.98 190.693V191.643H308.973ZM308.623 190.784C308.623 190.442 308.585 190.199 308.502 190.077C308.418 189.948 308.304 189.933 308.144 190.024C307.992 190.115 307.878 190.267 307.795 190.488C307.711 190.708 307.673 190.989 307.673 191.339V192.509C307.673 192.851 307.711 193.094 307.795 193.224C307.878 193.353 307.992 193.376 308.144 193.284C308.296 193.193 308.418 193.041 308.494 192.813C308.578 192.593 308.616 192.304 308.616 191.962V190.784H308.623Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M307.612 199.22L308.015 198.916V195.929L307.605 196.172V195.838L308.365 195.146V198.718L308.76 198.566V198.908L307.612 199.57V199.22Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M307.612 204.835L308.015 204.531V201.545L307.605 201.788V201.453L308.365 200.762V204.334L308.76 204.182V204.524L307.612 205.185V204.835Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M308.973 208.485C308.973 208.994 308.897 209.427 308.752 209.784C308.608 210.141 308.403 210.392 308.152 210.537C307.901 210.681 307.696 210.666 307.552 210.476C307.4 210.286 307.331 209.944 307.331 209.435V208.492C307.331 207.983 307.407 207.55 307.552 207.193C307.696 206.835 307.901 206.585 308.152 206.433C308.41 206.288 308.608 206.303 308.76 206.493C308.912 206.683 308.98 207.033 308.98 207.535V208.485H308.973ZM308.623 207.626C308.623 207.284 308.585 207.041 308.502 206.919C308.418 206.79 308.304 206.775 308.144 206.866C307.992 206.957 307.878 207.109 307.795 207.329C307.711 207.55 307.673 207.831 307.673 208.181V209.351C307.673 209.693 307.711 209.936 307.795 210.065C307.878 210.195 307.992 210.217 308.144 210.126C308.296 210.035 308.418 209.883 308.494 209.663C308.578 209.442 308.616 209.153 308.616 208.811V207.626H308.623Z"
                        fill="#27DEBF" />
                    <path
                        d="M322.888 139.886L323.291 139.582V136.595L322.881 136.839V136.504L323.641 135.812V139.384L324.036 139.233V139.574L322.888 140.236V139.886Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M322.888 145.495L323.291 145.191V142.205L322.881 142.448V142.113L323.641 141.422V144.994L324.036 144.842V145.184L322.888 145.845V145.495Z"
                        fill="#27DEBF" />
                    <path
                        d="M324.249 149.151C324.249 149.66 324.173 150.093 324.028 150.45C323.884 150.807 323.679 151.058 323.428 151.203C323.177 151.347 322.972 151.332 322.828 151.142C322.676 150.952 322.607 150.61 322.607 150.101V149.158C322.607 148.649 322.683 148.216 322.828 147.859C322.972 147.501 323.177 147.251 323.428 147.099C323.686 146.954 323.884 146.969 324.036 147.159C324.18 147.349 324.256 147.691 324.256 148.201V149.151H324.249ZM323.899 148.292C323.899 147.95 323.861 147.714 323.778 147.585C323.694 147.456 323.58 147.441 323.42 147.532C323.268 147.623 323.154 147.775 323.071 147.995C322.987 148.216 322.949 148.497 322.949 148.847V150.017C322.949 150.359 322.987 150.602 323.071 150.731C323.154 150.861 323.268 150.883 323.42 150.792C323.572 150.701 323.694 150.549 323.77 150.329C323.854 150.108 323.892 149.819 323.892 149.477V148.292H323.899Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M322.888 156.72L323.291 156.416V153.429L322.881 153.672V153.338L323.641 152.646V156.218L324.036 156.066V156.408L322.888 157.07V156.72Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M324.249 160.375C324.249 160.884 324.173 161.318 324.028 161.675C323.884 162.032 323.679 162.283 323.428 162.427C323.177 162.572 322.972 162.556 322.828 162.366C322.676 162.176 322.607 161.834 322.607 161.325V160.383C322.607 159.874 322.683 159.44 322.828 159.083C322.972 158.726 323.177 158.475 323.428 158.323C323.686 158.179 323.884 158.194 324.036 158.384C324.18 158.574 324.256 158.916 324.256 159.425V160.375H324.249ZM323.899 159.516C323.899 159.174 323.861 158.931 323.778 158.81C323.694 158.68 323.58 158.665 323.42 158.756C323.268 158.848 323.154 159 323.071 159.22C322.987 159.44 322.949 159.722 322.949 160.071V161.242C322.949 161.584 322.987 161.827 323.071 161.956C323.154 162.085 323.268 162.108 323.42 162.017C323.572 161.926 323.694 161.774 323.77 161.553C323.854 161.333 323.892 161.044 323.892 160.702V159.516H323.899Z"
                        fill="#27DEBF" />
                    <path
                        d="M324.249 165.985C324.249 166.494 324.173 166.927 324.028 167.284C323.884 167.641 323.679 167.892 323.428 168.037C323.177 168.181 322.972 168.166 322.828 167.976C322.676 167.786 322.607 167.444 322.607 166.935V165.992C322.607 165.483 322.683 165.05 322.828 164.693C322.972 164.335 323.177 164.085 323.428 163.933C323.686 163.788 323.884 163.803 324.036 163.993C324.18 164.183 324.256 164.525 324.256 165.035V165.985H324.249ZM323.899 165.126C323.899 164.784 323.861 164.541 323.778 164.419C323.694 164.29 323.58 164.275 323.42 164.366C323.268 164.457 323.154 164.609 323.071 164.829C322.987 165.05 322.949 165.331 322.949 165.681V166.851C322.949 167.193 322.987 167.436 323.071 167.565C323.154 167.695 323.268 167.717 323.42 167.626C323.572 167.535 323.694 167.383 323.77 167.163C323.854 166.942 323.892 166.653 323.892 166.311V165.126H323.899Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M322.888 173.562L323.291 173.258V170.271L322.881 170.514V170.18L323.641 169.488V173.06L324.036 172.908V173.25L322.888 173.911V173.562Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M324.249 177.209C324.249 177.718 324.173 178.152 324.028 178.509C323.884 178.866 323.679 179.117 323.428 179.261C323.177 179.406 322.972 179.39 322.828 179.2C322.676 179.01 322.607 178.668 322.607 178.159V177.217C322.607 176.708 322.683 176.274 322.828 175.917C322.972 175.56 323.177 175.309 323.428 175.157C323.686 175.013 323.884 175.028 324.036 175.218C324.18 175.408 324.256 175.75 324.256 176.259V177.209H324.249ZM323.899 176.35C323.899 176.008 323.861 175.765 323.778 175.644C323.694 175.514 323.58 175.499 323.42 175.59C323.268 175.682 323.154 175.834 323.071 176.054C322.987 176.274 322.949 176.556 322.949 176.905V178.076C322.949 178.418 322.987 178.661 323.071 178.79C323.154 178.919 323.268 178.942 323.42 178.851C323.572 178.76 323.694 178.608 323.77 178.38C323.854 178.159 323.892 177.87 323.892 177.528V176.35H323.899Z"
                        fill="#27DEBF" />
                    <path
                        d="M324.249 182.826C324.249 183.336 324.173 183.769 324.028 184.126C323.884 184.483 323.679 184.734 323.428 184.878C323.177 185.023 322.972 185.008 322.828 184.818C322.676 184.628 322.607 184.286 322.607 183.776V182.834C322.607 182.325 322.683 181.892 322.828 181.534C322.972 181.177 323.177 180.926 323.428 180.774C323.686 180.63 323.884 180.645 324.036 180.835C324.18 181.025 324.256 181.367 324.256 181.876V182.826H324.249ZM323.899 181.968C323.899 181.626 323.861 181.382 323.778 181.261C323.694 181.132 323.58 181.116 323.42 181.208C323.268 181.299 323.154 181.451 323.071 181.671C322.987 181.892 322.949 182.173 322.949 182.522V183.693C322.949 184.035 322.987 184.278 323.071 184.407C323.154 184.536 323.268 184.559 323.42 184.468C323.572 184.377 323.694 184.225 323.77 183.997C323.854 183.776 323.892 183.488 323.892 183.146V181.968H323.899Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M322.888 190.396L323.291 190.092V187.105L322.881 187.348V187.014L323.641 186.322V189.894L324.036 189.742V190.084L322.888 190.745V190.396Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M322.888 196.013L323.291 195.709V192.722L322.881 192.965V192.631L323.641 191.939V195.511L324.036 195.359V195.701L322.888 196.363V196.013Z"
                        fill="#27DEBF" />
                    <path opacity="0.3"
                        d="M324.249 199.66C324.249 200.17 324.173 200.603 324.028 200.96C323.884 201.317 323.679 201.568 323.428 201.712C323.177 201.857 322.972 201.842 322.828 201.652C322.676 201.462 322.607 201.12 322.607 200.61V199.668C322.607 199.159 322.683 198.726 322.828 198.368C322.972 198.011 323.177 197.76 323.428 197.608C323.686 197.464 323.884 197.479 324.036 197.669C324.18 197.859 324.256 198.209 324.256 198.71V199.66H324.249ZM323.899 198.802C323.899 198.46 323.861 198.216 323.778 198.095C323.694 197.966 323.58 197.95 323.42 198.042C323.268 198.133 323.154 198.285 323.071 198.505C322.987 198.726 322.949 199.007 322.949 199.356V200.527C322.949 200.869 322.987 201.112 323.071 201.241C323.154 201.37 323.268 201.393 323.42 201.302C323.572 201.211 323.694 201.059 323.77 200.831C323.854 200.61 323.892 200.322 323.892 199.98V198.802H323.899Z"
                        fill="#27DEBF" />
                    <path
                        d="M107.307 219.929C107.466 219.929 107.626 219.876 107.801 219.777L237.974 144.56C238.977 143.982 239.82 142.523 239.82 141.368V43.0239C239.82 42.3323 239.532 41.9219 239.045 41.9219C238.825 41.9219 238.574 41.9979 238.315 42.1499L108.143 117.337C107.147 117.914 106.296 119.373 106.296 120.529V218.394C106.296 218.819 106.41 219.23 106.615 219.519C106.752 219.701 106.972 219.929 107.307 219.929Z"
                        fill="#FAFAFA" />
                    <path
                        d="M104.229 218.683C104.449 218.797 106.015 219.694 106.699 220.081C106.235 219.754 105.992 219.184 105.962 218.394V127.118L103.385 125.613V216.942C103.385 217.71 103.72 218.409 104.229 218.683Z"
                        fill="#EBEBEB" />
                    <path
                        d="M239.045 42.2643C239.425 42.2643 239.478 42.7355 239.478 43.0243V141.376C239.478 142.425 238.711 143.747 237.806 144.271L107.634 219.489C107.512 219.557 107.406 219.595 107.307 219.595C106.95 219.595 106.638 219.033 106.638 218.394V120.529C106.638 119.48 107.406 118.158 108.31 117.633L238.483 42.4543C238.749 42.2947 238.931 42.2643 239.045 42.2643ZM239.045 41.5879C238.772 41.5879 238.468 41.6791 238.148 41.8615L107.968 117.041C106.858 117.679 105.954 119.245 105.954 120.529V218.394C105.954 219.413 106.516 220.271 107.307 220.271C107.512 220.271 107.74 220.211 107.976 220.074L238.148 144.857C239.258 144.218 240.162 142.66 240.162 141.376V43.0243C240.162 42.1123 239.706 41.5879 239.045 41.5879Z"
                        fill="#E0E0E0" />
                    <path
                        d="M240.155 42.9798V49.6906L105.962 127.188L103.385 125.691V119.063C103.385 118.417 103.621 117.695 104.001 117.049C104.366 116.426 104.867 115.894 105.399 115.583L235.572 40.4034C236.15 40.0766 236.659 40.069 237.039 40.2894C237.404 40.5174 239.167 41.5206 239.532 41.703C239.585 41.7334 239.638 41.7638 239.684 41.8094C239.737 41.855 239.798 41.9082 239.843 41.969C239.889 42.0298 239.934 42.0982 239.972 42.1742C240.018 42.2502 240.048 42.3262 240.071 42.4174C240.102 42.501 240.117 42.5922 240.132 42.691C240.132 42.691 240.132 42.6986 240.132 42.7062C240.147 42.7898 240.155 42.881 240.155 42.9798Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M240.155 42.9798V49.6906L105.962 127.188L103.385 125.691V119.063C103.385 118.417 103.621 117.695 104.001 117.049C104.366 116.426 104.867 115.894 105.399 115.583L235.572 40.4034C236.15 40.0766 236.659 40.069 237.039 40.2894C237.404 40.5174 239.167 41.5206 239.532 41.703C239.585 41.7334 239.638 41.7638 239.684 41.8094C239.737 41.855 239.798 41.9082 239.843 41.969C239.889 42.0298 239.934 42.0982 239.972 42.1742C240.018 42.2502 240.048 42.3262 240.071 42.4174C240.102 42.501 240.117 42.5922 240.132 42.691C240.132 42.691 240.132 42.6986 240.132 42.7062C240.147 42.7898 240.155 42.881 240.155 42.9798Z"
                        fill="black" />
                    <path
                        d="M240.155 42.9797V49.6905L105.962 127.188V120.523C105.962 120.12 106.045 119.694 106.205 119.276C106.228 119.208 106.25 119.132 106.281 119.071C106.357 118.889 106.456 118.706 106.554 118.524C106.919 117.893 107.421 117.346 107.968 117.034L238.141 41.8549C238.756 41.4901 239.311 41.4977 239.684 41.7941C239.737 41.8397 239.798 41.8929 239.843 41.9537C239.889 42.0145 239.934 42.0829 239.972 42.1589C240.018 42.2349 240.048 42.3109 240.071 42.4021C240.102 42.4857 240.117 42.5769 240.132 42.6757C240.132 42.6757 240.132 42.6833 240.132 42.6909C240.147 42.7897 240.155 42.8809 240.155 42.9797Z"
                        fill="#27DEBF" />
                    <path
                        d="M226.642 51.0583C225.95 51.4611 225.388 52.6467 225.388 53.7183C225.388 54.7899 225.95 55.3295 226.642 54.9267C227.334 54.5239 227.896 53.3383 227.896 52.2667C227.896 51.2027 227.334 50.6555 226.642 51.0583Z"
                        fill="#FAFAFA" />
                    <path
                        d="M231.164 48.444C230.472 48.8468 229.91 50.0324 229.91 51.104C229.91 52.1756 230.472 52.7152 231.164 52.3124C231.856 51.9096 232.418 50.724 232.418 49.6524C232.426 48.5808 231.863 48.0412 231.164 48.444Z"
                        fill="#FAFAFA" />
                    <path
                        d="M235.694 45.8218C235.002 46.2246 234.44 47.4102 234.44 48.4818C234.44 49.5534 235.002 50.093 235.694 49.6902C236.385 49.2874 236.948 48.1018 236.948 47.0302C236.948 45.9586 236.385 45.4266 235.694 45.8218Z"
                        fill="#FAFAFA" />
                    <path
                        d="M238.148 41.8617L107.976 117.041C107.428 117.36 106.919 117.907 106.554 118.538L103.993 117.056C104.358 116.433 104.844 115.901 105.392 115.589L235.572 40.4025C236.15 40.0681 236.659 40.0605 237.031 40.2809C237.388 40.5013 239.06 41.4513 239.486 41.6793C239.136 41.5121 238.665 41.5653 238.148 41.8617Z"
                        fill="#27DEBF" />
                    <g opacity="0.5">
                        <path
                            d="M238.148 41.8617L107.976 117.041C107.428 117.36 106.919 117.907 106.554 118.538L103.993 117.056C104.358 116.433 104.844 115.901 105.392 115.589L235.572 40.4025C236.15 40.0681 236.659 40.0605 237.031 40.2809C237.388 40.5013 239.06 41.4513 239.486 41.6793C239.136 41.5121 238.665 41.5653 238.148 41.8617Z"
                            fill="white" />
                    </g>
                    <path
                        d="M138.49 130.461C138.391 130.461 138.307 130.377 138.307 130.279V122.61C138.307 122.511 138.391 122.428 138.49 122.428C138.588 122.428 138.672 122.511 138.672 122.61V130.279C138.664 130.377 138.588 130.461 138.49 130.461Z"
                        fill="#455A64" />
                    <path
                        d="M137.874 129.557L138.49 130.172L139.098 129.557V130.081L138.49 130.689L137.874 130.081V129.557Z"
                        fill="#455A64" />
                    <path
                        d="M145.003 131.295C144.942 131.295 144.881 131.265 144.843 131.204C144.79 131.12 144.82 131.006 144.912 130.961L149.966 128.042C150.049 127.997 150.163 128.02 150.209 128.111C150.262 128.194 150.232 128.308 150.14 128.354L145.094 131.272C145.064 131.288 145.033 131.295 145.003 131.295Z"
                        fill="#455A64" />
                    <path
                        d="M149.73 129.084L149.958 128.256L149.122 128.028L149.57 127.77L150.406 127.99L150.186 128.826L149.73 129.084Z"
                        fill="#455A64" />
                    <path
                        d="M144.068 171.586C144.007 171.586 143.946 171.555 143.908 171.494C143.855 171.411 143.886 171.297 143.977 171.251L149.031 168.333C149.114 168.28 149.228 168.31 149.274 168.401C149.327 168.485 149.297 168.599 149.206 168.644L144.159 171.563C144.129 171.578 144.098 171.586 144.068 171.586Z"
                        fill="#455A64" />
                    <path
                        d="M148.795 169.381L149.023 168.545L148.187 168.325L148.636 168.059L149.472 168.287L149.251 169.123L148.795 169.381Z"
                        fill="#455A64" />
                    <path
                        d="M162.392 161.006C162.331 161.006 162.27 160.975 162.232 160.914C162.179 160.831 162.209 160.717 162.3 160.671L167.347 157.753C167.43 157.7 167.544 157.73 167.59 157.821C167.643 157.905 167.613 158.019 167.522 158.064L162.475 160.983C162.46 160.998 162.422 161.006 162.392 161.006Z"
                        fill="#455A64" />
                    <path
                        d="M167.126 158.793L167.354 157.965L166.518 157.737L166.967 157.479L167.803 157.699L167.575 158.535L167.126 158.793Z"
                        fill="#455A64" />
                    <path
                        d="M163.57 120.572C163.509 120.572 163.448 120.542 163.41 120.481C163.357 120.398 163.387 120.284 163.478 120.238L168.525 117.32C168.608 117.274 168.722 117.297 168.768 117.388C168.821 117.472 168.791 117.586 168.7 117.631L163.653 120.55C163.63 120.565 163.6 120.572 163.57 120.572Z"
                        fill="#455A64" />
                    <path
                        d="M168.304 118.369L168.532 117.533L167.696 117.305L168.145 117.047L168.981 117.275L168.753 118.103L168.304 118.369Z"
                        fill="#455A64" />
                    <path
                        d="M163.243 140.836C163.182 140.836 163.121 140.805 163.083 140.744C163.03 140.661 163.06 140.547 163.152 140.501L168.198 137.583C168.282 137.53 168.396 137.56 168.441 137.651C168.494 137.735 168.464 137.849 168.373 137.894L163.326 140.813C163.304 140.828 163.273 140.836 163.243 140.836Z"
                        fill="#455A64" />
                    <path
                        d="M163.554 139.771L163.334 140.607L164.17 140.828L163.722 141.086L162.886 140.866L163.106 140.03L163.554 139.771Z"
                        fill="#455A64" />
                    <path
                        d="M162.916 178.515C162.855 178.515 162.794 178.485 162.756 178.424C162.703 178.34 162.734 178.226 162.825 178.181L167.544 175.46C167.628 175.407 167.742 175.437 167.788 175.528C167.841 175.612 167.81 175.726 167.719 175.771L163 178.492C162.977 178.507 162.946 178.515 162.916 178.515Z"
                        fill="#455A64" />
                    <path
                        d="M163.235 177.443L163.015 178.279L163.843 178.507L163.395 178.766L162.559 178.538L162.787 177.702L163.235 177.443Z"
                        fill="#455A64" />
                    <path
                        d="M145.086 151.316C145.026 151.316 144.965 151.286 144.927 151.225C144.874 151.141 144.904 151.027 144.995 150.982L150.049 148.063C150.133 148.01 150.247 148.04 150.292 148.132C150.346 148.215 150.315 148.329 150.224 148.375L145.178 151.293C145.147 151.308 145.117 151.316 145.086 151.316Z"
                        fill="#455A64" />
                    <path
                        d="M145.406 150.252L145.178 151.088L146.014 151.308L145.565 151.567L144.729 151.346L144.957 150.51L145.406 150.252Z"
                        fill="#455A64" />
                    <path
                        d="M173.814 127.42C173.716 127.42 173.632 127.337 173.632 127.238V121.393C173.632 121.295 173.716 121.211 173.814 121.211C173.913 121.211 173.997 121.295 173.997 121.393V127.238C173.997 127.337 173.913 127.42 173.814 127.42Z"
                        fill="#455A64" />
                    <path
                        d="M173.206 126.523L173.814 127.131L174.422 126.523V127.04L173.814 127.648L173.206 127.04V126.523Z"
                        fill="#455A64" />
                    <path
                        d="M138.49 164.768C138.459 164.768 138.429 164.76 138.398 164.745C138.345 164.714 138.307 164.654 138.307 164.585V160.284C138.307 160.185 138.391 160.101 138.49 160.101C138.588 160.101 138.672 160.185 138.672 160.284V164.274L173.64 144.088V141.413C173.64 141.314 173.723 141.23 173.822 141.23C173.921 141.23 174.004 141.314 174.004 141.413V144.187C174.004 144.248 173.974 144.308 173.913 144.346L138.588 164.745C138.55 164.76 138.52 164.768 138.49 164.768Z"
                        fill="#455A64" />
                    <path
                        d="M139.098 161.005L138.49 160.397L137.874 161.005V160.489L138.49 159.873L139.098 160.489V161.005Z"
                        fill="#455A64" />
                    <path
                        d="M138.49 184.717C138.459 184.717 138.429 184.71 138.398 184.695C138.345 184.664 138.307 184.603 138.307 184.535V181.761C138.307 181.662 138.391 181.579 138.49 181.579C138.588 181.579 138.672 181.662 138.672 181.761V184.223L173.64 164.038V159.843C173.64 159.744 173.723 159.66 173.822 159.66C173.921 159.66 174.004 159.744 174.004 159.843V164.144C174.004 164.205 173.974 164.266 173.913 164.304L138.588 184.702C138.55 184.71 138.52 184.717 138.49 184.717Z"
                        fill="#455A64" />
                    <path
                        d="M174.422 160.556L173.814 159.948L173.206 160.556V160.04L173.814 159.432L174.422 160.04V160.556Z"
                        fill="#455A64" />
                    <path
                        d="M130.403 179.473C130.373 179.473 130.342 179.465 130.312 179.45C130.259 179.42 130.221 179.359 130.221 179.29V159.614C130.221 159.553 130.251 159.492 130.312 159.454L132.22 158.352C132.303 158.299 132.417 158.33 132.463 158.421C132.516 158.504 132.486 158.618 132.394 158.664L130.57 159.713V178.979L132.577 177.824C132.66 177.77 132.774 177.801 132.82 177.892C132.873 177.976 132.843 178.09 132.752 178.135L130.479 179.45C130.464 179.465 130.434 179.473 130.403 179.473Z"
                        fill="#455A64" />
                    <path
                        d="M132.364 178.873L132.584 178.037L131.748 177.809L132.197 177.551L133.033 177.771L132.812 178.607L132.364 178.873Z"
                        fill="#455A64" />
                    <path
                        d="M180.662 168.27C180.601 168.27 180.54 168.24 180.502 168.179C180.449 168.096 180.48 167.982 180.571 167.936L182.471 166.834V149.438L180.829 150.388C180.746 150.441 180.632 150.41 180.586 150.319C180.533 150.236 180.563 150.122 180.654 150.076L182.562 148.974C182.615 148.944 182.684 148.944 182.744 148.974C182.798 149.004 182.836 149.065 182.836 149.134V166.948C182.836 167.016 182.805 167.07 182.744 167.108L180.753 168.255C180.73 168.263 180.692 168.27 180.662 168.27Z"
                        fill="#455A64" />
                    <path
                        d="M180.981 167.199L180.761 168.035L181.597 168.256L181.141 168.522L180.305 168.294L180.533 167.458L180.981 167.199Z"
                        fill="#455A64" />
                    <path
                        d="M140.437 120.173C143.247 117.821 144.653 114.873 143.578 113.589C142.503 112.305 139.354 113.17 136.544 115.522C133.734 117.874 132.328 120.822 133.403 122.106C134.478 123.391 137.627 122.525 140.437 120.173Z"
                        fill="#27DEBF" />
                    <path
                        d="M161.829 178.965C161.829 181.01 159.39 184.073 156.38 185.813C153.37 187.553 150.931 187.303 150.931 185.266C150.931 183.221 153.37 180.159 156.38 178.418C159.39 176.67 161.829 176.921 161.829 178.965Z"
                        fill="#27DEBF" />
                    <path
                        d="M143.452 135.288L133.527 141.018C133.23 141.193 132.987 141.011 132.987 140.615V135.501C132.987 135.105 133.23 134.642 133.527 134.475L143.452 128.744C143.749 128.569 143.992 128.752 143.992 129.147V134.262C143.984 134.657 143.749 135.113 143.452 135.288Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M143.452 135.288L133.527 141.018C133.23 141.193 132.987 141.011 132.987 140.615V135.501C132.987 135.105 133.23 134.642 133.527 134.475L143.452 128.744C143.749 128.569 143.992 128.752 143.992 129.147V134.262C143.984 134.657 143.749 135.113 143.452 135.288Z"
                        fill="white" />
                    <path
                        d="M161.343 124.952L151.417 130.682C151.121 130.857 150.878 130.675 150.878 130.279V125.165C150.878 124.769 151.121 124.306 151.417 124.139L161.343 118.408C161.639 118.233 161.882 118.416 161.882 118.811V123.926C161.882 124.321 161.639 124.785 161.343 124.952Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M161.343 124.952L151.417 130.682C151.121 130.857 150.878 130.675 150.878 130.279V125.165C150.878 124.769 151.121 124.306 151.417 124.139L161.343 118.408C161.639 118.233 161.882 118.416 161.882 118.811V123.926C161.882 124.321 161.639 124.785 161.343 124.952Z"
                        fill="white" />
                    <path
                        d="M161.343 145.024L151.417 150.755C151.121 150.929 150.878 150.747 150.878 150.352V145.237C150.878 144.842 151.121 144.378 151.417 144.211L161.343 138.481C161.639 138.306 161.882 138.488 161.882 138.883V143.998C161.882 144.393 161.639 144.857 161.343 145.024Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M161.343 145.024L151.417 150.755C151.121 150.929 150.878 150.747 150.878 150.352V145.237C150.878 144.842 151.121 144.378 151.417 144.211L161.343 138.481C161.639 138.306 161.882 138.488 161.882 138.883V143.998C161.882 144.393 161.639 144.857 161.343 145.024Z"
                        fill="white" />
                    <path
                        d="M161.343 164.708L151.417 170.438C151.121 170.613 150.878 170.43 150.878 170.035V164.921C150.878 164.525 151.121 164.062 151.417 163.894L161.343 158.164C161.639 157.989 161.882 158.172 161.882 158.567V163.682C161.882 164.077 161.639 164.533 161.343 164.708Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M161.343 164.708L151.417 170.438C151.121 170.613 150.878 170.43 150.878 170.035V164.921C150.878 164.525 151.121 164.062 151.417 163.894L161.343 158.164C161.639 157.989 161.882 158.172 161.882 158.567V163.682C161.882 164.077 161.639 164.533 161.343 164.708Z"
                        fill="white" />
                    <path
                        d="M178.777 154.637L168.852 160.368C168.555 160.543 168.312 160.36 168.312 159.965V154.85C168.312 154.455 168.555 153.991 168.852 153.824L178.777 148.094C179.074 147.919 179.317 148.101 179.317 148.497V153.611C179.317 154.007 179.074 154.47 178.777 154.637Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M178.777 154.637L168.852 160.368C168.555 160.543 168.312 160.36 168.312 159.965V154.85C168.312 154.455 168.555 153.991 168.852 153.824L178.777 148.094C179.074 147.919 179.317 148.101 179.317 148.497V153.611C179.317 154.007 179.074 154.47 178.777 154.637Z"
                        fill="white" />
                    <path
                        d="M178.777 172.452L168.852 178.182C168.555 178.357 168.312 178.175 168.312 177.779V172.665C168.312 172.269 168.555 171.806 168.852 171.639L178.777 165.908C179.074 165.733 179.317 165.916 179.317 166.311V171.426C179.317 171.821 179.074 172.277 178.777 172.452Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M178.777 172.452L168.852 178.182C168.555 178.357 168.312 178.175 168.312 177.779V172.665C168.312 172.269 168.555 171.806 168.852 171.639L178.777 165.908C179.074 165.733 179.317 165.916 179.317 166.311V171.426C179.317 171.821 179.074 172.277 178.777 172.452Z"
                        fill="white" />
                    <path
                        d="M143.452 155.36L133.527 161.09C133.23 161.265 132.987 161.083 132.987 160.688V155.573C132.987 155.178 133.23 154.714 133.527 154.547L143.452 148.816C143.749 148.642 143.992 148.824 143.992 149.219V154.334C143.984 154.729 143.749 155.185 143.452 155.36Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M143.452 155.36L133.527 161.09C133.23 161.265 132.987 161.083 132.987 160.688V155.573C132.987 155.178 133.23 154.714 133.527 154.547L143.452 148.816C143.749 148.642 143.992 148.824 143.992 149.219V154.334C143.984 154.729 143.749 155.185 143.452 155.36Z"
                        fill="white" />
                    <path
                        d="M173.313 119.845L169.118 113.978C168.791 113.522 169.087 112.412 169.619 112.108L178.017 107.259C178.549 106.955 178.846 107.723 178.519 108.551L174.324 119.267C174.065 119.921 173.571 120.202 173.313 119.845Z"
                        fill="#455A64" />
                    <path
                        d="M178.086 132.871L174.194 139.574C173.966 139.961 173.662 140.144 173.434 140.015L169.543 137.795C169.201 137.598 169.201 136.815 169.543 136.222L173.434 129.519C173.662 129.131 173.966 128.949 174.194 129.078L178.086 131.297C178.428 131.495 178.428 132.285 178.086 132.871Z"
                        fill="#F28F8F" />
                    <path
                        d="M142.753 172.945L138.862 179.648C138.634 180.036 138.33 180.218 138.102 180.089L134.211 177.87C133.869 177.672 133.869 176.889 134.211 176.297L138.102 169.593C138.33 169.206 138.634 169.023 138.862 169.153L142.753 171.372C143.095 171.569 143.095 172.36 142.753 172.945Z"
                        fill="#F28F8F" />
                    <path
                        d="M123.768 149.31C123.708 149.31 123.647 149.28 123.609 149.219C123.556 149.135 123.586 149.021 123.677 148.976L135.396 142.212C135.48 142.159 135.594 142.189 135.64 142.28C135.693 142.364 135.662 142.478 135.571 142.523L123.852 149.287C123.829 149.303 123.799 149.31 123.768 149.31Z"
                        fill="#455A64" />
                    <path
                        d="M123.768 151.013C123.708 151.013 123.647 150.983 123.609 150.922C123.556 150.838 123.586 150.724 123.677 150.679L135.396 143.915C135.48 143.862 135.594 143.892 135.64 143.983C135.693 144.067 135.662 144.181 135.571 144.226L123.852 150.99C123.829 151.006 123.799 151.013 123.768 151.013Z"
                        fill="#E0E0E0" />
                    <path
                        d="M123.768 152.715C123.708 152.715 123.647 152.685 123.609 152.624C123.556 152.54 123.586 152.426 123.677 152.381L135.396 145.617C135.48 145.571 135.594 145.594 135.64 145.685C135.693 145.769 135.662 145.883 135.571 145.928L123.852 152.692C123.829 152.707 123.799 152.715 123.768 152.715Z"
                        fill="#E0E0E0" />
                    <path
                        d="M123.768 154.41C123.708 154.41 123.647 154.379 123.609 154.319C123.556 154.235 123.586 154.121 123.677 154.075L135.396 147.311C135.48 147.258 135.594 147.289 135.64 147.38C135.693 147.463 135.662 147.577 135.571 147.623L123.852 154.387C123.829 154.402 123.799 154.41 123.768 154.41Z"
                        fill="#E0E0E0" />
                    <path
                        d="M118.616 129.42C118.555 129.42 118.494 129.39 118.456 129.329C118.403 129.245 118.433 129.131 118.524 129.086L130.244 122.322C130.327 122.276 130.441 122.299 130.487 122.39C130.54 122.474 130.51 122.588 130.418 122.633L118.699 129.397C118.676 129.412 118.646 129.42 118.616 129.42Z"
                        fill="#455A64" />
                    <path
                        d="M118.616 131.115C118.555 131.115 118.494 131.084 118.456 131.024C118.403 130.94 118.433 130.826 118.524 130.78L130.244 124.016C130.327 123.963 130.441 123.994 130.487 124.085C130.54 124.168 130.51 124.282 130.418 124.328L118.699 131.092C118.676 131.107 118.646 131.115 118.616 131.115Z"
                        fill="#E0E0E0" />
                    <path
                        d="M118.616 132.818C118.555 132.818 118.494 132.788 118.456 132.727C118.403 132.643 118.433 132.529 118.524 132.484L130.244 125.72C130.327 125.666 130.441 125.697 130.487 125.788C130.54 125.872 130.51 125.986 130.418 126.031L118.699 132.795C118.676 132.81 118.646 132.818 118.616 132.818Z"
                        fill="#E0E0E0" />
                    <path
                        d="M118.616 134.52C118.555 134.52 118.494 134.489 118.456 134.428C118.403 134.345 118.433 134.231 118.524 134.185L130.244 127.421C130.327 127.376 130.441 127.398 130.487 127.49C130.54 127.573 130.51 127.687 130.418 127.733L118.699 134.497C118.676 134.512 118.646 134.52 118.616 134.52Z"
                        fill="#E0E0E0" />
                    <path
                        d="M150.52 133.662C150.46 133.662 150.399 133.631 150.361 133.57C150.308 133.487 150.338 133.373 150.429 133.327L162.148 126.563C162.232 126.51 162.346 126.54 162.392 126.632C162.445 126.715 162.414 126.829 162.323 126.875L150.604 133.639C150.581 133.654 150.551 133.662 150.52 133.662Z"
                        fill="#455A64" />
                    <path
                        d="M150.52 135.357C150.46 135.357 150.399 135.327 150.361 135.266C150.308 135.182 150.338 135.068 150.429 135.023L162.148 128.259C162.232 128.205 162.346 128.236 162.392 128.327C162.445 128.411 162.414 128.525 162.323 128.57L150.604 135.334C150.581 135.349 150.551 135.357 150.52 135.357Z"
                        fill="#E0E0E0" />
                    <path
                        d="M150.52 137.058C150.46 137.058 150.399 137.028 150.361 136.967C150.308 136.883 150.338 136.769 150.429 136.724L162.148 129.96C162.232 129.907 162.346 129.937 162.392 130.028C162.445 130.112 162.414 130.226 162.323 130.271L150.604 137.035C150.581 137.051 150.551 137.058 150.52 137.058Z"
                        fill="#E0E0E0" />
                    <path
                        d="M150.52 138.762C150.46 138.762 150.399 138.731 150.361 138.671C150.308 138.587 150.338 138.473 150.429 138.427L162.148 131.663C162.232 131.618 162.346 131.641 162.392 131.732C162.445 131.815 162.414 131.929 162.323 131.975L150.604 138.739C150.581 138.754 150.551 138.762 150.52 138.762Z"
                        fill="#E0E0E0" />
                    <path
                        d="M167.476 104.591C167.415 104.591 167.354 104.561 167.316 104.5C167.263 104.417 167.294 104.303 167.385 104.257L179.104 97.493C179.188 97.4398 179.302 97.4702 179.347 97.5614C179.4 97.645 179.37 97.759 179.279 97.8046L167.56 104.569C167.544 104.584 167.506 104.591 167.476 104.591Z"
                        fill="#455A64" />
                    <path
                        d="M167.476 106.295C167.415 106.295 167.354 106.264 167.316 106.203C167.263 106.12 167.294 106.006 167.385 105.96L179.104 99.1961C179.188 99.1429 179.302 99.1733 179.347 99.2645C179.4 99.3481 179.37 99.4621 179.279 99.5077L167.56 106.272C167.544 106.287 167.506 106.295 167.476 106.295Z"
                        fill="#E0E0E0" />
                    <path
                        d="M167.476 107.988C167.415 107.988 167.354 107.958 167.316 107.897C167.263 107.814 167.294 107.7 167.385 107.654L179.104 100.89C179.188 100.844 179.302 100.867 179.347 100.958C179.4 101.042 179.37 101.156 179.279 101.202L167.56 107.966C167.544 107.981 167.506 107.988 167.476 107.988Z"
                        fill="#E0E0E0" />
                    <path
                        d="M167.476 109.691C167.415 109.691 167.354 109.661 167.316 109.6C167.263 109.516 167.294 109.402 167.385 109.357L179.104 102.593C179.188 102.539 179.302 102.57 179.347 102.661C179.4 102.745 179.37 102.859 179.279 102.904L167.56 109.668C167.544 109.683 167.506 109.691 167.476 109.691Z"
                        fill="#E0E0E0" />
                    <path
                        d="M178.336 123.623C178.276 123.623 178.215 123.592 178.177 123.531C178.124 123.448 178.154 123.334 178.245 123.288L189.964 116.524C190.048 116.471 190.162 116.501 190.208 116.593C190.261 116.676 190.23 116.79 190.139 116.836L178.42 123.6C178.405 123.615 178.367 123.623 178.336 123.623Z"
                        fill="#455A64" />
                    <path
                        d="M178.336 125.326C178.276 125.326 178.215 125.295 178.177 125.235C178.124 125.151 178.154 125.037 178.245 124.991L189.964 118.227C190.048 118.174 190.162 118.205 190.208 118.296C190.261 118.379 190.23 118.493 190.139 118.539L178.42 125.303C178.405 125.318 178.367 125.326 178.336 125.326Z"
                        fill="#E0E0E0" />
                    <path
                        d="M178.336 127.019C178.276 127.019 178.215 126.989 178.177 126.928C178.124 126.844 178.154 126.73 178.245 126.685L189.964 119.921C190.048 119.868 190.162 119.898 190.208 119.989C190.261 120.073 190.23 120.187 190.139 120.232L178.42 126.996C178.405 127.012 178.367 127.019 178.336 127.019Z"
                        fill="#E0E0E0" />
                    <path
                        d="M178.336 128.723C178.276 128.723 178.215 128.692 178.177 128.632C178.124 128.548 178.154 128.434 178.245 128.388L189.964 121.624C190.048 121.579 190.162 121.602 190.208 121.693C190.261 121.776 190.23 121.89 190.139 121.936L178.42 128.7C178.405 128.715 178.367 128.723 178.336 128.723Z"
                        fill="#E0E0E0" />
                    <path
                        d="M178.336 140.525C178.276 140.525 178.215 140.495 178.177 140.434C178.124 140.35 178.154 140.236 178.245 140.191L189.964 133.427C190.048 133.373 190.162 133.404 190.208 133.495C190.261 133.579 190.23 133.693 190.139 133.738L178.42 140.502C178.405 140.517 178.367 140.525 178.336 140.525Z"
                        fill="#455A64" />
                    <path
                        d="M178.336 142.227C178.276 142.227 178.215 142.196 178.177 142.135C178.124 142.052 178.154 141.938 178.245 141.892L189.964 135.128C190.048 135.083 190.162 135.105 190.208 135.197C190.261 135.28 190.23 135.394 190.139 135.44L178.42 142.204C178.405 142.219 178.367 142.227 178.336 142.227Z"
                        fill="#E0E0E0" />
                    <path
                        d="M178.336 143.921C178.276 143.921 178.215 143.891 178.177 143.83C178.124 143.747 178.154 143.633 178.245 143.587L189.964 136.823C190.048 136.77 190.162 136.8 190.208 136.891C190.261 136.975 190.23 137.089 190.139 137.135L178.42 143.899C178.405 143.914 178.367 143.921 178.336 143.921Z"
                        fill="#E0E0E0" />
                    <path
                        d="M178.336 145.625C178.276 145.625 178.215 145.595 178.177 145.534C178.124 145.45 178.154 145.336 178.245 145.291L189.964 138.527C190.048 138.481 190.162 138.504 190.208 138.595C190.261 138.679 190.23 138.793 190.139 138.838L178.42 145.602C178.405 145.618 178.367 145.625 178.336 145.625Z"
                        fill="#E0E0E0" />
                    <path
                        d="M123.191 187.681C123.13 187.681 123.069 187.651 123.031 187.59C122.978 187.506 123.008 187.392 123.1 187.347L134.819 180.583C134.902 180.53 135.016 180.56 135.062 180.651C135.115 180.735 135.085 180.849 134.994 180.894L123.274 187.658C123.252 187.674 123.221 187.681 123.191 187.681Z"
                        fill="#455A64" />
                    <path
                        d="M123.191 189.383C123.13 189.383 123.069 189.353 123.031 189.292C122.978 189.208 123.008 189.094 123.1 189.049L134.819 182.285C134.902 182.239 135.016 182.262 135.062 182.353C135.115 182.437 135.085 182.551 134.994 182.596L123.274 189.36C123.252 189.375 123.221 189.383 123.191 189.383Z"
                        fill="#E0E0E0" />
                    <path
                        d="M123.191 191.086C123.13 191.086 123.069 191.055 123.031 190.994C122.978 190.911 123.008 190.797 123.1 190.751L134.819 183.987C134.902 183.934 135.016 183.964 135.062 184.056C135.115 184.139 135.085 184.253 134.994 184.299L123.274 191.063C123.252 191.078 123.221 191.086 123.191 191.086Z"
                        fill="#E0E0E0" />
                    <path
                        d="M123.191 192.781C123.13 192.781 123.069 192.75 123.031 192.69C122.978 192.606 123.008 192.492 123.1 192.446L134.819 185.682C134.902 185.629 135.016 185.66 135.062 185.751C135.115 185.834 135.085 185.948 134.994 185.994L123.274 192.758C123.252 192.773 123.221 192.781 123.191 192.781Z"
                        fill="#E0E0E0" />
                    <path
                        d="M259.588 61.0901L259.596 153.757C259.596 155.178 258.592 156.903 257.369 157.61L198.165 191.78C197.906 191.924 197.656 192 197.428 191.992C197.329 191.992 197.238 191.977 197.146 191.954C197.078 191.939 197.017 191.916 196.956 191.886C196.911 191.863 196.873 191.84 196.842 191.818C196.797 191.787 196.751 191.757 196.713 191.726C196.668 191.688 196.622 191.658 196.592 191.62C196.417 191.46 196.288 191.263 196.181 191.035C196.037 190.708 195.946 190.32 195.946 189.91V97.7981C195.946 96.3845 196.949 94.6517 198.172 93.9449L257.376 59.8133C257.954 59.4865 258.471 59.4333 258.874 59.6233C258.942 59.6537 258.995 59.6841 259.064 59.7373C259.117 59.7981 259.588 60.1477 259.588 61.0901Z"
                        fill="#455A64" />
                    <path
                        d="M258.349 60.2854C258.418 60.2854 258.478 60.3006 258.547 60.331C258.554 60.331 258.562 60.3386 258.585 60.3538C258.608 60.369 258.82 60.5514 258.82 61.091L258.828 153.758C258.828 154.913 257.984 156.372 256.981 156.957L197.777 191.127C197.602 191.226 197.488 191.241 197.42 191.241C197.42 191.241 197.42 191.241 197.412 191.241C197.397 191.241 197.359 191.241 197.283 191.218C197.26 191.211 197.245 191.195 197.245 191.195L197.184 191.157L197.139 191.127L197.124 191.119L197.116 191.112L197.078 191.074C196.987 190.99 196.911 190.884 196.85 190.739C196.744 190.489 196.683 190.207 196.683 189.926V97.8142C196.683 96.6818 197.549 95.1846 198.53 94.6146L257.726 60.483C258.03 60.3158 258.235 60.2854 258.349 60.2854ZM258.349 59.5254C258.053 59.5254 257.718 59.6242 257.361 59.8218L198.157 93.9534C196.934 94.6602 195.93 96.393 195.93 97.8066V189.919C195.93 190.329 196.022 190.717 196.166 191.043C196.265 191.271 196.402 191.469 196.576 191.629C196.614 191.674 196.66 191.705 196.698 191.735C196.744 191.765 196.789 191.796 196.827 191.826C196.865 191.849 196.903 191.872 196.941 191.895C197.002 191.925 197.063 191.948 197.131 191.963C197.222 191.986 197.321 192.001 197.412 192.001C197.42 192.001 197.435 192.001 197.443 192.001C197.663 192.001 197.906 191.925 198.15 191.788L257.353 157.619C258.577 156.912 259.58 155.187 259.58 153.765L259.588 61.091C259.588 60.1486 259.117 59.799 259.056 59.7458C258.988 59.6926 258.934 59.6622 258.866 59.6318C258.706 59.5634 258.532 59.5254 258.349 59.5254Z"
                        fill="#455A64" />
                    <g opacity="0.8">
                        <path
                            d="M259.588 61.0901L259.596 153.757C259.596 155.178 258.592 156.903 257.369 157.61L198.165 191.78C197.906 191.924 197.656 192 197.428 191.992C197.329 191.992 197.238 191.977 197.146 191.954C197.078 191.939 197.017 191.916 196.956 191.886C196.911 191.863 196.873 191.84 196.842 191.818C196.797 191.787 196.751 191.757 196.713 191.726C196.668 191.688 196.622 191.658 196.592 191.62C196.417 191.46 196.288 191.263 196.181 191.035C196.037 190.708 195.946 190.32 195.946 189.91V97.7981C195.946 96.3845 196.949 94.6517 198.172 93.9449L257.376 59.8133C257.954 59.4865 258.471 59.4333 258.874 59.6233C258.942 59.6537 258.995 59.6841 259.064 59.7373C259.117 59.7981 259.588 60.1477 259.588 61.0901Z"
                            fill="#455A64" />
                    </g>
                    <path
                        d="M258.858 59.6307C258.455 59.4408 257.939 59.4939 257.361 59.8207L198.157 93.9523C196.933 94.6591 195.93 96.3919 195.93 97.8055V105.079L193.088 103.414V96.1944C193.088 94.7808 194.083 93.0555 195.307 92.3487L254.519 58.2171C255.157 57.8447 255.719 57.8371 256.13 58.0879C256.54 58.3235 258.387 59.3875 258.858 59.6307Z"
                        fill="#27DEBF" />
                    <path
                        d="M259.588 61.0903C259.58 59.6843 258.585 59.1143 257.369 59.8211L198.165 93.9527C196.933 94.6595 195.938 96.3847 195.938 97.8059V105.079L259.588 68.3863V61.0903Z"
                        fill="#27DEBF" />
                    <g opacity="0.4">
                        <path
                            d="M257.361 59.8205L198.157 93.9521C197.549 94.3093 196.987 94.9097 196.591 95.6013L193.764 93.9673C194.159 93.2833 194.707 92.6829 195.315 92.3409L254.519 58.2093C255.157 57.8369 255.719 57.8293 256.137 58.0801C256.533 58.3233 258.379 59.3721 258.851 59.6229C258.463 59.4405 257.939 59.4937 257.361 59.8205Z"
                            fill="white" />
                    </g>
                    <path opacity="0.15"
                        d="M193.088 103.421V96.1936C193.088 95.4716 193.354 94.6736 193.764 93.9668L196.599 95.5932C196.189 96.2924 195.938 97.0828 195.938 97.8048V105.078L193.088 103.421Z"
                        fill="black" />
                    <path
                        d="M246.189 69.3737C245.497 69.7765 244.935 70.9621 244.935 72.0337C244.935 73.1053 245.497 73.6449 246.189 73.2421C246.881 72.8393 247.443 71.6537 247.443 70.5821C247.443 69.5105 246.881 68.9709 246.189 69.3737Z"
                        fill="#455A64" />
                    <path
                        d="M250.711 66.7525C250.019 67.1553 249.457 68.3409 249.457 69.4125C249.457 70.4841 250.019 71.0237 250.711 70.6209C251.403 70.2181 251.965 69.0325 251.965 67.9609C251.973 66.8969 251.41 66.3573 250.711 66.7525Z"
                        fill="#455A64" />
                    <path
                        d="M255.233 64.1373C254.541 64.5401 253.979 65.7257 253.979 66.7973C253.979 67.8689 254.541 68.4085 255.233 68.0057C255.925 67.6029 256.487 66.4173 256.487 65.3457C256.487 64.2741 255.932 63.7345 255.233 64.1373Z"
                        fill="#455A64" />
                    <path
                        d="M196.751 191.787C196.667 191.734 196.576 191.688 196.47 191.627C196.265 191.506 196.029 191.369 195.786 191.24L195.778 191.232C195.657 191.156 195.527 191.088 195.406 191.019C195.398 191.012 195.383 191.004 195.375 191.004C195.17 190.89 194.973 190.768 194.79 190.67C194.6 190.563 194.433 190.464 194.304 190.396C194.175 190.312 194.068 190.267 194.023 190.244C193.886 190.168 193.749 190.069 193.643 189.94C193.529 189.818 193.422 189.666 193.346 189.484C193.187 189.15 193.088 188.739 193.088 188.306V103.414L195.93 105.078V189.917C195.953 190.358 196.029 190.73 196.166 191.042C196.265 191.27 196.401 191.468 196.576 191.627C196.607 191.673 196.652 191.711 196.698 191.734C196.713 191.756 196.728 191.772 196.751 191.787Z"
                        fill="#37474F" />
                    <path
                        d="M201.501 108.166C201.501 108.067 201.531 107.961 201.585 107.854L202.77 105.4C202.793 105.362 202.808 105.339 202.824 105.324C202.839 105.308 202.846 105.301 202.854 105.301C202.892 105.278 202.922 105.286 202.945 105.308C202.968 105.331 202.983 105.377 202.983 105.43V106.258C202.983 106.365 202.975 106.448 202.96 106.517C202.945 106.585 202.915 106.654 202.877 106.745L202.254 108.044L202.877 108.622C202.915 108.66 202.945 108.706 202.96 108.751C202.975 108.797 202.983 108.873 202.983 108.979V109.808C202.983 109.861 202.968 109.922 202.945 109.975C202.922 110.028 202.884 110.066 202.854 110.089C202.846 110.089 202.839 110.096 202.824 110.104C202.808 110.112 202.785 110.104 202.77 110.096L201.585 109.01C201.531 108.972 201.501 108.896 201.501 108.797V108.166Z"
                        fill="#27DEBF" />
                    <path
                        d="M205.848 102.002C205.871 101.926 205.901 101.843 205.939 101.759C205.977 101.675 206.038 101.615 206.114 101.569L206.563 101.311C206.601 101.288 206.631 101.295 206.654 101.318C206.677 101.341 206.692 101.387 206.692 101.44C206.692 101.463 206.692 101.493 206.677 101.531L204.64 110.21C204.625 110.279 204.594 110.362 204.556 110.446C204.518 110.529 204.457 110.598 204.374 110.643L203.948 110.887C203.91 110.909 203.88 110.902 203.857 110.879C203.834 110.856 203.819 110.811 203.819 110.757C203.819 110.735 203.819 110.704 203.834 110.666L205.848 102.002Z"
                        fill="#27DEBF" />
                    <path
                        d="M208.995 104.449C208.995 104.548 208.964 104.654 208.911 104.761L207.725 107.215C207.703 107.253 207.688 107.276 207.672 107.291C207.657 107.307 207.649 107.314 207.642 107.314C207.604 107.337 207.573 107.329 207.551 107.307C207.528 107.284 207.513 107.238 207.513 107.185V106.357C207.513 106.25 207.52 106.167 207.535 106.098C207.551 106.03 207.581 105.961 207.619 105.87L208.242 104.571L207.619 103.993C207.581 103.955 207.551 103.909 207.535 103.864C207.52 103.818 207.513 103.742 207.513 103.636V102.807C207.513 102.754 207.528 102.693 207.551 102.64C207.573 102.587 207.611 102.549 207.642 102.526C207.642 102.526 207.657 102.519 207.672 102.511C207.688 102.503 207.71 102.511 207.725 102.519L208.911 103.605C208.964 103.643 208.995 103.719 208.995 103.818V104.449Z"
                        fill="#27DEBF" />
                    <path
                        d="M212.293 103.88C212.339 103.857 212.377 103.857 212.407 103.887C212.437 103.918 212.453 103.971 212.453 104.039V104.951C212.453 105.02 212.437 105.088 212.407 105.156C212.377 105.225 212.339 105.27 212.293 105.293L211.731 105.62C211.685 105.643 211.647 105.643 211.617 105.612C211.586 105.582 211.571 105.529 211.571 105.46V104.548C211.571 104.48 211.586 104.412 211.617 104.343C211.647 104.275 211.685 104.229 211.731 104.206L212.293 103.88Z"
                        fill="#27DEBF" />
                    <path
                        d="M214.17 102.799C214.216 102.777 214.254 102.777 214.284 102.807C214.315 102.837 214.33 102.891 214.33 102.959V103.871C214.33 103.939 214.315 104.008 214.284 104.076C214.254 104.145 214.216 104.19 214.17 104.213L213.608 104.54C213.562 104.563 213.524 104.563 213.494 104.532C213.463 104.502 213.448 104.449 213.448 104.38V103.468C213.448 103.4 213.463 103.331 213.494 103.263C213.524 103.195 213.562 103.149 213.608 103.126L214.17 102.799Z"
                        fill="#27DEBF" />
                    <path
                        d="M216.04 101.721C216.085 101.699 216.123 101.699 216.154 101.729C216.184 101.759 216.199 101.813 216.199 101.881V102.793C216.199 102.861 216.184 102.93 216.154 102.998C216.123 103.067 216.085 103.112 216.04 103.135L215.477 103.462C215.432 103.485 215.394 103.485 215.363 103.454C215.333 103.424 215.318 103.371 215.318 103.302V102.39C215.318 102.322 215.333 102.253 215.363 102.185C215.394 102.117 215.432 102.071 215.477 102.048L216.04 101.721Z"
                        fill="#27DEBF" />
                    <path
                        d="M202.003 114.791L240.337 92.6601C240.664 92.4701 240.922 92.6069 240.922 92.9565C240.922 93.3061 240.656 93.7469 240.337 93.9293L202.003 116.06C201.676 116.25 201.417 116.114 201.417 115.764C201.417 115.415 201.676 114.981 202.003 114.791Z"
                        fill="#27DEBF" />
                    <path
                        d="M210.811 124.961L249.145 102.83C249.472 102.64 249.731 102.777 249.731 103.126C249.731 103.476 249.465 103.917 249.145 104.099L210.811 126.23C210.484 126.42 210.226 126.284 210.226 125.934C210.226 125.584 210.484 125.151 210.811 124.961Z"
                        fill="#F28F8F" />
                    <path
                        d="M210.811 130.054L234.835 116.191C235.161 116.001 235.42 116.138 235.42 116.488C235.42 116.837 235.154 117.278 234.835 117.461L210.811 131.323C210.484 131.513 210.226 131.376 210.226 131.027C210.226 130.677 210.484 130.236 210.811 130.054Z"
                        fill="#F28F8F" />
                    <path
                        d="M210.811 135.138L234.835 121.275C235.161 121.085 235.42 121.222 235.42 121.572C235.42 121.921 235.154 122.362 234.835 122.545L210.811 136.407C210.484 136.597 210.226 136.46 210.226 136.111C210.226 135.761 210.484 135.32 210.811 135.138Z"
                        fill="#F28F8F" />
                    <path
                        d="M242.609 91.3462L253.546 85.0078C253.873 84.8178 254.131 84.9546 254.131 85.3042C254.131 85.6538 253.865 86.0946 253.546 86.277L242.609 92.6154C242.283 92.8054 242.024 92.6686 242.024 92.319C242.024 91.9694 242.283 91.5362 242.609 91.3462Z"
                        fill="#27DEBF" />
                    <path
                        d="M211.449 165.333L240.337 148.598C240.664 148.408 240.922 148.544 240.922 148.894C240.922 149.244 240.656 149.684 240.337 149.867L211.449 166.602C211.123 166.792 210.864 166.655 210.864 166.306C210.864 165.956 211.123 165.515 211.449 165.333Z"
                        fill="#27DEBF" />
                    <path
                        d="M242.609 147.282L253.546 140.943C253.873 140.753 254.131 140.89 254.131 141.24C254.131 141.589 253.865 142.03 253.546 142.213L242.609 148.551C242.283 148.741 242.024 148.604 242.024 148.255C242.024 147.905 242.283 147.472 242.609 147.282Z"
                        fill="#27DEBF" />
                    <path
                        d="M216.382 147.145L253.546 125.713C253.873 125.523 254.131 125.66 254.131 126.009C254.131 126.359 253.865 126.8 253.546 126.982L216.382 148.414C216.055 148.604 215.797 148.467 215.797 148.118C215.797 147.768 216.063 147.335 216.382 147.145Z"
                        fill="#27DEBF" />
                    <path
                        d="M207.057 157.792L253.546 130.805C253.873 130.615 254.131 130.751 254.131 131.101C254.131 131.451 253.865 131.891 253.546 132.074L207.057 159.061C206.73 159.251 206.471 159.115 206.471 158.765C206.471 158.415 206.737 157.975 207.057 157.792Z"
                        fill="#27DEBF" />
                    <path
                        d="M209.245 161.524L240.337 143.512C240.664 143.322 240.922 143.458 240.922 143.808C240.922 144.158 240.656 144.598 240.337 144.781L209.245 162.793C208.919 162.983 208.66 162.846 208.66 162.496C208.66 162.147 208.919 161.714 209.245 161.524Z"
                        fill="#FFA8A7" />
                    <path
                        d="M207.057 152.518L213.205 148.969C213.532 148.779 213.79 148.915 213.79 149.265C213.79 149.615 213.524 150.055 213.205 150.238L207.057 153.787C206.73 153.977 206.471 153.84 206.471 153.491C206.471 153.141 206.737 152.7 207.057 152.518Z"
                        fill="#27DEBF" />
                    <path
                        d="M202.003 119.892L228.899 104.357C229.226 104.167 229.484 104.304 229.484 104.654C229.484 105.003 229.218 105.444 228.899 105.627L202.003 121.161C201.676 121.351 201.417 121.214 201.417 120.865C201.417 120.515 201.676 120.074 202.003 119.892Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M202.003 119.892L228.899 104.357C229.226 104.167 229.484 104.304 229.484 104.654C229.484 105.003 229.218 105.444 228.899 105.627L202.003 121.161C201.676 121.351 201.417 121.214 201.417 120.865C201.417 120.515 201.676 120.074 202.003 119.892Z"
                        fill="white" />
                    <path
                        d="M202.003 124.969L207.437 121.83C207.763 121.64 208.022 121.777 208.022 122.126C208.022 122.476 207.756 122.917 207.437 123.099L202.003 126.238C201.676 126.428 201.417 126.291 201.417 125.942C201.417 125.592 201.676 125.151 202.003 124.969Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M202.003 124.969L207.437 121.83C207.763 121.64 208.022 121.777 208.022 122.126C208.022 122.476 207.756 122.917 207.437 123.099L202.003 126.238C201.676 126.428 201.417 126.291 201.417 125.942C201.417 125.592 201.676 125.151 202.003 124.969Z"
                        fill="white" />
                    <path
                        d="M202.003 130.053L207.437 126.914C207.763 126.724 208.022 126.861 208.022 127.21C208.022 127.56 207.756 128.001 207.437 128.183L202.003 131.322C201.676 131.512 201.417 131.375 201.417 131.026C201.417 130.676 201.676 130.235 202.003 130.053Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M202.003 130.053L207.437 126.914C207.763 126.724 208.022 126.861 208.022 127.21C208.022 127.56 207.756 128.001 207.437 128.183L202.003 131.322C201.676 131.512 201.417 131.375 201.417 131.026C201.417 130.676 201.676 130.235 202.003 130.053Z"
                        fill="white" />
                    <path
                        d="M202.003 135.137L207.437 131.998C207.763 131.808 208.022 131.945 208.022 132.294C208.022 132.644 207.756 133.085 207.437 133.267L202.003 136.406C201.676 136.596 201.417 136.459 201.417 136.11C201.417 135.76 201.676 135.327 202.003 135.137Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M202.003 135.137L207.437 131.998C207.763 131.808 208.022 131.945 208.022 132.294C208.022 132.644 207.756 133.085 207.437 133.267L202.003 136.406C201.676 136.596 201.417 136.459 201.417 136.11C201.417 135.76 201.676 135.327 202.003 135.137Z"
                        fill="white" />
                    <path
                        d="M202.003 140.221L207.437 137.082C207.763 136.892 208.022 137.029 208.022 137.378C208.022 137.728 207.756 138.169 207.437 138.351L202.003 141.49C201.676 141.68 201.417 141.543 201.417 141.194C201.417 140.844 201.676 140.411 202.003 140.221Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M202.003 140.221L207.437 137.082C207.763 136.892 208.022 137.029 208.022 137.378C208.022 137.728 207.756 138.169 207.437 138.351L202.003 141.49C201.676 141.68 201.417 141.543 201.417 141.194C201.417 140.844 201.676 140.411 202.003 140.221Z"
                        fill="white" />
                    <path
                        d="M210.811 170.911L234.835 157.049C235.161 156.859 235.42 156.996 235.42 157.345C235.42 157.695 235.154 158.136 234.835 158.318L210.811 172.18C210.484 172.37 210.226 172.234 210.226 171.884C210.226 171.534 210.484 171.094 210.811 170.911Z"
                        fill="#F28F8F" />
                    <path
                        d="M210.811 175.995L234.835 162.133C235.161 161.943 235.42 162.08 235.42 162.429C235.42 162.779 235.154 163.22 234.835 163.402L210.811 177.264C210.484 177.454 210.226 177.318 210.226 176.968C210.226 176.618 210.484 176.185 210.811 175.995Z"
                        fill="#F28F8F" />
                    <path
                        d="M238.323 155.027L253.417 146.348C253.744 146.158 254.002 146.294 254.002 146.644C254.002 146.994 253.736 147.434 253.417 147.617L238.323 156.296C237.996 156.486 237.738 156.349 237.738 156C237.738 155.65 238.004 155.209 238.323 155.027Z"
                        fill="#F28F8F" />
                    <path
                        d="M238.323 160.111L253.417 151.432C253.744 151.242 254.002 151.378 254.002 151.728C254.002 152.078 253.736 152.518 253.417 152.701L238.323 161.38C237.996 161.57 237.738 161.433 237.738 161.084C237.738 160.734 238.004 160.301 238.323 160.111Z"
                        fill="#F28F8F" />
                    <path
                        d="M202.003 175.994L207.437 172.855C207.763 172.665 208.022 172.802 208.022 173.152C208.022 173.501 207.756 173.942 207.437 174.125L202.003 177.263C201.676 177.453 201.417 177.317 201.417 176.967C201.417 176.617 201.676 176.184 202.003 175.994Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M202.003 175.994L207.437 172.855C207.763 172.665 208.022 172.802 208.022 173.152C208.022 173.501 207.756 173.942 207.437 174.125L202.003 177.263C201.676 177.453 201.417 177.317 201.417 176.967C201.417 176.617 201.676 176.184 202.003 175.994Z"
                        fill="white" />
                    <path
                        d="M202.003 181.08L207.437 177.941C207.763 177.751 208.022 177.888 208.022 178.238C208.022 178.587 207.756 179.028 207.437 179.211L202.003 182.349C201.676 182.539 201.417 182.403 201.417 182.053C201.417 181.703 201.676 181.27 202.003 181.08Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M202.003 181.08L207.437 177.941C207.763 177.751 208.022 177.888 208.022 178.238C208.022 178.587 207.756 179.028 207.437 179.211L202.003 182.349C201.676 182.539 201.417 182.403 201.417 182.053C201.417 181.703 201.676 181.27 202.003 181.08Z"
                        fill="white" />
                    <path
                        d="M231.172 103.042L238.133 99.0371C238.46 98.8471 238.718 98.9839 238.718 99.3335C238.718 99.6831 238.452 100.124 238.133 100.306L231.172 104.311C230.845 104.501 230.586 104.365 230.586 104.015C230.579 103.665 230.845 103.232 231.172 103.042Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M231.172 103.042L238.133 99.0371C238.46 98.8471 238.718 98.9839 238.718 99.3335C238.718 99.6831 238.452 100.124 238.133 100.306L231.172 104.311C230.845 104.501 230.586 104.365 230.586 104.015C230.579 103.665 230.845 103.232 231.172 103.042Z"
                        fill="white" />
                    <path
                        d="M210.393 140.42L244.304 120.865C244.631 120.675 244.889 120.812 244.889 121.162C244.889 121.511 244.623 121.952 244.304 122.134L210.393 141.689C210.066 141.879 209.808 141.742 209.808 141.393C209.808 141.043 210.074 140.602 210.393 140.42Z"
                        fill="#FFA8A7" />
                    <path
                        d="M202.003 150.474L253.546 120.637C253.873 120.447 254.131 120.583 254.131 120.933C254.131 121.283 253.865 121.723 253.546 121.906L202.003 151.743C201.676 151.933 201.417 151.797 201.417 151.447C201.417 151.097 201.676 150.657 202.003 150.474Z"
                        fill="#FFA8A7" />
                    <path
                        d="M246.584 119.55L253.546 115.545C253.873 115.355 254.131 115.492 254.131 115.841C254.131 116.191 253.865 116.632 253.546 116.814L246.584 120.819C246.257 121.009 245.999 120.872 245.999 120.523C245.999 120.173 246.257 119.74 246.584 119.55Z"
                        fill="#FFA8A7" />
                    <path
                        d="M210.811 119.884L237.707 104.35C238.034 104.16 238.293 104.296 238.293 104.646C238.293 104.996 238.027 105.436 237.707 105.619L210.811 121.153C210.484 121.343 210.226 121.206 210.226 120.857C210.218 120.507 210.484 120.066 210.811 119.884Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M210.811 119.884L237.707 104.35C238.034 104.16 238.293 104.296 238.293 104.646C238.293 104.996 238.027 105.436 237.707 105.619L210.811 121.153C210.484 121.343 210.226 121.206 210.226 120.857C210.218 120.507 210.484 120.066 210.811 119.884Z"
                        fill="white" />
                    <path
                        d="M239.98 103.034L246.941 99.0292C247.268 98.8392 247.527 98.976 247.527 99.3256C247.527 99.6752 247.261 100.116 246.941 100.298L239.98 104.304C239.653 104.494 239.395 104.357 239.395 104.007C239.387 103.658 239.653 103.217 239.98 103.034Z"
                        fill="#27DEBF" />
                    <path opacity="0.6"
                        d="M239.98 103.034L246.941 99.0292C247.268 98.8392 247.527 98.976 247.527 99.3256C247.527 99.6752 247.261 100.116 246.941 100.298L239.98 104.304C239.653 104.494 239.395 104.357 239.395 104.007C239.387 103.658 239.653 103.217 239.98 103.034Z"
                        fill="white" />
                    <path
                        d="M258.828 223.57C258.988 223.57 259.147 223.517 259.322 223.418L358.639 166.015C359.642 165.438 360.486 163.978 360.486 162.823V89.4985C360.486 88.8145 360.197 88.3965 359.71 88.3965C359.49 88.3965 359.239 88.4725 358.981 88.6245L259.656 145.997C258.653 146.574 257.81 148.034 257.81 149.189V222.035C257.81 222.46 257.924 222.871 258.129 223.16C258.266 223.35 258.494 223.57 258.828 223.57Z"
                        fill="#FAFAFA" />
                    <path
                        d="M255.75 222.324C255.97 222.438 257.536 223.335 258.22 223.722C257.756 223.395 257.513 222.825 257.483 222.035V155.778L254.906 154.273V220.583C254.899 221.359 255.233 222.05 255.75 222.324Z"
                        fill="#EBEBEB" />
                    <path
                        d="M359.71 88.7369C360.09 88.7369 360.144 89.2081 360.144 89.4969V162.829C360.144 163.878 359.376 165.201 358.472 165.725L259.147 223.128C259.026 223.196 258.919 223.234 258.82 223.234C258.463 223.234 258.152 222.672 258.152 222.033V149.187C258.152 148.139 258.919 146.816 259.824 146.292L359.148 88.9194C359.414 88.7674 359.596 88.7369 359.71 88.7369ZM359.71 88.0605C359.437 88.0605 359.133 88.1517 358.814 88.3341L259.489 145.707C258.38 146.345 257.475 147.911 257.475 149.195V222.041C257.475 223.059 258.038 223.918 258.828 223.918C259.033 223.918 259.261 223.857 259.489 223.721L358.806 166.318C359.916 165.679 360.82 164.121 360.82 162.837V89.4969C360.82 88.5849 360.372 88.0605 359.71 88.0605Z"
                        fill="#E0E0E0" />
                    <path
                        d="M360.82 89.4523V96.0871L257.475 155.77L254.899 154.273V147.721C254.899 147.075 255.134 146.353 255.514 145.707C255.879 145.084 256.381 144.552 256.913 144.241L356.237 86.8683C356.815 86.5415 357.324 86.5339 357.704 86.7543C358.069 86.9823 359.832 87.9855 360.197 88.1679C360.25 88.1983 360.303 88.2287 360.349 88.2743C360.402 88.3199 360.463 88.3731 360.508 88.4339C360.554 88.4947 360.6 88.5631 360.638 88.6391C360.683 88.7151 360.714 88.7911 360.736 88.8823C360.767 88.9659 360.782 89.0571 360.797 89.1559C360.797 89.1559 360.797 89.1635 360.797 89.1711C360.812 89.2623 360.82 89.3535 360.82 89.4523Z"
                        fill="#27DEBF" />
                    <path opacity="0.15"
                        d="M360.82 89.4523V96.0871L257.475 155.77L254.899 154.273V147.721C254.899 147.075 255.134 146.353 255.514 145.707C255.879 145.084 256.381 144.552 256.913 144.241L356.237 86.8683C356.815 86.5415 357.324 86.5339 357.704 86.7543C358.069 86.9823 359.832 87.9855 360.197 88.1679C360.25 88.1983 360.303 88.2287 360.349 88.2743C360.402 88.3199 360.463 88.3731 360.508 88.4339C360.554 88.4947 360.6 88.5631 360.638 88.6391C360.683 88.7151 360.714 88.7911 360.736 88.8823C360.767 88.9659 360.782 89.0571 360.797 89.1559C360.797 89.1559 360.797 89.1635 360.797 89.1711C360.812 89.2623 360.82 89.3535 360.82 89.4523Z"
                        fill="black" />
                    <path
                        d="M360.82 89.4524V96.0872L257.475 155.77V149.181C257.475 148.778 257.559 148.352 257.718 147.934C257.741 147.866 257.764 147.79 257.794 147.729C257.87 147.547 257.969 147.364 258.068 147.182C258.433 146.551 258.934 146.004 259.482 145.692L358.798 88.3276C359.414 87.9628 359.969 87.9704 360.341 88.2668C360.394 88.3124 360.455 88.3656 360.501 88.4264C360.546 88.4872 360.592 88.5556 360.63 88.6316C360.676 88.7076 360.706 88.7836 360.729 88.8748C360.759 88.9584 360.774 89.0496 360.79 89.1484C360.79 89.1484 360.79 89.156 360.79 89.1636C360.812 89.2624 360.82 89.3536 360.82 89.4524Z"
                        fill="#27DEBF" />
                    <path
                        d="M347.847 97.6139C347.155 98.0167 346.593 99.2023 346.593 100.274C346.593 101.346 347.155 101.885 347.847 101.482C348.538 101.08 349.101 99.8939 349.101 98.8223C349.101 97.7507 348.546 97.2111 347.847 97.6139Z"
                        fill="#FAFAFA" />
                    <path
                        d="M352.376 95.0006C351.685 95.4034 351.122 96.589 351.122 97.6606C351.122 98.7322 351.685 99.2718 352.376 98.869C353.068 98.4662 353.63 97.2806 353.63 96.209C353.63 95.1374 353.068 94.5978 352.376 95.0006Z"
                        fill="#FAFAFA" />
                    <path
                        d="M356.898 92.3854C356.207 92.7882 355.644 93.9738 355.644 95.0454C355.644 96.117 356.207 96.6566 356.898 96.2538C357.59 95.851 358.152 94.6654 358.152 93.5938C358.152 92.5222 357.59 91.9826 356.898 92.3854Z"
                        fill="#FAFAFA" />
                    <path
                        d="M358.814 88.3346L259.489 145.707C258.942 146.026 258.433 146.573 258.068 147.204L255.507 145.722C255.872 145.099 256.358 144.567 256.905 144.255L356.23 86.883C356.807 86.5486 357.316 86.541 357.689 86.7614C358.054 86.9818 359.718 87.9318 360.144 88.1598C359.802 87.985 359.33 88.0382 358.814 88.3346Z"
                        fill="#27DEBF" />
                    <g opacity="0.5">
                        <path
                            d="M358.814 88.3346L259.489 145.707C258.942 146.026 258.433 146.573 258.068 147.204L255.507 145.722C255.872 145.099 256.358 144.567 256.905 144.255L356.23 86.883C356.807 86.5486 357.316 86.541 357.689 86.7614C358.054 86.9818 359.718 87.9318 360.144 88.1598C359.802 87.985 359.33 88.0382 358.814 88.3346Z"
                            fill="white" />
                    </g>
                    <path
                        d="M261.982 160.065C261.982 161 262.636 161.38 263.449 160.909C264.254 160.445 264.916 159.305 264.916 158.37C264.916 157.435 264.262 157.055 263.449 157.527C262.643 157.998 261.982 159.138 261.982 160.065Z"
                        fill="#27DEBF" />
                    <path
                        d="M272.174 153.923L285.261 146.368C285.694 146.117 286.044 146.292 286.044 146.764C286.044 147.227 285.694 147.812 285.261 148.063L272.174 155.617C271.74 155.868 271.391 155.694 271.391 155.222C271.391 154.759 271.74 154.174 272.174 153.923Z"
                        fill="#E0E0E0" />
                    <path
                        d="M289.6 143.731L302.688 136.177C303.121 135.926 303.47 136.101 303.47 136.572C303.47 137.036 303.121 137.621 302.688 137.872L289.6 145.426C289.167 145.677 288.818 145.502 288.818 145.031C288.818 144.567 289.167 143.982 289.6 143.731Z"
                        fill="#E0E0E0" />
                    <path
                        d="M307.027 133.54L320.115 125.986C320.548 125.735 320.897 125.918 320.897 126.381C320.897 126.845 320.548 127.43 320.115 127.681L307.027 135.235C306.594 135.486 306.245 135.311 306.245 134.84C306.245 134.376 306.594 133.791 307.027 133.54Z"
                        fill="#E0E0E0" />
                    <path
                        d="M324.454 123.349L337.541 115.795C337.974 115.544 338.324 115.726 338.324 116.19C338.324 116.653 337.974 117.239 337.541 117.489L324.454 125.044C324.021 125.295 323.671 125.112 323.671 124.649C323.671 124.177 324.021 123.6 324.454 123.349Z"
                        fill="#E0E0E0" />
                    <path
                        d="M341.881 113.157L354.968 105.603C355.401 105.352 355.751 105.527 355.751 105.998C355.751 106.461 355.401 107.047 354.968 107.297L341.881 114.852C341.448 115.103 341.098 114.92 341.098 114.457C341.098 113.985 341.448 113.408 341.881 113.157Z"
                        fill="#E0E0E0" />
                    <path
                        d="M263.259 168.818V170.27C263.259 170.665 263.54 170.832 263.882 170.627L267.37 168.613C267.712 168.415 267.994 167.929 267.994 167.534L268.001 166.082C268.001 165.687 267.72 165.52 267.378 165.725L263.882 167.746C263.54 167.936 263.259 168.423 263.259 168.818Z"
                        fill="#27DEBF" />
                    <path
                        d="M270.631 164.433L280.024 159.029C280.458 158.778 280.807 158.961 280.807 159.424C280.807 159.888 280.458 160.473 280.024 160.724L270.631 166.127C270.198 166.378 269.848 166.203 269.848 165.732C269.848 165.261 270.198 164.676 270.631 164.433Z"
                        fill="#E0E0E0" />
                    <path d="M261.982 166.903L282.494 155.062V161.826L261.982 173.667V166.903Z" stroke="#E0E0E0"
                        stroke-width="0.4968" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M263.259 178.972V180.424C263.259 180.819 263.54 180.986 263.882 180.781L267.37 178.767C267.712 178.57 267.994 178.083 267.994 177.688L268.001 176.236C268.001 175.841 267.72 175.674 267.378 175.879L263.882 177.901C263.54 178.091 263.259 178.577 263.259 178.972Z"
                        fill="#27DEBF" />
                    <path
                        d="M270.631 174.579L280.024 169.175C280.458 168.925 280.807 169.107 280.807 169.571C280.807 170.034 280.458 170.619 280.024 170.87L270.631 176.274C270.198 176.525 269.848 176.342 269.848 175.879C269.848 175.415 270.198 174.83 270.631 174.579Z"
                        fill="#E0E0E0" />
                    <path d="M261.982 177.05L282.494 165.209V171.981L261.982 183.821V177.05Z" stroke="#E0E0E0"
                        stroke-width="0.4968" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M263.259 189.127V190.578C263.259 190.973 263.54 191.141 263.882 190.935L267.37 188.921C267.712 188.724 267.994 188.237 267.994 187.842L268.001 186.391C268.001 185.995 267.72 185.828 267.378 186.033L263.882 188.055C263.54 188.245 263.259 188.724 263.259 189.127Z"
                        fill="#27DEBF" />
                    <path
                        d="M270.631 184.733L280.024 179.33C280.458 179.079 280.807 179.261 280.807 179.725C280.807 180.188 280.458 180.774 280.024 181.025L270.631 186.428C270.198 186.679 269.848 186.504 269.848 186.033C269.848 185.562 270.198 184.984 270.631 184.733Z"
                        fill="#E0E0E0" />
                    <path d="M261.982 187.204L282.494 175.363V182.127L261.982 193.976V187.204Z" stroke="#E0E0E0"
                        stroke-width="0.4968" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M263.259 199.273V200.725C263.259 201.12 263.54 201.287 263.882 201.082L267.37 199.068C267.712 198.87 267.994 198.384 267.994 197.989L268.001 196.537C268.001 196.142 267.72 195.975 267.378 196.18L263.882 198.201C263.54 198.391 263.259 198.878 263.259 199.273Z"
                        fill="#27DEBF" />
                    <path
                        d="M270.631 194.889L280.024 189.485C280.458 189.235 280.807 189.409 280.807 189.881C280.807 190.344 280.458 190.929 280.024 191.18L270.631 196.584C270.198 196.835 269.848 196.66 269.848 196.189C269.848 195.717 270.198 195.132 270.631 194.889Z"
                        fill="#E0E0E0" />
                    <path d="M261.982 197.358L282.494 185.51V192.281L261.982 204.122V197.358Z" stroke="#E0E0E0"
                        stroke-width="0.4968" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M263.259 209.425V210.877C263.259 211.272 263.54 211.439 263.882 211.234L267.37 209.22C267.712 209.023 267.994 208.536 267.994 208.141L268.001 206.689C268.001 206.294 267.72 206.127 267.378 206.332L263.882 208.354C263.54 208.544 263.259 209.03 263.259 209.425Z"
                        fill="#27DEBF" />
                    <path
                        d="M270.631 205.034L280.024 199.63C280.458 199.379 280.807 199.554 280.807 200.025C280.807 200.489 280.458 201.074 280.024 201.325L270.631 206.728C270.198 206.979 269.848 206.797 269.848 206.333C269.848 205.87 270.198 205.284 270.631 205.034Z"
                        fill="#E0E0E0" />
                    <path d="M261.982 207.503L282.494 195.662V202.434L261.982 214.275V207.503Z" stroke="#E0E0E0"
                        stroke-width="0.4968" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M290.809 176.824L312.279 164.428C313.077 163.965 313.723 162.848 313.723 161.928V143.384C313.723 142.464 313.077 142.092 312.279 142.548L290.809 154.944C290.011 155.407 289.365 156.524 289.365 157.444V175.988C289.365 176.908 290.011 177.28 290.809 176.824Z"
                        fill="#FAFAFA" stroke="#E0E0E0" stroke-width="0.9175" stroke-miterlimit="10" />
                    <path
                        d="M288.05 153.62C287.966 153.62 287.883 153.575 287.83 153.499C287.761 153.377 287.799 153.225 287.921 153.157L288.643 152.739C288.764 152.67 288.916 152.708 288.985 152.83C289.053 152.952 289.015 153.104 288.894 153.172L288.172 153.59C288.134 153.613 288.096 153.62 288.05 153.62Z"
                        fill="#27DEBF" />
                    <path
                        d="M290.292 152.327C290.209 152.327 290.125 152.282 290.079 152.206C290.011 152.084 290.049 151.932 290.171 151.864L291.691 150.99C291.812 150.921 291.964 150.959 292.032 151.081C292.101 151.202 292.063 151.354 291.941 151.423L290.421 152.297C290.376 152.312 290.33 152.327 290.292 152.327ZM293.325 150.572C293.241 150.572 293.157 150.526 293.104 150.45C293.036 150.328 293.074 150.176 293.195 150.108L294.715 149.234C294.837 149.166 294.989 149.204 295.057 149.325C295.126 149.447 295.088 149.599 294.966 149.667L293.446 150.541C293.416 150.564 293.37 150.572 293.325 150.572ZM296.365 148.824C296.281 148.824 296.197 148.778 296.144 148.702C296.076 148.58 296.114 148.428 296.235 148.36L297.755 147.486C297.877 147.418 298.029 147.456 298.097 147.577C298.166 147.699 298.128 147.851 298.006 147.919L296.486 148.793C296.448 148.808 296.403 148.824 296.365 148.824ZM299.397 147.068C299.313 147.068 299.23 147.022 299.177 146.946C299.108 146.825 299.146 146.673 299.268 146.604L300.788 145.73C300.909 145.662 301.061 145.7 301.13 145.822C301.198 145.943 301.16 146.095 301.038 146.164L299.518 147.038C299.48 147.06 299.442 147.068 299.397 147.068ZM302.429 145.32C302.346 145.32 302.262 145.274 302.209 145.198C302.141 145.077 302.179 144.925 302.3 144.856L303.82 143.982C303.942 143.914 304.094 143.952 304.162 144.074C304.231 144.195 304.192 144.347 304.071 144.416L302.551 145.29C302.52 145.305 302.475 145.32 302.429 145.32ZM305.469 143.564C305.386 143.564 305.302 143.519 305.249 143.443C305.181 143.321 305.219 143.169 305.34 143.101L306.86 142.227C306.982 142.158 307.134 142.196 307.202 142.318C307.271 142.44 307.232 142.592 307.111 142.66L305.591 143.534C305.553 143.549 305.507 143.564 305.469 143.564ZM308.502 141.809C308.418 141.809 308.334 141.763 308.281 141.687C308.213 141.566 308.251 141.414 308.372 141.345L309.892 140.471C310.006 140.403 310.166 140.441 310.235 140.562C310.303 140.684 310.265 140.836 310.143 140.904L308.623 141.778C308.593 141.801 308.547 141.809 308.502 141.809ZM311.542 140.061C311.458 140.061 311.374 140.015 311.321 139.939C311.253 139.818 311.291 139.666 311.412 139.597L312.932 138.723C313.054 138.655 313.206 138.693 313.275 138.814C313.343 138.936 313.305 139.088 313.183 139.156L311.663 140.03C311.625 140.046 311.58 140.061 311.542 140.061Z"
                        fill="#27DEBF" />
                    <path
                        d="M314.574 138.306C314.491 138.306 314.407 138.26 314.354 138.184C314.285 138.063 314.323 137.911 314.445 137.842L315.167 137.424C315.281 137.356 315.441 137.394 315.509 137.516C315.577 137.637 315.539 137.789 315.418 137.858L314.696 138.276C314.658 138.298 314.62 138.306 314.574 138.306Z"
                        fill="#27DEBF" />
                    <path
                        d="M286.94 181.154C286.804 181.154 286.69 181.04 286.69 180.903V180.067C286.69 179.93 286.804 179.816 286.94 179.816C287.077 179.816 287.191 179.93 287.191 180.067V180.903C287.191 181.048 287.077 181.154 286.94 181.154Z"
                        fill="#27DEBF" />
                    <path
                        d="M286.94 178.73C286.804 178.73 286.69 178.616 286.69 178.479V176.883C286.69 176.746 286.804 176.632 286.94 176.632C287.077 176.632 287.191 176.746 287.191 176.883V178.479C287.191 178.616 287.077 178.73 286.94 178.73ZM286.94 175.538C286.804 175.538 286.69 175.424 286.69 175.287V173.691C286.69 173.554 286.804 173.44 286.94 173.44C287.077 173.44 287.191 173.554 287.191 173.691V175.287C287.191 175.424 287.077 175.538 286.94 175.538ZM286.94 172.338C286.804 172.338 286.69 172.224 286.69 172.087V170.491C286.69 170.355 286.804 170.241 286.94 170.241C287.077 170.241 287.191 170.355 287.191 170.491V172.087C287.191 172.232 287.077 172.338 286.94 172.338ZM286.94 169.146C286.804 169.146 286.69 169.032 286.69 168.895V167.299C286.69 167.163 286.804 167.049 286.94 167.049C287.077 167.049 287.191 167.163 287.191 167.299V168.895C287.191 169.032 287.077 169.146 286.94 169.146ZM286.94 165.954C286.804 165.954 286.69 165.84 286.69 165.703V164.107C286.69 163.971 286.804 163.857 286.94 163.857C287.077 163.857 287.191 163.971 287.191 164.107V165.703C287.191 165.84 287.077 165.954 286.94 165.954ZM286.94 162.762C286.804 162.762 286.69 162.648 286.69 162.511V160.915C286.69 160.779 286.804 160.665 286.94 160.665C287.077 160.665 287.191 160.779 287.191 160.915V162.511C287.191 162.648 287.077 162.762 286.94 162.762ZM286.94 159.57C286.804 159.57 286.69 159.456 286.69 159.319V157.723C286.69 157.587 286.804 157.473 286.94 157.473C287.077 157.473 287.191 157.587 287.191 157.723V159.319C287.191 159.456 287.077 159.57 286.94 159.57Z"
                        fill="#27DEBF" />
                    <path
                        d="M286.94 156.371C286.804 156.371 286.69 156.257 286.69 156.12V155.284C286.69 155.147 286.804 155.033 286.94 155.033C287.077 155.033 287.191 155.147 287.191 155.284V156.12C287.191 156.264 287.077 156.371 286.94 156.371Z"
                        fill="#27DEBF" />
                    <path
                        d="M314.597 166.472C314.513 166.472 314.43 166.426 314.377 166.35C314.308 166.229 314.346 166.077 314.468 166.008L315.19 165.59C315.311 165.522 315.463 165.56 315.532 165.682C315.6 165.803 315.562 165.955 315.441 166.024L314.719 166.442C314.681 166.464 314.635 166.472 314.597 166.472Z"
                        fill="#27DEBF" />
                    <path
                        d="M290.292 180.501C290.209 180.501 290.125 180.455 290.079 180.379C290.011 180.258 290.049 180.106 290.171 180.037L291.691 179.163C291.805 179.095 291.964 179.133 292.032 179.254C292.101 179.376 292.063 179.528 291.941 179.596L290.421 180.47C290.376 180.493 290.338 180.501 290.292 180.501ZM293.332 178.753C293.249 178.753 293.165 178.707 293.112 178.631C293.043 178.51 293.081 178.358 293.203 178.289L294.723 177.415C294.837 177.347 294.997 177.385 295.065 177.506C295.133 177.628 295.095 177.78 294.974 177.848L293.454 178.722C293.416 178.738 293.37 178.753 293.332 178.753ZM296.365 176.997C296.281 176.997 296.197 176.952 296.144 176.876C296.076 176.754 296.114 176.602 296.235 176.534L297.755 175.66C297.877 175.591 298.029 175.629 298.097 175.751C298.166 175.872 298.128 176.024 298.006 176.093L296.486 176.967C296.456 176.982 296.41 176.997 296.365 176.997ZM299.405 175.242C299.321 175.242 299.237 175.196 299.192 175.12C299.123 174.998 299.161 174.846 299.283 174.778L300.803 173.904C300.917 173.836 301.077 173.874 301.145 173.995C301.213 174.117 301.175 174.269 301.054 174.337L299.534 175.219C299.488 175.234 299.45 175.242 299.405 175.242ZM302.445 173.486C302.361 173.486 302.277 173.44 302.224 173.364C302.156 173.243 302.194 173.091 302.315 173.022L303.835 172.148C303.957 172.08 304.109 172.118 304.177 172.24C304.246 172.361 304.208 172.513 304.086 172.582L302.566 173.456C302.528 173.478 302.49 173.486 302.445 173.486ZM305.485 171.73C305.401 171.73 305.317 171.685 305.264 171.609C305.196 171.487 305.234 171.335 305.355 171.267L306.875 170.393C306.989 170.324 307.149 170.362 307.217 170.484C307.286 170.606 307.248 170.758 307.126 170.826L305.606 171.7C305.568 171.723 305.523 171.73 305.485 171.73ZM308.517 169.982C308.433 169.982 308.35 169.937 308.304 169.861C308.236 169.739 308.274 169.587 308.395 169.519L309.915 168.645C310.029 168.576 310.189 168.614 310.257 168.736C310.326 168.858 310.288 169.01 310.166 169.078L308.646 169.952C308.608 169.967 308.562 169.982 308.517 169.982ZM311.557 168.227C311.473 168.227 311.39 168.181 311.337 168.105C311.268 167.984 311.306 167.832 311.428 167.763L312.948 166.889C313.069 166.821 313.221 166.859 313.29 166.98C313.358 167.102 313.32 167.254 313.198 167.322L311.678 168.196C311.64 168.212 311.602 168.227 311.557 168.227Z"
                        fill="#27DEBF" />
                    <path
                        d="M288.05 181.802C287.966 181.802 287.883 181.756 287.83 181.68C287.761 181.559 287.799 181.407 287.921 181.338L288.643 180.92C288.764 180.852 288.916 180.89 288.985 181.012C289.053 181.133 289.015 181.285 288.894 181.354L288.172 181.772C288.134 181.787 288.096 181.802 288.05 181.802Z"
                        fill="#27DEBF" />
                    <path
                        d="M316.428 139.355C316.292 139.355 316.178 139.241 316.178 139.104V138.268C316.178 138.132 316.292 138.018 316.428 138.018C316.565 138.018 316.679 138.132 316.679 138.268V139.104C316.679 139.241 316.565 139.355 316.428 139.355Z"
                        fill="#27DEBF" />
                    <path
                        d="M316.428 161.706C316.292 161.706 316.178 161.592 316.178 161.456V159.86C316.178 159.723 316.292 159.609 316.428 159.609C316.565 159.609 316.679 159.723 316.679 159.86V161.456C316.679 161.592 316.565 161.706 316.428 161.706ZM316.428 158.514C316.292 158.514 316.178 158.4 316.178 158.264V156.668C316.178 156.531 316.292 156.417 316.428 156.417C316.565 156.417 316.679 156.531 316.679 156.668V158.264C316.679 158.4 316.565 158.514 316.428 158.514ZM316.428 155.315C316.292 155.315 316.178 155.201 316.178 155.064V153.468C316.178 153.331 316.292 153.217 316.428 153.217C316.565 153.217 316.679 153.331 316.679 153.468V155.064C316.679 155.208 316.565 155.315 316.428 155.315ZM316.428 152.123C316.292 152.123 316.178 152.009 316.178 151.872V150.276C316.178 150.139 316.292 150.025 316.428 150.025C316.565 150.025 316.679 150.139 316.679 150.276V151.872C316.679 152.016 316.565 152.123 316.428 152.123ZM316.428 148.931C316.292 148.931 316.178 148.817 316.178 148.68V147.084C316.178 146.947 316.292 146.833 316.428 146.833C316.565 146.833 316.679 146.947 316.679 147.084V148.68C316.679 148.817 316.565 148.931 316.428 148.931ZM316.428 145.739C316.292 145.739 316.178 145.625 316.178 145.488V143.892C316.178 143.755 316.292 143.641 316.428 143.641C316.565 143.641 316.679 143.755 316.679 143.892V145.488C316.679 145.625 316.565 145.739 316.428 145.739ZM316.428 142.547C316.292 142.547 316.178 142.433 316.178 142.296V140.7C316.178 140.563 316.292 140.449 316.428 140.449C316.565 140.449 316.679 140.563 316.679 140.7V142.296C316.679 142.433 316.565 142.547 316.428 142.547Z"
                        fill="#27DEBF" />
                    <path
                        d="M316.428 164.131C316.292 164.131 316.178 164.017 316.178 163.88V163.044C316.178 162.907 316.292 162.793 316.428 162.793C316.565 162.793 316.679 162.907 316.679 163.044V163.88C316.679 164.024 316.565 164.131 316.428 164.131Z"
                        fill="#27DEBF" />
                    <path
                        d="M315.319 139.158C315.273 139.158 315.235 139.15 315.197 139.127C315.121 139.082 315.076 138.998 315.076 138.907V136.346C315.076 136.254 315.121 136.171 315.197 136.125L317.416 134.841C317.492 134.795 317.591 134.795 317.667 134.841C317.743 134.886 317.789 134.97 317.789 135.061V137.622C317.789 137.714 317.743 137.797 317.667 137.843L315.448 139.127C315.402 139.15 315.357 139.158 315.319 139.158ZM315.57 136.49V138.474L317.287 137.478V135.494L315.57 136.49Z"
                        fill="#27DEBF" />
                    <path
                        d="M315.319 167.338C315.273 167.338 315.235 167.33 315.197 167.307C315.121 167.262 315.076 167.178 315.076 167.094V164.533C315.076 164.442 315.121 164.358 315.197 164.313L317.416 163.028C317.492 162.983 317.591 162.983 317.667 163.028C317.743 163.074 317.789 163.158 317.789 163.241V165.802C317.789 165.894 317.743 165.977 317.667 166.023L315.448 167.307C315.402 167.322 315.357 167.338 315.319 167.338ZM315.57 164.67V166.654L317.287 165.658V163.674L315.57 164.67Z"
                        fill="#27DEBF" />
                    <path
                        d="M285.831 156.181C285.785 156.181 285.747 156.173 285.709 156.151C285.633 156.105 285.588 156.021 285.588 155.93V153.369C285.588 153.278 285.633 153.194 285.709 153.149L287.928 151.864C288.004 151.819 288.103 151.819 288.179 151.864C288.255 151.91 288.301 151.993 288.301 152.085V154.646C288.301 154.737 288.255 154.821 288.179 154.866L285.96 156.151C285.922 156.173 285.876 156.181 285.831 156.181ZM286.082 153.513V155.497L287.799 154.501V152.518L286.082 153.513Z"
                        fill="#27DEBF" />
                    <path
                        d="M285.831 184.363C285.785 184.363 285.747 184.355 285.709 184.332C285.633 184.287 285.588 184.203 285.588 184.112V181.551C285.588 181.46 285.633 181.376 285.709 181.33L287.928 180.046C288.004 180 288.103 180 288.179 180.046C288.255 180.092 288.301 180.175 288.301 180.259V182.82C288.301 182.911 288.255 182.995 288.179 183.04L285.96 184.325C285.922 184.348 285.876 184.363 285.831 184.363ZM286.082 181.695V183.679L287.799 182.683V180.7L286.082 181.695Z"
                        fill="#27DEBF" />
                    <path
                        d="M317.546 152.009C317.546 152.83 317.044 153.788 316.428 154.145C315.813 154.502 315.311 154.122 315.311 153.301C315.311 152.48 315.813 151.523 316.428 151.166C317.044 150.808 317.546 151.188 317.546 152.009Z"
                        fill="#27DEBF" />
                    <path
                        d="M302.794 144.858C302.794 145.679 302.292 146.636 301.677 146.994C301.061 147.351 300.56 146.971 300.56 146.15C300.56 145.329 301.061 144.372 301.677 144.014C302.292 143.657 302.794 144.03 302.794 144.858Z"
                        fill="#27DEBF" />
                    <path
                        d="M302.794 173.031C302.794 173.851 302.292 174.809 301.677 175.166C301.061 175.523 300.56 175.143 300.56 174.323C300.56 173.502 301.061 172.544 301.677 172.187C302.292 171.83 302.794 172.21 302.794 173.031Z"
                        fill="#27DEBF" />
                    <path
                        d="M288.058 169.072C288.058 169.893 287.556 170.85 286.94 171.207C286.325 171.565 285.823 171.185 285.823 170.364C285.823 169.543 286.325 168.585 286.94 168.228C287.556 167.871 288.058 168.251 288.058 169.072Z"
                        fill="#27DEBF" />
                    <path
                        d="M307.324 157.201V155.491C307.324 155.392 307.248 155.339 307.156 155.384L305.842 155.977C305.75 156.015 305.652 155.97 305.621 155.878C305.545 155.635 305.446 155.422 305.325 155.225C305.272 155.141 305.256 154.997 305.302 154.906L306.176 153.135C306.222 153.044 306.184 152.93 306.1 152.876L305.15 152.329C305.059 152.276 304.945 152.306 304.892 152.39L303.797 154.032C303.744 154.115 303.615 154.176 303.508 154.176C303.28 154.168 303.045 154.191 302.794 154.252C302.695 154.275 302.604 154.214 302.596 154.115L302.452 152.679C302.444 152.58 302.361 152.534 302.277 152.588L300.795 153.439C300.704 153.492 300.628 153.614 300.62 153.712L300.476 155.354C300.468 155.453 300.4 155.59 300.324 155.658C300.035 155.924 299.762 156.213 299.503 156.524C299.435 156.6 299.306 156.638 299.214 156.608L298.264 156.274C298.166 156.243 298.052 156.281 297.998 156.372L296.912 158.257C296.858 158.348 296.881 158.47 296.957 158.538L297.717 159.192C297.793 159.26 297.824 159.39 297.793 159.488C297.649 159.868 297.535 160.256 297.451 160.636C297.428 160.735 297.345 160.864 297.261 160.925L295.908 161.875C295.825 161.936 295.756 162.065 295.756 162.164V163.874C295.756 163.972 295.832 164.026 295.924 163.98L297.238 163.387C297.33 163.349 297.428 163.395 297.459 163.486C297.535 163.729 297.634 163.942 297.755 164.14C297.808 164.223 297.824 164.368 297.778 164.459L296.904 166.23C296.858 166.321 296.896 166.435 296.98 166.488L297.93 167.035C298.021 167.088 298.135 167.058 298.188 166.974L299.283 165.333C299.336 165.249 299.465 165.188 299.572 165.188C299.8 165.196 300.035 165.173 300.286 165.112C300.385 165.09 300.476 165.15 300.484 165.249L300.628 166.686C300.636 166.784 300.719 166.83 300.803 166.777L302.285 165.926C302.376 165.872 302.452 165.751 302.46 165.652L302.604 164.01C302.612 163.912 302.68 163.775 302.756 163.706C303.045 163.44 303.318 163.152 303.577 162.84C303.645 162.764 303.774 162.726 303.866 162.756L304.816 163.091C304.914 163.121 305.028 163.083 305.082 162.992L306.168 161.107C306.222 161.016 306.199 160.894 306.123 160.826L305.363 160.172C305.287 160.104 305.256 159.975 305.287 159.876C305.431 159.496 305.545 159.108 305.629 158.728C305.652 158.63 305.735 158.5 305.819 158.44L307.172 157.49C307.255 157.436 307.324 157.307 307.324 157.201ZM301.54 162.574C300.157 163.372 299.04 162.726 299.04 161.13C299.04 159.534 300.157 157.604 301.54 156.806C302.923 156.008 304.04 156.654 304.04 158.25C304.04 159.838 302.923 161.776 301.54 162.574Z"
                        fill="#27DEBF" />
                    <path
                        d="M328.778 154.957L350.248 142.561C351.046 142.098 351.692 140.981 351.692 140.061V121.517C351.692 120.597 351.046 120.225 350.248 120.681L328.778 133.076C327.98 133.54 327.334 134.657 327.334 135.577V154.121C327.334 155.048 327.98 155.421 328.778 154.957Z"
                        fill="#FAFAFA" stroke="#E0E0E0" stroke-width="0.9175" stroke-miterlimit="10" />
                    <path
                        d="M326.02 131.761C325.936 131.761 325.852 131.715 325.807 131.639C325.738 131.518 325.776 131.366 325.898 131.297L326.62 130.879C326.742 130.811 326.894 130.849 326.962 130.971C327.03 131.092 326.992 131.244 326.871 131.313L326.149 131.731C326.103 131.746 326.058 131.761 326.02 131.761Z"
                        fill="#27DEBF" />
                    <path
                        d="M328.254 130.462C328.17 130.462 328.087 130.416 328.034 130.34C327.965 130.219 328.003 130.067 328.125 129.998L329.645 129.124C329.766 129.056 329.918 129.094 329.987 129.216C330.055 129.337 330.017 129.489 329.896 129.558L328.376 130.432C328.345 130.454 328.3 130.462 328.254 130.462ZM331.294 128.714C331.21 128.714 331.127 128.668 331.074 128.592C331.005 128.471 331.043 128.319 331.165 128.25L332.685 127.376C332.806 127.308 332.958 127.346 333.027 127.468C333.095 127.589 333.057 127.741 332.936 127.81L331.416 128.684C331.378 128.699 331.332 128.714 331.294 128.714ZM334.326 126.958C334.243 126.958 334.159 126.913 334.106 126.837C334.038 126.715 334.076 126.563 334.197 126.495L335.717 125.621C335.839 125.552 335.991 125.59 336.059 125.712C336.128 125.834 336.09 125.986 335.968 126.054L334.448 126.928C334.418 126.951 334.372 126.958 334.326 126.958ZM337.366 125.21C337.283 125.21 337.199 125.165 337.146 125.089C337.078 124.967 337.116 124.815 337.237 124.747L338.757 123.873C338.879 123.804 339.031 123.842 339.099 123.964C339.168 124.086 339.13 124.238 339.008 124.306L337.488 125.18C337.45 125.195 337.404 125.21 337.366 125.21ZM340.399 123.455C340.315 123.455 340.232 123.409 340.178 123.333C340.11 123.212 340.148 123.06 340.27 122.991L341.79 122.117C341.911 122.049 342.063 122.087 342.132 122.208C342.2 122.33 342.162 122.482 342.04 122.55L340.52 123.424C340.482 123.447 340.444 123.455 340.399 123.455ZM343.431 121.699C343.348 121.699 343.264 121.654 343.211 121.578C343.142 121.456 343.18 121.304 343.302 121.236L344.822 120.362C344.944 120.293 345.096 120.331 345.164 120.453C345.232 120.574 345.194 120.726 345.073 120.795L343.553 121.669C343.522 121.692 343.477 121.699 343.431 121.699ZM346.471 119.951C346.388 119.951 346.304 119.906 346.251 119.83C346.182 119.708 346.22 119.556 346.342 119.488L347.862 118.614C347.976 118.545 348.136 118.583 348.204 118.705C348.272 118.826 348.234 118.978 348.113 119.047L346.593 119.921C346.555 119.936 346.517 119.951 346.471 119.951ZM349.504 118.196C349.42 118.196 349.336 118.15 349.283 118.074C349.215 117.952 349.253 117.8 349.374 117.732L350.894 116.858C351.016 116.79 351.168 116.828 351.236 116.949C351.305 117.071 351.267 117.223 351.145 117.291L349.625 118.165C349.595 118.188 349.549 118.196 349.504 118.196Z"
                        fill="#27DEBF" />
                    <path
                        d="M352.544 116.447C352.46 116.447 352.376 116.401 352.323 116.325C352.255 116.203 352.293 116.051 352.414 115.983L353.136 115.565C353.25 115.497 353.41 115.535 353.478 115.656C353.547 115.778 353.509 115.93 353.387 115.998L352.665 116.416C352.627 116.431 352.582 116.447 352.544 116.447Z"
                        fill="#27DEBF" />
                    <path
                        d="M324.91 159.297C324.773 159.297 324.659 159.183 324.659 159.046V158.21C324.659 158.073 324.773 157.959 324.91 157.959C325.047 157.959 325.161 158.073 325.161 158.21V159.046C325.161 159.183 325.047 159.297 324.91 159.297Z"
                        fill="#27DEBF" />
                    <path
                        d="M324.91 156.865C324.773 156.865 324.659 156.751 324.659 156.614V155.018C324.659 154.881 324.773 154.767 324.91 154.767C325.047 154.767 325.161 154.881 325.161 155.018V156.614C325.161 156.758 325.047 156.865 324.91 156.865ZM324.91 153.673C324.773 153.673 324.659 153.559 324.659 153.422V151.826C324.659 151.689 324.773 151.575 324.91 151.575C325.047 151.575 325.161 151.689 325.161 151.826V153.422C325.161 153.559 325.047 153.673 324.91 153.673ZM324.91 150.481C324.773 150.481 324.659 150.367 324.659 150.23V148.634C324.659 148.497 324.773 148.383 324.91 148.383C325.047 148.383 325.161 148.497 325.161 148.634V150.23C325.161 150.367 325.047 150.481 324.91 150.481ZM324.91 147.289C324.773 147.289 324.659 147.175 324.659 147.038V145.442C324.659 145.305 324.773 145.191 324.91 145.191C325.047 145.191 325.161 145.305 325.161 145.442V147.038C325.161 147.175 325.047 147.289 324.91 147.289ZM324.91 144.097C324.773 144.097 324.659 143.983 324.659 143.846V142.25C324.659 142.113 324.773 141.999 324.91 141.999C325.047 141.999 325.161 142.113 325.161 142.25V143.846C325.161 143.983 325.047 144.097 324.91 144.097ZM324.91 140.897C324.773 140.897 324.659 140.783 324.659 140.646V139.05C324.659 138.913 324.773 138.799 324.91 138.799C325.047 138.799 325.161 138.913 325.161 139.05V140.646C325.161 140.791 325.047 140.897 324.91 140.897ZM324.91 137.705C324.773 137.705 324.659 137.591 324.659 137.454V135.858C324.659 135.721 324.773 135.607 324.91 135.607C325.047 135.607 325.161 135.721 325.161 135.858V137.454C325.161 137.599 325.047 137.705 324.91 137.705Z"
                        fill="#27DEBF" />
                    <path
                        d="M324.91 134.513C324.773 134.513 324.659 134.399 324.659 134.263V133.427C324.659 133.29 324.773 133.176 324.91 133.176C325.047 133.176 325.161 133.29 325.161 133.427V134.263C325.161 134.399 325.047 134.513 324.91 134.513Z"
                        fill="#27DEBF" />
                    <path
                        d="M352.566 144.613C352.483 144.613 352.399 144.567 352.346 144.491C352.278 144.369 352.316 144.217 352.437 144.149L353.159 143.731C353.281 143.663 353.433 143.701 353.501 143.822C353.57 143.944 353.532 144.096 353.41 144.164L352.688 144.582C352.65 144.597 352.604 144.613 352.566 144.613Z"
                        fill="#27DEBF" />
                    <path
                        d="M328.262 158.643C328.178 158.643 328.094 158.598 328.041 158.522C327.973 158.4 328.011 158.248 328.132 158.18L329.652 157.306C329.766 157.237 329.926 157.275 329.994 157.397C330.063 157.518 330.025 157.67 329.903 157.739L328.383 158.613C328.345 158.636 328.3 158.643 328.262 158.643ZM331.294 156.888C331.21 156.888 331.127 156.842 331.074 156.766C331.005 156.644 331.043 156.492 331.165 156.424L332.685 155.55C332.799 155.482 332.958 155.52 333.027 155.641C333.095 155.763 333.057 155.915 332.936 155.983L331.416 156.857C331.385 156.88 331.34 156.888 331.294 156.888ZM334.334 155.132C334.25 155.132 334.167 155.086 334.114 155.01C334.045 154.889 334.083 154.737 334.205 154.668L335.725 153.794C335.846 153.726 335.998 153.764 336.067 153.886C336.135 154.007 336.097 154.159 335.976 154.228L334.456 155.102C334.418 155.124 334.38 155.132 334.334 155.132ZM337.374 153.384C337.29 153.384 337.207 153.338 337.161 153.262C337.093 153.141 337.131 152.989 337.252 152.92L338.772 152.046C338.886 151.978 339.046 152.016 339.114 152.138C339.183 152.259 339.145 152.411 339.023 152.48L337.503 153.361C337.458 153.369 337.412 153.384 337.374 153.384ZM340.414 151.628C340.33 151.628 340.247 151.583 340.194 151.507C340.125 151.385 340.163 151.233 340.285 151.165L341.805 150.291C341.926 150.222 342.078 150.26 342.147 150.382C342.215 150.504 342.177 150.656 342.056 150.724L340.536 151.598C340.498 151.613 340.452 151.628 340.414 151.628ZM343.446 149.873C343.363 149.873 343.279 149.827 343.226 149.751C343.158 149.63 343.196 149.478 343.317 149.409L344.837 148.535C344.951 148.467 345.111 148.505 345.179 148.626C345.248 148.748 345.21 148.9 345.088 148.968L343.568 149.842C343.538 149.865 343.492 149.873 343.446 149.873ZM346.486 148.117C346.403 148.117 346.319 148.072 346.266 147.996C346.198 147.874 346.236 147.722 346.357 147.654L347.877 146.78C347.991 146.711 348.151 146.749 348.219 146.871C348.288 146.992 348.25 147.144 348.128 147.213L346.608 148.087C346.57 148.11 346.532 148.117 346.486 148.117ZM349.526 146.362C349.443 146.362 349.359 146.316 349.314 146.24C349.245 146.118 349.283 145.966 349.405 145.898L350.925 145.024C351.046 144.956 351.198 144.994 351.267 145.115C351.335 145.237 351.297 145.389 351.176 145.457L349.656 146.331C349.61 146.354 349.564 146.362 349.526 146.362Z"
                        fill="#27DEBF" />
                    <path
                        d="M326.02 159.935C325.936 159.935 325.852 159.889 325.807 159.813C325.738 159.692 325.776 159.54 325.898 159.471L326.62 159.053C326.742 158.985 326.894 159.023 326.962 159.145C327.03 159.266 326.992 159.418 326.871 159.487L326.149 159.905C326.103 159.927 326.058 159.935 326.02 159.935Z"
                        fill="#27DEBF" />
                    <path
                        d="M354.39 117.488C354.254 117.488 354.14 117.374 354.14 117.237V116.401C354.14 116.264 354.254 116.15 354.39 116.15C354.527 116.15 354.641 116.264 354.641 116.401V117.237C354.641 117.374 354.535 117.488 354.39 117.488Z"
                        fill="#27DEBF" />
                    <path
                        d="M354.39 139.839C354.254 139.839 354.14 139.725 354.14 139.588V137.992C354.14 137.856 354.254 137.742 354.39 137.742C354.527 137.742 354.641 137.856 354.641 137.992V139.588C354.641 139.733 354.535 139.839 354.39 139.839ZM354.39 136.647C354.254 136.647 354.14 136.533 354.14 136.396V134.8C354.14 134.664 354.254 134.55 354.39 134.55C354.527 134.55 354.641 134.664 354.641 134.8V136.396C354.641 136.533 354.535 136.647 354.39 136.647ZM354.39 133.455C354.254 133.455 354.14 133.341 354.14 133.204V131.608C354.14 131.472 354.254 131.358 354.39 131.358C354.527 131.358 354.641 131.472 354.641 131.608V133.204C354.641 133.341 354.535 133.455 354.39 133.455ZM354.39 130.263C354.254 130.263 354.14 130.149 354.14 130.012V128.416C354.14 128.28 354.254 128.166 354.39 128.166C354.527 128.166 354.641 128.28 354.641 128.416V130.012C354.641 130.149 354.535 130.263 354.39 130.263ZM354.39 127.071C354.254 127.071 354.14 126.957 354.14 126.82V125.224C354.14 125.088 354.254 124.974 354.39 124.974C354.527 124.974 354.641 125.088 354.641 125.224V126.82C354.641 126.957 354.535 127.071 354.39 127.071ZM354.39 123.872C354.254 123.872 354.14 123.758 354.14 123.621V122.025C354.14 121.888 354.254 121.774 354.39 121.774C354.527 121.774 354.641 121.888 354.641 122.025V123.621C354.641 123.765 354.535 123.872 354.39 123.872ZM354.39 120.68C354.254 120.68 354.14 120.566 354.14 120.429V118.833C354.14 118.696 354.254 118.582 354.39 118.582C354.527 118.582 354.641 118.696 354.641 118.833V120.429C354.641 120.573 354.535 120.68 354.39 120.68Z"
                        fill="#27DEBF" />
                    <path
                        d="M354.39 142.271C354.254 142.271 354.14 142.157 354.14 142.02V141.184C354.14 141.048 354.254 140.934 354.39 140.934C354.527 140.934 354.641 141.048 354.641 141.184V142.02C354.641 142.157 354.535 142.271 354.39 142.271Z"
                        fill="#27DEBF" />
                    <path
                        d="M353.281 117.298C353.235 117.298 353.197 117.291 353.159 117.268C353.083 117.222 353.038 117.139 353.038 117.048V114.486C353.038 114.395 353.083 114.312 353.159 114.274L355.378 112.989C355.454 112.944 355.553 112.944 355.629 112.989C355.705 113.035 355.751 113.118 355.751 113.202V115.763C355.751 115.854 355.705 115.938 355.629 115.984L353.41 117.268C353.372 117.283 353.326 117.298 353.281 117.298ZM353.532 114.631V116.614L355.249 115.619V113.635L353.532 114.631Z"
                        fill="#27DEBF" />
                    <path
                        d="M353.281 145.472C353.235 145.472 353.197 145.464 353.159 145.442C353.083 145.396 353.038 145.312 353.038 145.221V142.66C353.038 142.569 353.083 142.485 353.159 142.44L355.378 141.155C355.454 141.11 355.553 141.11 355.629 141.155C355.705 141.201 355.751 141.285 355.751 141.376V143.937C355.751 144.028 355.705 144.112 355.629 144.157L353.41 145.442C353.372 145.464 353.326 145.472 353.281 145.472ZM353.532 142.804V144.788L355.249 143.792V141.809L353.532 142.804Z"
                        fill="#27DEBF" />
                    <path
                        d="M323.8 134.322C323.755 134.322 323.717 134.314 323.679 134.291C323.603 134.246 323.557 134.162 323.557 134.071V131.51C323.557 131.418 323.603 131.335 323.679 131.289L325.898 130.005C325.974 129.959 326.073 129.959 326.149 130.005C326.225 130.051 326.27 130.134 326.27 130.225V132.787C326.27 132.878 326.225 132.961 326.149 133.007L323.93 134.291C323.884 134.307 323.846 134.322 323.8 134.322ZM324.051 131.654V133.638L325.769 132.642V130.659L324.051 131.654Z"
                        fill="#27DEBF" />
                    <path
                        d="M323.8 162.496C323.755 162.496 323.717 162.488 323.679 162.465C323.603 162.42 323.557 162.336 323.557 162.245V159.684C323.557 159.592 323.603 159.509 323.679 159.463L325.898 158.179C325.974 158.133 326.073 158.133 326.149 158.179C326.225 158.224 326.27 158.308 326.27 158.399V160.96C326.27 161.052 326.225 161.135 326.149 161.181L323.93 162.465C323.884 162.488 323.846 162.496 323.8 162.496ZM324.051 159.828V161.812L325.769 160.816V158.832L324.051 159.828Z"
                        fill="#27DEBF" />
                    <path
                        d="M355.508 130.151C355.508 130.972 355.006 131.929 354.391 132.287C353.775 132.644 353.273 132.264 353.273 131.443C353.273 130.622 353.775 129.665 354.391 129.307C355.014 128.95 355.508 129.323 355.508 130.151Z"
                        fill="#27DEBF" />
                    <path
                        d="M340.756 122.992C340.756 123.812 340.254 124.77 339.639 125.127C339.023 125.484 338.522 125.104 338.522 124.284C338.522 123.463 339.023 122.505 339.639 122.148C340.254 121.791 340.756 122.171 340.756 122.992Z"
                        fill="#27DEBF" />
                    <path
                        d="M340.756 151.171C340.756 151.992 340.254 152.95 339.639 153.307C339.023 153.664 338.522 153.284 338.522 152.463C338.522 151.643 339.023 150.685 339.639 150.328C340.254 149.971 340.756 150.351 340.756 151.171Z"
                        fill="#27DEBF" />
                    <path
                        d="M326.027 147.211C326.027 148.032 325.526 148.99 324.91 149.347C324.294 149.704 323.793 149.324 323.793 148.503C323.793 147.683 324.294 146.725 324.91 146.368C325.526 146.011 326.027 146.383 326.027 147.211Z"
                        fill="#27DEBF" />
                    <path
                        d="M345.293 135.341V133.631C345.293 133.533 345.217 133.479 345.126 133.525L343.811 134.118C343.72 134.156 343.621 134.11 343.591 134.019C343.515 133.776 343.416 133.563 343.294 133.365C343.241 133.282 343.226 133.137 343.272 133.046L344.146 131.275C344.191 131.184 344.153 131.07 344.07 131.017L343.12 130.47C343.028 130.417 342.914 130.447 342.861 130.531L341.767 132.172C341.714 132.256 341.584 132.317 341.478 132.317C341.25 132.309 341.014 132.332 340.764 132.385C340.665 132.408 340.574 132.347 340.566 132.248L340.422 130.812C340.414 130.713 340.33 130.667 340.247 130.721L338.765 131.572C338.674 131.625 338.598 131.747 338.59 131.845L338.446 133.487C338.438 133.586 338.37 133.723 338.294 133.791C338.005 134.057 337.731 134.346 337.473 134.657C337.404 134.733 337.275 134.771 337.184 134.741L336.234 134.407C336.135 134.376 336.021 134.414 335.968 134.505L334.881 136.39C334.828 136.481 334.851 136.603 334.927 136.671L335.687 137.325C335.763 137.393 335.793 137.523 335.763 137.621C335.618 138.001 335.504 138.389 335.421 138.769C335.398 138.868 335.314 138.997 335.231 139.058L333.878 140.008C333.794 140.069 333.726 140.198 333.726 140.297V142.007C333.726 142.105 333.802 142.159 333.893 142.113L335.208 141.52C335.299 141.475 335.398 141.528 335.428 141.619C335.504 141.862 335.603 142.075 335.725 142.273C335.778 142.356 335.793 142.501 335.748 142.592L334.874 144.363C334.828 144.454 334.866 144.568 334.95 144.621L335.9 145.168C335.991 145.221 336.105 145.191 336.158 145.107L337.252 143.466C337.306 143.382 337.435 143.321 337.541 143.321C337.769 143.329 338.005 143.306 338.256 143.245C338.354 143.223 338.446 143.283 338.453 143.382L338.598 144.819C338.605 144.917 338.689 144.963 338.772 144.91L340.254 144.059C340.346 144.005 340.422 143.884 340.429 143.785L340.574 142.143C340.581 142.045 340.65 141.908 340.726 141.839C341.014 141.573 341.288 141.285 341.546 140.973C341.615 140.897 341.744 140.859 341.835 140.889L342.785 141.224C342.884 141.254 342.998 141.216 343.051 141.125L344.138 139.24C344.191 139.149 344.168 139.027 344.092 138.959L343.332 138.305C343.256 138.237 343.226 138.108 343.256 138.009C343.401 137.629 343.515 137.241 343.598 136.861C343.621 136.763 343.705 136.633 343.788 136.573L345.141 135.623C345.225 135.569 345.293 135.44 345.293 135.341ZM339.51 140.707C338.134 141.505 337.009 140.859 337.009 139.263C337.009 137.667 338.126 135.737 339.51 134.939C340.893 134.141 342.01 134.787 342.01 136.383C342.01 137.979 340.893 139.909 339.51 140.707Z"
                        fill="#27DEBF" />
                    <path
                        d="M285.428 198.939V190.7C285.428 189.705 286.127 188.496 286.986 187.995L354.193 149.197C355.052 148.695 355.751 149.105 355.751 150.101V158.339C355.751 159.335 355.052 160.543 354.185 161.045L286.978 199.843C286.127 200.337 285.428 199.934 285.428 198.939Z"
                        fill="#E0E0E0" />
                    <path opacity="0.1"
                        d="M118.038 210.437L96.2716 222.977C95.7928 223.251 95.4052 223.927 95.4052 224.482V241.157V250.725C95.4052 251.28 95.7928 251.508 96.2716 251.227L118.038 238.687C118.517 238.413 118.904 237.737 118.904 237.182V210.947C118.912 210.384 118.517 210.164 118.038 210.437Z"
                        fill="black" />
                    <path opacity="0.1"
                        d="M111.867 158.333L95.8004 167.589C95.58 167.719 95.4052 168.023 95.4052 168.281V177.249C95.4052 177.5 95.58 177.606 95.8004 177.477L111.867 168.22C112.087 168.091 112.262 167.787 112.262 167.529V158.561C112.27 158.31 112.087 158.203 111.867 158.333Z"
                        fill="black" />
                    <path opacity="0.1"
                        d="M111.867 176.975L95.8004 186.232C95.58 186.361 95.4052 186.665 95.4052 186.924V195.892C95.4052 196.142 95.58 196.249 95.8004 196.12L111.867 186.863C112.087 186.734 112.262 186.43 112.262 186.171V177.203C112.27 176.952 112.087 176.846 111.867 176.975Z"
                        fill="black" />
                    <path opacity="0.1"
                        d="M111.867 195.619L95.8004 204.876C95.58 205.005 95.4052 205.309 95.4052 205.567V214.535C95.4052 214.786 95.58 214.893 95.8004 214.763L111.867 205.507C112.087 205.377 112.262 205.073 112.262 204.815V195.847C112.27 195.589 112.087 195.49 111.867 195.619Z"
                        fill="black" />
                    <path
                        d="M120.736 211.487L98.9695 224.027C98.4907 224.301 98.1031 224.977 98.1031 225.532V251.767C98.1031 252.322 98.4984 252.991 98.9772 253.264L100.634 254.207C101.12 254.48 101.896 254.473 102.374 254.199L124.141 241.659C124.62 241.386 125.007 240.709 125.007 240.154V213.919C125.007 213.364 124.612 212.696 124.133 212.422L122.476 211.48C121.998 211.206 121.215 211.206 120.736 211.487Z"
                        fill="#27DEBF" />
                    <path opacity="0.2"
                        d="M102.374 254.199C101.911 254.465 101.067 254.48 100.626 254.207L98.9696 253.264C98.4908 252.998 98.0956 252.322 98.0956 251.767V225.532C98.0956 225.243 98.202 224.924 98.3692 224.643L101.751 226.603C101.592 226.869 101.493 227.181 101.493 227.462V253.697C101.5 254.207 101.858 254.495 102.374 254.199Z"
                        fill="black" />
                    <path opacity="0.5"
                        d="M125 213.759C124.931 213.318 124.574 213.166 124.141 213.417L102.374 225.957C102.131 226.094 101.918 226.337 101.759 226.611L98.3691 224.65C98.5287 224.391 98.7339 224.163 98.9695 224.034L120.736 211.494C121.215 211.221 121.99 211.213 122.476 211.487L124.133 212.429C124.574 212.665 124.939 213.242 125 213.759Z"
                        fill="white" />
                    <path
                        d="M124.141 213.41L102.374 225.95C101.896 226.224 101.508 226.9 101.508 227.455V244.129V253.698C101.508 254.252 101.896 254.48 102.374 254.199L124.141 241.659C124.62 241.386 125.007 240.709 125.007 240.154V213.919C125.007 213.357 124.62 213.136 124.141 213.41Z"
                        fill="#27DEBF" />
                    <path
                        d="M102.944 239.538C102.944 239.325 102.975 239.15 103.043 238.998C103.104 238.846 103.195 238.679 103.317 238.496L108.454 230.197C108.485 230.152 108.515 230.121 108.538 230.098C108.561 230.083 108.576 230.068 108.599 230.053C108.675 230.007 108.743 230.007 108.789 230.06C108.842 230.106 108.865 230.197 108.865 230.311V233.511C108.865 233.777 108.812 233.997 108.72 234.18C108.622 234.362 108.538 234.506 108.454 234.62L106.205 238.071L108.454 238.945C108.53 238.968 108.622 239.006 108.72 239.066C108.819 239.127 108.865 239.294 108.865 239.553V242.76C108.865 242.882 108.842 242.996 108.789 243.102C108.736 243.208 108.675 243.284 108.599 243.33C108.584 243.338 108.561 243.345 108.538 243.353C108.515 243.36 108.485 243.36 108.454 243.353L103.317 240.982C103.195 240.936 103.104 240.868 103.043 240.792C102.982 240.716 102.944 240.571 102.944 240.366V239.538Z"
                        fill="white" />
                    <path
                        d="M114.139 225.463C114.185 225.296 114.246 225.121 114.329 224.946C114.413 224.771 114.542 224.634 114.702 224.543L116.419 223.548C116.495 223.502 116.564 223.51 116.617 223.563C116.67 223.616 116.7 223.7 116.7 223.821C116.7 223.874 116.693 223.935 116.678 224.011L112.338 242.51C112.308 242.662 112.247 242.829 112.156 243.011C112.072 243.194 111.943 243.33 111.768 243.429L110.088 244.402C110.012 244.448 109.944 244.44 109.891 244.387C109.838 244.334 109.807 244.25 109.807 244.128C109.807 244.075 109.815 244.014 109.838 243.938L114.139 225.463Z"
                        fill="white" />
                    <path
                        d="M123.571 228.458C123.571 228.67 123.54 228.853 123.472 228.997C123.411 229.149 123.312 229.316 123.198 229.506L118.061 237.806C118.03 237.851 118 237.882 117.977 237.904C117.954 237.92 117.939 237.935 117.916 237.95C117.84 237.996 117.772 237.996 117.726 237.942C117.673 237.897 117.65 237.806 117.65 237.692V234.492C117.65 234.226 117.696 234.006 117.795 233.831C117.894 233.656 117.985 233.512 118.061 233.405L120.31 229.932L118.061 229.073C117.985 229.05 117.894 229.005 117.795 228.936C117.696 228.868 117.65 228.701 117.65 228.435V225.235C117.65 225.114 117.673 225 117.726 224.893C117.78 224.787 117.84 224.711 117.916 224.665C117.932 224.658 117.954 224.65 117.977 224.642C118 224.635 118.03 224.635 118.061 224.642L123.198 227.014C123.32 227.059 123.411 227.128 123.472 227.196C123.533 227.272 123.571 227.416 123.571 227.622V228.458Z"
                        fill="white" />
                    <path
                        d="M114.588 159.342L98.5212 168.599C98.3008 168.728 98.126 169.032 98.126 169.291V178.259C98.126 178.509 98.3084 178.821 98.5288 178.943L100.117 179.847C100.338 179.969 100.695 179.969 100.915 179.839L116.982 170.583C117.202 170.453 117.377 170.149 117.377 169.891V160.923C117.377 160.672 117.194 160.361 116.974 160.239L115.386 159.335C115.165 159.221 114.808 159.221 114.588 159.342Z"
                        fill="#27DEBF" />
                    <path opacity="0.4"
                        d="M114.588 159.342L98.5212 168.599C98.3008 168.728 98.126 169.032 98.126 169.291V178.259C98.126 178.509 98.3084 178.821 98.5288 178.943L100.117 179.847C100.338 179.969 100.695 179.969 100.915 179.839L116.982 170.583C117.202 170.453 117.377 170.149 117.377 169.891V160.923C117.377 160.672 117.194 160.361 116.974 160.239L115.386 159.335C115.165 159.221 114.808 159.221 114.588 159.342Z"
                        fill="black" />
                    <path
                        d="M117.369 160.855C117.339 160.658 117.172 160.582 116.974 160.696L100.908 169.953C100.794 170.013 100.695 170.127 100.626 170.249L98.2476 168.881C98.316 168.759 98.4148 168.661 98.5212 168.6L114.588 159.343C114.808 159.214 115.165 159.214 115.386 159.343L116.974 160.247C117.179 160.361 117.346 160.62 117.369 160.855Z"
                        fill="#27DEBF" />
                    <path
                        d="M116.982 160.704L100.915 169.96C100.695 170.09 100.52 170.394 100.52 170.652V179.62C100.52 179.871 100.702 179.977 100.915 179.848L116.982 170.591C117.202 170.462 117.377 170.158 117.377 169.9V160.932C117.377 160.681 117.194 160.574 116.982 160.704Z"
                        fill="#27DEBF" />
                    <g opacity="0.2">
                        <path
                            d="M116.982 160.704L100.915 169.96C100.695 170.09 100.52 170.394 100.52 170.652V179.62C100.52 179.871 100.702 179.977 100.915 179.848L116.982 170.591C117.202 170.462 117.377 170.158 117.377 169.9V160.932C117.377 160.681 117.194 160.574 116.982 160.704Z"
                            fill="black" />
                    </g>
                    <path
                        d="M104.48 172.255C104.472 172.323 104.472 172.422 104.472 172.543C104.472 172.665 104.472 172.794 104.472 172.923C104.472 173.053 104.472 173.182 104.472 173.303C104.472 173.425 104.48 173.524 104.48 173.585C104.487 173.699 104.502 173.805 104.525 173.904C104.548 174.003 104.586 174.079 104.639 174.132C104.692 174.185 104.753 174.215 104.837 174.223C104.913 174.231 105.012 174.2 105.126 174.132C105.24 174.063 105.338 173.987 105.414 173.904C105.49 173.82 105.551 173.729 105.597 173.645C105.642 173.554 105.68 173.471 105.711 173.379C105.734 173.288 105.756 173.212 105.772 173.144C105.787 173.053 105.81 172.977 105.825 172.931C105.848 172.885 105.886 172.847 105.946 172.809L106.615 172.422C106.646 172.407 106.676 172.407 106.691 172.429C106.714 172.452 106.722 172.483 106.722 172.536C106.722 172.809 106.676 173.083 106.592 173.372C106.509 173.653 106.395 173.927 106.25 174.185C106.106 174.443 105.939 174.679 105.741 174.892C105.551 175.105 105.338 175.279 105.11 175.409C104.867 175.553 104.647 175.621 104.449 175.621C104.259 175.621 104.092 175.561 103.955 175.447C103.818 175.333 103.712 175.165 103.636 174.945C103.56 174.725 103.522 174.474 103.507 174.193C103.499 173.98 103.499 173.752 103.499 173.501C103.499 173.25 103.507 173.015 103.507 172.787C103.514 172.49 103.552 172.194 103.628 171.89C103.704 171.586 103.811 171.297 103.948 171.023C104.084 170.75 104.244 170.499 104.442 170.279C104.639 170.051 104.86 169.868 105.103 169.724C105.331 169.595 105.536 169.526 105.734 169.519C105.924 169.511 106.098 169.549 106.243 169.64C106.387 169.731 106.501 169.868 106.585 170.058C106.668 170.248 106.706 170.476 106.714 170.742C106.714 170.788 106.706 170.841 106.684 170.887C106.661 170.932 106.638 170.963 106.608 170.985L105.939 171.373C105.878 171.403 105.84 171.411 105.817 171.388C105.794 171.365 105.779 171.32 105.764 171.244C105.749 171.191 105.734 171.13 105.703 171.069C105.68 171.008 105.642 170.963 105.589 170.932C105.544 170.902 105.483 170.887 105.407 170.887C105.331 170.887 105.232 170.925 105.118 170.993C105.004 171.061 104.905 171.145 104.829 171.236C104.753 171.335 104.685 171.434 104.632 171.548C104.578 171.662 104.54 171.783 104.518 171.905C104.502 172.004 104.487 172.133 104.48 172.255Z"
                        fill="#F0F0F0" />
                    <path
                        d="M108.85 167.558C109.07 167.429 109.268 167.36 109.45 167.353C109.632 167.345 109.792 167.375 109.921 167.451C110.058 167.527 110.157 167.634 110.233 167.778C110.309 167.923 110.347 168.075 110.354 168.242C110.354 168.287 110.347 168.333 110.324 168.386C110.301 168.432 110.278 168.462 110.248 168.477L109.579 168.865C109.534 168.895 109.496 168.903 109.465 168.903C109.435 168.896 109.404 168.888 109.374 168.857C109.366 168.85 109.344 168.827 109.328 168.804C109.306 168.781 109.275 168.759 109.237 168.743C109.199 168.728 109.146 168.721 109.085 168.728C109.024 168.736 108.948 168.766 108.857 168.812C108.789 168.85 108.728 168.895 108.667 168.941C108.606 168.987 108.553 169.04 108.508 169.093C108.462 169.146 108.424 169.215 108.394 169.283C108.363 169.352 108.348 169.427 108.348 169.503C108.348 169.579 108.363 169.64 108.394 169.671C108.424 169.701 108.477 169.724 108.561 169.724C108.637 169.724 108.736 169.709 108.865 169.678C108.994 169.648 109.146 169.61 109.336 169.557C109.526 169.503 109.686 169.488 109.83 169.496C109.967 169.504 110.088 169.549 110.18 169.625C110.271 169.709 110.347 169.823 110.392 169.975C110.438 170.127 110.461 170.332 110.461 170.575C110.461 170.841 110.423 171.107 110.339 171.365C110.263 171.624 110.149 171.867 110.005 172.095C109.86 172.331 109.693 172.536 109.503 172.726C109.313 172.916 109.1 173.076 108.872 173.212C108.637 173.349 108.432 173.425 108.234 173.44C108.044 173.455 107.877 173.425 107.74 173.349C107.603 173.273 107.497 173.159 107.413 173.015C107.337 172.863 107.292 172.688 107.292 172.49C107.292 172.445 107.299 172.399 107.322 172.346C107.345 172.3 107.368 172.27 107.398 172.255L108.067 171.867C108.112 171.837 108.15 171.829 108.181 171.829C108.211 171.829 108.234 171.844 108.264 171.867C108.28 171.882 108.302 171.905 108.325 171.935C108.356 171.966 108.386 171.996 108.439 172.019C108.485 172.042 108.546 172.05 108.614 172.05C108.682 172.05 108.774 172.011 108.872 171.958C109.055 171.852 109.207 171.738 109.328 171.609C109.45 171.479 109.511 171.335 109.511 171.175C109.511 171.099 109.488 171.046 109.442 171.016C109.397 170.986 109.328 170.978 109.245 170.985C109.154 170.993 109.04 171.016 108.903 171.054C108.766 171.092 108.599 171.13 108.416 171.175C108.067 171.267 107.808 171.221 107.641 171.039C107.482 170.864 107.398 170.545 107.398 170.096C107.398 169.868 107.428 169.633 107.497 169.39C107.565 169.146 107.664 168.911 107.786 168.675C107.915 168.447 108.067 168.234 108.242 168.037C108.424 167.847 108.622 167.687 108.85 167.558Z"
                        fill="#F0F0F0" />
                    <path
                        d="M112.566 165.408C112.786 165.278 112.984 165.21 113.166 165.202C113.349 165.195 113.508 165.225 113.638 165.301C113.774 165.377 113.873 165.484 113.949 165.628C114.025 165.772 114.063 165.924 114.071 166.092C114.071 166.137 114.063 166.183 114.04 166.236C114.018 166.282 113.995 166.312 113.964 166.327L113.296 166.715C113.25 166.745 113.212 166.753 113.182 166.753C113.151 166.745 113.121 166.738 113.09 166.707C113.083 166.7 113.06 166.677 113.045 166.654C113.022 166.631 112.992 166.608 112.954 166.593C112.916 166.578 112.862 166.57 112.802 166.578C112.741 166.586 112.665 166.616 112.574 166.662C112.505 166.7 112.444 166.745 112.384 166.791C112.323 166.836 112.27 166.89 112.224 166.943C112.178 166.996 112.14 167.064 112.11 167.133C112.08 167.201 112.064 167.277 112.064 167.353C112.064 167.429 112.08 167.49 112.11 167.52C112.14 167.551 112.194 167.574 112.277 167.574C112.353 167.574 112.46 167.558 112.581 167.528C112.71 167.498 112.862 167.46 113.052 167.406C113.242 167.353 113.402 167.338 113.546 167.346C113.683 167.353 113.805 167.399 113.896 167.475C113.987 167.558 114.063 167.672 114.109 167.824C114.154 167.976 114.177 168.182 114.177 168.425C114.177 168.691 114.139 168.957 114.056 169.215C113.98 169.474 113.866 169.717 113.721 169.945C113.577 170.18 113.41 170.386 113.22 170.576C113.03 170.766 112.817 170.925 112.589 171.062C112.353 171.199 112.14 171.275 111.95 171.29C111.76 171.305 111.593 171.275 111.456 171.199C111.32 171.123 111.206 171.009 111.13 170.864C111.054 170.712 111.008 170.538 111.008 170.34C111.008 170.294 111.016 170.249 111.038 170.196C111.061 170.15 111.084 170.12 111.114 170.104L111.783 169.717C111.829 169.686 111.867 169.679 111.897 169.679C111.928 169.679 111.95 169.694 111.981 169.717C111.996 169.732 112.019 169.755 112.042 169.785C112.072 169.816 112.102 169.846 112.156 169.869C112.201 169.892 112.262 169.899 112.33 169.899C112.399 169.899 112.49 169.861 112.589 169.808C112.771 169.702 112.923 169.588 113.045 169.458C113.166 169.329 113.227 169.185 113.227 169.025C113.227 168.949 113.204 168.896 113.159 168.866C113.113 168.835 113.045 168.828 112.961 168.835C112.87 168.843 112.756 168.866 112.619 168.904C112.482 168.942 112.315 168.98 112.133 169.025C111.783 169.116 111.525 169.071 111.358 168.888C111.198 168.714 111.114 168.394 111.114 167.946C111.114 167.718 111.145 167.482 111.213 167.239C111.282 166.996 111.373 166.76 111.502 166.525C111.631 166.297 111.783 166.084 111.958 165.886C112.14 165.704 112.338 165.537 112.566 165.408Z"
                        fill="#F0F0F0" />
                    <path
                        d="M114.588 177.986L98.5212 187.243C98.3008 187.372 98.126 187.676 98.126 187.934V196.902C98.126 197.153 98.3084 197.465 98.5288 197.586L100.117 198.491C100.338 198.612 100.695 198.612 100.915 198.483L116.982 189.226C117.202 189.097 117.377 188.793 117.377 188.535V179.567C117.377 179.316 117.194 179.004 116.974 178.883L115.386 177.978C115.165 177.857 114.808 177.864 114.588 177.986Z"
                        fill="#27DEBF" />
                    <path opacity="0.4"
                        d="M114.588 177.986L98.5212 187.243C98.3008 187.372 98.126 187.676 98.126 187.934V196.902C98.126 197.153 98.3084 197.465 98.5288 197.586L100.117 198.491C100.338 198.612 100.695 198.612 100.915 198.483L116.982 189.226C117.202 189.097 117.377 188.793 117.377 188.535V179.567C117.377 179.316 117.194 179.004 116.974 178.883L115.386 177.978C115.165 177.857 114.808 177.864 114.588 177.986Z"
                        fill="black" />
                    <path
                        d="M117.369 179.498C117.339 179.3 117.172 179.224 116.974 179.338L100.908 188.595C100.794 188.656 100.695 188.77 100.626 188.892L98.2476 187.524C98.316 187.402 98.4148 187.303 98.5212 187.242L114.588 177.986C114.808 177.856 115.165 177.856 115.386 177.986L116.974 178.89C117.179 178.996 117.346 179.262 117.369 179.498Z"
                        fill="#27DEBF" />
                    <path
                        d="M116.982 179.339L100.915 188.596C100.695 188.725 100.52 189.029 100.52 189.287V198.255C100.52 198.506 100.702 198.613 100.915 198.483L116.982 189.227C117.202 189.097 117.377 188.793 117.377 188.535V179.567C117.377 179.316 117.194 179.217 116.982 179.339Z"
                        fill="#27DEBF" />
                    <g opacity="0.2">
                        <path
                            d="M116.982 179.339L100.915 188.596C100.695 188.725 100.52 189.029 100.52 189.287V198.255C100.52 198.506 100.702 198.613 100.915 198.483L116.982 189.227C117.202 189.097 117.377 188.793 117.377 188.535V179.567C117.377 179.316 117.194 179.217 116.982 179.339Z"
                            fill="black" />
                    </g>
                    <path
                        d="M104.556 188.755C104.594 188.732 104.624 188.732 104.654 188.762C104.685 188.785 104.692 188.831 104.692 188.891V193.991C104.692 194.052 104.677 194.105 104.654 194.166C104.624 194.227 104.594 194.265 104.556 194.287L103.887 194.675C103.849 194.698 103.818 194.698 103.788 194.667C103.758 194.645 103.75 194.599 103.75 194.538V192.6L102.61 193.261V195.199C102.61 195.26 102.595 195.313 102.572 195.374C102.542 195.435 102.511 195.473 102.473 195.496L101.804 195.883C101.766 195.906 101.736 195.906 101.706 195.883C101.675 195.861 101.668 195.815 101.668 195.754V190.655C101.668 190.594 101.683 190.541 101.706 190.48C101.736 190.419 101.766 190.381 101.804 190.358L102.473 189.971C102.511 189.948 102.542 189.948 102.572 189.978C102.602 190.001 102.61 190.047 102.61 190.107V192.015L103.75 191.354V189.446C103.75 189.385 103.765 189.332 103.788 189.271C103.818 189.211 103.849 189.173 103.887 189.15L104.556 188.755Z"
                        fill="#F0F0F0" />
                    <path
                        d="M108.31 186.589C108.348 186.566 108.378 186.566 108.409 186.596C108.439 186.619 108.447 186.665 108.447 186.725V187.561C108.447 187.622 108.432 187.675 108.409 187.736C108.378 187.797 108.348 187.835 108.31 187.858L107.406 188.382V192.433C107.406 192.494 107.39 192.547 107.368 192.608C107.337 192.669 107.307 192.707 107.269 192.729L106.6 193.117C106.562 193.14 106.532 193.14 106.501 193.109C106.471 193.087 106.463 193.041 106.463 192.98V188.929L105.559 189.454C105.521 189.477 105.49 189.477 105.46 189.446C105.43 189.423 105.422 189.378 105.422 189.317V188.481C105.422 188.42 105.437 188.367 105.46 188.306C105.49 188.245 105.521 188.207 105.559 188.185L108.31 186.589Z"
                        fill="#F0F0F0" />
                    <path
                        d="M110.666 189.362C110.636 189.331 110.613 189.301 110.598 189.271L110.119 188.245V190.859C110.119 190.92 110.104 190.973 110.081 191.034C110.05 191.095 110.02 191.133 109.982 191.155L109.313 191.543C109.275 191.566 109.245 191.566 109.214 191.535C109.184 191.513 109.176 191.467 109.176 191.406V186.307C109.176 186.246 109.192 186.193 109.214 186.132C109.245 186.071 109.275 186.033 109.313 186.01L109.906 185.668C109.974 185.63 110.028 185.63 110.058 185.668C110.096 185.706 110.111 185.737 110.126 185.759L110.955 187.469L111.783 184.802C111.791 184.771 111.814 184.718 111.852 184.635C111.89 184.559 111.935 184.498 112.004 184.46L112.596 184.118C112.634 184.095 112.665 184.095 112.695 184.125C112.726 184.148 112.733 184.194 112.733 184.255V189.354C112.733 189.415 112.718 189.468 112.695 189.529C112.665 189.59 112.634 189.628 112.596 189.651L111.928 190.038C111.89 190.061 111.859 190.061 111.829 190.031C111.798 190.008 111.791 189.962 111.791 189.901V187.279L111.312 188.86C111.297 188.913 111.274 188.967 111.244 189.027C111.213 189.088 111.175 189.134 111.122 189.164L110.795 189.354C110.734 189.385 110.696 189.392 110.666 189.362Z"
                        fill="#F0F0F0" />
                    <path
                        d="M116.229 186.284C116.267 186.261 116.298 186.261 116.328 186.291C116.358 186.314 116.366 186.36 116.366 186.421V187.257C116.366 187.317 116.351 187.371 116.328 187.431C116.298 187.492 116.267 187.53 116.229 187.553L113.85 188.921C113.812 188.944 113.782 188.944 113.752 188.913C113.721 188.891 113.714 188.845 113.714 188.784V183.685C113.714 183.624 113.729 183.571 113.752 183.51C113.782 183.449 113.812 183.411 113.85 183.388L114.519 183.001C114.557 182.978 114.588 182.978 114.618 183.008C114.648 183.031 114.656 183.077 114.656 183.137V187.188L116.229 186.284Z"
                        fill="#F0F0F0" />
                    <path
                        d="M114.588 196.629L98.5212 205.886C98.3008 206.015 98.126 206.319 98.126 206.578V215.546C98.126 215.796 98.3084 216.108 98.5288 216.23L100.117 217.134C100.338 217.256 100.695 217.256 100.915 217.126L116.982 207.87C117.202 207.74 117.377 207.436 117.377 207.178V198.21C117.377 197.959 117.194 197.648 116.974 197.526L115.386 196.622C115.165 196.5 114.808 196.5 114.588 196.629Z"
                        fill="#27DEBF" />
                    <path opacity="0.4"
                        d="M114.588 196.629L98.5212 205.886C98.3008 206.015 98.126 206.319 98.126 206.578V215.546C98.126 215.796 98.3084 216.108 98.5288 216.23L100.117 217.134C100.338 217.256 100.695 217.256 100.915 217.126L116.982 207.87C117.202 207.74 117.377 207.436 117.377 207.178V198.21C117.377 197.959 117.194 197.648 116.974 197.526L115.386 196.622C115.165 196.5 114.808 196.5 114.588 196.629Z"
                        fill="black" />
                    <path
                        d="M117.369 198.141C117.339 197.943 117.172 197.867 116.974 197.981L100.908 207.238C100.794 207.299 100.695 207.413 100.626 207.534L98.2476 206.166C98.316 206.045 98.4148 205.946 98.5212 205.885L114.588 196.628C114.808 196.499 115.165 196.499 115.386 196.628L116.974 197.533C117.179 197.639 117.346 197.905 117.369 198.141Z"
                        fill="#27DEBF" />
                    <path
                        d="M116.982 197.982L100.915 207.238C100.695 207.368 100.52 207.672 100.52 207.93V216.898C100.52 217.149 100.702 217.255 100.915 217.126L116.982 207.869C117.202 207.74 117.377 207.436 117.377 207.178V198.21C117.377 197.959 117.194 197.86 116.982 197.982Z"
                        fill="#27DEBF" />
                    <g opacity="0.2">
                        <path
                            d="M116.982 197.982L100.915 207.238C100.695 207.368 100.52 207.672 100.52 207.93V216.898C100.52 217.149 100.702 217.255 100.915 217.126L116.982 207.869C117.202 207.74 117.377 207.436 117.377 207.178V198.21C117.377 197.959 117.194 197.86 116.982 197.982Z"
                            fill="black" />
                    </g>
                    <path
                        d="M104.791 209.36C104.791 209.428 104.784 209.527 104.784 209.649C104.784 209.77 104.784 209.899 104.784 210.029C104.784 210.158 104.784 210.287 104.784 210.409C104.784 210.53 104.791 210.629 104.791 210.69C104.799 210.804 104.814 210.918 104.837 211.009C104.86 211.108 104.898 211.184 104.951 211.237C105.004 211.29 105.065 211.321 105.148 211.328C105.232 211.336 105.323 211.305 105.445 211.237C105.559 211.169 105.658 211.093 105.734 211.009C105.81 210.925 105.87 210.834 105.916 210.751C105.962 210.659 106 210.576 106.03 210.485C106.053 210.393 106.076 210.317 106.091 210.241C106.106 210.15 106.129 210.074 106.144 210.029C106.167 209.983 106.205 209.945 106.266 209.907L106.934 209.519C106.965 209.504 106.995 209.504 107.01 209.527C107.033 209.55 107.041 209.58 107.041 209.633C107.041 209.907 106.995 210.181 106.912 210.469C106.828 210.751 106.714 211.024 106.57 211.283C106.425 211.541 106.258 211.777 106.068 211.989C105.878 212.202 105.665 212.377 105.437 212.506C105.194 212.651 104.974 212.719 104.776 212.719C104.586 212.719 104.419 212.658 104.282 212.544C104.145 212.43 104.039 212.263 103.963 212.043C103.887 211.822 103.849 211.571 103.841 211.29C103.834 211.077 103.834 210.849 103.834 210.599C103.834 210.348 103.834 210.112 103.841 209.884C103.849 209.588 103.887 209.291 103.963 208.987C104.039 208.683 104.145 208.395 104.282 208.121C104.419 207.847 104.578 207.597 104.776 207.376C104.974 207.148 105.194 206.966 105.437 206.821C105.665 206.692 105.87 206.624 106.068 206.616C106.258 206.609 106.433 206.647 106.57 206.738C106.714 206.829 106.828 206.966 106.912 207.156C106.995 207.346 107.033 207.574 107.041 207.84C107.041 207.885 107.033 207.939 107.01 207.984C106.988 208.03 106.965 208.06 106.934 208.083L106.266 208.471C106.205 208.501 106.167 208.509 106.144 208.486C106.121 208.463 106.106 208.417 106.091 208.341C106.076 208.288 106.06 208.227 106.03 208.167C106.007 208.106 105.969 208.06 105.916 208.03C105.87 207.999 105.81 207.984 105.734 207.984C105.658 207.984 105.566 208.022 105.445 208.091C105.331 208.159 105.232 208.243 105.148 208.334C105.065 208.425 105.004 208.531 104.951 208.645C104.898 208.759 104.86 208.881 104.837 209.003C104.814 209.109 104.799 209.238 104.791 209.36Z"
                        fill="#F0F0F0" />
                    <path
                        d="M109.503 208.311V209.618C109.503 209.679 109.488 209.732 109.465 209.793C109.435 209.853 109.404 209.891 109.366 209.914L108.72 210.287C108.682 210.309 108.652 210.309 108.622 210.279C108.591 210.256 108.584 210.211 108.584 210.15V208.843L107.786 209.299C107.748 209.321 107.717 209.321 107.687 209.291C107.656 209.268 107.649 209.223 107.649 209.162V208.364C107.649 208.303 107.664 208.25 107.687 208.189C107.717 208.128 107.748 208.09 107.786 208.067L108.584 207.611V206.304C108.584 206.243 108.599 206.19 108.622 206.129C108.652 206.069 108.682 206.031 108.72 206.008L109.366 205.635C109.404 205.613 109.435 205.613 109.465 205.643C109.496 205.666 109.503 205.711 109.503 205.772V207.072L110.294 206.616C110.332 206.593 110.362 206.593 110.392 206.623C110.423 206.646 110.43 206.692 110.43 206.753V207.551C110.43 207.611 110.415 207.665 110.392 207.725C110.362 207.786 110.332 207.824 110.294 207.847L109.503 208.311Z"
                        fill="#F0F0F0" />
                    <path
                        d="M112.908 206.342V207.649C112.908 207.71 112.893 207.763 112.87 207.824C112.84 207.885 112.809 207.923 112.771 207.946L112.125 208.318C112.087 208.341 112.057 208.341 112.026 208.31C111.996 208.288 111.988 208.242 111.988 208.181V206.874L111.19 207.33C111.152 207.353 111.122 207.353 111.092 207.322C111.061 207.3 111.054 207.254 111.054 207.193V206.395C111.054 206.334 111.069 206.281 111.092 206.22C111.122 206.16 111.152 206.122 111.19 206.099L111.988 205.643V204.343C111.988 204.282 112.004 204.229 112.026 204.168C112.057 204.108 112.087 204.07 112.125 204.047L112.771 203.674C112.809 203.652 112.84 203.652 112.87 203.682C112.9 203.705 112.908 203.75 112.908 203.811V205.118L113.698 204.662C113.736 204.64 113.767 204.64 113.797 204.67C113.828 204.693 113.835 204.738 113.835 204.799V205.597C113.835 205.658 113.82 205.711 113.797 205.772C113.767 205.833 113.736 205.871 113.698 205.894L112.908 206.342Z"
                        fill="#F0F0F0" />
                    <path
                        d="M112.824 99.7503C112.604 99.7503 112.391 99.6971 112.209 99.5907C111.776 99.3399 111.532 98.8383 111.532 98.1847V71.6531C111.532 70.4371 112.353 69.0159 113.41 68.4079L136.574 55.0319C137.144 54.7051 137.692 54.6595 138.125 54.9103C138.558 55.1611 138.801 55.6627 138.801 56.3163V82.8479C138.801 84.0639 137.98 85.4851 136.924 86.0931L129.294 90.5011L126.976 98.3747C126.877 98.7091 126.596 98.9371 126.246 98.9599C125.919 98.9827 125.585 98.7927 125.448 98.4735L123.457 93.8755L113.752 99.4767C113.44 99.6591 113.121 99.7503 112.824 99.7503ZM136.932 55.6399L113.767 69.0159C112.938 69.4947 112.239 70.7031 112.239 71.6531V98.1847C112.239 98.5723 112.353 98.8611 112.558 98.9827C112.764 99.1043 113.075 99.0587 113.41 98.8611L123.791 92.8647L126.094 98.1847C126.117 98.2455 126.162 98.2531 126.208 98.2531C126.246 98.2531 126.292 98.2379 126.307 98.1695L128.701 90.0223L136.574 85.4775C137.403 84.9987 138.102 83.7903 138.102 82.8403V56.3163C138.102 55.9287 137.988 55.6399 137.783 55.5183C137.578 55.4043 137.266 55.4499 136.932 55.6399Z"
                        fill="#27DEBF" />
                    <path d="M125.174 67.5179C126.778 66.5907 128.252 66.4387 129.461 66.9099L125.174 77.2459V67.5179Z"
                        fill="#455A64" />
                    <path d="M120.888 71.8572C122.089 69.9952 123.571 68.4448 125.174 67.5176V77.2456L120.888 71.8572Z"
                        fill="#27DEBF" />
                    <path d="M118.235 78.249C118.714 75.9994 119.657 73.765 120.888 71.8574L125.174 77.2458L118.235 78.249Z"
                        fill="#27DEBF" />
                    <path
                        d="M129.453 66.9102C130.684 67.3966 131.627 68.5442 132.106 70.239L125.167 77.2538L129.453 66.9102Z"
                        fill="#455A64" />
                    <path
                        d="M118.235 84.2609C118.007 83.4477 117.878 82.5129 117.878 81.4641C117.878 80.4153 118.007 79.3285 118.235 78.2493L125.174 77.2461L118.235 84.2609Z"
                        fill="#27DEBF" />
                    <path d="M132.113 76.25C131.634 78.4996 130.692 80.734 129.461 82.6416L125.174 77.2532L132.113 76.25Z"
                        fill="#27DEBF" />
                    <path d="M125.174 86.9819C123.571 87.9091 122.096 88.0611 120.888 87.5899L125.174 77.2539V86.9819Z"
                        fill="#27DEBF" />
                    <path
                        d="M118.235 84.2609L125.174 77.2461L120.888 87.5821C119.657 87.1033 118.714 85.9557 118.235 84.2609Z"
                        fill="#27DEBF" />
                    <path opacity="0.5"
                        d="M120.888 71.8574C119.657 73.765 118.714 75.9994 118.235 78.249C118.007 79.3282 117.878 80.415 117.878 81.4638C117.878 82.5126 118.007 83.4474 118.235 84.2606C118.714 85.9554 119.657 87.103 120.888 87.5894L125.174 77.2534L120.888 71.8574Z"
                        fill="white" />
                    <path
                        d="M132.113 70.2383C132.341 71.0515 132.47 71.9863 132.47 73.0351C132.47 74.0839 132.341 75.1707 132.113 76.2499L125.174 77.2531L132.113 70.2383Z"
                        fill="#27DEBF" />
                    <path d="M129.453 82.6423C128.252 84.5043 126.77 86.0547 125.167 86.9819V77.2539L129.453 82.6423Z"
                        fill="#27DEBF" />
                    <path opacity="0.2"
                        d="M132.113 70.2383L125.174 77.2531L120.888 87.5891C122.089 88.0603 123.571 87.9083 125.174 86.9811C126.778 86.0539 128.252 84.5035 129.461 82.6415C130.692 80.7339 131.634 78.4995 132.113 76.2499C132.341 75.1707 132.47 74.0839 132.47 73.0351C132.47 71.9863 132.341 71.0515 132.113 70.2383Z"
                        fill="black" />
                    <path
                        d="M147.518 79.7249C147.298 79.7249 147.085 79.6717 146.903 79.5653C146.47 79.3145 146.226 78.8129 146.226 78.1593V51.6277C146.226 50.4117 147.047 48.9905 148.104 48.3825L171.268 35.0065C171.838 34.6797 172.386 34.6341 172.819 34.8849C173.252 35.1357 173.495 35.6373 173.495 36.2909V62.8225C173.495 64.0385 172.674 65.4597 171.618 66.0677L163.988 70.4757L161.67 78.3493C161.571 78.6837 161.29 78.9117 160.94 78.9345C160.613 78.9573 160.279 78.7673 160.142 78.4481L158.151 73.8501L148.446 79.4513C148.126 79.6261 147.815 79.7249 147.518 79.7249ZM171.618 35.6145L148.453 48.9905C147.625 49.4693 146.926 50.6777 146.926 51.6277V78.1593C146.926 78.5469 147.04 78.8357 147.245 78.9573C147.45 79.0789 147.762 79.0333 148.096 78.8357L158.478 72.8393L160.78 78.1593C160.803 78.2201 160.849 78.2277 160.894 78.2277C160.932 78.2277 160.978 78.2125 160.993 78.1441L163.387 69.9969L171.261 65.4521C172.089 64.9733 172.788 63.7649 172.788 62.8149V36.2909C172.788 35.9033 172.674 35.6145 172.469 35.4929C172.264 35.3789 171.952 35.4169 171.618 35.6145Z"
                        fill="#27DEBF" />
                    <path d="M159.861 47.4925C161.464 46.5653 162.939 46.4133 164.147 46.8845L159.861 57.2205V47.4925Z"
                        fill="#455A64" />
                    <path d="M155.574 51.8318C156.775 49.9698 158.257 48.4194 159.861 47.4922V57.2202L155.574 51.8318Z"
                        fill="#27DEBF" />
                    <path
                        d="M152.922 58.2236C153.401 55.974 154.343 53.7396 155.574 51.832L159.861 57.2204L152.922 58.2236Z"
                        fill="#27DEBF" />
                    <path opacity="0.5"
                        d="M155.574 51.8318C154.343 53.7394 153.401 55.9738 152.922 58.2234L159.861 57.2202V47.4922C158.257 48.4194 156.783 49.9698 155.574 51.8318Z"
                        fill="white" />
                    <path
                        d="M164.147 46.8848C165.378 47.3712 166.321 48.5188 166.8 50.2136L159.861 57.2284L164.147 46.8848Z"
                        fill="#455A64" />
                    <path
                        d="M152.922 64.2355C152.694 63.4223 152.565 62.4875 152.565 61.4387C152.565 60.3899 152.694 59.3031 152.922 58.2239L159.861 57.2207L152.922 64.2355Z"
                        fill="#27DEBF" />
                    <path d="M166.8 56.2246C166.321 58.4742 165.378 60.7086 164.147 62.6162L159.861 57.2278L166.8 56.2246Z"
                        fill="#27DEBF" />
                    <path d="M159.861 66.9565C158.257 67.8837 156.783 68.0357 155.574 67.5645L159.861 57.2285V66.9565Z"
                        fill="#27DEBF" />
                    <path
                        d="M152.922 64.2355L159.861 57.2207L155.574 67.5567C154.343 67.0779 153.401 65.9303 152.922 64.2355Z"
                        fill="#27DEBF" />
                    <path
                        d="M166.8 50.2129C167.028 51.0261 167.157 51.9609 167.157 53.0097C167.157 54.0585 167.028 55.1453 166.8 56.2245L159.861 57.2277L166.8 50.2129Z"
                        fill="#455A64" />
                    <path d="M164.147 62.6169C162.946 64.4789 161.464 66.0293 159.861 66.9565V57.2285L164.147 62.6169Z"
                        fill="#27DEBF" />
                    <path opacity="0.2"
                        d="M159.861 57.22L155.574 67.556C156.775 68.0272 158.257 67.8752 159.861 66.948C161.464 66.0208 162.939 64.4704 164.147 62.6084C165.378 60.7008 166.321 58.4664 166.8 56.2168L159.861 57.22Z"
                        fill="black" />
                    <path
                        d="M291.804 91.2019L278.497 98.9007C278.231 99.0527 278.018 99.4175 278.018 99.7215V115.985C278.018 116.289 278.231 116.654 278.497 116.806L280.389 117.878C280.655 118.03 281.081 118.022 281.339 117.87L294.647 110.171C294.913 110.019 295.126 109.655 295.126 109.351V93.0867C295.126 92.7827 294.913 92.4179 294.647 92.2659L292.754 91.1943C292.496 91.0423 292.07 91.0499 291.804 91.2019Z"
                        fill="#F28F8F" />
                    <path
                        d="M281.347 117.87C281.096 118.014 280.632 118.022 280.397 117.877L278.504 116.798C278.238 116.654 278.026 116.281 278.026 115.985V99.7208C278.026 99.5612 278.086 99.3864 278.178 99.2344L281.012 100.868C280.921 101.013 280.876 101.188 280.876 100.929V117.193C280.868 117.87 281.066 118.029 281.347 117.87Z"
                        fill="#F28F8F" />
                    <path opacity="0.4"
                        d="M295.118 93.0021C295.08 92.7665 294.882 92.6753 294.647 92.8121L281.339 100.511C281.21 100.587 281.088 100.716 281.005 100.868L278.17 99.2341C278.254 99.0897 278.368 98.9681 278.497 98.8997L291.804 91.2009C292.063 91.0489 292.488 91.0489 292.754 91.1933L294.647 92.2649C294.89 92.4017 295.088 92.7133 295.118 93.0021Z"
                        fill="white" />
                    <path
                        d="M276.726 111.784C276.43 111.609 274.15 110.325 274.081 110.279C273.861 110.142 273.785 109.823 273.99 109.603L278.033 104.967L280.876 106.601L276.65 111.115C276.445 111.328 276.521 111.64 276.726 111.784Z"
                        fill="#FFA8A7" />
                    <path opacity="0.4"
                        d="M276.726 111.784C276.43 111.609 274.15 110.325 274.081 110.279C273.861 110.142 273.785 109.823 273.99 109.603L278.033 104.967L280.876 106.601L276.65 111.115C276.445 111.328 276.521 111.64 276.726 111.784Z"
                        fill="white" />
                    <path
                        d="M294.654 92.8135L281.347 100.512C281.081 100.664 280.868 101.029 280.868 101.333V106.6L276.642 111.114C276.369 111.411 276.566 111.813 276.916 111.844L280.876 111.555V117.597C280.876 117.901 281.088 118.023 281.354 117.871L294.662 110.172C294.928 110.02 295.141 109.655 295.141 109.351V93.0871C295.126 92.7831 294.913 92.6615 294.654 92.8135Z"
                        fill="#FFA8A7" />
                    <path
                        d="M292.017 107.246L289.311 105.201L292.131 99.8207C292.389 99.3191 292.199 98.7035 291.698 98.4375C291.196 98.1791 290.581 98.3691 290.315 98.8707L287.655 103.947L285.223 102.108C284.774 101.766 284.128 101.857 283.794 102.306C283.452 102.754 283.543 103.4 283.991 103.735L286.697 105.779L283.999 110.932C283.741 111.433 283.931 112.049 284.432 112.315C284.584 112.391 284.744 112.429 284.903 112.429C285.268 112.429 285.625 112.231 285.808 111.882L288.346 107.033L290.778 108.872C290.961 109.009 291.181 109.077 291.394 109.077C291.705 109.077 292.009 108.941 292.207 108.675C292.557 108.234 292.465 107.588 292.017 107.246Z"
                        fill="#FAFAFA" />
                    <path
                        d="M281.347 92.3713C281.096 92.5157 280.632 92.5233 280.397 92.3789L278.504 91.2997C278.238 91.1553 278.026 90.7829 278.026 90.8893V74.6253C278.026 74.0553 278.086 73.8881 278.178 73.7285L281.012 75.3625C280.921 75.5069 280.876 75.6817 280.876 76.2365V92.5005C280.868 92.3789 281.066 92.5385 281.347 92.3713Z"
                        fill="#263238" />
                    <path
                        d="M295.118 67.5041C295.08 67.2685 294.882 67.1773 294.647 67.3141L281.339 75.0129C281.21 75.0889 281.088 75.2181 281.005 75.3701L278.17 73.7361C278.254 73.5917 278.368 73.4701 278.497 73.4017L291.804 65.7029C292.063 65.5509 292.488 65.5509 292.754 65.6953L294.647 66.7669C294.89 66.9037 295.088 67.2229 295.118 67.5041Z"
                        fill="#455A64" />
                    <path
                        d="M276.726 86.284C276.43 86.1092 274.15 84.8248 274.081 84.7792C273.861 84.6424 273.785 84.3232 273.99 84.1028L278.033 79.4668L280.876 81.1008L276.65 85.6152C276.445 85.828 276.521 86.1396 276.726 86.284Z"
                        fill="#455A64" />
                    <path
                        d="M294.654 67.3135L281.347 75.0123C281.081 75.1643 280.868 75.5291 280.868 75.8331V81.0999L276.642 85.6143C276.369 85.9107 276.566 86.3135 276.916 86.3439L280.876 86.0551V92.0971C280.876 92.4011 281.088 92.5227 281.354 92.3707L294.662 84.6719C294.928 84.5199 295.141 84.1551 295.141 83.8511V67.5871C295.126 67.2831 294.913 67.1615 294.654 67.3135Z"
                        fill="#37474F" />
                    <path
                        d="M292.906 78.7892L292.595 76.4636C292.579 76.3648 292.511 76.2812 292.42 76.2432C292.389 76.228 292.351 76.2204 292.313 76.2204C292.253 76.2204 292.184 76.2432 292.139 76.2812L291.356 76.912C291.249 76.4864 291.09 76.114 290.885 75.8024C290.885 75.8024 290.885 75.7948 290.892 75.7948C290.892 75.7948 290.892 75.7948 290.892 75.7872L291.295 74.8296L291.819 73.0056C291.865 72.8536 291.774 72.7016 291.629 72.656C291.607 72.6484 291.576 72.6484 291.553 72.6484C291.432 72.6484 291.318 72.732 291.28 72.8536L290.771 74.6244L290.474 75.3312C290.391 75.2552 290.299 75.1944 290.208 75.1336C289.935 74.9664 289.638 74.8752 289.311 74.8676L289.783 73.0284C289.821 72.8764 289.729 72.7244 289.585 72.6864C289.562 72.6788 289.539 72.6788 289.517 72.6788C289.387 72.6788 289.281 72.7624 289.243 72.8916L288.719 74.936C288.513 74.9892 288.308 75.0728 288.095 75.1792C287.951 75.2552 287.799 75.354 287.662 75.4528L287.328 74.2064C287.297 74.0848 287.183 74.0012 287.054 74.0012C287.031 74.0012 287.009 74.0012 286.978 74.0088C286.826 74.0468 286.743 74.2064 286.781 74.3508L287.183 75.848C286.644 76.3648 286.15 77.0412 285.747 77.8164L285.618 77.6188L285.215 76.3724C285.177 76.2584 285.071 76.1748 284.949 76.1748C284.919 76.1748 284.888 76.1824 284.865 76.19C284.721 76.2356 284.637 76.3952 284.683 76.5396L285.101 77.862L285.458 78.4092C285.177 79.0552 284.957 79.7468 284.805 80.4612C284.782 80.4612 284.759 80.4612 284.744 80.4688L283.771 80.7272C283.665 80.7576 283.581 80.8412 283.566 80.9476L283.095 83.6912C283.072 83.8432 283.171 83.9876 283.323 84.018C283.338 84.018 283.353 84.0256 283.368 84.0256C283.505 84.0256 283.619 83.9268 283.642 83.79L284.083 81.2212L284.698 81.0616C284.653 81.4036 284.622 81.738 284.607 82.08C284.584 82.8628 284.668 83.5544 284.858 84.132C284.835 84.1472 284.805 84.17 284.789 84.1928L283.885 85.2872C283.817 85.3708 283.801 85.4924 283.847 85.5912L284.721 87.362C284.767 87.4608 284.865 87.5216 284.972 87.5216C285.017 87.5216 285.055 87.514 285.093 87.4912C285.23 87.4228 285.291 87.2556 285.223 87.1188L284.44 85.5L285.101 84.6944C285.314 85.1048 285.595 85.424 285.937 85.6368C286.226 85.8192 286.545 85.9104 286.895 85.9104C287.267 85.9104 287.662 85.804 288.05 85.5912C288.057 85.5912 288.057 85.5836 288.065 85.5836C288.065 85.5836 288.065 85.5836 288.073 85.5836C289.304 84.9072 290.413 83.2808 291.021 81.4188C291.029 81.4188 291.044 81.4264 291.059 81.4264L291.743 81.5404L290.847 84.0028C290.793 84.1472 290.869 84.3068 291.014 84.36C291.044 84.3676 291.075 84.3752 291.113 84.3752C291.227 84.3752 291.333 84.2992 291.379 84.1928L292.389 81.4112C292.42 81.3352 292.412 81.244 292.367 81.1756C292.321 81.0996 292.253 81.054 292.169 81.0388L291.189 80.8792C291.386 80.1572 291.508 79.42 291.523 78.6904C291.538 78.28 291.515 77.8924 291.47 77.5276C291.477 77.52 291.485 77.52 291.493 77.5124L292.101 77.026L292.344 78.8576C292.359 78.9944 292.481 79.1008 292.617 79.1008C292.633 79.1008 292.64 79.1008 292.655 79.1008C292.731 79.0932 292.792 79.0552 292.838 78.9944C292.891 78.9336 292.914 78.8576 292.906 78.7892ZM288.361 75.6732C288.673 75.506 288.969 75.4224 289.251 75.4224C289.486 75.4224 289.714 75.4832 289.912 75.6124C290.026 75.6808 290.132 75.772 290.223 75.8784C289.653 77.0184 288.833 77.9456 287.989 78.394C287.639 78.584 287.297 78.6828 286.993 78.6828C286.659 78.6828 286.363 78.5688 286.119 78.3484C286.705 77.1248 287.503 76.1368 288.361 75.6732ZM285.185 82.0952C285.215 81.0084 285.481 79.8836 285.891 78.8652C286.203 79.1084 286.575 79.23 286.986 79.23C287.259 79.23 287.548 79.1768 287.837 79.0628L287.647 85.158C287.389 85.2796 287.138 85.3404 286.902 85.3404C286.667 85.3404 286.439 85.2796 286.241 85.1504C285.527 84.7248 285.131 83.5848 285.185 82.0952ZM288.217 84.8236L288.407 78.7968C289.235 78.3104 290.003 77.4592 290.581 76.4028C290.854 76.9728 290.999 77.7632 290.968 78.6752C290.892 81.092 289.699 83.7064 288.217 84.8236Z"
                        fill="#27DEBF" />
                    <path
                        d="M291.804 40.2048L278.497 47.9036C278.231 48.0556 278.018 48.4204 278.018 49.1348V65.3988C278.018 65.2924 278.231 65.6572 278.497 65.8092L280.389 66.8808C280.655 67.0328 281.081 67.0252 281.339 66.8732L294.647 59.1744C294.913 59.0224 295.126 58.6576 295.126 58.3536V42.0896C295.126 41.7856 294.913 41.4208 294.647 41.2688L292.754 40.1972C292.496 40.0528 292.07 40.0528 291.804 40.2048Z"
                        fill="#27DEBF" />
                    <path opacity="0.2"
                        d="M281.347 66.8811C281.096 67.0255 280.632 67.0331 280.397 66.8887L278.504 65.8095C278.238 65.6651 278.026 65.2927 278.026 65.3991V49.1351C278.026 48.5651 278.086 48.3979 278.178 48.2383L281.012 49.8723C280.921 50.0167 280.876 50.1915 280.876 49.9331V66.1971C280.868 66.8811 281.066 67.0407 281.347 66.8811Z"
                        fill="black" />
                    <path opacity="0.4"
                        d="M295.118 42.006C295.08 41.7704 294.882 41.6792 294.647 41.816L281.339 49.5148C281.21 49.5908 281.088 49.72 281.005 49.872L278.17 48.238C278.254 48.0936 278.368 47.972 278.497 47.9036L291.804 40.2048C292.063 40.0528 292.488 40.0528 292.754 40.1972L294.647 41.2688C294.89 41.4132 295.088 41.7248 295.118 42.006Z"
                        fill="white" />
                    <path
                        d="M276.726 60.786C276.43 60.6112 274.15 59.3268 274.081 59.2812C273.861 59.1444 273.785 58.8251 273.99 58.6047L278.033 53.9688L280.876 55.6028L276.65 60.1172C276.445 60.33 276.521 60.6416 276.726 60.786Z"
                        fill="#27DEBF" />
                    <path opacity="0.4"
                        d="M276.726 60.786C276.43 60.6112 274.15 59.3268 274.081 59.2812C273.861 59.1444 273.785 58.8251 273.99 58.6047L278.033 53.9688L280.876 55.6028L276.65 60.1172C276.445 60.33 276.521 60.6416 276.726 60.786Z"
                        fill="white" />
                    <path
                        d="M294.654 41.816L281.347 49.5148C281.081 49.6668 280.868 50.0316 280.868 50.3356V55.6024L276.642 60.1168C276.369 60.4132 276.566 60.816 276.916 60.8464L280.876 60.5576V66.5996C280.876 66.9036 281.088 67.0252 281.354 66.8732L294.662 59.1744C294.928 59.0224 295.141 58.6576 295.141 58.3536V42.0896C295.126 41.7932 294.913 41.664 294.654 41.816Z"
                        fill="#27DEBF" />
                    <path
                        d="M292.184 46.3612C291.584 46.1104 290.885 46.3916 290.634 46.992L286.165 57.6244L285.101 56.5908C284.637 56.1348 283.885 56.15 283.429 56.6136C282.973 57.0772 282.988 57.8296 283.452 58.2856L285.755 60.5276C285.975 60.7404 286.271 60.862 286.575 60.862C286.651 60.862 286.735 60.8544 286.811 60.8392C287.199 60.7632 287.518 60.4972 287.662 60.14L292.8 47.9116C293.066 47.3112 292.785 46.612 292.184 46.3612Z"
                        fill="#FAFAFA" />
                    <path
                        d="M396.943 304.35C397.566 305.596 397.703 306.751 397.642 307.792C397.589 308.834 396.958 310.179 397.247 312.535C397.528 314.891 398.068 315.62 398.311 317.285C398.562 318.949 398.364 320.12 397.391 321.7C396.418 323.281 394.275 324.535 390.042 324.383C386.622 324.262 385.239 322.506 385.163 320.492L396.943 304.35Z"
                        fill="#263238" />
                    <path
                        d="M395.947 299.471C396.076 299.699 396.046 300.239 396.152 300.801C396.282 301.591 396.517 302.351 396.707 303.127C396.76 303.332 396.806 303.537 396.844 303.742C397.171 305.315 396.836 306.942 396.867 308.545C396.897 310.445 397.429 312.292 397.855 314.139C398.622 317.46 398.744 319.687 395.833 321.997C394.298 323.213 392.618 323.259 390.673 323.305C389.198 323.343 387.26 322.909 386.386 322.271C385.14 321.351 385.155 320.584 385.148 320.287C385.034 316.753 386.31 312.642 386.569 309.115C386.637 308.196 386.728 307.162 386.63 306.25C386.508 305.08 386.105 303.925 385.976 302.739C385.93 302.298 385.9 301.819 386.136 301.447C386.455 300.945 387.116 300.816 387.709 300.74C389.259 300.535 390.81 300.383 392.368 300.269C392.74 300.246 393.15 300.231 393.424 300.482C393.728 300.755 393.736 301.211 393.812 301.607C393.888 302.002 394.184 302.458 394.587 302.382C394.853 302.329 395.02 302.063 395.058 301.797C395.096 301.531 395.21 299.486 395.202 299.22C395.218 299.22 395.765 299.137 395.947 299.471Z"
                        fill="#37474F" />
                    <path
                        d="M344.495 311.199C344.244 311.67 344.275 312.567 344.526 313.145C344.776 313.722 347.672 315.516 351.677 315.41C355.682 315.303 358.494 313.806 360.06 312.856C361.626 311.906 363.222 311.784 365.205 311.754C367.189 311.724 369.507 311.009 370.183 310.105C370.639 308.965 370.16 307.43 370.16 307.43L344.495 311.199Z"
                        fill="#263238" />
                    <path
                        d="M358.981 299.366C358.814 299.639 358.7 299.951 358.563 300.247C358.076 301.326 357.309 302.284 356.359 302.998C355.029 303.994 353.44 304.716 351.936 305.385C350.955 305.826 349.922 305.947 348.918 306.297C347.832 306.677 346.661 307.11 345.673 307.718C344.062 308.714 343.75 311.358 345.498 312.483C347.003 313.448 351.024 314.596 355.325 313.562C357.674 313 360.341 310.629 363.396 310.515C365.334 310.439 369.02 310.044 370.32 308.63C370.799 306.51 370.274 305.909 369.841 304.1C369.598 303.082 369.499 302.041 369.476 301C369.461 300.452 369.841 298.872 368.686 298.682L368.564 299.86C368.564 299.86 368.352 300.262 367.151 300.468C366.763 300.536 366.459 301.045 366.246 301.509C366.087 301.866 365.912 302.322 365.524 302.314C365.258 302.307 365.038 302.086 364.924 301.843C364.81 301.6 364.78 301.326 364.704 301.076C364.445 300.232 363.708 299.609 362.887 299.274C362.196 298.993 361.489 298.94 360.759 298.826C360.204 298.742 359.756 298.507 359.27 298.97C359.163 299.092 359.072 299.221 358.981 299.366Z"
                        fill="#37474F" />
                    <path
                        d="M390.163 208.971C390.923 220.583 391.326 227.34 393.401 259.001C393.401 259.001 395.795 267.019 396.297 275.6C396.707 282.607 397.703 303.727 397.703 303.727C397.703 303.727 392.056 308.363 385.512 306.22C385.512 306.22 379.592 275.182 377.532 265.499C375.556 256.205 374.036 246.043 374.036 246.043L372.623 259.001C372.623 259.001 372.889 264.77 372.706 273.381C372.607 277.986 370.388 302.914 370.388 302.914C370.388 302.914 362.461 306.517 357.111 301.896C357.111 301.896 356.723 261.471 356.64 257.307C356.549 252.557 357.369 204.707 357.369 204.707L390.163 208.971Z"
                        fill="#455A64" />
                    <path
                        d="M374.036 246.044L369.986 224.817C369.986 224.817 363.723 224.27 360.265 220.781C360.265 220.781 360.881 224.201 368.754 226.261L372.661 245.816L372.615 259.009L374.036 246.044Z"
                        fill="#37474F" />
                    <path
                        d="M397.52 299.913C394.594 302.39 391.577 303.044 388.833 303.044C388.833 303.044 394.23 302.238 397.467 298.682L397.52 299.913Z"
                        fill="#37474F" />
                    <path
                        d="M370.647 299.973C370.647 299.973 365.129 301.903 360.463 300.429C360.463 300.429 364.065 302.845 370.571 300.862L370.647 299.973Z"
                        fill="#37474F" />
                    <path
                        d="M312.37 165.788C312.347 165.606 312.233 165.446 312.142 165.294C311.739 164.595 311.754 163.675 312.188 162.991C312.302 162.809 312.446 162.642 312.522 162.444C312.674 162.018 312.484 161.555 312.522 161.106C312.659 159.108 316.276 159.982 317.432 160.384C317.758 160.498 319.712 161.008 320.441 161.266C320.418 160.362 320.38 159.518 320.76 158.006C321.277 155.931 322.987 156.144 323.086 157.413C323.139 158.135 323.223 158.857 323.724 160.802C323.937 161.616 324.454 162.421 324.796 163.622C325.244 165.172 325.13 165.993 326.643 167.437C328.908 169.588 340.627 177.522 340.627 177.522C343.553 175.645 354.846 168.699 359.08 166.404C363.176 164.184 365.258 165.978 365.258 165.978L361.694 179.134C361.694 179.134 347.604 186.392 342.534 188.611C338.993 190.161 337.427 189.287 333.521 185.799C330.42 182.865 326.324 178.624 321.916 174.718C320.152 173.16 318.906 172.354 317.629 172.294C317.158 172.271 316.687 172.24 316.216 172.195C315.174 172.081 313.936 171.815 313.426 170.781C313.252 170.424 313.168 170.036 313.024 169.664C312.803 169.102 312.454 168.608 312.233 168.045C312.089 167.673 312.005 167.247 312.081 166.852C312.142 166.48 312.416 166.153 312.37 165.788Z"
                        fill="#FFA8A7" />
                    <path
                        d="M366.033 164.922C362.431 164.929 361.033 164.929 356.458 167.529C351.882 170.128 342.975 176.033 342.975 176.033C342.975 176.033 346.973 178.26 347.771 186.164L362.196 179.385L366.033 164.922Z"
                        fill="#455A64" />
                    <path
                        d="M319.073 162.451C320.266 162.74 320.639 163.492 320.722 165.172C320.768 166.168 321.186 167.984 322.318 168.645C322.318 168.645 321.414 168.622 320.867 168.128C320.32 167.634 320.175 167.589 319.909 167.908C319.643 168.227 319.187 168.387 319.187 168.387C319.187 168.387 319.871 169.025 319.408 169.914C318.944 170.811 316.611 170.986 314.635 170.127C314.635 170.127 317.804 170.88 318.458 169.846C319.111 168.812 317.386 167.688 316.14 167.437C316.14 167.437 319.187 167.946 319.575 166.935C319.97 165.924 318.678 165.263 316.884 164.936C316.884 164.936 319.392 165.218 319.757 164.351C320.213 163.302 319.423 162.763 319.073 162.451Z"
                        fill="#F28F8F" />
                    <path
                        d="M340.627 177.507C343.378 179.445 344.146 181.839 344.146 181.839C344.146 181.839 344.389 178.503 341.645 176.861L340.627 177.507Z"
                        fill="#F28F8F" />
                    <path
                        d="M356.974 177.916C357.423 168.971 361.025 165.361 366.034 164.92L377.289 164.168C380.299 164.875 388.233 166.387 388.233 166.387C391.509 167.368 393.804 175.91 393.044 180.774C392.276 185.638 390.673 189.347 390.224 197.532C390.354 205.284 390.468 206.819 390.468 209.859C383.468 214.298 364.666 215.225 357.263 210.771C357.263 210.771 357.142 203.27 356.99 198.505C356.731 190.327 356.822 180.994 356.974 177.916Z"
                        fill="#27DEBF" />
                    <path
                        d="M359.931 139.97C359.003 140.365 358.502 141.536 358.471 142.547C358.449 143.307 358.707 144.211 359.11 144.743C359.748 145.587 360.683 146.141 361.694 146.438C362.127 146.567 362.583 146.666 362.986 146.871C363.533 147.152 363.936 147.722 364.43 148.102C365.121 148.634 365.805 149.181 366.512 149.706C367.918 150.739 369.377 151.712 370.897 152.579C372.349 153.407 373.861 154.137 375.435 154.714C377.099 155.33 378.505 154.79 380.253 154.95L379.995 159.768C379.995 159.768 380.587 158.659 381.264 157.329C381.849 156.189 384.273 150.382 384.273 150.382C385.231 148.102 386.447 145.716 386.303 143.17C386.189 141.118 385.771 139.301 384.205 138.435C384.083 136.064 383.536 134.909 381.872 133.632C380.755 132.781 379.143 132.287 377.76 132.081C376.103 131.838 374.416 131.998 372.767 132.256C370.305 132.651 367.842 133.275 365.349 133.153C364.057 133.085 362.606 133.024 361.367 133.404C359.642 133.936 358.585 135.539 358.578 137.348C358.57 138.283 359.292 139.773 359.931 139.97Z"
                        fill="#37474F" />
                    <path
                        d="M375.526 140.586C375.526 142.091 376.924 144.257 379.052 146.112C378.817 147.799 378.824 148.688 379.166 150.352C379.242 150.71 379.554 151.257 379.759 151.561C379.964 151.865 380.291 152.1 380.656 152.131C381.142 152.169 381.348 151.872 381.5 151.485C381.697 150.991 381.986 150.527 382.244 150.056C382.366 149.828 382.518 149.684 382.678 149.509C383.422 148.817 385.634 147.981 386.652 150.33C387.709 152.762 385.763 155.984 383.977 156.478C380.914 157.329 380.246 155.247 380.246 155.247L380.299 165.385C379.44 167.962 374.682 170.454 370.852 169.96C367.022 169.466 368.238 167.141 369.796 165.583L369.598 162.064C369.598 162.064 367.546 162.315 365.517 161.92C363.928 161.608 362.621 160.118 361.96 157.702C360.706 153.081 360.911 146.53 361.504 143.626C362.082 140.769 362.788 139.538 363.13 139.203C363.1 139.826 364.324 141.734 367.417 142.16C370.692 142.593 373.17 141.559 375.526 140.586Z"
                        fill="#FFA8A7" />
                    <path
                        d="M369.598 162.048C372.433 161.79 374.728 161.402 376.316 160.558C377.487 159.943 378.498 158.02 378.802 157.336C378.802 157.336 378.726 159.966 377.152 161.417C374.926 163.484 369.674 163.484 369.674 163.484L369.598 162.048Z"
                        fill="#F28F8F" />
                    <path
                        d="M371.049 149.143C371.027 149.729 371.475 150.223 372.037 150.238C372.6 150.253 373.079 149.789 373.094 149.204C373.117 148.619 372.668 148.125 372.106 148.11C371.543 148.095 371.072 148.551 371.049 149.143Z"
                        fill="#263238" />
                    <path
                        d="M371.452 145.792L373.93 146.826C374.203 146.119 373.861 145.313 373.177 145.024C372.501 144.736 371.726 145.078 371.452 145.792Z"
                        fill="#263238" />
                    <path
                        d="M372.425 154.676L368.648 156.226C369.058 157.313 370.236 157.837 371.285 157.412C372.326 156.986 372.835 155.763 372.425 154.676Z"
                        fill="#B16668" />
                    <path
                        d="M370.213 157.344C370.213 157.405 370.229 157.466 370.229 157.534C370.571 157.587 370.935 157.565 371.285 157.42C372.083 157.093 372.569 156.295 372.562 155.452C372.433 155.421 372.288 155.406 372.151 155.406C371.08 155.406 370.213 156.273 370.213 157.344Z"
                        fill="#F28F8F" />
                    <path
                        d="M362.15 146.757L364.605 145.807C364.361 145.138 363.617 144.804 362.94 145.07C362.264 145.336 361.907 146.088 362.15 146.757Z"
                        fill="#263238" />
                    <path
                        d="M362.781 148.922C362.758 149.515 363.206 150.009 363.776 150.024C364.346 150.04 364.825 149.576 364.84 148.983C364.863 148.39 364.415 147.896 363.845 147.881C363.275 147.866 362.796 148.33 362.781 148.922Z"
                        fill="#263238" />
                    <path d="M368.237 154.174L364.453 153.46L368.025 147.41L368.237 154.174Z" fill="#F28F8F" />
                    <path
                        d="M388.887 166.57C393.622 167.391 396.494 168.904 397.703 172.628C399.42 177.917 404.246 193.018 405.25 198.369C405.865 201.66 406.808 203.742 404.018 205.908C400.446 208.682 389.548 215.773 383.232 219.079C376.917 222.392 367.364 223.046 367.364 223.046L374.287 218.858L375.526 216.518L394.032 200.117L387.017 179.46C387.017 179.468 385.277 168.85 388.887 166.57Z"
                        fill="#FFA8A7" />
                    <path
                        d="M394.032 200.125C396.031 198.909 398.904 198.954 398.904 198.954C398.904 198.954 397.254 197.541 393.637 198.954L394.032 200.125Z"
                        fill="#F28F8F" />
                    <path
                        d="M388.233 166.389C390.399 166.791 392.77 167.027 394.997 168.425C397.224 169.824 397.604 171.519 399.299 176.74C400.994 181.961 402.992 189.667 402.992 189.667C402.992 189.667 398.843 193.179 391.706 193.27C391.706 193.27 388.188 183.504 387.314 181.33C386.44 179.157 384.266 172.149 388.233 166.389Z"
                        fill="#455A64" />
                    <path
                        d="M380.603 213.304L380.618 213.95C380.633 214.604 380.299 215.219 379.736 215.561L362.469 226.011C362.188 226.179 361.876 226.27 361.557 226.277C361.246 226.285 360.926 226.209 360.638 226.057L328.148 208.243C327.57 207.931 327.205 207.331 327.198 206.677L327.19 206.229L361.542 225.061L380.603 213.304Z"
                        fill="#27DEBF" />
                    <g opacity="0.5">
                        <path
                            d="M380.603 213.304L380.618 213.95C380.633 214.604 380.299 215.219 379.736 215.561L362.469 226.011C362.188 226.179 361.876 226.27 361.557 226.277C361.246 226.285 360.926 226.209 360.638 226.057L328.148 208.243C327.57 207.931 327.205 207.331 327.198 206.677L327.19 206.229L361.542 225.061L380.603 213.304Z"
                            fill="white" />
                    </g>
                    <g opacity="0.1">
                        <path
                            d="M380.603 213.304L380.618 213.95C380.633 214.604 380.299 215.219 379.736 215.561L362.469 226.011C362.188 226.179 361.876 226.27 361.557 226.277C361.246 226.285 360.926 226.209 360.638 226.057L328.148 208.243C327.57 207.931 327.205 207.331 327.198 206.677L327.19 206.229L361.542 225.061L380.603 213.304Z"
                            fill="black" />
                    </g>
                    <path
                        d="M327.182 206.228L345.962 194.828C346.296 194.623 346.714 194.615 347.056 194.805L380.481 213.136C380.648 213.227 380.648 213.463 380.489 213.554L361.534 225.068L327.182 206.228Z"
                        fill="#27DEBF" />
                    <g opacity="0.85">
                        <path
                            d="M327.182 206.228L345.962 194.828C346.296 194.623 346.714 194.615 347.056 194.805L380.481 213.136C380.648 213.227 380.648 213.463 380.489 213.554L361.534 225.068L327.182 206.228Z"
                            fill="white" />
                    </g>
                    <path d="M361.367 223.275L371.498 217.127L341.417 200.635L331.233 206.753L361.367 223.275Z"
                        fill="#27DEBF" />
                    <g opacity="0.6">
                        <path d="M361.367 223.275L371.498 217.127L341.417 200.635L331.233 206.753L361.367 223.275Z"
                            fill="white" />
                    </g>
                    <path
                        d="M366.353 206.866L366.163 206.98L361.2 209.997L352.141 205.027L351.951 204.928L357.104 201.797L366.353 206.866Z"
                        fill="#27DEBF" />
                    <path d="M366.163 206.98L361.2 209.998L352.141 205.027L357.111 202.018L366.163 206.98Z"
                        fill="#27DEBF" />
                    <g opacity="0.6">
                        <path d="M366.163 206.98L361.2 209.998L352.141 205.027L357.111 202.018L366.163 206.98Z"
                            fill="white" />
                    </g>
                    <path
                        d="M361.527 225.062L361.557 226.285C361.246 226.293 360.926 226.217 360.638 226.065L328.148 208.25C327.57 207.939 327.205 207.338 327.198 206.685L327.19 206.236L361.527 225.062Z"
                        fill="#27DEBF" />
                    <g opacity="0.03">
                        <path
                            d="M361.527 225.062L361.557 226.285C361.246 226.293 360.926 226.217 360.638 226.065L328.148 208.25C327.57 207.939 327.205 207.338 327.198 206.685L327.19 206.236L361.527 225.062Z"
                            fill="white" />
                    </g>
                    <g opacity="0.2">
                        <path
                            d="M361.527 225.062L361.557 226.285C361.246 226.293 360.926 226.217 360.638 226.065L328.148 208.25C327.57 207.939 327.205 207.338 327.198 206.685L327.19 206.236L361.527 225.062Z"
                            fill="black" />
                    </g>
                    <path
                        d="M361.018 225.342C360.417 225.593 359.726 225.563 359.14 225.236L326.787 207.497C326.217 207.186 325.822 206.639 325.7 206L321.741 185.222C321.718 185.1 321.71 184.986 321.703 184.865C321.688 184.287 321.908 183.725 322.311 183.307L355.933 201.744C356.351 201.972 356.648 202.383 356.739 202.854L361.018 225.342Z"
                        fill="#27DEBF" />
                    <g opacity="0.4">
                        <path
                            d="M361.018 225.342C360.417 225.593 359.726 225.563 359.14 225.236L326.787 207.497C326.217 207.186 325.822 206.639 325.7 206L321.741 185.222C321.718 185.1 321.71 184.986 321.703 184.865C321.688 184.287 321.908 183.725 322.311 183.307L355.933 201.744C356.351 201.972 356.648 202.383 356.739 202.854L361.018 225.342Z"
                            fill="white" />
                    </g>
                    <path
                        d="M361.527 225.061L361.314 225.19C361.215 225.243 361.124 225.297 361.018 225.342L356.739 202.854C356.648 202.383 356.351 201.98 355.933 201.744L322.311 183.307C322.44 183.177 322.584 183.063 322.744 182.957L356.435 201.425C356.853 201.653 357.149 202.063 357.24 202.535L361.527 225.061Z"
                        fill="#27DEBF" />
                    <g opacity="0.6">
                        <path
                            d="M361.527 225.061L361.314 225.19C361.215 225.243 361.124 225.297 361.018 225.342L356.739 202.854C356.648 202.383 356.351 201.98 355.933 201.744L322.311 183.307C322.44 183.177 322.584 183.063 322.744 182.957L356.435 201.425C356.853 201.653 357.149 202.063 357.24 202.535L361.527 225.061Z"
                            fill="white" />
                    </g>
                    <path
                        d="M356.427 202.169L356.936 201.857C357.088 202.055 357.202 202.283 357.248 202.534L361.534 225.053L361.322 225.182C361.223 225.235 361.132 225.288 361.025 225.334L356.746 202.845C356.693 202.602 356.579 202.367 356.427 202.169Z"
                        fill="#27DEBF" />
                    <path opacity="0.5"
                        d="M356.427 202.169L356.936 201.857C357.088 202.055 357.202 202.283 357.248 202.534L361.534 225.053L361.322 225.182C361.223 225.235 361.132 225.288 361.025 225.334L356.746 202.845C356.693 202.602 356.579 202.367 356.427 202.169Z"
                        fill="white" />
                    <path opacity="0.1"
                        d="M356.427 202.169L356.936 201.857C357.088 202.055 357.202 202.283 357.248 202.534L361.534 225.053L361.322 225.182C361.223 225.235 361.132 225.288 361.025 225.334L356.746 202.845C356.693 202.602 356.579 202.367 356.427 202.169Z"
                        fill="black" />
                    <path
                        d="M342.603 206.488C342.337 205.097 340.855 203.273 339.289 202.414C337.724 201.555 336.675 201.988 336.941 203.379C337.207 204.77 338.689 206.594 340.254 207.453C341.812 208.312 342.869 207.878 342.603 206.488Z"
                        fill="#455A64" />
                    <path
                        d="M381.234 211.465C379.425 212.734 376.985 211.716 374.584 212.004C372.182 212.293 370.13 212.886 368.2 212.825C366.269 212.772 365.327 213.16 366.672 214.702C368.017 216.245 371.893 215.356 372.934 215.827C373.976 216.298 374.629 217.978 373.421 219.384C372.288 220.699 379.866 218.16 380.876 216.595C381.895 215.037 382.602 211.662 381.234 211.465Z"
                        fill="#FFA8A7" />
                </svg>
            </div>


            <div class="flex flex-col items-start">
                <p class="text-4xl text-white font-bold text-start mb-10">Portofolio Tugas Akhir</p>
                <p class="text-xl text-white font  text-start mb-10">Tugas Akhir yang dikembangkan oleh mahasiswa
                    <br>
                    Teknologi Rekayasa Perangkat Lunak sebagai <br> syarat kelulusan
                </p>
                <button onclick="window.location.href='{{ route('public.portofolio', ['category' => 'all']) }}'"
                    class="flex items-center justify-center w-auto h-auto ps-12 pe-8 py-4 bg-white hover:bg-slate-300 rounded-xl">
                    <p class="text-teal-800 font-bold text-center text-xl">Read More</p>
                    <img class="ms-6 w-12 h-auto" src="{{ asset('asset/dashboard/button_g.png') }}" alt="">
                </button>
            </div>

        </div>

    </div>

    <div class="flex flex-col w-full justify-center items-center">

        <p class="text-5xl text-teal-800 font-bold text-start mb-32 px-20">Prestasi Teknologi Rekayasa Perangkat Lunak</p>

        <div class="flex flex-col md:flex-row w-full justify-start items-center mb-40 gap-20">

            <div class="basis-1/2 flex flex-col w-auto h-auto px-24 pe-32 py-28 bg-teal-800 shadow-xl shadow-slate-500"
                style="border-top-right-radius: 999px; border-bottom-right-radius: 999px;">
                <p class="text-4xl text-white font-bold text-start mb-12">PIMNAS</p>
                <p class="text-xl text-white text-start mb-12">Pekan Ilmiah Mahasiswa Nasional (PIMNAS) <br>
                    merupakan event resmi tahunan Pusat Prestasi <br> Nasional, Kementerian Pendidikan dan <br> Kebudayaan
                    dalam bidang penalaran untuk <br> memperlombakan karya ilmiah mahasiswa <br> tingkat nasional.</p>
                <button type="button"
                    class="flex w-fit h-fit px-12 items-center py-4 bg-white hover:bg-slate-300 rounded-md"
                    onclick="window.location.href='../portofolio_page.html'">
                    <p class="text-teal-800 font-bold text-center text-xl">Read More</p>
                    <img class="" src="{{ asset('asset/dashboard/button_g.png') }}" alt="">
                </button>
            </div>

            <div class="basis-1/2 flex flex-col w-full h-auto justify-center items-center">
                <div class="flex-col w-96  h-auto items-center shadow-xl shadow-slate-500">
                    <img class="rounded-t-xl" src="{{ asset('asset/dashboard/pimnas.png') }}" alt="">
                    <div class="w-full h-fit bg-teal-800 py-12 rounded-b-xl">
                        <p class="text-white font-bold text-center text-xl">Pekan Ilmiah Mahasiswa <br> Nasional</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex flex-col md:flex-row-reverse w-full justify-start items-center mb-40 gap-20">

            <div class="basis-1/2 flex flex-col items-end w-auto h-auto px-32 pe-24 py-28 bg-teal-800 shadow-xl shadow-slate-500"
                style="border-top-left-radius: 999px; border-bottom-left-radius: 999px;">
                <p class="text-4xl text-white font-bold text-end mb-12">PKM</p>
                <p class="text-xl text-white text-end mb-12">Program Kreativitas Mahasiswa adalah kegiatan untuk
                    meningkatkan mutu mahasiswa agar kelak dapat menjadi anggota masyarakat yang memiliki kemampuan akademis
                    dan/atau profesional yang dapat menerapkan, mengembangkan dan meyebarluaskan ilmu pengetahuan, teknologi
                    dan/atau kesenian serta memperkaya budaya nasional.</p>
                <button onclick="window.location.href='../achievement.html'"
                    class="flex w-fit h-fit px-12 items-end py-4 bg-white hover:bg-slate-300 rounded-md">
                    <p class="text-teal-800 font-bold text-center text-xl">Read More</p>
                    <img class="" src="{{ asset('asset/dashboard/button_g.png') }}" alt="">
                </button>
            </div>

            <div class="basis-1/2 flex flex-col w-full h-auto justify-center items-center">
                <div class="flex-col w-96  h-auto items-center shadow-xl shadow-slate-500">
                    <img class="rounded-t-xl" src="{{ asset('asset/dashboard/PKM.png') }}" alt="">
                    <div class="w-full h-fit bg-teal-800 py-12 rounded-b-xl">
                        <p class="text-white font-bold text-center text-xl">Program Kreativitas Mahasiswa</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex flex-col md:flex-row w-full justify-start items-center mb-72 gap-20">

            <div class="basis-1/2 flex flex-col w-auto h-auto px-24 pe-56 py-24 bg-teal-800 shadow-xl shadow-slate-500"
                style="border-top-right-radius: 999px; border-bottom-right-radius: 999px;">
                <p class="text-4xl text-white font-bold text-start mb-12">GEMASTIK</p>
                <p class="text-xl text-white text-start mb-12">GEMASTIK atau Pagelaran Mahasiswa Nasional Bidang
                    Teknologi Informasi dan Komunikasi, merupakan program Balai Pengembangan Talenta Indonesia, Pusat
                    Prestasi Nasional, Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi. </p>
                <button class="flex w-fit h-fit px-12 items-center py-4 bg-white hover:bg-slate-300 rounded-md">
                    <p class="text-teal-800 font-bold text-center text-xl">Read More</p>
                    <img class="" src="{{ asset('asset/dashboard/button_g.png') }}" alt="">
                </button>
            </div>

            <div class="basis-1/2 flex flex-col w-full h-auto justify-center items-center">
                <div class="flex-col w-96 h-auto items-center shadow-xl shadow-slate-500">
                    <img class="rounded-t-xl" src="{{ asset('asset/dashboard/GEMASTIK.png') }}" alt="">
                    <div class="w-full h-fit bg-teal-800 py-12 rounded-b-xl">
                        <p class="text-white font-bold text-center text-xl">Pagelaran Mahasiswa Nasional Bidang Teknologi
                            Informasi dan Komunikasi</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- </main> -->

    <!-- <footer class="w-full bg-teal-800 h-auto grid grid-cols-3 py-16 pb-16">
                                                <div id="footer_kiri" class="flex flex-col ms-16 ">
                                                    <img class="w-40 h-auto" src="../ugm.png" alt="">
                                                    <p class="text-white text-lg mt-6">Universitas Gadjah Mada</p>
                                                    <p class="text-white text-lg mt-1">Sekolah Vokasi</p>
                                                    <p class="text-white text-lg mt-1">Gedung TILC, Belimbingsari, Caturtunggal</p>
                                                    <p class="text-white text-lg mt-1 mb-6">Depok, Sleman, Yogyakarta, Indonesia, 55281</p>
                                                    <div class="flex flex-row items-center">
                                                        <img class="w-6 h-auto" src="../email.png" alt="">
                                                        <a href="" class="text-white text-lg ms-4">sv@ugm.ac.id</a>
                                                    </div>
                                                    <div class="flex flex-row items-center mt-3">
                                                        <img class="w-5 h-auto" src="../telephone.png" alt="">
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
                                            </footer>
                                            <div class="flex justify-center font-bold text-teal-800 py-6"> Copyright © 2017 Sekolah Vokasi Universitas Gadjah Mada </div>

                                        </div>

                                    </body> -->

    @stack('script')
@endsection

<script>
    let currentSlide = -1;

    function showSlide(index) {
        const slides = document.querySelector("#slides");
        const slideWidth = document.querySelector("#item").offsetWidth;
        slides.style.transform = `translateX(${-index * slideWidth}px)`;


        const items = document.querySelectorAll("#item");
        const images = document.querySelectorAll("#item div img");
        const imgContainer = document.querySelectorAll("#cont_atas");
        const textContainer = document.querySelectorAll("#cont_bawah");
        const circles = document.querySelectorAll(".circle");

        // Reset width for all items
        for (let i = 0; i < items.length; i++) {
            // const item = document.querySelector('.item' + i);
            // items[i].style.height = "initial";
            items[i].style.opacity = "0.7";
            items[i].style.marginLeft = "0";
            items[i].style.marginRight = "0";
            items[i].style.zIndex = "0";
            items[i].style.width = "16rem";
            imgContainer[i].style.backgroundColor = "#e6e6e6";
            items[i].style.marginBottom = "0";
            textContainer[i].style.width = "16rem";
            circles[i].style.width = "1.5rem";
        }

        // const item = document.querySelector(".item" + (index + 1));
        // items[index].style.height = "35rem";
        items[index + 1].style.opacity = "1";
        items[index + 1].style.marginLeft = "-50px";
        items[index + 1].style.marginRight = "-50px";

        if (index != -1) {
            items[index].style.marginLeft = "1.5rem";
        } else {
            items[index + 1].style.marginLeft = "-1rem";
        }

        if (index != 6) {
            items[index + 2].style.marginRight = "1.5rem";
        } else {
            items[index + 1].style.marginRight = "0";
        }

        imgContainer[index + 1].style.backgroundColor = "#ffffff";
        items[index + 1].style.zIndex = "2";
        items[index + 1].style.width = "20rem";
        items[index + 1].style.marginBottom = "1.5rem";
        textContainer[index + 1].style.width = "20rem";
        circles[index + 1].style.width = "4rem";

        // console.log(items[index].style.width);
        currentSlide = index;
    }

    function prevSlide() {
        if (currentSlide > -1) {
            currentSlide -= 1;
        } else {
            currentSlide = 6;
        }
        console.log(currentSlide);
        showSlide(currentSlide);
    }

    function nextSlide() {
        if (currentSlide < 6) {
            currentSlide += 1;
        } else {
            currentSlide = -1;
        }
        console.log(currentSlide);
        showSlide(currentSlide);
    }

    let counter = 0;

    const intervalId = setInterval(function() {
        counter++;

        if (counter === 5) {
            nextSlide();
            counter = 0;
        }
    }, 1000);

    // document.addEventListener("DOMContentLoaded", function() {
    //     const carousel = document.querySelector(".carousel");
    //     const nextBtn = document.getElementById("next");
    //     const prevBtn = document.getElementById("prev");
    //     const firstCardWidth = document.querySelector(".card").offsetWidth;

    //     let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

    //     let currentIndex = 0;

    //     nextBtn.addEventListener("click", function() {
    //         scrollTo(firstCardWidth);
    //     });

    //     prevBtn.addEventListener("click", function() {
    //         scrollTo(-firstCardWidth);
    //     });

    //     function scrollTo(direction) {
    //         currentIndex += direction;
    //         if (currentIndex < 0) {
    //             currentIndex = 0;
    //         } else if (currentIndex >= carousel.children.length - cardPerView + 1) {
    //             currentIndex = carousel.children.length - cardPerView;
    //         }

    //         const newPosition = currentIndex * firstCardWidth;
    //         carousel.scrollTo({
    //             left: newPosition,
    //             behavior: 'smooth'
    //         });
    //     }
    // });
</script>
