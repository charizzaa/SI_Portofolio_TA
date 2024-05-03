<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- @vite(['resources/css/login.css', 'resources/js/login.js']) --}}

</head>

<body class="font-poppins">
    <div class="bg-cover bg-center h-screen" style="background-image: url('{{ asset('asset/login/img/Login.png') }}');">
        <div class="flex justify-center items-center h-screen">
            <div
                class="max-w-screen-lg max-h-fit w-full p-8 bg-stone-400 bg-opacity-20 rounded-lg border border-gray-50 shadow-md flex">
                <div class="w-1/2 flex justify-center items-center pr-28">
                    <div class="text-4xl font-bold text-white mb-4">Selamat Datang</div>
                </div>
                <div class="w-1/2 pl-4">
                    <form action="{{ route('authenticate') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-semibold text-white">Masukkan Email</label>
                            <input for="email" name="email" id="email" placeholder="Email"
                                class="w-full p-2 border border-gray-300 rounded" value="{{ Session::get('email') }}"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block mb-2 text-sm font-semibold text-white">Masukkan Kata Sandi</label>
                            <input type="password" name="password" id="password"
                                class="w-full p-2 border border-gray-300 rounded" required>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="rememberMe" class="mr-2">
                                <label for="rememberMe" class="text-xs text-white">Biarkan tetap masuk</label>
                            </div>
                            <a href="#" class="text-xs text-teal-950 hover:underline">Lupa kata sandi?</a>
                        </div>
                        @if ($errors->any())
                            <div class="flex text-white font-bold mb-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="flex justify-between items-center">
                            <button type="submit"
                                class="w-full bg-white text-black font-bold py-2 px-4 rounded">Masuk</button>
                        </div>
                        <div class="flex justify-center items-center mt-3 mb-3">
                            <p class="font-semibold text-xs text-white">Atau masuk melalui</p>
                        </div>
                        <div class="flex-row justify-between items-center mt-3 mb-3">
                            <button type="submit"
                                class="w-full bg-white text-black font-bold py-2 px-4 rounded">SSO</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
