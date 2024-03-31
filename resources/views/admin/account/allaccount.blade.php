@extends('admin.dashboard.layouts')

@section('content')

    <div class="flex-row flex p-4">
        @if (session('success'))
            <div class="ms-6 text-gray-500 font-bold mt-8 text-lg">
                {{ session('success') }}
            </div>
        @endif
        {{-- <button
            class="bg-transparent hover:bg-green-600 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mr-3"
            style="border: 4px solid#025E5A; color: #025E5A; border-radius: 5px;">Admin</button>
        <button
            class="bg-transparent hover:bg-green-600 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mr-3"
            style="border: 4px solid#025E5A; color: #025E5A; border-radius: 5px;">Lecturer</button> --}}
        @if (Auth::user()->role == 'Admin')
            <button type="button" onclick="window.location.href='{{ route('admin.account.create') }}'"
                class="bg-blue-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded ml-auto mt-6 me-8">+ Add New
                Account</button>
        @endif


    </div>

    <div class="container md:ps-10 pb-4">

        <p class="text-xl text-teal-800 font-bold mb-4">Admin</p>

        <div class="overflow-x-auto w-full h-64 shadow-md bg-white shadow-slate-500 rounded-lg">
            <table class="table-auto w-full bg-white md:rounded-lg ">
                <thead class="bg-white">
                    <tr>
                        <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Role</th>
                        <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Email</th>
                        <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Status</th>
                        <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Last Login</th>
                        @if (Auth::user()->role == 'Admin')
                            <th class="px-4 py-2 text-sm md:text-base" style="color: #025E5A;">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if (isset($admins) && count($admins) > 0)
                        @foreach ($admins as $data)
                            <tr>
                                <td class="px-4 py-4 border text-sm md:text-base">{{ $data->role }}
                                </td>
                                <td class="px-4 py-4 border text-sm md:text-base">{{ $data->email }}</td>
                                <td class="px-4 py-4 border text-sm md:text-base">{{ $data->loginstatus }}</td>
                                <td class="px-4 py-4 border text-sm md:text-base">{{ $data->last_login }}</td>
                                @if (Auth::user()->role == 'Admin')
                                    <td class="py-6 border text-sm md:text-base">
                                        <div class="flex col justify-center">
                                            <button
                                                onclick="window.location.href='{{ route('admin.account.update', $data->id) }}'"
                                                class="mr-6 bg-yellow-500 px-4 me-6 py-2 hover:bg-yellow-700 rounded-lg flex items-center space-x-4 text-white font-bold shadow-md shadow-slate-500">
                                                <img class="mr-2" src="{{ asset('asset/button/edit.png') }}"
                                                    alt="">
                                                edit
                                            </button>

                                            <button
                                                class=" bg-red-500 px-4 py-2 hover:bg-red-700 rounded-lg flex items-center space-x-4 text-white font-bold shadow-md shadow-slate-500"
                                                onclick="openModal()">
                                                <img class="mr-2" src="{{ asset('asset/button/delete.png') }}"
                                                    alt="">
                                                Delete
                                            </button>

                                        </div>
                                    </td>
                                @endif
                            </tr>
                            <div id="deleteModal" class="modal">
                                <div class="modal-content">
                                    <h5 class="font-bold text-xl mb-4">Delete Account</h5>
                                    <hr class="border-1 border-slate-950 mb-12">
                                    <p class="mb-10 font-bold">Are you sure want to delete this account ?</p>
                                    <div class="flex col">
                                        <button
                                            class="mr-8 rounded flex items-center justify-center bg-red-500 px-4 py-2 hover:bg-red-700 text-white "
                                            type="button"
                                            onclick="window.location.href='{{ route('admin.account.delete', $data->id) }}'"
                                            class="confirm-button"><img class="mr-4"
                                                src="{{ asset('asset/button/delete.png') }}" alt="">Yes,
                                            delete account</button>
                                        <button class="rounded flex bg-green-500 px-4 py-2 hover:green-red-700 text-white "
                                            type="button" class="cancel-button" onclick="closeModal()">No, keep account
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @else

    <tr>
        <td colspan="5" class="text-center px-4 py-2 border text-sm md:text-base">There's no user registered now.</td>
    </tr>
    @endif


    <div class="container md:ps-10 py-4 pb-20">

        <p class="text-xl text-teal-800 mb-4 font-bold">Dosen</p>


        <div class="overflow-x-auto w-full h-96 shadow-md shadow-slate-500 rounded-lg">
            <table class="table-auto w-full bg-white md:rounded-lg ">
                <thead class="bg-white">
                    <tr>
                        <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Role</th>
                        <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Email</th>
                        <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Status</th>
                        <th class="px-4 py-4 text-sm md:text-base" style="color: #025E5A;">Last Login</th>
                        @if (Auth::user()->role == 'Admin')
                            <th class="px-4 py-2 text-sm md:text-base" style="color: #025E5A;">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if (isset($dosens) && count($dosens) > 0)
                        @foreach ($dosens as $data)
                            <tr>
                                <td class="px-4 py-4 border text-sm md:text-base">{{ $data->role }}
                                </td>
                                <td class="px-4 py-4 border text-sm md:text-base">{{ $data->email }}</td>
                                <td class="px-4 py-4 border text-sm md:text-base">{{ $data->loginstatus }}</td>
                                <td class="px-4 py-4 border text-sm md:text-base">{{ $data->last_login }}</td>
                                @if (Auth::user()->role == 'Admin')
                                    <td class="py-6 border text-sm md:text-base">
                                        <div class="flex col justify-center">
                                            <button
                                                onclick="window.location.href='{{ route('admin.account.update', $data->id) }}'"
                                                class="mr-6 bg-yellow-500 px-4 me-6 py-2 hover:bg-yellow-700 rounded-lg flex items-center space-x-4 text-white font-bold shadow-md shadow-slate-500">
                                                <img class="mr-2" src="{{ asset('asset/button/edit.png') }}"
                                                    alt="">
                                                edit
                                            </button>

                                            <button
                                                class=" bg-red-500 px-4 py-2 hover:bg-red-700 rounded-lg flex items-center space-x-4 text-white font-bold shadow-md shadow-slate-500"
                                                onclick="openModal()">
                                                <img class="mr-2" src="{{ asset('asset/button/delete.png') }}"
                                                    alt="">
                                                Delete
                                            </button>

                                        </div>
                                    </td>
                                @endif
                            </tr>
                            <div id="deleteModal" class="modal">
                                <div class="modal-content">
                                    <h5 class="font-bold text-xl mb-4">Delete Account</h5>
                                    <hr class="border-1 border-slate-950 mb-12">
                                    <p class="mb-10 font-bold">Are you sure want to delete this account ?</p>
                                    <div class="flex col">
                                        <button
                                            class="mr-8 rounded flex items-center justify-center bg-red-500 px-4 py-2 hover:bg-red-700 text-white "
                                            type="button"
                                            onclick="window.location.href='{{ route('admin.account.delete', $data->id) }}'"
                                            class="confirm-button"><img class="mr-4"
                                                src="{{ asset('asset/button/delete.png') }}" alt="">Yes,
                                            delete account</button>
                                        <button class="rounded flex bg-green-500 px-4 py-2 hover:green-red-700 text-white "
                                            type="button" class="cancel-button" onclick="closeModal()">No, keep account
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @else

    <tr>
        <td colspan="5" class="text-center px-4 py-2 border text-sm md:text-base">There's no user registered now.</td>
    </tr>
    @endif

    @stack('script')

@endsection

<script>
    // Fungsi untuk membuka modal
    function openModal() {
        var modal = document.getElementById('deleteModal');
        modal.style.display = 'flex';
        console.log("berhasil");
    }

    // Fungsi untuk menutup modal
    function closeModal() {
        var modal = document.getElementById('deleteModal');
        modal.style.display = 'none';
    }

    // Fungsi untuk menghapus data (gantilah dengan logika penghapusan data yang sesuai)
    function deleteData() {
        alert('Data berhasil dihapus!');
        closeModal();
    }
</script>
