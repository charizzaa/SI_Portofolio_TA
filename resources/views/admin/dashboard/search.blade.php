@extends('admin.dashboard.layouts')

@section('content')
    <div class="container mx-auto p-4 px-8">

        <div class="overflow-x-auto h-[45rem] shadow-md bg-white shadow-slate-500 rounded-xl">
            <table class="table-auto w-full h-auto bg-white border md:rounded-lg">
                @if ($search_type == "projek")
                    <thead class="bg-white">
                        <tr>
                            <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Project Name</th>
                            <th class="px-12 py-4 text-sm md:text-base" style="color: #025E5A;">Category</th>
                            <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Lecturer</th>
                            <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Upload Date</th>
                            <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Action</th>
                        </tr>
                    </thead>
                @else
                    <thead class="bg-white">
                        <tr>
                            <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Lecturer</th>
                            <th class="px-12 py-4 text-sm md:text-base" style="color: #025E5A;">Specialities</th>
                            <th class="px-12 py-4 text-sm md:text-base" style="color: #025E5A;">Project count</th>
                            <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Action</th>
                        </tr>
                    </thead>
                @endif
                <tbody>
                    <?php
                    $counter = 0;
                    ?>
                    @if ($contents->isNotEmpty())
                        @if ($search_type == "projek")
                            @foreach ($contents as $data)
                                <tr>
                                    <td class="px-4 py-2 border text-sm md:text-base">{{ $data->tittle }}</td>
                                    <td class="flex px-4 py-2 border text-sm md:text-base justify-center items-center">
                                        <div class="px-6 flex justify-center space-x-5">
                                            @foreach ($arrayCategories[$counter] as $item)
                                                <?php
                                                $url_image = '';
                                                if ($item == 'Intelligent Gaming') {
                                                    $url_image = 'asset/icon_green/game.png';
                                                } elseif ($item == 'Software Engineering') {
                                                    $url_image = 'asset/icon_green/softw.png';
                                                } elseif ($item == 'Data Science') {
                                                    $url_image = 'asset/icon_green/data sc.png';
                                                } elseif ($item == 'System Security and Cybersecurity') {
                                                    $url_image = 'asset/icon_green/cyber.png';
                                                } elseif ($item == 'Mobile and Responsive App Development') {
                                                    $url_image = 'asset/icon_green/mobile.png';
                                                } elseif ($item == 'Blockchain Technology and Digital Finance') {
                                                    $url_image = 'asset/icon_green/blokch.png';
                                                } elseif ($item == 'Artificial Intelligence and Natural Language Processing') {
                                                    $url_image = 'asset/icon_green/ai.png';
                                                } elseif ($item == 'IoT') {
                                                    $url_image = 'asset/icon_green/iot.png';
                                                }
                                                ?>
                                                <img src="{{ asset($url_image) }}" alt=""
                                                    style="width: 50px; height: 50px;">
                                            @endforeach
                                            <?php
                                            $counter += 1;
                                            ?>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 border text-sm md:text-base">{{ $data->name }}</td>
                                    <td class="px-4 py-2 border text-sm md:text-base">{{ $data->created_at }}</< /td>
                                    <td class="px-4 py-2 border text-sm md:text-base">
                                        <form action="{{ route('proyek.hapus_projek', $data->id) }}" method="post">
                                            @csrf
                                            @method('GET')
                                            <div class="flex flex-row justify-center space-x-4">

                                                <button
                                                    class="border-2 border-black px-4 py-2 hover:border-gray-700 rounded flex items-center space-x-4">
                                                    <img class="mr-4" src="{{ asset('asset/button/like.png') }}"
                                                        alt="">
                                                    Like
                                                </button>

                                                <button
                                                    class="border-2 border-black px-4 py-2 hover:border-gray-700 rounded flex items-center space-x-4">
                                                    <img class="mr-4" src="{{ asset('asset/button/comment.png') }}"
                                                        alt="">
                                                    Comment
                                                </button>

                                                <button
                                                    class="border-2 border-black px-4 py-2 hover:border-gray-700 rounded flex items-center space-x-4">
                                                    <img class="mr-4" src="{{ asset('asset/button/share.png') }}"
                                                        alt="">
                                                    Share
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        @foreach ($contents as $data)
                            <tr>
                                <td class="px-2 py-4 border flex flex-col justify-center items-center">
                                    <img class="w-20 h-20 mb-3 align-middle"
                                        src="{{ asset('profile/image/' . $data->image_profile) }}" alt="">
                                    <p class="align-middle"> {{ $data->name }} </p>
                                </td>
                                <td class="py-2 border">
                                    <div class="w-full h-auto flex flex-row justify-center space-x-8">
                                        @foreach ($arrayCategories[$counter] as $speciality)
                                            <?php
                                            $url_image = '';
                                            if ($speciality == 'Intelligent Gaming') {
                                                $url_image = 'asset/icon_green/game.png';
                                            } elseif ($speciality == 'Software Engineering') {
                                                $url_image = 'asset/icon_green/softw.png';
                                            } elseif ($speciality == 'Data Science') {
                                                $url_image = 'asset/icon_green/data sc.png';
                                            } elseif ($speciality == 'System Security and Cybersecurity') {
                                                $url_image = 'asset/icon_green/cyber.png';
                                            } elseif ($speciality == 'Mobile and Responsive App Development') {
                                                $url_image = 'asset/icon_green/mobile.png';
                                            } elseif ($speciality == 'Blockchain Technology and Digital Finance') {
                                                $url_image = 'asset/icon_green/blokch.png';
                                            } elseif ($speciality == 'Artificial Intelligence and Natural Language Processing') {
                                                $url_image = 'asset/icon_green/ai.png';
                                            } elseif ($speciality == 'IoT') {
                                                $url_image = 'asset/icon_green/iot.png';
                                            }
                                            ?>
                                            <img src="{{ asset($url_image) }}" alt=""
                                                style="width: 70px; height: 70px;">
                                        @endforeach
                                    </div>
                                </td>
                                <td class="px-4 py-2 border text-center text-lg">{{ $project_count[$counter] }}</td>
                                <?php $counter++;
                                ?>
                                <td class="px-4 py-2 border text-center">
                                    <div class="flex items-center justify-center">
                                        <a
                                            href="{{ route('admin.dashboard.member.detail', ['year' => 'all', 'id' => $data->id]) }}"><button
                                                class="border-2 border-green-900 hover:bg-green-900 text-black hover:text-white py-2 px-4 hover:border-transparent rounded"
                                                style="font-size: 15px;">
                                                View Details
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    @else
                        <tr class="py-4">
                            <td class="px-8 py-4 border">
                                <p> Theres no data match with your search </p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    {{-- <div class="flex justify-center mt-4 mb-6">
        {{ $contents->links() }}
    </div> --}}

@endsection
