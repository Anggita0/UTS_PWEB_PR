@extends('components.template')

@section('title', 'Landing Page')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-pink-200">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang</h1>
            <p class="mb-6">Web Sederhana Tugas PWEB.</p>
            <a href="{{ route('register') }}" class="bg-pink-600 text-white py-2 px-4 rounded-md hover:bg-pink-700">YUKSS</a>
        </div>
    </div>
@endsection

