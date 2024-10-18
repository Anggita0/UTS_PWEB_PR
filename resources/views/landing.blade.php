{{-- @extends('components.template')

@section('title', 'Landing Page')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-white-100">
        <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center">
            <h1 class="text-3xl font-bold mb-4">Selamat Datang di Aplikasi Kami!</h1>
            <p class="mb-4">Ini adalah halaman landing. Silakan login untuk melanjutkan.</p>
            <a href="{{ route('login') }}" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Login</a>
        </div>
    </div>
@endsection --}}

@extends('components.template')

@section('title', 'Landing Page')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-white">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang</h1>
            <p class="mb-6">Web Sederhana Tugas PWEB.</p>
            <a href="{{ route('register') }}" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">YUKSS</a>
            {{-- <a href="{{ route('login') }}" class="bg-gray-300 text-black py-2 px-4 rounded-md hover:bg-gray-400">Login</a> --}}
        </div>
    </div>
@endsection

