@extends('components.template')

@section('title', 'Register')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-pink-100">
        <div class="bg-pink p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-4">Halaman Registrasi</h1>
            <p class="mb-4">Silakan daftar untuk membuat akun</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-pink-700">Nama</label>
                    <input type="text" id="name"  class="mt-1 block w-full px-3 py-2 border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-pink-700">Email</label>
                    <input type="email" id="email" class="mt-1 block w-full px-3 py-2 border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-pink-700">Password</label>
                    <input type="password" id="password"  class="mt-1 block w-full px-3 py-2 border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Daftar</button>
            </form>
            <p class="text-center mt -4"> udah punya akun kah? <a href="/login" class="text-blue-600 underline"> Masuk sini</a></p>
        </div>
    </div>
@endsection
