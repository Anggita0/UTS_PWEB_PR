{{-- @extends('components.template')

@section('title', 'Login')

@section('content')
    <h1>Halaman Login</h1>
    <p>Silakan login untuk melanjutkan</p>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
@endsection --}}

@extends('components.template')

@section('title', 'Login')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-pink-100">
        <div class="bg-pink p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-4">Halaman Login</h1>
            <p class="mb-4">Silakan login untuk melanjutkan</p>
            <form action="{{ route('login.post') }}" method="POST"> <!-- Pastikan menggunakan route login.post -->
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-pink-700">Email</label>
                    <input type="email" id="email" class="mt-1 block w-full px-3 py-2 border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-pink-700">Password</label>
                    <input type="password" id="password" class="mt-1 block w-full px-3 py-2 border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Login</button>
            </form>
            @if ($errors->any())
                <div class="mt-4 text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
