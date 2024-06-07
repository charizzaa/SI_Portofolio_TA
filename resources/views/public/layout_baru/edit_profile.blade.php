@extends('public.layout_baru.layouts')
@section('content')

<div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
    <div class="flex justify-center">
        <div class="relative">
            <img src="{{ asset('asset/Ellipse 66.png') }}" alt="Profile Picture" class="w-32 h-32 rounded-full object-cover">
                <button class="absolute bottom-0 right-0 bg-green-500 text-white p-2 rounded-full focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </button>
            </div>
        </div>
        <form class="mt-6">
            <div class="mb-4">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Nama Depan</label>
                <input type="text" id="first-name" name="first_name" value="Charizza Thunjung" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                <input type="text" id="last-name" name="lastname" value="Sukmana Putra" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="charizzathunjung@gmail.com" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Simpan Perubahan</button>
        </form>
    </div>